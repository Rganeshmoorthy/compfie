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
});
</script>

<body>

    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-3 px-md-5 py-3 pb-1"> 
         <!-- <a href="domain-page.php"><button type="button" class="bg-bt text-white pr-2"><i class="fa fa-arrow-left text-white px-1 nav-prev" aria-hidden="true"></i>Back </button></a>         -->
            <div class="col-12 heading text-center">
                Case Laws
            </div>
            <div class="col-12 py-2">
                <div class="d-flex justify-content-center">
                    <div class="ml-auto case-law-search">
                        <div class="px-2  mt-md-0 px-md-3">
                            <div class="search-act col-12 md-col-6 ">
                                <input type="text" placeholder="Search Petitioner" id="myInput"
                                    class="border-0 w-100 pr-4 search-input pl-2">
                                <button class="border-0 bg-transparent search-btn"><i class="fa fa-search"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 px-lg-5">
                <div class="col-12 py-2 p-0 table-wrap2 scrollbarnew">
                    <table class="table table-striped table-borderless">
                        <thead class="t-head">
                            <tr>
                                <th scope="col" class="text-center">S.No</th>
                                <th scope="col" class="text-center">Name of the Court</th>
                                <th scope="col" class="text-center">Appellant/Petitioner</th>
                                <th scope="col" class="text-center">Respondent</th>
                                <th scope="col" class="text-center">Case Number</th>                                
                                <th scope="col" class="text-center">Case Date</th>
                                <th scope="col" class="text-center">Case Subject</th>                                
                                <th scope="col" class=""></th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <td class="">1 &nbsp; &nbsp; &nbsp;</td>
                                <td class="">Madras High Court</td>
                                <td class="">Management, Britannia Industries Ltd, Padi Chennai</td>
                                <td class="case-law-btnn"><p class="case-law-p mb-0"> (1) Presiding Officer, Principal
                                    Labour Court, Chennai
                                    (2) Sri Rajesh Kanna</p>
                                    <a class="moreless-button" href="#">READ MORE</a>  
                                </td>
                                <td class="case-law-btnn"> <p class="case-law-p mb-0">Writ Petitions No. 754 and 755 of 2005 and Writ
                                    Petition Miscellaneous Petitions Nos. 822 and
                                    38205 of 2005 and W.V.M.P. No. 2370 of 2006</p><a class="moreless-button" href="#">READ MORE</a>                                                                     
                                    
                                </td>                             
                                <td class="">4/13/2006</td>
                                <td class="">Management, Britannia Industries Ltd, Padi Chennai</td>                                
                                <td class=""> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        data-toggle="modal" data-target="#case">View
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="">2</td>
                                <td class="">Supreme Court</td>
                                <td class="">Municipal Council, Nangal & Ors</td>
                                <td class="">Aruna Saini</td>
                                <td class="">CIVIL APPEAL No.3350 of 2017</td>                                
                                <td class="">2/28/2017</td>
                                <td class="">Management, Britannia Industries Ltd, Padi Chennai</td>                                
                                <td class=""> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        data-toggle="modal" data-target="#case2">View
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="">3</td>
                                <td class="">Karnataka High Court</td>
                                <td class="">Mehiboobsab</td>
                                <td class="">Upalokayukta and Ors</td>
                                <td class="">Writ Petition No. 15019/2002</td>                                
                                <td class="">4/18/2002</td>
                                <td class="">Management, Britannia Industries Ltd, Padi Chennai</td>                                
                                <td class=""> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        data-toggle="modal" data-target="#case3">View
                                        more</button>
                                </td>
                            </tr>
                                     <tr>
                                <td class="">4</td>
                                <td class="">Karnataka High Court</td>
                                <td class="">Mehiboobsab</td>
                                <td class="">Upalokayukta and Ors</td>
                                <td class="">Writ Petition No. 15019/2002</td>                                
                                <td class="">4/18/2002</td>
                                <td class="">Management, Britannia Industries Ltd, Padi Chennai</td>                                
                                <td class=""> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        data-toggle="modal" data-target="#case3">View
                                        more</button>
                                </td>
                            </tr>
                            </tr>
                                     <tr>
                                <td class="">5</td>
                                <td class="">Karnataka High Court</td>
                                <td class="">Mehiboobsab</td>
                                <td class="">Upalokayukta and Ors</td>
                                <td class="">Writ Petition No. 15019/2002</td>                                
                                <td class="">4/18/2002</td>
                                <td class="">Management, Britannia Industries Ltd, Padi Chennai</td>                                
                                <td class=""> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        data-toggle="modal" data-target="#case3">View
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
<!--modal-->
    <div class="modal fade" id="case" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-md-5">
                    <h4 class="bold_font text-center">Case Title : Domestic Enquiry</h4>
                    <div class="d-flex justify-content-center py-3">
                        <div class="px-1 px-md-5">
                            <div class="">
                                <h6 class="bold_font text-center" >Judgement By</h6>
                            </div>
                            <div class="">
                                <p class="mod-para">Single Judge</p>
                            </div>
                        </div>
                         <div class="px-1 px-md-5">
                            <div class="">
                                <h6 class="bold_font text-center">Judgement Date</h6>
                            </div>
                            <div class="">
                                <p class="mod-para">4/13/2006</p>
                            </div>
                        </div>
                         <div class="px-1 px-md-5">
                            <div class="">
                                <h6 class="bold_font text-center">Judge</h6>
                            </div>
                            <div class="">
                                <p class="mod-para">K.Suguna</p>
                            </div>
                        </div>
                    </div>
                    <h4 class="bold_font text-center">Case Description</h4>
                    <h6 class="">The short facts are:</h6>
                    <h6 class="mb-3">
                        In the year 1993, the second respondent joined the service of the petitioner management.
                        With
                        regard to certain lapses, a showcause notice, dated 12 September 2000, was issued to the
                        second
                        respondent. Not satisfied with the reply submitted by him, a
                        domestic enquiry was ordered and by letter dated 29 December 2000, the second respondent was
                        advised to be present at the
                        time of enquiry scheduled on 6 January 2001. After providing more than one opportunity to
                        the
                        workman, since the second
                        respondent workman did not attend the enquiry, the petitioner management was forced to
                        conduct
                        an ex parte enquiry and
                        basing on the evidence let in before the enquiry officer and the documents marked, the
                        enquiry
                        officer submitted a report
                        holding that the second respondent is guilty of the misconduct alleged against him. Again, a
                        show-cause notice, dated 27
                        February 2001, was issued, to the second respondent seeking his explanation and after
                        receiving
                        reply from the second
                        respondent, the petitioner management passed an order, dated 23 March 2001, dismissing the
                        second respondent from service.
                        After this, since the conciliation proceedings did not yield any result, the second
                        respondent/
                        workman raised a dispute in ID. .</h6>
                    <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="case2" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-md-5">
                    <h4 class="bold_font text-center">Case Title : Domestic Enquiry</h4>
                    <div class="d-flex justify-content-center py-3">
                        <div class="px-1 px-md-5">
                            <div class="">
                                <h6 class="bold_font text-center" >Judgement By</h6>
                            </div>
                            <div class="">
                                <p class="mod-para">Multi Judge</p>
                            </div>
                        </div>
                         <div class="px-1 px-md-5">
                            <div class="">
                                <h6 class="bold_font text-center">Judgement Date</h6>
                            </div>
                            <div class="">
                                <p class="mod-para">2/28/2017</p>
                            </div>
                        </div>
                         <div class="px-1 px-md-5">
                            <div class="">
                                <h6 class="bold_font text-center">Judge</h6>
                            </div>
                            <div class="">
                                <p class="mod-para">Mr. L. Nageswara rao</p>
                            </div>
                        </div>
                    </div>
                    <h4 class="bold_font text-center">Case Description</h4>
                    <h6 class="">The short facts are:</h6>
                    <h6 class="mb-3">
                        In the year 1993, the second respondent joined the service of the petitioner management.
                        With
                        regard to certain lapses, a showcause notice, dated 12 September 2000, was issued to the
                        second
                        respondent. Not satisfied with the reply submitted by him, a
                        domestic enquiry was ordered and by letter dated 29 December 2000, the second respondent was
                        advised to be present at the
                        time of enquiry scheduled on 6 January 2001. After providing more than one opportunity to
                        the
                        workman, since the second
                        respondent workman did not attend the enquiry, the petitioner management was forced to
                        conduct
                        an ex parte enquiry and
                        basing on the evidence let in before the enquiry officer and the documents marked, the
                        enquiry
                        officer submitted a report
                        holding that the second respondent is guilty of the misconduct alleged against him. Again, a
                        show-cause notice, dated 27
                        February 2001, was issued, to the second respondent seeking his explanation and after
                        receiving
                        reply from the second
                        respondent, the petitioner management passed an order, dated 23 March 2001, dismissing the
                        second respondent from service.
                        After this, since the conciliation proceedings did not yield any result, the second
                        respondent/
                        workman raised a dispute in ID. .</h6>
                    <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
     <div class="modal fade" id="case3" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body p-md-5">
                    <h4 class="bold_font text-center">Case Title : Domestic Enquiry</h4>
                    <div class="d-flex justify-content-center py-3">
                        <div class="px-1 px-md-5">
                            <div class="">
                                <h6 class="bold_font text-center" >Judgement By</h6>
                            </div>
                            <div class="">
                                <p class="mod-para">Multi Judge</p>
                            </div>
                        </div>
                         <div class="px-1 px-md-5">
                            <div class="">
                                <h6 class="bold_font text-center">Judgement Date</h6>
                            </div>
                            <div class="">
                                <p class="mod-para">4/18/2002</p>
                            </div>
                        </div>
                         <div class="px-1 px-md-5">
                            <div class="">
                                <h6 class="bold_font text-center">Judge</h6>
                            </div>
                            <div class="">
                                <p class="mod-para">R.V. Raveendran</p>
                            </div>
                        </div>
                    </div>
                    <h4 class="bold_font text-center">Case Description</h4>
                    <h6 class="">The short facts are:</h6>
                    <h6 class="mb-3">
                        In the year 1993, the second respondent joined the service of the petitioner management.
                        With
                        regard to certain lapses, a showcause notice, dated 12 September 2000, was issued to the
                        second
                        respondent. Not satisfied with the reply submitted by him, a
                        domestic enquiry was ordered and by letter dated 29 December 2000, the second respondent was
                        advised to be present at the
                        time of enquiry scheduled on 6 January 2001. After providing more than one opportunity to
                        the
                        workman, since the second
                        respondent workman did not attend the enquiry, the petitioner management was forced to
                        conduct
                        an ex parte enquiry and
                        basing on the evidence let in before the enquiry officer and the documents marked, the
                        enquiry
                        officer submitted a report
                        holding that the second respondent is guilty of the misconduct alleged against him. Again, a
                        show-cause notice, dated 27
                        February 2001, was issued, to the second respondent seeking his explanation and after
                        receiving
                        reply from the second
                        respondent, the petitioner management passed an order, dated 23 March 2001, dismissing the
                        second respondent from service.
                        After this, since the conciliation proceedings did not yield any result, the second
                        respondent/
                        workman raised a dispute in ID. .</h6>
                    <button type="button" class="close position-absolute t-0 r-0 p-3 outline-0" data-dismiss="modal"
                        aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</body>

</html>