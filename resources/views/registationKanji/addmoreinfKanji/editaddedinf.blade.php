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
       
<form  method="POST" action="\addedinf\{{$edit->id}}">
    @csrf
    @method('PATCH')
 <div class="form-group">
  
  
  
  </div>

  <div class="form-group">
    <label for="kanji">han tu :</label>
    <input type="text" class="form-control" id="kanji " name="hantu" value="{{$edit->hantu}}">
   
  </div>
 <div class="form-group">
    <label for="hiragana">hiragana:</label>
    <input type="text" class="form-control" id="hiragana" name="hiragana" value="{{$edit->hiragana}}">
  </div>


  <div class="form-group">
    <label for="hannghia">han viet:</label>
    <input type="text" class="form-control" id="hannghia" name="hannghia" value="{{$edit->hannghia}}">
  </div>

  <div class="form-group">
    <label for="onyomi">y nghia</label>
    <input type="text" class="form-control" id="onyomi" name="onyomi"value="{{$edit->onyomi}}" >
  </div>



   <div class="form-group">
    <label for="vidu">vidu:</label>
    <input type="text" class="form-control" id="vidu" name="vidu" value="{{$edit->vidu}}">
  </div>

   <div class="form-group">
    <label for="nhatnghia">dich:</label>
    <input type="text" class="form-control" id="nhatnghia" name="nhatnghia"value="{{$edit->nhatnghia}}" >
  </div>

 

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




</div>

</div>  

</div>
@endsection