<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Carbon;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Booking::orderBy('created_at', 'DESC')->get();
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
        $newBooking = new Booking;
        $newBooking->type = $request['type'];
        $newBooking->details = $request['details'];
        $newBooking->reservation_date = $request['reservationDate'];
        $newBooking->status = 0;
        $newBooking->user_id = auth()->id();
        $newBooking->save();

        return view('booking');
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
        $booking = Booking::find($id);

        if($booking)
            return $booking;

        return "Booking not found";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
        $booking = Booking::find($id);

        if($booking){
            $booking->type = $request['type'];
            $booking->details = $request['details'];
            $booking->reservation_date = $request['reservationDate'];
            $booking->status = $request['status'];
            $booking->save();
            
            return $booking;
        }

        return "Booking not found";
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $booking = Booking::find($id);

        if($booking){
            $booking->delete();
            
            return "Booking deleted";
        }

        return "Booking not found";
    }
}
