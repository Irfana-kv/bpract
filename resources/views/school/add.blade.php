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
       @if(@$errors->any())
       @foreach(@$errors->all() as $error)
       <p>{{$error}}</p>
       @endforeach
       @endif

<form method="POST" enctype="multipart/form-data">
@csrf
<label for="name">Name</label>
<input type="text" id="name" name="name" placeholder="name" value="{{@$school->name}}"><br>


<label for="email">Email</label>
<input type="email" id="email" name="email" placeholder="email" value="{{@$school->email}}"><br>

<label for="website">Website</label>
<input type="text" id="website" name="website" placeholder="Website" value="{{@$school->website}}"><br>
<label for="logo">Logo</label>
<input type="file" id="logo" name="logo" value="{{@$school->logo}}"><br>

<button type="submit">Submit</button>
</form>

</div>


</body>
</html>