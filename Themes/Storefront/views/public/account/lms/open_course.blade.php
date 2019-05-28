@include('public.account.lms.components.ol_head')
<style>
    html {scroll-behavior: smooth;}
</style>
<div class="row">
        @if ($lestype == 1)
        <video width="100%" controls style="height: -webkit-fill-available;">
                <source src="mov_bbb.mp4" type="video/mp4">
                <source src="mov_bbb.ogg" type="video/ogg">
                Your browser does not support HTML5 video.
        </video>
        @elseif ($lestype == 0) 
        <div class="container">            
            {!!$lesbody !!}
        </div>
        @endif                           
</div>    
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