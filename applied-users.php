<!-- header starts -->
<?php include 'components/header.php'; ?>
<!-- header ends -->

<section class="main-sm bg-grey analysis-section">
    <div class="container">
        <div class="row mb-4">
            <div class="col-md-9">
                <div class="p-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card border-0 p-3">
                                <h3>Applied Users</h3>
                                <table class="table table-hover number-table table-grey table-sm">
                                    <thead>
                                        <tr>
                                            <th scope="col" width="5%"> # </th>
                                            <th scope="col" width="15%"> Date</th>
                                            <th scope="col" width="">Name</th>
                                            <th scope="col">Email</th>
                                            <th scope="col" class="text-end">Status</th>
                                            <th scope="col" class="text-end">Action </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="tr-hover">
                                            <td> 1 </td>
                                            <td> Dec 15,2022 </td>
                                            <td class="">
                                                <div class="user-banner">
                                                    <div class="user">
                                                        <div class="avatar">
                                                            <img src="https://randomuser.me/api/portraits/men/86.jpg">

                                                        </div>
                                                        <h6 class="mb-0">Ram Krishna Dhakal</h6>
                                                    </div>
                                                    <button class="btn dropdown"><i class="ri-more-line"></i></button>
                                                </div>
                                            </td>
                                            <td class=""> ramkrishnadhakal@gmail.com</td>
                                            <td class="text-end">

                                                <span class="badge text-bg-light">Pending</span>

                                            </td>
                                            <td class="text-end">
                                                <a href="" data-bs-toggle="modal" data-bs-target="#appliedModal"> <i class="fa fa-edit"> </i> </a>
                                            </td>


                                        </tr>


                                        <tr class="tr-hover">
                                            <td> 2 </td>
                                            <td> Dec 20,2022 </td>
                                            <td class="">
                                                <div class="user-banner">
                                                    <div class="user">
                                                        <div class="avatar" style="background-color:#AEE0B9;border-color:#5DC172; color:#34b14f">
                                                            KM

                                                        </div>
                                                        <h6 class="mb-0">Krishna Bahadur Mahora</h6>
                                                    </div>
                                                    <button class="btn dropdown"><i class="ri-more-line"></i></button>
                                                </div>
                                            </td>
                                            <td class=""> iamkrishna124@gmail.com</td>
                                            <td class="text-end">

                                                <span class="badge text-bg-success">Success</span>

                                            </td>
                                            <td class="text-end">
                                                <a href=""> <i class="fa fa-edit"> </i> </a>
                                            </td>


                                        </tr>





                                    </tbody>
                                </table>

                            </div>


                        </div>


                    </div>


                </div>
            </div>

            <div class="col-md-3">
                <div class="tulkey-cover">
                    <img src="img/best-broker-tulkey.png" alt="tulke-icon" class="img-fluid">

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
                <form action="">
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label"> Change Status </label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Pending</option>
                            <option value="1">Completed</option>
                            <option value="2">Rejected</option>
                           
                        </select>
                    </div>

                    <div class="mt-3">
                        <button type="button" class="btn btn-brand btn-brand-primary">Submit</button>

                    </div>
                </form>
            </div>

        </div>
    </div>
</div>

<!-- footer starts -->
<?php include 'components/footer.php'; ?>
<!-- footer ends -->