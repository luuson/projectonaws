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
       
<form  method="POST" action="{{ url('registerKanji') }}">
    @csrf
<div class="form-group">
    <label for="chapper">chapper :</label>
    <select name="chapper" id="chapper" class="form-control">
        @for ($i = 1; $i < 10; $i++)
    <option value="{{$i}}">{{$i}}</option> 
     @endfor

    </select>
   
  </div>

  <div class="form-group">
    <label for="kanji">Kanji :</label>
    <input type="text" class="form-control" id="kanji" name="kanji" required="">
   
  </div>
  <div class="form-group">
    <label for="hantu">hán việt:</label>
    <input type="text" class="form-control" id="hantu" name="hantu" required="" >
  </div>

  <div class="form-group">
    <label for="ynghia">y nghia:</label>
    <input type="text" class="form-control" id="ynghia" name="ynghia" required="" >
  </div>

   <div class="form-group">
    <label for="cachghinho">cach nghi nho:</label>
    <input type="text" class="form-control" id="cachghinho" name="cachghinho" required="">
  </div>

  <div class="form-group">
    <label for="hantu">onyomi:</label>
    <input type="text" class="form-control" id="onyomi" name="onyomi" required="" >
  </div>
  <div class="form-group">
    <label for="hantu">kunyomi:</label>
    <input type="text" class="form-control" id="kunyomi" name="kunyomi" required="" >
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




</div>

</div>  

</div>
@endsection