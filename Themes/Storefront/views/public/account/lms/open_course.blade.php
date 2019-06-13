@include('public.account.lms.components.ol_head')
<style>
    html {scroll-behavior: smooth;}
</style>
<br>



<div class="row">
        @if ($lestype == 1)        
        <video width="100%" controls style="height: -webkit-fill-available;">          
                <source src="{{ $video_url }}" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML5 video.
        </video>
</div> <br><br>
        <div class="" style="">
            <div class="container"> <br> 
                <h2>Video Description</h2>          
                <br>
                <p>
                  {{$video_description}}
                </p><br><br>
                <button type="button" class="btn btn-success">Complete Lesson</button><br><br>
                <br>
            </div>
        </div>

        @elseif ($lestype == 2) 
        <div class="container">            
            {!!$lesbody !!}
        </div>
        @else 
        <br><br><br><br><br><br><br><br><br><br><br><br>
        <div class="col-lg-4">
            <div class="card" style="height: 350px;">
                <div class="card-body">                               
                    <h6 style="text-align: center;font-weight: bold;"><br>Thingerbits Example</h6>
                    <br>
                    <small style="font-size: 85%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; /* line-height: 16px; */ /* fallback */ max-height: 702px; /* fallback */ -webkit-line-clamp: 5; /* number of lines to show */ -webkit-box-orient: vertical;">
                      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </small><br>   
                    <div class="" style="background-image:url(sdfsd.pg);"></div>
                  
                </div>                           
            </div>
        </div>
        <div class="col-sm">
            @include('public.account.lms.components.roller_menu')
        </div>
        <div class="col-lg-4">
            <div class="card" style="height: 350px;">
                <div class="card-body">                               
                    <h6 style="text-align: center;font-weight: bold;"><br>Thingerbits Example</h6>
                    <br>
                    <small style="font-size: 85%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; /* line-height: 16px; */ /* fallback */ max-height: 702px; /* fallback */ -webkit-line-clamp: 5; /* number of lines to show */ -webkit-box-orient: vertical;">
                      It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
                    </small><br>
                </div>                           
            </div>
        </div>       
        @endif                           
   
<script>
    window.scroll({
  top: 10, 
  left: 0, 
  behavior: 'smooth'
});

// Scroll certain amounts from current position 
window.scrollBy({ 
  top: 0, // could be negative value
  left: 0, 
  behavior: 'smooth' 
});

// Scroll to a certain element
document.querySelector('.row').scrollIntoView({ 
  behavior: 'smooth'
});
</script>                 
@include('public.account.lms.components.footer')