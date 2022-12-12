

 
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                </div>
                <!-- /.container-fluid -->
                <div class="container">
                <!-- <form class="row g-3"> -->
                  <?= form_open_multipart('admin'); ?>
                  <div class="col-md-6">
    <label for="email" class="form-label">Email</label>
    <input type="email" class="form-control" name="email" readonly id="email" value="<?= $user['email']; ?>">
  </div>
                <div class="col-md-6">
    <label for="name" class="form-label">Full Name</label>
    <input type="text" class="form-control" name="name" id="name" value="<?= $user['name']; ?>">
    <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
  </div>
  <div class="col-md-6">Picture
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-4">
                    <img src="<?= base_url('assets/img/profile/') . $user['image']; ?>" class="img-thumbnail">
                </div>
                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="image" name="image">
                    <div class="col-sm-7">
                    <label for="image" class="custom-file-label">Choose File</label>
                    </div><br>
                  </div>
            </div>
      </div>
      </div><br><br>  
  <div class="col-6">
    <label for="inputAddress2" class="form-label">Place / Date of Birth</label>
    <input type="date" class="form-control" id="inputAddress2" >
  </div>
  <div class="col-6">
    <label for="inputAddress" class="form-label">Address</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="Jl. Ringroad Selatan, Menayu Lor, Kabupaten Bantul, Daerah Istimewa Yogyakarta">
  </div>
  <div class="col-md-4">
    <label for="inputUniv" class="form-label">Graduate from University</label>
    <select id="inputUniv" class="form-control">
      <option selected>Choose...</option>
      <option>University Gajah Mada Yogyakarta</option>
      <option>University Amikom Yogyakarta</option>
      <option>University Negri Yogyakarta</option>
      <option>University Teknologi Yogyakarta</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputState" class="form-label">Fakultas</label>
    <select id="inputState" class="form-control">
      <option selected>Choose...</option>
      <option>Sains dan Teknologi</option>
      <option>Ilmu Komputer/Informatika</option>
      <option>Ekonomi dan Sosial</option>
    </select>
  </div>

  <div class="col-12"><br>
    <button type="submit" class="btn btn-primary">Edit Profile</button>
  </div>
</form>
                </div>
  </div>

        <!-- TABBED MENU -->
        

                       <!-- End of Main Content -->