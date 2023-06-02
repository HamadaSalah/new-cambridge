@extends('layouts.app')
@section('content')


 <div class="w-100 z-n1">
        <img class="w-100" src="assets/images/Asset.png" alt="">
    </div>


<br>
<div class="mypp" style="text-align: center;margin:auto">
    
    
    <h1 class="text-center">Academic Integrity Policy</h1>
    
    <br>
    <embed src="{{asset('pdf/Academic Integrity Policy-Draft.pdf')}}#toolbar=0" type="application/pdf" width="600px" height="750px">
        <noembed>
            <p>
                Your browser does not support PDF files.
                <a href="mypdf.pdf">Download the file instead</a>
            </p>
        </noembed>
    </embed>
</div>
<br>
<div class="mypp" style="text-align: center;margin:auto"><br>
    <h1 class="text-center">Admission Policy</h1>
    <embed src="{{asset('pdf/Admission Policy-Draft.pdf')}}#toolbar=0" type="application/pdf" width="600px" height="750px">
        <noembed>
            <p>
                Your browser does not support PDF files.
                <a href="mypdf.pdf">Download the file instead</a>
            </p>
        </noembed>
    </embed>
</div>
<br><div class="mypp" style="text-align: center;margin:auto">
    <h1 class="text-center">Assessment Policy</h1>
    <embed src="{{asset('pdf/Assessment Policy-Draft.pdf')}}#toolbar=0" type="application/pdf" width="600px" height="750px">
        <noembed>
            <p>
                Your browser does not support PDF files.
                <a href="mypdf.pdf">Download the file instead</a>
            </p>
        </noembed>
    </embed>
</div>
<br><div class="mypp" style="text-align: center;margin:auto">
    <h1 class="text-center">Inclusion Policy</h1><br>
    <embed src="{{asset('pdf/Inclusion Policy-Draft.pdf')}}#toolbar=0" type="application/pdf" width="600px" height="750px">
        <noembed>
            <p>
                Your browser does not support PDF files.
                <a href="mypdf.pdf">Download the file instead</a>
            </p>
        </noembed>
    </embed>
</div>
<br><div class="mypp" style="text-align: center;margin:auto">
    <h1 class="text-center">Language Policy</h1><br>
    <embed src="{{asset('pdf/Language Policy-Draft.pdf')}}#toolbar=0" type="application/pdf" width="600px" height="750px">
        <noembed>
            <p>
                Your browser does not support PDF files.
                <a href="mypdf.pdf">Download the file instead</a>
            </p>
        </noembed>
    </embed>
</div>
<br><div class="mypp" style="text-align: center;margin:auto">
    <h1 class="text-center">Parent or Legal Guardian and Student Complaint Procedure</h1><br>
    <embed src="{{asset('pdf/Parent or Legal Guardian and Student Complaint Procedure-Draft.pdf')}}#toolbar=0" type="application/pdf" width="600px" height="750px">
        <noembed>
            <p>
                Your browser does not support PDF files.
                <a href="mypdf.pdf">Download the file instead</a>
            </p>
        </noembed>
    </embed>
</div>
<div class="mypp" style="text-align: center;margin:auto">
    
    
    
    
    <h1 class="text-center">Well Being Policy</h1><br>
    <embed src="{{asset('pdf/Well Being Policy-Draft.pdf')}}#toolbar=0" type="application/pdf" width="600px" height="750px">
        <noembed>
            <p>
                Your browser does not support PDF files.
                <a href="mypdf.pdf">Download the file instead</a>
            </p>
        </noembed>
    </embed>
</div>


@endsection