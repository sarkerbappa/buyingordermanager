<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class CustomerManager extends Model
{
    static function addCustomer($customer_info){
        DB::table('customers')->insert($customer_info);
    }
    
    static function updateCustomer($customer_info,$id){
        DB::table('customers')->where('id', '=', $id)
	->update($customer_info);
    }
    /**
     * Get All customers 
     */
    static function getAllCustomers(){
         $all_customers = DB::table('customers')->distinct()->get();
        return $all_customers;
    }
    
    static function getCustomerDetail($id){
        $customer_info = DB::table('customers')
                ->where('id','=',$id)
                ->first();
        return $customer_info;
    }

        /**
     * 
     * @param type $id
     */
    static function deleteCustomer($id){
      DB::table('customers')->where('id', '=', $id)->delete(); 
      return false;
    }
}
