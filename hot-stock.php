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

<section class="main-sm bg-grey analysis-section">
    <div class="container">
        <div class="row mb-4 align-items-center">
            <div class="col-md-9">
                <div class="p-3">
                    <div class="analysis-details py-2 row justify-content-between">
                        <div class="col-md-12">

                            <p> Generally, companies with higher market capitalisation trade more frequently than do companies with lower market capitalisation. The following list shows trading volume as a percentage of market capitalisation to give you an indication of the companies that are trading relatively more frequently with respect to its market capitalisation in the selected time period.</p>
                            <div class="row justify-content-between align-items-end">
                                <div class="col-md-4">
                                    
                                    <p class="text-muted text-xs mb-0">Last Updated: Dec 22, 2022 2:59 PM </p>
                                </div>
                                <div class="col-md-4">

                                    <input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" />
                                </div>
                                <div class="col-md-4">

                                    <div class="d-flex justify-content-end mt-2">
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
                    </div>



                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-0 p-3">
                                <h3>Hot Stocks</h3>
                                <div class="table-responsive">
                                <table class="table table-hover number-table table-grey table-sm">
                                    <thead>
                                    <tr>
                                            
                                            <th scope="col" width="15%"> Ticker</th>
                                            <th scope="col" width="%">QTY</th>
                                            <th scope="col">Amount(RS)</th>
                                            <th scope="col" class="text-end">%Traded of Market Cap</th>
                                            <th scope="col" class="text-end">%Change in price for the period</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-hover">
                                            
                                            <td> AKBSL </td>
                                            <td class="text-end"> 20,000 </td>
                                            <td class="text-end"> 3,00,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    +0.8%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-red">
                                                    -0.8%
                                                </p>
                                            </td>


                                        </tr>
                                     
                                        <tr class="tr-hover">
                                            
                                            <td> GHL </td>
                                            <td class="text-end"> 84,000 </td>
                                            <td class="text-end"> 1,00,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    1.48%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-green">
                                                    0.5%
                                                </p>
                                            </td>


                                        </tr>
                                     
                                        <tr class="tr-hover">
                                            
                                            <td> HDHPC </td>
                                            <td class="text-end"> 114,000 </td>
                                            <td class="text-end"> 86,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    1.48%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-green">
                                                    1.2%
                                                </p>
                                            </td>


                                        </tr>
                                     
                                        <tr class="tr-hover">
                                            
                                            <td> CYCL </td>
                                            <td class="text-end"> 44,000 </td>
                                            <td class="text-end"> 90,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    1.48%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-red">
                                                    -0.6%
                                                </p>
                                            </td>


                                        </tr>
                                     
                                        <tr class="tr-hover">
                                            
                                            <td> RIDI </td>
                                            <td class="text-end"> 114,000 </td>
                                            <td class="text-end"> 86,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    0.48%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-red">
                                                    -1.2%
                                                </p>
                                            </td>


                                        </tr>
                                     
                                        <tr class="tr-hover">
                                            
                                            <td> SPHL </td>
                                            <td class="text-end"> 35,000 </td>
                                            <td class="text-end"> 50,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    0.90%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-red">
                                                    -0.2%
                                                </p>
                                            </td>


                                        </tr>
                                     
                                        <tr class="tr-hover">
                                            
                                            <td> HPPL </td>
                                            <td class="text-end"> 25,000 </td>
                                            <td class="text-end"> 30,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    0.30%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-red">
                                                    -0.1%
                                                </p>
                                            </td>


                                        </tr>
                                     
                                        <tr class="tr-hover">
                                            
                                            <td> BARUN </td>
                                            <td class="text-end"> 1,000 </td>
                                            <td class="text-end"> 5,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    0.30%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-green">
                                                    0.1%
                                                </p>
                                            </td>


                                        </tr>
                                     
                                        <tr class="tr-hover">
                                            
                                            <td> NGPL </td>
                                            <td class="text-end"> 15,000 </td>
                                            <td class="text-end"> 23,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    0.10%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-green">
                                                    0.4%
                                                </p>
                                            </td>


                                        </tr>
                                        <tr class="tr-hover">
                                            
                                            <td> JOSHI </td>
                                            <td class="text-end"> 13,000 </td>
                                            <td class="text-end"> 66,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    0.10%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-green">
                                                    0.3%
                                                </p>
                                            </td>


                                        </tr>
                                     
                                        <tr class="tr-hover">
                                            
                                            <td> RADHI </td>
                                            <td class="text-end"> 25,000 </td>
                                            <td class="text-end"> 60,000 </td>
                                            <td class="text-end">
                                                <p class="m-0">
                                                    0.10%
                                                </p>
                                            </td>
                                            <td class="text-end">
                                                <p class="m-0 text-green">
                                                    0.7%
                                                </p>
                                            </td>


                                        </tr>
                                     


                                    </tbody>
                                </table>
                                </div>
                               

                            </div>


                        </div>

                        
                    </div>


                </div>
            </div>

           
        </div>
    </div>
</section>



<?php include 'components/footer.php'; ?>