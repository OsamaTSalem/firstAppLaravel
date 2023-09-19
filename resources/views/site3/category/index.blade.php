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

        @include('parts.session')

        <div class="mb-5">
            <a href="{{ route('category.create') }}" class="btn btn-info w-100">Add</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($categories as $i)
                    <tr>
                        <th scope="row"> {{ $loop->index + 1 }} </th> {{-- $loop->index => عداد من صفر الى ما لا نهاية (+1 اي ابدا من 1 وليس من صفر) --}}
                        <td> {{ $i->name }} </td>
                        <td> {{ $i->description }} </td>
                        <td>
                            <a href="{{ route('site3.sub_category.index', $i->id) }}" class="btn btn-success">View
                                Sub</a>
                            <a href="{{ route('category.edit', $i->id) }}" class="btn btn-info">Edit</a>
                            <form method="post" action="{{route('category.destroy', $i->id)}}">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Are You Sure??')" type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <div>
            {{ $categories->links() }} {{-- بتعرض تصميم الصفحة ليتم عرض باقي الصفوف في صفحات اخرى  --}}  
            {{-- حتى يظهر التصميم بالشكل الصحيح يجب الذهاب على 
                app/Providers/AppServiceProvider.php => Function boot() 
                وكتابة الكود الاتي في حال التصميم الخاص بالموقع من بوتستراب 
                Paginator::useBootstrap(); --}}
        </div>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>

</html>
