<?php
// Menu principal para la pagina principal index.php
echo "<ul id='lista_principal_index'>
        <!-- li id='inicio' class='logo_movil'><a href='inicio' title='Inicio'><img src='./views/default/img/logos/VECTORIAL_IMAGOLOGO_2.svg' alt='Home Staging Valladolid'/></a></li -->
        <li id='inicio' class='logo_ordenador'><a href='inicio' title='Inicio'><img src='./views/default/img/logos/VECTORIAL_LOGOTIPO_LETRAS_2.svg' alt='Home Staging Valladolid'/></a></li>
        <li id='inicio_menuNav'><a href='inicio' title='Inicio'><strong>INICIO</strong></a></li>
        <li id='blog'><a href='blog' title='Blog'><strong>BLOG</strong></a></li>
    
        <li id='menu_moviles'><i class='fa fa-bars' aria-hidden='true'></i></a>
            <ul id='lista_movil'>
                <li id='inicio2'><a href='inicio' title='Inicio'><strong>INICIO</strong></a></li>
                <li id='blog2'><a href='blog' title='Blog'><strong>BLOG</strong></a></li>
            </ul>
        </li>
      </ul>";