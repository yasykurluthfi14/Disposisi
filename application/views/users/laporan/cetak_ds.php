<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cetak Surat Keluar</title>
    <base href="<?php echo base_url();?>"/>
  </head>
  <body onload="window.print()">

    <table border="0" width="100%">
      <tr>
        <td width="120">
          <img src="foto/logo1.png" alt="logo1" width="120">
        </td>
        <td align="center">
          <h1>Aplikasi Surat Menyurat</h1>
        </td>
        <td width="120">
          <img src="foto/logo2.png" alt="logo2" width="120">
        </td>
      </tr>
    </table>

    <hr>

    <h2 align="center">Laporan Disposisi</h2>
    <br>
    <table border="1"width="100%">
    <tr>
                <th>Nomor</th>
                <th>No Surat</th>
                <th>No Agenda</th>
                <th>Sifat</th>
                <th>Tanggal</th>
                <th>Hal</th>
            </tr>
          </thead>
          <tbody>
              <?php
              $no = 1;
              foreach ($sql->result() as $baris) {
              ?>
                <tr>
                <td><?php echo $no++;  ?></td>
                    <td><?= $baris->nomor_surat ?></td>
                    <td><?= $baris->nomor_agenda ?></td>
                    <td><?= $baris->sifat ?></td>
                    <td><?= $baris->tanggal ?></td>
                    <td><?= $baris->hal ?></td>
                </tr>
              <?php
              $no++;
              } ?>
          </tbody>
    </table>

  </body>
</html>
