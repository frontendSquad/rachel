<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="d-sm-flex d-block justify-content-between mt-4 mb-4" >
        <div class="titleBox my-3">
            <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Question  Discussion Board</h3>
        </div>
        <div class="d-flex justify-content-end">
            <div class="selectBox">
                <p>Amount <span class="theme-primary-text pl-3 fa-20">$00.00</span></p>
                <div class="grapSelect d-flex gap-15 align-items-center flex-wrap flex-lg-nowrap">
                    <p class="mb-0 flex-shrink-0 achivpFont">Session Status:</p>
                    <div class="status d-flex align-items-center">
                        <i class="bi bi-check text-success"></i>
                        <select class="form-select form-select-sm pr-5 border-0 achivpFont" aria-label=".form-select-sm example" data-toggle="modal" data-target="#status">
                            <option selected>Active</option>
                            <option value="1">Inactive</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row shadow p-sm-5 p-3 align-items-center rounded-15 my-3">
        <div class="col-md-3 text-center">
            <figure class="mb-0">
                <img src="../images/circle-icon.png" width="200px" alt="Profile" class="mw-100">
            </figure>
        </div>
        <div class="col-md-9">
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Student Name:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">Abc</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Education Level:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">Abc , Abc ,  Abc</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Date:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">Posted</p>
                </div>
            </div>
        </div>
    </div>

    
    <div class="row shadow p-sm-5 p-3 rounded-15 my-3 mt-5">
        <div class="col-md-9">
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Subject:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary"> Abc Subject</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Level:</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">ABCD Level</p>
                </div>
            </div>
        </div>
    </div>

    
    
    <div class="row shadow p-5 rounded-15 mt-5 mb-5">
        <div class="col-md-8">
            <h4>Question</h4>
            <p class="mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
            <h4 class="mt-4">Documents</h4>
            <div class="d-sm-inline-flex d-block mt-4">
                <img class="ml-4" width="50px" src="./../images/image-svgrepo-com.png">
                <img class="ml-4" width="50px" src="./../images/w.png">
                <img class="ml-4" width="50px" src="./../images/image-svgrepo-com.png">
            </div>
            <div class="d-inline-flex align-items-end">
                <img class="mx-4 " src="./../images/download.png">
                <p class="mb-0">To View Doc Download Them Onto Your Device</p>
            </div>
        </div>
    </div>
</div>


<?php
include('../layout/footer.php');
?>