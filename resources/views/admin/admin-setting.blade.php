<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

@include('custom.content-header')

<body>
    <!--== MAIN CONTRAINER ==-->
    <div class="container-fluid sb1">
        <div class="row">
            <!--== LOGO ==-->
            <div class="col-md-2 col-sm-3 col-xs-6 sb1-1">
                <a href="#" class="btn-close-menu"><i class="fa fa-times" aria-hidden="true"></i></a>
                <a href="#" class="atab-menu"><i class="fa fa-bars tab-menu" aria-hidden="true"></i></a>
                <a href="index-2.html" class="logo"><img src="images/logo1.png" alt="" />
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
                        src="images/user/6.png" alt="" />My Account <i class="fa fa-angle-down"
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
                            <div class="box-inn-sp admin-form">
                                <div class="inn-title">
                                    <h4>Website Setting</h4>
                                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and
                                        password and more</p>
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="first_name" type="text" value="Education Master"
                                                    class="validate" required>
                                                <label for="first_name" class="">Website Title</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="last_name" type="text"
                                                    value="Education master is one of the best educational html template, it's suitable for all education websites like university,college,school,online eEducation,tution center,distance education,computer education"
                                                    class="validate" required>
                                                <label for="last_name" class="">Website descriptions</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="phone" type="number" value="0152417841"
                                                    class="validate" required>
                                                <label for="phone">Phone number</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" class="validate" value="education@master.com"
                                                    required>
                                                <label for="cphone" class="">Email is</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="city" type="text" value="New york"
                                                    class="validate">
                                                <label for="city" class="">City</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="country" type="text" value="United States"
                                                    class="validate">
                                                <label for="country" class="">Country</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input id="password" type="password" value="srtg24356"
                                                    class="validate">
                                                <label for="password" class="">Password</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input id="password1" type="password" value="sdfgh56dfg"
                                                    class="validate">
                                                <label for="password1" class="">Confirm Password</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="www.educationmaster.com"
                                                    class="validate">
                                                <label>Website</label>
                                            </div>
                                            <div class="input-field col s12">
                                                <input type="text" value="www.educationmaster.com/blog"
                                                    class="validate">
                                                <label>Website blog</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                    style=""><input type="submit"
                                                        class="waves-button-input"></i>
                                            </div>
                                        </div>
                                    </form>
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
