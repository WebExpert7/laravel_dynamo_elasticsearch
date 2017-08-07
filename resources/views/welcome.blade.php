<!doctype html>
<html>
<head>
<style>
body {font-family: "Lato", sans-serif;}

/* Style the tab */
div.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
div.tab button {
    background-color: inherit;
    float: left;
    border: none;
    outline: none;
    cursor: pointer;
    padding: 14px 16px;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of buttons on hover */
div.tab button:hover {
    background-color: #ddd;
}

/* Create an active/current tablink class */
div.tab button.active {
    background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<p style="font-size: 40px; font-weight: bold;">Laravel & Elasticsearch</p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'London')">Input</button>
  <button class="tablinks" onclick="openCity(event, 'Paris')">Search</button>
</div>

<div id="London" class="tabcontent">
  <h3>Input to elasticsearch</h3>
  <form method="post" action="/">
        {{ csrf_field() }}
        Title:<br><br>
        <input id="title" type="text" name="title" style="font-size:24px;"><br><br>
        Body:<br><br>
        <textarea id="body" rows="4" cols="50" name="body" style="font-size:24px;"></textarea><br><br>
        Keywords:<br><br>
        <input id="keywords" type="text" name="keywords" style="font-size:24px;"><br><br>
        <button type="submit" style="font-size:24px; display: inline-block;">add</button>
        <button id="format" type="button" style="font-size:24px; display: inline-block;">format</button>
  </form>

</div>

<div id="Paris" class="tabcontent">
    <h3>search from elasticsearch</h3>
    Input searchkeyword:<br><br>
    <input id="search_input" type="text" name="search_input" style="font-size:24px;"><br><br>
    <button id="search" type="button" style="font-size:24px; display: inline-block;">search</button>
</div>

<script>
tabcontent = document.getElementsByClassName("tabcontent");
tabcontent[0].style.display = "block";
    function openCity(evt, cityName) {
    var i, tabcontent, tablinks;
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}
$("#format").click(function() {
    $("#title").val('');
    $("#body").val('');
    $("#keywords").val('');
});
</script>
     
</body>
</html> 
