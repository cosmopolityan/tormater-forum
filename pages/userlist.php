/* Main styles. */
html {background-color:#007b7b; background-size: 100% auto; background-repeat: no-repeat; background:radial-gradient(circle, #00bebe, #00a0a0, #007b7b)}
body {text-align: center;}
a {color:rgb(0, 17, 255); text-decoration:none}
a:hover {text-decoration:underline}
#wrapper {width: 900px; margin: 0 auto; border: #000 outset; box-sizing: border-box}
#content {background-color: #fff; border: 1px solid #000; float: left; font-family: Arial; padding: 20px 30px; text-align: left; width: 100%; box-sizing: border-box;}
#menu {float: left; border: 1px solid #000; border-bottom: none; clear: both; height:37px; padding: 0 30px; padding-top: 10px; padding-bottom: 1px; background: linear-gradient(to right, #010074, #0292fc); text-align: left; font-size: 85%; box-sizing: border-box; width:100%}
#userbar {background: linear-gradient(to left, #ffffffa0, #ffffff00); margin: -3px; padding: 3px; padding-left:30px; float:right}
#footer {font-size: 75%; clear: both; border-bottom: 1px solid black; border-left: 1px solid black; border-right: 1px solid black; background: white; padding: 5px;}
button {background: linear-gradient(#fff, lightgray); border: 1px solid gray; border-radius: 3px}
button:hover {filter: brightness(110%);}
button:active {filter: brightness(80%);}
label {display:inline-block; width:200px;}
input {background: linear-gradient(#fff,rgb(212, 212, 212)); border: 1px solid gray; border-radius: 3px}
input:hover {filter: brightness(105%);}
input:active {filter: brightness(115%);}
select {background: linear-gradient(#fff,rgb(212, 212, 212)); border: 1px solid gray; border-radius: 3px;}
select:hover {filter: brightness(105%);}
.message {border-left: 4px solid rgb(180, 75, 5); border-radius: 3px 2px 2px 3px; background: linear-gradient(to right, rgb(255, 115, 0), rgba(255, 102, 0, 0.279)); padding: 5px; color:white}
.postreply {font-size:14px}


/* Pagination styles. */
.paginationleft {background: lightgray; float: left; border-top: 1px solid #797979; border-bottom: 1px solid #797979; padding: 3px; padding-left:0px}
.paginationright {background: lightgray; text-align: right; border-top: 1px solid #797979; border-bottom: 1px solid #797979; padding: 3px; padding-right:0px}
.paginationleft a {background: linear-gradient(lightblue, #00728B); border: 1px solid #032472; color: black; font-family: Arial; padding: 3px 6px; text-decoration: none;}
.paginationright a {background: linear-gradient(lightblue, #00728B); border: 1px solid #032472; color: black; font-family: Arial; padding: 3px 6px; text-decoration: none;}
.paginationleft font {background: linear-gradient(lightgray, gray); border: 1px solid #032472; color: rgb(48, 48, 48); font-family: Arial; padding: 3px 6px; text-decoration: none; cursor:default}
.paginationright font {background: linear-gradient(lightgray, gray); border: 1px solid #032472; color: rgb(48, 48, 48); font-family: Arial; padding: 3px 6px; text-decoration: none; cursor:default}

/* Table styles. */
table {border-collapse: collapse; border: 1px solid navy; box-sizing: border-box; width:100%}
table a {color: #000;}
table a:hover {color:#373737; text-decoration: none;}
th {background: navy; color: #FFF; padding-left: 4px}
tr:nth-child(even) {background-color: #f2f2f2;}
tr:hover {background-color: #e3efff}
td {padding: 5px; border: 1px solid black}

/* Font styles. */
h1 {font-family: Arial; color: #fff; text-shadow:#000 0px 0px 10px}
h3 {margin: 0; padding: 0;}
h2 {background:linear-gradient(to right, #92d2ff, #92d2ff00); border-left:#4bb4ff 2px solid; padding:15px;}

/* Menu styles. */
.item {background: linear-gradient(#00728B, blue); border: 1px solid #032472; border-radius: 4px; color: #FFF; font-family: Arial; padding: 3px 6px; text-decoration: none;}
.item:hover {filter: brightness(120%);}
.item:active {filter: brightness(70%);}
.category {border: 1px outset #000000; padding: 12px;}
.leftpart {width: 60%;}
.rightpart {width: 40%;}
.small {font-size: 75%; color: #373737;}
.topic-post {height: 100px; overflow: auto;}
.post-content {padding: 30px;}
textarea {resize: none; height: 200px; width:100%; box-sizing: border-box; margin-bottom:4px}

/* Thread styles. */
.thread {max-width:900px; border:1px solid rgba(0, 0, 0, 0.493); padding: 8px}
.threadcontent {border-bottom:1px solid rgba(0, 0, 0, 0.493); border-right:1px solid rgba(0, 0, 0, 0.493); border-left:1px solid rgba(0, 0, 0, 0.493); padding: 8px; max-width:1000px; word-wrap: break-word;}
.postc {display: inline; float:right; margin-left: 2px;}
.hiddenpost {border-radius: 6px; max-width:1000px; border:1px solid black; padding: 8px; background: gray;}
.threadbutton {background: linear-gradient(#00728B, blue); border: 1px solid black; border-radius: 4px; color: white; font-family: Arial; display: inline; padding: 4px; text-decoration: none; float: right; margin-left: 2px;}
.locked {background: gray; border: 1px solid black; border-radius: 4px; padding: 2px;}
.sticky {background: gold; border: 1px solid black; border-radius: 4px; padding: 2px;}

/* Post colors. */
[postcolor="1"] {background: lightblue;}
[postcolor="2"] {background: lightgreen;}
[postcolor="3"] {background: yellow;}
[postcolor="4"] {background: indianred;}
[postcolor="5"] {background: hotpink;}
[postcolor="6"] {background: mediumpurple;}
[postcolor="7"] {background: coral;}
[postcolor="8"] {background: cornflowerblue;}
[postcolor="9"] {background: lavender;}
[postcolor="10"] {background: silver;}
[postcolor="11"] {background: wheat;}
[postcolor="12"] {background: sandybrown;}
[postcolor="13"] {background: mediumseagreen;}
[postcolor="14"] {background: gold;}
[postcolor="15"] {background: plum;}
[postcolor="16"] {background: aliceblue;}

/* Fieldsets */
fieldset {border: 1px solid #999; padding:15px}
legend {font-size:18px; font-weight: bold}

/* Userlist Styles. */
.userlist {border:1px solid rgba(0, 0, 0, 0.493); padding:5px;}

/* User Styles. */
.usertop {border:1px solid rgba(0, 0, 0, 0.493); padding:8px;}
.userbottom {border-bottom:1px solid rgba(0, 0, 0, 0.493); border-left:1px solid rgba(0, 0, 0, 0.493); border-right:1px solid rgba(0, 0, 0, 0.493); padding:8px;}
.userstat {display:block; padding:3px 8px}
.userrole {padding: 0px 8px}
.changerole {display: inline-block;}
.userrole a {color:#000}
.userstat a {color:#000}

/* Role Colors */
#Administrator {color:#6d0000; text-decoration:none}
#Moderator {color:#07006d; text-decoration:none}
#Member {color:#000000; text-decoration:none}
#Suspended {color:#666666; text-decoration:none}
