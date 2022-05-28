<div class="tab-content content-wrapper" id="setting-content">
          <div class="tab-pane fade show active scroll-wrapper" id="todo-section" role="tabpanel" aria-labelledby="todo-section">
            <div class="add-items d-flex px-3 mb-0">
              <form class="form w-100">
                <div class="form-group d-flex">
                  <input type="text" class="form-control todo-list-input" placeholder="Add To-do">
                  <a href="index.php?hal=form_todo" type="submit" class="btn btn-primary mr-2">Add</a>
                </div>
              </form>
            </div>
            <div class="list-wrapper px-3">
              <ul class="d-flex flex-column-reverse todo-list">
              <?php 
                        // ciptakan objek dari class Todo List
                        $obj = new TodoList();
                        // panggil fungsi menampilkan
                        $data = $obj->getJadwal();
                        // looping data Internet
                        foreach($data as $tl){
                        
                    ?>
                <li>
                  <div class="form-check">
                    <label class="form-check-label">    
                      <input class="checkbox" type="checkbox">
                      <?= $tl['text'] ?>
                    </label>
                  </div>
                  <form action="controllers/todoController.php" method="post">
                  <button type="submit" name="tombol" value="hapus" class="btn btn-danger mx-2"><i class="fa fa-trash"></i></button>
                  <input type="hidden" name="idh" value="<?= $tl['id'] ?>">
                  </form>
                </li>
                <?php } ?>
              </ul>
            </div>
            <h4 class="px-3 text-muted mt-5 font-weight-light mb-0">Events</h4>
            <div class="events pt-4 px-3 mb-4">
            <?php 
                        // ciptakan objek dari class Todo List
                        $obj = new TodoList();
                        // panggil fungsi menampilkan
                        $data = $obj->getJadwal();
                        // looping data Internet
                        foreach($data as $tl){
                        
                    ?>
              <div class="wrapper d-flex mb-2">
                <i class="ti-control-record text-primary mr-2"></i>
                <span><?= $tl['tanggal'] ?></span>
              </div>
              <p class="mb-0 font-weight-thin text-gray my-2"><?= $tl['text'] ?></p>
            <?php } ?>
            </div>
          </div>
          <!-- To do section tab ends -->

        </div>