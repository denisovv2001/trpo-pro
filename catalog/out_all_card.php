<?php
      $result = $mysql->query('SELECT * FROM `game ad`'); //забираю данные из БД

      while ($row = $result->fetch_assoc()) // получаем все строки в цикле по одной
      {
        $id_game =  $row['id_game'];
        $name_game = $row['game_name']; //название игры
        $city = $row['sity']; //город
        $barter = $row['present']; //способ обмена настолкой
        if($barter == 1)
          $barter = "бесплатно";
        else 
          $barter = "обмен";

        echo '<div class="col mt-3 col-12-sm text-start" >
            <div class="card card_game shadow-lg " style="width: 18rem; border-radius: 20px;">
            <a href="product_card.php" class="btn"> <img src="assets/img/game_of_trons.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body text-start"> 
            <h5 class="card-title fw-weight-bolder text-capitalize text-truncate" style="max-width: 200px;">' . $name_game . '</h5>
              <p class="card-text text-capitalize">' . $city . '</p>
              <p class="card-text text-uppercase">' . $barter . '</p>
              <form action="product_card.php" method="get" >
              <input type="hidden" name="id_game" value= '. $id_game .' />
              <input class="button btn btn-primary" type="submit" value="Карточка товара">
              </form>
            </div>
          </div> 
          </div>';
      }
      
      $result->free();
      $mysql->close();
      ?>