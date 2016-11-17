<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;


class BrandManager extends Model
{
    static function addBrand($brand_info){
        DB::table('brands')->insert($brand_info);
    }
    
    static function updateBrand($brand_info,$id){
        DB::table('brands')->where('id', '=', $id)
	->update($brand_info);
    }
    /**
     * Get All brands 
     */
    static function getAllBrands(){
         $all_brands = DB::table('brands')->distinct()->get();
        return $all_brands;
    }
    
    static function getBrandDetail($id){
        $brand_info = DB::table('brands')
                ->where('id','=',$id)
                ->first();
        return $brand_info;
    }

        /**
     * 
     * @param type $id
     */
    static function deleteBrand($id){
      DB::table('brands')->where('id', '=', $id)->delete(); 
      return false;
    }
}
