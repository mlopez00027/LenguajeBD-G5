<?php
    function MostrarMenu()
    {
      echo '
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <a href="../../index3.html" class="brand-link">
            <span class="brand-text font-weight-bold">HOTEL MAUI</span>
        </a>
    
        <div class="sidebar">
    
            <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                    <li class="nav-item">
                    <a href="reservacion.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Reservaciones</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="galeria.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Galería</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="servicios.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Servicios</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="promociones.php" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Promociones</p>
                    </a>
                    </li>
                </ul>
                </li>
            </ul>
            </nav>
        </div>
        </aside>
        ';
    }

    function MostrarNav()
{
    echo '
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link"<a href="login.php" >
                <i class="far fa-user"></i> Iniciar Sesión
                    </a>
                </div>
            </li>
        </ul>
        </nav>
    ';
    }

?>