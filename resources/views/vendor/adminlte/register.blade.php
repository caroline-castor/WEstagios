@extends('adminlte::master')

@section('adminlte_css')
    <link rel="stylesheet" href="{{ asset('vendor/adminlte/css/auth.css') }}">
    @yield('css')
@stop

@section('body_class', 'register-page')

@section('body')
    <div class="register-box">
        <div class="register-logo">
            <a href="{{ url(config('adminlte.dashboard_url', 'home')) }}">{!! config('adminlte.logo', '<b>Web</b>Estágios') !!}</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">{{ trans('adminlte::adminlte.register_message') }}</p>
            <form action="{{ url(config('adminlte.register_url', 'register')) }}" method="post">
                {!! csrf_field() !!}

                <div class="form-group has-feedback {{ $errors->has('name') ? 'has-error' : '' }}">
                    <input type="text" name="name" class="form-control" value="{{ old('name') }}"
                           placeholder="{{ trans('adminlte::adminlte.full_name') }}">
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                    @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('address') ? 'has-error' : '' }}">
                    <input type="text" name="address" class="form-control" value="{{ old('address') }}"
                           placeholder="{{ trans('adminlte::adminlte.address') }}">
                    <span class="glyphicon glyphicon-list form-control-feedback"></span>
                    @if ($errors->has('address'))
                        <span class="help-block">
                            <strong>{{ $errors->first('address') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('educational_instituition') ? 'has-error' : '' }}">
                    <input type="text" name="educational_instituition" class="form-control" value="{{ old('educational_instituition') }}"
                           placeholder="{{ trans('adminlte::adminlte.educational_instituition') }}">
                    <span class="glyphicon glyphicon-education form-control-feedback"></span>
                    @if ($errors->has('educational_instituition'))
                        <span class="help-block">
                            <strong>{{ $errors->first('educational_instituition') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('educational_level') ? 'has-error' : '' }}">
                    <input type="text" name="educational_level" class="form-control" value="{{ old('educational_level') }}"
                           placeholder="{{ trans('adminlte::adminlte.educational_level') }}">
                    <span class="glyphicon glyphicon-stats form-control-feedback"></span>
                    @if ($errors->has('educational_level'))
                        <span class="help-block">
                            <strong>{{ $errors->first('educational_level') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('interest1') ? 'has-error' : '' }}">
                    <input type="text" name="interest1" class="form-control" value="{{ old('interest1') }}"
                           placeholder="{{ trans('adminlte::adminlte.interest1') }}">
                    <span class="glyphicon glyphicon-triangle-right form-control-feedback"></span>
                    @if ($errors->has('interest1'))
                        <span class="help-block">
                            <strong>{{ $errors->first('interest1') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('interest2') ? 'has-error' : '' }}">
                    <input type="text" name="interest2" class="form-control" value="{{ old('interest2') }}"
                           placeholder="{{ trans('adminlte::adminlte.interest2') }}">
                    <span class="glyphicon glyphicon-triangle-right form-control-feedback"></span>
                    @if ($errors->has('interest2'))
                        <span class="help-block">
                            <strong>{{ $errors->first('interest2') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('interest3') ? 'has-error' : '' }}">
                    <input type="text" name="interest3" class="form-control" value="{{ old('interest3') }}"
                           placeholder="{{ trans('adminlte::adminlte.interest3') }}">
                    <span class="glyphicon glyphicon-triangle-right form-control-feedback"></span>
                    @if ($errors->has('interest3'))
                        <span class="help-block">
                            <strong>{{ $errors->first('interest3') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('email') ? 'has-error' : '' }}">
                    <input type="email" name="email" class="form-control" value="{{ old('email') }}"
                           placeholder="{{ trans('adminlte::adminlte.email') }}">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password') ? 'has-error' : '' }}">
                    <input type="password" name="password" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.password') }}">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="form-group has-feedback {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="{{ trans('adminlte::adminlte.retype_password') }}">
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
                <button type="submit"
                        class="btn btn-primary btn-block btn-flat"
                >{{ trans('adminlte::adminlte.register') }}</button>
            </form>
            <div class="auth-links">
                <a href="{{ url(config('adminlte.login_url', 'login')) }}"
                   class="text-center">{{ trans('adminlte::adminlte.i_already_have_a_membership') }}</a>
            </div>
        </div>
        <!-- /.form-box -->
    </div><!-- /.register-box -->
@stop

@section('adminlte_js')
    @yield('js')
@stop
