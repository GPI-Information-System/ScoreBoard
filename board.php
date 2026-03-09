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
  <link rel="icon" href="display/ball.png">
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/board-style.css">
</head>

<body>

  <div id="display_score" class="scoreboard-container" style="display: block;">
    <!-- Header -->
    <div class="header">
      GPI VOLLEYBALL LEAGUE
    </div>

    <!-- Main Content -->
    <div class="main-content">
      <!-- Team 1 -->
      <div class="team-section">
        <div class="team-picture">
          <img src="display/alt.png" id="teamAImage" alt="Insert Picture" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>
        <div class="team-header" id="teamA_name">Team A</div>
        <div class="score-display" id="teamA_score">0</div>
      </div>

      <!-- Center Section -->
      <div class="center-section">
        <div style="margin-bottom: 10px; background: linear-gradient(90deg, #3758de 0%, #36538d 100%); color: #ffff00; text-align: center; padding: 15px 20px; font-size: 25px; font-weight: bold; letter-spacing: 3px; border-radius: 8px; text-shadow: 2px 2px 5px black;">
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
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 35px; font-family: 'DS Digital', 'Digital-7', 'Orbitron', monospace;" id="set1"></div>
          </div>

          <!-- Item 2 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 2</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 35px; font-family: 'DS Digital', 'Digital-7', 'Orbitron', monospace;" id="set2"></div>
          </div>

          <!-- Item 3 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 3</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 35px; font-family: 'DS Digital', 'Digital-7', 'Orbitron', monospace;" id="set3"></div>
          </div>

          <!-- Item 4 -->
          <div style="display:flex; flex-direction:column; align-items:stretch; flex:1; min-width:150px; ">
            <div style="text-align:center; font-size: 20px; margin-bottom:6px; font-weight:bold;">SET 4</div>
            <div style="background: #000; border: 2px solid #666; padding: 20px; border-radius: 8px; display: flex; align-items: center; justify-content: center; color: #e9c218; height: 130px; font-size: 35px; font-family: 'DS Digital', 'Digital-7', 'Orbitron', monospace;" id="set4"></div>
          </div>

        </div>

      </div>

      <!-- Team 2 -->
      <div class="team-section">
        <div class="team-picture">
          <img src="display/alt.png" id="teamBImage" alt="Insert Picture" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>
        <div class="team-header" id="teamB_name">Team B</div>
        <div class="score-display" id="teamB_score">0</div>
      </div>
    </div>

  </div>

  <div id="display_poster" style="margin: 0; padding: 0; display: none;">
    <div style="
      width: 100vw;
      height: 100vh;                 
      background-image: url('display/poster.png');
      background-size: contain;      
      background-position: center;   
      background-repeat: no-repeat;  
      background-color: #000;">
    </div>
  </div>

  <div id="display_versus" style="display: none;">
    <div style="
      width: 100vw;
      height: 100vh;
      background: linear-gradient(135deg, #1a1f3a 0%, #2a3050 50%, #1d2b3a 100%);
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      padding: 20px;
      box-sizing: border-box;
      position: relative;
      overflow: hidden;">

      <!-- Animated background elements -->
      <div style="
        position: absolute;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(233, 194, 24, 0.15) 0%, transparent 70%);
        border-radius: 50%;
        top: -150px;
        left: -150px;
        animation: pulse 6s ease-in-out infinite;">
      </div>
      <div style="
        position: absolute;
        width: 500px;
        height: 500px;
        background: radial-gradient(circle, rgba(55, 88, 222, 0.1) 0%, transparent 70%);
        border-radius: 50%;
        bottom: -150px;
        right: -150px;
        animation: pulse 6s ease-in-out infinite 2s;">
      </div>

      <div class="clock-section" style="position: absolute; margin-top: -600px; ">
        <!-- <div style="background: #000;"> -->
        <div class="clock-display" id="versus_timer">00:00</div>
        <!-- </div> -->
      </div>

      <!-- Main content -->
      <div style="
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        max-width: 1400px;
        gap: 60px;
        position: relative;
        z-index: 1;">

        <!-- Team A -->
        <div style="
          flex: 1;
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 24px;
          animation: slideInLeft 0.8s ease-out;">

          <div style="
            position: relative;
            width: 320px;
            height: 320px;">
            <div id="versus_teamA_glow" style="
              position: absolute;
              inset: -8px;
              background: linear-gradient(135deg, #e9c218 0%, #ffd84d 100%);
              border-radius: 24px;
              animation: borderPulse 3s ease-in-out infinite;
              z-index: -1;">
            </div>
            <img id="versus_teamA_img" src="display/alt.png" alt="Team A" style="
              width: 100%;
              height: 100%;
              object-fit: contain;
              background: rgba(10, 14, 39, 0.8);
              border-radius: 24px;
              padding: 20px;
              box-sizing: border-box;
              transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
              cursor: pointer;
              filter: drop-shadow(0 15px 40px rgba(233, 194, 24, 0.4));">
          </div>

          <div id="versus_teamA_name" style="
            font-size: 56px;
            font-weight: 900;
            color: #e9c218;
            text-shadow: 4px 4px 12px rgba(0,0,0,0.9);
            text-align: center;
            letter-spacing: 2px;
            animation: fadeInUp 0.8s ease-out 0.2s both;
            text-transform: uppercase;">
          </div>
        </div>

        <!-- Header -->
        <!-- <div style=" 
          position: absolute;
          top: 40px;
          font-size: 32px;
          font-weight: bold;
          color: #e9c218;
          text-shadow: 3px 3px 10px rgba(0,0,0,0.9);
          letter-spacing: 3px;
          z-index: 2;">
          CHAMPIONSHIP MATCH
        </div> -->

        <!-- Center divider -->
        <div style="
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 30px;
          position: relative;
          z-index: 2;">

          <div style="
            font-size: 120px;
            font-weight: 900;
            background: linear-gradient(135deg, #e9c218 0%, #ffd84d 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
            text-shadow: 0 0 30px rgba(233, 194, 24, 0.5);
            letter-spacing: 4px;
            animation: pulse 2s ease-in-out infinite;
            line-height: 1;">
            VS
          </div>
        </div>

        <!-- Team B -->
        <div style="
          flex: 1;
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 24px;
          animation: slideInRight 0.8s ease-out;">

          <div style="
            position: relative;
            width: 320px;
            height: 320px;">
            <div id="versus_teamB_glow" style="
              position: absolute;
              inset: -8px;
              background: linear-gradient(135deg, #3758de 0%, #5770ff 100%);
              border-radius: 24px;
              animation: borderPulse 3s ease-in-out infinite 1.5s;
              z-index: -1;">
            </div>
            <img id="versus_teamB_img" src="display/alt.png" alt="Team B" style="
              width: 100%;
              height: 100%;
              object-fit: contain;
              background: rgba(10, 14, 39, 0.8);
              border-radius: 24px;
              padding: 20px;
              box-sizing: border-box;
              transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
              cursor: pointer;
              filter: drop-shadow(0 15px 40px rgba(55, 88, 222, 0.4));">
          </div>

          <div id="versus_teamB_name" style="
            font-size: 56px;
            font-weight: 900;
            color: #5770ff;
            text-shadow: 4px 4px 12px rgba(0,0,0,0.9);
            text-align: center;
            letter-spacing: 2px;
            animation: fadeInUp 0.8s ease-out 0.2s both;
            text-transform: uppercase;">
          </div>
        </div>
      </div>

      <!-- Footer -->
      <div style="
        position: absolute;
        bottom: 40px;
        font-size: 24px;
        color: #fff;
        text-shadow: 2px 2px 8px rgba(0,0,0,0.9);
        letter-spacing: 2px;
        animation: fadeInUp 1s ease-out 0.6s both;">
        GET READY FOR THE MATCH
      </div>
    </div>

    <style>
      @keyframes slideInLeft {
        from {
          opacity: 0;
          transform: translateX(-150px);
        }

        to {
          opacity: 1;
          transform: translateX(0);
        }
      }

      @keyframes slideInRight {
        from {
          opacity: 0;
          transform: translateX(150px);
        }

        to {
          opacity: 1;
          transform: translateX(0);
        }
      }

      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(30px);
        }

        to {
          opacity: 1;
          transform: translateY(0);
        }
      }

      @keyframes pulse {

        0%,
        100% {
          transform: scale(1);
          opacity: 1;
        }

        50% {
          transform: scale(1.05);
          opacity: 0.8;
        }
      }

      @keyframes borderPulse {

        0%,
        100% {
          box-shadow: 0 0 20px rgba(233, 194, 24, 0.5);
          transform: scale(1);
        }

        50% {
          box-shadow: 0 0 40px rgba(233, 194, 24, 0.8);
          transform: scale(1.02);
        }
      }

      @keyframes dotPulse {

        0%,
        100% {
          transform: scale(1);
          opacity: 0.6;
        }

        50% {
          transform: scale(1.3);
          opacity: 1;
        }
      }

      @keyframes heightPulse {

        0%,
        100% {
          height: 80px;
        }

        50% {
          height: 120px;
        }
      }
    </style>
  </div>

  <div id="display_camera" style="display: none;">
    <div style="display: flex; align-items: center; justify-content: center; width: 100vw; height: 100vh; background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); position: relative; overflow: hidden;">

      <!-- Top SMILE CAM -->
      <div style="position: absolute; top: 40px; font-size: 36px; font-weight: bold; color: #e9c218; text-shadow: 3px 3px 8px rgba(0,0,0,0.8); letter-spacing: 2px; animation: pulse 2s ease-in-out infinite;">
        😊 😊 SMILE CAM 😊 😊
      </div>

      <!-- Left SMILE CAM -->
      <div style="position: absolute; left: 40px; font-size: 36px; font-weight: bold; color: #e9c218; text-shadow: 3px 3px 8px rgba(0,0,0,0.8); letter-spacing: 2px; animation: pulse 2s ease-in-out infinite; text-align: center; line-height: 1.2;">
        😊<br>S<br>M<br>I<br>L<br>E<br><br>C<br>A<br>M<br>😊
      </div>

      <!-- Right SMILE CAM -->
      <div style="position: absolute; right: 40px; font-size: 36px; font-weight: bold; color: #e9c218; text-shadow: 3px 3px 8px rgba(0,0,0,0.8); letter-spacing: 2px; animation: pulse 2s ease-in-out infinite; text-align: center; line-height: 1.2;">
        😊<br>S<br>M<br>I<br>L<br>E<br><br>C<br>A<br>M<br>😊
      </div>

      <canvas id="canvas" style="border: 4px solid #e9c218; width: 1200px; height: 600px; border-radius: 20px; box-shadow: 0 10px 40px rgba(233, 194, 24, 0.3);"></canvas>

      <!-- Bottom SMILE CAM -->
      <div style="position: absolute; bottom: 40px; font-size: 48px; font-weight: bold; color: #e9c218; text-shadow: 3px 3px 8px rgba(0,0,0,0.8); letter-spacing: 2px; animation: pulse 2s ease-in-out infinite;">
        😊 😊 SMILE CAM 😊 😊
      </div>
    </div>
  </div>

  <div id="display_results" style="display: none;">
    <div style="display:flex; flex-direction:column; align-items:center; justify-content:center; min-height:100vh; background: linear-gradient(180deg, #0b1a3a 0%, #0f2a5a 60%, #162b4a 100%); color:#fff;">
      <div style=" font-size:40px; font-weight:bold; letter-spacing:2px; margin-bottom:20px; text-align:center;">GAME RESULT</div>

      <div style="display:flex; flex-wrap:wrap; align-items:center; justify-content:center; width:100%;">
        <div style="flex:1; min-width:240px; display:flex; flex-direction:column; align-items:center; gap:10px;">
          <div id="result_teamA_status"></div>
          <img id="result_teamA_img" src="display/alt.png" alt="Team A Logo" style="width:300px; height:300px; object-fit:contain; background:#fff; border-radius:12px; padding:10px;">
          <div id="result_teamA_sets" style="font-size:60px; font-weight:bold; color:#ffd84d;">0</div>
        </div>

        <div style="flex:1; min-width:650px; display:flex; flex-direction:column; align-items:center; gap:12px;">
          <div style="width:100%; border:2px solid #2a3f66; border-radius:12px; overflow:hidden;">
            <div style="display:flex; align-items:center; padding:40px 20px; background:#162a52; font-weight:bold; text-transform:uppercase; font-size:25px;">
              <span id="result_teamA_name" style="flex:1; text-align:center;"></span>
              <span style="width:200px; text-align:center; letter-spacing:2px; color:#ffd84d;">SET</span>
              <span id="result_teamB_name" style="flex:1; text-align:center;"></span>
            </div>
            <div id="result_insertSetScores">
            </div>
          </div>
        </div>

        <div style="flex:1; min-width:240px; display:flex; flex-direction:column; align-items:center; gap:10px;">
          <div id="result_teamB_status"></div>
          <img id="result_teamB_img" src="display/alt.png" alt="Team B Logo" style="width:300px; height:300px; object-fit:contain; background:#fff; border-radius:12px; padding:10px;">
          <div id="result_teamB_sets" style="font-size:60px; font-weight:bold; color:#ffd84d;">0</div>
        </div>
      </div>
    </div>
  </div>

  <div id="display_smile" style="display: none;">
    <div style="display: flex; align-items: center; justify-content: center; width: 100vw; height: 100vh; background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%); position: relative; overflow: hidden;">

      <!-- Animated background elements -->
      <div style="position: absolute; width: 600px; height: 600px; background: radial-gradient(circle, rgba(233, 194, 24, 0.2) 0%, transparent 70%); border-radius: 50%; top: -200px; left: -200px; animation: pulse 6s ease-in-out infinite;"></div>
      <div style="position: absolute; width: 600px; height: 600px; background: radial-gradient(circle, rgba(233, 194, 24, 0.15) 0%, transparent 70%); border-radius: 50%; bottom: -200px; right: -200px; animation: pulse 6s ease-in-out infinite 2s;"></div>

      <!-- Top SMILE OF THE DAY -->
      <div style="position: absolute; top: 40px; font-size: 48px; font-weight: 900; color: #e9c218; text-shadow: 4px 4px 15px rgba(0,0,0,0.9); letter-spacing: 3px; animation: pulse 2s ease-in-out infinite; text-transform: uppercase; z-index: 2;">
        😊 SMILE OF THE DAY 😊
      </div>

      <!-- Left decoration -->
      <div style="position: absolute; left: 30px; font-size: 40px; font-weight: bold; color: #e9c218; text-shadow: 3px 3px 8px rgba(0,0,0,0.8); letter-spacing: 2px; animation: pulse 2s ease-in-out infinite; text-align: center; line-height: 1.4; z-index: 1;">
        😊<br>S<br>M<br>I<br>L<br>E<br>⭐
      </div>

      <!-- Right decoration -->
      <div style="position: absolute; right: 30px; font-size: 40px; font-weight: bold; color: #e9c218; text-shadow: 3px 3px 8px rgba(0,0,0,0.8); letter-spacing: 2px; animation: pulse 2s ease-in-out infinite; text-align: center; line-height: 1.4; z-index: 1;">
        ⭐<br>S<br>M<br>I<br>L<br>E<br>😊
      </div>

      <!-- Main Image Container -->
      <div style="position: relative; z-index: 2; animation: slideInUp 0.8s ease-out;">
        <div style="position: relative; width: 1000px; height: 600px; overflow: hidden; border-radius: 24px; border: 4px solid #e9c218; box-shadow: 0 10px 40px rgba(233, 194, 24, 0.3);">
          <!-- Glow effect -->
          <div style="position: absolute; inset: -8px; background: linear-gradient(135deg, #e9c218 0%, #ffd84d 100%); border-radius: 24px; animation: borderPulse 3s ease-in-out infinite; z-index: -1;"></div>

          <img id="smile_picture" src="picture/smile.png" alt="Smile of the Day" style="width: 100%; height: 100%; object-fit: cover; border-radius: 20px; transition: transform 0.4s ease; filter: drop-shadow(0 20px 50px rgba(233, 194, 24, 0.5));" />
        </div>
      </div>

      <!-- Bottom SMILE OF THE DAY -->
      <div style="position: absolute; bottom: 40px; font-size: 50px; font-weight: 900; color: #e9c218; text-shadow: 4px 4px 15px rgba(0,0,0,0.9); letter-spacing: 3px; animation: pulse 2s ease-in-out infinite; text-transform: uppercase; z-index: 2;">
        🎉 CONGRATULATIONS! 🎉
      </div>

      <!-- Floating particles effect -->
      <div style="position: absolute; width: 100%; height: 100%; z-index: 0; pointer-events: none;">
        <div style="position: absolute; width: 20px; height: 20px; background: #e9c218; border-radius: 50%; animation: float 4s infinite ease-in-out; opacity: 0.3; top: 20%; left: 10%;"></div>
        <div style="position: absolute; width: 15px; height: 15px; background: #ffd84d; border-radius: 50%; animation: float 5s infinite ease-in-out 1s; opacity: 0.3; top: 30%; right: 15%;"></div>
        <div style="position: absolute; width: 18px; height: 18px; background: #e9c218; border-radius: 50%; animation: float 6s infinite ease-in-out 2s; opacity: 0.3; bottom: 20%; left: 20%;"></div>
      </div>

    </div>
  </div>

  <!-- <div id="display_video">
    <video id="video_poster"
      playsinline
      autoplay
      loop
      width="100%"
      height="100%"
      poster="display/sample.mp4">
      <source src="display/sample.mp4" type="video/mp4">
    </video>
  </div> -->

  <script src="script/jquery.min.js"></script>

</body>

</html>

<script>
  $(document).ready(function() {
    setInterval(counter, 1000);
    initDominantColors();
  });

  var isCameraDisplay = false;

  function counter() {
    $.ajax({
      url: 'ajax.php?action=fetchingRecords',
      type: 'POST',
      dataType: 'json',
      success: function(response) {
        $('#teamAImage').attr('src', response.teamA_img ?? 'display/alt.png');
        $('#teamA_name').text(response.teamA_name ?? 'Team A');

        $('#teamBImage').attr('src', response.teamB_img ?? 'display/alt.png');
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

        if (response.endGame == 1) { // Display Results

          $('#result_teamA_name').text(response.teamA_name ?? 'Team A');
          $('#result_teamB_name').text(response.teamB_name ?? 'Team B');

          $('#result_teamA_img').attr('src', response.teamA_img ?? 'display/alt.png');
          $('#result_teamB_img').attr('src', response.teamB_img ?? 'display/alt.png');

          $('#result_teamA_sets').text(response.teamA_set ?? 0);
          $('#result_teamB_sets').text(response.teamB_set ?? 0);

          $('#result_teamA_status').html(response.teamA_set > response.teamB_set ? '<div style="font-size:50px; font-weight:bold; color:#4caf50; text-shadow: 2px 2px 5px black;">WINNER</div>' : '<div style="font-size:50px; font-weight:bold; color:#f44336; text-shadow: 2px 2px 5px black;">LOSER</div>');
          $('#result_teamB_status').html(response.teamB_set > response.teamA_set ? '<div style="font-size:50px; font-weight:bold; color:#4caf50; text-shadow: 2px 2px 5px black;">WINNER</div>' : '<div style="font-size:50px; font-weight:bold; color:#f44336; text-shadow: 2px 2px 5px black;">LOSER</div>');

          var currentSet = parseInt(response.setNumber);
          var elemetContent = '';
          for (let i = 1; i <= currentSet; i++) {
            elemetContent += `
              <div style="display:flex; align-items:center; padding:35px 20px; background:${i % 2 === 1 ? '#0e234a' : '#0b1f42'}; font-weight:bold; font-size:35px;">
                <span id="result_set1_left" style="flex:1; text-align:center;">${response['teamA_set' + i]}</span>
                <span style="width:200px; text-align:center; color:#ffd84d;">S${i}</span>
                <span id="result_set1_right" style="flex:1; text-align:center;">${response['teamB_set' + i]}</span>
              </div>
            `;
          }
          $('#result_insertSetScores').html(elemetContent);

          $('#display_results').show();
          $('#display_score').hide();
          $('#display_poster').hide();
          $('#display_versus').hide();
          $('#display_camera').hide();
          $('#display_smile').hide();

          if (isCameraDisplay) {
            stopCamera();
            isCameraDisplay = false;
          }

        } else if (response.display1 == 1) { // Display Poster

          $('#display_results').hide();
          $('#display_score').hide();
          $('#display_poster').show();
          $('#display_versus').hide();
          $('#display_camera').hide();
          $('#display_smile').hide();

          if (isCameraDisplay) {
            stopCamera();
            isCameraDisplay = false;
          }

        } else if (response.display2 == 1) { // Display Versus

          $('#versus_teamA_name').text(response.teamA_name ?? 'Team A');
          $('#versus_teamB_name').text(response.teamB_name ?? 'Team B');

          $('#versus_teamA_img').attr('src', response.teamA_img ?? 'display/alt.png');
          $('#versus_teamB_img').attr('src', response.teamB_img ?? 'display/alt.png');

          $('#versus_timer').text(response.timer);

          $('#display_results').hide();
          $('#display_score').hide();
          $('#display_poster').hide();
          $('#display_versus').show();
          $('#display_camera').hide();
          $('#display_smile').hide();

          if (isCameraDisplay) {
            stopCamera();
            isCameraDisplay = false;
          }

        } else if (response.display3 == 1) { // Display Camera

          $('#display_results').hide();
          $('#display_score').hide();
          $('#display_poster').hide();
          $('#display_versus').hide();
          $('#display_camera').show();
          $('#display_smile').hide();

          if (!isCameraDisplay) {
            startCamera(response.camera_device ?? null);
            isCameraDisplay = true;
          } else if (response.camera_device && response.camera_device !== currentDeviceId) {
            startCamera(response.camera_device);
          }

        } else if (response.display4 == 1) { // Display Smile Winner

          $('#display_results').hide();
          $('#display_score').hide();
          $('#display_poster').hide();
          $('#display_versus').hide();
          $('#display_camera').hide();
          $('#display_smile').show();

          if (isCameraDisplay) {
            stopCamera();
            isCameraDisplay = false;
          }

        } else if (response.display5 == 1) { // Display Team Winner

          $('#display_results').hide();
          $('#display_score').hide();
          $('#display_poster').hide();
          $('#display_versus').hide();
          $('#display_camera').hide();
          $('#display_smile').hide();

          if (isCameraDisplay) {
            stopCamera();
            isCameraDisplay = false;
          }

        } else {

          $('#display_results').hide();
          $('#display_score').show();
          $('#display_poster').hide();
          $('#display_versus').hide();
          $('#display_camera').hide();
          $('#display_smile').hide();

          if (isCameraDisplay) {
            stopCamera();
            isCameraDisplay = false;
          }

        }
      },
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  }

  const canvas = document.getElementById('canvas');
  const context_canvas = canvas.getContext('2d');
  let display_cam;
  let video;
  let currentDeviceId = null;

  function startCamera(deviceId) {
    if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
      return;
    }

    if (display_cam) {
      stopCamera();
    }

    const constraints = {
      video: deviceId ? {
        deviceId: {
          exact: deviceId
        }
      } : true
    };

    navigator.mediaDevices.getUserMedia(constraints).then(stream => {
      display_cam = stream;
      currentDeviceId = deviceId || stream.getVideoTracks()[0]?.getSettings?.().deviceId || null;
      video = document.createElement('video');
      video.muted = true;
      video.playsInline = true;
      video.setAttribute('playsinline', '');
      video.autoplay = true;
      video.srcObject = display_cam;
      video.play().catch(() => {});

      video.onloadedmetadata = () => {
        canvas.width = video.videoWidth || 1280;
        canvas.height = video.videoHeight || 720;
        draw(video);
      };
    }).catch(error => {
      console.error('Error accessing camera:', error);
      if (deviceId) {
        startCamera(null);
        return;
      }

      canvas.width = 640;
      canvas.height = 480;
      context_canvas.font = '20px Arial';
      context_canvas.fillStyle = 'red';
      context_canvas.fillText('Camera access denied or unavailable', 10, 50);
      context_canvas.fillText('Please check permissions and try again', 10, 80);
    });
  }

  function draw(video) {
    context_canvas.drawImage(video, 0, 0, canvas.width, canvas.height);
    requestAnimationFrame(() => draw(video));
  }

  function stopCamera() {
    if (display_cam) {
      display_cam.getTracks().forEach(track => track.stop());
      display_cam = null;
    }
    context_canvas.clearRect(0, 0, canvas.width, canvas.height);
    video.srcObject = null;
    currentDeviceId = null;
  }


  function initDominantColors() {
    var targets = [{
        imgId: 'versus_teamA_img',
        glowId: 'versus_teamA_glow',
        nameId: 'versus_teamA_name'
      },
      {
        imgId: 'versus_teamB_img',
        glowId: 'versus_teamB_glow',
        nameId: 'versus_teamB_name'
      }
    ];

    targets.forEach(function(target) {
      var img = document.getElementById(target.imgId);
      var glow = document.getElementById(target.glowId);
      var nameEl = document.getElementById(target.nameId);

      if (!img || !glow) {
        return;
      }

      var apply = function() {
        applyDominantFrame(img, glow, nameEl);
      };

      if (img.complete) {
        apply();
      }

      img.addEventListener('load', apply);
    });
  }

  function applyDominantFrame(img, glowEl, nameEl) {
    var color = getDominantColor(img);
    var accent = lightenColor(color, 0.35);
    var c1 = 'rgb(' + color.r + ',' + color.g + ',' + color.b + ')';
    var c2 = 'rgb(' + accent.r + ',' + accent.g + ',' + accent.b + ')';

    glowEl.style.background = 'linear-gradient(135deg, ' + c1 + ' 0%, ' + c2 + ' 100%)';
    glowEl.style.boxShadow = '0 0 30px rgba(' + color.r + ',' + color.g + ',' + color.b + ',0.65)';
    img.style.filter = 'drop-shadow(0 15px 40px rgba(' + color.r + ',' + color.g + ',' + color.b + ',0.4))';
    if (nameEl) {
      nameEl.style.color = c1;
    }
  }

  function getDominantColor(img) {
    try {
      var canvas = document.createElement('canvas');
      var size = 40;
      canvas.width = size;
      canvas.height = size;
      var ctx = canvas.getContext('2d', {
        willReadFrequently: true
      });
      ctx.drawImage(img, 0, 0, size, size);
      var data = ctx.getImageData(0, 0, size, size).data;

      var r = 0;
      var g = 0;
      var b = 0;
      var count = 0;

      for (var i = 0; i < data.length; i += 4) {
        var alpha = data[i + 3];
        if (alpha < 10) {
          continue;
        }
        r += data[i];
        g += data[i + 1];
        b += data[i + 2];
        count += 1;
      }

      if (!count) {
        return {
          r: 233,
          g: 194,
          b: 24
        };
      }

      return {
        r: Math.round(r / count),
        g: Math.round(g / count),
        b: Math.round(b / count)
      };
    } catch (error) {
      return {
        r: 233,
        g: 194,
        b: 24
      };
    }
  }

  function lightenColor(color, amount) {
    return {
      r: Math.round(color.r + (255 - color.r) * amount),
      g: Math.round(color.g + (255 - color.g) * amount),
      b: Math.round(color.b + (255 - color.b) * amount)
    };
  }
</script>