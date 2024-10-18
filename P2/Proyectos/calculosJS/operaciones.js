function operacion() {
    let n1, n2, tipoope, res, resultado;
    
    n1 = parseFloat(document.getElementById("n1").value);
    n2 = parseFloat(document.getElementById("n2").value);
    tipoope = document.getElementById("ope").value.toLowerCase();

    //    switch (tipoope) {
//        case 'suma':
//            ope = n1 + n2;
//            res = `${n1} + ${n2} = ${ope}`;
//            break;
//        case 'resta':
//            ope = n1 - n2;
//            res = `${n1} - ${n2} = ${ope}`;
//            break;
//        case 'multiplicacion':
//            ope = n1 * n2;
//            res = `${n1} * ${n2} = ${ope}`;
//            break;
//        case 'division':
//            ope = n1 / n2;
//            res = `${n1} / ${n2} = ${ope}`;
//            break;
//    }
//version debugeada segun el profe

    if (!isNaN(n1) && !isNaN(n2)) {
        switch (tipoope) {
            case '+':
                res = n1 + n2;
                break;
            case '-':
                res = n1 - n2;
                break;
            case '*':
                res = n1 * n2;
                break;
            case '/':
                res = n1 / n2;
                break;
            default:
                res = "Operación no válida";
        }
        
        resultado = document.getElementById("resultado");
        resultado.innerHTML = `<h2>${n1} ${tipoope} ${n2} = ${res}</h2>`;
    } else {
        resultado = document.getElementById("resultado");
        resultado.innerHTML = `<h2>Error: Ingrese solo números válidos</h2>`;
    }
}
