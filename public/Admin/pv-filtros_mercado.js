const grupoCasaPromedioJson = {
    "A": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 2.0 },
    "B": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "C": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "D": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "E": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 2.0 },
    "L": { "Estacionamientos": 3.0, "Recámaras": 4.0, "Baños": 3.0 },
    "S": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 3.0 },
    "general": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 }
};
/**const grupoCasPromedioJson = require('C:\\xampp\\htdocs\\datalpine\\resources\\Ciudades\\Tulancingo\\assets\\tablas\\grupo_casa_promedio.json');*/
const grupoCasaMedianaJson = {
    "A": { "Estacionamientos": 2.0, "Recámaras": 2.0, "Baños": 2.0 },
    "B": { "Estacionamientos": 2.0, "Recámaras": 2.0, "Baños": 2.0 },
    "C": { "Estacionamientos": 2.0, "Recámaras": 2.0, "Baños": 2.0 },
    "D": { "Estacionamientos": 2.0, "Recámaras": 2.0, "Baños": 2.0 },
    "E": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "L": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 3.0 },
    "S": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "general": { "Estacionamientos": 2.0, "Recámaras": 2.0, "Baños": 2.0 }
};
const grupoPrecioMercadoJson = {
    "A": { "Mínimo": "$3,251,000.00", "Máximo": "$3,981,000.00", "Promedio": "$3,643,422.26" },
    "B": { "Mínimo": "$2,521,000.00", "Máximo": "$3,200,000.00", "Promedio": "$2,894,521.41" },
    "C": { "Mínimo": "$1,752,000.00", "Máximo": "$2,476,400.00", "Promedio": "$2,149,352.02" },
    "D": { "Mínimo": "$1,003,000.00", "Máximo": "$1,708,402.80", "Promedio": "$1,406,855.54" },
    "E": { "Mínimo": "$280,000.00", "Máximo": "$39,300,000.00", "Promedio": "$20,015,602.83" },
    "L": { "Mínimo": "$12,220,000.00", "Máximo": "$21,200,000.00", "Promedio": "$16,408,514.42" },
    "S": { "Mínimo": "$500,000.00", "Máximo": "$10,573,000.00", "Promedio": "$6,109,971.68" },
    "general": { "Mínimo": "$284,444.44", "Máximo": "$35,584,643.85", "Promedio": "$13,397,198.33" }
};
const grupoMetrosTerrenoJson = {
    "A": { "Mínimo": "30.00 m²", "Máximo": "292.00 m²", "Promedio": "168.82 m²" },
    "B": { "Mínimo": "52.00 m²", "Máximo": "201.00 m²", "Promedio": "129.77 m²" },
    "C": { "Mínimo": "42.00 m²", "Máximo": "198.00 m²", "Promedio": "123.72 m²" },
    "D": { "Mínimo": "44.00 m²", "Máximo": "279.48 m²", "Promedio": "114.14 m²" },
    "E": { "Mínimo": "35.00 m²", "Máximo": "1,640.00 m²", "Promedio": "698.24 m²" },
    "L": { "Mínimo": "103.00 m²", "Máximo": "2,200.00 m²", "Promedio": "885.85 m²" },
    "S": { "Mínimo": "42.00 m²", "Máximo": "600.00 m²", "Promedio": "522.45 m²" },
    "general": { "Mínimo": "30.00 m²", "Máximo": "780.00 m²", "Promedio": "419.84 m²" }
};
const grupoMetrosConstruidosJson = {
    "A": { "Mínimo": "51.00 m²", "Máximo": "254.00 m²", "Promedio": "180.02 m²" },
    "B": { "Mínimo": "52.00 m²", "Máximo": "202.00 m²", "Promedio": "137.56 m²" },
    "C": { "Mínimo": "42.00 m²", "Máximo": "211.00 m²", "Promedio": "129.46 m²" },
    "D": { "Mínimo": "42.00 m²", "Máximo": "276.00 m²", "Promedio": "113.19 m²" },
    "E": { "Mínimo": "41.00 m²", "Máximo": "1,000.00 m²", "Promedio": "506.25 m²" },
    "L": { "Mínimo": "165.00 m²", "Máximo": "865.00 m²", "Promedio": "636.52 m²" },
    "S": { "Mínimo": "42.00 m²", "Máximo": "456.00 m²", "Promedio": "274.32 m²" },
    "general": { "Mínimo": "30.00 m²", "Máximo": "780.00 m²", "Promedio": "419.84 m²" }
};
const grupoPrecioMetrosConstruidosJson = {
    "A": { "Mínimo": "$169.53", "Máximo": "$37,563.22", "Promedio": "$23,359.40" },
    "B": { "Mínimo": "$5,930.02", "Máximo": "$35,119.05", "Promedio": "$22,788.10" },
    "C": { "Mínimo": "$164.11", "Máximo": "$28,676.47", "Promedio": "$19,020.13" },
    "D": { "Mínimo": "$1,221.80", "Máximo": "$23,913.04", "Promedio": "$15,739.80" },
    "E": { "Mínimo": "$651.04", "Máximo": "$53,571.43", "Promedio": "$80,156.97" },
    "L": { "Mínimo": "$237.50", "Máximo": "$45,333.33", "Promedio": "$32,169.16" },
    "S": { "Mínimo": "$464.20", "Máximo": "$39,062.50", "Promedio": "$23,807.25" },
    "general": { "Mínimo": "$164.11", "Máximo": "$39,669.42", "Promedio": "$27,505.91" }
};
// Función para actualizar las tablas
function actualizarTablas(segmento) {
    // Obtener los datos 
    const datosPromedios = grupoCasaPromedioJson[segmento];
    const datosMediana = grupoCasaMedianaJson[segmento];
    const datosPrecios = grupoPrecioMercadoJson[segmento];
    const datosMetrosTerreno = grupoMetrosTerrenoJson[segmento];
    const datosMetrosConstruidos = grupoMetrosConstruidosJson[segmento];
    const datosPrecioMetrosConstruidos = grupoPrecioMetrosConstruidosJson[segmento];
    
    // Actualizar tabla 
    document.getElementById("estacionamientos").innerText = datosPromedios.Estacionamientos;
    document.getElementById("recamaras").innerText = datosPromedios.Recámaras;
    document.getElementById("banos").innerText = datosPromedios.Baños;
    document.getElementById("estacionamientos-mediana").innerText = datosMediana.Estacionamientos;
    document.getElementById("recamaras-mediana").innerText = datosMediana.Recámaras;
    document.getElementById("banos-mediana").innerText = datosMediana.Baños;
    document.getElementById("precio-minimo").innerText = datosPrecios.Mínimo;
    document.getElementById("precio-maximo").innerText = datosPrecios.Máximo;
    document.getElementById("precio-promedio").innerText = datosPrecios.Promedio;
    document.getElementById("metros-terreno-minimo").innerText = datosMetrosTerreno.Mínimo;
    document.getElementById("metros-terreno-maximo").innerText = datosMetrosTerreno.Máximo;
    document.getElementById("metros-terreno-promedio").innerText = datosMetrosTerreno.Promedio;
    document.getElementById("metros-construidos-minimo").innerText = datosMetrosConstruidos.Mínimo;
    document.getElementById("metros-construidos-maximo").innerText = datosMetrosConstruidos.Máximo;
    document.getElementById("metros-construidos-promedio").innerText = datosMetrosConstruidos.Promedio;
    document.getElementById("precio-metros-construidos-minimo").innerText = datosPrecioMetrosConstruidos.Mínimo;
    document.getElementById("precio-metros-construidos-maximo").innerText = datosPrecioMetrosConstruidos.Máximo;
    document.getElementById("precio-metros-construidos-promedio").innerText = datosPrecioMetrosConstruidos.Promedio;
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
window.onload = function() {
    actualizarTablas('general');
};