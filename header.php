<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Simon Holst</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?php echo get_template_directory_uri();?>/assets/img/favicon.jpg" rel="icon">
  <link href="<?php echo get_template_directory_uri();?>/assets/img/apple-touch-icon.jpg" rel="apple-touch-icon">

 

  <!-- =======================================================
  * Template Name: EstateAgency - v2.2.1
  * Template URL: https://bootstrapmade.com/real-estate-agency-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

  <?php wp_head();?>
</head>

<body <?php body_class(); ?>

  <!-- ======= Property Search Section ======= -->
  <div class="click-closed"></div>
  <!--/ Form Search Star /-->
  <div class="box-collapse">
    <span class="close-box-collapse right-boxed ion-ios-close"></span>
    <div class="box-collapse-wrap form">

      <?php  get_search_form();?>
    </div>
  </div><!-- End Property Search Section -->

  <!-- ======= Header/Navbar ======= -->
  <nav class="navbar navbar-default navbar-trans navbar-expand-lg fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>

    <?php
        $prefix = get_option('simon-options');

        $desktop_logo = $prefix['desktop_header_logo'];
        $mobile_logo = $prefix['mobile_header_logo'];


    ?>


      <a class="navbar-brand text-brand mob-view" href="index.html"><img src="<?php echo $desktop_logo['url'];?>" alt=""></a>
      <button type="button" class="btn btn-link nav-search navbar-toggle-box-collapse d-lg-none" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
        <span class="fa fa-search" aria-hidden="true"></span>
      </button>
      <div class="navbar-collapse collapse " id="navbarDefault">
        <ul class="navbar-nav">
          <?php
            wp_nav_menu(array(
              'theme_location' =>'menu-1',
              
            ));
          
          ?>  

          <li class="nav-item center-content">
            <div class="logo-mid">
              <div class="brand-logo"> <a class="navbar-brand" href="<?php echo home_url("/");?>"><img src="<?php echo $mobile_logo['url'];?>" alt=""></a></div>
            </div>
          </li>
          <li class="nav-item right-align">
            
          <!-- <button type="button" class="btn btn-b-n navbar-toggle-box-collapse d-none d-md-block search-icon nav-link" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-expanded="false">
            <span class="fa fa-search" aria-hidden="true"></span>
          </button> -->
          </li>
          <!-- <li class="nav-item right-align">
            <a class="nav-link" href="blog-grid.html">Kontakt os</a>
          </li>
          <li class="nav-item right-align">
            <a class="nav-link" href="contact.html">Log ind</a>
          </li> -->
        </ul>
      </div>
    </div>
  </nav><!-- End Header/Navbar -->


    <div class="latest-post text-center">
        <h2><a href="https://simonholst.dk/vare/boerneplakater/abc-universet/">SE VORES NYE ABC PLAKAT MED UNIVERSET</a></h2>
    </div>
    <div class="top-info-bar">
		<div class="more-info">
		        <ul>
		            <li> <img src="https://simonholst.dk/wp-content/uploads/2021/02/Fragt-fra-39kr.png" alt=""> Fragt fra 39kr - Gratis ved 450kr.</li>
		            <li><img src="https://simonholst.dk/wp-content/uploads/2021/02/Dag-til-Dag-levering.png" alt=""> Dag til dag levering - Bestil inden kl. 15</li>
		            <li><img src="https://simonholst.dk/wp-content/uploads/2021/02/Returret.png" alt=""> 90 dages returret</li>
		            <li><img src="https://simonholst.dk/wp-content/uploads/2021/03/E-maerket.png" alt=""> Godkendt af e-mærket</li>
		           
		            <li><a href="https://dk.trustpilot.com/review/simonholst.dk "><img src="https://simonholst.dk/wp-content/uploads/2021/02/Trustpilot.png" alt=""> 5 stjerner på trustpilot</a></li>
		        </ul>
		</div>
		</div>
    <div class="top-info-bar show-m">
        <div class="more-info text-center">
                    <div class="slidingVertical">
  <span><img src="https://simonholst.dk/wp-content/uploads/2021/02/Fragt-fra-39kr.png" alt=""> Fragt fra 39kr - Gratis ved 450kr.</span>
  <span><img src="https://simonholst.dk/wp-content/uploads/2021/02/Dag-til-Dag-levering.png" alt=""> Dag til dag levering - Bestil inden kl. 15</span>
  <span><img src="https://simonholst.dk/wp-content/uploads/2021/02/Returret.png" alt=""> 90 dages returret</span>
  <span><img src="https://simonholst.dk/wp-content/uploads/2021/03/E-maerket.png" alt=""> Godkendt af e-mærket</span>
  <span><a href="https://dk.trustpilot.com/review/simonholst.dk "><img src="https://simonholst.dk/wp-content/uploads/2021/02/Trustpilot.png" alt=""> 5 stjerner på trustpilot</a></span>
</div>
        </div>			
    </div>
    <div class="container">
      