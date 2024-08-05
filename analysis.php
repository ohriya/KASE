<?php include 'components/header.php'; ?>

<section class="main-sm bg-grey">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-12">
                <h2>Broker Analysis</h2>
                <p>These reports are designed to provide performance insights and information to help you track and manage your portfolio.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="card box-shadow-lg analysis-card border-0 p-3">
                <a href="./breakdown.php" class="divLink">Link</a>
                    <div class="img-wrap">
                        <img src="img/analysis.png" class="img-fluid" alt="">
                    </div>
                    <div class="analysis-card-body">
                        <h3> Brokers Breakdown <span class="ms-2"><i class="fa fa-chevron-right"></i></span> </h3> 

                        <p>Get comprehensive insights into each broker's offerings, fees, and performance to make informed decisions.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card box-shadow-lg analysis-card border-0 p-3">
                <a href="./stock-wise.php" class="divLink">Link</a>
                    <div class="img-wrap">
                        <img src="img/monitoring.png" class="img-fluid" alt="">
                    </div>
                    <div class="analysis-card-body">
                        <h3> Stock wise Broker <span class="ms-2"><i class="fa fa-chevron-right"></i></span></h3>

                        <p>Discover which brokers excel in trading specific stocks with our detailed analysis and recommendations.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card box-shadow-lg analysis-card border-0 p-3">
                    <a href="./favourite.php" class="divLink">Link</a>
                    <div class="img-wrap">
                        <img src="img/trend.png" class="img-fluid" alt="">
                    </div>
                    <div class="analysis-card-body">
                        <h3> Broker Favourites <span class="ms-2"><i class="fa fa-chevron-right"></i></span></h3>

                        <p>See which brokers are the most favored by our community based on user ratings and reviews.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<?php include 'components/footer.php'; ?>