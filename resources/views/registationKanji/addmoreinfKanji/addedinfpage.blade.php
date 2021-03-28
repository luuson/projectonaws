@extends('layouts.app')
@section('content')


   @if(session('messenge'))
        <div class="alert-danger">
            {{session('messenge')}}
             </div>
        @endif

 

<div class="table  table-striped">
	<table>
		
		<tr>
			<th>kanji</th>
			<th>hiragana</th>
			<th>han viet</th>
			<th>nghia</th>
			<th>vidu</th>

			<th>y nghia</th>
		
		</tr>
		
		
			@foreach ($addedinf as $list)
			<tr>
			<td>{{$list->kanji->kanji}}</td>
			<td>{{$list->hiragana}}</td>
			<td>{{$list->hantu}}</td>
			<td>{{$list->hanghia}}</td>
			<td>{{$list->onyomi}}</td>
			<td>{{$list->vidu}}</td>
			<td>{{$list->nhatnghia}}</td>

		

			<td>
				<form action="/addedinf/{{$list->id}}/edit" method="get" >
					@csrf
				<button class="btn btn-primary" type="submit">Edit</button> 
				</form>

			</td>
			<td>
				<form action="/addedinf/{{$list->id}}" method="post" >
					@method('delete')
					@csrf
				<button type="submit"  class=" btn btn-primary">Delete</button>
				</form>
				
			</td>

			</tr>
		@endforeach
		</table>




@endsection