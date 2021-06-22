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
            <a href="domain-page5.php"><button type="button" class="bg-bt text-white pr-2"><i
                        class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Goto State
                    Rules</button></a>
            <div class="col-12 heading text-center">
                State Rules
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
                                <td>SHORT TITLE AND EXTENT</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">(1) These rules may be called the Tamil Nadu Shops and
                                    Establishments Rules, 1948.
                                    (2) They extend to the whole of the State of Tamil Nadu including the Kanyakumari
                                    district and the Shencottah taluk
                                    of the Tirunelveli district and the territories specified in the Second Schedule to
                                    the Andhra Pradesh and Madras
                                    (Alteration of Boundaries) Act, 1959 (Central Act 56 of 1959).</p>
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
                                <td class="case-law-btnn"><p class="case-law-p mb-0">In these rules, unless there is anything repugnant in the subject
                                    or context,-
                                    (a) ‘the Act” means the Tamil Nadu Shops and Establishments Act, 1947;
                                    (b) “ Form ‘ means a Form appended to these rules;
                                    (c) ‘Government’ means the Government of Tamil Nadu;
                                    (d) “ Section “ means a section of the Act;
                                    (e) Words and expressions used in the Act and not defined in these rules shall have
                                    the meanings assigned to
                                    them in the Act.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td> <button type="button" class="btn btn-sm  button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td class="up">INQUIRY BY GOVERNMENT BEFORE PASSING ORDERS FIXING OPENING</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">(1) The Government shall make the inquiry under sub-section (2) of
                                    section 7 in the manner specified in sub-
                                    rules (2) to (4).
                                    (2) Before passing an order under sub-section (1) of section 7, the Government shall
                                    give notice of their
                                    intention to pass such order. The notice shall be in Form A and shall, unless a copy
                                    of the order proposed to be
                                    passed is annexed to it, specify the area and the shop or shops or class or classes
                                    of shops to which the order shall
                                    apply, the hours of opening or the hours of closing or both which are proposed to be
                                    fixed and the days in respect ofwhich such hours are so proposed to be fixed. The
                                    notice shall also state that objections and suggestions with
                                    respect to such orders, if any, may be sent to the officer mentioned in the notice
                                    within one month from the date of
                                    publication of such notice in the Tamil Nadu Government Gazette.
                                    (3) The notice shall be published in the Tamil Nadu Government Gazette.</p>
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
                                <th scope="row">5</th>
                                <td>CLEANLINESS</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">(1) (a) In every establishment all the inside walls of the rooms
                                    and all the ceilings of such rooms (whether
                                    such walls or ceilings be plastered or not) and all the passages and staircases
                                    shall be lime-washed or colour-
                                    washed at intervals of not more than twelve months dating from the time when they
                                    were last lime-washed or
                                    colour-washed and shall be maintained in a clean state.
                                    (b) All beams, rafters, doors, window-frames and other wood-work with the exception
                                    of floors shall be either
                                    lime-washed or colour-washed at intervals of not more than twelve months dating from
                                    the time when they were
                                    last lime- washed or colour-washed or shall be painted or varnished at intervals of
                                    not more than seven years dating
                                    from the time when they were last painted or varnished and shall be maintained in a
                                    clean state.
                                    (c) This sub-rule shall not apply to the following:-(i) rooms used only for the
                                    storage of articles;
                                    (ii) walls or ceilings of rooms which are made of galvanised iron, flat tiles,
                                    asbestos sheets, glazed bricks,
                                    glass, slate, bamboo thatch, cement plaster or polished chunam
                                    (iii) ceilings of rooms in which the lowest part is at least 6 metres from the
                                    floor;
                                    (iv) any other establishment or part thereof in which lime-washing, colour washing,
                                    painting or varnishing is,
                                    in the Opinion of the Commissioner of Labour, unnecessary to satisfy the requiremet5
                                    of section 20 in regard to
                                    cleanliness.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">6</th>
                                <td>VENTILATION</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">In every room of an establishment ventilating opening shall be
                                    provided in the proportion of 0.5 square metre
                                    for each worker employed in such room and the opening shall be such as to admit of a
                                    continued supply of fresh air:
                                    Provided that subject to the control of the Commissioner of Labour, the Inspector
                                    may, for reasons to be
                                    recorded in writing, relax the conditions of this rule where, in his opinion, this
                                    may be done with due regard to the
                                    health of the workers employed in any room.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td>
                                    <button type="button" class="btn btn-sm button-readmore-white mx-2 mt-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>PRECAUTIONS AGAINST FIRE</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">The employer of every establishment shall adopt such precautions
                                    against danger by fire to the life of
                                    persons employed therein as are considered adequate by the Inspector.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>APPEALS FROM ORDERS PASSED UNDER CHAPTER V OF THE ACT</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">The Commissioner of Labour shall be the appellate authority for
                                    the purpose of hearing appeals from orders
                                    passed by the Inspector under Chapter V of the Act and any such appeal shall be
                                    preferred by the employer on
                                    whom the order of the Inspector under that Chapter have been served within thirty
                                    days from the date of the
                                    service of the order.</p>
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