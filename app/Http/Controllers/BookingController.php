<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Packages;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index(){
        $package = Packages::all();
        return view('booking.package',compact('package'));
    }

    public function book($id){
        $package = Packages::find($id);
        return view('booking.book',compact('package'));
    }

    public function bookStepOne(Request $request){
        $booking = $request->session()->get('booking');
        $booking = new Booking;
        $qty = $booking->quantity = $request->quantity;
        $total = $booking->total_payment = $request->total_payment;
        $id_package = $booking->id_package = $request->id_package;
        $date = $booking->date = $request->date;
        $status = $booking->status = $request->status;

        $booking->fill([$date, $qty, $total, $id_package, $status]);
        $request->session()->put('booking', $booking);
        return redirect()->route('booking.bookNow');
    }

    public function bookNow(Request $request){
        $booking = $request->session()->get('booking');
        return view('booking.bookNow',compact('booking'));
    }

    public function bookStepTwo(Request $request){
        $booking = $request->session()->get('booking');
        $name = $booking->name = $request->name;
        $email = $booking->email = $request->email;
        $phone = $booking->phone_number = $request->phone_number;

        $booking->fill([$name, $email, $phone]);
        $request->session()->put('booking', $booking);
        $booking->save();
        
        // Set your Merchant Server Key
        \Midtrans\Config::$serverKey = config('midtrans.server_key');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        \Midtrans\Config::$isProduction = false;
        // Set sanitization on (default)
        \Midtrans\Config::$isSanitized = true;
        // Set 3DS transaction for credit card to true
        \Midtrans\Config::$is3ds = true;
        
        $params = array(
            'transaction_details' => array(
                'order_id' => $booking->id,
                'gross_amount' => $booking->total_payment,
            ),
            'customer_details' => array(
                'name' => $name,
                'email' => $email,
                'phone' => $phone,
            ),
        );
        
        $snapToken = \Midtrans\Snap::getSnapToken($params);
        return view('booking.payment',compact('booking', 'snapToken'));
    }

    public function payment(){
        return view('booking.payment');
    }

    public function callback(Request $request){
        $serverKey = config('midtrans.server_key');
        $hashed = hash("sha512", $request->order_id.$request->status_code.$request->gross_amount.$serverKey);

        if($hashed == $request->signature_key){
            if($request->transaction_status == 'capture'){
                $booking = Booking::find($request->order_id);
                $booking->status = 'Paid';
                $booking->update();
            }
        }

    }
}
