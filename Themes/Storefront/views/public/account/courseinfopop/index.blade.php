@extends('public.account.layout')

@section('title', trans('storefront::account.links.dashboard'))

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.iframehelper.js"></script>
<script>
    $(".nicescroll-box").niceScroll(".wrap",{cursorcolor:"aquamarine"});
</script>
@section('content_right')

<div class="nicescroll-box">
    <div class="wrap">
        <img algin="center" style=" display: block;margin-left: auto;margin-right: auto;width: 100%; height:300px" src="https://dummyimage.com/847x300/cfcfcf/000000.png&text=Thingerbits+Core+({{ $name }})"><br>
        <h2>{{ $name }}</h2> <br>
        <p>{{ $body }}</p><br>
        <p>{{ $body }}</p><br>
        <p>{{ $body }}</p><br>
        <p>{{ $body }}</p><br>
        <p>{{ $body }}</p><br>
        <a class="btn btn-info btn-lg" href="colin">Buy this course</a>
        <a class="btn btn-info btn-lg text-right" href="{!! url('/account/skull/'.$course_id.'/'.$course_id); !!}">Enter this course</a>
        <a class="btn btn-info btn-lg text-right" href="{{ route('coursexp') }}">Back to Explorer</a>    
    </div>
  </div>


   
    






@endsection









