<?php
include 'connect.php';

$action = $_GET['action'];

if ($action === 'teamA_name') {
  $name = $_POST['name'];

  mysqli_query($conn, "UPDATE ingame_record SET teamA_name='$name' WHERE id=1");
}

if ($action === 'teamB_name') {
  $name = $_POST['name'];

  mysqli_query($conn, "UPDATE ingame_record SET teamB_name='$name' WHERE id=1");
}

if ($action === 'teamA_score') {
  $score = $_POST['score'];

  mysqli_query($conn, "UPDATE ingame_record SET teamA_score='$score' WHERE id=1");
}

if ($action === 'teamB_score') {
  $score = $_POST['score'];

  mysqli_query($conn, "UPDATE ingame_record SET teamB_score='$score' WHERE id=1");
}

if ($action === 'teamA_set') {
  $set = $_POST['set'];

  mysqli_query($conn, "UPDATE ingame_record SET teamA_set='$set' WHERE id=1");
}

if ($action === 'teamB_set') {
  $set = $_POST['set'];

  mysqli_query($conn, "UPDATE ingame_record SET teamB_set='$set' WHERE id=1");
}

if ($action === 'teamA_image') {
  $path = $_POST['path'];

  mysqli_query($conn, "UPDATE ingame_record SET teamA_img='$path' WHERE id=1");
}

if ($action === 'teamB_image') {
  $path = $_POST['path'];

  mysqli_query($conn, "UPDATE ingame_record SET teamB_img='$path' WHERE id=1");
}

if ($action === 'teamA_timeout1') {
  $checked = $_POST['checked'];

  mysqli_query($conn, "UPDATE ingame_record SET teamA_timeout1='$checked' WHERE id=1");
}

if ($action === 'teamA_timeout2') {
  $checked = $_POST['checked'];

  mysqli_query($conn, "UPDATE ingame_record SET teamA_timeout2='$checked' WHERE id=1");
}

if ($action === 'teamB_timeout1') {
  $checked = $_POST['checked'];

  mysqli_query($conn, "UPDATE ingame_record SET teamB_timeout1='$checked' WHERE id=1");
}

if ($action === 'teamB_timeout2') {
  $checked = $_POST['checked'];

  mysqli_query($conn, "UPDATE ingame_record SET teamB_timeout2='$checked' WHERE id=1");
}

if ($action === 'teamA_serve') {
  $serve = $_POST['serve'];

  mysqli_query($conn, "UPDATE ingame_record SET teamA_serving='$serve', teamB_serving=0 WHERE id=1");
}

if ($action === 'teamB_serve') {
  $serve = $_POST['serve'];

  mysqli_query($conn, "UPDATE ingame_record SET teamB_serving='$serve', teamA_serving=0 WHERE id=1");
}

if ($action === 'serveNone') {
  mysqli_query($conn, "UPDATE ingame_record SET teamB_serving=0, teamA_serving=0 WHERE id=1");
}

if ($action === 'timer') {
  $time = $_POST['time'];

  mysqli_query($conn, "UPDATE ingame_record SET timer='$time' WHERE id=1");
}

if ($action === 'display1') {
  $display = $_POST['display'];

  mysqli_query($conn, "UPDATE ingame_record SET display1='$display', display2=0, display3=0 WHERE id=1");
}

if ($action === 'display2') {
  $display = $_POST['display'];

  mysqli_query($conn, "UPDATE ingame_record SET display1=0, display2='$display', display3=0 WHERE id=1");
}

if ($action === 'display3') {
  $display = $_POST['display'];

  mysqli_query($conn, "UPDATE ingame_record SET display1=0, display2=0, display3='$display' WHERE id=1");
}
