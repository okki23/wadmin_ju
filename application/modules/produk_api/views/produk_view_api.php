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
                            <h4 class="panel-title">PRODUK MANAGEMENT  </h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                           

															<a href="<?php echo base_url('produk/store');?>" class="btn btn-large btn-danger"> <i class="fa fa-plus-circle"></i> ADD </a>
															<br>
															&nbsp;
																 <table id="data-table" class="table table-striped table-bordered">
                                   <thead>
                                     <tr>
                                       <th style="width:2%; text-align:center;">No</th>
                                       <th style="width:10%; text-align:center;">Kode Produk</th>
                                       <th style="width:20%; text-align:center;">Nama Produk</th>
                                       <th style="width:20%; text-align:center;">Kategori</th>
                                       <th style="width:20%; text-align:center;">Varian</th>
                                       <th style="width:5%; text-align:center;">Stok</th>
                                       <th style="width:30%; text-align:center;">Foto Produk</th>
                                       <th style="width:5%; text-align:center;">Opsi</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                      <?php
                                      $no=1;
                                      foreach($listing->result() as $row){
                                      ?>
                                      <tr class="gradeX">
                                       <td><?php echo $no; ?></td>
                                       <td><?php echo $row->product_id; ?></td>
                                       <td><?php echo $row->product_name; ?></td>
                                       <td><?php echo $row->product_category; ?></td>
                                       <td><?php echo $row->product_variants; ?></td>
                                       <td><?php echo $row->stok; ?></td>
																			 <?php
																			 if($row->product_photo == '' || $row->product_photo == NULL ){
																			 ?>
   																	 	 <td> <h4 align="center"> Image Not Found! </h4> </td>
																			 <?php
																		 	 }else{
																			 ?>
																			 <td> <div align="center"> 
                                                                           
                                                                             <a href="#"  data-toggle="modal" data-target="#lightbox">                                                        
                                                                             <img src="<?php echo base_url("uploads/".$row->product_photo); ?>" style="width:75%; height:75%;" > 
                                                                             </a>
                                                                             </div> </td>
																			 <?php
																		   }
																			 ?>

                                       <td style="width:20%; text-align:center;"><a href="<?php echo base_url('produk/store/'.$row->id); ?>"> Edit </a> &nbsp; | &nbsp; <a href="<?php echo base_url('produk/delete/'.$row->id); ?>"> Delete </a></td>
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

