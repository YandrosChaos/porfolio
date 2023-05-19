<?php 

	$path=$_SERVER['SCRIPT_FILENAME'];

	if(strcmp(basename($path),'index.php')==0) require_once(dirname($path).'/plugin/contact-form/config.php');
	else require_once(dirname($path).'/../plugin/contact-form/config.php');
?>

<style>
	a:hover{
		text-decoration: none; /* no underline */
	}

	img{
		width: 64px;
		height: 64px;
		margin-right: 5%;
		margin-left: 5%;
	}

	.zoom {
		transition: transform 1s; /* Animation */
	}

	.zoom:hover {
		-ms-transform: scale(1.5) rotate(360deg); /* IE 9 */
  		-webkit-transform: scale(1.5) rotate(360deg); /* Safari 3-8 */
  		transform: scale(1.5) rotate(360deg); 
	}

	.center{
		display:flex;
		justify-content: center;
  		align-items: center;
	}

	.center a {
		margin: 0 5%;
	}
</style>

<div class="page-contact clear-fix">
	
	<!-- Header + subtitle -->
	<h1>Contact</h1>
	<p class="subtitle-paragraph">
		If you just want to say hello or ask a question,
		<span class="bold">please send me a short message.</span>
	</p>
	<!--/ Header + subtitle -->
	
	<!-- Personal details + Google map -->
	<h3>On the map</h3>
	<div class="clear-fix contact-details">
		
		<div class="contact-details-about">
			
			Victor Gonzalez<br/>
			<!-- Quai Henri IV<br/> -->
			28300 Aranjuez, Spain
			
			<ul class="no-list">
				<!-- <li class="icon-2 icon-2-1">T: 877 123 0223</li>
				<li class="icon-2 icon-2-2">F: 877 123 0224</li>				 -->
				<li class="icon-2 icon-2-3">victor.develops@gmail.com</li>			
			</ul>
			
		</div>
		
		<div class="contact-details-map">
			<div class="contact-details-map-arrow"></div>
			<div id="map"></div>
		</div>
		
	</div>
	<!-- /Personal details + Google map -->
	
	<!-- Contact -->
	<h3>Contact</h3>
	<div class='center w-100'>
	<a href="https://www.linkedin.com/in/victor-develops/" target='_blank'>
		<img src="image/icon/icon-social/icon_social_linkedin.png" alt="Linkedin logo not found" class='zoom'>
	</a>
	
	<a href="mailto:victor.develops@gmail.com">
		<img src="image/icon/icon-social/icon_social_email.png" alt="Email logo not found" class='zoom'>
	</a>
	</div>
	<!-- /Contact -->
	
</div>