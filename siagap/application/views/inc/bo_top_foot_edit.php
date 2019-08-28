<!-- Modal add -->
<div class="modal fade" id="modal-add-basic" tabindex="-1" role="dialog" 
aria-labelledby="" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="title-modal-add-basic">Nouveau</h5>
      <button type="button" class="close" data-dismiss="modal" 
      aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="form-group">
      <label for="new-label" class="col-form-label">Nom:</label>
      <input type="text" class="form-control add-basic-field" id="new-label" 
      autofocus="true">
    </div>
    <div class="form-group">
      <label for="comment-text" class="col-form-label">Commentaire:</label>
      <textarea class="form-control add-basic-field" 
      id="comment-text">
    </textarea>
  </div>
  <input type="hidden" id="model-to-add">
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">
    Annuler
  </button>
  <button type="button" class="btn btn-primary" onclick="addNew()">
    Enregistrer
  </button>
</div>
</div>
</div>
</div>

<!-- Modal modification -->
<div class="modal fade" id="modal-modify-basic" tabindex="-1" role="dialog" 
aria-labelledby="" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="title-modal-add-basic">
        Modification de la liste
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <ul class="list-unstyled" id="ck-target">
      </ul>
      <input type="hidden" id="model-to-add">
    </div>
    <input type="hidden" id="modif_modal_model1" value="">
    <input type="hidden" id="modif_modal_model2" value="">
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">
        Annuler
      </button>
      <button type="button" class="btn btn-primary" 
      onclick="updateAssoc()">
      Enregistrer
    </button>
  </div>
</div>
</div>
</div>

<!-- Modal add cible -->
<div class="modal fade" id="modal-add-c" tabindex="-1" role="dialog" 
aria-labelledby="" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="title-modal-add-basic">Nouveau</h5>
      <button type="button" class="close" data-dismiss="modal" 
      aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <div class="row" id="">
        <label class="col-form-label">Catégorie</label>
        <select class="form-control category-cible" id="n_cat_cible"></select>
      </div>
    <div class="form-group">
      <label for="new-label" class="col-form-label">Nom:</label>
      <input type="text" class="form-control add-basic-field" id="labelc" 
      autofocus="true">
    </div>
    <div class="form-group">
      <label for="new-label" class="col-form-label">Image:</label>
      <input type="file" class="form-control add-basic-field" id="photoc" 
      autofocus="true">
    </div>
    <div class="form-group">
      <label for="comment-text" class="col-form-label">Commentaire:</label>
      <textarea class="form-control add-basic-field" 
      id="commentc"></textarea>
  </div>
  <input type="hidden" id="model-to-add">
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">
    Annuler
  </button>
  <button type="button" class="btn btn-primary" onclick="addNewC()">
    Enregistrer
  </button>
</div>
</div>
</div>
</div>

<!-- Modal Subsistance et pression -->
<div class="modal fade" id="modal-add-modification" tabindex="-1" role="dialog" 
aria-labelledby="" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="title-modal-add-basic">
          Ajout ou modification
        </h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="row" id="list-category-am">
          <!-- <div class="col-md-6">
            
          </div>
          <div class="col-md-6">
            
          </div> -->
        </div>
        <!-- <ul class="list-unstyled" id="ck-target">
        </ul> -->
        <div class="form-group">
          <label for="comment-am" class="col-form-label">Description:</label>
          <textarea class="form-control add-basic-field" 
              id="comment-am">
          </textarea>
        </div>
        <!-- <input type="hidden" id="model-to-add"> -->
      </div>
      <input type="hidden" id="am_modal_model1" value="">
      <input type="hidden" id="am_modal_model2" value="">
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">
          Annuler
        </button>
        <button type="button" class="btn btn-primary" 
            onclick="updateAssocRemake()">
            Enregistrer
        </button>
      </div>
    </div>
  </div>
</div>

<!-- Modal modification -->
<div class="modal fade" id="modal-modify-c" tabindex="-1" role="dialog" 
aria-labelledby="" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="title-modal-add-basic">
        Modification de la liste
      </h5>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <div class="modal-body">
      <div class="row" id="">
        <select class="form-control category-cible" onchange="showCible()" id="category-cible"></select>
      </div>
      <ul class="list-unstyled" id="ck-target2">
      </ul>
      <input type="hidden" id="model-to-add">
    </div>
    <input type="hidden" id="modif_modal_model1" value="">
    <input type="hidden" id="modif_modal_model2" value="">
    <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">
        Annuler
      </button>
      <button type="button" class="btn btn-primary" 
      onclick="updateAssocCible()">
      Enregistrer
    </button>
  </div>
</div>
</div>
</div>

<!-- Modal error -->
<div class="modal fade" id="modal-error" tabindex="-1" role="dialog" 
aria-labelledby="" aria-hidden="true">
<div class="modal-dialog" role="document">
  <div class="modal-content" style="background-color: #2d3035;">
    <div class="modal-header" style="border-bottom-color: #3d4148;">
      <h5 class="modal-title" id="title-modal-add-basic">Erreur!!!</h5>
      <button type="button" class="close" data-dismiss="modal" 
      aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div class="modal-body">
    <span id="modal-error-message"></span>
  </div>
  <div class="modal-footer" style="border-top-color: #3d4148;">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">
      OK
    </button>
  </div>
</div>
</div>
</div>

<!-- Toast error and success -->
<div class="toast" id="toast-error" role="alert" aria-live="assertive" 
aria-atomic="true" style="background-color: #bb414d; color: white;">
<div class="toast-header">
  <strong class="mr-auto">Erreur!</strong>
  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" 
  aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="toast-body">
  <p id="alert-error-message"></p>
</div>
</div>

<div class="toast" id="toast-success" role="alert" aria-live="assertive" 
aria-atomic="true" style="background-color: #115220e0; color: white;">
<div class="toast-header">
  <strong class="mr-auto">Succes!</strong>
  <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" 
  aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="toast-body">
  <p id="alert-success-message"></p>
</div>
</div>


<!-- JavaScript files-->
<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
crossorigin="anonymous">
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" 
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" 
crossorigin="anonymous">
</script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" 
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" 
crossorigin="anonymous">
</script>
<script 
src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js">
</script>

<!-- map -->
<script src="<?php echo base_url(); ?>assets/js/bo-map-controller.js"></script>

<!-- bootstrap-slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-slider/10.6.1/bootstrap-slider.min.js">
</script>

<script src="<?php echo base_url(); ?>assets/vendor/jquery.cookie/jquery.cookie.js"> 
</script>
<script src="<?php echo base_url(); ?>assets/vendor/chart.js/Chart.min.js"></script>
<script src="<?php echo base_url(); ?>assets/vendor/jquery-validation/jquery.validate.min.js">
</script>
<script src="<?php echo base_url(); ?>assets/js/front.js"></script>

<link rel="stylesheet" 
href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/css/bootstrap-select.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.13.1/js/bootstrap-select.min.js">
</script>

<link rel="stylesheet" 
href="<?php echo base_url(); ?>assets/css/ajax-bootstrap-select.min.css">
<script src="<?php echo base_url(); ?>assets/js/ajax-bootstrap-select.min.js">
</script>

<script src="<?php echo base_url(); ?>assets/js/diagram-controller.js"></script>

<script type="text/javascript">
  // Prepare Select
  // $.ajax({
  //   method: "GET",
  //   url: "<?php echo base_url(); ?>gestionnaire/autocomplete",
  //   data: { q: "" },
  //   dataType: "json"
  // }).done(function( gest ) {
  //   var options = "";
  //   for (var i = gest.length - 1; i >= 0; i--) {
  //     options += "<option>"+ gest[i] + "</option>";
  //   }
  //   $('#gestionnaire_ap').html(options);
  // });

  // Demarrage
  $(function() {
    intrantRadar();
    loadLinkExt($('#id_ap').val());
    loadPagD($('#id_ap').val());
    try {
      showLayer($('#id_ap').val(), $('#name_ap').val());
    } catch(e) {
      console.log('layer not showed');
    }
    showCC();
  });


  // Previsualisation 
  function showCC() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      // check link
      drawLineDiagram_cc_2in1('ht', 'http://localhost:8029/Developpement/SIAGAP/siagap/CCHT/find/'+$('#id_ap').val(), 'http://localhost:8029/Developpement/SIAGAP/siagap/CCPT/find/'+$('#id_ap').val(), 'Température', ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai',
        'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre']);

      drawLineDiagram_cc_2in1('hp', 'http://localhost:8029/Developpement/SIAGAP/siagap/CCHP/find/'+$('#id_ap').val(), 'http://localhost:8029/Developpement/SIAGAP/siagap/CCPP/find/'+$('#id_ap').val(), 'Précipitation', ['Janvier', 'Fevrier', 'Mars', 'Avril', 'Mai',
          'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Decembre']);
      }
  }

  function intrantRadar() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      apId = $('#id_ap').val();
      $.ajax({
        method: "GET",
        url: "<?php echo base_url(); ?>AssociationApIntrant/getbyap/" + apId,
        dataType: "json"
      }).done(function( response ) {
        labels = [];
        value = [];
        for (var i = response.length - 1; i >= 0; i--) {
          if (response[i].intrant_id == 1) {
            if (response[i].note != null && response[i].note > 0) {
              $(' #customSwitch1').prop('checked', true);
              $(' #note_intrants'+response[i].intrant_id).val('50');
            } else {
              $(' #customSwitch1').prop('checked', false);
              $(' #note_intrants'+response[i].intrant_id).val('0');
            }
          } else if (response[i].intrant_id == 3) {
            if (response[i].note != null && response[i].note > 0) {
              $(' #customSwitch2').prop('checked', true);
              $(' #note_intrants'+response[i].intrant_id).val('50');
            } else {
              $(' #customSwitch2').prop('checked', false);
              $(' #note_intrants'+response[i].intrant_id).val('0');
            }
          } else if (response[i].intrant_id == 4 
            || response[i].intrant_id == 5 || response[i].intrant_id == 6 ) {
            labels.push(response[i].label);
            value.push(response[i].note);
            $('#note_intrants'+response[i].intrant_id).val(response[i].note);
          }
        }
        showRadar('radar-cnv', labels, value);
        intrantTable('table-acc', apId, 'acc_');
        intrantBar();
        // showTC(apId);
        // showTM(apId);
      });    
    }
  }

  function intrantBar() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      apId = $('#id_ap').val();
      $.ajax({
        method: "GET",
        url: "<?php echo base_url(); ?>AssociationApLevel/getbyap/" + apId,
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
          $('#note_levelm' + response[i].level_id).val(response[i].nbr_man);
          nbr_women.push(response[i].nbr_women);
          $('#note_levelw' + response[i].level_id).val(response[i].nbr_women);
          labels.push(response[i].label);
          color_man.push("#379392");
          color_women.push("#bb414de0");
        }
        value.push({
          label: "Homme",
          backgroundColor: color_man,
          data: nbr_man
        });
        value.push({
          label: "Femme",
          backgroundColor: color_women,
          data: nbr_women
        });
        showBar('MyBarCanvas', labels, value);
      });
    }
  }

  var listMap = [];
  var coords = null;
    function showLayer(apId, label) {
      $.ajax({
        method: "GET",
        url: "<?php echo base_url(); ?>layer/ap/" + apId,
        dataType: "json",
        success: function( response ) {
          console.log(response);
          var polygon_2 = L.geoJSON(response, {
            onEachFeature: function (feature, layer){
              coords = layer.getBounds();
            }
          }).bindTooltip(label).openTooltip();
          assetLayerGroup.clearLayers();
          assetLayerGroup.addLayer(polygon_2);
          listMap[apId] = polygon_2;
          map.invalidateSize();
          map.fitBounds(coords);
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {

      });
    } 

  // Fin previsualisation 

  // Select with autocomplete
  $('#region_ap').selectpicker().ajaxSelectPicker({
    ajax: {
      url: '<?php echo base_url(); ?>region/autocomplete',
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

  // Add new item : modal, ajax, ...
  function addNew() {
    $.ajax({
      method: "POST",
      url: "<?php echo base_url(); ?>"+ $('#model-to-add').val() +"/set",
      data: { label: $('#new-label').val(), comment: $('#comment-text').val() },
      dataType: "json",
      success: function( response ) {
        if (response) {
          $('#new-label').val('');
          $('#comment-text').val('');
          $('#modal-add-basic').modal('toggle');
          $('#alert-success-message').text('L\'Ajout de l\'élément a été un succes');
          $('#toast-success').toast('show');
        } else {
          $('#alert-error-message').text('Échec de l\'ajout de l\'élément');
          $('#toast-error').toast('show');
          console.log('response: ' + response);
        }
      },
      error: function( response, status ) {
        console.log("Status de l'erreur: " + status);
      }
    }).done(function( gest ) {

    });
  }

  // Add new cibles
  function addNewC() {
    var fd = new FormData();    
      fd.append('photo', $('#photoc').prop('files')[0] );
      fd.append('label', $('#labelc').val());
      fd.append('categoryId', $('#n_cat_cible').val());
      fd.append('comment', $('#commentc').val());
    $.ajax({
      url: '<?php echo base_url(); ?>cible/set',
      data: fd,
      processData: false,
      contentType: false,
      type: 'POST',
      success: function( response ) {
        if (response) {
          $('#labelc').val('');
          $('#commentc').val('');
          $('#modal-add-c').modal('toggle');
          $('#alert-success-message').text('L\'Ajout de l\'élément a été un succes');
          $('#toast-success').toast('show');
        } else {
          $('#alert-error-message').text('Échec de l\'ajout de l\'élément');
          $('#toast-error').toast('show');
          console.log('response: ' + response);
        }
      },
      error: function( response, status ) {
        console.log("Status de l'erreur: " + status);
      }
    }).done(function( gest ) {

    });
  }

  function openNewModal(model) {
    $('#model-to-add').val(model);
  }

  // Autofocus on modal
  $('.modal').on('shown.bs.modal', function() {
    $(this).find('[autofocus]').focus();
  });

  // Action on enter pressed
  $('.add-basic-field').keypress(function(event) {
    var keycode = (event.keyCode ? event.keyCode : event.which);
    if(keycode == '13'){
      addNew();
    }
  });
</script>

<!-- Modification modal -->
<script type="text/javascript">

  // Popup for subsistance et pression
  function getAllAM(model1, model2) {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        method: "GET",
        url: "<?php echo base_url(); ?>" + model2 + "/all",
        dataType: "json",
        success: function( response ) {
          $.ajax({
            method: "GET",
            url: "<?php echo base_url(); ?>association" + model1 + model2 + "/get",
            data : {
              idAp: $('#id_ap').val()
            },
            dataType: "json",
            success: function( rep ) {

              var nbr_column = 2;

              $('.removable').remove();
              var ulOption = '';
              var options = [];
              for (var i = 0; i < response.length; i++) {
                // check if the item is already picked
                var ck = '';
                if (checkIfIncludes(rep, response[i])) {
                  ck = 'checked';
                }

                var temp = '';
                temp += '<li class="removable">';
                temp += '<div class="col-auto my-1">';
                temp += '<div class="custom-control custom-checkbox mr-sm-2">';
                temp += '<input type="checkbox" class="custom-control-input" name="sb-ck3" id="' 
                + response[i].id + '_' + model2.toLowerCase() + '" value="' 
                + response[i].id + '" ' + ck + '>';
                temp += '<label id="label_' + response[i].id + '_' + model2.toLowerCase() 
                + '" class="custom-control-label" for="' + response[i].id + '_' 
                + model2.toLowerCase() + '">' + response[i].label + '</label>';
                temp += '</div>';
                temp += '</div>';
                temp += '</li>';
                options.push(temp);
              }
              var i = 0;
              var limite_temp = 0;

              for(var j = 0; j < nbr_column; j++) {
                limite_temp += options.length/nbr_column;
                ulOption += '<div class="col-md-'+ 12/nbr_column +'">';
                ulOption += '<ul class="list-unstyled">';
                for (i; i < limite_temp; i++) {
                  ulOption += options[i];
                }
                ulOption += '</ul>';
                ulOption += '</div>';
              }

              $('#list-category-am').append(ulOption);
              $('#am_modal_model1').val(model1);
              $('#am_modal_model2').val(model2);
            }
          });
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {

      });
    }
  }


  // get items and show on popup 
  function getAllForModificationPopUp(model1, model2) {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        method: "GET",
        url: "<?php echo base_url(); ?>" + model2 + "/all",
        dataType: "json",
        success: function( response ) {
          $.ajax({
            method: "GET",
            url: "<?php echo base_url(); ?>association" + model1 + model2 + "/get",
            data : {
              idAp: $('#id_ap').val()
            },
            dataType: "json",
            success: function( rep ) {
              $('.removable').remove();
              var ulOption = '';
              var options = [];
              for (var i = 0; i < response.length; i++) {
                // check if the item is already picked
                var ck = '';
                if (checkIfIncludes(rep, response[i])) {
                  ck = 'checked';
                }

                var temp = '';
                temp += '<li class="removable">';
                temp += '<div class="col-auto my-1">';
                temp += '<div class="custom-control custom-checkbox mr-sm-2">';
                temp += '<input type="checkbox" class="custom-control-input" name="sb-ck" id="' 
                + response[i].id + '_' + model2.toLowerCase() + '" value="' 
                + response[i].id + '" ' + ck + '>';
                temp += '<label id="label_' + response[i].id + '_' + model2.toLowerCase() 
                + '" class="custom-control-label" for="' + response[i].id + '_' 
                + model2.toLowerCase() + '">' + response[i].label + '</label>';
                temp += '</div>';
                temp += '</div>';
                temp += '</li>';
                options.push(temp);
              }
              for (var i = 0; i < options.length; i++) {
                ulOption += options[i];
              }
              $('#ck-target').append(ulOption);
              $('#modif_modal_model1').val(model1);
              $('#modif_modal_model2').val(model2);
            }
          });
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {

      });
    }
  }

  // get categoryCible 
  function getCategoryCible() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        method: "GET",
        url: "<?php echo base_url(); ?>" + "CategoryCible/all",
        dataType: "json",
        success: function( rep ) {
          var options = '';
          for(var i = 0; i < rep.length; i++) {
            options += '<option value="'+rep[i].id+'" class="option-to-remove form-control">';
            options += rep[i].label;
            options += '</option>';
          }
          $('.option-to-remove').remove();
          $('.category-cible').append(options);
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {

      });
    }
  }

  // Get cibles by category
  function getCiblesByCategory() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      getCategoryCible();
      $.ajax({
        method: "GET",
        url: "<?php echo base_url(); ?>" + "Cible/all",
        dataType: "json",
        success: function( response ) {
          $.ajax({
            method: "GET",
            url: "<?php echo base_url(); ?>associationApCible/get",
            data : {
              idAp: $('#id_ap').val()
            },
            dataType: "json",
            success: function( rep ) {
              $('.removable').remove();
              var ulOption = '';
              var options = [];
              for (var i = 0; i < response.length; i++) {
                // check if the item is already picked
                var ck = '';
                if (checkIfIncludes(rep, response[i])) {
                  ck = 'checked';
                }

                var temp = '';
                temp += '<li class="removable '+response[i].category_id+'_to_show hidable_cible" style="display:none;">';
                temp += '<div class="col-auto my-1">';
                temp += '<div class="custom-control custom-checkbox mr-sm-2">';
                temp += '<input type="checkbox" class="custom-control-input" name="sb-ck2" id="' 
                + response[i].id + '_cible" value="' 
                + response[i].id + '" ' + ck + '>';
                temp += '<label id="label_' + response[i].id + '_cible" class="custom-control-label" for="' + response[i].id + '_cible">' + response[i].label + '</label>';
                temp += '</div>';
                temp += '</div>';
                temp += '</li>';
                options.push(temp);
              }
              for (var i = 0; i < options.length; i++) {
                ulOption += options[i];
              }
              $('#ck-target2').append(ulOption);
            }
          });
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {
        showCible();
      });
    }
  }

  function showCible() {
    $('.hidable_cible').hide();
    console.log($('#category-cible').val()+'_to_show');
    $('.'+$('#category-cible').val()+'_to_show').show();
  }

  function checkIfIncludes(json1, json2) {
    for (var i = json1.length - 1; i >= 0; i--) {
      for(var key in json1[i]) {
        if (key.includes('_id')&&key!='ap_id') {
          if(json1[i][key] == json2.id) {
            // console.log(key+'=>'+json1[i][key]);
            // console.log('json2.id=>'+json2.id);
            return true;
          }
        }
      }
    } 
    return false;
  }

  function getAllChecked(name) {
    var favorite = [];
    $.each($("input[name='" + name + "']:checked"), function() {            
      favorite.push($(this).val());
    });
    return favorite;
  }

  function getAllCheckedForIntrant(name) {
    var favorite = [];
    $.each($("input[name='" + name + "']"), function() {            
      favorite.push($(this).val());
    });
    $.each($("select[name='" + name + "']"), function() {            
      favorite.push($(this).val());
    });
    console.log($("input[name='" + name + "']"));
    console.log('favorite:' + favorite);
    return favorite;
  }

  function getAllCheckedForAccs(name) {
    var favorite = [];
    $.each($("select[name='" + name + "']"), function() {            
      favorite.push($(this).val());
    });
    console.log($("select[name='" + name + "']"));
    console.log('favorite:' + favorite);
    return favorite;
  }

  function getNameAllChecked(ids, model) {
    var favorite = [];
    for (var i = ids.length - 1; i >= 0; i--) {
      favorite.push($("#label_" + ids[i] + '_' + model).text());
      // favorite.push($("label[for='" + ids[i] + '_' + model + "']").text());
    }
    return favorite;
  }

  function updateAssoc() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      var model1 = $('#modif_modal_model1').val();
      var model2 = $('#modif_modal_model2').val();
      var checked = getAllChecked('sb-ck');
      var checkedInline = '';
      for (var i = 0; i < checked.length; i++) {
        checkedInline += checked[i] + '-';
      }
      $.ajax({
        method: "POST",
        url: "<?php echo base_url(); ?>association" + model1 + model2 + "/set",
        data: { 
          id_ap: $('#id_ap').val(), 
          ids_item: checkedInline
        },
        dataType: "json",
        success: function( response ) {
          if (!response) {
            $('#alert-error-message').text('Échec des modifications des '+ model2 +'de l\'ap');
            $('#toast-error').toast('show');
          } else {
            $('#alert-success-message').text('Les modifications sur l\'AP ont été enregistré');
            $('#toast-success').toast('show');
            
            console.log(response);
            var listName = getNameAllChecked(checked, model2.toLowerCase());
            var temp = '';
            var temp2 = '';
            for (var i = listName.length - 1; i >= 0; i--) {
              temp += '<li>' + listName[i] + '</li>'
              temp2 += '<option value="' + checked[i] + '">' + listName[i] + '</option>'
            }
            $('#li-' + model2.toLowerCase()).empty();
            $('#li-' + model2.toLowerCase()).append(temp);
            // try {
              $('#opt-' + model2.toLowerCase()).empty();
              $('#opt-' + model2.toLowerCase()).append(temp2);
            // } catch (Exception e) {
            //   console.log('Il n\'y a pas de select pour le sujet');
            // }
            $('#modal-modify-basic').modal('toggle');
          }
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {

      });
    }
  }

  // for cible
  function updateAssocCible() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      // var model1 = $('#modif_modal_model1').val();
      // var model2 = $('#modif_modal_model2').val();
      var checked = getAllChecked('sb-ck2');
      var checkedInline = '';
      for (var i = 0; i < checked.length; i++) {
        checkedInline += checked[i] + '-';
      }
      $.ajax({
        method: "POST",
        url: "<?php echo base_url(); ?>associationApCible/set",
        data: { 
          id_ap: $('#id_ap').val(), 
          ids_item: checkedInline
        },
        dataType: "json",
        success: function( response ) {
          if (!response) {
            $('#alert-error-message').text('Échec des modifications des cibles de l\'ap');
            $('#toast-error').toast('show');
          } else {
            $('#alert-success-message').text('Les modifications sur l\'AP ont été enregistré');
            $('#toast-success').toast('show');
            
            console.log(response);
            var listName = getNameAllChecked(checked, 'cible');
            var temp = '';
            var temp2 = '';
            for (var i = listName.length - 1; i >= 0; i--) {
              temp += '<li>' + listName[i] + '</li>'
              temp2 += '<option value="' + checked[i] + '">' + listName[i] + '</option>'
            }
            $('#li-' + 'cible').empty();
            $('#li-' + 'cible').append(temp);
            // try {
              $('#opt-' + 'cible').empty();
              $('#opt-' + 'cible').append(temp2);
            // } catch (Exception e) {
            //   console.log('Il n\'y a pas de select pour le sujet');
            // }
            $('#modal-modify-c').modal('toggle');
          }
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {

      });
    }
  }

  function updateAssocRemake() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      var model1 = $('#am_modal_model1').val();
      var model2 = $('#am_modal_model2').val();
      var checked = getAllChecked('sb-ck3');
      var checkedInline = '';
      for (var i = 0; i < checked.length; i++) {
        checkedInline += checked[i] + '-';
      }
      $.ajax({
        method: "POST",
        url: "<?php echo base_url(); ?>association" + model1 + model2 + "/set",
        data: { 
          id_ap: $('#id_ap').val(), 
          ids_item: checkedInline
        },
        dataType: "json",
        success: function( response ) {
          if (!response) {
            $('#alert-error-message').text('Échec des modifications des '+ model2 +'de l\'ap');
            $('#toast-error').toast('show');
          } else {
            $('#alert-success-message').text('Les modifications sur l\'AP ont été enregistré');
            $('#toast-success').toast('show');
            
            console.log(response);
            var listName = getNameAllChecked(checked, model2.toLowerCase());
            var temp = '';
            var temp2 = '';
            for (var i = listName.length - 1; i >= 0; i--) {
              temp += '<li>' + listName[i] + '</li>'
              temp2 += '<option value="' + checked[i] + '">' + listName[i] + '</option>'
            }
            $('#li-' + model2.toLowerCase()).empty();
            $('#li-' + model2.toLowerCase()).append(temp);
            // try {
              $('#opt-' + model2.toLowerCase()).empty();
              $('#opt-' + model2.toLowerCase()).append(temp2);
            // } catch (Exception e) {
            //   console.log('Il n\'y a pas de select pour le sujet');
            // }
            $('#modal-add-modification').modal('toggle');
          }
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {
        $.ajax({
          url: '<?php echo base_url(); ?>Ap/set' + model2 + '/' + $('#id_ap').val(),
          data: {
            value: $('#comment-am').val()
          },
          type: 'POST',
          success: function( response, status ) {
            if (response=='true') {
              $('#alert-success-message').text('Les modifications sur les dimensions de l\'AP ont été enregistré');
              $('#toast-success').toast('show');
              $('#subs_ap_'+model2).text($('#comment-am').val());
            } else {
              $('#alert-error-message').text('Échec: ' + response.error);
              $('#toast-error').toast('show');
            }
          },
          error: function( response, status ) {
            $('#alert-error-message').text('Échec: ' + status);
          }
        }).done(function( gest ) {
          
        });
      });
    }
  }

  function setPbmAp() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        url: '<?php echo base_url(); ?>Ap/setProbleme/' + $('#id_ap').val(),
        data: {
          value: $('#subs_ap_Probleme').val()
        },
        type: 'POST',
        success: function( response, status ) {
          if (response=='true') {
            $('#alert-success-message').text('Les modifications sur les dimensions de l\'AP ont été enregistré');
            $('#toast-success').toast('show');
          } else {
            $('#alert-error-message').text('Échec: ' + response.error);
            $('#toast-error').toast('show');
          }
        },
        error: function( response, status ) {
          $('#alert-error-message').text('Échec: ' + status);
        }
      }).done(function( gest ) {
        
      });
    }
  }

  function saveAPComponent(link, table, idValue) {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        url: '<?php echo base_url(); ?>Ap/'+link+'/' + $('#id_ap').val(),
        data: {
          value: $('#'+idValue).val(),
          table: table
        },
        type: 'POST',
        success: function( response, status ) {
          if (response=='true') {
            $('#alert-success-message').text('Les modifications sur les dimensions de l\'AP ont été enregistré');
            $('#toast-success').toast('show');
          } else {
            $('#alert-error-message').text('Échec: ' + response.error);
            $('#toast-error').toast('show');
          }
        },
        error: function( response, status ) {
          $('#alert-error-message').text('Échec: ' + status);
        }
      }).done(function( gest ) {
        
      });
    }
  }

  function updateAssoc2(model1, model2, model3) {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      // console.log($('.' + model1.toLowerCase() + model2.toLowerCase() + model3.toLowerCase() + '_1').val());
      // console.log($('.' + model1.toLowerCase() + model2.toLowerCase() 
      //     + model3.toLowerCase() + '_1 option:selected').text());
      $.ajax({
        method: "POST",
        url: "<?php echo base_url(); ?>associationAp" + model1 
        + model2 + model3 + "/set",
        data: { 
          id_ap: $('#id_ap').val(), 
          id_1: $('.' + model1.toLowerCase() + model2.toLowerCase() 
            + model3.toLowerCase() + '_1').val(), 
          id_2: $('.' + model1.toLowerCase() + model2.toLowerCase() 
            + model3.toLowerCase() + '_2').val(), 
          id_3: $('.' + model1.toLowerCase() + model2.toLowerCase() 
            + model3.toLowerCase() + '_3').val()
        },
        dataType: "json",
        success: function( response ) {
          if (!response) {
            $('#alert-error-message').text('Échec de l\'ajout');
            $('#toast-error').toast('show');
          } else {
            $('#alert-success-message').text('Les modifications sur l\'AP ont été enregistré');
            $('#toast-success').toast('show');
            console.log(response);
            var temp = '<tr>';
            temp += '<td>' + $('.' + model1.toLowerCase() + model2.toLowerCase() 
              + model3.toLowerCase() + '_1 option:selected').text() + '</td>';
            temp += '<td>' + $('.' + model1.toLowerCase() + model2.toLowerCase() 
              + model3.toLowerCase() + '_2 option:selected').text() + '</td>';
            temp += '<td>' + $('.' + model1.toLowerCase() + model2.toLowerCase() 
              + model3.toLowerCase() + '_3 option:selected').text() + '</td>';
            temp += '</tr>';
            $('#subsistanceproblempression_table').append(temp);
          }
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {

      });
    }
  }

  function updateAssoc3(model1, model2, nom1, nom2) {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      var checked = getAllCheckedForIntrant(nom1);
      var checkedInline = '';
      for (var i = 0; i < checked.length; i++) {
        checkedInline += checked[i] + '-';
      }
      var checked2 = getAllCheckedForIntrant(nom2);
      var checkedInline2 = '';
      for (var i = 0; i < checked2.length; i++) {
        checkedInline2 += checked2[i] + '-';
      }
      $.ajax({
        method: "POST",
        url: "<?php echo base_url(); ?>association" + model1 + model2 + "/set",
        data: { 
          id_ap: $('#id_ap').val(), 
          ids_item_m: checkedInline,
          ids_item_w: checkedInline2
        },
        dataType: "json",
        success: function( response ) {
          if (!response) {
            $('#alert-error-message').text('Échec des modifications des '+ model2 +'de l\'ap');
            $('#toast-error').toast('show');
          } else {
            $('#alert-success-message').text('Les modifications sur l\'AP ont été enregistré');
            $('#toast-success').toast('show');
          }
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {
        intrantRadar();
        intrantBar();
      });
    }
  }

  function addAccessibilite(nom1) {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      var checked = getAllCheckedForAccs(nom1);
      var checkedInline = '';
      for (var i = 0; i < checked.length; i++) {
        checkedInline += checked[i] + '_';
      }
      
      $.ajax({
        method: "POST",
        url: "<?php echo base_url(); ?>associationApAccessibilite/set",
        data: { 
          id_ap: $('#id_ap').val(), 
          ids_item: checkedInline
        },
        dataType: "json",
        success: function( response ) {
          if (!response) {
            $('#alert-error-message').text('Échec des modifications ');
            $('#toast-error').toast('show');
          } else {
            $('#alert-success-message').text('Les modifications sur l\'AP ont été enregistré');
            $('#toast-success').toast('show');
          }
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {
        intrantTable('table-acc', apId, 'acc_');
      });
    }
  }

</script>

<!-- AP -->
<script type="text/javascript">

  // For profil
  function saveAP() {
    var id = '';
    if ($('#id_ap').val() > 0) {
      id = $('#id_ap').val();
    }
    $.ajax({
      method: "POST",
      url: "<?php echo base_url(); ?>ap/set/" + id,
      data: { 
        nom: $('#name_ap').val(), 
        c_nom: $('#c_name_ap').val(), 
        categorie_id: $('#categorie_ap').val(),
        date_creation: $('#creation_ap').val(),
        superficie: $('#superficie_ap').val(),
        contact: $('#contact_ap').val(),
        vision: $('#vision_ap').val(),
        missiom: $('#mission_ap').val(),
        objectif: $('#objectif_ap').val(),
        gestionnaire_id: $('#gestionnaire_ap').val(),
        other_gov: $('#other_ap').val(),
        nbr_voi: $('#nbr_voi').val(),
        area_voi: $('#area_voi').val(),
        message: $('#message').val(),
      },
      dataType: "json",
      success: function( response ) {
        if (!response) {
          $('#alert-error-message').text('Échec de l\'enregistrement des modifications sur l\'ap');
          $('#toast-error').toast('show');
        } else {
          $('#alert-success-message').text('Les modifications sur l\'AP ont été enregistrer');
          $('#toast-success').toast('show');
          $('#id_ap').val(response);
          console.log(response);
        }
      },
      error: function( response, status ) {
        console.log("Status de l'erreur: " + status);
      }
    }).done(function( gest ) {

    });
  } 

  // For layer
  function saveLayer() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      var fd = new FormData();    
      fd.append('geojson', $('#layer_ap').prop('files')[0] );
      /*console.log($('#layer_ap'));*/
      // fd.append('apId', $('#id_ap').val());
      $.ajax({
        url: '<?php echo base_url(); ?>Layer/upload_file?apId=' + $('#id_ap').val(),
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function( response, status ) {
          if (response) {
            $('#alert-success-message').text('Les modifications sur les dimensions de l\'AP ont été enregistré');
            $('#toast-success').toast('show');
            showLayer($('#id_ap').val(), $('#name_ap').val());
          } else {
            $('#alert-error-message').text('Échec: ' + response.error);
            $('#toast-error').toast('show');
            console.log(response);
          }
        },
        error: function( response, status ) {
          $('#alert-error-message').text('Échec: ' + status);
        }
      }).done(function( gest ) {

      });
    }
  }

  // For contexte
  function saveAPContext() {
    var id = '';
    if ($('#id_ap').val() > 0) {
      id = $('#id_ap').val();
    }
    $.ajax({
      method: "POST",
      url: "<?php echo base_url(); ?>ap/setcontext/" + id,
      data: { 
        region: $('#region_ap').val(), 
        district: $('#district_ap').val(),
        commune: $('#commune_ap').val(),
        fokontany: $('#fokontany_ap').val(),
        demographie: $('#demographie_ap').val(),
      },
      dataType: "json",
      success: function( response ) {
        if (!response) {
          $('#alert-error-message').text('Échec de l\'enregistrement des modifications sur l\'ap');
          $('#toast-error').toast('show');
        } else {
          $('#alert-success-message').text('Les modifications sur l\'AP ont été enregistrer');
          $('#toast-success').toast('show');
          // $('#id_ap').val(response);
          console.log(response);
        }
      },
      error: function( response, status ) {
        console.log("Status de l'erreur: " + status);
      }
    }).done(function( gest ) {

    });
  }  

  // for ApPhoto
  function saveApPhoto() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      var fd = new FormData();    
      fd.append('photo', $('#pic_ap').prop('files')[0] );
      $.ajax({
        url: '<?php echo base_url(); ?>Ap/upload_file/' + $('#id_ap').val(),
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function( response, status ) {
          if (response == 'true') {
            $('#alert-success-message').text('Les modifications sur les dimensions de l\'AP ont été enregistré');
            $('#toast-success').toast('show');
          } else {
            $('#alert-error-message').text('Échec: ' + response.error);
            $('#toast-error').toast('show');
            console.log(response);
          }
        },
        error: function( response, status ) {
          $('#alert-error-message').text('Échec: ' + status);
        }
      }).done(function( gest ) {

      });
    }
  }  

  // For processus
  function saveProcessusAp() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        url: '<?php echo base_url(); ?>Ap/setprocessus/' + $('#id_ap').val(),
        data: {
          gestion: $('#gestion_interne_ap').val(), 
          protection: $('#protection_surveillance_ap').val(), 
          relation: $('#relation_ap').val(), 
          tourisme: $('#tourisme_ap').val(),
          suivie: $('#suivie_recherche').val()
        },
        type: 'POST',
        success: function( response, status ) {
          if (response=='true') {
            $('#alert-success-message').text('Les modifications sur les dimensions de l\'AP ont été enregistré');
            $('#toast-success').toast('show');
          } else {
            $('#alert-error-message').text('Échec: ' + response.error);
            $('#toast-error').toast('show');
          }
        },
        error: function( response, status ) {
          $('#alert-error-message').text('Échec: ' + status);
        }
      }).done(function( gest ) {
        
      });
    }
  }

  // For impacte
  function saveImpacte() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        url: '<?php echo base_url(); ?>Ap/setImpacte/' + $('#id_ap').val(),
        data: {
          impacte: $('#impacte_ap').val()
        },
        type: 'POST',
        success: function( response, status ) {
          if (response=='true') {
            $('#alert-success-message').text('Les modifications sur les dimensions de l\'AP ont été enregistré');
            $('#toast-success').toast('show');
          } else {
            $('#alert-error-message').text('Échec: ' + response.error);
            $('#toast-error').toast('show');
          }
        },
        error: function( response, status ) {
          $('#alert-error-message').text('Échec: ' + status);
        }
      }).done(function( gest ) {
        
      });
    }
  }
</script>

<!-- Realisation -->
<script type="text/javascript">
  function saveRealisation() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        method: "POST",
        url: "<?php echo base_url(); ?>realisation/set",
        data: { 
          id_ap: $('#id_ap').val(), 
          date: $('#date_realisation').val(),
          niveau: $('#note_realisation').val(),
          comment: $('#comm_realisation').val(),
        },
        dataType: "json",
        success: function( response ) {
          if (!response) {
            $('#alert-error-message').text('Échec de l\'enregistrement des modifications sur l\'ap');
            $('#toast-error').toast('show');
          } else {
            $('#alert-success-message').text('Les modifications sur l\'AP ont été enregistrer');
            $('#toast-success').toast('show');
            // $('#id_ap').val(response);
            console.log(response);
          }
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {

      });
    }
  }
</script>

<!-- Aide a la decision -->
<script type="text/javascript">

  // tendance des cibles
  function saveTDC() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        method: "POST",
        url: "<?php echo base_url(); ?>StatApCible/set/",
        data: { 
          id_ap: $('#id_ap').val(), 
          id_cible: $('#tdc_c_id').val(),
          value: $('#tdc_value').val(),
          year: $('#tdc_annee').val(),
          fiabilite: $('#tdc_fiabilite').val(),
          comment: '',
        },
        dataType: "json",
        success: function( response ) {
          if (!response) {
            $('#alert-error-message').text('Échec de l\'enregistrement des modifications sur l\'ap');
            $('#toast-error').toast('show');
          } else {
            $('#alert-success-message').text('La tendance a été enregistré');
            $('#toast-success').toast('show');
            console.log(response);
          }
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {
        getTDC('tdc_c_id', 'table-tdc');
      });
    }
  }  

  function getTDC(idCible, idTable) {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        method: "GET",
        url: "<?php echo base_url(); ?>StatApCible/getStat/" + $('#' + idCible).val(),
        data: { 
          id_ap: $('#id_ap').val()
        },
        dataType: "json",
        success: function( response ) {
          var table = '';
          for(var i = 0; i < response.length; i++) {
            table += '<tr class="removable-tdc">';
            table += '<td class="text-right">'+response[i].year+'</td>'
            table += '<td class="text-right">'+response[i].value+'</td>'
            table += '<td class="text-right">'+adaptFiabilite(response[i].fiabilite)+'</td>'
            // table += '<td class="text-right">'+response[i].comment+'</td>'
            table += '</tr>';
          }
          $('.removable-tdc').remove();
          $('#'+idTable+' tr:last').after(table);
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {
      });
    }
  }

  function adaptFiabilite(fiabilite) {
    if (fiabilite == 0) return 'Faible';
    if (fiabilite == 1) return 'Moyenne';
    if (fiabilite == 2) return 'Haute';
    return '-';
  }

  function getTDM(idCible, idTable) {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        method: "GET",
        url: "<?php echo base_url(); ?>StatApMenace/getStat/" + $('#' + idCible).val(),
        data: { 
          id_ap: $('#id_ap').val()
        },
        dataType: "json",
        success: function( response ) {
          var table = '';
          for(var i = 0; i < response.length; i++) {
            table += '<tr class="removable-tdm">';
            table += '<td class="text-right">'+response[i].year+'</td>'
            table += '<td class="text-right">'+response[i].value+'</td>'
            table += '<td class="text-right">'+adaptFiabilite(response[i].fiabilite)+'</td>'
            // table += '<td class="text-right">'+response[i].comment+'</td>'
            table += '</tr>';
          }
          $('.removable-tdm').remove();
          $('#'+idTable+' tr:last').after(table);
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {

      });
    }
  }

  function saveTDM() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        method: "POST",
        url: "<?php echo base_url(); ?>StatApMenace/set/",
        data: { 
          id_ap: $('#id_ap').val(), 
          id_pression: $('#tdm_m_id').val(),
          value: $('#tdm_value').val(),
          year: $('#tdm_annee').val(),
          fiabilite: $('#tdm_fiabilite').val(),
          comment: '',
        },
        dataType: "json",
        success: function( response ) {
          if (!response) {
            $('#alert-error-message').text('Échec de l\'enregistrement des modifications sur l\'ap');
            $('#toast-error').toast('show');
          } else {
            $('#alert-success-message').text('La tendance a été enregistré');
            $('#toast-success').toast('show');
            console.log(response);
          }
        },
        error: function( response, status ) {
          console.log("Status de l'erreur: " + status);
        }
      }).done(function( gest ) {
        getTDM('tdm_m_id', 'table-tdm');
      });
    }
  }  

  function saveMiradiaPhoto() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      var fd = new FormData();    
      fd.append('photo', $('#pic_miradia').prop('files')[0] );
      $.ajax({
        url: '<?php echo base_url(); ?>Photo/uploadStatMenace/' + $('#id_ap').val(),
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function( response, status ) {
          if (response=='true') {
            $('#alert-success-message').text('Les modifications sur les dimensions de l\'AP ont été enregistré');
            $('#toast-success').toast('show');
          } else {
            $('#alert-error-message').text('Échec: ' + response.error);
            $('#toast-error').toast('show');
            console.log(response);
          }
        },
        error: function( response, status ) {
          $('#alert-error-message').text('Échec: ' + status);
        }
      }).done(function( gest ) {
        
      });
    }
  }  

  $(function() {
    getTDC('tdc_c_id', 'table-tdc');
    getTDM('tdm_m_id', 'table-tdm');
    
  });
</script>

<!-- liens externes -->
<script type="text/javascript">
  function saveLinkExt() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        url: '<?php echo base_url(); ?>Link/set/',
        data: {
          apId: $('#id_ap').val(), 
          label: $('#label_link_ext').val(), 
          link: $('#link_link_ext').val(), 
          comment: $('#comm_link_ext').val()
        },
        type: 'POST',
        success: function( response, status ) {
          if (response=='true') {
            $('#alert-success-message').text('Les modifications sur les dimensions de l\'AP ont été enregistré');
            $('#toast-success').toast('show');
            var table = '';
            table += '<tr class="removable-tlink">';
            table += '<td class="text-right">'+$('#label_link_ext').val()+'</td>';
            table += '<td class="text-right">'+$('#link_link_ext').val()+'</td>';
            table += '<td class="text-right">'+$('#comm_link_ext').val()+'</td>';
            table += '</tr>';
            $('#table_link_ext tr:last').after(table);
          } else {
            $('#alert-error-message').text('Échec: ' + response.error);
            $('#toast-error').toast('show');
            var table = '';
          }
        },
        error: function( response, status ) {
          $('#alert-error-message').text('Échec: ' + status);
        }
      }).done(function( gest ) {
        
      });
    }
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
          table += '<td class="text-right">'+response[i].label+'</td>';
          table += '<td class="text-right">'+response[i].link+'</td>';
          table += '<td class="text-right">'+response[i].comment+'</td>';
          table += '</tr>';
        }
        $('.removable-tlink').remove();
        $('#table_link_ext tr:last').after(table);
      },
      error: function( response, status ) {
        $('#alert-error-message').text('Échec: ' + status);
      }
    }).done(function( gest ) {
      
    });
  }
</script>

<!-- Document pag -->
<script type="text/javascript">
  function savepag() {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      var fd = new FormData();    
      fd.append('pag', $('#pag_d').prop('files')[0] );
      fd.append('comment', '');
      $.ajax({
        url: '<?php echo base_url(); ?>PagD/up/' + $('#id_ap').val(),
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function( response, status ) {
          if (response=='true') {
            $('#alert-success-message').text('Les modifications sur les dimensions de l\'AP ont été enregistré');
            $('#toast-success').toast('show');
            var line = '<button class="pag-remove btn btn-outline-secondary" onclick="'
                + 'window.location=\'' + response[0].path + '\''
                +'"><i class="fa fa-download"></i> Télécharger PAG</button>';  
            $('.pag-remove').remove();
            $('#download_pag_place').append(line);
          } else {
            $('#alert-error-message').text('Échec: ' + response.error);
            $('#toast-error').toast('show');
            var table = '';
          }
        },
        error: function( response, status ) {
          $('#alert-error-message').text('Échec: ' + status);
        }
      }).done(function( gest ) {
        
      });
    }
  }

  function loadPagD(apId) {
    $.ajax({
      url: '<?php echo base_url(); ?>PagD/ap/' + apId,
      type: 'GET',
      dataType: "json",
      success: function( response, status ) {
        if (response.length>0) {
          var line = '<button class="pag-remove btn btn-outline-secondary" onclick="'
              + 'window.location=\'<?php echo base_url(); ?>' + response[0].path + '\''
              +'"><i class="fa fa-download"></i> Télécharger PAG</button>';  
          $('.pag-remove').remove();
          $('#download_pag_place').append(line);
        }
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