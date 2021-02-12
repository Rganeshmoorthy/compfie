<?php  include "header.php"?>
<?php include "sidenav.php" ?>
<html>
<link rel="stylesheet" href="css/index.css">
<script>
$(document).ready(function() {
    $(".moreless-button").click(function() {
        //  $("#content").toggleClass("content");
        $(this).prev().toggleClass("open");
        if ($(this).prev().hasClass("open")) {
            $(this).text("READ LESS")
        } else {
            $(this).text("READ MORE")
        }

    });
});
</script>

<body>
    <div class="main-content">
        <!-- center content starts -->
        <div class=" px-md-2 px-lg-4 main-content2">
            <div class="col-12 py-2 heading">
                All Domains
            </div>
            <div class="col-12 ">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-md-4">
                        <div class="px-1 py-1 borde">
                            <div class="d-flex px-1">
                                <div class="py-2 px-2 img_labour">
                                    <img src="package/labour.png" width="100px" height="100">
                                </div>
                                <div class="py-2 px-2">
                                    <p class="title mb-1">Labour Employment & Industrial</p>
                                    <p class="content mb-0" id="content">Provides the quick and convenient way to create
                                        responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork
                                        chop doner
                                        sirloin,
                                        bacon beef brisket ball tip short
                                        ribs Provides the quick and convenient way to create
                                        responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork
                                        chop doner
                                        sirloin,
                                        bacon beef brisket ball tip short
                                        ribs.
                                    </p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <div class="px-1 py-1 borde">
                            <div class="d-flex px-1">
                                <div class="py-2 px-2  img_labour">
                                    <img src="package/labour.png" width="100px" height="100">
                                </div>
                                <div class="py-2 px-2">
                                    <p class="title mb-1">Environmental,Health & Safety</p>
                                    <p class="content mb-0">Provides the quick and convenient way to create
                                        responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork
                                        chop doner
                                        sirloin,
                                        bacon beef brisket ball tip short ribs.
                                    </p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4">
                <div class="row">
                    <div class="col-lg-6 col-sm-12">
                        <div class="px-1 py-1 borde">
                            <div class="d-flex px-1">
                                <div class="py-2 px-2  img_labour">
                                    <img src="package/labour.png" width="100px" height="100">
                                </div>
                                <div class="py-2 px-2">
                                    <p class="title mb-1">Fiscal,Corporate & Commercial</p>
                                    <p class="content mb-0">Provides the quick and convenient way to create
                                        responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork
                                        chop doner
                                        sirloin,
                                        bacon beef brisket ball tip short ribs.
                                    </p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-4 heading">
                Breaking News
            </div>
            <div class="col-12">
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="px-2 my-3">
                            <div class="border px-3 py-3">
                                <div class="title">
                                    Ullamcorper morpi tincidunt ornare massa
                                </div>
                                <div class="sub-title">
                                    17 Dec 2020 12.00 PM
                                </div>
                                <div class="content mt-2">
                                    Consumer price index for industrial workers for the month oct2020 "ll" As Sebis
                                    Peak
                                    margin norms Kick in broker default risk.
                                    <p class="moretext">
                                        Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork chop doner
                                        sirloin,
                                        bacon beef brisket ball tip short ribs.
                                    </p>
                                </div>

                                <a class="moreless-button" class="foot-right" href="#">Read More</a>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="px-2 my-3">
                            <div class="border px-3 py-3">
                                <div class="title">
                                    Ullamcorper morpi tincidunt ornare massa
                                </div>
                                <div class="sub-title">
                                    17 Dec 2020 12.00 PM
                                </div>
                                <div class="content mt-2">
                                    Consumer price index for industrial workers for the month oct2020 "ll" As Sebis
                                    Peak
                                    margin norms Kick in broker default risk.
                                    <p class="moretext">
                                        Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork chop doner
                                        sirloin,
                                        bacon beef brisket ball tip short ribs.
                                    </p>
                                </div>

                                <a class="moreless-button" class="foot-right" href="#">Read More</a>

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