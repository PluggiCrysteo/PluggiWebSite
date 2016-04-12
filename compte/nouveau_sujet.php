
	
	<center>
	</br>
	</br>
	</br>
	</br>
	<form class="contact-form" action="membre.php?page=nouveau_sujet_traitement&lang=<?php echo $_GET['lang']; ?>" method='post'>
	<table align="center" border="0">
		<?php echo TXT_1_NEW_SUBJECT; ?><input type="text" name="nom" class="form-control" />
		<?php echo TXT_2_NEW_SUBJECT; ?><TEXTAREA name="contenu" class="form-control" rows=4 cols=40></TEXTAREA>
		<td colspan="2" align="center"><input type="submit" class="button button-default" value="   Valider   "></td>
	</table>
	</form>
	</center>
