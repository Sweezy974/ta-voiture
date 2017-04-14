<?php
namespace Controllers;
use App\Config;
// use Models\Users;


class UserController extends Controller
{
  // protected function getConnection()
  // {
  //   try {
  //     $this->connection = new PDO('mysql:host=localhost;dbname=tavoiture','root','');
  //     $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //   } catch (PDOException $e) {
  //     print "Erreur !: " . $e->getMessage() . "<br/>";
  //     die();
  //   }
  //   return $this->connection;
  // }

  public function index()
  {
    echo "Hello User Page!";
  }

  public function ownerIndex()
  {
    // include_once('models/user/ajax/vehicleList.php');
    include_once('views/user/role/owner/navbar/index.php');
    include_once('views/user/role/owner/index.php');
    include_once('views/base/script.php');

    // echo "Hello Owner Page!";
  }

  public function tenantIndex(){
    // include_once('models/user/ajax/vehicleList.php');
    include_once('views/user/role/tenant/navbar/index.php');
    include_once('views/user/role/tenant/index.php');
    include_once('views/base/script.php');
    // echo "Hello Tenant Page!";
  }

  // créé une annonce pour son vehicule
  public function createVehicle()
  {


    // include_once('models/user/ajax/createVehicle.php');
    include_once('views/user/role/owner/navbar/index.php');
    include_once('views/user/vehicle/create.php');
    include_once('views/base/script.php');
  }

  // liste d'annnonce
  public function vehicleList()
  {
    include_once('views/user/role/owner/navbar/index.php');
    include_once('views/user/vehicle/list.php');
    include_once('views/base/script.php');
  }

  public function reservationList()
  {

    include_once('views/user/role/owner/navbar/index.php');
    include_once('views/user/reservation/list.php');
    include_once('views/base/script.php');
    // echo "reservationList";
  }



}
