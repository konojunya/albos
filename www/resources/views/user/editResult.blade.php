<p class="edit-form">編集完了</p>
<div class="panel panel-default">
    <div class="panel-body">
        <div class="form-horizontal">
            <p>下記の内容に変更されました。</p>
            <div class="form-group">
                <label for="user_id" class="col-md-4 control-label">ユーザーID</label>

                <div class="col-md-6">
                    {{ $user_id }}
                </div>
            </div>

            <div class="form-group">
                <label for="name" class="col-md-4 control-label">氏名</label>

                <div class="col-md-6">
                    {{ $user_name }}
                </div>
            </div>

            <div class="form-group">
                <label for="email" class="col-md-4 control-label">メールアドレス</label>

                <div class="col-md-6">
                    {{ $email }}
                </div>
            </div>

            <div class="form-group">
                <label for="password-confirm" class="col-md-4 control-label">クレジットカード番号</label>

                <div class="col-md-6">
                    {{ $credit_card_number }}
                </div>
            </div>

        </div>
    </div>
</div>