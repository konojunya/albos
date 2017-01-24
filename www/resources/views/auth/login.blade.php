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
			   					メールアドレス
			   				</td>
			   				<td>
			   					<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label login-form-user-id">
			   						<input id="email" type="text" class="mdl-textfield__input" name="email" value="{{ old('email') }}">
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
			   						<input id="password" type="password" class="mdl-textfield__input" name="password">
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
			   			<a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect" href="{{ url('/password/reset') }}" style="text-decoration: none;">パスワードをお忘れですか？</a>
					</div>
						
				</form>

				</div>
			</div>
		</div>

	</div>
</main>
@endsection
