<?php

include_once('DatabaseProces.php');

if (isset($_POST['submitLogin'])) {
   $user = $_POST['email'];
   $pass = $_POST['pass'];

   $connect = new DatabaseProcess();
   $connect->login($user, $pass);
   $response = $connect->login($user, $pass);
   echo $response;

   if ($response === "True") {
      header("Location: ../home.php");
   } else {
      echo '<div class="alert alert-danger mt-2" role="alert">
                  Wrong email or password, please try again!
               </div>';
   }
}

if (isset($_POST['submitCreateChild'])) {

   $firstname = $_POST['firstname'];
   $lastname = $_POST['lastname'];
   $bloodtype = $_POST['bloodtype'];
   $age = $_POST['age'];
   $birthdate = $_POST['birthdate'];
   $disease = $_POST['disease'];
   $gender = $_POST['gender'];

   $create = new DatabaseProcess();
      // $create->newChild($firstname, $lastname, $bloodtype, $age, $birthdate, $disease, $gender);
      $response = $create->newChild($firstname, $lastname, $bloodtype, $age, $birthdate, $disease, $gender);
      if ($response === "True") {
         header('Location: ../pages/new-child.php');
         echo "<div class='alert alert-success mt-2' role='alert'>
                  Child Create Succesfully!
               </div>";
      } else {
         echo '<div class="alert alert-danger mt-2" role="alert">
                  Something Wrong, please check data again!
               </div>';
      }
}

if (isset($_POST['submitSearchId'])) {
   $idChildren = $_POST['searchInfo'];

   $connect = new DatabaseProcess();
   $connect->getIdChildren($idChildren);
}
class Functions
{
   function listChildren()
   {
      $list = new DatabaseProcess();
      $list->getAllChildrens();
   }
}
