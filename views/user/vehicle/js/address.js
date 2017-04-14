
function createVehicleAddress(){
  if (

    $( "#adresse" ).val() != ""  &&
    $( "#codePostal" ).val() != ""  &&
    $( "#pays" ).val() != ""
  )
  {
    var idp = $('#id_page').val();
    $.ajax({
        type: 'POST',
        url: 'models/vehicle/address.php',
        dataType: 'json',
        data: {
          Adresse:$( "#adresse" ).val(),
          CodePostal:$( "#codePostal" ).val(),
          Ville:$( "#ville" ).val(),
          Pays:$( "#pays" ).val(),



          // var message_pri = $(".message_pri:checked").val();
        },
        success: function (data) {
          alert('adresse créé');
          // window.location ='page.php?id=7&pk='+cc+"#ventes";//redirection modules ventes pour ce client

        }

    });




  }
  else{
    alert("champs manquants");
  }


}
