<div class="page-content" style="background-color:#22252a; min-height: 100vh; margin-left: 0px; width: 100%;">
  <div class="page-header">
    <div class="container-fluid">
      <h2 class="h5 no-margin-bottom">Aire protégée</h2>
      <!-- <small>
        Attention : 
      </small><br> -->
      <small>
        -Toute modification faites sont directement pris en compte dans le site web
      </small><br>
      <small>
        -S'il y a un bouton "Enregistrer", il faut cliquer dessus pour que les modifications soient pris en compte
      </small><br>
      <small>
        -S'il n'y pas de bouton "Enregistrer", les modifications sont directement pris en compte
      </small>
      <input type="hidden" id="id_ap" value="<?php echo($id_ap) ?>">
    </div>
  </div>
  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8" data-toggle="collapse" href="#profil_collapse" 
            role="button" aria-expanded="false" aria-controls="profil_collapse">
          <h4 style="float: left;">Profil</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="align-items-start collapse show" id="profil_collapse">
        <div class="row">
          <div class="col-lg-8 col-md-8">
            <div class="bar-chart block no-margin-bottom">
              <label for="name_ap">Nom : </label>
              <input id="name_ap" type="text" class="form-control" title="Nom de l'AP" 
                  placeholder="Taper ici le nom de l'AP" value="<?php echo($profil_ap->name) ?>">
              <label for="c_name_ap">Nom complet de l'AP: </label>
              <input id="c_name_ap" type="text" class="form-control" title="Nom complet de l'AP" 
                  placeholder="Taper ici le nom complet de l'AP" value="<?php echo($profil_ap->nom_complet) ?>">
              <label for="creation_ap">Création : </label>
              <input id="creation_ap" type="number" class="form-control" 
                  title="Année de création de l'AP" 
                  placeholder="Taper ici l'année de création de l'AP"
                  value="<?php echo($profil_ap->creation_date) ?>" >
              <label for="categorie_ap">Catégorie : </label>
              <select id="categorie_ap" class="form-control" 
                  title="Choisir le catégorie de l'AP">
                <?php for ($i=0; $i < sizeof($category); $i++) { ?>
                  <option class="form-control" value="<?php echo $category[$i]->id; ?>"
                      <?php if ($category[$i]->id == $profil_ap->category_id) {echo 'selected';} ?>>
                    <?php echo $category[$i]->label; ?>
                  </option>
                <?php } ?>
              </select>
              <!--<input id="categorie_ap" type="text" class="form-control">-->
              <label for="gestionnaire_ap">Gestionnaire délégué: </label>
              <select id="gestionnaire_ap" class="form-control" title="Gestionnaire de l'ap" 
                  placeholder="Taper ici le nom du gestionnaire de l'AP">
                <?php for ($i=0; $i < sizeof($gestionnaire); $i++) { ?>
                  <option class="form-control" value="<?php echo $gestionnaire[$i]->id; ?>"
                      <?php if ($gestionnaire[$i]->id == $profil_ap->gestionnaire_id) {echo 'selected';} ?>>
                    <?php echo $gestionnaire[$i]->label; ?>
                  </option>
                <?php } ?>
              </select>
              <label for="other_ap">Autre structure de gouvernance : </label>
              <input id="other_ap" type="text" class="form-control" 
                  title="Autre structure de gouvernance de l'AP" 
                  placeholder="Taper ici la liste des autres structures de gouvernance séparée par des virgules"
                  value="<?php echo($profil_ap->other_gov) ?>" >
              <!--<input id="gestionnaire_ap" type="text" class="form-control">-->
              <label for="nbr_voi">Nombre de VOI : </label>
              <input id="nbr_voi" type="number" class="form-control" 
                  title="Nombre de VOI de l'AP" 
                  placeholder="Taper ici le nombre de VOI"
                  value="<?php echo($profil_ap->nbr_voi) ?>" >
              <label for="superficie_ap">Superficie (Ha) : </label>
              <input id="superficie_ap" type="number" class="form-control" 
                  title="Superifice de l'AP" 
                  placeholder="Taper ici la superficie de l'AP"
                  value="<?php echo($profil_ap->area) ?>">
              <label for="area_voi">Surface de VOI : </label>
              <input id="area_voi" type="number" class="form-control" 
                  title="Surface de VOI de l'AP" 
                  placeholder="Taper ici la superficie en ha gérée par l'ensemble des VOIs "
                  value="<?php echo($profil_ap->area_voi) ?>" >
              <label for="contact_ap">Contact : </label>
              <textarea id="contact_ap" class="form-control" title="Comment contacter l'AP" 
                  placeholder="Taper ici l'email, le numéro de téléphone, 
                  ou autre information permettant de contacter l'AP"><?php echo($profil_ap->contact) ?>    
              </textarea>
              <label for="vision_ap">Vision de l'AP: </label>
              <textarea id="vision_ap" class="form-control" title="Liste des visions de l'ap" 
                  placeholder="Taper ici les visions de l'ap"><?php echo($profil_ap->vision) ?>
              </textarea>
              <label for="mission_ap">Mission de l'AP : </label>
              <textarea id="mission_ap" class="form-control" title="Liste des missions de l'ap" 
                  placeholder="Taper ici les missions de l'ap"><?php echo($profil_ap->mission) ?>
              </textarea>
              <label for="objectif_ap">Objectif de l'AP : </label>
              <textarea id="objectif_ap" class="form-control" title="L'objectif de l'ap" 
                  placeholder="Taper ici l'objectif de l'ap"><?php echo($profil_ap->objectif) ?>
              </textarea>
              <label for="message">Message du chef de site : </label>
              <textarea id="message" class="form-control" 
                  title="Message du chef de site" 
                  placeholder="Taper ici le message du chef de site"><?php echo($profil_ap->message) ?></textarea>
              <!-- <input id="message" type="text" class="form-control" 
                  title="Message du chef de site" 
                  placeholder="Taper ici le message du chef de site"
                  value="<?php echo($profil_ap->message) ?>" > -->
              <br>
              <button class="btn btn-success" 
                  title="Enregistrer les informations sur le profil de l'ap" 
                  style="float: right;" onclick="saveAP()">
                Enregistrer
              </button><br><br>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="row">
              <div class="line-cahrt block">
                <div class="">
                  <label for="layer_ap">GeoJson de la limite de l'aire protégée</label>
                  <input type="file" name="" id="layer_ap" class="form-control">
                </div>
                <br>
                <button class="btn btn-success" style="float: right;"
                    onclick="saveLayer()">Enregistrer</button>
                <br><br><br><br>
                <div style="height: 60vh;" 
                    id="bo-map-placement" 
                    class="no-margin-bottom">
                </div>    
                <br>
              </div>
            </div>
            <div class="row">
              
              <div class="bar-chart block no-margin-bottom">
                <label for="pic_ap">Photo : </label>
                <input id="pic_ap" type="file" class="form-control" 
                    title="Importer ici la photo de l'ap">
                <br>
                <button class="btn btn-success" 
                    title="Enregistrer la photo de l'ap" 
                    style="float: right;" onclick="saveApPhoto()">
                  Enregistrer
                </button>
                <div id="ap_photo">
                  <?php if ($profil_ap->link_photo!=null && $profil_ap->link_photo!='') { ?>
                    <br><br><br><br>
                    <img style="max-width: 100%; max-height: 50vh;" src="<?php echo(base_url().$profil_ap->link_photo) ?>">
                  <?php } ?>
                </div>
                <br><br>
              </div>
              
            </div>
          </div>
        </div>
        <br>
      </div>
    </div>
  </section>

  <br>

  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <!-- <div class="col-sm-8" data-toggle="collapse" href="#contexte_collapse" 
            role="button" aria-expanded="false" aria-controls="contexte_collapse"> -->
        <div data-toggle="collapse" data-target=".ctx_collapse" aria-expanded="false" 
            aria-controls="contexte_collapse1 contexte_collapse2" class="col-sm-8">
          <h4 style="float: left;">Contexte</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="row collapse ctx_collapse" id="contexte_collapse1">
        <div class="col-lg-12 col-md-12">
          <div class="bar-chart block no-margin-bottom">
            <label for="region_ap">Region : </label>
            <div class="input-group mb-3">
              <select id="region_ap" class=" form-control to_complete selectpicker" 
                  data-live-search="true" aria-label="Region" 
                  aria-describedby="Region de l'AP">
                <?php if ($profil_ap->region_id != null && $profil_ap->region_id > 0) { ?>
                  <optgroup label="Currently Selected">
                    <option value="<?php echo($region_ap[0]->id) ?>" 
                        title="<?php echo($region_ap[0]->label) ?>" 
                        selected="selected">
                      <?php echo($region_ap[0]->label) ?>
                    </option>
                  </optgroup>    
                <?php } ?>
              </select>
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button" 
                    data-toggle="modal" data-target="#modal-add-basic" 
                    onclick="openNewModal('region')">
                  Nouveau
                </button>
              </div>
            </div>
            <label for="district_ap">District : </label>
            <input id="district_ap" type="text" class="form-control"
                value="<?php echo($profil_ap->district) ?>">
            <label for="commune_ap">Commune : </label>
            <input id="commune_ap" type="text" class="form-control"
                value="<?php echo($profil_ap->commune) ?>">
            <label for="fokontany_ap">Fokontany : </label>
            <input id="fokontany_ap" type="text" class="form-control"
                value="<?php echo($profil_ap->fokontany) ?>">
            <label for="demographie_ap">Démographie (Habitants): </label>
            <input id="demographie_ap" type="number" class="form-control"
                value="<?php echo($profil_ap->demography) ?>"><br>
            <button class="btn btn-success" 
                title="Enregistrer les informations de ce section" 
                style="float: right;" onclick="saveAPContext()">
              Enregistrer
            </button><br><br>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="ctx_collapse collapse" id="contexte_collapse2">
  
    <br>

    <section class="no-padding-bottom">
      <div class="container-fluid">
        <!-- <div class="row"> -->
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="bar-chart block no-margin-bottom">
                <label>Subsistances des populations locales : </label>
                <ul id="li-subsistance">
                  <?php 
                    if ($subsistances_ap != null && !empty($subsistances_ap)) {
                      for ($i=0; $i < sizeof($subsistances_ap); $i++) { 
                  ?>
                  <li><?php echo $subsistances_ap[$i]->label; ?></li>
                  <?php    
                      }
                    }
                  ?>
                </ul>
                <style type="text/css">
                  .backgroundWhite {
                    background-color: white!important;
                  }
                </style>
                <textarea id="subs_ap_Subsistance" class="form-control backgroundWhite" disabled><?php echo($profil_ap->subsistance) ?></textarea>
                <br>
                <button class="btn btn-outline-secondary" data-toggle="modal" 
                    data-target="#modal-add-modification" 
                    onclick="getAllAM('Ap','Subsistance')"
                    style="float: right;">
                    <!-- onclick="getAllForModificationPopUp('Ap','Subsistance')"> -->
                  Modifier
                </button>
                <br><br><br>
                <!-- <button class="btn btn-outline-secondary col-md-5" data-toggle="modal" 
                    data-target="#modal-add-basic" onclick="openNewModal('subsistance')">
                  Nouveau
                </button> -->
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="bar-chart block no-margin-bottom">
                <label>Problème : </label>
                <!-- <ul id="li-problem">
                  <?php 
                    if ($problem_ap != null && !empty($problem_ap)) {
                      for ($i=0; $i < sizeof($problem_ap); $i++) { 
                  ?>
                  <li><?php echo $problem_ap[$i]->label; ?></li>
                  <?php    
                      }
                    }
                  ?>
                </ul> -->
                <textarea id="subs_ap_Probleme" class="form-control backgroundWhite"><?php echo($profil_ap->probleme) ?></textarea>
                <br>
                <button class="btn btn-success" style="float: right;" data-toggle="modal" 
                    onclick="setPbmAp()">
                  Enregistrer
                </button>
                <br><br><br>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-lg-12 col-md-12">
              <div class="bar-chart block no-margin-bottom">
                <label>soloina pressions et menaces pesant sur l’AP : </label>
                <ul id="li-pression">
                  <?php 
                    if ($pression_ap != null && !empty($pression_ap)) {
                      for ($i=0; $i < sizeof($pression_ap); $i++) { 
                  ?>
                  <li><?php echo $pression_ap[$i]->label; ?></li>
                  <?php    
                      }
                    }
                  ?>
                </ul>
                <textarea id="subs_ap_Pression" class="form-control backgroundWhite" disabled><?php echo($profil_ap->pression) ?></textarea>
                <br>
                <button class="btn btn-outline-secondary" data-toggle="modal" 
                    data-target="#modal-add-modification" 
                    
                    onclick="getAllAM('Ap','Pression')"
                    style="float: right;">
                    <!-- onclick="getAllForModificationPopUp('Ap','Pression')"> -->
                  Modifier
                </button>
                <br><br><br>
                <!-- <button class="btn btn-outline-secondary col-md-5" data-toggle="modal" 
                    data-target="#modal-add-basic" onclick="openNewModal('pression')">
                  Nouveau
                </button> -->
              </div>
            </div>
          </div>
      <!-- </div> -->
    </section>

    <br>

    <!-- <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <table class="table" id="subsistanceproblempression_table">
                <tr>
                  <th>Subsistance</th>
                  <th>Problème</th>
                  <th>Pression</th>
                </tr>
                <?php 
                  if ($rel_subs_pbm_pression != null && !empty($rel_subs_pbm_pression)) {
                    for ($i=0; $i < sizeof($rel_subs_pbm_pression); $i++) { 
                ?>
                <tr>
                  <td>
                    <?php echo $rel_subs_pbm_pression[$i]->subsistance_label; ?>
                  </td>
                  <td>
                    <?php echo $rel_subs_pbm_pression[$i]->problem_label; ?>
                  </td>
                  <td>
                    <?php echo $rel_subs_pbm_pression[$i]->pression_label; ?>
                  </td>
                </tr>
                <?php    
                    }
                  }
                ?>
              </table>
              <hr>
              <div class="row">
                <div class="col-md-3">
                  <select class="form-control subsistanceproblempression_1" 
                      id="opt-subsistance">
                  <?php 
                      if ($subsistances_ap != null && !empty($subsistances_ap)) {
                        for ($i=0; $i < sizeof($subsistances_ap); $i++) { 
                    ?>
                    <option value="<?php echo $subsistances_ap[$i]->id; ?>">
                      <?php echo $subsistances_ap[$i]->label; ?>
                    </option>
                    <?php    
                        }
                      }
                    ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control subsistanceproblempression_2" 
                      id="opt-problem">
                    <?php 
                      if ($problem_ap != null && !empty($problem_ap)) {
                        for ($i=0; $i < sizeof($problem_ap); $i++) { 
                    ?>
                    <option value="<?php echo $problem_ap[$i]->id; ?>">
                      <?php echo $problem_ap[$i]->label; ?>
                    </option>
                    <?php    
                        }
                      }
                    ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <select class="form-control subsistanceproblempression_3" 
                      id="opt-pression">
                    <?php 
                      if ($pression_ap != null && !empty($pression_ap)) {
                        for ($i=0; $i < sizeof($pression_ap); $i++) { 
                    ?>
                    <option value="<?php echo $pression_ap[$i]->id; ?>">
                      <?php echo $pression_ap[$i]->label; ?>
                    </option>
                    <?php    
                        }
                      }
                    ?>
                  </select>
                </div>
                <div class="col-md-3">
                  <button class="btn btn-primary" 
                      onclick="updateAssoc2('Subsistance', 'Problem', 'Pression')">
                    Ajouter
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <style type="text/css">
                #diagram_rel_subs_pbm_pression {
                  max-width: unset!important;
                  width: 100%!important;
                  height: 25vh
                }
              </style>
              <div class="" id="diagram_rel_subs_pbm_pression">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  </div>

  <br>

  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8" data-toggle="collapse" href="#pagd_collapse" 
            role="button" aria-expanded="false" aria-controls="pagd_collapse">
          <h4 style="float: left;">Planification</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="row collapse" id="pagd_collapse">
        <div class="col-lg-12 col-md-12">
          <small>Le document doit être sous format PDF ou Word</small><br>
          <small>La taille du document ne doit pas dépasser 6MB</small><br><br>
          <div id="download_pag_place"></div>
          <!-- <button class="btn btn-outline-secondary"><i class="fa fa-download"></i> Télécharger PAG</button> -->
          <br><br>
          <label for="pag_d">PAG : </label>
          <input id="pag_d" type="file" class="form-control" 
              title="Importer ici le document pag de votre AP"><br>
          <!-- <textarea placeholder="Veuillez ecrir ici tout éventuel commentaire" id="pag_d_comm" class="form-control"></textarea>
          <br> -->
          <button class="btn btn-success" 
              title="Enregistrer la photo de l'ap" 
              style="float: right;" onclick="savepag()">
            Enregistrer
          </button>
        </div>
      </div>
    </div>
  </section>

  <br>

  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div data-toggle="collapse" data-target=".cbl_collapse" aria-expanded="false" 
            aria-controls="cible_collapse cible_collapse1" class="col-sm-8">
          <h4 style="float: left;">Cibles</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="row collapse cbl_collapse" id="cible_collapse">
        <div class="col-lg-12 col-md-12">
          <div class="bar-chart block no-margin-bottom">
            <label>cibles de conservation : </label>
            <ul id="li-cible">
              <?php 
                if ($cible_ap != null && !empty($cible_ap)) {
                  for ($i=0; $i < sizeof($cible_ap); $i++) { 
              ?>
              <li><?php echo $cible_ap[$i]->label; ?></li>
              <?php    
                  }
                }
              ?>
            </ul>
            <button class="btn btn-outline-secondary col-md-5" data-toggle="modal" 
                data-target="#modal-modify-c" 
                onclick="getCiblesByCategory()">
              Modifier
            </button>
            <button class="btn btn-outline-secondary col-md-5" data-toggle="modal" 
                data-target="#modal-add-c" onclick="getCategoryCible()">
              Nouveau
            </button>
          </div>
        </div>
        <!-- <div class="col-lg-6 col-md-6">
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
        </div> -->
        <!-- <div class="col-lg-3 col-md-3">
          <div class="bar-chart block no-margin-bottom">
            <ul>
              <li>Récifs</li>
              <li>Mangroves</li>
              <li>Tortues</li>
            </ul>
            <hr>
            <label for="cible">Cible</label>
            <div id="cible" class="input-group mb-3">
              <input type="text" class="form-control" placeholder="cible" 
                  aria-label="Cible" aria-describedby="Cible de conservation">
              <div class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                  Ajouter
                </button>
              </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <div class="collapse cbl_collapse" id="cible_collapse1">

    <br>

    <!-- <section class="no-padding-bottom">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <table class="table">
                <tr>
                  <th class="text-right">Nom</th>
                  <th class="text-right">Note</th>
                </tr>

                <?php 
                  if ($intrant != null && !empty($intrant)) {
                    for ($i=0; $i < sizeof($intrant); $i++) { 
                ?>
                  <tr>
                    <td class="text-right"><?php echo $intrant[$i]->label; ?></td>
                    <td class="text-right">
                      <input name="note_intrants" type="number" class="form-control">
                    </td>
                  </tr>
                <?php    
                    }
                  }
                ?>
              </table>
              <hr>
              <div class="row">
                <button class="btn btn-primary offset-md-8 offset-lg-8 col-md-3 col-lg-3"
                    onclick="updateAssoc3('ap', 'intrant', 'note_intrants', 'note_intrants')">
                  Enregistrer
                </button>
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
                <input type="text" class="form-control" 
                    placeholder="Problème" aria-label="problème" 
                    aria-describedby="Problème de la population">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">
                    Ajouter
                  </button>
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
                <?php 
                  if ($level != null && !empty($level)) {
                    for ($i=0; $i < sizeof($level); $i++) { 
                ?>
                  <tr>
                    <td class="text-right"><?php echo $level[$i]->label; ?></td>
                    <td class="text-right">
                      <input name="note_levelw" type="number" class="form-control">
                    </td>
                    <td class="text-right">
                      <input name="note_levelm"  type="number" class="form-control">
                    </td>
                  </tr>
                <?php    
                    }
                  }
                ?>
              </table>
              <hr>
              <div class="row">
                <div class="offset-lg-8 offset-md-8 col-md-3">
                  <button class="btn btn-primary" 
                      onclick="updateAssoc3('ap', 'level', 'note_levelm', 'note_levelw')">
                    Enregistrer
                  </button>
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
                <input type="text" class="form-control" placeholder="Problème" 
                    aria-label="problème" 
                    aria-describedby="Problème de la population">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">
                    Ajouter
                  </button>
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

                <?php 
                  if ($pag != null && !empty($pag)) {
                    for ($i=0; $i < sizeof($pag); $i++) { 
                ?>
                  <tr>
                    <td class="text-right"><?php echo $pag[$i]->label; ?></td>
                    <td class="text-right">
                      <input name="note_pag" type="number" class="form-control">
                    </td>
                  </tr>
                <?php    
                    }
                  }
                ?>
              </table>
              <hr>
              <div class="row">
                <div class="offset-md-8 col-md-3">
                  <button class="btn btn-primary" 
                      onclick="updateAssoc3('ap', 'pag', 'note_pag', 'note_pag')">
                    Enregistrer
                  </button>
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
                <input type="text" class="form-control" placeholder="Problème" 
                    aria-label="problème" 
                    aria-describedby="Problème de la population">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">
                    Ajouter
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

  </div>

  <br>

  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8" data-toggle="collapse" href="#intrant_collapse" 
            role="button" aria-expanded="false" aria-controls="resultats_collapse">
          <h4 style="float: left;">Intrants</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="collapse"  id="intrant_collapse">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <table class="table">
                <tr>
                  <th class="text-right">Nom</th>
                  <th class="text-right">Note</th>
                </tr>

                <?php 
                  if ($intrant != null && !empty($intrant)) {
                    for ($i=0; $i < sizeof($intrant); $i++) { 
                ?>
                  <tr>
                    <td class="text-right"><?php echo $intrant[$i]->label; ?></td>
                    <td class="text-right">
                      <?php if ($intrant[$i]->label == "Réseau téléphonique" || $intrant[$i]->label == "Internet") { ?>
                      <select id="note_intrants<?php echo $intrant[$i]->id; ?>" name="note_intrants" class="form-control">
                        <option value="50">OUI</option>
                        <option value="0">NON</option>
                      </select>
                      <?php } else { ?>
                      <input id="note_intrants<?php echo $intrant[$i]->id; ?>" name="note_intrants" type="number" class="form-control">
                      <?php } ?>
                    </td>
                  </tr>
                <?php    
                    }
                  }
                ?>
              </table>
              <hr>
              <div class="row">
                <button class="btn btn-primary offset-md-8 offset-lg-8 col-md-3 col-lg-3"
                    onclick="updateAssoc3('Ap', 'Intrant', 'note_intrants', 'note_intrants')">
                  Enregistrer
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <div>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" disabled id="customSwitch1">
                  <label class="custom-control-label" for="customSwitch1">Internet</label>
                </div>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                  <label class="custom-control-label" for="customSwitch2">Réseau téléphonique</label>
                </div>
              </div>
              <div id="chartjs-radar" style="background-color: white; padding-top: 15px; margin-top: 10px;">
                <canvas id="radar-cnv"></canvas>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <table class="table">
                <tr>
                  <th class="text-right">Nom</th>
                  <th class="text-right">Note</th>
                </tr>

                <?php 
                  if ($accessibilite != null && !empty($accessibilite)) {
                    for ($i=sizeof($accessibilite)-1; $i >= 0; $i--) { 
                ?>
                  <tr>
                    <td class="text-right"><?php echo $accessibilite[$i]->label; ?></td>
                    <td class="text-right">
                      <?php if ($accessibilite[$i]->comment!=null && $accessibilite[$i]->comment=='Inverse') { ?>
                        <select id="acc_<?php echo $accessibilite[$i]->id; ?>" name="note_accessibilite" class="form-control">
                          <option value="<?php echo $accessibilite[$i]->id; ?>-3">Tres faible</option>
                          <option value="<?php echo $accessibilite[$i]->id; ?>-2">Faible</option>
                          <option value="<?php echo $accessibilite[$i]->id; ?>-1">Élevé</option>
                          <option value="<?php echo $accessibilite[$i]->id; ?>-0">Très élevé</option>
                        </select>
                      <?php } else {?>
                        <select id="acc_<?php echo $accessibilite[$i]->id; ?>" name="note_accessibilite" class="form-control">
                          <option value="<?php echo $accessibilite[$i]->id; ?>-3">Tres bon état</option>
                          <option value="<?php echo $accessibilite[$i]->id; ?>-2">Bon état</option>
                          <option value="<?php echo $accessibilite[$i]->id; ?>-1">Mauvais état</option>
                          <option value="<?php echo $accessibilite[$i]->id; ?>-0">Très mauvais état</option>
                        </select>
                      <?php }?>
                    </td>
                  </tr>
                <?php    
                    }
                  }
                ?>
              </table>
              <hr>
              <div class="row">
                <button class="btn btn-primary offset-md-8 offset-lg-8 col-md-3 col-lg-3"
                    onclick="addAccessibilite('note_accessibilite')">
                  Enregistrer
                </button>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <div>
                <table class="table table-acc">
                </table>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <table class="table">
                <tr>
                  <th class="text-right">Post</th>
                  <th class="text-right">Nombre de femme</th>
                  <th class="text-right">Nombre d'homme</th>
                </tr>
                <?php 
                  if ($level != null && !empty($level)) {
                    for ($i=0; $i < sizeof($level); $i++) { 
                ?>
                  <tr>
                    <td class="text-right"><?php echo $level[$i]->label; ?></td>
                    <td class="text-right">
                      <input id="note_levelw<?php echo $level[$i]->id; ?>" 
                          name="note_levelw" type="number" class="form-control">
                    </td>
                    <td class="text-right">
                      <input id="note_levelm<?php echo $level[$i]->id; ?>" 
                          name="note_levelm"  type="number" class="form-control">
                    </td>
                  </tr>
                <?php    
                    }
                  }
                ?>
              </table>
              <hr>
              <div class="row">
                <div class="offset-lg-8 offset-md-8 col-md-3">
                  <button class="btn btn-primary" 
                      onclick="updateAssoc3('Ap', 'Level', 'note_levelm', 'note_levelw')">
                    Enregistrer
                  </button>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <div id="chartjs-bar">
                <canvas id="MyBarCanvas"></canvas>
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="bar-chart block no-margin-bottom">
              <table class="table">
                <tr>
                  <th class="text-right">Nom</th>
                  <th class="text-right">Note</th>
                </tr>

                <?php 
                  if ($pag != null && !empty($pag)) {
                    for ($i=0; $i < sizeof($pag); $i++) { 
                ?>
                  <tr>
                    <td class="text-right"><?php echo $pag[$i]->label; ?></td>
                    <td class="text-right">
                      <input name="note_pag" type="number" class="form-control">
                    </td>
                  </tr>
                <?php    
                    }
                  }
                ?>
              </table>
              <hr>
              <div class="row">
                <div class="offset-md-8 col-md-3">
                  <button class="btn btn-primary" 
                      onclick="updateAssoc3('Ap', 'Pag', 'note_pag', 'note_pag')">
                    Enregistrer
                  </button>
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
        <div class="col-sm-8" data-toggle="collapse" href="#Processus_collapse" 
            role="button" aria-expanded="false" aria-controls="Processus_collapse">
          <h4 style="float: left;">Processus</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="row collapse" id="Processus_collapse">
        <div class="col-lg-12 col-md-12">
          <label for="label_link_ext">Gestion interne</label>
          <textarea class="form-control" id="gestion_interne_ap"
              value=""><?php echo($profil_ap->gestion_interne) ?></textarea><br>
          <!-- <input type="text" class="form-control" id="gestion_interne_ap"> -->
          <label for="link_link_ext">Protection et surveillance</label>
          <textarea class="form-control" id="protection_surveillance_ap"
              value=""><?php echo($profil_ap->protection) ?></textarea><br>
          <!-- <input type="text" class="form-control" id="protection_surveillance_ap"> -->
          <label for="comm_link_ext">Relation</label>
          <textarea class="form-control" id="relation_ap"
              value=""><?php echo($profil_ap->relation) ?></textarea><br>
          <!-- <input type="text" class="form-control" id="relation_ap"> -->
          <label for="comm_link_ext">Tourisme</label>
          <textarea class="form-control" id="tourisme_ap"
              value=""><?php echo($profil_ap->tourisme) ?></textarea><br>
          <!-- <input type="text" class="form-control" id="tourisme_ap"> -->
          <label for="comm_link_ext">Suivie et recherche</label>
          <textarea class="form-control" id="suivie_recherche"
              value=""><?php echo($profil_ap->suivie) ?></textarea><br>
          <!-- <input type="text" class="form-control" id="suivie_recherche"> -->
          <br>
          <button class="btn btn-success" style="float: right;"
              onclick="saveProcessusAp()">Enregistrer</button>
        </div>
        <!-- <div class="col-lg-6 col-md-6">
          <div class="bar-chart block no-margin-bottom">
            <table class="table" id="table_link_ext">
              <tr>
                <th class="text-right">Label</th>
                <th class="text-right">Lien</th>
                <th class="text-right">Commentaire</th>
              </tr>
            </table>
          </div>
        </div> -->
      </div>
    </div>
  </section>

  <br>

  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8" data-toggle="collapse" href="#resultats_collapse" 
            role="button" aria-expanded="false" aria-controls="resultats_collapse">
          <h4 style="float: left;">Résultats</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="row collapse" id="resultats_collapse">
        <div class="col-lg-12 col-md-12">
          <div class="bar-chart block no-margin-bottom">
            <table class="table">
              <tr>
                <th class="text-right">Date</th>
                <th class="text-right">Niveau d'atteinte globale</th>
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
                <label for="note_realisation">Niveau d'atteinte globale</label>
                <input id="note_realisation" type="number" class="form-control">
              </div>
              <div class="col-md-3">
                <label for="comm_realisation">Commentaire</label>
                <input id="comm_realisation" type="text" class="form-control">
              </div>
              <div class="col-md-3">
                <br>
                <button class="btn btn-primary" onclick="saveRealisation()">Ajouter</button>
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
        <div class="col-sm-8" data-toggle="collapse" href="#cc_collapse" 
            role="button" aria-expanded="false" aria-controls="cc_collapse">
          <h4 style="float: left;">Changement climatique</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="collapse" id="cc_collapse">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <label for="comm_temperature">Commentaire sur les manifestations du changement de température dans votre AP </label>
              <textarea class="form-control" id="comm_temperature"><?php echo($profil_ap->comm_temperature) ?></textarea>
              <br>
              <button class="btn btn-success" style="float: right;"
                  onclick="saveAPComponent('setAPComponent', 'comm_temperature', 'comm_temperature')">Enregistrer</button>
              <br><br><br>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <div id="ht">
                <!-- <canvas ></canvas> -->
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <label for="comm_temperature">Commentaire sur les manifestations du changement de précipitation dans votre AP </label>
              <textarea class="form-control" id="comm_precipitation"><?php echo($profil_ap->comm_precipitation) ?></textarea>
              <br>
              <button class="btn btn-success" style="float: right;"
                  onclick="saveAPComponent('setAPComponent', 'comm_precipitation', 'comm_precipitation')">Enregistrer</button>
              <br><br><br>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <div id="hp">
                <!-- <canvas ></canvas> -->
              </div>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="bar-chart block no-margin-bottom">
              <label for="comm_temperature">Commentaire sur l'daptation au CC </label>
              <textarea class="form-control" id="comm_adaptation_cc"><?php echo($profil_ap->comm_adaptation_cc) ?></textarea>
              <br>
              <button class="btn btn-success" style="float: right;"
                  onclick="saveAPComponent('setAPComponent', 'comm_adaptation_cc', 'comm_adaptation_cc')">Enregistrer</button>
              <br><br><br>
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
        <div class="col-sm-8" data-toggle="collapse" href="#aad_collapse" 
            role="button" aria-expanded="false" aria-controls="resultats_collapse">
          <h4 style="float: left;">Aide à la décision</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="collapse"  id="aad_collapse">
        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <h5>Tendance des cibles</h5>
              <select onchange="getTDC('tdc_c_id', 'table-tdc')" class="form-control" id="tdc_c_id">
                <?php 
                  if ($cible_ap != null && !empty($cible_ap)) {
                    for ($i=0; $i < sizeof($cible_ap); $i++) { 
                ?>
                <option value="<?php echo $cible_ap[$i]->cible_id; ?>">
                  <?php echo $cible_ap[$i]->label; ?>
                </option>
                <?php    
                    }
                  }
                ?>
              </select>

              <br><br>

              <label for="tdc_annee">Année : </label>
              <input type="number" class="form-control" placeholder="Année de réalisation du constat" 
                  id="tdc_annee">
              <label for="tdc_value">Valeur : </label>
              <input type="text" class="form-control" placeholder="Valeur" 
                  id="tdc_value">
              <label for="tdc_fiabilite">Fiabilité : </label>
              <!-- <input type="text" class="form-control" placeholder="Fiabilité des methodes de mesures" 
                  id="tdc_fiabilite"> -->
              <select id="tdc_fiabilite" class="form-control" placeholder="Fiabilité des methodes de mesures">
                <option value="2">Haute</option>
                <option value="1">Moyenne</option>
                <option value="0">Faible</option>
              </select>
              <!-- <label for="tdc_comment">Commentaire : </label>
              <textarea class="form-control" id="tdc_comment"></textarea> -->
              <br>
              <button class="btn btn-success" 
                  title="Enregistrer les informations de ce section" 
                  style="float: right;" onclick="saveTDC()">
                Enregistrer
              </button>
              <br><br>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <table class="table" id="table-tdc">
                <tr>
                  <th class="text-right">Année</th>
                  <th class="text-right">Valeur</th>
                  <th class="text-right">Fiabilité</th>
                  <!-- <th class="text-right">Commentaire</th> -->
                </tr>
              </table>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="bar-chart block no-margin-bottom">
              <label>Commentaire sur les tendances des cibles : </label>
              <textarea id="comm_tendance_cible" class="form-control backgroundWhite"><?php echo($profil_ap->comm_tendance_cible) ?></textarea>
              <br>
              <button class="btn btn-success" data-toggle="modal" 
                  onclick="saveAPComponent('setAPComponent', 'comm_tendance_cible', 'comm_tendance_cible')"
                  style="float: right;">
                Enregistrer
              </button>
              <br><br><br>
            </div>
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <h5>Tendance des menaces</h5>
              <select onchange="getTDM('tdm_m_id', 'table-tdm')" class="form-control" id="tdm_m_id">
                <?php 
                  if ($pression_ap != null && !empty($pression_ap)) {
                    for ($i=0; $i < sizeof($pression_ap); $i++) { 
                ?>
                <option value="<?php echo $pression_ap[$i]->pression_id; ?>"><?php echo $pression_ap[$i]->label; ?></option>
                <?php    
                    }
                  }
                ?>
              </select>

              <br><br>

              <label for="tdm_annee">Année : </label>
              <input type="number" class="form-control" placeholder="Année de réalisation du constat" 
                  id="tdm_annee">
              <label for="tdm_value">Valeur : </label>
              <input type="text" class="form-control" placeholder="Valeur" 
                  id="tdm_value">
              <label for="tdm_fiabilite">Fiabilité : </label>
              <select id="tdm_fiabilite" class="form-control" placeholder="Fiabilité des methodes de mesures">
                <option value="2">Haute</option>
                <option value="1">Moyenne fiable</option>
                <option value="0">Faible</option>
              </select>
              <!-- <input type="text" class="form-control" placeholder="Fiabilité des methodes de mesures"  -->
                  <!-- id="mn_fiabilite"> -->
              <!-- <label for="tdm_comment">Commentaire : </label>
              <textarea class="form-control" id="tdm_comment"></textarea> -->
              <br> 
              <button class="btn btn-success" 
                  title="Enregistrer les informations de ce section" 
                  style="float: right;" onclick="saveTDM()">
                Enregistrer
              </button>
              <br><br>
            </div>
          </div>
          <div class="col-lg-6 col-md-6">
            <div class="bar-chart block no-margin-bottom">
              <table class="table" id="table-tdm">
                <tr>
                  <th class="text-right">Année</th>
                  <th class="text-right">Valeur</th>
                  <th class="text-right">Fiabilité</th>
                  <!-- <th class="text-right">Commentaire</th> -->
                </tr>
              </table>
            </div>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="bar-chart block no-margin-bottom">
              <label>Commentaire sur les tendances des menaces : </label>
              <textarea id="comm_tendance_menace" class="form-control backgroundWhite"><?php echo($profil_ap->comm_tendance_menace) ?></textarea>
              <br>
              <button class="btn btn-success" data-toggle="modal" 
                  onclick="saveAPComponent('setAPComponent', 'comm_tendance_menace', 'comm_tendance_menace')"
                  style="float: right;">
                Enregistrer
              </button>
              <br><br><br>
            </div>
          </div>
        </div>

        <br><br>

        <div class="row">
          <div class="col-lg-12 col-md-12">    
            <div class="bar-chart block no-margin-bottom">
              <label for="pic_miradia">Image ou une carte de la Classification actuelle des menaces : </label>
              <input id="pic_miradia" type="file" class="form-control" 
                  title="Importer ici la photo de l'ap">
              <br>
              <button class="btn btn-success" 
                  title="Enregistrer la photo de l'ap" 
                  style="float: right;" onclick="saveMiradiaPhoto()">
                Enregistrer
              </button>
              <!-- <div id="ap_photo">
                <?php if ($profil_ap->link_photo!=null && $profil_ap->link_photo!='') { ?>
                  <br><br><br><br>
                  <img style="max-width: 100%; max-height: 50vh;" src="<?php echo(base_url().$profil_ap->link_photo) ?>">
                <?php } ?>
              </div> -->
              <br><br>
            </div>
          </div>
        </div>

      </div>
    </section>

  <br>

  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8" data-toggle="collapse" href="#link_ext_collapse" 
            role="button" aria-expanded="false" aria-controls="link_ext_collapse">
          <h4 style="float: left;">Liens externes</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="row collapse" id="link_ext_collapse">
        <div class="col-lg-6 col-md-6">
          <label for="label_link_ext">Nom de site web</label>
          <input type="text" class="form-control" id="label_link_ext">
          <label for="link_link_ext">Liens vers site web</label>
          <input type="text" class="form-control" id="link_link_ext">
          <label for="comm_link_ext">Commentaire</label>
          <input type="text" class="form-control" id="comm_link_ext">
          <br>
          <button class="btn btn-success" style="float: right;"
              onclick="saveLinkExt()">Enregistrer</button>
        </div>
        <div class="col-lg-6 col-md-6">
          <div class="bar-chart block no-margin-bottom">
            <table class="table" id="table_link_ext">
              <tr>
                <th class="text-right">Label</th>
                <th class="text-right">Lien</th>
                <th class="text-right">Commentaire</th>
              </tr>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>

  <br>

  <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8" data-toggle="collapse" href="#impacte_collapse" 
            role="button" aria-expanded="false" aria-controls="impacte_collapse">
          <h4 style="float: left;">Impact</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="row collapse" id="impacte_collapse">
        <div class="col-lg-12 col-md-12">
          <label for="impacte_ap">Changements engendrés par l'existence de votre AP : </label>
          <textarea id="impacte_ap" class="form-control"
              title=""><?php echo($profil_ap->impact) ?></textarea>
          <br>
          <!-- <textarea placeholder="Veuillez ecrir ici tout éventuel commentaire" id="pag_d_comm" class="form-control"></textarea>
          <br> -->
          <button class="btn btn-success" 
              title="Enregistrer la photo de l'ap" 
              style="float: right;" onclick="saveImpacte()">
            Enregistrer
          </button>
        </div>
      </div>
    </div>
  </section>