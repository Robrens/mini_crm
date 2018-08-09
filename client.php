<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
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
            <div>
                <main>
                    <form action="POST">
                        <input type="text" placeholder="Nom">
                        </imput>
                        <input type="text" placeholder="Prénom">
                        </imput>
                        <input type="text" placeholder="Description">
                        </imput>
                        <select name="entreprise">
                            <option></option>
                            <?php 
                                 while( $res = $resultas->fetch() )
                                 {
                                    echo '<option id="'.$res->id.'">'.$res->nom.'</option>';
                                 }

                                 ?>
                        </select>
                        <input type="button" value="Valider">


                    </form>

                </main>
            </div>
            <script src="node_modules/jquery/dist/jquery.js"></script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
            <script src="js/script.js"></script>
</body>

</html>