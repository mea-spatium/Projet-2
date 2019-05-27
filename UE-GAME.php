<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="XYmap4.css">
<link rel="stylesheet" href="jquery-jvectormap-2.0.3.css" type="text/css" media="screen"/>
<script src="jquery-3.3.1.js"></script>
<script src="jquery-jvectormap-2.0.3.min.js"></script>
<script src="jquery-jvectormap-fr_regions_2016-mill.js"></script>
<script src="jquery-jvectormap-europe-mill.js"></script>
<script src="jquery-jvectormap-continents-mill.js"></script>
<script src="gdp-data.js"></script>
<script src="categorie.js"></script>
</head>
<body>
<div class="bar">
    <div id="link" onclick="window.location='http://www.mea-spatium.com/map/UE-GAME.php';">QUIZ</div>
    <div id="link-gauche" onclick="window.location='http://www.mea-spatium.com/map/UE-PIB.html';">PIB</div>
</div>
<button type="submit" id="Q1" style=
    "width: 114px;
    height: 50px;
    border-radius: 10px; display: block;"
    onclick="Q1()"
    >Commence</button>
<div id="map" style="width: 600px; height: 400px; margin-top: 150px; position: absolute; top: -9999px; left: -9999px;"></div>
<script>
var bonne = 0;
var mauvaise = 0;
</script>
<script type="text/javascript">
  $(function(){
    $('#map').vectorMap({
    map: 'europe_mill',
    onRegionClick: function(event, code)
    {
        if (code == 'FR') {
            alert("C'est coole");
            document.getElementById('map2').style.position = '';
            document.getElementById('map2').style.left = '';
            document.getElementById('map2').style.top = '';
            document.getElementById('map2').style.display = 'block';
            document.getElementById('map').style.display = 'none';
            document.getElementById('map3').style.display = 'none';
            bonne=bonne+1;
            document.getElementById('bonne').innerHTML = bonne;
            document.getElementById('flag').src = 'http://flags.fmcdn.net/data/flags/w580/de.png';
        }
        else {
            alert("mauvaise réponse");
            mauvaise=mauvaise+1;
            document.getElementById('mauvaise').innerHTML = mauvaise;
        }
    }
});
  });

</script>
<div id="map2" style="width: 600px; height: 400px; margin-top: 150px; margin: 0 auto; position: absolute; top: -9999px; left: -9999px;"></div>
<script type="text/javascript">
    $(function(){
        $('#map2').vectorMap({
        map: 'europe_mill',
        onRegionClick: function(event, code)
      {
          if (code == 'DE') {
            alert("C'est cool");
            document.getElementById('map3').style.position = '';
            document.getElementById('map3').style.left = '';
            document.getElementById('map3').style.top = '';
            document.getElementById('map3').style.display = 'block';
            document.getElementById('map').style.display = 'none';
            document.getElementById('map2').style.display = 'none';
            bonne=bonne+1;
            document.getElementById('bonne').innerHTML = bonne;
            document.getElementById('flag').src = 'http://flags.fmcdn.net/data/flags/w580/gb.png';
          }
          else {
            alert("mauvaise réponse");
            mauvaise=mauvaise+1;
            document.getElementById('mauvaise').innerHTML = mauvaise;
        }
      }
  });
    });
  
</script>
<div id="map3" style="width: 600px; height: 400px; margin-top: 150px; margin: 0 auto; position: absolute; top: -9999px; left: -9999px;"></div>
<script type="text/javascript">
    $(function(){
        $('#map3').vectorMap({
        map: 'europe_mill',
        onRegionClick: function(event, code)
      {
          if (code == 'GB') {
            alert("C'est cool");
            document.getElementById('map3').style.display = 'block';
            document.getElementById('map').style.display = 'none';
            document.getElementById('map2').style.display = 'none';
            bonne=bonne+1;
            document.getElementById('bonne').innerHTML =bonne;
          }
          else {
            alert("mauvaise réponse");
            mauvaise=mauvaise+1;
            document.getElementById('mauvaise').innerHTML = mauvaise;
        }
      }
  });
    });
  
</script>
<div id="reps" style="background-color: white; width: 200px; margin-top: 500;">Bonnes réponses :<div id="bonne" style=" width: 200px; height: 100px; background-color: rgb(182, 182, 182); font-size: 90;"> 0</div></div><br>
<div style="background-color: white; width: 200px;">Mauvaises réponses :<div id="mauvaise" style="width: 200px; height: 100px; background-color: rgb(182, 182, 182); font-size: 90;"> 0</div></div>
<img id="flag" src="http://flags.fmcdn.net/data/flags/w580/fr.png" style=" position: absolute; top: 70%; display: none; margin-left: 48%;" height="100px" width="150px">
<!--<div id="question" style="width: 600px; height: 100px; background-color: white; margin-left: 35%; display: none; font-size: xx-large; position: absolute;
top: 70%; background: url('http://flags.fmcdn.net/data/flags/w580/fr.png')" ></div>-->
<script>
    function Q1() {
        document.getElementById('map').style.position = '';
        document.getElementById('map').style.left = '';
        document.getElementById('map').style.top = '';
        document.getElementById('map2').style.display = 'none';
        document.getElementById('map3').style.display = 'none';
        document.getElementById('Q1').style.display = 'none';
        document.getElementById('flag').style.display = 'block';
        document.getElementById('reps').style.marginTop = '0';
    }
    function Q2() {
        document.getElementById('map2').style.display = 'block';
        document.getElementById('map').style.display = 'none';
        document.getElementById('map3').style.display = 'none';
    }
    function Q3() {
        document.getElementById('map3').style.display = 'block';
        document.getElementById('map').style.display = 'none';
        document.getElementById('map2').style.display = 'none';
    }
</script>
</body>
</html>

