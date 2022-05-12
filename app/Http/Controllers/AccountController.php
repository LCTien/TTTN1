<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Http\Requests\StoreAccountRequest;
use App\Http\Requests\UpdateAccountRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
       $user = DB::table('accounts')
       ->join('roles','roles.id','=','accounts.role_id')
       ->where('accounts.id','=',$id)
       ->select('accounts.*','roles.name')
       ->get();
       return view('admin-info',['user' => $user[0]]);
    }
    public function login(Request $request)
    {
        $user = DB::table('accounts')
        ->where('username','=',$request->post('account'))

        ->get();
        if(count($user) == 0 || $request->post('password') != $user[0]->password )
    {
         return redirect()->route('login',['error' => "Sai tài khoản hoặc mật khẩu"]);
    }
    Session::put('UserId',$user[0]->id);
    Session::put('Avatar',$user[0]->avatar);
    return redirect()->route('admin.info',['id' => $user[0]->id]);  
    }
    public function logout(Request $request)
    {

    Session::forget('UserId');
    Session::forget('Avatar');
    return redirect()->route('login');
    }
    public function forgetpassword(Request $request)
    {
        $email = $request->email;
        $account = DB::table('accounts')->where('email','=',$email)->get();
        if(count($account)>0){
            return view('forgetpassword-confirm',['email'=>$email]);
        }
        else
            return view('forgetpassword',['error'=>"Không tồn tại email này!"]);
    }
    public function changePassword(Request $request){
        $email = $request->email;
        $password = $request->password;
        $confirmpassword = $request->confirmpassword;
        if($password != $confirmpassword)
        {
            return view('forgetpassword-confirm',['email'=>$email,'error'=>"Mật khẩu nhập lại không đúng!"]);
        }
        else
        {
            DB::update('update accounts set password = ? where email = ?', [$password,$email]);
            return view('login',['OK'=>"true"]);
        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAccountRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAccountRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAccountRequest  $request
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAccountRequest $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Account  $account
     * @return \Illuminate\Http\Response
     */
    public function destroy(Account $account)
    {
        //
    }
}
