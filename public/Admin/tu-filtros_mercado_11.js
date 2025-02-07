async function cargarJson(url) {
    const response = await fetch(url);
    if (!response.ok) {
        throw new Error(`Error al cargar ${url}: ${response.statusText}`);
    }
    return await response.json();
}

async function actualizarTablas(segmento) {
    try {
        // Cargar los datos de cada archivo JSON
        const grupoCasaPromedioJson = await cargarJson('../../resources/Ciudades/Tulancingo/assets/tablas/grupo_casa_promedio.json');
        const grupoCasaMedianaJson = await cargarJson('../resources/Ciudades/Tulancingo/assets/tablas/grupo_casa_mediana.json');
        const grupoPrecioMercadoJson = await cargarJson('../resources/Ciudades/Tulancingo/assets/tablas/grupo_precio_mercado.json');
        const grupoMetrosTerrenoJson = await cargarJson('/path/to/grupo_metros_terreno.json');
        const grupoMetrosConstruidosJson = await cargarJson('/path/to/grupo_metros_construidos.json');
        const grupoPrecioMetrosConstruidosJson = await cargarJson('/path/to/grupo_precio_metros_construidos.json');

        // Obtener los datos específicos del segmento
        const datosPromedios = grupoCasaPromedioJson[segmento];
        const datosMediana = grupoCasaMedianaJson[segmento];
        const datosPrecios = grupoPrecioMercadoJson[segmento];
        const datosMetrosTerreno = grupoMetrosTerrenoJson[segmento];
        const datosMetrosConstruidos = grupoMetrosConstruidosJson[segmento];
        const datosPrecioMetrosConstruidos = grupoPrecioMetrosConstruidosJson[segmento];

        // Actualizar la tabla con los datos cargados
        document.getElementById("estacionamientos").innerText = datosPromedios.Estacionamientos;
        document.getElementById("recamaras").innerText = datosPromedios.Recámaras; // Si los nombres en JSON no tienen acentos
        document.getElementById("banos").innerText = datosPromedios.Baños;
        document.getElementById("estacionamientos-mediana").innerText = datosMediana.Estacionamientos;
        document.getElementById("recamaras-mediana").innerText = datosMediana.Recámaras;
        document.getElementById("banos-mediana").innerText = datosMediana.Baños;
        document.getElementById("precio-minimo").innerText = datosPrecios.Mínimo;
        document.getElementById("precio-maximo").innerText = datosPrecios.Máximo;
        document.getElementById("precio-promedio").innerText = datosPrecios.Promedio;
        document.getElementById("precio-mediana").innerText = datosPrecios.Mediana;
        document.getElementById("metros-terreno-minimo").innerText = datosMetrosTerreno.Mínimo;
        document.getElementById("metros-terreno-maximo").innerText = datosMetrosTerreno.Máximo;
        document.getElementById("metros-terreno-promedio").innerText = datosMetrosTerreno.Promedio;
        document.getElementById("metros-terreno-mediana").innerText = datosMetrosTerreno.Mediana;
        document.getElementById("metros-construidos-minimo").innerText = datosMetrosConstruidos.Mínimo;
        document.getElementById("metros-construidos-maximo").innerText = datosMetrosConstruidos.Máximo;
        document.getElementById("metros-construidos-promedio").innerText = datosMetrosConstruidos.Promedio;
        document.getElementById("metros-construidos-mediana").innerText = datosMetrosConstruidos.Mediana;
        document.getElementById("precio-metros-construidos-minimo").innerText = datosPrecioMetrosConstruidos.Mínimo;
        document.getElementById("precio-metros-construidos-maximo").innerText = datosPrecioMetrosConstruidos.Máximo;
        document.getElementById("precio-metros-construidos-promedio").innerText = datosPrecioMetrosConstruidos.Promedio;
        document.getElementById("precio-metros-construidos-mediana").innerText = datosPrecioMetrosConstruidos.Mediana;
    } catch (error) {
        console.error(`Error al actualizar las tablas para el segmento "${segmento}":`, error);
    }
}


// Obtener el valor del selector (por ejemplo, un select dropdown)
let segmentoSeleccionado = localStorage.getItem('segmentoSeleccionado') || "general";
document.getElementById('segmentFilter').value = segmentoSeleccionado;

// Llamar la función cuando se cambie el valor del select
document.getElementById('segmentFilter').addEventListener('change', (event) => {
    const segmento = event.target.value;
    localStorage.setItem('segmentoSeleccionado', segmento);
    actualizarTablas(segmento);
});

// Llamar la función inicial con el segmento seleccionado por defecto
///actualizarTablas(segmentoSeleccionado); // Cambiado para que empiece mostrando el segmento "General"
window.onload = async function () {
    await actualizarTablas('general');
};
