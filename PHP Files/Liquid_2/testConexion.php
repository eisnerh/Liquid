<?php
/*
 * Following code will list all the inicio
 */
// array for JSON response
$response = array();
// include db connect class
require_once 'controller/conexion.php';

global $connect;
// connecting to db
// get all inicio from inicio table
$result = mysqli_query($connect,"SELECT * FROM inicio") or die(mysqli_error());
// check for empty result
if (mysqli_num_rows($result) > 0) {
    // looping through all results
    // inicio node
    $response["inicio"] = array();
    while ($row = mysqli_fetch_array($result)) {
        // temp user array
        $product = array();
        $product["id_inicio"] = $row["id_inicio"];
        $product["n_Guia"] = $row["n_Guia"];
        $product["chofer"] = $row["chofer"];
        $product["camion"] = $row["camion"];
        // push single product into final response array
        array_push($response["inicio"], $product);
    }
    // success
    $response["success"] = 1;
    // echoing JSON response
    echo json_encode($response);
} else {
    // no inicio found
    $response["success"] = 0;
    $response["message"] = "No inicio found";
    // echo no users JSON
    echo json_encode($response);
}
?>