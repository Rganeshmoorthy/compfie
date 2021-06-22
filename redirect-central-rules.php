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
        if ($(this).height() >= 63) {
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
            <a href="domain-page11.php"><button type="button" class="bg-bt text-white pr-2"><i
                        class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Goto Central
                    Rules</button></a>
            <div class="col-12 heading text-center">
                Central Rules
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
                    <input type="text" id="myInput" placeholder="Search.."
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
                                <th scope="col" class="se-no">Rule.No</th>
                                <th scope="col" class="">Rule Title</th>
                                <!-- <th scope="col" class="">Section</th> -->
                                <th scope="col" class="">Rule Description</th>
                                <th scope="col" class=""></th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <th scope="row">1</th>
                                <td>SHORT TITLE AND EXTENT</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">(1) This Act may be called the Essential Commodities Act, 1955.</p>
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
                                <td class="case-law-btnn"><p class="case-law-p mb-0"> In these rules, unless there is anything repugnant in the subject
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
                                <td>APPLICATION OF CODE TO PROCEEDINGS BEFORE A SPECIAL COURT</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">Save as otherwise provided in this Act, the provisions of the Code
                                    (including the
                                    provisions as to bail and bonds) shall apply to the proceedings before a Special
                                    Court and for the purposes of the said provisions, the Special Court shall be deemed
                                    to be a Court of Sessions and the person conducting a prosecution before a Special
                                    Court, shall be deemed to be a Public Prosecutor.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>IMPOSITION OF DUTIES ON STATE GOVERNMENT, ETC</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">An order made under section 3 may confer powers and impose duties
                                    upon the Central
                                    Government or the State Government or Officers and authorities of the Central
                                    Government or State Government and may contain directions to any State Government or
                                    to Officers and authorities thereof as to the exercise of any such powers or the
                                    discharge of any such duties.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
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
                                    cleanliness.
                                    (2) Rubbish, filth or debris shall not be allowed to accumulate or to remain on any
                                    part of the establishment
                                    for more than 24 hours and shall be disposed of in the manner approved by the
                                    Inspector. All filth and other
                                    decomposing matter shall be kept in covered receptacles.
                                    (3) All drains carrying waste or sullage water or sewage shall be constructed of
                                    masonry or other
                                    impermeable material and shall be regularly flushed at least twice daily and where
                                    possible, connected with some
                                    recognised drainage line.
                                    (4) The establishment and the compound surrounding it shall be maintained in a
                                    strictly sanitary and clean
                                    condition. The floors shall be swept or otherwise cleaned at least once daily, and
                                    the ceilings shall be dusted at
                                    least once a month.(5) The employer shall enforce the proper use of latrines and
                                    urinals and prevent pollution by excreta or urine
                                    of the surface of the ground in the vicinity of the latrine or urinal and in the
                                    compound of the establishment. The
                                    employer shall make suitable arrangements for the regular cleaning and conserving of
                                    the latrines and urinals to the
                                    satisfaction of the Inspector</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
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
                                <th scope="row">3</th>
                                <td>BURDEN OF PROOF IN CERTAIN CASES</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">Where a person is prosecuted for contravening any order made under
                                    section 3 which
                                    prohibits him from doing any act or being in possession of a thing without lawful
                                    authority or without a permit, license or other document, the burden of providing
                                    that he has such authority, permit, license or other document shall be on him.</p>
                                    <a class="moreless-button" href="#">READ MORE</a>
                                    </td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>PROTECTION OF ACTION TAKEN UNDER ACT</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="case-law-btnn"><p class="case-law-p mb-0">No suit, prosecution or other legal proceeding shall lie against
                                    any person for
                                    anything which is in good faith done or intended to be done in pursuance of any
                                    order made under section 3.</p>
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