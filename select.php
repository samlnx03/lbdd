<html>
<body>
<?php
include("db.php");

$db = new Escuela;  //mysqli("localhost", "sperez", "", "sperez");

/* check connection */
if ($db->connect_errno) {
    printf("Connect failed: %s\n", $db->connect_error);
    exit();
}

if ($result = $db->query("SELECT id, materia FROM materias where id like 'CB%'")) {
    printf("Select returned %d rows.\n", $result->num_rows);

    /* fetch associative array */
    ?>
    <table border=1>
	<tr><th>Id</th><th>Materia</th></tr>
    <?php
    while ($row = $result->fetch_assoc()) {
        printf ("<tr><td>%s</td><td>%s</td></tr>\n", $row["id"], $row["materia"]);
    }	
    echo "</table>\n";

    /* free result set */
    $result->close();
}

?>
</body>
</html>
