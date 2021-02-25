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
    <?php include "nav-pills.php"?>
    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-3 px-md-5 ">
            <div class="col-12 heading text-center">
                NOTIFICATIONS
            </div>
            <div class="col-12 py-2">
                <div class="d-flex justify-content-center">
                    <div>
                        <button type="button" class="btn btn-sm text-white button-head mx-2"
                            onclick="window.location.href='full-act.php'">View Full Act</button>
                    </div>
                    <div>
                        <button type="button" class="btn btn-sm text-white button-head mx-2"
                            onclick="window.location.href='redirect-page.php'">Related Central
                            Rules</button>
                    </div>
                </div>
            </div>
            <div class="col-12 py-2 px-4 px-md-0">
                <div class="d-flex row">
                    <div>
                        <div class="px-2 px-md-3 ">
                            <select class="acts">
                                <option selected>Central Acts</option>
                                <option value="34">Trade Marks Act, 1999</option>
                                <option value="33">Tea Act, 1954</option>
                                <option value="32">Jute Packaging Materials (compulsory use in packing Commodities) act,
                                    1987</option>
                                <option value="31">Seeds Act, 1996</option>
                                <option value="30">Right To Information Act, 2005</option>
                                <option value="29">Right To Fair Compensation And Transparency In Land Acquisition
                                    Rehabilitation And Resettlement Act, 2013</option>
                                <option value="28">Patents Act, 1970</option>
                                <option value="27">Clinical Establishments (Registration And Regulation) Act, 2010
                                </option>
                                <option value="26">Explosives Act 1884, 1900</option>
                                <option value="24">Geographical Indications Of Goods (Registration And Protection) Act,
                                    1999</option>
                                <option value="23">Public Liability Insurance Act , 1991</option>
                                <option value="22">Pharmacy Act, 1948</option>
                                <option value="21">IT Act, 2000</option>
                                <option value="20">Industries(Development and Regulation) Act, 1951</option>
                                <option value="19">Indian Copyright Act, 1957</option>
                                <option value="18">Essential Commodities Act, 1955</option>
                                <option value="17">Drugs and Cosmetic Act , 1940</option>
                                <option value="16">Pre-Conception and Pre-Natal Diagnostic Techniques (Prohibition of
                                    Sex Selection) Act, 1994</option>
                                <option value="15">Insecticides Act, 1968</option>
                                <option value="14">Food Safety and Standards Act, 2006</option>
                                <option value="13">Legal Metrology Act, 2009</option>
                                <option value="12">Petroleum Act, 1934</option>
                                <option value="8">Employers' Liability Act, 1938</option>
                                <option value="6">Boilers Act, 1923</option>
                                <option value="4">Coir Industry Act, 1953</option>
                                <option value="7">Environment (Protection) Act, 1986</option>
                                <option value="1">Water (Prevention and Control of Pollution) Cess Act, 1977</option>
                                <option value="2">Water (Prevention and Control of Pollution) Act, 1974</option>
                                <option value="3">Iron Ore Mines, Manganese Ore Mines and Chrome Ore Mines Labour
                                    Welfare Cess Act, 1976</option>
                                <option value="9">Dangerous Machines (Regulation) Act, 1983</option>
                                <option value="10">Air (Prevention and Control of Pollution) Act, 1981</option>
                                <option value="11">Iron Ore Mines, Manganese Ore Mines and Chrome Ore Mines Labour
                                    Welfare Fund Act, 1976</option>
                                <option value="1228">Electricity Act, 2003</option>
                                <option value="5">Central Industrial Security Force Act, 1968</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="px-2 px-md-3">
                            <select class="acts col-sm-12">
                                <option value=" ">Central Rules</option>
                                <option value="323">Water (Prevention and Control of Pollution) Cess Rules, 1978
                                </option>
                                <option value="328">Iron Ore Mines, Manganese Ore Mines and Chrome Ore Mines Labour
                                    Welfare Cess Rules, 1978</option>
                                <option value="344">Air (Prevention and Control of Pollution) (Union Territories) Rules,
                                    1983</option>
                                <option value="327">Environment (Protection) Rules, 1986</option>
                                <option value="325">Dangerous Machines (Regulation) Rules, 2007</option>
                                <option value="322">Air (Prevention and Control of Pollution) Rules, 1982</option>
                                <option value="329">Iron Ore Mines, Manganese Ore Mines and Chrome Ore Mines Labour
                                    Welfare Fund Rules, 1978</option>
                                <option value="334">Insecticides Rules, 1971</option>
                                <option value="321">Water (Prevention and Control of Pollution) Rules, 1975</option>
                                <option value="370">Drugs and Cosmetics Rules, 1945</option>
                                <option value="372">Food Safety and Standards Rules, 2011</option>
                                <option value="371">Indian Copyright Rules, 1958</option>
                                <option value="369">Information Technology (Certifying Authorities) Rules, 2000</option>
                                <option value="368">Cyber Regulations Appellate Tribunal (Procedure) Rules, 2000
                                </option>
                                <option value="367">Trade Mark Rules, 2017</option>
                                <option value="366">Trade Marks (Applications And Appeals To The Intellectual Property
                                    Appellate Board) Rules, 2003</option>
                                <option value="365">Coir Industry Rules, 1954</option>
                                <option value="364">Tea Rules, 1954</option>
                                <option value="363">Rubber Rules, 1955</option>
                                <option value="362">Jute Packaging Materials (Compulsory Use In Packaging Commodities)
                                    Rules, 1987</option>
                                <option value="361">Seeds Rules, 1968</option>
                                <option value="360">Right To Information Rules, 2012</option>
                                <option value="359">Right To Information (Regulation Of Fee And Cost) Rules, 2005
                                </option>
                                <option value="358">Right To Fair Compensation And Transparency In Land Acquisition
                                    Rehabilitation And Resettlement (Social Impact Assessment And Consent) Rules, 2014
                                </option>
                                <option value="357">Right To Fair Compensation And Transparency In Land Acquisition
                                    Rehabilitation And Resettlement (Compensation Rehabilitation And Resettlement And
                                    Development Plan) Rules, 2015</option>
                                <option value="356">Patents (Appeals And Applications To The Intellectual Property
                                    Appellate Board) Rules, 2011</option>
                                <option value="355">Patents Rules, 2003</option>
                                <option value="354">Digital Signature (End Entity) Rules, 2015</option>
                                <option value="353">Pan Masala Packing Machines (Capacity Determination And Collection
                                    Of Duty) Rules, 2008</option>
                                <option value="352">Consumer Welfare Fund Rules, 1992</option>
                                <option value="351">Clean Energy Cess Rules, 2010</option>
                                <option value="350">Plastic Waste Management Rules, 2015</option>
                                <option value="349">Ozone Depleting Substances (Regulation And Control) Rules, 2000
                                    Ministry Of Environment And Forests , 2000</option>
                                <option value="348">Noise Pollution (Regulation and Control) Rules, 2000</option>
                                <option value="347">E-waste Management Handling Rules, 2016</option>
                                <option value="346">Bio-Medical Waste Management &amp; handling Rules, 2016</option>
                                <option value="345">Air (Prevention and Control of Pollution) Madhya Pradesh Rules, 1983
                                </option>
                                <option value="343">Geographical Indications of Goods (Registration and Protection)
                                    Rules, 2002</option>
                                <option value="341">Public Liability Insurance Rules , 1991</option>
                                <option value="340">The Pharmacy Practice Regulations Rules, 2015</option>
                                <option value="339">Mineral Concession Rules, 1960</option>
                                <option value="338">IT (Certifying Authorities) Rules, 2000</option>
                                <option value="337">Registration and Licensing of Industrial Undertakings Rules, 1952
                                </option>
                                <option value="336">Copyrights Rules, 1958</option>
                                <option value="335">Pre-Conception and Pre-natal Diagnostic Techniques (Prohibition of
                                    Sex Selection) Rules, 1996</option>
                                <option value="333">Petroleum Rules, 2002</option>
                                <option value="332">Hazardous Wastes (Management, Handling and Transboundart Movement)
                                    Rules, 2008</option>
                                <option value="331">E-Waste (Managment and Handling) Rules, 2011</option>
                                <option value="330">Batteries (Management and Handling) Rules, 2001</option>
                                <option value="326">Hazardous Wastes (Management and Handling) Rules, 1989</option>
                                <option value="324">Central Industrial Security Force Rules, 2001</option>
                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="px-2 mt-2 mt-md-0 px-md-3">
                            <select class="acts">
                                <option value=" ">State Acts</option>
                                <option value="118">Himachal Pradesh Fire Fighting Services Act, 1984</option>
                                <option value="144">Uttar Pradesh Municipalities Act, 1916</option>
                                <option value="143">Tripura Municipal Act, 1994</option>
                                <option value="142">Tamil Nadu district municipalities Act, 1920</option>
                                <option value="141">Sikkim Municipalities Act, 2007</option>
                                <option value="140">Punjab Municipal Corporation Act, 1976</option>
                                <option value="139">Jammu Munciapl Corporation Act, 2000</option>
                                <option value="138">Himachal Pradesh Municipal Corporation Act, 1994</option>
                                <option value="137">Goa City of Panaji Corporation Act, 2002</option>
                                <option value="136">Delhi Municipal Corporation Act, 1957</option>
                                <option value="135">Chhattisgarh Municipalities Act, 1961</option>
                                <option value="134">Bihar Municipal Act, 2007</option>
                                <option value="133">Arunachal Pradesh Municipal Act, 2007</option>
                                <option value="132">Tamil Nadu Lifts Act, 1997</option>
                                <option value="131">Kerala Lifts And Escalators Act, 2013</option>
                                <option value="130">Karnataka Lifts Act, 1974</option>
                                <option value="129">Haryana Lifts And Escalators Act, 2008</option>
                                <option value="128">Gujarat Lifts And Escalators Act, 2000</option>
                                <option value="127">Goa Lifts And Escalators Act , 2012</option>
                                <option value="126">Assam Lifts And Escalators Act, 1900</option>
                                <option value="125">West Bengal Fire Services Act, 1950</option>
                                <option value="124">Punjab Fire Prevention And Fire Safety Act , 2004</option>
                                <option value="123">Orissa Fire Service Act, 1993</option>
                                <option value="122">Meghalaya Fire And Emergency Services Act, 2012</option>
                                <option value="121">Kerala Fire Force Act, 1962</option>
                                <option value="120">Karnataka Fire Force Act, 1964</option>
                                <option value="119">Bihar Fire Service Act, 2014</option>

                            </select>
                        </div>
                    </div>
                    <div>
                        <div class="px-2 mt-md-0 mt-2 px-md-3">
                            <select class="acts">
                                <option value=" ">State Rules</option>
                                <option value="594">Tamil Nadu Urban Local Bodies Licencing of Hordings and Levy and
                                    Collection of Advertisement Tax Rules, 2003</option>
                                <option value="593">Karnataka State Board for the Prevention and Control of Water
                                    Pollution (Procedure for Transaction of Business) and the Water (Prevention And
                                    Control of Pollution) Rules, 1976</option>
                                <option value="592">Goa Air (Prevention and Control of Pollution) Rules, 1989
                                </option>
                                <option value="591">Himachal Pradesh Lifts Rules, 2009</option>
                                <option value="590">Assam Lifts And Escalators Rules, 2010</option>
                                <option value="589">Karnataka Lifts Escalators and Passenger Conveyors Rules, 2014
                                </option>
                                <option value="588">Tamil Nadu Lifts Rules, 1997</option>
                                <option value="587">Haryana Lift &amp; Escalator Rules, 2009</option>
                                <option value="586">Punjab Fire Prevention And Fire Safety Rules , 2004</option>
                                <option value="585">Kerala Municipality Building Rules, 1999</option>
                                <option value="584">Goa Water (Prevention And Control Of Pollution) Rules, 1988
                                </option>
                                <option value="583">Meghalaya Air (Prevention And Conrol Of Pollution) Rules, 1988
                                </option>
                                <option value="582">Andhra Pradesh Boilers Subordinate Service Rules, 1999</option>
                                <option value="581">Andhra Pradesh Boilers Service Rules,</option>
                                <option value="580">Rajasthan Boilers Rules, 1954</option>
                                <option value="579">Rajasthan Boiler Attendants Rules, 1954</option>
                                <option value="578">Tamil Nadu Water (Prevention and control of Pollution ) Rules,
                                    1983</option>
                                <option value="577">Tamil Nadu Air (Prevention and Control of Pollution ) Rules ,
                                    1983</option>
                                <option value="576">Tamil Nadu Dangerous Machines (Regulations) Rules, 1987</option>
                            </select>
                        </div>
                    </div>

                    <div class="px-2 mt-2 mt-md-0 px-md-3">
                        <div class="search-act col-12 md-col-6 ">
                            <input type="text" placeholder="search Acts" class="border-0 w-100 pr-4 search-input pl-2">
                            <button class="border-0 bg-transparent search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="table_scroll_notify scrollbarnew ">
                <div class="col-12 ">
                    <table class="table table-striped table-borderless">
                        <thead class="t-head">
                            <tr>
                                <th scope="col" class="">Notification Date</th>
                                <th scope="col" class="">Notification Title</th>
                                <th scope="col" class="">Notification Discription</th>
                                <th scope="col" class="">Notification Issued By</th>
                            </tr>
                        </thead>
                        <tbody class="table-content">
                            <tr>
                                <th scope="row">03 Feb 2021</th>
                                <td>TRIPURA GOVERNMENT OMITS THE APPLICATION OF SECTION 17 OF THE BOILERS ACT, 1923</td>
                                <td>Tripura Government omits the application of Section 17 of the Boilers Act, 1923</td>
                                <td>GOVT. OF TRIPURA</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">23 Oct 2020</th>
                                <td>THE TAMIL NADU PANCHAYATS (THIRD AMENDMENT) ACT, 2020</td>
                                <td>(1) This Act may be called the Tamil Nadu Panchayats (Third Amendment) Act, 2020.
                                </td>
                                <td>GOVT. OF TAMIL NADU</td>
                                <td> <button type="button" class="btn btn-sm  button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">25 Sep 2020</th>
                                <td>THE TAMIL NADU PANCHAYATS (THIRD AMENDMENT) ACT, 2020</td>
                                <td>This Act may be called the Tamil Nadu Panchayats (Third Amendment) Act, 2020.</td>
                                <td>GOVT. OF TAMIL NADU</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">25 Nov 2020</th>
                                <td>THE TAMIL NADU PANCHAYATS (THIRD AMENDMENT) ACT, 2020</td>
                                <td>This Act may be called the Tamil Nadu Panchayats (Third Amendment) Act, 2020.</td>
                                <td>GOVT. OF MAHARASHTRA</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
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
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td> <button type="button" class="btn btn-sm button-readmore-white mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">2</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td> <button type="button" class="btn btn-sm  text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                    <button type="button" onclick="window.location.href='act-definition.php'"
                                        class="btn btn-sm button-readmore-white mx-2 mt-2">View
                                        Files</button>

                                </td>
                            </tr>
                            <tr>
                                <th scope="row">3</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
                                <td> <button type="button" class="btn btn-sm text-white button-readmore mx-2"
                                        onclick="window.location.href='act-definition.php'">Read
                                        more</button>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">4</th>
                                <td>Environmental,Health & Safety</td>
                                <td>Lorem ipsum dolor sit amet, consectetur</td>
                                <td>Lorem ipsum dolor sit amet,</td>
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