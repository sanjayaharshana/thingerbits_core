

@extends('public.account.layout')

@section('title', trans('storefront::account.links.my_profile'))

@section('account_breadcrumb')
    <li class="active">{{ trans('storefront::account.links.my_profile') }}</li>
@endsection

@section('content_right')
    <form method="POST" action="{{ route('account.profile.update') }}">
        {{ csrf_field() }}
        {{ method_field('put') }}


        <div class="content">
                <div class="row">
                  <div class="col-md-4">
                    <div class="card card-user">
                      <div class="image">
                        <img src="../assets/img/damir-bosnjak.jpg" alt="...">
                      </div>
                      <div class="card-body">
                        <div class="author">
                          <a href="#">
                            <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                            <h5 class="title">Chet Faker</h5>
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
                    <div class="card">
                      <div class="card-header">
                        <h4 class="card-title">Team Members</h4>
                      </div>
                      <div class="card-body">
                        <ul class="list-unstyled team-members">
                          <li>
                            <div class="row">
                              <div class="col-md-2 col-2">
                                <div class="avatar">
                                  <img src="../assets/img/faces/ayo-ogunseinde-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                              </div>
                              <div class="col-md-7 col-7">
                                DJ Khaled
                                <br>
                                <span class="text-muted">
                                  <small>Offline</small>
                                </span>
                              </div>
                              <div class="col-md-3 col-3 text-right">
                                <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="row">
                              <div class="col-md-2 col-2">
                                <div class="avatar">
                                  <img src="../assets/img/faces/joe-gardner-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                              </div>
                              <div class="col-md-7 col-7">
                                Creative Tim
                                <br>
                                <span class="text-success">
                                  <small>Available</small>
                                </span>
                              </div>
                              <div class="col-md-3 col-3 text-right">
                                <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                              </div>
                            </div>
                          </li>
                          <li>
                            <div class="row">
                              <div class="col-md-2 col-2">
                                <div class="avatar">
                                  <img src="../assets/img/faces/clem-onojeghuo-2.jpg" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                </div>
                              </div>
                              <div class="col-ms-7 col-7">
                                Flume
                                <br>
                                <span class="text-danger">
                                  <small>Busy</small>
                                </span>
                              </div>
                              <div class="col-md-3 col-3 text-right">
                                <btn class="btn btn-sm btn-outline-success btn-round btn-icon"><i class="fa fa-envelope"></i></btn>
                              </div>
                            </div>
                          </li>
                        </ul>
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
                                <input type="email" class="form-control" placeholder="Email" value="{{ old('first_name', $my->email) }}">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-6 pr-1">
                              <div class="form-group">
                                <label>First Name</label>
                                <input type="text" class="form-control" placeholder="Company" value="{{ old('first_name', $my->first_name) }}">
                              </div>
                            </div>
                            <div class="col-md-6 pl-1">
                              <div class="form-group">
                                <label>Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" value="{{ old('first_name', $my->last_name) }}">
                              </div>
                            </div>
                          </div>
                          <div class="row">
                                <div class="col-md-6 pr-1">
                                  <div class="form-group">
                                    <label>New Password</label>
                                    <input type="password" class="form-control" placeholder="Company" value="{{ old('first_name', $my->first_name) }}">
                                  </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                  <div class="form-group">
                                    <label>Comform Password</label>
                                    <input type="password" class="form-control" placeholder="Last Name" value="{{ old('first_name', $my->last_name) }}">
                                  </div>
                                </div>
                              </div>
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Home Address" value="Melbourne, Australia">
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
                          <div class="row">
                            <div class="update ml-auto mr-auto">
                              <button type="submit" class="btn btn-primary btn-round">{{ trans('storefront::account.profile.save_changes') }}</button>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        <div class="account-details">
            <div class="account clearfix">
                <h4>{{ trans('storefront::account.profile.account') }}</h4>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group {{ $errors->has('first_name') ? 'has-error': '' }}">
                            <label for="first-name">
                                {{ trans('storefront::account.profile.first_name') }}<span>*</span>
                            </label>

                            <input type="text" name="first_name" id="first-name" class="form-control" value="{{ old('first_name', $my->first_name) }}">

                            {!! $errors->first('first_name', '<span class="error-message">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('last_name') ? 'has-error': '' }}">
                            <label for="last-name">
                                {{ trans('storefront::account.profile.last_name') }}<span>*</span>
                            </label>

                            <input type="text" name="last_name" id="last-name" class="form-control" value="{{ old('last_name', $my->last_name) }}">

                            {!! $errors->first('last_name', '<span class="error-message">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('email') ? 'has-error': '' }}">
                            <label for="">
                                {{ trans('storefront::account.profile.email') }}<span>*</span>
                            </label>

                            <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $my->email) }}">

                            {!! $errors->first('email', '<span class="error-message">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="password">
                <h4>{{ trans('storefront::account.profile.password') }}</h4>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group {{ $errors->has('password') ? 'has-error': '' }}">
                            <label for="new-password">
                                {{ trans('storefront::account.profile.new_password') }}
                            </label>

                            <input type="password" name="password" id="new-password" class="form-control">

                            {!! $errors->first('password', '<span class="error-message">:message</span>') !!}
                        </div>

                        <div class="form-group {{ $errors->has('password_confirmation') ? 'has-error': '' }}">
                            <label for="confirm-password">
                                {{ trans('storefront::account.profile.confirm_password') }}
                            </label>

                            <input type="password" name="password_confirmation" id="confirm-password" class="form-control">

                            {!! $errors->first('password_confirmation', '<span class="error-message">:message</span>') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="btn btn-primary" data-loading>
            {{ trans('storefront::account.profile.save_changes') }}
        </button>
    </form>
@endsection
