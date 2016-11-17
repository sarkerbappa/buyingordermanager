<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Model\CustomerManager;

class CustomerController extends Controller {

    /**
     * 
     * @return type
     */
    public function allCustomers() {
        $data['title'] = 'All Customers';
        $data['all_customers'] = CustomerManager::getAllCustomers();
        return View::make('admin.pages.customer.customer_list')->with($data);
    }

    /**
     * 
     * @return type
     */
    public function customerForm() {
        $data['title'] = 'Login Form';
        return View::make('admin.pages.customer.customer_form')->with($data);
    }

    /**
     * 
     * @return type
     */
    public function customerSave() {
        
        //Using this helper function the validation rule has been simplified
        $validation_rules = customerSaveValidationRule();
        $validation = Validator::make(Input::all(), $validation_rules);

        if ($validation->fails()) {
            return Redirect::to('/customer')->withInput()->withErrors($validation);
        } else {

            //Using this helper function an array of all Input has been created
            $customer_info = makeCustomerInfoArray(Input::all());

            // Insert data into database      
            CustomerManager::addCustomer($customer_info);
            return Redirect::to('/customerList')->with('success_massege', 'Customer Added Successfully.');
        }
    }
    
    /**
     * 
     * @param type $id
     */
    public function customerView($id){
        $id = base64_decode($id);
        $data['title'] = 'Customer View';
        $data['customer_info'] = CustomerManager::getCustomerDetail($id);
        return View::make('admin.pages.customer.customer_view')->with($data);
    }
    
    /**
     * 
     * @param type $id
     */
    public function customerEditForm($id){
        $id = base64_decode($id);
        $data['title'] = 'Customer Edit';
        $data['customer_info'] = CustomerManager::getCustomerDetail($id);
        return View::make('admin.pages.customer.customer_edit_form')->with($data);
    }
    
    /**
     * 
     * @return type
     */
    public function customerEditSave(){
        //Using this helper function the validation rule has been simplified
        $id = Input::get('id');
        $validation_rules = customerSaveValidationRule();
        $validation = Validator::make(Input::all(), $validation_rules);

        if ($validation->fails()) {
            return Redirect::to('/customerEditForm/'.base64_encode($id))->withInput()->withErrors($validation);
        } else {

            //Using this helper function an array of all Input has been created
            $customer_info = makeCustomerInfoArray(Input::all());

            // Insert data into database      
            CustomerManager::updateCustomer($customer_info,$id);
            return Redirect::to('/customerList')->with('success_massege', 'Customer Added Successfully.');
        }
    }

        /**
     * 
     * @param type $id
     */
    public function customerDelete($id){
        $id = base64_decode($id);
        // Insert data into database      
        CustomerManager::deleteCustomer($id);
        return Redirect::to('/customerList')->with('success_massege', 'Customer Deleted Successfully.');
    }

}
