<script src="views/user/js/user.js"></script>

<div class="row">
  <div class="container white" style="min-height:650px;">
    <div class="row col s12 center">
      <h3>réservation</h3>
    </div>
    <div class="row col s12">
      <ul id="tabs-swipe-demo" class="tabs">
        <li  onclick="pendingReservationList()"class="tab col s3"><a href="#reservationAttente">En attente</a></li>
        <li onclick="acceptedReservationList()"class="tab col s3"><a href="#reservationAccepte">Accepté</a></li>
      </ul>

    </div>
    <div id="reservationAttente" class="col s12 ">
      <!-- attente -->
      <ul class="collection" id="pendingReservation">

      </ul>
    </div>
    <div id="reservationAccepte" class="col s12 ">
      <!-- accepté -->
      <ul class="collection" id="acceptedReservation">

      </ul>
    </div>



  </div>


</div>

<script src="views/base/js/jquery-3.1.0.min.js" charset="utf-8"></script>
<script>
$(document).ready(function(){
  // we call the function
  acceptedReservationList() ;
  pendingReservationList();

});
</script>
