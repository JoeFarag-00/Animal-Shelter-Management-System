<?php
    include_once "Pre-login.php";
?>
<li class="nav-item"><a class="nav-link" href="Index.php"><b>Home</b></a></li>
<li class="nav-item"><a class="nav-link" href="about.php"><b>About</b></a></li>
<li class="nav-item"><a class="nav-link" href="contact.php"><b>Contact</b></a></li>

<?php
    session_start();
    if(isset($_SESSION["ID"]))
    {
        echo "<li class=nav-item><a class=nav-link href=Controllers/Logout.php><b>Logout</b></a></li>";
    }
    else
    {
        echo "<li class=nav-item><a class=nav-link href=Login.php><b>Login</b></a></li>";
    }
    include_once "Post-login.php";
?>