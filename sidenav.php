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

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
    </script>

    <script src="package/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

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
        //console.log(url);
        $(".nav-pills a[href*='" + url + "']").addClass("active");

        $(".current_page a[href*='" + url + "']").addClass("active");

        $(".list .list2 a[href*='" + url + "']").addClass("active");

        $(".list li a[href*='" + url + "']").addClass("active");

        if ($(".list .list2 a").hasClass("active")) {
            $('.law_toggle').next().addClass("show");
            $('.menu_toggle').next().addClass("show");
        } else {
            $('.law_toggle').next().removeClass("show");
            $('.menu_toggle').next().removeClass("show");
        }
        if ($(".list li a").hasClass("active")) {
            $('.law_toggle').next().addClass("show");

        } else {
            $('.law_toggle').next().removeClass("show");

        }
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
                            aria-expanded="false">Change Country</button>

                        <div class="dropdown-menu drop_down" aria-labelledby="dropdownMenuButton">
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
                            <ul class="nav nav-stacked" id="accordion1">
                                <li class="panel row m-0 hover_effect">
                                    <img src="package/servicee.svg" height="20px" class="mt-3 px-2" />
                                    <a data-toggle="collapse" class="mt-3 text-white menu" aria-hidden="true"
                                        data-parent="#accordion1" href="#firstLink">Our Services <i
                                            class="fa fa-fw fa-angle-down"></i> </a>

                                    <ul id="firstLink" class="collapse list">

                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                                href="https://www.aparajitha.com/"
                                                class="text-white px-0 px-md-1">Full-Assurance Compliance</a>
                                        </li>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                                href="https://www.compfie.com/"
                                                class="text-white px-0 px-md-1">Tech-Enabled
                                                Compliance</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-stacked mt-2" id="accordion1">
                                <li class="panel row m-0 hover_effect">
                                    <img src="package/justice-scale.png" height="20px" class="mt-2 px-2" />
                                    <a data-toggle="collapse" class="mt-2 text-white menu law_toggle" aria-hidden="true"
                                        data-parent="#accordion1" href="#complaint_law">Compliance
                                        Laws <i class="fa fa-fw fa-angle-down"></i>
                                    </a>

                                    <ul id="complaint_law" class="collapse list">
                                        <div id="accordion1" class="menu_toggle">
                                            <li class="mt-3 panel"> <img src="package/law-book.png" height="15px" /> <a
                                                    data-toggle="collapse"
                                                    class="mt-1 text-white px-0 px-md-1 menu_toggle" aria-hidden="true"
                                                    data-parent="#accordion1" href="#legislation" href="#"
                                                    class="text-white">Legislations<i
                                                        class="fa fa-fw fa-angle-down"></i></a>
                                            </li>
                                        </div>
                                        <ul id="legislation" class="collapse list2 p-0">
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="domain-page3.php" class="text-white px-0 px-md-1">Central
                                                    acts </a>
                                            </li>
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="domain-page11.php" class="text-white px-0 px-md-1"> Central
                                                    Rules</a>
                                            </li>
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="domain-page4.php" class="text-white px-0 px-md-1">State
                                                    Acts</a></li>
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="domain-page5.php" class="text-white px-0 px-md-1">State
                                                    Rules</a></li>
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="schemes.php" class="text-white px-2">Schemes</a></li>
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="regulation.php" class="text-white px-2">Regulations</a></li>

                                        </ul>
                                        <li class="mt-3 notify"> <img src="package/law-book.png" height="15px" /> <a
                                                href="domain-page.php" class="text-white px-0 px-md-1">Case Laws</a>
                                        </li>

                                        <li class="mt-3 notify"> <img src="package/law-book.png" height="15px" /> <a
                                                href="domain-page8.php" class="text-white px-0 px-md-1">Notification</a>
                                        </li>
                                        <li class="mt-3 notify"> <img src="package/law-book.png" height="15px" /> <a
                                                href="forms.php" class="text-white px-0 px-md-1">Forms</a>
                                        </li>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white px-0 px-md-1">Key Compliance
                                                Data</a>
                                        </li>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white px-0 px-md-1">Opinions</a>
                                        </li>
                                        <li class="mt-3 notify"> <img src="package/law-book.png" height="15px" /> <a
                                                href="complaints.php" class="text-white px-0 px-md-1">Lets Talk
                                                Compliance</a>
                                        </li>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white px-0 px-md-1">Blogs</a>
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