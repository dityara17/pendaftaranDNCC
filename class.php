<?php  
/**
 * 
 */
session_start();
class func
{
	
	function __construct(){
		$host = "localhost";
		$user = "root";
		$pw = "";
		$db = "expodncc";
		$this->db = new PDO("mysql:$host", $user, $pw);
		$this->db->exec("CREATE DATABASE IF NOT EXISTS $db");
		$this->db->exec("USE $db");
	}
	function randomUsername(){
		$firstname      = "dncc";//data coming from user
   		$lastname       = "";//data coming from user
   		$new_username   = $firstname.$lastname;

      /* Note: writing here pseudo sql code, replace with the actual php mysql query syntax */
      $data = array();
      $result =$this->db->prepare("SELECT COUNT(id) as user_count FROM user WHERE username like '%".$new_username."%'");
      $result->execute();
      $data =$result->fetch(PDO::FETCH_ASSOC);
      $count = $data['user_count'];

      if(!empty($count)) {
        $new_username = $new_username . $count;
      }	
      $password = $this->randomPassword();
      $this->db->query("INSERT INTO `user`( `username`, `password`) VALUES ('$new_username','$password')");
      return '1';
    }

    function randomPassword() {
      $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 5; $i++) {
      $n = rand(0, $alphaLength);
      $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
  }

  function login($username,$password){
    $stmt = $this->db->query("SELECT * FROM user WHERE username = '$username' and password = '$password' ");
    $pecah = $stmt->fetch(PDO::FETCH_ASSOC);
    $hit = $stmt->rowCount();
    if ($hit > 0 ) {
      $_SESSION['anggota'] = $pecah;
      return true;
    } else{
      return false;
    }
  }

  function getUser(){
    $stmt = $this->db->query("SELECT * FROM user  ");
    $data  =$stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }

  function checkAnggota($loginID){
    $stmt = $this->db->query("SELECT * FROM anggota where login_id = '$loginID'  ");
    $hit = $stmt->fetch(PDO::FETCH_ASSOC);
    return $hit;
  }

  function storeAnggota($loginID,$name,$nim,$email,$phone,$alamat,$devisi){
    $stmt = $this->db->prepare("INSERT INTO `anggota`( `login_id`, `nama`, `nim`, `email`, `phone`, `alamat`, `devisi`) VALUES (?,?,?,?,?,?,?)");
    $stmt->execute([$loginID,$name,$nim,$email,$phone,$alamat,$devisi]);
  }
  function updateAnggota($loginID,$name,$nim,$email,$phone,$alamat,$devisi){
    $stmt = $this->db->prepare("UPDATE `anggota` SET `nama`=?,`nim`=?,`email`=?,`phone`=?,`alamat`=?,`devisi`=? WHERE login_id = ?");
    $stmt->execute([$name,$nim,$email,$phone,$alamat,$devisi,$loginID]);
  }
  function admin(){
    $_SESSION['admin'] = 'mandi';
    return 0;
  }
  function getAnggotas(){
    $stmt = $this->db->query("SELECT * FROM `anggota` ");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }
  function getAnggotaDevisi($devisi){
    $stmt = $this->db->query("SELECT * FROM `anggota` where devisi = '$devisi' ");
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
  }


}

$use = new func();
?>