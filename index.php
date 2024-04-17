<!DOCTYPE html>
<html>
  <head>
    <title>Locator</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <style>
      html,
      body {
        height: 100%;
        margin: 0;
      }

      gmpx-store-locator {
        width: 100%;
        height: 100%;

       
        --gmpx-color-surface: #fff;
        --gmpx-color-on-surface: #212121;
        --gmpx-color-on-surface-variant: #757575;
        --gmpx-color-primary: #1967d2;
        --gmpx-color-outline: #e0e0e0;
        --gmpx-fixed-panel-width-row-layout: 28.5em;
        --gmpx-fixed-panel-height-column-layout: 65%;
        --gmpx-font-family-base: "Roboto", sans-serif;
        --gmpx-font-family-headings: "Roboto", sans-serif;
        --gmpx-font-size-base: 0.875rem;
        --gmpx-hours-color-open: #188038;
        --gmpx-hours-color-closed: #d50000;
        --gmpx-rating-color: #ffb300;
        --gmpx-rating-color-empty: #e0e0e0;

        
      }
      #geolocate-button {
        position: absolute;
        top: 10px;
        right: 10px;
        z-index: 1000; /* Ensure the button is above the map */
      }
    </style>
    <script>
      const CONFIGURATION = {
        "locations": [
          {"title":"Neiva","address1":"Neiva","address2":"Huila, Colombia","coords":{"lat":2.9353194515621617,"lng":-75.28123269391784},"placeId":"ChIJCUBrWnx0O44RmlMlu2LxrGk"}
        ],
        "mapOptions": {"center":{"lat":38.0,"lng":-100.0},"fullscreenControl":true,"mapTypeControl":false,"streetViewControl":false,"zoom":4,"zoomControl":true,"maxZoom":17,"mapId":""},
        "mapsApiKey": "AIzaSyAD8doOrUlhBc8GCKnU9GfDP5VtQ6TrWvY",
        "capabilities": {"input":true,"autocomplete":true,"directions":true,"distanceMatrix":true,"details":true,"actions":false}
      };

    </script>
    <script type="module">
      document.addEventListener('DOMContentLoaded', async () => {
        await customElements.whenDefined('gmpx-store-locator');
        const locator = document.querySelector('gmpx-store-locator');
        locator.configureFromQuiX|ckBuilder(CONFIGURATION);

        const geolocateButton = document.getElementById('geolocate-button');
        geolocateButton.addEventListener('click', () => {
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(position => {
              const { latitude, longitude } = position.coords;
              locator.setMapCenter({ lat: latitude, lng: longitude });
            }, error => {
              console.error('Error getting geolocation:', error);
            });
          } else {
            console.error('Geolocation is not supported by this browser.');
          }
        });
      });
    </script>
  </head>
  <body>
 
    <script type="module" src="https://unpkg.com/@googlemaps/extended-component-library@0.6"></script>

    <gmpx-api-loader key="AIzaSyAD8doOrUlhBc8GCKnU9GfDP5VtQ6TrWvY" solution-channel="GMP_QB_locatorplus_v10_cABCDE"></gmpx-api-loader>
    <gmpx-store-locator map-id="DEMO_MAP_ID"></gmpx-store-locator>
    <div>
      <button id="geolocate-button">Geolocalizar</button>
      <gmpx-store-locator map-id="DEMO_MAP_ID"></gmpx-store-locator>
      <script type="module">
        document.addEventListener('DOMContentLoaded', async () => {
          // ...
          const geolocateButton = document.getElementById('geolocate-button');
          geolocateButton.addEventListener('click', () => {
            if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(position => {
                const { latitude, longitude } = position.coords;
                locator.setMapCenter({ lat: latitude, lng: longitude });
              }, error => {
                console.error('Error getting geolocation:', error);
              });
            } else {
              console.error('Geolocation is not supported by this browser.');
            }
          });
        });
        
      </script>
    </body>
    <div class="login">
      <button ><a href="login.php">login</a></button>
    </div>
  </html>