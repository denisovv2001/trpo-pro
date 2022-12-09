<?php 
  include 'header.php';
  include 'side-menu.php';
  include 'forms/conect.php';
?>

<body>

  <main id="main" class="main">
   

      <div class="container ">

        <?php
          $id_game = $_GET['id_game'];

          $result_game = $mysql->query("SELECT * FROM `game ad` WHERE  `id_game` = '$id_game'");
          $game = $result_game->fetch_assoc(); 

          $users_id = $game['users_id'];

          $result_user = $mysql->query("SELECT * FROM `personal data` WHERE  `users_id` = '$users_id'");
          $user = $result_user->fetch_assoc();

          $game_name = $game['game_name']; 
          $city = $game['sity']; 
          $barter = $game['present']; 
          $comment = $game['comment'];
          
          $nickname = $user['nickname'];
          $mail = $user['@mail'];
           
          echo '
            <div class="row">
              <div class="col-7">
                <h2>' . $game_name . '</h2>
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


              <div class="col-4 col-sm">';
                if($barter == 1) {
                  echo '<h2 class="fs-2 text-center "><strong>БЕСПЛАТНО<i class="bi-gift ms-2"></i></strong></h2>';
                }
                else {
                  echo '<h2 class="fs-2 text-center "><strong>ОБМЕН<i class="bi-gift ms-2"></i></strong></h2>';
                }

                echo '<div class="card" style="width: 18rem;">  
                  <div class="card-body">
                    <h5 class="card-title pb-1">' . $nickname . '</h5>
                    <h6 class="card-subtitle mb-2 text-muted">' . $city . '</h6>
                    <p class="card-text">' . $mail . '</p>
                  </div>
                </div>

                <div class="card">
                  <div class="card-body">
                    ' . $comment . '
                  </div>
                </div>
              </div>

            </div>';
          
          $result_user->free();
          $result_game->free();
          $mysql->close();
        ?>
      </div>
    
  </main>  
</body>
<!-- </html> -->
