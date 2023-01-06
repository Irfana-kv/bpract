<!DOCTYPE html>
<html lang="en">
<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>
<body>
       <a href="{{url('student')}}">Students</a>
     <h2>{{@$student->first_name}} {{@$student->last_name}}</h2>
     <h2>{{@$student->school->name}}</h2>  
     <h2>{{@$student->email}}</h2>  
     <h2>{{@$student->phone_number}}</h2>  
</body>
</html>