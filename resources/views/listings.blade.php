<h1>{{$header}}</h1>

@if (count($listings) != 0 )
    @foreach ($listings as $listing)
        <p>{{$listing['name'];}}</p>
        <p>Age: {{$listing['age']}}</p>
    @endforeach
@else
   <p>No listing found</p>
@endif

