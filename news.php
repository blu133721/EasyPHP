<?php
session_start();
    if (isset($_SESSION["useruid"])) {
        echo '<p> Salut ' . $_SESSION["useruid"]. "</p>";
      }


      

      if (!isset($_SESSION["useruid"])) {
        echo '<p>Nu esti logat';
      }
?>