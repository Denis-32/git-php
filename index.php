<?php
if(isset($_POST['done'])) {
    if (($_POST['a']==''))
        echo "Введите все поля ";
    elseif(($_POST['b']==''))
        echo "Введите все поля ";
    elseif(($_POST['a']>$_POST['b']))
        echo "Суммы не существует";
    else {
        while ($_POST['a'] <= $_POST['b']) {
            $iSum = $iSum + $_POST['a'];
            $_POST['a']++;
        }
        echo "Равно=$iSum";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>от</p>
        <label>A</label><br />
        <input type="text" name="a" placeholder="число"/><br />
    <p>до</p>
        <label>Б</label><br />
        <input type="text" name="b" placeholder="число"/><br />
    <p><input type="submit" name="done" value="сумма"></p>
</form>
</body>
</html>
