<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use App\Models\CustomLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CustomerController extends Controller
{
    protected $customer;
    protected $custom_log;

    public function __construct(Customer $customer, CustomLog $custom_log)
    {
        $this->customer = $customer;
        $this->custom_log = $custom_log;
    }

    public function index()
    {
        try{
            $customers =  $this->customer->all()->sortBy('name');
            return view('customer.index',['customers'=>$customers]);
        }catch(\Exception $e){

            $this->custom_log->create([
                'content' => $e->getMessage(),
                'operation' => 'index',
            ]);

            $notification = array(
                'title'=> trans('validation.generic.Warning'),
                'message'=> trans('validation.generic.failed_job'),
                'alert-type' => 'warning'
            );
            return back()->with($notification);
        }
    }

    public function create()
    {
        try{
            return view('customer.create');
        }catch(\Exception $e){

            $this->custom_log->create([
                'content' => $e->getMessage(),
                'operation' => 'create',
            ]);

            $notification = array(
                'title'=> trans('validation.generic.Warning'),
                'message'=> trans('validation.generic.failed_job'),
                'alert-type' => 'warning'
            );
            return back()->with($notification);
        }
    }

    public function store(Request $request)
    {
        try{
            $this->customer->create($request->all());
            $notification = array(
                'title'=> trans('validation.generic.Success'),
                'message'=> trans('validation.generic.created'),
                'alert-type' => 'success'
            );
            Log::info( $notification['message']);
            return redirect()->route('customers.index')->with($notification);
        }
        catch(\Exception $e)
        {
            $this->custom_log->create([
                'content' => $e->getMessage(),
                'operation' => 'store',
            ]);

            $notification = array(
                'title'=> trans('validation.generic.Error'),
                'message'=> trans('validation.generic.not_created').': '.$e->getMessage(),
                'alert-type' => 'danger'
            );
            return back()->with($notification)->withInput();
        }
    }

    public function edit($id)
    {
        try{
            $customer =  $this->customer->findOrFail($id);
            return view('customer.edit',['customer'=>$customer]);
        }catch(\Exception $e){

            $this->custom_log->create([
                'content' => $e->getMessage(),
                'operation' => 'edit',
            ]);

            $notification = array(
                'title'=> trans('validation.generic.Warning'),
                'message'=> trans('validation.generic.failed_job'),
                'alert-type' => 'warning'
            );
            return back()->with($notification);
        }
    }

    public function update(CustomerRequest $request, $id)
    {
        try{
            $customer = $this->customer->findOrFail($id);
            $customer->update($request->all());
            $notification = array(
                'title'=> trans('validation.generic.Success'),
                'message'=> trans('validation.generic.updated'),
                'alert-type' => 'success'
            );
            Log::info( $notification['message']);
            return redirect()->route('customers.index')->with($notification);
        }
        catch(\Exception $e)
        {
            $this->custom_log->create([
                'content' => $e->getMessage(),
                'operation' => 'update',
            ]);

            $notification = array(
                'title'=> trans('validation.generic.Error'),
                'message'=> trans('validation.generic.not_updated').': '.$e->getMessage(),
                'alert-type' => 'danger'
            );
            return back()->with($notification)->withInput();
        }
    }

    public function destroy($id)
    {
        try{
            $customer = $this->customer->findOrFail($id);
            $customer->delete();
            $notification = array(
                'title'=> trans('validation.generic.Success'),
                'message'=> trans('validation.generic.deleted'),
                'alert-type' => 'success'
            );
            Log::info($notification['message']);
            return redirect()->route('customers.index')->with($notification);
        }
        catch(\Exception $e)
        {
            $this->custom_log->create([
                'content' => $e->getMessage(),
                'operation' => 'destroy',
            ]);

            $notification = array(
                'title'=> trans('validation.generic.Error'),
                'message'=> trans('validation.generic.not_deleted').': '.$e->getMessage(),
                'alert-type' => 'danger'
            );
            return back()->with($notification);
        }
    }
}
