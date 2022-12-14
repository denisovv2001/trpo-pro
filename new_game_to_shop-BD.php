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
                    $users_id = $_SESSION['user']['id'];

                    $f1 = $_FILES['foto1'];
                    $foto1 = $f1['name'];

                    $pathFile1 = __DIR__ .'/img/' .$foto1;
                    if(!move_uploaded_file($f1['tmp_name'], $pathFile1)){
                        echo 'Файл не смог загрузиться';
                    }

                    $f2 = $_FILES['foto2'];
                    $foto2 = $f2['name'];

                    $pathFile2 = __DIR__ .'/img/' .$foto2;
                    if(!move_uploaded_file($f2['tmp_name'], $pathFile2)){
                        echo 'Файл не смог загрузиться';
                    }

                    $f3 = $_FILES['foto3'];
                    $foto3 = $f3['name'];

                    $pathFile3 = __DIR__ .'/img/' .$foto3;
                    if(!move_uploaded_file($f3['tmp_name'], $pathFile3)){
                        echo 'Файл не смог загрузиться';
                    }

                    $mysql->query("INSERT INTO `game ad` (`users_id`, `game_name`, `sity`, `age`, `quality_min`, `quality_max`, `min_time`, `max_time`, `comment`, `present`, `foto1`, `foto2`, `foto3`) 
                    VALUES('$users_id', '$game_name', '$sity', '$age', '$quality_min', '$quality_max', '$min_time', '$max_time', '$comment', '$present', '$foto1', '$foto2', '$foto3')");
                    
                    $mysql->close();
                    
                    header('Location: catalog.php');

                    // echo '<div class="container ">
                    // <div class="row">
                    //     <div class="col-12 ">
                    //         <div class="card " style="width: 37rem;  border-radius: 15px; height: 100px;">
                    //         <div class="card-body p-4 ">
                            
                    //         <h1> Игра успешно добавлена! <i class="bi-check-circle text-success" style="width: 300px"></i></h1>
                    //         </div>
                    //         </div>
                    //     </div>
                    // </div>';

            ?>
        </div>
    </main>
</body>
    