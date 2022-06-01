<?php
session_start();
?>

 
  

<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
</head>


<body>

    <form method="POST">
        <input type="text" name="num1" placeholder="Number 1">
        <input type="text" name="num2" placeholder="Number 2">
        <select name="operator">
            <option>Nimic</option>
            <option>Adaugare</option>
            <option>Scadere</option>
            <option>Inmultire</option>
            <option>Impartire</option>
        </select>
        <br>
        <button type="submit" name="submit" value="submit">Calculeaza</button>
    </form>
    <p>Raspunsul este: </p> 
    <?php
        if (isset($_POST['submit'])) {
            $result1 = $_POST['num1'];
            $result2 = $_POST['num2'];
            $operator = $_POST['operator'];
            switch ($operator) {
                case "None":
                    echo 'Nu ai selectat nimic.';
                break;  
                case "Adaugare":
                    echo $result1 + $result2;
                break;
                case "Scadere":
                    echo $result1 - $result2;
                break;
                case "Inmultire":
                    echo $result1 * $result2;
                break;
                case "Impartire":
                    echo $result1 / $result2;
                break;
            }
        }
    ?>

<div class="topnav">

</div>


</body>
</html>