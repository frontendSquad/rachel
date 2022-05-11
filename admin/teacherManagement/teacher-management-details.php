<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="titleBox my-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Student Management</h3>
    </div>
    <div class="d-flex justify-content-end">
        <div class="selectBox">
            <div class="grapSelect d-flex gap-15 align-items-center flex-wrap flex-lg-nowrap">
                <p class="mb-0 flex-shrink-0 achivpFont">Profile Status:</p>
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
    <div class="row shadow p-sm-5 p-3 rounded-15 my-3">
        <div class="col-md-3 text-center">
            <figure class="mb-0">
                <img src="../images/circle-icon.png" alt="Profile" class="mw-100">
            </figure>
        </div>
        <div class="col-md-9">
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Full Name</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">Name Here</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Email</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">abc@example.com</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Phone Number</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">0000-000-0000000</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Age</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">18 yrs</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Education Level</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">abc</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Price/Session hr</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">abc</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">About Teacher</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                        Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus
                        accumsan et viverra justo commodo. Proin sodales pulvinar tempor.
                        Cum sociis natoque penatibus et magnis dis parturient montes,</p>
                </div>
            </div>
            <div class="d-flex flex-wrap">
                <div class="col-md-6">
                    <p class="text-secondary">Password</p>
                </div>
                <div class="col-md-6">
                    <p class="text-secondary">************** <a href="#" class="pl-2">Change Password</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- subject -->
    <div class="titleBox my-5">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Qualifications</h3>
    </div>
    <div class="row shadow p-sm-5 p-3 rounded-15 my-3">
        <div class="col-md-4">
            <div class="qualificationContent">
                <div class="qualificationTitle mb-4">
                    <h5 class="achivpFont mb-0">Education</h5>
                </div>
                <div class="intituteInfo mb-4">
                    <p class="achivpFont mb-1">Last Educational Institute:</p>
                    <p class="achivpFont mb-1">Abcd Institute</p>
                </div>
                <div class="intituteInfo mb-4">
                    <p class="achivpFont mb-1">Name Of Degree:</p>
                    <p class="achivpFont mb-1">Abcd Institute</p>
                </div>
                <div class="intituteInfo mb-4">
                    <p class="achivpFont mb-1">Duration Of Degree:</p>
                    <p class="achivpFont mb-1">mm/dd/yyyy - mm/dd/yyyy</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="qualificationContent">
                <div class="qualificationTitle mb-4">
                    <h5 class="achivpFont mb-0">Education</h5>
                </div>
                <div class="intituteInfo mb-4">
                    <p class="achivpFont mb-1">Last Educational Institute:</p>
                    <p class="achivpFont mb-1">Abcd Institute</p>
                </div>
                <div class="intituteInfo mb-4">
                    <p class="achivpFont mb-1">Name Of Degree:</p>
                    <p class="achivpFont mb-1">Abcd Institute</p>
                </div>
                <div class="intituteInfo mb-4">
                    <p class="achivpFont mb-1">Duration Of Degree:</p>
                    <p class="achivpFont mb-1">mm/dd/yyyy - mm/dd/yyyy</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="qualificationContent">
                <div class="qualificationTitle mb-4">
                    <h5 class="achivpFont mb-0">Education</h5>
                </div>
                <div class="intituteInfo mb-4">
                    <p class="achivpFont mb-1">Last Educational Institute:</p>
                    <p class="achivpFont mb-1">Abcd Institute</p>
                </div>
                <div class="intituteInfo mb-4">
                    <p class="achivpFont mb-1">Name Of Degree:</p>
                    <p class="achivpFont mb-1">Abcd Institute</p>
                </div>
                <div class="intituteInfo mb-4">
                    <p class="achivpFont mb-1">Duration Of Degree:</p>
                    <p class="achivpFont mb-1">mm/dd/yyyy - mm/dd/yyyy</p>
                </div>
            </div>
        </div>
    </div>

    <!-- post -->

    <div class="titleBox my-sm-5 my-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Recent Posts</h3>
    </div>
    <div class="row shadow p-sm-5 p-3 rounded-15 my-3">
        <!-- <h4 class="font-weight-300">Filters</h4> -->
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Select Subjects</option>
                <option value="1">Math</option>
                <option value="2">Science</option>
                <option value="3">French</option>
                <option value="4">Urdu</option>
            </select>
        </div>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Level</option>
                <option value="1">Option 01</option>
                <option value="2">Option 02</option>
                <option value="3">Option 03</option>
            </select>
        </div>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Select Type</option>
                <option value="1">Teachers</option>
                <option value="2">In Active</option>
                <option value="3">Questions</option>
            </select>
        </div>
        <div class="col-xl-3 col-md-6 mb-xl-0 mb-3">
            <select class="form-select form-select-sm pr-5 py-2 h-100" aria-label=".form-select-sm example">
                <option selected>Sort By Status</option>
                <option value="1">Answered</option>
                <option value="3">Unclaimed</option>
            </select>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-15 mt-5">
            <p class="mb-0"><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-bs-toggle="button" aria-pressed="true">Filter</a></p>
            <p class="mb-0"><a class="btn bg-theme-primary-outline text-white px-4" aria-disabled="true" role="button" data-bs-toggle="button">Reset</a></p>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-sm-flex d-block justify-content-between align-items-center flex-wrap">
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
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Profile</a></p>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-sm-flex d-block justify-content-between align-items-center flex-wrap">
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
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Profile</a></p>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-sm-flex d-block justify-content-between align-items-center flex-wrap">
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
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Profile</a></p>
        </div>
    </div>

    <!-- sessiom -->

    <div class="row shadow py-5 rounded-15 my-5 justify-content-between align-items-end postion-relative">
        <div class="col-md-7">
            <div class="contentBox pl-md-4">
                <h3 class="h4 font-weight-light">Question:</h3>
                <p class="achivpFont">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida ??</p>
                <div class="d-sm-flex d-block justify-content-between align-items-center flex-wrap">
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
            <p><a href="#" class="btn bg-theme-primary text-white px-4" role="button" data-toggle="button" aria-pressed="true">View Profile</a></p>
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