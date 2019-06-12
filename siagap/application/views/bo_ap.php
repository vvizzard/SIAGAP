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
                  <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">SIA</strong><strong>GAP</strong></div>
                  <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
                  <!-- Sidebar Toggle Btn-->
                  <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
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
          <li class=""><a href="#ap-dropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Aires protégées </a>
            <ul id="ap-dropdown" class="collapse list-unstyled ">
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
              <li><a href="#">Page</a></li>
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
   <div class="page-content" style="background-color:#22252a; height:unset;">
    <div class="page-header">
      <div class="container-fluid">
        <h2 class="h5 no-margin-bottom">Aire protégée</h2>
      </div>
    </div>
    <section class="no-padding-bottom">
      <div class="container-fluid">
       <div class="row">
        <div class="col-sm-12">
          <h4>Profil</h4>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-8 col-md-8">
          <div class="bar-chart block no-margin-bottom">
            <label for="name_ap">Nom : </label>
            <input id="name_ap" type="text" class="form-control" title="Nom de l'AP" placeholder="Taper ici le nom de l'AP">
            <label for="categorie_ap">Catégorie : </label>
            <select id="categorie_ap" class="form-control" title="Choisir le catégorie de l'AP">
             <option class="form-control">Catégorie I</option>
             <option class="form-control">Catégorie II</option>
           </select>
           <!--<input id="categorie_ap" type="text" class="form-control">-->
           <label for="gestionnaire_ap">Gestionnaire : </label>
           <select id="gestionnaire_ap" class="form-control" title="Gestionnaire de l'ap" placeholder="Taper ici le nom du gestionnaire de l'AP">
             <option class="form-control">Catégorie I</option>
             <option class="form-control">Catégorie II</option>
             <option class="form-control" onclick="alert(click);"><a href="#">Nouvelle catégorie</a></option>
           </select>
           <!--<input id="gestionnaire_ap" type="text" class="form-control">-->
           <label for="creation_ap">Création : </label>
           <input id="creation_ap" type="number" class="form-control" title="Année de création de l'AP" placeholder="Taper ici l'année de création de l'AP">
           <label for="superficie_ap">Superficie : </label>
           <input id="superficie_ap" type="number" class="form-control" title="Superifice de l'AP" placeholder="Taper ici la superficie de l'AP">
           <label for="contact_ap">Contact : </label>
           <input id="contact_ap" type="text" class="form-control" title="Comment contacter l'AP" placeholder="Taper ici l'email, le numéro de téléphone, ou autre information permettant de contacter l'AP">
           <label for="vision_ap">Vision : </label>
           <textarea id="vision_ap" class="form-control"></textarea>
           <label for="mission_ap">Mission : </label>
           <textarea id="mission_ap" class="form-control"></textarea>
           <label for="objectif_ap">Objectif : </label>
           <input id="objectif_ap" type="text" class="form-control">
           <label for="pic_ap">Photo : </label>
           <input id="pic_ap" type="file" class="form-control">
         </div>
       </div>
       <div class="col-lg-4 col-md-4">
        <div class="line-cahrt block">
          <div class="">
            <label for="layer_ap">GeoJson de la limite de l'aire protégée</label>
            <textarea id="layer_ap" class="form-control"></textarea>
          </div><br>
          <div style="height: 40vh;margin-left: unset;margin-right: unset;" id="map-placement" 
              class="bar-chart block no-margin-bottom"></div>
        </div>
      </div>
    </div>
  </div>
</section>

<br>

<section class="no-padding-bottom">
  <div class="container-fluid">
   <div class="row">
     <div class="col-sm-12">
       <h4>Contexte</h4>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-12 col-md-12">
      <div class="bar-chart block no-margin-bottom">
        <label for="region_ap">Region : </label>
        <div class="input-group mb-3">
          <select id="region_ap" class=" form-control to_complete selectpicker" 
              data-live-search="true" aria-label="Region" 
              aria-describedby="Region de l'AP"></select>
          <div class="input-group-append">
           <button class="btn btn-outline-secondary" type="button" data-toggle="modal" 
              data-target="#modal-add-basic" onclick="openNewModal('region')">Nouveau</button>
         </div>
       </div>
       <!-- <input id="region_ap" autocomplete="off" type="text" class="form-control to_complete selectpicker"> -->
            <!-- <select id="region_ap" class="form-control to_complete" name="region_ap" 
                placeholder="Taper ici le nom de la région"
                data-url="http://localhost:8029/siagap/region/autocomplete" 
                autocomplete="off">
              </select> -->
              
              <label for="district_ap">District : </label>
              <input id="district_ap" type="text" class="form-control">
              <label for="commune_ap">Commune : </label>
              <input id="commune_ap" type="text" class="form-control">
              <label for="fokontany_ap">Fokontany : </label>
              <input id="fokontany_ap" type="text" class="form-control">
              <label for="demographie_ap">Démographie : </label>
              <input id="demographie_ap" type="text" class="form-control">
            </div>
          </div>
        </div>
      </div>
    </section>

    <br>

    <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="bar-chart block no-margin-bottom">
              <ul>
               <li>Pêche</li>
               <li>Agriculture</li>
               <li>Elevage</li>
             </ul>
             <br>
             <label for="subsistance_ap">Subsistance : </label>
             <div class="input-group mb-3">
              <input type="text" class="form-control" placeholder="Subsistance" aria-label="Subsistance" aria-describedby="Subsistance de la population">
              <div class="input-group-append">
               <button class="btn btn-outline-secondary" type="button">Ajouter</button>
             </div>
           </div>
         </div>
       </div>
       <div class="col-lg-4 col-md-4">
        <div class="bar-chart block no-margin-bottom">
          <ul>
           <li>Isolement</li>
           <li>Isolement</li>
           <li>Isolement</li>
         </ul>
         <br>
         <label for="pbm_ap">Problème : </label>
         <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Problème" aria-label="problème" aria-describedby="Problème de la population">
          <div class="input-group-append">
           <button class="btn btn-outline-secondary" type="button">Ajouter</button>
         </div>
       </div>
     </div>
   </div>
   <div class="col-lg-4 col-md-4">
    <div class="bar-chart block no-margin-bottom">
      <ul>
       <li>Surpêche</li>
       <li>Chasse</li>
       <li>Chasse</li>
     </ul>
     <br>
     <label for="pression_ap">Pression : </label>
     <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Pression" aria-label="Pression" aria-describedby="Pression sur l'AP">
      <div class="input-group-append">
       <button class="btn btn-outline-secondary" type="button">Ajouter</button>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>

<br>

<section class="no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="bar-chart block no-margin-bottom">
          <table class="table">
           <tr>
            <td>Subsistance</td>
            <td>Problème</td>
            <td>Pression</td>
          </tr>
          <tr>
            <td>Subsistance</td>
            <td>Problème</td>
            <td>Pression</td>
          </tr>
        </table>

        <hr>

        <div class="row">
         <div class="col-md-3">
          <select class="form-control">
           <option>Peche</option>
         </select>
       </div>
       <div class="col-md-3">
        <select class="form-control">
         <option>Manque d'opportunités</option>
       </select>
     </div>
     <div class="col-md-3">
      <select class="form-control">
       <option>Surpêche</option>
     </select>
   </div>
   <div class="col-md-3">
    <button class="btn btn-primary">Ajouter</button>
  </div>
</div>
</div>
</div>
<div class="col-lg-6 col-md-6">
  <div class="bar-chart block no-margin-bottom">
    <ul>
     <li>Isolement</li>
     <li>Isolement</li>
     <li>Isolement</li>
   </ul>
   <br>
   <label for="pbm_ap">Problème : </label>
   <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Problème" aria-label="problème" aria-describedby="Problème de la population">
    <div class="input-group-append">
     <button class="btn btn-outline-secondary" type="button">Ajouter</button>
   </div>
 </div>
</div>
</div>
</div>
</div>
</section>

<br>

<section class="no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
     <div class="col-sm-12">
       <h4>Cibles</h4>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-3 col-md-3">
      <div class="bar-chart block no-margin-bottom">
        <ul>
         <li>Récifs</li>
         <li>Mangroves</li>
         <li>Tortues</li>
       </ul>

       <hr>

       <label for="cible">Cible</label>
       <div id="cible" class="input-group mb-3">
        <input type="text" class="form-control" placeholder="cible" aria-label="Cible" aria-describedby="Cible de conservation">
        <div class="input-group-append">
         <button class="btn btn-outline-secondary" type="button">Ajouter</button>
       </div>
     </div>
   </div>
 </div>
 <div class="col-lg-6 col-md-6">
  <div class="bar-chart block no-margin-bottom">
    <table class="table">
     <tr>
      <td>Subsistance</td>
      <td>Problème</td>
      <td>Pression</td>
    </tr>
    <tr>
      <td>Subsistance</td>
      <td>Problème</td>
      <td>Pression</td>
    </tr>
  </table>

  <hr>

  <div class="row">
   <div class="col-md-3">
    <select class="form-control">
     <option>Peche</option>
   </select>
 </div>
 <div class="col-md-3">
  <select class="form-control">
   <option>Manque d'opportunités</option>
 </select>
</div>
<div class="col-md-3">
  <select class="form-control">
   <option>Surpêche</option>
 </select>
</div>
<div class="col-md-3">
  <button class="btn btn-primary">Ajouter</button>
</div>
</div>
</div>
</div>
<div class="col-lg-3 col-md-3">
  <div class="bar-chart block no-margin-bottom">
    <ul>
     <li>Récifs</li>
     <li>Mangroves</li>
     <li>Tortues</li>
   </ul>

   <hr>

   <label for="cible">Cible</label>
   <div id="cible" class="input-group mb-3">
    <input type="text" class="form-control" placeholder="cible" aria-label="Cible" aria-describedby="Cible de conservation">
    <div class="input-group-append">
     <button class="btn btn-outline-secondary" type="button">Ajouter</button>
   </div>
 </div>
</div>
</div>
</div>
</div>
</section>

<br>

<section class="no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="bar-chart block no-margin-bottom">
          <table class="table">
           <tr>
            <th class="text-right">Nom</th>
            <th class="text-right">Note</th>
          </tr>
          <tr>
            <td class="text-right">Problème</td>
            <td class="text-right">Pression</td>
          </tr>
        </table>

        <hr>

        <div class="row">
         <div class="col-md-4">
          <label for="nom_intrants">Nom</label>
          <input id="nom_intrants" type="text" class="form-control">
        </div>
        <div class="col-md-4">
          <label for="note_intrants">Note</label>
          <input id="note_intrants" type="number" class="form-control">
        </div>
        <div class="col-md-4">
          <br>
          <button class="btn btn-primary">Ajouter</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6">
    <div class="bar-chart block no-margin-bottom">
      <ul>
       <li>Isolement</li>
       <li>Isolement</li>
       <li>Isolement</li>
     </ul>
     <br>
     <label for="pbm_ap">Problème : </label>
     <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Problème" aria-label="problème" aria-describedby="Problème de la population">
      <div class="input-group-append">
       <button class="btn btn-outline-secondary" type="button">Ajouter</button>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>

<br>

<section class="no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="bar-chart block no-margin-bottom">
          <table class="table">
           <tr>
            <th class="text-right">Post</th>
            <th class="text-right">Nombre de femme</th>
            <th class="text-right">Nombre d'homme</th>
          </tr>
          <tr>
            <td class="text-right">Cadre </td>
            <td class="text-right">1</td>
            <td class="text-right">1</td>
          </tr>
        </table>

        <hr>

        <div class="row">
         <div class="col-md-3">
          <label for="poste_rh">Poste</label>
          <select id="poste_rh" class="form-control">
           <option>Cadre</option>
           <option>Ouvrier</option>
         </select>
       </div>
       <div class="col-md-3">
        <label for="nbr_femme_rh">Nbr Femme</label>
        <input id="nbr_femme_rh" type="number" class="form-control">
      </div>
      <div class="col-md-3">
        <label for="nbr_homme_rh">Nbr Homme</label>
        <input id="nbr_homme_rh" type="number" class="form-control">
      </div>
      <div class="col-md-3">
        <br>
        <button class="btn btn-primary">Ajouter</button>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-6 col-md-6">
  <div class="bar-chart block no-margin-bottom">
    <ul>
     <li>Isolement</li>
     <li>Isolement</li>
     <li>Isolement</li>
   </ul>
   <br>
   <label for="pbm_ap">Problème : </label>
   <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Problème" aria-label="problème" aria-describedby="Problème de la population">
    <div class="input-group-append">
     <button class="btn btn-outline-secondary" type="button">Ajouter</button>
   </div>
 </div>
</div>
</div>
</div>
</div>
</section>

<br>

<section class="no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6 col-md-6">
        <div class="bar-chart block no-margin-bottom">
          <table class="table">
           <tr>
            <th class="text-right">Nom</th>
            <th class="text-right">Note</th>
          </tr>
          <tr>
            <td class="text-right">Résultats</td>
            <td class="text-right">56</td>
          </tr>
        </table>

        <hr>

        <div class="row">
         <div class="col-md-4">
          <label for="nom_pag">Nom</label>
          <input id="nom_pag" type="text" class="form-control">
        </div>
        <div class="col-md-4">
          <label for="note_pag">Note</label>
          <input id="note_pag" type="number" class="form-control">
        </div>
        <div class="col-md-4">
          <br>
          <button class="btn btn-primary">Ajouter</button>
        </div>
      </div>
    </div>
  </div>
  <div class="col-lg-6 col-md-6">
    <div class="bar-chart block no-margin-bottom">
      <ul>
       <li>Isolement</li>
       <li>Isolement</li>
       <li>Isolement</li>
     </ul>
     <br>
     <label for="pbm_ap">Problème : </label>
     <div class="input-group mb-3">
      <input type="text" class="form-control" placeholder="Problème" aria-label="problème" aria-describedby="Problème de la population">
      <div class="input-group-append">
       <button class="btn btn-outline-secondary" type="button">Ajouter</button>
     </div>
   </div>
 </div>
</div>
</div>
</div>
</section>

<br>

<section class="no-padding-bottom">
  <div class="container-fluid">
    <div class="row">
     <div class="col-sm-12">
       <h4>Résultats</h4>
     </div>
   </div>
   <div class="row">
    <div class="col-lg-6 col-md-6">
      <div class="bar-chart block no-margin-bottom">
        <table class="table">
         <tr>
          <th class="text-right">Date</th>
          <th class="text-right">Niveau globale</th>
          <th class="text-right">Commentaire</th>
        </tr>
        <tr>
          <td class="text-right">21-10-2018</td>
          <td class="text-right">56</td>
          <td class="text-right">Mi-parcours</td>
        </tr>
      </table>

      <hr>

      <div class="row">
       <div class="col-md-3">
        <label for="date_realisation">Date</label>
        <input id="date_realisation" type="date" class="form-control">
      </div>
      <div class="col-md-3">
        <label for="note_realisation">Niveau globale</label>
        <input id="note_realisation" type="number" class="form-control">
      </div>
      <div class="col-md-3">
        <label for="comm_realisation">Commentaire</label>
        <input id="comm_realisation" type="text" class="form-control">
      </div>
      <div class="col-md-3">
        <br>
        <button class="btn btn-primary">Ajouter</button>
      </div>
    </div>
  </div>
</div>
<div class="col-lg-6 col-md-6">
  <div class="bar-chart block no-margin-bottom">
    <ul>
     <li>Isolement</li>
     <li>Isolement</li>
     <li>Isolement</li>
   </ul>
   <br>
   <label for="pbm_ap">Problème : </label>
   <div class="input-group mb-3">
    <input type="text" class="form-control" placeholder="Problème" aria-label="problème" aria-describedby="Problème de la population">
    <div class="input-group-append">
     <button class="btn btn-outline-secondary" type="button">Ajouter</button>
   </div>
 </div>
</div>
</div>
</div>
</div>
</section>

<br>      

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

<!-- Modal add -->
<div class="modal fade" id="modal-add-basic" tabindex="-1" role="dialog" 
    aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title-modal-add-basic">Nouveau</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label for="new-label" class="col-form-label">Nom:</label>
            <input type="text" class="form-control" id="new-label">
          </div>
          <div class="form-group">
            <label for="comment-text" class="col-form-label">Commentaire:</label>
            <textarea class="form-control" id="comment-text"></textarea>
          </div>
          <input type="hidden" id="model-to-add">
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-primary" onclick="addNew()">Enregistrer</button>
      </div>
    </div>
  </div>
</div>


<!-- JavaScript files-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<!-- autocomplete -->
<!-- <script src="https://cdn.jsdelivr.net/gh/xcash/bootstrap-autocomplete@v2.2.1/dist/latest/bootstrap-autocomplete.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

<!-- map -->
<script src="<?php echo base_url(); ?>assets/js/map-controller.js"></script>

<!-- bootstrap-slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/bootstrap-slider.min.js"></script>

<script src="<?php echo base_url(); ?>assets/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/front.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js"></script>

<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/ajax-bootstrap-select.min.css">
<script src="<?php echo base_url(); ?>assets/js/ajax-bootstrap-select.min.js"></script>

<!-- <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->

  <script type="text/javascript">
    $.ajax({
      method: "GET",
      url: "http://localhost:8029/siagap/category/autocomplete",
      data: { q: "I" },
      dataType: "json"
    }).done(function( cat ) {
      var options = "";
      for (var i = cat.length - 1; i >= 0; i--) {
        options += "<option>"+ cat[i] + "</option>";
      }
      $('#categorie_ap').html(options);
      $.ajax({
        method: "GET",
        url: "http://localhost:8029/siagap/gestionnaire/autocomplete",
        data: { q: "" },
        dataType: "json"
      }).done(function( gest ) {
        var options = "";
        for (var i = gest.length - 1; i >= 0; i--) {
          options += "<option>"+ gest[i] + "</option>";
        }
        $('#gestionnaire_ap').html(options);
      });
    });

    /*$('.to_complete').autoComplete();*/
  /*$.get("http://localhost:8029/siagap/region/autocomplete", function(data) {
    $("#region_ap").typeahead({ source:data });
  },'json');*/

  $('#region_ap').selectpicker().ajaxSelectPicker({
    ajax: {
      url: 'http://localhost:8029/siagap/region/autocomplete',
      type: 'GET',
      dataType: 'json',
      data: {
        q: '{{{q}}}'
      }
    },
    preprocessData: function (data) {
      var i, l = data.length, array = [];
      if (l) {
        for (i = 0; i < l; i++) {
          array.push($.extend(true, data[i], {
            text : data[i].label,
            value: data[i].id,
            data : {
              subtext: data[i].text
            }
          }));
        }
      }
      return array;
    }
  });

  function addNew() {
    $.ajax({
      method: "POST",
      url: "http://localhost:8029/siagap/"+ $('#model-to-add').val() +"/new",
      data: { label: $('#new-label').val(), comment: $('#comment-text').val() },
      dataType: "json"
    }).done(function( gest ) {
      if (gest.indexOf('true')) {
        $('#new-label').val('');
        $('#comment-text').val('');
      }
    });
  }

  function openNewModal(model) {
    $('#model-to-add').val(model);
  }
  
</script>

</body>
</html>