
<head>
	<script type="text/javascript" src="assets/js/jquery-1.11.0.min.js"></script>
	<script type="text/javascript" src="assets/js/jquery.leanModal.min.js"></script>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" />
	<link type="text/css" rel="stylesheet" href="assets/css/styleFenetre.css" />
</head>

<body>

	<a id="modal_trigger" href="#login" class="btn">Click here to Login or register</a>

	<div id="login" class="popupContainer" style="display:none;">
		<header class="popupHeader">
			<span class="header_title">Merci de votre message</span>
			<span class="modal_close"><i class="fa fa-times"></i></span>
		</header>
		
		<section class="popupBody">
		Nous vous répondrons dès que possible.
		</section>
		
<script type="text/javascript">
	$("#modal_trigger").leanModal({top : 200, overlay : 0.6, closeButton: ".modal_close" });

</script>
</div>
	
	
	</body>