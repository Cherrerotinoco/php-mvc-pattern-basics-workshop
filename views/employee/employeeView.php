<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
      
      <h1>Employee Edit!</h1>

      <?php
        # If employees exist, then render the form with DB values
        # If not, render an empty form and create a new eployee by given ID in URL

        ### Form Logic
        echo $form;
      ?>
    </div>
</body>
</html>
