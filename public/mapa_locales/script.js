const traerDatos = () => {
    fetch("http://127.0.0.1:8000/mapa_locales/locales.json")
            .then(response => response.json())
            .then(jsondata => {
                const input = document.getElementById("ubi");
                console.log(input);
                const locales = jsondata.map((item) => {
                    const name = item.Name;
                    const address = item.Address;
                    if(name.indexOf(input.value) !== -1)
                        return item
                    else if(address.indexOf(input.value) !== -1)
                        return item
                    else    
                        return 0;
                }).filter(Boolean)
                document.getElementById("tabla").innerHTML = `<tr><td><input type="search" name="ubicacion"  class="form-control" id="ubi" onkeyup="traerDatos()" value="${input.value}" autofocus></td></tr>`;
                locales.map((local) => {
                    document.getElementById("tabla").innerHTML += `<tr><td id='address' onclick="darDato('${local.Address}')">${local.Address}</td></tr>`;
                })
            });
}
const darDato = (address) => {
    const input = document.getElementById("ubi");
    const direcciones = document.getElementById("tabla");
    document.getElementById("tabla").innerHTML = "";
    document.getElementById("tabla").innerHTML = `<tr><td><input type="search" name="ubicacion" id="ubi" onkeyup="traerDatos()"  class="form-control" value="${address}" autofocus></td></tr>`;
}