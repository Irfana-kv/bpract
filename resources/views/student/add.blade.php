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
<label for="first_name">First Name</label>
<input type="text" id="first_name" name="first_name" placeholder="First name" value="{{@$student->first_name}}"><br>


<label for="last_name">Last Name</label>
<input type="text" id="last_name" name="last_name" placeholder="Last name" value="{{@$student->last_name}}"><br>

<label for="school">School</label>
<select name="school" id="school">
       <option value="">Please Select School</option>
       @foreach(@$schools as $school)
       <option value="{{@$school->id}}" {{@$student->school_id==$school->id?'selected':''}}>{{@$school->name}}</option>
       @endforeach
</select><br>
<label for="email">Email</label>
<input type="email" id="email" name="email" placeholder="email" value="{{@$student->email}}"><br>

<label for="phone_number">Phone Number</label>
<input type="number" id="phone_number" name="phone_number" placeholder="Phone Number" value="{{@$student->phone_number}}"><br>


<button type="submit">Submit</button>
</form>

</div>


</body>
</html>