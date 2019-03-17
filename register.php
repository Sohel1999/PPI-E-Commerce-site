<?php require_once 'partials/__header.php' ?>
<?php
    require_once 'vendor/autoload.php';
    use  App\classes\User;
  if(isset($_POST['register'])){
      $register=new User();
      $register->userRegister($_POST,$_FILES);
  }
?>
<main style="margin-top:10px">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-sm-8">
                <div class="card card-body">
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="col-sm-12">
                            <h1 class="text-center text-secondary">Register</h1>
                        </div>
                        <div class="form-group row">
                            <label for="inputFname" class="col-sm-2 col-form-label">First Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputFname" placeholder="First Name" name="first_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Last Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Last Name" name="last_name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">username</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputEmail3" placeholder="Username" name="username">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="email">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputEmail3" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" id="inputEmail3" placeholder="Password" name="password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Photo</label>
                            <div class="col-sm-10">
                                <input type="file" class="" id="inputPassword3" name="photo">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10">
                                <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>






<?php  require_once 'partials/__footer.php'?>
