import pandas as pd
import time
import urllib3

# Cargar y limpiar el DataFrame
archivo_filename = "C:\\xampp\\htdocs\\datalpine\\resources\\db\\Scrapining\\ciudades\\queretaro\\clean\\abril_2024_1.csv"
df = pd.read_csv(archivo_filename)
df['Estado'] = df['Estado'].str.strip().str.lower()
df['Municipio'] = df['Municipio'].str.strip().str.lower()
df['Colonia'] = df['Colonia'].str.strip().str.lower()
df['Colonia_Estandarizada'] = df['Colonia_Estandarizada'].str.strip().str.lower()
df['direccion_completa'] = df['Colonia_Estandarizada'] + ', ' + df['Municipio'] + ', ' + df['Estado'] + ', México'

# Función de geocodificación usando la API de ArcGIS
def geocode_arcgis(address):
    url = "https://geocode.arcgis.com/arcgis/rest/services/World/GeocodeServer/findAddressCandidates"
    params = {
        "f": "json",
        "outFields": "*",
        "maxLocations": 1,
        "singleLine": address,
        "outSr": "4326",
        "forStorage": "false"
    }
    
    try:
        http = urllib3.PoolManager()
        response = http.request('GET', url, fields=params)
        data = response.data.decode('utf-8')
        
        if data:
            import json
            data = json.loads(data)
            if data['candidates']:
                location = data['candidates'][0]['location']
                return location['y'], location['x']
            else:
                return None, None
        else:
            return None, None
    except urllib3.exceptions.RequestError as e:
        print(f"Error al geocodificar {address}: {e}")
        return None, None

# Aplicar la geocodificación
df['Latitud'], df['Longitud'] = zip(*df['direccion_completa'].apply(geocode_arcgis))
time.sleep(0.5)  # Tiempo de espera para evitar sobrecarga en la API

# Guardar el resultado
df.to_csv("geocodificado_abril24_qro_direct.csv", index=False)
print("Geocodificación completa y guardada en archivo_geocodificado_arcgis.csv")
