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
</script>

<body>
    <?php include "nav-pills.php"?>
    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-3 px-md-5 ">
            <div class="col-12 heading text-center">
                State OR Central Munispality Act
            </div>
            <div class="col-12 py-2">
                <div class="d-flex justify-content-center">
                    <div>
                        <button type="button" class="btn btn-sm text-white button-head mx-2">View Full Act</button>
                    </div>
                </div>
            </div>
            <div class="col-12 py-2 px-4 px-md-0 d-flex justify-content-center">
                <div class="border col-12 col-md-7">
                    <input type="text" placeholder="search Acts" class="border-0 w-100 pr-4 search-input pl-2">
                    <button class="border-0 bg-transparent search-btn"><i class="fa fa-search"></i></button>
                </div>

            </div>

            <div class="table_scroll_redirect scrollbarnew ">
                <div class="col-12 py-2 px-5">
                    <table class="table table-striped table-borderless">
                        <thead class="t-head">
                            <tr>
                                <th scope="col" class="">Section Number</th>
                                <th scope="col" class="">Section Title</th>
                                <th scope="col" class="">Section</th>
                                <th scope="col" class="">Discription</th>
                            </tr>
                        </thead>
                        <tbody class="table-content">
                            <tr>
                                <th scope="row">1</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td> <button type="button" class="btn btn-sm  button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>

                            <tr class="text-center border">
                                <td colspan="5">
                                    CHAPTER II - CENTRAL AND STATE BOARDS FOR THE PREVENTION AND CONTROL
                                    OF AIR
                                    POLLUTION</td>
                            </tr>

                            <tr>
                                <th scope="row">1</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td>
                                    <button type="button" class="btn btn-sm button-readmore-white mx-2 mt-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
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