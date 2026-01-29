<?php
include 'connect.php';

$records = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM ingame_record WHERE id=1"));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volleyball Scoreboard</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="board-style.css">
</head>

<body>

  <div class="scoreboard-container">
    <!-- Header -->
    <div class="header">
      GLORY PHILIPPINES VOLLEYBALL LEAGUE
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <!-- Team 1 -->
      <div class="team-section">
        <div class="team-picture">
          <img src="images/alt.png" id="teamAImage" alt="Insert Picture" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>
        <div class="team-header" id="teamA_name">Team A</div>
        <div class="score-display" id="teamA_score">0</div>
      </div>

      <!-- Center Section -->
      <div class="center-section">
        <div style="margin-bottom: 10px; background: linear-gradient(90deg, #001a7f 0%, #003399 100%); color: #ffff00; text-align: center; padding: 15px 20px; font-size: 25px; font-weight: bold; letter-spacing: 3px;">
          <h1>Set <span id="setNumber">1</span></h1>
        </div>
        <!-- Clock -->
        <div class="clock-section">
          <div class="clock-display" id="timer">00:00</div>
        </div>

        <!-- Serving add active in the class -->
        <div style="display: flex; align-items: center; justify-content: center;">
          <div class="serving-section">
            <div class="serving-arrow" id="teamA_serving">◀</div>
            <div class="serving-text">SERVING</div>
            <div class="serving-arrow" id="teamB_serving">▶</div>
          </div>
        </div>

        <!-- Timeouts and Sets Section in One Row -->
        <div style="display: flex; gap: 15px; align-items: stretch; margin-top: 15px;">

          <!-- Left: Set Score -->
          <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; flex: 1; min-width: 100px;">
            <div style="text-align: center; font-size: 16px; font-weight: bold; margin-bottom: 8px; color: #000;">SET WON</div>
            <div style="display: flex; gap: 10px; justify-content: center;">
              <div class="set-item" id="teamA_scoreSet">0</div>
            </div>
          </div>

          <!-- Center: Timeouts -->
          <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; flex: 1; min-width: 150px;">
            <div style="text-align: center; font-size: 14px; font-weight: bold; margin-bottom: 10px; color: #000;">Time Out Left</div>
            <div style="display: flex; gap: 8px; justify-content: center;">
              <div class="timeout-group">
                <label class="timeout-option">
                  <input type="checkbox" name="timeoutLeft1" value="1" id="timeoutA1">
                  <span class="timeout-box" aria-hidden="true"></span>
                </label>

                <label class="timeout-option">
                  <input type="checkbox" name="timeoutLeft2" value="2" id="timeoutA2">
                  <span class="timeout-box" aria-hidden="true"></span>
                </label>

                <hr style="margin: 0px 20px">

                <label class="timeout-option">
                  <input type="checkbox" name="timeoutRight1" value="3" id="timeoutB1">
                  <span class="timeout-box" aria-hidden="true"></span>
                </label>

                <label class="timeout-option">
                  <input type="checkbox" name="timeoutRight2" value="4" id="timeoutB2">
                  <span class="timeout-box" aria-hidden="true"></span>
                </label>
              </div>
            </div>
          </div>

          <!-- Right: Sets Won -->
          <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; flex: 1; min-width: 100px;">
            <div style="text-align: center; font-size: 16px; font-weight: bold; margin-bottom: 8px; color: #000;">SET WON</div>
            <div style="display: flex; gap: 10px; justify-content: center;">
              <div class="set-item" id="teamB_scoreSet">0</div>
            </div>
          </div>

        </div>

        <div style="display: flex; gap: 10px; margin-top: 30px; justify-content: center;">

          <!-- Item 1 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 1</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 30px;" id="set1"></div>
          </div>

          <!-- Item 2 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 2</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 30px;" id="set2"></div>
          </div>

          <!-- Item 3 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 3</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 30px;" id="set3"></div>
          </div>

          <!-- Item 4 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 4</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 30px;" id="set4"></div>
          </div>

        </div>

      </div>

      <!-- Team 2 -->
      <div class="team-section">
        <div class="team-picture">
          <img src="images/alt.png" id="teamBImage" alt="Insert Picture" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>
        <div class="team-header" id="teamB_name">Team B</div>
        <div class="score-display" id="teamB_score">0</div>
      </div>
    </div>

  </div>

  <script src="jquery.min.js"></script>

</body>

</html>

<script>
  $(document).ready(function() {
    setInterval(counter, 1000)
  });


  function counter() {
    $.ajax({
      url: 'ajax.php?action=fetchingRecords',
      type: 'POST',
      dataType: 'json',
      success: function(response) {
        $('#teamAImage').attr('src', response.teamA_img ?? 'images/alt.png');
        $('#teamA_name').text(response.teamA_name ?? 'Team A');

        $('#teamBImage').attr('src', response.teamB_img ?? 'images/alt.png');
        $('#teamB_name').text(response.teamB_name ?? 'Team B');

        $('#teamA_score').text(response.teamA_score);
        $('#teamB_score').text(response.teamB_score);

        $('#teamA_scoreSet').text(response.teamA_set);
        $('#teamB_scoreSet').text(response.teamB_set);

        $('#timeoutA1').prop('checked', (response.teamA_timeout1 == 1 ? false : true));
        $('#timeoutA2').prop('checked', (response.teamA_timeout2 == 1 ? false : true));
        $('#timeoutB1').prop('checked', (response.teamB_timeout1 == 1 ? false : true));
        $('#timeoutB2').prop('checked', (response.teamB_timeout2 == 1 ? false : true));

        $('#setNumber').text(response.setNumber);
        $('#timer').text(response.timer);

        $('#set1').text(response.teamA_set1 == null ? '' : (response.teamA_set1 + ' - ' + response.teamB_set1));
        $('#set2').text(response.teamA_set2 == null ? '' : (response.teamA_set2 + ' - ' + response.teamB_set2));
        $('#set3').text(response.teamA_set3 == null ? '' : (response.teamA_set3 + ' - ' + response.teamB_set3));
        $('#set4').text(response.teamA_set4 == null ? '' : (response.teamA_set4 + ' - ' + response.teamB_set4));

        response.teamA_serving == 1 ? $('#teamA_serving').addClass('active') : $('#teamA_serving').removeClass('active');
        response.teamB_serving == 1 ? $('#teamB_serving').addClass('active') : $('#teamB_serving').removeClass('active');

      },
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  }
</script>