

 
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

                <div class="row">
                    <div class="col-lg-10">
                        <?php if (validation_errors()) : ?>
                            <div class="alert alert-danger" role="alert">
                                <?= validation_errors(); ?>
                            </div>
                            <?php endif; ?>
                            
                    <?= $this->session->flashdata('message'); ?>

                        <a href="" class="btn btn-primary mb-3" data-toggle="modal" data-target="#newSubMenuModal">Add New Sub Menu</a>

                    <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">Title</th>
                                    <th scope="col">Menu</th>
                                    <th scope="col">Url</th>
                                    <th scope="col">Icon</th>
                                    <th scope="col">Active</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach($subMenu as $ssm) : ?>
                                <tr>
                                    <th scope="row"><?= $i; ?></th>
                                    <td><?= $ssm['title']; ?></td>
                                    <td><?= $ssm['menu']; ?></td>
                                    <td><?= $ssm['url']; ?></td>
                                    <td><?= $ssm['icon']; ?></td>
                                    <td><?= $ssm['is_active']; ?></td>
                                    <td>
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
<div class="modal fade" id="newSubMenuModal" tabindex="-1" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="newSubMenuModalLabel">Add New Sub Menu</h5>
        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="<?= base_url('menu/submenu'); ?>" method="post">
      <div class="modal-body">
      <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Sub Menu Title" name="title" id="title">
      </div>
      <div class="input-group mb-3">
            <select name="menu_id" id="menu_id" class="form-control">
                <option value="">Select Menu</option>
                <?php foreach($menu as $m) : ?>
                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                    <?php endforeach; ?>
            </select>
      </div>
      <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Sub Menu Url" name="url" id="url">
      </div>
      <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Sub Menu Icon" name="icon" id="icon">
      </div>
      <div class="input-group mb-3">
            <div class="form-check mb-3">
                <input class="form-check-input mt-0" type="checkbox" value="1" name="is_active" id="is_active" checked >
                <label for="is_active" class="from-check-label">
                    Active?
                </label>
            </div>
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
