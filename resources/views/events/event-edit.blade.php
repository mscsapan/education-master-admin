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
                        <li class="active-bre"><a href="#"> Edit Event</a>
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
                                    <h4>Edit Event</h4>
                                    <p>Here you can edit your website basic details URL, Phone, Email, Address, User and
                                        password and more</p>
                                </div>
                                <div class="tab-inn">
                                    <form>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <input type="text" value="Latinoo College Expo 2018 - DONATION"
                                                    class="validate" required>
                                                <label class="">Event name</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <textarea>Fusce purus mauris, blandit vitae purus eget, viverra volutpat nibh. Nam in elementum nisi, a placerat nisi. Quisque ullamcorper magna in odio rhoncus semper.Sed nec ultricies velit. Aliquam non massa id enim ultrices aliquet a ac tortor.

Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</textarea>
                                                <label class="">Event Descriptions</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" value="Jan 01, 2018" class="validate" required>
                                                <label class="">Date</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" class="validate" value="02:00 PM GMT" required>
                                                <label class="">Time</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s6">
                                                <input type="text" value="New york" class="validate">
                                                <label class="">City</label>
                                            </div>
                                            <div class="input-field col s6">
                                                <input type="text" value="United states" class="validate">
                                                <label class="">Country</label>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="file-field input-field col s12">
                                                <div class="btn admin-upload-btn">
                                                    <span>File</span>
                                                    <input type="file">
                                                </div>
                                                <div class="file-path-wrapper">
                                                    <input class="file-path validate" type="text"
                                                        placeholder="Event image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="input-field col s12">
                                                <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                    style=""><input type="submit" class="waves-button-input"></i>
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
    @include('custom.script')
</body>

</html>
