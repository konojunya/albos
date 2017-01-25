<?php

namespace App\Http\Controllers;

use Hash;
use Auth;
use App\User;
use App\album;
use App\band;
use App\music;
use App\sales_description;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Requests\ApiEditRequest;
use App\Http\Requests\PasswordEditRequest;


class HomeController extends Controller
{
    protected $history_json = [];
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the user mypage.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('user.mypage');
    }

    public function edit()
    {
        return view('user.edit');
    }

    public function showEditForm(Request $request)
    {
        $user_id            = $request->user()->user_id;
        $user_name          = $request->user()->user_name;
        $credit_card_number = $request->user()->credit_card_number;
        $email              = $request->user()->email;

        $history = $this->apiHistory($request);

        $user_json = array(
            'user_id'            => $user_id,
            'user_name'          => $user_name,
            'email'              => $email,
            'credit_card_number' => $credit_card_number,
            'history'            => $history
        );

        return view('user.edit')->with($user_json);
    }

    public function showPasswordEdit(Request $request)
    {
        $user_id            = $request->user()->user_id;
        $email              = $request->user()->email;

        $user_json = array(
            'user_id'            => $user_id,
            'email'              => $email
        );

        return view('user.passwordEdit')->with($user_json);
    }

    public function showPasswordEditResult(Request $request)
    {
        $user_id            = $request->user()->user_id;
        $email              = $request->user()->email;

        $user_json = array(
            'user_id'            => $user_id,
            'email'              => $email
        );

        return view('user.passwordEditResult')->with($user_json);
    }

    public function editProcess(ApiEditRequest $request)
    {
        //登録情報を更新するユーザーの特定
        $id = $request->user()->id;
        
        //更新情報の受け取り
        $user_id = $request->input('user_id');
        $user_name = $request->input('user_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $credit_card_number = $request->input('credit_card_number');

        $res_password = '';
        for ($i=0; $i < strlen($password); $i++) { 
            $res_password = $res_password.'*';
        }

        // パスワードの暗号化
        $password = bcrypt($password);

        // 登録情報の更新
        User::where('id', $id)
            ->update([
                'user_id'            => $user_id,
                'user_name'          => $user_name,
                'credit_card_number' => $credit_card_number,
                'email'              => $email,
                'password'           => $password
                ]);

        $user_json = array(
            'user_id'            => $user_id,
            'user_name'          => $user_name,
            'credit_card_number' => $credit_card_number,
            'email'              => $email,
            'res_password'       => $res_password
        );

        return view('user.editComp')->with($user_json);
    }

    /**
     * 認証を処理する
     *
     * @return Response
     */
    public function passwordEditProcess(PasswordEditRequest $request)
    {
        $user = [
            'email'    => Auth::user()->email,
            'password' => $request->input('now_password')
        ];

        // var_dump($user);

        if (Auth::attempt($user)) {
            // 認証に成功した
            Auth::user()->password = bcrypt($request->input('new_password'));
            Auth::user()->save();

            return redirect('/mypage/edit/password/result');

        } else {
            return redirect()->back()->withErrors([
                'now_password' => 'パスワードが違います'
            ]);
        }
    }

    // public function passwordEditProcess(PasswordEditRequest $request)
    // {
    //     $msg = "";
    //     $now_password = $request->input('now_password');
    //     if (!$this->nowPasswordCheck($now_password)) {
    //         // $msg = 'パスワードが違います';
    //         return 'パスワードが違います';
    //     }

    //     $new_password = $request->input('new_password');
    //     $new_password_confirmation = $request->input('new_password_confirmation');

    //     if ($new_password != $new_password_confirmation) {
    //         // $msg = '新しいパスワードと新しいパスワードの確認が一致しません';
    //         return '新しいパスワードと新しいパスワードの確認が一致しません';
    //     }

    //     $new_password = Hash::make($new_password);
    //     $this->passwordUpdate($id, $new_password);

    //     // $msg = '変更が完了しました';
    //     return '変更が完了しました';
    //     // return view('')
    // }

    // public function nowPasswordCheck($now_password)
    // {
    //     $password = $request->user()->password;

    //     if (Hash::check($now_password, $password)) {
    //         return true;
    //     }

    //     return false;
    // }

    // public function passwordUpdate($id, $new_password)
    // {
    //     User::where('id', $id)
    //         ->update(['password' => $new_password]);
    // }

    public function apiIndex(Request $request)
    {
        $user_id            = $request->user()->user_id;
        $user_name          = $request->user()->user_name;
        $credit_card_number = $request->user()->credit_card_number;
        $email              = $request->user()->email;

        $history = $this->apiHistory($request);

        $user_json = array(
            'user_id'            => $user_id,
            'user_name'          => $user_name,
            'email'              => $email,
            'credit_card_number' => $credit_card_number,
            'history'            => $history
        );

        return $user_json;
    }

    public function apiEdit(ApiEditRequest $request)
    {
        //登録情報を更新するユーザーの特定
        $id = $request->user()->id;
        
        //更新情報の受け取り
        $user_id = $request->input('user_id');
        $user_name = $request->input('user_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $credit_card_number = $request->input('credit_card_number');

        // パスワードの暗号化
        $password = bcrypt($password);

        // 登録情報の更新
        User::where('id', $id)
            ->update([
                'user_id' => $user_id,
                'user_name' => $user_name,
                'credit_card_number' => $credit_card_number,
                'email' => $email,
                'password' => $password
                ]);

        $user_json[] = array(
            'user_id'            => $user_id,
            'user_name'          => $user_name,
            'credit_card_number' => $credit_card_number,
            'email'              => $email,
            'password' => $password
        );

        return array(
            "user" => $user_json
        );
    }

    public function apiHistory($request)
    {
        $album_ids = array();

        //履歴を表示するユーザーを特定
        $id = $request->user()->id;

        //購入履歴
        $purchase_details = sales_description::where('user_id', $id)->get();

        foreach ($purchase_details as $purchase_detail) {
            $music_id = $purchase_detail->music_id;
            // $music_ids[] = $music_id; 返さなくていい
            $purchase_dates[] = $purchase_detail->purchase_date;

            $music = music::where('music_id', $music_id)->first();

            $music_titles[] = $music->music_title;
            $prices[] = $music->price;
            $album_ids[] = $music->album_id;
        }

        foreach ($album_ids as $album_id) {
            $album = album::where('album_id', $album_id)->first();
            $album_titles[] = $album->album_title;
            $band_id = $album->band_id;

            $band_names[] = band::where('band_id', $band_id)->value('band_name');
        }

        foreach ($album_ids as $key => $album_id) {
            $history = array(
                'album_id'      => $album_id,
                'music_id'      => $album_id,
                'music_title'   => $music_titles[$key],
                'album_title'   => $album_titles[$key],
                'band_name'     => $band_names[$key],
                'price'         => $prices[$key],
                'purchase_date' => $purchase_dates[$key]
            );
            $this->history_json[] = $history;
        }


        return $this->history_json;
    }
}




