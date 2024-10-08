<?php 

include './inc/db.php';
include './inc/form.php';
include './inc/select.php';
include './inc/db_close.php';
?>
<?php include_once './parts/header.php'; ?>

    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
    <div class="col-md-5 p-lg-5 mx-auto ">
        <img src="images/001.png">
      <h1>السلام عليكم</h1>
      <p class="lead fw-normal">باقي على التسجيل</p>
      <h3 id="countdown"></h3>

<div class="container">
    <ul class="list-group list-group-flush" b >
        <li class="list-group-item"><h3 >اربح معنا</h3></li>
        <li class="list-group-item"><h3 > سجل الان </h3></li>
        <li class="list-group-item"><h3> للتواصل </h3></li>
        <li class="list-group-item"><h3 > saeedhaddad225@gmail.com </h3></li>
    </ul>
</div>

     </div>
</div>

    <div class="container">

    <div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto my-5">

    <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" >
        <h3>الرجاء ادخال معلوماتك</h3>

    <div class="mb-3">
        <label for="firstName" class="form-label">الاسم الأول</label>
        <input type="text" name="firstName" id="firstName" class="form-control" value="<?php echo $firstName ?>">
        <div id="emailHelp" class="form-text error "><?php echo $errors ['firstNameError']  ?></div>
    </div>

    <div class="mb-3">
        <label for="lastName" class="form-label">الاسم الاخير</label>
        <input type="text" name="lastName"  class="form-control" value="<?php echo $lastName  ?>">
        <div class="form-text error "><?php echo $errors['lastNameError']  ?></d iv>
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">البريد الاكتروني</label>
        <input type="text" name="email" id="email" class="form-control" value="<?php echo $email  ?>">
        <div class="form-text error "><?php echo $errors['emailError']  ?>  </div>
    </div>

    <button type="submit" name="submit" class="btn btn-primary">ارسال المعلومات</button>
    </form>
</div>
</div>

    <div class="loader-con">
        <div id="loader">
            <canvas id="circularLoader" width="200" height="200"></canvas>
        </div>
    </div>
<!-- Button trigger modal -->
<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" id="random" class="btn btn-primary">
     اختيار عشوائي
    </button>
</div>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
            <h5 class="modal-title" id="modalLabel"> تم اختيار </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <?php foreach($users as $user) : ?>
            <h2 class="display-3 text-center modal-title" id="modalLabel"> <?php  echo htmlspecialchars($user['FirstName'] .' '. htmlspecialchars($user['LastName'])) ;?> </h2>
        <?php endforeach; ?>

      </div>
    </div>
  </div>
</div>

<canvas id="confetti"></canvas>

<!--<button id="button" class="button-53" role="button">Celebrate!!!</button>-->

<script src="https://cdn.jsdelivr.net/npm/js-confetti@latest/dist/js-confetti.browser.js"></script>

<!--
<button> 
  Click for confetti
</button>

<button class='hoverme'> 
  Hover for confetti
</button>

    <div id="cards" class="row mb-5 pb-5 ">

            <div class="col-sm-6">
                <div class="card my-2 bg-light">
                    <div class="card-body">
                        <h5 class="card-titel"> </h5>
                        <p class="card-text">   <?php  echo htmlspecialchars(($user['Email'])) ;?></p>
                    </div>
                </div>
            </div>

</div>
      -->

<?php include_once './parts/footer.php';?>