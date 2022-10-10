<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Сайт для якихось там чисел</title>
  <link rel="stylesheet" href="Index.css"/>
  <script src="Index.js"></script>
</head>
<body>
  <div id="page">
    <div id="main">
    <form action="Calculate.php" method="post">
      <div id="input">
				<div>
          <div>
            <p>Кількість цифр</p></br>
            <input name="maxAmount" class="inp" type="number" size="20" value="<?php $_SESSION['maxAmount'];?>"/></br>
            <input class="button" type="submit" name="submit" value="Розрахувати">
          </div><div>
            <?php
              if (!$_SESSION["message"] == NULL){
                echo '
                  <div id="message">
                    <p>
                      '.$_SESSION["message"].'
                    </p>
                  </div>
                ';
              }
              $_SESSION["message"] = NULL;
            ?>
          </div>
        </div>
      </div>
    </form>
    </div>
  </div>  
</body>
</html>