function processNumber(num) {
    var value = document.getElementById("txtResults").value;
    value = value + num;
    document.getElementById("txtResults").value = value;
}

function processOp(op) {
    number1 = document.getElementById("txtResults").value;
    document.getElementById("txtNum1").innerHTML = number1 + op;

    document.getElementById("txtResults").value = "";
}

function processResult() {
    number2 = document.getElementById("txtResults").value;
    preValue = document.getElementById("txtNum1").innerHTML;
    document.getElementById("txtNum1").innerHTML = preValue + number2;
    resultStr = document.getElementById("txtNum1").innerHTML;
    result = eval(resultStr);
    document.getElementById("txtResults").value = result;

}