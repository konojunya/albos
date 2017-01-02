
<style>
	@charset "utf-8";
	*,
	*::after,
	*::before {
		padding: 0;
		margin: 0;
		box-sizing: border-box;
	}
	a {
		text-decoration: none;
		color: #08c;
	}
	table {
		width: 80%;
		margin: 0 auto;
		font: 300 14px/18px 'Lucida Grande', Lucida Sans, Lucida Sans Unicode, sans-serif, Arial, Helvetica, Verdana, sans-serif;
	}
	td {
		padding: 0 0 20px;
	}
</style>
<table>
	<tbody>
		<tr>
			<td>ご利用の albosアカウント に対して、パスワードリセットのリクエストが先ほど行われました。この手続きを完了するには、以下のリンクをクリックしてください。</td>
		</tr>
		<tr>
			<td><a href="{{ $link = url('password/reset', $token).'?email='.urlencode($user->getEmailForPasswordReset()) }}"> 今すぐリセット > </a></td>
		</tr>
		<tr>
			<td>お客様がこの変更を行っていない場合、または他人が不正にアカウントにアクセスしていると思われる場合は、<a href="http://albos/mypage">http://albos/mypage</a> にアクセスしてただちにパスワードを変更してください。</td>
		</tr>
		<tr>
			<td>今後ともよろしくお願いいたします。</td>
		</tr>
		<tr>
			<td>albos サポート</td>
		</tr>
	</tbody>
</table>



