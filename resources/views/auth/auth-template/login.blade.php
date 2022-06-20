<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="../dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/css/login.css" />

    <!-- css style -->

    <title>Login</title>
  </head>
  <body>
    <div class="container my-auto">
      <div class="row">
        <div class="card mx-auto">
          <div class="card-body">
            <img src="../assets/img/Logo Raga Sukma.png" alt="logo" class="rounded mx-auto d-block mb-2 logo" />

            <form class="form-login">
              <div class="mb-3 mail">
                <label for="exampleInputEmail1" class="form-label">Email </label>
                <input type="email" class="form-control" id="exampleInputEmail1" />
              </div>
              <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" />
              </div>

              <a href="#" class="btn btn-primary justify-content-center d-flex mt-4">Login</a>
              <a href="#" class="d-flex justify-content-center mt-3 forgot">Forgot Password?</a>
            </form>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="card mx-auto mt-2">
          <div class="card-body text-center">
            <p>Don't have an account? <a href="#">Create an Account</a></p>
          </div>
        </div>
      </div>
    </div>
    <!-- Javascript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="../dist/js/bootstrap.min.js"></script>
  </body>
</html>
