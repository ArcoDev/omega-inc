<!DOCTYPE HTML>
<html>

<head>

  <title>00_Login</title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="container d-flex justify-content-center align-items-center caja-login">
    <div class="card text-center card-login shadow-lg">
      <div class="card-header w-100 bg-white d-flex align-items-center justify-content-between">
        <div class="contenedor-titulo">
          <h1>LOGIN:</h1>
        </div>
        <div class="contenedor-img">
          <img src="logos\logo_01.bmp" class="mx-auto d-block img-thumbnail img-login">
        </div>
      </div>
      <div class="card-body">
        <form>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label float-start">Email address</label>
            <input type="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" placeholder="Email Address" required>
          </div>
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label float-start">Password</label>
            <input type="password" class="form-control" id="inputPassword" placeholder="Password" required>
          </div>
        </form>
      </div>
      <div class="card-footer text-muted d-flex justify-content-end">
        <button type="button" class="btn btn-primary btn-lg">
          <a href="./01_Main.html" class="text-decoration-none text-white">Login</a>
        </button>
      </div>
    </div>
  </div>
</body>
</html>