<h1>
    Home Page
</h1>
{{'index page'}} <br>  {{-- temblete engine {{}} by blade ==> place php echo --}}

<h2>{{ "my age  $age"}}</h2> 
@foreach ($data as $i)
    <li>{{$i}}</li>
@endforeach