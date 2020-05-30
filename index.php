<?php
if($_POST["vozrast"]<=80)
    echo "Успехов";
else
    echo"Здравствуйте,Уважаемый!";

?>
<!DOCTYPE html>
<html>
<head>
    <title>Обработка форм</title>

</head>
<body>
<form name="test" action="" method="post">
    <label>Имя:</label><br />
    <input type="text" name="name" placeholder="имя"/><br />
    <label>Возраст:</label><br />
    <input type="text" name="vozrast" placeholder="Возраст"/><br />
    <input type="submit" name="done" value="Готово"/>
</form>
</body>
</html>