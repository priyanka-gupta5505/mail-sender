Route::get('/', function () {
    //return view('welcome');
    $to_name='priyankagupta';
    $to_email='priyanka.gupta5505@gmail.com';
    $data=array('name'=>'peter','body'=>" Test mail like");
    Mail::send('mail',$data, function($message) use ($to_name,$to_email)
    {
        $message->to($to_email)
        ->subject('Web testing mail');
 
    });
        echo "mail has been sent";
});
