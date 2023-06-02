@extends('Admin.master')
@section('content')
<h2 style="padding-bottom: 35px;float: left;">Edit IBDP Page </h2>

<div class="clearfix"></div>

<form method="POST" action="{{route('admin.ibdp.update', $ibdp->id)}}" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <br>
    <div class="form-group">
        <label for="sec1_img">First Paragraph IMG</label>
        <img src="{{asset($ibdp->sec1_img)}}" alt="" style="width: 100px;height: 100px;display: block;margin-bottom: 20px;border-radius: 5px">
        <input type="file" class="form-control" id="img" name="sec1_img"  placeholder="Write Body.." value="{{$ibdp->sec1_img}}">
    </div>
    <div class="form-group">
        <label for="sec1_head">First Paragraph Head</label>
        <textarea type="text" class="form-control mb-3" id="sec1_head" name="sec1_head"  placeholder="open in.." required >{!!$ibdp->sec1_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec1_head");
        </script>
    </div>

    <div class="form-group">
        <label for="sec1_p">First Paragraph</label>
        <textarea type="text" class="form-control mb-3" id="sec1_p" name="sec1_p"  placeholder="open in.." required >{!!$ibdp->sec1_p!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec1_p");
        </script>
    </div>
    <br/>
    <hr>
    <br>
    <div class="form-group">
        <label for="sec2_img">Second Paragraph IMG</label>
        <img src="{{asset($ibdp->sec2_img)}}" alt="" style="width: 100px;height: 100px;display: block;margin-bottom: 20px;border-radius: 5px">
        <input type="file" class="form-control" id="img" name="sec2_img"  placeholder="Write Body.." value="{{$ibdp->sec1_img}}"> 
    </div>
    <div class="form-group">
        <label for="sec2_head">Second Paragraph Head</label>
        <textarea type="text" class="form-control mb-3" id="sec2_head" name="sec2_head"  placeholder="open in.." required >{!!$ibdp->sec2_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec2_head");
        </script>
    </div>

    <div class="form-group">
        <label for="sec2_p">Second Paragraph</label>
        <textarea type="text" class="form-control mb-3" id="sec2_p" name="sec2_p"  placeholder="open in.." required >{!!$ibdp->sec2_p!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec2_p");
        </script>
    </div>
    <br/>
    <hr>
    <br>
    <div class="form-group">
        <label for="sec3_img">Third Paragraph IMG</label>
        <img src="{{asset($ibdp->sec3_img)}}" alt="" style="width: 100px;height: 100px;display: block;margin-bottom: 20px;border-radius: 5px">
        <input type="file" class="form-control" id="img" name="sec3_img"  placeholder="Write Body.." value="{{$ibdp->sec1_img}}">
    </div>
    <div class="form-group">
        <label for="sec3_head">Third Paragraph Head</label>
        <textarea type="text" class="form-control mb-3" id="sec3_head" name="sec3_head"  placeholder="open in.." required >{!!$ibdp->sec3_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec3_head");
        </script>
    </div>

    <div class="form-group">
        <label for="sec3_p">Third Paragraph</label>
        <textarea type="text" class="form-control mb-3" id="sec3_p" name="sec3_p"  placeholder="open in.." required >{!!$ibdp->sec3_p!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec3_p");
        </script>
    </div>
    <br/>
    <hr>
    <br>
    <div class="form-group">
        <label for="sec4_img">Fourth Paragraph IMG</label>
        <img src="{{asset($ibdp->sec4_img)}}" alt="" style="width: 100px;height: 100px;display: block;margin-bottom: 20px;border-radius: 5px">
        <input type="file" class="form-control" id="img" name="sec4_img"  placeholder="Write Body..">
    </div>
    <div class="form-group">
        <label for="sec4_head">Fourth Paragraph Head</label>
        <textarea type="text" class="form-control mb-3" id="sec4_head" name="sec4_head"  placeholder="open in.." required >{!!$ibdp->sec4_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec4_head");
        </script>
    </div>

    <div class="form-group">
        <label for="sec4_p">Fourth Paragraph</label>
        <textarea type="text" class="form-control mb-3" id="sec4_p" name="sec4_p"  placeholder="open in.." required >{!!$ibdp->sec4_p!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec4_p");
        </script>
    </div>
    <br/>
    <hr>

    <div class="form-group">
        <label for="sec4_img">Fivth Paragraph IMG</label>
        <img src="{{asset($ibdp->sec5_img)}}" alt="" style="width: 100px;height: 100px;display: block;margin-bottom: 20px;border-radius: 5px">
        <input type="file" class="form-control" id="img" name="sec5_img"   placeholder="Write Body..">
    </div>
    <div class="form-group">
        <label for="sec5_head">Fivth Paragraph Head</label>
        <textarea type="text" class="form-control mb-3" id="sec5_head" name="sec5_head"  placeholder="open in.." required >{!!$ibdp->sec5_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec5_head");
        </script>
    </div>

    <div class="form-group">
        <label for="sec5_p">Fivth Paragraph</label>
        <textarea type="text" class="form-control mb-3" id="sec5_p" name="sec5_p"  placeholder="open in.." required >{!!$ibdp->sec5_p!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec5_p");
        </script>
    </div>
    <br/>
    <hr>
     <div class="form-group">
        <label for="sec6_head">sixth Paragraph Head</label>
        <textarea type="text" class="form-control mb-3" id="sec6_head" name="sec6_head"  placeholder="open in.." required >{!!$ibdp->sec6_head!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec6_head");
        </script>
    </div>

    <div class="form-group">
        <label for="sec6_p">sixth Paragraph</label>
        <textarea type="text" class="form-control mb-3" id="sec6_p" name="sec6_p"  placeholder="open in.." required >{!!$ibdp->sec6_p!!}</textarea>
        <script type="text/javascript">
            CKEDITOR.replace("sec6_p");
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
