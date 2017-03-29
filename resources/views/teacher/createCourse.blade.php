@extends('teacher.layout.dashboard')

    @section('pageTitle') New Course | Gyan School @endsection

    @section('pageCss')
        <link href="{{ asset('mentor/css/switchery.css') }}" rel="stylesheet" type="text/css" id="style_color" />
        <link href="{{ asset('mentor/css/bootstrap-tagsinput.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    @endsection

    @section('main-content')
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                <!-- BEGIN PAGE HEADER-->
                <h1 class="page-title">
                        <small></small>
                    </h1>
                <div class="page-bar">
                    <ul class="page-breadcrumb">
                        <li>
                            <i class="icon-home"></i>
                            <a href="{{ route('mentor.dashboard') }}">Dashboard</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Create New Course</span>
                        </li>
                    </ul>
                </div>
                <!-- END PAGE HEADER-->
                <div class="row right-content-wrapper">
                    <form role="form">
                        <div class="col-md-9">
                            <div class="portlet light ">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-note font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">New Course</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" placeholder="Course Title">
                                        </div>
                                        <div class="form-group">
                                            <textarea name="" id="" cols="30" rows="10" style="resize:none;overflow: hidden" class="form-control input-lg" placeholder="Course Description..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <textarea name="" id="" cols="30" rows="10" style="resize:none;overflow: hidden" class="form-control input-lg" placeholder="What people will learn from this course..."></textarea>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control input-lg" data-role="tagsinput" placeholder="Tags">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-actions">
                                    <button type="submit" class="btn blue pull-right">CREATE COURSE</button>
                                </div>
                            </div>
                            
                            <div class="portlet light" id="video-upload-portlet">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-social-youtube font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">Introduction VIDEO</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <video src="video/Ed Sheeran - Perfect.mp4" class="img-responsive video-thumbnail"></video>
                                        <div class="form-group">
                                            <div class="upload-video pull-right">
                                                <input type="file" id="video-uploader">
                                                <label for="video-uploader">Upload Video</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-settings font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">Options</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="">Category</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">-- Select Category --</option>
                                                <option value="">Computer Science</option>
                                                <option value="">Mechanical Engineering</option>
                                                <option value="">Electrical Engineering</option>
                                                <option value="">Business Administration</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Subcategory</label>
                                            <select name="" id="" class="form-control">
                                                <option value="">-- Select Subcategory --</option>
                                                <option value="">Software Engineering</option>
                                                <option value="">Machine Learning</option>
                                                <option value="">Data Scientist</option>
                                                <option value="">Web Development</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Course Duration</label>
                                            <input type="text" class="form-control" placeholder="2 Months, 5 Hours/Week">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet light">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-wallet font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">Price</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <div class="form-group">
                                            <label for="">Cost </label>
                                            <div class="pull-right label-addition">Free
                                                <input type="checkbox" class="js-switch" />
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                ৳
                                            </span>
                                                <input type="number" class="form-control" min="0" placeholder="0">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="">Sale </label>
                                            <div class="pull-right label-addition">
                                                <input type="checkbox" class="js-switch" />
                                            </div>
                                            <div class="clearfix"></div>
                                            <div class="input-group">
                                                <span class="input-group-addon">
                                                ৳
                                            </span>
                                                <input type="number" class="form-control" min="0" placeholder="Sale Price">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="portlet light" id="image-upload">
                                <div class="portlet-title">
                                    <div class="caption font-red-sunglo">
                                        <i class="icon-picture font-red-sunglo"></i>
                                        <span class="caption-subject bold uppercase">FEATURED Image</span>
                                    </div>
                                </div>
                                <div class="portlet-body form">
                                    <div class="form-body">
                                        <img src="{{ asset('mentor/images/placeholder.png') }}" class="img-responsive img-thumbnail" alt="">
                                        <div class="form-group">
                                            <div class="pull-right">
                                                <input type="file" id="image-uploader">
                                                <label for="image-uploader">Upload Image</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <!-- BEGIN FOOTER -->
                <div class="page-footer">
                    <div class="page-footer-inner"> 2017 &copy; All Right Reserved
                        <a target="_blank" href="#">Gyaniscool.com</a>
                    </div>
                </div>
                <!-- END FOOTER -->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
    @endsection
    </div>
    <!-- END CONTAINER -->
    <!-- BEGIN QUICK NAV -->
    <div class="quick-nav-overlay"></div>
    @section('customVar')
        var uploadingImage
        <script>
            var uploadingImageGif = '{{ asset('mentor/images/loading-spinner-grey.gif') }}';
        </script>
    @endsection
    @section('pageJs')
        <script src="{{ asset('mentor/js/jquery.blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mentor/js/blockui.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mentor/js/switchery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('mentor/js/bootstrap-tagsinput.min.js') }}" type="text/javascript"></script>
    @endsection

    @section('customJs')
        <script>
            var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

            elems.forEach(function (html) {
                var switchery = new Switchery(html, {
                    size: 'small',
                    color: '#3598dc'
                });
            });
        </script>
        <script>
            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.video-thumbnail').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                    $('.video-thumbnail').css("width","100%");
                }
            }

            $("#video-uploader").change(function () {
                readURL(this);
            });
        </script>
        <script>
            function readURLimage(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.img-thumbnail').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#image-uploader").change(function () {
                readURLimage(this);
            });
        </script>
    @endsection