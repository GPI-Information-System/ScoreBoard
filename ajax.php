<?php
include 'connect.php';

$action = $_GET['action'];

if ($action === 'fetchingRecords') {
  $result = mysqli_query($conn, "SELECT * FROM ingame_record WHERE id=1");
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $json_data = array(
      'teamA_name'     => $row['teamA_name'],
      'teamA_img'      => $row['teamA_img'],
      'teamA_score'    => $row['teamA_score'],
      'teamA_set'      => $row['teamA_set'],

      'teamA_timeout1' => $row['teamA_timeout1'],
      'teamA_timeout2' => $row['teamA_timeout2'],
      'teamA_serving'  => $row['teamA_serving'],

      'teamA_set1'     => $row['teamA_set1'],
      'teamA_set2'     => $row['teamA_set2'],
      'teamA_set3'     => $row['teamA_set3'],
      'teamA_set4'     => $row['teamA_set4'],

      'teamB_name'     => $row['teamB_name'],
      'teamB_img'      => $row['teamB_img'],
      'teamB_score'    => $row['teamB_score'],
      'teamB_set'      => $row['teamB_set'],

      'teamB_timeout1' => $row['teamB_timeout1'],
      'teamB_timeout2' => $row['teamB_timeout2'],
      'teamB_serving'  => $row['teamB_serving'],

      'teamB_set1'     => $row['teamB_set1'],
      'teamB_set2'     => $row['teamB_set2'],
      'teamB_set3'     => $row['teamB_set3'],
      'teamB_set4'     => $row['teamB_set4'],

      'display1'       => $row['display1'],
      'display2'       => $row['display2'],
      'display3'       => $row['display3'],
      'display4'       => $row['display4'],
      'display5'       => $row['display5'],

      'camera_device'  => $row['camera_device'],

      'endGame'        => $row['endGame'],

      'timer'          => $row['timer'],
      'setNumber'      => $row['setNumber']
    );

    echo json_encode($json_data);
  }
}

if ($action === 'endGame') {
  $result = mysqli_query($conn, "SELECT * FROM ingame_record WHERE id=1");
  if (mysqli_num_rows($result) > 0) {
    $row = mysqli_fetch_assoc($result);

    $teamA_total = intval($row['teamA_set1'] ?? 0) + intval($row['teamA_set2'] ?? 0) + intval($row['teamA_set3'] ?? 0) + intval($row['teamA_set4'] ?? 0) + intval($row['teamA_set5'] ?? 0);
    $teamB_total = intval($row['teamB_set1'] ?? 0) + intval($row['teamB_set2'] ?? 0) + intval($row['teamB_set3'] ?? 0) + intval($row['teamB_set4'] ?? 0) + intval($row['teamB_set5'] ?? 0);;

    $teamA_pointRatio = $teamA_total > 0 ? round($teamA_total / $teamB_total * 1000) / 1000 : 0;
    $teamB_pointRatio = $teamB_total > 0 ? round($teamB_total / $teamA_total * 1000) / 1000 : 0;

    $teamA_status = $row['teamA_set'] > $row['teamB_set'] ? 'Winner' : 'Loser';
    $teamB_status = $row['teamB_set'] > $row['teamA_set'] ? 'Winner' : 'Loser';

    if ($row['teamA_set'] == 2 && $row['teamB_set'] == 0) {
      $teamA_pointAwarded = 3;
      $teamB_pointAwarded = 0;
    } elseif ($row['teamA_set'] == 2 && $row['teamB_set'] == 1) {
      $teamA_pointAwarded = 2;
      $teamB_pointAwarded = 1;
    } elseif ($row['teamA_set'] == 1 && $row['teamB_set'] == 2) {
      $teamA_pointAwarded = 1;
      $teamB_pointAwarded = 2;
    } elseif ($row['teamA_set'] == 0 && $row['teamB_set'] == 2) {
      $teamA_pointAwarded = 0;
      $teamB_pointAwarded = 3;
    } else {
      $teamA_pointAwarded = 0;
      $teamB_pointAwarded = 0;
    }

    mysqli_query($conn, "INSERT INTO game_record (team_name, team_img, team_set1, team_set2, team_set3, team_set4, team_set5, team_total, team_set, team_pointAwarded, team_pointRatio, team_status) VALUES ('{$row['teamA_name']}', '{$row['teamA_img']}', '{$row['teamA_set1']}', '{$row['teamA_set2']}', '{$row['teamA_set3']}', '{$row['teamA_set4']}', '{$row['teamA_set5']}', '$teamA_total', '$row[teamA_set]', '$teamA_pointAwarded', '$teamA_pointRatio', '$teamA_status')");
    mysqli_query($conn, "INSERT INTO game_record (team_name, team_img, team_set1, team_set2, team_set3, team_set4, team_set5, team_total, team_set, team_pointAwarded, team_pointRatio, team_status) VALUES ('{$row['teamB_name']}', '{$row['teamB_img']}', '{$row['teamB_set1']}', '{$row['teamB_set2']}', '{$row['teamB_set3']}', '{$row['teamB_set4']}', '{$row['teamB_set5']}', '$teamB_total', '$row[teamB_set]', '$teamB_pointAwarded', '$teamB_pointRatio', '$teamB_status')");

    mysqli_query($conn, "UPDATE game_record SET game = CEIL(id / 2) WHERE id IN (SELECT id FROM (SELECT id FROM game_record ORDER BY id DESC LIMIT 2) AS subquery)");

    $json_data = array(
      'teamA_name'        => $row['teamA_name'],
      'teamB_name'        => $row['teamB_name'],

      'teamA_set1'        => $row['teamA_set1'],
      'teamA_set2'        => $row['teamA_set2'],
      'teamA_set3'        => $row['teamA_set3'],
      'teamA_set4'        => $row['teamA_set4'],
      'teamA_set5'        => $row['teamA_set5'],

      'teamB_set1'        => $row['teamB_set1'],
      'teamB_set2'        => $row['teamB_set2'],
      'teamB_set3'        => $row['teamB_set3'],
      'teamB_set4'        => $row['teamB_set4'],
      'teamB_set5'        => $row['teamB_set5'],

      'teamA_total'       => $teamA_total,
      'teamB_total'       => $teamB_total,

      'teamA_pointRatio'  => $teamA_pointRatio,
      'teamB_pointRatio'  => $teamB_pointRatio
    );

    echo json_encode($json_data);
  }
}

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

  mysqli_query($conn, "UPDATE ingame_record SET display1='$display', display2=0, display3=0, display4=0, display5=0, endGame=0 WHERE id=1");
}

if ($action === 'display2') {
  $display = $_POST['display'];

  mysqli_query($conn, "UPDATE ingame_record SET display1=0, display2='$display', display3=0, display4=0, display5=0, endGame=0 WHERE id=1");
}

if ($action === 'display3') {
  $display = $_POST['display'];

  mysqli_query($conn, "UPDATE ingame_record SET display1=0, display2=0, display3='$display', display4=0, display5=0, endGame=0 WHERE id=1");
}

if ($action === 'display4') {
  $display = $_POST['display'];

  mysqli_query($conn, "UPDATE ingame_record SET display1=0, display2=0, display3=0, display4='$display', display5=0, endGame=0 WHERE id=1");
}

if ($action === 'display5') {
  $display = $_POST['display'];

  mysqli_query($conn, "UPDATE ingame_record SET display1=0, display2=0, display3=0, display4=0, display5='$display', endGame=0 WHERE id=1");
}

if ($action === 'camera_device') {
  $device = $_POST['device'];

  mysqli_query($conn, "UPDATE ingame_record SET camera_device='$device' WHERE id=1");
}

if ($action === 'resetDetails') {
  $display = $_POST['display'];

  mysqli_query($conn, "UPDATE ingame_record SET teamA_name=null, teamA_img=null, teamA_score=0, teamA_set=0, teamA_timeout1=0, teamA_timeout2=0, teamA_serving=0, teamA_set1=null, teamA_set2=null, teamA_set3=null, teamA_set4=null, teamA_set5=null, teamB_name=null, teamB_img=null, teamB_score=0, teamB_set=0, teamB_timeout1=0, teamB_timeout2=0, teamB_serving=0, teamB_set1=null, teamB_set2=null, teamB_set3=null, teamB_set4=null, teamB_set5=null, display1=0, display2=0, display3=0, display4=0, display5=0, timer='00:00', setNumber=1, endGame=0, camera_device=null WHERE id=1");
}

if ($action === 'nextSet') {
  $teamA_score = $_POST['teamA_score'];
  $teamB_score = $_POST['teamB_score'];
  $currentSet = intval($_POST['currentSet']);
  $nextSet = $currentSet + 1;
  $query = '';

  if ($currentSet == 1) $query = " teamA_set1=' $teamA_score', teamB_set1='$teamB_score', ";
  elseif ($currentSet == 2) $query = " teamA_set2=' $teamA_score', teamB_set2='$teamB_score', ";
  elseif ($currentSet == 3) $query = " teamA_set3=' $teamA_score', teamB_set3='$teamB_score', ";
  elseif ($currentSet == 4) $query = " teamA_set4=' $teamA_score', teamB_set4='$teamB_score', ";

  if ($query != '') mysqli_query($conn, "UPDATE ingame_record SET $query setNumber='$nextSet', teamA_score=0, teamB_score=0 WHERE id=1");
}

if ($action === 'saveRecord') {
  $teamA_score = $_POST['teamA_score'];
  $teamB_score = $_POST['teamB_score'];
  $currentSet = intval($_POST['currentSet']);
  $query = '';

  if ($currentSet == 1) $query = " teamA_set1=' $teamA_score', teamB_set1='$teamB_score', ";
  elseif ($currentSet == 2) $query = " teamA_set2=' $teamA_score', teamB_set2='$teamB_score', ";
  elseif ($currentSet == 3) $query = " teamA_set3=' $teamA_score', teamB_set3='$teamB_score', ";
  elseif ($currentSet == 4) $query = " teamA_set4=' $teamA_score', teamB_set4='$teamB_score', ";
  elseif ($currentSet == 5) $query = " teamA_set5=' $teamA_score', teamB_set5='$teamB_score', ";

  if ($teamA_score > $teamB_score) {
    $query .= " teamA_set = teamA_set + 1, ";
  } elseif ($teamB_score > $teamA_score) {
    $query .= " teamB_set = teamB_set + 1, ";
  }

  if ($query != '') mysqli_query($conn, "UPDATE ingame_record SET $query endGame=1 WHERE id=1");
}
