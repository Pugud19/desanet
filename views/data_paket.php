<div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title mb-0">Daftar Paket Internet</p>
                  <div class="table-responsive">
                    <table class="table table-striped table-borderless">
                      <thead>
                        <tr>
                          <th>Paket</th>
                          <th>Kecepatan</th>
                          <th>Lama Penggunaan</th>
                          <th>Harga</th>
                          <th>Ket</th>
                        </tr>  
                      </thead>
                      <tbody>
                        <?php 
                        // ciptakan objek dari class Internet
                        $obj = new Internet();
                        // panggil fungsi menampilkan
                        $data = $obj->getInternet();
                        // looping data Internet
                        foreach ($data as $d) {
                        
                        ?>
                        <tr>
                          <td><?= $d['paket'] ?></td>
                          <td class="font-weight-bold"><?= $d['kecepatan'] ?></td>
                          <td class="font-weight-medium"><div class="badge badge-success"><?= $d['lama_penggunaan'] ?></div></td>
                          <td class="font-weight-medium"><div class="badge badge-warning">Rp.<?= number_format($d['harga'],0,',','.') ?></div></td>
                          <td class="font-weight-medium">
                          <form action="controllers/internetController.php" method="post">
                          <a href="index.php?hal=form_internet_edit&id=<?= $d['id'] ?>"  class="btn btn-warning "><i class="fa fa-edit"></i></a>
                          <button class="btn btn-danger" type="submit" name="tombol" value="hapus" onclick="confirm('Anda Yakin Ingin Menghapus?')" ><i class="fa fa-trash"></i></button>
                          <input type="hidden" name="idh" value="<?= $d['id'] ?>">
                          </form>
                            </td> 
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <div class="d-flex justify-content-end">
                  <a href="index.php?hal=form_internet" type="submit" class="btn btn-primary mr-2"><i class="fa fa-plus"></i> Tambah</a>
                  </div>
                </div>
              </div>
            </div>