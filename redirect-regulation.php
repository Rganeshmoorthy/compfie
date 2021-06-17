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
                                <th scope="col" class="se-no">P.No</th>
                                <th scope="col" class="">Para Title</th>
                                <!-- <th scope="col" class="">Section</th> -->
                                <th scope="col" class="">Para Description</th>
                                <th scope="col" class=""></th>
                            </tr>
                        </thead>
                        <tbody class="table-content" id="myTable">
                            <tr>
                                <th scope="row">1</th>
                                <td>SHORT TITLE, COMMENCEMENT AND APPLICATION</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">(1) This scheme may be called The Coal Mines Pension Scheme, 1998.
                                    (2) It shall come into force from such date as the Central Government may, by
                                    notification in the Official
                                    Gazette, appoint.
                                    (3) It shall apply to the employees of the coal mines to which the Coal Mines
                                    Provident Pund Scheme, 1948, the
                                    Andhra Pradesh Coal Mines Provident Fund Scheme, 1956, and the Rajasthan Coal Mines
                                    Provident Fund Scheme,
                                    1958, framed under section 3 of the Coal Mines Provident Fund and Miscellaneous
                                    Provisions Act, 1948, apply.</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>DEFINITIONS</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp"> In this scheme, unless the context otherwise requires,—
                                    (a) “Act” means the Coal Mines Provident Fund and Miscellaneous Provisions Act, 1948
                                    (46 of 1948);
                                    (b) appointed day or date of joining, as the case may be means the date appointed
                                    under sub-paragraph (2)
                                    of paragraph 1 of the scheme;
                                    ( c ) “authorised officer” means the Regional Commissioner or the Assistant
                                    Commissioner or any other
                                    officer appointed under subsection (2) of section 3C;
                                    (d) “average emoluments” means the average of the notional salary payable to an
                                    employee for the last
                                    ten months before retirement from the service;
                                    (e) “Board” means the Board of Trustees constituted under section 3A;
                                    (f) “Commissioner” means the Coal Mines Provident Fund Commissioner appointed under
                                    sub-section (1) of
                                    section 3C;(g) “employee” means an employee of the coal mines in respect of which
                                    the Coal Mines Provident Fund
                                    Schemes have been made applicable;
                                    (h) “family”, in relation to an employee, means—</td>
                                <td> <button type="button" class="btn btn-sm  button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>ESTABLISHMENT OF THE PENSION FUND</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">From the appointed day the pension fund shall stand established
                                    which shall have the sole purpose of the
                                    provision of the payment of pension in accordance with the scheme to the employee or
                                    his family or the payment of
                                    any amount which may have accrued under the provisions of the Coal Mines Family
                                    Pension Scheme, 1971,
                                    immediately before the appointed day. The pension fund shall consist of the
                                    following—
                                    (a) net assets of the Coal Mines Family Pension Scheme, 1971, as on the appointed
                                    day,;
                                    (b) an amount equivalent to two and one-third per cent. of the salary of the
                                    employee, being the aggregate of
                                    equal shares of the employee and the employer from their respective contributions to
                                    the fund to be transferred
                                    from the appointed day from the fund of the employee;
                                    (c) an amount equivalent to two per cent. of the basic and dearness allowance paid
                                    of the employee from the
                                    first day of April, 1989, or the date of joining, whichever is later, up to the 31st
                                    day of March, 1996, and two per
                                    cent. of the notional salary of the employee from the 1st day of April 1996, or the
                                    date of joining, whichever is later,
                                    to be transferred from his salary;
                                    (d) an amount equivalent to one increment to be calculated on the basis of the
                                    salary of the employee as on
                                    the first day of July, 1995, or the date of joining, whichever is later, to be
                                    transferred from the first day of July, 1995,
                                    or the date of joining, whichever is later, from the salary of the employee; and
                                    (e) an amount equivalent to one and two-thirds per cent. of the salary of the
                                    employee to be contributed by
                                    the Central Government from the appointed day:
                                    Provided that in the case of an employee whose salary exceeds rupees one thousand
                                    six hundred per month,
                                    the contribution payable by the Central Government shall be equal to the maximum of
                                    the amount payable on the
                                    salary of rupees one thousand six hundred per month only;</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>ELIGIBILITY FOR PENSION</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">(1) An employee who was a member of the Coal Mines Family Pension
                                    Scheme, 1971, immediately before the
                                    appointed day and has not attained the age of superannuation shall be deemed to be
                                    eligible for pension under the
                                    provisions of this scheme from the appointed day.
                                    (2) An employee who had not opted for the Coal Mines Family Pension Scheme, 1971,
                                    but is covered by the
                                    provident fund scheme, may opt for pension under the provisions of this scheme
                                    within the period of three hundred
                                    and sixty-six days from the appointed day and he shall be deemed to have become the
                                    member of the scheme from
                                    the date of his exercising the option in Form PS1.
                                    Provided that an employee exercising the option under the provisions of this
                                    sub-paragraph shall have todeposit in the pension fund either in cash or by way of
                                    deduction in instalments from his monthly salary or by
                                    transfer from his provident fund account to the pension fund, the arrears equivalent
                                    to the amounts specified in
                                    clauses (b), (c), (d) and (e) of paragraph 3, alongwith interest from the first day
                                    of March, 1971, till the date of
                                    exercising the option in respect of arrears,—
                                    (i) specified in clause (b), at the rate admissible from time to time to the monies
                                    in Coal Mines Provident Fund;
                                    (ii) specified in clauses (c) and (d), at the rate of twelve per cent. per annum;
                                    and</td>
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
                                <td>PARTICULARS TO BE FURNISHED BY AN EMPLOYEE</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">(1) An employee eligible for pension under the provisions of
                                    sub-paragraphs (1) and (3) of paragraph 4, shall
                                    within a period of ‘[three hundred and sixty-six days] from the appointed day submit
                                    to his employer the particulars
                                    of his family members in triplicate in Form PS 3 and nomination in triplicate in
                                    Form PS 4 which after proper
                                    verification and due attestation shall be forwarded by the employer to the concerned
                                    authorised officer.
                                    (2) An employee who opts for pension under the provisions of sub- paragraphs (2) and
                                    (4) of paragraph 4,
                                    shall submit to his employer the particulars of his family members in triplicate in
                                    Form PS 3 and nomination in
                                    triplicate in Form PS4 while exercising the option which after proper verification
                                    and due attestation shall be
                                    forwarded by the employer to the concerned authorised officer.
                                    (3) Where an employee eligible for pension under the provisions of the scheme does
                                    not have a wife/husbandat the time of making the nomination he may indicate the name
                                    and particulars of the guardian of his minor son or
                                    daughter for the purpose of receiving the benefits under the provisions of the
                                    scheme.</td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">7</th>
                                <td>CALCULATION OF CONTRIBUTIONS</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">(1) The rate of increment referred to in clause (d) of paragraph 3
                                    in respect of time-rated or piece-rated
                                    category of employee shall be twenty-six times of his daily rate of increment.
                                    (2) Where an employee exercises his option under the provisions of subparagraph (2)
                                    of paragraph 4 and is
                                    unable to deposit in full the amounts referred to in that sub-paragraph on or before
                                    the date of his superannuation,
                                    the amount of his pension shall be reduced by an amount calculated on the basis
                                    specified in Schedule 1.
                                    (3) Where the amount of pension fund referred to in clauses (c) and (d) of paragraph
                                    3 had not been
                                    deducted from the salary of the employee by an employer till the appointed day or
                                    had been deducted in part or in
                                    full but not remitted to the Commissioner on or before the appointed day, such
                                    amount shall be remitted to the
                                    Commissioner within a period of one hundred and twenty days from the appointed day
                                    and an interest of twelve per
                                    cent. per annum accrued on such amount as on the appointed day shall have also to be
                                    remitted by the employer to
                                    the Commissioner.</td>
                                <td>
                                    <button type="button" class="btn btn-sm button-readmore-white mx-2 mt-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">8</th>
                                <td>RESPONSIBILITIES OF THE EMPLOYER</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">(1) Every employer of the employee shall submit to the
                                    Commissioner on or before the 30th day of every
                                    month a return of contributions for the preceding month towards the pension fund
                                    along with the details of
                                    contributions towards provident fund in Form PS 5.
                                    (2) Every employer shall be responsible for payment of the amount equivalent to one
                                    and one-sixth per cent.
                                    of the salary of the employee to be transferred from the fund as employer’s share in
                                    terms of clause (b) of
                                    paragraph 3 and the same shall not be deducted from the salary or other benefits of
                                    the employee.</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">9</th>
                                <td>INVESTMENT, ETC., OF PENSION FUND</td>
                                <!-- <td>Lorem ipsum dolor sit amet, consectetur</td> -->
                                <td class="short-ppp">(1) The total amount vested in and transferred to the pension fund
                                    in accordance with the provisions of clause
                                    (a) of paragraph 3, except such amount as may be required from time to time for
                                    making the payment of pension
                                    and other benefits under the scheme, shall be deposited on the appointed day by the
                                    Commissioner with the Central
                                    Government in the public account.
                                    (2) The Commissioner shall make suitable banking arrangements in respect of the
                                    amount vested in the
                                    pension fund in accordance with the provisions of clauses (b), (c), (d), (e) and (f)
                                    of paragraph 3 and such amount
                                    shall be invested in accordance with such pattern of investment as may be determined
                                    by the Central Government
                                    in the Ministry of Finance from time to time.</td>
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