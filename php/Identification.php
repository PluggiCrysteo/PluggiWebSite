<meta charset="utf-8">

<?php

session_start();
include_once('Database.php');

$identification = new Identification();

class Identification {

    private $idUser;

    function __construct()
    {
        if (isset($_SESSION['id_user'])) {
            $this->idUser = $_SESSION['id_user'];
        }
    }

    public function getIdUser(){
        $USER=$this->idUser;
    }

    public function connectUser($idUser){
        $this->idUser=$idUser;
        $_SESSION['id_user']=$idUser;

    }

    public function disConnectUser(){
        $this->idUser=null;
        $_SESSION['id_user']=null;
    }


    public function checkIdentification($pageName){

		$this->idUser=null;
        if (!isset($_SESSION['id_user'])) {
	    			
			if (isset($_POST['email']) && isset($_POST['password'])){
				$email = $_POST['email'];
				$pwd = $_POST['password'];	
			}
			else {
				$email = "";
				$pwd = "";
			}

            $this->idUser = $this->verifLogin($email, $pwd);

            if ($this->idUser) {
                $_SESSION['id_user'] = $this->idUser;
            }
        } else {
            $this->idUser = $_SESSION['id_user'];
        }
        if ($this->isUserAllowed($pageName)) {
			return true;
        } else if ($this->idUser ==null){
            $this->printLogin();
        } else {
		
				if ($_GET["lang"]=='fr') {
					// on affiche un petit message
					echo '<body onLoad="alert(\'Vous n êtes pas autorisé à accéder à cette page\')">';
					// puis on le redirige vers la page d'accueil
					echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=fr">';
				}
				else {
					// on affiche un petit message
					echo '<body onLoad="alert(\'Vous n êtes pas autorisé à accéder à cette page\')">';
					// puis on le redirige vers la page d'accueil
					echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=en">';
				}
	
            die;
        }

    }

    private function verifLogin($email, $pwd) {
        try {
            $encryptPwd = $pwd;// md5($pwd);
            $bdd = Database::getDb();
            $query = "select id_user,password from users where email=:email";
            $req=$bdd->prepare($query);
            $req->execute(array("email" => $email));
            while ($result = $req->fetch()) {
                if ($encryptPwd == $result['password']) {
                    return $result['id_user'];
                }
            }
        }catch (PDOException $e) {
            echo("<pre>");
            var_dump($e);
            return null;
        }
    }

    private function isPageAllowToAll($pageName) {
        try {
            $bdd = Database::getDb();
			
            $query = "select profile.profile_name
                    from page
                    join page_profile link on link.id_page=page.id_page
                    join profile on profile.id_profile=link.id_profile
                    where page.page_name=:page_name and profile.profile_name='ALL'";
            $req=$bdd->prepare($query);
            $req->execute(array("page_name" => $pageName));
            if( $req->fetch()) {
                return true;
            }
            return false;
        }catch (PDOException $e) {
            echo("<pre>");
            var_dump($e);
            return false;
        }
    }

    private function printLogin(){
        $pageName;
		if ($_GET["lang"]=='fr') {
			// on affiche un petit message
			echo '<body onLoad="alert(\'Les informations renseignées sont fausses...\')">';
			// puis on le redirige vers la page d'accueil
			echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=fr">';
		}
		else {
			// on affiche un petit message
			echo '<body onLoad="alert(\'Les informations renseignées sont fausses...\')">';
			// puis on le redirige vers la page d'accueil
			echo '<meta http-equiv="refresh" content="0;URL=../vitrine.php?lang=en">';
		}
        die;
    }

    public function isAdmin($idUser) {
        try {
            $bdd = Database::getDb();

            $query = "select distinct 1 from user_profile
                    join profile on user_profile.id_profile=profile.id_profile
                    where profile.profile_name=:profile_name and user_profile.id_user=:id_user";
            $req = $bdd->prepare($query);
            $req->execute(array("id_user" => $idUser, "profile_name" => "ADMIN"));

            if ($result = $req->fetch()) {
                return true;
            }
        } catch (PDOException $e) {
            echo("<pre>");
            var_dump($e);
        }
        return false;
    }

   
    public function isUserAllowed($pageName)
    {
        if (!$this->isPageAllowToAll($pageName)){
            try {
                $bdd = Database::getDb();

                $query = "select distinct 1 from user_profile
                    join profile on user_profile.id_profile=profile.id_profile
                    join page_profile on profile.id_profile=page_profile.id_profile
                    join page  on page_profile.id_page=page.id_page
                    where page.page_name=:page_name and user_profile.id_user=:id_user";
                $req = $bdd->prepare($query);
                $req->execute(array("id_user" => $this->idUser, "page_name" => $pageName));

                if ($result = $req->fetch()) {
                    return true;
                }
            } catch (PDOException $e) {
                echo("<pre>");
                var_dump($e);
            }
        } else {
            return true;
        }

        return false;

    }
}
