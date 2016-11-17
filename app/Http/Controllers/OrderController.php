<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\OrderManager;

class OrderController extends Controller {

    /**
     * 
     * @return type
     */
    public function allOrders() {
        $data['title'] = 'All Orders';
        $data['all_orders'] = OrderManager::getAllOrders();
        return View::make('admin.pages.order.order_list')->with($data);
    }

    /**
     * 
     * @return type
     */
    public function orderForm() {
        $data['title'] = 'Login Form';
        return View::make('admin.pages.order.order_form')->with($data);
    }

    /**
     * 
     * @return type
     */
    public function orderSave() {
        
        //Using this helper function the validation rule has been simplified
        $validation_rules = orderSaveValidationRule();
        $validation = Validator::make(Input::all(), $validation_rules);

        if ($validation->fails()) {
            return Redirect::to('/order')->withInput()->withErrors($validation);
        } else {

            //Using this helper function an array of all Input has been created
            $order_info = makeOrderInfoArray(Input::all());

            // Insert data into database      
            OrderManager::addOrder($order_info);
            return Redirect::to('/allOrders')->with('success_massege', 'Order Added Successfully.');
        }
    }
    
    /**
     * 
     * @param type $id
     */
    public function orderView($id){
        $id = base64_decode($id);
        $data['title'] = 'Order View';
        $data['order_info'] = OrderManager::getOrderDetail($id);
        return View::make('admin.pages.order.order_view')->with($data);
    }
    
    /**
     * 
     * @param type $id
     */
    public function orderEditForm($id){
        $id = base64_decode($id);
        $data['title'] = 'Order Edit';
        $data['order_info'] = OrderManager::getOrderDetail($id);
        return View::make('admin.pages.order.order_edit_form')->with($data);
    }
    
    /**
     * 
     * @return type
     */
    public function orderEditSave(){
        //Using this helper function the validation rule has been simplified
        $id = Input::get('id');
        $validation_rules = orderEditSaveValidationRule();
        $validation = Validator::make(Input::all(), $validation_rules);

        if ($validation->fails()) {
            return Redirect::to('/orderEditForm/'.base64_encode($id))->withInput()->withErrors($validation);
        } else {

            //Using this helper function an array of all Input has been created
            $order_info = makeOrderInfoArray(Input::all());

            // Insert data into database      
            OrderManager::updateOrder($order_info,$id);
            return Redirect::to('/allOrders')->with('success_massege', 'Order Added Successfully.');
        }
    }

        /**
     * 
     * @param type $id
     */
    public function orderDelete($id){
        $id = base64_decode($id);
        // Insert data into database      
        OrderManager::deleteOrder($id);
        return Redirect::to('/allOrders')->with('success_massege', 'Order Deleted Successfully.');
    }

}
