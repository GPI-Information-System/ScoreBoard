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
      background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 20px;
      box-sizing: border-box;
      position: relative;
      overflow: hidden;">

      <!-- Animated Background Elements -->
      <div style="
        position: absolute;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(233, 194, 24, 0.1) 0%, transparent 70%);
        border-radius: 50%;
        top: -100px;
        left: -100px;
        animation: pulse 4s ease-in-out infinite;">
      </div>
      <div style="
        position: absolute;
        width: 400px;
        height: 400px;
        background: radial-gradient(circle, rgba(233, 194, 24, 0.1) 0%, transparent 70%);
        border-radius: 50%;
        bottom: -100px;
        right: -100px;
        animation: pulse 4s ease-in-out infinite 2s;">
      </div>

      <div style="
        display: flex;
        align-items: center;
        justify-content: space-around;
        width: 100%;
        max-width: 1200px;
        gap: 40px;
        position: relative;
        z-index: 1;">

        <!-- Team A -->
        <div style="
          flex: 1;
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 20px;
          animation: slideInLeft 0.8s ease-out;">
          <img id="versus_teamA_img" src="images/team_A_1770688728.png" alt="Team A" style="
            width: 300px;
            height: 300px;
            object-fit: contain;
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            padding: 20px;
            border: 4px solid #e9c218;
            box-shadow: 0 10px 40px rgba(233, 194, 24, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;"
            onmouseover="this.style.transform='scale(1.05) rotateY(-5deg)'; this.style.boxShadow='0 20px 60px rgba(233, 194, 24, 0.6)'"
            onmouseout="this.style.transform='scale(1) rotateY(0)'; this.style.boxShadow='0 10px 40px rgba(233, 194, 24, 0.3)'">
          <div id="versus_teamA_name" style="
            font-size: 48px;
            font-weight: bold;
            color: #e9c218;
            text-shadow: 3px 3px 8px rgba(0,0,0,0.8);
            text-align: center;
            letter-spacing: 2px;
            animation: fadeInUp 0.8s ease-out 0.3s both;">
            Team A
          </div>
        </div>

        <!-- VS -->
        <div style="
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 20px;">
          <div style="
            font-size: 80px;
            font-weight: bold;
            color: #e9c218;
            text-shadow: 4px 4px 12px rgba(0,0,0,0.9);
            letter-spacing: 3px;
            animation: pulse 2s ease-in-out infinite;">
            VS
          </div>
          <div style="
            font-size: 24px;
            color: #fff;
            text-shadow: 2px 2px 6px rgba(0,0,0,0.8);">
          </div>
        </div>

        <!-- Team B -->
        <div style="
          flex: 1;
          display: flex;
          flex-direction: column;
          align-items: center;
          gap: 20px;
          animation: slideInRight 0.8s ease-out;">
          <img id="versus_teamB_img" src="images/team_B_1770688732.png" alt="Team B" style="
            width: 300px;
            height: 300px;
            object-fit: contain;
            background: rgba(255,255,255,0.1);
            border-radius: 20px;
            padding: 20px;
            border: 4px solid #e9c218;
            box-shadow: 0 10px 40px rgba(233, 194, 24, 0.3);
            transition: all 0.3s ease;
            cursor: pointer;"
            onmouseover="this.style.transform='scale(1.05) rotateY(5deg)'; this.style.boxShadow='0 20px 60px rgba(233, 194, 24, 0.6)'"
            onmouseout="this.style.transform='scale(1) rotateY(0)'; this.style.boxShadow='0 10px 40px rgba(233, 194, 24, 0.3)'">
          <div id="versus_teamB_name" style="
            font-size: 48px;
            font-weight: bold;
            color: #e9c218;
            text-shadow: 3px 3px 8px rgba(0,0,0,0.8);
            text-align: center;
            letter-spacing: 2px;
            animation: fadeInUp 0.8s ease-out 0.3s both;">
            Team B
          </div>
        </div>
      </div>
    </div>

    <style>
      @keyframes slideInLeft {
        from {
          opacity: 0;
          transform: translateX(-100px);
        }

        to {
          opacity: 1;
          transform: translateX(0);
        }
      }

      @keyframes slideInRight {
        from {
          opacity: 0;
          transform: translateX(100px);
        }

        to {
          opacity: 1;
          transform: translateX(0);
        }
      }

      @keyframes fadeInUp {
        from {
          opacity: 0;
          transform: translateY(20px);
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
          opacity: 0.5;
        }

        50% {
          transform: scale(1.1);
          opacity: 1;
        }
      }
    </style>
  </div>

  <div id="display_camera" style="display: block;">
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
              <span style="width:200px; text-align:center; letter-spacing:2px;">SET</span>
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

        if (response.endGame == 1) {

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
                <span style="width:200px; text-align:center;">S${i}</span>
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

          if (isCameraDisplay) {
            stopCamera();
            isCameraDisplay = false;
          }

        } else if (response.display1 == 1) {

          $('#display_results').hide();
          $('#display_score').hide();
          $('#display_poster').show();
          $('#display_versus').hide();
          $('#display_camera').hide();

          if (isCameraDisplay) {
            stopCamera();
            isCameraDisplay = false;
          }

        } else if (response.display2 == 1) {

          $('#display_results').hide();
          $('#display_score').hide();
          $('#display_poster').hide();
          $('#display_versus').show();
          $('#display_camera').hide();

          if (isCameraDisplay) {
            stopCamera();
            isCameraDisplay = false;
          }

        } else if (response.display3 == 1) {

          $('#display_results').hide();
          $('#display_score').hide();
          $('#display_poster').hide();
          $('#display_versus').hide();
          $('#display_camera').show();

          if (!isCameraDisplay) {
            startCamera();
            isCameraDisplay = true;
          }

        } else {

          $('#display_results').hide();
          $('#display_score').show();
          $('#display_poster').hide();
          $('#display_versus').hide();
          $('#display_camera').hide();

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

  function startCamera() {
    navigator.mediaDevices.getUserMedia({
      video: true
    }).then(stream => {
      display_cam = stream;
      video = document.createElement('video');
      video.srcObject = display_cam;
      video.play();

      video.onloadedmetadata = () => {
        canvas.width = video.videoWidth;
        canvas.height = video.videoHeight;
        draw(video);
      };
    }).catch(error => {
      console.error('Error accessing camera:', error);
      // Display error message on canvas
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
  }
</script>