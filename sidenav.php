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
                <button class="btn bg-white btn-lg rounded-pill btn_topic" data-toggle="modal"
                    data-target="#exampleModalCenter">Change Country</button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <!-- <h5 class="modal-title mt-5 px-5 text-center" id="exampleModalLongTitle">Please enter
                                your
                                email id and
                                validate
                                yourself to access a wealth of legal knowledge</h5> -->
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <form class="px-5 py-0">
                            <div class="form-group text-center  px-5">
                                <label class="pb-2 modal-title">Please enter
                                    your
                                    email id and
                                    validate
                                    yourself to access a wealth of legal knowledge</label>
                                <input type="email" class="form-control" id="exampleFormControlInput1"
                                    placeholder="Email Id" autocomplete="off">
                            </div>
                            <div class="form-group px-5">
                                <label for="exampleFormControlSelect1" class="text-center pb-2 modal-title">Choose the
                                    location
                                    for which
                                    you
                                    want to view
                                    the applicable laws</label>
                                <select class="form-control" id="exampleFormControlSelect1">
                                    <option class="active">Select Country</option>
                                    <option>bbbbbbbbbbbb</option>
                                    <option>cccccccccccc</option>
                                </select>
                            </div>
                            <div class="form-group px-5">
                                <label class="text-center pb-2 modal-title w-100">9 + 5 = ?</label>
                                <div>
                                    <input type="text" class="form-control" placeholder="Enter the Answer"
                                        autocomplete="off">
                                </div>
                            </div>
                        </form>
                        <div class="modal-body py-0">

                        </div>

                        <div class="modal-footer d-flex justify-content-center border-0 text-center">
                            <button type="button" class="btn text-white foot-button">SUBMIT</button>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Modal -->
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
                            <li class="panel row px-3 ml-1">
                                <img src="package/justice-scale.png" height="20px" class="mt-2 px-2" />
                                <a data-toggle="collapse" class="mt-2 text-white menu" aria-hidden="true"
                                    data-parent="#accordion1" href="#complaint_law">Compliance
                                    Laws <i class="fa fa-fw fa-angle-down"></i>
                                </a>

                                <ul id="complaint_law" class="collapse list">
                                    <div id="accordion1">
                                        <li class="mt-3 panel"> <img src="package/law-book.png" height="15px" /> <a
                                                data-toggle="collapse" class="mt-1 text-white px-2 menu"
                                                aria-hidden="true" data-parent="#accordion1" href="#legislation"
                                                href="#" class="text-white">Legislations <i
                                                    class="fa fa-fw fa-angle-down"></i></a>
                                        </li>
                                    </div>
                                    <ul id="legislation" class="collapse list2 p-0">
                                        <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                href="domain-page3.php" class="text-white px-2">Central acts </a></li>
                                        <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a href="#"
                                                class="text-white px-2"> Central Rules</a></li>
                                        <li class="mt-3 ml-3"><img src="package/gavel.png" height="15px" /> <a
                                                href="domain-page4.php" class="text-white px-2">State Acts</a></li>
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