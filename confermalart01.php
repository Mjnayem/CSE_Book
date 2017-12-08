<html>

<head>
<meta charset="UTF-8"/>
<style type="text/css">
#dialogoverlay{
    display: none;
    opacity: .8;
    position: fixed;
    top: 0px;
    left: 0px;
    background: #FFF;
    width: 100px;
    z-index: 10;
}
#dialogbox{
    display: none;
    position: fixed;
    background: #000;
    border-radius: 7px;
    width: 550px;
    z-index: 10;
}
#dialogbox > div{background: #FFF;margin: 8px;}
#dialogbox > div > #dialogboxheada{background: #666;font-size: 19px;padding: 10px;color: #CCC;}
#dialogbox > div > #dialogboxbodya{background: #333;padding: 20px;color: #FFF;}
#dialogbox > div > #dialogboxfoota{background: #666;padding: 10px;text-align: right;
}




</style>
<script>
function customAlert(){
    this.render = function(){
        var winW = window.innerWidth;
        var winH = window.innerHeight;
        var dialogoverlay = document.getElementById('dialogoverlay');
        var dialogbox = document.getElementById('dialogbox');
        dialogoverlay.style.display = "block";
        dialogoverlay.style.height = winH+"px";
        
        
    }
    this.ok = function(){
        
    }
}
var Alert = new customAlert();
</script>

</head>
<body>
<div id="dialogoverlay"></div>

<div id="dialogbox">
<div>

<div id="dialogboxhead"></div>
<div id="dialogboxbody"></div>
<div id="dialogboxfoot"></div>

</div>



</div>








</body>



</html>