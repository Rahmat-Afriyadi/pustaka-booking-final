<!-- Begin Page Content -->
<div class="container-fluid">

  <?= $this->session->flashdata('pesan'); ?>
  <div class="row">
    <div class="col-lg-12">
      <?php if (validation_errors()) { ?>
        <div class="alert alert-danger" role="alert">
          <?= validation_errors(); ?>
        </div>
      <?php } ?>
      <?= $this->session->flashdata('pesan'); ?>
      <a href="<?= base_url('laporan/cetak_laporan_anggota'); ?>" class="btn btn-primary mb-3"><i class="fas fa-print"></i> </a>
      <a href="<?= base_url('laporan/laporan_anggota_pdf'); ?>" class="btn btn-warning mb-3"><i class="far fa-file-pdf"></i> </a>
      <a href="<?= base_url('laporan/export_excel_anggota'); ?>" class="btn btn-success mb-3"><i class="far fa-file-excel"></i> </a>
      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Email</th>
            <th scope="col" nowrap>Member Sejak</th>
            <th scope="col">Image</th>
          </tr>
        </thead>
        <tbody>
          <?php
          $i = 1;
          foreach ($anggota as $a) { ?>
            <tr>
              <th scope="row"><?= $i++; ?></th>
              <td><?= $a['nama']; ?></td>
              <td><?= $a['email']; ?></td>
              <td><?= date('d F Y', $a['tanggal_input']); ?></td>
              <td>
                <picture>
                  <source srcset="" type="image/svg+xml">
                  <img src="<?= base_url('assets/img/profile/') . $a['image']; ?>" class="img-fluid img-thumbnail" alt="..." style="width:60px;height:80px;">
                </picture>
              </td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->