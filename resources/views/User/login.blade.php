@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">登录页面</div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('user/login') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="username" class="col-md-4 control-label">用户名</label>

                                <div class="col-md-6">
                                    <input id="username" type="text" class="form-control" name="username">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">密码</label>

                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control" name="password">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="code" class="col-md-4 control-label">验证码</label>

                                <div class="col-md-6">
                                    {{--<input type="text" class="code" name="code" class="form-control" >--}}
                                    <span><i class="fa fa-check-square-o"></i></span>
                                    <!-- 2.要点，src引入的是获取验证码的路由，做一个点击刷新的JS，并且后面带一个随机参数 -->
                                    {{--<img src="{{url('/code')}}" alt="" onclick="this.src='{{url('/code')}}?'+Math.random()">--}}
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-btn fa-sign-in"></i> 登录
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