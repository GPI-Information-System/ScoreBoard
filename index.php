<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="scoreboard-container">
    <div class="team-section">
      <div class="team-panel">
        <div class="team-picture">Insert picture</div>

        <input id="teamAUpload" type="file" accept="image/*">
        <label for="teamAUpload" class="insert-picture" style="margin-bottom: 10px;">Insert Picture</label>

        <input type="text" class="team-name" placeholder="Insert Team Name" style="width: 300px; padding: 12px 16px; text-align: center; font-size: 20px; font-weight: 600; border: 2px solid #d1d5db; border-radius: 10px; background: #f9fafb; outline: none; transition: all .2s ease;"
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

      <button
        style="padding: 20px 60px; font-size: 32px; font-weight: 800; background: #dc2626; color: white; border: none; border-radius: 50px; cursor: pointer; box-shadow: 0 6px 0 #b91c1c; transition: 0.15s;"
        onmousedown="this.style.transform='scale(0.95)'"
        onmouseup="this.style.transform='scale(1)'">
        BUZZER
      </button>

      <div class="timer-panel">
        <div class="timer-display">0:00</div>
        <div class="timer-buttons">

          <button
            style="padding: 10px 18px; font-size: 16px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="this.style.background='#d1d5db'"
            onmouseout="this.style.background='#e5e7eb'">
            Practice 5 Minutes
          </button>

          <button
            style="padding: 10px 18px; font-size: 16px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="this.style.background='#d1d5db'"
            onmouseout="this.style.background='#e5e7eb'">
            30 Seconds
          </button>

          <button
            style="padding: 10px 18px; font-size: 16px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px;"
            onmouseover="this.style.background='#d1d5db'"
            onmouseout="this.style.background='#e5e7eb'">
            1 Minute
          </button>

        </div>
        <button class="reset-button" style="padding: 10px 18px; font-size: 16px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
          onmouseover="this.style.background='#d1d5db'"
          onmouseout="this.style.background='#e5e7eb'">RESET</button>
      </div>

      <div class="serving-section">
        <div class="serving-title">SERVING</div>
        <div class="serving-controls">

          <button style="padding: 10px 18px; font-size: 40px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="this.style.background='#d1d5db'"
            onmouseout="this.style.background='#e5e7eb'">&lt;</button>

          <button style="width: 200px; padding: 10px 18px; font-size: 40px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="this.style.background='#d1d5db'"
            onmouseout="this.style.background='#e5e7eb'">None</button>

          <button style="padding: 10px 18px; font-size: 40px; cursor: pointer; background:#e5e7eb; border:1px solid #ccc; border-radius:6px; margin-right:8px;"
            onmouseover="this.style.background='#d1d5db'"
            onmouseout="this.style.background='#e5e7eb'">&gt;</button>

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
        <div class="team-picture">Insert picture</div>

        <input id="teamAUpload" class="" type="file" accept="image/*">
        <label for="teamAUpload" class="insert-picture " style="margin-bottom: 10px;">Insert Picture</label>

        <input type="text" class="team-name" placeholder="Insert Team Name" style="width: 300px; padding: 12px 16px; text-align: center; font-size: 20px; font-weight: 600; border: 2px solid #d1d5db; border-radius: 10px; background: #f9fafb; outline: none; transition: all .2s ease;"
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
  $('#btnA_minus').on('click', function() {
    const $scoreEl = $('#teamA_score');
    const current = parseInt($scoreEl.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    $scoreEl.text(next);
  });

  $('#btnA_plus').on('click', function() {
    const $scoreEl = $('#teamA_score');
    const current = parseInt($scoreEl.text(), 10) || 0;
    const next = current + 1;
    $scoreEl.text(next);
  });

  $('#btnB_minus').on('click', function() {
    const $scoreEl = $('#teamB_score');
    const current = parseInt($scoreEl.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    $scoreEl.text(next);
  });

  $('#btnB_plus').on('click', function() {
    const $scoreEl = $('#teamB_score');
    const current = parseInt($scoreEl.text(), 10) || 0;
    const next = current + 1;
    $scoreEl.text(next);
  });

  $('#btnA_minusSet').on('click', function() {
    const $scoreEl = $('#teamA_scoreSet');
    const current = parseInt($scoreEl.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    $scoreEl.text(next);
  });

  $('#btnA_plusSet').on('click', function() {
    const $scoreEl = $('#teamA_scoreSet');
    const current = parseInt($scoreEl.text(), 10) || 0;
    const next = current + 1;
    $scoreEl.text(next);
  });

  $('#btnB_minusSet').on('click', function() {
    const $scoreEl = $('#teamB_scoreSet');
    const current = parseInt($scoreEl.text(), 10) || 0;
    const next = Math.max(0, current - 1);
    $scoreEl.text(next);
  });

  $('#btnB_plusSet').on('click', function() {
    const $scoreEl = $('#teamB_scoreSet');
    const current = parseInt($scoreEl.text(), 10) || 0;
    const next = current + 1;
    $scoreEl.text(next);
  });
</script>