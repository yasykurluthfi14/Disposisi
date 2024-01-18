
    <div class="container">
        <h2>Edit Disposisi</h2>

        <form method="POST" action="<?php echo base_url('users/editdisposisi/' . $disposisi['id_disposisi']); ?>">
            <label for="nomor_surat">No Surat</label>
            <input type="text" name="nomor_surat" class="form-control" value="<?php echo $disposisi['nomor_surat']; ?>" required>

            <label for="nomor_agenda">No Agenda</label>
            <input type="text" name="nomor_agenda" class="form-control" value="<?php echo $disposisi['nomor_agenda']; ?>" required>

            <label for="sifat">Sifat</label>
            <textarea name="sifat" class="form-control" required><?php echo $disposisi['sifat']; ?></textarea>

            <label for="tanggal">Tanggal</label>
            <input type="date" name="tanggal" class="form-control" required value="<?php echo $disposisi['tanggal']; ?>">

            <label for="bagian">Bagian</label>
            <select class="form-control cari_bagian" name="bagian" id="bagian" required>
                              <option value=""></option>
                              <?php
                              $this->db->order_by('nama_bagian', 'ASC');
                                    foreach ($this->db->get('tbl_bagian')->result() as $baris): ?>
                                        <option value="<?php echo $baris->nama_bagian; ?>"><?php echo $baris->nama_bagian; ?></option>
                              <?php endforeach; ?>
                            </select>

            <label for="hal">Hal</label>
            <textarea name="hal" class="form-control" required><?php echo $disposisi['hal']; ?></textarea>

            <label for="file">File</label>
            <input type="file" name="file" class="form-control" required value="<?php echo $disposisi['file']; ?>">

            <button type="submit" class="btn btn-primary mt-2">Update</button>
        </form>

    </div>
