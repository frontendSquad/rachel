<?php
include('../layout/topBar.php');
?>
<div class="notification-section p-3">
    <div class="titleBox my-3 d-flex justify-content-between align-items-center">
        <h3 class="mt-4 achivpFont mb-0 font-weight-bold">Contact Us Forms</h3>
    </div>
</div>

<!-- tablesection -->

<div class="notification-section shadow p-sm-5 p-3 rounded-15 my-4">
    <div class="row justify-content-between">
        <div class="col-md-4 mt-sm-0 mt-3">
            <div class="selectBox">
                <div class="grapSelect d-flex gap-15 align-items-center flex-wrap flex-lg-nowrap">
                    <p class="mb-0 flex-shrink-0">Sort By Date:</p>
                    <input class="form-control" type="date">
                    <p class="mb-0">-</p>
                    <input class="form-control mt-sm-0 mt-3" type="date">
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-sm-0 mt-3">
            <div class="selectBox d-flex gap-15 align-items-center flex-wrap flex-lg-nowrap">
                <p class="mb-0 flex-shrink-0">User Type:</p>
                <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                    <option selected>User Type:</option>
                    <option value="1">Teacher</option>
                    <option value="2">Student</option>
                </select>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 pt-5 table-responsive">
            <table class="table text-center">
                <thead>
                    <tr>
                        <th class="table-site-headings">S.No.</th>
                        <th class="table-site-headings">Name</th>
                        <th class="table-site-headings">Date</th>
                        <th class="table-site-headings">Type</th>
                        <th class="table-site-headings">Status</th>
                        <th class="table-site-headings">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>01</td>
                        <td>Abcd</td>
                        <td>02/08/22</td>
                        <td>Teacher</td>
                        <td> <span class="primary-status status-active">Active</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="contact-management-details.php"><i class="bi bi-eye table-eye pr-2"></i>View</a>
                                    <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Abcd</td>
                        <td>02/08/22</td>
                        <td>Teacher</td>
                        <td> <span class="primary-status status-active">Active</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="contact-management-details.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Abcd</td>
                        <td>02/08/22</td>
                        <td>Teacher</td>
                        <td> <span class="primary-status status-inactive">Inactive</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="contact-management-details.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Abcd</td>
                        <td>02/08/22</td>
                        <td>Teacher</td>
                        <td> <span class="primary-status status-inactive">Inactive</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"> <i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="contact-management-details.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>01</td>
                        <td>Abcd</td>
                        <td>02/08/22</td>
                        <td>Teacher</td>
                        <td> <span class="primary-status status-active">Active</span></td>
                        <td>
                            <div class="btn-group ml-1">
                                <button type="button" class="btn border-color outline-0" data-toggle="dropdown" aria-expanded="false"><i class="bi bi-three-dots-vertical"></i> </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item mb-1" href="contact-management-details.php"><i class="bi bi-eye table-eye pr-2 "></i>View</a>
                                    <a class="dropdown-item mb-1"><i class="bi bi-x-circle pr-2"></i>In-Active</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="d-flex justify-content-between flex-wrap align-items-center">
            <p class="mb-0">Showing 10 of 50 Entries</p>
            <div class="viewAll d-flex justify-content-end flex-wrap py-3">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center mb-0">
                        <li class="page-item">
                            <a class="page-link">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>

<?php
include('../layout/footer.php');
?>