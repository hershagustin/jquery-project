<?php

$con = mysqli_connect("localhost","root","","dmit2503");
$result = mysqli_query($con, "SELECT * FROM jquery_disease_cases");
 
$diseaseData = "";
while ($row = mysqli_fetch_array($result)) {
    
    $disease = $row['disease'];

    $d2020 = $row['2020'];
    $d2021 = $row['2021'];
    $d2022 = $row['2022'];
    $d2023 = $row['2023'];
    $d2024 = $row['2024'];
    $d2025 = $row['2025'];

    $thisDiseaseData = "\n\"$disease\": {";
    $thisDiseaseData .= "\nlabel: \"$disease\",";
    $thisDiseaseData .= "data: [";
    $thisDiseaseData .= "[2020, $d2020],";
    $thisDiseaseData .= "[2021, $d2021],";
    $thisDiseaseData .= "[2022, $d2022],";
    $thisDiseaseData .= "[2023, $d2023],";
    $thisDiseaseData .= "[2024, $d2024],";
    $thisDiseaseData .= "[2025, $d2025],";
    $thisDiseaseData .= "]\n},";

    $diseaseData .= $thisDiseaseData;

}

echo substr($diseaseData, 0, -1);
?>