<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег SELECT</title>
</head>
<body>

<form action="" method="post">
    <p><select name="hero">
            <option label="Турция" value="1" selected>Турция</option>
            <option value="2">Египет</option>
            <option value="3">Италия</option>
        </select>
    <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>
<?php
echo '<pre>';

print_r($_POST);

echo '</pre>';
if (isset($_POST['hero']))
{
    if($_POST['hero'] == 1)
    {


        if(isset($_POST['b']))


        {

            echo" в Турция со скидкой ". ($_POST['a']*400*1.12*0.95);}


        else{echo" в Турция без скидки ". ($_POST['a']*400*1.12);}


    }
    elseif( $_POST['hero'] == 2){

        if(isset($_POST['b'])){

            echo" в Египет со скидкой". ($_POST['a']*400*1.1*0.95);}


        else{echo"Египет без скидкии".($_POST['a']*400*1.1);}

    }

    elseif($_POST['hero'] == 3){

        if(isset($_POST['b'])){

            echo" в Италия со скидкой". ($_POST['a']*400*0.95);}

        else{echo"Италия без скидкии".($_POST['a']*400);}
    }
}
?>

?>