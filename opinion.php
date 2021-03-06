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
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
         
});
</script>

<body>

    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-3 px-md-5 ">
            <div class="col-12 heading text-center">
                OPINIONS
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
                <div class="border col-12 col-md-7 table_search">
                    <input type="text" placeholder="Search Acts" id="myInput" class="border-0 w-100 pr-4 search-input pl-2">
                    <button class="border-0 bg-transparent search-btn"><i class="fa fa-search"></i></button>
                </div>

            </div>

            <div class="col-12">
                <div class="col-12 py-2 px-md-5 table-wrap scrollbarnew">
                    <table class="table table-bordered">
                        <thead class="t-head">
                            <tr>
                                <th scope="col" class="">Statutory Name</th>
                                <th>
                            </tr>
                        </thead>
                        <tbody class="table-content opinion-open" id="myTable">
                            <tr>
                                <td>Bio-Medical Waste Management & handling Rules, 2016</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>

                            </tr>
                            <tr>
                                <td>Food Safety and Standards Rules, 2011</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Tamil Nadu Lifts Rules, 1997</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Meghalaya Air (Prevention And Conrol Of Pollution) Rules, 1988</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Kerala Municipality Building Rules, 1999</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Karnataka Lifts Escalators and Passenger Conveyors Rules, 2014</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Assam Lifts And Escalators Rules, 2010</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Water (Prevention and Control of Pollution) Rules, 1975</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Pre-Conception and Pre-natal Diagnostic Techniques (Prohibition of Sex Selection)
                                    Rules, 1996</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Plastic Waste Management Rules, 2015</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Batteries (Management and Handling) Rules, 2001</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Dangerous Machines (Regulation) Rules, 2007</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Air (Prevention and Control of Pollution) (Union Territories) Rules, 1983</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Copyrights Rules, 1958</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Coir Industry Rules, 1954</td>
                                <td class="d-lg-flex"> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='opinion-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='opinion-more.php'">View
                                        Files</button>
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