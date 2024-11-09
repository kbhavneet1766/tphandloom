<?php
session_start();
if(isset($_POST['submit'])){
  // Include database connection script (replace with your actual connection details)
  require_once('db_connect_users.php');
  
  // Initialize error and message arrays
  $errors = [];
  $messages = [];
  
  // Process form submission if the submit button is clicked
  if (isset($_POST['submit'])) {
  
  
    // Validate email
    if (empty($_POST['regisEmail'])) {
      array_push($errors[],"Email is required.");
    } else {
      $email = filter_var($_POST['regisEmail'], FILTER_SANITIZE_EMAIL);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors,"Invalid email format.");
      }
  
      // Check for duplicate email in database
      $sql = "SELECT email FROM `master_users` WHERE email=?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows > 0) {
        array_push($errors,"Email already exists.");
      }
    }
  
    // Validate phone (ensure it's numeric and 10 digits long)
    if (empty($_POST['regisContact'])) {
      // Phone might be optional, adjust as needed
    } else {
      $phone = filter_var($_POST['regisContact'], FILTER_SANITIZE_NUMBER_INT);
      $phone = (int)$phone;
      if (!is_numeric($phone) || strlen($phone) !== 10) {
        array_push($errors,"Invalid phone number format. Please enter a 10-digit phone number.");
      }
    }
  
    // Validate password
    if (empty($_POST['regisPassword'])) {
      array_push($errors,"Password is required.");
    } else {
      $password = sha1($_POST['regisPassword']); // Hash password for security
    }
  
    // Validate confirm password
    if (empty($_POST['confirm_password'])) {
      array_push($errors,"Confirm password is required.");
    } else if ($_POST['confirm_password'] !== $_POST['regisPassword']) {
      array_push($errors,"Passwords do not match.");
    }
  
    // Validate role selection
   
  
    if (empty($errors)) {
      $sql = "INSERT INTO `master_users` (email, phone_no, password) VALUES ( ?, ?, ?)";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("sis", $email, $phone, $password);
      $stmt->execute();
  
      if ($stmt->affected_rows > 0) {
        array_push($messages,"Registration successful! You can now log in.");
      } else {
        array_push($errors,"Registration failed. Please try again.");
      }
  
      $stmt->close();
    }
  if(count($errors) > 0){
  $_SESSION['errors'] = $errors;
  }
    $_SESSION['messages'] = $messages;
    header('Location: ../register.php');
  }

  $conn->close();
  }