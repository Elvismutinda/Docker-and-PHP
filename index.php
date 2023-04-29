<?php

$conn = mysqli_connect(
    'db', # service name
    'php_docker', # username
    'password', # password
    'php_docker' # db table
);

$table_name = "docker_test";
$query = "SELECT * FROM $table_name";
$result = mysqli_query($conn, $query);

echo "<strong>$table_name: </strong>";
while($i = mysqli_fetch_assoc($result)){
    echo "<p>".$i['staff_id']."</p>";
    echo "<p>".$i['name']."</p>";
    echo "<p>".$i['date_created']."</p>";
    echo "<hr>";
}