<?php
    include_once "Pre-login.php";
    session_start();
?>

<li class="nav-item"><a class="nav-link" href="AdminDash.php"><b>Home</b></a></li>
<li class="nav-item"><a class="nav-link" href="UserCRUD/ListAllUsers.php"><b>Users</b></a></li>
<li class="nav-item"><a class="nav-link" href="../Views/PetCRUD/ListAllPets.php"><b>Pets</b></a></li>

<?php 
    if(isset($_SESSION["ID"]))
    {
        echo "<li class=nav-item><a class=nav-link href=../Controllers/Logout.php><b>Logout</b></a></li>";
    }
    else
    {
        echo "<li class=nav-item><a class=nav-link href=../Controllers/Login.php><b>Login</b></a></li>";
    }
    include_once "Post-login.php";
?>