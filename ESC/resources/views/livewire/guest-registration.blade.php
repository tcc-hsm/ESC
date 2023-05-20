<div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/css/main.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

    <title>Guest Registration</title>

</head>
<body >
    <center>
        <div class="input-movie-registration">
            <br><br>
        <form action="/movie_registration" method="post">
            @csrf
           <label>Name</label><br>
           <x-input type="text" class="form-control" height="30px" name="name" require/><br>
           
           <x-label/>E-mail</label><br>
           <x-input type="text" class="form-control" name="gender" list="gender"/><br>

           <x-label/>CPF</label><br>
           <x-input type="text" class="form-control" name="picture"/><br>

           <x-label/>Address</label><br>
           <x-input type="text" class="form-control" name="icloud"/><br>

           <x-label/>Phone</label><br>
           <x-input type="text" class="form-control" name="torrent"/><br>

           <x-label/>Birthday</label><br>
           <x-input type="text" class="form-control" name="type" list="type"/><br>

           <x-input type="submit" class="btn btn-warning" value="Save"/><br><br><br>
        </form>
        </div>
    </center>

    <datalist id="type">
      <option value="Movie"></option>
      <option value="Serie"></option>
    </datalist>

    <datalist id="gender">
      <option value="Acao"></option>
      <option value="Animacao"></option> 
      <option value="Aventura"></option> 
      <option value="Comedia"></option> 
      <option value="Romance"></option>
    </datalist>

</body>
</html>
</div>
