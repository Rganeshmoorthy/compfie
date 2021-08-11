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
            $(this).text("EXPAND LESS")
        } else {
            $(this).text("EXPAND MORE")
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
            <a href="key_complaint.php"><button type="button" class="bg-bt text-white pr-2"><i
                        class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Goto Professional Tax
                </button></a>
            <div class="col-12 heading text-center mb-lg-3">
                Professional Tax
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
                <div class="col-12 py-2 px-md-5 table-wrap scrollbarnew" >
                    <table class="table table-striped table-borderless">
                        <thead class="t-head">
                            <tr>
                                <th scope="col" class="se-no ">Amount</th>
                                <th scope="col" class="">Periodicity</th>
                                <th scope="col" class="">Due Date for <br>Remittance</th>
                                <th scope="col" class="">DD/Cheque in Favour</th>
                                <th scope="col" class="">Centralised<br>PT</th>
                                <th scope="col" class="">In which month's Salary<br>Employee PT is to be<br>deducted
                                </th>
                                <th scope="col" class=""></th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <th scope="row">As per Slab Rate</th>
                                <td>Remittance to be made monthly</td>
                                <td>Within 10th of Subsequent month</td>
                                <td class="case-law-btnn">
                                    <p class="case-law-p mb-0">"Commercial tax officer......." the Area and the Circle
                                        No. in which office of the establishment is to situated is to be mentioned here
                                    </p>
                                    <a class="moreless-button" href="#">EXPAND MORE</a>
                                </td>
                                <td>Possible</td>
                                <td>Every Month</td>
                                <td>
                                    <!-- <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button> -->
                                    <button class="btn button-readmore mx-3 my-2 ml-auto text-white" id="cmd-tax"><i
                                            class="fa fa-download"></i> Download</button>
                                </td>
                            </tr>
                            <tr class="text-center border ">
                                <td colspan="7">
                                    Slab Rate</td>
                            </tr>
                            <tr class="bg-slab">
                                <th scope="row" colspan="2">S.No</th>
                                <th scope="row" colspan="2">Monthly Gross Wages</th>
                                <th scope="row" colspan="3">Professional Tax</th>
                            </tr>
                            <tr>
                                <th scope="row" colspan="2">1</th>
                                <td colspan="2">Upto Rs. 15,000/-</td>
                                <td colspan="3" class="">Rs. 0/-</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="2">2</th>
                                <td colspan="2">From Rs. 15,001/- to Rs.20,000/-</td>
                                <td colspan="3" class="">Rs. 150/-</td>
                            </tr>
                            <tr>
                                <th scope="row" colspan="2">3</th>
                                <td colspan="2">Above Rs. 20,000/-</td>
                                <td colspan="3" class="">Rs. 200/-</td>
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