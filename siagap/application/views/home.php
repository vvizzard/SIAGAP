<!DOCTYPE html>
<html>
  <head> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>SIAGAP</title>
    <meta name="description" content="Système d'Information et d'Aide à la Gestion des Aires Protégées Madagascar">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.sea.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url(); ?>assets/img/favicon.ico">
	<!-- leaflet -->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.5.1/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
   integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
   crossorigin=""></script>
	<!-- fin leaflet -->
	<!-- bootstrap-slider -->
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/css/bootstrap-slider.min.css"/>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">SIA</strong><strong>GAP</strong><span style="font-size:10px;">|Système d'Information et d'Aide à la Gestion des Aires Protégées Madagascar</span></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <!--<button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>-->
          </div>
          <div class="right-menu list-inline no-margin-bottom">    
            <div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>

			<div class="list-inline-item"><a href="#" class="nav-link">A propos</a></div>
			<div class="list-inline-item"><a href="#" class="nav-link">Comment utiliser?</a></div>
            <div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><span class="">A savoir</span></a>
              <div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="content">Termes et conditions</div></a><a href="#" class="dropdown-item message d-flex align-items-center">
                  <div class="content">Mention légale</div></a>
			    </div>
            </div>
			<div class="list-inline-item"><a href="#" class="nav-link">Comment utiliser?</a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <!--<div class="sidebar-header d-flex align-items-center">
        </div>-->
        <!-- Sidebar Navidation Menus--><span class="heading">INFORMATION</span>
        <ul class="list-unstyled">
          <!--<li class="active"><a href="index.html"> <i class="icon-home"></i>Aires protégées </a></li>
          <li><a href="tables.html"> <i class="icon-grid"></i>Catégories </a></li>
          <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Gestionnaires </a></li>
          <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>-->
          <li class=""><a href="#ap-dropdown" aria-expanded="false" data-toggle="collapse" style="color:white;"> <i class="icon-windows"></i>Aires protégées </a>
            <ul id="ap-dropdown" class="collapse list-unstyled ">
			  <!--<li><a href="#">
				<div class="custom-control custom-checkbox mr-sm-2">
				<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
				<label class="custom-control-label" for="customControlAutosizing">Population/superficie</label></a>
			  </div>
			  </li>-->
              <li><a href="#">Ambodivahibe</a></li>
              <li><a href="#">Ampasindava</a></li>
            </ul>
          </li>
		  <li class=""><a href="#categorie-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Catégories </a>
            <ul id="categorie-dropdown" class="collapse list-unstyled ">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
            </ul>
          </li>
		  <li class=""><a href="#gestionnaires-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Gestionnaires </a>
            <ul id="gestionnaires-dropdown" class="collapse list-unstyled ">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
            </ul>
          </li>
		  <li class=""><a href="#subsistances-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Subsistances </a>
            <ul id="subsistances-dropdown" class="collapse list-unstyled ">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
            </ul>
          </li>
		  <li class=""><a href="#pressions-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Pressions </a>
            <ul id="pressions-dropdown" class="collapse list-unstyled ">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
            </ul>
          </li>
		  <li class=""><a href="#cibles-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Cibles </a>
            <ul id="cibles-dropdown" class="collapse list-unstyled ">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
            </ul>
          </li>
        </ul><span class="heading">Indices</span>
        <ul class="list-unstyled">
          <li> 
			<div class="col-auto my-1">
			  <div class="custom-control custom-checkbox mr-sm-2">
				<input type="checkbox" class="custom-control-input" id="customControlAutosizing">
				<label class="custom-control-label" for="customControlAutosizing">Population/superficie</label>
			  </div>
			</div> 
		  </li>
          <li class="form-control" style="border: none;">
			<label for="ap-by-year">Filtrer par date de création de l'AP</label>
			<input id="ap-by-year" type="text" class="form-control" value="" data-slider-min="2000" data-slider-max="2019" data-slider-step="1" data-slider-value="[2000,2019]"/>
		  </li><br>
		  <li class="form-control" style="border: none;">
			<label for="ap-by-staff-by-ha">Filtrer par Staff/Ha</label>
			<input id="ap-by-staff-by-ha" type="text" class="form-control" value="" data-slider-min="0" data-slider-max="10" data-slider-step="1" data-slider-value="[0,10]"/>
		  </li>
        </ul>
      </nav>
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        
        <section class="no-padding-bottom">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-6">
                <div id="map-placement" class="bar-chart block no-margin-bottom">
                </div>
              </div>
			  <div class="col-lg-6">
                <div class="bar-chart block no-margin-bottom ap-detail">
				
					<ul class="nav nav-tabs" style="width: 108%;">
					  <li class="nav-item">
						<a class="nav-link active" data-toggle="tab" href="#profile">Profile</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#cc">CC</a>
					  </li>
					  <li class="nav-item">
						<a class="nav-link" data-toggle="tab" href="#">Aide à la décision</a>
					  </li>
					</ul>
					<img src="http://www.siagapmada.com/content/uploads/2018/07/Paysage-2-300x114.jpg" class="resized" style="width:103%;">
					<div class="tab-content">
					  <div class="tab-pane container-fluid active righ_side_tabpane" id="profile" style="">
					  <nav id="r_sidebar">
						<ul class="list-unstyled">
						  <li class="righ_side_dropdown"><a href="#profil-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows righ_side_list"></i>Profil </a>
							<ul id="profil-dropdown" class="collapse list-unstyled ">
							  <table class="table r_table" style="">
								<tr>
									<td>Nom<td>
									<td>Ambodivahibe protected area<td>
								</tr>
								<tr>
									<td>Catégorie<td>
									<td>V (IUCN)<td>
								</tr>
								<tr>
									<td>Administrateur<td>
									<td>CI<td>
								</tr>
								<tr>
									<td>Création<td>
									<td>2015<td>
								</tr>
								<tr>
									<td>Superficie<td>
									<td>23.794Ha<td>
								</tr>
								<tr>
									<td>Contact<td>
									<td>
										<ul class="list-unstyled">
											<li>RAZAFIMANDIMBY Yacinthe </li>
											<li>yrazafimandimby@conservation.org </li>
											<li>034 02 330 06</li>
										</ul>
									<td>
								</tr>
								<tr>
									<td>Vision<td>
									<td>23.794Ha<td>
								</tr>
								<tr>
									<td>Mission<td>
									<td>Conserving and protecting unique biodiversity and natural resources in and around the new protected area<td>
								</tr>
								<tr>
									<td>But<td>
									<td>
										<ol style="padding-left: 16px;">
											<li>Manage marine resources using legal tools </li>
											<li>Ensure effective management of the new protected area through formal structures composed of fishing communities </li>
											<li>Develop tourism that will contribute to the sustainable financing of the NAP </li>
											<li>Improve the incomes of the local population while decreasing the pressures in the new protected area (promotion of AGRs)</li>
										</ol>
									<td>
								</tr>
								
							</table>
							</ul>
						  </li>
						  <li class="righ_side_dropdown"><a href="#contexte-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows righ_side_list"></i>Contexte </a>
							<ul id="contexte-dropdown" class="collapse list-unstyled ">
							  <table class="table r_table">
								<tbody>
								<tr>
								<td><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Region</span></span></strong></td>
								<td><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">: DIANA</span></span></td>
								</tr>
								<tr>
								<td><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">District</span></span></strong></td>
								<td><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">: Diego II</span></span></td>
								</tr>
								<tr>
								<td><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Town&nbsp;</span></span></strong></td>
								<td><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">: Ramena, Mahavanona</span></span></td>
								</tr>
								<tr>
								<td><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Fokontany&nbsp;</span></span></strong></td>
								<td><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">: 4 Fokontany (Ambodivahibe, Ivovona, Ambavarano, Ampondrahazo)</span></span></td>
								</tr>
								<tr>
								<td><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Demography</span></span></strong></td>
								<td><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">: 1,850 Inhabitants</span></span></td>
								</tr>
								</tbody>
								</table>
							</ul>
						  </li>
						  <li class="righ_side_dropdown"><a href="#cible-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows righ_side_list"></i>Cible </a>
							<ul id="cible-dropdown" class="collapse list-unstyled ">
							  <div class="row">
								  <div class="col-md-4"><img src="http://www.siagapmada.com/content/uploads/2018/07/aquarium-1.jpg" class="resized"><h4>Récifs coralliens</h4></div>
								  <div class="col-md-4"><img src="http://www.siagapmada.com/content/uploads/2018/07/images-3.jpg" class="resized"><h4>Forêt litoralle</h4></div>
								  <div class="col-md-4"><img src="http://www.siagapmada.com/content/uploads/2018/07/ito2_edited_2018.jpg" class="resized"><h4>Mangroves</h4></div>
								  <div class="col-md-4"><img src="http://www.siagapmada.com/content/uploads/2018/07/oiseaux-marins.jpg" class="resized"><h4>Oiseaux marins</h4></div>
								  <div class="col-md-4"><img src="http://www.siagapmada.com/content/uploads/2018/07/chauve-souris.jpg" class="resized"><h4>chauves souris</h4></div>
							  </div>
							  <style>
								.resized {
									width:100%;
								}
							  </style>
							</ul>
						  </li>
						  <li class="righ_side_dropdown"><a href="#intrants-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows righ_side_list"></i>Intrants </a>
							<ul id="intrants-dropdown" class="collapse list-unstyled ">
							  <li><a href="#">Page</a></li>
							  <li><a href="#">Page</a></li>
							  <li><a href="#">Page</a></li>
							</ul>
						  </li>
						  <li class="righ_side_dropdown"><a href="#resultat-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows righ_side_list"></i>Résultats </a>
							<ul id="resultat-dropdown" class="collapse list-unstyled ">
							  <li><a href="#">Page</a></li>
							  <li><a href="#">Page</a></li>
							  <li><a href="#">Page</a></li>
							</ul>
						  </li>
						</ul>
						</nav>
					  </div>
					  <div class="tab-pane container fade" id="cc">
						trililiilili
					  </div>
					</div>
                </div>
              </div>
            </div>
          </div>
        </section>
        
        <footer class="footer">
          <div class="footer__block block no-margin-bottom">
            <div class="container-fluid text-center">
              <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
              <p class="no-margin-bottom">2019 &copy; SIAGAP. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>.</p>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/charts-home.js"></script>
    <script src="<?php echo base_url(); ?>assets/js/front.js"></script>
	<!-- map -->
	<script src="<?php echo base_url(); ?>assets/js/map-controller.js"></script>
	<!-- bootstrap-slider -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/bootstrap-slider.min.js"></script>
	
	<script>
		$("#ap-by-year").slider({});
		$("#ap-by-staff-by-ha").slider({});
	</script>
	
  </body>
</html>