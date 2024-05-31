<?php
    error_reporting(E_ALL);
    ini_set('display_errors', '1');
    session_start();
    include "../Model/connectdatabase.php";
    $conn = connectDatabaseNFT();
    $urlFOLDERImageUser = "../View/img/User/";  
    $NFTIDdetails = isset($_POST['NFTIDdetails']) ? $_POST['NFTIDdetails'] : null;
    function getComnetAll($conn, $NFTIDdetails){
        // if (isset($_GET['NFTIDdetails'])) {
        //     $NFTIDdetails = $_GET['NFTIDdetails'];
        // } else {
        //     $NFTIDdetails = "";
        // }     
        $stmt = $conn -> prepare(
            "   SELECT `comment`.*, `user`.`username`, `user`.`AvatarImage`
                FROM `comment` 
                JOIN `user`
                ON `user`.`UserID` = `comment`.`UserID`
                WHERE `NFTID` = :NFTID 
                ORDER BY `CommentID` DESC 
            ");
        $stmt->bindParam(':NFTID', $NFTIDdetails);
        $stmt->execute();
        $johan = $stmt->setFetchMode(PDO::FETCH_ASSOC);
        $best = $stmt->fetchAll();
        $conn = null;
        return $best;
    }

    $cmt = getComnetAll($conn, $NFTIDdetails);

    $html = '';
    foreach($cmt as $c){
        extract($c, EXTR_PREFIX_ALL, 'cmtsh');
        if (isset($_SESSION['username']) && $_SESSION['username'] !="") {
            if ($cmtsh_username == $_SESSION['username']){
               $display = 'block';
            }
            else{
                $display = 'none';
            }
        }
        $html .= '
            <li class="list-group-item cmt-sl-jquery-count">
                <div class="row"  style="padding: 10px 0px;">
                    <div class="col-xs-2 col-md-1">
                        <img src="'.$urlFOLDERImageUser.''.$cmtsh_AvatarImage.'" class="img-circle img-responsive" alt="" /></div>
                    <div class="col-xs-10 col-md-11">
                        <div>
                            <a href="#">
                                '.$cmtsh_username.'
                            </a>
                            <div class="mic-info">
                                '.$cmtsh_CreatedAt.'
                            </div>
                        </div>
                        <div class="comment-text" style="padding: 20px 0px">
                            '.$cmtsh_Content.'
                        </div>
                        <div class="action manageCmt" style="display:'.$display.';">
                            <button type="button" class="btn btn-primary btn-xs" title="Edit">
                                <span class="glyphicon glyphicon-pencil"></span>
                            </button>
                            <button type="button" class="btn btn-danger btn-xs deleteCMT-ajax" title="Delete">
                                <input type="hidden" name="CmtID" value="'.$cmtsh_CommentID.'">
                                <span class="glyphicon glyphicon-trash"></span>
                            </button>
                        </div>
                    </div>
                </div>
            </li>        
        ';
    }
    echo $html;
?>
