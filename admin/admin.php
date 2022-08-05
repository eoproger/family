<?
require_once '../functions/connect.php';
session_start();

$login = $_POST["login"];
$password = $_POST["password"];

$sql = $pdo->prepare("SELECT id,login FROM user WHERE login=:login AND password=:password");
$sql->execute(array('login'=>$login,'password'=>$password));
$s_array=$sql->fetch(PDO::FETCH_ASSOC);

if(isset($s_array["id"]) && $s_array["id"] > 0){
    $_SESSION['login'] = $s_array["login"];
    header('location: /admin.php');
}else{
    header('location: /login.php');
}

?>