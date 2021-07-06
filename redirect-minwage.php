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
            <a href="min-wages.php"><button type="button" class="bg-bt text-white pr-2"><i
                        class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Goto Min Wages
                </button></a>
            <div class="col-12 heading text-center mb-lg-3">
                Min Wages
            </div>
            <!-- <div class="col-12 py-2">
                <div class="d-flex justify-content-center">
                    <div>
                        <button type="button" class="btn btn-sm text-white button-head mx-2"
                            onclick="window.location.href='full-act.php'">View Full Act</button>
                    </div>
                </div>
            </div> -->
            <div class="col-12 py-2 px-4 px-md-0 d-flex justify-content-center mb-lg-3">
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
                <div class="col-12 px-md-5 table-wrap scrollbarnew">
                    <table class="table table-striped table-borderless wage">
                        <thead class="t-head">
                            <tr>
                                <th scope="col" class="se-no" rowspan="4">Categories of Employees</th>
                            </tr>
                            <tr>
                                <th scope="col" class="" colspan="2">Rates of Minimum Wages <br>(in Rupees)</th>
                                <th class="" scope="col"></th>
                            </tr>
                            <tr>
                                <th scope="col" class="" colspan="2">Zone - A</th>
                                <th class="" scope="col"></th>
                            </tr>
                            <tr>
                                <th scope="col" class="">montly</th>
                                <th class="" scope="col">Daily</th>
                                <th class="" scope="col"></th>
                            </tr>
                            
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <th scope="row">Un-Skilled</th>
                                <td>12298</td>
                                <td>473</td>
                                <!-- <td class="case-law-btnn"><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Semi - Skilled / Unskilled Supervisor</th>
                                <td>13780</td>
                                <td>530</td>
                                <!-- <td class="case-law-btnn"><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Skilled / Clerical</th>
                                <td>15990</td>
                                <td>615</td>
                                <!-- <td class="case-law-btnn"><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Highly Skilled</th>
                                <td>17498</td>
                                <td>673</td>
                                <!-- <td class="case-law-btnn"><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Highly Skilled</th>
                                <td>17498</td>
                                <td>673</td>
                                <!-- <td class="case-law-btnn"><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Highly Skilled</th>
                                <td>17498</td>
                                <td>673</td>
                                <!-- <td class="case-law-btnn"><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
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