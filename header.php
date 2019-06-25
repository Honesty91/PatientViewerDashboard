<!DOCTYPE html>
<html class="no-js">
    <head>
<title>Patient Viewer Dashboard</title>	
<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
<meta name="description" content="Patient Viewer Dashboard">
<meta name="author" content="">
<meta charset="UTF-8">

<!-- Bootstrap -->
<link href="images/logo.png" rel="icon" type="image">
<link href="admin/bootstrap/css/index_background.css" rel="stylesheet" media="screen"/>
<link href="admin/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen"/>
<link href="admin/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen"/>
<link href="admin/bootstrap/css/font-awesome.css" rel="stylesheet" media="screen"/>
<!-- <link href="admin/bootstrap/css/my_style.css" rel="stylesheet" media="screen"/>-->
<link href="admin/vendors/easypiechart/jquery.easy-pie-chart.css" rel="stylesheet" media="screen"/>
<link href='style.css' rel='stylesheet' type='text/css'>

<link href="admin/assets/styles.css" rel="stylesheet" media="screen"/>

<!-- index css -->
<!--<link href="admin/bootstrap/css/index.css" rel="stylesheet" media="screen"/>-->


<link rel="stylesheet" type="text/css" href="admin/vendors/bootstrap-wysihtml5/src/bootstrap-wysihtml5.css"/>
<script src='admin/bootstrap/js/jquery-3.0.0.js' type='text/javascript'></script>
<script src="admin/vendors/jquery-1.9.1.min.js"></script>
<script src="admin/vendors/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<meta id="Viewport" name="viewport" content="initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
<script>
$(document).ready(function(){
$(document).ready(function() {
$('.search_result_content').hide();
});
$('#search').keyup(function(){

// Search text
var text = $(this).val();

// Hide all content class element
$('.search_result_content').show();

// Search 
$('.search_result_content .title:contains("'+text+'")').closest('.search_result_content').show();

});
});
</script>

<script type="text/javascript">
$(function(){
if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
var ww = ( $(window).width() < window.screen.width ) ? $(window).width() : window.screen.width; //get proper width
var mw = 480; // min width of site
var ratio =  ww / mw; //calculate ratio
if( ww < mw){ //smaller than minimum size
$('#Viewport').attr('content', 'initial-scale=' + ratio + ', maximum-scale=' + ratio + ', minimum-scale=' + ratio + ', user-scalable=yes, width=' + ww);
}else{ //regular size
$('#Viewport').attr('content', 'initial-scale=1.0, maximum-scale=2, minimum-scale=1.0, user-scalable=yes, width=' + ww);
}
}
});
</script>
</head>