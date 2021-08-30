<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register() {
        return view('register');
    }

    public function store(Request $request) {
        $name=$request->name;
        $id=$request->id;
        $password=$request->password;
        $birth_y=$request->year;
        $birth_m=$request->month;
        $birth_d=$request->day;
        $email=$request->email;
        $phone=$request->phone;
        $birth=Carbon::create($birth_y, $birth_m, $birth_d)->toDateString();
        // dd($request);
        // dd($password==$confirm);

        $request->validate([
            'id' => 'required',
            'name' => 'required',
            'password' => 'confirmed',
            'year' => 'required',
            'month' => 'required',
            'day' => 'required',
            'email' => 'required',
            'imageFile' => 'image',
            'phone' => 'required'
        ]);

        $user = new User();
        $user->uid = $id;
        $user->password = bcrypt($password);
        $user->email = $email;
        $user->birth = $birth;
        $user->phone = $phone;
        $user->name = $name;
        if($request->file('imageFile')) {
            $user->image=$this->uploadPostImage($request);
        }

        // dd($user);
        $user->save();

        $credentials=['uid'=>$id, 'password'=>$password];
        Auth::attempt($credentials);

        return view('main');
    }

    

    protected function uploadPostImage($request) {
        $name = $request->file('imageFile')->getClientOriginalName();
        $extension = $request->file('imageFile')->extension();
        $nameWithoutExtension = Str::of($name)->basename('.'.$extension);
        $fileName = $nameWithoutExtension . '_' . time() . '.' . $extension;
        $request->file('imageFile')->storeAs('public/images', $fileName);
        return $fileName;
    }

    public function duplicated(Request $request) {
        $id = $_GET['userid'];

        $uid = User::select("uid")->where("uid", $id)->exists();

        if(!$uid) { ?>
        <style>
            body {
                background-color: #E6E6FA;
            }
        </style>
        <p><?php echo $id ?> 은(는) 사용 가능한 아이디 입니다.</p>
        <?php
        } else {
        ?>
        <?php
            echo $id ?> 은(는) 이미 사용중인 아이디입니다."
            <?php
        }
        // dd($uid);
    }

   

        
    }

