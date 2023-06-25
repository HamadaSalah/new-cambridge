@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;">Edit KG Page </h2>

<div class="clearfix"></div>
 <form method="POST" action="{{route('admin.kg.update', $police->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <br>
    <div class="form-group">
        <label for="sec1_img">First Paragraph IMG</label>
        <img src="{{asset($police->sec1_img[0])}}" alt="" style="width: 100px;height: 100px;display: block;margin-bottom: 20px;border-radius: 5px">
        <input type="file" class="form-control" id="img" name="sec1_img[]"  placeholder="Write Body.." multiple>
    </div>
    <div class="form-group">
        <label for="sec1_head">First Paragraph Head</label>
        <textarea type="text" class="form-control mb-3" id="sec1_head" name="sec1_head"  placeholder="open in.." required >{!!$police->sec1_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec1_head");
        </script>
    </div>

    <div class="form-group">
        <label for="sec1_p">First Paragraph</label>
        <textarea type="text" class="form-control mb-3" id="sec1_p" name="sec1_p"  placeholder="open in.." required >{!!$police->sec1_p!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec1_p");
        </script>
    </div>
    <br/>
    <hr>
    <br>
    <div class="form-group">
        <label for="sec2_img">Second Paragraph IMG</label>
        <img src="{{asset($police->sec2_img)}}" alt="" style="width: 100px;height: 100px;display: block;margin-bottom: 20px;border-radius: 5px">
        <input type="file" class="form-control" id="img" name="sec2_img"  placeholder="Write Body.." value="{{$police->sec2_img}}"> 
    </div>
    <div class="form-group">
        <label for="sec2_head">Second Paragraph Head</label>
        <textarea type="text" class="form-control mb-3" id="sec2_head" name="sec2_head"  placeholder="open in.." required >{!!$police->sec2_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec2_head");
        </script>
    </div>

    <div class="form-group">
        <label for="sec2_p">Second Paragraph</label>
        <textarea type="text" class="form-control mb-3" id="sec2_p" name="sec2_p"  placeholder="open in.." required >{!!$police->sec2_p!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec2_p");
        </script>
    </div>
    <br/>
    <hr>
    <br>
    <div class="form-group">
        <label for="sec3_img">Third Paragraph IMG</label>
        <img src="{{asset($police->sec3_img)}}" alt="" style="width: 100px;height: 100px;display: block;margin-bottom: 20px;border-radius: 5px">
        <input type="file" class="form-control" id="img" name="sec3_img"  placeholder="Write Body.." value="{{$police->sec3_img}}">
    </div>
    <div class="form-group">
        <label for="sec3_head">Third Paragraph Head</label>
        <textarea type="text" class="form-control mb-3" id="sec3_head" name="sec3_head"  placeholder="open in.." required >{!!$police->sec3_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec3_head");
        </script>
    </div>

    <div class="form-group">
        <label for="sec3_p">Third Paragraph</label>
        <textarea type="text" class="form-control mb-3" id="sec3_p" name="sec3_p"  placeholder="open in.." required >{!!$police->sec3_p!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec3_p");
        </script>
    </div>
    <br/>
    <hr>
    <br>
    <div class="form-group">
        <label for="sec4_img">Fourth Paragraph IMG</label>
        <img src="{{asset($police->sec4_img)}}" alt="" style="width: 100px;height: 100px;display: block;margin-bottom: 20px;border-radius: 5px">
        <input type="file" class="form-control" id="img" name="sec4_img"  placeholder="Write Body..">
    </div>
    <div class="form-group">
        <label for="sec4_head">Fourth Paragraph Head</label>
        <textarea type="text" class="form-control mb-3" id="sec4_head" name="sec4_head"  placeholder="open in.." required >{!!$police->sec4_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec4_head");
        </script>
    </div>

    <div class="form-group">
        <label for="sec4_p">Fourth Paragraph</label>
        <textarea type="text" class="form-control mb-3" id="sec4_p" name="sec4_p"  placeholder="open in.." required >{!!$police->sec4_p!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec4_p");
        </script>
    </div>
    <br/>
    <hr>

 

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

  @push("styles")

  <script src="https://cdn.ckeditor.com/4.20.2/standard/ckeditor.js"></script>
  @endpush
  @endsection
