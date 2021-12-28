<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>SortingHat</title>
        <link rel="stylesheet" href="styleAccountForm.css">
    </head>
    <body class="bg">
    
    <form method="POST" action="sorting.php" >

        <div class="form">
            <label for="form-firstname">
                Firstname
            </label>
            <br/>
            <input type="text" name="Firstname" id="form-firstname" required="true">
        </div>
        <div class="form">
            <label for="form-lastname">
                Lastname
            </label>
            <br/>
            <input type="text" name="lastname" id="form-lastname" required="true">
        </div>
        <div class="form">
            <label for="form-age">
                Age
            </label>
            <br/>
            <input type="number" name="age" id="form-age" required="true">
        </div>
        
        <div class="form">
            <label for="form-gender">
                gender
            </label>
            <br/>
            <input type="text" name="gender" id="form-gender"required="true" >
        </div>

        <div class="form">
            <label for="form-password">
                Password
            </label>
            <br/>
            <input type="password">
        </div>
        <div class="form">
            <label for="form-skill">
                Your best Wizard skill
            </label>
            <br/>
            <input type="text" name="form-skill" id="form-skill" >
        </div>
        <br/>
        <div class="form">
        <button type="submit form" >
            submit the form
        </button>
</div>
</form>

    <?php

    $dbHostname = "ID364064_sortingHat.db.webhosting.be"; 
    $dbUsername = "ID364064_sortingHat";
    $dbPassword = "Gryffindor123";
    $dbName = "ID364064_sortingHat";

   
    

    ?>
            

    <script href="script.js" type="script/text"></script>
    </body>
    </html>