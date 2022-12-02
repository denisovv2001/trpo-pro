<?php 
  include 'header.php';
  include 'side-menu.php';
?>

<body>

  <main id="main" class="main">
    <?php

    $result = $mysql->query('SELECT * FROM `game ad`');
    while ($row = $result->fetch_assoc()) // получаем все строки в цикле по одной
      {
        $users_id = $row['users_id']

        if(getmyuid() == $users_id)
        $name_game = $row['game_name']; //название игры
        $city = $row['sity']; //город
        $barter = $row['present']; //способ обмена настолкой
        if($barter == 1)
          $barter = "бесплатно";
        else 
          $barter = "обмен";
    echo '<body>

      <div class="container ">
        <div class="row">
          <div class="col-7">
            <h2> Название игры </h2>
          </div>

          <div class="col-1 mb-3">
            <a class="btn btn-primary" href="#" role="button"><i class="bi bi-bookmark"></i></a>
          </div>
        </div>

        <div class="row">
          <div class="col-8">
              
              <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
                <div class="carousel-indicators">
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                  <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
              
                <div class="carousel-inner">
                  <div class="carousel-item active">
                    <img src="assets/img/game_of_trons.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/game_of_trons2.jpg" class="d-block w-100" alt="...">
                  </div>
                  <div class="carousel-item">
                    <img src="assets/img/game_of_trons3.png" class="d-block w-100" alt="...">
                  </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Предыдущий</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Следующий</span>
                </button>
              </div>

            </div>

            <div class="col-4 col-sm">
              <h2 class="fs-2 text-center "><strong>БЕСПЛАТНО<i class="bi-gift ms-2"></i></strong></h2>

              <div class="card" style="width: 18rem;">  
                <div class="card-body">
                  <h5 class="card-title">Имя Фамилия</h5>
                  <h6 class="card-subtitle mb-2 text-muted">Москва</h6>
                  <p class="card-text">Номер телефона</p>
                  <p class="card-text">Адрес почты</p>
                </div>
              </div>

              <div class="card">
                <div class="card-body">
                  Некий текст амукмйиутвстйоцтвостйцотсойцтсжицисшршм й урц сшц ув  в р мйтуковтотфс й усто
                </div>
              </div>
            </div>

          </div>
        </body>
      </main>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    </body>';
    ?>
</body>
</html>
