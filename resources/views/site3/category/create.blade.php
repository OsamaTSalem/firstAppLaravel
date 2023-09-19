<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <h4> Create Category </h4>

        @include('parts.errors')


        <form method="POST" action=" {{ route('category.store') }} ">
            @csrf
            <div class="mb-3">
                <lable>Category Name</lable>
                <input name="name" class="form-control">
            </div>
            <div class="mb-3">
                <lable>Category Description</lable>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success w-100">Submit</button>
            </div>
            
        </form>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
