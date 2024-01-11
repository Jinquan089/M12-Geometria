var figura = document.getElementById('tipo_figura');
figura.addEventListener("change", () => {
    cargarParametros(figura.value);
});

function cargarParametros(tipoFigura) {
    var parametrosDiv = document.getElementById('parametros');

    var formdata = new FormData();
    formdata.append('tipo_figura', tipoFigura);

    var ajax = new XMLHttpRequest();
    ajax.open('POST', 'http://localhost/mp12/oob_geometria/php/proc_geo.php');

    ajax.onload = function(){
        if(ajax.status == 200){
            parametrosDiv.innerHTML = ajax.responseText;
        } else {
            parametrosDiv.innerText = "Error";
        }
    }
    ajax.send(formdata);
}

document.getElementById("figuraForm").addEventListener("submit", (event) => {
    event.preventDefault();
    var lado1 = document.getElementById("lado1").value;
    var lado2 = document.getElementById("lado2");
    
    if (lado2) {
        calgeo(figura.value, lado1, lado2.value)
    } else {
        calgeo(figura.value, lado1)
    }
    
});

function calgeo(figura, lado1, lado2) {
    var formData = new FormData();
    formData.append("tipo_figura", figura);
    formData.append("lado1", lado1);
    if (lado2) {
        formData.append("lado2", lado2);
    }

    var xhr = new XMLHttpRequest();
    xhr.open("POST", "http://localhost/mp12/oob_geometria/php/proc_calgeo.php");
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            // Actualiza el elemento con el resultado
            document.getElementById("resultado").innerHTML = xhr.responseText;
        }
    };
    // Envía los datos del formulario
    xhr.send(formData);

}
