<?php  include "header.php"?>
<?php include "sidenav.php" ?>
<html>
<link rel="stylesheet" href="css/index.css">
<script>
$('.moreless-button').click(function() {
    $('.moretext').slideToggle();
    if ($('.moreless-button').text() == "Read more") {
        $(this).text("Read less")
    } else {
        $(this).text("Read more")
    }
});
</script>

<body>
    <div class="main-content">
        <!-- center content starts -->
        <div class="row mt-5 px-5 main-content2">
            <div class="col-12 px-5 py-2 heading">
                All Domains
            </div>
            <div class="col-12 px-5">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="px-3">
                            <div class="row borde">
                                <div class="col-6 py-2 img_labour">
                                    <img src="package/labour.png" width="100px" height="110">
                                </div>
                                <div class="col-6 m-0 py-2 p-0 content_word">
                                    <p class="title">Bootstrap grid system</p>
                                    <p class="content">provides the quick and convenient way to create
                                        responsive website</p>
                                    <p class="moretext">
                                        Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork chop doner sirloin,
                                        bacon beef brisket ball tip short ribs.
                                    </p>
                                    <a class="moreless-button" href="#">Read more</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="px-3">
                            <div class="row borde">
                                <div class="col-6 py-2 img_labour">
                                    <img src="package/labour.png" width="100px" height="110">
                                </div>
                                <div class="col-6 py-2 p-0 content">
                                    <p class="title">Bootstrap grid system</p>
                                    <p class="content">provides the quick and convenient way to create
                                        responsive website</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-5 mt-4">
                <div class="px-3">
                    <div class="row">
                        <div class="col-lg-6 col-sm-12">
                            <div class="row borde">
                                <div class="col-6 py-2 img_labour">
                                    <img src="package/labour.png" width="100px" height="110">
                                </div>
                                <div class="col-6 py-2 p-0 content">
                                    <p class="title">Bootstrap grid system</p>
                                    <p class="content">provides the quick and convenient way to create
                                        responsive website</p>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-5 mt-4 heading">
                Breaking News
            </div>
            <div class="col-12 px-5 mt-3">
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="px-2 my-3">
                            <div class="border">
                                <div class="title ">
                                    Ullamcorper morpi tincidunt ornare massa
                                </div>
                                <div class="sub-title">
                                    17 Dec 2020 12.00pm
                                </div>
                                <div class="content">
                                    Consumer price index for industrial workers for the month oct2020 "ll" As Sebis Peak
                                    margin norms Kick in broker default risk
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="px-3 my-3">
                            <div class="border">
                                <div class="title">
                                    Ullamcorper morpi tincidunt ornare massa
                                </div>
                                <div class="sub-title">
                                    17 Dec 2020 12.00pm
                                </div>
                                <div class="content">
                                    Consumer price index for industrial workers for the month oct2020 "ll" As Sebis Peak
                                    margin norms Kick in broker default risk
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- center content ends -->
        <?php  include "footer.php"?>
    </div>
</body>

</html>