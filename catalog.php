<?php
include 'header.php'; //подключение шапки
?>

<main id="main" class="main">
  <?php
  include 'side-menu.php'; //боковое меню
  ?>
  <div class="container">
    <div class="row">
      <h2> Каталог </h2>
      <div class="col-lg-8">

        <!-- Строка поиска -->
        <form class="search-form d-flex align-items-center mt-2" method="POST" action="#">
          <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Поиск" aria-label="Поиск" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="button" id="button-addon2">Поиск</button>
          </div>
        </form>
      </div>

      <!-- Кнопка фильтр  -->
      <div class="col-lg-4 mt-2">
        <div class="dropdown">
          <button type="button" class="btn btn-primary dropdown-toggle " data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"> Фильтр </button>
          <form class="dropdown-menu p-2 mt-2">
            <p class="mt-3 mb-1"><strong>Возраст</strong></p>
            <div class="mb-2">
              <div class="form-check p-1 pt-0 mx-1">

                <input type="checkbox" id="contactChoice1" name="zero" checked>
                <label for="contactChoice1" class="me-4">0+</label>

                <input type="checkbox" id="contactChoice1" name="six">
                <label for="contactChoice1">6+</label>
                <br>
                <input type="checkbox" id="contactChoice1" name="twelve">
                <label for="contactChoice1" class="me-3">12+</label>

                <input type="checkbox" id="contactChoice1" name="eighteen">
                <label for="contactChoice1">18+</label>
              </div>
            </div>


            <p class="mt-3 mb-1"><strong>Количество игроков</strong></p>
            <div class="mb-4">
              <div class="form-check p-1 pt-0 mx-1">

                <input type="text" id="contactChoice1" name="contact" placeholder="мин" class="form-control  w-50 p-2">

                <input type="text" id="contactChoice1" name="contact" placeholder="макс" class="form-control  w-50 p-2 mt-2 mb-0 ">
              </div>

              <p class="mt-3 mb-1"><strong>Время игры</strong></p>
              <div class="mb-4">
                <div class="form-check p-1 pt-0 mx-1">


                  <label for="contactChoice1" class="me-4">до 15 мин</label>
                  <input type="checkbox" id="contactChoice1" name="eighteen">
                  <br>

                  <label for="contactChoice1" class="me-3">16 - 30 мин</label>
                  <input type="checkbox" id="contactChoice1" name="eighteen">
                  <br>

                  <label for="contactChoice1" class="me-3">31 - 60 мин</label>
                  <input type="checkbox" id="contactChoice1" name="eighteen">
                  <br>

                  <label for="contactChoice1" class="me-2">61 - 120 мин</label>
                  <input type="checkbox" id="contactChoice1" name="eighteen">
                  <br>

                  <label for="contactChoice1" class="me-4">более 2 ч.</label>
                  <input type="checkbox" id="contactChoice1" name="eighteen">
                </div>
              </div>
            </div>

            <button type="submit" class="btn btn-primary ms-2 mb-1">Применить</button>
          </form>
        </div>
      </div>
    </div>

    <!-- row-cols-3 означает, что 3 колонки будет выводиться на одной строке -->
    <!-- Ссылка на пояснение: https://getbootstrap.su/docs/5.2/layout/grid/#ряд-колонок -->
    <div class="row row-cols-3">
      <?php

      // $mysqli = new mysqli('localhost', 'root', 'root', 'pstgu'); 
      $mysqli = new mysqli('mysql-182064.srv.hoster.ru','srv182064_pstgu','pstgu2022','srv182064_pstgu_new');
      $result = $mysqli->query('SELECT * FROM `game ad`'); //забираю данные из БД

      while ($row = $result->fetch_assoc()) // получаем все строки в цикле по одной
      {
        $name_game = $row['game name']; //название игры
        $city = $row['sity']; //город
        $barter = 'бесплатно'; //способ обмена
        echo '<div class="col mt-3 col-12-sm text-start" style="border-radius: 20px;">
            <div class="card card_game" style="width: 18rem;">
            <a href="product_card.php" class="btn"> <img src="assets/img/game_of_trons.jpg" class="card-img-top" alt="..."></a>
            <div class="card-body text-start"> 
            <h5 class="card-title fw-weight-bolder text-capitalize">' . $name_game . '</h5>
              <p class="card-text text-capitalize">' . $city . '</p>
              <p class="card-text text-uppercase">' . $barter . '</p>
              <a href="product_card.php" class="btn btn-primary">Добавить избранное</a>
            </div>
          </div> 
          </div>';
      }


      $result->free();
      $mysqli->close();
      ?>
    </div>
</main>
</body>