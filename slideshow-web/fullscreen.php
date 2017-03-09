<!DOCTYPE html>
<!-- Camera is a Pixedelic free jQuery slideshow | Manuel Masia (designer and developer) -->
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" >
    <title>SiSLab slideshow </title>
    <meta name="description" content="SiSLab slideshow">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="refresh" content="1800">



    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //        Styles
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->
    <link rel='stylesheet' id='camera-css'  href='css/camera.css' type='text/css' media='all'>
    <style>
        html,body {
            height: 100%;
            margin: 0;
            padding: 0;
        }
        a {
            color: #09f;
        }
        a:hover {
            text-decoration: none;
        }
        #back_to_camera {
            background: rgba(255,255,255,.9);
            clear: both;
            display: block;
            height: 40px;
            line-height: 40px;
            padding: 20px;
            position: relative;
            z-index: 1;
        }
        .fluid_container {
            bottom: 0;
            height: 100%;
            left: 0;
            position: fixed;
            right: 0;
            top: 0;
            z-index: 0;
        }
        #camera_wrap_4 {
            bottom: 0;
            height: 100%;
            left: 0;
            margin-bottom: 0!important;
            position: fixed;
            right: 0;
            top: 0;
        }
        .camera_bar {
            z-index: 2;
        }
        .camera_thumbs {
            margin-top: -100px;
            position: relative;
            z-index: 1;
        }
        .camera_thumbs_cont {
            border-radius: 0;
            -moz-border-radius: 0;
            -webkit-border-radius: 0;
        }
        .camera_overlayer {
            opacity: .1;
        }
        #forecast {
            display: block;       /* iframes are inline by default */
            background:  none;
            border: none;         /* Reset default border */
            width: 50%;
            height: 50%;
            align: middle;
            -ms-zoom: 2;
            -moz-transform: scale(2);
            -moz-transform-origin: 0 0;
            -o-transform: scale(2);
            -o-transform-origin: 0 0;
            -webkit-transform: scale(2);
            -webkit-transform-origin: 0 0;
        }
        #gcalendar {
            display: block;       /* iframes are inline by default */
            background:  none;
            border: none;         /* Reset default border */
            width: 50%;
            height: 50%;
            align: bottom;
            -ms-zoom: 2;
            -moz-transform: scale(2);
            -moz-transform-origin: 0 0;
            -o-transform: scale(2);
            -o-transform-origin: 0 0;
            -webkit-transform: scale(2);
            -webkit-transform-origin: 0 0;
        }
		
        iframe {
            display: block;       /* iframes are inline by default */
            background:  none;
            border: none;         /* Reset default border */
            width: 100%;
            height: 100%;
            align: bottom;

  
        }

    </style>

    <!--///////////////////////////////////////////////////////////////////////////////////////////////////
    //
    //        Scripts
    //
    ///////////////////////////////////////////////////////////////////////////////////////////////////-->

    <script type='text/javascript' src='scripts/jquery.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.mobile.customized.min.js'></script>
    <script type='text/javascript' src='scripts/jquery.easing.1.3.js'></script>
    <script type='text/javascript' src='scripts/camera.min.js'></script>

    <script>
        jQuery(function(){
            jQuery('#camera_wrap_4').camera({
                height: 'auto',
                loader: 'none',
                pagination: false,
                thumbnails: false,
		fx: 'simpleFade', // For low performance computer
                hover: false,
                opacityOnGrid: false,
                imagePath: 'images/',
                time:    20000,
                trasferPeriod: 4000,
                onLoaded: function(){
			autoplay='1'; // Autoplay iframe
                }
            });
        });
    </script>

</head>
<body>
    <div class="fluid_container">
        <div class="camera_wrap camera_emboss pattern_1" id="camera_wrap_4">

            <div  data-src="images/blank.gif" >
                <iframe id="forecast" src="http://forecast.io/embed/#lat=21.0277&lon=105.8499&name=Hoan%20Kiem%20Ha%20Noi&color=#00aaff&font=Georgia&units=ca" ></iframe>
                <div class='camera_caption fadeFromBottom'>
                    SiSLab Gallery 1 @snn
                </div>
            </div>
           <div data-src="images/blank.gif">
                <iframe id="gcalendar" src="https://www.google.com/calendar/embed?src=tranxuantu%40gmail.com&amp;ctz=Asia/Saigon"></iframe>
                <div class='camera_caption fadeFromBottom'>
                     Calendar @snn
                </div>
            </div>
            <?php include "scripts/images.php"; imgsInDir(); ?>
        </div><!-- #camera_wrap_3 -->

    </div><!-- .fluid_container -->

</body>
</html>
