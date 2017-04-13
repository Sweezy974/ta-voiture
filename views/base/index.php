
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
    <nav class="blue">
      <div class="container">
        <div class="nav-wrapper">
          <a href="#" data-activates="slide-out" class="button-collapse" style="padding-right:20px;"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right ">
            <li><a href="page.php?id=8"><span class="new red badge">21</span></a></li>
          </ul>
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
          <!-- sidenav -->
          <div class="col s12 m4 l3">
            <ul id="slide-out" class="side-nav fixed" style="transform: translateX(0%);">
              <li class="">
                <div class="userView black">
                  <img class="background" src="views/base/img/blur2.jpg">

                  <!-- user image -->
                  <a href="#!user">
                    <img class="circle" src="views/base/img/mastro-linda.gif">
                  </a>
                  <a href="#!name"><span class="white-text name">propriétaire</span></a>
                  <a href="#!email"><span class="white-text email">proprietaire@gmail.com</span></a>
                </div>
              </li>
              <li><a href="#"><!--<i class="material-icons right">mode_edit</i>!--> Nouvelle annonce</a></li>
              <li><a href="#"><!--<i class="material-icons right">collections_bookmark</i>!-->Mes annonces</a></li>
              <li><a href="#"><!--<i class="material-icons right">date_range</i>!-->Gestion réservations</a></li>
              <li><a href="/?c=user&t=list">v</a></li>
              <li><a href="/?c=vehicle&t=list">u</a></li>

            </ul>
          </div>


        </div>
      </div>
    </nav>
  </div>
