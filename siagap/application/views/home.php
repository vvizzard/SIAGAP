<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SIAGAP</title>
	<meta name="description" content="Système d'Information et d'Aide à la Gestion des Aires Protégées Madagascar">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="robots" content="all,follow">
	<meta name="google-site-verification" content="7xEDWj0NOCy50lB15hF4_Jpb2RmQkyhqIDTNdJ975MA" />
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148348775-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-148348775-1');
	</script>

	<!-- Bootstrap CSS-->
	<!-- <link rel="stylesheet" href="<?php echo base_url(); ?>assets/vendor/bootstrap/css/bootstrap.min.css"> -->
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
	crossorigin=""/>
	<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
	crossorigin=""></script>
	<!-- fin leaflet -->
	<!-- bootstrap-slider -->
	<link rel = "stylesheet" href = "https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/css/bootstrap-slider.min.css"/>
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      </head>
      <body style="color: white;">
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
      					<!-- Navbar Header--><a href="http://www.siagap.mg" class="navbar-brand">
      						<div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">SIA</strong><strong>GAP</strong><span style="font-size:10px;">|Système d'Information et d'Aide à la Gestion des Aires Protégées Madagascar</span></div>
      						<div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
      						<!-- Sidebar Toggle Btn-->
      						<!--<button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>-->
      					</div>
      					<div class="right-menu list-inline no-margin-bottom">    
      						<div class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></div>

      						<!-- <div class="list-inline-item"><a href="#" class="nav-link">A propos</a></div>
      						<div class="list-inline-item"><a href="#" class="nav-link">Comment utiliser?</a></div>
      						<div class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><span class="">A savoir</span></a>
      							<div aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages"><a href="#" class="dropdown-item message d-flex align-items-center">
      								<div class="content">Termes et conditions</div></a><a href="#" class="dropdown-item message d-flex align-items-center">
      									<div class="content">Mention légale</div></a>
      								</div>
      							</div>
      							<div class="list-inline-item"><a href="#" class="nav-link">Comment utiliser?</a></div>
      						</div> -->
      					</div>
      				</nav>
      			</header>
      			<div class=""><!-- d-flex align-items-stretch -->
      				<!-- Sidebar Navigation-->
      				<nav id="sidebar"><br>
      					<!-- Sidebar Header-->
        <!--<div class="sidebar-header d-flex align-items-center">
        </div>-->
        <!-- Sidebar Navidation Menus--><span class="heading">INFORMATION</span>
        <ul class="list-unstyled">
          <!--<li class="active"><a href="index.html"> <i class="icon-home"></i>Aires protégées </a></li>
          <li><a href="tables.html"> <i class="icon-grid"></i>Catégories </a></li>
          <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Gestionnaires </a></li>
          <li><a href="forms.html"> <i class="icon-padnote"></i>Forms </a></li>-->
          <li class=""><a href="#ap-dropdown" aria-expanded="true" data-toggle="collapse" style="color:white;"> <i class="icon-windows"></i>Aires protégées </a>
          	<ul id="ap-dropdown" class=" list-unstyled collapse show">
          		<?php for ($i=0; $i < sizeof($aps); $i++) { ?>
          			<li>
          				<a>
          					<div class="custom-control custom-checkbox mr-sm-2">
          						<input type="checkbox" 
          						onclick="showLayer(<?php echo $aps[$i]->id ?>, '<?php echo str_replace(" ", "_", str_replace("'", "\'", $aps[$i]->name))?>')" 
          						class="custom-control-input" 
          						id="customControlAutosizing_<?php echo str_replace(" ", "_", str_replace("'", "\'", $aps[$i]->name)).'_'.$aps[$i]->id; ?>">
          						<label class="custom-control-label" 
          						for="customControlAutosizing_<?php echo str_replace(" ", "_", str_replace("'", "\'", $aps[$i]->name)).'_'.$aps[$i]->id; ?>">
          						<?php echo $aps[$i]->name; ?>
          					</label>
          				</div>
          			</a>
          		</li>
          	<?php } ?>
          </ul>
        </li>
        <li class=""><a href="#categorie-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Catégories </a>
        	<ul id="categorie-dropdown" class="collapse list-unstyled ">
        		<?php for ($i=0; $i < sizeof($categorys); $i++) { ?>
        			<li>
        				<a>
        					<div class="custom-control custom-checkbox mr-sm-2">
        						<!-- onclick="showByCat(<?php echo $categorys[$i]->id ?>)" -->
        						<input type="checkbox" 
        						onclick="showGrouped('ap_category', <?php echo $categorys[$i]->id ?>, 'cat', null)"
        						class="custom-control-input" 
        						id="customControlAutosizing_cat<?php echo $categorys[$i]->id; ?>">
        						<label class="custom-control-label" 
        						for="customControlAutosizing_cat<?php echo $categorys[$i]->id; ?>">
        						<?php echo $categorys[$i]->label; ?>
        					</label>
        				</div>
        			</a>
        		</li>
        	<?php } ?>
        </ul>
      </li>
      <li class=""><a href="#gestionnaires-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Gestionnaires </a>
      	<ul id="gestionnaires-dropdown" class="collapse list-unstyled ">
      		<?php for ($i=0; $i < sizeof($gestionnaires); $i++) { ?>
      			<li>
      				<a>
      					<div class="custom-control custom-checkbox mr-sm-2">
      						<input type="checkbox" class="custom-control-input" 
      						onclick="showGrouped('ap_gestionnaire', <?php echo $gestionnaires[$i]->id ?>, 'gest', null)"
      						id="customControlAutosizing_gest<?php echo $gestionnaires[$i]->id; ?>">
      						<label class="custom-control-label" 
      						for="customControlAutosizing_gest<?php echo $gestionnaires[$i]->id; ?>">
      						<?php echo $gestionnaires[$i]->label; ?>
      					</label>
      				</div>
      			</a>
      		</li>
      	<?php } ?>
      </ul>
    </li>
    <li class=""><a href="#subsistances-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Subsistances </a>
    	<ul id="subsistances-dropdown" class="collapse list-unstyled ">
    		<?php for ($i=0; $i < sizeof($subsistances); $i++) { ?>
    			<li>
    				<a>
    					<div class="custom-control custom-checkbox mr-sm-2">
    						<input type="checkbox" class="custom-control-input" 
    						onclick="showGrouped('ap_subsistance', <?php echo $subsistances[$i]->id ?>, 'subs', '#795548')"
    						id="customControlAutosizing_subs<?php echo $subsistances[$i]->id; ?>">
    						<label class="custom-control-label" 
    						for="customControlAutosizing_subs<?php echo $subsistances[$i]->id; ?>">
    						<?php echo $subsistances[$i]->label; ?>
    					</label>
    				</div>
    			</a>
    		</li>
    	<?php } ?>
    </ul>
  </li>
  <li class=""><a href="#pressions-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Pressions </a>
  	<ul id="pressions-dropdown" class="collapse list-unstyled ">
  		<?php for ($i=0; $i < sizeof($pressions); $i++) { ?>
  			<li>
  				<a>
  					<div class="custom-control custom-checkbox mr-sm-2">
  						<input type="checkbox" class="custom-control-input" 
  						onclick="showGrouped('ap_pression', <?php echo $pressions[$i]->id ?>, 'press', '#696060')"
  						id="customControlAutosizing_press<?php echo $pressions[$i]->id; ?>">
  						<label class="custom-control-label" 
  						for="customControlAutosizing_press<?php echo $pressions[$i]->id; ?>">
  						<?php echo $pressions[$i]->label; ?>
  					</label>
  				</div>
  			</a>
  		</li>
  	<?php } ?>
  </ul>
</li>
<!-- <li class=""><a href="#cibles-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Cibles </a>
	<ul id="cibles-dropdown" class="collapse list-unstyled ">
		<?php for ($i=0; $i < sizeof($cibles); $i++) { ?>
			<li>
				<a>
					<div class="custom-control custom-checkbox mr-sm-2">
						<input type="checkbox" class="custom-control-input" 
						id="customControlAutosizing_<?php echo $cibles[$i]->label.'_'.$cibles[$i]->id; ?>">
						<label class="custom-control-label" 
						for="customControlAutosizing_<?php echo $cibles[$i]->label.'_'.$cibles[$i]->id; ?>">
						<?php echo $cibles[$i]->label; ?>
					</label>
				</div>
			</a>
		</li>
	<?php } ?>
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
	</li> -->
</ul>
</nav>
<!-- Sidebar Navigation end-->
<div class="page-content">

	<section class="no-padding-bottom">
		<div class="container-fluid">
			<div class="row">
				<div class="">
					<div id="map-placement" class="bar-chart block no-margin-bottom" style="right: 35%;">
					</div>
				</div>

				<!-- Place pour la description -->
				<div class="description-siagap">
					<div id="first-part-description" style="padding-top: 15px;" class="description-content">
						<h6>C’est une plateforme pour faire connaître les aires protégées</h6>
						<p>SIAGAP veut répondre aux questions : Mais qui gère nos aires protégées ? Que protège-t-on ? Qu’est-
							ce qui s’y fait pour sauvegarder la biodiversité et les habitats ? Quelles sont les menaces et les
						difficultés ? Quels sont les résultats de conservation ? etc.</p>
					</div>
					<div id="second-part-description" class="description-content">
						<h6>C’est un système d’information</h6>
						<p>SIAGAP est un outil qui permet de collecter, stocker, restructurer et distribuer de l&#39;information et des
							données sur les aires protégées à Madagascar. Il facilite la connaissance et la compréhension des
						enjeux de la gestion des aires protégées, afin d’appuyer la prise de décision.</p>
					</div>
					<div id="third-part-description" class="description-content">
						<h6>Mais c’est aussi une communauté de pratiques</h6>
						<p>C’est un endroit où tous les gestionnaires peuvent partager leurs expériences et faire porter des
						messages qu’ils souhaitent faire entendre.</p>
					</div>
				</div>
				<!-- Fin description -->

				<!-- Place pour right side -->
				<div class="right-placement" style="display: none;">
					<div class="bar-chart block ap-detail" style="padding-top: 15px;">

						<h4 class="right-h4" id="name-ap" style="margin-bottom: 2px;"></h4>
						
						<img id="pdp" src="" class="resized" style="width:103%;">

						<ul class="nav nav-tabs" style="width: 108%;">
							<li class="nav-item">
								<a class="nav-link active" data-toggle="tab" href="#accueil">Accueil</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#profile">Profil</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#cc">CC</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#ald">Aide à la décision</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" data-toggle="tab" href="#linksext">Liens extérieurs</a>
							</li>
						</ul>

						<style type="text/css">
							.perso_st td {
								border-color: #343a4012!important;
							}
						</style>
						
						<div class="tab-content">
							<div class="tab-pane active container-fluid righ_side_tabpane" id="accueil">
								<nav id="r_sidebar">
									<ul class="list-unstyled">
										<li class="righ_side_dropdown">
											<ul id="" class=" list-unstyled ">
												<div style="min-height: 30vh;">
													<p id="r-message" style="font-style: italic;font-family: auto;font-size: 14px;padding-left: 10px;"></p>
												</div>
											</ul>
										</li>
									</ul>
								</nav>
							</div>
							<div class="tab-pane container-fluid righ_side_tabpane" id="profile" style="">
								<nav id="r_sidebar">
									<ul class="list-unstyled">
										<li class="righ_side_dropdown"><a href="#profil-dropdown" aria-expanded="false" data-toggle="collapse"> Profil </a>
											<ul id="profil-dropdown" class="collapse list-unstyled ">
												<table class="table perso_st striped-table" style="">
									<tr>
										<td class="titre_table">Nom complet<td>
										<td id="r-cnom"><td>
									</tr>
									<tr>
										<td class="titre_table">Création</td>
										<td id="r-creation"></td>
									</tr>
									<tr>
										<td class="titre_table">Catégorie de gestion</td>
										<td id="r-categorie"></td>
									</tr>
									<tr style="display: none;">
										<td class="titre_table">Type de gouvernance</td>
										<td id="r-gouvernance"></td>
									</tr>
									<tr>
										<td class="titre_table">Gestionnaire délégué</td>
										<td id="r-gestionnaire"></td>
									</tr>
									<tr>
										<td class="titre_table">Autre structure de Gouvernance</td>
										<td id="r-autre_gouvernance"></td>
									</tr>
									<tr>
										<td class="titre_table">Nombre de VOI</td>
										<td id="r-nbr_voi"></td>
									</tr>
									<tr>
										<td class="titre_table">Superficie</td>
										<td id="r-superficie"></td>
									</tr>
									<tr>
										<td class="titre_table">Superficie VOI</td>
										<td id="r-superficie_voi"></td>
									</tr>
									<style type="text/css">
										.sp_ta {
											border: unset;
									    background: unset;
									    width: 100%;
									    margin-top: 0px;
									    margin-bottom: 0px;
									    overflow-y: hidden;
										}
									</style>
									<tr>
										<td class="titre_table">Contact</td>
										<td id="">
											<textarea class="sp_ta" id="r-contact" disabled></textarea>
											<!-- <ul class="list-unstyled">
												<li>RAZAFIMANDIMBY Yacinthe </li>
												<li>yrazafimandimby@conservation.org </li>
												<li>034 02 330 06</li>
											</ul> -->
										</td>
									</tr>
									<tr>
										<td class="titre_table">Vision</td>
										<td id=""><textarea class="sp_ta" id="r-vision" disabled></textarea></td>
									</tr>
									<tr>
										<td class="titre_table">Mission</td>
										<td class="sp_ta" id=""><textarea class="sp_ta" id="r-mission" disabled></textarea></td>
									</tr>
									<tr>
										<td class="titre_table">But</td>
										<td class="sp_ta" id=""><textarea class="sp_ta" id="r-but" disabled></textarea></td>
									</tr>
									<!-- <tr>
										<td><h6 style="color: black;">Message du chef de site</h6></td>
										<td>
											<span id="r-message" style="font-style: italic;font-family: auto;">
												
											</span>
										</td>
									</tr>		 -->						
								</table>
							</ul>
						</li>
						<li class="righ_side_dropdown"><a href="#contexte-dropdown" aria-expanded="false" data-toggle="collapse"> Contexte </a>
							<ul id="contexte-dropdown" class="collapse list-unstyled ">
								<table class="table r_table">
									<tbody>
										<tr>
											<td class="titre_table"><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Region</span></span></strong></td>
											<td><span style="vertical-align: inherit;"><span id="r-region" style="vertical-align: inherit;">: DIANA</span></span></td>
										</tr>
										<tr>
											<td class="titre_table"><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">District</span></span></strong></td>
											<td><span style="vertical-align: inherit;"><span id="r-district" style="vertical-align: inherit;">: Diego II</span></span></td>
										</tr>
										<tr>
											<td class="titre_table"><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Commune&nbsp;</span></span></strong></td>
											<td><span style="vertical-align: inherit;"><span id="r-commune" style="vertical-align: inherit;">: Ramena, Mahavanona</span></span></td>
										</tr>
										<tr>
											<td class="titre_table"><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Fokontany&nbsp;</span></span></strong></td>
											<td><span style="vertical-align: inherit;"><span id="r-fokontany" style="vertical-align: inherit;">: 4 Fokontany (Ambodivahibe, Ivovona, Ambavarano, Ampondrahazo)</span></span></td>
										</tr>
										<tr>
											<td class="titre_table"><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Démographie</span></span></strong></td>
											<td><span style="vertical-align: inherit;"><span id="r-demography" style="vertical-align: inherit;">: 1,850 Inhabitants</span></span></td>
										</tr>
										<tr>
											<td class="titre_table"><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Subsistance des populations locales</span></span></strong></td>
											<td class="sp_ta" id=""><textarea class="sp_ta" id="r-subsistancedpl" disabled></textarea></td>
										</tr>
										<tr>
											<td class="titre_table"><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Problèmes des populations locales</span></span></strong></td>
											<td class="sp_ta" id=""><textarea class="sp_ta" id="r-problemdpl" disabled></textarea></td>
										</tr>
										<tr>
											<td class="titre_table"><strong><span style="vertical-align: inherit;"><span style="vertical-align: inherit;">Pressions pesant sur les cibles</span></span></strong></td>
											<td class="sp_ta" id=""><textarea class="sp_ta" id="r-pressiondpl" disabled></textarea></td>
										</tr>
									</tbody>
								</table>
							</ul>
						</li>

						<li class="righ_side_dropdown"><a href="#plannification-dropdown" aria-expanded="false" data-toggle="collapse"> Planification </a>
							<ul id="plannification-dropdown" class="collapse list-unstyled ">
								<br>
								<div id="download_pag_place"></div>
								<br>
							</ul>
						</li>

						<li class="righ_side_dropdown"><a href="#cible-dropdown" aria-expanded="false" data-toggle="collapse"> Cible </a>
							<ul id="cible-dropdown" class="collapse list-unstyled ">
								<div class="row" id="cible_place">
								<!-- <div class="col-md-4"><img  style="max-height: 120px; max-width: 120px;" src="http://www.siagapmada.com/content/uploads/2018/07/aquarium-1.jpg" class="resized"><h4>Récifs coralliens</h4></div>
								<div class="col-md-4"><img style="max-height: 120px; max-width: 120px;" src="http://www.siagapmada.com/content/uploads/2018/07/images-3.jpg" class="resized"><h4>Forêt litoralle</h4></div>
								<div class="col-md-4"><img style="max-height: 120px; max-width: 120px;" src="http://www.siagapmada.com/content/uploads/2018/07/ito2_edited_2018.jpg" class="resized"><h4>Mangroves</h4></div>
								<div class="col-md-4"><img style="max-height: 120px; max-width: 120px;" src="http://www.siagapmada.com/content/uploads/2018/07/oiseaux-marins.jpg" class="resized"><h4>Oiseaux marins</h4></div>
								<div class="col-md-4"><img style="max-height: 120px; max-width: 120px;" src="http://www.siagapmada.com/content/uploads/2018/07/chauve-souris.jpg" class="resized"><h4>chauves souris</h4></div> -->
							</div>
							<style>
								.resized {
									width:100%;
								}
							</style>
						</ul>
					</li>
					<li class="righ_side_dropdown"><a href="#intrants-dropdown" aria-expanded="false" data-toggle="collapse"> Intrants </a>
						<ul id="intrants-dropdown" class="collapse list-unstyled ">
							<div>
								<h7 class="special-h7" >Ressource logistique</h7>
								<div style="float: right;" class="special-h7" class="checkbox">
									<div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" disabled id="customSwitch1">
										<label class="custom-control-label" for="customSwitch1">Internet</label>
									</div>
									<div class="custom-control custom-switch">
										<input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
										<label class="custom-control-label" for="customSwitch2">Réseau téléphonique</label>
									</div>
								</div>
								<div id="chartjs-radar">
									<canvas id="Mycanvas"></canvas>
								</div>
								<div>
									<table class="table table-acc">
									</table>
								</div>
							</div>
							<div>
								<h7 class="special-h7" >Ressource humaine</h7>
								<div id="chartjs-bar">
									<canvas id="MyBarCanvas"></canvas>
								</div>
							</div>
						</ul>
					</li>
					<li class="righ_side_dropdown"><a href="#processus-dropdown" aria-expanded="false" data-toggle="collapse"> Processus </a>
						<ul id="processus-dropdown" class="collapse list-unstyled ">
							<div>
								<table class="table perso_st striped-table" style="">
									<tr>
										<td class="titre_table">Gestion interne</td>
										<td id=""><textarea class="sp_ta" id="gestionInterne-ap" disabled></textarea></td>
									</tr>
									<tr>
										<td class="titre_table">Protection et surveillance</td>
										<td class="sp_ta" id=""><textarea class="sp_ta" id="protection-ap" disabled></textarea></td>
									</tr>
									<tr>
										<td class="titre_table">Relation</td>
										<td class="sp_ta" id=""><textarea class="sp_ta" id="relation-ap" disabled></textarea></td>
									</tr>
									<tr>
										<td class="titre_table">Tourisme</td>
										<td class="sp_ta" id=""><textarea class="sp_ta" id="tourisme-ap" disabled></textarea></td>
									</tr>
									<tr>
										<td class="titre_table">Suivi et recherche</td>
										<td class="sp_ta" id=""><textarea class="sp_ta" id="suivie-ap" disabled></textarea></td>
									</tr>
								</table>
							</div>
						</ul>
					</li>
					<li class="righ_side_dropdown"><a href="#resultat-dropdown" aria-expanded="false" data-toggle="collapse"> Résultats </a>
						<ul id="resultat-dropdown" class="collapse list-unstyled ">
							<img src="<?php echo base_url(); ?>assets/img/Result.png" style="width: 100%;">
						</ul>
					</li>
					<li class="righ_side_dropdown"><a href="#impact-dropdown" aria-expanded="false" data-toggle="collapse"> Impact </a>
						<ul id="impact-dropdown" class="collapse list-unstyled ">
							<textarea style="padding: 18px 20px;" class="sp_ta" id="r-impacte" disabled></textarea>
							<!-- <table class="table perso_st striped-table" style="">
								<tr>
									<td class="titre_table">Impact</td>
									<td class="" id="r-impacte"></td>
								</tr>
							</table> -->
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<div style="padding: 0px;" class="tab-pane container fade" id="cc">
			<nav id="r_sidebar">
				<ul class="list-unstyled">
					<li class="righ_side_dropdown"><a href="#intrants-dropdownt" aria-expanded="false" data-toggle="collapse"> Température </a>
						<ul id="intrants-dropdownt" class="collapse list-unstyled ">
							<div id="ht">
								<!-- <canvas ></canvas> -->
							</div>
							<style type="text/css">
								.source {
									color: grey;
									font-size: 9px;
								}
							</style>
							<span class="source">source: K. Coldrey and J. Turpie, Climate Change Vulnerability and Adaptation Assessment for Madagascar’s Terrestrial Protected Areas, 2019</span>
							<div id="pt">
								<!-- <canvas ></canvas> -->
							</div>
							
							<div>
								<textarea class="form-control bw" id="temperature_ap" disabled></textarea>
							</div>
						</ul>
					</li>
					<li class="righ_side_dropdown"><a href="#resultat-dropdownp" aria-expanded="false" data-toggle="collapse"> Précipitation </a>
						<ul id="resultat-dropdownp" class="collapse list-unstyled ">
							<div id="hp">
								<span class="source">source: K. Coldrey and J. Turpie, Climate Change Vulnerability and Adaptation Assessment for Madagascar’s Terrestrial Protected Areas, 2019</span>
								<!-- <canvas ></canvas> -->
							</div>
							<div id="pp">
								<!-- <canvas ></canvas> -->
							</div>
							
							<div>
								<textarea class="form-control bw" id="precipitation_ap" disabled></textarea>
							</div>
						</ul>
					</li>
					<li class="righ_side_dropdown"><a href="#resultat-dropdownm" aria-expanded="false" data-toggle="collapse"> Adaptation au CC </a>
						<ul id="resultat-dropdownm" class="collapse list-unstyled ">
							<h6 class="titre_table">Partage d'experience d'adaptation</h6>
							<div>
								<textarea class="form-control bw" disabled id="adaptation_cc_ap"></textarea>
							</div>

							<!-- <h6 class="titre_table">Cible de conservation</h6> -->
							<div id="lmen" style="display: none;">
								
							</div>
						</ul>
					</li>
				</ul>
			</nav>
		</div>
		<style type="text/css">
			.bw {
				background-color: white!important;
				border-color: lightgray;
			}
		</style>
		<div class="tab-pane container-fluid righ_side_tabpane" id="ald">
					<nav id="r_sidebar">
						<ul class="list-unstyled">

							<li class="righ_side_dropdown"><a href="#tc-dropdown" aria-expanded="false" data-toggle="collapse"> Tendance des cibles de conservation </a>
								<ul id="tc-dropdown" class="collapse list-unstyled ">
									<div>
										<canvas id="aldCanvas"></canvas>
									</div>
									<div>
										<textarea class="form-control bw" disabled id="comm_tendance_cible"></textarea>
									</div>
								</ul>
							</li>
							<li class="righ_side_dropdown"><a href="#tm-dropdown" aria-expanded="false" data-toggle="collapse"> Tendance des menaces </a>
								<ul id="tm-dropdown" class="collapse list-unstyled ">
									<div>
										<canvas id="aldCanvasM0"></canvas>
										<canvas id="aldCanvasM1"></canvas>
										<canvas id="aldCanvasM2"></canvas>
										<canvas id="aldCanvasM3"></canvas>
										<canvas id="aldCanvasM4"></canvas>
									</div>
									<div id="miradia-place">
										
									</div>
									<div>
										<textarea class="form-control bw" disabled id="comm_tendance_menace"></textarea>
									</div>
								</ul>
							</li>
						</ul>
					</nav>
				</div>

		<div class="tab-pane container-fluid righ_side_tabpane" id="linksext">
			<nav id="r_sidebar">
				<ul class="list-unstyled">
					<li class="righ_side_dropdown">
						<ul id="" class=" list-unstyled ">
							<div>
								<table class="table" id="table_link_ext">
									
		            </table>
							</div>
						</ul>
					</li>
				</ul>
			</nav>
		</div>

				<!-- <h7 class="special-h7" >Tendance des menaces</h7> -->

			<!-- <div class="custom-control custom-checkbox mr-sm-2">
				<input type="checkbox" 
				onclick="" 
				class="custom-control-input" 
				id="cible1">
				<label class="custom-control-label" 
				for="cible1">
				<?php echo $aps[$i]->name; ?>
			</label>
		</div> -->

		
		<!-- <h7 class="special-h7" >Tendance des cibles de conservation</h7> -->
		
	<!-- </div> -->
</div>
</div>
</div>
<!-- Place pour right side -->

</div>
</div>
</section>

<footer class="footer">
	<div class="footer__block block no-margin-bottom">
		<div class="container-fluid text-center">
			<!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
			
			<p class="no-margin-bottom"><img src="<?php echo base_url(); ?>assets/img/Logo_GIZ.png" style="height: 30px; float: left;">
				<img src="<?php echo base_url(); ?>assets/img/WCS_logo.png" style="height: 30px; float: left; margin-left: 5px;">2019 &copy; SIAGAP. Design by <a href="https://bootstrapious.com/p/bootstrap-4-dark-admin">Bootstrapious</a>. <a href="https://icons8.com/icon/433/sheep">icons by Icons8</a></p>
			</div>
		</div>
	</footer>
</div>
</div>

<!-- Modal add -->
<div class="modal fade" id="modal-fiche" tabindex="-1" role="dialog" 
		aria-labelledby="" aria-hidden="true">
	<div class="modal-dialog" role="document">
	  <div class="modal-content">
	    <div class="modal-header">
	      <h5 class="modal-title" id="title-modal-add-basic">Fiche</h5>
	      <button type="button" class="close" data-dismiss="modal" 
	      		aria-label="Close">
	      	<span aria-hidden="true">&times;</span>
	    	</button>
	  	</div>
	  	<div class="modal-body">
	    Fiche 
			</div>
			<div class="modal-footer">
		  	<button type="button" class="btn btn-secondary" data-dismiss="modal">
		    	OK
		  	</button>
			</div>
		</div>
	</div>
</div>


<!-- JavaScript files-->
<script src="<?php echo base_url(); ?>assets/vendor/jquery/jquery.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/popper.js/umd/popper.min.js"> </script>
<!-- <script src="<?php echo base_url(); ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
<!-- <script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script> -->
<script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
<!-- <script src="<?php echo base_url(); ?>assets/js/charts-home.js"></script> -->
<script src="<?php echo base_url(); ?>assets/js/front.js"></script>
<!-- map -->
<script src="<?php echo base_url(); ?>assets/js/map-controller.js"></script>
<!-- bootstrap-slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/bootstrap-slider.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.bundle.min.js"></script> -->
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.css">

<script src="<?php echo base_url(); ?>assets/js/diagram-controller.js"></script>


<!-- <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/css/bootstrap4-toggle.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.5.0/js/bootstrap4-toggle.min.js"></script> -->

	<script>
		$("#ap-by-year").slider({});
		$("#ap-by-staff-by-ha").slider({});
	</script>


	<!-- map controller -->
	<script>
		var listeCouleur = []; //Where to put all used color
		var nextColor1 = 0; // Value to get random color
		var nextColor2 = 0; // Value to get random color

		var listMap = [];

		function showLayer(apId, label) {
			var ck = $('#customControlAutosizing_' + label + '_' + apId).is(":checked");
			console.log('customControlAutosizing_' + label + '_' + apId);
			console.log(ck);
			if (!ck) {
				assetLayerGroup.removeLayer(listMap[apId]);
			} else {
				$.ajax({
					method: "GET",
					url: "<?php echo base_url(); ?>layer/ap/" + apId,
					dataType: "json",
					success: function( response ) {
						console.log(response);
						var polygon_2 = L.geoJSON(response, {
							onEachFeature: function (feature, layer){
								layer.on('click', function (e) {
									showDetail(apId, this.getBounds());
								});
							}
						}).bindTooltip(label).openTooltip();
						assetLayerGroup.addLayer(polygon_2);
						listMap[apId] = polygon_2;
						// map.fitBounds(polygon_2.getBounds());
						map.fitBounds(assetLayerGroup.getBounds());
					},
					error: function( response, status ) {
						console.log("Status de l'erreur: " + status);
					}
				}).done(function( gest ) {

				});
			}
		} 

		// function showByCat(catId) {
		// 	var ck = $('#customControlAutosizing_cat' + catId).is(":checked");
		// 	console.log('customControlAutosizing_cat' + catId);
		// 	console.log(ck);
		// 	// If ck is not checked, we remove the group 
		// 	if (!ck) {
		// 		// First we clear the layers and then we remove the FeatureGroup
		// 		groupOfAssetLayerGroup.get('cat_' + catId.toString()).clearLayers();
		// 		map.removeLayer(groupOfAssetLayerGroup.get(catId.toString()));
		// 	} else {
		// 		$.ajax({
		// 			method: "GET",
		// 			url: "<?php echo base_url(); ?>layer/ap_category/" + catId,
		// 			dataType: "json",
		// 			success: function( response ) {
		// 				console.log(response);
		// 				// We create a FeatureGroup to put all the Layer that we may get
		// 				var assetLayerGroupForGroup = new L.featureGroup();
		// 				// We add the FeatureGroup to the map first so we can just push layer on the layer group and the map show it
		// 				assetLayerGroupForGroup.addTo(map);
		// 				// The color of the layer (random)
		// 				var couleur = getNextColor();
		// 				for(var i = 0; i < response.length; i++) {
		// 					// Create the Layer, a polygone
		// 					var polygon_2 = createPolygone(response[i].geojson, response[i].metadata.ap_id, response[i].metadata.name, couleur);
		// 					// Add the layer to the FeatureGroup to show it
		// 					assetLayerGroupForGroup.addLayer(polygon_2);
		// 				}
		// 				// Add the layerGroup to the Map object so we can get it using the key
		// 				groupOfAssetLayerGroup.set('cat_' + catId.toString(), assetLayerGroupForGroup);
		// 				// Fit the map to the layers
		// 				map.fitBounds(assetLayerGroupForGroup.getBounds());
		// 			},
		// 			error: function( response, status ) {
		// 				console.log("Status de l'erreur: " + status);
		// 			}
		// 		}).done(function( gest ) {

		// 		});
		// 	}
		// }

		function showGrouped(link_function_part, subsId, prefix, color) {
			var ck = $('#customControlAutosizing_' + prefix + subsId).is(":checked");
			console.log('customControlAutosizing_' + prefix + subsId);
			console.log(ck);
			if (!ck) {
				groupOfAssetLayerGroup.get(prefix + '_' + subsId.toString()).clearLayers();
				// map.removeLayer(groupOfAssetLayerGroup.get(subsId.toString()));
				
				if(markers.get(prefix + '_' + subsId.toString())){
					for(var i = 0; i < markers.get(prefix + '_' + subsId.toString()).length; i++) {
						map.removeLayer(markers.get(prefix + '_' + subsId.toString())[i])
					}
				}
			} else {
				$.ajax({
					method: "GET",
					url: "<?php echo base_url(); ?>layer/" + link_function_part + "/" + subsId,
					dataType: "json",
					success: function( response ) {
						console.log(response);
						var assetLayerGroupForGroup = new L.FeatureGroup();
						assetLayerGroupForGroup.addTo(map);
						var couleur;
						if (color) {
							couleur = color;
						} else {
							couleur = getNextColor();
						}
						var listMarkers = [];
						for(var i = 0; i < response.length; i++) {
							var polygon_2 = null;
							if(response[i].metadata.icon) {
								var polygon_2 = createPolygone(response[i].geojson, response[i].metadata.ap_id, response[i].metadata.name, couleur, "<?php echo base_url(); ?>assets/upload/img/icons/" + response[i].metadata.icon, listMarkers);
							} else {
								var polygon_2 = createPolygone(response[i].geojson, response[i].metadata.ap_id, response[i].metadata.name, couleur, null,null);
							}
							
							assetLayerGroupForGroup.addLayer(polygon_2);
						}
						groupOfAssetLayerGroup.set(prefix + '_' + subsId.toString(), assetLayerGroupForGroup);
						map.fitBounds(assetLayerGroupForGroup.getBounds());
						markers.set(prefix + '_' + subsId.toString(), listMarkers);
					},
					error: function( response, status ) {
						console.log("Status de l'erreur: " + status);
					}
				}).done(function( gest ) {

				});
			}
		}

		// Function to create likely random color
		function rainbow(numOfSteps, step) {
		    // This function generates vibrant, "evenly spaced" colours (i.e. no clustering). This is ideal for creating easily distinguishable vibrant markers in Google Maps and other apps.
		    // Adam Cole, 2011-Sept-14
		    // HSV to RBG adapted from: http://mjijackson.com/2008/02/rgb-to-hsl-and-rgb-to-hsv-color-model-conversion-algorithms-in-javascript
		    var r, g, b;
		    var h = step / numOfSteps;
		    var i = ~~(h * 6);
		    var f = h * 6 - i;
		    var q = 1 - f;
		    switch(i % 6){
		        case 0: r = 1; g = f; b = 0; break;
		        case 1: r = q; g = 1; b = 0; break;
		        case 2: r = 0; g = 1; b = f; break;
		        case 3: r = 0; g = q; b = 1; break;
		        case 4: r = f; g = 0; b = 1; break;
		        case 5: r = 1; g = 0; b = q; break;
		    }
		    var c = "#" + ("00" + (~ ~(r * 255)).toString(16)).slice(-2) + ("00" + (~ ~(g * 255)).toString(16)).slice(-2) + ("00" + (~ ~(b * 255)).toString(16)).slice(-2);
		    return (c);
		}

		function getRandomArbitrary(min, max) {
		    return Math.random() * (max - min) + min;
		}

		function getNextColor() {
			var valiny = rainbow(1 + nextColor1, 1 + nextColor2);
			if (nextColor2 > 60) {
				nextColor1=getRandomArbitrary(1,nextColor2/3);
				nextColor2=getRandomArbitrary(nextColor2/3, nextColor2/2);
			} else {
				nextColor1+=getRandomArbitrary(1,5);
				nextColor2+=getRandomArbitrary(1,10);
			}
			if (listeCouleur.includes(valiny)) {
				getNextColor();
			} else {
				listeCouleur.push(valiny);
				return valiny;
			}
		}

		

		// Function to create the polygone2
		function createPolygone(ap_layer, ap_id, ap_name, couleur, urlIcon, listMarkers) {
			return L.geoJSON(ap_layer, {
				onEachFeature: function (feature, layer){
					layer.on('click', function (e) {
						showDetail(ap_id, this.getBounds());
					});
					layer.setStyle({fillColor :couleur, color: couleur});
					if(urlIcon) {
						var greenIcon = L.icon({
							iconUrl: urlIcon,
							// shadowUrl: 'leaf-shadow.png',

							iconSize:     [25, 25], // size of the icon
							// shadowSize:   [50, 64], // size of the shadow
							iconAnchor:   [12.5, 12.5], // point of the icon which will correspond to marker's location
							// shadowAnchor: [4, 62],  // the same for the shadow
							popupAnchor:  [25, 25] // point from which the popup should open relative to the iconAnchor
						});
						var mk = L.marker(layer.getBounds().getCenter(), {icon: greenIcon});
						mk.bindTooltip(ap_name).openTooltip();
						// mk.bindPopup(ap_name);
		        // mk.on('mouseover', function (e) {
		        //     this.openPopup();
		        // });
		        // mk.on('mouseout', function (e) {
		        //     this.closePopup();
		        // });
						mk.addTo(map);
						listMarkers.push(mk);
					}
				}
			}).bindTooltip(ap_name).openTooltip();
		}

		function showDetail(apId, latlong) {

			$.ajax({
				method: "GET",
				url: "<?php echo base_url(); ?>ap/detail/" + apId,
				dataType: "json"
			}).done(function( response ) {
				var gest = response[0];
				console.log(response);
				$('#r-cnom').html(gest.nom_complet);
				$('#r-superficie').html(gest.area);
				$('#name-ap').html(gest.name);
				$('#r-superficie_voi').html(gest.area_voi);
				$('#r-categorie').html(gest.category_label);
				$('#r-commune').html(gest.commune);

				$('#r-contact').val(gest.contact);
				$('#r-contact').height(getTextareaSizing(gest.contact, $('#r-contact').width()));

				$('#r-creation').text(gest.creation_date);
				$('#r-demography').html(gest.demography);
				$('#r-district').html(gest.district);
				$('#r-fokontany').html(gest.fokontany);
				$('#r-gestionnaire').html(gest.gestionnaire_label);
				$('#r-message').html(gest.message);
	      // $('#r-superficie').text(gest.link_photo);
	      $('#r-mission').html(gest.mission);
	      $('#r-mission').height(getTextareaSizing(gest.mission, $('#r-mission').width()));
	      $('#r-mission').css('overflow-x', 'hidden');

	      $('#r-nbr_voi').html(gest.nbr_voi);

	      $('#r-but').html(gest.objectif);
				$('#r-but').height(getTextareaSizing(gest.objectif, $('#r-but').width()));
				$('#r-but').css('overflow-x', 'hidden');

	      $('#r-autre_gouvernance').html(gest.other_gov);
	      $('#r-region').html(gest.region_label);

	      $('#r-vision').html(gest.vision);
	      $('#r-vision').height(getTextareaSizing(gest.vision, $('#r-vision').width()));
	      $('#r-vision').css('overflow-x', 'hidden');

	      $('#gestionInterne-ap').html(gest.gestion_interne);
	      $('#gestionInterne-ap').height(getTextareaSizing(gest.gestion_interne, $('#gestionInterne-ap').width()));
	      $('#gestionInterne-ap').css('overflow-x', 'hidden');

	      $('#protection-ap').html(gest.protection);
	      $('#protection-ap').height(getTextareaSizing(gest.protection, $('#protection-ap').width()));
	      $('#protection-ap').css('overflow-x', 'hidden');

	      $('#relation-ap').html(gest.relation);
	      $('#relation-ap').height(getTextareaSizing(gest.relation, $('#relation-ap').width()));
	      $('#relation-ap').css('overflow-x', 'hidden');

	      $('#tourisme-ap').html(gest.tourisme);
	      $('#tourisme-ap').height(getTextareaSizing(gest.tourisme, $('#tourisme-ap').width()));
	      $('#tourisme-ap').css('overflow-x', 'hidden');

	      $('#suivie-ap').html(gest.suivie);
	      $('#suivie-ap').height(getTextareaSizing(gest.suivie, $('#suivie-ap').width()));
	      $('#suivie-ap').css('overflow-x', 'hidden');

	      $('#r-subsistancedpl').html(gest.subsistance);
	      $('#r-subsistancedpl').height(getTextareaSizing(gest.subsistance, $('#r-subsistancedpl').width()));
	      $('#r-subsistancedpl').css('overflow-x', 'hidden');

	      $('#r-problemdpl').html(gest.probleme);
	      $('#r-problemdpl').height(getTextareaSizing(gest.probleme, $('#r-problemdpl').width()));
	      $('#r-problemdpl').css('overflow-x', 'hidden');

	      $('#r-pressiondpl').html(gest.pression);
	      $('#r-pressiondpl').height(getTextareaSizing(gest.pression, $('#r-pressiondpl').width()));
	      $('#r-pressiondpl').css('overflow-x', 'hidden');

	      $('#r-impacte').html(gest.impact);
	      $('#r-impacte').height(getTextareaSizing(gest.impact, $('#r-impacte').width()));
	      $('#r-impacte').css('overflow-x', 'hidden');

	      // $('#r-impacte').html(gest.impact);

	      $('#pdp').attr("src",'<?php echo base_url(); ?>'+gest.link_photo);//.html();

	      $('#temperature_ap').html(gest.comm_temperature);
	      $('#temperature_ap').height(getTextareaSizing(gest.comm_temperature, $('#temperature_ap').width()));
	      $('#temperature_ap').css('overflow-x', 'hidden');

	      $('#precipitation_ap').html(gest.comm_precipitation);
	      $('#precipitation_ap').height(getTextareaSizing(gest.comm_precipitation, $('#precipitation_ap').width()));
	      $('#precipitation_ap').css('overflow-x', 'hidden');

	      $('#adaptation_cc_ap').html(gest.comm_adaptation_cc);
	      $('#adaptation_cc_ap').height(getTextareaSizing(gest.comm_adaptation_cc, $('#adaptation_cc_ap').width()));
	      $('#adaptation_cc_ap').css('overflow-x', 'hidden');

	      $('#comm_tendance_cible').html(gest.comm_tendance_cible);
	      $('#comm_tendance_cible').height(getTextareaSizing(gest.comm_tendance_cible, $('#comm_tendance_cible').width()));
	      $('#comm_tendance_cible').css('overflow-x', 'hidden');

	      $('#comm_tendance_menace').html(gest.comm_tendance_menace);
	      $('#comm_tendance_menace').height(getTextareaSizing(gest.comm_precipitation, $('#comm_tendance_menace').width()));
	      $('#comm_tendance_menace').css('overflow-x', 'hidden');

	      // $('#r-gouvernance').val();
	    });

			$('.right-placement').show();
			$('.description-siagap').hide();
			$('#map-placement').css('right', '40%');
			map.invalidateSize();
			map.fitBounds(latlong);

			showCible(apId);

			intrantRadar(apId);

			intrantTable('table-acc', apId, null);

			// drawLineDiagram_cc('ht', 'CCHT/find/'+apId, 'Historique de Température', ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai',
			// 		'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre']);
			// drawLineDiagram_cc('pt', 'CCPT/find/'+apId, 'Projection de Température', ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai',
			// 		'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre']);
			drawLineDiagram_cc_2in1('ht', 'CCHT/find/'+apId, 'CCPT/find/'+apId, 'Température(*c)', ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai',
			 		'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre']);

			drawLineDiagram_cc_2in1('hp', 'CCHP/find/'+apId, 'CCPP/find/'+apId, 'Précipitation(mm)', ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai',
			 		'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre']);

			// drawLineDiagram_cc('hp', 'CCHP/find/'+apId, 'Historique de Précipitation', ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai',
			// 		'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre']);
			// drawLineDiagram_cc('pp', 'CCPP/find/'+apId, 'Projection de Précipitation', ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai',
			// 		'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre']);

			getPression(apId);
			showMiradia(apId);
			loadLinkExt(apId);
			loadPagD(apId);
		}

		function showMiradia(apId) {
			$.ajax({
				method: "GET",
				url: "<?php echo base_url(); ?>Photo/getStatMenace/" + apId,
				dataType: "json"
			}).done(function( response ) {
				$('.miradia-remove').remove();
				var laDiv = "";
				laDiv += '<div class="col-md-4 miradia-remove"><img  style="max-width: 100%;" src="';
				laDiv += response[0].path;
				laDiv += '" class="resized">';
				laDiv += '</div>';
				$('#miradia-place').append(laDiv);
			});
		}

		function getTextareaSizing(val, width) {
			var e = document.createElement("textarea");
			e.style.visibility = "hidden";
			if (width > 0) {
				e.style.width = width;
			}
			e.innerHTML=val;
	    document.body.appendChild(e);
	    var temp = e.scrollHeight;
	    document.body.removeChild(e);
	    return temp/2+10;
		}

		function showCible(apId) {
			$.ajax({
				method: "GET",
				url: "<?php echo base_url(); ?>associationApCible/getbyap/" + apId,
				dataType: "json"
			}).done(function( response ) {
				$('.img-remove').remove();
				for (var i = response.length - 1; i >= 0; i--) {
					var laDiv = "";
					laDiv += '<div class="col-md-4 img-remove"><img  style="max-height: 120px; max-width: 120px;" src="';
					laDiv += '<?php echo base_url(); ?>'+response[i].link;
					laDiv += '" class="resized"><h4>';
					laDiv += response[i].label;
					laDiv += '</h4></div>';
					$('#cible_place').append(laDiv);
				}
			});
		}

		function getPression(apId) {
			$.ajax({
				method: "GET",
				url: "<?php echo base_url(); ?>Pression/getByApId/" + apId,
				dataType: "json"
			}).done(function( response ) {
				$('.pression-remove').remove();
				var laDiv = "<table class=\"table\" pression-remove>";
				for(var i = 0; i < response.length; i++) {
					laDiv += '<tr style="border: hidden;">';
					laDiv += '<td>' +response[i].label+ '</td>';
					laDiv += '<td><button title="Manifestation" class="btn" data-toggle="modal" data-target="#modal-fiche"><i class="fa fa-file" aria-hidden="true"></i></button><button title="Adaptation" class="btn"  data-toggle="modal" data-target="#modal-fiche"><i class="fa fa-file" aria-hidden="true"></i></button></td>';
					laDiv += '</tr>';
				}
				laDiv += '</table>';
				$('#lmen').append(laDiv);
			});
		}

		function intrantRadar(apId) {
			$.ajax({
				method: "GET",
				url: "<?php echo base_url(); ?>associationApIntrant/getbyap/" + apId,
				dataType: "json"
			}).done(function( response ) {
				labels = [];
				value = [];
				for (var i = response.length - 1; i >= 0; i--) {
					if (response[i].intrant_id == 1) {
						if (response[i].note != null && response[i].note > 0) {
							$(' #customSwitch1').prop('checked', true);
						} else {
							$(' #customSwitch1').prop('checked', false);
						}
					} else if (response[i].intrant_id == 3) {
						if (response[i].note != null && response[i].note > 0) {
							$(' #customSwitch2').prop('checked', true);
						} else {
							$(' #customSwitch2').prop('checked', false);
						}
					} else if (response[i].intrant_id == 4 
						|| response[i].intrant_id == 5 || response[i].intrant_id == 6 ) {
						labels.push(response[i].label);
						value.push(response[i].note);
					}
				}

				showRadar('Mycanvas', labels, value);

				intrantBar(apId);

				showTC('aldCanvas', apId);
				showTM('aldCanvasM', apId);
			});
		}

		function intrantBar(apId) {
			$.ajax({
				method: "GET",
				url: "<?php echo base_url(); ?>associationApLevel/getbyap/" + apId,
				dataType: "json"
			}).done(function( response ) {

				var labels = [];
				var value = [];

				var nbr_man = [];
				var nbr_women = [];
				var color_man = [];
				var color_women = [];

				for (var i = 0; i < response.length; i++) {
					nbr_man.push(response[i].nbr_man);
					nbr_women.push(response[i].nbr_women);
					labels.push(response[i].label);
					color_man.push("#379392");
					color_women.push("#bb414de0");
				}
				value.push(
				{
					label: "Homme",
					backgroundColor: color_man,
					data: nbr_man
				}
				);
				value.push(
				{
					label: "Femme",
					backgroundColor: color_women,
					data: nbr_women
				}
				);
				showBar('MyBarCanvas', labels, value);
			});
		}

		function loadLinkExt(apId) {
	    $.ajax({
	      url: '<?php echo base_url(); ?>Link/ap/' + apId,
	      type: 'GET',
	      dataType: "json",
	      success: function( response, status ) {
	        var table = '';
	        for(var i = 0; i < response.length; i++) {
	          table += '<tr class="removable-tlink">';
	          table += '<td class="td-no-border">'+response[i].label+'</td>';
	          table += '<td class="td-no-border"><a class="extlink" href="'+prepareLink(response[i].link)+'">'+response[i].link+'</a></td>';
	          table += '</tr>';
	        }
	        $('.removable-tlink').remove();
	        $('#table_link_ext').append(table);
	      },
	      error: function( response, status ) {
	        $('#alert-error-message').text('Échec: ' + status);
	      }
	    }).done(function( gest ) {
	      
	    });
	  }

	  function prepareLink(link) {
	  	if (!link.includes('http')) {
	  		return 'http://' + link;
	  	}
	  }

	  function loadPagD(apId) {
    $.ajax({
      url: '<?php echo base_url(); ?>PagD/ap/' + apId,
      type: 'GET',
      dataType: "json",
      success: function( response, status ) {
      	var line = '';
        if (response.length>0) {
          var line = '<button class="pag-remove btn btn-outline-secondary" onclick="'
              + 'window.location=\'<?php echo base_url(); ?>' + response[0].path + '\''
              +'"><i class="fa fa-download"></i> Télécharger PAG</button>';  
        } else {
        	line = 'Le PAG de l\'AP n\'est pas disponible pour le moment';
        }
        $('.pag-remove').remove();
        $('#download_pag_place').append(line);
      },
      error: function( response, status ) {
        $('#alert-error-message').text('Échec: ' + status);
      }
    }).done(function( gest ) {
      
    });
  }

	</script>

</body>
</html>