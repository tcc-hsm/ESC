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
        <form action="/guest_registration" method="post">
            @csrf
           <label>Name *</label><br>
           <x-input type="text" class="form-control" height="30px" name="name" placeholder="João da Silva" required/><br>
           
           <x-label/>E-mail</label><br>
           <x-input type="text" class="form-control" name="email" placeholder="joao@gmail.com"/><br>

           <x-label/>Phone *</label><br>
           <x-input type="number" class="form-control" name="phone" max="99999999999" placeholder="Area + phone" required /><br>

           <x-label/>Emergency Contact</label><br>
           <x-input type="number" class="form-control" name="emergency_contact" max="99999999999" placeholder="Area + phone "/><br>

           <x-label/>CPF *</label><br>
           <x-input type="number" class="form-control" name="cpf" placeholder="00000000000" required/><br>

           <x-label/>Zip Code *</label><br>
           <x-input type="number" class="form-control" name="zip_code" placeholder="00000000" required/><br>

           <x-label/>Address *</label><br>
           <x-input type="text" class="form-control" name="address" placeholder="Alto da XV" required/><br>

           <x-label/>House Number *</label><br>
           <x-input type="number" class="form-control" name="address" placeholder="Nº" required/><br>

           <x-label/>City *</label><br>
           <x-input type="text" class="form-control" name="city" placeholder="Curitiba" required/><br>

           <x-label/>Region *</label><br>
           <x-input type="text" class="form-control" name="region" placeholder="Parana" required/><br>

           <x-label/>Country *</label><br>
           <x-input type="text" class="form-control" name="country" value="Brazil" required/><br>

           <x-label/>Date Birthday *</label><br>
           <x-input type="date" class="form-control" name="birthday" list="type" required/><br>

           <input type="submit" class="btn btn-warning" value="Save"/><br><br><br>
        </form>
        </div>
    </center>


</body>
</html>
</div>
