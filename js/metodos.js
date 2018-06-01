function numeros(e){
   var tecla = e.keyCode;

    if (tecla==8 || tecla==9 || tecla==13){
        return true;
    }
        
    var patron =/[0-9]/;
    var tecla_final = String.fromCharCode(tecla);
    return patron.test(tecla_final);
}

function soloLetras(e){
   key = e.keyCode || e.which;
   tecla = String.fromCharCode(key).toLowerCase();
   letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
   especiales = "8-37-39-46";

   tecla_especial = false
   for(var i in especiales){
        if(key == especiales[i]){
            tecla_especial = true;
            break;
        }
    }

    if(letras.indexOf(tecla)==-1 && !tecla_especial){
        return false;
    }
}


function validacion(){

    if (parseInt(document.getElementById("c1").value)>parseInt(document.getElementById("s1").value)) {
        document.getElementById("c1").focus();
        document.getElementById("c1")="Ingrese número menor o igual al stock";
    }

    if (parseInt(document.getElementById("c2").value)>parseInt(document.getElementById("s2").value)) {
        document.getElementById("c2").focus();
    }

    if (parseInt(document.getElementById("c3").value)>parseInt(document.getElementById("s3").value)) {
        document.getElementById("c3").focus();
    }        

    if (parseInt(document.getElementById("c4").value)>parseInt(document.getElementById("s4").value)) {
        document.getElementById("c4").focus();
    }

    if (parseInt(document.getElementById("c5").value)>parseInt(document.getElementById("s5").value)) {
        document.getElementById("c5").focus();
    }  

    if (parseInt(document.getElementById("c6").value)>parseInt(document.getElementById("s6").value)) {
        document.getElementById("c6").focus();
    }  

    if (parseInt(document.getElementById("c7").value)>parseInt(document.getElementById("s7").value)) {
        document.getElementById("c7").focus();
    }  

    if (parseInt(document.getElementById("c8").value)>parseInt(document.getElementById("s8").value)) {
        document.getElementById("c8").focus();
    }

    if (parseInt(document.getElementById("c9").value)>parseInt(document.getElementById("s9").value)) {
        document.getElementById("c9").focus();
    }

}

function tabla(){
    importarValores();
    aArray();
//  1.  Crear elemento
tabla=document.getElementById("tablaValores");


for (j=0; j<producto.length;j++){
    suma = suma + iva[j];
}

for (i=0;i<producto.length;i++){
        

        var fila = document.createElement("tr");
        var col1 = document.createElement("td");
        var col2 = document.createElement("td");
        var col3 = document.createElement("td");
        var col4 = document.createElement("td");
        var col5 = document.createElement("td");
        var col6 = document.createElement("td");
        var col7 = document.createElement("td");
        var col8 = document.createElement("td");

        //  2. Crear un contenido para el elelemto

        var cont1 = document.createTextNode(i+1)
        var cont2 = document.createTextNode(producto[i]);
        var cont3 = document.createTextNode(cantidad[i]);
        var cont4 = document.createTextNode(precio[i]);
        var cont5 = document.createTextNode(subTotal[i]);
        var cont6 = document.createTextNode(transporte[i]);
        var cont7 = document.createTextNode(iva[i]);
        var cont8 = document.createTextNode(suma);

        // 3. Adicionar el contenido al elemento

        col1.appendChild(cont1);
        col2.appendChild(cont2);
        col3.appendChild(cont3);
        col4.appendChild(cont4);
        col5.appendChild(cont5);
        col6.appendChild(cont6);
        col7.appendChild(cont7);
        col8.appendChild(cont8);

        fila.appendChild(col1);
        fila.appendChild(col2);
        fila.appendChild(col3);
        fila.appendChild(col4);
        fila.appendChild(col5);
        fila.appendChild(col6);
        fila.appendChild(col7);
        fila.appendChild(col8);     
        tabla.appendChild(fila);
    }
}