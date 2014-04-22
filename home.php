<div class="row prima">
  <h2 class="title">LAS DESTACADAS !</h2> 
  <div class="row">
  <?php 

  shuffle_assoc($remeras);
  $sliceRemeras=array_slice($remeras, 0,6, true);
  foreach ($sliceRemeras as $key => $value) { 
  echo "<div class='col-xs-6 col-sm-4'><div class='thumbnail'><img src='images/".$value."' class='img-responsive'><h5>".$key."<h5></div></div>";
  }

  ?>
  </div>
  <div class="jumbotron">
    <img src="images/banner.png">  </div>
</div>

<div class="row duo">
  <h2>QUIENES SOMOS ?</h2>
  <div class="col-md-10 col-sm-offset-1">
    <div class="col-sm-6">
      <p>Somos DONBA RETRO, lorem ipsum dolor sit amet, 
        consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet 
        dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud 
        exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat.
      </p>
      <p>
        Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, 
        vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio 
        dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait 
        nulla facilisi. 
      </p>
    </div>  
    <img class="col-sm-6 col-xs-12" src="images/logo_quienesSomos.png">
  </div>
</div>
