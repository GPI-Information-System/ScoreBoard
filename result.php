<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="datatable/bootstrap.min.css">
</head>

<body>
  <div style="padding: 100px;">
    <table id="dataTable" class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Game No.</th>
          <th>Team</th>
          <th>Set 1</th>
          <th>Set 2</th>
          <th>Set 3</th>
          <th>Set 4</th>
          <th>Set 5</th>
          <th>Total Points</th>
          <th>Point Awarded</th>
          <th>Point Ratio</th>
          <th>Status</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM game_record");
        if (mysqli_num_rows($result) > 0):
          while ($row = mysqli_fetch_assoc($result)):
        ?>
            <tr>
              <td><?= $row['game']; ?></td>
              <td><?= $row['team_name']; ?></td>
              <td><?= $row['team_set1']; ?></td>
              <td><?= $row['team_set2']; ?></td>
              <td><?= $row['team_set3']; ?></td>
              <td><?= $row['team_set4']; ?></td>
              <td><?= $row['team_set5']; ?></td>
              <td><?= $row['team_total']; ?></td>
              <td><?= 10 ?></td>
              <td><?= $row['team_pointRatio']; ?></td>
              <td><?= $row['team_status']; ?></td>
            </tr>
        <?php
          endwhile;
        endif;
        ?>

      </tbody>
    </table>
  </div>

  <script src="datatable/jquery-3.6.0.min.js"></script>
  <script src="datatable/jquery.dataTables.min.js"></script>
  <script src="datatable/dataTables.bootstrap4.min.js"></script>

  <script>
    $(document).ready(function() {
      $('#dataTable').DataTable();
    });
  </script>
</body>

</html>