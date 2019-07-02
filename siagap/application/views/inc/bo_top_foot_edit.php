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
<script src="<?php echo base_url(); ?>assets/js/map-controller.js"></script>

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

<!-- diagram mermaid -->
<script src="https://unpkg.com/mermaid@8.1.0/dist/mermaid.min.js"></script>
<!-- <script>mermaid.initialize({startOnLoad:true});</script> -->
<!-- fin mermaid -->

<script type="text/javascript">
  // Prepare Select
  $.ajax({
    method: "GET",
    url: "http://localhost:8029/Developpement/SIAGAP/siagap/gestionnaire/autocomplete",
    data: { q: "" },
    dataType: "json"
  }).done(function( gest ) {
    var options = "";
    for (var i = gest.length - 1; i >= 0; i--) {
      options += "<option>"+ gest[i] + "</option>";
    }
    $('#gestionnaire_ap').html(options);
  });

  // Select with autocomplete
  $('#region_ap').selectpicker().ajaxSelectPicker({
    ajax: {
      url: 'http://localhost:8029/Developpement/SIAGAP/siagap/region/autocomplete',
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
      url: "http://localhost:8029/Developpement/SIAGAP/siagap/"+ $('#model-to-add').val() +"/set",
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
  // get items and show on popup 
  function getAllForModificationPopUp(model1, model2) {
    if ($('#id_ap').val() < 0) {
      $('#modal-error-message').text('Veuiller enregistrer d\'abord le profil de l\'ap');
      $('#modal-modify-basic').modal('toggle');
      $('#modal-error').modal('toggle');
    } else {
      $.ajax({
        method: "GET",
        url: "http://localhost:8029/Developpement/SIAGAP/siagap/" + model2 + "/all",
        dataType: "json",
        success: function( response ) {
          $.ajax({
            method: "GET",
            url: "http://localhost:8029/Developpement/SIAGAP/siagap/association" + model1 + model2 + "/get",
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
        url: "http://localhost:8029/Developpement/SIAGAP/siagap/association" + model1 + model2 + "/set",
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
        url: "http://localhost:8029/Developpement/SIAGAP/siagap/associationAp" + model1 
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
        url: "http://localhost:8029/Developpement/SIAGAP/siagap/association" + model1 + model2 + "/set",
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
      url: "http://localhost:8029/Developpement/SIAGAP/siagap/ap/set/" + id,
      data: { 
        nom: $('#name_ap').val(), 
        categorie_id: $('#categorie_ap').val(),
        date_creation: $('#creation_ap').val(),
        superficie: $('#superficie_ap').val(),
        contact: $('#contact_ap').val(),
        vision: $('#vision_ap').val(),
        missiom: $('#mission_ap').val(),
        objectif: $('#objectif_ap').val(),
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

  // For contexte
  function saveAPContext() {
    var id = '';
    if ($('#id_ap').val() > 0) {
      id = $('#id_ap').val();
    }
    $.ajax({
      method: "POST",
      url: "http://localhost:8029/Developpement/SIAGAP/siagap/ap/setcontext/" + id,
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
        url: "http://localhost:8029/Developpement/SIAGAP/siagap/realisation/set",
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
  }
</script>

<!-- Launch diagram -->
<script type="text/javascript">
  mermaid.mermaidAPI.initialize({
    startOnLoad:false
  });
  $(function(){
      // Example of using the API
      var element = document.querySelector("#diagram_rel_subs_pbm_pression");

      var insertSvg = function(svgCode, bindFunctions){
          element.innerHTML = svgCode;
      };

      var graphDefinition = 'graph TD\nA[Peche] --> B(Manque d\'opportunités)\nB --> C(Peche destructive)\nD[Agriculture] -->B(Manque d\'opportunités)\nB -->F(Coupe)\nD -->F(Coupe)\nB -->G(Braconnage)\nD -->G(Braconnage);\nclassDef manga fill:#1890ff;\nclass A manga;\nclass D manga;';
      var graph = mermaid.mermaidAPI.render('diagram_rel_subs_pbm_pression', graphDefinition, insertSvg);
  });
</script>

</body>
</html>