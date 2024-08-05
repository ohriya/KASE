<?php include 'components/header.php'; ?>

<section class="main-sm bg-grey analysis-section">
    <div class="container-fluid">
        <div class="row mb-4">
            <div class="col-md-12">
                <div class="card box-shadow border-0">
                    <ul class="nav nav-tabs brand-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="overall-tab" data-bs-toggle="tab" data-bs-target="#overall-tab-pane" type="button" role="tab" aria-controls="overall-tab-pane" aria-selected="true">Brokers Overall</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="fav-tab" data-bs-toggle="tab" data-bs-target="#fav-tab-pane" type="button" role="tab" aria-controls="fav-tab-pane" aria-selected="false">Brokers Favourites</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="stockwise-tab" data-bs-toggle="tab" data-bs-target="#stockwise-tab-pane" type="button" role="tab" aria-controls="stockwise-tab-pane" aria-selected="false">Stockwise Details</button>
                        </li>

                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="hotstock-tab" data-bs-toggle="tab" data-bs-target="#hotstock-tab-pane" type="button" role="tab" aria-controls="hotstock-tab-pane" aria-selected="false">Hotstock Details</button>
                        </li>


                    </ul>
                    <div class="tab-content p-3" id="myTabContent">
                        <div class="tab-pane fade show active" id="overall-tab-pane" role="tabpanel" aria-labelledby="overall-tab" tabindex="0">
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
                                <div class="row">
                                    <div class="col-md-7">
                                        <form class="row g-3">
                                            <label for="exampleFormControlInput1" class="col-sm-3 form-label">Choose Ticker</label>
                                                <div class="col-sm-7">
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Agriculture Development Bank</option>
                                                        <option value="1">API Power (API)</option>
                                                        <option value="2">Asain Life Insurance (ALI)</option>
                                                        <option value="3">Bishal Bazar(BB)</option>
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

                            </div> 



                            <div class="row gx-1 mt-3">
                                <div class="col-md-4">
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
                                                <td>  1,151 </td>
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
                                <div class="col-md-4">
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
                                                <td>  2,360 </td>
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
                                                <td>  1,151 </td>
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
                                <div class="col-md-4">
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
                                                <td> 1,260  </td>
                                                <td class="text-end"> 305 </td>
                                                <td class="text-end">
                                                    <p class="m-0">
                                                        +0.8%
                                                    </p>
                                                </td>
                                                                                               
                                            </tr>
                                            <tr class="tr-hover">
                                                <th> <a href="#" class="symbol">28</a></th>
                                                <td> 1,151  </td>
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

                            <div class="row">
                                <div class="col-md-12">
                                    <div>
                                        <canvas id="myChart" width="800" height="180" class=""></canvas>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="fav-tab-pane" role="tabpanel" aria-labelledby="fav-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="stockwise-tab-pane" role="tabpanel" aria-labelledby="stockwise-tab" tabindex="0">...</div>
                        <div class="tab-pane fade" id="hotstock-tab-pane" role="tabpanel" aria-labelledby="hotstock-tab" tabindex="0">...</div>

                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

<?php include 'components/footer.php'; ?>