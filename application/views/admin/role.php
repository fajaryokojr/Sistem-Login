

 
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                <div class="row">
                    <div class="col-lg-6">
                    <?= form_error('menu', '<div class="alert alert-danger" role="alert">','</div>');  ?>

                    <?= $this->session->flashdata('message'); ?>

                        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newRoleModal">Add New Role</a>

                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Role</th>
                                    <th scope="col">Action</th>

                                </tr>
                            </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($role as $r) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $r['role']; ?></td>
                                    <td>
                                        <a href="<?= base_url('admin/roleaccess/') . $r['id']; ?>" class="badge badge-warning">Access</a>
                                        <a href="" class="badge badge-success">Edit</a> |
                                        <a href="" class="badge badge-danger">Delete</a>
                                    </td>
                                </tr>
                            <?php $i++; ?>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
                
                <!-- /.container-fluid -->

            
            <!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="newRoleModel" tabindex="-1" aria-labelledby="newRoleModelLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newRoleModelLabel">Add New Role</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('admin/role'); ?>" method="post">
      <div class="modal-body">
      <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Role Name" name="role" id="role">
       </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add</button>
      </div>
      </form>
    </div>
  </div>
</div>
