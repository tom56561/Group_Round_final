<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connectMysql</title>
</head>

<body>
    <?php
        require_once("dbtools.inc.php");
        $link = create_connection();

        $sql = "SELECT * FROM `citylist`";
        $result = run_sql($link, "running_in_circles", $sql);
        echo "<table border='1' align='center'><tr align='center'>";
        for ($i=0; $i < mysqli_num_fields($result); $i++) { 
            echo "<td>" . mysqli_fetch_field_direct($result,  $i)->name . "</td>";
        }
        echo "</tr>";
        while ($row =  mysqli_fetch_row($result) ) {
            echo "<tr>";
            for ($i=0; $i < mysqli_num_fields($result); $i++) { 
                echo "<td>$row[$i]</td>";
            }
            echo"</tr>";
        }
        echo "</table>";
        mysqli_free_result($result);
        
        mysqli_close($link);
    ?>

</body>

</html>