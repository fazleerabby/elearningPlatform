@extends('teacher.layout.dashboard')

        @section('pageTitle') Course Content | Gyan School @endsection

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
                            <a href="dashboard.html">Dashboard</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <a href="content.html">Content</a>
                            <i class="fa fa-angle-right"></i>
                        </li>
                        <li>
                            <span>Course Content</span>
                        </li>
                    </ul>
                    <div class="page-toolbar">
                        <div class="btn-group pull-right">
                            <a type="button" href="#createChapter" class="btn btn-fit-height grey-salt dropdown-toggle" data-toggle="modal"> New Chapter &nbsp;
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- END PAGE HEADER-->
                <div class="row right-content-wrapper" id="courseContentBody">
                    <a href="courseLesson.html">
                        <div class="col-md-12">
                            <div class="portlet light">
                                <div class="chapter-title pull-left">
                                    <h2>Introduction To Computer Science</h2>
                                </div>
                                <div class="chapter-lesson pull-right">
                                    <h4>
                                        <i class="icon-book-open"></i>
                                        &nbsp; 10 Lessons &nbsp; &nbsp;
                                        <a class="deleteChapter" data-toggle="modal">
                                            <i class="icon-close"></i>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="courseLesson.html">
                        <div class="col-md-12">
                            <div class="portlet light">
                                <div class="chapter-title pull-left">
                                    <h2>Computer Science And Its Application</h2>
                                </div>
                                <div class="chapter-lesson pull-right">
                                    <h4>
                                        <i class="icon-book-open"></i>
                                        &nbsp; 8 Lessons &nbsp; &nbsp;
                                        <a href="" class="deleteChapter" data-toggle="modal" >
                                            <i class="icon-close"></i>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="courseLesson.html">
                        <div class="col-md-12">
                            <div class="portlet light">
                                <div class="chapter-title pull-left">
                                    <h2>Computer Programming</h2>
                                </div>
                                <div class="chapter-lesson pull-right">
                                    <h4>
                                        <i class="icon-book-open"></i>
                                        &nbsp; 5 Lessons &nbsp; &nbsp;
                                        <a href="" class="deleteChapter" data-toggle="modal" >
                                            <i class="icon-close"></i>
                                        </a>
                                    </h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <!-- BEGIN FOOTER -->
                <div class="page-footer">
                    <div class="page-footer-inner"> 2017 &copy; All Right Reserved
                        <a target="_blank" href="#">Gyaniscool.com</a>
                    </div>
                </div>
                <!-- END FOOTER -->
                <div class="modal fade" id="createChapter" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Create New Chapter</h4>
                            </div>
                            <div class="modal-body">
                                <form action="">
                                    <div class="form-group">
                                        <label for="">
                                            <h3>Chapter Name</h3></label>
                                        <input type="text" class="form-control input-lg" id="chapter-name" placeholder="">
                                    </div>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn green" data-dismiss="modal" id="add-chapter">ADD CHAPTER</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
                <div class="modal fade" id="deleteChapterModal" tabindex="-1" role="basic" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                                <h4 class="modal-title">Delete Chapter</h4>
                            </div>
                            <div class="modal-body">
                                <h3></h3>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn green" data-dismiss="modal">NO</button>
                                <button type="button" class="btn green" data-dismiss="modal" id="confirm-delete">YES</button>
                            </div>
                        </div>
                        <!-- /.modal-content -->
                    </div>
                    <!-- /.modal-dialog -->
                </div>
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->

        @endsection

    @section('customJs')
        <script>
            var deleteContent;
            $('#add-chapter').click(function () {
                var chapterName = $('#chapter-name').val();
                var lesson = "0";
                var chapterContent = '<a href=""><div class="col-md-12"><div class="portlet light"><div class="chapter-title pull-left"><h2>'+chapterName+'</h2></div><div class="chapter-lesson pull-right"><h4><i class="icon-book-open"></i>&nbsp'+lesson+' Lessons &nbsp &nbsp<a href="#" class="deleteChapter"><i class="icon-close"></i></a></h4></div></div></div></a>';

                $('#courseContentBody').append(chapterContent);


            });

            $("#courseContentBody").on('click', '.deleteChapter', function (e){
                e.preventDefault();
                $('#deleteChapterModal').modal();
                deleteContent = $(this).parent().parent().parent();
                var title ='Are You Sure To Delete '+ $(this).parent().parent().parent().find('.chapter-title h2').html() +'?';
                $('#deleteChapterModal .modal-dialog .modal-content .modal-body h3').html(title);
            });

            $('#confirm-delete').click(function(){
                $(deleteContent).remove();
            });
        </script>
    @endsection