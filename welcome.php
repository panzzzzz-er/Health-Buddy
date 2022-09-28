<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
    header("location: login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Welcome - <?php $_SESSION['username']?></title>
  </head>
  <body>
    <?php require 'partials/_nav.php' ?>
    <br><br>
    <h3><pre>   Welcome <?php echo $_SESSION['username']?>! Don't forget your medicines today :)</pre></h3>

    <table align="center" cellpadding="20px">
      <tr>
        <td>
          <p> <b>Set new medicines reminder?</b> </p>
          <form action="partials/_medicines.php" method="post">
             <div class="setmedreminder">
                 <label for="medname">Name of medicine? </label>
                 <input type="text" class="form-control" name="medname">
             </div>
             <div class="setmedreminder">
                 <label for="whentotake">When to take?</label>
                 <input type="time" class="form-control" name="whentotake">
             </div>
             <div class="setmedreminder">
                 <label for="doctorname">Prescribed by?</label>
                 <input type="text" class="form-control" name="docname">
             </div> <br>

             <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </td>
        <td rowspan="2">
          <p><b>Your existing reminders: </b></p>
          Medicines reminder: <br>
          <?php require 'partials/_printingmeds.php' ?>
        </td>
        <td>
          <p> <b>Set new doctors visit reminder?</b> </p>
          <form action="_doctorvisit.php" method="post">
             <div class="setdocreminder">
                 <label for="docname">Name of doctor? </label>
                 <input type="text" class="form-control" name="docname">
             </div>
             <div class="setdocreminder">
                 <label for="whentotake">When to visit?</label>
                 <input type="date" class="form-control" name="whentovisit">
             </div>
             <div class="setdocreminder">
                 <label for="doctorname">At what time?</label>
                 <input type="time" class="form-control" name="visittime">
             </div> <br>
             <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </td>
      </tr>
    </table>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <?php require 'partials/_chatbot.php' ?>
  </body>
</html>
