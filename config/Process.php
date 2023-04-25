<?php

include_once('DatabaseProces.php');
class Functions
{
   public function Login()
   {
      $user = $_POST['email'];
      $pass = $_POST['pass'];

      //instanciar el objeto
      $users = new DatabaseProcess();
      // llamado función de login
      $users->login($user, $pass);
      $response = $users->login($user, $pass);
      echo $response;

      if ($response === "True") {
         header("Location: ./home.php");
      } else {
         echo '<div class="alert alert-danger mt-2" role="alert">
                  Wrong email or password, please try again!
               </div>';
      }
   }

   public function NewChild()
   {
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
         echo '<div class="alert alert-success mt-2" role="alert">
                  Child Create Succesfully!
               </div>';
      } else {
         echo '<div class="alert alert-danger mt-2" role="alert">
                  Something Wrong, please check data again!
               </div>';
      }
   }

   function listChildren()
   {
      $list = new DatabaseProcess();
      $list -> getAllChildrens();
   }
}
