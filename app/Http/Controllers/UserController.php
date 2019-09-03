<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Cloudder;
use Cloudinary;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

         return response()->json(dd($request->all()));

            // $curl = curl_init();
            
            // $email = $_POST['email'];
            // $amount = $_POST['member'] * 100;  //the amount in kobo. This value is actually NGN 300
            //  echo $email, $amount;
            // url to go to after payment
        //     $callback_url = 'myapp.com/pay/callback.php';  
            
        //     curl_setopt_array($curl, array(
        //       CURLOPT_URL => "https://api.paystack.co/transaction/initialize",
        //       CURLOPT_RETURNTRANSFER => true,
        //       CURLOPT_CUSTOMREQUEST => "POST",
        //       CURLOPT_POSTFIELDS => json_encode([
        //         'amount'=>$amount,
        //         'email'=>$email,
        //         'callback_url' => $callback_url
        //       ]),
        //       CURLOPT_HTTPHEADER => [
        //         "authorization: Bearer sk_test_36658e3260b1d1668b563e6d8268e46ad6da3273", //replace this with your own test key
        //         "content-type: application/json",
        //         "cache-control: no-cache"
        //       ],
        //     ));
            
        //     $response = curl_exec($curl);
        //     $err = curl_error($curl);
            
        //     if($err){
        //       // there was an error contacting the Paystack API
        //       die('Curl returned error: ' . $err);
        //     }
            
        //     $tranx = json_decode($response, true);
            
        //     if(!$tranx->status){
        //       // there was an error from the API
        //       print_r('API returned error: ' . $tranx['message']);
        //     }
            
        //     // comment out this line if you want to redirect the user to the payment page
        //     print_r($tranx);
        //     // redirect to page so User can pay
        //     // uncomment this line to allow the user redirect to the payment page
           // header('Location: ' . $tranx['data']['authorization_url']);
            

        //     return with('success', ' You are now a Member of UniqueMappersTeam Network');
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = Auth::user();
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $iddghsdghsdfgosigfh
     * @return \Illuminate\Http\Response
     *
     *  */
    public function update(Request $request, User $user)
    {
         
        $userUpdate = User::where('id',$user->id)
            ->update([

                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'department' => $request->input('department'),
                'osmusername' => $request->input('osmusername'),
               'member' => $request->input('member'),
               'gender' => $request->input('gender'),
        ]);
        if($userUpdate){
            return redirect()->route('home', ['id'=>Auth::user()->id]);
        
        }
        
        return back()->withInput();
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function moderator($id){
         $mod = User::find($id);
         $mod->isAdmin = 1;
         $mod->save();
         return redirect(route('allmembers'))->with('success','User made a Moderator');
     }
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect(route('allmembers'))->with('success','member Deleted');
    }
    public function profile()
    {
        $user = Auth::user();
        return view('profile',compact('user',$user));
    }
    public function update_avatar(Request $request){
        $request->validate([
            'passport' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $User = Auth::user();
        $avatarName = $User->id.'_avatar'.time().'.'.request()->passport->getClientOriginalExtension();
          
        $image = Cloudinary\Uploader::upload($avatarName);
              
        $image_url = data_get($image,'url');
        $request->passport->$image_url;
        $User->passport = $avatarName;
        $User->save();
        return back()
            ->with('success','You have successfully uploaded your image.');
    }
}
