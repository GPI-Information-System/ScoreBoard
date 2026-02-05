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
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/board-style.css">
</head>

<body>

  <div class="scoreboard-container" id="display_score" style="display: block;">
    <!-- Header -->
    <div class="header">
      GPI VOLLEYBALL LEAGUE
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
          <img src="images/alt.png" id="teamBImage" alt="Insert Picture" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>
        <div class="team-header" id="teamB_name">Team B</div>
        <div class="score-display" id="teamB_score">0</div>
      </div>
    </div>

  </div>

  <div id="display_video" style="display: none;">
    <video id="video_poster"
      playsinline
      autoplay
      loop
      width="100%"
      height="100%"
      poster="display/sample.mp4">
      <source src="display/sample.mp4" type="video/mp4">
    </video>
  </div>

  <div id="display_camera" style="display: none;">
    <div style="display: flex; align-items: center; justify-content: center; width: 100vw; height: 100vh;">
      <canvas id="canvas" style="border: 2px solid black; width: 1200px; height: 600px;"></canvas>
    </div>
  </div>


  <script src="script/jquery.min.js"></script>

</body>

</html>

<script>
  $(document).ready(function() {
    // setInterval(counter, 1000);
    // startCamera();
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


        if (response.display1 == 1) {
          // $('#display_score').hide();
          // $('#display_video').show();

          // $('#video_poster').currentTime = 0;
          // $('#video_poster').play()
          // startCamera();

        } else if (response.display2 == 1) {

        } else if (response.display3 == 1) {

        } else {
          // $('#display_score').show();
          // $('#display_video').hide();
          // stopCamera();
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