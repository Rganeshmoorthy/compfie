<?php  include "header.php"?>
<?php include "sidenav.php" ?>
<html>

<head>
    <script>
    jQuery(document).ready(function() {
        jQuery('.scrollbarnew').scrollbar();
    });
    </script>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/domain-page4.css">
    <script>
    $(document).ready(function() {

        statelist = [{
                state: "Bihar",
                state_acts: "Bihar Fire service act,2014",
                act: 2014
            },
            {
                state: "Assam",
                state_acts: "Assam lifts and escalators act,1990",
                act: 1990
            },
            // {
            //     state: "Bihar",
            //     state_acts: "Bihar municipal act,2007",
            //     act: 2007
            // },
            {
                state: "chatigar",
                state_acts: "chatigar municipal act,1961",
                act: 1961
            },
            {
                state: "Delhi",
                state_acts: "Delhi municipal corporation act,1957",
                act: 1957
            },
            {
                state: "Goa",
                state_acts: "Goa lifts and escaltors acts,2012",
                act: 2012
            },
            {
                state: "Gujarat",
                state_acts: "Gujarat lifts and escalators act,2000",
                act: 2000
            },
            {
                state: "Haryana",
                state_acts: "Haryana lifts and escalators act,2008",
                act: 2008
            }
        ];
        stateArray = [];
        state_acts_array = [];
        $.each(statelist, function(index, value) {
            //if ($.inArray(value.state, statelist) >= 0) {
            stateArray.push(value.state)
            //}
            state_acts_array.push(value.state_acts)
        });
        /* select2 option value */
        $("#state").select2({
            data: stateArray
        });

        // $($("#state").select2("container")).addClass("scrollbarnew");

        /* li data */
        ol = document.createElement('ol');
        document.getElementById('stateacts').appendChild(ol);
        state_acts_array.forEach(function(item) {
            let li = document.createElement('li');
            ol.appendChild(li);
            li.innerHTML += item;
            li.setAttribute('style', 'margin-top: 17px;');
        }); /* li data ends */

        /* Heading change and state fileter */
        $('#state').on("change", function(e) {
            var selected_value = $("#state").val();
            if (selected_value == "") {
                $("#stateacts_heading").html("ALL ACTS");

            } else {
                $("#stateacts_heading").html(selected_value);
                var value = $(this).val().toLowerCase();
                $("#stateacts li").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            }
        });
        /*heading change and state filter end */

        /* <---search filter---> */
        $("#search").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $("#stateacts li").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
        /*search filter ends */
    });
    </script>
</head>

<body>
    <?php include "nav-pills.php"?>
    <div class="main-content">
        <!-- center content starts -->
        <div class="row px-5 px-md-5 py-2 py-md-3">
            <div class="col-12 heading pl-0">
                Labour,Employment & Industrial - State Acts
            </div>
            <div class="col-12 px-3 py-2 py-md-4">
                <div class="d-flex row">
                    <div>
                        <div class="search-div px-2">
                            <input type="text" placeholder="Search Acts" id="search"
                                class="border-0 w-100 pr-4 search-input">
                            <button class="border-0 bg-transparent search-btn"><i class="fa fa-search"></i></button>
                        </div>
                    </div>
                    <div>
                        <div class="py-3 py-md-0 px-0 px-md-3 ">
                            <Select id="state" class="select-country">
                                <option value="" selected hidden>
                                    Select State
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 px-3 
             main-content-3 scrollbarnew">
                <div class="row">
                    <div class="col-12 heading bg-color py-1" id="stateacts_heading">
                        All ACTS
                    </div>
                    <div class="col-12 acts-content">
                        <ol type="1" class="p-1" id="stateacts">

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