<?php 
if(isset($user)){
  if($role != 'Pengguna'){
?>
        <div>
            <div class="col-md-12  stretch-card">
              <div class="card">
                <div class="card-body">
                  <p class="card-title">Advanced Table</p>
                    <div class="col-12">
                      <div class="table-responsive">
                        <table id="example" class="display   expandable-table" style="width:100%">
                          <thead>
                            <tr>
                              <th>id</th>
                              <th>Fullname</th>
                              <th>Username</th>
                              <th>Email</th>
                              <th>Password</th>
                              <th>Role</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                        // ciptakan objek dari class Internet
                        $obj = new Member();
                        // panggil fungsi menampilkan
                        $data = $obj->getAll();
                        // looping data Internet
                        $no = 1;
                        foreach($data as $mb){
                        
                    ?>
                            <tr>
                              <td><?= $no++ ?></td>
                              <td><?= $mb['fullname'] ?></td>
                              <td><?= $mb['username'] ?></td>
                              <td><?= $mb['email'] ?></td>
                              <td><?= $mb['password'] ?></td>
                              <td><?= $mb['role'] ?></td>
                              <td>
                                <form action="controllers/memberController.php" method="post">
                                <a href="index.php?hal=form_pengguna_edit&id=<?= $mb['id'] ?>"  class="btn btn-warning py-2"><i class="fa fa-edit"></i></a>
                                <button class="btn btn-danger py-2" type="submit" name="proses" value="hapus" onclick="confirm('Anda Yakin Ingin Menghapus?')" ><i class="fa fa-trash"></i></button>
                                <input type="hidden" name="idh" value="<?= $mb['id'] ?>">
                                </form>
                              </td>
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
        </div>
<?php }} ?>