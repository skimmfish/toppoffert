
          //creating a user and assigning a password to be hashed for the user
          $rule = [ 'email' => 'required | unique:users | email' ];
          $validatedRequest = $request->validate($rule);
  
          $user = new User;
          $userEmail = $request->_email_adddress;
          $user->email =$userEmail;
          $passwordToSend = Str::random(10);
          $user->password = Hash::make($passwordToSend);
          $user->username = explode("@",$request->_email_address)[0];
            $user->active = true;
            $user->email_verified_at = date('Y-m-d h:i:s',time());
           $response = $user->save();
      
        if($response==true){
            \Mail::to($userEmail)->send(\App\Mail\NewSupplier());
            return redirect()->route('')->with(['status'=>'Thank you for your interest in Toppoffert! Please check your email for more info']);
        }
