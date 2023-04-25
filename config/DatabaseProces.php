<?php

include_once('db.php');

class DatabaseProcess extends DatabasePDO
{

    // Variables for Login
    private $user;
    private $pass;

    // Variables for Create/Update/Delete
    private $id;
    private $firstname;
    private $lastname;
    private $bloodtype;
    private $age;
    private $birthdate;
    private $disease;
    private $gender;

    public function getAll()
    {
        try {
            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();
            //Preparamos la consulta sql
            $respuesta = $cnn->prepare("SELECT * FROM accounts");
            //Ejecutamos la consulta
            $respuesta->execute();
            //Creamos un array donde almacenaremos la data obtenida
            $account = [];
            //Recorremos la data obtenida
            foreach ($respuesta as $res) {
                //Llenamos la data en el array
                $account[] = $res;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $account;
    }

    public function login($user, $pass)
    {
        try {

            $this->user = $user;
            $this->pass = $pass;

            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();

            //Preparamos la consulta sql
            $stmt = $cnn->prepare("SELECT * FROM accounts WHERE email_client=:usernameEmail  AND password_client=:hash_password");
            $stmt->bindParam("usernameEmail", $this->user, PDO::PARAM_STR);
            $stmt->bindParam("hash_password", $this->pass, PDO::PARAM_STR);
            //Ejecutamos la consulta
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            $mesage = "";
            if ($count) {

                $mesage = "True";
            } else {
                $mesage = "";
            }
        } catch (PDOException $e) {
            echo '{"error":' . $e->getMessage() . '}}';
        }
        return $mesage;
    }

    public function newChild($v1, $v2, $v3, $v4, $v5, $v6, $v7)
    {
        try {
            $this->firstname = $v1;
            $this->lastname = $v2;
            $this->bloodtype = $v3;
            $this->age = $v4;
            $this->birthdate = $v5;
            $this->disease = $v6;
            $this->gender = $v7;

            # Conexión a MySQL
            // Instantiate database.
            $cnn = $this->conn();

            //Preparamos la consulta sql
            $stmt = $cnn->prepare(
                "INSERT INTO children (name_children, lastname_children, blood_type, age, birthdate, disease, gender)
                 VALUES(:FirstName, :LastName, :BloodType, :Age, :Birthdate, :Disease, :Gender)"
            );
            $stmt->bindParam("FirstName", $this->firstname, PDO::PARAM_STR);
            $stmt->bindParam("LastName", $this->lastname, PDO::PARAM_STR);
            $stmt->bindParam("BloodType", $this->bloodtype, PDO::PARAM_STR);
            $stmt->bindParam("Age", $this->age, PDO::PARAM_STR);
            $stmt->bindParam("Birthdate", $this->birthdate, PDO::PARAM_STR);
            $stmt->bindParam("Disease", $this->disease, PDO::PARAM_STR);
            $stmt->bindParam("Gender", $this->gender, PDO::PARAM_STR);
            //Ejecutamos la consulta
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db = null;
            $mesage = "";
            if ($count) {

                $mesage = "True";
            } else {
                $mesage = "";
            }
        } catch (PDOException $e) {
            echo '{"error":' . $e->getMessage() . '}}';
        }
        return $mesage;
    }

    function getAllChildrens()
    {
        try {
            $cnn = $this->conn();
            $respuesta = $cnn->prepare("SELECT * FROM children");
            $respuesta->execute();
            $childrens = [];
            foreach ($respuesta as $res) {
                $childrens[] = $res;
            }
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        for ($i = 0; $i<=count($childrens)-1; $i++)
        {
            echo "<tr>
            <th scope='row'>" . $childrens[$i]['id_children'] . "</th>
            <td>" . $childrens[$i]['name_children'] . "</td>
            <td>" . $childrens[$i]['lastname_children'] . "</td>
            <td>" . $childrens[$i]['gender'] . "</td>
            <td>" . $childrens[$i]['blood_type'] . "</td>
            <td>" . $childrens[$i]['age'] . "</td>
            <td>" . $childrens[$i]['birthdate'] . "</td>
            <td>" . $childrens[$i]['disease'] . "</td>
            </tr>";
        }
    }
}
