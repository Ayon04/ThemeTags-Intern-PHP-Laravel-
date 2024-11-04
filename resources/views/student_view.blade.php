
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Detalis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

    @if(session()->has('messge'))
    <div class="alert alert-success">
        {{ session()->get('messge') }}
    </div>
    @endif
    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Name</th>
            <th scope="col">Mobile</th>
            <th scope="col">Email</th>
            <th scope="col">Delete/Edit</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($students as $students )
            <tr>
                <th scope="row">{{$students->student_id}}</th>
                <td>{{$students->name}}</td>
                <td>{{$students->mobile}}</td>
                <td>{{$students->email}}</td>
                <td><button class="btn btn-dark"> <a href ={{ url('student_edit/'. $students->student_id)}} >update</a></button></td>
                <td><button class="btn btn-danger"> <a href ={{"delete/".$students['student_id']}}>Delete</a></button></td></td>
              </tr>
                
            @endforeach
            {{-- 'delete/{{ $user->id }} --}}
        </tbody>
      </table>
</body>
</html>