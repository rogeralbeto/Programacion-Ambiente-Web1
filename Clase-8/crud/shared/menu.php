<?php
  require_once __DIR__ . '/sessions.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Pagina 1</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <?php
        $menu = [
          'Home' => '/',
          'Contact Us' => '/contact_us.php',
          'Jobs' => '/jobs.php',
          'Reporte de  Ventas' => '/ventas/index.php'
        ];

        if (isset($_SESSION['usuario_id']) || !empty($_SESSION['usuario_id'])) {
            foreach ($menu as $key => $value) {
                echo "<li class='nav-item'>
                      <a class='nav-link' href='$value'>$key</a>
                    </li>";
            }
        }
        ?>
    </ul>
    <?php
      if (isset($_SESSION['usuario_id']) || !empty($_SESSION['usuario_id'])) {
    ?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href='/seguridad/logout.php'>Cerrar Session</a></li>
    </ul>
    <?php
    }
    ?>
  </div>
</nav>


