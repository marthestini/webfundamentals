<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SortingHat</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="bg">
    

        <div class="whiteSpace">
        </div>

        <div class="buttons">
        <button type="button" id="Slytherin" > 
        Slytherin
        </button>
        <button type="button" id="Ravenclaw" > 
        Ravenclaw
        </button>
        <button type="button" id="Gryffindor" > 
        Gryffindor
        </button>
        <button type="button" id="Hufflepuff" > 
        Hufflepuff
        </button>

        </div>
        

    <?php

    $dbHostname = "localhost"; 
    $dbUsername = "sortingHat";
    $dbPassword = "Gryffindor123";
    $dbName = "sortingHat";
    $conn = mysql_connect($dbHostname, $dbUsername, $dbPassword, $dbName);


    include ('account.php');
    if($conn->connect_error){
        echo "$conn->connect_error";
        die("Connection Failed : ". $conn->connect_error);
      } else {
        $stmt = $conn->prepare("insert into Users(Firstname, Lastname, Gender, Age, Skill) values('$Firstname', '$Lastname', '$Gender', '$Age', '$Skill')");
        $stmt->bind_param("sssssi", $Firstname, $Lastname, $Gender, $Age, $Skill);
        $execval = $stmt->execute();
        echo $execval; 
        echo '<i style="color:red;font-size:30px;font-family:calibri ;">
        oké, succesvol! </i> ';
       ?> 
       <form action="account.php" >
    
    ?>
            

    <script href="script.js" type="script/text"></script>
    </body>
    </html>