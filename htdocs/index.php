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
        <div id="GLOWBLINK_ELEMENT"></div>
    </div>
</div>

<div id="RIGHT">
    <form id="GENERATOR_FORM">
        <div class="form_input">
            <label for="INPUT_SPEED">Speed in ms</label>
            <input type="text" name="speed" id="INPUT_SPEED" placeholder="2000" minlength="3" maxlength="6">
        </div>

        <div class="form_input">
            <label for="INPUT_COLOR_ONE">Color One #</label>
            <input type="text" name="color1" id="INPUT_COLOR_ONE" placeholder="FFFFFF" minlength="3" maxlength="6">
        </div>

        <div class="form_input">
            <label for="INPUT_COLOR_TWO">Color Two #</label>
            <input type="text" name="color2" id="INPUT_COLOR_TWO" placeholder="BBBBBB" minlength="3" maxlength="6">
        </div>

        <div class="form_output">
            <label for="OUTPUT_CSS_CODE">Output CSS Code</label>
            <textarea id="OUTPUT_CSS_CODE" readonly="readonly"></textarea>
        </div>
        <div class="form_output">
            <label for="OUTPUT_HTML_CODE">Output HTML Code</label>
            <textarea id="OUTPUT_HTML_CODE" readonly="readonly"></textarea>
        </div>
        <div id="OUTPUT_MSG"></div>
    </form>
</div>
</body>
</html>