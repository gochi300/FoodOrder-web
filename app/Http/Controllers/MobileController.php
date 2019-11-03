<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Image;
use File;
use Sentinel;


class MobileController extends Controller
{
    /**
     * Select all players from users table where user = player
     *
     * @return \Illuminate\Http\Response
     */

 // Product

    public function premiums()
    {
        $premiums = Premiums::orderBy('created_at', 'DESC')->get();         
        return response()->json($premiums);
    }

    public function premium_store(Request $request)
    {  

        //Check if phone number exists
        $phone = Premiums::where('phone', '=', $request->phone)->first();


        // Save data from HTTP Request
        $premium = new Premiums();
        $premium->name = $request->name;
        $premium->address = $request->address;
        $premium->phone = $request->phone;
        $premium->type = $request->type;
        $premium->duration = $request->duration;
        $premium->detail = $request->detail;

        if($request->image1 != null){
        $this->validate($request, ['image1' => 'required|image|mimes:jpg,png,jpeg|max:5120',]);
        $imageName1 = time().'-1.'.$request->image1->getClientOriginalExtension();
        $request->image1->move('uploads/', $imageName1);
        $premium->image1 = $imageName1;
        }

        if($request->image2 != null){
        $this->validate($request, ['image2' => 'required|image|mimes:jpg,png,jpeg|max:5120',]);
        $imageName2 = time().'-2.'.$request->image2->getClientOriginalExtension();
        $request->image2->move('uploads/', $imageName2);
        $premium->image2 = $imageName2;
        }

        if($request->image3 != null){
        $this->validate($request, ['image3' => 'required|image|mimes:jpg,png,jpeg|max:5120',]);
        $imageName3 = time().'-3.'.$request->image3->getClientOriginalExtension();
        $request->image3->move('uploads/', $imageName3);
        $premium->image3 = $imageName3;
        }

        if($request->image4 != null){
        $this->validate($request, ['image4' => 'required|image|mimes:jpg,png,jpeg|max:5120',]);
        $imageName4 = time().'-4.'.$request->image4->getClientOriginalExtension();
        $request->image4->move('uploads/', $imageName4);
        $premium->image4 = $imageName4;
        }
        if($request->image5 != null){
        $this->validate($request, ['image5' => 'required|image|mimes:jpg,png,jpeg|max:5120',]);
        $imageName5 = time().'-5.'.$request->image5->getClientOriginalExtension();
        $request->image5->move('uploads/', $imageName5);
        $premium->image5 = $imageName5;
        }

        $premium->value = $request->value;

        $premium->amount = $request->amount;

        if($request->photo != null){
        $this->validate($request, ['photo' => 'required|image|mimes:jpg,png,jpeg|max:5120',]);
        $imageName6 = time().'.'.$request->photo->getClientOriginalExtension();
        $request->photo->move('uploads/', $imageName6);
        $premium->receipt = $imageName6;
        }

        $premium->declaration = $request->declaration;

        //Create new phone number if it does not exist
        if (!$phone) {
            $premium->pin = time();
            $pin = time();

            $premium->save();
            
            return response()->json('Submitted successfuly! Your new PIN = '.$pin);
        }

        //Use old phone number if it exists
        elseif ($phone) {
            $premium->pin = $phone->pin;
            $pin = $phone->pin;

            $premium->save();

            return response()->json('Submitted successfuly! Please maintain old PIN');
        }

    }


// Policies

    public function policies()
    {
        $policies = Policies::orderBy('id')->get();  

        return response()->json($policies);
    }


// Claims

    public function claim_store(Request $request)
    {   
        $claim = new Claims();
        $claim->name = $request->name;
        $claim->phone = $request->phone;
        $claim->type = $request->type;
        $claim->policy_no = $request->policy_no;
        $claim->date = $request->date;
        $claim->description = $request->description;

        $this->validate($request, ['image1' => 'required|image|mimes:jpg,png,jpeg|max:5120',]);
        $imageName1 = time().'.'.$request->image1->getClientOriginalExtension();
        $request->image1->move('uploads/', $imageName1);
        
        $claim->photo = $imageName1;

        $claim->save();

        return response()->json('Submitted successfully!');
    }


// Mails

    public function mail_store(Request $request)
    {
        $mail = new Mails();
        $mail->name = $request->name;
        $mail->phone = $request->phone;
        $mail->subject = $request->subject;
        $mail->message = $request->message;

        $this->validate($request, ['image1' => 'required|image|mimes:jpg,png,jpeg|max:5120',]);
        $imageName1 = time().'.'.$request->image1->getClientOriginalExtension();
        $request->image1->move('uploads/', $imageName1);

        $mail->image = $imageName1;

        $mail->save();

        return response()->json('Submitted successfully!');
    }



// Insurance Info


    public function insurance_info(Request $request)
    {
        
        $premium_id = Premiums::where('id', '=', $request->id)->first(); 

        $pin = Premiums::where('pin', '=', $request->pin)->first();

        if ($premium_id && $pin) {
         $premium = Premiums::where('id', '=', $request->id)->first();
         $expiration = date('Y-m-d H:i:s', strtotime('+1 year', strtotime($premium->created_at)));
         return response()->json($premium);
         //return response()->json('Logged in');          
        }
        else {
         return response()->json('Invalid Credentials!');
        }  

    }


    public function insurance_info_show($id)
    {

        $premiums = Premiums::where('id', '=', $request->id)->first();

        return response()->json($premiums);

    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {

    }

    public function delete($id)
    {

    }

}