<style>
  table {
    width: 100%;
    border-collapse: collapse;
  }

  th,
  td {
    padding: 8px;
    text-align: left;
    border-bottom: 1px solid #ddd;
  }

  .form-group {
    margin-bottom: 15px;
  }

  .btn-xs {
    padding: 5px 10px;
    font-size: 12px;
  }

  .form-control-file {
    display: inline-block;
    width: auto;
  }

  @media screen and (max-width: 600px) {
    table {
      font-size: 12px;
    }
  }
</style>
<script language="javascript">
  function simpanevaluasi(id_evaluasi) {
    var Uraian = $('#Uraian' + id_evaluasi).val();
    if (Uraian == "") {
      alert("Uraian Masih Kosong");
      $('#Uraian' + id_evaluasi).focus();
      return false;
    }

    var Solusi = $('#Solusi' + id_evaluasi).val();
    if (Solusi == "") {
      alert("Solusi masih kosong");
      $('#Solusi' + id_evaluasi).focus();
      return false;
    }
    var VerifDosen = "Terverifikasi";
    var form = document.getElementById('bimbinganevaluasi' + id_evaluasi);
    form.action = "simpanevaluasi/" + id_evaluasi;
    form.submit();
  }
</script>
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2 border-bottom">
      <div class="col-sm-6">
        <h1 class="m-0">Bimbingan</h1>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid mt-3">
  <div class="card card-info card-outline">
    <div class="card-header">
      <h5 class="card-title">Daftar Data</h5>
    </div>
    <div class="card-body table-responsive">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Nim</th>
            <th>Email</th>
            <th>Aksi</th>            
          </tr>
        </thead>
        <tbody>
          <?php
          if (empty($user)) {
            echo "<tr>";
            echo "<td colspan='5' class='text-center'>Data Kosong</td>";
            echo "</tr>";
          } else {
            $no = 1;
            foreach ($user as $data) :
          ?>
              <tr>
                <td><?= $no ?></td>
                <td><?= $data->Nama ?></td>
                <td><?= $data->Nim  ?></td>
                <td><?= $data->Email  ?></td>
                <td>
                  <!-- Modal -->
                  <button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#Open<?= $data->id_evaluasi ?>"> Open</button>
                  <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#Reply<?= $data->id_evaluasi ?>">Reply</button>

                  <!-- REPLY -->
                  <div class="modal fade" id="Reply<?= $data->id_evaluasi ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title " id="exampleModalLabel">Bimbingan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <?php $id_evaluasi = $data->id_evaluasi ?>
                          <form id="bimbinganevaluasi<?= $data->id_evaluasi ?>" name="bimbinganevaluasi" method="post">
                            <div class=" form-group">
                              <label for="message-text" class="col-form-label">Uraian:</label>
                              <textarea class="form-control" id="Uraian" <?= $data->id_evaluasi ?> name="Uraian"></textarea>
                            </div>
                            <div class="form-group">
                              <label for="message-text" class="col-form-label">Solusi:</label>
                              <textarea class="form-control" id="Solusi" <?= $data->id_evaluasi ?> name="Solusi"></textarea>
                            </div>
                            <input type="hidden" id="VerifDosen" name="VerifDosen" value="Terverifikasi">
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="button" class="btn btn-success" onclick="simpanevaluasi(<?php echo $id_evaluasi; ?>);">Send</button>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="modal fade" id="Open<?= $data->id_evaluasi  ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title " id="exampleModalLabel">Bimbingan</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                          <form id="nilaibimbingan<?= $data->id_evaluasi  ?>" name="nilaibimbingan" method="post">
                            <table>
                              <tr>
                                <td>
                                  <div class="mb-3">
                                    <label action="" class="form-label">Nim</label>
                                    <input type="text" class="form-control" value="<?php echo $data->Nim ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <label action="" class="form-label">Nama Mahasiswa</label>
                                    <input type="text" class="form-control" value="<?php echo $data->Nama ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <label action="" class="form-label">Handphone</label>
                                    <input type="text" class="form-control" value="<?php echo $data->NoHp ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <label action="" class="form-label">Email</label>
                                    <input type="text" class="form-control" value="<?php echo $data->Email ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <label action="" class="form-label">Alamat</label>
                                    <input type="text" class="form-control" value="<?php echo $data->Alamat ?>" disabled>
                                  </div>
                                </td>
                                <td>
                                  <div class="mb-3">
                                    <label action="" class="form-label">IPK</label>
                                    <input type="text" class="form-control" value="<?php echo $data->IPK ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <label action="" class="form-label">IPS</label>
                                    <input type="text" class="form-control" value="<?php echo $data->IPS ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <label action="" class="form-label">Lainnya</label>
                                    <input type="text" class="form-control" value="<?php echo $data->lainnya ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <label action="" class="form-label">Verifikasi</label>
                                    <input type="text" class="form-control" value="<?php echo $data->VerifMahasiswa ?>" disabled>
                                  </div>
                                  <div class="mb-3">
                                    <label action="" class="form-label">Keluhan</label>
                                    <textarea type="text" class="form-control" disabled><?php echo $data->keluhan ?> </textarea>
                                  </div>
                                </td>
                              </tr>
                            </table>
                          </form>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </td>
            <?php
              $no++;
            endforeach;
          }
            ?>
        </tbody>
      </table>
    </div>
  </div>
</div>