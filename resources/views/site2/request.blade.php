
<br>
{{ $msg }} <br> 
{{ $email }} <br>
{{ $name }} <br>


{{-- @if ($msg == 'hello')
    <h1>{{ 'active' }}</h1>
@endif --}}

<h1>{{ $msg == 'hello' ? 'active' : 'non active'}}</h1> {{-- if short --}}