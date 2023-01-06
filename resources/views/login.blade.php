<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
       
<div>

<form method="POST">
@csrf
<label for="email">Email</label>
<input type="email" id="email" name="email" placeholder="email"><br>
<label for="password">Password</label>
<input type="password" id="password" name="password" placeholder="Password"><br>
<button type="submit">Login</button>
</form>

</div>


</body>
</html>