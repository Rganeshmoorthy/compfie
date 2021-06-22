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
jQuery(document).ready(function() {
    jQuery('.scrollbarnew').scrollbar();
});

$(document).ready(function() {
    var path = window.location.pathname;
    var url = path.substring(path.lastIndexOf('/') + 1)
    // console.log(url)
    if (url == '') {
        $("#page_modal").modal('show');
    }
    $('.title-latest').each(function() {
        console.log($(this).next())
        if ($(this).height() >= 63) {
            $(this).next().next().show();
        } else {
            $(this).next().next().hide();
        }
    });
    $(".latest-upate .moreless-button").click(function() {
        $(this).prev().prev().toggleClass("open");
        console.log($(this).prev().prev().hasClass("open"))
        if ($(this).prev().prev().hasClass("open")) {
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
        <div class="row px-3 mx-md-1 d-flex">
            <div class="col-md-6 pl-lg-5 mb-lg-2 mt-4 heading only-big">
                All Domains
            </div>
            <div class="col-md-6 pl-lg-5 mb-lg-2 mt-4 heading only-big">
                Latest Update
            </div>
        </div>
        <div class="row px-3 mx-md-1 d-flex main-content2 scrollbarnew">
            <div class="col-md-12 pl-lg-5 mb-lg-2 mt-4 heading only-mbl">
                All Domains
            </div>
            <div class="col-md-6">
                <div class="col-12">
                    <div class="row mt-md-2">
                        <div class="col-lg-12 col-sm-12 py-2 zoom">
                            <div class="px-1 py-1 borde">
                                <div class="d-flex px-1">
                                    <div class="py-2 px-2 img_labour">
                                        <img src="package/labour.png" width="140" height="140">
                                    </div>
                                    <div class="py-2 px-2">
                                        <div>
                                            <a class="title mb-1" href="domain-page.php">Labour Employment &
                                                Industrial</a>
                                        </div>
                                        <a class="content mb-2 mt-md-3" id="content" href="domain-page.php">Provides the
                                            quick
                                            and
                                            convenient way
                                            to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
                                            chop doner
                                            sirloin,
                                            bacon beef brisket ball tip short
                                            ribs Provides the quick and convenient way to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
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
                        <div class="col-lg-12 col-sm-12 py-2 mt-md-0 zoom">
                            <div class="px-1 py-1 borde">
                                <div class="d-flex px-1">
                                    <div class="py-2 px-2 img_labour">
                                        <img src="package/h&s.png" width="140" height="140">
                                    </div>
                                    <div class="py-2 px-2">
                                        <div>
                                            <a class="title mb-1" href="domain-page1.php">Environmental,Health &
                                                Safety</a>
                                        </div>
                                        <a class="content mb-2 mt-md-3" id="content" href="domain-page1.php">Provides
                                            the
                                            quick
                                            and
                                            convenient way
                                            to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
                                            chop doner
                                            sirloin,
                                            bacon beef brisket ball tip short
                                            ribs Provides the quick and convenient way to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
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
                        <div class="col-lg-12 col-sm-12 py-2 mt-md-0 zoom">
                            <div class="py-1 borde">
                                <div class="d-flex px-1">
                                    <div class="py-2 px-2  img_labour">
                                        <img src="package/library.png" width="140px" height="140">
                                    </div>
                                    <div class="py-2 px-2">
                                        <div>
                                            <a class="title mb-1" href="domain-page2.php">Fiscal,Corporate &
                                                Commercial</a>
                                        </div>
                                        <a class="content mb-2 mt-md-3" href="domain-page2.php">Provides the quick and
                                            convenient
                                            way to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
                                            chop doner
                                            sirloin,
                                            bacon beef brisket ball tip short ribs.
                                            bacon beef brisket ball tip short
                                            ribs Provides the quick and convenient way to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
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
                        <div class="col-lg-12 col-sm-12 py-2 mt-md-0 zoom">
                            <div class="py-1 borde">
                                <div class="d-flex px-1">
                                    <div class="py-2 px-2  img_labour">
                                        <img src="package/library.png" width="140px" height="140">
                                    </div>
                                    <div class="py-2 px-2">
                                        <div>
                                            <a class="title mb-1" href="domain-page2.php">Fiscal,Corporate &
                                                Commercial</a>
                                        </div>
                                        <a class="content mb-2 mt-md-3" href="domain-page2.php">Provides the quick and
                                            convenient
                                            way to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
                                            chop doner
                                            sirloin,
                                            bacon beef brisket ball tip short ribs.
                                            bacon beef brisket ball tip short
                                            ribs Provides the quick and convenient way to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
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
                        <div class="col-lg-12 col-sm-12 py-2 mt-md-0 zoom">
                            <div class="py-1 borde">
                                <div class="d-flex px-1">
                                    <div class="py-2 px-2  img_labour">
                                        <img src="package/library.png" width="140px" height="140">
                                    </div>
                                    <div class="py-2 px-2">
                                        <div>
                                            <a class="title mb-1" href="domain-page2.php">Fiscal,Corporate &
                                                Commercial</a>
                                        </div>
                                        <a class="content mb-2 mt-md-3" href="domain-page2.php">Provides the quick and
                                            convenient
                                            way to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
                                            chop doner
                                            sirloin,
                                            bacon beef brisket ball tip short ribs.
                                            bacon beef brisket ball tip short
                                            ribs Provides the quick and convenient way to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
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
                        <div class="col-lg-12 col-sm-12 py-2 mt-md-0 zoom">
                            <div class="py-1 borde">
                                <div class="d-flex px-1">
                                    <div class="py-2 px-2  img_labour">
                                        <img src="package/library.png" width="140px" height="140">
                                    </div>
                                    <div class="py-2 px-2">
                                        <div>
                                            <a class="title mb-1" href="domain-page2.php">Fiscal,Corporate &
                                                Commercial</a>
                                        </div>
                                        <a class="content mb-2 mt-md-3" href="domain-page2.php">Provides the quick and
                                            convenient
                                            way to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
                                            chop doner
                                            sirloin,
                                            bacon beef brisket ball tip short ribs.
                                            bacon beef brisket ball tip short
                                            ribs Provides the quick and convenient way to create
                                            responsive website Brisket ball tip cow sirloin. Chuck porchetta kielbasa
                                            pork
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
            </div>
            <div class="col-12 pl-lg-5 mb-lg-2 mt-4 heading only-mbl">
                Latest Update
            </div>
            <div class="col-md-6">
                <div class="col-12">
                    <div class="row latest-upate">
                        <marquee direction="up" scrollamount="10" onmouseover="this.stop();" onmouseout="this.start();">
                        <div class="col-lg-12 remove-bor">
                            <div class="">
                                <div class=" px-3 py-3">
                                    <div class="title title-latest">                                     
                                        Order regarding lockdown with guidelines w.e.f 08.06.2021 (Hindi Version)
                                    </div>
                                    <div class="sub-title">
                                        (Order dated 07-06-2021)
                                    </div>
                                    <a class="moreless-button" class="foot-right" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 remove-bor">
                            <div class="">
                                <div class=" px-3 py-3">
                                    <div class="title title-latest">                                     
                                        Order regarding lockdown with restrictions from 09.06.2021 to 15.06.2021
                                        (Hindi version)
                                    </div>
                                    <div class="sub-title">
                                        (08.06.2021)
                                    </div>
                                    <a class="moreless-button" class="foot-right" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 remove-bor">
                            <div class="">
                                <div class=" px-3 py-3">
                                    <div class="title title-latest">                                     
                                        Order regarding extension of lock down with additional guidelines from
                                        10.06.2021 to 16.06.2021
                                    </div>
                                    <div class="sub-title">
                                        (Order dated - 07.06.2021)
                                    </div>
                                    <a class="moreless-button" class="foot-right" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 remove-bor">
                            <div class="">
                                <div class=" px-3 py-3">
                                    <div class="title title-latest">                                     
                                        Order regarding extension of lockdown with guidelines from 07.06.2021 to
                                        14.06.2021
                                    </div>
                                    <div class="sub-title">
                                        (order dated - 07.06.2021)
                                    </div>
                                    <a class="moreless-button" class="foot-right" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 remove-bor">
                            <div class="">
                                <div class=" px-3 py-3 latest-upate">
                                    <div class="title title-latest">
                                        Notice for Registration of Producers, Importers & Brand Owners under
                                        provision of Plastic Waste Management (PWM) Rules (As per provisions 9 (1&2)
                                        & 13 (2) of PWM Rules, 2016 as amended)
                                    </div>
                                    <div class="sub-title">
                                        ( Notice dated – 25.05.2021)
                                    </div>
                                    <a class="moreless-button" class="foot-right" href="#">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 remove-bor">
                            <div class="">
                                <div class=" px-3 py-3">
                                    <div class="title title-latest">
                                        <!-- Ullamcorper morpi tincidunt ornare massa -->
                                        Policy change Order related to Enabling Food Businesses to migrate from
                                        State License to Central License or vice versa without change in the FSSAI
                                        License number
                                    </div>
                                    <div class="sub-title">
                                        ( dated – 31.05.2021)
                                    </div>                                   
                                    <a class="moreless-button" class="foot-right" href="#">Read More</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 remove-bor">
                            <div class="">
                                <div class=" px-3 py-3">
                                    <div class="title title-latest">                                    
                                        Notification regarding West Bengal Employees' State Insurance (Medical
                                        Benefit) Rules, 1955 shall be extended to the families of insured persons in
                                        the entire area of the Alipurduar, South Dinajpur, Purulia, North Dinajpur,
                                        and Kalimpong & Cooch Behar districts
                                    </div>
                                    <div class="sub-title">
                                        ( Notification dated 07.06.2021)
                                    </div>                                    
                                    <a class="moreless-button" class="foot-right" href="#">Read More</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 remove-bor">
                            <div class="">
                                <div class=" px-3 py-3">
                                    <div class="title title-latest">                                   
                                        Notification regarding Tamil Nadu Employees' State Insurance (Medical
                                        Benefit) Rules, 1955 shall be extended to the families of insured persons in
                                        the entire area of Erode district
                                    </div>
                                    <div class="sub-title">
                                        ( Notification dated -07.06.2021)
                                    </div>                                    
                                    <a class="moreless-button" class="foot-right" href="#">Read More</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 remove-bor">
                            <div class="">
                                <div class=" px-3 py-3">
                                    <div class="title title-latest">
                                        <!-- Ullamcorper morpi tincidunt ornare massa -->
                                        Circular regarding SOP for implementation of the provision of extension time
                                        limit to apply for revocation of cancellation of registration under Gujarat
                                        GST Act, 2017
                                    </div>
                                    <div class="sub-title">
                                        ( Circular dated – 05.06.2021)
                                    </div>                                   
                                    <a class="moreless-button" class="foot-right" href="#">Read More</a>

                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 remove-bor">
                            <div class="">
                                <div class=" px-3 py-3">
                                    <div class="title title-latest">
                                        <!-- Ullamcorper morpi tincidunt ornare massa -->
                                        Notification to BOCW workers workers under Aadhaar (Targeted Delivery of Financial
                                        and other subsidies,other subsidies, Benefits and Services) Act, 2016
                                    </div>
                                    <div class="sub-title">
                                        (Notification dated - 03.06.2021)
                                    </div>

                                    <a class="moreless-button" class="foot-right" href="#">Read More</a>

                                </div>
                            </div>
                        </div>
                        </marquee>
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