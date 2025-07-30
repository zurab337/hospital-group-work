<?php
include ("data.php");
include ("functions.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!--owl slider stylesheet -->
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- nice select -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-nice-select/1.1.0/css/nice-select.min.css" integrity="sha256-mLBIhmBvigTFWPSCtvdu6a76T+3Xyt+K571hupeFLg4=" crossorigin="anonymous" />
  <!-- datepicker -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body class="sub_page">
    <?php
headersection($navigation, $bottomnavs);

// Patient name
function display_patient_name($value) {
    echo '<h3>Patient name: ' . htmlspecialchars($value) . '</h3>';
}
$submitted_name = $_POST['patient_name'] ?? '';
display_patient_name($submitted_name);


// Doctor name
function display_doctor_name($value) {
    echo '<p>Doctor: ' . htmlspecialchars($value) . '</p>';
}
$chosen_doctor_name = $_POST['doctor_name'] ?? '';
display_doctor_name($chosen_doctor_name);


// Department
function display_department_name($value) {
    echo '<p>Department: ' . htmlspecialchars($value) . '</p>';
}
$chosen_department_name = $_POST['department_name'] ?? '';
display_department_name($chosen_department_name);


// Phone number
function phone_number($value) {
    echo '<p>Phone Number: ' . htmlspecialchars($value) . '</p>';
}
$phone = $_POST['phone'] ?? ''; // ✅ FIXED: Was `phone_number`
phone_number($phone);


// Symptoms
function display_symptoms($value) {
    echo '<h3>Symptoms: ' . htmlspecialchars($value) . '</h3>';
}
$submitted_symptoms = $_POST['symptoms'] ?? '';
display_symptoms($submitted_symptoms);


// Date
function display_date($value) {
    echo '<h3>Date: ' . htmlspecialchars($value) . '</h3>';
}
$submitted_date = $_POST['date'] ?? ''; // ✅ FIXED: Was `chosen_date`
display_date($submitted_date);


// Additional
infoinfo($intoinfo);
footer($footerinfo);

?>

</body>
</html>