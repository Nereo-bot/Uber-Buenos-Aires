@push('scripts')
<script>

document.addEventListener('DOMContentLoaded', () => {
  const accountButton = document.querySelector('.account-menu button');
  const dropdownContent = document.querySelector('.dropdown-content');
  const logoutLink = document.querySelector('.dropdown-content .logout'); // Selecciona el enlace de cierre de sesión

  accountButton.addEventListener('click', () => {
      // Alterna la visibilidad del menú desplegable
      if (dropdownContent.style.display === 'block') {
          dropdownContent.style.display = 'none';
      } else {
          dropdownContent.style.display = 'block';
      }
  });

  // Opcional: Cierra el menú si se hace clic fuera de él
  window.addEventListener('click', (event) => {
      if (!event.target.matches('.account-menu button') && !event.target.matches('.dropdown-content')) {
          if (dropdownContent.style.display === 'block') {
              dropdownContent.style.display = 'none';
          }
      }
  });

});
      function toggleDropdown() {
          document.getElementById('dropdown').classList.toggle('show');
      }

      // Asigna la función al botón
      document.querySelector('.account-menu button').addEventListener('click', toggleDropdown);

     // Cierra el dropdown si se hace clic fuera de él
      window.onclick = function(event) {
          if (!event.target.matches('.account-menu button')) {
              const dropdowns = document.getElementsByClassName('dropdown-content');
              for (let i = 0; i < dropdowns.length; i++) {
                  const openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                      openDropdown.classList.remove('show');
                  }
              }
          }
      }
  </script>

@push('styles')
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        header {
            background-color: #000;
            color: #fff;
            padding: 1px 0;
            box-shadow: 0px 4px 2px -2px gray;
            font-weight: bold;
        }

        header {
            display: flex;
            align-items: center;
            height: 80px;
        }

        .logo {
            font-size: 20px;
            color: #fff;
            text-decoration: none;
        }
        a:hover {
            color: #bdbdbd;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            padding: 0 50px;
        }

        nav ul {
            list-style: none;
            display: flex;
            padding: 0;
            gap: 15px;
            align-items: center;
        }

        nav ul li {
            margin: 0 15px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
            font-weight: bold;
        }

        .account-menu {
            position: relative;
            display: inline-block;
        }

        .account-menu button {
            background-color: #fff;
            color: #000;
            border: none;
            padding: 10px 60px;
            border-radius: 20px;
            cursor: pointer;
            font-size: 16px;
            font-weight: bold;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width:300px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            z-index: 1;
            border-radius: 0px;
            right: -36.5%;
            top: 160%;
        }

        .dropdown-content.show {
            display: block;
        }

        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }

        .dropdown-content a:hover {
            background-color: #ddd;
        }

        .dropdown-content .logout {
            background-color: #f44336;
            color: white;
            padding: 15px;
            border-radius: 10px;
        }

        footer {
            background-color: #000;
            color: #fff;
            padding: 5px 0;
            box-shadow: 0px 4px 2px -2px gray;
            font-weight: bold;
            text-align: center;
            margin-top: auto;
        }

        .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 50px;
            flex-wrap: wrap;
        }

        .footer-left {
            flex: 1;
            text-align: left;
        }

        .footer-center {
            flex: 2;
            text-align: center;
        }

        .footer-right {
            flex: 1;
            text-align: right;
        }

        .footer-content img {
            height: 40px;
            width: auto;
            margin: 0 7px;
        }

        .logo-appstore, .logo-googleplay {
            height: 50px !important;
        }

        /* Nueva sección para mostrar la actividad */
        .activity-section {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .trip-card {
            background-color: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            margin-bottom: 20px;
            padding: 25px;
        }

        .trip-card h3 {
            margin: 0;
            font-size: 20px;
        }

        .trip-card p {
            margin: 5px 0;
            color: #555;
        }
    </style>
<x-app-layout>
    <div class="activity-section">
        <h2>Tu Actividad Reciente</h2>
        @foreach ($travels as $id => $travel)
            <div class="trip-card">
                <h3>Viaje {{$id+1}}</h3>
                <p><strong>Costo del viaje:</strong> ${{ $travel->amount}}</p>
            </div>
        @endforeach
    </div>
</x-app-layout>