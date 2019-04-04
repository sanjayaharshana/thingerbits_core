<div class="row">
    <div class="col-md-8">
        {{ Form::password('password', trans('user::attributes.users.new_password'), $errors) }}
        {{ Form::password('password_confirmation', trans('user::attributes.users.new_password_confirmation'), $errors) }}
    </div>
</div>
