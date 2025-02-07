const grupoCasaPromedioJson = {
    "A": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 2.0 },
    "B": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "C": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "D": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "E": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "L": { "Estacionamientos": 2.0, "Recámaras": 6.0, "Baños": 6.0 },
    "S": { "Estacionamientos": 2.0, "Recámaras": 4.0, "Baños": 2.0 },
    "general": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 }
};
/**const grupoCasPromedioJson = require('C:\\xampp\\htdocs\\datalpine\\resources\\Ciudades\\Tulancingo\\assets\\tablas\\grupo_casa_promedio.json');*/
const grupoCasaMedianaJson = {
    "A": { "Estacionamientos": 0, "Recámaras": 0, "Baños": 0 },
    "B": { "Estacionamientos": 2.0, "Recámaras": 2.0, "Baños": 2.0 },
    "C": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "D": { "Estacionamientos": 2.0, "Recámaras": 2.0, "Baños": 1.0 },
    "E": { "Estacionamientos": 1.0, "Recámaras": 2.0, "Baños": 1.0 },
    "L": { "Estacionamientos": 0, "Recámaras": 0, "Baños": 0 },
    "S": { "Estacionamientos": 2.0, "Recámaras": 3.0, "Baños": 2.0 },
    "general": { "Estacionamientos": 1.0, "Recámaras": 2.0, "Baños": 2.0 }
};
const grupoPrecioMercadoJson = {
    "A": { "Mínimo": "$3,300,000.00", "Máximo": "$3,946,465.00", "Promedio": "$3,582,540.95" },
    "B": { "Mínimo": "$2,600,000.00", "Máximo": "$3,200,000.00", "Promedio": "$2,883,612.90" },
    "C": { "Mínimo": "$1,800,000.00", "Máximo": "$2,480,000.00", "Promedio": "$2,131,159.98" },
    "D": { "Mínimo": "$1,020,000.00", "Máximo": "$1,700,000.00", "Promedio": "$1,278,118.23" },
    "E": { "Mínimo": "$346,040.00", "Máximo": "$980,000.00", "Promedio": "$653,173.93" },
    "L": { "Mínimo": "$17,000,000.00", "Máximo": "$17,500,000.00", "Promedio": "$17,250,000.00" },
    "S": { "Mínimo": "$500,000.00", "Máximo": "$7,050,000.00", "Promedio": "$3,034,540.54" },
    "general": { "Mínimo": "$346,040.00", "Máximo": "$3,946,465.00", "Promedio": "$1,474,365.53" }
};
const grupoMetrosTerrenoJson = {
    "A": { "Mínimo": "150.00 m²", "Máximo": "1,049.00 m²", "Promedio": "297.19 m²"},
    "B": { "Mínimo": "70.00 m²", "Máximo": "232.00 m²", "Promedio": "164.65 m²"},
    "C": { "Mínimo": "80.00 m²", "Máximo": "400.00 m²", "Promedio": "172.00 m²"},
    "D": { "Mínimo": "70.00 m²", "Máximo": "398.00 m²", "Promedio": "137.77 m²"},
    "E": { "Mínimo": "41.00 m²", "Máximo": "266.00 m²", "Promedio": "138.55 m²"},
    "L": { "Mínimo": "1,000.00 m²", "Máximo": "1,972.00 m²", "Promedio": "1,486.00 m²"},
    "S": { "Mínimo": "82.00 m²", "Máximo": "1,692.80 m²", "Promedio": "3.5.96 m²"},
    "general": { "Mínimo": "41.00 m²", "Máximo": "350.00 m²", "Promedio": "175.15 m²"}
};
const grupoMetrosConstruidosJson = {
    "A": { "Mínimo": "150.00 m²", "Máximo": "360.00 m²", "Promedio": "253.67 m²" },
    "B": { "Mínimo": "95.00 m²", "Máximo": "600.00 m²", "Promedio": "204.18 m²" },
    "C": { "Mínimo": "90.00 m²", "Máximo": "404.00 m²", "Promedio": "202.16 m²" },
    "D": { "Mínimo": "62.00 m²", "Máximo": "398.00 m²", "Promedio": "139.65 m²" },
    "E": { "Mínimo": "41.00 m²", "Máximo": "371.00 m²", "Promedio": "172.47 m²" },
    "L": { "Mínimo": "500.00 m²", "Máximo": "520.00 m²", "Promedio": "510.00 m²" },
    "S": { "Mínimo": "81.00 m²", "Máximo": "425.00 m²", "Promedio": "247.52 m²" },
    "general": { "Mínimo": "41.00 m²", "Máximo": "350.00 m²", "Promedio": "175.15 m²" }
};
const grupoPrecioMetrosConstruidosJson = {
    "A": { "segmento": "A", "Mínimo": "$8,912.50", "Máximo": "$26,309.77", "Promedio": "$15,535.85" },
    "B": { "segmento": "B", "Mínimo": "$5,333.33", "Máximo": "$22,857.14", "Promedio": "$17,379.56" },
    "C": { "segmento": "C", "Mínimo": "$4,918.81", "Máximo": "$16,467.63", "Promedio": "$12,082.48" },
    "D": { "segmento": "D", "Mínimo": "$2,607.14", "Máximo": "$18,548.39", "Promedio": "$11,328.20" },
    "E": { "segmento": "E", "Mínimo": "$1,023.81", "Máximo": "$13,782.80", "Promedio": "$5,536.80" },
    "L": { "segmento": "L", "Mínimo": "$33,653.85", "Máximo": "$34,000.00", "Promedio": "$33,826.93" },
    "S": { "segmento": "S", "Mínimo": "$1,562.50", "Máximo": "$17,916.67", "Promedio": "$12,057.03" },
    "general": { "segmento": "general", "Mínimo": "$1,023.81", "Máximo": "$19,333.33", "Promedio": "$8,945.61" }
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