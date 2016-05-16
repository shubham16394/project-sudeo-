<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>QA Engine</title>
<link rel="icon" 
      type="image/png" 
      href="gamesfolder/assassin_s_creed_unity_icon_v1__256x256__by_youknowwho77-d81o1aw.png">
<style>
.main{max-height:700;width:1364px;margin:0 auto}
.main2{height:700px;width:1364px;margin:0 auto;border:;margin-left:-1px}
.mid{height:705px;width:1375;position:relative;top:-705px;left:2px}
.mid2{height:704px;width:100px;background:rgba(0,0,0,0.7);position:relative;top:45px;left:298px;color:white;font-size:20px;border-right:3px solid white;border-left:3px solid white;margin-top:0}
.mid3{height:704px;width:400px;background:#212121;position:relative;top:-660px;left:-102px;display:block;;margin-top:0}
.list{height:200px;width:300px;position:relative;top:50px;margin-top:0;list-style:none;line-height:30px;color: white}
.item{font-size:20px;font-family:Microsoft Sans Serif;color: white}
.icon{height:40px;position:relative;top:200px;left:1320px}
.sign{height:40px;width:100px;border:2px solid #06F;position:relative;top:-20px;left:1200px;border-radius:20px;background:white;text-align:center;font-family:Microsoft Sans Serif;color:#06F;font-size:18px;line-height:40px}
.log{height:40px;width:220px;border:2px solid #06F;border-radius:20px;position:relative;top:-64px;left:1080px;background:white;text-align:center;font-family:Microsoft Sans Serif;color:#06F;font-size:18px;line-height:40px;overflow:hidden}
.m{height:704px;width:400px;position:relative;top:-135px;left:-299px}
.subcat{font-size:20px;font-family:Microsoft Sans Serif;list-style: circle;color:white;}
</style>


</head>

<!-- session_start();
if(isset($_POST["txt"])){
		session_destroy();
		
	}
	/*Here we are using !isset to check whether value is entered in login or not */
	if(!isset($_SESSION["myname"])){
		header("Location: login.php");
	}-->


<body style="margin:0;background:#000" onload="call()">
<div class="main"><div class="main2">
<script type="text/javascript" src="jquery-1.9.1.min.js"></script>
    <!-- use jssor.slider.mini.js (40KB) or jssor.sliderc.mini.js (32KB, with caption, no slideshow) or jssor.sliders.mini.js (28KB, no caption, no slideshow) instead for release -->
    <!-- jssor.slider.mini.js = jssor.sliderc.mini.js = jssor.sliders.mini.js = (jssor.core.js + jssor.utils.js + jssor.slider.js) -->
    <script type="text/javascript" src="jssor.core.js"></script>
    <script type="text/javascript" src="jssor.utils.js"></script>
    <script type="text/javascript" src="jssor.slider.js"></script>
    <script src="jquery-1.11.3.min.js"></script>
    
    <script>

        jQuery(document).ready(function ($) {

            var _SlideshowTransitions = [
            //Fade in L
                {$Duration: 800, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out R
                , { $Duration: 800, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in R
                , { $Duration: 800, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
                , { $Duration: 800, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in T
                , { $Duration: 800, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out B
                , { $Duration: 800, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in B
                , { $Duration: 800, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out T
                , { $Duration: 800, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR
                , { $Duration: 800, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR
                , { $Duration: 800, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in TB
                , { $Duration: 800, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out TB
                , { $Duration: 800, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR Chess
                , { $Duration: 800, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR Chess
                , { $Duration: 800, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in TB Chess
                , { $Duration: 800, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out TB Chess
                , { $Duration: 800, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in Corners
                , { $Duration: 800, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out Corners
                , { $Duration: 800, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

            //Fade Clip in H
                , { $Duration: 800, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out H
                , { $Duration: 800, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip in V
                , { $Duration: 800, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out V
                , { $Duration: 800, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
                ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 0,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,   			            //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            //function ScaleSlider() {
                //var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                //if (parentWidth)
                    //jssor_slider1.$SetScaleWidth(Math.max(Math.min(parentWidth, 1000), 300));
                //else
                    //window.setTimeout(ScaleSlider, 30);
           // }

            //ScaleSlider();

            //if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
                //$(window).bind('resize', ScaleSlider);
            //}


            //if (navigator.userAgent.match(/(iPhone|iPod|iPad)/)) {
            //    $(window).bind("orientationchange", ScaleSlider);
            //}
            //responsive code end
        });
    </script>
    <!-- Jssor Slider Begin -->
    <!-- You can move inline styles to css file or css block. -->
    <div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 1364px;
        height: 700px; background: #191919; overflow: hidden;border:1px solid black">

        <!-- Loading Screen -->
        <div u="loading" style="position: absolute; top: 0px; left: 0px;">
            <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
                background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
            <div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
                top: 0px; left: 0px;width: 100%;height:100%;">
            </div>
        </div>

        <!-- Slides Container -->
        <div u="slides" style="cursor: move; position: absolute; left: -3px; top:-5px; width: 1366px; height: 705px; overflow: hidden;margin-left:0px">
            
            <div>
                <img u="image" src="search.jpg" />
                <!--<img u="thumb" src="thumb-11.jpg" />-->
            </div>
            <div>
                <img u="image" src="Search_Engine.jpg" />
                <!--<img u="thumb" src="thumb-11.jpg" />-->
            </div>
            <div>
                <img u="image" src="Background_Globe.png" />
                <!--<img u="thumb" src="thumb-11.jpg" />-->
            </div>
            <div>
                <img u="image" src="Sydney Night Lights.jpg" />
                <!--<img u="thumb" src="thumb-11.jpg" />-->
            </div>

            
            
            
        </div>
        
        <!-- Arrow Navigator Skin Begin -->
        <style>
            /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l              (normal)
            .jssora05r              (normal)
            .jssora05l:hover        (normal mouseover)
            .jssora05r:hover        (normal mouseover)
            .jssora05ldn            (mousedown)
            .jssora05rdn            (mousedown)
            */
            .jssora05l, .jssora05r, .jssora05ldn, .jssora05rdn
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(../img/a17.png) no-repeat;
                overflow:hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05ldn { background-position: -250px -40px; }
            .jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->
        <!--<span u="arrowleft" class="jssora05l" style="width: 40px; height: 40px; top: 158px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <!--<span u="arrowright" class="jssora05r" style="width: 40px; height: 40px; top: 158px; right: 8px">
        </span>
        <!-- Arrow Navigator Skin End -->
        
        <!-- Thumbnail Navigator Skin Begin -->
        <!--<div u="thumbnavigator" class="jssort01" style="position: absolute; width: 1000px; height: 100px; left:0px; bottom: 0px;">
            <!-- Thumbnail Item Skin Begin -->
            <!--<style>
                /* jssor slider thumbnail navigator skin 01 css */
                /*
                .jssort01 .p           (normal)
                .jssort01 .p:hover     (normal mouseover)
                .jssort01 .pav           (active)
                .jssort01 .pav:hover     (active mouseover)
                .jssort01 .pdn           (mousedown)
                */
                .jssort01 .w {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 100%;
                    height: 100%;
                }

                .jssort01 .c {
                    position: absolute;
                    top: 0px;
                    left: 0px;
                    width: 68px;
                    height: 68px;
                    border: #000 2px solid;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c, .jssort01 .pav .c {
                    background: url(../img/t01.png) center center;
                    border-width: 0px;
                    top: 2px;
                    left: 2px;
                    width: 68px;
                    height: 68px;
                }

                .jssort01 .p:hover .c, .jssort01 .pav:hover .c {
                    top: 0px;
                    left: 0px;
                    width: 70px;
                    height: 70px;
                    border: #fff 1px solid;
                }
            </style>-->
            <!--<div u="slides" style="cursor: move;">
                <div u="prototype" class="p" style="position: absolute; width: 72px; height: 72px; top: 0; left: 0;">
                    <div class=w><thumbnailtemplate style=" width: 100%; height: 100%; border: none;position:absolute; top: 0; left: 0;"></thumbnailtemplate></div>
                    <div class=c>
                    </div>
                </div>
            </div>
            <!-- Thumbnail Item Skin End -->
        </div>
        <!-- Thumbnail Navigator Skin End -->
        <!--<a style="display: none" href="http://www.jssor.com">responsive slider jquery</a>-->
         <div class="mid"><img src="facebook.png" class="icon" style="left:1322px;top:205px"/><img src="google.png" class="icon" style="height:32px;position:relative;top:246px;left:1285px"/><img src="pinterest.png" class="icon" style="position:relative;top:295px;left:1250px"/><img src="twitter.png" class="icon" style="position:relative;top:343px;left:1210px"/><img src="youtube.png" class="icon" style="position:relative;top:391px;left:1170px"/>
         <div class="sign" style="visibility:hidden"><a href="signup.php" style="text-decoration:none;color:#06F">Sign Up</a></div>
         <!--<div class="log" style="text-decoration:none;color:#06F">Hi,  echo $_SESSION["myname"];?> </div>-->
         <div class="m">
         <div class="mid2" onClick="fn()"><img src="xbox_360.ico" style="height:64px;width:64px;position:relative;top:300px;left:18px"/><style>.jssora02l, .jssora02r, .jssora02ldn, .jssora02rdn, #abc
            {
            	position: absolute;
            	cursor: pointer;
            	display: block;
                background: url(a17.png) no-repeat;
                overflow:hidden;
            }
            .jssora02l { background-position: -3px -33px; }
            .jssora02r { background-position: -63px -33px; }
            .jssora02l:hover { background-position: -123px -33px; }
            .jssora02r:hover { background-position: -183px -33px; }
            .jssora02ldn { background-position: -243px -33px; }
            .jssora02rdn { background-position: -303px -33px; }
        </style>
        <!-- Arrow Left -->
        <!--<span u="arrowleft" class="jssora02l" style="width: 55px; height: 55px; top: 60px; left: 8px;">
        </span>
        <!-- Arrow Right -->
        <span u="arrowright" class="jssora02r"  style="width: 55px; height: 55px; top: 60px; right: 8px;left:23px"></span>
        </div><!--<script>$(document).ready(function() {$(".mid2").click(function(){
			$(".mid3").hide(1000);});$(".mid2").click(function(){
			$(".mid3").show(1000);
		});})</script>-->
        <script>
		var st=true;
        $(document).ready(function() {
				
				$(".mid2").click(function(){
					if(st){
		$(".mid3").show(0,function(){$(".m").animate({left:'100px'},500);});		
				
                    st=false;
                    
				}
			else {
				st=true;
                      $(".m").animate({left:'-299px'},500,function(){$(".mid3").css('display','none');});
					  
				    
				}	
			});
		});
    
    
        var ch;
        var b=true;
        var i=0;
        var j=0;
        $(document).ready(function() {
            $("#start_button").click(function(){ ch=startDictation();
                if(ch=="open" || ch=="open slider" || ch=="show me categories" || ch=="show categories")
                {
                    
                 if(st){   
        $(".mid3").show(0,function(){$(".m").animate({left:'100px'},500);});        
                st=false;
                
                if(b){
        t=setInterval(function() {ro()},20);
        function ro(){
            i=i+10;
            if(i>180){clearInterval(t);
                i=0;  }
            else{
        document.getElementsByClassName("jssora02r")[0].style.transform="rotate("+i+"deg)";}}
        b=false;}


                 }   
                 else{alert("wrong command");}
                }
            if(ch=="close" || ch=="close categories" || ch=="close slider") {
                
                if(!st){
                    st=true;
                      $(".m").animate({left:'-299px'},500,function(){$(".mid3").css('display','none');});
                
                      if(!b) { 
              t1=setInterval(function() {ro1()},10);
        function ro1(){
            j=j+10;
            if(j>360){clearInterval(t1);
                j=0;  }
            else{
        document.getElementsByClassName("jssora02r")[0].style.transform="rotate("+j+"deg)";}}
        b=true;
        }

                       }
                   else{alert("wrong command 2");}    
                   }

            if(ch=="capital")
            {
                document.location="QAhtml/capital.html";
            }

          else if(ch=="Prime Minister" || ch=="Prime Ministers")
            {
                document.location="QAhtml/pm.html";
            }
            else if(ch=="president")
            {
                document.location="QAhtml/president.html";
            }
            else if(ch=="Dada Saheb Phalke award" || ch=="Dada Saheb" || ch=="Dadasaheb Phalke award")
            {
                document.location="QAhtml/dada_saheb.html";
            }
             else if(ch=="best movie" || ch=="best film")
            {
                document.location="QAhtml/best_movie.html";
            }
             else if(ch=="best actor" || ch=="best actors")
            {
                document.location="QAhtml/best_actor.html";
            }
             else if(ch=="best actress")
            {
                document.location="QAhtml/best_actress.html";
            }
             else if(ch=="best director" || ch=="best directors")
            {
                document.location="QAhtml/best_director.html";
            }

            else
            {
                
            }

                });

        });


        </script>
        <script>
        var b=true;
		var i=0;
		var j=0;
		function fn(){ 
		   
		if(b){
		t=setInterval(function() {ro()},20);
		function ro(){
			i=i+10;
			if(i>180){clearInterval(t);
			    i=0;  }
			else{
		document.getElementsByClassName("jssora02r")[0].style.transform="rotate("+i+"deg)";}}
		b=false;}
		else { 
	          t1=setInterval(function() {ro1()},10);
		function ro1(){
			j=j+10;
			if(j>360){clearInterval(t1);
			    j=0;  }
			else{
		document.getElementsByClassName("jssora02r")[0].style.transform="rotate("+j+"deg)";}}
			//document.getElementsByClassName("mid3")[0].style.display="none";
		//document.getElementsByClassName("mid2")[0].style.left="-1px";
		b=true;
		}}
        </script>
        <script>
	$(document).ready(function() {
        $("#x").click(function(){
			var txt1=document.getElementById("x").value;
			$.ajax({type:"POST", url: " ",data:{txt:txt1}, success: function(result){
        window.location = "login.php";}}); }); });

	
</script>

<script type="text/javascript">
var final_transcript = '';
var recognizing = false;
 
if ('webkitSpeechRecognition' in window) {
 
  var recognition = new webkitSpeechRecognition();
 
  recognition.continuous = true;
  recognition.interimResults = true;
 
  recognition.onstart = function() {
    
    recognizing = true;
    document.getElementById("p").innerHTML="Listening";
  };
 
  recognition.onerror = function(event) {
    //alert("not recognizing");
    document.getElementById("p").innerHTML="Internet Connection Problem";
    console.log(event.error);
  };
 
  recognition.onend = function() {
    recognizing = false;
    document.getElementById("p").innerHTML="Not Listening";
  };
 
  recognition.onresult = function(event) {
    var interim_transcript = '';
    for (var i = event.resultIndex; i < event.results.length; ++i) {
      if (event.results[i].isFinal) {
        final_transcript += event.results[i][0].transcript;
      } else {
        interim_transcript += event.results[i][0].transcript;
      }
    }
    //final_transcript = capitalize(final_transcript);
    final_span.innerHTML = linebreak(final_transcript);
    interim_span.innerHTML = linebreak(interim_transcript);
    
  };
}
 
var two_line = /\n\n/g;
var one_line = /\n/g;
function linebreak(s) {
  return s.replace(two_line, '<p></p>').replace(one_line, '<br>');
}
 
function capitalize(s) {
  return s.replace(s.substr(0,1), function(m) { return m.toUpperCase(); });
}
 
function startDictation(event) {
  if (recognizing) {

    var xyz=final_transcript;
    document.getElementById("xyz").innerHTML=xyz;

    recognition.stop();
    return xyz;
  }
  final_transcript = '';
  recognition.lang = 'en-US';
  recognition.start();
  final_span.innerHTML = '';
  interim_span.innerHTML = '';
}

</script>
<script>
function call(){
 x="Hi I am Sudo. I am a Question Answer based search engine. You can ask me question from given categories.";


    var msg = new SpeechSynthesisUtterance(x);
    window.speechSynthesis.speak(msg);
}
</script>

        
        
        
        <div class="mid3"><ul class="list"><li class="item" style="color:white;font-size:25px">QUESTION CATEGORIES</li><li class="item">COUNTRY</li><ul class="subcat">
            <li class="" ><a href="QAhtml/capital.html" style="margin-top:0;margin-bottom:0;text-decoration:none;color:white">CAPITAL</a></li>
            <li class="subcat" style="margin-top:0;margin-bottom:0;text-decoration:none"><a href="QAhtml/pm.html" style="margin-top:0;margin-bottom:0;text-decoration:none;color:white">PRIME MINISTER</a></li>
            <li class="subcat" style="margin-top:0;margin-bottom:0;text-decoration:none"><a href="QAhtml/president.html" style="margin-top:0;margin-bottom:0;text-decoration:none;color:white">PRESIDENT</a></li></ul>
            <li class="item" style="margin-top:0;margin-bottom:0;text-decoration:none">CINEMA</li>
            <ul class="subcat">
            <li class="item"><a href="QAhtml/dada_saheb.html" style="margin-top:0;margin-bottom:0;text-decoration:none;color:white">DADA SAHEB FALKE AWARD</a></li>
            <li class="item"><a href="QAhtml/best_movie.html" style="margin-top:0;margin-bottom:0;text-decoration:none;color:white">BEST MOVIE</a></li>
            <li class="item"><a href="QAhtml/best_actor.html" style="margin-top:0;margin-bottom:0;text-decoration:none;color:white">BEST ACTOR</a></li>
            <li class="item"><a href="QAhtml/best_actress.html" style="margin-top:0;margin-bottom:0;text-decoration:none;color:white">BEST ACTRESS</a></li>
            <li class="item"><a href="QAhtml/best_director.html" style="margin-top:0;margin-bottom:0;text-decoration:none;color:white">BEST DIRECTOR</a></li></ul>
            <li class="item" style="margin-top:0;margin-bottom:0;text-decoration:none"></li></ul></div>
      </div>
        </div>
        <div id="speak" style="border-radius:10px;height:200px;width:300px;background:rgba(255,255,255,1);border:solid black 2px;position:relative;top:-1350px;left:800px">
            
            <input type="image" id="start_button"  src="microphone.png" style="height:70px"/>
            <div id="xyz" style="display:none" name="question" style="padding-left:10px;font-size:20px"></div>
    
            <div id="results">
                <p id="p" style="padding-left:10px;font-size:20px">Click Mic</p>
  <span id="final_span" class="final" style="padding-left:10px;font-size:20px"></span>
  <span id="interim_span" class="interim" style="padding-left:0px;font-size:20px"></span>
</div>
<div id="tts" style="display:None"></div>

        </div>
        </div>
        
    </div>
            

</div>
</body>
</html>