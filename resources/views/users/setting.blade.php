@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">个人信息</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/setting">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="city" class="col-md-4 control-label">现居城市</label>
                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control" name="city" value="{{ user()->settings['city'] }}"  required>
                                    @if ($errors->has('city'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                            <div class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                                <label for="bio" class="col-md-4 control-label">个人简介</label>
                                <div class="col-md-6">
                                    <textarea id="bio" type="text" class="form-control" name="bio"  required>{{ user()->settings['bio'] }}</textarea>
                                    @if ($errors->has('bio'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('bio') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        更新资料
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">修改密码</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="/password/update">
                            {{ csrf_field() }}
                            <div class="form-group{{ $errors->has('old_password') ? ' has-error' : '' }}">
                                <label for="old_password" class="col-md-4 control-label">原始密码</label>
                                <div class="col-md-6">
                                    <input id="old_password" type="password" class="form-control" name="old_password" value="{{ old('old_password') }}" required>
                                    @if ($errors->has('old_password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('old_password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="password" class="col-md-4 control-label">输入新密码</label>
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">确认新密码</label>
                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary btn-block">
                                        更改密码
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
