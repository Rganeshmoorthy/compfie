<html>

<head>
    <link rel="stylesheet" href="package/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=0">
    <link rel="stylesheet" href="css/header.css">
</head>
<script>
    function validateForm() {
  var x = document.forms["myForm"]["header-search"].value;
  if (x == "") {
    alert("Search box cannot be empty");
    return false;
  }
}
</script>
<body>
    <div class="row my-2 my-md-4 ">
        <div class=" col-sm-12 col-md-2 mx-5 mx-md-4 px-5">
            <a href="index.php"> <img src="package/image.png" height="35"></a>
        </div>

        <div class="col-sm-12  col-md-7 mx-4 mx-md-4 my-3 my-md-0 search w-100">
            <form name="myForm" class="mb-0" action="search-result.php" onsubmit="return validateForm()">
            <input type="text" name="header-search" class="border-0 text w-100 pr-4" placeholder="Search Compfie Law" required>
            <button type="submit" class="border-0 bg-transparent search_button"><i class="fa fa-search"></i></button>
            </form>
        </div>
    </div>
</body>

</html>

