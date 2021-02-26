<?php  include "header.php"?>
<?php include "sidenav.php" ?>
<html>
<link rel="stylesheet" href="css/index.css">
<script>
$(document).ready(function() {
    $(".moreless-button").click(function() {
        $(this).prev().toggleClass("open");
        console.log($(this).prev().hasClass("open"))
        if ($(this).prev().hasClass("open")) {
            $(this).text("READ LESS")
        } else {
            $(this).text("READ MORE")
        }
    });
});

$(document).ready(function() {
    $("#page_modal").modal('show');
});
</script>

<body>
    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-3 px-md-5 main-content2">
            <div class="col-12 py-2 heading">
                All Domains
            </div>
            <div class="col-12 ">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 mb-md-4 zoom">
                        <div class="px-1 py-1 borde">
                            <div class="d-flex px-1">
                                <div class="py-2 px-2 img_labour">
                                    <img src="package/labour.png" width="100px" height="100">
                                </div>
                                <div class="py-2 px-2">
                                    <div>
                                        <a class="title mb-1" href="domain-page.php">Labour Employment & Industrial</a>
                                    </div>
                                    <a class="content mb-0" id="content" href="domain-page.php">Provides the quick and
                                        convenient way
                                        to create
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
                                    </a>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12 mt-3 mt-md-0 zoom">
                        <div class="px-1 py-1 borde">
                            <div class="d-flex px-1">
                                <div class="py-2 px-2  img_labour">
                                    <img src="package/h&s.png" width="100px" height="100">
                                </div>
                                <div class="py-2 px-2">
                                    <div>
                                        <a class="title mb-1" href="domain-page1.php">Environmental,Health & Safety</a>
                                    </div>
                                    <a class="content mb-0" href="domain-page1.php">Provides the quick and convenient
                                        way to create
                                        responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork
                                        chop doner
                                        sirloin,
                                        bacon beef brisket ball tip short ribs.
                                        bacon beef brisket ball tip short
                                        ribs Provides the quick and convenient way to create
                                        responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork
                                        chop doner
                                        sirloin,
                                        bacon beef brisket ball tip short
                                        ribs.
                                    </a>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-lg-6 col-sm-12 zoom">
                        <div class="py-1 borde">
                            <div class="d-flex px-1">
                                <div class="py-2 px-2  img_labour">
                                    <img src="package/library.png" width="100px" height="100">
                                </div>
                                <div class="py-2 px-2">
                                    <div>
                                        <a class="title mb-1" href="domain-page2.php">Fiscal,Corporate & Commercial</a>
                                    </div>
                                    <a class="content mb-0" href="domain-page2.php">Provides the quick and convenient
                                        way to create
                                        responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork
                                        chop doner
                                        sirloin,
                                        bacon beef brisket ball tip short ribs.
                                        bacon beef brisket ball tip short
                                        ribs Provides the quick and convenient way to create
                                        responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa pork
                                        chop doner
                                        sirloin,
                                        bacon beef brisket ball tip short
                                        ribs.
                                    </a>
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
                        <div class="my-3">
                            <div class="border px-3 py-3">
                                <div class="title">
                                    Ullamcorper morpi tincidunt ornare massa
                                </div>
                                <div class="sub-title">
                                    17 Dec 2020 12.00 PM
                                </div>
                                <div class="content mt-2">
                                    <p>
                                        Consumer price index for industrial workers for the month oct2020 "ll" As Sebis
                                        Peak
                                        margin norms Kick in broker default risk.

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
                        <div class="my-3">
                            <div class="border px-3 py-3">
                                <div class="title">
                                    Ullamcorper morpi tincidunt ornare massa
                                </div>
                                <div class="sub-title">
                                    17 Dec 2020 12.00 PM
                                </div>
                                <div class="content mt-2">
                                    <p>
                                        Consumer price index for industrial workers for the month oct2020 "ll" As Sebis
                                        Peak
                                        margin norms Kick in broker default risk.

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
        <!-- Modal -->
        <div class="modal fade modal-md" id="page_modal" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header border-0">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <form class="px-1 px-md-5 py-0">
                        <div class="form-group text-center  px-5">
                            <label class="pb-2 modal-title">Please enter
                                your
                                email id and
                                validate
                                yourself to access a wealth of legal knowledge</label>
                            <input type="email" class="form-control form_input" id="exampleFormControlInput1"
                                placeholder="Email Id" autocomplete="off">
                        </div>
                        <div class="form-group px-5">
                            <label for="exampleFormControlSelect1" class="text-center pb-2 modal-title">Choose the
                                location
                                for which
                                you
                                want to view
                                the applicable laws</label>
                            <select class="form-control form_input" id="exampleFormControlSelect1">
                                <option class="active">Select Country</option>
                                <option>India</option>
                                <option>Dubai</option>
                                <option>US</option>
                            </select>
                        </div>
                        <div class="form-group px-5">
                            <label class="text-center pb-2 modal-title w-100">9 + 5 = ?</label>
                            <div>
                                <input type="text" class="form-control form_input" placeholder="Enter the Answer"
                                    autocomplete="off">
                            </div>
                        </div>
                    </form>
                    <div class="modal-footer d-flex justify-content-center border-0 text-center">
                        <button type="submit" data-dismiss="modal" class=" btn text-white foot-button">SUBMIT</button>
                    </div>

                </div>
            </div>
        </div>
        <!-- Modal -->

        <!-- center content ends -->
        <?php  include "footer.php"?>
    </div>
</body>

</html>