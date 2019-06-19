
<div class="d-flex align-items-stretch">
  <!-- Sidebar Navigation-->
  <nav id="sidebar">
    <br>
    <span class="heading">SUPER ADMINISTRATEUR</span>
    <ul class="list-unstyled">
      <li class="">
        <a href="#ap-dropdown" aria-expanded="false" data-toggle="collapse"> 
          <i class="icon-windows"></i>Aires protégées 
        </a>
        <ul id="ap-dropdown" class="collapse list-unstyled ">
          <?php for ($i=0; $i < sizeof($ap); $i++) { ?>
             <li><a href="<?php echo site_url('bo/ap/'.$ap[$i]->id) ?>"><?php echo $ap[$i]->name; ?></a></li>
          <?php } ?>
        </ul>
      </li>
      <li class="">
        <a href="#"> 
          <i class="icon-windows"></i>Catégories 
        </a>
      </li>
      <li class="">
        <a href="#gestionnaires-dropdown" aria-expanded="false" data-toggle="collapse"> 
          <i class="icon-windows"></i>Gestionnaires 
        </a>
        <ul id="gestionnaires-dropdown" class="collapse list-unstyled ">
          <li><a href="#">Page</a></li>
          <li><a href="#">Page</a></li>
          <li><a href="#">Page</a></li>
        </ul>
      </li>
      <li class="">
        <a href="#subsistances-dropdown" aria-expanded="false" data-toggle="collapse"> 
          <i class="icon-windows"></i>Subsistances 
        </a>
        <ul id="subsistances-dropdown" class="collapse list-unstyled ">
          <li><a href="#">Page</a></li>
          <li><a href="#">Page</a></li>
          <li><a href="#">Page</a></li>
        </ul>
      </li>
      <li class="">
        <a href="#pressions-dropdown" aria-expanded="false" data-toggle="collapse"> 
          <i class="icon-windows"></i>Pressions 
        </a>
        <ul id="pressions-dropdown" class="collapse list-unstyled ">
          <li><a href="#">Page</a></li>
          <li><a href="#">Page</a></li>
          <li><a href="#">Page</a></li>
        </ul>
      </li>
      <li class="">
        <a href="#cibles-dropdown" aria-expanded="false" data-toggle="collapse"> 
          <i class="icon-windows"></i>Cibles 
        </a>
        <ul id="cibles-dropdown" class="collapse list-unstyled ">
          <li><a href="#">Page</a></li>
          <li><a href="#">Page</a></li>
          <li><a href="#">Page</a></li>
        </ul>
      </li>
    </ul>
  </nav>
