<?php 
  // Файл pages-contact.php отображает страницу технической поддержки
  include 'header.php';
  include 'side-menu.php';
?>

<body>

<main id="main" class="main">
  <!-- переход из pages-contact.php в pages-contact-BD.php с помощью метода post -->
  <form action="pages-contact-BD.php" method="post">
    <div class="container ">
      <!-- поле ввода электронной почты -->
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ваша электронная почта</label>
        <input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
      </div>
      <!-- поле ввода текста возникшей проблемы -->
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Введите свой вопрос</label>
        <textarea name="text" class="form-control" id="exampleFormControlTextarea1" placeholder="расскажите о проблеме" rows="3"></textarea>
      </div>

      <!-- <button type="button" class="btn btn-primary">Отправить</button> -->
      <button class="btn btn-primary w-100" type="submit">Отправить</button>
    </div>
  </form>

</main>