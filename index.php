<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
      include('password.php');
    ?>
        <header>
            <div class="container">
                <div class="row">
                    <div class="col">
                        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                            <a class="navbar-brand" href="#">Navbar</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#">Home
                                            <span class="sr-only">(current)</span>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                            aria-expanded="false">
                                            Dropdown
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link disabled" href="#">Disabled</a>
                                    </li>
                                </ul>
                                <form class="form-inline my-2 my-lg-0">
                                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                </form>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main>
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-clients-tab" data-toggle="pill" href="#pills-clients" role="tab" aria-controls="pills-clients"
                                    aria-selected="true">Clients</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-entreprises-tab" data-toggle="pill" href="#pills-entreprises" role="tab" aria-controls="pills-entreprises"
                                    aria-selected="false">Entreprises</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-clients" role="tabpanel" aria-labelledby="pills-clients-tab">
                                <input type="text" name="" value="">
                                <div class="accordion" id="accordionClients">
                                    <?php
                                        while( $result = $results->fetch() )
                                        {?>
                                        <div class="card">
                                            <div class="card-header" id="headingClients">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseClients" aria-expanded="true" aria-controls="collapseClients">
                                                        <?php echo ''.$result->nom.''.$result->Prenom.''?>
                                                    </button>
                                                </h5>
                                            </div>
                                            <div id="collapseClients" class="collapse hide" aria-labelledby="headingClients" data-parent="#accordionClients">
                                                <?php echo '<img src="'.$result->thumb.'">' ?>
                                                <p>
                                                    <?php echo ''.$result->description.'' ?>
                                                </p>
                                            </div>
                                        </div>
                                        <?php } ?>;

                                </div>


                            </div>

                            <div class="tab-pane fade" id="pills-entreprises" role="tabpanel" aria-labelledby="pills-entreprises-tab">
                                <div class="accordion" id="accordionEntreprises">
                                    <!-- Ton PHP ici -->
                                     <?php
                                        while( $res = $resultas->fetch() )
                                        {?>
                                    <div class="card">
                                        <div class="card-header" id="headingEntreprises">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEntreprises" aria-expanded="true"
                                                    aria-controls="collapseEntreprises">
                                                    <?php echo''.$res->nom.'' ?>
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseEntreprises" class="collapse hide" aria-labelledby="headingEntreprises" data-parent="#accordionEntreprises">
                                            <div class="card-body">
                                                <!-- Ton contenu généré en PHP ici -->
                                                <?php echo '<img src="'.$res->thumb.'"'?>
                                                <?php echo '<h4>'.$res->gerant.'</h4>'?>
                                                <?php echo '<p>'.$res->adresse.'</p>'?>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- fermeture de ton PHP -->
                                        <?php } ?>
                                </div>



                            </div>
                        </div>
                    </div>












                </div>
            </div>

        </main>


        <script src="node_modules/jquery/dist/jquery.js"></script>
        <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="js/script.js"></script>
</body>

</html>