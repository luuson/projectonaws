@extends('layouts.apps')
@section('content')

	
		<div class="mt-lg-5"></div>
	
				<form  method="POST" action="\registerKanji\{{$show->id}}">
				@csrf
				@method('PATCH')
				

				<div class="form-group">
					<label for="kanji">chapper :</label>
					<select name="chapper" id="chapper" class="form-control">
					<option selected="" value="{{$show->chapper}}">
						{{$show->chapper}}

					</option>
					     @for ($i = 1; $i < 10; $i++)
   					 <option value="{{$i}}">{{$i}}</option> 
   						  @endfor
					</select>
				</div>
					
  <div class="form-group">
    <label for="kanji">Kanji :</label>
    <input type="text" class="form-control" id="kanji" name="kanji" value="{{$show->kanji}}">
   
  </div>
  <div class="form-group">
    <label for="hantu">hán việt:</label>
    <input type="text" class="form-control" id="hantu" name="hantu" value="{{$show->hantu}}">
  </div>

  <div class="form-group">
    <label for="ynghia">y nghia:</label>
    <input type="text" class="form-control" id="ynghia" name="ynghia"value="{{$show->ynghia}}" >
  </div>

   <div class="form-group">
    <label for="cachghinho">cach nghi nho:</label>
    <input type="text" class="form-control" id="cachghinho" name="cachghinho" value="{{$show->cachghinho}}" >
  </div>

  <div class="form-group">
    <label for="hantu">onyomi:</label>
    <input type="text" class="form-control" id="onyomi" name="onyomi"value="{{$show->onyomi}}" >
  </div>
  <div class="form-group">
    <label for="hantu">kunyomi:</label>
    <input type="text" class="form-control" id="kunyomi" name="kunyomi" value="{{$show->kunyomi}}">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
	








@endsection