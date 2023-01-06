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

<a href="{{url('school/create')}}">Create School</a>
<table>
       <thead>
              <th>Name</th>
              <th>Email</th>
              <th>Actions</th>
       </thead>
       <!-- <tbody> -->
@foreach(@$schools as $school)
<tr>

<td>{{@$school->name}}</td>
       <td>{{@$school->email}}</td>
              <td>
                     <a href="{{url('school/edit/'.$school->id)}}">edit</a>
                     <a href="{{url('school/view/'.$school->id)}}">View</a>
                     <a href="{{url('school/delete/'.$school->id)}}">Delete</a>

              </td>
</tr>
@endforeach
       <!-- </tbody> -->
</table>
       
</body>
</html>