<html>

<head>
    <script>
    jQuery(document).ready(function() {
        jQuery('.scrollbarnew').scrollbar();
    });
    </script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link rel="stylesheet" href="css/sidenavv.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">

    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->
    <!-- <script src="package/jq.js"></script> -->
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/jquery.scrollbar.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>

    <script src="package/bootstrap.min.js"></script>
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script> -->

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#accordion1 .panel .menu').on('click', function() {
            setTimeout(() => {
                // console.log($(this).next().hasClass("show"))
                if ($(this).next().hasClass("show")) {
                    $(this).find('i').addClass('fa-angle-up').removeClass('fa-angle-down');
                } else {
                    $(this).find('i').addClass('fa-angle-down').removeClass('fa-angle-up');
                }
            }, 400);
        });
        $('#accordion1 .panel .menu_toggle').on('click', function() {
            setTimeout(() => {
                // console.log($(this).next().hasClass("show"))
                if ($(this).next().hasClass("show")) {
                    $(this).find('i').addClass('fa-angle-up').removeClass('fa-angle-down');
                } else {
                    $(this).find('i').addClass('fa-angle-down').removeClass('fa-angle-up');
                }
            }, 400);
        });
        var path = window.location.pathname;
        var url = path.substring(path.lastIndexOf('/') + 1)
        // console.log(url);

        $(".nav-pills a[href*='" + url + "']").addClass("active");

        $(".current_page a[href*='" + url + "']").parent().addClass("active");

        $(".list .list2 a[href*='" + url + "']").parent().addClass("active");

        $(".list li a[href*='" + url + "']").parent().addClass("active");

        $(".list .list3 a[href*='" + url + "']").parent().addClass("active");

        if ($(".list .list2 a").parent().hasClass("active")) {
            $('.law_toggle').next().addClass("show");
            $('.menu_toggle').next().addClass("show");
        } else {
            $('.law_toggle').next().removeClass("show");
            $('.menu_toggle').next().removeClass("show");
        }

        if ($(".list li a").parent().hasClass("active")) {
            $('.law_toggle').next().addClass("show");
            // $('.complaince').addClass("active");

        } else {
            $('.law_toggle').next().removeClass("show");
            //$('.complaince').removeClass("active");
        }

        if ($(".list3 li a").parent().hasClass("active")) {
            $('.complaint_toggle').next().addClass("show");
        } else {
            $('.complaint_toggle').next().removeClass("show");
        }

        $('.bg-red').on('click', function() {
            $(".title,.case-law-p, .content,.alphabet,.alphabet-bgcolor,.alpha-new, .heading,.ol-content , .moreless-button,.table-content,.anchor_tag")
                .css("color", "#5B3D71");
            $(".sidenav, .foot_class, .circle-bg,.t-head th,.button-readmore,.button-head,.download,.view_more,.nav_ul a.active,.bg-bt")
                .css("background-color", "#5B3D71 !important");
        });

        $('.bg-brown').on('click', function() {
            $(".title,.case-law-p, .content,.alphabet,.alphabet-bgcolor,.alpha-new, .heading,.ol-content , .moreless-button,.table-content,.anchor_tag")
                .css("color", "#5866B0");
            $(".sidenav, .foot_class,.circle-bg,.t-head th,.button-readmore,.button-head,.download,.view_more,.nav_ul a.active,.bg-bt")
                .css("background-color", "#5866B0 !important");
        });

        $('.bg-green').on('click', function() {
            $(".title, .content, .heading, .moreless-button,.table-content,.anchor_tag").css("color",
                "#697CE0");
            $(".sidenav, .foot_class,.circle-bg,.t-head th,.button-readmore,.button-head,.download,.view_more,.nav_ul a.active,.bg-bt")
                .css("background-color", "#697CE0 !important");
        });

        $('.bg-b1').on('click', function() {
            $(".title, .content, .heading, .moreless-button,.table-content,.anchor_tag").css("color",
                "#04009a");
            $(".sidenav, .foot_class,.circle-bg,.t-head th,.button-readmore,.button-head,.download,.view_more,.nav_ul a.active,.bg-bt")
                .css("background-color", "#04009a !important");
        });
        $('.bg-b2').on('click', function() {
            $(".title, .content, .heading, .moreless-button,.table-content,.anchor_tag").css("color",
                "#77acf1");
            $(".sidenav, .foot_class,.circle-bg,.t-head th,.button-readmore,.button-head,.download,.view_more,.nav_ul a.active,.bg-bt")
                .css("background-color", "#77acf1 !important");
        });
        $('.bg-b3').on('click', function() {
            $(".title, .content, .heading, .moreless-button,.table-content,.anchor_tag").css("color",
                "#3edbf0");
            $(".sidenav, .foot_class,.circle-bg,.t-head th,.button-readmore,.button-head,.download,.view_more,.nav_ul a.active,.bg-bt")
                .css("background-color", "#3edbf0 !important");
        });
        $('.bg-b4').on('click', function() {
            $(".title, .content, .heading, .moreless-button,.table-content,.anchor_tag").css("color",
                "#c0fefc");
            $(".sidenav, .foot_class,.circle-bg,.t-head th,.button-readmore,.button-head,.download,.view_more,.nav_ul a.active,.bg-bt")
                .css("background-color", "#c0fefc !important");
        });

        if (url == 'domain-page1.php' || url == 'domain-page2.php') {
            $(".key-none").addClass("display-none");
            $(".opinion-none").addClass("display-none");
        } else {
            $(".key-none").removeClass("display-none");
            $(".opinion-none").removeClass("display-none");
        }
        $(".state-btn").click(function() {
            $(".state-btn.active").removeClass("active");
            $(this).addClass("active");
        });
        $(".alphabet-bgcolor").click(function() {
            $(".alphabet-bgcolor.active").removeClass("active");
            $(this).addClass("active");
        });

        function scrollToAnyPoint(navItem) {
            var getAttr;
            $('.alphabet-bgcolor').click(function(e) {
                e.preventDefault();
                getAttr = $(this).attr('href');
                var toSection = $(getAttr).offset().top - 1000;
                $("html, body").animate({
                    scrollTop: toSection
                }, 1000)
            });
        }
        /*download */
        var doc = new jsPDF();
        var specialElementHandlers = {
            '#editor': function(element, renderer) {
                return true;
            }
        };
        $('#cmd').click(function() {
            doc.fromHTML($('#content').html(), 15, 15, {
                'width': 170,
                'elementHandlers': specialElementHandlers
            });
            doc.save('sample-file.pdf');
        });

        $(".central").click(function() {
            if ($("#central-state").hasClass("undu")) {
                $("#central-state").removeClass("d-none")
                $("#central-state2").addClass("d-none");
                $("#central-state3").addClass("d-none");
                $("#central-state4").addClass("d-none")
                $("#central-state5").addClass("d-none")
            } else {
                $("#central-state").addClass("d-none")
                $("#central-state2").removeClass("d-none");
                $("#central-state3").removeClass("d-none");
                $("#central-state4").removeClass("d-none")
                $("#central-state5").removeClass("d-none")
            }
        });
        $(".east").click(function() {
            if ($("#central-state2").hasClass("undu2")) {
                $("#central-state2").removeClass("d-none");
                $("#central-state").addClass("d-none")
                $("#central-state3").addClass("d-none")
                $("#central-state4").addClass("d-none")
                $("#central-state5").addClass("d-none")
            } else {
                $("#central-state2").addClass("d-none");
                $("#central-state").removeClass("d-none")
                $("#central-state3").removeClass("d-none")
                $("#central-state4").removeClass("d-none")
                $("#central-state5").removeClass("d-none")
            }
        });
        $(".west").click(function() {
            if ($("#central-state3").hasClass("undu3")) {
                $("#central-state3").removeClass("d-none");
                $("#central-state").addClass("d-none")
                $("#central-state2").addClass("d-none")
                $("#central-state4").addClass("d-none")
                $("#central-state5").addClass("d-none")
            } else {
                $("#central-state3").addClass("d-none");
                $("#central-state").removeClass("d-none")
                $("#central-state2").removeClass("d-none")
                $("#central-state4").removeClass("d-none")
                $("#central-state5").removeClass("d-none")
            }
        });
        $(".north").click(function() {
            if ($("#central-state4").hasClass("undu4")) {
                $("#central-state4").removeClass("d-none");
                $("#central-state").addClass("d-none")
                $("#central-state2").addClass("d-none")
                $("#central-state3").addClass("d-none")
                $("#central-state5").addClass("d-none")
            } else {
                $("#central-state4").addClass("d-none");
                $("#central-state").removeClass("d-none")
                $("#central-state2").removeClass("d-none")
                $("#central-state3").removeClass("d-none")
                $("#central-state5").removeClass("d-none")
            }
        });
        $(".south").click(function() {
            if ($("#central-state5").hasClass("undu5")) {
                $("#central-state5").removeClass("d-none");
                $("#central-state").addClass("d-none")
                $("#central-state2").addClass("d-none")
                $("#central-state3").addClass("d-none")
                $("#central-state4").addClass("d-none")
            } else {
                $("#central-state5").addClass("d-none");
                $("#central-state").removeClass("d-none")
                $("#central-state2").removeClass("d-none")
                $("#central-state3").removeClass("d-none")
                $("#central-state4").removeClass("d-none")
            }
        });
    });
    </script>
</head>

<body>

    <div class="sidenav">
        <div class="row m-0">
            <div class="sidenav-head mx-auto">
                <div class="col-12 text-white w-100 mt-4 topic_head">
                    INDIA
                </div>
                <div class="col-12 topic_button mt-1">
                    <div class="dropdown">
                        <button class="btn bg-white btn-lg rounded-pill btn_topic dropdown-toggle" type="button"
                            id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">Change Country
                        </button>

                        <div class="dropdown-menu drop_down drop-down-design" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="#">India</a>
                            <a class="dropdown-item" href="#">Srilanka</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="sidenav-body scrollbarnew">
                <div class="col-12 home mt-3  text-white">
                    <div class="row m-0 current_page hover_effect">
                        <img src="package/home.svg" height="20px" class="px-2" /></i> <a href="index.php"
                            class="text-white">Home</a>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-stacked mt-2" id="accordion1">
                                <li class="panel row m-0 hover_effect ">
                                    <img src="package/justice-scale.png" height="20px" class="mt-2 px-2 complaince" />
                                    <a data-toggle="collapse" class="mt-2 text-white menu law_toggle" aria-hidden="true"
                                        data-parent="#accordion1" href="#complaint_law">
                                        Features <i class="fa fa-fw fa-angle-down"></i>
                                    </a>

                                    <ul id="complaint_law" class="collapse list px-3 px-md-4">
                                        <div id="accordion1" class="menu_toggle">
                                            <li class="mt-3 panel"> <a data-toggle="collapse"
                                                    class="mt-1 text-white px-0 pb-1 px-md-1 menu_toggle"
                                                    aria-hidden="true" data-parent="#accordion1" href="#legislation"
                                                    href="#" class="text-white">Legislations<i
                                                        class="fa fa-fw fa-angle-down"></i></a>
                                            </li>
                                        </div>
                                        <ul id="legislation" class="collapse list2 p-0">
                                            <li class="mt-3 ml-2 ml-md-3">
                                                <a href="domain-page3.php" class="text-white pb-1 px-0 px-md-1">Central
                                                    Acts </a>
                                            </li>
                                            <li class="mt-3 ml-2 ml-md-3">
                                                <a href="domain-page11.php" class="text-white pb-1 px-0 px-md-1">
                                                    Central
                                                    Rules</a>
                                            </li>
                                            <li class="mt-3 ml-2 ml-md-3">
                                                <a href="domain-page4.php" class="text-white pb-1 px-0 px-md-1">State
                                                    Acts</a>
                                            </li>
                                            <li class="mt-3 ml-2 ml-md-3">
                                                <a href="domain-page5.php" class="text-white pb-1 px-0 px-md-1">State
                                                    Rules</a>
                                            </li>
                                            <li class="mt-3 ml-2 ml-md-3">
                                                <a href="schemes.php" class="text-white px-0 pb-1 px-md-1">Schemes</a>
                                            </li>
                                            <li class="mt-3 ml-2 ml-md-3">
                                                <a href="regulation.php"
                                                    class="text-white px-0 pb-1 px-md-1">Regulations</a>
                                            </li>

                                        </ul>
                                        <li class="mt-3 notify"> <a href="caselaw.php"
                                                class="text-white px-0 pb-1 px-md-1">Case Laws</a>
                                        </li>

                                        <li class="mt-3 notify"> <a href="domain-page8.php"
                                                class="text-white px-0 pb-1 px-md-1">Notification</a>
                                        </li>
                                        <li class="mt-3 notify"> <a href="forms.php"
                                                class="text-white px-0 pb-1 px-md-1">Forms</a>
                                        </li>
                                        <div id="accordion1" class="complaint_toggle menu_toggle">
                                            <li class="mt-3 panel key-none"> <a data-toggle="collapse"
                                                    class="mt-1 text-white px-0 px-md-1 pb-1 menu_toggle"
                                                    aria-hidden="true" data-parent="#accordion1" href="#key_complaint"
                                                    href="#" class="text-white">Key Compliance Data<i
                                                        class="fa fa-fw fa-angle-down"></i></a>
                                            </li>
                                        </div>
                                        <ul id="key_complaint" class="collapse list3 p-0">
                                            <li class="mt-3 ml-2 pb-1 ml-md-3">
                                                <a href="key_complaint.php"
                                                    class="text-white px-0 pb-1 px-md-1">Professional
                                                    Tax </a>
                                            </li>
                                            <li class="mt-3 ml-2 ml-md-3">
                                                <a href="welfare-fund.php" class="text-white px-0 pb-1 px-md-1"> Labour
                                                    Welfare
                                                    Fund</a>
                                            </li>
                                            <li class="mt-3 ml-2 ml-md-3">
                                                <a href="leave-policy.php" class="text-white pb-1 px-0 px-md-1">Leave
                                                    Policy</a>
                                            </li>
                                            <li class="mt-3 ml-2 ml-md-3">
                                                <a href="min-wages.php" class="text-white pb-1 px-0 px-md-1">Min
                                                    Wages</a>
                                            </li>
                                            <li class="mt-3 ml-2 ml-md-3">
                                                <a href="holidays.php" class="text-white pb-1 px-0 px-md-1">National
                                                    Festival
                                                    Holidays</a>
                                            </li>
                                        </ul>
                                </li>
                                <li class="mt-3 notify opinion-none"> <a href="opinion.php"
                                        class="text-white px-0 pb-1 px-md-1">Opinions</a>
                                </li>
                                <li class="mt-3 notify"> <a href="complaints.php"
                                        class="text-white pb-1 px-0 px-md-1">Let's
                                        Talk
                                        Compliance</a>
                                </li>
                                <!-- <li class="mt-3"> <a href="#" class="text-white pb-1 px-0 px-md-1">Blogs</a>
                                </li> -->
                            </ul>

                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-stacked" id="accordion1">
                                <li class="panel row m-0 hover_effect">
                                    <img src="package/servicee.svg" height="20px" class="mt-3 px-2" />
                                    <a data-toggle="collapse" class="mt-3 text-white menu" aria-hidden="true"
                                        data-parent="#accordion1" href="#ourservice">Our Services <i
                                            class="fa fa-fw fa-angle-down"></i> </a>

                                    <ul id="ourservice" class="collapse list px-3">

                                        <li class="mt-3"> <a href="https://www.aparajitha.com/"
                                                class="text-white px-0 pb-1 px-md-1">Full-Assurance Compliance</a>
                                        </li>
                                        <li class="mt-3"> <a href="https://www.compfie.com/"
                                                class="text-white pb-1 px-0 px-md-1">Tech-Enabled
                                                Compliance</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12  text-white mx-auto foot_class">
            <div class="col-12 py-3 d-flex justify-content-center circle-bg">
                <div class="circle bg-red mx-1"></div>
                <div class="circle bg-brown mx-1"></div>
                <!-- <div class="circle bg-green mx-1"></div>
                <div class="circle bg-b1 mx-1"></div>
                <div class="circle bg-b2 mx-1"></div>
                <div class="circle bg-b3 mx-1"></div>
                <div class="circle bg-b4 mx-1"></div> -->
            </div>
            <p>sample@gmail.com</p>
            <button class="btn btn-lg  bg-white rounded-pill btn_topic">Log Out</button>
        </div>

    </div>

    <button class="menu-toggle"><i class="fa fa-bars custom" aria-hidden="true"></i></button>
    <script>
    $(document).ready(function() {
        $(".menu-toggle").click(function() {
            $(".sidenav").toggleClass("active");
        });
    });
    </script>
</body>

</html>