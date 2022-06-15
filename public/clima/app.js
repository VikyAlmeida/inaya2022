window.addEventListener('load', ()=> {
  let lon
  let lat

  let iconoAnimado = document.getElementById('icono-animado') 
  let temperaturaValor = document.getElementById('temperatura-valor') 
  let ubicacion = document.getElementById('ubicacion') 

  if(navigator.geolocation){
     navigator.geolocation.getCurrentPosition( posicion => {
         //console.log(posicion.coords.latitude)
         lon = posicion.coords.longitude
         lat = posicion.coords.latitude
          //ubicación actual    
         //const url = `https://api.openweathermap.org/data/2.5/weather?lat=${lat}&lon=${lon}&appid=${AQUI_VIENE_TU_API_KEY}`

         //ubicación por ciudad
         const url = `https://api.openweathermap.org/data/2.5/weather?q=Ayamonte&lang=es&units=metric&appid=ee0657239b7bb0ec5b720b05929233ef`

         //console.log(url)

         fetch(url)
          .then( response => { return response.json()})
          .then( data => {
              //console.log(data)
              
              let temp = Math.round(data.main.temp)
              temperaturaValor.textContent = ` ${temp} °C`

              ubicacion.textContent = data.name;

              switch (data.weather[0].main) {
                  case 'Thunderstorm':
                    iconoAnimado.src='../../../clima/animated/thunder.svg'
                    console.log('TORMENTA');
                    break;
                  case 'Drizzle':
                    iconoAnimado.src='../../../clima/animated/rainy-2.svg'
                    console.log('LLOVIZNA');
                    break;
                  case 'Rain':
                    iconoAnimado.src='../../../clima/animated/rainy-7.svg'
                    console.log('LLUVIA');
                    break;
                  case 'Snow':
                    iconoAnimado.src='../../../clima/animated/snowy-6.svg'
                      console.log('NIEVE');
                    break;                        
                  case 'Clear':
                      iconoAnimado.src='../../../clima/animated/day.svg'
                      console.log('LIMPIO');
                    break;
                  case 'Atmosphere':
                    iconoAnimado.src='../../../clima/animated/weather.svg'
                      console.log('ATMOSFERA');
                      break;  
                  case 'Clouds':
                      iconoAnimado.src='../../../clima/animated/cloudy-day-1.svg'
                      console.log('NUBES');
                      break;  
                  default:
                    iconoAnimado.src='../../../clima/animated/cloudy-day-1.svg'
                    console.log('por defecto');
                }

          })
          .catch( error => {
              console.log(error)
          })
     })
        
  }
})