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
                        <li class="active-bre"><a href="#"> Add page</a>
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
                                <div class="sb2-2-add-blog sb2-2-1">
                                    <h2>Add New Page</h2>
                                    <p>The .table class adds basic styling (light padding and only horizontal dividers)
                                        to a table:</p>

                                    <ul class="nav nav-tabs tab-list">
                                        <li class="active"><a data-toggle="tab" href="#home" aria-expanded="true"><i
                                                    class="fa fa-info" aria-hidden="true"></i> <span>Page
                                                    Detail</span></a>
                                        </li>
                                        <li class=""><a data-toggle="tab" href="#menu1" aria-expanded="false"><i
                                                    class="fa fa-bed" aria-hidden="true"></i> <span>Body</span></a>
                                        </li>
                                        <li class=""><a data-toggle="tab" href="#menu2" aria-expanded="false"><i
                                                    class="fa fa-picture-o" aria-hidden="true"></i> <span>Banner
                                                    Image</span></a>
                                        </li>
                                        <li class=""><a data-toggle="tab" href="#menu3" aria-expanded="false"><i
                                                    class="fa fa-facebook" aria-hidden="true"></i> <span>SEO</span></a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div id="home" class="tab-pane fade active in">
                                            <div class="box-inn-sp">
                                                <div class="inn-title">
                                                    <h4>Page basic info</h4>
                                                    <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                                </div>
                                                <div class="bor">
                                                    <form>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate">
                                                                <label class="">Page Title</label>
                                                            </div>
                                                            <div class="input-field col s12">
                                                                <input type="text" class="validate">
                                                                <label>Page URL</label>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <select>
                                                                    <option value="" disabled selected>Select page
                                                                        Template</option>
                                                                    <option value="">Home</option>
                                                                    <option value="">About</option>
                                                                    <option value="">Course details</option>
                                                                    <option value="">Admission</option>
                                                                    <option value="">Blog</option>
                                                                    <option value="">Contact</option>
                                                                    <option value="">Awards</option>
                                                                    <option value="">Event</option>
                                                                    <option value="">Seminar</option>
                                                                    <option value="">Default</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <select>
                                                                    <option value="" disabled selected>Select
                                                                        Status</option>
                                                                    <option value="1">Publish</option>
                                                                    <option value="1">Pending</option>
                                                                    <option value="1">Active</option>
                                                                    <option value="2">De-Active</option>
                                                                    <option value="3">Delete</option>
                                                                    <option value="3">Privare(password protect)
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="input-field col s3">
                                                                <i
                                                                    class="waves-effect waves-light btn-large waves-input-wrapper ad-page-pre-btn"><a
                                                                        href="index-2.html" target="_blank">Pager
                                                                        Preview</a></i>
                                                            </div>
                                                            <div class="input-field col s2">
                                                                <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                                    style=""><input type="submit"
                                                                        class="waves-button-input" value="Submit"></i>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div id="menu1" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h4>Requirements, feese, student profile and how to apply</h4>
                                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                            </div>
                                            <div class="bor ad-cou-deta-h4">
                                                <form>
                                                    <h4>Content 1:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>Title:</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <textarea class="materialize-textarea"></textarea>
                                                            <label>Descriptions:</label>
                                                        </div>
                                                    </div>
                                                    <h4>Content 2:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>Title:</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <textarea class="materialize-textarea"></textarea>
                                                            <label>Descriptions:</label>
                                                        </div>
                                                    </div>
                                                    <h4>Content 3:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>Title:</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <textarea class="materialize-textarea"></textarea>
                                                            <label>Descriptions:</label>
                                                        </div>
                                                    </div>
                                                    <h4>Content 4:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>Title:</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <textarea class="materialize-textarea"></textarea>
                                                            <label>Descriptions:</label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                                style=""><input type="submit"
                                                                    class="waves-button-input" value="Submit"></i>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div id="menu2" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h4>Photo Gallery</h4>
                                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                            </div>
                                            <div class="bor">
                                                <form action="#">
                                                    <div class="file-field input-field">
                                                        <div class="btn admin-upload-btn">
                                                            <span>File</span>
                                                            <input type="file" multiple="">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text"
                                                                placeholder="Upload course banner image">
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                                style=""><input type="submit"
                                                                    class="waves-button-input" value="Upload"></i>
                                                        </div>
                                                    </div>

                                                </form>
                                            </div>
                                        </div>
                                        <div id="menu3" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h4>SEO</h4>
                                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                            </div>
                                            <div class="bor ad-cou-deta-h4">
                                                <form>
                                                    <h4>Meta title and descriptions:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>Title:</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>Keywords:</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <textarea class="materialize-textarea"></textarea>
                                                            <label>Descriptions:</label>
                                                        </div>
                                                    </div>
                                                    <h4>Structure Data 1:</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate" required>
                                                            <label>Title:</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <textarea class="materialize-textarea"></textarea>
                                                            <label>Descriptions:</label>
                                                        </div>
                                                    </div>
                                                    <h4>Rel:publisher</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate"
                                                                value="https://plus.google.com/u/0/843576742812"
                                                                required>
                                                            <label>Google publisger URL:</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate"
                                                                value="http://websitename.com/" required>
                                                            <label>Canonical URL:</label>
                                                        </div>
                                                    </div>
                                                    <h4>Twitter:card</h4>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate"
                                                                value="http://websitename.com" required>
                                                            <label>Site name:</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <input type="text" class="validate"
                                                                value="Education Master" required>
                                                            <label>Site title:</label>
                                                        </div>
                                                        <div class="input-field col s12">
                                                            <textarea class="materialize-textarea"></textarea>
                                                            <label>Description:</label>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                                style=""><input type="submit"
                                                                    class="waves-button-input" value="Submit"></i>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div id="menu4" class="tab-pane fade">
                                            <div class="inn-title">
                                                <h4>Contact Info</h4>
                                                <p>Airtport Hotels The Right Way To Start A Short Break Holiday</p>
                                            </div>
                                            <div class="bor">
                                                <form>
                                                    <div class="row">
                                                        <div class="input-field col s6">
                                                            <input id="t5-n1" type="text" class="validate">
                                                            <label for="t5-n1">Contact Name</label>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <input id="t5-n2" type="text" class="validate">
                                                            <label for="t5-n2">Alter Contact Name</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s6">
                                                            <input id="t5-n3" type="number" class="validate">
                                                            <label for="t5-n3">Phone</label>
                                                        </div>
                                                        <div class="input-field col s6">
                                                            <input id="t5-n4" type="number" class="validate">
                                                            <label for="t5-n4">Mobile</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input id="t5-n5" type="email" class="validate">
                                                            <label for="t5-n5">Email</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <textarea id="t5-n6" class="materialize-textarea"></textarea>
                                                            <label for="t5-n6">Listing Descriptions:</label>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <i class="waves-effect waves-light btn-large waves-input-wrapper"
                                                                style=""><input type="submit"
                                                                    class="waves-button-input" value="Upload"></i>
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
            </div>

        </div>
    </div>

    <!--Import jQuery before materialize.js-->
    @include('custom.script')
</body>

</html>
