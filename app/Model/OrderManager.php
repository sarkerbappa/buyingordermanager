<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class OrderManager extends Model
{
    static function addOrder($order_info){
        DB::table('orders')->insert($order_info);
    }
    
    static function updateOrder($order_info,$id){
        DB::table('orders')->where('id', '=', $id)
	->update($order_info);
    }
    /**
     * Get All orders 
     */
    static function getAllOrders(){
         $all_orders = DB::table('orders')->distinct()->get();
        return $all_orders;
    }
    
    static function getOrderDetail($id){
        $order_info = DB::table('orders')
                ->where('id','=',$id)
                ->first();
        return $order_info;
    }

        /**
     * 
     * @param type $id
     */
    static function deleteOrder($id){
      DB::table('orders')->where('id', '=', $id)->delete(); 
      return false;
    }
}
