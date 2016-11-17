<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Model\BrandManager;

class BrandController extends Controller {

    /**
     * 
     * @return type
     */
    public function allBrands() {
        $data['title'] = 'All Brands';
        $data['all_brands'] = BrandManager::getAllBrands();
        return View::make('admin.pages.brand.brand_list')->with($data);
    }

    /**
     * 
     * @return type
     */
    public function brandForm() {
        $data['title'] = 'Login Form';
        return View::make('admin.pages.brand.brand_form')->with($data);
    }

    /**
     * 
     * @return type
     */
    public function brandSave() {
        
        //Using this helper function the validation rule has been simplified
        $validation_rules = brandSaveValidationRule();
        $validation = Validator::make(Input::all(), $validation_rules);

        if ($validation->fails()) {
            return Redirect::to('/brand')->withInput()->withErrors($validation);
        } else {

            //Using this helper function an array of all Input has been created
            $brand_info = makeBrandInfoArray(Input::all());

            // Insert data into database      
            BrandManager::addBrand($brand_info);
            return Redirect::to('/brandList')->with('success_massege', 'Brand Added Successfully.');
        }
    }
    
    
    /**
     * 
     * @param type $id
     */
    public function brandEditForm($id){
        $id = base64_decode($id);
        $data['title'] = 'Brand Edit';
        $data['brand_info'] = BrandManager::getBrandDetail($id);
        return View::make('admin.pages.brand.brand_edit_form')->with($data);
    }
    
    /**
     * 
     * @return type
     */
    public function brandEditSave(){
        //Using this helper function the validation rule has been simplified
        $id = Input::get('id');
        $validation_rules = brandSaveValidationRule();
        $validation = Validator::make(Input::all(), $validation_rules);

        if ($validation->fails()) {
            return Redirect::to('/brandEditForm/'.base64_encode($id))->withInput()->withErrors($validation);
        } else {

            //Using this helper function an array of all Input has been created
            $brand_info = makeBrandInfoArray(Input::all());

            // Insert data into database      
            BrandManager::updateBrand($brand_info,$id);
            return Redirect::to('/brandList')->with('success_massege', 'Brand Added Successfully.');
        }
    }

        /**
     * 
     * @param type $id
     */
    public function brandDelete($id){
        $id = base64_decode($id);
        // Insert data into database      
        BrandManager::deleteBrand($id);
        return Redirect::to('/brandList')->with('success_massege', 'Brand Deleted Successfully.');
    }

}
