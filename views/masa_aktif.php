
            <div class="col-md-10 stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Advanced Table</p>
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display   expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>id</th>
                              <th>Nama</th>
                              <th>Nama Paket</th>
                              <th>Awal Paket</th>
                              <th>Akhir Paket</th>
                              <th>Status</th>
                              <th>Keterangan</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                        // ciptakan objek dari class Internet
                        $obj = new MasaAktif();
                        // panggil fungsi menampilkan
                        $data = $obj->getData();
                        // looping data Internet
                        $no = 1;
                        foreach($data as $ma){
                        
                    ?>
                            <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $ma['nama'] ?></td>
                              <td><?= $ma['nama_paket'] ?></td>
                              <td><?= $ma['awal_paket'] ?></td>
                              <td><?= $ma['akhir_paket'] ?></td>
                              <td><div class="badge badge-success"><?= $ma['status'] ?></div></td>
                              <td><div class="badge badge-warning"><?= $ma['keterangan'] ?></div></td>
                              
                                  </tr>
                            <?php } ?>
                          </tbody>
                      </table>
                      </div>
                    </div>
                  </div>
                </div>

                
              </div>
            </div>
