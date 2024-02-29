{{-- blade version --}}
<h1>{{ $heading }}</h1>
@if(count($listings)==0)
<p>no listings</p>
@endif
@foreach($listings as $listings)
<h2>{{ $listings['title']}}</h2>
<p>{{ $listings['description']}}</p>
@endforeach