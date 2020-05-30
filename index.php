<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <title>Тег SELECT</title>
</head>
<body>

<form action="" method="post">

    <p><select name="hero">
            <option disabled selected>Выберите героя</option>
            <option value="1">Турция</option>
            <option value="2">Египет</option>
            <option value="3">Италия</option>
        </select><br />

        <select name="b">
            <option disabled selected>Есть ли скидка</option>
            <option value="1">да</option>
        </select><br />

        <label>Количество дней</label><br />
        <input type="text" name="a" placeholder="количество дней"/><br />

    <p><input type="submit" value="Отправить"></p>
</form>
</body>
</html>
<?php
print_r($_POST);echo "<br />";

if(isset ($_POST['hero'])){
    if($_POST['hero']==1) {
        if (isset ($_POST['b'])) {
            echo "В Турцию со скидкой" . ($_POST['a'] * 400 * 0.95);
        } else {
            echo "В Турцию без скидкой" . ($_POST['a'] * 400);
        }
    }
        elseif($_POST['hero']==2) {
            if (isset ($_POST['b'])) {
                echo "В Египет со скидкой" . ($_POST['a'] * 400 * 1.1 * 0.95);
            } else {
                echo "В Египет без скидкой" . ($_POST['a'] * 400 * 1.1);
            }
        }
        elseif($_POST['hero']==3){
            if(isset ($_POST['b'])) {
                echo "В Италию со скидкой".($_POST['a']*400*1.12*0.95);
            }
            else{
                echo"В Италию без скидкой".($_POST['a'] * 400*1.12);
            }
        }
    }
?>