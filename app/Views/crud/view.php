<div class="card card-outline card-primary rounded-0">
    <div class="card-header">
        <div class="h4 mb-0">Contact Details</div>
    </div>
    <div class="card-body">
        <div class="container-fluid">
            <dl>
                <dt class="text-muted">Name</dt>
                <dd class="ps-4"><?= isset($data['name']) ? $data['name'] : '' ?></dd>
                <dt class="text-muted">Gender</dt>
                <dd class="ps-4"><?= isset($data['gender']) ? $data['gender'] : '' ?></dd>
                <dt class="text-muted">Contact #</dt>
                <dd class="ps-4"><?= isset($data['contact']) ? $data['contact'] : '' ?></dd>
                <dt class="text-muted">Email</dt>
                <dd class="ps-4"><?= isset($data['email']) ? $data['email'] : '' ?></dd>
                <dt class="text-muted">Address</dt>
                <dd class="ps-4"><?= isset($data['address']) ? $data['address'] : '' ?></dd>
            </dl>
        </div>
    </div>
    <div class="card-footer text-center">
            <a href="<?= base_url('main/edit/'.(isset($data['id']) ? $data['id'] : '')) ?>" class="btn btn btn-primary btn-sm rounded-0"><i class="fa fa-edit"></i> Edit</a>
            <a href="<?= base_url('main/delete/'.(isset($data['id']) ? $data['id'] : '')) ?>" class="btn btn btn-danger btn-sm rounded-0" onclick="if(confirm('Are you sure to delete this contact details?') === false) event.preventDefault()"><i class="fa fa-trash"></i> Delete</a>
            <a href="<?= base_url('main/list') ?>" class="btn btn btn-light bg-gradient-light border btn-sm rounded-0"><i class="fa fa-angle-left"></i> Back to List</a>
    </div>
</div>