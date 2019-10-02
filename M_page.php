<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <h1><a href="M_page.php">We Can Do It</a></h1>
    <div id = "grid">
      <ol>
        <?php
        $list = scandir('data');
        $i = 0;
        while($i<count($list)){
          if($list[$i] != '.'){
            if($list[$i] != '..'){
              ?>
              <li><a href="M_page.php?id=<?=$list[$i]?>"><?=$list[$i]?></a></li>
              <?php
            }
          }
          $i = $i + 1;
        }
        ?>
      </ol>
      <div id = "article">
        <h2>
          <?php
          if(isset($_GET['id'])){
            echo $_GET['id'];
          } else {
            echo "Welcome";
          }
          ?>
        </h2>
        <?php
        if(isset($_GET['id'])){
          echo file_get_contents("data/".$_GET['id']);
        } else {
            echo "Today ".date("Y-m-d H:i:s");
        }
        ?>
      </div>
    </div>
  </body>
</html>
