
<div class="container">
  <a onclick="brandList(),modelList(),createVehicleAddress()"> lance les js</a>
  <div class="row">
    <div class="row col l12">
      <div class="offset-l3 input-field col l3" onclick="brandList()">
        <select id="marque" name="marque" onclick="brandList()">
          <option id="listeMarque"value="" disabled selected>choix de la Marque</option>

              <!-- <label>Materialize Select</label> -->
        </select>
      </div>
      <div class="offset-l3 input-field col l3" id="modele">
      </div>
    </div>

    <div class="row col l12" style="height: 60px;">
      <div class="offset-l3 input-field col l3 ">
        <input  placeholder="prix"  id="prix" name="prix"  type="number" class="" value="">
      </div>
      <div class="input-field col l3 ">
        <select id="carburant" name="carburant">
          <option value="" disabled selected>Choix de la couleur</option>
          <option value="rose">rose</option>
          <option value="rouge">rouge</option>
          <label>Materialize Select</label>
        </select>
      </div>
    </div>
    <div class="row col l12">
      <div class="offset-l3 input-field col l3">
        <select id="carburant" name="carburant">
          <option value="" disabled selected>Choix du carburant</option>
          <option value="diesel">Diesel</option>
          <option value="essence">Essence</option>
              <label>Materialize Select</label>
        </select>
      </div>
      <div class="offset-l3 input-field col l3">
        <select id="carburant" name="carburant">
          <option value="" disabled selected>Choix du carburant</option>
          <option value="diesel">Diesel</option>
          <option value="essence">Essence</option>
              <label>Materialize Select</label>
        </select>
      </div>
    </div>
    <div class="row col l12" style="height: 60px;">
      <div class="input-field col l3 ">
        <input  placeholder="adresse"  id="adresse" name="adresse"  type="text" class="" value="">
      </div>
      <div class="input-field col l3 ">
        <input  placeholder="codePostal"  id="codePostal" name="codePostal"  type="text" class="" value="">
      </div>
      <div class="input-field col l3 ">
        <input  placeholder="ville"  id="ville" name="ville"  type="text" class="" value="">
      </div>
      <div class="input-field col l3 ">
        <input  placeholder="pays"  id="pays" name="pays"  type="text" class="" value="">
      </div>
    </div>
    <div class="col l12 center">
        <button id="valider" onclick="createVehicle()"class="waves-effect waves-light btn">Enregistrer</button>
    </div>


  </div>
</div>
<script src="views/user/vehicle/js/vehicle.js"></script>
<script src="views/user/vehicle/js/address.js"></script>
<script src="views/user/js/user.js"></script>
<script>
$(document).ready(function(){
  // we call the function
  brandList() ;
  modelList() ;
  createVehicleAddress();

});
</script>
