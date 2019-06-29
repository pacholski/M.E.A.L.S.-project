<?php

function CountMeals(){
$db_host='';$db_user='';$db_pass='';$db_database='';$db_port='3306';
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);
$query = "SELECT COUNT(mealID) AS ile FROM MEALS";
$data = mysqli_query($conn, $query);
while($row=mysqli_fetch_array($data))$return=$row['ile'];
mysqli_close($conn);
return $return;

}
function randMeal(){
$db_host='';$db_user='';$db_pass='';$db_database='';$db_port='3306';
$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_database,$db_port);
if(!$conn) $return = "Something went wrong";
    else {
   
        $randNo = rand(1,CountMeals());
        $query = "SELECT mealName FROM MEALS WHERE mealID = $randNo LIMIT 1";
        $data = mysqli_query($conn, $query);
        
        while($r = mysqli_fetch_array($data))$return = $r['mealName'];
       
    }
    mysqli_close($conn);
    return $return;
}

?>
