<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Register</title>
</head>
<body>
<img src="img/school_gallery.jpg" style="width: 220px; margin-left:510px;">
<center>
<p>SELAMAT DATANG DI ADMIN SCHOOL GALLERY <br> SMKN 2 BANJARMASIN</p>
</center>
<div class="card mt-3 bg-body-secondary" style="width: 15rem; margin-left: 500px;">
  <div class="card-body">
    <form action="reg" method="post">
      @csrf
        <input class="mb-2" type="text" name="name" placeholder="Username" style="border-radius:5px; width:210px ;">
        <input class="mb-2" type="email" name="email" placeholder="Email" style="border-radius:5px; width:210px;">
        <input class="mb-2" type="password" name="password" placeholder="Password" style="border-radius:5px; width:210px;">
        <input class="mb-2" type="password" placeholder="Konfirmasi Password" style="border-radius:5px; width:210px;"><br>
        <button class="mb-2" style="border-radius:5px;">Register</button>
    </form>
  </div>
</div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
</html>