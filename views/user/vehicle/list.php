
<div class="container white" style="min-height:650px;">  <div class="row">
    <div class="row col s12">
      <ul id="tabs-swipe-demo" class="tabs">
        <li class="tab col s3" onclick="vehicleList()"><a href="#listeVehicule">Mes véhicules</a></li>
      </ul>

    </div>

    <div class="col s12" >
      <ul class="collection" id="vehicleList">

    </ul>
    </div>
</div>
</div>

<script src="views/base/js/jquery-3.1.0.min.js" charset="utf-8"></script>
<script type="text/javascript">


$(document).ready(function(){
  // we call the function
  vehicleList() ;


});


</script>
