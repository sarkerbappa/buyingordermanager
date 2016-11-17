<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class SupplierManager extends Model
{
    static function addSupplier($supplier_info){
        DB::table('suppliers')->insert($supplier_info);
    }
    
    static function updateSupplier($supplier_info,$id){
        DB::table('suppliers')->where('id', '=', $id)
	->update($supplier_info);
    }
    /**
     * Get All suppliers 
     */
    static function getAllSuppliers(){
         $all_suppliers = DB::table('suppliers')->distinct()->get();
        return $all_suppliers;
    }
    
    static function getSupplierDetail($id){
        $supplier_info = DB::table('suppliers')
                ->where('id','=',$id)
                ->first();
        return $supplier_info;
    }

        /**
     * 
     * @param type $id
     */
    static function deleteSupplier($id){
      DB::table('suppliers')->where('id', '=', $id)->delete(); 
      return false;
    }
}
