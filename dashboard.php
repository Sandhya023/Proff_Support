<?php session_start();

if (!(isset($_SESSION['login']))) {

	header('location:../index.php');

}

else{

    header('location:add-course.php');
    # code...
}
?>
