<?php
include_once "index_core.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.0/milligram.css" />
  <title>Document</title>
  <style>
    body {
      margin-top: 30px;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="column column-60 column-offset-20 text-center">
        <h2>Febonancy</h2>
        <p>Created By @MD Arif Islam</p>
      </div>
    </div>
    <div class="row">
      <div class="column column-60 column-offset-20 text-center">
        <form action="" method="POST" onSubmit="window.location.reload()">
          <label for="firstNumber">First Number</label>
          <input type="number" name="firstNumber" id="firstNumber" required />
          <label for="secondNumber">Second Number</label>
          <input type="number" name="secondNumber" id="secondNumber" required />
          <label for="limit">Limit</label>
          <input type="number" name="limit" id="limit" required />

          <h5 style="color: green; font-weight: 800;">
            <?php
if ( isset( $_REQUEST['firstNumber'] ) && isset( $_REQUEST['secondNumber'] ) && isset( $_REQUEST['limit'] ) ) {
    febonancy( $firstNumber, $secondNumber, $limit );
}
?>
          </h5>
          <button type="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</body>

</html>