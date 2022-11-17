<?php 
  include 'header.php';
  include 'side-menu.php';
?>

<body>

<main id="main" class="main">

<div class="container">
        <div class="row g-5">
              <div class="col-md-12 col-lg-12">
                <form class="needs-validation" novalidate="">
                  <div class="row g-3">

                    <h2> Создать объявление </h2>

                    <div class="col-md-6 col-lg-6">
                      
                        <div class="row g-3">

                          <div class="col-sm-6">
                            <label for="NameTheGame" class="form-label">Название игры</label>
                            <input type="text" class="form-control" id="NameTheGame" placeholder="" value="" required="">
                            <div class="invalid-feedback">
                              Название игры обязательно.
                            </div>
                          </div>

                          <div class="col-md-5">
                            <label for="city" class="form-label">Город</label>
                            <select class="form-select" id="city" required="">
                              <option value="">Город...</option>
                              <option>Москва</option>
                              <option>Санкт-Петербург</option>
                            </select>
                            <div class="invalid-feedback">
                              Пожалуйста, выберите действующий город.
                            </div>
                          </div>

                          <label for="age" class="form-label">Возраст игрока от:</label>

                          <div class="col-md-2">
                            <label class="form-check-label" for="same-address">0+</label>
                            <input type="checkbox" class="form-check-input" id="same-address">
                          </div>

                          <div class="col-md-2">
                            <label class="form-check-label" for="same-address">6+</label>
                            <input type="checkbox" class="form-check-input" id="same-address">
                          </div>

                          <div class="col-md-2">
                            <label class="form-check-label" for="same-address">12+</label>
                            <input type="checkbox" class="form-check-input" id="same-address">
                          </div>

                          <div class="col-md-2">
                            <label class="form-check-label" for="same-address">18+</label>
                            <input type="checkbox" class="form-check-input" id="same-address">
                          </div>

                          <div class="col-md-6">
                            <label for="numberPlayers" class="form-label">Кол-во игроков:</label>
                          </div>

                          <div class="col-md-3">
                            <label for="minNumberPlayers" class="form-label">min</label>
                            <input type="text" class="form-control" id="minNumberPlayers" placeholder="" required="">
                            <div class="invalid-feedback">
                              Введите минимальное количество игроков.
                            </div>
                          </div>

                          <div class="col-md-3">
                            <label for="maxNumberPlayers" class="form-label">max</label>
                            <input type="text" class="form-control" id="maxNumberPlayers" placeholder="" required="">
                            <div class="invalid-feedback">
                              Введите максимальное количество игроков.
                            </div>
                          </div>

                          <div class="col-md-5">
                            <label for="gameTime" class="form-label">Время игры</label>
                            <select class="form-select" id="gameTime" required="">
                              <option value="">...</option>
                              <option>до 15 мин</option>
                              <option>16-30 мин</option>
                              <option>31-60 мин</option>
                              <option>1-2 часа</option>
                              <option>более 2-ух часов</option>
                            </select>
                            <div class="invalid-feedback">
                              Пожалуйста, выберите время игры.
                            </div>
                          </div>

                          <div class="my-3">
                            <label for="exchangeOrGift" class="form-label">Обмен/подарок</label>
                            <div class="form-check">
                              <input id="exchange" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
                              <label class="form-check-label" for="exchange">Обмен</label>
                            </div>
                            <div class="form-check">
                              <input id="gift" name="paymentMethod" type="radio" class="form-check-input" required="">
                              <label class="form-check-label" for="gift">Подарок</label>
                            </div>
                          </div>

                          

                        </div>
                      
                    </div>


                    
                      <div class="col-md-6 col-lg-6 col-sm-12">
                       
                          <div class="row g-3">

                            <img src="assets/img/game_of_trons.jpg" alt="Game" class="card-img-top" style="width: 300px">
                           
                              <div class="d-flex justify-content-center pt-2">
                                <a href="#" class="btn btn-primary btn-sm mx-2" title="Upload new game image"><i class="bi bi-upload"></i></a>
                                <a href="#" class="btn btn-danger btn-sm " title="Remove game image"><i class="bi bi-trash"></i></a>
                              </div>
                            

                          </div>
                        
                      </div>    
                    
                    <div class="col-lg-6  col-md-12 d-flex">
                    
                      
                        <button class="w-80 btn btn-primary btn-lg container-fluid" type="submit">Создать объявление</button>
      
                    
                    </div>


                  </div>
                </form>
              </div>
        </div>
</div>
</main