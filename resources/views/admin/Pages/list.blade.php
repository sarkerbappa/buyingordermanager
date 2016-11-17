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
                <div class="box-header">
                    <div class="col-md-10">
                       <i class="fa fa-files-o fa_title"></i>
                       <h1 class="box-title">All Order List </h1>
                    </div>
                  
                </div><!-- /.box-header -->
                
                <div class="box-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Member ID</th>
                                <th>Image</th>
                                <th>Member Name</th>
                                <th>Mobile</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           
                                <tr>
                                    <td>
                                        
                                    </td>
                                    <td class="td_image">
                                       
                                    </td>
                                    <td class="td_name">
                                       
                                    </td>
                                    <td class="td_before_action">
                                        <span>
                                        
                                        </span>
                                    </td>

                                     <td style="float:right;">
                                        <div class="action_element" style="float:left; margin:3px;">
                                              <a class="btn btn-sm btn-info" href=""><i class="fa fa-edit" ></i>View</a>
                                        </div>
                                        <div class="action_element" style="float:left; margin:3px;">
                                              <a class="btn btn-sm btn-success" href=""><i class="fa fa-edit" ></i> Edit</a>
                                        </div>
                                        <div class="action_element" style="float:left; margin:3px;">
                                              <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash-o" ></i> Delete</a>
                                        </div>
                                    </td>
                                </tr>
                       
                        </tbody>
                        <tfoot>
                            <tr>
                               <th>Member ID</th>
                                <th>Image</th>
                                <th>Member Name</th>
                                <th>Mobile</th>
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
