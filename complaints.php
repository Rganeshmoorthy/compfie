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
                Lets Talk Compliance
            </div>

            <div class="col-12 py-2 px-4 px-md-0 d-flex justify-content-center">
                <div class="border col-12 col-md-7 table_search">
                    <input type="text" placeholder="Search Acts" id="myInput" class="border-0 w-100 pr-4 search-input pl-2">
                    <button class="border-0 bg-transparent search-btn"><i class="fa fa-search"></i></button>
                </div>

            </div>

            <div class="table_scroll_redirect scrollbarnew col-12">
                <div class="col-12 py-2 px-5">
                    <table class="table table-bordered table_bgcolor">
                        <thead class="t-head">
                            <tr>
                                <th scope="col" class="">Title</th>
                                <th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <td>Perpetual License and other proposed amendments under Food Safety and Standards Act,
                                    2006</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='complaints-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='complaints-more.php'">View
                                        Files</button>
                                </td>

                            </tr>
                            <tr>
                                <td>A comprehensive list of licenses for Hotel and Restaurant business</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='complaints-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='complaints-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>A comprehensive list of licenses for Hotel and Restaurant business</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='complaints-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='complaints-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>What reduced EPF Contribution means to Employee & Employer</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='complaints-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='complaints-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Is it what is intended or an error to be rectified?</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='complaints-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='complaints-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                              <tr>
                                <td> Implementation date of SC judgment on PF wages - Retrospective or Prospective</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='complaints-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='complaints-more.php'">View
                                        Files</button>
                                </td>
                            </tr>
                              <tr>
                                <td>Will 2(y) of CoW make gratuity a non-wage</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='complaints-more.php'">Read
                                        more</button>
                                    <button type="button"
                                        class="btn btn-sm text-white button-readmore mx-2 mt-2 mt-md-0"
                                        onclick="window.location.href='complaints-more.php'">View
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