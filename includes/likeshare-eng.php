
<div class="row">
    <div class="col-md-12 like-section">
        <h4>
            Was this article helpful?
        </h4>
        <button id="likeBtn" class="ripple" onclick="LikeFunction();">
            <i class="fa fa-thumbs-up"></i>
            <span class="liketxt">Yes!</span>
        </button>
    </div>
    <div class="col-md-12">
        <div class="sharing">
            <h4>
                Share this page
            </h4>
            <a href="" id="fb-share-button" class="sharebtn"><i class="fa fa-facebook"></i></a>
            <a href="" id="tw-share-button" class="sharebtn"><i class="fa fa-twitter"></i></a>
            <a href="" id="ld-share-button" class="sharebtn"><i class="fa fa-linkedin"></i></a>
            <a href="mailto:?subject=Hey, this page has a great content!&body=" id="mail-share-button" class="sharebtn"><i class="fa fa-envelope"></i></a>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
        var likeExist = parseInt("<?php echo insertLike() ?>");
        if(likeExist>0){
            $("#likeBtn").addClass("liked");
        }
    });

    function LikeFunction(){
        var likeExist = parseInt('<?php echo insertLike() ?>');
        if(likeExist>0){
            //dislike
            var disliked = parseInt("<?php echo processDislike() ?>");
            if(disliked==1){
                $("#likeBtn").removeClass("liked");
            }
            else{
                alert(updated);
            }
        }else{
            //like
            var liked = parseInt("<?php echo processLike() ?>");
            if(liked==1){
                $("#likeBtn").addClass("liked");
            }
            else{
                alert(inserted);
            } 
        }
    };

</script>

<?php 

    function getIPAddress(){
        if (!empty($_SERVER['HTTP_CLIENT_IP']))   
        {
            $ip_address = $_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
        {
            $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip_address = $_SERVER['REMOTE_ADDR'];
        }
        return $ip_address;
    }


    function likeState(){
        include "dbconfig.php";
        $ipa = getIPAddress();
        $sql1 = "SELECT * from tblLike WHERE IPAddress='$ipa'";
        if ($result = mysqli_query($conn, $sql1)) {
            $rowcount = mysqli_num_rows( $result );
            return $rowcount;
        }
    }

    function insertLike(){
        include "dbconfig.php";
        $ipa = getIPAddress();
        $sql2 = "INSERT INTO tblLike (IPAddress, Liked) VALUES ('$ipa', 1)";
        if (mysqli_query($conn, $sql2)) {
            return "1";
        } else {
            return $conn->error;
        }
    }

    function insertDislike(){
        include "dbconfig.php";
        $ipa = getIPAddress();
        $sql3 = "DELETE FROM tblengpagelikes where IPAddress='$ipa' AND ";
        if (mysqli_query($conn, $sql3)) {
            return "1";
        } else {
            return $conn->error;
        }
    }
?>