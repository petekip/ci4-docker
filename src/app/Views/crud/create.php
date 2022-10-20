<div class="card card-primary rounded-0">
    <div class="card-header">
        <h4 class="text-muted"><i class="far fa-plus-square"></i> Add New Contact Details</h4>
    </div>
    <div class="card-body">
        <div class="contianer-fluid">
            <form action="<?= base_url('main/save') ?>" method="POST" id="create-form">
                <input type="hidden" name="id">
                
                <div class="mb-3">
                    <label for="" class="control-label">Fullname (first name, middle name, last name)</label>
                    <div class="input-group">
                        <input type="text" autofocus class="form-control form-control-border" id="firstname" name="firstname" value="<?= !empty($request->getPost('firstname')) ? $request->getPost('firstname') : '' ?>" required="required" placeholder="First Name">
                        <input type="text" class="form-control form-control-border" id="middlename" name="middlename" value="<?= !empty($request->getPost('middlename')) ? $request->getPost('middlename') : '' ?>" required="false" placeholder="Middle Name (optional)">
                        <input type="text" class="form-control form-control-border" id="lastname" name="lastname" value="<?= !empty($request->getPost('lastname')) ? $request->getPost('lastname') : '' ?>" required="required" placeholder="Last Name">
                    </div>
                </div>
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="gender" class="control-label">Gender</label>
                    <select name="gender" id="gender" class="form-select form-select-border" required>
                        <option <?= !empty($request->getPost('gender')) && $request->getPost('gender') == 'Male' ? 'selecte' : '' ?>>Male</option>
                        <option <?= !empty($request->getPost('gender')) && $request->getPost('gender') == 'Female' ? 'selecte' : '' ?>>Female</option>
                    </select>
                </div>
                <div class="mb-3">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="contact" class="control-label">Contact #</label>
                            <input type="text" class="form-control" id="contact" name="contact" required="required" value="<?= !empty($request->getPost('contact')) ? $request->getPost('contact') : '' ?>">
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                            <label for="email" class="control-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" required="required" value="<?= !empty($request->getPost('email')) ? $request->getPost('email') : '' ?>">
                        </div>
                    </div>
                </div>
                <div class="mb-3 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <label for="address" class="control-label">Address</label>
                    <textarea name="address" id="address" cols="30" rows="3" class="form-control" required="required"><?= !empty($request->getPost('address')) ? $request->getPost('address') : '' ?></textarea>
                </div>
            </form>
        </div>
    </div>
    <div class="card-footer text-center">
        <button class="btn btn-primary" form="create-form" type="submit"><i class="fa fa-save"></i> Save Details</button>
        <button class="btn btn-secondary" form="create-form" type="reset"><i class="fa fa-times"></i> Reset</button>
    </div>
</div>