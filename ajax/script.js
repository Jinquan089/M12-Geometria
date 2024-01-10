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
