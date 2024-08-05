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

<section class="main-sm bg-grey">
    <div class="container">
        <div class="row mb-2">
            <div class="col-md-7">
                <form class="row g-3">
                    <label for="exampleFormControlInput1" class="col-sm-2 form-label">View By</label>
                    <div class="col-sm-7">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Shares Traded</option>
                            <option value="1"> Turnover Amount </option>
                           
                        </select>
                    </div>

                </form>
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


        <div class="row">
            <div class="col-md-12">
                <div class="card box-shadow border-0 p-3">

                    <div class="table-responsive d-flex">
                        <table class="table fixed-table table-green table-hover number-table">
                            <thead>
                                <tr>
                                    <th>Broker No.</th>
                                    <th colspan="5">Broker Top Buy </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-hover">
                                    <td>1</td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000"> MMF1</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">NBF3</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">CZBIL</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">NTC</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">SHIVM</span></td>
                                </tr>
                                <tr class="tr-hover">
                                    <td>2</td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">RIDI</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">RHPL</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">NMBHF1</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">LBL</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">CMF1</span></td>
                                </tr>
                                <tr class="tr-hover">
                                    <td>3</td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">HPPL</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">NTC</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">GBIME</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">SSHL</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">HDCL</span></td>
                                </tr>


                            </tbody>
                        </table>
                        <table class="table number-table fixed-table table-hover table-red">
                            <thead>
                                <tr>

                                    <th colspan="5">Broker Top Sell </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr class="tr-hover">

                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">MMF1</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">NBF3</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">CZBIL</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">NTC</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">SHIVM</span></td>
                                </tr>
                                <tr class="tr-hover">

                                    <td> <span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000"> API </span> </td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">UPCL</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">SHIVM</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">SHPC</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">HDHPC</span></td>
                                </tr>
                                <tr class="tr-hover">

                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">NTC</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">UPCL</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">SHIVM</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">SHPC</span></td>
                                    <td><span type="button" class="my_tooltip red-tooltip" data-bs-toggle="tooltip" title="Buy Qty:2,554 <br/> Buy Amount: Rs.12,000 <br /> Average Buy Price: Rs.5000">HDHPC</span></td>
                                </tr>


                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>

       
    </div>
</section>



<?php include 'components/footer.php'; ?>