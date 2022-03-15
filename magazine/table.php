

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Table</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
<h2 class="list_table">Список учеников</h2>
<div class="cont">
<table class="table">
    <thead>
    <tr>
        <th>ID</th>
        <th>Имя</th>
        <th>Фамилия</th>
        <th>Отчество</th>
        <th>Пол</th>
        <th>Дата рождения</th>
        <th>Удалить данные</th>
    </tr>
    </thead>
</table>
<?php
$conclusion = file('info.txt');
$array = array_chunk($conclusion, 6);
echo '<table class="table" id="myTable">';
foreach ($array as $user) {
    echo '<form action="table.php" method="post" id="myForm">';
    echo '<tr>';
    echo "<td>{$user[0]}</td>";
    echo "<td>{$user[1]}</td>";
    echo "<td>{$user[2]} </td>";
    echo "<td>{$user[3]} </td>";
    echo "<td>{$user[4]} </td>";
    echo "<td>{$user[5]} </td>";
    echo "<td><input name='type' type='submit' onclick='deleteRow(this)'  value='Удалить' class='button_check' form='myForm'></td>";
    echo '</tr>';
}
echo '</table>';
echo '</form>';

?>
    <script>
        function deleteRow(r) {
            let i = r.parentNode.parentNode.rowIndex;
            document.getElementById("myTable").deleteRow(i);
        }

  </script>
<div >
        <a class="button_index" href="index.php">Вернуться к форме</a>
    </div>
</div>
</body>
</html>
