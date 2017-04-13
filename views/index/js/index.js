function indexVehicleList() {
  $('#vehicleList').html("");
  var idp = $('#id_page').val();
  $.ajax({
    type: 'POST',
    url: 'models/index/vehicleList.php',
    dataType: 'json',
    data: {
      id_page: idp

    },
    success: function (data) {
      alert('ddd');


      for (i = 0; i < data.Color.length; i++) {
        $('#vehicleList').append('<li id="'+data.Color[i]+'" class="collection-item avatar grey lighten-3 "> <img src="views/base/img/rs6.jpg" alt="" class="circle"> <span class="title">'+data.Color[i]+ '</span> <p>détails <br>'+data.Color[i]+ '</p> <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> </li>');

        // $('#vehicleList').append(' <li id="'+[i]+'" title="cliquer pour lire le message"  class="collection-item avatar grey lighten-3"><a onclick="markAsRead('+data.idMessage[i]+') ,ShowMessage('+data.idMessage[i]+','+data.IdLigne[i]+')" href="#modal1" style="text-decoration:none;color:inherit;"><i class="material-icons circle blue">email</i> <span class="title" style="font-weight:bolder;" id="EtatMsg" value="1">'+data.Titre[i]+'</span> <p class="small-text" style="color:grey;">'+data.Date[i]+'<br></p><p>Contenu : '+data.Message[i].substring(0,80)+' ...</p><a href="#" onclick="DeleteMessage('+data.idMessage[i]+')" class="secondary-content red"><input type="text" hidden  id="luMsg" value="1"><input type="text" hidden  id="supMsg" value="2"></li>');
        //  $('#divModal').append(' <div id="modal'+[i]+'" class="modal"> <div class="modal-content"> <h4>Modal Header</h4> <div class="row col m12 s12" style="height: 60px;"> <div class="input-field col s12"> <input placeholder="origine du message" id="origine" name="origine" type="text" class="" required value=""> </div> </div> <div class="row col s12"> <div class="input-field col s12"> <textarea placeholder="Entrez votre message ... "name="message" id="message" class="materialize-textarea" rows="8" cols="80"></textarea> </div> </div> </div> <div class="modal-footer"> <a onclick="insertMessage()" type="submit" name="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Envoyé</a> </div> </div>');
        // console.log(data.RaisonSociale[i]);

        // <a href=\"page.php?id=" + dest + "&pk=" + data.ForeignKey[i] + "\" class=\"waves-effect waves-light btn col s10 offset-s1\">" + data.RaisonSociale[i] + " : " + data.CodeClient[i] + "</a>
      }



    }

  });
}
