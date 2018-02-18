<!-- begin row -->
			<div class="row">
                <!-- begin col-6 -->
			    <!-- <div class="col-md-12">
 
 			    <div class="col-md-12">
 			        <!-- begin panel -->
                     <div class="panel panel-inverse" data-sortable-id="form-stuff-1">
                         <div class="panel-heading">
                             <div class="panel-heading-btn">
                                 <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                 <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                 <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                 <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                             </div>
                             <h4 class="panel-title">TRACKING MANAGEMENT FORM</h4>
                         </div>
                         

                         <div class="panel-body">

                             <form class="form-horizontal" action="<?php echo base_url('tracking/save'); ?>" method="POST" enctype="multipart/form-data">
															 <input type="hidden" name="id" value="<?php echo $parseform->id; ?>">
                                                             <div class="form-group">
															 		<label class="col-md-3 control-label">Kurir</label>
															 		<div class="col-md-9">
																		<select name="kurir_id" class="form-control selectpicker" data-size="10" data-live-search="true" data-style="btn-white">
																						<option value = "">--Pilih--</option>
																						<?php foreach ($opt_kurir as $row){

																								if($row->member_id == $parseform->kurir_id){
																									echo '<option value='.$row->member_id.' selected=selected> '.$row->member_name.' </option>';
																								}else{
																									echo '<option value='.$row->member_id.'> '.$row->member_name.' </option>';
																								}

																						}
																						?>
																	  </select>
															 		</div>
                                                             </div>
                                                             <div class="form-group">
															 		<label class="col-md-3 control-label">Order ID</label>
															 		<div class="col-md-9">
																		<select name="order_id" id="order_id" class="form-control selectpicker" data-size="10" data-live-search="true" data-style="btn-white">
																						<option value = "">--Pilih--</option>
																						<?php foreach ($opt_order as $row){

																								if($row->order_id == $parseform->order_id){
																									echo '<option value='.$row->order_id.' selected=selected> '.$row->order_id.' </option>';
																								}else{
																									echo '<option value='.$row->order_id.'> '.$row->order_id.' </option>';
																								}

																						}
																						?>
																	  </select>
															 		</div>
                                                             </div>

                                                             <div class="form-group">
															 		<label class="col-md-3 control-label">Order Information</label>
															 		<div class="col-md-9">
                                                                     <table class="table table-bordered">
                                                                        <tr>
                                                                            <td> Product Name </td>
                                                                            <td> <p id="product_name"> </p> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Product Category </td>
                                                                            <td> <p id="product_category"> </p> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Product Varian </td>
                                                                            <td> <p id="product_varian"> </p> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Member </td>
                                                                            <td> <p id="member_name"> </p> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Store </td>
                                                                            <td> <p id="store_name"> </p> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Date Order </td>
                                                                            <td> <p id="created_at"> </p> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Qty </td>
                                                                            <td> <p id="qty"> </p> </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td> Total </td>
                                                                            <td> <p id="total"> </p> </td>
                                                                        </tr>
                                                                    </table>
															 		</div>
                                                             </div>
                                                            
                                                            

															 <div  align="center">
															 		<button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
																	<a class="btn btn-danger" href="<?php echo base_url('tracking'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
															 </div>
																 <!-- <div class="form-group">
                                
                             </form>
                         </div>
                     </div>
                     <!-- end panel -->
                 </div>
                 <!-- end col-6 -->
            </div>
            <!-- end row -->
