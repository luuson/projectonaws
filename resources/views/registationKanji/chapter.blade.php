@extends('layouts.apps')
@section('content')





@foreach ($show as $list)

<div class="row">
	<div class="col-md-4">
		<div class="card 	" style="background-color: black">
			<div class="card-header display-1 text-lg-center" style="color: white">{{$list->kanji}}
			</div>
			<div class="card-body ">
	  				<div class="text-light">Hán Việt
	  					:{{$list->hantu}}</div>
	  				<div class="text-light">Ý nghĩa:{{$list->ynghia}}</div>
	  				<div class="text-light">訓:{{$list->onyomi}}</div>
	  					
	  				<div class="text-light">音:{{$list->kunyomi}}</div>
	  				<div class="text-light">Hint:{{$list->cachghinho}}</div>

  					 
    
 					 		
			</div>

				</div>



	<div class="table  table-striped">
		<table>

<h4>ví dụ</h4>
		@foreach($list->addmoreinfkanji as $add)


		<tr>
				<td class="text-truncate">{{$add->hantu}}</td>
				<td class="text-truncate">{{$add->hiragana}}</td>
				<td class="text-truncate">{{$add->hangnhia}}</td>
				<td class="text-truncate">{{$add->onyomi}}</td>
				<td class="text-truncate">{{$add->vidu}}</td>
				<td class="text-truncate">{{$add->nhatnghia}}</td>



		</tr>
		@endforeach
		</table>
		
		
	</div>
	
</div>
@endforeach

<div class="table  table-striped">
	<table>
		
		<tr>
			<th>kanji</th>
			<th>han tu</th>
			<th>y nghia</th>
			<th>cach ghi nho</th>
			<th>unyomi</th>
			<th>kunyomi</th>
		</tr>
		
		
			@foreach ($show as $list)
			<tr>
			<td>{{$list->kanji}}</td>
			<td>{{$list->hantu}}</td>
			<td>{{$list->ynghia}}</td>
			<td>{{$list->cachghinho}}</td>
			<td>{{$list->onyomi}}</td>
			<td>{{$list->kunyomi}}</td>
	
			</tr>
		@endforeach
		</table>
</div>




@endsection