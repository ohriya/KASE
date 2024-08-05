<?php include 'components/header.php'; ?>

<section class="sticky-tabs box-shadow-lg">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-pills nav-pills-custom" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="share-tab" data-bs-toggle="tab" data-bs-target="#share-tab-pane" type="button" role="tab" aria-controls="share-tab-pane" aria-selected="true"> <span class="icon-box"> <i class="fa-solid fa-arrow-trend-up"></i> </span>Share</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="wt-tab" data-bs-toggle="tab" data-bs-target="#wt-tab-pane" type="button" role="tab" aria-controls="wt-tab-pane" aria-selected="false"><span class="icon-box"><i class="fa-solid fa-scale-balanced"></i></span>WT.AVG </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="bonus-tab" data-bs-toggle="tab" data-bs-target="#bonus-tab-pane" type="button" role="tab" aria-controls="bonus-tab-pane" aria-selected="false"><span class="icon-box"><i class="fa-solid fa-money-bill-trend-up"></i></span>Bonus ADj.</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="right-tab" data-bs-toggle="tab" data-bs-target="#right-tab-pane" type="button" role="tab" aria-controls="right-tab-pane" aria-selected="false"><span class="icon-box"><i class="fa-solid fa-arrow-right-arrow-left"></i></span>Right ADj.</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="dividend-tab" data-bs-toggle="tab" data-bs-target="#dividend-tab-pane" type="button" role="tab" aria-controls="dividend-tab-pane" aria-selected="false"><span class="icon-box"><i class="fa-solid fa-chart-pie"></i></span>Dividend</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="carg-tab" data-bs-toggle="tab" data-bs-target="#carg-tab-pane" type="button" role="tab" aria-controls="carg-tab-pane" aria-selected="false"><span class="icon-box"><i class="fa-solid fa-percent"></i></span>CARG</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="emi-tab" data-bs-toggle="tab" data-bs-target="#emi-tab-pane" type="button" role="tab" aria-controls="emi-tab-pane" aria-selected="false"><span class="icon-box"><i class="fa-solid fa-divide"></i></span>EMI</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="slip-tab" data-bs-toggle="tab" data-bs-target="#slip-tab-pane" type="button" role="tab" aria-controls="slip-tab-pane" aria-selected="false"><span class="icon-box"><i class="fa-solid fa-file-invoice-dollar"></i></span>Slip</button>
                    </li>

                </ul>
            </div>
        </div>
    </div>
</section>

<section class="main-sm bg-grey">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="calculator-wrapper">

                    <div class="tab-content" id="myTabContent">
                        <!-- Share -->
                        <div class="tab-pane fade show active" id="share-tab-pane" role="tabpanel" aria-labelledby="share-tab" tabindex="0">

                            <h3> Stock Results </h3>
                            <div class="card reset-card list-card box-shadow-lg p-3">
                                <a href="" class="divLink"> company </a>
                                <div class="row px-2">

                                    <div class="col-md-12 col-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 text-muted text-xs">Share Type</p>
                                                <p class="fmb-2 text-num">IPO</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Quantity </p>
                                                <p class="fmb-2 text-num">20</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Rate </p>
                                                <p class="fmb-2 text-num">1000</p>
                                            </div>
                                            <div class="FixedDeposit_indProtectCol__1-ChA col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 fs-11 text-muted text-xs">Total </p>
                                                <p class="d-flex fw-500 mb-2 align-items-center">
                                                    Rs.2000
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card box-shadow border-0 p-3 mb-4">
                                <h3> Share Calculator </h3>

                                <form action="" class="brand-form mt-4">
                                    <div class="row mb-3">
                                        <label for="colFormLabel" class="col-sm-5 col-form-label">Transaction Type </label>
                                        <div class="col-sm-5">
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">Buy</option>
                                                <option value="2">Sell</option>

                                            </select>
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="colFormLabel" class="col-sm-5 col-form-label"> Share Quantity </label>
                                        <div class="col-sm-5">
                                            <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row mb-3">
                                            <label for="colFormLabel" class="col-sm-5 col-form-label"> Purchase Price (Rs.) </label>
                                            <div class="col-sm-5">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <a href="" class="btn btn-brand-primary me-3"> Calculate </a>
                                            <a href="" class="btn btn-secondary"> Clear </a>
                                        </div>
                                    </div>

                                </form>

                            </div>




                        </div>

                        <!-- Weighted Average -->

                        <div class="tab-pane fade" id="wt-tab-pane" role="tabpanel" aria-labelledby="wt-tab" tabindex="0">
                            <h3> Stock Results </h3>
                            <div class="card reset-card list-card box-shadow-lg p-3">
                                <a href="" class="divLink"> company </a>
                                <div class="row px-2">

                                    <div class="col-md-12 col-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 text-muted text-xs">Share Type</p>
                                                <p class="fmb-2 text-num">IPO</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Quantity </p>
                                                <p class="fmb-2 text-num">20</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Rate </p>
                                                <p class="fmb-2 text-num">1000</p>
                                            </div>
                                            <div class="FixedDeposit_indProtectCol__1-ChA col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 fs-11 text-muted text-xs">Total </p>
                                                <p class="d-flex fw-500 mb-2 align-items-center">
                                                    Rs.2000
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card box-shadow border-0 p-3 mb-4">
                                <h3> Weighted Average Calculator </h3>

                                <form action="" class="brand-form mt-4">
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-sm-5 col-form-label"> Select Face Value </label>

                                            <select class="form-select" aria-label="Default select example">

                                                <option value="10">10</option>
                                                <option value="20">20</option>

                                            </select>
                                        </div>

                                    </div>

                                    <h3> Detail</h3>


                                    <div class="row g-3">
                                        <div class="col-md-4">
                                            <label for="colFormLabel" class="col-sm-5 col-form-label"> Share Type </label>

                                            <select class="form-select" aria-label="Default select example">

                                                <option value="ipo">ipo</option>
                                                <option value="Secondary">Secondary</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label for="colFormLabel" class="col-sm-5 col-form-label"> Quantity </label>

                                            <select class="form-select" aria-label="Default select example">

                                                <option value="10">10</option>
                                                <option value="20">20</option>

                                            </select>

                                        </div>
                                        <div class="col-md-4">
                                            <label for="colFormLabel" class="col-sm-5 col-form-label"> Rate </label>

                                            <select class="form-select" aria-label="Default select example">

                                                <option value="100">100</option>
                                                <option value="200">200</option>

                                            </select>

                                        </div>
                                    </div>

                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-4">
                                            <label for="colFormLabel" class="col-form-label"> Total </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <a href="" class="btn btn-brand-primary me-3"> Calculate </a>
                                            <a href="" class="btn btn-secondary"> Clear </a>
                                        </div>
                                    </div>

                                </form>

                            </div>



                        </div>

                        <!-- Bonus Adjecent -->

                        <div class="tab-pane fade" id="bonus-tab-pane" role="tabpanel" aria-labelledby="bonus-tab" tabindex="0">
                            <h3> Bonus Adjecent Results </h3>
                            <div class="card reset-card list-card box-shadow-lg p-3">
                                <a href="" class="divLink"> company </a>
                                <div class="row px-2">

                                    <div class="col-md-12 col-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 text-muted text-xs">Share Type</p>
                                                <p class="fmb-2 text-num">IPO</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Quantity </p>
                                                <p class="fmb-2 text-num">20</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Rate </p>
                                                <p class="fmb-2 text-num">1000</p>
                                            </div>
                                            <div class="FixedDeposit_indProtectCol__1-ChA col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 fs-11 text-muted text-xs">Total </p>
                                                <p class="d-flex fw-500 mb-2 align-items-center">
                                                    Rs.2000
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card box-shadow border-0 p-3 mb-4">
                                <h3> Bonus Adjecent Results Calculator </h3>

                                <form action="" class="brand-form mt-4">



                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Market Price (Before Book Closure) </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> %of Bonus Share </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <a href="" class="btn btn-brand-primary me-3"> Calculate </a>
                                            <a href="" class="btn btn-secondary"> Clear </a>
                                        </div>
                                    </div>

                                </form>

                            </div>



                        </div>

                        <!-- Right Adjecent  -->
                        <div class="tab-pane fade" id="right-tab-pane" role="tabpanel" aria-labelledby="right-tab" tabindex="0">
                            <h3> Right Adjecent Results </h3>
                            <div class="card reset-card list-card box-shadow-lg p-3">
                                <a href="" class="divLink"> company </a>
                                <div class="row px-2">

                                    <div class="col-md-12 col-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 text-muted text-xs">Share Type</p>
                                                <p class="fmb-2 text-num">IPO</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Quantity </p>
                                                <p class="fmb-2 text-num">20</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Rate </p>
                                                <p class="fmb-2 text-num">1000</p>
                                            </div>
                                            <div class="FixedDeposit_indProtectCol__1-ChA col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 fs-11 text-muted text-xs">Total </p>
                                                <p class="d-flex fw-500 mb-2 align-items-center">
                                                    Rs.2000
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card box-shadow border-0 p-3 mb-4">
                                <h3> Right Adjecent Results Calculator </h3>

                                <form action="" class="brand-form mt-4">



                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Market Price (Before Book Closure) </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> %of Bonus Share </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Paid-up value Per Share </label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">100</option>
                                                <option value="2">200 </option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <a href="" class="btn btn-brand-primary me-3"> Calculate </a>
                                            <a href="" class="btn btn-secondary"> Clear </a>
                                        </div>
                                    </div>

                                </form>

                            </div>



                        </div>

                        <!-- Dividend  -->
                        <div class="tab-pane fade" id="dividend-tab-pane" role="tabpanel" aria-labelledby="dividend-tab" tabindex="0">
                            <h3> Dividend Results </h3>
                            <div class="card reset-card list-card box-shadow-lg p-3">
                                <a href="" class="divLink"> company </a>
                                <div class="row px-2">

                                    <div class="col-md-12 col-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 text-muted text-xs">Share Type</p>
                                                <p class="fmb-2 text-num">IPO</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Quantity </p>
                                                <p class="fmb-2 text-num">20</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Rate </p>
                                                <p class="fmb-2 text-num">1000</p>
                                            </div>
                                            <div class="FixedDeposit_indProtectCol__1-ChA col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 fs-11 text-muted text-xs">Total </p>
                                                <p class="d-flex fw-500 mb-2 align-items-center">
                                                    Rs.2000
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card box-shadow border-0 p-3 mb-4">
                                <h3> Dividend Calculator </h3>

                                <form action="" class="brand-form mt-4">
                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Share Quantity</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> %of Cash Dividend </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>
                                    </div>
                                    <div class="row mb-3 mt-3">

                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> %of Bonus Dividend </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>

                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Paid-up value Per Share </label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected="">Open this select menu</option>
                                                <option value="1">100</option>
                                                <option value="2">200 </option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <a href="" class="btn btn-brand-primary me-3"> Calculate </a>
                                            <a href="" class="btn btn-secondary"> Clear </a>
                                        </div>
                                    </div>

                                </form>

                            </div>



                        </div>

                        <!-- carg -->
                        <div class="tab-pane fade" id="carg-tab-pane" role="tabpanel" aria-labelledby="carg-tab" tabindex="0">
                            <h3> CARG Results </h3>
                            <div class="card reset-card list-card box-shadow-lg p-3">
                                <a href="" class="divLink"> company </a>
                                <div class="row px-2">

                                    <div class="col-md-12 col-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 text-muted text-xs">Share Type</p>
                                                <p class="fmb-2 text-num">IPO</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Quantity </p>
                                                <p class="fmb-2 text-num">20</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Rate </p>
                                                <p class="fmb-2 text-num">1000</p>
                                            </div>
                                            <div class="FixedDeposit_indProtectCol__1-ChA col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 fs-11 text-muted text-xs">Total </p>
                                                <p class="d-flex fw-500 mb-2 align-items-center">
                                                    Rs.2000
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card box-shadow border-0 p-3 mb-4">
                                <h3> CARG Calculator </h3>

                                <form action="" class="brand-form mt-4">
                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Initial Investment</label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row mb-3 mt-3">

                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Final Investment </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>


                                    </div>
                                    <div class="row mb-3 mt-3">

                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Duration of Investment(In year) </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>


                                    </div>

                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <a href="" class="btn btn-brand-primary me-3"> Calculate </a>
                                            <a href="" class="btn btn-secondary"> Clear </a>
                                        </div>
                                    </div>

                                </form>

                            </div>



                        </div>

                        <!-- emi -->

                        <div class="tab-pane fade" id="emi-tab-pane" role="tabpanel" aria-labelledby="emi-tab" tabindex="0">
                            <h3> EMI Results </h3>
                            <div class="card reset-card list-card box-shadow-lg p-3">
                                <a href="" class="divLink"> company </a>
                                <div class="row px-2">

                                    <div class="col-md-12 col-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 text-muted text-xs">Share Type</p>
                                                <p class="fmb-2 text-num">IPO</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Quantity </p>
                                                <p class="fmb-2 text-num">20</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Rate </p>
                                                <p class="fmb-2 text-num">1000</p>
                                            </div>
                                            <div class="FixedDeposit_indProtectCol__1-ChA col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 fs-11 text-muted text-xs">Total </p>
                                                <p class="d-flex fw-500 mb-2 align-items-center">
                                                    Rs.2000
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card box-shadow border-0 p-3 mb-4">
                                <h3> EMI Calculator </h3>

                                <form action="" class="brand-form mt-4">
                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Loan Amount </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Loan Tenure (in Year) </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row mb-3 mt-3">

                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Interest Rate </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>


                                    </div>


                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <a href="" class="btn btn-brand-primary me-3"> Calculate </a>
                                            <a href="" class="btn btn-secondary"> Clear </a>
                                        </div>
                                    </div>

                                </form>

                            </div>



                        </div>

                        <!-- slip -->

                        <div class="tab-pane fade" id="slip-tab-pane" role="tabpanel" aria-labelledby="slip-tab" tabindex="0">
                            <h3> SIP Results </h3>
                            <div class="card reset-card list-card box-shadow-lg p-3">
                                <a href="" class="divLink"> company </a>
                                <div class="row px-2">

                                    <div class="col-md-12 col-12">
                                        <div class="row align-items-center">
                                            <div class="col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 text-muted text-xs">Share Type</p>
                                                <p class="fmb-2 text-num">IPO</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Quantity </p>
                                                <p class="fmb-2 text-num">20</p>
                                            </div>
                                            <div class="col-md-3 col-6">
                                                <p class="mb-0 text-muted text-xs"> Rate </p>
                                                <p class="fmb-2 text-num">1000</p>
                                            </div>
                                            <div class="FixedDeposit_indProtectCol__1-ChA col-md-3 col-6 pl-md-0">
                                                <p class="mb-0 fs-11 text-muted text-xs">Total </p>
                                                <p class="d-flex fw-500 mb-2 align-items-center">
                                                    Rs.2000
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card box-shadow border-0 p-3 mb-4">
                                <h3> Systematic Investment Plan (SIP) Calculator </h3>

                                <form action="" class="brand-form mt-4">
                                    <div class="row mb-3 mt-3">
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Investment Period </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Expected Annual Return (%) </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>

                                    </div>
                                    <div class="row mb-3 mt-3">

                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Monthly Investment Amount </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>
                                        <div class="col-md-6">
                                            <label for="colFormLabel" class="col-form-label"> Years </label>
                                            <div class="">
                                                <input type="text" class="form-control" name="" placeholder="Number Only" id="">
                                            </div>

                                        </div>


                                    </div>


                                    <div class="row mt-5">
                                        <div class="col-md-12">
                                            <a href="" class="btn btn-brand-primary me-3"> Calculate </a>
                                            <a href="" class="btn btn-secondary"> Clear </a>
                                        </div>
                                    </div>

                                </form>

                            </div>



                        </div>






                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="img-cont calulator-mascot">
                    <div class="shape-2">
                        <svg xmlns="http://www.w3.org/2000/svg" width="104" height="213" viewBox="0 0 104 213">
                            <path fill="#86D095" fill-rule="evenodd" d="M144.23 202c3.187 0 5.77 2.462 5.77 5.5s-2.583 5.5-5.77 5.5c-3.185 0-5.768-2.462-5.768-5.5s2.583-5.5 5.769-5.5zm-23.076 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM75 202c3.186 0 5.77 2.462 5.77 5.5S78.185 213 75 213c-3.186 0-5.77-2.462-5.77-5.5S71.815 202 75 202zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM5.77 202c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5C2.583 213 0 210.538 0 207.5s2.583-5.5 5.77-5.5zm138.462-29c3.186 0 5.769 2.462 5.769 5.5s-2.583 5.5-5.77 5.5c-3.185 0-5.768-2.462-5.768-5.5s2.583-5.5 5.769-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM75 173c3.186 0 5.77 2.462 5.77 5.5S78.185 184 75 184c-3.186 0-5.77-2.462-5.77-5.5S71.815 173 75 173zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM5.77 173c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5C2.583 184 0 181.538 0 178.5s2.583-5.5 5.77-5.5zm115.385-29c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM75 144c3.186 0 5.77 2.462 5.77 5.5S78.185 155 75 155c-3.186 0-5.77-2.462-5.77-5.5S71.815 144 75 144zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM5.77 144c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5C2.583 155 0 152.538 0 149.5s2.583-5.5 5.77-5.5zm138.462 0c3.186 0 5.769 2.462 5.769 5.5s-2.583 5.5-5.77 5.5c-3.185 0-5.768-2.462-5.768-5.5s2.583-5.5 5.769-5.5zm-23.077-29c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM75 115c3.186 0 5.77 2.462 5.77 5.5S78.185 126 75 126c-3.186 0-5.77-2.462-5.77-5.5S71.815 115 75 115zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM5.77 115c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5C2.583 126 0 123.538 0 120.5s2.583-5.5 5.77-5.5zm138.462 0c3.186 0 5.769 2.462 5.769 5.5s-2.583 5.5-5.77 5.5c-3.185 0-5.768-2.462-5.768-5.5s2.583-5.5 5.769-5.5zm0-28c3.186 0 5.769 2.462 5.769 5.5s-2.583 5.5-5.77 5.5c-3.185 0-5.768-2.462-5.768-5.5s2.583-5.5 5.769-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM75 87c3.186 0 5.77 2.462 5.77 5.5S78.185 98 75 98c-3.186 0-5.77-2.462-5.77-5.5S71.815 87 75 87zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM5.77 87c3.186 0 5.77 2.462 5.77 5.5S8.954 98 5.768 98C2.583 98 0 95.538 0 92.5S2.583 87 5.77 87zM75 58c3.186 0 5.77 2.462 5.77 5.5S78.185 69 75 69c-3.186 0-5.77-2.462-5.77-5.5S71.815 58 75 58zm-46.154 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm69.23 0c3.187 0 5.77 2.462 5.77 5.5s-2.583 5.5-5.77 5.5c-3.185 0-5.768-2.462-5.768-5.5s2.583-5.5 5.769-5.5zm23.078 0c3.186 0 5.769 2.462 5.769 5.5s-2.583 5.5-5.77 5.5c-3.185 0-5.768-2.462-5.768-5.5s2.583-5.5 5.769-5.5zM5.769 58c3.186 0 5.77 2.462 5.77 5.5S8.954 69 5.768 69C2.583 69 0 66.538 0 63.5S2.583 58 5.77 58zm92.308 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm46.154-29c3.186 0 5.769 2.462 5.769 5.5s-2.583 5.5-5.77 5.5c-3.185 0-5.768-2.462-5.768-5.5s2.583-5.5 5.769-5.5zm-46.154 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-46.154 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm-23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM5.77 29c3.186 0 5.77 2.462 5.77 5.5S8.954 40 5.768 40C2.583 40 0 37.538 0 34.5S2.583 29 5.77 29zm115.385 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zM75 29c3.186 0 5.77 2.462 5.77 5.5S78.185 40 75 40c-3.186 0-5.77-2.462-5.77-5.5S71.815 29 75 29zM28.846 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5S25.66 0 28.847 0zm23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5S48.738 0 51.924 0zM75 0c3.186 0 5.77 2.462 5.77 5.5S78.185 11 75 11c-3.186 0-5.77-2.462-5.77-5.5S71.815 0 75 0zm23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5S94.892 0 98.078 0zm23.077 0c3.186 0 5.77 2.462 5.77 5.5s-2.584 5.5-5.77 5.5c-3.186 0-5.77-2.462-5.77-5.5s2.584-5.5 5.77-5.5zm23.077 0C147.417 0 150 2.462 150 5.5s-2.583 5.5-5.77 5.5c-3.185 0-5.768-2.462-5.768-5.5S141.045 0 144.23 0zM5.769 0c3.186 0 5.77 2.462 5.77 5.5S8.954 11 5.768 11C2.583 11 0 8.538 0 5.5S2.583 0 5.77 0z" opacity=".5" />
                        </svg>
                    </div>
                    <!-- <img src="img/calc-illustration.svg" class="img-fluid" alt=""> -->
                </div>
            </div>
        </div>
    </div>
</section>


<?php include 'components/footer.php'; ?>