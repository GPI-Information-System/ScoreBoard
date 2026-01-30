<?php
include 'connect.php';

$records = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM ingame_record WHERE id=1"));

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volleyball Board Controller</title>
  <link rel="icon" href="images/volleyball.png">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="scoreboard-container">
    <div class="team-section">
      <div class="team-panel">

        <div class="team-picture" style="width: 300px; height: 200px; padding: 1px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
          <img src="images/alt.png" id="teamAImage" alt="Insert Picture" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>

        <!-- <div class="team-picture" style="width:300px; height:200px; overflow: hidden;">
          <img src="tiger.png" id="teamAImage" alt="Image not available" style="width: 100%; height: 100%; object-fit: cover;">
        </div> -->

        <input id="teamAUpload" type="file" accept="image/*">
        <label for="teamAUpload" class="insert-picture" style="margin-bottom: 10px;">Insert Picture</label>

        <input type="text" class="team-name" id="teamA_name" placeholder="Insert Team Name" style="width: 300px; padding: 12px 16px; text-align: center; font-size: 20px; font-weight: 600; border: 2px solid #d1d5db; border-radius: 10px; background: #f9fafb; outline: none; transition: all .2s ease;"
          onfocus="this.style.borderColor='#2563eb'; this.style.background='#ffffff';"
          onblur="this.style.borderColor='#d1d5db'; this.style.background='#f9fafb';" />

        <div class="sets-won">Score</div>
        <div class="score-display">
          <div class="score-controls">

            <button id="btnA_minus"
              style="padding: 8px 16px; font-size: 20px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px;"
              onmouseover="this.style.background='#d1d5db'"
              onmouseout="this.style.background='#e5e7eb'">
              -1
            </button>

            <div class="score-value" id="teamA_score">0</div>

            <button id="btnA_plus"
              style="padding: 8px 16px; font-size: 20px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-left:10px;"
              onmouseover="this.style.background='#d1d5db'"
              onmouseout="this.style.background='#e5e7eb'">
              +1
            </button>

          </div>
        </div>

        <div class="sets-won">SET WON</div>
        <div class="score-display">
          <div class="score-controls">

            <button id="btnA_minusSet"
              style="padding: 8px 16px; font-size: 20px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px;"
              onmouseover="this.style.background='#d1d5db'"
              onmouseout="this.style.background='#e5e7eb'">
              -1
            </button>

            <div class="score-value" id="teamA_scoreSet">0</div>

            <button id="btnA_plusSet"
              style="padding: 8px 16px; font-size: 20px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-left:10px;"
              onmouseover="this.style.background='#d1d5db'"
              onmouseout="this.style.background='#e5e7eb'">
              +1
            </button>

          </div>
        </div>
      </div>
    </div>

    <div class="center-content">

      <div style="background-color: #fff; border: 3px solid #666; width: 75%; height: 250px; padding: 15px; justify-content: center;">

        <button id="display1"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 9px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Display Video
        </button>

        <button id="display2"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 9px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Display Versus
        </button>

        <button id="display3"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 9px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Display 3
        </button>

      </div>

      <div style="background-color: #fff; border: 3px solid #666; width: 75%; height: 250px; padding: 15px; justify-content: center;">

        <button id="display1"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 9px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Display 1
        </button>

        <button id="display2"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 9px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Display 2
        </button>

        <button id="display3"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 9px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Display 3
        </button>

      </div>
    </div>


    <div class="center-content">

      <audio src="audios/Buzzer.m4a" id="buzzer_sound" preload="auto"></audio>

      <button id="buzzer_btn"
        style="padding: 20px 60px; font-size: 32px; font-weight: 800; background: #dc2626; color: white; border: none; border-radius: 50px; cursor: pointer; box-shadow: 0 6px 0 #b91c1c; transition: 0.15s;"
        onmousedown="this.style.transform='scale(0.95)'"
        onmouseup="this.style.transform='scale(1)'">
        BUZZER
      </button>

      <div class="timer-panel">
        <div class="timer-display" id="time_display">00:00</div>
        <div class="timer-buttons">

          <button id="fiveMinutes_btn"
            style="padding: 15px 18px; font-size: 16px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="this.style.background='#d1d5db'"
            onmouseout="this.style.background='#e5e7eb'">
            5 Minutes
          </button>

          <button id="oneMinute_btn"
            style="padding: 15px 18px; font-size: 16px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px;"
            onmouseover="this.style.background='#d1d5db'"
            onmouseout="this.style.background='#e5e7eb'">
            1 Minute
          </button>

          <button id="thirtySeconds_btn"
            style="padding: 15px 18px; font-size: 16px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="this.style.background='#d1d5db'"
            onmouseout="this.style.background='#e5e7eb'">
            30 Seconds
          </button>

        </div>
        <button id="reset_btn"
          class="reset-button" style="padding: 10px 18px; font-size: 16px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
          onmouseover="this.style.background='#d1d5db'"
          onmouseout="this.style.background='#e5e7eb'">RESET</button>
      </div>

      <div class="serving-section">
        <div style="font-size: 40px; font-weight: bold; margin-bottom: 10px; margin-top: -10px;"><u>Set <span id="setNumber"></span></u></div>
        <div class="serving-controls">

          <button
            id="servingA"
            class="serving-btn"
            style="padding: 10px 18px; font-size: 40px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="if(!this.dataset.active) this.style.background='#d1d5db';"
            onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">&lt;</button>

          <button
            id="servingNone"
            class="serving-btn"
            style="width: 200px; padding: 10px 18px; font-size: 30px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="if(!this.dataset.active) this.style.background='#d1d5db';"
            onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">None</button>

          <button
            id="servingB"
            class="serving-btn"
            style="padding: 10px 18px; font-size: 40px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="if(!this.dataset.active) this.style.background='#d1d5db';"
            onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">&gt;</button>

        </div>
        <div style="font-size: 20px; font-weight: bold; margin-top: 10px; margin-bottom: -10px">SERVING</div>
      </div>

      <div class="timeout-section">
        <div class="timeout-label" role="group" aria-label="Timeout left">
          <div class="timeout-group">
            <label class="timeout-option">
              <input type="checkbox" name="timeoutLeft1" value="1" id="timeoutA1">
              <span class="timeout-box" aria-hidden="true"></span>
            </label>

            <label class="timeout-option">
              <input type="checkbox" name="timeoutLeft2" value="2" id="timeoutA2">
              <span class="timeout-box" aria-hidden="true"></span>
            </label>
          </div>

          <span class="timeout-text">Time out left</span>

          <div class="timeout-group">
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
    </div>

    <div class="center-content">

      <div style="background-color: #fff; border: 3px solid #666; width: 75%; height: 250px; padding: 15px; justify-content: center;">

        <button ondblclick="resetDetails()"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 10px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Reset Details
        </button>

        <button ondblclick="nextSet()" id="nextSet"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 10px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Next Set
        </button>

        <button ondblclick="endGame()"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 10px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          End Game
        </button>

      </div>

      <div style="background-color: #fff; border: 3px solid #666; width: 75%; height: 250px; padding: 15px; justify-content: center;">

        <button id="display1"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 9px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Display 1
        </button>

        <button id="display2"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 9px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Display 2
        </button>

        <button id="display3"
          class="serving-btn"
          style="padding: 10px 18px; font-size: 17px; cursor: pointer; background:#e5e7eb; border:1px solid #000000; border-radius:6px; margin-right:8px; margin-left: 9px; margin-bottom: 13px;"
          onmouseover="if(!this.dataset.active) this.style.background='#d4d3d3';"
          onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">
          Display 3
        </button>

      </div>
    </div>

    <div class="team-section">
      <div class="team-panel">

        <div class="team-picture" style="width: 300px; height: 200px; padding: 1px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
          <img src="images/alt.png" id="teamBImage" alt="Image not available" style="max-width: 100%; max-height: 100%; object-fit: contain;">
        </div>

        <!-- <div class="team-picture" style="width:300px; height:200px; overflow: hidden;">
          <img src="lion.png" id="teamBImage" alt="Image not available" style="width: 100%; height: 100%; object-fit: cover;">
        </div> -->

        <input id="teamBUpload" class="" type="file" accept="image/*">
        <label for="teamBUpload" class="insert-picture " style="margin-bottom: 10px;">Insert Picture</label>

        <input type="text" class="team-name" id="teamB_name" placeholder="Insert Team Name" style="width: 300px; padding: 12px 16px; text-align: center; font-size: 20px; font-weight: 600; border: 2px solid #d1d5db; border-radius: 10px; background: #f9fafb; outline: none; transition: all .2s ease;"
          onfocus="this.style.borderColor='#2563eb'; this.style.background='#ffffff';"
          onblur="this.style.borderColor='#d1d5db'; this.style.background='#f9fafb';" />

        <div class="sets-won">Score</div>
        <div class="score-display">
          <div class="score-controls">
            <button id="btnB_minus"
              style="padding: 8px 16px; font-size: 20px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px;"
              onmouseover="this.style.background='#d1d5db'"
              onmouseout="this.style.background='#e5e7eb'">
              -1
            </button>

            <div class="score-value" id="teamB_score">0</div>

            <button id="btnB_plus"
              style="padding: 8px 16px; font-size: 20px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-left:10px;"
              onmouseover="this.style.background='#d1d5db'"
              onmouseout="this.style.background='#e5e7eb'">
              +1
            </button>
          </div>
        </div>

        <div class="sets-won">SET WON</div>
        <div class="score-display">
          <div class="score-controls">
            <button id="btnB_minusSet"
              style="padding: 8px 16px; font-size: 20px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px;"
              onmouseover="this.style.background='#d1d5db'"
              onmouseout="this.style.background='#e5e7eb'">
              -1
            </button>

            <div class="score-value" id="teamB_scoreSet">0</div>

            <button id="btnB_plusSet"
              style="padding: 8px 16px; font-size: 20px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-left:10px;"
              onmouseover="this.style.background='#d1d5db'"
              onmouseout="this.style.background='#e5e7eb'">
              +1
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="myModal" class="modal-overlay">
    <div class="modal-panel">

      <!-- Close -->
      <span
        class="modal-close"
        title="Close"
        onclick="document.getElementById('myModal').style.display='none'">&times;</span>

      <!-- Title -->
      <div class="modal-title-wrap">
        <div class="modal-title">VOLLEYBALL MATCH RESULT</div>
      </div>

      <!-- Teams strip -->
      <div class="teams-strip">
        <div class="team-block">
          <div class="dot dot-a"></div>
          <div class="team-a-name" id="teamA_modal_name"></div>
        </div>

        <div class="team-block">
          <div class="team-b-name" id="teamB_modal_name"></div>
          <div class="dot dot-b"></div>
        </div>
      </div>

      <!-- Score grid -->
      <div class="score-head">
        <div class="left">Team A</div>
        <div class="mid">Set</div>
        <div class="right">Team B</div>
      </div>

      <div class="score-body" id="score-body-display">

      </div>

      <!-- Totals & Ratios -->
      <div class="total-wrap">
        <div class="total-card total-card--a">
          <div class="total-title-a" id="teamA_modal_name1"></div>
          <div class="total-line">
            <div class="total-points" id="teamA_total"></div>
            <div class="total-caption">Total Pts</div>
            <div class="total-ratio-a">Ratio: <span id="teamA_pointRatio"></span></div>
          </div>
        </div>

        <div class="total-card total-card--b">
          <div class="total-title-b" id="teamB_modal_name1"></div>
          <div class="total-line">
            <div class="total-points" id="teamB_total"></div>
            <div class="total-caption">Total Pts</div>
            <div class="total-ratio-b">Ratio: <span id="teamB_pointRatio"></span></div>
          </div>
        </div>
      </div>

    </div>
  </div>

  <script src="jquery.min.js"></script>

</body>

</html>

<script>
  $(document).ready(function() {
    var records = <?= json_encode($records) ?>;

    $('#teamAImage').attr('src', records['teamA_img'] ?? 'images/alt.png');
    $('#teamA_name').val(records['teamA_name']);
    $('#teamA_score').text(records['teamA_score']);
    $('#teamA_scoreSet').text(records['teamA_set']);

    $('#teamBImage').attr('src', records['teamB_img'] ?? 'images/alt.png');
    $('#teamB_name').val(records['teamB_name']);
    $('#teamB_score').text(records['teamB_score']);
    $('#teamB_scoreSet').text(records['teamB_set']);

    $('#timeoutA1').prop('checked', (records['teamA_timeout1'] == 1 ? true : false));
    $('#timeoutA2').prop('checked', (records['teamA_timeout2'] == 1 ? true : false));

    $('#timeoutB1').prop('checked', (records['teamB_timeout1'] == 1 ? true : false));
    $('#timeoutB2').prop('checked', (records['teamB_timeout2'] == 1 ? true : false));
    $('#setNumber').text(records['setNumber']);
  });

  $('#teamA_name').on('blur', function() {
    $.ajax({
      url: 'ajax.php?action=teamA_name',
      type: 'POST',
      data: {
        name: this.value
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  });

  $('#teamB_name').on('blur', function() {
    $.ajax({
      url: 'ajax.php?action=teamB_name',
      type: 'POST',
      data: {
        name: this.value
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  });

  function updateScoreA(score) {
    $.ajax({
      url: 'ajax.php?action=teamA_score',
      type: 'POST',
      data: {
        score: score
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  }

  $('#btnA_minus').on('click', function() {
    const score = $('#teamA_score');
    const current = parseInt(score.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    score.text(next);
    updateScoreA($('#teamA_score').text());
  });

  $('#btnA_plus').on('click', function() {
    const score = $('#teamA_score');
    const current = parseInt(score.text(), 10) || 0;
    const next = current + 1;
    score.text(next);
    updateScoreA($('#teamA_score').text());
  });

  function updateScoreB(score) {
    $.ajax({
      url: 'ajax.php?action=teamB_score',
      type: 'POST',
      data: {
        score: score
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  }

  $('#btnB_minus').on('click', function() {
    const score = $('#teamB_score');
    const current = parseInt(score.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    score.text(next);
    updateScoreB($('#teamB_score').text());
  });

  $('#btnB_plus').on('click', function() {
    const score = $('#teamB_score');
    const current = parseInt(score.text(), 10) || 0;
    const next = current + 1;
    score.text(next);
    updateScoreB($('#teamB_score').text());
  });

  function updateSetA(set) {
    $.ajax({
      url: 'ajax.php?action=teamA_set',
      type: 'POST',
      data: {
        set: set
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  }

  $('#btnA_minusSet').on('click', function() {
    const set = $('#teamA_scoreSet');
    const current = parseInt(set.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    set.text(next);
    updateSetA($('#teamA_scoreSet').text());
  });

  $('#btnA_plusSet').on('click', function() {
    const set = $('#teamA_scoreSet');
    const current = parseInt(set.text(), 10) || 0;
    const next = current + 1;
    set.text(next);
    updateSetA($('#teamA_scoreSet').text());
  });

  function updateSetB(set) {
    $.ajax({
      url: 'ajax.php?action=teamB_set',
      type: 'POST',
      data: {
        set: set
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  }

  $('#btnB_minusSet').on('click', function() {
    const set = $('#teamB_scoreSet');
    const current = parseInt(set.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    set.text(next);
    updateSetB($('#teamB_scoreSet').text());
  });

  $('#btnB_plusSet').on('click', function() {
    const set = $('#teamB_scoreSet');
    const current = parseInt(set.text(), 10) || 0;
    const next = current + 1;
    set.text(next);
    updateSetB($('#teamB_scoreSet').text());
  });

  function setActive(btn, active) {
    if (!btn) return;
    if (active) {
      btn.dataset.active = '1';
      btn.style.background = '#2563eb';
      btn.style.borderColor = '#1e40af';
      btn.style.color = '#fff';
      btn.style.boxShadow = '0 0 0 3px rgba(37,99,235,.25) inset';
    } else {
      btn.dataset.active = '';
      btn.style.background = '#e5e7eb';
      btn.style.borderColor = '#ccc';
      btn.style.color = '#000';
      btn.style.boxShadow = '';
    }
  }

  function deactivateOthers(exceptId) {
    ['servingA', 'servingB', 'servingNone'].forEach(id => {
      if (id !== exceptId) setActive(document.getElementById(id), false);
    });
  }

  $('#servingA').on('click', function() {
    const wasActive = this.dataset.active === '1';
    var isActive = 0;
    if (wasActive) {
      setActive(this, false);
      isActive = 0;
    } else {
      deactivateOthers('servingA');
      setActive(this, true);
      isActive = 1;
    }

    $.ajax({
      url: 'ajax.php?action=teamA_serve',
      type: 'POST',
      data: {
        serve: isActive
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });

  });

  $('#servingNone').on('click', function() {
    const wasActive = this.dataset.active === '1';
    if (wasActive) {
      setActive(this, false);
    } else {
      deactivateOthers('servingNone');
      setActive(this, true);
    }

    $.ajax({
      url: 'ajax.php?action=serveNone',
      type: 'POST',
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  });

  $('#servingB').on('click', function() {
    const wasActive = this.dataset.active === '1';
    var isActive = 0;
    if (wasActive) {
      setActive(this, false);
      isActive = 0;
    } else {
      deactivateOthers('servingB');
      setActive(this, true);
      isActive = 1;
    }

    $.ajax({
      url: 'ajax.php?action=teamB_serve',
      type: 'POST',
      data: {
        serve: isActive
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  });

  $('#teamAUpload').on('change', async function(e) {
    const file = e.target.files[0];
    if (file) {
      const formData = new FormData();
      formData.append('file', file);
      formData.append('team', 'A');

      try {
        const response = await fetch('upload.php', {
          method: 'POST',
          body: formData
        });
        const data = await response.json();
        if (data.success) {
          $('#teamAImage').attr('src', data.filePath);

          $.ajax({
            url: 'ajax.php?action=teamA_image',
            type: 'POST',
            data: {
              path: data.filePath
            },
            success: function(response) {},
            error: function(xhr, status, error) {
              console.error("Response Text: " + xhr.responseText);
            }
          });

        } else {
          console.error('Upload failed:', data.message);
        }
      } catch (error) {
        console.error('Upload error:', error);
      }
    }
  });

  $('#teamBUpload').on('change', async function(e) {
    const file = e.target.files[0];
    if (file) {
      const formData = new FormData();
      formData.append('file', file);
      formData.append('team', 'B');

      try {
        const response = await fetch('upload.php', {
          method: 'POST',
          body: formData
        });
        const data = await response.json();
        if (data.success) {
          $('#teamBImage').attr('src', data.filePath);

          $.ajax({
            url: 'ajax.php?action=teamB_image',
            type: 'POST',
            data: {
              path: data.filePath
            },
            success: function(response) {},
            error: function(xhr, status, error) {
              console.error("Response Text: " + xhr.responseText);
            }
          });

        } else {
          console.error('Upload failed:', data.message);
        }
      } catch (error) {
        console.error('Upload error:', error);
      }
    }
  });

  $('#timeoutA1').on('click', function() {
    var ischeck = 0;
    if (this.checked) {
      ischeck = 1;
    } else {
      ischeck = 0;
    }

    $.ajax({
      url: 'ajax.php?action=teamA_timeout1',
      type: 'POST',
      data: {
        checked: ischeck
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });

  });

  $('#timeoutA2').on('click', function() {
    var ischeck = 0;
    if (this.checked) {
      ischeck = 1;
    } else {
      ischeck = 0;
    }

    $.ajax({
      url: 'ajax.php?action=teamA_timeout2',
      type: 'POST',
      data: {
        checked: ischeck
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });

  });

  $('#timeoutB1').on('click', function() {
    var ischeck = 0;
    if (this.checked) {
      ischeck = 1;
    } else {
      ischeck = 0;
    }

    $.ajax({
      url: 'ajax.php?action=teamB_timeout1',
      type: 'POST',
      data: {
        checked: ischeck
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });

  });

  $('#timeoutB2').on('click', function() {
    var ischeck = 0;
    if (this.checked) {
      ischeck = 1;
    } else {
      ischeck = 0;
    }

    $.ajax({
      url: 'ajax.php?action=teamB_timeout2',
      type: 'POST',
      data: {
        checked: ischeck
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });

  });

  function updateTimer(time) {
    $.ajax({
      url: 'ajax.php?action=timer',
      type: 'POST',
      data: {
        time: time
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  }

  let interval;

  function formatHMS(totalSeconds) {
    const mins = Math.floor((totalSeconds % 3600) / 60);
    const secs = totalSeconds % 60;
    return (
      (mins < 10 ? "0" : "") + mins + ":" +
      (secs < 10 ? "0" : "") + secs
    );
  }

  function playBuzzer() {
    const audio = document.getElementById('buzzer_sound');
    audio.currentTime = 0;
    audio.play();
  }

  $('#fiveMinutes_btn').on('click', function() {
    clearInterval(interval);
    $('#time_display').text('05:00');
    const endTime = Date.now() + 300 * 1000;

    function tick() {
      const now = Date.now();
      const remainingMs = Math.max(0, endTime - now);
      const remainingSec = Math.floor(remainingMs / 1000);

      $('#time_display').text(formatHMS(remainingSec));
      updateTimer($('#time_display').text());

      if (remainingMs <= 0) {
        clearInterval(interval);
        playBuzzer();
        return;
      }
    }
    tick();
    interval = setInterval(tick, 250);
  });

  $('#oneMinute_btn').on('click', function() {
    clearInterval(interval);
    $('#time_display').text('01:00');
    const endTime = Date.now() + 60 * 1000;

    function tick() {
      const now = Date.now();
      const remainingMs = Math.max(0, endTime - now);
      const remainingSec = Math.floor(remainingMs / 1000);

      $('#time_display').text(formatHMS(remainingSec));
      updateTimer($('#time_display').text());

      if (remainingMs <= 0) {
        clearInterval(interval);
        playBuzzer();
        return;
      }
    }
    tick();
    interval = setInterval(tick, 250);
  });

  $('#thirtySeconds_btn').on('click', function() {
    clearInterval(interval);
    $('#time_display').text('00:30');
    const endTime = Date.now() + 30 * 1000;

    function tick() {
      const now = Date.now();
      const remainingMs = Math.max(0, endTime - now);
      const remainingSec = Math.floor(remainingMs / 1000);

      $('#time_display').text(formatHMS(remainingSec));
      updateTimer($('#time_display').text());

      if (remainingMs <= 0) {
        clearInterval(interval);
        playBuzzer();
        return;
      }
    }
    tick();
    interval = setInterval(tick, 250);
  });

  $('#reset_btn').on('click', function() {
    clearInterval(interval);
    $('#time_display').text('00:00');
    updateTimer($('#time_display').text());
  });

  $('#buzzer_btn').on('click', function() {
    playBuzzer();
  });


  function setActiveFeature(btn, active) {
    if (!btn) return;
    if (active) {
      btn.dataset.active = '1';
      btn.style.background = '#2563eb';
      btn.style.borderColor = '#1e40af';
      btn.style.color = '#fff';
      btn.style.boxShadow = '0 0 0 3px rgba(37,99,235,.25) inset';
    } else {
      btn.dataset.active = '';
      btn.style.background = '#e5e7eb';
      btn.style.borderColor = '#ccc';
      btn.style.color = '#000';
      btn.style.boxShadow = '';
    }
  }

  function deactivateOthersFeature(exceptId) {
    ['display1', 'display2', 'display3'].forEach(id => {
      if (id !== exceptId) setActive(document.getElementById(id), false);
    });
  }

  $('#display1').on('click', function() {
    const wasActive = this.dataset.active === '1';
    var isActive = 0;
    if (wasActive) {
      setActiveFeature(this, false);
      isActive = 0;
    } else {
      deactivateOthersFeature('display1');
      setActiveFeature(this, true);
      isActive = 1;
    }

    $.ajax({
      url: 'ajax.php?action=display1',
      type: 'POST',
      data: {
        display: isActive
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  });

  $('#display2').on('click', function() {
    const wasActive = this.dataset.active === '1';
    var isActive = 0;
    if (wasActive) {
      setActiveFeature(this, false);
      isActive = 0;
    } else {
      deactivateOthersFeature('display2');
      setActiveFeature(this, true);
      isActive = 1;
    }

    $.ajax({
      url: 'ajax.php?action=display2',
      type: 'POST',
      data: {
        display: isActive
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  });

  $('#display3').on('click', function() {
    const wasActive = this.dataset.active === '1';
    var isActive = 0;
    if (wasActive) {
      setActiveFeature(this, false);
      isActive = 0;
    } else {
      deactivateOthersFeature('display3');
      setActiveFeature(this, true);
      isActive = 1;
    }

    $.ajax({
      url: 'ajax.php?action=display3',
      type: 'POST',
      data: {
        display: isActive
      },
      success: function(response) {},
      error: function(xhr, status, error) {
        console.error("Response Text: " + xhr.responseText);
      }
    });
  });

  function resetDetails() {
    const answer = confirm("Are you sure you want to continue?");
    if (answer) {
      $.ajax({
        url: 'ajax.php?action=resetDetails',
        type: 'POST',
        success: function(response) {
          window.location.reload();
        },
        error: function(xhr, status, error) {
          console.error("Response Text: " + xhr.responseText);
        }
      });
    }
  }

  function nextSet() {
    const answer = confirm("Are you sure you want to continue?");
    if (answer) {
      var teamA_score = $('#teamA_score').text();
      var teamB_score = $('#teamB_score').text();
      var currentSet = parseInt($('#setNumber').text());

      $.ajax({
        url: 'ajax.php?action=nextSet',
        type: 'POST',
        data: {
          teamA_score: teamA_score,
          teamB_score: teamB_score,
          currentSet: currentSet
        },
        success: function(response) {
          $('#setNumber').text(currentSet + 1);
          $('#teamA_score').text(0);
          $('#teamB_score').text(0);
          if (currentSet + 1 == 5) $('#nextSet').attr('disabled', true);
        },
        error: function(xhr, status, error) {
          console.error("Response Text: " + xhr.responseText);
        }
      });
    }
  }

  function endGame() {
    const answer = confirm("Are you sure you want to continue?");

    if (answer) {
      var teamA_score = $('#teamA_score').text();
      var teamB_score = $('#teamB_score').text();
      var currentSet = parseInt($('#setNumber').text());

      $.ajax({
        url: 'ajax.php?action=saveRecord',
        type: 'POST',
        data: {
          teamA_score: teamA_score,
          teamB_score: teamB_score,
          currentSet: currentSet
        },
        success: function(response) {
          $.ajax({
            url: 'ajax.php?action=endGame',
            type: 'POST',
            dataType: 'json',
            success: function(response) {

              var elemetContent = '';
              for (let i = 1; i <= currentSet; i++) {
                elemetContent += `
                  <div class="set-row">
                    <span class="score-chip score-chip--a">${response['teamA_set' + i]}</span>
                    <div class="set-label">S${i}</div>
                    <span class="score-chip score-chip--b align-right">${response['teamB_set' + i]}</span>
                  </div>
                `;
              }
              $('#teamA_total').text(response['teamA_total']);
              $('#teamB_total').text(response['teamB_total']);

              $('#teamA_pointRatio').text(response['teamA_pointRatio']);
              $('#teamB_pointRatio').text(response['teamB_pointRatio']);

              $('#teamA_modal_name').text(response['teamA_name']);
              $('#teamB_modal_name').text(response['teamB_name']);

              $('#teamA_modal_name1').text(response['teamA_name']);
              $('#teamB_modal_name1').text(response['teamB_name']);


              $('#score-body-display').html(elemetContent);
              $('#myModal').css('display', 'flex');

            },
            error: function(xhr, status, error) {
              console.error("Response Text: " + xhr.responseText);
            }
          });
        },
        error: function(xhr, status, error) {
          console.error("Response Text: " + xhr.responseText);
        }
      });

    }
  }
</script>