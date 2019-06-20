<div class="page-content" style="background-color:#22252a; height:unset;">
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
      <div class="row align-items-start collapse" id="profil_collapse">
        <div class="col-lg-8 col-md-8">
          <div class="bar-chart block no-margin-bottom">
            <label for="name_ap">Nom : </label>
            <input id="name_ap" type="text" class="form-control" title="Nom de l'AP" 
                placeholder="Taper ici le nom de l'AP" value="<?php echo($profil_ap->name) ?>">
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
            <label for="gestionnaire_ap">Gestionnaire : </label>
            <select id="gestionnaire_ap" class="form-control" title="Gestionnaire de l'ap" 
                placeholder="Taper ici le nom du gestionnaire de l'AP">
              <option class="form-control">Catégorie I</option>
              <option class="form-control">Catégorie II</option>
              <option class="form-control" onclick="alert(click);">
                <a href="#">Nouvelle catégorie</a>
              </option>
            </select>
            <!--<input id="gestionnaire_ap" type="text" class="form-control">-->
            <label for="creation_ap">Création : </label>
            <input id="creation_ap" type="number" class="form-control" 
                title="Année de création de l'AP" 
                placeholder="Taper ici l'année de création de l'AP"
                value="<?php echo($profil_ap->creation_date) ?>" >
            <label for="superficie_ap">Superficie (Ha) : </label>
            <input id="superficie_ap" type="number" class="form-control" 
                title="Superifice de l'AP" 
                placeholder="Taper ici la superficie de l'AP"
                value="<?php echo($profil_ap->area) ?>">
            <label for="contact_ap">Contact : </label>
            <textarea id="contact_ap" class="form-control" title="Comment contacter l'AP" 
                placeholder="Taper ici l'email, le numéro de téléphone, 
                ou autre information permettant de contacter l'AP"><?php echo($profil_ap->contact) ?>    
            </textarea>
            <label for="vision_ap">Vision : </label>
            <textarea id="vision_ap" class="form-control" title="Liste des visions de l'ap" 
                placeholder="Taper ici les visions de l'ap"><?php echo($profil_ap->vision) ?>
            </textarea>
            <label for="mission_ap">Mission : </label>
            <textarea id="mission_ap" class="form-control" title="Liste des missions de l'ap" 
                placeholder="Taper ici les missions de l'ap"><?php echo($profil_ap->mission) ?>
            </textarea>
            <label for="objectif_ap">Objectif : </label>
            <textarea id="objectif_ap" class="form-control" title="L'objectif de l'ap" 
                placeholder="Taper ici l'objectif de l'ap"><?php echo($profil_ap->objectif) ?>
            </textarea>
            <label for="pic_ap">Photo : </label>
            <input id="pic_ap" type="file" class="form-control" 
                title="Importer ici la photo de l'ap"><br>
            <button class="btn btn-success" 
                title="Enregistrer les informations sur le profil de l'ap" 
                style="float: right;" onclick="saveAP()">
              Enregistrer
            </button><br><br>
          </div>
        </div>
        <div class="col-lg-4 col-md-4">
          <div class="line-cahrt block">
            <div class="">
              <label for="layer_ap">GeoJson de la limite de l'aire protégée</label>
              <textarea id="layer_ap" class="form-control"></textarea>
            </div><br>
            <div style="/*height: 40vh*/;margin-left: unset;margin-right: unset;" 
                id="map-placement" 
                class="bar-chart block no-margin-bottom">
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
        <div class="row">
          <div class="col-lg-4 col-md-4">
            <div class="bar-chart block no-margin-bottom">
              <label>Subsistance : </label>
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
              <button class="btn btn-outline-secondary col-md-5" data-toggle="modal" 
                  data-target="#modal-modify-basic" 
                  onclick="getAllForModificationPopUp('ap','subsistance')">
                Modifier
              </button>
              <button class="btn btn-outline-secondary col-md-5" data-toggle="modal" 
                  data-target="#modal-add-basic" onclick="openNewModal('subsistance')">
                Nouveau
              </button>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="bar-chart block no-margin-bottom">
              <label>Problème : </label>
              <ul id="li-problem">
                <?php 
                  if ($problem_ap != null && !empty($problem_ap)) {
                    for ($i=0; $i < sizeof($problem_ap); $i++) { 
                ?>
                <li><?php echo $problem_ap[$i]->label; ?></li>
                <?php    
                    }
                  }
                ?>
              </ul>
              <button class="btn btn-outline-secondary col-md-5" data-toggle="modal" 
                  data-target="#modal-modify-basic" 
                  onclick="getAllForModificationPopUp('ap','problem')">
                Modifier
              </button>
              <button class="btn btn-outline-secondary col-md-5" data-toggle="modal" 
                  data-target="#modal-add-basic" onclick="openNewModal('problem')">
                Nouveau
              </button>
            </div>
          </div>
          <div class="col-lg-4 col-md-4">
            <div class="bar-chart block no-margin-bottom">
              <label>Pression : </label>
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
              <button class="btn btn-outline-secondary col-md-5" data-toggle="modal" 
                  data-target="#modal-modify-basic" 
                  onclick="getAllForModificationPopUp('ap','pression')">
                Modifier
              </button>
              <button class="btn btn-outline-secondary col-md-5" data-toggle="modal" 
                  data-target="#modal-add-basic" onclick="openNewModal('pression')">
                Nouveau
              </button>
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
                <input type="text" class="form-control" placeholder="Problème" 
                    aria-label="problème" aria-describedby="Problème de la population">
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

  </div>

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
              <input type="text" class="form-control" placeholder="cible" aria-label="Cible" 
                  aria-describedby="Cible de conservation">
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
              <input type="text" class="form-control" placeholder="cible" 
                  aria-label="Cible" aria-describedby="Cible de conservation">
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

  <div class="collapse cbl_collapse" id="cible_collapse1">

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

  </div>

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
              <input type="text" class="form-control" placeholder="Problème" 
                  aria-label="problème" aria-describedby="Problème de la population">
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