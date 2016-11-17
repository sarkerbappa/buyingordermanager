@extends('admin.templates.login')
@section('content')
<div class="login-logo">
    <a href=""><img src="{{URL::to('public/assets/admin/dist/img/drs.png')}}" class="img-responsive" alt="User Image"></a>
</div><!-- /.login-logo -->
<div class="login-box-body">
    
          @if(Session::get('authentication_error') !== null)
               <div class="form-group has-feedback">
                    <div class="alert alert-danger alert-dismissable"> {{ Session::get('authentication_error')}}</div>
                </div>
          @endif
          
          {{ Form::open(array('route' => 'login'))}}

                        <div class="form-group has-feedback">
                            {{ Form::text('username', '', array('class' => 'form-control', 'placeholder' => 'Place username....'))}}
                            <span class="text-red"> {{ $errors->first('username')}}</span>
                            <span class="glyphicon glyphicon-user form-control-feedback"></span>
                        </div>

                        <div class="form-group has-feedback">
                            {{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password....'))}}
                            <span class="text-red"> {{ $errors->first('password')}}</span>
                            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                        </div>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="col-xs-8">    
                                <div class="checkbox icheck">
                                    <label>
                                        <input type="checkbox" name ="remember"> Remember Me
                                    </label>
                                </div>                        
                            </div><!-- /.col -->
                            <div class="col-xs-4">
                                {{ Form::submit('Sign In', array('class' => 'btn btn-primary btn-block btn-flat'))}}
                            </div><!-- /.col -->
                        </div>
    {{Form::close()}}
</div><!-- /.login-box-body -->
    
@stop