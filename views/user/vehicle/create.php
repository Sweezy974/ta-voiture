
<div class="container">
  <div class="row">

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
    </div>
    <div class="col l12 center">
        <button id="valider" onclick="createVehicle()"class="waves-effect waves-light btn">Enregistrer</button>
    </div>


  </div>
</div>
<script src="views/user/js/user.js"></script>
