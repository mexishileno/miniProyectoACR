<?php
session_start();

if (isset($_SESSION["seccionIni"])) {
    $user = $_SESSION["seccionIni"];
} else {
    header("location: index.php");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>changeInformacion</title>
    <link rel="stylesheet" href="./estilos/styleChange.css">
</head>

<body>
    <div class="container">  
        <div class="logo">
            <img src="./assets/devchallenges-light.svg" alt="Logo">
        </div>

        <div class="devolver">

            <a href="./register.php">
                < Back</a>
        </div>     


        <form action="./linkAddInfo.php" method="post" enctype="multipart/form-data">
            


            <div class="listasCabeza">
                <ul>
                    <li>Change Info</li>
                    <li>Changes will be reflected to every services</li>
                </ul>
            </div>

            <div class="contenedorHijo">
                <label for="photo">CHANGE PHOTO</label>
                <input type="file" name="photo" id="photo">
            </div>

            <div class="contenedorDiv">
                <div class="contenedorHijo">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" placeholder="Enter your name..."required>
                </div>

                <div class="contenedorHijo">
                    <label for="Bio">Bio</label>
                    <input type="text" name="bio" id="bio" placeholder="Enter your bio..."required>
                </div>

                <div class="contenedorHijo">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="Enter your phone..."required>
                </div>

                <div class="contenedorHijo">
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="Enter your email..."required>
                </div>

                <div class="contenedorHijo">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" placeholder="Enter your password..."required>
                </div>



                <button type="submit">Save</button>
            </div>
        </form>
    </div>
</body>

</html>