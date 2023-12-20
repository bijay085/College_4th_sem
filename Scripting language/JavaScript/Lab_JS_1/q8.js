// Function to perform addition
function add() {
    let operand1 = Number(document.getElementById('operand1').value);
    let operand2 = Number(document.getElementById('operand2').value);
    let result = operand1 + operand2;
    document.getElementById('result').value = result;
}

// Function to perform subtraction
function sub() {
    let operand1 = Number(document.getElementById('operand1').value);
    let operand2 = Number(document.getElementById('operand2').value);
    let result = operand1 - operand2;
    document.getElementById('result').value = result;
}

// Function to perform multiplication
function mul() {
    let operand1 = Number(document.getElementById('operand1').value);
    let operand2 = Number(document.getElementById('operand2').value);
    let result = operand1 * operand2;
    document.getElementById('result').value = result;
}

// Function to perform division
function div() {
    let operand1 = Number(document.getElementById('operand1').value);
    let operand2 = Number(document.getElementById('operand2').value);
    if (operand2 !== 0) {
        let result = operand1 / operand2;
        document.getElementById('result').value = result;
    } else {
        document.getElementById('result').value = "Cannot divide by zero";
    }
}

// Function to perform modulus
function mod() {
    let operand1 = Number(document.getElementById('operand1').value);
    let operand2 = Number(document.getElementById('operand2').value);
    if (operand2 !== 0) {
        let result = operand1 % operand2;
        document.getElementById('result').value = result;
    } else {
        document.getElementById('result').value = "Cannot perform modulus with zero";
    }
}

// Adding click event listeners to the buttons
document.getElementById('addBtn').addEventListener('click', add);
document.getElementById('subBtn').addEventListener('click', sub);
document.getElementById('mulBtn').addEventListener('click', mul);
document.getElementById('divBtn').addEventListener('click', div);
document.getElementById('modBtn').addEventListener('click', mod);
