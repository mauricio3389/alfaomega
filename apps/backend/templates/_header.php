<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
        <h1><a href="<?php echo url_for('@homepage') ?>">AlfaOmega</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
      <li class="has-dropdown">
          <a href="#"><?php echo $sf_user ?></a>
        <ul class="dropdown">
          <li><a href="#">Pronto</a></li>
          <li class="active"><a href="<?php echo url_for('@sf_guard_signout')?>">Salir</a></li>
        </ul>
      </li>
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
        <li><a href="<?php echo url_for('@sf_guard_user')?>">Usuarios</a></li>
    </ul>
  </section>
</nav>