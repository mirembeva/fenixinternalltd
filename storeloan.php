<?php

include "connection.php";

$loan_plan = $_POST["plan"];
$loan_duration = $_POST["duration"];
$loan_count = $_POST["count"];
$loan_start_date = $_POST["loandate"];
$daily_rate = $_POST["rate"];
$plus_smartphone = $_POST["phone"];

// var_dump($sql);

if (isset($_POST['submit'])) {
    $sql = "'INSERT INTO loanapplication (loan_plan, loan_duration, loan_count,loan_start_date,daily_rate,plus_smartphone)
    VALUES (" . $loan_plan . "," . $loan_duration . "," . $loan_count . "," . $loan_start_date . "," . $daily_rate . "," . $plus_smartphone . ")'";
}
