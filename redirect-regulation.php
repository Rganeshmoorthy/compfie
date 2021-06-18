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
});
</script>

<body>

    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-3 px-md-5 ">
            <a href="regulation.php"><button type="button" class="bg-bt text-white pr-2"><i
                        class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Goto
                    Regulations</button></a>
            <div class="col-12 heading text-center">
                Regulations
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
                    <input type="text" id="myInput" placeholder="Search..."
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
                                <th scope="col" class="se-no">R.No</th>
                                <th scope="col" class="">Regulation Title</th>
                                <!-- <th scope="col" class="">Section</th> -->
                                <th scope="col" class="">Regulation Description</th>
                                <th scope="col" class=""></th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <th scope="row">1</th>
                                <td>TITLE AND APPLICATION</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">(1) These regulations may be called the Central Trade Union
                                    Regulations, 1938.
                                    (2) The regulations apply to Trade Unions whose objects are not confined to one
                                    State.</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>DEFINITIONS</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp"> In these regulations—
                                    (a) “the Act” means the Indian Trade Unions Act, 1926.
                                    (b) “Form” means a form appended to these regulations.
                                    (c) “section” means a section of the Act.</td>
                                <td> <button type="button" class="btn btn-sm  button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>APPLICATION FOR REGISTRATION</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">Every application for registration of a Trade Union shall be made
                                    in Form A</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>REGISTER OF TRADE UNIONS</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">The Register of Trade Unions referred to in section 8 shall be
                                    maintained in Form B.</td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>

                            <!-- <tr class="text-center border">
                                <td colspan="5">
                                    CHAPTER II - CENTRAL AND STATE BOARDS FOR THE PREVENTION AND CONTROL
                                    OF AIR
                                    POLLUTION</td>
                            </tr> -->

                            <tr>
                                <th scope="row">5</th>
                                <td>CERTIFICATE OF REGISTRATION</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">(1) The Certificate of Registration issued by the Registrar under
                                    section 9 shall be in Form C.(2) When the Registrar registers a change of name under
                                    section 25, sub-section (3), he shall certify under his
                                    signature at the foot of the certificate on its presentation to him by the Secretary
                                    that the new name has been
                                    registered.</td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>UNIONS REGISTERED WITH STATE REGISTRARS</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">If the application is made by a Trade Union which has previously
                                    been registered by the Registrar of any State
                                    the union shall submit with its application a copy of the certificate of
                                    registration granted to it and copies of the
                                    entries relating to it in the Register of Trade Unions for the State.</td>
                                <td>
                                    <button type="button" class="btn btn-sm button-readmore-white mx-2 mt-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>FEES</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">The fee payable for the registration of a Trade Union shall be Rs.
                                    5.</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>AMENDMENT OF RULES</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">1) On receiving a copy of an application made in the rules of a Trade Union under section 28(3), the
Registrar, unless he has reason to believe that the alteration has not been made in the manner provided by the rules
of the Trade Union, shall register the alteration in a register to be maintained for this purpose and shall notify the
fact that he has done so to the Secretary of the Trade Union.
(2) The fee payable for registration of alteration of rules shall be Re.1 for each set of alterations made
simultaneously.</td>
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