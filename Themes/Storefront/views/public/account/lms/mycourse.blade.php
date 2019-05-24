@include('public.account.lms.components.head')
  
                <div class="row">
                    @foreach ($data as $item)
                    <h2>{{ $item->course_id }}</h2>
                            
                    @endforeach                    
                </div>

              
                  
                  

@include('public.account.lms.components.footer')