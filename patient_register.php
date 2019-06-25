<?php include('header.php'); ?>
<div>
		<img src="admin/images/banner.PNG" class='center'>
		<div class="titlebar" id="titlefont1">Patient Viewer </div>
		<div class="titlebars" id="titlefont2" >Malawi Integrated Dashboard Patient v0.1.</div>
		<a href="index.php"><button class="button"><h5><strong>Back To Home<strong></h5></div></button></a>
</div>



<body id="content_wrapper">
	<div class="container">
		<div class="row featured">
			<div class="col-md-2 col-xs-12">
			<!-- nothing-->
			</div>
			<div class="col-md-5 col-xs-12">
			<div><?php include('search.php'); ?></div>
			</div>
		</div>
		<div class="boundary"></div>
		<div class="boundary"></div>
		<div class="row featured">
			<div class="col-md-2 col-xs-12">
			<!-- nothing-->
			</div>
			<div class="col-md-6 col-xs-12">
			<div class="title_index"><?php include('patient_details.php'); ?></div>
			</div>
			<div class="col-md-4 col-xs-12">
			<div class="title_index"><?php include('patient_profile.php'); ?></div>	
			</div>
		</div>
    </div>
	<?php include('footer.php'); ?>
	<?php include('script.php'); ?>
</body>
</html>