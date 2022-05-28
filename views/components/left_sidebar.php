<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php?hal=home">
              <i class="icon-grid menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <?php 
          if(isset($user)){
            if($role != 'Pengguna'){
          ?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
            <i class="fa fa-users menu-icon" aria-hidden="true"></i>
              <span class="menu-title">Data</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="index.php?hal=data_pengguna">Data Pengguna</a></li>
              </ul>
            </div>
          </li>
          <?php 
          }}else{
            include_once '../../accesDenied.php';
          } ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?hal=data_paket">
            <i class="fa fa-briefcase menu-icon" aria-hidden="true"></i>
              <span class="menu-title">Paket Internet</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="index.php?hal=masa_aktif">
            <i class="fa fa-ravelry menu-icon" aria-hidden="true"></i>
              <span class="menu-title">Masa Aktif</span>
            </a>
          </li>
          <?php 
          if(isset($user)){
            if($role != 'Pengguna'){
          ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?hal=todo_list">
            <i class="fa fa-book menu-icon" aria-hidden="true"></i>
              <span class="menu-title">Todo List</span>
            </a>
          </li>
          <?php }} ?>
          <li class="nav-item">
            <a class="nav-link" href="index.php?hal=documentation">
              <i class="icon-paper menu-icon"></i>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
        </ul>
      </nav>