<?php
session_start();

if(isset($_POST['submit'])){

    require_once('db_connect_users.php');
    
    $errors = [];
    $messages = [];

    if (empty($_POST['loginEmail'])) {
      array_push($errors,"Email is required.");
    } else {
      $email = filter_var($_POST['loginEmail'], FILTER_SANITIZE_EMAIL);
    }
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        array_push($errors,"Invalid email format.");
      }
  

      if (empty($_POST['loginPassword'])) {
        array_push($errors,"Password is required.");
      } else {
        $loginpassword = sha1($_POST['loginPassword']); // Hash password for security
      }

      $sql = "SELECT email, password FROM `master_users` WHERE email=?";
      $stmt = $conn->prepare($sql);
      $stmt->bind_param("s", $email);
      $stmt->execute();
      $result = $stmt->get_result();
      if ($result->num_rows > 0) {
          // User found, verify password
          $row = $result->fetch_assoc();
          if ($loginpassword === $row["password"]) {
              // Password is correct, log in user
              session_start();
              $_SESSION['mail'] = $row['email'];
              // $_SESSION['role'] = $row['role'];
              array_push($messages,"Logged in successfully..........");
              $_SESSION['messages'] = $messages;
              $_SESSION['loggedInStatus'] = true;
              header("Location: ../index.php");
              exit();
          } else {
              // Password is incorrect
              array_push($errors, "Invalid password!");
          }
      } else {
          // User not found
          array_push($errors, "User not found!");
        }
  
      $_SESSION['errors'] = $errors;
      header("Location: ../login.php");
      $stmt->close();
      $conn->close();
    //   header("Location: ../login.php");
  }