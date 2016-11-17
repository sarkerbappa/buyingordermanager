<?php

/**
 * Lab Dip Validation
 * @return array
 */
function lab_dip_validation_rule() {
    $lab_dip_validation_rule = array(
        'lab_dip_fst_ac_date' => array(''),
        'lab_dip_fst_sub_date' => array(''),
        'lab_dip_second_ac_date' => array(''),
        'lab_dip_second_sub_date' => array(''),
        'lab_dip_third_ac_date' => array(''),
        'lab_dip_third_sub_date' => array(''),
    );
    return $lab_dip_validation_rule;
}

/**
 * 
 * @return array
 */
function fit_proto_validation_rule() {
    $fit_proto_validation_rule = array(
        'fit_proto_fst_ac_date' => array(''),
        'fit_proto_fst_sub_date' => array(''),
        'fit_proto_second_ac_date' => array(''),
        'fit_proto_second_sub_date' => array(''),
        'fit_proto_third_ac_date' => array(''),
        'fit_proto_third_sub_date' => array(''),
    );
    return $fit_proto_validation_rule;
}

/**
 * 
 * @return array
 */
function trim_fst_validation_rule() {
    $trim_fst_validation_rule = array(
        'trim_fst_ac_date' => array(''),
        'trim_fst_sub_date' => array(''),
        'trim_second_ac_date' => array(''),
        'trim_second_sub_date' => array(''),
        'trim_third_ac_date' => array(''),
        'trim_third_sub_date' => array(''),
    );
    return $trim_fst_validation_rule;
}

/**
 * 
 * @return array
 */
function bulk_feb_validation_rule() {
    $bulk_feb_validation_rule = array(
        'bulk_feb_fst_ac_date' => array(''),
        'bulk_feb_fst_sub_date' => array(''),
        'bulk_feb_second_ac_date' => array(''),
        'bulk_feb_second_sub_date' => array(''),
        'bulk_feb_third_ac_date' => array(''),
        'bulk_feb_third_sub_date' => array(''),
    );
    return $bulk_feb_validation_rule;
}

/**
 * 
 * @return array
 */
function ppsample_validation_rule() {
    $ppsample_validation_rule = array(
        'ppsample_fst_ac_date' => array(''),
        'ppsample_fst_sub_date' => array(''),
        'ppsample_second_ac_date' => array(''),
        'ppsample_second_sub_date' => array(''),
        'ppsample_third_ac_date' => array(''),
        'ppsample_third_sub_date' => array(''),
    );
    return $ppsample_validation_rule;
}

/**
 * 
 * @return array
 */
function print_emrrodiry_validation_rule() {
    $print_emrrodiry_validation_rule = array(
        'print_emrrodiry_fst_ac_date' => array(''),
        'print_emrrodiry_fst_sub_date' => array(''),
        'print_emrrodiry_second_ac_date' => array(''),
        'print_emrrodiry_second_sub_date' => array(''),
        'print_emrrodiry_third_ac_date' => array(''),
        'print_emrrodiry_third_sub_date' => array(''),
    );

    return $print_emrrodiry_validation_rule;
}



/**
 * 
 * @return array
 */
function general_field_validation_rule() {
    $general_field_validation_rule = array(
        'po_number' => array('required'),
        'po_receive_date' => array('required'),
        'sp_name' => array('required'),
        'customer_name' => array('required'),
        'item_description' => array(''),
        'item_style_number' => array('required'),
        'vendor_code' => array(''),
        'color_receive_date' => array(''),
        'color_code' => array(''),
        'color_name' => array(''),
        'quantity' => array('required'),
        'brand_name' => array(''),
        'shipment_date' => array('required'),
        'revise_shipment_date' => array('')
    );

    return $general_field_validation_rule;
}


/**
 * General Field Validation rule for order edit
 * @return array
 */
function edit_general_field_validation_rule() {
    $general_field_validation_rule = array(
        'po_number' => array(''),
        'po_receive_date' => array(''),
        'sp_name' => array(''),
        'customer_name' => array(''),
        'item_description' => array(''),
        'item_style_number' => array(''),
        'vendor_code' => array(''),
        'color_receive_date' => array(''),
        'color_code' => array(''),
        'color_name' => array(''),
        'quantity' => array(''),
        'brand_name' => array(''),
        'shipment_date' => array(''),
        'revise_shipment_date' => array('')
    );

    return $general_field_validation_rule;
}


/**
 * Order Sample Validation Rule
 * @return type
 */
function orderSaveValidationRule() {
    $lab_dip_validation_rule = lab_dip_validation_rule();
    $fit_proto_validation_rule = fit_proto_validation_rule();
    $trim_fst_validation_rule = trim_fst_validation_rule();
    $bulk_feb_validation_rule = bulk_feb_validation_rule();
    $ppsample_validation_rule = ppsample_validation_rule();
    $print_emrrodiry_validation_rule = print_emrrodiry_validation_rule();
    $general_field_validation_rule = general_field_validation_rule();

    $combined_validation_rule = array_merge(
            $general_field_validation_rule, $lab_dip_validation_rule, $fit_proto_validation_rule, $trim_fst_validation_rule, $bulk_feb_validation_rule, $ppsample_validation_rule, $print_emrrodiry_validation_rule
    );
    return $combined_validation_rule;
}


/**
 * 
 * @return type
 */
function orderEditSaveValidationRule() {
    $lab_dip_validation_rule = lab_dip_validation_rule();
    $fit_proto_validation_rule = fit_proto_validation_rule();
    $trim_fst_validation_rule = trim_fst_validation_rule();
    $bulk_feb_validation_rule = bulk_feb_validation_rule();
    $ppsample_validation_rule = ppsample_validation_rule();
    $print_emrrodiry_validation_rule = print_emrrodiry_validation_rule();
    $general_field_validation_rule = edit_general_field_validation_rule();

    $combined_validation_rule = array_merge(
            $general_field_validation_rule, $lab_dip_validation_rule, $fit_proto_validation_rule, $trim_fst_validation_rule, $bulk_feb_validation_rule, $ppsample_validation_rule, $print_emrrodiry_validation_rule
    );
    return $combined_validation_rule;
}
//............................All inputs collection................................................. 


/**
 * 
 * @param type $all_input
 * @return type
 */
function general_field_value($all_input) {
    $general_field_value = array(
        'po_number' => $all_input['po_number'],
        'po_receive_date' => $all_input['po_receive_date'],
        'sp_name' => $all_input['sp_name'],
        'customer_name' => $all_input['customer_name'],
        'item_description' => $all_input['item_description'],
        'item_style_number' => $all_input['item_style_number'],
        'vendor_code' => $all_input['vendor_code'],
        'color_code' => $all_input['color_code'],
        'color_name' => $all_input['color_name'],
        'color_receive_date' => $all_input['color_receive_date'],
        'quantity' => $all_input['quantity'],
        'brand_name' => $all_input['brand_name'],
        'shipment_date' => $all_input['shipment_date'],
        'revise_shipment_date' => $all_input['revise_shipment_date'],
    );
    return $general_field_value;
}

/**
 * 
 * @param type $all_input
 * @return type
 */
function lab_dip_field_value($all_input) {
    $lab_dip_field_value = array(
        'lab_dip_fst_ac_date' => $all_input['lab_dip_fst_ac_date'],
        'lab_dip_fst_sub_date' => $all_input['lab_dip_fst_sub_date'],
        'lab_dip_second_ac_date' => $all_input['lab_dip_second_ac_date'],
        'lab_dip_second_sub_date' => $all_input['lab_dip_second_sub_date'],
        'lab_dip_third_ac_date' => $all_input['lab_dip_third_ac_date'],
        'lab_dip_third_sub_date' => $all_input['lab_dip_third_sub_date'],
    );

    return $lab_dip_field_value;
}

/**
 * 
 * @param type $all_input
 * @return type
 */
function fit_proto_field_value($all_input) {

    $fit_proto_field_value = array(
        'fit_proto_fst_ac_date' => $all_input['fit_proto_fst_ac_date'],
        'fit_proto_fst_sub_date' => $all_input['fit_proto_fst_sub_date'],
        'fit_proto_second_ac_date' => $all_input['fit_proto_second_ac_date'],
        'fit_proto_second_sub_date' => $all_input['fit_proto_second_sub_date'],
        'fit_proto_third_ac_date' => $all_input['fit_proto_third_ac_date'],
        'fit_proto_third_sub_date' => $all_input['fit_proto_third_sub_date'],
    );

    return $fit_proto_field_value;
}
/**
 * 
 * @param type $all_input
 * @return type
 */
function trim_field_value($all_input) {
    $trim_field_value = array(
        'trim_fst_ac_date' => $all_input['trim_fst_ac_date'],
        'trim_fst_sub_date' => $all_input['trim_fst_sub_date'],
        'trim_second_ac_date' => $all_input['trim_second_ac_date'],
        'trim_second_sub_date' => $all_input['trim_second_sub_date'],
        'trim_third_ac_date' => $all_input['trim_third_ac_date'],
        'trim_third_sub_date' => $all_input['trim_third_sub_date'],
    );

    return $trim_field_value;
}
/**
 * 
 * @param type $all_input
 * @return type
 */
function bulk_feb_field_value($all_input) {
    $bulk_feb_field_value = array(
        'bulk_feb_fst_ac_date' => $all_input['bulk_feb_fst_ac_date'],
        'bulk_feb_fst_sub_date' => $all_input['bulk_feb_second_ac_date'],
        'bulk_feb_second_ac_date' => $all_input['bulk_feb_second_ac_date'],
        'bulk_feb_second_sub_date' => $all_input['bulk_feb_second_sub_date'],
        'bulk_feb_third_ac_date' => $all_input['bulk_feb_third_ac_date'],
        'bulk_feb_third_sub_date' => $all_input['bulk_feb_third_sub_date'],
    );

    return $bulk_feb_field_value;
}
/**
 * 
 * @param type $all_input
 * @return type
 */
function ppsample_field_value($all_input) {
    $ppsample_field_value = array(
        'ppsample_fst_ac_date' => $all_input['ppsample_fst_ac_date'],
        'ppsample_fst_sub_date' => $all_input['ppsample_fst_sub_date'],
        'ppsample_second_ac_date' => $all_input['ppsample_second_ac_date'],
        'ppsample_second_sub_date' => $all_input['ppsample_second_sub_date'],
        'ppsample_third_ac_date' => $all_input['ppsample_third_ac_date'],
        'ppsample_third_sub_date' => $all_input['ppsample_third_sub_date'],
    );

    return $ppsample_field_value;
}
/**
 * 
 * @param type $all_input
 * @return type
 */
function print_emrrodiry_field_value($all_input) {
    $print_emrrodiry_field_value = array(
        'print_emrrodiry_fst_ac_date' => $all_input['print_emrrodiry_fst_ac_date'],
        'print_emrrodiry_fst_sub_date' => $all_input['print_emrrodiry_fst_sub_date'],
        'print_emrrodiry_second_ac_date' => $all_input['print_emrrodiry_second_ac_date'],
        'print_emrrodiry_second_sub_date' => $all_input['print_emrrodiry_second_sub_date'],
        'print_emrrodiry_third_ac_date' => $all_input['print_emrrodiry_third_ac_date'],
        'print_emrrodiry_third_sub_date' => $all_input['print_emrrodiry_third_sub_date'],
    );

    return $print_emrrodiry_field_value;
}

// 
/**
 * Collect all field valews
 * @param type $all_input
 * @return type
 */
function makeOrderInfoArray($all_input) {
    $general_field_value = general_field_value($all_input);
    $lab_dip_field_value = lab_dip_field_value($all_input);
    $fit_proto_field_value = fit_proto_field_value($all_input);
    $trim_field_value = trim_field_value($all_input);
    $bulk_feb_field_value = bulk_feb_field_value($all_input);
    $ppsample_field_value = ppsample_field_value($all_input);
    $print_emrrodiry_field_value = print_emrrodiry_field_value($all_input);

    $order_info = array_merge(
            $general_field_value, $lab_dip_field_value, $fit_proto_field_value, $trim_field_value, $bulk_feb_field_value, $ppsample_field_value, $print_emrrodiry_field_value
    );

    return $order_info;
}
