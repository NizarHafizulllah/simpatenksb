



<div class="row">
  <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <i class="ti-layout-cta-left"></i> Cari
                            </h3>
                        </div>
                        <div class="panel-body">
                            <form role="form" action="" id="btn-cari">
            <div class="col-md-3">
              <div class="form-group">
              <label for="nama">Nama Pemohon </label>
                <input id="nama_pemohon" name="nama_pemohon" type="text" class="form-control" placeholder="Nama Pemohon"></input>
              </div>
            </div>
            <div class="col-md-3">
              <div class="form-group">
              <label for="nama">No. Registrasi </label>
                <input id="no_regis" name="no_regis" type="text" class="form-control" placeholder="No. Registrasi"></input>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label></label>
                <button type="submit" class="btn btn-primary form-control" id="btn_submit"><i class="fa">Cari</i></button>
              </div>
            </div>
            <div class="col-md-2">
              <div class="form-group">
                <label></label>
                <button type="reset" class="btn btn-danger form-control" id="btn_reset"><i class="fa">Reset</i></button>
              </div>
            </div>

           
          </form>

                        </div>
                    </div>
                </div>
</div>

<div class="row">
  <div class="col-lg-12">
                    <!-- First Basic Table strats here-->
                    <div class="panel">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                <div class="cold-md-7">
                                <i class="ti-layout-cta-left"></i> Data
                                </div>
                                <div class="col-md-3 pull-right">
                                  
                                </div>
                            </h3>
                        </div>
                        <div class="panel-body">
                                <table width="100%" border="0" class="table dataTable" id="imb" role="grid">
                                 <thead>
                                    <tr>
                                        <th>No. Registrasi</th>
                                        <th>Nama Pemohon</th>
                                        <th>Tgl. Verfikasi</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                      
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
</div>


             <?php 
$this->load->view($this->controller.'_view_js');
?>
