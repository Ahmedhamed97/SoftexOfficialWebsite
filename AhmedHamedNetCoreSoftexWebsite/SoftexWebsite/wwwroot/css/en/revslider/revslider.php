#revslider, #revslider-container {
	width: 100%;
	position: relative
}
.tp-bannershadow, .tp-simpleresponsive img {
	-moz-user-select: none;
	-khtml-user-select: none;
	-webkit-user-select: none;
	-o-user-select: none
}
.tp-bullets, .tparrows {
	-webkit-transition: opacity .2s ease-out;
	-moz-transition: opacity .2s ease-out;
	-o-transition: opacity .2s ease-out;
	-ms-transition: opacity .2s ease-out
}
.tparrows, .tparrows.preview1 {
	-webkit-backface-visibility: hidden
}
#revslider-container {
	padding: 0;
	overflow: hidden;
	background-color: #eaeaea;
	margin: 0
}
@media (min-width:1200px) {
#revslider-container {
	height: 620px
}
}
#revslider>ul>li {
	list-style: none;
	position: absolute;
	visibility: hidden
}
.tp-static-layers {
	position: absolute;
	z-index: 505;
	top: 0;
	left: 0
}
.tp-caption.tp-hidden-caption, .tp-hide-revslider {
	visibility: hidden!important;
	display: none!important
}
.tp-caption {
	z-index: 1;
	white-space: nowrap
}
.tp-caption.rev-title {
	position: absolute;
	font: 200 38px/1 Raleway, Verdana, sans-serif;
	color: #fff;
	white-space: nowrap
}
.tp-caption.rev-subtitle {
	position: absolute;
	font: 300 22px/1 "Open Sans", sans-serif;
	color: #fff;
	white-space: nowrap
}
.tp-caption.rev-text {
	position: absolute;
	font: 300 16px/1.5 "Open Sans", sans-serif;
	color: #fff;
	white-space: pre-wrap;
	max-width: 420px
}
.rev-btn .btn+.btn {
	margin-left: 15px
}
.tp_inner_padding {
	box-sizing: border-box;
	-webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	max-height: none!important
}
@media only screen and (min-width:768px) and (max-width:959px) {
.tp-caption.rev-btn .btn {
	padding: 6px 12px;
	font-size: 12px;
	line-height: 1.5
}
.tp-caption.rev-btn .btn.min-width {
	min-width: 110px
}
}
@media only screen and (min-width:480px) and (max-width:767px) {
.tp-caption.rev-btn .btn {
	padding: 3px 10px;
	font-size: 10px;
	line-height: 1.5
}
.tp-caption.rev-btn .btn.min-width {
	min-width: 0
}
.rev-btn .btn+.btn {
	margin-left: 8px
}
}
@media only screen and (min-width:0px) and (max-width:479px) {
.tp-caption.rev-btn .btn {
	padding: 2px 8px;
	font-size: 6px;
	line-height: 1.5
}
.tp-caption.rev-btn .btn.min-width {
	min-width: 0
}
.rev-btn .btn+.btn {
	margin-left: 4px
}
}
.fullscreen-container, .fullwidthbanner-container {
	padding: 0;
	width: 100%;
	position: relative
}
@media (max-width:992px) {
.tparrows {
	display: none!important
}
}
.tp-bullets.simplebullets {
	display: none!important
}
.fullwidthbanner-container {
	overflow: hidden
}
.fullwidthbanner-container .fullwidthbanner {
	width: 100%;
	position: relative
}
.tp-simpleresponsive .caption, .tp-simpleresponsive .tp-caption {
	position: absolute;
	visibility: hidden;
	-webkit-font-smoothing: antialiased!important
}
.tp-simpleresponsive img {
	max-width: none
}
.noFilterClass {
	filter: none!important
}
.tp-bannershadow {
	position: absolute;
	margin-left: auto;
	margin-right: auto
}
.tp-bannershadow.tp-shadow1 {
	background: url(images/revslider/shadow1.png) no-repeat;
	background-size: 100% 100%;
	width: 890px;
	height: 60px;
	bottom: -60px
}
.tp-bannershadow.tp-shadow2 {
	background: url(images/revslider/shadow2.png) no-repeat;
	background-size: 100% 100%;
	width: 890px;
	height: 60px;
	bottom: -60px
}
.tp-bannershadow.tp-shadow3 {
	background: url(images/revslider/shadow3.png) no-repeat;
	background-size: 100% 100%;
	width: 890px;
	height: 60px;
	bottom: -60px
}
.caption.fullscreenvideo {
	left: 0;
	top: 0;
	position: absolute;
	width: 100%;
	height: 100%
}
.caption.fullscreenvideo iframe, .caption.fullscreenvideo video {
	width: 100%!important;
	height: 100%!important;
	display: none
}
.tp-caption.fullscreenvideo {
	left: 0;
	top: 0;
	position: absolute;
	width: 100%;
	height: 100%
}
.tp-caption.fullscreenvideo iframe, .tp-caption.fullscreenvideo iframe video {
	width: 100%!important;
	height: 100%!important;
	display: none
}
.fullcoveredvideo video, .fullscreenvideo video {
	background: #000
}
.fullcoveredvideo .tp-poster {
	background-position: center center;
	background-size: cover;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0
}
.html5vid.videoisplaying .tp-poster {
	display: none
}
.tp-video-play-button {
	background: #000;
	background: rgba(0,0,0,.3);
	padding: 5px;
	border-radius: 5px;
	-moz-border-radius: 5px;
	-webkit-border-radius: 5px;
	position: absolute;
	top: 50%;
	left: 50%;
	font-size: 40px;
	color: #FFF;
	z-index: 3;
	margin-top: -27px;
	margin-left: -28px;
	text-align: center;
	cursor: pointer
}
.html5vid .tp-revstop {
	width: 6px;
	height: 20px;
	border-left: 5px solid #fff;
	border-right: 5px solid #fff;
	position: relative;
	margin: 10px 20px;
	display: none
}
.html5vid.videoisplaying .revicon-right-dir {
	display: none
}
.html5vid.videoisplaying .tp-revstop {
	display: block
}
.html5vid.videoisplaying .tp-video-play-button {
	display: none
}
.html5vid:hover .tp-video-play-button {
	display: block
}
.fullcoveredvideo .tp-video-play-button {
	display: none!important
}
.tp-dottedoverlay {
	background-repeat: repeat;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	left: 0;
	z-index: 1
}
.tp-dottedoverlay.twoxtwo {
	background: url(images/revslider/gridtile.png)
}
.tp-dottedoverlay.twoxtwowhite {
	background: url(images/revslider/gridtile_white.png)
}
.tp-dottedoverlay.threexthree {
	background: url(images/revslider/gridtile_3x3.png)
}
.tp-dottedoverlay.threexthreewhite {
	background: url(images/revslider/gridtile_3x3_white.png)
}
.tpclear {
	clear: both
}
.tp-bullets {
	z-index: 900;
	position: absolute;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	-moz-opacity: 1;
	-khtml-opacity: 1;
	opacity: 1;
	-webkit-transform: translateZ(5px)
}
.tp-bullets.hidebullets {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	-moz-opacity: 0;
	-khtml-opacity: 0;
	opacity: 0
}
.tp-bullets.simplebullets.navbar {
	border: 1px solid #666;
	border-bottom: 1px solid #444;
	background: url(images/revslider/boxed_bgtile.png);
	height: 40px;
	padding: 0 10px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.tp-bullets.simplebullets.navbar-old {
	background: url(images/revslider/navigdots_bgtile.png);
	height: 35px;
	padding: 0 10px;
	-webkit-border-radius: 5px;
	-moz-border-radius: 5px;
	border-radius: 5px
}
.tp-bullets.simplebullets.round .bullet {
	cursor: pointer;
	position: relative;
	background: url(images/revslider/bullet.png) top left;
	width: 20px;
	height: 20px;
	margin-right: 0;
	float: left;
	margin-top: 0;
	margin-left: 3px
}
.tp-bullets.simplebullets.round .bullet.last {
	margin-right: 3px
}
.tp-bullets.simplebullets.round-old .bullet {
	cursor: pointer;
	position: relative;
	background: url(images/revslider/bullets.png) bottom left;
	width: 23px;
	height: 23px;
	margin-right: 0;
	float: left;
	margin-top: 0
}
.tp-bullets.simplebullets.square .bullet, .tp-bullets.simplebullets.square-old .bullet {
	background: url(images/revslider/bullets2.png) bottom left;
	width: 19px;
	margin-right: 0
}
.tp-bullets.simplebullets.navbar .bullet, .tp-bullets.simplebullets.square .bullet, .tp-bullets.simplebullets.square-old .bullet {
	height: 19px;
	margin-top: 0;
	cursor: pointer;
	position: relative;
	float: left
}
.tp-bullets.simplebullets.round-old .bullet.last {
	margin-right: 0
}
.tp-bullets.simplebullets.square .bullet.last {
	margin-right: 0
}
.tp-bullets.simplebullets.square-old .bullet.last {
	margin-right: 0
}
.tp-bullets.simplebullets.navbar .bullet {
	background: url(images/revslider/bullet_boxed.png) top left;
	width: 18px;
	margin-right: 5px
}
.tp-bullets.simplebullets.navbar .bullet.first {
	margin-left: 0!important
}
.tp-bullets.simplebullets.navbar .bullet.last {
	margin-right: 0!important
}
.tp-bullets.simplebullets.navbar-old .bullet {
	cursor: pointer;
	position: relative;
	background: url(images/revslider/navigdots.png) bottom left;
	width: 15px;
	height: 15px;
	margin-left: 5px!important;
	margin-right: 5px!important;
	float: left;
	margin-top: 10px
}
.tp-bullets.simplebullets.navbar-old .bullet.first {
	margin-left: 0!important
}
.tp-bullets.simplebullets.navbar-old .bullet.last {
	margin-right: 0!important
}
.tp-bullets.simplebullets .bullet.selected, .tp-bullets.simplebullets .bullet:hover {
	background-position: top left
}
.tp-bullets.simplebullets.navbar .bullet.selected, .tp-bullets.simplebullets.navbar .bullet:hover, .tp-bullets.simplebullets.round .bullet.selected, .tp-bullets.simplebullets.round .bullet:hover {
	background-position: bottom left
}
.tparrows {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	-moz-opacity: 1;
	-khtml-opacity: 1;
	opacity: 1;
	-webkit-transform: translateZ(5000px);
	-webkit-transform-style: flat;
	z-index: 600;
	position: relative
}
.tparrows.preview1, .tparrows.preview4 {
	-webkit-transform-style: preserve-3d;
	-webkit-perspective: 1000;
	-moz-perspective: 1000
}
.tp-leftarrow, .tp-rightarrow {
	z-index: 100;
	cursor: pointer;
	position: relative;
	width: 40px;
	height: 40px
}
.tparrows.hidearrows {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	-moz-opacity: 0;
	-khtml-opacity: 0;
	opacity: 0
}
.tp-leftarrow {
	background: url(images/revslider/large_left.png) top left
}
.tp-rightarrow {
	background: url(images/revslider/large_right.png) top left
}
.tp-leftarrow.round, .tp-rightarrow.round {
	z-index: 100;
	cursor: pointer;
	position: relative;
	width: 19px;
	height: 14px
}
.tp-leftarrow.round {
	background: url(images/revslider/small_left.png) top left;
	margin-right: 0;
	float: left;
	margin-top: 0
}
.tp-rightarrow.round {
	background: url(images/revslider/small_right.png) top left;
	margin-right: 0;
	float: left;
	margin-top: 0
}
.tp-leftarrow.round-old, .tp-rightarrow.round-old {
	z-index: 100;
	cursor: pointer;
	position: relative;
	width: 26px;
	height: 26px;
	margin-right: 0;
	float: left;
	margin-top: 0
}
.tp-leftarrow.round-old {
	background: url(images/revslider/arrow_left.png) top left
}
.tp-rightarrow.round-old {
	background: url(images/revslider/arrow_right.png) top left
}
.tp-leftarrow.navbar, .tp-rightarrow.navbar {
	z-index: 100;
	cursor: pointer;
	position: relative;
	width: 20px;
	height: 15px;
	float: left;
	margin-top: 12px
}
.tp-leftarrow.navbar {
	background: url(images/revslider/small_left_boxed.png) top left;
	margin-right: 6px
}
.tp-rightarrow.navbar {
	background: url(images/revslider/small_right_boxed.png) top left;
	margin-left: 6px
}
.tp-leftarrow.navbar-old, .tp-rightarrow.navbar-old {
	z-index: 100;
	cursor: pointer;
	position: relative;
	width: 9px;
	height: 16px;
	float: left;
	margin-top: 10px
}
.tp-leftarrow.navbar-old {
	background: url(images/revslider/arrowleft.png) top left;
	margin-right: 6px
}
.tp-rightarrow.navbar-old {
	background: url(images/revslider/arrowright.png) top left;
	margin-left: 6px
}
.tp-leftarrow.navbar-old.thumbswitharrow {
	margin-right: 10px
}
.tp-leftarrow.square, .tp-leftarrow.square-old {
	margin-right: 0;
	z-index: 100;
	cursor: pointer;
	position: relative;
	width: 12px;
	height: 17px;
	margin-top: 0;
	float: left
}
.tp-rightarrow.navbar-old.thumbswitharrow {
	margin-left: 0
}
.tp-leftarrow.square {
	background: url(images/revslider/arrow_left2.png) top left
}
.tp-rightarrow.square {
	z-index: 100;
	cursor: pointer;
	position: relative;
	background: url(images/revslider/arrow_right2.png) top left;
	width: 12px;
	height: 17px;
	float: left;
	margin-left: 0;
	margin-top: 0
}
.tp-leftarrow.square-old {
	background: url(images/revslider/arrow_left2.png) top left
}
.tp-rightarrow.square-old {
	z-index: 100;
	cursor: pointer;
	position: relative;
	background: url(images/revslider/arrow_right2.png) top left;
	width: 12px;
	height: 17px;
	float: left;
	margin-left: 0;
	margin-top: 0
}
.tp-leftarrow.default, .tp-rightarrow.default {
	position: relative;
	width: 40px;
	height: 40px;
	cursor: pointer;
	z-index: 100
}
.tp-leftarrow.default {
	background: url(images/revslider/large_left.png)
}
.tp-rightarrow.default {
	background: url(images/revslider/large_right.png)
}
.tp-leftarrow:hover, .tp-rightarrow:hover {
	background-position: bottom left
}
.tp-bullets.tp-thumbs {
	z-index: 1000;
	position: absolute;
	padding: 3px;
	background-color: #fff;
	width: 500px;
	height: 50px;
	margin-top: -50px
}
.fullwidthbanner-container .tp-thumbs {
	padding: 3px
}
.tp-bullets.tp-thumbs .tp-mask {
	width: 500px;
	height: 50px;
	overflow: hidden;
	position: relative
}
.tp-bullets.tp-thumbs .tp-mask .tp-thumbcontainer {
	width: 5000px;
	position: absolute
}
.tp-bullets.tp-thumbs .bullet {
	width: 100px;
	height: 50px;
	cursor: pointer;
	overflow: hidden;
	background: 0 0;
	margin: 0;
	float: left;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=50)";
	-moz-opacity: .5;
	-khtml-opacity: .5;
	opacity: .5;
	-webkit-transition: all .2s ease-out;
	-moz-transition: all .2s ease-out;
	-o-transition: all .2s ease-out;
	-ms-transition: all .2s ease-out
}
.tp-bullets.tp-thumbs .bullet.selected, .tp-bullets.tp-thumbs .bullet:hover {
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	-moz-opacity: 1;
	-khtml-opacity: 1;
	opacity: 1
}
.tp-thumbs img {
	width: 100%
}
.tp-bannertimer {
	width: 100%;
	height: 7px;
	background: rgba(203,198,278,.6);
	position: absolute;
	z-index: 200;
	top: 0
}
.tp-bannertimer.tp-bottom {
	bottom: 0;
	height: 7px;
	top: auto
}
@media only screen and (min-width:0px) and (max-width:479px) {
.responsive .tp-bullets, .responsive .tparrows {
	display: none
}
}
.tp-simpleresponsive a {
	text-decoration: none
}
.tp-simpleresponsive ul {
	list-style: none;
	padding: 0;
	margin: 0
}
.tp-bullets.preview1 .bullet, .tp-bullets.preview2 .bullet {
	cursor: pointer;
	margin-bottom: 0!important;
	float: none!important
}
.tp-simpleresponsive>ul>li {
	list-stye: none;
	position: absolute;
	visibility: hidden
}
.caption.slidelink a div, .tp-caption.slidelink a div {
	width: 3000px;
	height: 1500px;
	background: url(images/revslider/coloredbg.png)
}
.tp-caption.slidelink a span {
	background: url(images/revslider/coloredbg.png)
}
.tparrows .tp-arr-imgholder, .tparrows .tp-arr-titleholder {
	display: none
}
.tparrows.preview1 {
	width: 100px;
	height: 100px;
	-moz-backface-visibility: hidden;
	background: 0 0
}
.tparrows.preview1:after {
	position: absolute;
	left: 0;
	top: 0;
	font-family: revicons;
	color: #fff;
	font-size: 30px;
	width: 100px;
	height: 100px;
	text-align: center;
	background: #fff;
	background: rgba(0,0,0,.15);
	z-index: 2;
	line-height: 100px;
	-webkit-transition: background .3s, color .3s;
	-moz-transition: background .3s, color .3s;
	transition: background .3s, color .3s
}
.tp-rightarrow.preview1:after {
	content: '\e825'
}
.tp-leftarrow.preview1:after {
	content: '\e824'
}
.tparrows.preview1:hover:after {
	background: rgba(255,255,255,1);
	color: #aaa
}
.tparrows.preview1 .tp-arr-imgholder {
	background-size: cover;
	background-position: center center;
	display: block;
	width: 100%;
	height: 100%;
	position: absolute;
	top: 0;
	-webkit-transition: -webkit-transform .3s;
	transition: transform .3s;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden
}
.tp-rightarrow.preview1 .tp-arr-imgholder {
	right: 100%;
	-webkit-transform: rotateY(-120deg);
	transform: rotateY(-120deg);
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%
}
.tp-leftarrow.preview1 .tp-arr-imgholder {
	left: 100%;
	-webkit-transform: rotateY(120deg);
	transform: rotateY(-120deg);
	-webkit-transform-origin: 0 50%;
	transform-origin: 0 50%
}
.tparrows.preview1:hover .tp-arr-imgholder {
	-webkit-transform: rotateY(0);
	transform: rotateY(0)
}
@media only screen and (min-width:768px) and (max-width:979px) {
.tparrows.preview1, .tparrows.preview1:after {
	width: 80px;
	height: 80px;
	line-height: 80px;
	font-size: 24px
}
}
@media only screen and (min-width:480px) and (max-width:767px) {
.tparrows.preview1, .tparrows.preview1:after {
	width: 60px;
	height: 60px;
	line-height: 60px;
	font-size: 20px
}
}
@media only screen and (min-width:0px) and (max-width:479px) {
.tparrows.preview1, .tparrows.preview1:after {
	width: 40px;
	height: 40px;
	line-height: 40px;
	font-size: 12px
}
}
.tp-bullets.preview1 {
	height: 21px
}
.tp-bullets.preview1 .bullet {
	position: relative!important;
	background: rgba(0,0,0,.15)!important;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	width: 5px!important;
	height: 5px!important;
	border: 8px solid transparent!important;
	display: inline-block;
	margin-right: 5px!important;
	-webkit-transition: background-color .2s, border-color .2s;
	-moz-transition: background-color .2s, border-color .2s;
	-o-transition: background-color .2s, border-color .2s;
	-ms-transition: background-color .2s, border-color .2s;
	transition: background-color .2s, border-color .2s;
	box-sizing: content-box;
	-moz-box-sizing: content-box;
	-webkit-box-sizing: content-box
}
.tp-bullets.preview1 .bullet.last {
	margin-right: 0
}
.tp-bullets.preview1 .bullet.selected, .tp-bullets.preview1 .bullet:hover {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	background: #aaa!important;
	width: 5px!important;
	height: 5px!important;
	border: 8px solid rgba(255,255,255,1)!important
}
.tparrows.preview2 {
	min-width: 60px;
	min-height: 60px;
	background: #fff;
	border-radius: 30px;
	-moz-border-radius: 30px;
	-webkit-border-radius: 30px;
	overflow: hidden;
	-webkit-transition: -webkit-transform 1.3s;
	-webkit-transition: width .3s, background-color .3s, opacity .3s;
	transition: width .3s, background-color .3s, opacity .3s;
	backface-visibility: hidden
}
.tparrows.preview2:after, .tparrows.preview3:after {
	-webkit-transition: color .3s;
	position: absolute;
	font-family: revicons
}
.tparrows.preview2:after {
	top: 50%;
	color: #aaa;
	font-size: 25px;
	margin-top: -18px;
	-moz-transition: color .3s;
	transition: color .3s
}
.tp-rightarrow.preview2:after {
	content: '\e81e';
	right: 18px
}
.tp-leftarrow.preview2:after {
	content: '\e81f';
	left: 18px
}
.tparrows.preview2 .tp-arr-titleholder {
	background-size: cover;
	background-position: center center;
	display: block;
	width: auto;
	position: absolute;
	top: 0;
	-webkit-transition: -webkit-transform .3s;
	transition: transform .3s;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	color: #000;
	text-transform: uppercase;
	white-space: nowrap;
	letter-spacing: 1px;
	font-weight: 400;
	font-size: 14px;
	line-height: 60px;
	padding: 0 10px;
	box-sizing: border-box;
	-moz-box-sizing: border-box;
	-webkit-box-sizing: border-box
}
.tp-rightarrow.preview2 .tp-arr-titleholder {
	right: 50px;
	-webkit-transform: translateX(-100%);
	transform: translateX(-100%)
}
.tp-leftarrow.preview2 .tp-arr-titleholder {
	left: 50px;
	-webkit-transform: translateX(100%);
	transform: translateX(100%)
}
.tparrows.preview2.hovered {
	width: 300px
}
.tparrows.preview2:hover {
	background: #fff
}
.tparrows.preview2:hover:after {
	color: #000
}
.tparrows.preview2:hover .tp-arr-titleholder {
	-webkit-transform: translateX(0);
	transform: translateX(0)
}
.tp-bullets.preview2 {
	height: 17px
}
.tp-bullets.preview2 .bullet {
	position: relative!important;
	background: rgba(0,0,0,.5)!important;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	width: 6px!important;
	height: 6px!important;
	border: 5px solid transparent!important;
	display: inline-block;
	margin-right: 2px!important;
	-webkit-transition: background-color .2s, border-color .2s;
	-moz-transition: background-color .2s, border-color .2s;
	-o-transition: background-color .2s, border-color .2s;
	-ms-transition: background-color .2s, border-color .2s;
	transition: background-color .2s, border-color .2s;
	box-sizing: content-box;
	-moz-box-sizing: content-box;
	-webkit-box-sizing: content-box
}
.tp-bullets.preview2 .bullet.last {
	margin-right: 0
}
.tp-bullets.preview2 .bullet.selected, .tp-bullets.preview2 .bullet:hover {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	background: rgba(255,255,255,1)!important;
	width: 6px!important;
	height: 6px!important;
	border: 5px solid rgba(0,0,0,1)!important
}
@media only screen and (min-width:768px) and (max-width:979px) {
.tparrows.preview2 {
	min-width: 40px;
	min-height: 40px;
	width: 40px;
	height: 40px;
	border-radius: 20px;
	-moz-border-radius: 20px;
	-webkit-border-radius: 20px
}
.tparrows.preview2:after {
	position: absolute;
	top: 50%;
	font-family: revicons;
	font-size: 20px;
	margin-top: -12px
}
.tp-rightarrow.preview2:after {
	content: '\e81e';
	right: 11px
}
.tp-leftarrow.preview2:after {
	content: '\e81f';
	left: 11px
}
.tparrows.preview2 .tp-arr-titleholder {
	font-size: 12px;
	line-height: 40px;
	letter-spacing: 0
}
.tp-rightarrow.preview2 .tp-arr-titleholder {
	right: 35px
}
.tp-leftarrow.preview2 .tp-arr-titleholder {
	left: 35px
}
}
@media only screen and (min-width:480px) and (max-width:767px) {
.tparrows.preview2 {
	min-width: 30px;
	min-height: 30px;
	width: 30px;
	height: 30px;
	border-radius: 15px;
	-moz-border-radius: 15px;
	-webkit-border-radius: 15px
}
.tparrows.preview2:after {
	position: absolute;
	top: 50%;
	font-family: revicons;
	font-size: 14px;
	margin-top: -12px
}
.tp-rightarrow.preview2:after {
	content: '\e81e';
	right: 8px
}
.tp-leftarrow.preview2:after {
	content: '\e81f';
	left: 8px
}
.tparrows.preview2 .tp-arr-titleholder {
	font-size: 10px;
	line-height: 30px;
	letter-spacing: 0
}
.tp-rightarrow.preview2 .tp-arr-titleholder {
	right: 25px
}
.tp-leftarrow.preview2 .tp-arr-titleholder {
	left: 25px
}
}
@media only screen and (min-width:0px) and (max-width:479px) {
.tparrows.preview2 {
	min-width: 30px;
	min-height: 30px;
	width: 30px;
	height: 30px;
	border-radius: 15px;
	-moz-border-radius: 15px;
	-webkit-border-radius: 15px
}
.tparrows.preview2:after {
	position: absolute;
	top: 50%;
	font-family: revicons;
	font-size: 14px;
	margin-top: -12px
}
.tp-rightarrow.preview2:after {
	content: '\e81e';
	right: 8px
}
.tp-leftarrow.preview2:after {
	content: '\e81f';
	left: 8px
}
.tparrows.preview2 .tp-arr-titleholder {
	display: none;
	visibility: none
}
.tparrows.preview2:hover {
	width: 30px!important;
	height: 30px!important
}
}
.tp-bullets.preview3 .bullet, .tp-bullets.preview4 .bullet {
	cursor: pointer;
	-webkit-border-radius: 10px;
	margin-right: 2px!important;
	margin-bottom: 0!important;
	box-sizing: content-box
}
.tparrows.preview3 {
	width: 70px;
	height: 70px;
	background: #fff;
	background: rgba(255,255,255,1);
	-webkit-transform-style: flat
}
.tparrows.preview3:after {
	line-height: 70px;
	text-align: center;
	color: #aaa;
	font-size: 30px;
	top: 0;
	left: 0;
	background: #fff;
	z-index: 100;
	width: 70px;
	height: 70px;
	-moz-transition: color .3s;
	transition: color .3s
}
.tparrows.preview3:hover:after {
	color: #000
}
.tp-rightarrow.preview3:after {
	content: '\e825'
}
.tp-leftarrow.preview3:after {
	content: '\e824'
}
.tparrows.preview3 .tp-arr-iwrapper {
	-webkit-transform: scale(0, 1);
	transform: scale(0, 1);
	-webkit-transform-origin: 100% 50%;
	transform-origin: 100% 50%;
	-webkit-transition: -webkit-transform .2s;
	transition: transform .2s;
	z-index: 0;
	position: absolute;
	background: #000;
	background: rgba(0,0,0,.75);
	display: table;
	min-height: 90px;
	top: -10px
}
.tp-leftarrow.preview3 .tp-arr-iwrapper {
	-webkit-transform: scale(0, 1);
	transform: scale(0, 1);
	-webkit-transform-origin: 0 50%;
	transform-origin: 0 50%;
	left: 0;
	direction: rtl;
	padding-left: 70px
}
.tparrows.preview3 .tp-arr-imgholder {
	background-size: cover;
	background-position: center center;
	display: table-cell;
	min-width: 90px;
	height: 90px;
	position: relative;
	top: 0
}
.tp-bullets.preview3, .tp-bullets.preview4 {
	height: 17px
}
.tp-rightarrow.preview3 .tp-arr-iwrapper {
	right: 0;
	padding-right: 70px
}
.tparrows.preview3 .tp-arr-titleholder {
	display: table-cell;
	padding: 30px;
	font-size: 16px;
	color: #fff;
	white-space: nowrap;
	position: relative;
	clear: right;
	vertical-align: middle
}
.tparrows.preview3:hover .tp-arr-iwrapper {
	-webkit-transform: scale(1, 1);
	transform: scale(1, 1)
}
.tp-bullets.preview3 .bullet {
	position: relative!important;
	background: rgba(0,0,0,.5)!important;
	border-radius: 10px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	width: 6px!important;
	height: 6px!important;
	border: 5px solid transparent!important;
	display: inline-block;
	-webkit-transition: background-color .2s, border-color .2s;
	-moz-transition: background-color .2s, border-color .2s;
	-o-transition: background-color .2s, border-color .2s;
	-ms-transition: background-color .2s, border-color .2s;
	transition: background-color .2s, border-color .2s;
	float: none!important;
	-moz-box-sizing: content-box;
	-webkit-box-sizing: content-box
}
.tp-bullets.preview3 .bullet.last {
	margin-right: 0
}
.tp-bullets.preview3 .bullet.selected, .tp-bullets.preview3 .bullet:hover {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	background: rgba(255,255,255,1)!important;
	width: 6px!important;
	height: 6px!important;
	border: 5px solid rgba(0,0,0,1)!important
}
@media only screen and (min-width:768px) and (max-width:979px) {
.tparrows.preview3, .tparrows.preview3:after {
	width: 50px;
	height: 50px;
	line-height: 50px;
	font-size: 20px
}
.tparrows.preview3 .tp-arr-iwrapper {
	min-height: 70px
}
.tparrows.preview3 .tp-arr-imgholder {
	min-width: 70px;
	height: 70px
}
.tp-rightarrow.preview3 .tp-arr-iwrapper {
	padding-right: 50px
}
.tp-leftarrow.preview3 .tp-arr-iwrapper {
	padding-left: 50px
}
.tparrows.preview3 .tp-arr-titleholder {
	padding: 10px;
	font-size: 16px
}
}
@media only screen and (max-width:767px) {
.tparrows.preview3, .tparrows.preview3:after {
	width: 50px;
	height: 50px;
	line-height: 50px;
	font-size: 20px
}
.tparrows.preview3 .tp-arr-iwrapper {
	min-height: 70px
}
}
.tparrows.preview4 {
	width: 30px;
	height: 110px;
	background: 0 0
}
.tparrows.preview4:after {
	position: absolute;
	line-height: 110px;
	text-align: center;
	font-family: revicons;
	color: #fff;
	font-size: 20px;
	top: 0;
	left: 0;
	z-index: 0;
	width: 30px;
	height: 110px;
	background: #000;
	background: rgba(0,0,0,.25);
	-webkit-transition: all .2s ease-in-out;
	-moz-transition: all .2s ease-in-out;
	-o-transition: all .2s ease-in-out;
	transition: all .2s ease-in-out;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	-moz-opacity: 1;
	-khtml-opacity: 1;
	opacity: 1
}
.tparrows.preview4 .tp-arr-imgholder, .tparrows.preview4 .tp-arr-imgholder2 {
	background-size: cover;
	background-position: center center;
	width: 180px;
	height: 110px;
	top: 0;
	-webkit-backface-visibility: hidden;
	display: block
}
.tp-rightarrow.preview4:after {
	content: '\e825'
}
.tparrows.preview4 .tp-arr-allwrapper {
	visibility: hidden;
	width: 180px;
	position: absolute;
	z-index: 1;
	min-height: 120px;
	top: 0;
	left: -150px;
	overflow: hidden;
	-webkit-perspective: 1000px;
	-webkit-transform-style: flat
}
.tp-leftarrow.preview4 .tp-arr-allwrapper {
	left: 0
}
.tparrows.preview4 .tp-arr-iwrapper {
	position: relative
}
.tparrows.preview4 .tp-arr-imgholder {
	position: relative;
	backface-visibility: hidden
}
.tparrows.preview4 .tp-arr-imgholder2 {
	position: absolute;
	left: 180px;
	backface-visibility: hidden
}
.tp-leftarrow.preview4 .tp-arr-imgholder2 {
	left: -180px
}
.tparrows.preview4 .tp-arr-titleholder {
	display: block;
	padding: 0 10px;
	text-align: left;
	position: relative;
	background: #000;
	color: #FFF;
	text-transform: uppercase;
	white-space: nowrap;
	letter-spacing: 1px;
	font-weight: 700;
	font-size: 11px;
	line-height: 2.75;
	-webkit-transition: all .3s;
	transition: all .3s;
	-webkit-transform: rotateX(-90deg);
	transform: rotateX(-90deg);
	-webkit-transform-origin: 50% 0;
	transform-origin: 50% 0;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=0)";
	filter: alpha(opacity=0);
	-moz-opacity: 0;
	-khtml-opacity: 0;
	opacity: 0
}
.tparrows.preview4:after {
	transform-origin: 100% 100%;
	-webkit-transform-origin: 100% 100%
}
.tp-leftarrow.preview4:after {
	content: '\e824';
	transform-origin: 0 0;
	-webkit-transform-origin: 0 0
}
@media only screen and (min-width:768px) {
.tparrows.preview4:hover:after {
	-webkit-transform: rotateY(-90deg);
	transform: rotateY(-90deg)
}
.tp-leftarrow.preview4:hover:after {
	-webkit-transform: rotateY(90deg);
	transform: rotateY(90deg)
}
.tparrows.preview4:hover .tp-arr-titleholder {
	-webkit-transition-delay: .4s;
	transition-delay: .4s;
	-webkit-transform: rotateX(0);
	transform: rotateX(0);
	-ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=100)";
	filter: alpha(opacity=100);
	-moz-opacity: 1;
	-khtml-opacity: 1;
	opacity: 1
}
}
.tp-bullets.preview4 .bullet {
	position: relative!important;
	background: rgba(0,0,0,.5)!important;
	border-radius: 10px;
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	width: 6px!important;
	height: 6px!important;
	border: 5px solid transparent!important;
	display: inline-block;
	-webkit-transition: background-color .2s, border-color .2s;
	-moz-transition: background-color .2s, border-color .2s;
	-o-transition: background-color .2s, border-color .2s;
	-ms-transition: background-color .2s, border-color .2s;
	transition: background-color .2s, border-color .2s;
	float: none!important;
	-moz-box-sizing: content-box;
	-webkit-box-sizing: content-box
}
.tp-bullets.preview4 .bullet.last {
	margin-right: 0
}
.tp-bullets.preview4 .bullet.selected, .tp-bullets.preview4 .bullet:hover {
	-webkit-box-shadow: none;
	-moz-box-shadow: none;
	box-shadow: none;
	background: rgba(255,255,255,1)!important;
	width: 6px!important;
	height: 6px!important;
	border: 5px solid rgba(0,0,0,1)!important
}
@media only screen and (max-width:767px) {
.tparrows.preview4 {
	width: 20px;
	height: 80px
}
.tparrows.preview4:after {
	width: 20px;
	height: 80px;
	line-height: 80px;
	font-size: 14px
}
.tparrows.preview1 .tp-arr-allwrapper, .tparrows.preview2 .tp-arr-allwrapper, .tparrows.preview3 .tp-arr-allwrapper, .tparrows.preview4 .tp-arr-allwrapper {
	display: none!important
}
}
.tp-loader.spinner0, .tp-loader.spinner1 {
	width: 40px;
	height: 40px;
	box-shadow: 0 0 20px 0 rgba(0,0,0,.15);
	margin-top: -20px;
	margin-left: -20px;
	border-radius: 3px
}
.tp-loader {
	top: 50%;
	left: 50%;
	z-index: 1000;
	position: absolute
}
.tp-loader.spinner0 {
	background: url(images/revslider/loader.gif) center center no-repeat #fff;
	-webkit-box-shadow: 0 0 20px 0 rgba(0,0,0,.15);
	-webkit-animation: tp-rotateplane 1.2s infinite ease-in-out;
	animation: tp-rotateplane 1.2s infinite ease-in-out;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px
}
.tp-loader.spinner1 {
	background-color: #fff;
	-webkit-box-shadow: 0 0 20px 0 rgba(0,0,0,.15);
	-webkit-animation: tp-rotateplane 1.2s infinite ease-in-out;
	animation: tp-rotateplane 1.2s infinite ease-in-out;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px
}
.tp-loader.spinner5 {
	background: url(images/revslider/loader.gif) 10px 10px no-repeat #fff;
	margin: -22px;
	width: 44px;
	height: 44px;
	border-radius: 3px;
	-moz-border-radius: 3px;
	-webkit-border-radius: 3px
}
@-webkit-keyframes tp-rotateplane {
0% {
-webkit-transform:perspective(120px)
}
50% {
-webkit-transform:perspective(120px) rotateY(180deg)
}
100% {
-webkit-transform:perspective(120px) rotateY(180deg) rotateX(180deg)
}
}
@keyframes tp-rotateplane {
0% {
transform:perspective(120px) rotateX(0) rotateY(0);
-webkit-transform:perspective(120px) rotateX(0) rotateY(0)
}
50% {
transform:perspective(120px) rotateX(-180.1deg) rotateY(0);
-webkit-transform:perspective(120px) rotateX(-180.1deg) rotateY(0)
}
100% {
transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg);
-webkit-transform:perspective(120px) rotateX(-180deg) rotateY(-179.9deg)
}
}
.tp-loader.spinner2 {
	width: 40px;
	height: 40px;
	margin-top: -20px;
	margin-left: -20px;
	background-color: white;
	box-shadow: 0 0 20px 0 rgba(0,0,0,.15);
	-webkit-box-shadow: 0 0 20px 0 rgba(0,0,0,.15);
	border-radius: 100%;
	-webkit-animation: tp-scaleout 1s infinite ease-in-out;
	animation: tp-scaleout 1s infinite ease-in-out
}
@-webkit-keyframes tp-scaleout {
0% {
-webkit-transform:scale(0)
}
100% {
-webkit-transform:scale(1);
opacity:0
}
}
@keyframes tp-scaleout {
0% {
transform:scale(0);
-webkit-transform:scale(0)
}
100% {
transform:scale(1);
-webkit-transform:scale(1);
opacity:0
}
}
.tp-loader.spinner3 {
	margin: -9px 0 0 -35px;
	width: 70px;
	text-align: center
}
.tp-loader.spinner3 .bounce1, .tp-loader.spinner3 .bounce2, .tp-loader.spinner3 .bounce3 {
	width: 18px;
	height: 18px;
	background-color: #fff;
	box-shadow: 0 0 20px 0 rgba(0,0,0,.15);
	-webkit-box-shadow: 0 0 20px 0 rgba(0,0,0,.15);
	border-radius: 100%;
	display: inline-block;
	-webkit-animation: tp-bouncedelay 1.4s infinite ease-in-out;
	animation: tp-bouncedelay 1.4s infinite ease-in-out;
	-webkit-animation-fill-mode: both;
	animation-fill-mode: both
}
.tp-loader.spinner3 .bounce1 {
	-webkit-animation-delay: -.32s;
	animation-delay: -.32s
}
.tp-loader.spinner3 .bounce2 {
	-webkit-animation-delay: -.16s;
	animation-delay: -.16s
}
@-webkit-keyframes tp-bouncedelay {
0%, 100%, 80% {
-webkit-transform:scale(0)
}
40% {
-webkit-transform:scale(1)
}
}
@keyframes tp-bouncedelay {
0%, 100%, 80% {
transform:scale(0);
-webkit-transform:scale(0)
}
40% {
transform:scale(1);
-webkit-transform:scale(1)
}
}
.tp-loader.spinner4 {
	margin: -20px 0 0 -20px;
	width: 40px;
	height: 40px;
	text-align: center;
	-webkit-animation: tp-rotate 2s infinite linear;
	animation: tp-rotate 2s infinite linear
}
.tp-loader.spinner4 .dot1, .tp-loader.spinner4 .dot2 {
	width: 60%;
	height: 60%;
	display: inline-block;
	position: absolute;
	top: 0;
	background-color: #fff;
	border-radius: 100%;
	-webkit-animation: tp-bounce 2s infinite ease-in-out;
	animation: tp-bounce 2s infinite ease-in-out;
	box-shadow: 0 0 20px 0 rgba(0,0,0,.15);
	-webkit-box-shadow: 0 0 20px 0 rgba(0,0,0,.15)
}
.tp-loader.spinner4 .dot2 {
	top: auto;
	bottom: 0;
	-webkit-animation-delay: -1s;
	animation-delay: -1s
}
@-webkit-keyframes tp-rotate {
100% {
-webkit-transform:rotate(360deg)
}
}
@keyframes tp-rotate {
100% {
transform:rotate(360deg);
-webkit-transform:rotate(360deg)
}
}
@-webkit-keyframes tp-bounce {
0%, 100% {
-webkit-transform:scale(0)
}
50% {
-webkit-transform:scale(1)
}
}
@keyframes tp-bounce {
0%, 100% {
transform:scale(0);
-webkit-transform:scale(0)
}
50% {
transform:scale(1);
-webkit-transform:scale(1)
}
}
.tp-transparentimg {
	content: "url(images/revslider/transparent.png)"
}
.tp-3d {
	-webkit-transform-style: preserve-3d;
	-webkit-transform-origin: 50% 50%
}
.tp-caption img {
	background: 0 0;
	-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF,endColorstr=#00FFFFFF)";
filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#00FFFFFF, endColorstr=#00FFFFFF);
	zoom: 1
}
@font-face {
	font-family: revicons;
	src: url(fonts/revicons90c6.eot?5510888);
	src: url(fonts/revicons90c6.eot?5510888#iefix) format('embedded-opentype'), url(fonts/revicons90c6.woff?5510888) format('woff'), url(fonts/revicons90c6.ttf?5510888) format('truetype'), url(fonts/revicons90c6.svg?5510888#revicons) format('svg');
	font-weight: 400;
	font-style: normal
}
[class*=" revicon-"]:before, [class^=revicon-]:before {
	font-family: revicons;
	font-style: normal;
	font-weight: 400;
	speak: none;
	display: inline-block;
	text-decoration: inherit;
	width: 1em;
	margin-right: .2em;
	text-align: center;
	font-variant: normal;
	text-transform: none;
	line-height: 1em;
	margin-left: .2em
}
.revicon-search-1:before {
	content: '\e802'
}
.revicon-pencil-1:before {
	content: '\e831'
}
.revicon-picture-1:before {
	content: '\e803'
}
.revicon-cancel:before {
	content: '\e80a'
}
.revicon-info-circled:before {
	content: '\e80f'
}
.revicon-trash:before {
	content: '\e801'
}
.revicon-left-dir:before {
	content: '\e817'
}
.revicon-right-dir:before {
	content: '\e818'
}
.revicon-down-open:before {
	content: '\e83b'
}
.revicon-left-open:before {
	content: '\e819'
}
.revicon-right-open:before {
	content: '\e81a'
}
.revicon-angle-left:before {
	content: '\e820'
}
.revicon-angle-right:before {
	content: '\e81d'
}
.revicon-left-big:before {
	content: '\e81f'
}
.revicon-right-big:before {
	content: '\e81e'
}
.revicon-magic:before {
	content: '\e807'
}
.revicon-picture:before {
	content: '\e800'
}
.revicon-export:before {
	content: '\e80b'
}
.revicon-cog:before {
	content: '\e832'
}
.revicon-login:before {
	content: '\e833'
}
.revicon-logout:before {
	content: '\e834'
}
.revicon-video:before {
	content: '\e805'
}
.revicon-arrow-combo:before {
	content: '\e827'
}
.revicon-left-open-1:before {
	content: '\e82a'
}
.revicon-right-open-1:before {
	content: '\e82b'
}
.revicon-left-open-mini:before {
	content: '\e822'
}
.revicon-right-open-mini:before {
	content: '\e823'
}
.revicon-left-open-big:before {
	content: '\e824'
}
.revicon-right-open-big:before {
	content: '\e825'
}
.revicon-left:before {
	content: '\e836'
}
.revicon-right:before {
	content: '\e826'
}
.revicon-ccw:before {
	content: '\e808'
}
.revicon-arrows-ccw:before {
	content: '\e806'
}
.revicon-palette:before {
	content: '\e829'
}
.revicon-list-add:before {
	content: '\e80c'
}
.revicon-doc:before {
	content: '\e809'
}
.revicon-left-open-outline:before {
	content: '\e82e'
}
.revicon-left-open-2:before {
	content: '\e82c'
}
.revicon-right-open-outline:before {
	content: '\e82f'
}
.revicon-right-open-2:before {
	content: '\e82d'
}
.revicon-equalizer:before {
	content: '\e83a'
}
.revicon-layers-alt:before {
	content: '\e804'
}
.revicon-popup:before {
	content: '\e828'
}
