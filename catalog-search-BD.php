<?php
include 'header.php';
include 'forms/conect.php'; //подключение шапки
?>

<main id="main" class="main">
    <div class="container">
        <div class="row">
            <h1>Результат поиска</h1>
            <div class="col-lg-8">

                <!-- Строка поиска -->
                <form class="search-form d-flex align-items-center mt-2 " method="POST" action="catalog-search-BD.php">
                    <div class="input-group mb-3 shadow p-0 mb-1 bg-body rounded">
                        <input type="search" name="search" class="form-control " placeholder="Поиск" aria-label="Поиск" aria-describedby="button-addon2">
                        <button class="btn btn-primary" type="submit" id="button-addon2">Поиск</button>
                        <!-- <input class="btn btn-primary" name="submit" type="submit" id="button-addon2" value="поиск"> -->
                    </div>
                </form>
            </div>

            <!-- Кнопка фильтр  -->
            <div class="col-lg-4 mt-2">
                <div class="dropdown">
                    <button type="button" class="btn btn-primary dropdown-toggle shadow" data-bs-toggle="dropdown" aria-expanded="false" data-bs-auto-close="outside"> Фильтр </button>
                    <form class="dropdown-menu p-2 mt-2">
                        <p class="mt-3 mb-1"><strong>Возраст</strong></p>
                        <div class="mb-2">
                            <div class="form-check p-1 pt-0 mx-1">

                                <input type="checkbox" id="contactChoice1" name="zero">
                                <label for="contactChoice1" class="me-4">0+</label>

                                <input type="checkbox" id="contactChoice1" name="six">
                                <label for="contactChoice1">6+</label>
                                <br>
                                <input type="checkbox" id="contactChoice1" name="twelve">
                                <label for="contactChoice1" class="me-3">12+</label>

                                <input type="checkbox" id="contactChoice1" name="eighteen">
                                <label for="contactChoice1">18+</label>
                            </div>
                        </div>


                        <p class="mt-3 mb-1"><strong>Количество игроков</strong></p>
                        <div class="mb-4">
                            <div class="form-check p-1 pt-0 mx-1">

                                <input type="text" id="contactChoice1" name="contact" placeholder="мин" class="form-control  w-50 p-2">

                                <input type="text" id="contactChoice1" name="contact" placeholder="макс" class="form-control  w-50 p-2 mt-2 mb-0 ">
                            </div>

                            <p class="mt-3 mb-1"><strong>Время игры</strong></p>
                            <div class="mb-4">
                                <div class="form-check p-1 pt-0 mx-1">


                                    <label for="contactChoice1" class="me-4">до 15 мин</label>
                                    <input type="checkbox" id="contactChoice1" name="eighteen">
                                    <br>

                                    <label for="contactChoice1" class="me-3">16 - 30 мин</label>
                                    <input type="checkbox" id="contactChoice1" name="eighteen">
                                    <br>

                                    <label for="contactChoice1" class="me-3">31 - 60 мин</label>
                                    <input type="checkbox" id="contactChoice1" name="eighteen">
                                    <br>

                                    <label for="contactChoice1" class="me-2">61 - 120 мин</label>
                                    <input type="checkbox" id="contactChoice1" name="eighteen">
                                    <br>

                                    <label for="contactChoice1" class="me-4">более 2 ч.</label>
                                    <input type="checkbox" id="contactChoice1" name="eighteen">
                                </div>
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary ms-2 mb-1">Применить</button>
                    </form>
                </div>
            </div>
        </div>


        <?php
        include 'side-menu.php'; //боковое меню
        if (strlen($_POST['search']) != NULL) { //проверка введено ли наз-ие игры
            $search = $_POST['search'];
            $query = mysqli_query($mysql, "SELECT * FROM `game ad` WHERE `game name` LIKE '%$search%' ");

            if ($query->num_rows > 0) {
                echo '<div class="row row-cols-3">';
                while ($row = mysqli_fetch_assoc($query)) // получаем все строки в цикле по одной
                {
                    $name_game = $row['game name']; //название игры
                    $city = $row['sity']; //город
                    $barter = $row['present']; //способ обмена настолкой
                    
                    if($barter == 1)
                    $barter = "бесплатно";
                    else 
                    $barter = "обмен";

                    echo '<div class="col mt-3 col-12-sm text-start" style="border-radius: 20px;">
                        <div class="card card_game shadow-lg " style="width: 18rem;">
                        <a href="product_card.php" class="btn"> <img src="assets/img/game_of_trons.jpg" class="card-img-top" alt="..."></a>
                        <div class="card-body text-start"> 
                        <h5 class="card-title fw-weight-bolder text-capitalize">' . $name_game . '</h5>
                        <p class="card-text text-capitalize">' . $city . '</p>
                        <p class="card-text text-uppercase">' . $barter . '</p>
                        <a href="product_card.php" class="btn btn-primary">Добавить избранное</a>
                        </div>
                    </div> 
                    </div>';
                }
                echo '</div>';
            } else { //если не нашлась игра в БД
                echo '<div class="card mt-2 text-center">
            <div class="card-body">
            <h5 class="card-title">Внимание</h5>
            <p class="card-text">На данный момент нет такой настольной игры</p>
            <a href="catalog.php" class="btn btn-warning    ">Вернуться к каталогу</a>
            </div>
            </div>';
            }
        } else if (strlen($_POST['search']) == NULL) { //если пользователь ничего не ввел
            echo '<div class="card mt-2 text-center">
        <div class="card-body">
        <h5 class="card-title">Внимание</h5>
        <p class="card-text">Вы ничего не написали вернутся к каталогу</p>
        <a href="catalog.php" class="btn btn-warning    ">Вернуться к каталогу</a>
        </div>
        </div>';
        }

        /// Поиск по фильтру ///

        if ( isset($_POST['delivery']) == true ){
            echo "Покупатель заказал доставку"; 
       }


        ?>


    </div>
</main>