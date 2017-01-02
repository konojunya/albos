@extends('layouts.app')

@section('title')
login | albos
@endsection

@section('css')
<link rel="stylesheet" href="/assets/css/login.css">
@endsection

@section('content')
<main class="mdl-layout__content">
	<div class="page-content">
	
		<div class="login-form">
			<div class="mdl-card mdl-shadow--2dp login-form-contents">
				<div class="mdl-card__title mdl-card--expand">
					<h2 class="mdl-card__title-text">ログイン</h2>
					
				</div>
				<div class="mdl-card__supporting-text login-form-text-area">

			   	<form role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}
			   		<table>
			   			<tr>
			   				<td>
			   					ユーザーID
			   				</td>
			   				<td>
			   					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label login-form-user-id">
								   	<!-- <input class="mdl-textfield__input" type="text" id="user_id" name="user_id" placeholder="入力してください"> -->
								   	<input id="email" type="text" class="mdl-textfield__input" name="email" value="{{ old('email') }}">
								   	<!-- <label class="mdl-textfield__label" for="user-id">入力してください</label> -->
								</div>
								@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
			   				</td>
			   			</tr>
			   			<tr>
			   				<td>
			   					パスワード
			   				</td>
			   				<td>
			   					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label login-form-password">
								   	<!-- <input class="mdl-textfield__input" type="password" id="password" name="password" placeholder="入力してください"> -->
								   	<input id="password" type="password" class="mdl-textfield__input" name="password">
								   	<!-- <label class="mdl-textfield__label" for="password">入力してください</label> -->
								</div>
								@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
			   				</td>
			   			</tr>
			   		</table>

			   		<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

			   		<div class="mdl-card__actions mdl-card--border">
			   			<input type="submit" value="ログインする" class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect login-btn">
			   			<a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
					</div>
						
				</form>

				</div>
			</div>
		</div>


		<div class="sign-up">
			<div class="mdl-card mdl-shadow--2dp left-card">
				<div class="mdl-card__title mdl-card--expand">
					<h2 class="mdl-card__title-text">ユーザー登録</h2>
				</div>
				<div class="mdl-card__supporting-text">
			   	曲を購入する為には<br>
			   	ユーザー登録が必要です。
				</div>
				<div class="mdl-card__actions mdl-card--border">
				   <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('/register') }}">
				      ユーザー登録画面へ
				   </a>
				</div>
			</div>
			<div class="mdl-card mdl-shadow--2dp right-card">
				<div class="mdl-card__title mdl-card--expand">
					<h2 class="mdl-card__title-text">バンド登録</h2>
				</div>
				<div class="mdl-card__supporting-text">
			   	バンド登録をすると、<br>
			   	このサイトで曲を販売することが出来ます。
				</div>
				<div class="mdl-card__actions mdl-card--border">
				   <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">
				      バンド登録画面へ
				   </a>
				</div>
			</div>
		</div>
	</div>
</main>
@endsection
