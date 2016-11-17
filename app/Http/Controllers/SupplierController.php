<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Model\SupplierManager;

class SupplierController extends Controller {

    /**
     * 
     * @return type
     */
    public function allSuppliers(){
        $data['title'] = 'All Suppliers';
        $data['all_suppliers'] = SupplierManager::getAllSuppliers();
        return View::make('admin.pages.supplier.supplier_list')->with($data);
    }

    /**
     * 
     * @return type
     */
    public function supplierForm() {
        $data['title'] = 'Login Form';
        return View::make('admin.pages.supplier.supplier_form')->with($data);
    }

    /**
     * 
     * @return type
     */
    public function supplierSave() {
        
        //Using this helper function the validation rule has been simplified
        $validation_rules = supplierSaveValidationRule();
        $validation = Validator::make(Input::all(), $validation_rules);

        if ($validation->fails()) {
            return Redirect::to('/supplier')->withInput()->withErrors($validation);
        } else {

            //Using this helper function an array of all Input has been created
            $supplier_info = makeSupplierInfoArray(Input::all());

            // Insert data into database      
            SupplierManager::addSupplier($supplier_info);
            return Redirect::to('/supplierList')->with('success_massege', 'Supplier Added Successfully.');
        }
    }
    
    /**
     * 
     * @param type $id
     */
    public function supplierView($id){
        $id = base64_decode($id);
        $data['title'] = 'Supplier View';
        $data['supplier_info'] = SupplierManager::getSupplierDetail($id);
        return View::make('admin.pages.supplier.supplier_view')->with($data);
    }
    
    /**
     * 
     * @param type $id
     */
    public function supplierEditForm($id){
        $id = base64_decode($id);
        $data['title'] = 'Supplier Edit';
        $data['supplier_info'] = SupplierManager::getSupplierDetail($id);
        return View::make('admin.pages.supplier.supplier_edit_form')->with($data);
    }
    
    /**
     * 
     * @return type
     */
    public function supplierEditSave(){
        //Using this helper function the validation rule has been simplified
        $id = Input::get('id');
        $validation_rules = supplierSaveValidationRule();
        $validation = Validator::make(Input::all(), $validation_rules);

        if ($validation->fails()) {
            return Redirect::to('/supplierEditForm/'.base64_encode($id))->withInput()->withErrors($validation);
        } else {

            //Using this helper function an array of all Input has been created
            $supplier_info = makeSupplierInfoArray(Input::all());

            // Insert data into database      
            SupplierManager::updateSupplier($supplier_info,$id);
            return Redirect::to('/supplierList')->with('success_massege', 'Supplier Added Successfully.');
        }
    }

        /**
     * 
     * @param type $id
     */
    public function supplierDelete($id){
        $id = base64_decode($id);
        // Insert data into database      
        SupplierManager::deleteSupplier($id);
        return Redirect::to('/supplierList')->with('success_massege', 'Supplier Deleted Successfully.');
    }

}
