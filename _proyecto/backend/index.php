<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="web/css/materialize.min.css" media="screen,projection" />
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    table.striped>tbody>tr:nth-child(odd) {
      background-color: #e3f2fd;
    }

    .pagination li.active {
      background-color: #90caf9;
    }

    table.highlight>tbody>tr:hover {
      background-color: #bbdefb;
    }
  </style>
</head>

<body>
  <nav>
    <div class="nav-wrapper indigo">
      <a href="#!" class="brand-logo center">
        <i class="material-icons">account_box</i>MiPanel
      </a>
      <ul class="right hide-on-med-and-down">
        <li>
          <a href="index.php?r=cursos" class="tooltipped" data-position="bottom" data-tooltip="Cursos">
            <i class="material-icons">book</i>
          </a>
        </li>
        <li>
          <a href="index.php?r=tcursos" class="tooltipped" data-position="bottom" data-tooltip="Tipos Curso">
            <i class="material-icons">bookmark</i>
          </a>
        </li>
        <li>
          <a href="index.php?r=profesores" class="tooltipped" data-position="bottom" data-tooltip="Profesores">
            <i class="material-icons">person_pin</i>
          </a>
        </li>
        <li>
          <a href="index.php?r=alumnos" class="tooltipped" data-position="bottom" data-tooltip="Alumnos">
            <i class="material-icons">person_outline</i>
          </a>
        </li>
        <li>
          <a href="index.php?r=menu">
            <i class="material-icons">menu</i>
          </a>
        </li>
      </ul>
    </div>
  </nav>

  <main>
    <!-- Ingresamos todo el contenido central de la pagina -->
    <div class="container">
      <?php
      include("router.php");
      ?>
    </div>

    <br>

  </main>

  <footer class="page-footer indigo">
    <div class="footer-copyright">
      <div class="container">
        © 2014 Copyright Text
        <a class="grey-text text-lighten-4 right" href="#!">Nosotros</a>
        <br>
        <a class="grey-text text-lighten-4 right" href="#!">Mi Panel</a>
      </div>
    </div>
  </footer>

  <!--JavaScript at end of body for optimized loading-->
  <script type="text/javascript" src="web/js/materialize.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      M.AutoInit();
      var elems = document.querySelectorAll('.tooltipped');
      var instances = M.Tooltip.init(elems, options);
      var elems = document.querySelectorAll('.modal');
      var instances = M.Modal.init(elems, options);

    });
  </script>
</body>

</html>