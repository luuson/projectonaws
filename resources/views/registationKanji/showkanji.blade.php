@extends('layouts.app')
@section('content')


   @if(session('messenge'))
        <div class="alert-danger">
            {{session('messenge')}}
             </div>
        @endif

  <script > 
			function myfunction(){
				var x =confirm("want to delete");
					if (x) {
						return true;
							}
						else return false;
						}
	</script>

        <a href="{{url('registerKanji\create')}} " class="btn-success ">Create  a new chapter</a>

<div class="table  table-striped">
	<table>
		
		<tr>
			<th>chapter</th>
			<th>kanji</th>
			<th>han tu</th>
			<th>y nghia</th>
			<th>cach ghi nho</th>
			<th>unyomi</th>
			<th>kunyomi</th>
		</tr>
		
		
			@foreach ($showLists as $list)
			<tr>
			<td>{{$list->chapper}}</td>
			<td>{{$list->kanji}}</td>
			<td>{{$list->hantu}}</td>
			<td class="text-truncate">{{$list->ynghia}}</td>
			<td class="text-truncate">{{$list->cachghinho}}</td>
			<td>{{$list->onyomi}}</td>
			<td>{{$list->kunyomi}}</td>
		

			<td>
				<form action="/registerKanji/{{$list->id}}/edit" method="get" >
					@csrf
				<button class="btn btn-primary" type="submit">Edit</button> 
				</form>

			</td>
			<td>
				<form action="/registerKanji/{{$list->id}}" method="post" >
					@method('delete')
					@csrf
				<button type="submit"  class=" btn btn-primary" onclick="return myfunction()">Delete</button>
				</form>
				
			</td>
			<td>
				<form action="/registerKanji/{{$list->id}}/AddmoreInf" method="get" >
					@csrf
				<button class="btn btn-primary" type="submit">AddmoreInf</button> 
				</form>

			</td>
			<td>
				<div class="table  table-striped">
				<table>
							<tr>
			<th>han tu</th>
			<th>higarana</th>

			<th>han viet</th>
			<th>y nghia</th>
			<th>vidu</th>

			<th>y nghia</th>
		

			</tr>

				@foreach($list->addmoreinfkanji as $addedlist)
				<tr>
				<td>{{$addedlist->hantu}}</td>
				<td>{{$addedlist->hiragana}}</td>

				<td >{{$addedlist->hannghia}}</td>
				<td class="text-truncate">{{$addedlist->onyomi}}</td>
				<td class="text-truncate">{{$addedlist->vidu}}</td>

				<td class="text-truncate">{{$addedlist->nhatnghia}}</td>
					<td>
				<form action="/addedinf/{{$addedlist->id}}/edit" method="get" >
					@csrf
				<button class="btn btn-primary" type="submit">Edit</button> 
				</form>

				</td>

				<td>

					
				<form action="/addedinf/{{$addedlist->id}}" method="post" >
					@method('delete')
					@csrf
				<button type="submit" onclick=" return myfunction()"  class=" btn btn-primary">Delete</button>
				</form>

				
			   </td>
				</tr>
				@endforeach
				</table>

				</div>
			</td>



			</tr>
		@endforeach
		</table>




@endsection