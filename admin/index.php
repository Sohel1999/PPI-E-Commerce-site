<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">

    <title>Admin</title>
</head>
<body>
<main style="margin-top: 150px;">
    <div class="container">
       <div class="row justify-content-center">
           <div class="col-sm-9">
               <div class="card">
                   <div class="card-body"></div>
                    <div class="row justify-content-center">
                        <div class="col-sm-7">
                            <h1 class="h3  font-weight-normal text-center text-secondary mb-3"> Admin panel</h1>
                            <form class="form-signin">
                                <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
                                <label for="inputEmail" class="sr-only">Email address</label>
                                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                                <label for="inputPassword" class="sr-only">Password</label>
                                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                                <div class="checkbox mb-3">
                                    <label>
                                        <input type="checkbox" value="remember-me"> Remember me
                                    </label>
                                </div>
                                <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
                                <p class="mt-5 mb-3 text-muted">&copy; <?php echo date('Y')?></p>
                            </form>
                        </div>
                    </div>
               </div>
           </div>
       </div>
    </div>
</main>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="../assets/js/vendor/modernizr-3.6.0.min.js"></script>
<script src="../assets/js/vendor/jquery-3.3.1.min.js"></script>
<script src="../assets/js/vendor/popper.min.js"></script>
<script src="../assets/js/vendor/bootstrap.min.js"></script>
</body>
</html>