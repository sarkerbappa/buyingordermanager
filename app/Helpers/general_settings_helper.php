<?php

//................................Customer 

// Validation
function customerSaveValidationRule(){
     $customer_validation_rule = array(
        'customer_name' => array('required'),
        'customer_description' => array(''),
    );
    return $customer_validation_rule;
}

//Value Collection 
function makeCustomerInfoArray($all_input){
     $customer_value = array(
        'customer_name' => $all_input['customer_name'],
        'customer_description' => $all_input['customer_description'],
    );

    return $customer_value;
}



// ..................................Brand 

// Validation
function brandSaveValidationRule(){
    $brand_validation_rule = array(
        'brand_name' => array('required'),
        'brand_description' => array(''),
    );
    return $brand_validation_rule;
}

//Value Collection
function makeBrandInfoArray($all_input){
    $brand_value = array(
        'brand_name' => $all_input['brand_name'],
        'brand_description' => $all_input['brand_description'],
    );

    return $brand_value;
}



//Supplier

function supplierSaveValidationRule(){
    $supplier_validation_rule = array(
        'supplier_name' => array('required'),
        'supplier_description' => array(''),
    );
    return $supplier_validation_rule;
}


function makeSupplierInfoArray($all_input){
    $supplier_value = array(
        'supplier_name' => $all_input['supplier_name'],
        'supplier_description' => $all_input['supplier_description'],
    );

    return $supplier_value;
}






