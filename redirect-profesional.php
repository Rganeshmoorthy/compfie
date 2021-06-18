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
            <a href="key_complaint.php"><button type="button" class="bg-bt text-white pr-2"><i
                        class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Goto Professional Tax
                    </button></a>
            <div class="col-12 heading text-center">
            Professional Tax
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
                                <th scope="col" class="se-no">S.No</th>
                                <th scope="col" class="">Section Title</th>
                                <!-- <th scope="col" class="">Section</th> -->
                                <th scope="col" class="">Section Description</th>
                                <th scope="col" class=""></th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <th scope="row">1</th>
                                <td>SHORT TITLE AND EXTENT</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">(1) This Act may be called the Essential Commodities Act, 1955.</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>DEFINITIONS</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp"> In this Act, unless the context otherwise requires:- 2 of 1974 (ia) "Code" means
                                    the code of Criminal Procedure; (iia) "Collector" includes an Additional Collector
                                    and such other Officer, not below the rank of Sub-Divisional Officer as may be
                                    authorized by the Collector to perform the functions and exercise the powers of the
                                    Collector under this Act;
                                    (a)"Essential commodity? means any of the following classes of commodities:-

                                    (i) Cattle fodder, including oilcakes and other concentrates;

                                    (ii) Coal, including coke and other derivatives;

                                    (iii) Component parts and accessories of automobiles;

                                    (iv) Cotton and woolen textiles;

                                    (iva) Drugs.</td>
                                <td> <button type="button" class="btn btn-sm  button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>APPLICATION OF CODE TO PROCEEDINGS BEFORE A SPECIAL COURT</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp" >Save as otherwise provided in this Act, the provisions of the Code (including the
                                    provisions as to bail and bonds) shall apply to the proceedings before a Special
                                    Court and for the purposes of the said provisions, the Special Court shall be deemed
                                    to be a Court of Sessions and the person conducting a prosecution before a Special
                                    Court, shall be deemed to be a Public Prosecutor.</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>IMPOSITION OF DUTIES ON STATE GOVERNMENT, ETC</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">An order made under section 3 may confer powers and impose duties upon the Central
                                    Government or the State Government or Officers and authorities of the Central
                                    Government or State Government and may contain directions to any State Government or
                                    to Officers and authorities thereof as to the exercise of any such powers or the
                                    discharge of any such duties.</td>
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
                                <td>OFFENCES BY COMPANIES</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp"> 1. If the person contravening an order made under section 3 is a company, every
                                    person who, at the time the contravention was committed was in charge of and was
                                    responsible to the company for the conduct of the business of the company as well as
                                    company shall be deemed to be guilty of the contravention and shall be liable to be
                                    proceeded against and punished accordingly.
                                    Provided that nothing contained in this sub-section shall render any such person
                                    took place without his knowledge or that he exercised all due diligence to prevent
                                    such contravention.</td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>OFFENCES TO BE COGNIZABLE</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">Not with standing anything contained in the Code of Criminal Procedure, 1973, every
                                    offence punishable under this Act shall be cognizable and non-bailable. </td>
                                <td>
                                    <button type="button" class="btn btn-sm button-readmore-white mx-2 mt-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>BURDEN OF PROOF IN CERTAIN CASES</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">Where a person is prosecuted for contravening any order made under section 3 which
                                    prohibits him from doing any act or being in possession of a thing without lawful
                                    authority or without a permit, license or other document, the burden of providing
                                    that he has such authority, permit, license or other document shall be on him.</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>PROTECTION OF ACTION TAKEN UNDER ACT</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">No suit, prosecution or other legal proceeding shall lie against any person for
                                    anything which is in good faith done or intended to be done in pursuance of any
                                    order made under section 3.</td>
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