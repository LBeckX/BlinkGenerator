<!DOCTYPE html>
<html lang="en">
<head>
    <title>BlinkGenerator123 - blinkgenerator.webitfactory.com/</title>
    <meta name="description" content="Create your own blink-effect with keyframes in CSS3 - Checkout blinkgenerator.webitfactory.com">
    <meta charset="utf-8">
    <meta name="author" content="Lukas Beck <lb(at)1601.com>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="files/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="files/favicon/favicon.ico" type="image/x-icon">
    <meta name="robots" content="index,follow" />
    <meta name="language" content="en">
    <meta name="keywords" content="CSS3,css,keyframes,blink,glow,effect,en,de,github,lbeckx,javascript,html5,html">
    <meta property="og:title" content="BlinkGenerator123 - blinkgenerator.webitfactory.com/" />
    <meta property="og:url" content="//blinkgenerator.webitfactory.com/" />
    <meta property="og:image" content="/files/img/blink_shot.JPG" />
    <meta property="og:description" content="Create your own blink-effect with keyframes in CSS3 - Checkout blinkgenerator.webitfactory.com" />
    <meta property="og:type"   content="website" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i" rel="stylesheet">
    <link rel="stylesheet" href="files/css/design.css">
    <script type="text/javascript" LANGUAGE="JavaScript">
        window.onbeforeunload = function(e) {
            return 'Are you sure you want to close this site?';
        };
    </script>
    <style></style>
</head>
<body>
<div id="LEFT" class="infoBoxClose">
    <div id="HEADER"><h1>BlinkGenerator123</h1></div>
    <div id="GLOWBLINK_BOX">
        <div id="GLOWBLINK_ELEMENT" class="animation"><noscript>Your browser does not support JavaScript! Please enable it...</noscript></div>
    </div>

    <div class="option_present">
        <button id="RESTART_OPTION">Restart</button>
        <button id="START_STOP_OPTION">Start / Stop</button>
    </div>
</div>

<div id="RIGHT" class="infoBoxClose">
    <form id="GENERATOR_FORM">
        <div class="form_input">
            <label for="INPUT_SPEED">Speed in ms</label>
            <input type="text" name="speed" id="INPUT_SPEED" placeholder="2000" minlength="3" maxlength="6">
        </div>

        <div class="form_input">
            <label for="INPUT_COLOR_ONE">Color one in hex (use <a target="_blank" href="//htmlcolorcodes.com/color-picker/">ColorPicker</a>)</label>
            <input type="text" name="color1" id="INPUT_COLOR_ONE" placeholder="FFFFFF" minlength="3" maxlength="6">
        </div>

        <div class="form_input">
            <label for="INPUT_COLOR_TWO">Color two in hex (use <a target="_blank" href="//htmlcolorcodes.com/color-picker/">ColorPicker</a>)</label>
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
<button id="OPEN_INFO">Informations</button>
<div id="INFO_BOX">
    <div class="closeButton infoBoxClose">X</div>
    <div class="head">You can find me here:</div>
    <div class="mid">
        <div class="fb">
            <a target="_blank" href="//www.facebook.com/lukas.beck36"></a>
        </div>
        <div class="github">
            <a target="_blank" href="//github.com/LBeckX"></a>
        </div>
        <div class="homepage">
            <a target="_blank" href="//www.unitgreen.com"></a>
        </div>
    </div>
    <div class="footer">
        Contact: <a href="&#109;&#097;&#105;&#108;&#116;&#111;&#058;&#108;&#098;&#064;&#117;&#110;&#105;&#116;&#103;&#114;&#101;&#101;&#110;&#046;&#099;&#111;&#109;">lb(at)unitgreen.com</a>
        <br>
        <a href="//www.unitgreen.com/meta/impressum.php">Impressum / Datenschutz</a>
    </div>
</div>
</body>
<script src="files/js/generate.js" type="text/javascript"></script>
</html>