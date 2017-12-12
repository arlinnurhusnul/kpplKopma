<?php
$assets_location = base_url()."aset/dashboard/";
?>

<div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="fa fa-money fa-fw"></i> Barang</h3>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered table-hover table-striped">
                                        <thead>
                                            <tr>
                                                <th>Kode Barang</th>
                                                <th>Kategori Barang</th>
                                                <th>Nama Barang</th>
												<th>Harga</th>
												<th>Gambar</th>
												<th>Keterangan</th>
												<th>Stock</th>
                                            </tr>
                                        </thead>
                                        <tbody>
										 <?php foreach ($tt_barang as $b) { ?>
                                            <tr>
                                                <td><?php echo $b['kode_barang']; ?></td>
                                                <td><?php echo $b['kategori']; ?></td>
                                                <td><?php echo $b['nama_barang']; ?></td>
												<td><?php echo $b['harga']; ?></td>
												<td><?php echo $b['file_gambar']; ?></td>
												<td><?php echo $b['keterangan']; ?></td>
												<td><?php echo $b['stock']; ?></td>
												<td><a href="<?php echo base_url().'index.php/admin/deleteproduk/'.$b['kode_barang'];?>"><button>Delete</button></a></td>
                                            </tr>
                                        </tbody>
										 <?php } ?>
                                    </table>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>