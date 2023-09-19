<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>


    <div class="container my-5">
        <h2>Form 1</h2>
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $i)
                        <li>{{$i}}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

       
        <form class="group-control" method="POST" action="{{ route('form1Submit') }}">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input name="name" class="form-control @error('name') is-invalid @enderror" placeholder="User Name">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
                {{-- <input name="name" class="form-control " placeholder="User Name">
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror --}}
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input {{--type="email"--}} name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email">
                @error('email')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3"> 
                <label>Age</label>
                <input type="number" name="age" class="form-control @error('age') is-invalid @enderror" placeholder="Your Age">
                @error('age')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            <div class="mb-3"> 
                <label>Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Your Password">
                @error('password')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>
            {{-- <div class="mb-3">
                <label>City</label>
                <select  name="city" class="form-control @error('city') is-invalid @enderror"" >
                    <option selected disabled>Select City</option>
                    <option>test 1</option>
                    <option>test 2</option>
                    <option>test 3</option>
                    <option>test 4</option>
                    <option>test 5</option>
                    <option>test 6</option>
                </select>
                @error('city')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div>     --}}
            <div class="mb-3">
                <button type="submit" class="btn btn-success btn-lg w-100">Submit</button>
            </div>
        </form>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(".alert").fadeTo(2000,500).slideUp(500, function(){
        $(".alert").slideUp(500);
        }); // الانتظار 5 ثواني ثم يطلع بموشن كذا (اي لا تختفي مرة واحدة)
        
    </script>
</body>
</html>