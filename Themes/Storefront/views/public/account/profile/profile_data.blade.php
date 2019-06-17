<form method="POST" action="{{ route('account.profile.update') }}">
        {{ csrf_field() }}
        {{ method_field('put') }}
        <div class="content">
<div class="row">
        <div class="col-md-4">
          <div class="card card-user">
            <div class="image">
              <img src="{{ (Theme::url('public/paper_dash/img/sanjayacover.jpg')) }}" alt="...">
            </div>
            
            <div class="card-body">
              <div class="author">
                <a href="#">
                  <img class="avatar border-gray" src="{{ (Theme::url('public/paper_dash/img/sanjaya.png')) }}" alt="...">
                  <h5 class="title">{{ $my->full_name }}</h5>
                </a>
                <p class="description">
                  @chetfaker
                </p>
              </div>
              <p class="description text-center">
                "I like the way you work it
                <br> No diggity
                <br> I wanna bag it up"
              </p>
            </div>
            <div class="card-footer">
              <hr>
              <div class="button-container">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-6 ml-auto">
                    <h5>12
                      <br>
                      <small>Files</small>
                    </h5>
                  </div>
                  <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
                    <h5>2GB
                      <br>
                      <small>Used</small>
                    </h5>
                  </div>
                  <div class="col-lg-3 mr-auto">
                    <h5>24,6$
                      <br>
                      <small>Spent</small>
                    </h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>






        <div class="col-md-8">
          <div class="card card-user">
            <div class="card-header">
              <h5 class="card-title">Edit Profile</h5>
            </div>
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>Company (disabled)</label>
                      <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">
                    </div>
                  </div>                       
                  <div class="col-md-6 pl-1">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Email address</label>
                      <input type="email"  name="email" class="form-control" placeholder="Email" value="{{ old('email', $my->email) }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6 pr-1">
                    <div class="form-group">
                      <label>First Name</label>
                      <input type="text" name="first_name" class="form-control" placeholder="Company" value="{{ old('first_name', $my->first_name) }}">
                    </div>
                  </div>
                  <div class="col-md-6 pl-1">
                    <div class="form-group">
                      <label>Last Name</label>
                      <input type="text" name="last_name" class="form-control" placeholder="Last Name" value="{{ old('last_name', $my->last_name) }}">
                    </div>
                  </div>
                </div>
                <div class="row">
                      <div class="col-md-6 pr-1">
                        <div class="form-group">
                          <label>New Password</label>
                          <input type="password" name="password" class="form-control" placeholder="" value="">
                          {!! $errors->first('password', '<span class="error-message">:message</span>') !!}

                        </div>
                      </div>
                      <div class="col-md-6 pl-1">
                        <div class="form-group">
                          <label>Comform Password</label>
                          <input type="password" name="password_confirmation" class="form-control" placeholder="New Password" value="">
                          {!! $errors->first('password_confirmation', '<span class="error-message">:message</span>') !!}

                        </div>
                      </div>
                </div>
                
                <div class="row">
                  <div class="update ml-auto mr-auto">
                    <button type="submit" class="btn btn-primary btn-round">{{ trans('storefront::account.profile.save_changes') }}</button>
                </div>                
              </form>
            </div>

            <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="adress" placeholder="Home Address" value="{{ old('last_name', $my->adress) }}">
                      </div>
                    </div>
                  </div>
  
                  <div class="row">
                    <div class="col-md-4 pr-1">
                      <div class="form-group">
                        <label>City</label>
                        <input type="text" class="form-control" placeholder="City" value="Melbourne">
                      </div>
                  </div>
  
                  <div class="col-md-4 px-1">
                      <div class="form-group">
                        <label>Country</label>
                        <input type="text" class="form-control" placeholder="Country" value="Australia">
                      </div>
                  </div>
  
                  <div class="col-md-4 pl-1">
                    <div class="form-group">
                        <label>Postal Code</label>
                        <input type="number" class="form-control" placeholder="ZIP Code">
                    </div>
                  </div>
  
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label>About Me</label>
                        <textarea class="form-control textarea">Oh so, your weak rhyme You doubt I'll bother, reading into it</textarea>
                      </div>
                    </div>
                  </div>
          </div>
        </div>
      </div>
      
    </div>

   <!-- Button trigger modal -->
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#eee"> Launch demo modal </button>
      
   <!-- Modal -->
  

   @if ($my->adress === null)
   <script>
        Swal.fire({
            title: '<p>What is your address</p>',
            type: 'question',
            showConfirmButton: false,
            html:
              '<form method="post" action=""> {{ csrf_field() }}' +
              '<div class="form-group">' +
              '<input type="text" name="adress" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Address">' +
              '</div>'+'</div><button type="submit" class="btn btn-primary">Submit my address</button></form> ',       
      })
   </script>
   @elseif($my->adress === 1)
   I have multiple records!
   @else
   I don't have any records!
   @endif

   