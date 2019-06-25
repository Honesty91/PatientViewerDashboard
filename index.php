<!--Header -->
<?php include('header.php'); ?>
<!--Banner -->
<div>
    <img src="admin/images/banner.PNG"  class='center responsive' >
    <div class="titlebar" id="titlefont1">Patient Viewer </div>
    <div class="titlebars" id="titlefont2" >Malawi Integrated Dashboard Patient v0.1.</div>
</div>
<!-- content  -->
<body id="content_wrapper">
    <div class="container">
        <div class="row featured">
            <div class="col-md-2 col-xs-12">
                <!--free -->
            </div>
            <div class="col-md-5 col-xs-12">
            <div><?php include('search.php'); ?></div>
            </div>
            
        </div>

            <div><?php include('title_index.php'); ?></div>
    </div>
   

    <?php include('footer.php'); ?>
    <?php include('script.php'); ?>
</body>
</html>