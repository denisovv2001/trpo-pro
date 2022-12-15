<?php 
   include 'header.php';
  include 'forms/conect.php';
  include 'side-menu.php';

?>

<body>

  <main id="main" class="main">
  <div class="container">
    <div class="row mt-2 mb-3">
      <h1> Профиль </h1>
    </div>
      <section class="section profile">
        <div class="row">
          <div class="col-xl-4">

            <div class="card">
              <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

                <img src="assets/img/profile-dog.png" alt="Profile" class="rounded-circle">
                <h2 class="my-3 "><?php echo $_SESSION['user']['name']; ?></h2>
                
                <form action="pages-login.php" method="POST">
                      <input name="myActionName" class=" btn btn-dark" type="submit" value="Выйти из сайта " />
                       <?php
                        if (isset($_POST['myActionName']))
                        {
                          unset($_SESSION['user']);
                          header('Location: pages-login.php');
                        }
                      ?> 
                </form>
                
              </div>
            </div>

          </div>

          <div class="col-xl-8">

            <div class="card">
              <div class="card-body pt-3">
                <!-- Bordered Tabs -->
                <ul class="nav nav-tabs nav-tabs-bordered ">

                  <!-- <li class="nav-item">
                    <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Общие данные</button>
                  </li> -->
                  <h2 class = "text-center pb-3">Общие данные</h2>

                  <!-- <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Редактирование профиля</button>
                  </li>

                  <li class="nav-item">
                    <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Изменить пароль</button>
                  </li> -->

                </ul>
                <div class="tab-content pt-2">

                  <div class="tab-pane fade show active profile-overview" id="profile-overview">

                    <div class="row pt-4">
                      <div class="col-lg-3 col-md-4 label ">ФИО</div>
                      <div class="col-lg-9 col-md-8"><?= $_SESSION['user']['name'];?></div>
                    </div>

                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Город</div>
                      <div class="col-lg-9 col-md-8"><?= $_SESSION['user']['city'];?></div>
                    </div>

    
                    <div class="row">
                      <div class="col-lg-3 col-md-4 label">Электронная почта</div>
                      <div class="col-lg-9 col-md-8"><?= $_SESSION['user']['email'];?></div>
                    </div>


                  </div>

                  <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                    <!-- Profile Edit Form -->
                    <!-- <form>
                      <div class="row mb-3">
                        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Фото профиля</label>
                        <div class="col-md-8 col-lg-9">
                          <img src="assets/img/profile-dog.png" alt="Profile">
                          <div class="pt-2">
                            <a href="#" class="btn btn-primary btn-sm" title="Upload new profile image"><button type="button"class="bi bi-upload" disabled></button></a>
                            <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image" ><button type="button"class="bi bi-trash" disabled></button></a>
                          </div>
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">ФИО</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="fullName" type="text" class="form-control" id="fullName" value="Тимофей Холкин">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Job</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="job" type="text" class="form-control" id="Job" value="Web Designer">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Город</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="city" type="text" class="form-control" id="city" value="Москва">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">Телефон</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="phone" type="text" class="form-control" id="Phone" value="(495) 555 55 55">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Почта</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="email" type="email" class="form-control" id="Email" value="TimHall@yandex.ru">
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Сохранить изменения</button>
                      </div>
                    </form>End Profile Edit Form -->

                  </div>

                  <!-- <div class="tab-pane fade pt-3" id="profile-change-password">
                    
                    <form>

                      <div class="row mb-3">
                        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Текущий пароль</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="password" type="password" class="form-control" id="currentPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">Новый пароль</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="newpassword" type="password" class="form-control" id="newPassword">
                        </div>
                      </div>

                      <div class="row mb-3">
                        <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Повторно введите новый пароль</label>
                        <div class="col-md-8 col-lg-9">
                          <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                        </div>
                      </div>

                      <div class="text-center">
                        <button type="submit" class="btn btn-primary">Поменять пароль</button>
                      </div>
                    </form>End Change Password Form -->

                  </div>

                </div><!-- End Bordered Tabs -->

              </div>
            </div>

          </div>
        </div>
      </section>
  </div>
  </main>
  
</body>

</html>