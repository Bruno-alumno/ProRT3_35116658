<!--inicia barra de navegacion-->
<?php
 $session = session();
 $nombre = $session->get('nombre');
 $perfil = $session->get('perfil_id');
 ?>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand me-auto barra" href='principal'>
        <!-- logo de la empresa -->
         <img src="assets/img/logo.jpg" alt="logo" width="75" height="30" class="img-fluid"></a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <?php if (session()->perfil_id ==1): ?>
  <div class="btn btn-secondary active btnUser btn-sm">
    <a href="">ADMIN: <?php echo session ('nombre'); ?> </a><img src="" alt="">
  </div>
    <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      <li class="nav-item">
          <a class="nav-link" href="quienes_somos">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="acerca_de">Acerca de</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="registrarse">Registrarse</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login">Login</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1 aria-disabled="true>Cerrar Sesion</a>
  </li>
      </ul>
  </div>
  <?php elseif (session()->perfil_id ==2): ?> 
  <div class="btn btn-info active btnUser btn-sm">
  <a href="">CLIENTE: <?php echo session ('nombre'); ?> </a>
  </div>
  <?php else:?>
  <!-- Navegador para clientes no logueados-->
  <a class="navbar-brand" href="#"></a>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href='quienes_somos'>Quienes somos</a></li>
          </li>
          <li class="nav-item">
          <a class="nav-link" href='acerca_de'>Acerca de</a></li>
          </li>
        <li class="nav-item">
          <a class="nav-link" href='registro'>Registrarse</a></li>
          </li>
        <li class="nav-item">
          <a class="nav-link" href='login'>Login</a></li>
          </li>
</ul>
</div>
      <form class="d-flex" role="Buscar">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
      <?php endif;?>
    </div>
  </div>
</nav>
</html>