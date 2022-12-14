

<div class="col-lg-9">
    <!-- Строка поиска -->
    <form class="search-form d-flex align-items-center mt-2 " method="POST" action="catalog-search-BD.php">
        <div class="input-group mb-3 shadow p-0 mb-1 bg-body rounded" >
            <input type="search" name = "search"  class="form-control " placeholder="Поиск" aria-label="Поиск" aria-describedby="button-addon2">
            <button class="btn btn-primary" type="submit" id="button-addon2">Поиск</button>
        </div>
    </form>
</div>
    <!-- Кнопка фильтр  -->
<div class="col-lg-3 mt-2">
    <div class="dropdown" >
        <button type="button" class="btn btn-primary dropdown-toggle shadow" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"> Фильтр </button>
        <form class="dropdown-menu p-2 mt-2" method="POST" action="catalog-search-BD.php">
            <!-- Возраст -->
            <p class="mt-3 mb-1"><strong>Возраст</strong></p>
            <div class="form-check mb-2 p-1 pt-0 mx-4">
                <input class="form-check-input" type="radio" name="age_game" value="3-5" checked> 3-5 <br> 
                <input class="form-check-input" type="radio" name="age_game" value="6-12"> 6-12 <br>
                <input class="form-check-input" type="radio" name="age_game" value="12-14"> 12- 14 <br>
                <input class="form-check-input" type="radio" name="age_game" value="14"> 14+
            </div>

            <!-- Количество игроков -->
            <p class="mt-3 mb-1"><strong>Количество игроков</strong></p>
            <div class=" mb-2 pt-0">
            <input type="number" name="min_player"  min="2" placeholder="мин" class="form-control  w-50 p-2">
            <input type="number" name="max_player" max="30" placeholder="макс" class="form-control  w-50 p-2 mt-2 mb-0 ">

            <p class="mt-3 mb-1"><strong>Время игры в минутах</strong></p>
            <input type="number" name="min_time" placeholder="мин" class="form-control  w-50 p-2">
            <input type="number" name="max_time" placeholder="макс" class="form-control  w-50 p-2 mt-2 mb-0 ">

            <!-- Город -->
            <p class="mt-3 mb-1"><strong>Город</strong></p>
            <select class="form-select" id="city" required="" name="city_choice">
                <option value="">Город...</option>
                <option value = "Москва">Москва</option>
                <option value = "Санкт-Петербург">Санкт-Петербург</option>
                <option value = "Новосибирск">Новосибирск</option>
                <option value = "Екатеринбург">Екатеринбург</option>
                <option value = "Казань">Казань</option>
                <option value = "Челябинск">Челябинск</option>
                <option value = "Краснодар">Краснодар</option>
            </select>

            <div class="invalid-feedback mb-3">
                Пожалуйста, выберите действующий город.
            </div>  

            <input type="submit" class="btn btn-primary my-2 ms-4" name="apply" value="Применить">
        </form>
    </div>
</div>