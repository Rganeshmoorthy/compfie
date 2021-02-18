<?php  include "header.php"?>
<?php include "sidenav.php" ?>
<html>

<head>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/domain-page4.css">
    <script>
    $(document).ready(function() {
        var statelist = [
            "Andaman", "Kerala", "Tamilnadu", "Andra"
        ];
        $("#state").select2({
            data: statelist
        });

        var state = [
            "Assam Lifts And Escalators Act, 1990", "Bihar Lifts And Escalators Act, 1990",
            "Kerala Lifts And Escalators Act, 1990", "Chatiskar Lifts And Escalators Act, 1990",
            "Delhi Lifts And Escalators Act, 1990",
            "Goa Lifts And Escalators Act, 1990"
        ];
        ol = document.createElement('ol');

        document.getElementById('stateacts').appendChild(ol);

        state.forEach(function(item) {
            let li = document.createElement('li');
            ol.appendChild(li);

            li.innerHTML += item;
        });
    });
    </script>
</head>

<body>
    <?php include "nav-pills.php"?>
    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-5 px-md-5 py-2 py-md-3 main-content-3">
            <div class="col-12 heading pl-0">
                Labour,Employment & Industrial - State Acts
            </div>
            <div class="col-12 px-3 py-4">
                <div class="d-flex row">
                    <div>
                        <div class="search-div px-2 col-12 md-col-6">
                            <input type="text" placeholder="Search Acts" class="border-0 w-100 pr-4 search-input">
                            <button class="border-0 bg-transparent search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div>
                        <div class="py-3 py-md-0 px-0 px-md-3">
                            <Select id="state" class="select-country">
                                <option value="" selected hidden>
                                    Select State
                                </option>
                                <option value=""></option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-3 py-2">
                <div class="row">
                    <div class="col-12 heading bg-color py-1">
                        All ACTS
                    </div>
                    <div class="col-12 content-bgcolor">
                        <ol type="1" class="ol-content p-0 mt-2" id="stateacts">

                        </ol>
                    </div>
                </div>
            </div>

        </div>
        <!-- center content ends -->
        <?php  include "footer.php"?>
    </div>
</body>

</html>