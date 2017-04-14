

function createVehicle(){
  if (
    // $( "#marque" ).val() != ""  &&
    // $( "#modele" ).val() != ""  &&
    $( "#couleur" ).val() != "" &&
    $( "#place" ).val() != ""  &&
    $( "#prix" ).val() != ""  &&
    $( "#etatEntretien" ).val() != ""  &&
    $( "#carburant" ).val() != ""
  ){
    var idp = $('#id_page').val();
    $.ajax({
        type: 'POST',
        url: 'models/user/createVehicle.php',
        dataType: 'json',
        data: {
          // Marque:$( "#marque" ).val(),
          // Modele:$( "#modele" ).val(),
          Couleur:$( "#couleur" ).val(),
          Carburant:$( "#carburant" ).val(),
          Place:$( "#place" ).val(),
          EtatEntretien:$( "#etatEntretien" ).val(),
          DateDispo:$( "#dateDispo" ).val(),
          Prix:$( "#prix" ).val(),
          Description:$( "#description" ).val()



          // var message_pri = $(".message_pri:checked").val();
        },
        success: function (data) {
          alert('vehicule créé');
          // window.location ='page.php?id=7&pk='+cc+"#ventes";//redirection modules ventes pour ce client

        }

    });



  }
  else{
    alert("champs manquants");
  }

}

function vehicleList() {
  $('#vehicleList').html("");
  var idp = $('#id_page').val();
  $.ajax({
    type: 'POST',
    url: 'models/user/vehicleList.php',
    dataType: 'json',
    data: {
      id_page: idp

    },
    success: function (data) {
      // alert('ddd');


      for (i = 0; i < data.Color.length; i++) {
        $('#vehicleList').append('<li id="'+data.Color[i]+'" class="collection-item avatar grey lighten-3 "> <img src="views/base/img/rs6.jpg" alt="" class="circle"> <span class="title">'+data.Color[i]+ '</span> <p>détails <br>'+data.Price[i]+ '€</p> <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> </li>');
      }



    }

  });
}

function acceptedReservationList() {
  $('#acceptedReservation').html("");
  var idp = $('#id_page').val();
  $.ajax({
    type: 'POST',
    url: 'models/user/acceptedReservationList.php',
    dataType: 'json',
    data: {
      id_page: idp

    },
    success: function (data) {


      for (i = 0; i < data.Status.length; i++) {
        $('#acceptedReservation').append('<li class="collection-item avatar grey lighten-3 "> <img src="views/base/img/rs6.jpg" alt="" class="circle"> <span class="title">nom</span> <p>détails <br> détails 2 </p> <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a> </li>');

        // $('#vehicleList').append(' <li id="'+[i]+'" title="cliquer pour lire le message"  class="collection-item avatar grey lighten-3"><a onclick="markAsRead('+data.idMessage[i]+') ,ShowMessage('+data.idMessage[i]+','+data.IdLigne[i]+')" href="#modal1" style="text-decoration:none;color:inherit;"><i class="material-icons circle blue">email</i> <span class="title" style="font-weight:bolder;" id="EtatMsg" value="1">'+data.Titre[i]+'</span> <p class="small-text" style="color:grey;">'+data.Date[i]+'<br></p><p>Contenu : '+data.Message[i].substring(0,80)+' ...</p><a href="#" onclick="DeleteMessage('+data.idMessage[i]+')" class="secondary-content red"><input type="text" hidden  id="luMsg" value="1"><input type="text" hidden  id="supMsg" value="2"></li>');
        //  $('#divModal').append(' <div id="modal'+[i]+'" class="modal"> <div class="modal-content"> <h4>Modal Header</h4> <div class="row col m12 s12" style="height: 60px;"> <div class="input-field col s12"> <input placeholder="origine du message" id="origine" name="origine" type="text" class="" required value=""> </div> </div> <div class="row col s12"> <div class="input-field col s12"> <textarea placeholder="Entrez votre message ... "name="message" id="message" class="materialize-textarea" rows="8" cols="80"></textarea> </div> </div> </div> <div class="modal-footer"> <a onclick="insertMessage()" type="submit" name="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Envoyé</a> </div> </div>');
        // console.log(data.RaisonSociale[i]);

        // <a href=\"page.php?id=" + dest + "&pk=" + data.ForeignKey[i] + "\" class=\"waves-effect waves-light btn col s10 offset-s1\">" + data.RaisonSociale[i] + " : " + data.CodeClient[i] + "</a>
      }



    }

  });
}

function acceptReservation(){
    var idp = $('#id_page').val();
    $.ajax({
        type: 'POST',
        url: 'models/user/acceptReservation.php',
        dataType: 'json',
        data: {
          IdReservation:$( "#idReservation" ).val(),
          Accepter:$( "#accepter" ).val()
        },
        success: function (data) {
          alert('reservation accepté ');
          // window.location ='page.php?id=7&pk='+cc+"#ventes";//redirection modules ventes pour ce client

        }

    });



  // }
  // else{
  //   alert("champs manquants");
  // }

}
function declineReservation(){
    var idp = $('#id_page').val();
    $.ajax({
        type: 'POST',
        url: 'models/user/declineReservation.php',
        dataType: 'json',
        data: {
          IdReservation:$( "#idReservation" ).val(),
          Refuser:$( "#refuser" ).val()
        },
        success: function (data) {
          alert('reservation refusé ');
          // window.location ='page.php?id=7&pk='+cc+"#ventes";//redirection modules ventes pour ce client

        }

    });



  // }
  // else{
  //   alert("champs manquants");
  // }

}



function pendingReservationList() {
  $('#pendingReservation').html("");
  var idp = $('#id_page').val();
  $.ajax({
    type: 'POST',
    url: 'models/user/pendingReservationList.php',
    dataType: 'json',
    data: {
      id_page: idp

    },
    success: function (data) {


      for (i = 0; i < data.Status.length; i++) {
        $('#pendingReservation').append('<input hidden id="idReservation" type="text" value="'+data.ReservationId[i]+'"><li class="collection-item avatar grey lighten-3 "> <img src="views/base/img/rs6.jpg" alt="" class="circle"> <span class="title">nom</span> <p>détails <br> détails 2 </p> <a id="accepter" value="1" onclick="acceptReservation()">accepter </a><a id="refuser" value="2" onclick="declineReservation()"> refuser</a> </li>');

        // $('#vehicleList').append(' <li id="'+[i]+'" title="cliquer pour lire le message"  class="collection-item avatar grey lighten-3"><a onclick="markAsRead('+data.idMessage[i]+') ,ShowMessage('+data.idMessage[i]+','+data.IdLigne[i]+')" href="#modal1" style="text-decoration:none;color:inherit;"><i class="material-icons circle blue">email</i> <span class="title" style="font-weight:bolder;" id="EtatMsg" value="1">'+data.Titre[i]+'</span> <p class="small-text" style="color:grey;">'+data.Date[i]+'<br></p><p>Contenu : '+data.Message[i].substring(0,80)+' ...</p><a href="#" onclick="DeleteMessage('+data.idMessage[i]+')" class="secondary-content red"><input type="text" hidden  id="luMsg" value="1"><input type="text" hidden  id="supMsg" value="2"></li>');
        //  $('#divModal').append(' <div id="modal'+[i]+'" class="modal"> <div class="modal-content"> <h4>Modal Header</h4> <div class="row col m12 s12" style="height: 60px;"> <div class="input-field col s12"> <input placeholder="origine du message" id="origine" name="origine" type="text" class="" required value=""> </div> </div> <div class="row col s12"> <div class="input-field col s12"> <textarea placeholder="Entrez votre message ... "name="message" id="message" class="materialize-textarea" rows="8" cols="80"></textarea> </div> </div> </div> <div class="modal-footer"> <a onclick="insertMessage()" type="submit" name="submit" class="modal-action modal-close waves-effect waves-green btn-flat">Envoyé</a> </div> </div>');
        // console.log(data.RaisonSociale[i]);

        // <a href=\"page.php?id=" + dest + "&pk=" + data.ForeignKey[i] + "\" class=\"waves-effect waves-light btn col s10 offset-s1\">" + data.RaisonSociale[i] + " : " + data.CodeClient[i] + "</a>
      }



    }

  });
}
