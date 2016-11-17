   @if ($order_info)
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">PO Number</div>
                                <div class="panel-body">
                                   {{$order_info->po_number }}
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">PO Receive Date</div>
                                <div class="panel-body">
                                   {{$order_info->po_receive_date }}
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Supplier Name</div>
                                <div class="panel-body">
                                   {{$order_info->sp_name }}
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Customer Name</div>
                                <div class="panel-body">
                                   {{$order_info->customer_name }}
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Item Description</div>
                                <div class="panel-body">
                                   {{$order_info->item_description }}
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Item Style Number</div>
                                <div class="panel-body">
                                   {{$order_info->item_style_number }}
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Vendor Code</div>
                                <div class="panel-body">
                                   {{$order_info->vendor_code }}
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Color Code</div>
                                <div class="panel-body">
                                   {{$order_info->color_code }}
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Color Receive Date</div>
                                <div class="panel-body">
                                   {{$order_info->color_receive_date }}
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Color Name</div>
                                <div class="panel-body">
                                   {{$order_info->color_name }}
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Quantity</div>
                                <div class="panel-body">
                                   {{$order_info->quantity }}
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Brand Name</div>
                                <div class="panel-body">
                                   {{$order_info->brand_name }}
                                </div>
                            </div> 
                        </div>
                    </div>
                    
                     <div class="row">
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Shipment Date</div>
                                <div class="panel-body">
                                   {{$order_info->shipment_date }}
                                </div>
                            </div> 
                        </div>
                        <div class="col-md-6">
                            <div class="panel panel-primary">
                                <div class="panel-heading">Revise Shipment Date</div>
                                <div class="panel-body">
                                   {{$order_info->revise_shipment_date }}
                                </div>
                            </div> 
                        </div>
                    </div>
                    @endif