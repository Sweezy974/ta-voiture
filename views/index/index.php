
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>TAVOITURE.COM</title>
  <link rel="stylesheet" href="views/base/css/materialize.min.css">
  <!-- Materialize Icons CDN -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewsport" content="width=device-width, initial-scale=1.0">
  <!-- style -->
  <link rel="stylesheet" href="views/base/css/main.css">
</head>
<body>
  <div class="navbar-fixed">
    <nav class="grey">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" data-activates="slide-out" class="button-collapse" style="padding-right:20px;"><i class="material-icons">menu</i></a>
          <!-- <ul id="nav-mobile" class="right ">
            <li><a href="page.php?id=8"><span class="new red badge">0</span></a></li>
          </ul> -->
          <a href="#!" class="brand-logo center uppercase">tavoiture.com</a>
          <!-- navbar for small devices -->
          <ul class="right ">
            <!-- <li><a href="home.php">Accueil</a></li> -->
            <li class="">
              <!-- <a class="dropdown-button" href="#!" data-activates="dropdown1"><i class="fa fa-user"></i> Mon Compte <i class="fa fa-angle-down"></i></a> -->
              <ul   style="margin-top: 64px;" id="dropdown1" class="dropdown-content" >
                <li><a href="#!">Gérer mon compte</a></li>
                <li><a href="#!">Mes statistiques</a></li>
                <!-- <li><a href="#!">Déclarer un bug</a></li> -->

                <li class="divider"></li>
                <li><a href="./?action=logout"><i class="fa fa-sign-out"></i>Déconnexion</a></li>
              </ul>
            </li>
          </ul>



        </div>
      </div>
    </nav>
  </div>


  <div class="row">
    <div class="container">
      <div class="col s12 l12 center mar">
        <div class="offset-l2 col l4 s12 marsmart">
          <a  value="1" href="/?c=user&t=ownerIndex" class="waves-effect waves-light btn-large red col s12"><i class="material-icons left">mode_edit</i>Propriétaire</a>
        </div>
        <div class="offset col l4 s12 marsmart">
          <a  value="2" href="/?c=user&t=tenantIndex"class="waves-effect waves-light btn-large blue col s12"><i class="material-icons left">collections_bookmark</i>Locataire</a>
        </div>
      </div>
    </div>


  </div>

</div>
<script src="views/index/js/index.js"></script>
<script src="views/base/js/jquery-3.1.0.min.js" charset="utf-8"></script>
<script src="views/base/js/materialize.js" charset="utf-8"></script>
<script type="text/javascript">
// Initialize collapse button
$('.button-collapse').sideNav({
  menuWidth: 250, // Default is 240
  edge: 'left', // Choose the horizontal origin
  closeOnClick: false // Closes side-nav on <a> clicks, useful for Angular/Meteor
}
);

// Initialize collapsible (uncomment the line below if you use the dropdown variation)
$('.collapsible').collapsible();

$(document).ready(function(){
  // we call the function
  indexVehicleList() ;


});


</script>
</body>
</html>
