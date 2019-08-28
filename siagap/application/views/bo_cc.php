<div class="page-content" style="background-color:#22252a; min-height:100vh; width: 100%; margin-left: 0px;">
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
        <div class="col-sm-8" data-toggle="collapse" href="#temperature_collapse" 
            role="button" aria-expanded="false" aria-controls="temperature_colapse">
          <h4 style="float: left;">Température</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="collapse"  id="temperature_collapse">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="bar-chart block no-margin-bottom">
              <?php echo form_open(base_url().'CCHT/set/'); ?>
              <!-- <form method="POST"> action="<?php echo base_url(); ?>CCHT/set/"> -->
                <h5>Historique des températures</h5>
                <table class="table">
                  <tr>
                    <th>AP</th>
                    <th>Janvier</th>
                    <th>Fevrier</th>
                    <th>Mars</th>
                    <th>Avril</th>
                    <th>Mai</th>
                    <th>Juin</th>
                    <th>Juillet</th>
                    <th>Aout</th>
                    <th>September</th>
                    <th>October</th>
                    <th>November</th>
                    <th>Décember</th>
                  </tr>
                  <?php for ($i=0; $i < sizeof($ht); $i++) { ?>
                  <tr>  
                    <td><?php echo $ht[$i]->ap_label ?></td>
                    <td class="text-right"><?php echo $ht[$i]->january ?></td>
                    <td class="text-right"><?php echo $ht[$i]->february ?></td>
                    <td class="text-right"><?php echo $ht[$i]->march ?></td>
                    <td class="text-right"><?php echo $ht[$i]->april ?></td>
                    <td class="text-right"><?php echo $ht[$i]->may?></td>
                    <td class="text-right"><?php echo $ht[$i]->june ?></td>
                    <td class="text-right"><?php echo $ht[$i]->july ?></td>
                    <td class="text-right"><?php echo $ht[$i]->august ?></td>
                    <td class="text-right"><?php echo $ht[$i]->septembre ?></td>
                    <td class="text-right"><?php echo $ht[$i]->october ?></td>
                    <td class="text-right"><?php echo $ht[$i]->november ?></td>
                    <td class="text-right"><?php echo $ht[$i]->december ?></td>
                  </tr>
                  <?php } ?>
                  <tr>
                    <td><input type="text" name="label" class="form-control"></td>
                    <td><input type="number" step="0.01" name="ja" class="form-control"></td>
                    <td><input type="number" step="0.01" name="fe" class="form-control"></td>
                    <td><input type="number" step="0.01" name="ma" class="form-control"></td>
                    <td><input type="number" step="0.01" name="ap" class="form-control"></td>
                    <td><input type="number" step="0.01" name="may" class="form-control"></td>
                    <td><input type="number" step="0.01" name="jun" class="form-control"></td>
                    <td><input type="number" step="0.01" name="jul" class="form-control"></td>
                    <td><input type="number" step="0.01" name="aug" class="form-control"></td>
                    <td><input type="number" step="0.01" name="sep" class="form-control"></td>
                    <td><input type="number" step="0.01" name="oc" class="form-control"></td>
                    <td><input type="number" step="0.01" name="no" class="form-control"></td>
                    <td><input type="number" step="0.01" name="de" class="form-control"></td>
                  </tr>
                </table>
                <br>
                <input type="hidden" name="ap_id" value="-1">
                <input type="submit" class="btn btn-success" 
                    title="Enregistrer les informations de ce section" 
                    style="float: right;" 
                    value = "Enregistrer">
                <br><br>
              <!-- </form> -->
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="bar-chart block no-margin-bottom">
              <?php echo form_open(base_url().'CCPT/set/'); ?>
              <h5>Projection des températures</h5>
              <table class="table">
                <tr>
                  <th>AP</th>
                  <th>Janvier</th>
                  <th>Fevrier</th>
                  <th>Mars</th>
                  <th>Avril</th>
                  <th>Mai</th>
                  <th>Juin</th>
                  <th>Juillet</th>
                  <th>Aout</th>
                  <th>Septembre</th>
                  <th>Octobre</th>
                  <th>Novembre</th>
                  <th>Décembre</th>
                </tr>
                <?php for ($i=0; $i < sizeof($pt); $i++) { ?>
                  <tr>  
                    <td><?php echo $pt[$i]->ap_label ?></td>
                    <td class="text-right"><?php echo $pt[$i]->january ?></td>
                    <td class="text-right"><?php echo $pt[$i]->february ?></td>
                    <td class="text-right"><?php echo $pt[$i]->march ?></td>
                    <td class="text-right"><?php echo $pt[$i]->april ?></td>
                    <td class="text-right"><?php echo $pt[$i]->may?></td>
                    <td class="text-right"><?php echo $pt[$i]->june ?></td>
                    <td class="text-right"><?php echo $pt[$i]->july ?></td>
                    <td class="text-right"><?php echo $pt[$i]->august ?></td>
                    <td class="text-right"><?php echo $pt[$i]->septembre ?></td>
                    <td class="text-right"><?php echo $pt[$i]->october ?></td>
                    <td class="text-right"><?php echo $pt[$i]->november ?></td>
                    <td class="text-right"><?php echo $pt[$i]->december ?></td>
                  </tr>
                  <?php } ?>
                <tr>
                  <td><input type="text" name="label" class="form-control"></td>
                  <td><input type="number" step="0.01" name="ja" class="form-control"></td>
                  <td><input type="number" step="0.01" name="fe" class="form-control"></td>
                  <td><input type="number" step="0.01" name="ma" class="form-control"></td>
                  <td><input type="number" step="0.01" name="ap" class="form-control"></td>
                  <td><input type="number" step="0.01" name="may" class="form-control"></td>
                  <td><input type="number" step="0.01" name="jun" class="form-control"></td>
                  <td><input type="number" step="0.01" name="jul" class="form-control"></td>
                  <td><input type="number" step="0.01" name="aug" class="form-control"></td>
                  <td><input type="number" step="0.01" name="sep" class="form-control"></td>
                  <td><input type="number" step="0.01" name="oc" class="form-control"></td>
                  <td><input type="number" step="0.01" name="no" class="form-control"></td>
                  <td><input type="number" step="0.01" name="de" class="form-control"></td>
                </tr>
              </table>
              <br>
              <button class="btn btn-success" 
                  title="Enregistrer les informations de ce section" 
                  style="float: right;" onclick="saveTDC()">
                Enregistrer
              </button>
              <br><br>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

    <br><br>

    <section class="no-padding-bottom">
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-8" data-toggle="collapse" href="#precipitation_collapse" 
            role="button" aria-expanded="false" aria-controls="precipiation_colapse">
          <h4 style="float: left;">Précipitation</h4>
          <a style="float: right;" class="btn"><small>afficher/masquer les détails</small></a>
        </div>
      </div><hr>
      <div class="collapse"  id="precipitation_collapse">
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="bar-chart block no-margin-bottom">
              <?php echo form_open(base_url().'CCHP/set/'); ?>
              <h5>Historique des précipitations</h5>
              <table class="table">
                <tr>
                  <th>AP</th>
                  <th>Janvier</th>
                  <th>Fevrier</th>
                  <th>Mars</th>
                  <th>Avril</th>
                  <th>Mai</th>
                  <th>Juin</th>
                  <th>Juillet</th>
                  <th>Aout</th>
                  <th>Septembre</th>
                  <th>Octobre</th>
                  <th>Novembre</th>
                  <th>Décembre</th>
                </tr>
                <?php for ($i=0; $i < sizeof($hp); $i++) { ?>
                  <tr>  
                    <td><?php echo $hp[$i]->ap_label ?></td>
                    <td class="text-right"><?php echo $hp[$i]->january ?></td>
                    <td class="text-right"><?php echo $hp[$i]->february ?></td>
                    <td class="text-right"><?php echo $hp[$i]->march ?></td>
                    <td class="text-right"><?php echo $hp[$i]->april ?></td>
                    <td class="text-right"><?php echo $hp[$i]->may?></td>
                    <td class="text-right"><?php echo $hp[$i]->june ?></td>
                    <td class="text-right"><?php echo $hp[$i]->july ?></td>
                    <td class="text-right"><?php echo $hp[$i]->august ?></td>
                    <td class="text-right"><?php echo $hp[$i]->septembre ?></td>
                    <td class="text-right"><?php echo $hp[$i]->october ?></td>
                    <td class="text-right"><?php echo $hp[$i]->november ?></td>
                    <td class="text-right"><?php echo $hp[$i]->december ?></td>
                  </tr>
                  <?php } ?>
                <tr>
                  <td><input type="text" name="label" class="form-control"></td>
                  <td><input type="number" step="0.01" name="ja" class="form-control"></td>
                  <td><input type="number" step="0.01" name="fe" class="form-control"></td>
                  <td><input type="number" step="0.01" name="ma" class="form-control"></td>
                  <td><input type="number" step="0.01" name="ap" class="form-control"></td>
                  <td><input type="number" step="0.01" name="may" class="form-control"></td>
                  <td><input type="number" step="0.01" name="jun" class="form-control"></td>
                  <td><input type="number" step="0.01" name="jul" class="form-control"></td>
                  <td><input type="number" step="0.01" name="aug" class="form-control"></td>
                  <td><input type="number" step="0.01" name="sep" class="form-control"></td>
                  <td><input type="number" step="0.01" name="oc" class="form-control"></td>
                  <td><input type="number" step="0.01" name="no" class="form-control"></td>
                  <td><input type="number" step="0.01" name="de" class="form-control"></td>
                </tr>
              </table>
              <br>
              <button class="btn btn-success" 
                  title="Enregistrer les informations de ce section" 
                  style="float: right;" onclick="saveTDC()">
                Enregistrer
              </button>
              <br><br>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 col-md-12">
            <div class="bar-chart block no-margin-bottom">
              <?php echo form_open(base_url().'CCPP/set/'); ?>
              <h5>Projection des précipitations</h5>
              <table class="table">
                <tr>
                  <th>AP</th>
                  <th>Janvier</th>
                  <th>Fevrier</th>
                  <th>Mars</th>
                  <th>Avril</th>
                  <th>Mai</th>
                  <th>Juin</th>
                  <th>Juillet</th>
                  <th>Aout</th>
                  <th>Septembre</th>
                  <th>Octobre</th>
                  <th>Novembre</th>
                  <th>Décembre</th>
                </tr>
                <?php for ($i=0; $i < sizeof($pp); $i++) { ?>
                  <tr>  
                    <td><?php echo $pp[$i]->ap_label ?></td>
                    <td class="text-right"><?php echo $pp[$i]->january ?></td>
                    <td class="text-right"><?php echo $pp[$i]->february ?></td>
                    <td class="text-right"><?php echo $pp[$i]->march ?></td>
                    <td class="text-right"><?php echo $pp[$i]->april ?></td>
                    <td class="text-right"><?php echo $pp[$i]->may ?></td>
                    <td class="text-right"><?php echo $pp[$i]->june ?></td>
                    <td class="text-right"><?php echo $pp[$i]->july ?></td>
                    <td class="text-right"><?php echo $pp[$i]->august ?></td>
                    <td class="text-right"><?php echo $pp[$i]->septembre ?></td>
                    <td class="text-right"><?php echo $pp[$i]->october ?></td>
                    <td class="text-right"><?php echo $pp[$i]->november ?></td>
                    <td class="text-right"><?php echo $pp[$i]->december ?></td>
                  </tr>
                <?php } ?>
                <tr>
                  <td><input type="text" name="label" class="form-control"></td>
                  <td><input type="number" step="0.01" name="ja" class="form-control"></td>
                  <td><input type="number" step="0.01" name="fe" class="form-control"></td>
                  <td><input type="number" step="0.01" name="ma" class="form-control"></td>
                  <td><input type="number" step="0.01" name="ap" class="form-control"></td>
                  <td><input type="number" step="0.01" name="may" class="form-control"></td>
                  <td><input type="number" step="0.01" name="jun" class="form-control"></td>
                  <td><input type="number" step="0.01" name="jul" class="form-control"></td>
                  <td><input type="number" step="0.01" name="aug" class="form-control"></td>
                  <td><input type="number" step="0.01" name="sep" class="form-control"></td>
                  <td><input type="number" step="0.01" name="oc" class="form-control"></td>
                  <td><input type="number" step="0.01" name="no" class="form-control"></td>
                  <td><input type="number" step="0.01" name="de" class="form-control"></td>
                </tr>
              </table>
              <br>
              <button class="btn btn-success" 
                  title="Enregistrer les informations de ce section" 
                  style="float: right;" onclick="saveTDC()">
                Enregistrer
              </button>
              <br><br>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
      </div>
    </section>

  <br>