function operacion() {
    let n1,n2,tipoope,res,resultado;
    n1 = parseFloat(document.getElementById("n1").value);
    n2 = parseFloat(document.getElementById("n2").value);
    tipoope = document.getElementById("ope").value.toLowerCase();
    res;

    
    

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
    
    //if (isNumber(n1) && isNumber(n2)){

        switch (tipoope) {
            case '+':
                res = n1 + n2 ;
                break;
            case '-':
                res = n1 - n2 ;
                break;
            case '*':
                res = n1 * n2 ;
                break;
            case '/':
                res = n1 / n2 ;
                break;
        }
        resultado = document.getElementById("resultado").innerHTML = `<h2>${n1} ${tipoope} ${n2} = ${res}</h2>`;
        //resultado.innerHTML = `<h2>${res}</h2>`;
    //}
    //else
     //   alert("Ingrese solo numeros por favor ...");
    
}

//function isNumber(n){
//    return isNaN(parseInt(n)&& isFinite(n));
//}