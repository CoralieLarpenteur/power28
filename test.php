<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <?php require_once 'tools/head.php'; ?>
  </head>
  <body>

    <h1>cette page permet de tester le code avant de l'incorperer au site</h1>
    <?php $prix=1200 ?>

    Checkbox: <input type="checkbox" id="myCheck" onclick="myFunction()">

    <p id="demo"></p>

    <script>
    function myFunction() {
        var x = document.getElementById("myCheck").checked;
        document.getElementById("demo").innerHTML = x;
        if (x == true) {
          document.getElementById("demo").innerHTML = <?php echo $prix ?> + 45;
        }
        else {
          document.getElementById("demo").innerHTML = <?php echo $prix ?> + 0;
        }
    }
    </script>



      <?php require_once 'tools/footer.php'; ?>
  </body>
</html>
