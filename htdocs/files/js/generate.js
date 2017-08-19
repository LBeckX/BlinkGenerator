var outputCSS = "";
var outputHtml = "";
var speedInMs = "1500";
var colorOne = "212121";
var colorTwo = "00FFB8";
var timingFunction = "linear";
var iterationCount="0";
var delayInMs = "0";
var inputElementSpeed,
    inputElementColorOne,
    inputElementColorTwo,
    inputElementIterationCount,
    inputElementTimingFunction,
    inputElementDelay,
    optionElementRestart,
    optionElementStartBreak,
    outputTextAreaCSS,
    outputTextAreaHTML,
    outputTextMSG,
    animationElement;

document.addEventListener("DOMContentLoaded", function () {
    inputElementSpeed=document.getElementById("INPUT_SPEED");
    inputElementColorOne=document.getElementById("INPUT_COLOR_ONE");
    inputElementColorTwo=document.getElementById("INPUT_COLOR_TWO");
    inputElementIterationCount=document.getElementById("INPUT_ITERATION_COUNT");
    inputElementTimingFunction=document.getElementById("INPUT_TIMING");
    inputElementDelay=document.getElementById("INPUT_DELAY");
    optionElementRestart=document.getElementById("RESTART_OPTION");
    optionElementStartBreak=document.getElementById("START_STOP_OPTION");
    outputTextAreaCSS=document.getElementById("OUTPUT_CSS_CODE");
    outputTextAreaHTML=document.getElementById("OUTPUT_HTML_CODE");
    outputTextMSG=document.getElementById("OUTPUT_MSG");
    animationElement=document.getElementById("GLOWBLINK_ELEMENT");


    var inputElements = document.getElementsByTagName("input");
    for (var i=0;i<inputElements.length;i++){
        inputElements[i].addEventListener("change",addModifiedInput);
    }

    var selectElements = document.getElementsByTagName("select");
    for (var j=0;j<selectElements.length;j++){
        selectElements[j].addEventListener("change",addModifiedInput);
    }

    optionElementRestart.addEventListener("click",restartAnimation);
    optionElementStartBreak.addEventListener("click",startStopAnimation);
    outputTextAreaCSS.addEventListener("click",copyToClipboard);
    outputTextAreaHTML.addEventListener("click",copyToClipboard);

    addModifiedInput();
}, false);


function addModifiedInput(){
    switch(this.name){
        case "speed":
            speedInMs = this.value;
            break;
        case "color1":
            colorOne=this.value;
            break;
        case "color2":
            colorTwo=this.value;
            break;
        case "count":
            iterationCount=this.value;
            break;
        case "timingFunction":
            timingFunction=this.value;
            break;
        case "delay":
            delayInMs=this.value;
            break;
    }
    updateFormInputs();
    upadteOutputText();

    return false;
}

function updateFormInputs() {
    inputElementSpeed.value = speedInMs;
    inputElementColorOne.value = colorOne;
    inputElementColorTwo.value = colorTwo;
    inputElementDelay.value = delayInMs;
    inputElementIterationCount.value = iterationCount;
}

function upadteOutputText() {
    var iterationCountText = "infinite";
    if(iterationCount !== "0"){
        iterationCountText=iterationCount;
    }


    outputCSS='' +
        '@-webkit-keyframes glowblink{\n' +
        '0%,100%{background-color: #'+colorOne+';}\n' +
        '50%{background-color: #'+colorTwo+';}\n' +
        '}\n' +

        '@-moz-keyframes glowblink{\n' +
        '0%,100%{background-color: #'+colorOne+';}\n' +
        '50%{background-color: #'+colorTwo+';}\n' +
        '}\n' +

        '@-o-keyframes glowblink{\n' +
        '0%,100%{background-color: #'+colorOne+';}\n' +
        '50%{background-color: #'+colorTwo+';}\n' +
        '}\n' +

        '@keyframes glowblink{\n' +
        '0%,100%{background-color: #'+colorOne+';}\n' +
        '50%{background-color: #'+colorTwo+';}\n' +
        '}\n' +

        '.animation{\n' +
        '-webkit-animation:glowblink '+(speedInMs/1000)+'s '+timingFunction+' '+(delayInMs/1000)+'s '+iterationCountText+' normal ;\n'+
        '-moz-animation:glowblink '+(speedInMs/1000)+'s '+timingFunction+' '+(delayInMs/1000)+'s '+iterationCountText+' normal ;\n'+
        '-o-animation:glowblink '+(speedInMs/1000)+'s '+timingFunction+' '+(delayInMs/1000)+'s '+iterationCountText+' normal ;\n'+
        'animation:glowblink '+(speedInMs/1000)+'s '+timingFunction+' '+(delayInMs/1000)+'s '+iterationCountText+' normal ;\n'+
        '}\n' +
        '/*GlowBlink Generator - (https://github.com/LBeckX/GlowBlinkGenerator)*/';

    outputHtml='<div id="GLOWBLINK_ELEMENT" class="animation" style="width:200px;height:400px;"></div>';

    document.getElementsByTagName('style')[0].innerHTML = outputCSS;

    outputTextAreaCSS.innerHTML = outputCSS;
    outputTextAreaHTML.innerHTML = outputHtml;

    textareaHeight(outputTextAreaCSS);
    textareaHeight(outputTextAreaHTML);

}

function copyToClipboard() {
    this.focus();
    this.select();

    try {
        var successful = document.execCommand('copy');
        var msg = successful ? 'successful' : 'unsuccessful';
        var textMSG = 'Copying to clipboard was ' + msg;
        addRemoveClass(outputTextMSG,"open",2000);
        outputTextMSG.innerText = textMSG;
    } catch (err) {
        outputTextMSG.innerText = 'Unable to copy';
    }
}

function textareaHeight(element) {
    element.style.height = "1px";
    element.style.height = (25+element.scrollHeight)+"px";
}

function restartAnimation() {
    removeClass(animationElement,"animation");
    setTimeout(function () {
        addClass(animationElement,"animation");
    },200);
}

function startStopAnimation() {
    if(hasClass(animationElement,'animation')){
        removeClass(animationElement,'animation');
    }
    else {
        addClass(animationElement,'animation');
    }
}

function hasClass(element,className) {
    if (animationElement.classList.contains('animation')) {
        return true;
    }
}

function removeClass(element,className) {
    element.className = element.className.replace(className,'');
    element.className = element.className.replace(" "+className,'');
}

function addClass(element,className) {
    removeClass(element,className);
    className = ' '+className;
    element.className = element.className + className;
}

function addRemoveClass(element,className,timeInMs) {
    addClass(element,className);
    setTimeout(function () {
        removeClass(element,className);
    },timeInMs)
}
