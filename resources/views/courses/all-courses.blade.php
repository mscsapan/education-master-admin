<!DOCTYPE html>
<html lang="en">

@include('custom.content-header')

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="{{ url('/') }}" class="logo"><img src="images/logo1.png" alt="" />
                </a>
            </div>
            <!--== SEARCH ==-->
            <div class="col-md-6 col-sm-6 mob-hide">
                <form class="app-search">
                    <input type="text" placeholder="Search..." class="form-control">
                    <a href="#"><i class="fa fa-search"></i></a>
                </form>
            </div>
            <!--== NOTIFICATION ==-->
            <div class="col-md-2 tab-hide">
                <div class="top-not-cen">
                    <a class='waves-effect btn-noti' href="admin-all-enquiry.html" title="all enquiry messages"><i
                            class="fa fa-commenting-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-course-enquiry.html" title="course booking messages"><i
                            class="fa fa-envelope-o" aria-hidden="true"></i><span>5</span></a>
                    <a class='waves-effect btn-noti' href="admin-admission-enquiry.html" title="admission enquiry"><i
                            class="fa fa-tag" aria-hidden="true"></i><span>5</span></a>
                </div>
            </div>
            <!--== MY ACCCOUNT ==-->
            <div class="col-md-2 col-sm-3 col-xs-6">
                <!-- Dropdown Trigger -->
                <a class='waves-effect dropdown-button top-user-pro' href='#' data-activates='top-menu'><img
                        src="{{ asset('images/user/6.png') }}" alt="" />My Account <i class="fa fa-angle-down"
                        aria-hidden="true"></i>
                </a>

                <!-- Dropdown Structure -->
                <ul id='top-menu' class='dropdown-content top-menu-sty'>
                    <li><a href="admin-panel-setting.html" class="waves-effect"><i class="fa fa-cogs"
                                aria-hidden="true"></i>Admin Setting</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href="#" class="ho-dr-con-last waves-effect"><i class="fa fa-sign-in"
                                aria-hidden="true"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!--== BODY CONTNAINER ==-->
    <div class="container-fluid sb2">
        <div class="row">
            <div class="sb2-1">
                <!--== USER INFO ==-->
                <div class="sb2-12">
                    <ul>
                        <li><img src="images/placeholder.jpg" alt="">
                        </li>
                        <li>
                            <h5>Victoria Baker <span> Santa Ana, CA</span></h5>
                        </li>
                        <li></li>
                    </ul>
                </div>
                <!--== LEFT MENU ==-->
                @include('custom.left-menu')
            </div>

            <!--== BODY INNER CONTAINER ==-->
            <div class="sb2-2">
                <!--== breadcrumbs ==-->
                <div class="sb2-2-2">
                    <ul>
                        <li><a href="index-2.html"><i class="fa fa-home" aria-hidden="true"></i> Home</a>
                        </li>
                        <li class="active-bre"><a href="#"> Dashboard</a>
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
                                    <h4>Course Details</h4>
                                    <p>All about courses, program structure, fees, best course lists (ranking),
                                        syllabus, teaching techniques and other details.</p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Course Name</th>
                                                    <th>Category</th>
                                                    <th>Durations</th>
                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Total Seats</th>
                                                    <th>Status</th>
                                                    <th>View</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-1.jpg"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span
                                                                class="list-enq-name">Aerospace Engineering</span><span
                                                                class="list-enq-city">Illunois, United
                                                                States</span></a>
                                                    </td>
                                                    <td>Engineering</td>
                                                    <td>60 Days(420hrs)</td>
                                                    <td>03 Jun 2018</td>
                                                    <td>12 Aug 2018</td>
                                                    <td>74</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-course-details.html" class="ad-st-view">Edit</a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-5.jpg"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span
                                                                class="list-enq-name">Fashion Technology</span><span
                                                                class="list-enq-city">Illunois, United
                                                                States</span></a>
                                                    </td>
                                                    <td>Fashion</td>
                                                    <td>30 Days(420hrs)</td>
                                                    <td>01 Nov 2018</td>
                                                    <td>01 Dec 2018</td>
                                                    <td>30</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"
                                                            class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-2.jpg"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span
                                                                class="list-enq-name">Agriculture Courses</span><span
                                                                class="list-enq-city">Illunois, United
                                                                States</span></a>
                                                    </td>
                                                    <td>Agriculture</td>
                                                    <td>25 Days(420hrs)</td>
                                                    <td>05 Jan 2018</td>
                                                    <td>25 Jan 2018</td>
                                                    <td>25</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"
                                                            class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-3.jpg"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span
                                                                class="list-enq-name">Marine Engineering</span><span
                                                                class="list-enq-city">Illunois, United
                                                                States</span></a>
                                                    </td>
                                                    <td>Ocean / Marine</td>
                                                    <td>06 Months</td>
                                                    <td>12 Feb 2018</td>
                                                    <td>14 Aug 2018</td>
                                                    <td>68</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"
                                                            class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-4.jpg"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span
                                                                class="list-enq-name">Building, Construction
                                                                Management</span><span class="list-enq-city">Illunois,
                                                                United States</span></a>
                                                    </td>
                                                    <td>Construction</td>
                                                    <td>1 Year</td>
                                                    <td>05 Mar 2018</td>
                                                    <td>16 Mar 2018</td>
                                                    <td>72</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"
                                                            class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-1.jpg"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span
                                                                class="list-enq-name">Aerospace Engineering</span><span
                                                                class="list-enq-city">Illunois, United
                                                                States</span></a>
                                                    </td>
                                                    <td>Engineering</td>
                                                    <td>60 Days(420hrs)</td>
                                                    <td>03 Jun 2018</td>
                                                    <td>12 Aug 2018</td>
                                                    <td>74</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"
                                                            class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-5.jpg"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span
                                                                class="list-enq-name">Fashion Technology</span><span
                                                                class="list-enq-city">Illunois, United
                                                                States</span></a>
                                                    </td>
                                                    <td>Fashion</td>
                                                    <td>30 Days(420hrs)</td>
                                                    <td>01 Nov 2018</td>
                                                    <td>01 Dec 2018</td>
                                                    <td>30</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"
                                                            class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-2.jpg"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span
                                                                class="list-enq-name">Agriculture Courses</span><span
                                                                class="list-enq-city">Illunois, United
                                                                States</span></a>
                                                    </td>
                                                    <td>Agriculture</td>
                                                    <td>25 Days(420hrs)</td>
                                                    <td>05 Jan 2018</td>
                                                    <td>25 Jan 2018</td>
                                                    <td>25</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"
                                                            class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-3.jpg"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span
                                                                class="list-enq-name">Marine Engineering</span><span
                                                                class="list-enq-city">Illunois, United
                                                                States</span></a>
                                                    </td>
                                                    <td>Ocean / Marine</td>
                                                    <td>06 Months</td>
                                                    <td>12 Feb 2018</td>
                                                    <td>14 Aug 2018</td>
                                                    <td>68</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"
                                                            class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td><span class="list-img"><img src="images/course/sm-4.jpg"
                                                                alt=""></span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"><span
                                                                class="list-enq-name">Building, Construction
                                                                Management</span><span class="list-enq-city">Illunois,
                                                                United States</span></a>
                                                    </td>
                                                    <td>Construction</td>
                                                    <td>1 Year</td>
                                                    <td>05 Mar 2018</td>
                                                    <td>16 Mar 2018</td>
                                                    <td>72</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="admin-course-details.html"
                                                            class="ad-st-view">Edit</a></td>
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
    <script src="{{ asset('js/main.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/materialize.min.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>
</body>

</html>
