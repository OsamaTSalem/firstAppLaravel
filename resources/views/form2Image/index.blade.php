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

        @include('parts.errors')
        
        <form enctype="multipart/form-data" class="group-control" method="POST" action="{{ route('form2Submit') }}">
            @csrf
            <div class="mb-3">
                <label>Name</label>
                <input name="name" class="form-control @error('name') is-invalid @enderror" placeholder="User Name">
                @error('name')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror
            </div> 
                
            <div class="mb-3">
                <label>Image</label>
                <input type="file" name="image" class="form-control @error('image') is-invalid @enderror" placeholder="User Name">
                @error('image')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror    
            </div>

            <div class="mb-3">
                <label>ِAlbom</label>
                <input type="file" multiple name="album[]" class="form-control @error('album') is-invalid @enderror" placeholder="User Name">
                @error('album')
                    <small class="invalid-feedback">{{ $message }}</small>
                @enderror    
            </div>


            <div class="mt-3">
                
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