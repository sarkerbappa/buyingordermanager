@extends('admin.templates.default')
@section('content')
<section class="content">

    @if (Session::get('success_massege'))
    <div class="bs-example col-md-10 col-lg-offset-1">
        <div class="alert alert-success fade in">
            <a href="#" class="close" data-dismiss="alert">&times;</a>
            <strong>Success!</strong> {{Session::get('success_massege')}}
        </div>
    </div>
    @endif
    <!-- /////////////          Display  all products in stock         ////////////  -->
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="box">
                <div class="box-header">
                    <i class="fa fa-files-o fa_title"></i>
                    <h1 class="box-title">All Customer List </h1>
                    <span class="pull-right">
                        <a href="{{URL::route("customer")}}"  class="btn btn-adn "><i class="fa fa-plus"></i> Add New </a>
                        <button class="btn btn-bitbucket "><i class="fa fa fa-angle-double-down"></i> XL Import</button> 
                        <button class="btn btn-dropbox "><i class="fa fa fa fa-angle-double-up"></i> XL Export</button>  
                    </span>
                </div><!-- /.box-header -->

                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Customer Description</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if($all_customers)
                            @foreach($all_customers as $single_customer)
                            <tr>
                                <td>
                                    {{$single_customer->id}}
                                </td>
                                <td class="td_name">
                                    {{$single_customer->Customer_Name}}
                                </td>
                                <td class="td_before_action">
                                    {{$single_customer->Customer_Description}}
                                </td>

                                <td style="float:right;">
                                    <div class="action_element" style="float:left; margin:3px;">
                                        <a class="btn btn-sm btn-success" href="{{ URL::action('CustomerController@customerEditForm',  [base64_encode($single_customer->id)]) }}"><i class="fa fa-edit" ></i> Edit</a>
                                    </div>
                                    <div class="action_element" style="float:left; margin:3px;">
                                        <a  class="delete btn btn-sm btn-danger" href="{{ URL::action('CustomerController@customerDelete',  [base64_encode($single_customer->id)]) }}"><i class="fa fa-trash-o" ></i> Delete</a>
                                    </div>
                                </td>
                            </tr>
                            @endforeach       
                            @endif
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>Customer ID</th>
                                <th>Customer Name</th>
                                <th>Customer Description</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                    </table>
                </div><!-- /.box-body -->
            </div><!-- /.box -->
        </div><!-- /.col -->
    </div><!-- /.row -->
</div>
</section><!-- /.content -->
@stop
