<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volleyball Results</title>
  <link rel="icon" href="display/ball.png">
  <link rel="stylesheet" href="datatable/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="datatable/bootstrap.min.css">
  <link rel="stylesheet" href="style/result.css">
</head>

<body>
  <div class="page-wrap">
    <div class="card">
      <!-- Header Bar -->
      <div class="card-header">
        <div class="status-dot"></div>
        <h2 class="card-title">Game Records</h2>
      </div>

      <div class="card-body">
        <table id="dataTable" class="data-table">
          <thead>
            <tr class="thead-row">
              <th class="th-left">Game</th>
              <th class="th-left">Team</th>
              <th class="th-right">Set 1</th>
              <th class="th-right">Set 2</th>
              <th class="th-right">Set 3</th>
              <th class="th-right">Total Points</th>
              <th class="th-right">Set Won</th>
              <th class="th-right">Point Awarded</th>
              <th class="th-right">Point Ratio</th>
              <th class="th-left">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $result = mysqli_query($conn, "SELECT * FROM game_record");
            if (mysqli_num_rows($result) > 0):
              $i = 0;
              while ($row = mysqli_fetch_assoc($result)):
                // You can keep these PHP styles for badges (overrides CSS defaults)
                $status = strtolower(trim($row['team_status'] ?? ''));
                $badgeBg = '#eef2f7';   // default gray
                $badgeTx = '#374151';
                $badgeBd = '#e5e7eb';

                if ($status == 'winner') {
                  $badgeBg = '#dcfce7';  // green-100
                  $badgeTx = '#166534';  // green-800
                  $badgeBd = '#86efac';  // green-300
                } elseif ($status == 'loser') {
                  $badgeBg = '#fee2e2';  // red-100
                  $badgeTx = '#7f1d1d';  // red-900
                  $badgeBd = '#fca5a5';  // red-300
                }
            ?>
                <tr class="tbody-row">
                  <td class="td-left">G<?= $row['game'] ?></td>
                  <td class="td-left td-strong"><?= $row['team_name'] ?></td>

                  <td class="td-right"><?= $row['team_set1'] ?></td>
                  <td class="td-right"><?= $row['team_set2'] ?></td>
                  <td class="td-right"><?= $row['team_set3'] ?></td>
                  <td class="td-right"><?= $row['team_total'] ?></td>
                  <td class="td-right"><?= $row['team_set'] ?></td>
                  <td class="td-right"><strong><?= $row['team_pointAwarded'] ?></strong></td>
                  <td class="td-right"><strong><?= $row['team_pointRatio'] ?></strong></td>

                  <td class="td-left">
                    <span class="status-badge"
                      style="background: <?= $badgeBg ?>; color: <?= $badgeTx ?>; border-color: <?= $badgeBd ?>;">
                      <?= $row['team_status'] ?>
                    </span>
                  </td>
                </tr>
            <?php
              endwhile;
            endif;
            ?>
          </tbody>
        </table>

      </div>
    </div>
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