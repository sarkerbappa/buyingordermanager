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
                    <h2 class="box-title">Add Supplier</h2>
                    <span class="pull-right">
                        <a href="{{URL::route("supplierList")}}"  class="btn  btn-bitbucket "><i class="fa fa-list"></i>  Supplier List </a>
                    </span>
                </div><!-- /.box-header -->
                <!-- form start -->
                {{Form::open(array('route' => 'supplierSave', 'files' => true)) }}
                <div class="row">
                    <div class="col-md-10">
                        <div class="box-body">
                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Supplier / Vendor Name <b class="mandetory_star">*</b> :</label></div>
                                <div class="col-sm-8">
                                    {{Form::text('supplier_name', '', $attributes = array('class' => 'form-control', 'placeholder' => 'NT APP'))}}
                                    <span class="text-red"><?php echo $errors->first('supplier_name'); ?></span>
                                </div>
                            </div>

                            <div class="row form-group">
                                <div class="col-md-4 form-level"><label>Supplier Description :</label></div>
                                <div class="col-sm-8">
                                    {{Form::text('supplier_description', '', $attributes = array('class' => 'form-control', 'placeholder' => 'Supplier Description'))}}
                                    <span class="text-red"><?php echo $errors->first('supplier_description'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
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