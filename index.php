<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" integrity="sha512-aOG0c6nPNzGk+5zjwyJaoRUgCdOrfSDhmMID2u4+OIslr0GjpLKo7Xm0Ao3xmpM4T8AmIouRkqwj1nrdVsLKEQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100&display=swap" rel="stylesheet">
<style>
body {
  background-image: url('1.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;
}
/* Quick and dirty normalize hax */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}


.container {
  height: 100vh;
  display: inline-flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
  width: 200vh;
}

.heading {
  margin-bottom: 1.5rem;
  font-family: 'Montserrat', sans-serif;
}

.searchInputWrapper {
  position: relative;
}

.searchInput {
  width: 20rem;
  height: 2rem;
  padding: 0 1rem; 
  border-radius: 2rem;
  border: none;
  transition: transform 0.1s ease-in-out;
  position: center;
}

.searchInput1 {
  width: 05rem;
  height: 2rem;
  padding: 0 1rem; 
  border-radius: 2rem;
  border: none;
  transition: transform 0.1s ease-in-out;
  position: center;
}

::placeholder {
  color: #a1a1a1;
}

/* hide the placeholder text on focus */
:focus::placeholder {
  text-indent: -999px
}

.searchInput:focus {
  outline: none;
  transform: scale(1.1);
  transition: all 0.1s ease-in-out;
}

.searchInputIcon {
  position: absolute;
  right: 0.8rem;
  top: 0.5rem;
  color: #a1a1a1;
  transition: all 0.1s ease-in-out;
}

.container:focus-within > 
.searchInputWrapper > .searchInputIcon {
  right: 0.2rem;
}
</style>
</head>

<body>
<form action="college.php" method="get">
    <div class="autocomplete-container" style="width:300px;">
    

        <div class="container">
  <h1 class="heading">Find Colleges In India</h1>
  <div class="searchInputWrapper">
    <input class="searchInput" type="text" name="search_txt" id="search_txt"> &nbsp;
    <input class="searchInput1" type="submit" value="Search">
    
        </div>
</form>
</body>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  
<script>
                $( function() {
                    $( "#search_txt" ).autocomplete({
                    source: 'search-script.php'  
                    });
                });

                
</script>
</html>
