@include('public.account.lms.components.head')
<script src="https://code.jquery.com/jquery-2.1.4.js"></script>

  
<div class="row" id="myList">
                    
                  

</div>

              

<script type="text/javascript">
    $( document ).ready(function() {
    fetchRecords();  
    });

    function fetchRecords(){
        $.ajax({
            url: '{{ url('/') }}/account/lms/my_courses_getdata/',
            type: 'get',
            dataType: 'json',
            success: function(response){
            var len = 0;                
            for (i = 0; i < response.length; i++) {
            //removeElement('#olian');
            var node = document.createElement("div"); 
            node.className = 'col-lg-3';                         
            // node.setAttribute('id',response[i].po_items);
            // node.innerHTML = '<a onclick="myiFunction('+ response[i].po_items  +')" id="removeitem" data-attrib="' + response[i].po_items  + '" class="btn btn-primary btn-sm pull-right" style="padding: 0px 20px;">Remove</a>'+'<div class="pull-right" style="padding: 0px 300px;">'+ response[i].qty + '</div>';
            node.innerHTML = '<div class="card" style="height: 350px;"><div class="card-body"> <div class="" style="background-image:url(/account/sft/course_img/'+ response[i].course_id +');background-size: cover; height:100px; background-position:center;"> <h6 style="text-align: center;font-weight: bold;"><br><br><br><br><br><br>'+ response[i].course_title +'</h6> <small style="font-size: 70%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; /* line-height: 16px; */ /* fallback */ max-height: 702px; /* fallback */ -webkit-line-clamp: 5; /* number of lines to show */ -webkit-box-orient: vertical;"><br>'+ response[i].course_intro +' </small> <br><br><a class="btn btn-primary btn-sm" href="{{$url}}/account/lms/my_courses/course_open/'+ response[i].course_id +'">Open Course</a> </div></div></div>';               
            

            console.log(response[i].course_id);
            console.log(response[i].course_title);
            console.log(response[i].slag);

            document.getElementById("myList").appendChild(node);       
            }
        }   
    });
    }
</script>  
                  

@include('public.account.lms.components.footer')