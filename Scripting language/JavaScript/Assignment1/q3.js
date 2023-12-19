// -WS to calculate two operands, taking both operands and operator from user
let op1 = prompt("Enter first operand: ");
let op2 = prompt("Enter second operand: ");
let operator = prompt("Enter operator (+, -, *, /): ");

// changing into number 
op1 = Number(op1);
op2 = Number(op2);
let result = 0;

// Perform the calculation based on the operator
switch (operator) {
    case '+':
        result = op1 + op2;
        break;
    case '-':
        result = op1 - op2;
        break;
    case '*':
        result = op1 * op2;
        break;
    case '/':
        if (op2 !== 0) {
            result = op1 / op2;
        } else {
            document.write("Division by zero is not allowed.");
        }
        break;
    default:
        document.write("Invalid operator!<br>");
        break;
}

document.write("Result: " + result);