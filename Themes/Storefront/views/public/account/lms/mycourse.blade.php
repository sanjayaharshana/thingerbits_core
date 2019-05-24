@include('public.account.lms.components.head')
  
                <div class="row">
                    @foreach ($data as $item)
                    <div class="col-lg-3">
                            <div class="card" style="height: 350px;">
                                <div class="card-body">                               
                                        <div class="" style="background-image:url('sft/course_img/{{ $item->course_id }}');background-size: cover; height:100px; background-position:center;"></div>
                                        <h6 style="text-align: center;font-weight: bold;"><br>{{ $item->course_title }}</b></h6>
                                        <br>
                                    <small style="font-size: 70%; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; /* line-height: 16px; */ /* fallback */ max-height: 702px; /* fallback */ -webkit-line-clamp: 5; /* number of lines to show */ -webkit-box-orient: vertical;">
                                        {{ $item->course_discription }}
                                    </small><br>
                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#modal_{{ $item->course_id }}">Get the Course</button>
                                </div>                           
                            </div>
                        </div>  
                        <div class="modal fade" id="modal_{{ $item->course_id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">View Course</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="" style="background-image:url('sft/course_img/{{ $item->course_id }}');background-size: cover; height:100px; background-position:center;"></div>
                                    <h3 style="text-align: center;"><br>{{ $item->course_title }}</b></h3><br>
                                    <p>
                                        {{ $item->course_discription }}
                                    </p>

                                </div>
                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="button" class="btn btn-primary">Get this Course</button>
                                </div>
                              </div>
                            </div>
                          </div>      
                    @endforeach                    
                </div>

              
                  
                  

@include('public.account.lms.components.footer')