<?php
$con->auth();
$conn=$con->koneksi();
switch (@$_GET ['page']) {
    case 'add':
        $content="views/daftar/tambah.php";
        include_once 'views/template.php';
        break;
    case 'save':
        if($_SERVER['REQUEST_METHOD']=="POST"){
            $id_motor=$_SESSION['login']['id'];
            if(!empty($_POST['id'])){
                $sql = "UPDATE kontak SET nama ='$_POST[nama]', status = '$_POST[status]' WHERE no_tlpn='$_POST[no_tlpn]'";
            } else {
                $sql="INSERT INTO kontak (no_tlpn, nama, status)
                VALUES ('$_POST[no_tlpn]','$_POST[nama]','$_POST[status]')";
            }
            if($conn->query($sql)==TRUE) {
                header('Location: '.$con->site_url().'/admin/index.php?mod=daftar');
            } else {
                $err['msg']="Error: ". $sql . "<br>" . $conn->error;
            }
        } else {
            $err['msg']="Tidak diijinkan";
        }
        if (isset($err)){
            $content="views/daftar/tambah.php";
            include_once 'views/template.php';
        break;
        }
        break;
    case 'edit':
        $daftar="SELECT* FROM kontak WHERE md5(id)='$_GET[id]'";
        $daftar=$conn->query($daftar);
        $_POST=$daftar->fetch_assoc();
        $_POST['id']=md5($_POST['id']);
        $content="views/daftar/tambah.php";
        include_once 'views/template.php';
        break;
    case 'delete':
        $daftar ="DELETE FROM kontak WHERE md5(id)='$_GET[id]'";
        $daftar=$conn->query($daftar);
        header('Location: '.$con->site_url().'/admin/index.php?mod=daftar');
        break;
    default:
        $sql="SELECT* FROM kontak";
        $daftar=$conn->query($sql);
        $conn->close();
        $content="views/daftar/tampil.php";
        include_once 'views/template.php';
}
?>