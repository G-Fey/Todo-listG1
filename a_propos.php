<!DOCTYPE html>
<html lang="fr" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">    
    <link rel="stylesheet" href="css/main.css">
    <title>A_propos</title>
</head>
<body class="d-flex flex-column h-100">
    <!-- tête de page -->
    <?php 
        $page = 'apropos'; 
        include 'header.php'; 
    ?>
    <!-- Main Section -->
    <main name="main" class="flex-shrink-0">
        <!-- Section Qui sommes-nous -->
        <section class="bg-blue">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 p-5 text-light">  
                        <h1 class="display-5 font-weight-normal text">Qui sommes-nous ?</h1>
                        <p class="text-justify font-weight-normal">Xodya est un gestionnaire de tâche (todo-list) simple et accessible qui vous permet au quotidien de gerer tous vos taches à faire et surtout de ne pas se prendre la tete avec un bloc note. Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto iste, hic quia, libero repellendus aliquid numquam atque saepe praesentium eligendi qui sapiente doloremque sit distinctio vero quisquam eos, autem magnam.</p>
                        <a class="btn btn-outline-cyan" href="#">Découvrez notre entreprise</a>
                    </div>
                    <div class="col-lg-6 text-light my-auto p-sm-5 p-lg-0">
                        <img src="img/team-3373638_1920.jpg" class="img-fluid" alt="Responsive image">
                    </div>
                </div>
            </div>
        </section>
        <!-- Section card -->
        <section class="">
            <div class="container">
                <div class="row p-5">
                    <div class="card-columns text-light">
                        <div class="card bg-brown ">
                            <div class="card-body">
                                <h5 class="card-title">Jeffrey</h5>
                                <p class="card-text">Chef de Projet et developpeur full stack</p>
                                <p class="card-text"><small class="text-white-50">Last updated 3 mins ago</small></p>
                            </div>
                            <img src="img/jeffrey.jpg" class="card-img-bottom" alt="Responsive image">
                        </div>
                        <div class="card bg-brown ">
                            <div class="card-body">
                                <h5 class="card-title">Hasina</h5>
                                <p class="card-text">Developpeur Front-End</p>
                                <p class="card-text"><small class="text-white-50">Last updated 3 mins ago</small></p>
                            </div>
                            <img src="img/hasina.jpg" class="card-img-bottom" alt="Responsive image">
                        </div>  
                        <div class="card bg-brown ">
                            <div class="card-body">
                                <h5 class="card-title">Emmanuel</h5>
                                <p class="card-text">developpeur full stack</p>
                                <p class="card-text"><small class="text-white-50">Last updated 3 mins ago</small></p>
                            </div>
                            <img src="img/manu.jpg" class="card-img-bottom" alt="Responsive image">
                        </div>
                        <div class="card bg-brown ">
                            <div class="card-body">
                                <h5 class="card-title">Nicola</h5>
                                <p class="card-text">developpeur back-end</p>
                                <p class="card-text"><small class="text-white-50">Last updated 3 mins ago</small></p>
                            </div>
                            <img src="img/nico.jpg" class="card-img-bottom" alt="Responsive image">
                        </div>
                        <div class="card bg-brown ">
                            <div class="card-body">
                                <h5 class="card-title">Quentin</h5>
                                <p class="card-text">developpeur back-end</p>
                                <p class="card-text"><small class="text-white-50">Last updated 3 mins ago</small></p>
                            </div>
                            <img src="img/quentin.jpg" class="card-img-bottom" alt="Responsive image">
                        </div>
                        <div class="card bg-brown ">
                            <div class="card-body">
                                <h5 class="card-title">Alyssa</h5>
                                <p class="card-text">developpeuse documentaliste</p>
                                <p class="card-text"><small class="text-white-50">Last updated 3 mins ago</small></p>
                            </div>
                            <img src="img/alyssa.jpg" class="card-img-bottom" alt="Responsive image">
                        </div>
                        
                    </div>
                </div>
            </div>
        </section>
        
        
    </main>
    
    <?php include("footer.php"); ?>
 
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="/docs/4.2/assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
