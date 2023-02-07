<!DOCTYPE html>
<html>

<head>
  <title></title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
</head>

<body>
  <form action="" method="post">
    <label for="">nombre colonne & ligne </label>
    <input type="text" name="number" placeholder="entrer un nombre"><br>
    <input type="submit" value="Submit" name="submit">
  </form>
  <br>
  <br>

  <table width="400px" cellspacing="0px" cellpadding="0px" border="1px">

    <?php
//recuperation du nombre entreer par l'utlisateur pour generer le damier
    if (isset($_POST['submit'])) {

      $number = $_POST['number'];

      for ($row = 1; $row <= $number; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= $number; $col++) {
          $total = $row + $col;
          if ($total % 2 == 0) {
            echo "<td height=60px width=60px bgcolor= white></td>";
          } else {
            echo "<td height=60px width=60px bgcolor=black></td>";
          }
        }
        echo "</tr>";
      }
    }
    ?>
  </table>

</body>

</html>
