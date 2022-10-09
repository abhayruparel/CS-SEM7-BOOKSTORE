<?php
    include("header.php");
?>





<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row bg-title">
                    <div class="col-lg-12">
                        <h4 class="page-title">Inbox</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">Inbox Page</li>
                        </ol>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- row -->
                <div class="row">
                    <!-- Left sidebar -->
                    <div class="col-md-12">
                        <div class="white-box">
                            <h3>Inbox</h3>
                            <hr>
                            <div class="row">
                                <div class="col-lg-2 col-md-3  col-sm-4 col-xs-12 ">
                                    <div class="p-r-20"> <a href="#" class="btn btn-danger btn-block waves-effect waves-light">Compose</a>
                                        <div class="list-group mail-list m-t-20"> <a href="#" class="list-group-item active">Inbox <span class="label label-rouded label-success pull-right">5</span></a> <a href="#" class="list-group-item ">Starred</a> <a href="#" class="list-group-item">Draft <span class="label label-rouded label-warning pull-right">15</span></a> <a href="#" class="list-group-item">Sent Mail</a> <a href="#" class="list-group-item">Trash <span class="label label-rouded label-default pull-right">55</span></a> </div>
                                        <h3 class="panel-title m-t-40 m-b-0">Labels</h3>
                                        <hr class="m-t-5">
                                        <div class="list-group b-0 mail-list"> <a href="#" class="list-group-item"><span class="fa fa-circle text-info m-r-10"></span>Work</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-warning m-r-10"></span>Family</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-purple m-r-10"></span>Private</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-danger m-r-10"></span>Friends</a> <a href="#" class="list-group-item"><span class="fa fa-circle text-success m-r-10"></span>Corporate</a> </div>
                                    </div>
                                </div>
                                <div class="col-lg-10 col-md-9 col-sm-8 col-xs-12 mail_listing">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-primary dropdown-toggle waves-effect waves-light m-r-5" data-toggle="dropdown" aria-expanded="false"> Filter <b class="caret"></b> </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#fakelink">Read</a></li>
                                            <li><a href="#fakelink">Unread</a></li>
                                            <li><a href="#fakelink">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#fakelink">Separated link</a></li>
                                        </ul>
                                    </div>
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-default waves-effect waves-light  dropdown-toggle" data-toggle="dropdown" aria-expanded="false"> <i class="fa fa-refresh"></i> </button>
                                    </div>
                                    <hr class="m-b-0">
                                    <div class="message-center">
                                        <a href="inbox-detail.php" class="unread">
                                            <div class="user-img"> <img class="img-circle" alt="user" src="../assets/images/users/pawandeep.jpg"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span> <span class="time">9:30 AM <i class="icon-paper-clip m-l-5"></i></span> </div>
                                        </a>
                                        <a href="inbox-detail.php" class="unread">
                                            <div class="user-img"> <img class="img-circle" alt="user" src="../assets/images/users/sonu.jpg"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM <i class="icon-paper-clip m-l-5"></i></span> </div>
                                        </a>
                                        <a href="inbox-detail.php" class="unread">
                                            <div class="user-img"> <img class="img-circle" alt="user" src="../assets/images/users/arijit.jpg"> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5>
                                                <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM <i class="icon-paper-clip m-l-5"></i></span> </div>
                                        </a>
                                        <a href="inbox-detail.php">
                                            <div class="user-img"> <img class="img-circle" alt="user" src="../assets/images/users/genu.jpg"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Genelia Deshmukh</h5>
                                                <span class="mail-desc">I love to do acting and dancing</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                        <a href="inbox-detail.php">
                                            <div class="user-img"> <img class="img-circle" alt="user" src="../assets/images/users/pawandeep.jpg"> <span class="profile-status offline pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                        </a>
                                        <a href="inbox-detail.php">
                                            <div class="user-img"> <img class="img-circle" alt="user" src="../assets/images/users/pawandeep.jpg"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Pavan kumar</h5>
                                                <span class="mail-desc">Lorem ipsum dolor sit amet, consectetuer adipiscing elit</span> <span class="time">9:30 AM <i class="icon-paper-clip m-l-5"></i></span> </div>
                                        </a>
                                        <a href="inbox-detail.php">
                                            <div class="user-img"> <img class="img-circle" alt="user" src="../assets/images/users/sonu.jpg"> <span class="profile-status busy pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Sonu Nigam</h5>
                                                <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM <i class="icon-paper-clip m-l-5"></i></span> </div>
                                        </a>
                                        <a href="inbox-detail.php">
                                            <div class="user-img"> <img class="img-circle" alt="user" src="../assets/images/users/arijit.jpg"> <span class="profile-status away pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Arijit Sinh</h5>
                                                <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM <i class="icon-paper-clip m-l-5"></i></span> </div>
                                        </a>
                                        <a href="inbox-detail.php">
                                            <div class="user-img"> <img class="img-circle" alt="user" src="../assets/images/users/genu.jpg"> <span class="profile-status online pull-right"></span> </div>
                                            <div class="mail-contnet">
                                                <h5>Genelia Deshmukh</h5>
                                                <span class="mail-desc">I love to do acting and dancing</span> <span class="time">9:08 AM</span> </div>
                                        </a>
                                    </div>
                                    <div class="row">
                                        <div class="col-xs-7 m-t-20"> Showing 1 - 15 of 200 </div>
                                        <div class="col-xs-5 m-t-20">
                                            <div class="btn-group pull-right">
                                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-left"></i></button>
                                                <button type="button" class="btn btn-default waves-effect"><i class="fa fa-chevron-right"></i></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>





<?php
    include("footer.php");
?>