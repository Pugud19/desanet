<div class="col-md-10 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title text-center">Form Internet</h4>
                  <p class="card-description text-center">
                    Form untuk data internet
                  </p>
                  <form action="controllers/internetController.php" method="post">
                  <div class="form-group row">
                    <div class="col">
                      <label>Paket</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="paket" placeholder="Nama Paket">
                      </div>
                    </div>
                    <div class="col">
                      <label>Kecepatan</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" name="kecepatan" placeholder="Kecepatan Internet">
                      </div>
                    </div>
                  </div>
                  <div class="form-group row">
                    <div class="col">
                      <label>Lama Penggunaan</label>
                      <div id="the-basics">
                        <input class="typeahead" type="text" name="lama_penggunaan" placeholder="Lama penggunaan">
                      </div>
                    </div>
                    <div class="col">
                      <label>Harga</label>
                      <div id="bloodhound">
                        <input class="typeahead" type="text" name="harga" placeholder="Harga">
                      </div>
                    </div>
                  </div>
                  <div class="d-flex justify-content-center">
                  <button type="submit" name="tombol" value="simpan" class="btn btn-primary mr-2">submit</button>
                  </div>
                  </form>
                </div>
              </div>
</div>