<?php 
  session_start();
  include 'header.php';
  include 'side-menu.php';
  include 'forms/conect.php';
?>

<body>

    <main id="main" class="main">
   
        <?php
        echo '<div class="container ">
            <div class="row">
                <div class="col-7">';
                    
        
                        $game_name = $_POST['gamename'];
                        $sity = $_POST['sity'];
                        $age = $_POST['age'];
                        $min_time = $_POST['mintime'];
                        $max_time = filter_var(trim($_POST['maxtime']),FILTER_SANITIZE_STRING);
                        $quality_min = $_POST['qualitymin'];
                        $quality_max = filter_var(trim($_POST['qualitymax']),FILTER_SANITIZE_STRING);
                        $present = $_POST['present'];
                        $comment = filter_var(trim($_POST['comment']),FILTER_SANITIZE_STRING);
                        $foto_one = $_FILES['foto1'];
                        $foto_two = $_FILES['foto2'];
                        $foto_three = $_FILES['foto3'];
                        $r = 3;
                        $foto = "1";
                        $users_id = $_SESSION['user']['id'];

                        $mysql->query("INSERT INTO `game ad` (`users_id`, `game_name`, `sity`, `age`, `quality_min`, `quality_max`, `min_time`, `max_time`, `comment`, `present`, `foto`) 
                        VALUES('$users_id', '$game_name', '$sity', '$age', '$quality_min', '$quality_max', '$min_time', '$max_time', '$comment', '$present', '$foto')");
                        header('Location: my_game.php');
                        $mysql->close();

                        echo '<div class="container ">
                        <div class="row">
                            <div class="col-12 ">
                                <div class="card " style="width: 37rem;  border-radius: 15px; height: 100px;">
                                <div class="card-body p-4 ">
                                
                                <h1> Игра успешно добавлена! <i class="bi-check-circle text-success" style="width: 300px"></i></h1>
                                </div>
                                </div>
                            </div>
                        </div>';

            ?>
        </div>
    </main>
</body>
    