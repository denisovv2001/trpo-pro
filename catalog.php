<?php 
  include 'header.php';
  include 'side-menu.php';
?>

<body>

<main id="main" class="main">

<div class="container ">
  <div class="row">
    <div class="col-lg-6 col-md-12">
    <h2> Каталог </h2>

      <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
     </div> <!-- End Search Bar  -->
    
    <div class="card" style="width: 18rem;">
        <a href="product_card.php" class="btn"> <img src="assets/img/game_of_trons.jpg" class="card-img-top" alt="..."></a>
        
        <div class="card-body text-start">
          <h5 class="card-title fw-weight-bolder">Игра престолов</h5>
          <p class="card-text">Москва</p>
          <p class="card-text">БЕСПЛАТНО</p>
          <a href="product_card.php" class="btn btn-primary">Добавить избранное</a>
          
         
        </div>
      
    </div>
  </div>

</div>

</main>
</body>