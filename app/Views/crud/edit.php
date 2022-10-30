<div class="card card-primary rounded-0">
    <div class="card-header">
        <h4 class="text-muted"><i class="far fa-edit"></i> Edit Contact Details</h4>
    </div>
    <div class="card-body">
        <div class="contianer-fluid">
            <form action="<?= base_url('main/save') ?>" method="POST" id="create-form">
                <input type="hidden" name="id" value="<?= isset($data['id']) ? $data['id'] : '' ?>">
                <div class="mb-3">
                    <label for="" class="control-label">Fullname (first name, middle name, last name)</label>
                    <div class="input-group">
                        <input type="text" autofocus class="form-control form-control-border" id="firstname" name="firstname" value="<?= isset($data['firstname']) ? $data['firstname'] : '' ?>" required="required" placeholder="First Name">
                        <input type="text" class="form-control form-control-border" id="middlename" name="middlename" value="<?= isset($data['middlename']) ? $data['middlename'] : '' ?>" required="false" placeholder="Middle Name (optional)">
                        <input type="text" class="form-control form-control-border" id="lastname" name="lastname" value="<?= isset($data['lastname']) ? $data['lastname'] : '' ?>" required="required" placeholder="Last Name">
                    </div>
                </div>
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="gender" class="control-label">Gender</label>
                    <select name="gender" id="gender" class="form-select form-select-border" required>
                        <option <?= isset($data['gender']) && $data['gender'] == 'Male' ? 'selecte' : '' ?>>Male</option>
                        <option <?= isset($data['gender']) && $data['gender'] == 'Female' ? 'selecte' : '' ?>>Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="contact" class="control-label">Contact #</label>
                            <input type="text" class="form-control" id="contact" name="contact" required="required" value="<?= isset($data['contact']) ? $data['contact'] : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required="required" value="<?= isset($data['email']) ? $data['email'] : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="address" class="control-label">Address</label>
                    <textarea name="address" id="address" cols="30" rows="3" class="form-control" required="required"><?= isset($data['address']) ? $data['address'] : '' ?></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer text-center">
        <button class="btn btn-primary" form="create-form" type="submit"><i class="fa fa-save"></i> Save Details</button>
        <a class="btn btn-secondary" href="<?= base_url('main/view_details/'.(isset($data['id']) ? $data['id'] : '')) ?>"><i class="fa fa-times"></i> Cancel</a>
    </div>
</div>