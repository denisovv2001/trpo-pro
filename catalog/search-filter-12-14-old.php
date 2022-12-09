<?php 

if($_POST['age_game'] == "12-14") // поиск фильтра возраст от 12 до 14
{
    $min_age = 12;
    $max_age = 14;
    //////////////////////////////
    if($_POST['min_player'] >= 1 and $_POST['min_time'] >= 1){ //если выбрано кол-во игроков и время игры
        $min_time = $_POST['min_time'];
        $max_time = $_POST['max_time'];

        $min_player = $_POST['min_player'];
        $max_player = $_POST['max_player'];

        $city = $_POST['city_choice'];

        // echo '
        // <div class="col-12 card-body mt-3  px-0">
        // <h4 class = "text-primary">Фильтры:</h4>
        // <button type="button" class="btn btn-primary mb-2 me-2">
        // Возраст: <span class="badge bg-white text-primary">от'. $min_age.'-'. $max_age .'  </span>
        // </button>
        // <button type="button" class="btn btn-primary mb-2 me-2">
        // Кол-во игроков: <span class="badge bg-white text-primary"> мин: '. $min_player.' - макс: '. $max_player .' </span>
        // </button>
        // <button type="button" class="btn btn-primary mb-2 me-2">
        // Время игры <span class="badge bg-white text-primary"> мин: '. $min_time.' - макс: '. $max_time .' </span>
        // </button>
        // <button type="button" class="btn btn-primary mb-2">
        // Город  <span class="badge bg-white text-primary">'.$city.'</span>
        // </button>
        // </div>';

        $result = $mysql->query("SELECT * FROM `game ad`  WHERE `sity` = '$city' AND `age` >= '$min_age' AND `age` <= '$max_age' AND `quality_max` <= '$max_player' AND `max_time` <= '$max_time'");
        
        if($result->num_rows > 0){
            
        echo '
        <div class="col-12 card-body mt-3  px-0">
        <h4 class = "text-primary">Фильтры:</h4>
        <button type="button" class="btn btn-primary mb-2 me-2">
        Возраст: <span class="badge bg-white text-primary">от'. $min_age.'-'. $max_age .'  </span>
        </button>
        <button type="button" class="btn btn-primary mb-2 me-2">
        Кол-во игроков: <span class="badge bg-white text-primary"> мин: '. $min_player.' - макс: '. $max_player .' </span>
        </button>
        <button type="button" class="btn btn-primary mb-2 me-2">
        Время игры <span class="badge bg-white text-primary"> мин: '. $min_time.' - макс: '. $max_time .' </span>
        </button>
        <button type="button" class="btn btn-primary mb-2">
        Город  <span class="badge bg-white text-primary">'.$city.'</span>
        </button>
        </div>';
            echo '<div class="row row-cols-3">';
            while ($row = $result->fetch_assoc()) // получаем все строки в цикле по одной
            {
                $id_game =  $row['id_game'];
                $name_game = $row['game_name']; //название игры
                $city = $row['sity']; //город
                $barter = $row['present']; //способ обмена настолкой
                if($barter == 1)
                $barter = "бесплатно";
                else 
                $barter = "обмен";

                echo '<div class="col mt-3 col-12-sm text-start" >
                <div class="card card_game shadow-lg " style="width: 18rem; border-radius: 20px;">
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
        }

        else{ //если не нашлась игра в БД
            echo '<div class="card mt-2 text-center">
            <div class="card-body">
            <h5 class="card-title">Внимание</h5>
            <p class="card-text">На данный момент нет таких настольных игры</p>
            <a href="catalog.php" class="btn btn-warning    ">Вернуться к каталогу</a>
            </div>
            </div>';
        }
            $result->free();
            $mysql->close();
    }
    
    /////////////////////////////
    if($_POST['min_player'] >= 1) //если выбранно кол-во играков
    {
        $min = $_POST['min_player'];
        $max = $_POST['max_player'];
        $city = $_POST['city_choice'];

        // echo '
        // <div class="col-12 card-body mt-3  px-0">
        // <h4 class = "text-primary">Фильтры:</h4>
        // <button type="button" class="btn btn-primary mb-2 me-2">
        // Возраст: <span class="badge bg-white text-primary">от'. $min_age.'-'. $max_age .'  </span>
        // </button>
        // <button type="button" class="btn btn-primary mb-2 me-2">
        // Кол-во игроков  <span class="badge bg-white text-primary"> мин: '. $min.' - макс: '. $max .' </span>
        // </button>

        // <button type="button" class="btn btn-primary mb-2">
        // Город  <span class="badge bg-white text-primary">'.$city.'</span>
        // </button>
        // </div>';

        $result = $mysql->query("SELECT * FROM `game ad`  WHERE `sity` = '$city' AND `age` >= '$min_age' AND `age` <= '$max_age' AND `quality_max` <= '$max'");
        
        if($result->num_rows > 0){
            echo '
        <div class="col-12 card-body mt-3  px-0">
        <h4 class = "text-primary">Фильтры:</h4>
        <button type="button" class="btn btn-primary mb-2 me-2">
        Возраст: <span class="badge bg-white text-primary">от'. $min_age.'-'. $max_age .'  </span>
        </button>
        <button type="button" class="btn btn-primary mb-2 me-2">
        Кол-во игроков  <span class="badge bg-white text-primary"> мин: '. $min.' - макс: '. $max .' </span>
        </button>

        <button type="button" class="btn btn-primary mb-2">
        Город  <span class="badge bg-white text-primary">'.$city.'</span>
        </button>
        </div>';
            echo '<div class="row row-cols-3">';
            while ($row = $result->fetch_assoc()) // получаем все строки в цикле по одной
            {
                $id_game =  $row['id_game'];
                $name_game = $row['game_name']; //название игры
                $city = $row['sity']; //город
                $barter = $row['present']; //способ обмена настолкой
                if($barter == 1)
                $barter = "бесплатно";
                else 
                $barter = "обмен";

                echo '<div class="col mt-3 col-12-sm text-start" >
                <div class="card card_game shadow-lg " style="width: 18rem; border-radius: 20px;">
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
        }

        else{ //если не нашлась игра в БД
            echo '<div class="card mt-2 text-center">
            <div class="card-body">
            <h5 class="card-title">Внимание</h5>
            <p class="card-text">На данный момент нет таких настольных игры</p>
            <a href="catalog.php" class="btn btn-warning    ">Вернуться к каталогу</a>
            </div>
            </div>';
        }
            $result->free();
            $mysql->close();
        
    }
   ///////////////////////////////
    if($_POST['min_time'] >= 1){ //если выбрано время игры
        $min = $_POST['min_time'];
        $max = $_POST['max_time'];
        $city = $_POST['city_choice'];
        // echo '
        // <div class="col-12 card-body mt-3  px-0">
        // <h4 class = "text-primary">Фильтры:</h4>
        // <button type="button" class="btn btn-primary mb-2 me-2">
        // Возраст: <span class="badge bg-white text-primary">от'. $min_age.'-'. $max_age .'  </span>
        // </button>
        // <button type="button" class="btn btn-primary mb-2 me-2">
        // Время игры <span class="badge bg-white text-primary"> мин: '. $min.' - макс: '. $max .' </span>
        // </button>

        // <button type="button" class="btn btn-primary mb-2">
        // Город  <span class="badge bg-white text-primary">'.$city.'</span>
        // </button>
        // </div>';

        $result = $mysql->query("SELECT * FROM `game ad`  WHERE `sity` = '$city' AND `age` >= '$min_age' AND `age` <= '$max_age' AND `max_time` <= '$max'");
        
        if($result->num_rows > 0){
            echo '
        <div class="col-12 card-body mt-3  px-0">
        <h4 class = "text-primary">Фильтры:</h4>
        <button type="button" class="btn btn-primary mb-2 me-2">
        Возраст: <span class="badge bg-white text-primary">от'. $min_age.'-'. $max_age .'  </span>
        </button>
        <button type="button" class="btn btn-primary mb-2 me-2">
        Время игры <span class="badge bg-white text-primary"> мин: '. $min.' - макс: '. $max .' </span>
        </button>

        <button type="button" class="btn btn-primary mb-2">
        Город  <span class="badge bg-white text-primary">'.$city.'</span>
        </button>
        </div>';

            echo '<div class="row row-cols-3">';
            while ($row = $result->fetch_assoc()) // получаем все строки в цикле по одной
            {
                $id_game =  $row['id_game'];
                $name_game = $row['game_name']; //название игры
                $city = $row['sity']; //город
                $barter = $row['present']; //способ обмена настолкой
                if($barter == 1)
                $barter = "бесплатно";
                else 
                $barter = "обмен";

                echo '<div class="col mt-3 col-12-sm text-start" >
                <div class="card card_game shadow-lg " style="width: 18rem; border-radius: 20px;">
                <a href="product_card.php" class="btn"> <img src="assets/img/game_of_trons.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body text-start"> 
                <h5 class="card-title fw-weight-bolder text-capitalize text-truncate" style="max-width: 200px;">' . $name_game . '</h5>
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
        }

        else{ //если не нашлась игра в БД
            echo '<div class="card mt-2 text-center">
            <div class="card-body">
            <h5 class="card-title">Внимание</h5>
            <p class="card-text">На данный момент нет таких настольных игры</p>
            <a href="catalog.php" class="btn btn-warning    ">Вернуться к каталогу</a>
            </div>
            </div>';
        }
            $result->free();
            $mysql->close();
    }



/////////////////////////////
    if($_POST['age_game'] == "12-14"  and empty($_POST['min_player']) and empty($_POST['min_time'])) { //если не выбирал кол-во игрок и время игры 

        $city = $_POST['city_choice'];
      
        $result = $mysql->query("SELECT * FROM `game ad` WHERE `sity` = '$city' AND `age` >= '$min_age' AND `age` <= '$max_age'");
        
        if($result->num_rows > 0){
                echo '
            <div class="card-body mt-3  px-0">
            <h4 class="text-primary px-0">Фильтры:</h4>
            <button type="button" class="btn btn-primary mb-2 me-2">
            Возраст: <span class="badge bg-white text-primary">от'. $min_age.'-'. $max_age .'  </span>
            </button>
            <button type="button" class="btn btn-primary mb-2">
            Город  <span class="badge bg-white text-primary">'.$city.'</span>
            </button>
            </div>';
            echo '<div class="row row-cols-3">';
            while ($row = $result->fetch_assoc()) // получаем все строки в цикле по одной
            {
                $id_game =  $row['id_game'];
                $name_game = $row['game_name']; //название игры
                $city = $row['sity']; //город
                $barter = $row['present']; //способ обмена настолкой
                if($barter == 1)
                    $barter = "бесплатно";
                else 
                    $barter = "обмен";

                echo '<div class="col mt-3 col-12-sm text-start" >
                <div class="card card_game shadow-lg " style="width: 18rem; border-radius: 20px;">
                <a href="product_card.php" class="btn"> <img src="assets/img/game_of_trons.jpg" class="card-img-top" alt="..."></a>
                <div class="card-body text-start"> 
                <h5 class="card-title fw-weight-bolder text-capitalize text-truncate" style="max-width: 200px;">' . $name_game . '</h5>
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
        }

        else{ //если не нашлась игра в БД
            echo '
            <div class="card-body mt-3  px-0">
            <h4 class="text-primary px-0">Фильтры:</h4>
            <button type="button" class="btn btn-primary mb-2">
            Возраст  <span class="badge bg-white text-primary"> от'. $min_age.'-'. $max_age .' </span>
            </button>
            <button type="button" class="btn btn-primary mb-2">
            Город  <span class="badge bg-white text-primary">'.$city.'</span>
            </button>
            </div>';
            echo '<div class="card mt-2 text-center">
            <div class="card-body">
            <h5 class="card-title">Внимание</h5>
            <p class="card-text">На данный момент нет таких настольных игры с такими параметрами</p>
            <a href="catalog.php" class="btn btn-warning    ">Вернуться к каталогу</a>
            </div>
            </div>';
        }
        
        $result->free();
        $mysql->close();
    }

}
?>