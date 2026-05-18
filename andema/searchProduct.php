

 <?php
require $_SERVER["DOCUMENT_ROOT"] ."/part/connect.php";
$table='jotun';
$query = $mysqli->query("SELECT COLUMN_NAME FROM INFORMATION_SCHEMA.COLUMNS WHERE TABLE_SCHEMA = 'fpchydcs_andema_db' AND TABLE_NAME = '$table'");
$columnName=array();
while($row = $query->fetch_assoc()){
    $columnName[$row['COLUMN_NAME']]=[];
}

// Array of all column names
// $distinctQuery="SELECT DISTINCT * FROM $table";
// $distinctValue=$mysqli->query($distinctQuery);
// while($dist = $distinctValue->fetch_assoc()){
//     print_r($dist);
// }

// // $columnDistinct = array_column($result2, 'COLUMN_NAME');


?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- The form -->
<form class="searchProduct" method="POST" action="functionSearch">
    <?php
        foreach(array_keys($columnName) as $name){
            echo "<div>";
           echo '<input type="text" placeholder='.$name.' name='.$name.'>';
           echo "</div>";
           echo "<br>";
        }

    ?>
  <button type="submit"><i class="fa fa-search"></i></button>
</form>