const grupoCasaPromedioJson = {
    "A": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 2.0 },
    "B": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "C": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "D": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "E": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "L": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 3.0 },
    "S": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 2.0 },
    "general": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 }
};
/**const grupoCasPromedioJson = require('C:\\xampp\\htdocs\\datalpine\\resources\\Ciudades\\Tulancingo\\assets\\tablas\\grupo_casa_promedio.json');*/
const grupoCasaMedianaJson = {
    "A": { "Estacionamientos": 1.0, "Recámaras": 3.0, "Baños": 2.0 },
    "B": { "Estacionamientos": 1.0, "Recámaras": 2.0, "Baños": 2.0 },
    "C": { "Estacionamientos": 1.0, "Recámaras": 2.0, "Baños": 1.0 },
    "D": { "Estacionamientos": 1.0, "Recámaras": 2.0, "Baños": 1.0 },
    "E": { "Estacionamientos": 1.0, "Recámaras": 2.0, "Baños": 1.0 },
    "L": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 1.0 },
    "S": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "general": { "Estacionamientos": 1.0, "Recámaras": 2.0, "Baños": 2.0 }
};
const grupoPrecioMercadoJson = {
    "A": { "Mínimo": "$3,255,000.00", "Máximo": "$3,950,000.00", "Promedio": "$3,601,983.91" },
    "B": { "Mínimo": "$2,500,002.00", "Máximo": "$3,200,000.00", "Promedio": "$2,881,961.62" },
    "C": { "Mínimo": "$1,750,050.00", "Máximo": "$2,450,000.00", "Promedio": "$2,115,324.05" },
    "D": { "Mínimo": "$1,005,000.00", "Máximo": "$1,700,000.00", "Promedio": "$1,396,118.36" },
    "E": { "Mínimo": "$55,000.00", "Máximo": "$989,900.00", "Promedio": "$1,747,005.73" },
    "L": { "Mínimo": "$12,100,000.00", "Máximo": "$21,000,000.00", "Promedio": "$16,187,727.27" },
    "S": { "Mínimo": "$500,000.00", "Máximo": "$9,985,000.00", "Promedio": "$5,003,588.62" },
    "general": { "Mínimo": "$55,000.00", "Máximo": "$8,500,000.00", "Promedio": "$3,216,403.68" }
};

const grupoMetrosTerrenoJson = {
    "A": { "Mínimo": "75.00 m²", "Máximo": "318.00 m²", "Promedio": "163.25 m²" },
    "B": { "Mínimo": "62.00 m²", "Máximo": "263.00 m²", "Promedio": "171.46 m²" },
    "C": { "Mínimo": "44.00 m²", "Máximo": "247.00 m²", "Promedio": "149.22 m²" },
    "D": { "Mínimo": "45.00 m²", "Máximo": "195.00 m²", "Promedio": "122.10 m²" },
    "E": { "Mínimo": "38.00 m²", "Máximo": "653.00 m²", "Promedio": "175.20 m²" },
    "L": { "Mínimo": "245.00 m²", "Máximo": "2,000.00 m²", "Promedio": "666.88 m²" },
    "S": { "Mínimo": "50.00 m²", "Máximo": "500.00 m²", "Promedio": "241.06 m²" },
    "general": { "Mínimo": "38.00 m²", "Máximo": "400.00 m²", "Promedio": "186.87 m²" }
};
const grupoMetrosConstruidosJson = {
    "A": { "Mínimo": "75.00 m²", "Máximo": "290.00 m²", "Promedio": "216.10 m²" },
    "B": { "Mínimo": "62.00 m²", "Máximo": "260.00 m²", "Promedio": "230.52 m²" },
    "C": { "Mínimo": "44.00 m²", "Máximo": "250.00 m²", "Promedio": "159.53 m²" },
    "D": { "Mínimo": "45.00 m²", "Máximo": "199.00 m²", "Promedio": "119.73 m²" },
    "E": { "Mínimo": "41.00 m²", "Máximo": "409.00 m²", "Promedio": "192.79 m²" },
    "L": { "Mínimo": "245.00 m²", "Máximo": "834.00 m²", "Promedio": "567.30 m²" },
    "S": { "Mínimo": "50.00 m²", "Máximo": "500.00 m²", "Promedio": "267.92 m²" },
    "general": { "Mínimo": "38.00 m²", "Máximo": "400.00 m²", "Promedio": "186.87 m²" }
};
const grupoPrecioMetrosConstruidosJson = {
    "A": { "Mínimo": "$8,043.48", "Máximo": "$29,919.38", "Promedio": "$18,091.71" },
    "B": { "Mínimo": "$107.25", "Máximo": "$26,616.67", "Promedio": "$16,086.00" },
    "C": { "Mínimo": "$3,358.64", "Máximo": "$21,018.69", "Promedio": "$14,335.25" },
    "D": { "Mínimo": "$2,400.66", "Máximo": "$19,200.00", "Promedio": "$12,598.32" },
    "E": { "Mínimo": "$63.06", "Máximo": "$15,833.33", "Promedio": "$8,092.55" },
    "L": { "Mínimo": "$17,375.00", "Máximo": "$42,500.00", "Promedio": "$30,200.68" },
    "S": { "Mínimo": "$1,973.68", "Máximo": "$33,475.70", "Promedio": "$19,329.26" },
    "general": { "Mínimo": "$63.06", "Máximo": "$28,767.87", "Promedio": "$15,340.44" }
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