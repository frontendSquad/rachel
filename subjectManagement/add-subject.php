<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="titleBox my-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Subjects  Management - Create Subject</h3>
    </div>
    <div class="row shadow p-5 rounded-15 my-4">
        <div class="col-md-8">
            <div class="d-flex flex-wrap align-items-center my-3">
                <div class="col-md-6">
                    <p class="text-secondary mb-0">Subject Name</p>
                </div>
                <div class="col-md-6">
                    <input type="text" name="name" value="abc" class="form-control text-secondary mb-0">
                </div>
            </div>
            <div class="d-flex flex-wrap align-items-center my-3">
                <div class="col-md-6">
                    <p class="text-secondary mb-0">Subject Level</p>
                </div>
                <div class="col-md-6">
                    <select name="" id="" class="form-control text-secondary mb-0">
                        <option value="" selected>Select a Level</option>
                        <option value="1">Abc</option>
                        <option value="1">Abc</option>
                        <option value="1">Abc</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-right">
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-bs-toggle="button" aria-pressed="true" data-toggle="modal" data-target="#approved">Create Subject</a></p>
        </div>
    </div>
    <div class="titleBox my-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Subject Variations</h3>
    </div>
    <div class="row shadow p-5 rounded-15 my-4">
        <div class="col-md-8">
            <div class="d-flex flex-wrap align-items-center my-3">
                <div class="col-md-6">
                    <p class="text-secondary mb-0">Subject Level</p>
                </div>
                <div class="col-md-6">
                    <select name="" id="" class="form-control text-secondary mb-0">
                        <option value="" selected>Select a Level</option>
                        <option value="1">Abc</option>
                        <option value="1">Abc</option>
                        <option value="1">Abc</option>
                    </select>
                </div>
            </div>
            <div class="d-flex flex-wrap align-items-center my-3">
                <div class="col-md-6">
                    <p class="text-secondary mb-0">Status</p>
                </div>
                <div class="col-md-6">
                    <select name="" id="" class="form-control text-secondary mb-0">
                        <option value="" selected>Select a Status</option>
                        <option value="1">Active</option>
                        <option value="1">Inacive</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-right">
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-bs-toggle="button" aria-pressed="true">Add Another Level</a></p>
        </div>
    </div>
</div>

<div class="modal fade" id="approved" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="../images/check.png" alt="Icon">
                </figure>
                <p class="achivpFont">Subject added to the listings</p>
            </div>
            <div class="modal-footers text-center py-3">
                <button type="button" class="px-5 btn bg-theme-primary text-white" data-dismiss="modal">Okay</button>
            </div>
        </div>
    </div>
</div>



<?php
include('../layout/footer.php');
?>