<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<style>
    p {
        margin: 0;
    }
    ul{
        margin-bottom: 0px;
    }
    .blue-button button{
        padding: 5px;
    }

    .widget .panel-body{
        padding:0px; 
    }
    .widget .list-group
    { 
        margin-bottom: 0;
    }
    .widget .panel-title
    { 
        display:inline 
    }
    .widget .label-info{ 
        float: right; 
    }
    .widget li.list-group-item{
        border-radius: 0;border: 0;border-top: 1px solid #ddd;
    }
    .widget li.list-group-item:hover{
        background-color: rgba(86,61,124,.1); 
    }
    .widget .mic-info { 
        color: #666666;font-size: 11px; 
    }
    .widget .action { 
        margin-top:5px; 
    }
    .widget .comment-text { 
        font-size: 12px; 
    }
    .widget .btn-block { 
        border-top-left-radius:0px;border-top-right-radius:0px; 
    }
</style>
<?php
    if (isset($_GET['NFTIDdetails'])) {
        $NFTIDdetails = $_GET['NFTIDdetails'];
    } else {
        $NFTIDdetails = "";
    }
?>
<div class="containerCMT" style="padding: 46px; border-radius:20px">
    <div class="row">
        <div class="panel panel-default widget">
            <div class="panel-heading" style="padding: 30px 25px">
                <span class="glyphicon glyphicon-comment"></span>
                <h3 class="panel-title">
                    Recent Comments
                </h3>
                <span class="label label-info" id="Cmt-length" style="padding: 10px;">
                    
                </span>
            </div>
            <div class="panel-body">
                <div class="YourCommentNFT" style="display: flex; padding: 20px;">
                    <?php
                        if (isset($_SESSION['UserID']) && $_SESSION['UserID']!="") {
                            echo '
                                <div style="width: 70px; height: 70px; background-color: blue; border-radius:50%; margin-right:45px; overflow:hidden;">
                                    <img style="width:100%; height:100%;" src="'.$urlFOLDERImageUser.''.$getAvataUser['AvatarImage'].'" alt="">
                                </div>
                                <input type="text" placeholder="your comments" style="border-radius:10px; width: 80%; padding:20px; margin-right:20px;" name="contentCMT">
                                <input type="hidden" name="NFTIDdetails" value="'.$NFTIDdetails.'">
                                <button class="btn-cmt-to-php-by-ajax" style="width:150px;border-radius:10px; background-color: blue; font-weight:700; color:white;">
                                    Submit
                                </button>
                            ';
                        }
                        else{
                            echo '
                                <p> Đăng nhập để tham gia bình luận!</p>
                            ';
                        }
                    ?>
                </div>

                <ul class="list-group" id="allCommentResAjax">         
                    <?php
                        if (is_array($getAllCommentAtNFT) && $getAllCommentAtNFT > 0) {
                            foreach($getAllCommentAtNFT as $k){
                                extract($k, EXTR_PREFIX_ALL, 'CMT');
                                if (isset($_SESSION['username']) && $_SESSION['username'] !="") {
                                    if ($CMT_username == $_SESSION['username']){
                                       $display = 'block';
                                    }
                                    else{
                                        $display = 'none';
                                    }
                                }
                                echo '                           
                                    <li class="list-group-item cmt-sl-jquery-count">
                                        <div class="row"  style="padding: 10px 0px;">
                                            <div class="col-xs-2 col-md-1">
                                                <img src="'.$urlFOLDERImageUser.''.$CMT_AvatarImage.'" class="img-circle img-responsive" alt="" /></div>
                                            <div class="col-xs-10 col-md-11">
                                                <div>
                                                    <a href="#">
                                                        '.$CMT_username.'
                                                    </a>
                                                    <div class="mic-info">
                                                        '.$CMT_CreatedAt.'
                                                    </div>
                                                </div>
                                                <div class="comment-text" style="padding: 20px 0px">
                                                    '.$CMT_Content.'
                                                </div>
                                                <div class="action manageCmt" style="display:'.$display.';">
                                                    <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                                        <span class="glyphicon glyphicon-pencil"></span>
                                                    </button>
                                                    <button type="button" class="btn btn-danger btn-xs deleteCMT-ajax" title="Delete">
                                                        <input type="hidden" name="CmtID" value="'.$CMT_CommentID.'">
                                                        <span class="glyphicon glyphicon-trash"></span>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </li>                         
                                ';
                            }
                        }
                        else{
                            echo 'Chưa có bình luận nào';
                        }
                    ?>
                    <!-- <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="http://bootsnipp.com/BhaumikPatel/snippets/Obgj">Admin Panel Quick Shortcuts</a>
                                    <div class="mic-info">
                                        By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
                                    </div>
                                </div>
                                <div class="comment-text">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
                                <div class="action">
                                    <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" title="Approved">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-xs-2 col-md-1">
                                <img src="http://placehold.it/80" class="img-circle img-responsive" alt="" /></div>
                            <div class="col-xs-10 col-md-11">
                                <div>
                                    <a href="http://bootsnipp.com/BhaumikPatel/snippets/4ldn">Cool Sign Up</a>
                                    <div class="mic-info">
                                        By: <a href="#">Bhaumik Patel</a> on 11 Nov 2013
                                    </div>
                                </div>
                                <div class="comment-text">
                                    Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh
                                    euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim
                                </div>
                                <div class="action">
                                    <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                        <span class="glyphicon glyphicon-pencil"></span>
                                    </button>
                                    <button type="button" class="btn btn-success btn-xs" title="Approved">
                                        <span class="glyphicon glyphicon-ok"></span>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-xs" title="Delete">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </li> -->
                </ul>
                <!-- <a href="#" class="btn btn-primary btn-sm btn-block" role="button" style="padding: 20px 0px;"><span class="glyphicon glyphicon-refresh"></span> More</a> -->
            </div>
        </div>
    </div>
</div>
