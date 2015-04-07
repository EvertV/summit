<!-- Header -->
<div><?php include('header.php');?></div>
		<title>Home - Summit1G</title>		
	</head>
	<body>
<!-- Nav -->
<div><?php include('nav.php');?></div>
<!-- Main -->
	<div id="container">
		<!-- Stream -->
		<iframe 
			id="player" 
			type="text/html" 
			width="1280" 
			height="720"
			src="http://www.twitch.tv/summit1g/embed"
			frameborder="0">
		</iframe>
		<!-- Chat -->
		<iframe 
			frameborder="0" 
			scrolling="yes" 
			id="chat_embed" 
			src="http://www.twitch.tv/summit1g/chat" 
			height="720" 
			width="500">
		</iframe>
	</div>
<!-- Footer -->
<div><?php include('footer.php');?></div>