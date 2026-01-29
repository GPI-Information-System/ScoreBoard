<?php include 'connect.php'; ?>

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
        <div class="team-picture" id="team1-picture">
          <img src="images/alt.png" id="teamAImage" alt="Insert Picture" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>
        <div class="team-header">Team A</div>
        <div class="score-display" id="team1-score">25</div>
      </div>

      <!-- Center Section -->
      <div class="center-section">
        <div style="margin-bottom: 10px; background: linear-gradient(90deg, #001a7f 0%, #003399 100%); color: #ffff00; text-align: center; padding: 15px 20px; font-size: 25px; font-weight: bold; letter-spacing: 3px;">
          <h1>Set <span>1</span></h1>
        </div>
        <!-- Clock -->
        <div class="clock-section">
          <div class="clock-display" id="clock">00:00</div>
        </div>

        <!-- Serving add active in the class -->
        <div style="display: flex; align-items: center; justify-content: center;">
          <div class="serving-section">
            <div class="serving-arrow" id="left-arrow">◀</div>
            <div class="serving-text">SERVING</div>
            <div class="serving-arrow" id="right-arrow">▶</div>
          </div>
        </div>

        <!-- Timeouts and Sets Section in One Row -->
        <div style="display: flex; gap: 15px; align-items: stretch; margin-top: 15px;">

          <!-- Left: Set Score -->
          <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; flex: 1; min-width: 100px;">
            <div style="text-align: center; font-size: 16px; font-weight: bold; margin-bottom: 8px; color: #000;">SET WON</div>
            <div style="display: flex; gap: 10px; justify-content: center;">
              <div class="set-item" id="sets-1">2</div>
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
              <div class="set-item" id="sets-1">2</div>
            </div>
          </div>

        </div>

        <div style="display: flex; gap: 10px; margin-top: 30px; justify-content: center;">

          <!-- Item 1 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 1</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 30px;">13 - 20</div>
          </div>

          <!-- Item 2 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 2</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 30px;">43 - 12</div>
          </div>

          <!-- Item 3 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 3</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 30px;">12 - 35</div>
          </div>

          <!-- Item 4 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 4</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 30px;">88 - 12</div>
          </div>

        </div>

      </div>

      <!-- Team 2 -->
      <div class="team-section">
        <div class="team-picture" id="team2-picture">
          <img src="images/alt.png" id="teamBImage" alt="Insert Picture" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>
        <div class="team-header">TEAM B</div>
        <div class="score-display" id="team2-score">0</div>
      </div>
    </div>

  </div>

</body>

</html>