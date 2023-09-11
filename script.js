

    let operation = document.getElementById('operation');
    let num2 = document.getElementById('num2');

operation.addEventListener('change', () => {
    if(operation.value == "octal" ||operation.value == 'binary' || operation.value ==  'hexadecimal') {
        num2.style.display = 'none';
        document.getElementById('num2').required = false;
    }else {
        num2.style.display = 'block';
        document.getElementById('num2').required = true;
    }
})


window.onload = () => {
    if(operation.value == "octal" ||operation.value == 'binary' || operation.value ==  'hexadecimal') {
        num2.style.display = 'none';
        document.getElementById('num2').required = false;
    }else {
        num2.style.display = 'block';
        document.getElementById('num2').required = true;
    }
}

