<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="shortcut icon" href="./favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-body-tertiary">
    <div class="container-fluid">
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="d-flex px-5 bg-body flex-column justify-content-center align-items-center vh-100">
                    <h1 class="mb-3 font-monospace">L O G I N</h1>
                    <div class="d-flex flex-column justify-content-center align-items-center">
                    </div>
                    <form class="d-flex flex-column w-75" method="POST">
                        <div class="row mb-4">
                            <div class="col">
                                <label for="FirstName" class="form-label">Email</label>
                                <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com" aria-label="email">
                            </div>
                            <div class="col">
                                <label for="LastName" class="form-label">Password</label>
                                <input type="password" name="pass" id="pass" class="form-control" placeholder=".." aria-label="pass">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col d-grid">
                                <button type="submit" name="submit" class="btn btn-dark py-2 text-uppercase font-monospace">Login</button>
                            </div>
                        </div>
                        <?php
                        if (isset($_POST['submit'])) {
                            include_once("./config/Process.php");
                            $connect = new Functions();
                            $connect->Login();
                        }
                        ?>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>