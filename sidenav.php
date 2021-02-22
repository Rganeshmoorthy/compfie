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
    <script src="package/jq.js"></script>
    <script src="js/jquery.scrollbar.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
    $(document).ready(function() {
        $('#accordion1 .panel .menu').on('click', function() {
            setTimeout(() => {
                console.log($(this).next().hasClass("show"))
                if ($(this).next().hasClass("show")) {
                    $(this).find('i').addClass('fa-angle-up').removeClass('fa-angle-down');
                } else {
                    $(this).find('i').addClass('fa-angle-down').removeClass('fa-angle-up');
                }
            }, 400);
        });
        var path = window.location.pathname;
        // if (path.charAt(path.length - 1) == "/")
        //     path = path.substring(0, path.length - 1);
        console.log(path);
        $(".nav-pills a[href*='" + path + "']").addClass("active");

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
                    <!-- <button class="btn bg-white btn-lg rounded-pill btn_topic" data-toggle="modal"
                        data-target="#exampleModalCenter">Change Country</button> -->
                    <button class="btn bg-white btn-lg rounded-pill btn_topic">Change Country</button>
                </div>
            </div>

            <div class="sidenav-body scrollbarnew">
                <div class="col-12 home mt-3  text-white">
                    <div class="row m-0">
                        <img src="package/home.svg" height="20px" class="px-2" /></i> <a href="index.php"
                            class="text-white">Home</a>
                    </div>
                </div>
                <div class="col-12 mt-3">
                    <div class="row">
                        <div class="col-12">
                            <ul class="nav nav-stacked" id="accordion1">
                                <li class="panel row m-0">
                                    <img src="package/servicee.svg" height="20px" class="mt-3 px-2" />
                                    <a data-toggle="collapse" class="mt-3 text-white menu" aria-hidden="true"
                                        data-parent="#accordion1" href="#firstLink">Our Services <i
                                            class="fa fa-fw fa-angle-down"></i> </a>

                                    <ul id="firstLink" class="collapse list">

                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white">Full Assurance Compliance</a>
                                        </li>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white">Tech-Enabled
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
                                <li class="panel row m-0">
                                    <img src="package/justice-scale.png" height="20px" class="mt-2 px-2" />
                                    <a data-toggle="collapse" class="mt-2 text-white menu" aria-hidden="true"
                                        data-parent="#accordion1" href="#complaint_law">Compliance
                                        Laws <i class="fa fa-fw fa-angle-down"></i>
                                    </a>

                                    <ul id="complaint_law" class="collapse list">
                                        <div id="accordion1">
                                            <li class="mt-3 panel"> <img src="package/law-book.png" height="15px" /> <a
                                                    data-toggle="collapse" class="mt-1 text-white px-2"
                                                    aria-hidden="true" data-parent="#accordion1" href="#legislation"
                                                    href="#" class="text-white">Legislations <i
                                                        class="fa fa-fw fa-angle-down"></i></a>
                                            </li>
                                        </div>
                                        <ul id="legislation" class="collapse list2 p-0">
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="domain-page3.php" class="text-white px-2">Central acts </a>
                                            </li>
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="domain-page11.php" class="text-white px-2"> Central Rules</a>
                                            </li>
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="domain-page4.php" class="text-white px-2">State Acts</a></li>
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="domain-page5.php" class="text-white px-2">State Rules</a></li>
                                            <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                    href="#" class="text-white px-2">Schemas</a></li>
                                        </ul>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white px-2">Case Laws</a>
                                        </li>

                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white px-2">Notification</a>
                                        </li>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white px-2">Farms</a>
                                        </li>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white px-2">Key Compliance Data</a>
                                        </li>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white px-2">Opinions</a>
                                        </li>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white px-2">Lets Talk Compliance</a>
                                        </li>
                                        <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a href="#"
                                                class="text-white px-2">Blogs</a>
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