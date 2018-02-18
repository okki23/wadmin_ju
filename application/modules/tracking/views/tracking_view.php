<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <div class="panel-heading-btn">
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-default" data-click="panel-expand"><i class="fa fa-expand"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-success" data-click="panel-reload"><i class="fa fa-repeat"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-warning" data-click="panel-collapse"><i class="fa fa-minus"></i></a>
                                <a href="javascript:;" class="btn btn-xs btn-icon btn-circle btn-danger" data-click="panel-remove"><i class="fa fa-times"></i></a>
                            </div>
                            <h4 class="panel-title">TRACKING MANAGEMENT   </h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            <!-- array('id','member_id','order_id','kurir_id','no_status','status','created_at','updated_at'); -->

															<a href="<?php echo base_url('tracking/store');?>" class="btn btn-large btn-danger"> <i class="fa fa-plus-circle"></i> ADD </a>
															<br>
															&nbsp;
																 <table id="data-table" class="table table-striped table-bordered">
                                   <thead>
                                     <tr>
                                       <th style="width:2%; text-align:center;">No</th>
                                       <th style="width:15%; text-align:center;">Order ID</th>
                                       <th style="width:25%; text-align:center;">Kurir</th>
                                
                                       <th style="width:15%; text-align:center;">Status</th>
                                       <th style="width:15%; text-align:center;">Last Update</th>
                                   
                                       <th style="width:5%; text-align:center;">Opsi</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                      <?php
                                      $no=1;
                                      foreach($listing as $row){
                                      ?>

                                      <tr class="gradeX">
                                       <td><?php echo $no; ?></td>
                                       <td><?php echo $row->order_id; ?></td>
                                       <td><?php echo $row->nama_kurir; ?></td>
                                 
                                       <td><?php echo $row->status; ?></td>
                                       <td><?php echo $row->updated_at; ?></td>
                                       <td style="width:20%; text-align:center;"><a href="<?php echo base_url('tracking/store/'.$row->id); ?>"> Edit </a> &nbsp; | &nbsp; <a href="<?php echo base_url('tracking/delete/'.$row->id); ?>"> Delete </a></td>
                                     </tr>
                                     <?php
                                     }
                                     ?>
                                   </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
            
      <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-xl">
                    <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">×</button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <img src="" alt="" />
                        </div>
                    </div>
                </div>
                </div>

