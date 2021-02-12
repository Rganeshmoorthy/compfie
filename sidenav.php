<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="package/bootstrap.min.css">
    <link rel="stylesheet" href="css/sidenavv.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>

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
    });
    </script>

</head>

<body>

    <div class="sidenav">
        <div class="row m-0 sidenav-body">
            <div class="col-12 text-white w-100 mt-4 topic_head">
                INDIA
            </div>
            <div class="col-12 topic_button mt-1">
                <button class="btn bg-white btn-lg rounded-pill btn_topic">Change Country</button>
            </div>

            <div class="col-12 home mt-3 px-5 text-white">
                <i class="fa fa-fw fa-home"></i> <a href="#" class="text-white">Home</a>
            </div>
            <div class="col-12 mt-3">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-stacked" id="accordion1">
                            <li class="panel row px-3 ml-1">
                                <img src="package/servicee.svg" height="20px" class="mt-3 px-2" />
                                <a data-toggle="collapse" class="mt-3 text-white menu" aria-hidden="true"
                                    data-parent="#accordion1" href="#firstLink">Our Services <i
                                        class="fa fa-fw fa-angle-down"></i> </a>

                                <ul id="firstLink" class="collapse list">

                                    <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                            href="domain-page.php" class="text-white ">Full Assurance Compliance</a>
                                    </li>
                                    <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                            href="locations.html" class="text-white">Tech-Enabled
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
                            <li class="panel row px-3 ml-1">
                                <img src="package/justice-scale.png" height="20px" class="mt-2 px-2" />
                                <a data-toggle="collapse" class="mt-2 text-white menu" aria-hidden="true"
                                    data-parent="#accordion1" href="#complaint_law">Compliance
                                    Laws <i class="fa fa-fw fa-angle-down"></i>
                                </a>

                                <ul id="complaint_law" class="collapse list">
                                    <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                            data-toggle="collapse" class="mt-1 text-white px-2" aria-hidden="true"
                                            data-parent="#accordion1" href="#legislation" href="locations.html"
                                            class="text-white">Legislations <i class="fa fa-fw fa-angle-down"></i></a>
                                    </li>
                                    <ul id="legislation" class="collapse list2 p-0">
                                        <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a href="#"
                                                class="text-white px-2">Central acts </a></li>
                                        <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a href="#"
                                                class="text-white px-2"> Central Rules</a></li>
                                        <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a href="#"
                                                class="text-white px-2">State Acts</a></li>
                                        <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a href="#"
                                                class="text-white px-2">State Rules</a></li>
                                        <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a href="#"
                                                class="text-white px-2">Schemas</a></li>
                                    </ul>
                                    <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                            href="locations.html" class="text-white px-2">Case Laws</a>
                                    </li>

                                    <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                            href="locations.html" class="text-white px-2">Notification</a>
                                    </li>
                                    <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                            href="locations.html" class="text-white px-2">Farms</a>
                                    </li>
                                    <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                            href="locations.html" class="text-white px-2">Key Compliance Data</a>
                                    </li>
                                    <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                            href="locations.html" class="text-white px-2">Opinions</a>
                                    </li>
                                    <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                            href="locations.html" class="text-white px-2">Lets Talk Compliance</a>
                                    </li>
                                    <li class="mt-3"> <img src="package/law-book.png" height="15px" /> <a
                                            href="locations.html" class="text-white px-2">Blogs</a>
                                    </li>
                                </ul>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12  text-white foot_class">
            <p class="mx-5">sample@gmail.com</p>
            <button class="btn btn-lg mx-5 bg-white rounded-pill btn_topic">Log Out</button>
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