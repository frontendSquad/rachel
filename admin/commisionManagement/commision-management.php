<?php
include('../layout/topBar.php');
?>
<div class="comission-section p-3">
    <div class="titleBox my-3">
        <h3 class="mb-0 achivpFont mb-0 font-weight-bold">Commsion Management</h3>
    </div>
    <div class="contentTabs">
        <ul class="nav nav-pills mb-3 d-flex text-center pt-3" id="pills-tab" role="tablist">
            <li class="nav-item flex-grow-1 shadow">
                <a class="nav-link active" id="pills-question-tab" data-toggle="pill" href="#pills-question" role="tab" aria-controls="pills-question" aria-selected="true">Questions</a>
            </li>
            <li class="nav-item flex-grow-1 shadow">
                <a class="nav-link" id="pills-session-tab" data-toggle="pill" href="#pills-session" role="tab" aria-controls="pills-session" aria-selected="false">Sessions</a>
            </li>
        </ul>
        <div class="row shadow p-5 rounded-15">
            <div class="col-md-12">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-question" role="tabpanel" aria-labelledby="pills-question-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex flex-wrap">
                                    <p class="flex-grow-1 achivpFont">Price Per Qustion:</p>
                                    <p class="achivpFont">$ 05</p>
                                </div>
                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="flex-grow-1 achivpFont mb-2">Admin Commission On questions:</p>
                                    <p class="achivpFont mb-2"><input type="text" name="" id="edit" value="$ 05" class="form-control text-right disabled border-0 px-0"></p>
                                </div>
                                <div class="d-flex pt-3 flex-wrap">
                                    <p class="mb-2"><a href="#" class="btn bg-theme-primary text-white px-5 py-2 edit" role="button" data-bs-toggle="button" aria-pressed="true">Edit</a></p>
                                    <p class="mb-2"><a href="#" style="display: none;" class="btn bg-theme-primary text-white px-5 py-2 update" role="button" data-bs-toggle="button" aria-pressed="true">Update</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="pills-session" role="tabpanel" aria-labelledby="pills-session-tab">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="d-flex flex-wrap">
                                    <p class="flex-grow-1 achivpFont">Price Per Qustion:</p>
                                    <p class="achivpFont">$ 05</p>
                                </div>
                                <div class="d-flex flex-wrap align-items-center">
                                    <p class="flex-grow-1 achivpFont mb-2">Admin Commission On questions:</p>
                                    <p class="achivpFont mb-2"><input type="text" name="" id="edits" value="$ 05" class="form-control text-right disabled border-0 px-0"></p>
                                </div>
                                <div class="d-flex pt-3 flex-wrap">
                                    <p class="mb-2"><a href="#" class="btn bg-theme-primary text-white px-5 py-2 edit" role="button" data-bs-toggle="button" aria-pressed="true">Edit</a></p>
                                    <p class="mb-2"><a href="#" style="display: none;" class="btn bg-theme-primary text-white px-5 py-2 update" role="button" data-bs-toggle="button" aria-pressed="true">Update</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
include('../layout/footer.php');
?>