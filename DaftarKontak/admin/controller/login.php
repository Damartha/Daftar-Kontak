
<?php
if(isset($_POST['email'])){
    //action
    $conn=$con->koneksi();
    $email=$_POST['email'];$psw=md5($_POST['password']);
    $sql = "SELECT * FROM user where password_user ='$psw' and email_user ='$email'";
    $user = $conn->query($sql);
    if($user->num_rows > 0){
        //session_start();
        $sess=$user->fetch_array();
        $_SESSION['login']['email']=$sess['email_user'];
        $_SESSION['login']['id']=$sess['id_user'];
        header('Location: '.'http://localhost/DaftarKontak/admin/index.php?mod=daftar');
    }else{
        $msg="Email atau Password tidak cocok";
        include_once 'views/vlogin.php';
    }
}else{
    include_once 'views/vlogin.php';
}
?>
