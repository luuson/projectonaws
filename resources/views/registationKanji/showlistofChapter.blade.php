@extends('layouts.apps')
@section('content')







<ul>
	  @for ($i = 1; $i < 10; $i++)
   <li><a href="\registerKanji\{{$i}}"> chappter {{$i}}</a></li>
     @endfor

</ul>





@endsection