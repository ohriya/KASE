<?php include 'components/header.php'; ?>

<section class="sticky-nav">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="flex-nav">
                    <div class="flex-links">
                        <a href="./overall.php" class="active"> Brokers Overall </a>
                        <a href="./favourite.php"> Brokers Favourites </a>
                        <a href="./stock-wise.php"> Stock Wise Details </a>
                        <a href="./hot-stock.php"> Hot Stocks </a>

                    </div>

                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main-sm bg-grey fav-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">

                <div class="p-3">
                    <div class="analysis-details py-2 row justify-content-between">
                        <div class="col-md-7">
                            <h2> Agriculture Development Bank </h2>
                        </div>

                        <div class="col-md-5 text-end">
                            <div class="d-flex align-items-center justify-content-end">
                                <h2 class="m-0">Rs.1946.63</h2>
                                <p class="m-0 d-flex justify-content-center text-green widget-number">
                                    +0.8%<span class="d-block relative">▲</span>
                                </p>

                            </div>

                            <p class="text-muted text-xs mb-0">Last Updated: Dec 22, 2022 2:59 PM </p>

                        </div>
                    </div>

                    <div class="py-2">
                        <div class="row align-items-center">
                            <div class="col-md-4">
                                <form class="">
                                    <label for="exampleFormControlInput1" class="form-label">Choose Broker No.</label>
                                    <div class="">
                                        <select class="form-select" aria-label="Default select example">
                                            <option value="1" selected>1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4<option>
                                        </select>
                                    </div>

                                </form>
                            </div>

                            <div class="col-md-3">
                                <label for="exampleFormControlInput1" class="form-label">Choose Date</label>
                                <input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" />

                            </div>

                            <div class="col-md-5">
                                <div class="d-flex justify-content-end">
                                    <div class="radio_container">
                                        <input type="radio" name="radio" id="one" checked>
                                        <label for="one">Today</label>
                                        <input type="radio" name="radio" id="two">
                                        <label for="two">1 Week </label>
                                        <input type="radio" name="radio" id="three">
                                        <label for="three">1 Month</label>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="card border-0 p-3">
                                <h3>Broker Top Buy</h3>
                                <div class="table-responsive">
                                <table class="table table-hover number-table table-green table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="10%"> No.</th>
                                            <th scope="col" width="15%"> Ticker</th>
                                            <th scope="col" width="10%">QTY</th>
                                            <th scope="col">Amount(RS)</th>
                                            <th scope="col" class="text-end">Average Price (RS)</th>
                                            <th scope="col" class="text-end">%of total Transaction</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">1</a></th>
                                            <th><a href="#" class="symbol">MMF1 </a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.67,000 </td>
                                            <td class="text-end"> Rs.87 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +1.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">2</a></th>
                                            <th><a href="#" class="symbol">NBF3 </a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.47,000 </td>
                                            <td class="text-end"> Rs.790 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +3.5%
                                                </p>
                                            </td>


                                        </tr>

                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">3</a></th>
                                            <th><a href="#" class="symbol">CZBIL</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.44,000 </td>
                                            <td class="text-end"> Rs.56 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +2.8%
                                                </p>
                                            </td>


                                        </tr>

                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">4</a></th>
                                            <th><a href="#" class="symbol">NTC</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.23,000 </td>
                                            <td class="text-end"> Rs.65 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +12.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">5</a></th>
                                            <th><a href="#" class="symbol">SHIVM</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.15,000 </td>
                                            <td class="text-end"> Rs.7 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +12.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">6</a></th>
                                            <th><a href="#" class="symbol">CBL</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.17,000 </td>
                                            <td class="text-end"> Rs.12 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +2.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">7</a></th>
                                            <th><a href="#" class="symbol">AHPC</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.47,000 </td>
                                            <td class="text-end"> Rs.45 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">8</a></th>
                                            <th><a href="#" class="symbol">BPCP</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.57,000 </td>
                                            <td class="text-end"> Rs.77 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +2.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">9</a></th>
                                            <th><a href="#" class="symbol">SBL</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.98,000 </td>
                                            <td class="text-end"> Rs.45 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +8.0%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">10</a></th>
                                            <th><a href="#" class="symbol">NICA</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.34,000 </td>
                                            <td class="text-end"> Rs.7 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +12.8%
                                                </p>
                                            </td>


                                        </tr>


                                    </tbody>
                                </table>
                                </div>
                               

                            </div>


                        </div>

                        <div class="col-md-6">
                            <div class="card border-0 p-3">
                                <h3>Broker Top Sell</h3>
                                <div class="table-responsive">
                                <table class="table table-hover number-table table-red table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="10%"> No.</th>
                                            <th scope="col" width="15%"> Ticker</th>
                                            <th scope="col" width="10%">QTY</th>
                                            <th scope="col">Amount(RS)</th>
                                            <th scope="col" class="text-end">Average Price (RS)</th>
                                            <th scope="col" class="text-end">%of total Transaction</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">1</a></th>
                                            <th><a href="#" class="symbol">NICSF </a></th>
                                            <td> 2,360 </td>
                                            <td class="text-end"> Rs.77,000 </td>
                                            <td class="text-end"> Rs.68</td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +20.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">2</a></th>
                                            <th><a href="#" class="symbol">RMF </a></th>
                                            <td> 32,360 </td>
                                            <td class="text-end"> Rs.27,000 </td>
                                            <td class="text-end"> Rs.7 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +11.8%
                                                </p>
                                            </td>


                                        </tr>

                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">3</a></th>
                                            <th><a href="#" class="symbol">SANIMA</a></th>
                                            <td> 4,360 </td>
                                            <td class="text-end"> Rs.9,47,000 </td>
                                            <td class="text-end"> Rs.221 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +7.8%
                                                </p>
                                            </td>


                                        </tr>

                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">4</a></th>
                                            <th><a href="#" class="symbol">NBF3</a></th>
                                            <td> 35,360 </td>
                                            <td class="text-end"> Rs.24,000 </td>
                                            <td class="text-end"> Rs.330 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +6.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">5</a></th>
                                            <th><a href="#" class="symbol">SHIVM</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.47,000 </td>
                                            <td class="text-end"> Rs.17 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +3.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">6</a></th>
                                            <th><a href="#" class="symbol">GBBL</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.47,000 </td>
                                            <td class="text-end"> Rs.7 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +1.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">7</a></th>
                                            <th><a href="#" class="symbol">RIDI</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.47,000 </td>
                                            <td class="text-end"> Rs.99 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +5.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">8</a></th>
                                            <th><a href="#" class="symbol">NABIL</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.47,000 </td>
                                            <td class="text-end"> Rs.123 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +1.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">9</a></th>
                                            <th><a href="#" class="symbol">NCCB</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.47,000 </td>
                                            <td class="text-end"> Rs.56 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +12.8%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            <th><a href="#" class="symbol">10</a></th>
                                            <th><a href="#" class="symbol">NHPC</a></th>
                                            <td> 42,360 </td>
                                            <td class="text-end"> Rs.47,000 </td>
                                            <td class="text-end"> Rs.7 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +7.8%
                                                </p>
                                            </td>


                                        </tr>


                                    </tbody>
                                </table>
                                </div>
                                

                            </div>


                        </div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-12">
                            <div class="card border-0 p-3">
                                <h3> Last 30 days Trend</h3>
                                <canvas id="myChart" width="800" height="180" class=""></canvas>

                            </div>

                        </div>


                    </div>


                </div>
            </div>
        </div>
    </div>
</section>



<?php include 'components/footer.php'; ?>