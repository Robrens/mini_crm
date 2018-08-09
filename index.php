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
    <?php
        include('nav.php');
    ?>
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
                                                   <?php echo '<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseClients'.$result->id.'" aria-expanded="true" aria-controls="collapseClients">' ?>
                                                        <?php echo ''.$result->nom.' '.$result->Prenom.''?>
                                                    </button>
                                                </h5>
                                            </div>
                                            <?php echo '<div id="collapseClients'.$result->id.'" class="collapse hide" aria-labelledby="headingClients" data-parent="#accordionClients">' ?>
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
                                                <?php echo '<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseEntreprises'.$res->id.'" aria-expanded="true" aria-controls="collapseEntreprises">' ?>
                                                    
                                                    <?php echo''.$res->nom.'' ?>
                                                </button>
                                            </h5>
                                        </div>
                                      <?php echo '<div id="collapseEntreprises'.$res->id.'" class="collapse hide" aria-labelledby="headingEntreprises" data-parent="#accordionEntreprises">' ?>
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