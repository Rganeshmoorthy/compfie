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
        <div class="row main-content2 px-2 px-md-5 py-2 py-md-3">
            <!-- heading -->
            <div class="col-12 heading pl-0 px-5">
                 Labour, Employment & Industrial - National Festival Holidays
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
                <div class="col-12 mt-0 mt-md-3 px-3 aphabet-scroll scrollbarnew">
                    <div class="row">
                        <div class="col-12">
                            <div class="d-flex border alpha-border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="a"> Andaman and
                                        Nicobar</h1>
                                </div>
                                <div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Andaman &
                                                Nicobar Island Shop & Establishment Regulation, 2004
                                            </a></li>

                                    </ol>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="b"> Andra Pradesh</h1>
                                </div>
                                <div>
                                    <ol type="1" class="p-1 px-4 ol-content">
                                        <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Boilers Act,
                                                1923
                                            </a></li>


                                    </ol>

                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="c"> Arunachal Pradesh</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="d"> Assam</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="e"> Bihar</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="f"> Chhatisgar</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="g"> Goa</h1>
                                </div>
                                <div>
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

                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="h"> Gujarat</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="i"> Haryana </h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="j"> Himachal Pradesh</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="k"> Jharkhand</h1>
                                </div>
                                <div>
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

                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="l"> Karnataka</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="m"> Kerala</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="n"> Madhya Pradesh</h1>
                                </div>
                                <div>
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

                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="o"> Maharastra</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="p"> Manipur</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="q"> Meghalaya</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="r"> Mizoram</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="s"> Nagaland</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="t"> Odisha</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="u"> Puducherry</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="v"> Punjab</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="w"> Rajasthan</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="x"> Sikkim</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="y"> Tamil Nadu</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="z"> Telangana</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="tripura"> Tripura</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="ut"> UT of Lakshadweep</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="uttrakand"> Uttrakhand</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="uttrapradesh"> Uttra Pradesh</h1>
                                </div>
                                <div>
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
                        <div class="col-12 mt-3">
                            <div class="d-flex border">
                                <div
                                    class="content-bgcolor d-flex justify-content-center align-items-center text-center alpha-new">
                                    <h1 id="west"> West Bengal</h1>
                                </div>
                                <div>
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