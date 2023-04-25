<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Child</title>
    <link rel="shortcut icon" href="../favicon.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body class="bg-body-tertiary">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-lg bg-body-secondary bg-opacity-25 position-fixed" id="navigation">
                <div class="container-fluid d-flex justify-content-between">
                    <div class="p-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="mb-2" width="25" height="25" fill="currentColor" class="bi bi-house-heart-fill" viewBox="0 0 16 16">
                            <path d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.707L8 2.207 1.354 8.853a.5.5 0 1 1-.708-.707L7.293 1.5Z" />
                            <path d="m14 9.293-6-6-6 6V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V9.293Zm-6-.811c1.664-1.673 5.825 1.254 0 5.018-5.825-3.764-1.664-6.691 0-5.018Z" />
                        </svg>
                        <a class="navbar-brand" href="../home.php">Korphanage</a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div id="navbarSupportedContent">
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="../home.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="#">About us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        <div class="row justify-content-md-center">
            <div class="col-md-8">
                <div class="d-flex px-5 bg-body flex-column justify-content-center align-items-center vh-100">
                    <h1 class="mb-3 font-monospace">N E W C H I L D</h1>
                    <div class="form">
                        <form method="POST">
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="FirstName" class="form-label">First Name</label>
                                    <input required type="text" name="firstname" class="form-control" id="FirstName" placeholder="..." aria-label="First name">
                                </div>
                                <div class="col">
                                    <label for="LastName" class="form-label">Last Name</label>
                                    <input required type="text" name="lastname" id="LastName" class="form-control" placeholder="..." aria-label="Last name">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="BloodType" class="form-label">Blood Type</label>
                                    <input required type="text" name="bloodtype" id="BloodType" class="form-control" placeholder="O+, B-, ..." aria-label="Blood Type">
                                </div>
                                <div class="col">
                                    <label for="Age" class="form-label">Age</label>
                                    <input required type="text" name="age" id="Age" class="form-control" placeholder="00" aria-label="Age">
                                </div>
                                <div class="col">
                                    <label for="Birthdate" class="form-label">Birthdate</label>
                                    <input required type="text" name="birthdate" id="Birthdate" class="form-control" placeholder="YYYY-MM-DD" aria-label="Birthdate">
                                </div>
                            </div>
                            <div class="row mb-4">
                                <div class="col">
                                    <label for="Disease" class="form-label">Disease</label>
                                    <input required type="text" name="disease" id="Disease" class="form-control" placeholder="deficiency, hereditary..." aria-label="Disease">
                                </div>
                                <div class="col">
                                    <label for="Gender" class="form-label">Gender</label>
                                    <!-- <input type="text" id="Gender" class="form-control" placeholder="Male or Female" aria-label="Gender"> -->
                                    <div class="form-check">
                                        <input required class="form-check-input" type="radio" name="gender" id="Male" value="Male">
                                        <label class="form-check-label" for="Male">
                                            Male
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gender" id="Female" value="Female">
                                        <label class="form-check-label" for="Female">
                                            Female
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-grid">
                                    <button type="submit" name="submit" class="btn btn-dark py-2 text-uppercase font-monospace">Register New Child</button>
                                </div>
                            </div>
                            <?php
                            if (isset($_POST['submit'])) {
                                include_once("../config/Process.php");
                                $connect = new Functions();
                                $connect->NewChild();
                            }
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>

</html>