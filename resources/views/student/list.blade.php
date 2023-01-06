<!DOCTYPE html>
<html lang="en">

<head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>Document</title>
</head>

<body>
       <a href="{{url('school')}}">School</a>

       <a href="{{url('student/create')}}">Create Student</a>
       <table>
              <thead>
                     <th>Name</th>
                     <th>School</th>
                     <th>Email</th>
                     <th>Actions</th>
              </thead>
              <!-- <tbody> -->
              @foreach(@$students as $student)
              <tr>

                     <td>{{@$student->first_name}} {{$student->last_name}}</td>
                     <td>{{@$student->school->name}}</td>
                     <td>{{$student->email}}</td>
                     <td>
                            <a href="{{url('student/edit/'.$student->id)}}">edit</a>
                            <a href="{{url('student/view/'.$student->id)}}">View</a>
                            <a href="{{url('student/delete/'.$student->id)}}">Delete</a>

                     </td>
              </tr>
              @endforeach
              <!-- </tbody> -->
       </table>

</body>

</html>