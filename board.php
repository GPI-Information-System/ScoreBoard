<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volleyball Scoreboard</title>
  <link rel="stylesheet" href="style.css">
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: Arial, sans-serif;
      background: #f0f0f0;
      padding: 0;
      margin: 0;
    }

    .scoreboard-container {
      width: 100%;
      height: 100vh;
      display: flex;
      flex-direction: column;
      background: white;
    }

    /* Header */
    .header {
      background: linear-gradient(90deg, #001a7f 0%, #003399 100%);
      color: #ffff00;
      text-align: center;
      padding: 15px 20px;
      font-size: 32px;
      font-weight: bold;
      letter-spacing: 3px;
      border-bottom: 3px solid #ffff00;
    }

    /* Main Content */
    .main-content {
      display: grid;
      grid-template-columns: 1fr 1.2fr 1fr;
      gap: 0;
      flex: 1;
      overflow: hidden;
    }

    /* Teams Section */
    .team-section {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      padding: 20px;
      background: #d3d3d3;
      border-right: 3px solid #999;
      position: relative;
    }

    .team-section:last-child {
      border-right: none;
      border-left: 3px solid #999;
    }

    .team-header {
      text-align: center;
      font-size: 32px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #000;
    }

    .team-picture {
      width: 100%;
      height: 35%;
      background: #999;
      border: 2px solid #666;
      border-radius: 8px;
      margin-bottom: 15px;
      display: flex;
      align-items: center;
      justify-content: center;
      color: #fff;
      font-size: 14px;
      overflow: hidden;
    }

    .team-picture img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .score-display {
      background: #000;
      border: 5px solid #ff0000;
      border-radius: 30px;
      padding: 0;
      text-align: center;
      font-size: 250px;
      font-weight: bold;
      color: #e9c218;
      font-family: 'Courier New', monospace;
      display: flex;
      align-items: center;
      justify-content: center;
      min-height: 140px;
      flex: 1;
    }

    /* Center Section */
    .center-section {
      display: flex;
      flex-direction: column;
      justify-content: flex-start;
      padding: 20px;
      background: #c0c0c0;
      border-left: 3px solid #999;
      border-right: 3px solid #999;
    }

    /* Clock Section */
    .clock-section {
      text-align: center;
      margin-bottom: 15px;
    }

    .clock-display {
      background: #000;
      border: 5px solid #ffff00;
      padding: 15px 30px;
      font-size: 70px;
      color: #ffff00;
      font-family: 'Courier New', monospace;
      font-weight: bold;
      letter-spacing: 8px;
      border-radius: 8px;
    }

    /* Serving Section */
    .serving-section {
      display: flex;
      align-items: center;
      justify-content: space-around;
      background: #d9d9d9;
      padding: 15px 20px;
      border-radius: 8px;
      margin-bottom: 15px;
      border: 2px solid #999;
    }

    .serving-arrow {
      font-size: 50px;
      font-weight: bold;
      color: #666;
    }

    .serving-arrow.active {
      color: #ff0000;
    }

    .serving-text {
      font-size: 28px;
      font-weight: bold;
      color: #000;
    }

    /* Timeouts Section */
    .timeouts-section {
      text-align: center;
      margin-bottom: 15px;
    }

    .timeouts-title {
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #000;
    }

    .timeout-boxes {
      display: flex;
      gap: 8px;
      justify-content: center;
    }

    .timeout-box {
      width: 50px;
      height: 50px;
      border: 2px solid #666;
      background: white;
      border-radius: 4px;
    }

    .timeout-box.used {
      background: #999;
    }

    /* Sets Won Section */
    .sets-section {
      text-align: center;
    }

    .sets-title {
      font-size: 14px;
      font-weight: bold;
      margin-bottom: 10px;
      color: #000;
    }

    .sets-display {
      display: flex;
      gap: 15px;
      justify-content: center;
      align-items: center;
    }

    .set-item {
      background: #000;
      border: 3px solid #333;
      padding: 20px 30px;
      border-radius: 8px;
      min-width: 60px;
      font-size: 45px;
      font-weight: bold;
      color: white;
      text-align: center;
    }

    /* Responsive */
    @media (max-width: 1000px) {
      .main-content {
        grid-template-columns: 1fr;
      }

      .team-section {
        border-right: none;
        border-bottom: 3px solid #999;
      }

      .team-section:last-child {
        border-left: none;
      }

      .center-section {
        border-left: none;
        border-right: none;
        border-bottom: 3px solid #999;
      }

      .timeout-label {
        display: flex;
        align-items: center;
        gap: 16px;
        font-family: system-ui, Arial, sans-serif;
      }

      .timeout-group {
        display: inline-flex;
        gap: 12px;
      }

      .timeout-option {
        position: relative;
        display: inline-flex;
        align-items: center;
        cursor: pointer;
        /* indicates clickability */
      }

      /* Visually hide the native checkbox but keep it accessible */
      .timeout-option input[type="checkbox"] {
        position: absolute;
        opacity: 0;
        inset: 0;
        width: 0;
        height: 0;
        pointer-events: none;
      }

      /* The only visible control */
      .timeout-box {
        width: 40px;
        /* size */
        height: 40px;
        border: 3px solid #9ca3af;
        border-radius: 10px;
        background: #f9fafb;
        transition: all .15s ease;
        display: inline-block;
      }

      /* Hover feedback */
      .timeout-option:hover .timeout-box {
        border-color: #6b7280;
      }

      /* Focus ring for keyboard users (focus lands on the hidden input) */
      .timeout-option input[type="checkbox"]:focus-visible+.timeout-box {
        outline: 3px solid #93c5fd;
        outline-offset: 2px;
      }

      /* Checked (selected) state */
      .timeout-option input[type="checkbox"]:checked+.timeout-box {
        border-color: #2563eb;
        background: #dbeafe;
        box-shadow: inset 0 0 0 10px #3b82f6;
        /* inner fill */
      }
    }
  </style>
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
        <div class="team-header">Team 1</div>
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
              <div class="set-item" id="sets-1">0</div>
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
              <div class="set-item" id="sets-1">0</div>
            </div>
          </div>

        </div>

        <div style="display: flex; gap: 10px; margin-top: 30px; justify-content: center;">

          <!-- Item 1 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 1</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; height: 100px; font-size: 30px;">13 - 20</div>
          </div>

          <!-- Item 2 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 2</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; height: 100px; font-size: 30px;"></div>
          </div>

          <!-- Item 3 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 3</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; height: 100px; font-size: 30px;"></div>
          </div>

          <!-- Item 4 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 4</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: white; height: 100px; font-size: 30px;"></div>
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