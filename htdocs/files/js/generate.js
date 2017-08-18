var outputCSS = "";
var outputHtml = "";
var speedInMs = "2000";
var colorOne = "212121";
var colorTwo = "00FFB8";
var inputElementSpeed,
    inputElementColorOne,
    inputElementColorTwo,
    outputTextAreaCSS,
    outputTextAreaHTML,
    outputTextMSG;

document.addEventListener("DOMContentLoaded", function () {
    inputElementSpeed=document.getElementById("INPUT_SPEED");
    inputElementColorOne=document.getElementById("INPUT_COLOR_ONE");
    inputElementColorTwo=document.getElementById("INPUT_COLOR_TWO");
    outputTextAreaCSS=document.getElementById("OUTPUT_CSS_CODE");
    outputTextAreaHTML=document.getElementById("OUTPUT_HTML_CODE");
    outputTextMSG = document.getElementById("OUTPUT_MSG");

    var inputElements = document.getElementsByTagName("input");
    for (var i=0;i<inputElements.length;i++){
        inputElements[i].addEventListener("change",addModifiedInput);
    }

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
    }
    updateFormInputs();
    upadteOutputText();

    return false;
}

function updateFormInputs() {
    inputElementSpeed.value = speedInMs;
    inputElementColorOne.value = colorOne;
    inputElementColorTwo.value = colorTwo;
}

function upadteOutputText() {
    outputCSS = '@-webkit-keyframes glowblink{\n' +
        '0%,100%{background-color: #'+colorOne+';}\n' +
        '50%{background-color: #'+colorTwo+';}\n' +
        '}\n' +
        '@keyframes glowblink{\n' +
        '0%,100%{background-color: #'+colorOne+';}\n' +
        '50%{background-color: #'+colorTwo+';}\n' +
        '}\n' +
        '#GLOWBLINK_ELEMENT{\n' +
        'animation-name:glowblink;\n' +
        'animation-duration:'+(speedInMs/1000)+'s;\n' +
        'animation-iteration-count:infinite;"\n' +
        '}\n';

    outputHtml = '' +
        '<div id="GLOWBLINK_ELEMENT">' +
        '</div>';

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
        outputTextMSG.innerText = 'Oops, unable to copy';
    }
}


function addClass(element,className) {
    var a = element;
    className = ' '+className;
    element.className = element.className.replace( className, '' );
    element.className = element.className + className;
}

function addRemoveClass(element,className,timeInMs) {
    addClass(element,className);
    setTimeout(function () {
        element.className = element.className.replace(className,'');
    },timeInMs)
}

function textareaHeight(element) {
    element.style.height = "1px";
    element.style.height = (25+element.scrollHeight)+"px";
}