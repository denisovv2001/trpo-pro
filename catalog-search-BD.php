<?php
include 'header.php';
include 'forms/conect.php'; //подключение шапки
?>

<body>
<main id="main" class="main">
    <div class="container">
        <div class="row">
            <h1>Результат поиска</h1>
            <?php
            include 'side-menu.php'; //боковое меню
            include 'catalog/search.php'; //поисковая строка
            ?>
        </div>

        <!-- Поиск без фильтра -->
        <?php
        if (strlen($_POST['search']) != NULL) { //проверка введено ли наз-ие игры
            $search = $_POST['search'];
            $query = mysqli_query($mysql, "SELECT * FROM `game ad` WHERE `game_name` LIKE '%$search%' ");

            if ($query->num_rows > 0) {
                echo '<div class="row row-cols-3">';
                while ($row = mysqli_fetch_assoc($query)) // получаем все строки в цикле по одной
                {
                    $id_game = $row['id_game'];
                    $name_game = $row['game_name']; //название игры
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
                        <form action="product_card.php" method="get">
                            <input type="hidden" name="id_game" value= '. $id_game .' />
                            <input class="button btn btn-primary" type="submit" value="Карточка товара">
                        </form>
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
            $result->free();
            $mysql->close();
        } 
        
        else if (strlen($_POST['search']) == NULL and !isset($_POST['apply'])) { //если пользователь ничего не ввел
            echo '<div class="card mt-2 text-center">
        <div class="card-body">
        <h5 class="card-title">Внимание</h5>
        <p class="card-text">Вы ничего не написали вернутся к каталогу</p>
        <a href="catalog.php" class="btn btn-warning    ">Вернуться к каталогу</a>
        </div>
        </div>';
        }

/// Поиск по фильтру ///
if (isset($_POST['apply'])){ //если нажата кнопка
    
    include 'catalog/search-filter-3-5-old.php'; //поиск от 3 до 5 лет
    include 'catalog/search-filter-6-12-old.php'; //поиск от 6 до 12 лет
    include 'catalog/search-filter-12-14-old.php'; //поиск от 12 до 14 лет
    include 'catalog/search-filter-14-old.php'; //поиск от 14+ лет
    
    }
    ?>

    </div>
</main>
</body>
</html