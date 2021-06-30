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
            <a href="holidays.php"><button type="button" class="bg-bt text-white pr-2"><i
                        class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Goto National Festival Holidays
                    </button></a>
            <div class="col-12 heading text-center">
            National Festival Holidays
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
                                <th scope="col" class="se-no">SI.NO</th>
                                <th scope="col" class="">Holiday</th>
                                <th scope="col" class="">Date</th>
                                <th scope="col" class="">Saka Date</th>
                                <th scope="col" class="">Day</th>
                                <th scope="col" class=""></th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <th scope="row">1</th>
                                <td ><p class="case-law-btnn mb-0">Makar Sankranath/Pongal</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>January 14</td>
                                <td>Pausha 24</td>
                                <td>Thursday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td ><p class="case-law-btnn mb-0">Republic Day</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>January 26</td>
                                <td>Magha 06</td>
                                <td>Tuesday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td ><p class="case-law-btnn mb-0">Holi</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>March 29</td>
                                <td>Chaitra 08</td>
                                <td>Monday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td ><p class="case-law-btnn mb-0">Good friday</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>April 02</td>
                                <td>Chaitra 08</td>
                                <td>Friday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">5</th>
                                <td ><p class="case-law-btnn mb-0">Ram Navami</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>April 21</td>
                                <td>Vaisakha 01</td>
                                <td>Wenesday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td ><p class="case-law-btnn mb-0">May Day</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>May 01</td>
                                <td>Vaisakha</td>
                                <td>Saturday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td ><p class="case-law-btnn mb-0">id-ul-Fitr</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>may 14</td>
                                <td>Vaisakha 24</td>
                                <td>Friday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td ><p class="case-law-btnn mb-0">id-ul-Zuha(Bakrid)</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>July 21</td>
                                <td>Ashadha 30</td>
                                <td>Wenesday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td ><p class="case-law-btnn mb-0">Independence Day</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>August 15</td>
                                <td>Sarvana 24</td>
                                <td>Sunday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td ><p class="case-law-btnn mb-0">Onam or Thiru Onam Day</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>August 21</td>
                                <td>Sarvana 30</td>
                                <td>Saturday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>                           
                            <tr>
                                <th scope="row">11</th>
                                <td ><p class="case-law-btnn mb-0">Vinayaka Chaturthi/ Ganesh Chaturthi</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>September 10</td>
                                <td>Bhadra 19</td>
                                <td>Friday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">12</th>
                                <td ><p class="case-law-btnn mb-0">Mahatma Gandhi's Birthday</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>October 02</td>
                                <td>Asvina 10</td>
                                <td>Saturday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">13</th>
                                <td ><p class="case-law-btnn mb-0">Dussehra (Vijay Dashmi)</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>Octoberber 15</td>
                                <td>Asvina 23</td>
                                <td>Friday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                           
                            <tr>
                                <th scope="row">14</th>
                                <td ><p class="case-law-btnn mb-0">Diwali(Deepavali)</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>November 04</td>
                                <td>Kartika 13</td>
                                <td>Thursday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">15</th>
                                <td ><p class="case-law-btnn mb-0">Guru Nanak's Birthday</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>November 19</td>
                                <td>Kartika 28</td>
                                <td>Friday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td> -->
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">16</th>
                                <td ><p class="case-law-btnn mb-0">Christmas Day</p>
                                <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td>December 25</td>
                                <td>PAusha 04</td>
                                <td>Saturday</td>
                                <!-- <td ><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
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