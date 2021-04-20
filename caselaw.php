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
        <div class="row px-3 px-md-5 py-3 pb-1">
            <div class="col-12 heading text-center">
                Case Laws
            </div>
            <div class="col-12 py-2">
                <div class="d-flex justify-content-center">
                    <div class="ml-auto">
                        <div class="px-2  mt-md-0 px-md-3">
                            <div class="search-act col-12 md-col-6 ">
                                <input type="text" placeholder="Search Acts" id="myInput"
                                    class="border-0 w-100 pr-4 search-input pl-2">
                                <button class="border-0 bg-transparent search-btn"><i class="fa fa-search"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="welfare_scroll scrollbarnew col-12">
                <div class="col-12 py-2 ">
                    <table class="table table-striped table-borderless">
                        <thead class="t-head">
                            <tr>
                                <th scope="col" class="text-center">S.No</th>
                                <th scope="col" class="text-center">Appellant/Petitioner</th>
                                <th scope="col" class="text-center">Respondent</th>
                                <th scope="col" class="text-center">Case Number</th>
                                <th scope="col" class="text-center">Judgement By</th>
                                <th scope="col" class="text-center">Judgement Date</th>
                                <th scope="col" class="text-center">Judgement</th>
                                <th scope="col" class="text-center">Name of the Court</th>
                                <th scope="col" class=""></th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <td class="text-center">1</td>
                                <td>Management, Britannia Industries Ltd, Padi Chennai</td>
                                <td> (1) Presiding Officer, Principal
                                    Labour Court, Chennai
                                    (2) Sri Rajesh Kanna</td>
                                <td>Writ Petitions No. 754 and 755 of 2005 and Writ
                                    Petition Miscellaneous Petitions Nos. 822 and
                                    38205 of 2005 and W.V.M.P. No. 2370 of 2006</td>
                                <td>Single Judge</td>
                                <td>4/13/2006</td>
                                <td>K.Suguna</td>
                                <td>Madras High Court</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        data-toggle="modal" data-target="#case">View
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Municipal Council, Nangal & Ors</td>
                                <td>Aruna Saini</td>
                                <td>CIVIL APPEAL No.3350 of 2017</td>
                                <td>Multi Judge</td>
                                <td>2/28/2017</td>
                                <td>Mr. L. Nageswara rao,
                                    Mr.SA Bobde,j</td>
                                <td>Supreme Court</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        data-toggle="modal" data-target="#case">View
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Mehiboobsab</td>
                                <td>Upalokayukta and Ors</td>
                                <td>Writ Petition No. 15019/2002</td>
                                <td>Multi Judge</td>
                                <td>4/18/2002</td>
                                <td>R.V. Raveendran, J.
                                    M.S. Rajendra Prasad, J</td>
                                <td>Karnataka High Court</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        data-toggle="modal" data-target="#case">View
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
</body>

</html>