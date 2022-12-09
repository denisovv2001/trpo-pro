<?php 
  include 'header.php';
  include 'side-menu.php';
?>

<!DOCTYPE html>
<html>

<body>

<main id="main" class="main">

<div class="container">
        <div class="row g-5">
              <div class="col-md-12 col-lg-12">
                
                
                <form action="new_game_to_shop-BD.php" method="post" enctype="multipart/form-data">
                  <form class="needs-validation" novalidate="">
                    <div class="row g-3">
                      <form action="new_game_to_shop-BD.php" method="post" enctype="multipart/form-data">

                        <h2> Создать объявление </h2>

                        <div class="col-md-6 col-lg-6">
                          
                            <div class="row g-3">

                              <div class="col-sm-6">
                                <label for="NameTheGame" class="form-label"><strong>Название игры</strong></label>
                                <input type="text" class="form-control" name="gamename" id="NameTheGame" required>
                                <div class="invalid-feedback">
                                  Название игры обязательно.
                                </div>
                              </div>

                              
                              <div class="col-md-5">
                                <label for="NameTheGame" class="form-label"><strong>Город</strong></label>
                                <select class="form-select" name="sity" id="city">
                                  <option>Город...</option>
                                  <option value = "Москва">Москва</option>
                                  <option value = "Санкт-Петербург">Санкт-Петербург</option>
                                  <option value = "Новосибирск">Новосибирск</option>
                                  <option value = "Екатеринбург">Екатеринбург</option>
                                  <option value = "Казань">Казань</option>
                                  <option value = "Челябинск">Челябинск</option>
                                  <option value = "Краснодар">Краснодар</option>
                                </select>
                                <div class="invalid-feedback">
                                  Пожалуйста, выберите действующий город.
                                </div>
                              </div>


                              <div class="col-md-6 col-lg-6">
                                <label for="NameTheGame" class="form-label"><strong>Время игры</strong></label>                        
                                <div class="form-check p-1 pt-0 mx-1">
                                  <input type="text" id="contactChoice1" name="mintime" placeholder="мин" class="form-control">
                                  <input type="text" id="contactChoice1" name="maxtime" placeholder="макс" class="form-control">
                                </div>
                              </div>


                              <div class="col-md-5 col-lg-5">
                                <div class="row">
                                <label for="NameTheGame" class="form-label"><strong>Количество игроков</strong></label>                        
                                <div class="form-check p-1 pt-0 mx-1">
                                  <input type="text" id="contactChoice2" name="qualitymin" placeholder="мин" class="form-control">
                                  <input type="text" id="contactChoice2" name="qualitymax" placeholder="макс" class="form-control">
                                </div>
                                </div>
                              </div>


                              <div class="col-md-6 col-lg-6">
                                <label for="NameTheGame" class="form-label"><strong>Минимальный возраст</strong></label>
                                <div class="form-check p-1 pt-0 mx-1">
                                  <input type="text" id="contactChoice1" name="age" placeholder="Например - 7" class="form-control  w-65 p-2" required>
                                  <div class="invalid-feedback">
                                    Возраст.
                                  </div>
                                </div>
                              </div>

                            <!--
                              <div class="my-3 col-md-6 col-lg-6">
                                <label for="NameTheGame" class="form-label"><strong>Обмен/Подарок</strong></label>
                                <div class="form-check">
                                  <input id="exchange" name="present" type="radio" class="form-check-input">
                                  <label class="form-check-label" value="0">Обмен</label>
                                </div>
                                <div class="form-check">
                                  <input id="gift" name="present" type="radio" class="form-check-input">
                                  <label class="form-check-label" value="1">Подарок</label>
                                </div>
                              </div> -->

                              <div class="col-md-5">
                                <label for="NameTheGame" class="form-label"><strong>Обмен/Бесплатно</strong></label>
                                <select class="form-select" name="present" id="p">
                                  <option>...</option>
                                  <option value = "1">Бесплатно</option>
                                  <option value = "0">Обмен</option>
                                </select>
                                <div class="invalid-feedback">
                                  Пожалуйста, выберите бесплатно или обмен.
                                </div>
                              </div>

                            </div>

                        </div>


                        
                          <div class="col-md-6 col-lg-6 col-sm-12">
                          
                              <div class="row g-3">

                                
                                <input class="form-control w-75" type="file" name="foto1">
                                <input class="form-control w-75" type="file" name="foto2">
                                <input class="form-control w-75" type="file" name="foto3">

                              
                                  
                                <textarea type="text" name="comment"class="form-control" placeholder="Описание к игре" id="floatingTextarea" style="height: 177px;"></textarea>
                                

                              </div>
                            
                          </div>    
                        
                        <div class="col-lg-6  col-md-12 d-flex">
                          
                            <button class="w-80 btn btn-primary btn-lg container-fluid" type="submit">Создать объявление</button>

                        </div>

                      
                    </div>
                  </form>
                </form>
              </div>
        </div>
</div>
</main>

<script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/chart.js/chart.min.js"></script>
<script src="assets/vendor/echarts/echarts.min.js"></script>
<script src="assets/vendor/quill/quill.min.js"></script>
<script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
<script src="assets/vendor/tinymce/tinymce.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>