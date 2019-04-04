@extends('public.account.layout')

@section('title', trans('storefront::account.links.dashboard'))

@section('content_right')
<h2>Rool Master Course Explorer</h2> <br>

@foreach ($data as $value)

<div class="col-md-4">
    <div class="card">
        <div class="card-body" style="-webkit-box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.37);-moz-box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.37);box-shadow: 0px 0px 23px -2px rgba(0,0,0,0.37);border-radius: 10px 10px 10px 10px;-moz-border-radius: 10px 10px 10px 10px;-webkit-border-radius: 10px 10px 10px 10px;border: 0px solid #000000">
            <br>
            <h4 style="text-align:center;"> {{ $value->course_title }}  </h4> <br>
            <p style="font-size: 11px;line-height: 14px;margin:10px">{{ $value->course_intro}}</p>
           <br>
           <form>

           </form>
           <a href="coursexp/{{ $value->course_id }}" class="btn btn-info btn-lg">Open Modal</a>
        </div>
    </div>
</div>

    
@endforeach

@endsection
