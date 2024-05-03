<?php
include 'connection.php'; // Include your database connection script

if (isset($_GET['companyId'])) {
    $companyId = $_GET['companyId'];
    $query = "SELECT Share_Price FROM companies WHERE id = $companyId";
    $result = mysqli_query($con, $query);
    if ($row = mysqli_fetch_assoc($result)) {
        $sharePrice = $row['Share_Price'];
        echo json_encode(array('sharePrice' => $sharePrice));
    } else {
        echo json_encode(array('error' => 'Company not found'));
    }
} else {
    echo json_encode(array('error' => 'Company ID not provided'));
}
?>
