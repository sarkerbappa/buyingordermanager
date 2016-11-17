@extends('admin.templates.default')
@section('content')


<section class="content">

    @if (Session::get('success_massege'))
    <div class="bs-example col-md-9">
        <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> {{Session::get('success_massege')}}
        </div>
    </div>
    @endif
    <!-- /////////////          Display  all products in stock         ////////////  -->
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header"><i class="fa fa-files-o fa_title"></i>
                        <h1 class="box-title">All Order List </h1>
                    <span class="pull-right">
                        <a href="{{URL::route("order")}}"  class="btn btn-adn "><i class="fa fa-plus"></i> Add New </a>
                        <button class="btn btn-bitbucket "><i class="fa fa fa-angle-double-down"></i> XL Import</button> 
                        <button class="btn btn-dropbox "><i class="fa fa fa fa-angle-double-up"></i> XL Export</button>  
                    </span>

                </div>

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>PO Number</th>
                                <th>Item Description</th>
                                <th>Customer Name</th>
                                <th>Style Number</th>
                                <th>Vendor Code</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($all_orders as $single_order)
                            <tr>
                                <td>
                                    {{$single_order->po_number}}
                                </td>
                                <td>
                                    {{$single_order->item_description}}
                                </td>
                                <td>
                                    {{$single_order->customer_name}}
                                </td>
                                <td>
                                    {{$single_order->item_style_number}}
                                </td>
                                <td>
                                    {{$single_order->vendor_code}}
                                </td>
                                

                                <td style="float:right;">
                                    <div class="action_element" style="float:left; margin:3px;">
                                        <a class="btn btn-sm btn-info" href="{{ URL::action('OrderController@orderView',  [base64_encode($single_order->id)]) }}"><i class="fa fa-eye"></i> View</a>
                                    </div>
                                    <div class="action_element" style="float:left; margin:3px;">
                                        <a class="btn btn-sm btn-success" href="{{ URL::action('OrderController@orderEditForm',  [base64_encode($single_order->id)]) }}"><i class="fa fa-edit" ></i> Edit</a>
                                    </div>
                                    <div class="action_element" style="float:left; margin:3px;">
                                        <a  class="delete btn btn-sm btn-danger" href="{{ URL::action('OrderController@orderDelete',  [base64_encode($single_order->id)]) }}"><i class="fa fa-trash-o" ></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>PO Number</th>
                                <th>Item Description</th>
                                <th>Customer Name</th>
                                <th>Style Number</th>
                                <th>Vendor Code</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</section><!-- /.content -->
@stop
