<?php 
  // Файл pages-contact.php отображает страницу технической поддержки
  include 'header.php';
  include 'side-menu.php';
?>

<body>

<main id="main" class="main">
<!--
  <div class="container">
        <div class="row g-5">
              <div class="col-md-12 col-lg-12">
                <form class="needs-validation" novalidate="">
                  <div class="row g-3">

                    <h2> Техническая поддержка </h2>

                    
                    <div class="col-md-6 col-lg-6">
                        <div class="row g-3">
                          <div class="col-sm-10">
                            <label for="city" class="form-label">Выберите тему обращения</label>
                            <select class="form-select" id="city" required="">
                              <option value="">Не работает элемент сайта</option>
                              <option>Не пускает с логином и паролем на сайт</option>
                              <option>Проблемы сети</option>
                              <option>Недоступен сервер</option>
                              <option>Сайт недоступен (но сервер доступен)</option>
                              <option>Другое</option>
                            </select>
                            <div class="invalid-feedback">
                              Пожалуйста, выберите тему запроса.
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                </form>
              </div>
        </div>
  </div>
  -->
  <!-- переход из pages-contact.php в pages-contact-BD.php с помощью метода post -->
  <form action="pages-contact-BD.php" method="post">
    <div class="container ">
      <div class="row mt-2 mb-1">
        <h1> Техническая поддержкае </h1>
      </div>
      
      <!-- поле ввода электронной почты -->
      <div class="col-sm-8">
        <label for="exampleFormControlInput1" class="form-label">Укажите Вашу электронную почту</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="пример: name@example.com">
      </div>
      
      <br>

      <!-- поле ввода текста возникшей проблемы -->
      <div class="col-sm-10">
        <label for="exampleFormControlTextarea1" class="form-label">Как воспроизводится проблема и о какой услуге речь</label>
        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" placeholder="Опишите свою проблему по существу, без длительных вступлений и «воды», но с указанием всех необходимых данных." rows="3"></textarea>
      </div>
      
      <br><br>

      <!-- по нажатии будет произведена попытка записи email и text в БД -->
      <button class="btn btn-primary w-75" type="submit">Отправить</button>
    </div>
  </form>

</main>