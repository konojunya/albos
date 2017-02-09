<p class="edit-form">編集</p>
<div class="panel panel-default">
    <div class="panel-body">
        <form id="the-form" class="form-horizontal" role="form" method="POST" action="{{ url('/mypage/edit/password') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('now_password') ? ' has-error' : '' }}">
                <label for="now_password" class="col-md-4 control-label">現在のパスワード</label>

                <div class="col-md-6">
                    <input id="now_password" type="password" class="form-control" name="now_password">

                    @if ($errors->has('now_password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('now_password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('new_password') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">新しいパスワード</label>

                <div class="col-md-6">
                    <input id="new_password" type="password" class="form-control" name="new_password">

                    @if ($errors->has('new_password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('new_password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('new_password_confirmation') ? ' has-error' : '' }}">
                <label for="new_password_confirmation" class="col-md-4 control-label">新しいパスワードの確認</label>

                <div class="col-md-6">
                    <input id="new_password_confirmation" type="password" class="form-control" name="new_password_confirmation">

                    @if ($errors->has('new_password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('new_password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i> パスワードを変更する
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>