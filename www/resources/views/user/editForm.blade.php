<p class="edit-form">編集</p>
<div class="panel panel-default">
    <div class="panel-body">
        <form id="the-form" class="form-horizontal" role="form" method="POST" action="{{ url('/mypage/edit') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('user_id') ? ' has-error' : '' }}">
                <label for="user_id" class="col-md-4 control-label">ユーザーID</label>

                <div class="col-md-6">
                    <input id="user_id" type="text" class="form-control" name="user_id" value="{{ old('user_id') ? old('user_id') : $user_id }}">

                    @if ($errors->has('user_id'))
                        <span class="help-block">
                            <strong>{{ $errors->first('user_id') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('user_name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">氏名</label>

                <div class="col-md-6">
                    <input id="user_name" type="text" class="form-control" name="user_name" value="{{ old('user_name') ? old('user_name') : $user_name }}">

                    @if ($errors->has('user_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('user_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">メールアドレス</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') ? old('email') : $email }}">

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('credit_card_number') ? ' has-error' : '' }}">
                <label for="password-confirm" class="col-md-4 control-label">クレジットカード番号</label>

                <div class="col-md-6">
                    <input id="credit_card_number" type="text" class="form-control" name="credit_card_number" value="{{ old('credit_card_number') ? old('credit_card_number') : $credit_card_number }}">

                    @if ($errors->has('credit_card_number'))
                        <span class="help-block">
                            <strong>{{ $errors->first('credit_card_number') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <a href="/mypage/edit/password" class="btn btn-primary">
                        <i class="fa fa-btn fa-user"></i> パスワードを変更する
                    </a>
                    <button type="submit" class="btn btn-primary right-button" style="background-color: #FD7B08;border: 0;">
                        <i class="fa fa-btn fa-user"></i> 上記の内容に変更する
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>