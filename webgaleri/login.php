<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<section class="h-110 gradient-form" style="background-color: #eee;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-6">
        <div class="card rounded-3 text-black">
          <div class="row g-0">
            <div class="col-lg-15">
              <div class="card-body p-md-5 mx-md-4">

                <div class="text-center">
                  <img src="assets/img/icon.png"
                    style="width: 185px;" alt="logo">
                  <h4 class="mt-1 mb-5 pb-1">WEB GALERI FOTO</h4>
                </div>

                <form action="config/proses-login.php" method="POST" >
                  <p>LOGIN SEKARANG</p>

                  <div class="form-outline mb-4">
                    <input type="text" name="username" class="form-control"/>
                    <label class="form-label" >Username</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control" />
                    <label class="form-label" >Password</label>
                  </div>

                  <div class="text-center pt-1 mb-5 pb-1">
                    <button class="btn btn-primary" type="submit" name="kirim" >login</button>
                  </div>

                  <div class="d-flex align-items-center justify-content-center pb-4">
                    <p class="mb-0 me-2">Belum memiliki akun?</p>
                    <a href="register.php"><button type="button" class="btn btn-outline-danger">Registrasi</button></a>
                  </div>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>