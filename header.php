<?php

if (!isset($page))
{
    $page = '';
}

?>
<header>
        <!-- Bande logo -->
        <div class="container-fluid">
            <div class="row">
                <div class="text-center">
                    <img src="img/bande-logo.jpg" class="img-fluid"  alt="Responsive image">
                </div>
            </div>
        </div>
        
        <!-- Barre de menu navigation -->
        <nav class="navbar navbar-expand-md navbar-dark sticky-top bg-blue">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item <?php echo (($page == 'accueil')? 'active' : ''); ?>">
                        <a class="nav-link" href="index.php">Accueil <?php echo (($page == 'accueil')? '<span class="sr-only">(current)</span>' : ''); ?></a>
                    </li>
                    <li class="nav-item <?php echo (($page == 'presentation')? 'active' : ''); ?>">
                        <a class="nav-link" href="#">Présentation <?php echo (($page == 'presentation')? '<span class="sr-only">(current)</span>' : ''); ?></a>
                    </li>
                    <li class="nav-item <?php echo (($page == 'todolist')? 'active' : ''); ?>">
                        <a class="nav-link" href="todolist.php">To-do-list <?php echo (($page == 'todolist')? '<span class="sr-only">(current)</span>' : ''); ?></a>
                    </li>
                    <li class="nav-item <?php echo (($page == 'contact')? 'active' : ''); ?>">
                        <a class="nav-link" href="#">Contact <?php echo (($page == 'contact')? '<span class="sr-only">(current)</span>' : ''); ?></a>
                    </li>
                    <li class="nav-item <?php echo (($page == 'apropos')? 'active' : ''); ?>">
                        <a class="nav-link" href="#">A propos <?php echo (($page == 'apropos')? '<span class="sr-only">(current)</span>' : ''); ?></a>
                    </li>
                </ul>

                <?php
                if (($page == 'todolist') || ($page == 'profil'))
                {
                ?>
                    <ul class="navbar-nav">
                    <li class="nav-item <?php echo (($page == 'profil')? 'active' : ''); ?>">
                        <a class="nav-link" href="profil.php">Profil <?php echo (($page == 'profil')? '<span class="sr-only">(current)</span>' : ''); ?></a>
                    </li>
                    <li class="nav-item <?php echo (($page == 'deconnexion')? 'active' : ''); ?>">
                        <a class="nav-link" href="login.php">Deconnexion <?php echo (($page == 'deconnexion')? '<span class="sr-only">(current)</span>' : ''); ?></a>
                    </li>
                </ul>
                <?php
                } else {
                ?>
                <ul class="navbar-nav">
                    <li class="nav-item <?php echo (($page == 'login')? 'active' : ''); ?>">
                        <a class="nav-link" href="login.php">Connexion <?php echo (($page == 'login')? '<span class="sr-only">(current)</span>' : ''); ?></a>
                    </li>
                    <li class="nav-item <?php echo (($page == 'inscription')? 'active' : ''); ?>">
                        <a class="nav-link" href="inscription.php">Inscription <?php echo (($page == 'inscription')? '<span class="sr-only">(current)</span>' : ''); ?></a>
                    </li>
                </ul>
                <?php
                  }
                ?>
            </div>
        </nav>
    </header>