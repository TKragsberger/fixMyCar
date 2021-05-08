<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\User;
use App\Models\Booking;

class CustomerController extends Controller
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
        //
        $newCustomer = new Customer;
        $newCustomer->zip_code = $request['zipCode'];
        $newCustomer->city = $request['city'];
        $newCustomer->address = $request['address'];
        $newCustomer->phone_number = $request['phoneNumber'];
        $newCustomer->user_id = auth()->id();
        $newCustomer->save();

        return $newCustomer;
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
        $customer = Customer::find($id);
        if($customer)
            return $customer;

        return "Customer not found";
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
        $customer = Customer::find($id);

        $customer->zip_code = $request["zipCode"];
        $customer->city = $request["city"];
        $customer->address = $request["address"];
        $customer->phone_number = $request["phoneNumber"];
        $customer->save();

        return $customer;
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
        $customer = Customer::find($id);
        
        $user = User::find($customer->user_id);

        if($customer){
            Booking::where('user_id', $customer->user_id)->delete();
            $customer->delete();
            //$booking->delete();
            $user->delete();

            return "All customer data have been deleted";
        }

        return "Customer not found";
    }
}
