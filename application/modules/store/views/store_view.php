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
                            <h4 class="panel-title">STORE MANAGEMENT  </h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                            
															<a href="<?php echo base_url('store/storex');?>" class="btn btn-large btn-danger"> <i class="fa fa-plus-circle"></i> ADD </a>
															<br>
															&nbsp;
																 <table id="data-table" class="table table-striped table-bordered">
                                   <thead>
                                     <tr>
                                       <th>Kode Store</th>
                                       <th>Nama Store</th>
                                       <th>Alamat Store</th>
                                       <th>Telp Store</th>
                                       <th>Opsi</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                      <?php
                                      foreach($listing->result() as $row){
                                      ?>
                                      <tr class="gradeX">

                                       <td><?php echo $row->store_id; ?></td>
                                       <td><?php echo $row->store_name; ?></td>
                                       <td><?php echo $row->store_address; ?></td>
                                       <td><?php echo $row->store_phone_number; ?></td>
																		 
                                       <td class="center"><a href="<?php echo base_url('store/storex/'.$row->id); ?>"> Edit </a> &nbsp; | &nbsp; <a href="<?php echo base_url('store/delete/'.$row->id); ?>"> Delete </a></td>
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
