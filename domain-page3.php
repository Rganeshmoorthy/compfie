<?php  include "header.php"?>
<?php include "sidenav.php" ?>

<html>
<link rel="stylesheet" href="css/index.css">
<link rel="stylesheet" href="css/domain-page4.css">
<script>
jQuery(document).ready(function() {
    jQuery('.scrollbarnew').scrollbar();
});

</script>

<body>
    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-3 px-md-5 py-3">
            <div class="col-12 heading">
                Labour,Employment & Industrial - Central Acts
            </div>
            <div class="col-12 py-3">
                <div class="d-flex">
                    <div class="alpha-scroll">
                        <?php
                       foreach (range('A', 'Z') as $alphabet) {
                        echo '<a class="alphabet-bgcolor  mx-1 mx-md-2 mt-2 mt-md-0" href = #'. strtolower($alphabet) .'>'. $alphabet." " . '</a>' ;
                          }
                         ?>
                    </div>
                </div>
            </div>
            <div class="col-12 mt-0 mt-md-3 px-3 aphabet-scroll scrollbarnew">
                <div class="row">
                    <div class="col-12" id="a">
                        <div class="d-flex border alpha-border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> A</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Air (Prevention and
                                            Control of Pollution) Act, 1981
                                        </a></li>
                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>

                    <div class="col-12 mt-3" id="b">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> B</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Boilers Act, 1923
                                        </a></li>
                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="c">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> C</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Central Industrial
                                            Security Force Act, 1968


                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Clinical
                                            Establishments (Registration And Regulation) Act, 2010/a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Coir Industry Act,
                                            1953</a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="d">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> D</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">

                                            Dangerous Machines (Regulation) Act, 1983
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Drugs and Cosmetic
                                            Act , 1940</a> </li>
                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="e">
                        <div class="d-flex border ">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> E</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">
                                            Electricity Act, 2003
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Employers' Liability
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
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="f">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> F</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="g">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> G</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>

                    <div class="col-12 mt-3" id="h">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> H</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="i">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> I</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="j">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> J</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="k">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> K</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>

                    <div class="col-12 mt-3" id="l">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> L</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="m">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> M</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="n">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> N</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>

                    <div class="col-12 mt-3" id="o">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> O</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="p">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> P</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="q">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> Q</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="r">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> R</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="s">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> S</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="t">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> T</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="u">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> U</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="v">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> V</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="w">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> W</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="x">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> X</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="y">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> Y</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>

                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
                        </div>
                    </div>
                    <div class="col-12 mt-3" id="z">
                        <div class="d-flex border">
                            <div
                                class="content-bgcolor d-flex justify-content-center align-items-center text-center alphabet">
                                <h1> Z</h1>
                            </div>
                            <div class="for-readmore">
                                <ol type="1" class="p-1 px-4 ol-content-ol">
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990
                                        </a></li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php">Assam Lifts And
                                            Escalators Act, 1990</a> </li>
                                    <li class="mt-2"><a class="ol-content" href="redirect-page.php"> Assam Lifts And
                                            Escalators Act, 1990 </a></li>
                                </ol>
                            </div>
                            <a class="moreless-ol-content" href="#">READ MORE</a>
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