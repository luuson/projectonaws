@extends('layouts.apps')

@section('content')

<div class="container">

<div class="row mt-lg-5">
    <div class="col-4"></div>
    <div class="col-md-5">

        @if(session('messenge'))
        <div class="alert-danger">
            {{session('messenge')}}
             </div>
        @endif
       
<form  method="POST" action="{{ url('addmoreinf') }}">
    @csrf
 <div class="form-group">
  
    <input type="hidden"  name="kanji_id" value="{{$addmoreinf->id}}" >
  
  </div>

  <div class="form-group">
    <label for="kanji">han tu :</label>
    <input type="text" class="form-control" id="tuhan" name="tuhan" aria-describedby="emailHelp">
   
  </div>
   <div class="form-group">
    <label for="hiragana">hiragana:</label>
    <input type="text" class="form-control" id="hiragana" name="hiragana" aria-describedby="emailHelp">
   
  </div>
  <div class="form-group">
    <label for="nghiahan">han viet:</label>
    <input type="text" class="form-control" id="nghiahan" name="nghiahan" >
  </div>

  <div class="form-group">
    <label for="onyomi">y nghia :</label>
    <input type="text" class="form-control" id="onyomi" name="onyomi" >
  </div>

   <div class="form-group">
    <label for="kanji">vidu :</label>
    <input type="text" class="form-control" id="vidu" name="vidu" aria-describedby="emailHelp">
   
  </div>

   <div class="form-group">
    <label for="nhatnghia">nhat nghia:</label>
    <input type="text" class="form-control" id="nhatnghia" name="nhatnghia" >
  </div>

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




</div>

</div>  

</div>
@endsection