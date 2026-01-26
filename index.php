<?php ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volleyball Scoring Board</title>
  <link rel="icon" href="images/volleyball.png">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="scoreboard-container">
    <div class="team-section">
      <div class="team-panel">

        <div class="team-picture" style="width: 300px; height: 200px; padding: 1px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
          <img src="images/tiger.png" id="teamAImage" alt="Image not available" style="max-width: 100%; max-height: 100%; object-fit: contain;">
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
        <div class="serving-title">SERVING</div>
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
            style="width: 200px; padding: 10px 18px; font-size: 40px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="if(!this.dataset.active) this.style.background='#d1d5db';"
            onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">None</button>

          <button
            id="servingB"
            class="serving-btn"
            style="padding: 10px 18px; font-size: 40px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="if(!this.dataset.active) this.style.background='#d1d5db';"
            onmouseout="if(!this.dataset.active) this.style.background='#e5e7eb';">&gt;</button>

        </div>
      </div>

      <div class="timeout-section">
        <div class="timeout-label" role="group" aria-label="Timeout left">
          <div class="timeout-group">
            <label class="timeout-option">
              <input type="checkbox" name="timeoutLeft1" value="1" id="timeout1">
              <span class="timeout-box" aria-hidden="true"></span>
            </label>

            <label class="timeout-option">
              <input type="checkbox" name="timeoutLeft2" value="2" id="timeout2">
              <span class="timeout-box" aria-hidden="true"></span>
            </label>
          </div>

          <span class="timeout-text">Time out left</span>

          <div class="timeout-group">
            <label class="timeout-option">
              <input type="checkbox" name="timeoutRight1" value="3" id="timeout3">
              <span class="timeout-box" aria-hidden="true"></span>
            </label>

            <label class="timeout-option">
              <input type="checkbox" name="timeoutRight2" value="4" id="timeout4">
              <span class="timeout-box" aria-hidden="true"></span>
            </label>
          </div>
        </div>
      </div>
    </div>

    <div class="team-section">
      <div class="team-panel">

        <div class="team-picture" style="width: 300px; height: 200px; padding: 1px; overflow: hidden; display: flex; align-items: center; justify-content: center;">
          <img src="images/lion.png" id="teamBImage" alt="Image not available" style="max-width: 100%; max-height: 100%; object-fit: contain;">
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

  <script src="jquery.min.js"></script>

</body>

</html>

<script>
  $('#teamA_name').on('blur', function() {
    console.log(this.value);
  });

  $('#teamB_name').on('blur', function() {
    console.log(this.value);
  });

  $('#btnA_minus').on('click', function() {
    const $score = $('#teamA_score');
    const current = parseInt($score.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    $score.text(next);
  });

  $('#btnA_plus').on('click', function() {
    const $score = $('#teamA_score');
    const current = parseInt($score.text(), 10) || 0;
    const next = current + 1;
    $score.text(next);
  });

  $('#btnB_minus').on('click', function() {
    const $score = $('#teamB_score');
    const current = parseInt($score.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    $score.text(next);
  });

  $('#btnB_plus').on('click', function() {
    const $score = $('#teamB_score');
    const current = parseInt($score.text(), 10) || 0;
    const next = current + 1;
    $score.text(next);
  });

  $('#btnA_minusSet').on('click', function() {
    const $set = $('#teamA_scoreSet');
    const current = parseInt($set.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    $set.text(next);
  });

  $('#btnA_plusSet').on('click', function() {
    const $set = $('#teamA_scoreSet');
    const current = parseInt($set.text(), 10) || 0;
    const next = current + 1;
    $set.text(next);
  });

  $('#btnB_minusSet').on('click', function() {
    const $set = $('#teamB_scoreSet');
    const current = parseInt($set.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    $set.text(next);
  });

  $('#btnB_plusSet').on('click', function() {
    const $set = $('#teamB_scoreSet');
    const current = parseInt($set.text(), 10) || 0;
    const next = current + 1;
    $set.text(next);
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
    if (wasActive) {
      setActive(this, false);
    } else {
      deactivateOthers('servingA');
      setActive(this, true);
    }
  });

  $('#servingNone').on('click', function() {
    const wasActive = this.dataset.active === '1';
    if (wasActive) {
      setActive(this, false);
    } else {
      deactivateOthers('servingNone');
      setActive(this, true);
    }
  });

  $('#servingB').on('click', function() {
    const wasActive = this.dataset.active === '1';
    if (wasActive) {
      setActive(this, false);
    } else {
      deactivateOthers('servingB');
      setActive(this, true);
    }
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
          console.log('Team A image path:', data.filePath);
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
          console.log('Team B image path:', data.filePath);
        } else {
          console.error('Upload failed:', data.message);
        }
      } catch (error) {
        console.error('Upload error:', error);
      }
    }
  });

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
  });

  $('#buzzer_btn').on('click', function() {
    playBuzzer();
  });
</script>