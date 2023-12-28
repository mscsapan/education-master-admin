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
                        <li class="active-bre"><a href="#"> All pages</a>
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
                                    <h4>All Frontend Pages</h4>
                                    <p>All about students like name, student id, phone, email, country, city and more
                                    </p>
                                </div>
                                <div class="tab-inn">
                                    <div class="table-responsive table-desi">
                                        <table class="table table-hover">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Page Title</th>
                                                    <th>URL Name</th>
                                                    <th>Create Date</th>
                                                    <th>Status</th>
                                                    <th>Live Preview</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Home page</td>
                                                    <td>index.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a>
                                                    </td>
                                                    <td><a href="{{ route('admin.edit-page') }}"
                                                            class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>About page</td>
                                                    <td>about.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a>
                                                    </td>
                                                    <td><a href="{{ route('admin.edit-page') }}"
                                                            class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>All course page</td>
                                                    <td>all-course.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a>
                                                    </td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Course detail page</td>
                                                    <td>course-details.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a>
                                                    </td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Awards page</td>
                                                    <td>awards.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a>
                                                    </td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Admission page</td>
                                                    <td>admission.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a>
                                                    </td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>7</td>
                                                    <td>Seminar page</td>
                                                    <td>seminar.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a>
                                                    </td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>8</td>
                                                    <td>Events</td>
                                                    <td>events.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a>
                                                    </td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>9</td>
                                                    <td>Student profile</td>
                                                    <td>student-profile.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a>
                                                    </td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
                                                </tr>
                                                <tr>
                                                    <td>10</td>
                                                    <td>Student dashboard</td>
                                                    <td>student-dashboard.html</td>
                                                    <td>20 jan 2018</td>
                                                    <td>
                                                        <span class="label label-success">Active</span>
                                                    </td>
                                                    <td><a href="#!" target="_blank" class="ad-st-view">View</a>
                                                    </td>
                                                    <td><a href="admin-page-edit.html" class="ad-st-view">Edit</a></td>
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
