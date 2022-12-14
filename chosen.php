<?php 
  session_start();
  include 'header.php';
  include 'side-menu.php';
  include 'forms/conect.php';
?>

<body>

<main id="main" class="main">
<div class="container ">
<div class="row my-2">
<h1> Избранное </h1>
</div>
  <div class="row row-cols-3 pt-2">
      <?php
      $id = $_SESSION['user']['id'];
      
      $result = $mysql->query("SELECT * FROM `chosen` WHERE `user_id` = '$id'");
      
      while ($row = $result->fetch_assoc()){
          $id_game = $row['game_id'];
          
      
          $result_game = $mysql->query("SELECT * FROM `game ad` WHERE `id_game` = '$id_game'");
          $row2 = $result_game->fetch_assoc();

          $id_game2 = $row2['id_game'];
          
      

          $name_game = $row2['game_name']; //название игры
          $city = $row2['sity']; //город
          $barter = $row2['present']; //способ обмена настолкой
          if($barter == 1)
            $barter = "бесплатно";
          else 
            $barter = "обмен";

          if($row['foto1']== NULL)
            $foto1 = "null_foto.png";
          else
            $foto1 =$row['foto1'];
      
            echo '  <div class="col mt-3 col-12-sm text-start" >
                      <div div class="card card_game shadow-lg " style="width: 18rem; border-radius: 20px;">
                      <a href="#" class="btn text-decoration-none" > <img src="/trpo-pro/img/'.$foto1.'" class="card-img" alt="..."></a>
                        <div class="card-body text-start"> 
                        <h5 class="card-title fw-weight-bolder text-capitalize text-truncate" style="max-width: 200px;">' . $name_game . '</h5>
                          <p class="card-text text-capitalize">' . $city . '</p>
                          <p class="card-text text-uppercase">' . $barter . '</p>
                          
                          <form action="product_card.php" method="get">
                            <input type="hidden" name="id_game" value= '. $id_game .' />
                            <input class="button btn btn-primary" type="submit" value="Карточка товара">
                          </form>
                          
                          <form action="delete_chosen-BD.php" method="get">
                            <input type="hidden" name="id_game" value= '. $id_game .' />
                            <input class="p-1 mt-2 button btn btn-danger" type="submit" value="Удалить">
                          </form>
                        </div>
                      </div> 
                    </div>';
      
      }
      $result_game->free();
      $result->free();
      $mysql->close();
      ?>
  </div>
</div>
</main>