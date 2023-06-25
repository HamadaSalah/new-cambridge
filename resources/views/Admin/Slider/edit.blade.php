@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;">Edit Slider </h2>

<div class="clearfix"></div>

<form method="POST" action="{{route('admin.slider.update', $slider->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="img">IMG</label>
        <img src="{{asset($slider->img)}}" alt="" style="width: 100px;height: 100px;display: block;margin-bottom: 20px;border-radius: 5px">
        <input type="file" class="form-control" id="img" name="img"  placeholder="Write Body..">
    </div>
    <div class="form-group">
        <label for="name">top head</label>
        <textarea type="name" class="form-control mb-3" id="name" name="top_head"  placeholder="Write top_head.." value="">{!!$slider->top_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("top_head");
        </script>
        
     </div>
     <div class="form-group">
        <label for="name">Head</label>
        <textarea type="name" class="form-control mb-3" id="name" name="head"  placeholder="Write Head.." value="">{!!$slider->head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("head");
        </script>
        
     </div>
     <textarea name="editor"></textarea>
    <script>
        ClassicEditor
            .create( document.querySelector( 'textarea[name="editor"]' ), {
                toolbar: [ 'heading', '|', 'bold', 'italic', 'underline', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo', 'fontColor', 'fontBackgroundColor' ]
            } )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>

 
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@push("styles")
<script src="https://cdn.ckeditor.com/ckeditor5/30.1.0/classic/ckeditor.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/37.0.1/classic/ckeditor.js"></script>@endpush
@endsection
