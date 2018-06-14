<div class="row noMargin footer align-items-center">
  <div class="col-lg-4 center" id="logoFooterPc">
    <img src="assets/img/logo_background_black.png" alt="logo" style="width:200px; height:auto">
  </div>
  <div class="col-lg-8 col-md-">
    <div class="row noMargin">
      <div class="col-lg-12 col-md-" style="border-bottom: 2px white">
        <h3><a href="index.php?page=contact" class="white">Contact</a></h3>
        <div class="line"></div>
      </div>
    </div>
    <div class="row noMargin" style="margin-top:10px">
      <div class="col-lg-6 col-md-">
        <div class="row noMargin" style="margin-bottom:30px">
          <div class="col-lg-2 col-md-">
            <i class="fas fa-phone fa-2x white"></i>
          </div>
          <div class="col-lg-10 col-md- white">
            <p>+33 782 780 350</p>
          </div>
        </div>
        <div class="row noMargin">
          <div class="col-lg-2 col-md-">
            <i class="fas fa-envelope fa-2x white"></i>
          </div>
          <div class="col-lg-10 col-md- white">
            <p>contact@power28.com</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-md-">
        <div class="row noMargin">
          <div class="col-lg-2 col-md-">
            <i class="fas fa-map-marker-alt fa-3x white"></i>
          </div>
          <div class="col-lg-10 col-md- white">
            <p>54 rue custine<br/>75018 </p>
          </div>
        </div>
        <div class="row noMargin">
          <?php if ($_GET['page'] == 'contact'): ?>
          <?php else: ?>
            <div id="map" class="map2"></div>
          <?php endif; ?>
        </div>
      </div>
      <div class="col-md-4 center" id="logoFooterTel">
        <img src="assets/img/logo_background_black.png" alt="logo" style="width:200px; height:auto">
      </div>
    </div>
  </div>
</div>
<div class="row noMargin center footer dark_grey">
  <div class="col-lg-12 col-md-">
    <p>Power28.com © 2018</p>
  </div>
</div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
$(document).ready(function(){
    $('[data-toggle="popover"]').popover();
});
</script>

<script>
  function initMap() {
    var rueCustine = {lat: 48.889705, lng: 2.343688};
    var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 17,
      center: rueCustine
    });
    var contentString ='<p style="font-family: Roboto,Arial;">'+'<span style="font-weight:bold">'+'Power28'+'</span>'+'<br/>'+'58 Rue Custine'+'<br/>'+'75018 Paris'+'<br/>'+'France'+'<br/>'+'<a href="https://www.google.com/maps/place/58+Rue+Custine,+75018+Paris,+France/@48.8897837,2.3415113,17z/data=!3m1!4b1!4m5!3m4!1s0x47e66e5c4586b7d9:0x686042d8e4f889c0!8m2!3d48.8897837!4d2.3437?hl=fr-FR" target="_blank" class="link" style="color:blue;">Voir sur Google Maps</a>'+'</p>';

    var infowindow = new google.maps.InfoWindow({
      content: contentString
    });
    var marker = new google.maps.Marker({
      position: rueCustine,
      map: map
    });
    marker.addListener('click', function() {
  infowindow.open(map, marker);
});
  }
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGC2Gc6a5-ab0IBPvJljRN4UwY31tJ0vY&callback=initMap"></script>



<script>

  var WindowsSize = window.innerWidth;

  if (WindowsSize  < 991.98 ){
    document.getElementById('logoFooterTel').style.display='block';
    document.getElementById('logoFooterPc').style.display='none';
  }else {
    document.getElementById('logoFooterPc').style.display='block';
    document.getElementById('logoFooterTel').style.display='none';
  }
</script>



<script src="assets/js/additional_js.js"></script>
