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
                            <h4 class="panel-title">ORDER MANAGEMENT   </h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                           
														 
															&nbsp;
																 <table id="data-table" class="table table-striped table-bordered">
                                   <thead>
                                     <tr>
                                       <th style="width:2%; text-align:center;">No</th>
                                       <th style="width:15%; text-align:center;">Order ID</th>
                                       <th style="width:25%; text-align:center;">Produk</th>
                                       <th style="width:15%; text-align:center;">Customer</th>
                                       <th style="width:15%; text-align:center;">Nama Kurir</th>
                                       <th style="width:15%; text-align:center;">Store</th>
                                       <th style="width:5%; text-align:center;">Qty</th>
                                       <th style="width:10%; text-align:center;">Total</th>
                                       <th style="width:15%; text-align:center;">Status</th>
                                       <th style="width:15%; text-align:center;">Last Update</th>
                                      
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
                                       <td><?php echo $row->product_name; ?></td>
                                       <td><?php echo $row->member_name; ?></td>
                                       <td><?php echo $row->nama_kurir; ?>   </td>
                                       <td><?php echo $row->store_name; ?></td>
                                       <td><?php echo $row->qty; ?></td>
                                       <td><?php echo "Rp.".number_format($row->total); ?></td>
                                       <td> <?php echo $row->status; ?> </td>
                                       <td> <?php echo $row->last_update; ?> </td>
                                     </tr>
                                     <?php
                                     $no++;
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

