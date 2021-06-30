<?php  include "header.php"?>
<?php include "sidenav.php" ?>
<html>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/domain-page8.css">
<link rel="stylesheet" href="css/domain-page4.css">
<script>
jQuery(document).ready(function() {
    jQuery('.scrollbarnew').scrollbar();
});
$(document).ready(function() {
    $("#myInput").on("keyup", function() {
        var value = $(this).val().toLowerCase();
        $("#myTable tr").filter(function() {
            $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
        });
    });
    $(".moreless-button").click(function() {
        $(this).prev().toggleClass("open");
        console.log($(this).prev().hasClass("open"))
        if ($(this).prev().hasClass("open")) {
            $(this).text("READ LESS")
        } else {
            $(this).text("READ MORE")
        }
    });
    $(' .moreless-button').hide();
    $('.table .case-law-btnn .case-law-p').each(function() {
        console.log($(this).next())
        if ($(this).height() >= 60) {
            $(this).next().show();
        } else {
            $(this).next().hide();
        }
    });

});
</script>

<body>

    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-3 px-md-5 ">
            <a href="leave-policy.php"><button type="button" class="bg-bt text-white pr-2"><i
                        class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Goto Leave Policy
                </button></a>
            <div class="col-12 heading text-center">
                Leave Policy
            </div>
            <div class="col-12 py-2">
                <div class="d-flex justify-content-center">
                    <div>
                        <button type="button" class="btn btn-sm text-white button-head mx-2"
                            onclick="window.location.href='full-act.php'">View Full Act</button>
                    </div>
                </div>
            </div>
            <div class="col-12 py-2 px-4 px-md-0 d-flex justify-content-center">
                <div class="col-12 col-md-7 table_search">
                    <input type="text" id="myInput" placeholder="Search Acts"
                        class="border-0 w-100 pr-4 search-input pl-2">
                    <button class="border-0 bg-transparent search-btn"><i class="fa fa-search"></i></button>
                </div>

            </div>
            <!-- <div class="col-12">
                <p class="mb-0">(As amended up to 24.12.1986) An act to provide, in the interests of the general public
                    for the control of the production, supply and distribution of, and trade and commerce in certain,
                    commodities. Be it enacted by Parliament in the Sixth Year of the Republic of India as follows:-

                </p>
            </div> -->
            <div class="col-12">
                <div class="col-12 py-2 px-md-5 table-wrap scrollbarnew">
                    <table class="table table-striped table-borderless">
                        <thead class="t-head">
                            <tr>
                                <th scope="col" class="se-no">Type Of Leave</th>
                                <th scope="col" class="">Leave Entitlement</th>
                                <!-- <th scope="col" class="">Section</th> -->
                                <th scope="col" class="">Max Carry Forward<br>Days</th>
                                <th scope="col" class=""></th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <th scope="row">Sick Leave</th>
                                <td class="case-law-btnn">
                                    <p class="case-law-p mb-0">12 days (After the first twelve months of his continuous
                                        service)</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>Not Applicable</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Casual Leave (Days)</th>
                                <td class="case-law-btnn">
                                    <p class="case-law-p mb-0">12 days (After the first twelve months of his continuous
                                        service)</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>Not Applicable</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Earned / Privileged Leave</th>
                                <td class="case-law-btnn">
                                    <p class="case-law-p mb-0">15 days (After 240 days or more of continuous period of
                                        twelve months)</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>45</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr class="text-center border">
                                <td colspan="5">
                                Working Hours for Shops & Establishment
                                    </td>
                            </tr>
                            <tr>
                                <th scope="row">Normal Working Hours</th>
                                <td class="case-law-btnn" colspan="2">
                                    <p class="case-law-p mb-0">Nine hours in a day and forty-eight hours in a week</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </td>                                
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Interval For Rest</th>
                                <td class="case-law-btnn" colspan="2">
                                    <p class="case-law-p mb-0">After five hours of work, the interval of rest of at least one hour</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </td>                                
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Maximum Over Time Hours</th>
                                <td class="case-law-btnn" colspan="2">
                                    <p class="case-law-p mb-0">One hour in a day and fifty hours in a quarter</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </td>                                
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Spreadover Hours</th>
                                <td class="case-law-btnn" colspan="2">
                                    <p class="case-law-p mb-0">Twelve hours on any day</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </td>                                
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Rate of OT Wages</th>
                                <td class="case-law-btnn" colspan="2">
                                    <p class="case-law-p mb-0">Twice the rate of normal wages</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </td>                                
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
        <!-- center content ends -->
        <?php  include "footer.php"?>
    </div>
</body>

</html>