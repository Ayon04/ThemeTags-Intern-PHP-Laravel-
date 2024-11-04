
{{-- @include('views\student_view.blade.php'); --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>


  
    <h1>Update Student</h1>


  
    @if(session()->has('updatemsg'))
    <div class="alert alert-success">
        {{ session()->get('updatemsg') }}
    </div>
    @endif
      
    <form action="{{ url('student_update/'.$student  )}}"  method="POST" >

        {{csrf_field()}}
        @method('PUT')
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"  value="{{ $student->name }}" >

            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            
        </div><br>


        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"  value="{{ $student->username }}">

            @error('username')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>

        <div>
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile"  value="{{ $student->mobile }}">

            @error('mobile')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>

        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email"  value="{{ $student->email }}">

            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>


        <div>
            <label for="password">Password:</label>
            <input type="text" id="password" name="password"  value="{{ $student->password }}" >

            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>


        <div>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>

</body>
</html>
