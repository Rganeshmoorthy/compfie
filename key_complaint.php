<?php  include "header.php"?>
<?php include "sidenav.php" ?>
<html>

<head>
    <script>
    jQuery(document).ready(function() {
        jQuery('.scrollbarnew').scrollbar();
    });

    function validateForm() {
        var x = document.forms["myForm"]["act-search"].value;
        if (x == "") {
            alert("Search box cannot be empty");
            return false;
        }
    }
    </script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/domain-page4.css">
</head>

<body>

    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-2 px-md-5 py-2 py-md-3">
            <!-- heading -->
            <div class="col-12 heading pl-0 px-4 px-md-5">
                Labour,Employment & Industrial - Professional Tax
            </div>
            <!-- buttons-->
            <div class="col-12 py-2">
                <div class="d-flex row m-0 state-btns">
                    <a href="#a" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">Andaman and
                            Nicobar</button></a>
                    <a href="#b" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">Andra Pradesh
                        </button></a>
                    <a href="#c" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">Arunachal
                            Pradesh
                        </button></a>
                    <a href="#d" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Assam</button></a>
                    <a href="#e" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Bihar</button></a>
                    <a href="#f" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Chhatisgar</button></a>
                    <a href="#g" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">Goa</button></a>
                    <a href="#h" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Gujarat</button></a>
                    <a href="#i" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Haryana</button></a>
                    <a href="#j" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">Himachal
                            Pradesh</button></a>
                    <a href="#k" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Jharkhand</button></a>
                    <a href="#l" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Karnataka</button></a>
                    <a href="#m" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Kerala</button></a>
                    <a href="#n" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">Madhya
                            Pradesh</button></a>
                    <a href="#o" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">Maharastra
                        </button></a>
                    <a href="#p" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Manipur</button></a>
                    <a href="#q" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Meghalaya</button></a>
                    <a href="#r" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Mizoram</button></a>
                    <a href="#s" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Nagaland</button></a>
                    <a href="#t" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Odisha</button></a>
                    <a href="#u" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Puducherry</button></a>
                    <a href="#v" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Punjab</button></a>
                    <a href="#w" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Rajasthan</button></a>
                    <a href="#x" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Sikkim</button></a>
                    <a href="#y" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">Tamil
                            Nadu</button></a>
                    <a href="#z" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Telangana</button></a>
                    <a href="#tripura" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Tripura</button></a>
                    <a href="#ut" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">UT of
                            Lakshadweep</button></a>
                    <a href="#uttrakand" class="border-1"><button type="button"
                            class="btn state-btn mx-1 my-1">Uttrakhand</button></a>
                    <a href="#uttrapradesh" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">Uttra
                            Pradesh</button></a>
                    <a href="#west" class="border-1"><button type="button" class="btn state-btn mx-1 my-1">West
                            Bengal</button></a>
                </div>
                <!-- search-->
                <div class="col-12 d-flex py-2">
                    <div class="search-new px-2 col-12 md-col-6 ml-auto">
                        <form name="myForm" class="mb-0" action="stateact.php" onsubmit="return validateForm()">
                            <input type="text" placeholder="search Acts" id="search" name="act-search"
                                class="border-0 w-100 pr-4 search-input" required>
                            <button type="submit" class="border-0 bg-transparent search-btn"><i
                                    class="fa fa-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 py-1">
                <div class="col-12 mt-0 mt-md-3 px-3 aphabet-scroll-state scrollbarnew">
                    <div class="row">
                        <div class="col-12 w-100" id="a">
                            <div class="d-flex border alpha-border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Andaman and
                                        Nicobar</h1>
                                </div>
                                <div>
                                <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Andaman and                                    
                                        Nicobar</h1></div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Andaman &
                                                Nicobar Island Shop & Establishment Regulation, 2004
                                            </a></li>
                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3 w-100" id="b">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Andra Pradesh</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Andra Pradesh</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Boilers Act,
                                                1923
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Coir Industry
                                                Act,
                                                1953</a></li>
                                    </ol>

                                </div>
                            </div>
                        </div>                       
                        <div class="col-12 mt-3 w-100" id="c">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Arunachal Pradesh</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Arunachal Pradesh</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Central
                                                Industrial
                                                Security Force Act, 1968


                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Clinical
                                                Establishments (Registration And Regulation) Act, 2010/a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Coir Industry
                                                Act,
                                                1953</a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="d">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Assam</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Assam</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">

                                                Dangerous Machines (Regulation) Act, 1983
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Drugs and
                                                Cosmetic
                                                Act , 1940</a> </li>
                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="e">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Bihar</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Bihar</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">
                                                Electricity Act, 2003
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Employers'
                                                Liability
                                                Act, 1938</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Environment
                                                (Protection) Act, 1986</a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Essential
                                                Commodities Act, 1955
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Explosives Act
                                                1884, 1900</a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="f">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Chhatisgar</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Chhatisgar</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="g">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Goa</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Goa</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3 w-100" id="h">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Gujarat</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Gujarat</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="i">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Haryana </h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Haryana </h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="j">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Himachal Pradesh</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Himachal Pradesh</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="k">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Jharkhand</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto"> Jharkhand</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3 w-100" id="l">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Karnataka</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Karnataka</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="m">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Kerala</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto"> Kerala</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="n">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Madhya Pradesh</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Madhya Pradesh</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3 w-100" id="o">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Maharastra</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto"> Maharastra</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="p">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Manipur</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto"> Manipur</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="q">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Meghalaya</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto"> Meghalaya</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="r">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Mizoram</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Mizoram</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="s">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Nagaland</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Nagaland</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="t">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Odisha</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Odisha</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="u">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Puducherry</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Puducherry</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="v">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Punjab</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Punjab</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="w">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Rajasthan</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Rajasthan</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="x">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Sikkim</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Sikkim</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="y">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Tamil Nadu</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto"> Tamil Nadu</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="z">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Telangana</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto"> Telangana</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="tripura">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Tripura</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Tripura</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="ut">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> UT of Lakshadweep</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">UT of Lakshadweep</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="uttrakand">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Uttrakhand</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto"> Uttrakhand</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="uttrapradesh">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> Uttra Pradesh</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">Uttra Pradesh</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 w-100" id="west">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1> West Bengal</h1>
                                </div>
                                <div class="w-100">
                                    <div class="d-flex">
                                    <h1 class="act-mbl-view mx-auto">West Bengal</h1>
                                    </div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990
                                            </a></li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                                Escalators Act, 1990</a> </li>
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                                Escalators Act, 1990 </a></li>

                                    </ol>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- center content ends -->
        <?php  include "footer.php"?>
    </div>
</body>

</html>