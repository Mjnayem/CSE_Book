<html>

<body>

<script type="text/javascript">

var image1=new Image()
image1.src="image1.jpg"


var image2=new Image()
image2.src="image2.jpg"


var image3=new Image()
image3.src="image3.jpg"


var image4=new Image()
image4.src="image4.jpg"





</script>

<img src="image1.jpg" name="slide" width="1000" height="600"/>
<script type="text/javascript">
var step=1
function slideit(){
    
    document.images.slide.src=eval ("image"+step+".src")
    if(step<4)
    step++
    else
    step=1
    setTimeout("slideit()",3000)
    
    
}
slideit()

</script>

</body>
</html>