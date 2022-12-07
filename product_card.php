<?php 
  include 'header.php';
  include 'side-menu.php';
?>

<body>

  <main id="main" class="main">
     <body>

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
                  <h5 class="card-title pb-1">Имя Фамилия</h5>
                  <h5 class="card-title pt-0">ID игры: <strong> <?php echo $_GET['id_game'] ?></strong></h5>
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

      
    </body>
    
</body>
</html>
