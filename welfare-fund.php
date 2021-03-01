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

    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-3 px-md-5 py-3 pb-1">
            <div class="col-12 heading text-center">
                Labour Welfare Fund
            </div>
            <div class="col-12 py-2">
                <div class="d-flex justify-content-center">
                    <div>
                        <div class="px-2 px-md-3 ">
                            <select class="acts">

                                <option value=" ">State Name</option>
                                <option value="state_name + UTTARAKHAND">
                                    UTTARAKHAND</option>
                                <option value="state_name + UTTAR PRADESH">
                                    UTTAR PRADESH</option>
                                <option value="state_name + TRIPURA">
                                    TRIPURA</option>
                                <option value="state_name + SIKKIM">
                                    SIKKIM</option>
                                <option value="state_name + RAJASTHAN">
                                    RAJASTHAN</option>
                                <option value="state_name + PUDUCHERRY">
                                    PUDUCHERRY</option>
                                <option value="state_name + NAGALAND">
                                    NAGALAND</option>
                                <option value="state_name + MIZORAM">
                                    MIZORAM</option>
                                <option value="state_name + MEGHALAYA">
                                    MEGHALAYA</option>
                                <option value="state_name + MANIPUR">
                                    MANIPUR</option>
                                <option value="state_name + LAKSHADWEEP">
                                    LAKSHADWEEP</option>
                                <option value="state_name + JHARKHAND">
                                    JHARKHAND</option>
                                <option value="state_name + JAMMU AND KASHMIR">
                                    JAMMU AND KASHMIR</option>
                                <option value="state_name + HIMACHAL PRADESH">
                                    HIMACHAL PRADESH</option>
                                <option value="state_name + DAMAN AND  DIU">
                                    DAMAN AND DIU</option>
                                <option value="state_name + DADRA AND  NAGAR HAVELI">
                                    DADRA AND NAGAR HAVELI</option>
                                <option value="state_name + BIHAR">
                                    BIHAR</option>
                                <option value="state_name + ASSAM">
                                    ASSAM</option>
                                <option value="state_name + ARUNACHAL PRADESH">
                                    ARUNACHAL PRADESH</option>
                                <option value="state_name + ANDAMAN AND NICOBAR ISLAND">
                                    ANDAMAN AND NICOBAR ISLAND</option>
                                <option value="state_name + WEST BENGAL">
                                    WEST BENGAL</option>
                                <option value="state_name + UT OF CHANDIGARH">
                                    UT OF CHANDIGARH</option>
                                <option value="state_name + TELANGANA">
                                    TELANGANA</option>
                                <option value="state_name + TAMIL NADU">
                                    TAMIL NADU</option>
                                <option value="state_name + PUNJAB">
                                    PUNJAB</option>
                                <option value="state_name + ODISHA">
                                    ODISHA</option>
                                <option value="state_name + NEW DELHI">
                                    NEW DELHI</option>
                                <option value="state_name + MAHARASHTRA">
                                    MAHARASHTRA</option>
                                <option value="state_name + MADHYA PRADESH">
                                    MADHYA PRADESH</option>
                                <option value="state_name + KERALA - WWF">
                                    KERALA - WWF</option>
                                <option value="state_name + KERALA">
                                    KERALA</option>
                                <option value="state_name + KARNATAKA">
                                    KARNATAKA</option>
                                <option value="state_name + HARYANA">
                                    HARYANA</option>
                                <option value="state_name + GUJARAT">
                                    GUJARAT</option>
                                <option value="state_name + GOA">
                                    GOA</option>
                                <option value="state_name + CHHATTISGARH">
                                    CHHATTISGARH</option>

                                <option value="state_name + ANDHRA PRADESH">
                                    ANDHRA PRADESH</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="px-2  mt-md-0 px-md-3">
                            <div class="search-act col-12 md-col-6 ">
                                <input type="text" placeholder="Search Acts"
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
                                <th scope="col" class="">State Name</th>
                                <th scope="col" class="">In which month Salary contribution is to be deducted</th>
                                <th scope="col" class="">Periodicity</th>
                                <th scope="col" class="">Employee Contribution</th>
                                <th scope="col" class="">Employer Contribution</th>
                            </tr>
                        </thead>
                        <tbody class="table-content">
                            <tr>
                                <td>WEST BENGAL</td>
                                <td>15 jul & 15 Jan</td>
                                <td>Half Yearly</td>
                                <td>3.00</td>
                                <td>15.00</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='welfare-more.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td>UTTARAKHAND</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Nil</td>
                                <td>Nil</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='welfare-more.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td>UTTAR PRADESH</td>
                                <td>-</td>
                                <td>-</td>
                                <td>Nil</td>
                                <td>Nil</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='welfare-more.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td>UT OF CHANDIGARH</td>
                                <td>15 jul & 15 Jan</td>
                                <td>Half Yearly</td>
                                <td>5</td>
                                <td>20</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='welfare-more.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td>TRIPURA</td>
                                <td>-</td>
                                <td>-</td>
                                <td>10</td>
                                <td>30</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='welfare-more.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td>TELANGANA</td>
                                <td>15 jul & 15 Jan</td>
                                <td>Half Yearly</td>
                                <td>3.00</td>
                                <td>15.00</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='welfare-more.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td>TAMILNADU</td>
                                <td>15 jul & 15 Jan</td>
                                <td>Half Yearly</td>
                                <td>3.00</td>
                                <td>15.00</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='welfare-more.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <td>SIKKIM </td>
                                <td>-</td>
                                <td>-</td>
                                <td>3.00</td>
                                <td>15.00</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='welfare-more.php'">Read
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