<?php 
  include 'header.php';
  include 'side-menu.php';
?>

<body>

<main id="main" class="main">

<div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text-primary">Ваша корзина</span>
          <span class="badge bg-primary rounded-pill">3</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Наименование продукта</h6>
              <small class="text-muted">Краткое описание</small>
            </div>
            <span class="text-muted">1200₽</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Второй продукт</h6>
              <small class="text-muted">Краткое описание</small>
            </div>
            <span class="text-muted">800₽</span>
          </li>
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Третий элемент</h6>
              <small class="text-muted">Краткое описание</small>
            </div>
            <span class="text-muted">500₽</span>
          </li>
          <li class="list-group-item d-flex justify-content-between bg-light">
            <div class="text-success">
              <h6 class="my-0">Промо-код</h6>
              <small>ПРИМЕРКОДА</small>
            </div>
            <span class="text-success">−500₽</span>
          </li>
          <li class="list-group-item d-flex justify-content-between">
            <span>Всего (РУБ)</span>
            <strong>2000₽</strong>
          </li>
        </ul>

        <form class="card p-2">
          <div class="input-group">
            <input type="text" class="form-control" placeholder="Промо-код">
            <button type="submit" class="btn btn-secondary">Выкупить</button>
          </div>
        </form>
      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Адрес для выставления счета</h4>
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">Имя</label>
              <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Действительное имя обязательно.
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Фамилия</label>
              <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
              <div class="invalid-feedback">
                Действительная фамилия обязательна.
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">Имя пользователя</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" id="username" placeholder="Имя пользователя" required="">
              <div class="invalid-feedback">
                  Имя пользователя обязательно.
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Эл. адрес <span class="text-muted">(Необязательно)</span></label>
              <input type="email" class="form-control" id="email" placeholder="you@example.com">
              <div class="invalid-feedback">
                Пожалуйста, введите действующий адрес электронной почты для получения информации о доставке.
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Адрес</label>
              <input type="text" class="form-control" id="address" placeholder="ул. Фокина" required="">
              <div class="invalid-feedback">
                Пожалуйста, введите свой адрес доставки.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Адрес 2 <span class="text-muted">(Необязательно)</span></label>
              <input type="text" class="form-control" id="address2" placeholder="квартира или дом">
            </div>

            <div class="col-md-5">
              <label for="country" class="form-label">Страна</label>
              <select class="form-select" id="country" required="">
                <option value="">Выберите...</option>
                <option>Россия</option>
              </select>
              <div class="invalid-feedback">
                Пожалуйста, выберите действующую страну.
              </div>
            </div>

            <div class="col-md-4">
              <label for="state" class="form-label">Область</label>
              <select class="form-select" id="state" required="">
                <option value="">Выберите...</option>
                <option>Брянская</option>
              </select>
              <div class="invalid-feedback">
                Пожалуйста, выберите действующую область.
              </div>
            </div>

            <div class="col-md-3">
              <label for="zip" class="form-label">Индекс</label>
              <input type="text" class="form-control" id="zip" placeholder="" required="">
              <div class="invalid-feedback">
                Почтовый индекс обязателен.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="same-address">
            <label class="form-check-label" for="same-address">Адрес доставки такой же, как мой платежный адрес</label>
          </div>

          <div class="form-check">
            <input type="checkbox" class="form-check-input" id="save-info">
            <label class="form-check-label" for="save-info">Сохраните эту информацию для следующего раза</label>
          </div>

          <hr class="my-4">

          <h4 class="mb-3">Оплата</h4>

          <div class="my-3">
            <div class="form-check">
              <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked="" required="">
              <label class="form-check-label" for="credit">Кредитная карта</label>
            </div>
            <div class="form-check">
              <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="debit">Дебетовая карта</label>
            </div>
            <div class="form-check">
              <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
              <label class="form-check-label" for="paypal">PayPal</label>
            </div>
          </div>

          <div class="row gy-3">
            <div class="col-md-6">
              <label for="cc-name" class="form-label">Имя на карте</label>
              <input type="text" class="form-control" id="cc-name" placeholder="" required="">
              <small class="text-muted">Полное имя, как отображено на карточке</small>
              <div class="invalid-feedback">
                Имя на карте обязательно.
              </div>
            </div>

            <div class="col-md-6">
              <label for="cc-number" class="form-label">Номер кредитной карты</label>
              <input type="text" class="form-control" id="cc-number" placeholder="" required="">
              <div class="invalid-feedback">
                Номер кредитной карты обязателен.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-expiration" class="form-label">Срок действия</label>
              <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
              <div class="invalid-feedback">
                Дата истечения карты обязательна.
              </div>
            </div>

            <div class="col-md-3">
              <label for="cc-cvv" class="form-label">CVV</label>
              <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
              <div class="invalid-feedback">
                Защитный код обязателен.
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-primary btn-lg" type="submit">Продолжить оформление заказа</button>
        </form>
      </div>
    </div>
</main