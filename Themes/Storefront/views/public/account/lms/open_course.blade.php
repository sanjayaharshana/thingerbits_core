@include('public.account.lms.components.ol_head')
<style>
    html {scroll-behavior: smooth;}
</style>
<h3>Welcome Back</h3><br>
<div class="row">
        @if ($lestype == 1)
        <video width="100%" controls style="height: -webkit-fill-available;">
                <source src="mov_bbb.mp4" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML5 video.
        </video>
</div> <br><br>
        <div class="" style="">
            <div class="container"> <br> 
                <h2>Video Description</h2>          
                Get the more info with LMS<br><br>
                <p>
                    {{$video_description}}
                </p>
                <button type="button" class="btn btn-success">Complete Lesson</button><br><br>
                <br>
            </div>
        </div>

        @elseif ($lestype == 0) 
        <div class="container">            
            {!!$lesbody !!}
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