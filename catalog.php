<?php
include 'header.php'; //подключение шапки
include 'forms/conect.php';
?>

<main id="main" class="main">
  <?php
  include 'side-menu.php'; //боковое меню
  ?>
  <div class="container">
    <div class="row">
      <h1> Каталог </h1>
      <div class="col-lg-9">

        <!-- Строка поиска -->
        <form class="search-form d-flex align-items-center mt-2 " method="POST" action="catalog-search-BD.php">
          <div class="input-group mb-3 shadow p-0 mb-1 bg-body rounded" >
            <input type="search" name = "search"  class="form-control " placeholder="Поиск" aria-label="Поиск" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="submit" id="button-addon2">Поиск</button>
          </div>
        </form>
      </div>

      <!-- Кнопка фильтр  -->
      <div class="col-lg-3 mt-2">
        <div class="dropdown" >
          <button type="button" class="btn btn-primary dropdown-toggle shadow" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"> Фильтр </button>
          <form class="dropdown-menu p-2 mt-2" method="POST" action="Result.php">
            <!-- Возраст -->
            <p class="mt-3 mb-1"><strong>Возраст</strong></p>
              <div class="form-check mb-2 p-1 pt-0 mx-4">
                <input class="form-check-input" type="radio" name="MyRadio" value="First" checked> 3-5 <br> 
                <input class="form-check-input" type="radio" name="MyRadio" value="Second"> 6-12 <br>
                <input class="form-check-input" type="radio" name="MyRadio" value="Second"> 12- 14 <br>
                <input class="form-check-input" type="radio" name="MyRadio" value="Second"> 14+
              </div>

            <!-- Количество игроков -->
              <p class="mt-3 mb-1"><strong>Количество игроков</strong></p>
              <div class=" mb-2 pt-0">
                <input type="text" id="contactChoice1" name="min_player" placeholder="мин" class="form-control  w-50 p-2">
                <input type="text" id="contactChoice1" name="max_player" placeholder="макс" class="form-control  w-50 p-2 mt-2 mb-0 ">

                <p class="mt-3 mb-1"><strong>Время игры</strong></p>
                <input type="text" id="contactChoice1" name="min_time" placeholder="мин" class="form-control  w-50 p-2">
                <input type="text" id="contactChoice1" name="max_time" placeholder="макс" class="form-control  w-50 p-2 mt-2 mb-0 ">

                <!-- Город -->
              <p class="mt-3 mb-1"><strong>Город</strong></p>
                <select class="form-select" id="city" required="" name="city_choice">
                <option value="">Город...</option>
                <option>Москва</option>
                <option>Санкт-Петербург</option>
                <option>Волгоград</option>
                <option>Екатеринбург</option>
                <option>Казань</option>
                <option>Нижний Новгород</option>
                <option>Новосибирск</option>
                <option>Омск</option>
                <option>Ростов-на-Дону</option>
                <option>Самара</option>
                <option>Уфа</option>
                <option>Челябинск</option> 
                </select>
                <div class="invalid-feedback">
                Пожалуйста, выберите действующий город.
                </div>
              </div>   
            <input type="submit" class="btn btn-primary ms-2 mb-1" value="Применить">
          </form>
        </div>
      </div>
    </div>

    <!-- row-cols-3 означает, что 3 колонки будет выводиться на одной строке -->
    <!-- Ссылка на пояснение: https://getbootstrap.su/docs/5.2/layout/grid/#ряд-колонок -->
    <!-- <div class="row row-cols-3 bg-secondary bg-opacity-10 ps-5 pt-3" style=" border-radius: 20px;"> -->
    <div class="row row-cols-3 pt-2">
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
            <h5 class="card-title fw-weight-bolder text-capitalize">' . $name_game . '</h5>
              <p class="card-text text-capitalize">' . $city . '</p>
              <p class="card-text text-uppercase">' . $barter . '</p>
              <form action="product_card.php" method="get">
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
    </div>
    
</main>
</body>