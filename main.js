function validateQuestionMinimal() {
    
    let inputElement = document.getElementById("text-input-field");
    let value = inputElement.value;

    if (!value) {
       
        setWarning("Bitte gib einen Wert ein.");
        return false;
    }
}

function validateQuestion(inputID, radioName) {
    
    
    let inputElement = document.getElementById(inputID);

    if (inputElement.type === 'range') {
        
        if (!sliderHasChanged()) {
            setWarning("Please select your answer");
            return false;
        }
    }
    else if (inputElement.type === 'radio') {
        let radioButtons = document.getElementsByName(radioName);
        let selectedValue;

        for (let i = 0; i < radioButtons.length; i++) {
            if (radioButtons[i].checked) {
                selectedValue = radioButtons[i].value;
                break;
            }
        }

        if (!selectedValue) {
            setWarning("Please select a valid option");
            return false;
        }
    }
    else {
        // Prüfe den 'generellen' Fall für Text-, Zahlenfelder etc.
        let value = inputElement.value;

        // "Minimal": Prüfe ob ein minimaler Wert gesetzt wurde.
        if (!value) {
            // Früher mit alert("Bla bla ...");
            setWarning("Please select a number");
            return false;
        }
    }
}

function sliderChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");
    hiddenInputElement.value = "1";
}

function sliderHasChanged() {
    let hiddenInputElement = document.getElementById("range-slider-changed");

    if (hiddenInputElement.value == "1") return true;
    else return false;
}

// TOOLS -------------------------------------------------------------------

function setWarning(text) {
    let warningElement = document.getElementById("validation-warning");
    warningElement.innerText = text;
}