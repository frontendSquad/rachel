<?php
include('../layout/topBar.php');
?>
<div class="row">
    <div class="col-md-12">
        <div class="dashboardPage py-3">
            <h1 class="achivpFont h3 font-weight-bold">Dashboard</h1>
        </div>
    </div>
</div>
<div class="row shadow p-sm-5 p-2 rounded-15 mb-5">
    <div class="col-xl-4 col-md-8">
        <div class="shadow p-3 rounded-15 mb-3 mb-md-0">
            <h5 class="font-weight-bold achivpFont mb-0">No. Students</h5>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <div class="countNumbers flex-shrink-0">
                    <h3 class="font-weight-bold achivpFont mb-0">33</h3>
                </div>
                <div class="iconBasboard flex-shrink-0">
                    <figure class="mb-0">
                        <img src="../images/students.png" alt="Students" class="mw-100">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-8">
        <div class="shadow p-3 rounded-15 mb-3 mb-md-0">
            <h5 class="font-weight-bold achivpFont mb-0">No. Questions Request</h5>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <div class="countNumbers flex-shrink-0">
                    <h3 class="font-weight-bold achivpFont mb-0">33</h3>
                </div>
                <div class="iconBasboard flex-shrink-0">
                    <figure class="mb-0">
                        <img src="../images/request.png" alt="Request" class="mw-100">
                    </figure>
                </div>
            </div>
        </div>
    </div>
    <div class="col-xl-4 col-md-8">
        <div class="shadow p-3 rounded-15 mb-3 mb-md-0">
            <h5 class="font-weight-bold achivpFont mb-0">No.Teachers</h5>
            <div class="d-flex align-items-center flex-wrap justify-content-between">
                <div class="countNumbers flex-shrink-0">
                    <h3 class="font-weight-bold achivpFont mb-0">33</h3>
                </div>
                <div class="iconBasboard flex-shrink-0">
                    <figure class="mb-0">
                        <img src="../images/teacher.png" alt="Teachers" class="mw-100">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- No. Students Registered -->

<div class="row px-3 px-sm-0 position-relative">
    <div class="col rotateText">
        <h6 class="mb-0 achivpFont">New Shippers Registered</h6>
    </div>
    <div class="col-md-12 shadow p-sm-5 p-3 rounded-15">
        <div class="d-flex align-items-center flex-wrap justify-content-between">
            <div class="graphTitle flex-shrink-0">
                <h6 class="mb-0 achivpFont">No. Students Registered</h6>
            </div>
            <div class="grapSelect flex-shrink-0">
                <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                    <option selected>Month</option>
                    <option value="1">January</option>
                    <option value="2">Febuary</option>
                    <option value="3">March</option>
                </select>
            </div>
        </div>
        <div class="graphBox py-4">
            <canvas id="myChart" width="400" height="200"></canvas>
        </div>
    </div>
    <div class="col-md-12 text-center my-4">
        <p class="py-sm-3 py-0 mb-0">Months</p>
    </div>
</div>

<!-- No. of Requests -->

<div class="row px-3 px-sm-0 position-relative">
    <div class="col rotateText">
        <h6 class="mb-0 achivpFont">New Shippers Registered</h6>
    </div>
    <div class="col-md-12 shadow p-sm-5 p-3 rounded-15">
        <div class="d-flex align-items-center flex-wrap justify-content-between">
            <div class="graphTitle flex-shrink-0">
                <h6 class="mb-0 achivpFont">No. of Requests</h6>
            </div>
            <div class="grapSelect d-flex gap-15 flex-shrink-0 flex-wrap flex-lg-nowrap">
                <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                    <option selected>Type</option>
                    <option value="1">January</option>
                    <option value="2">Febuary</option>
                    <option value="3">March</option>
                </select>
                <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                    <option selected>Month</option>
                    <option value="1">January</option>
                    <option value="2">Febuary</option>
                    <option value="3">March</option>
                </select>
            </div>
        </div>
        <div class="graphBox py-4">
            <canvas id="second" width="400" height="200"></canvas>
        </div>
    </div>
    <div class="col-md-12 text-center my-4">
        <p class="py-sm-3 py-0 mb-0">Months</p>
    </div>
</div>

<!-- No. Students Registered -->

<div class="row px-3 px-sm-0 position-relative">
    <div class="col rotateText">
        <h6 class="mb-0 achivpFont">New Shippers Registered</h6>
    </div>
    <div class="col-md-12 shadow p-sm-5 p-3 rounded-15">
        <div class="d-flex align-items-center flex-wrap justify-content-between">
            <div class="graphTitle flex-shrink-0">
                <h6 class="mb-0 achivpFont">No. Students Registered</h6>
            </div>
            <div class="grapSelect d-flex gap-15 flex-shrink-0 flex-wrap flex-lg-nowrap">
                <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                    <option selected>Type</option>
                    <option value="1">January</option>
                    <option value="2">Febuary</option>
                    <option value="3">March</option>
                </select>
                <select class="form-select form-select-sm pr-5 py-2" aria-label=".form-select-sm example">
                    <option selected>Month</option>
                    <option value="1">January</option>
                    <option value="2">Febuary</option>
                    <option value="3">March</option>
                </select>
            </div>
        </div>
        <div class="graphBox py-4">
            <canvas id="third" width="400" height="200"></canvas>
        </div>
    </div>
    <div class="col-md-12 text-center my-4">
        <p class="py-sm-3 py-0 mb-0">Months</p>
    </div>
</div>
<script>
    const ctx = document.getElementById('myChart').getContext('2d');
    const myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [1, 3, 2, 3, 2, 3, 1, 3, 2, 3, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ]
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // second chart

    const abc = document.getElementById('second').getContext('2d');
    const myCharts = new Chart(abc, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [1, 3, 2, 3, 2, 3, 1, 3, 2, 3, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ]
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    // second chart

    const def = document.getElementById('third').getContext('2d');
    const thirdChart = new Chart(def, {
        type: 'bar',
        data: {
            labels: ['Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange', 'Red', 'Blue', 'Yellow', 'Green', 'Purple', 'Orange'],
            datasets: [{
                label: '# of Votes',
                data: [1, 3, 2, 3, 2, 3, 1, 3, 2, 3, 2, 3],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ]
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
<?php
include('../layout/footer.php');
?>