<?php
  // session_start();
	if (SUPRA !== 1) die('not way!');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="cache-control" content="no-cache">
	<meta http-equiv="pragma" content="no-cache">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,viewport-fit=cover">
	<!-- <title>Supra Pagebuilder</title> -->
	<title>Influway Sitebuilder</title>

	<link rel="icon" href="images/favicons/favicon.png" type="image/x-icon"/>
	<link rel="apple-touch-icon" href="images/favicons/apple-touch-icon.png">
	<link rel="apple-touch-icon" sizes="72x72" href="images/favicons/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="images/favicons/apple-touch-icon-114x114.png">

	<link rel="stylesheet" href="css/lib/bootstrap.min.css" />
    <link rel="stylesheet" href="css/lib/fx.css" />
	<link rel="stylesheet" href="css/lib/spectrum.css" />
	<link rel="stylesheet" href="css/lib/codemirror.css" />
    <link rel="stylesheet" href="css/fonts.css" />
	<link rel="stylesheet" href="css/main.css" />
	<link rel="stylesheet" href="css/preloader.css" />
	<link rel="stylesheet" href="css/adnan.css" />
	<link rel="stylesheet" href="css/responsive.css" />
	<!-- FONT AWESOME -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
</head>
<body class="first-show">
<script src="js/lib/jquery-2.1.4.min.js"></script>

<div>

		<div class="menu_top">
			<div class="container">
				<div class="row">
					<div class="col-12 col-md-6 col-lg-6">
						<div class="head_login ">										
							<div class="menu_top_right">
								<!-- mobile menu -->
								<div class="d-md-none d-lg-none">
									<div  id="icon_click" class="mobile_logo_icon">
										<i class="icon_click fas fa-bars"></i>
										<i class="icon_rmv fas fa-times"></i>
									</div>
								</div>
								<!-- mobile menu -->
								
								<!-- mobile menu -->
								<div class="logo d-lg-none d-md-none">
									<a href="home.html">
										<div class="logo_img">
											<img src="https://app.influway.com/images/reg_logo.png" alt="image">
										</div>
									</a>
								</div>
								<div class="menu_serch_icon d-md-none">
									<i class="icon_one fas fa-search"></i>
									<i class="icon_two fas fa-search"></i>
								</div>
								<!-- mobile menu -->
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header">
			<div class="menu_all" id="myHeader">
				<div class="container">
					<div class="menu_influway">
						
						<div class="menu_right d-flex">
							<div class="menu_right_list">
								<ul class="menu_right_ul dis_flx">
									

                  <?php 
                    if (isset($_SESSION['user']) &&  $_SESSION['user']['role']==2) {
                      // $user_id = $_SESSION['user']['id'];
                      // echo $user_id;
                    // }
                     
                    
                  ?>
									<li class="dis_fx_cntr">
										<a href="https://app.influway.com/">Explore</a>
									</li>
									<li class="arrow dis_fx_cntr">
										<!-- <a href="https://app.influway.com/lookbook">LookBook</a> -->
                    <?php
                      echo '<a href="https://app.influway.com/'.$_SESSION['user']['username'].'">LookBook</a>'
                    ?>
									</li>
									<li>
										<!-- <a href="https://app.influway.com/blog">Blog</a> -->
                    <?php
                      echo '<a href="https://app.influway.com/'.$_SESSION['user']['username'].'/blog'.'">Blog</a>'
                    ?>
									</li>
									<li>
										<!-- <a href="https://app.influway.com/vlog">Vlog</a> -->
                    <?php
                      echo '<a href="https://app.influway.com/'.$_SESSION['user']['username'].'/vlog'.'">Vlog</a>'
                    ?>
									</li>
									<!-- <li class="arrow dis_fx_cntr">
                    <?php
                      // echo '<a href="https://app.influway.com/'.$_SESSION['user']['username'].'/status'.'">Status</a>'
                    ?>
									</li> -->

                  <?php
                    if ($_SESSION['user']['user_own_site']!=null) {
                      $username = $_SESSION['user']['username'];
                      echo '<li class="arrow dis_fx_cntr">
                              <a href="https://site.influway.com/sites/'.$username.'">My Site</a>
                            </li>';
                    }
                  ?>
                  

                  <li>
										<a href="https://app.influway.com/store">Store</a>
									</li>
                  <?php 
                    }else{
                  ?>
                  <li class="dis_fx_cntr">
										<a href="https://app.influway.com/login">Login</a>
									</li>
                  <?php 
                    }
                  ?>

                  


								</ul>
							</div>
						</div>
						<div class="logo">
							<a href="https://app.influway.com/">
								<div class="logo_img">
									<img src="https://app.influway.com/images/reg_logo.png" alt="image">
								</div>
							</a>
						</div>
						<!-- <div class="menu_srch dis_flx">
							<div class="menu_srch_one">
								<i class="fas fa-search search_btn"></i>
								<input type="text" name="" placeholder="Search">
								
							</div>
							<div class="menu_srch_two">
								<i class="fas fa-user"></i>
							</div>
						</div> -->
					</div>
				</div>
			</div>
		</div>
		<!-- MOBILE -->
		<div class="all_toggles"></div>
		<div class="mobile_menu_dropdown d-lg-none d-md-none">										
			<div class="mobile_menu_dropdown_all">
        <?php 
          if (isset($_SESSION['user']) &&  $_SESSION['user']['role']==2) {
            // $user_id = $_SESSION['user']['id'];
            // echo $user_id;
          // }
          
        ?>
				<!-- iteam -->
				<div class="all_range_iteam">
					<div class="mbl_select_iteam">
						<div class="mbl_select_iteam_in">
							<a href="https://app.influway.com/" class="mbl_iteam_title">Explore</a>
						</div>
					</div>
				</div>
				<!-- iteam -->
					<!-- iteam -->
				<div class="all_range_iteam">
					<div class="mbl_select_iteam">
						<div class="mbl_select_iteam_in">
							<!-- <a href="https://app.influway.com/lookbook" class="mbl_iteam_title">LookBook</a> -->
              <?php
                echo '<a href="https://app.influway.com/'.$_SESSION['user']['username'].'">LookBook</a>'
              ?>
						</div>
					</div>
				</div>
				<!-- iteam -->

					<!-- iteam -->
				<div class="all_range_iteam">
					<div class="mbl_select_iteam">
						<div class="mbl_select_iteam_in">
							<!-- <a href="https://app.influway.com/blog" class="mbl_iteam_title">Blog</a> -->
              <?php
                echo '<a href="https://app.influway.com/'.$_SESSION['user']['username'].'/blog'.'">Blog</a>'
              ?>
						</div>
					</div>
				</div>
				<!-- iteam -->

					<!-- iteam -->
				<div class="all_range_iteam">
					<div class="mbl_select_iteam">
						<div class="mbl_select_iteam_in">
							<!-- <a href="https://app.influway.com/vlog" class="mbl_iteam_title">Vlog</a> -->
              <?php
                echo '<a href="https://app.influway.com/'.$_SESSION['user']['username'].'/vlog'.'">Vlog</a>'
              ?>
						</div>
					</div>
				</div>
				<!-- iteam -->
					<!-- iteam -->
				<!-- <div class="all_range_iteam">
					<div class="mbl_select_iteam">
						<div class="mbl_select_iteam_in">
              <?php
                // echo '<a href="https://app.influway.com/'.$_SESSION['user']['username'].'/status'.'">Status</a>'
              ?>
						</div>
					</div>
				</div> -->
				<!-- iteam -->
					<!-- iteam -->
				<div class="all_range_iteam">
					<div class="mbl_select_iteam">
						<div class="mbl_select_iteam_in">
							<a href="https://app.influway.com/store" class="mbl_iteam_title">Store</a>
						</div>
					</div>
				</div>
				<!-- iteam -->
        <?php 
          }else{
        ?>
					<!-- iteam -->
				<div class="all_range_iteam">
					<div class="mbl_select_iteam">
						<div class="mbl_select_iteam_in">
							<a href="https://app.influway.com/login" class="mbl_iteam_title">Login</a>
						</div>
					</div>
				</div>
				<!-- iteam -->
        <?php 
          }
        ?>
			</div>
		</div>
		<!-- MOBILE -->
</div>

<style id="builder-style"></style>
<div class="supra-preloader">
	<img src="images/logo.png" srcset="images/logo@2x.png 2x" alt="suprapagebuilder"/>
	<div class="progress-bar-s">
		<div class="progress"><div class="load"></div></div>
	</div>
	<div class="rights">
		<p>&#169; 2018 <a href="http://multifour.com/" target="_blank">Multifour.com</a><br/>SUPRA 5.2.1</p>
	</div>
</div>
<aside class="left supra black"></aside>
<aside class="control-panel supra black">
	<div class="title d-flex justify-content-between align-items-center">
		<h3>Sections</h3>
		<i class="supra bookmark"></i>
	</div>
	<ul class="sections">
		<?php
			foreach ($this->groups as $group_name => $value) {
				echo "<li data-group=\"$group_name\">"
				     .$value['name'].
				     "</li>";
			}
		?>
	</ul>
</aside>
<div id="modal-thumb" class="supra">
    <div class="title">Page modals</div>
    <div class="container-thumb"></div>
</div>
<div class="wrap-iframe d-flex justify-content-center align-items-center">
	<div class="wrap viewing-desctop">
		<label>
			<span class="width" contenteditable="true"></span> x <span class="height" contenteditable="true"></span>
			<i class="rotate icon-blr-lg-mobile"></i>
		</label>
        <iframe id="main" src="./main.html"></iframe>
	</div>
</div>
<div id="modal-container" class="supra"></div>
<div id="modal-project-container" class="supra"></div>
<div id="modal-form-container" class="supra font-style-supra"></div>

<script>

// console.log('on load layout.php')
	<?php
    //TODO: this need for limiting the output of PHP's echo
    if (count($this->groups) > 10) {
        $part1 = array_slice($this->groups, 0, 10);
        $part2 = array_slice($this->groups, 10, count($this->groups));
        echo "sectionsPreview=".json_encode($part1).";\n";
        echo "sectionsPreview1=".json_encode($part2).";\n";
        echo "sectionsPreview = Object.assign(sectionsPreview, sectionsPreview1);\n";
        // echo "sectionsPreview\n";
    } else {
        // echo "sectionsPreview=".json_encode($this->groups).";\n";
    }
	echo "typographyFonts=".json_encode($this->fontsDropdown).";\n";
    echo "overAllJs=".json_encode($this->overAllJs).";\n";
	?>

	// Mobile Menu iteam select
$(document).ready(function(){

  $(".mbl_select_iteam_in").click(function(){
    $(this).toggleClass("pm").siblings().slideToggle(300);
  })


});

$(".icon_click").click(function() {
    $(".mobile_menu_dropdown").addClass("active");
    $("html").addClass("modal-open");
    $(".all_toggles").addClass("active");
    $(".icon_click").addClass("active");
    $(".icon_rmv").addClass("active");
});

$(".icon_rmv, .all_toggles").click(function() {
    $(".mobile_menu_dropdown").removeClass("active");
    $("html").removeClass("modal-open");
    $(".all_toggles").removeClass("active");
    $(".icon_rmv").removeClass("active");
    $(".icon_click").removeClass("active");
});

</script>
<script src="js/lib/popper.min.js"></script>
<script src="js/lib/jquery.nicescroll.min.js"></script>

<script src="js/lib/tether.min.js"></script>
<script src="js/lib/bootstrap.min.js"></script>
<script src="js/lib/spectrum.js"></script>

<script src="js/lib/codemirror.js"></script>
<script src="js/lib/javascript.js"></script>
<script src="js/lib/css.js"></script>
<script src="js/lib/htmlmixed.js"></script>
<script src="js/lib/xml.js"></script>

<script src="js/options.js"></script>
<script src="js/download.js"></script>
<script src="js/builder.min.js"></script>

</body>
</html>