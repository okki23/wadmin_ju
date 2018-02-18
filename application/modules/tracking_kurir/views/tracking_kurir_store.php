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
                             <h4 class="panel-title">TRACKING KURIR MANAGEMENT FORM</h4>
                         </div>
                         

                         <div class="panel-body">

                             <form class="form-horizontal" action="<?php echo base_url('tracking_kurir/save'); ?>" method="POST" enctype="multipart/form-data">
                                                             <input type="hidden" name="id" value="<?php echo $parseform->id; ?>">
                                                             <input type="hidden" name="kurir_id" value="<?php echo $parseform->kurir_id; ?>">
                                                             <input type="hidden" name="order_id" value="<?php echo $parseform->order_id; ?>">
                                                          
                                                             <!-- <div class="form-group">
															 		<label class="col-md-3 control-label">No Status</label>
															 		<div class="col-md-9">
                                                                     <input type="text" name="no_status" class="form-control"  value="<?php echo $parseform->no_status; ?>">
															 		</div>
                                                             </div> -->
                                                             <div class="form-group">
															 		<label class="col-md-3 control-label">Status</label>
															 		<div class="col-md-9">
                                                                     <input type="text" name="status" class="form-control" value="<?php echo $parseform->status; ?>">
															 		</div>
                                                             </div>
                                                             <div class="form-group">
															 		<label class="col-md-3 control-label">Last Update</label>
															 		<div class="col-md-9">
                                                                     <input type="text" name="updated_at" readonly="readonly" class="form-control" value="<?php echo date('Y-m-d H:i:s'); ?>">
															 		</div>
                                                             </div>
                                                              
                                                            

															 <div  align="center">
															 		<button type="submit" name="save" class="btn btn-large btn-primary" > <i class="fa fa-archive"></i> Save </button>
																	<a class="btn btn-danger" href="<?php echo base_url('tracking_kurir'); ?>"> <i class="fa fa-reply-all"></i> Back </a>
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
