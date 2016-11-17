@extends('admin.templates.default')
@section('content')
<section class="content">
    <div class="row">
        <!--<div class="col-md-1"></div>-->
        <!-- left column -->
        <div class="col-md-10 col-md-offset-1">
            <!-- general form elements -->
            <div class="box">
                <div class="box-header"><i class="fa fa-plus fa_title"></i>
                    <h2 class="box-title">Add Order</h2>
                    <span class="pull-right">
                        <a href="{{URL::route("allOrders")}}"  class="btn  btn-bitbucket "><i class="fa fa-list"></i>  Order List </a>
                    </span>
                </div><!-- /.box-header -->
                <!-- form start -->
                {{Form::open(array('route' => 'orderSave', 'files' => true)) }}
                <div class="row">
                    <div class="col-md-6">
                        <div class="box-body">

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>PO Number <b class="mandetory_star">*</b> :</label></div>
                                <div class="col-md-8"> 
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" />

                                    {{Form::text('po_number', '', $attributes = array('class' => 'form-control', 'placeholder' => 'BND00001'))}}
                                    <span class="text-red">{{ $errors->first('po_number')}}</span>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>PO Receive Date<b class="mandetory_star">*</b> :</label></div>
                                <div class="col-md-8"> 
                                    {{Form::date('po_receive_date', '', $attributes = array('class' => 'form-control', 'placeholder' => 'Book Name'))}}
                                    <span class="text-red">{{$errors->first('po_receive_date')}}</span>
                                </div>
                            </div>


                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Supplier, <br>Vendor Name <b class="mandetory_star">*</b> :</label></div>
                                <div class="col-sm-8">
                                    {{Form::text('sp_name', '', $attributes = array('class' => 'form-control', 'placeholder' => 'NT APP'))}}
                                    <span class="text-red"><?php echo $errors->first('sp_name'); ?></span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Customer Name <b class="mandetory_star">*</b> :</label></div>
                                <div class="col-sm-8">
                                    {{Form::text('customer_name', '', $attributes = array('class' => 'form-control', 'placeholder' => 'Kala Chan Mia'))}}
                                    <span class="text-red"><?php echo $errors->first('customer_name'); ?></span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Item Description :</label></div>
                                <div class="col-sm-8">
                                    {{Form::text('item_description', '', $attributes = array('class' => 'form-control', 'placeholder' => 'Hatu Chera Jins'))}}
                                    <span class="text-red"><?php echo $errors->first('item_description'); ?></span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Item, <br>Style Number <b class="mandetory_star">*</b> :</label></div>
                                <div class="col-sm-8">
                                    {{Form::text('item_style_number', '', $attributes = array('class' => 'form-control', 'placeholder' => 'MEFK 0984'))}}
                                    <span class="text-red"><?php echo $errors->first('item_style_number'); ?></span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Customer Code, <br>Vendor Code:</label></div>
                                <div class="col-sm-8">
                                    {{Form::text('vendor_code', '', $attributes = array('class' => 'form-control', 'placeholder' => 'NT APP'))}}
                                    <span class="text-red"><?php echo $errors->first('vendor_code'); ?></span>
                                </div>
                            </div>

                        </div><!-- /.box-body -->
                    </div> <!-- End of the Left Column-->



                    <div class="col-md-6">
                        <div class="box-body">

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Color Receive Date:</label></div>
                                <div class="col-md-8"> 
                                    {{Form::date('color_receive_date', '', $attributes = array('class' => 'form-control', 'placeholder' => 'Book Name'))}}
                                    <span class="text-red">{{$errors->first('color_receive_date')}}</span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Color Code:</label></div>
                                <div class="col-md-8"> 
                                    {{Form::text('color_code', '', $attributes = array('class' => 'form-control'))}}
                                    <span class="text-red">{{ $errors->first('color_code')}}</span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Color Name :</label></div>
                                <div class="col-md-8"> 
                                    {{Form::text('color_name', '', $attributes = array('class' => 'form-control','placeholder' => 'Sea Blue'))}}
                                    <span class="text-red">{{ $errors->first('color_name')}}</span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Quantity<b class="mandetory_star">*</b> :</label></div>
                                <div class="col-md-8"> 
                                    {{Form::number('quantity', '', $attributes = array('class' => 'form-control','placeholder' => '4000'))}}
                                    <span class="text-red">{{ $errors->first('quantity')}}</span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Brand Name:</label></div>
                                <div class="col-md-8"> 
                                    {{Form::text('brand_name', '', $attributes = array('class' => 'form-control','placeholder' => 'BDC'))}}
                                    <span class="text-red">{{ $errors->first('brand_name')}}</span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Shipment Date<b class="mandetory_star">*</b> :</label></div>
                                <div class="col-md-8"> 
                                    {{Form::date('shipment_date', '', $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('shipment_date')}}</span>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Revise Shipment Date :</label></div>
                                <div class="col-md-8"> 
                                    {{Form::date('revise_shipment_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('revise_shipment_date')}}</span>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                    </div> <!-- End of the Right Column-->
                </div> <!--- End of the row -->

                <!-- Start of the lower part of the form -->
                <div class="time_action">
                    <h3 class="box-title ">Time and Action plan</h3><hr>
                </div>


                <div class="box-body">
                    <div class="time_action_item_heading_level" data-toggle="collapse" data-target="#lab_dip">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-1">
                                <h5 class="time_action_label"> Lab Dip Submit</h5>
                            </div>
                            <div class="col-md-4 col-md-offset-1">
                                <h5 class="time_action_label"> Plan Date</h5>
                            </div>
                            <div class="col-md-4">
                                <h5 class="time_action_label">Actual Date </h5>
                            </div>
                        </div>  
                    </div>

                    <div id="lab_dip" class="collapse">
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                                <label>First Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('lab_dip_fst_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('lab_dip_fst_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                                <label>First Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('lab_dip_fst_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('lab_dip_fst_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                                <label>Second Submit</label>
                            </div>
                            <div class="col-md-4 ">

                                <div class=""> 
                                    {{Form::date('lab_dip_second_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('lab_dip_second_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                                <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('lab_dip_second_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('lab_dip_second_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                                <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('lab_dip_third_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('lab_dip_third_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                                <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('lab_dip_third_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('lab_dip_third_sub_date')}}</span>
                                </div>
                            </div>
                        </div>

                    </div>
                    <!-- ------------------------- End of the Lab Dib Submit ----------------------->

                    <div class="time_action_item_heading_level" data-toggle="collapse" data-target="#fit_proto_sample">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-1">
                                <h5 class="time_action_label">Fit and Proto Sample</h5>
                            </div> 
                            <div class="col-md-4 col-md-offset-1">
                                <h5 class="time_action_label"> Plan Date</h5>
                            </div>
                            <div class="col-md-4">
                                <h5 class="time_action_label">Actual Date </h5>
                            </div>
                        </div>
                    </div>

                    <div id="fit_proto_sample" class="collapse">

                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                                <label>First Submit</label>
                            </div>
                            <div class="col-md-4 ">
                                <div class=""> 
                                    {{Form::date('fit_proto_fst_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('fit_proto_fst_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                                <label>First Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('fit_proto_fst_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('fit_proto_fst_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                                <label>Second Submit</label>
                            </div>
                            <div class="col-md-4 ">
                                <div class=""> 
                                    {{Form::date('fit_proto_second_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('fit_proto_second_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                                <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('fit_proto_second_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('fit_proto_second_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-2 form-level">
                                <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">

                                <div class=""> 
                                    {{Form::date('fit_proto_third_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('fit_proto_third_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                                <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">

                                <div class=""> 
                                    {{Form::date('fit_proto_third_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('fit_proto_third_sub_date')}}</span>
                                </div>
                            </div>
                        </div>    
                    </div>

                    <!-- ------------------------- End of the Fit and Proto Sample ----------------------->

                    <div class="time_action_item_heading_level" data-toggle="collapse" data-target="#trim">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-1">
                                <h5 class="time_action_label">Trims</h5>
                            </div>  
                            <div class="col-md-4 col-md-offset-1">
                                <h5 class="time_action_label"> Plan Date</h5>
                            </div>
                            <div class="col-md-4">
                                <h5 class="time_action_label">Actual Date </h5>
                            </div>
                        </div>
                    </div>
                    <div id="trim" class="collapse" >
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                                <label>First Submit</label>
                            </div>
                            <div class="col-md-4 ">
                                <div class=""> 
                                    {{Form::date('trim_fst_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('trim_fst_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                                <label>First Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('trim_fst_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('trim_fst_sub_date')}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                               <label>Second Submit</label>
                            </div>
                            <div class="col-md-4 ">
                                <div class=""> 
                                    {{Form::date('trim_second_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('trim_second_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                               <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('trim_second_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('trim_second_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                              <label>Third Submit</label>
                            </div>
                            <div class="col-md-4 ">
                                <div class=""> 
                                    {{Form::date('trim_third_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('trim_third_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                               <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('trim_third_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('trim_third_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------- End of the Fit Trims ----------------------->


                    <div class="time_action_item_heading_level"data-toggle="collapse" data-target="#bulk_febric">
                        <div class="row ">
                            <div class="col-md-2 col-md-offset-1">
                                <h5 class="time_action_label">Bulk Fabrics</h5>
                            </div>  
                            <div class="col-md-4 col-md-offset-1">
                                <h5 class="time_action_label"> Plan Date</h5>
                            </div>
                            <div class="col-md-4">
                                <h5 class="time_action_label">Actual Date </h5>
                            </div>
                        </div>
                    </div>
                    <div id="bulk_febric" class="collapse" >
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                                <label>First Submit</label>
                            </div>
                            <div class="col-md-4 ">
                                <div class=""> 
                                    {{Form::date('bulk_feb_fst_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('bulk_feb_fst_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                                <label>First Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('bulk_feb_fst_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('bulk_feb_fst_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                               <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('bulk_feb_second_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('bulk_feb_second_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                               <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('bulk_feb_second_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('bulk_feb_second_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                               <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('bulk_feb_third_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('bulk_feb_third_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                               <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('bulk_feb_third_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('bulk_feb_third_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- ------------------------- End of the Bulk Fabrics ----------------------->

                    <div class="time_action_item_heading_level" data-toggle="collapse" data-target="#ppsample">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-1">
                                <h5 class="time_action_label">PP Sample</h5>
                            </div>  
                            <div class="col-md-4 col-md-offset-1">
                                <h5 class="time_action_label"> Plan Date</h5>
                            </div>
                            <div class="col-md-4">
                                <h5 class="time_action_label">Actual Date </h5>
                            </div>
                        </div>
                    </div>
                    <div id="ppsample" class="collapse" >
                        <div class="row form-group">
                              <div class="col-md-2 form-level">
                                <label>First Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('ppsample_fst_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('ppsample_fst_ac_date')}}</span>
                                </div>
                            </div>
                              <div class="col-md-2 form-level">
                                <label>First Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('ppsample_fst_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('ppsample_fst_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                             <div class="col-md-2 form-level">
                               <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('ppsample_second_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('ppsample_second_ac_date')}}</span>
                                </div>
                            </div>
                             <div class="col-md-2 form-level">
                               <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('ppsample_second_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('ppsample_second_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                               <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('ppsample_third_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('ppsample_third_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                               <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('ppsample_third_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('ppsample_third_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------- End of the PP Sample ----------------------->
                    <div class="time_action_item_heading_level" data-toggle="collapse" data-target="#print_emrrodiry">
                        <div class="row">
                            <div class="col-md-2 col-md-offset-1">
                                <h5 class="time_action_label">Print / Embrodiry</h5>
                            </div>  
                            <div class="col-md-4 col-md-offset-1">
                                <h5 class="time_action_label"> Plan Date</h5>
                            </div>
                            <div class="col-md-4">
                                <h5 class="time_action_label">Actual Date </h5>
                            </div>
                        </div>
                    </div>
                    <div id="print_emrrodiry" class="collapse" >
                        <div class="row form-group">
                             <div class="col-md-2 form-level">
                               <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('print_emrrodiry_fst_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('print_emrrodiry_fst_ac_date')}}</span>
                                </div>
                            </div>
                             <div class="col-md-2 form-level">
                               <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('print_emrrodiry_fst_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('print_emrrodiry_fst_sub_date')}}</span>
                                </div>
                            </div>
                        </div>

                        <div class="row form-group">
                             <div class="col-md-2 form-level">
                               <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('print_emrrodiry_second_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('print_emrrodiry_second_ac_date')}}</span>
                                </div>
                            </div>
                             <div class="col-md-2 form-level">
                               <label>Second Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('print_emrrodiry_second_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('print_emrrodiry_second_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                        <div class="row form-group">
                            <div class="col-md-2 form-level">
                               <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('print_emrrodiry_third_ac_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('print_emrrodiry_third_ac_date')}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 form-level">
                               <label>Third Submit</label>
                            </div>
                            <div class="col-md-4">
                                <div class=""> 
                                    {{Form::date('print_emrrodiry_third_sub_date', $value = null, $attributes = array('class' => 'form-control', 'placeholder' => ''))}}
                                    <span class="text-red">{{$errors->first('print_emrrodiry_third_sub_date')}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ------------------------- End of the Print / Embrodiry ----------------------->

                </div><!-- /.box-header -->

            </div> <!-- End of the Lower part-->


            <div class="box-footer">
                <div class="row">
                    <div class="col-md-2 col-md-offset-10">
                        {{Form::submit('Submit', array('class' => 'btn btn-success btn-lg'))}}
                    </div>
                </div>
            </div>
            {{ Form::close()}}
        </div><!-- /.box -->
    </div><!--/.col (left) -->
</div>   <!-- /.row -->
</section><!-- /.content -->


@stop