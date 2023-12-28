<!DOCTYPE html>
<html lang="en">

@include('custom.content-header')

<body>
    <!--== MAIN CONTRAINER ==-->
    @include('custom.top-header')

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            @include('custom.left-menu')

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Event Enquiry</a>
                        </li>
                        <li class="page-back"><a href="index-2.html"><i class="fa fa-backward" aria-hidden="true"></i>
                                Back</a>
                        </li>
                    </ul>
                </div>

                <!--== User Details ==-->
                <div class="sb2-2-3">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box-inn-sp">
                                <div class="inn-title">
                                    <h4>Event Enquiry</h4>
                                    <p>All about students like name, student id, phone, email, country, city and more
                                    </p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Name</th>
                                                    <th>Email id</th>
                                                    <th>Phone</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>John smith</td>
                                                    <td>johm_smith@gmail.com</td>
                                                    <td>+10 8415 6352</td>
                                                    <td><a href="admin-view-enquiry.html" class="ad-st-view">View</a>
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
    </div>

    <!--Import jQuery before materialize.js-->
    @include('custom.script')
</body>

</html>
