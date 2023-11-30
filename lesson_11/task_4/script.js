function calculateTrigonometry() {
    var angleInput = document.getElementById('angle');
    var angleValue = parseFloat(angleInput.value);

    if (isNaN(angleValue) || angleValue < 0 || angleValue > 90) {
        alert("Пожалуйста, введите корректное число для угла в диапазоне от 0 до 90 градусов.");
        return;
    }

    var trigFunction = document.getElementById('trigFunction').value;
    var trigFunctionName;

    switch (trigFunction) {
        case 'sin':
            trigFunctionName = 'sin';
            break;
        case 'cos':
            trigFunctionName = 'cos';
            break;
        case 'tan':
            trigFunctionName = 'tan';
            break;
        default:
            trigFunctionName = 'Неизвестная функция';
            break;
    }

    var result = Math[trigFunction](angleValue * (Math.PI / 180));

    var resultDiv = document.getElementById('result');
    resultDiv.innerHTML = "<p>" + trigFunctionName + "(" + angleValue + "°) = " + result.toFixed(4) + "</p>";
}
