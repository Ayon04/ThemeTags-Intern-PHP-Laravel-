
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

      
  
    <h1>Create Student</h1>
<div>

    {{-- <h4 style="color:crimson">
        @if ($errors->any())
             @foreach ($errors->all() as $error )
             {{$error}}<br>
                 
             @endforeach
            
        @endif

    
    
    </h4> --}}
</div>

    <form action="{{route('new_student_create')}}"  method="POST" >

        @csrf
   
        
        <div>
            <label for="name">Name:</label>
            <input type="text" id="name" name="name"  value="{{ Request::old('name') }}" >

            @error('name')
            <span class="text-danger">{{ $message }}</span>
            @enderror

            
        </div><br>


        <div>
            <label for="username">Username:</label>
            <input type="text" id="username" name="username"  value="{{ Request::old('username') }}">

            @error('username')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>

        <div>
            <label for="mobile">Mobile:</label>
            <input type="text" id="mobile" name="mobile"  value="{{ Request::old('mobile') }}">

            @error('mobile')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>

        <div>
            <label for="email">Email:</label>
            <input type="text" id="email" name="email"  value="{{ Request::old('email') }}">

            @error('email')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>


        <div>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password"  value="{{ Request::old('password') }}" >

            @error('password')
            <span class="text-danger">{{ $message }}</span>
            @enderror
        </div><br>


        <div>
            <button type="submit">Create</button>
        </div>
    </form>

</body>
</html>
