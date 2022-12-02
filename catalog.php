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
      <div class="col-lg-8">

        <!-- Строка поиска -->
        <form class="search-form d-flex align-items-center mt-2 " method="POST" action="catalog-search-BD.php">
          <div class="input-group mb-3 shadow p-0 mb-1 bg-body rounded">
            <input type="search" name = "search" class="form-control " placeholder="Поиск" aria-label="Поиск" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="submit" id="button-addon2">Поиск</button>
          </div>
        </form>
      </div>

      <!-- Кнопка фильтр  -->
      <div class="col-lg-4 mt-2">
        <div class="dropdown" >
          <button type="button" class="btn btn-primary dropdown-toggle shadow" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"> Фильтр </button>
          <form class="dropdown-menu p-2 mt-2">
            <!-- Возраст -->
            <p class="mt-3 mb-1"><strong>Возраст</strong></p>
            <div class="mb-2">
              <div class="form-check p-1 pt-0 mx-4">
                <!-- <label class="me-4"><input class = "form-check-input"type="checkbox" id="contactChoice1" name="zero"  > 0+</label>
                <label><input type="checkbox" id="contactChoice1" name="six"> 6+</label>
                <br>
                <label class="me-3"><input type="checkbox" id="contactChoice1" name="twelve"> 12+</label>
                <label><input type="checkbox" id="contactChoice1" name="eighteen"> 18+</label> -->
                <input class="form-check-input" type="radio" name="all_age" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  выбрать всё
                </label>
                <br>
                <input class="form-check-input" type="radio" name="six_age" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  до 6+
                </label>
                <br>
                <input class="form-check-input" type="radio" name="twelve_age" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  до 12+
                </label>
                <br>
                <input class="form-check-input" type="radio" name="ething_age" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  до 18+
                </label>
                <br>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  от 18+
                </label>
              </div>
            </div>
            <!-- Количество игроков -->
            <p class="mt-3 mb-1"><strong>Количество игроков</strong></p>
            <div class="mb-4">
              <div class="form-check p-1 pt-0 mx-1">
                <input type="text" id="contactChoice1" name="min_player" placeholder="мин" class="form-control  w-50 p-2">
                <input type="text" id="contactChoice1" name="max_player" placeholder="макс" class="form-control  w-50 p-2 mt-2 mb-0 ">
              </div>
              <!-- Время игры -->
              <p class="mt-3 mb-1"><strong>Время игры</strong></p>
            <div class="mb-4">
              <div class="form-check p-1 pt-0 mx-1">
                <input type="text" id="contactChoice1" name="min_time" placeholder="мин" class="form-control  w-50 p-2">
                <input type="text" id="contactChoice1" name="max_time" placeholder="макс" class="form-control  w-50 p-2 mt-2 mb-0 ">
              </div>
            </div>
            <!-- Город  -->
            <p class="mt-3 mb-1"><strong>Время игры</strong></p>
            <div class="mb-4">
              <div class="form-check p-1 pt-0 mx-1">
                <label for="city" class="form-label">Город</label>
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
      $result = $mysql->query('SELECT * FROM `game ad`'); //забираю данные из БД

      while ($row = $result->fetch_assoc()) // получаем все строки в цикле по одной
      {
        $name_game = $row['game name']; //название игры
        $city = $row['sity']; //город
        $barter = $row['present']; //способ обмена настолкой
        if($barter == 1)
          $barter = "бесплатно";
        else 
          $barter = "обмен";

        echo '<div class="col mt-3 col-12-sm text-start" style="border-radius: 20px;">
            <div class="card card_game shadow-lg " style="width: 18rem;">
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
      $mysql->close();
      ?>
    </div>
</main>
</body>