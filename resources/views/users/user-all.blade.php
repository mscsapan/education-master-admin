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
                        <li class="active-bre"><a href="#"> Users(Students)</a>
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
                                    <h4>Student Details</h4>
                                    <p>All about students like name, student id, phone, email, country, city and more
                                    </p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Email</th>
                                                    <th>Country</th>
                                                    <th>Id</th>
                                                    <th>Date of birth</th>
                                                    <th>Status</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img
                                                                src="{{ asset('images/user/1.png') }}"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha
                                                                Hogan</span><span class="list-enq-city">Illunois,
                                                                United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>united states</td>
                                                    <td>ST17241</td>
                                                    <td>03 Jun 1990</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-student-details.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Lucas
                                                                Caden</span><span class="list-enq-city">Illunois,
                                                                United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>lucas@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST10231</td>
                                                    <td>16 Feb 1987</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-student-details.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan
                                                                Oliver</span><span class="list-enq-city">Illunois,
                                                                United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
                                                    <td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-student-details.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/5.png"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan
                                                                Oliver</span><span class="list-enq-city">Illunois,
                                                                United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
                                                    <td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-student-details.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/1.png"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Marsha
                                                                Hogan</span><span class="list-enq-city">Illunois,
                                                                United States</span></a>
                                                    </td>
                                                    <td>+01 3214 6522</td>
                                                    <td>chadengle@dummy.com</td>
                                                    <td>united states</td>
                                                    <td>ST17241</td>
                                                    <td>03 Jun 1990</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-student-details.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/2.png"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Lucas
                                                                Caden</span><span class="list-enq-city">Illunois,
                                                                United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>lucas@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST10231</td>
                                                    <td>16 Feb 1987</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-student-details.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/4.png"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan
                                                                Oliver</span><span class="list-enq-city">Illunois,
                                                                United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
                                                    <td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-student-details.html" class="ad-st-view">View</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/user/5.png"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="#"><span class="list-enq-name">Ethan
                                                                Oliver</span><span class="list-enq-city">Illunois,
                                                                United States</span></a>
                                                    </td>
                                                    <td>+01 8574 6854</td>
                                                    <td>Ethan@gmail.com</td>
                                                    <td>Illinois</td>
                                                    <td>ST32168</td>
                                                    <td>21 Jun 1992</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-student-details.html" class="ad-st-view">View</a>
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
