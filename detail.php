<?php include 'components/header.php'; ?>
<section class="sticky-tabs box-shadow">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex align-items-center justify-content-between secondary-nav">
                    <ul class="nav nav-pills nav-pills-custom" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">Profile</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">Breakdown</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact-tab-pane" type="button" role="tab" aria-controls="contact-tab-pane" aria-selected="false">Trade Summary</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="rating-tab" data-bs-toggle="tab" data-bs-target="#rating-tab-pane" type="button" role="tab" aria-controls="rating-tab-pane" aria-selected="false">Ratings</button>
                        </li>
                    </ul>

                    <ul class="list-unstyled d-flex mb-0">
                        <li> <a href="" class="btn btn-outline-success me-3"> Open Demat </a></li>
                        <li> <a href="" class="btn btn-outline-success me-3"> Open Mero Share </a></li>
                        <li> <a href="" class="btn btn-outline-success"> Open TMS A/C </a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<section class="main-sm bg-grey">
    <div class="container">

        <div class="row">
            <div class="col-md-9">
              <div class="detail-body">
                    <div class="tab-content mt-1" id="myTabContent">
                        <div class="tab-pane fade show active" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                            <!-- profile -->
                            <div class="card box-shadow border-0 p-3">
                                <div class="section-header d-flex justify-content-between">
                                    <h3> Profile </h3>
                                    <a href="" class="btn btn-brand-primary" data-bs-toggle="modal" data-bs-target="#appliedModal"> Apply Now </i> </a>
                                </div>

                                <div>
                                    <div class="banner-content media-sm d-flex align-items-center">
                                        <div class="banner-icon me-4">
                                            <img src="img/naasa.png" class="img-fluid" alt="" />
                                        </div>

                                        <div class="banner-info">
                                            <h2 class="mb-0"> Naasa Security Co. Ltd </h2>

                                            <p class="mb-0 text-muted text-xs">as of 30 Nov 2022, 6:00 PM</p>
                                        </div>
                                    </div>

                                    <div class="row align-items-center mt-4 mb-4">
                                        <div class="col-md-3 col-6 pl-md-0">
                                            <p class="mb-0 text-muted text-xs">Collateral</p>
                                            <p class="fmb-2 text-num">1.4</p>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <p class="mb-0 text-muted text-xs">Avg. Credit TIme</p>
                                            <p class="fmb-2 text-num">5 Days</p>
                                        </div>
                                        <div class="col-md-3 col-6">
                                            <p class="mb-0 text-muted text-xs"> Registered Users </p>
                                            <p class="fmb-2 text-num">15000</p>
                                        </div>
                                        <div class="FixedDeposit_indProtectCol__1-ChA col-md-3 col-6 pl-md-0">
                                            <p class="mb-0 fs-11 text-muted text-xs">Avg. 30 days Turnover</p>
                                            <p class="d-flex fw-500 mb-2 align-items-center">
                                                Rs.50 Cr.
                                            </p>
                                        </div>
                                    </div>
                                </div>

                                <div>
                                    <p>
                                        Nasa Securities Co. Ltd is one of the leading Brokerage Firms for stock trading in Nepal. The company received the license from the market regulator, the Securities Board of Nepal (SEBON), and is a member of Nepal Stock Exchange Ltd. (NEPSE).


                                    </p>

                                    <p> Established in 2007, we have been operating a brokerage business since 2012. In the very short span of time our existence, we are one of the major market contributors. Our company has a market share of roughly 10 percent of total market volume from the fiscal year 2016-17.</p>
                                    <p> At Naasa Securities, we constantly and consistently strive to grow and better ourselves without compromising on the quality of services we provide. We believe in ethical business practices and we aim to achieve high standards of doing business with our stakeholders.
                                    </p>
                                </div>
                            </div>

                            <div class="card box-shadow border-0 p-3 features-card">
                                <div class="section-header text-left">
                                    <h3> Branches </h3>
                                </div>
                                <ul class="nav nav-pills inner-pills border-0" id="myTab" role="tablist">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active" id="first-branch-tab" data-bs-toggle="tab" data-bs-target="#first-branch-pane" type="button" role="tab" aria-controls="first-branch-pane" aria-selected="true">Kathmandu</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="second-branch-tab" data-bs-toggle="tab" data-bs-target="#second-branch-tab-pane" type="button" role="tab" aria-controls="second-branch-tab-pane" aria-selected="false">Pokhara</button>
                                    </li>
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link" id="third-branch-tab" data-bs-toggle="tab" data-bs-target="#third-branch-tab-pane" type="button" role="tab" aria-controls="third-branch-tab-pane" aria-selected="false">Birgunj</button>
                                    </li>

                                </ul>
                                <div class="tab-content mt-3" id="myTabContent">
                                    <div class="tab-pane fade show active" id="first-branch-pane" role="tabpanel" aria-labelledby="first-branch" tabindex="0">
                                        <ul class="list-group ">
                                            <li class="list-group-item">
                                                Head Office:<br /> Nagpokhari, Kathmandu, Nepal

                                            </li>
                                            <li class="list-group-item">Phone: <br /> 01-5970084</li>
                                            <li class="list-group-item">Email: <br /> naasa@naasasecurities.com.np</li>
                                            <li class="list-group-item">Website: <br /> naasa.com.np</li>
                                            <li class="list-group-item">Management Team: <br /> CEO</li>

                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="second-branch-tab-pane" role="tabpanel" aria-labelledby="second-branch-tab" tabindex="0">
                                        <ul class="list-group ">
                                            <li class="list-group-item">
                                                Branch Office: <br /> Pritivi Chowk, Pokhara, Nepal <br />


                                            </li>
                                            <li class="list-group-item">Phone: <br /> 01-5970084</li>
                                            <li class="list-group-item">Email: <br /> naasa@naasasecurities.com.np</li>
                                            <li class="list-group-item">Website: <br /> naasa.com.np</li>
                                            <li class="list-group-item">Management Team: <br /> CEO</li>

                                        </ul>
                                    </div>
                                    <div class="tab-pane fade" id="third-branch-tab-pane" role="tabpanel" aria-labelledby="third-branch-tab" tabindex="0">
                                        <ul class="list-group ">
                                            <li class="list-group-item">
                                                Branch Office: <br /> Birgunj, Kathmandu, Nepal <br />


                                            </li>
                                            <li class="list-group-item">Phone: <br /> 01-5970084</li>
                                            <li class="list-group-item">Email: <br /> naasa@naasasecurities.com.np</li>
                                            <li class="list-group-item">Website: <br /> naasa.com.np</li>
                                            <li class="list-group-item">Management Team: <br /> CEO</li>

                                        </ul>
                                    </div>

                                </div>

                            </div>


                            <div class="card box-shadow border-0 p-3">
                                <div class="section-header text-left">
                                    <h3> Brokerage Plans </h3>
                                </div>

                                <div>
                                    <p>
                                        We have been provding stock brokerage services from the begining of our inception. It includes buying and selling of stocks for clients.Currently stock trading is allwed only on the stocks listed on Nepal Stock Exchange Ltd.


                                    </p>

                                    <p> We are also a registered Depository participant of CDS and Clearing Limited, the central depository of Nepal. It allows us to open Demat Accounts of our client, provide dematerialization services, pledge/unpledge of securities etc. </p>
                                </div>
                            </div>


                            <!-- table -->
                            <div class="card box-shadow border-0 p-3">
                                <div class="section-header text-left">
                                    <h3> Stock Brokerage Services </h3>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-sm table-hover table-striped number-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Broker No.</th>
                                                <th scope="col">Buying</th>
                                                <th scope="col">Selling</th>
                                                <th scope="col">Matching</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-hover">
                                                <td>58</td>
                                                <td>200</td>
                                                <td>210</td>
                                                <td>210</td>
                                            </tr>
                                            <tr class="tr-hover">
                                                <td>22</td>
                                                <td>250</td>
                                                <td>260</td>
                                                <td>260</td>
                                            </tr>

                                            <tr class="tr-hover">
                                                <td>42</td>
                                                <td>120</td>
                                                <td>130</td>
                                                <td>130</td>
                                            </tr>
                                            <tr class="tr-hover">
                                                <td>19</td>
                                                <td>320</td>
                                                <td>340</td>
                                                <td>340</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <!-- table -->
                            <div class="card box-shadow border-0 p-3">
                                <div class="section-header text-left">
                                    <h3> DEMAT Services </h3>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-sm table-hover table-striped number-table">
                                        <thead>
                                            <tr>
                                                <th scope="col">Broker No.</th>
                                                <th scope="col">Buying</th>
                                                <th scope="col">Selling</th>
                                                <th scope="col">Matching</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="tr-hover">
                                                <td>58</td>
                                                <td>200</td>
                                                <td>210</td>
                                                <td>210</td>
                                            </tr>
                                            <tr class="tr-hover">
                                                <td>22</td>
                                                <td>250</td>
                                                <td>260</td>
                                                <td>260</td>
                                            </tr>

                                            <tr class="tr-hover">
                                                <td>42</td>
                                                <td>120</td>
                                                <td>130</td>
                                                <td>130</td>
                                            </tr>
                                            <tr class="tr-hover">
                                                <td>19</td>
                                                <td>320</td>
                                                <td>340</td>
                                                <td>340</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>

                            <div class="card box-shadow p-3 border-0">
                                <div class="section-header text-left">
                                    <h4>Trading Platform </h4>
                                </div>
                                
                                <p>Tools and programs that the broker provides for carrying out online buy and sell orders. These are the names of their portals and mobile apps.</p>
                                <div>
                                    <a href="" class="btn btn-brand btn-brand-primary btn-sm"> Open TMS </a>
                                </div>
                            </div>

                            <div class="why-section main-sm">
                                <div class="mt-3 mb-5 text-center">
                                    <h2> Why Choose Naasa Securities Co. Ltd.? Know Everything about this broker.</h2>
                                    <p>This broker offers 1 or more programs that detail the account opening and maintenance fees, brokerage costs, and given margins. In the event that different plans are offered, use the plan switcher to compare the offerings.</p>
                                </div>

                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="card why-card box-shadow p-3 border-0">
                                            <div class="img-cont">
                                                <img src="img/quick-investing.svg" class="img-fluid" alt="">

                                            </div>

                                            <h3>Get the Best Investing Experience</h3>
                                            <p>Live Market Data, Company Info, Stock SIPs and much more.</p>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="card why-card box-shadow p-3 border-0">
                                            <div class="img-cont">
                                                <img src="img/easy-investing.svg" class="img-fluid" alt="">

                                            </div>
                                            <h3>Simple, Easy and Fast for Everyone</h3>
                                            <p>Designed for both Investors and Traders.</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card why-card box-shadow p-3 border-0">
                                            <div class="img-cont">
                                                <img src="img/invest.svg" class="img-fluid" alt="">

                                            </div>
                                            <h3>Invest in Equity Mutual Funds</h3>
                                            <p>Top Performing Equity funds of Year 2022</p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="pros-cons main">
                                <div class="mt-3 mb-3 text-center">
                                    <h2> Pros &amp; Cons of Trading Broker </h2>
                                    <p></p>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="media-card d-flex align-items-center">
                                            <div class="media-left">
                                                <ul class="list-unstyled">
                                                    <li class="d-flex align-items-center gap-2 mb-2">
                                                        <img src="img/tick.svg" alt="" />
                                                        <h4 class="m-0"> Quick Account Opening </h4>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-2">
                                                        <img src="img/tick.svg" alt="" />
                                                        <h4 class="m-0"> Outstanding Reports </h4>
                                                    </li>
                                                </ul>


                                            </div>

                                            <div class="media-right">
                                                <img src="img/ac-open.svg" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="media-card d-flex align-items-center">
                                            <div class="media-left">
                                                <ul class="list-unstyled">
                                                    <li class="d-flex align-items-center gap-2 mb-2">
                                                        <img src="img/cross-compare.svg" alt="" />
                                                        <h4 class="m-0"> Quick Account Opening </h4>
                                                    </li>
                                                    <li class="d-flex align-items-center gap-2 mb-2">
                                                        <img src="img/cross-compare.svg" alt="" />
                                                        <h4 class="m-0"> Outstanding Reports </h4>
                                                    </li>
                                                </ul>


                                            </div>

                                            <div class="media-right">
                                                <img src="img/corpus.svg" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-12">
                                    <div class="card box-shadow border-0">
                                        <div class="block">
                                            <div class="block-header">
                                                <div class="title d-flex justify-content-between">
                                                    <div>
                                                        <h4> Comments (12)</h4>


                                                    </div>
                                                    <a href="" class="c-green btn-view"> View All </a>
                                                </div>


                                            </div>
                                            <div class="writing">
                                                <div contenteditable="true" class="textarea" autofocus spellcheck="false">
                                                    <p>Hi <a class="tagged-user">@Jo</a></p>
                                                </div>
                                                <div class="footer">
                                                    <div class="text-format">
                                                        <button class="btn"><i class="ri-bold"></i></button>
                                                        <button class="btn"><i class="ri-italic"></i></button>
                                                        <button class="btn"><i class="ri-underline"></i></button>
                                                        <button class="btn"><i class="ri-list-unordered"></i></button>
                                                    </div>
                                                    <div class="group-button">
                                                        <button class="btn"><i class="ri-at-line"></i></button>
                                                        <button class="btn btn-brand btn-brand-primary">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="comment">
                                                <div class="user-banner">
                                                    <div class="user">
                                                        <div class="avatar">
                                                            <img src="https://randomuser.me/api/portraits/men/86.jpg">
                                                            <span class="stat grey"></span>
                                                        </div>
                                                        <h5>Auther gunn</h5>
                                                    </div>
                                                    <button class="btn dropdown"><i class="ri-more-line"></i></button>
                                                </div>
                                                <div class="content">
                                                    <p>collateral ma amount (-) negative ma basya xa clear gardinu vanera 1000 choti mail gari sakye ignore hanira xa gala futni gari dina maan lagi ra xa </p>
                                                </div>
                                                <div class="footer">
                                                    <button class="btn"><i class="ri-emotion-line"></i></button>
                                                    <div class="reactions">
                                                        <button class="btn react"><img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/325/thumbs-up_1f44d.png" alt="">4</button>
                                                        <button class="btn react"><img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/160/apple/325/angry-face-with-horns_1f47f.png" alt="">1</button>
                                                    </div>
                                                    <div class="divider"></div>
                                                    <a href="#">Reply</a>
                                                    <div class="divider"></div>
                                                    <span class="is-mute">6 hour</span>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="comment">
                                                    <div class="user-banner">
                                                        <div class="user">
                                                            <div class="avatar" style="background-color:#AEE0B9;border-color:#5DC172; color:#34b14f">
                                                                AF
                                                                <span class="stat green"></span>
                                                            </div>
                                                            <h5>Auther gunn</h5>
                                                        </div>
                                                        <button class="btn dropdown"><i class="ri-more-line"></i></button>
                                                    </div>
                                                    <div class="content">
                                                        <p>Before installing this plugin please put back again your wordpress and site url back to http.</p>
                                                    </div>
                                                    <div class="footer">
                                                        <button class="btn"><i class="ri-emotion-line"></i></button>
                                                        <div class="divider"></div>
                                                        <a href="#">Reply</a>
                                                        <div class="divider"></div>
                                                        <span class="is-mute">2 min</span>
                                                    </div>
                                                </div>
                                                <div class="reply comment">
                                                    <div class="user-banner">
                                                        <div class="user">
                                                            <div class="avatar">
                                                                <img src="https://images.unsplash.com/photo-1510227272981-87123e259b17?ixlib=rb-0.3.5&q=80&fm=jpg&crop=faces&fit=crop&h=200&w=200&s=3759e09a5b9fbe53088b23c615b6312e" alt="">
                                                                <span class="stat green"></span>
                                                            </div>
                                                            <h5>Babu Bogati</h5>
                                                        </div>
                                                        <button class="btn dropdown"><i class="ri-more-line"></i></button>
                                                    </div>
                                                    <div class="content">
                                                        <p>Hi <a href="#" class="tagged-user">@Albert Flores</a>.Thanks for your reply.</p>
                                                    </div>
                                                    <div class="footer">
                                                        <button class="btn"><i class="ri-emotion-line"></i></button>
                                                        <div class="reactions">
                                                            <button class="btn react"><img src="https://cdn-0.emojis.wiki/emoji-pics/apple/smiling-face-with-heart-eyes-apple.png" alt="">2</button>
                                                        </div>
                                                        <div class="divider"></div>
                                                        <a href="#">Reply</a>
                                                        <div class="divider"></div>
                                                        <span class="is-mute">18 sec</span>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                </div>


                            </div>

                            <!-- <div class="card box-shadow p-3 border-0">
                                <h4> <span class="relative text-green">▲</span> Pros </h4>
                                <p>Advantages and Strengths of this broker.</p>
                            </div>

                            <div class="card box-shadow p-3 border-0">
                                <h4> <span class="relative rotate-180 text-red">▲</span> Cons </h4>
                                <p>Disadvantages of this broker that it needs to improve upon.</p>
                            </div> -->

                        </div>
                        <div class="tab-pane fade" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">

                            <div class="row">
                                <div class="col-md-3 col-6 d-flex align-items-stretch">
                                    <div class="card reset-card widget-card summary-card summary-card-hover justify-content-between p-3">
                                        <div class="img-cont border-brand-on ">
                                            <i class="fa-solid fa-chart-line"></i>
                                        </div>
                                        <h4 class="m-0 mt-3 card-title text-grey text-sm text-left">
                                            Total Turnover
                                        </h4>
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0 text-left text-sm">Rs.72.63 CR</p>
                                            <p class="m-0 d-flex align-items-start text-left justify-content-center text-green">
                                                <span class="d-block relative">▲</span>+0.8%
                                            </p>

                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-stretch">
                                    <div class="card reset-card widget-card summary-card summary-card-hover justify-content-between p-3">
                                        <div class="img-cont border-brand-on">
                                            <i class="fa-solid fa-bag-shopping"></i>
                                        </div>
                                        <h4 class="m-0 mt-3 card-title text-grey text-sm text-left">
                                            Total Purchase Amount
                                        </h4>
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0 text-left text-sm">Rs.32.63 CR</p>
                                            <p class="m-0 d-flex align-items-start text-left justify-content-center text-green">
                                                <span class="d-block relative">▲</span>+0.8%
                                            </p>

                                        </div>
                                    </div>


                                </div>

                                <div class="col-md-3 col-6 d-flex align-items-stretch">
                                    <div class="card reset-card widget-card summary-card summary-card-hover justify-content-between p-3">
                                        <div class="img-cont border-brand-on">
                                            <i class="fa-solid fa-money-bill-trend-up"></i>
                                        </div>
                                        <h4 class="m-0 mt-3 card-title text-grey text-sm text-left">
                                            Total Sales Amount
                                        </h4>
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0 text-left text-sm">Rs.32.63 CR</p>
                                            <p class="m-0 d-flex align-items-start text-left justify-content-center text-green">
                                                <span class="d-block relative">▲</span>+0.8%
                                            </p>

                                        </div>
                                    </div>


                                </div>
                                <div class="col-md-3 col-6 d-flex align-items-stretch">
                                    <div class="card reset-card widget-card summary-card summary-card-hover justify-content-between p-3">
                                        <div class="img-cont border-brand-on">
                                            <i class="fa-solid fa-arrow-up-wide-short"></i>
                                        </div>
                                        <h4 class="m-0 mt-3 card-title text-grey text-sm text-left">
                                            Total Matching Amount
                                        </h4>
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0 text-left text-sm">Rs.2.63 CR</p>
                                            <p class="m-0 d-flex align-items-start text-left justify-content-center text-green">
                                                <span class="d-block relative">▲</span>+0.8%
                                            </p>

                                        </div>
                                    </div>


                                </div>

                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card reset-card box-shadow p-3 mb-4">
                                        <div class="card-title d-flex justify-content-between">
                                            <h4> Top Gainers </h4>

                                        </div>
                                        <div class="table-responsive">
                                            <table class="table number-table table-hover table-green">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"> Company </th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Previous Close </th>
                                                        <th scope="col">Turnover</th>
                                                        <th scope="col">% Change</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="tr-hover">
                                                        <td>ADBL</td>
                                                        <td>200</td>
                                                        <td>210</td>
                                                        <td>210</td>
                                                        <td> <span class="text-green"> 5% </span> </td>
                                                    </tr>
                                                    <tr class="tr-hover">
                                                        <td>PLI</td>
                                                        <td>250</td>
                                                        <td>260</td>
                                                        <td>260</td>
                                                        <td> <span class="text-green"> 2% </span> </td>
                                                    </tr>

                                                    <tr class="tr-hover">
                                                        <td>NIC</td>
                                                        <td>120</td>
                                                        <td>130</td>
                                                        <td>130</td>

                                                        <td> <span class="text-green"> 4% </span> </td>
                                                    </tr>
                                                    <tr class="tr-hover">
                                                        <td>ULI</td>
                                                        <td>320</td>
                                                        <td>340</td>
                                                        <td>340</td>
                                                        <td> <span class="text-green"> 2% </span> </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>

                                        <div class="text-center">
                                            <a href="#" class="c-green text-decoration-none"> View All </a>
                                        </div>

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card reset-card box-shadow p-3 mb-4">
                                        <div class="card-title d-flex justify-content-between">
                                            <h4> Top Losers </h4>

                                        </div>
                                        <div class="table-responsive">
                                            <table class="table number-table table-hover table-red">
                                                <thead>
                                                    <tr>
                                                        <th scope="col"> Company </th>
                                                        <th scope="col">Price</th>
                                                        <th scope="col">Previous Close </th>
                                                        <th scope="col">Turnover</th>
                                                        <th scope="col">% Change</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="tr-hover">
                                                        <td>ADBL</td>
                                                        <td>200</td>
                                                        <td>210</td>
                                                        <td>210</td>
                                                        <td> <span class="text-red"> 5% </span> </td>
                                                    </tr>
                                                    <tr class="tr-hover">
                                                        <td>PLI</td>
                                                        <td>250</td>
                                                        <td>260</td>
                                                        <td>260</td>
                                                        <td> <span class="text-red"> 2% </span> </td>
                                                    </tr>

                                                    <tr class="tr-hover">
                                                        <td>NIC</td>
                                                        <td>120</td>
                                                        <td>130</td>
                                                        <td>130</td>

                                                        <td> <span class="text-red"> 4% </span> </td>
                                                    </tr>
                                                    <tr class="tr-hover">
                                                        <td>ULI</td>
                                                        <td>320</td>
                                                        <td>340</td>
                                                        <td>340</td>
                                                        <td> <span class="text-red"> 2% </span> </td>
                                                    </tr>

                                                </tbody>
                                            </table>

                                        </div>

                                        <div class="text-center">
                                            <a href="#" class="c-green text-decoration-none"> View All </a>
                                        </div>

                                    </div>
                                </div>

                            </div>

                        </div>
                        <div class="tab-pane fade" id="contact-tab-pane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">
                            <div class="card box-shadow border-0 p-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="table-responsive">
                                            <table class="table table-hover number-table">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" width="5%">#</th>
                                                        <th scope="col" width="20%">Company </th>
                                                        <th scope="col">Qty</th>

                                                        <th scope="col" class="text-end">Rate</th>
                                                        <th scope="col" class="text-end">Amount</th>
                                                        <th scope="col" class="text-end">%of Transaction</th>


                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr class="tr-hover">
                                                        <th>1</th>
                                                        <td> <a href="#" class="symbol"> API </a> </td>
                                                        <td> 200 </td>
                                                        <td class="text-end">
                                                            <p class="m-0">
                                                                600
                                                            </p>
                                                        </td>

                                                        <td class="text-end">
                                                            <p class="m-0">Rs.1946.63</p>

                                                        </td>
                                                        <td class="text-end"> 213,241,682.50 </td>
                                                    </tr>
                                                    <tr class="tr-hover">
                                                        <th>2</th>
                                                        <td> <a href="#" class="symbol"> NABIL </a> </td>
                                                        <td> 200 </td>
                                                        <td class="text-end">
                                                            <p class="m-0">
                                                                1020
                                                            </p>
                                                        </td>

                                                        <td class="text-end">
                                                            <p class="m-0">Rs.4946.63</p>

                                                        </td>
                                                        <td class="text-end"> 53,241,682.50 </td>
                                                    </tr>

                                                    <tr class="tr-hover">
                                                        <th>3</th>
                                                        <td> <a href="#" class="symbol"> NICASIA </a> </td>
                                                        <td> 500 </td>
                                                        <td class="text-end">
                                                            <p class="m-0">
                                                                900
                                                            </p>
                                                        </td>

                                                        <td class="text-end">
                                                            <p class="m-0">Rs.7946.63</p>

                                                        </td>
                                                        <td class="text-end"> 11,241,682.50 </td>
                                                    </tr>

                                                    <tr class="tr-hover">
                                                        <th>4</th>
                                                        <td> <a href="#" class="symbol"> PLI </a> </td>
                                                        <td> 400 </td>
                                                        <td class="text-end">
                                                            <p class="m-0">
                                                                600
                                                            </p>
                                                        </td>

                                                        <td class="text-end">
                                                            <p class="m-0">Rs.746.63</p>

                                                        </td>
                                                        <td class="text-end"> 4,241,682.50 </td>
                                                    </tr>

                                                    <tr class="tr-hover">
                                                        <th>5</th>
                                                        <td> <a href="#" class="symbol"> ULI </a> </td>
                                                        <td> 500 </td>
                                                        <td class="text-end">
                                                            <p class="m-0">
                                                                700
                                                            </p>
                                                        </td>

                                                        <td class="text-end">
                                                            <p class="m-0">Rs.1546.63</p>

                                                        </td>
                                                        <td class="text-end"> 66,241,682.50 </td>
                                                    </tr>


                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="rating-tab-pane" role="tabpanel" aria-labelledby="rating-tab" tabindex="0">
                            <div class="card box-shadow border-0 p-3">
                                <h3> KASE & Reviews for Naasa Securities Co. Ltd.</h3>

                                <p>Customer service, usability, cost, and average scores are used to assign ratings. Reviews that help you better understand a broker are based on both positive and negative characteristics of the broker.</p>

                                <div class="row align-items-center mt-4">
                                    <div class="col-md-4 col-6 pl-md-0">
                                        <p class="mb-0 text-muted text-xs">Charges</p>
                                        <ul class="list-unstyled mb-0 d-flex star-group">
                                            <li>
                                                <img src="img/star.svg" alt="">
                                            </li>
                                            <li>
                                                <img src="img/star.svg" alt="">
                                            </li>
                                            <li>
                                                <img src="img/star.svg" alt="">
                                            </li>
                                            <li>
                                                <img src="img/star-grey.svg" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <p class="mb-0 text-muted text-xs">Usability</p>
                                        <ul class="list-unstyled mb-0 d-flex star-group">
                                            <li>
                                                <img src="img/star.svg" alt="">
                                            </li>
                                            <li>
                                                <img src="img/star.svg" alt="">
                                            </li>
                                            <li>
                                                <img src="img/star.svg" alt="">
                                            </li>
                                            <li>
                                                <img src="img/star-grey.svg" alt="">
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-4 col-6">
                                        <p class="mb-0 text-muted text-xs"> Customer Services </p>
                                        <ul class="list-unstyled mb-0 d-flex star-group">
                                            <li>
                                                <img src="img/star.svg" alt="">
                                            </li>
                                            <li>
                                                <img src="img/star.svg" alt="">
                                            </li>
                                            <li>
                                                <img src="img/star.svg" alt="">
                                            </li>
                                            <li>
                                                <img src="img/star-grey.svg" alt="">
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>

                            <div class="card box-shadow border-0 p-3">
                                <h3> Charges </h3>
                                <ul class="list-unstyled mb-2 d-flex star-group">
                                    <li>
                                        <img src="img/star.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/star.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/star.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/star-grey.svg" alt="">
                                    </li>
                                </ul>
                                <p> Customer service, usability, cost, and average scores are used to assign ratings. Reviews that help you better understand a broker are based on both positive and negative characteristics of the broker.</p>
                            </div>

                            <div class="card box-shadow border-0 p-3">
                                <h3> Usability </h3>
                                <ul class="list-unstyled mb-2 d-flex star-group">
                                    <li>
                                        <img src="img/star.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/star.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/star.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/star-grey.svg" alt="">
                                    </li>
                                </ul>
                                <p> Customer service, usability, cost, and average scores are used to assign ratings. Reviews that help you better understand a broker are based on both positive and negative characteristics of the broker.</p>
                            </div>

                            <div class="card box-shadow border-0 p-3">
                                <h3> Customer Services </h3>
                                <ul class="list-unstyled mb-2 d-flex star-group">
                                    <li>
                                        <img src="img/star.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/star.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/star.svg" alt="">
                                    </li>
                                    <li>
                                        <img src="img/star-grey.svg" alt="">
                                    </li>
                                </ul>
                                <p> Customer service, usability, cost, and average scores are used to assign ratings. Reviews that help you better understand a broker are based on both positive and negative characteristics of the broker.</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="col-md-3" id="sidebarWrap">
                <div id="sidebar">
                    <div class="card box-shadow border-0 p-3 features-card">
                        <div class="d-flex justify-content-between">
                            <h4> Summmary </h4>
                            <small class="text-muted"> As of Dec 21, 2022 </small>
                        </div>
    
    
                        <ul class="list-unstyled mt-3 side-widgets">
                            <li class="">
                                <div class="d-flex align-items-center border-0 widget-card summary-card p-2 mb-0">
                                    <div class="img-cont border-brand-on me-2 bg-brand-tertiary-red">
                                        <i class="fa-solid fa-chart-line"></i>
                                    </div>
    
                                    <div class="">
                                        <h4 class="m-0 card-title text-grey text-sm text-left">
                                            Total Turnover
                                        </h4>
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0 text-left text-sm">Rs.72.63 CR</p>
    
    
                                        </div>
    
                                    </div>
                                </div>
    
    
    
    
                            </li>
    
                            <li class="">
                                <div class="d-flex align-items-center border-0 widget-card summary-card p-2 mb-0">
                                    <div class="img-cont border-brand-on me-2 bg-brand-tertiary-grey">
                                        <i class="fa-solid fa-bag-shopping"></i>
                                    </div>
    
                                    <div class="">
                                        <h4 class="m-0 card-title text-grey text-sm text-left">
                                            Total Purchase Amount
                                        </h4>
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0 text-left text-sm">Rs.32.63 CR</p>
    
                                        </div>
    
                                    </div>
                                </div>
    
                            </li>
    
                            <li class="">
                                <div class="d-flex align-items-center border-0 widget-card summary-card p-2 mb-0">
                                    <div class="img-cont border-brand-on me-2 bg-brand-tertiary-gold">
                                        <i class="fa-solid fa-money-bill-trend-up"></i>
                                    </div>
    
                                    <div class="">
                                        <h4 class="m-0 card-title text-grey text-sm text-left">
                                            Total Sales Amount
                                        </h4>
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0 text-left text-sm">Rs.2.63 CR</p>
    
    
                                        </div>
    
                                    </div>
                                </div>
    
                            </li>
    
                            <li class="">
                                <div class="d-flex align-items-center border-0 widget-card summary-card p-2 mb-0">
                                    <div class="img-cont border-brand-on me-2 bg-brand-tertiary-green">
                                        <i class="fa-solid fa-arrow-up-wide-short"></i>
                                    </div>
    
                                    <div class="">
                                        <h4 class="m-0 card-title text-grey text-sm text-left">
                                            Total Matching Amount
                                        </h4>
                                        <div class="d-flex justify-content-between">
                                            <p class="m-0 text-left text-sm">Rs.1.63 CR</p>
    
    
                                        </div>
    
                                    </div>
                                </div>
                            </li>
    
                        </ul>
                    </div>
    
                    <div class="card box-shadow border-0 p-3 features-card">
                        <h4> Additional Features </h4>
                        <ul class="list-unstyled features-list mt-3">
                            <li>
                                <img src="img/check.svg" alt="">
                                <span>3 in 1 A/C</span>
                            </li>
                            <li>
                                <img src="img/check.svg" alt="">
                                <span>Advisory</span>
                            </li>
                            <li>
                                <img src="img/check.svg" alt="">
                                <span>PMS</span>
                            </li>
                            <li>
                                <img src="img/check.svg" alt="">
                                <span>Free Researh Reports</span>
                            </li>
                        </ul>
                        <h4> Other Investment Options</h4>
                        <ul class="list-unstyled features-list mt-3">
                            <li>
                                <img src="img/check.svg" alt="">
                                <span>Mutual Fund</span>
                            </li>
                            <li>
                                <img src="img/check.svg" alt="">
                                <span>Bonds and Debenture</span>
                            </li>
                            <li>
                                <img src="img/check.svg" alt="">
                                <span>Equity</span>
                            </li>
    
                        </ul>
                    </div>
    
                   

                </div>


            </div>


        </div>
    </div>
</section>

<!-- Modal -->
<div class="modal brand-modal fade" id="appliedModal" tabindex="-1" aria-labelledby="appliedModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="appliedModalLabel">Applied User Status</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" class="row g-3">
                    <div class="col-md-12">
                        <label for="inputText" class="form-label">Fullname</label>
                        <input type="text" class="form-control" id="inputText">
                    </div>

                    <div class="col-md-12">
                        <label for="inputText" class="form-label">Email</label>
                        <input type="email" class="form-control" id="inputText">
                    </div>

                    <div class="col-md-6">
                        <label for="inputPhone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="inputPhone">
                    </div>

                    <div class="col-md-6">
                        <label for="inputAltPhone" class="form-label">Alternate Phone</label>
                        <input type="text" class="form-control" id="inputAltPhone">
                    </div>


                    <div class="mt-3">
                        <button type="button" class="btn btn-brand btn-brand-primary">Submit</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>


<?php include 'components/footer.php'; ?>