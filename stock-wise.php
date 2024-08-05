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
                                    <label for="exampleFormControlInput1" class="form-label">Choose Ticker</label>
                                    <div class="">
                                        <select class="form-select" aria-label="Default select example">
                                            <option selected>Agriculture Development Bank</option>
                                            <option value="1">API Power (API)</option>
                                            <option value="2">Asain Life Insurance (ALI)</option>
                                            <option value="3">Bishal Bazar(BB)</option>
                                        </select>
                                    </div>

                                </form>
                            </div>

                            <div class="col-md-3">
                                <label for="exampleFormControlInput1" class="form-label">Choose Date</label>
                                <input type="text" class="form-control" name="daterange" value="01/01/2015 - 01/31/2015" />

                            </div>

                            <div class="col-md-5">
                                <div class="row justify-content-between align-items-center">
                                    <div class="col-md-6">

                                    </div>

                                    <div class="col-md-6">
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
                        </div>

                    </div>

                    <div class="row mt-3">
                        <div class="col-md-8">
                            <div class="card border-0 h-100 p-3">
                                <h3> Last 30 days Trend</h3>
                                <canvas id="stockWiseChart" width="800" height="180" class=""></canvas>

                            </div>

                        </div>

                        <div class="col-md-4">
                            <div class="card border-0 p-3">
                                <h3>Broker that sold the most</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover number-table table-grey table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="25%">Broker No.</th>
                                                <th scope="col" width="20%">QTY</th>
                                                <th scope="col">Avg. Price</th>
                                                <th scope="col" class="text-end">%of total Buy</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-hover">
                                                <th><a href="#" class="symbol">35 </a></th>
                                                <td> 2,360 </td>
                                                <td class="text-end"> 200 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        +0.8%
                                                    </p>
                                                </td>


                                            </tr>
                                            <tr class="tr-hover">
                                                <th><a href="#" class="symbol"> 49 </a> </th>
                                                <td> 1,460 </td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        +0.8%
                                                    </p>
                                                </td>


                                            </tr>

                                            <tr class="tr-hover">
                                                <th> <a href="#" class="symbol"> 42 </a></th>
                                                <td>1,260 </td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        +0.8%
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr class="tr-hover">
                                                <th><a href="#" class="symbol">28 </a></th>
                                                <td> 1,151 </td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        6.0%
                                                    </p>
                                                </td>


                                            </tr>
                                            <tr class="tr-hover">
                                                <th><a href="#" class="symbol">12 </a></th>
                                                <td> 951 </td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        4.0%
                                                    </p>
                                                </td>


                                            </tr>


                                        </tbody>
                                    </table>
                                </div>


                            </div>


                        </div>
                    </div>

                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="card box-shadow border-0 p-3">
                                <h3> Broker That bought the most </h3>
                                <div class="table-responsive">
                                    <table class="table table-hover number-table table-green table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="25%">Broker No.</th>
                                                <th scope="col" width="20%">QTY</th>
                                                <th scope="col">Avg. Price</th>
                                                <th scope="col" class="text-end">%of total Buy</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-hover">
                                                <th><a href="#" class="symbol"> 35 </a> </th>
                                                <td> 2,360 </td>
                                                <td class="text-end"> 200 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        +0.8%
                                                    </p>
                                                </td>


                                            </tr>
                                            <tr class="tr-hover">
                                                <th> <a href="#" class="symbol"> 49 </a> </th>
                                                <td> 1,460 </td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        +0.8%
                                                    </p>
                                                </td>


                                            </tr>

                                            <tr class="tr-hover">
                                                <th> <a href="#" class="symbol"> 42 </a> </th>
                                                <td>1,260 </td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        +0.8%
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr class="tr-hover">
                                                <th><a href="#" class="symbol"> 28 </a> </th>
                                                <td> 1,151 </td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        6.0%
                                                    </p>
                                                </td>


                                            </tr>


                                        </tbody>
                                    </table>
                                </div>


                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="card box-shadow border-0 p-3">
                                <h3>Broker that sold the most</h3>
                                <div class="table-responsive">
                                    <table class="table table-hover number-table table-red table-sm">
                                        <thead>
                                            <tr>
                                                <th scope="col" width="25%">Broker No.</th>
                                                <th scope="col" width="20%">QTY</th>
                                                <th scope="col">Avg. Price</th>
                                                <th scope="col" class="text-end">%of total Buy</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-hover">
                                                <th> <a href="#" class="symbol">35 </a></th>
                                                <td> 2,360</td>
                                                <td class="text-end"> 200 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        +0.8%
                                                    </p>
                                                </td>


                                            </tr>
                                            <tr class="tr-hover">
                                                <th><a href="#" class="symbol"> 49 </a> </th>
                                                <td> 1,460</td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        +0.8%
                                                    </p>
                                                </td>


                                            </tr>

                                            <tr class="tr-hover">
                                                <th> <a href="#" class="symbol">42</a></th>
                                                <td> 1,260 </td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        +0.8%
                                                    </p>
                                                </td>

                                            </tr>
                                            <tr class="tr-hover">
                                                <th> <a href="#" class="symbol">28</a></th>
                                                <td> 1,151 </td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        6.0%
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

<script>
    (() => {
        var ctx = document.getElementById('').getContext('2d');
        var lineOptions = {
            responsive: true
            };
        var myChart = new Chart(ctx, {
            type: 'bar',
            options: {
                maintainAspectRatio: false,
            },
            data: {
                labels: ["Jan 2022", "Feb 2022", "Mar 2022", "Apr 2022", "May 2022", "June 2022", "July 2022", "Aug 2022", "Sept 2022", "Oct 2022", "Nov 2022", "Dec 2022"],
                datasets: [{
                        label: "Total Buy Quantity",
                        backgroundColor: ["#dbdbdbe6", "#35B14F", "#5DC172", "#35B14F", "#5DC172", "#35B14F", "#dbdbdbe6", "#35B14F", "#5DC172", "#5DC172", "#5DC172", "#5DC172"],
                        data: [2478, 5267, 1334, 1784, 2433, 3333, 1213, 3300, 1150, 510, 121, 4545]
                    },
                    {
                        label: "Total Sale Quantity",
                        backgroundColor: ["#dbdbdbe6", "#35B14F", "#5DC172", "#35B14F", "#5DC172", "#35B14F", "#dbdbdbe6", "#35B14F", "#5DC172", "#5DC172", "#5DC172", "#5DC172"],
                        data: [3478, 1267, 634, 1784, 5433, 1333, 413, 6300, 1150, 4410, 1121, 3545]
                    },
                ]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        }, lineOptions);


    })()
</script>

<?php include 'components/footer.php'; ?>