<script src="https://code.jquery.com/jquery-3.3.1.min.js" 
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" 
    crossorigin="anonymous">
</script>
<div class="page-content" style="background-color:#22252a; min-height:100vh; width: 100%; margin-left: 0px;">
  <section class="no-padding-bottom">
    <div class="container">
      <div class="row">
        <br>
      </div>
      <div class=""  id="login_div">
        <div class="row">
          <div class="offset-lg-4 offset-md-4 col-lg-4 col-md-4 ">
            <div class="bar-chart block no-margin-bottom">
              <h4>Inscription</h4>
              <br>
              <?php echo form_open(base_url().'Authentication/inscrire/'); ?>
                <label for="login">Nom de l'AP :</label>
                <select id="login" name="login" class="form-control" required>
                <?php for ($i=0; $i < sizeof($ap); $i++) { ?>
                  <option value="<?php echo $ap[$i]->name.'_'.$ap[$i]->id; ?>"><?php echo $ap[$i]->name; ?></option>
                <?php } ?>
                </select>
                <!-- <input id="login" type="text" name="login" class="form-control" required
                    placeholder="Veuiller taper ici votre adresse e-mail"> -->
                <br>
                <label for="pw">Mot de passe :</label>
                <input id="pw" type="password" name="password" class="form-control" required
                    placeholder="Veuiller taper ici votre mot de passe">
                <br>
                <label for="cpw">Confirmation du mot de passe :</label>
                <input id="cpw" onchange="checkcpw()" type="password" name="" class="form-control" required
                    placeholder="Veuiller taper ici votre mot de passe">
                <br>
                <input style="float: right;" id="inscrire" class="btn btn-success" type="submit" disabled name="go" value="S'inscrire">
                <br>
                <br>
                <br>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
    </section>
    <script type="text/javascript">
      function checkcpw() {
        if($('#pw').val() != $('#cpw').val()) {
          $('#cpw').css('border-color', '#fb11004d');
          $('#inscrire').prop('disabled', true);
        } else {
          $('#cpw').css('border-color', '#444951');
          $('#inscrire').prop('disabled', false);
        }
      }
    </script>