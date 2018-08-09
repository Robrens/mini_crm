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
                    <form method="POST">
                        <label for="name">Nom client</label>
                        <input type="text" id="name" name="Name" placeholder="Nom" required>
                       <label for="firstname">Prénom client</label>
                        <input type="text" id="firstname" name ="FirstName" placeholder="Prénom" required>

                        <label for="description">Description</label>
                       <input type="text" id="description" name="Description" placeholder="Description" required>

                        <label for="name">Selection entreprise</label>
                        <select name="enterprise" required>
                            <option></option>
                            <?php 
                                 while($res = $resultas->fetch() )
                                 {
                                    echo '<option value="'.$res->id.'">'.$res->nom.'</option>';
                                 }

                                 ?>
                        </select>
                        <input type="submit" value="Valider">


                    </form>

                </main>
            </div>
  <?php          
  $Name1 = $_POST['Name'];
  $FirstName1 = $_POST['FirstName'];
  $Description1 = $_POST['Description'];
  $Enterprise1 = $_POST['enterprise'];


echo $Name1.' '.$FirstName1.' '.$Description1.' '.$Enterprise1;


  $sql = "
  INSERT INTO Client ( `nom`,`Prenom`,`description`,`idEntreprise`) VALUES ('$Name1',
    '$FirsName1', '$Description1', '$Enterprise1')";

mysql_query($sql);


?>

            <script src="node_modules/jquery/dist/jquery.js"></script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.js"></script>
            <script src="js/script.js"></script>
</body>

</html>