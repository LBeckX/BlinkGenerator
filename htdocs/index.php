<!DOCTYPE html>
<html>
<head>
    <title>GlowBlink Generator</title>
    <meta name="description" content="Erstelle Dir automatisch einen Blinkeffekt (CSS)">
    <meta charset="utf-8">
    <meta name="author" content="Lukas Beck <lb@1601.com>">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i" rel="stylesheet">
    <link rel="stylesheet" href="files/css/design.css">
    <script src="files/js/generate.js" type="text/javascript"></script>
    <style></style>
    <link rel="shortcut icon" href="files/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="files/favicon/favicon.ico" type="image/x-icon">
</head>
<body>
<div id="LEFT">
    <div id="HEADER"><h1>GlowBlink Generator</h1></div>
    <div id="GLOWBLINK_BOX">
        <div id="GLOWBLINK_ELEMENT" class="animation"></div>
    </div>

    <div class="option_present">
        <button id="RESTART_OPTION">Restart</button>
        <button id="START_STOP_OPTION">Start / Stop</button>
    </div>
</div>

<div id="RIGHT">
    <form id="GENERATOR_FORM">
        <div class="form_input">
            <label for="INPUT_SPEED">Speed in ms</label>
            <input type="text" name="speed" id="INPUT_SPEED" placeholder="2000" minlength="3" maxlength="6">
        </div>

        <div class="form_input">
            <label for="INPUT_COLOR_ONE">Color one #</label>
            <input type="text" name="color1" id="INPUT_COLOR_ONE" placeholder="FFFFFF" minlength="3" maxlength="6">
        </div>

        <div class="form_input">
            <label for="INPUT_COLOR_TWO">Color two #</label>
            <input type="text" name="color2" id="INPUT_COLOR_TWO" placeholder="BBBBBB" minlength="3" maxlength="6">
        </div>

        <div class="form_input">
            <label for="INPUT_ITERATION_COUNT">Iteration count (type 0 for infinite)</label>
            <input type="text" name="count" id="INPUT_ITERATION_COUNT" placeholder="0" minlength="1" maxlength="6">
        </div>

        <div class="form_input">
            <label for="INPUT_TIMING">Timing function</label>
            <select id="INPUT_TIMING" name="timingFunction" size="1">
                <option value="linear">linear</option>
                <option value="ease">ease</option>
                <option value="ease-in">ease-in</option>
                <option value="ease-out">ease-out</option>
                <option value="ease-in-out">ease-in-out</option>
            </select>
        </div>

        <div class="form_input">
            <label for="INPUT_DELAY">Delay in ms</label>
            <input type="text" name="delay" id="INPUT_DELAY" placeholder="500" minlength="1" maxlength="6">
        </div>

        <div class="form_output">
            <label for="OUTPUT_CSS_CODE">Output CSS Code</label>
            <textarea id="OUTPUT_CSS_CODE" readonly="readonly"></textarea>
        </div>
        <div class="form_output">
            <label for="OUTPUT_HTML_CODE">Output HTML Code</label>
            <textarea id="OUTPUT_HTML_CODE" readonly="readonly"></textarea>
        </div>
    </form>
</div>
<div id="OUTPUT_MSG"></div>
</body>
</html>