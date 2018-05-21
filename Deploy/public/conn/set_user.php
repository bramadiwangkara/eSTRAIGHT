<?php

  if (isset($_POST['key'])) {
    $conn = new mysqli('127.0.0.1', 'root', '', 'test_db') or die ('Could not connect to the database server' . mysqli_connect_error());
    $user_name = $conn->real_escape_string($_POST['user_name']);
    $user_id = $conn->real_escape_string($_POST['user_id']);
    $user_pass = $conn->real_escape_string($_POST['user_pass']);
    $user_level = $conn->real_escape_string($_POST['user_level']);

    if($_POST['key'] == 'addNew') {
      $sql = $conn->query("SELECT id FROM test_db.user WHERE id= '$user_id'");
      if ($sql->num_rows > 0 ) {
        exit('Pegawai sudah terdaftar');
      }
      else {
        $conn->query("INSERT INTO test_db.user(user_id, user_name, user_password, user_level) VALUES ('$user_id', '$user_name', '$user_pass', '$user_level');");
        exit('Pegawai berhasil didaftarkan');
      }
    }

  }

 ?>
