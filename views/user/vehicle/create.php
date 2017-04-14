
<div class="container white">
  <a onclick="brandList(),modelList(),createVehicleAddress()"> lance les js</a>



  <div class="row">
    <div class="row col l12 s12 center">
      <h4>Nouvelle Location</h4>

    </div>
    <div class="row col l12 s12">
      <div class="offset-l3 input-field col l3 offset-s2 s8" onclick="brandList()">
        <select id="marque" name="marque" onclick="brandList()">
          <option id="listeMarque"value="" disabled selected>choix de la Marque</option>

              <label>Materialize Select</label>
        </select>
      </div>
      <div class=" input-field col l3 offset-s2 s8" id="modele">
        <select id="modele" name="modele" onclick="brandList()">
          <option id="listeModele"value="" disabled selected>choix du modele</option>

          <!-- <label>Materialize Select</label> -->
        </select>
      </div>
    </div>

    <div class="row col l12 s12">
      <div class="input-field col l3 offset-l3 offset-s2 s8 ">
        <select id="carburant" name="carburant">
          <option value="" disabled selected>Choix de la couleur</option>
          <option value="blanc">blanc</option>
          <option value="noir">noir</option>
          <option value="bleu">bleu</option>
          <option value="rouge">rouge</option>
          <label>Materialize Select</label>
        </select>
      </div>
      <div class="input-field col l3 offset-s2 s8">
        <select id="carburant" name="carburant">
          <option value="" disabled selected>Choix du carburant</option>
          <option value="diesel">Diesel</option>
          <option value="essence">Essence</option>
              <label>Materialize Select</label>
        </select>
      </div>
    </div>
    <div class="row col l12 s12">
      <div class="input-field col l3 offset-l3  offset-s2 s8 ">
        <select id="place" name="place">
          <option value="" disabled selected>Nombre de place</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <label>Materialize Select</label>
        </select>
      </div>
      <div class="input-field col l3 offset-s2 s8">
        <select id="etatEntretien" name="etatEntretien">
          <option value="" disabled selected>Etat d'entretien</option>
          <option value="parfait">Parfait </option>
          <option value="tres bon ">Très bon </option>
          <option value="bon">Bon</option>
          <option value="mauvais">Bon</option>
              <label>Materialize Select</label>
        </select>
      </div>
    </div>
    <div class="row col l12 s12" style="height: 60px;">
      <div class="input-field col l2 offset-l3  offset-s2 s3">
        <input  required placeholder="adresse"  id="adresse" name="adresse"  type="text" class="" value="">
      </div>
      <div class="input-field col l2 s2 ">
        <input  required placeholder="codePostal" pattern= "[0-9]" id="codePostal" name="codePostal"  type="number" class="" value="">
      </div>
      <div class="input-field col l2 s3 ">
        <input  required placeholder="ville"  id="ville" name="ville"  type="text" class="" value="">
      </div>
      <!-- <div class="input-field col l3 ">
        <input  placeholder="pays"  id="pays" name="pays"  type="text" class="" value="">
      </div> -->
    </div>
    <div class="row col l12 s12" style="margin-top:30px;">
      <div class="offset-l3 input-field col l6 offset-s2 s8">
        <textarea class="materialize-textarea" placeholder="description" id="description"name="name" rows="8" cols="80"></textarea>
      </div>
    </div>
    <div class="row col l12 s12" style="margin-top:30px;">
      <div class="offset-l3 input-field col l3 offset-s2 s8">
        <input  placeholder="disponible le "  id="dateDispo" name="dateDispo"  type="date" class="" value="">
      </div>
      <div class="input-field col l3 offset-s2 s8">
        <input  placeholder="prix en €"  id="prix" name="prix"  type="number" class="" value="">
      </div>
    </div>

    <div class="col l12 offset-s2 s8 center">
        <button id="valider" onclick="createVehicleAddress(),createVehicle()"class="waves-effect waves-light btn">Enregistrer</button>
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
