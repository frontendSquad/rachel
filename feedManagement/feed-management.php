<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="titleBox my-5">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Feed Management</h3>
    </div>
    <div class="row shadow p-5 rounded-15 my-3">
        <!-- <h4 class="font-weight-300">Filters</h4> -->
        <div class="col-md-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Select Subjects</option>
                <option value="1">Math</option>
                <option value="2">Science</option>
                <option value="3">French</option>
                <option value="4">Urdu</option>
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Level</option>
                <option value="1">Option 01</option>
                <option value="2">Option 02</option>
                <option value="3">Option 03</option>
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Select Type</option>
                <option value="1">Teachers</option>
                <option value="2">In Active</option>
                <option value="3">Questions</option>
            </select>
        </div>
        <div class="col-md-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Sort By Status</option>
                <option value="1">Answered</option>
                <option value="3">Unclaimed</option>
            </select>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-15 mt-5">
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-bs-toggle="button" aria-pressed="true">Filter</a></p>
            <p><a class="btn bg-theme-primary-outline text-white px-4" aria-disabled="true" role="button" data-bs-toggle="button">Reset</a></p>
        </div>
    </div>

    <!-- sessiom -->
    <div class="titleBox my-5">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Recent Posted Questions</h3>
    </div>
    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Teacher : </p>
                            <p class="achivpFont mb-2">Level:</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">abcd</p>
                            <p class="achivpFont mb-2">Secondary</p>
                        </div>
                    </div>
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Date : </p>
                            <p class="achivpFont mb-2">Time :</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="badgeRight">
                <span class="text-white">Claimed</span>
            </div>
            <p>Amount: <span class="theme-primary-text">$00.00</span></p>
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Details</a></p>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Teacher : </p>
                            <p class="achivpFont mb-2">Level:</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">abcd</p>
                            <p class="achivpFont mb-2">Secondary</p>
                        </div>
                    </div>
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Date : </p>
                            <p class="achivpFont mb-2">Time :</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="badgeRight bg-black">
                <span class="text-white">Unclaimed</span>
            </div>
            <p>Amount: <span class="theme-primary-text">$00.00</span></p>
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Details</a></p>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Teacher : </p>
                            <p class="achivpFont mb-2">Level:</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">abcd</p>
                            <p class="achivpFont mb-2">Secondary</p>
                        </div>
                    </div>
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Date : </p>
                            <p class="achivpFont mb-2">Time :</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="badgeRight">
                <span class="text-white">Claimed</span>
            </div>
            <p>Amount: <span class="theme-primary-text">$00.00</span></p>
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Details</a></p>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Teacher : </p>
                            <p class="achivpFont mb-2">Level:</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">abcd</p>
                            <p class="achivpFont mb-2">Secondary</p>
                        </div>
                    </div>
                    <div class="d-flex flex-grow-1 flex-wrap">
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">Date : </p>
                            <p class="achivpFont mb-2">Time :</p>
                        </div>
                        <div class="flex-grow-1 flex-wrap">
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                            <p class="achivpFont mb-2">mm/dd/yyyy</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2">
            <div class="badgeRight bg-black">
                <span class="text-white">Unclaimed</span>
            </div>
            <p>Amount: <span class="theme-primary-text">$00.00</span></p>
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Details</a></p>
        </div>
    </div>
    <div class="viewAllBtn">
        <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View All</a></p>
    </div>
</div>

<!-- Active -->
<div class="modal fade" id="status" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content text-center p-4">
            <div class="modal-header border-0 p-0">
                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <figure>
                    <img src="../images/question.png" alt="Icon">
                </figure>
                <p class="achivpFont">Are you sure you want to mark the user
                    as Inactive/ Active ?</p>
            </div>
            <div class="modal-footers text-center py-3">
                <button type="button" class="px-5 btn bg-theme-primary text-white" data-dismiss="modal" data-toggle="modal" data-target="#approved">Yes</button>
                <button type="button" class="px-5 btn bg-theme-primary-outline text-white" data-dismiss="modal">No</button>
            </div>
        </div>
    </div>
</div>

<!-- confirmaition -->

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
                <p class="achivpFont">User Marked Inactive / Inactive</p>
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