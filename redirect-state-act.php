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
            <a href="domain-page4.php"><button type="button" class="bg-bt text-white pr-2"><i
                        class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Goto State
                    Acts</button></a>
            <div class="col-12 heading text-center">
                State Acts
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
                                <th scope="col" class="se-no">Sec.No</th>
                                <th scope="col" class="">Section Title</th>
                                <!-- <th scope="col" class="">Section</th> -->
                                <th scope="col" class="">Section Description</th>
                                <th scope="col" class=""></th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <th scope="row">1</th>
                                <td>SHORT TITLE AND EXTENT AND COMMENCEMENT</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">(1) This Act may be called the Tamil Nadu Shops and Establishments
                                    Act, 1947.
                                    (2) It extends to the whole of the State of Madras.
                                    (3) (a) It shall come into force in the following areas on such date as the State
                                    Government may, by
                                    notification, appoint:
                                    (i) the City of Madras,
                                    (ii) all the municipalities constituted under the Madras District Municipalities
                                    Act, 1920 (Madras Act V of
                                    1920), and
                                    (iii) all areas within the jurisdiction of panchayats which, tinder rule 2 of
                                    Schedule III to the Madras Village
                                    Panchayats Act, 1950 (Madras Act X of 1950), should be deemed to be constituted
                                    under that Act, and which
                                    immediately before the commencement of that Act, were classified by the State
                                    Government as major panchayats
                                    and all areas within the jurisdiction of panchayats constituted or reconstituted
                                    under that Act which, for the time
                                    being, are classified by the State Government as Class I Panchayats under section
                                    5(1) (a) of that Act.
                                    (b) The State Government may, by notification, direct that all or any of the
                                    provisions of this Act shall come
                                    into force in any other area on such date as may be specified in such notification.
                                    </p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                </td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>DEFINITIONS</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">In this Act, unless there is anything repugnant in the subject or
                                    context--
                                    (1) ‘child” means a person who has not completed fourteen years;
                                    (2) “closed” means not open for the service of any customer or open to any business
                                    connected with the
                                    establishment;(3) “commercial establishment” means an establishment which is not a
                                    shop but which carries on the
                                    business of advertising, commission, forwarding or commercial agency, or which is a
                                    clerical department of a
                                    factory or industrial undertaking or which is an insurance company, joint stock
                                    company, bank, broker’s office or
                                    exchange and includes such other establishment as the State Government may by
                                    notification declare to be a
                                    commercial establishment for the purposes of this Act;</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td> <button type="button" class="btn btn-sm  button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="up">Registration of shops and establishments</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">(1) On and from the date of commencement of the Tamil Nadu Shops
                                    and
                                    Establishments (Amendment) Act, 2018, employer of every establishment employing ten
                                    or more workers
                                    shall, within a period of six months from the date of commencement of his business,
                                    apply for registration
                                    and obtain a registration certiï¬?cate.
                                    (2) Every application for registration under sub-section (1) shall be in such form
                                    and in such manner as may
                                    be prescribed.
                                    (3) The inspector on receipt of an application under sub-section (2), register the
                                    establishment and issue a
                                    registration certiï¬?cate to the employer in such form as may be prescribed.
                                    (4) The inspector shall maintain the Register of establishments and the registration
                                    certiï¬?cate issued by
                                    the inspector shall be prominently displayed in the establishment by the employer.
                                    (5) (a) The registration certiï¬?cate shall be valid for a period of ï¬?ve years and
                                    shall be renewable once
                                    in ï¬?ve years on payment of such fees as may be prescribed and the provisions of
                                    sub-sections (2) and (3)
                                    shall apply for the renewal of registration certiï¬?cate;
                                    (b) Every employer shall apply for renewal of his registration certiï¬?cate before
                                    thirty days from the date
                                    of expiry of the period of validity of the registration certiï¬?cate.
                                    (6) If registration or renewal of a registration certiï¬?cate is not issued within a
                                    period of thirty days from
                                    the date of receipt of application by the inspector, the registration certiï¬?cate
                                    shall be deemed to have been
                                    granted or renewed, as the case may be, under this Act.
                                    (7) The employer shall give intimation to the inspector, of any change in any of the
                                    particulars furnished in
                                    the application form submitted under sub-section (2), within a period of thirty days
                                    of such change. The
                                    inspector shall on receipt of such intimation shall amend the registration
                                    certiï¬?cate or issue a fresh
                                    registration certiï¬?cate.
                                    (8) The employer shall, within a period of thirty days of the closure of the
                                    establishment, give intimation of
                                    such closure to the inspector and on receipt of such intimation, he shall cancel the
                                    registration certiï¬?cate:</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td class="up">EXEMPTION</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">(1) Nothing contained in this Act shall apply to--(a) persons
                                    employed in any establishment in a position of
                                    management;
                                    (b) persons whose work involves travelling; and persons employed as canvassers and
                                    caretakers;
                                    (c) establishments under the Central and State Governments, local authorities the
                                    Reserve Bank of India, [***]
                                    a railway administration operating any railway as defined in clause (20) of article
                                    366 of the Constitution and
                                    cantonment authorities;
                                    (d) establishments in mines and oil-fields;
                                    (e) establishments in bazaars in places where fairs or festivals are held
                                    temporarily for a period not exceeding
                                    fifteen days at a time;
                                    (f) establishments which, not being factories within the meaning of the Factories
                                    Act, 1948, are in respect of
                                    matters dealt with in this Act, governed by a separate law for the time being in
                                    force.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
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
                                <th scope="row">8</th>
                                <td>SELLING OUTSIDE SHOPS PROHIBITED AFTER CLOSING HOUR</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">Save as provided by or under any other enactment for the time
                                    being in force, no person shall carry on, in or
                                    adjacent to a Street or public place, the sale of any goods after the hour fixed
                                    under section 7 for the Closing of
                                    shops dealing in the same class of goods in the locality in which such street or
                                    public place is situated
                                    Provided that nothing in this section shall apply to the sale of newspapers.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>DAILY AND WEEKLY HOURS OF WORK IN SHOPS</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">(1) Subject to the provisions of this Act, no person employed in
                                    any shop shall be required or allowed to
                                    work therein for more than eight hours in any day and forty-eight hours in any week:
                                    Provided that any such person may be allowed to work in such shop for any period in
                                    excess of the
                                    limit fixed under this sub-section subject to payment of overtime wages, if the
                                    period of work including
                                    overtime work, does not exceed 9.1.a {ten and a half hours} in any day and in the
                                    aggregate 9.1.b {fifty-seven
                                    hours} in any week.
                                    (2) No person employed in any shop shall be required or allowed to work therein for
                                    more than four
                                    hours in any day unless he has had an interval for rest of at least one hour.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>                                    
                                    </td>
                                <td>
                                    <button type="button" class="btn btn-sm button-readmore-white mx-2 mt-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">10</th>
                                <td>SPREAD OVER OF PERIODS OF WORK</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">The periods of work of a person employed in a shop shall be so
                                    arranged that, along with his intervals for rest,
                                    they shall not spread over more than twelve hours in any day.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">11</th>
                                <td>CLOSING OF SHOPS AND GRANT OF HOLIDAYS</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">(1) Every shop shall remain entirely closed on one day of the week
                                    which day shall be specified by the
                                    shopkeeper in a notice permanently exhibited in a conspicuous place in the shop; and
                                    the day so specified shall not
                                    be altered by the shopkeeper more often than once in three months.
                                    Note : Tamil Nadu - All shops and establishments to keep open on all 365 days of the
                                    year
                                    (2) Every person employed in a shop shall be allowed in each week a holiday of one
                                    whole day:
                                    Provided that nothing in this sub-section shall apply to any person whose total
                                    period of employment in the
                                    week, including any days spent on authorised leave, is less than six days, or
                                    entitle a person who has been allowed
                                    a whole holiday on the day on which the shop has remained closed in pursuance of
                                    sub-section (1), to an additional
                                    holiday.
                                    (3) (a) The State Government may, by notification, require in respect of shops or
                                    any specified class of shops,
                                    that they shall, in addition to the day provided for by sub-section (1), be closed
                                    at such hour in the afternoon of one
                                    week-day in every week at such hour as may be fixed by the State Government.
                                    (b) Every person employed in any shop to which a notification under clause (a)
                                    applies, shall be allowed in
                                    each week an additional holiday of one half-day commencing at the hour in the
                                    afternoon fixed for the closing of the
                                    shop under clause (a).
                                    (4) The State Government may, for the purpose of sub-section (3), fix different
                                    hours for different shops or
                                    different classes of shops or for different areas or for different times of the
                                    year.
                                    (5) The weekly day on which a shop is closed in pursuance of requirement under
                                    sub-section (3) shall be
                                    specified by the shop-keeper in a notice permanently exhibited in a conspicuous
                                    place in the shop, and shall not be
                                    altered by the shopkeeper more often than once in three months.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
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