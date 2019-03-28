<!doctype html>
<html lang="en" class="h-100 scrollbar" id="style-10">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
          integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <title>Hello, world!</title>

    <style>
        body {
            background-color: #D6BDF7;
        }

        .window .bullet {
            height: 11px;
            width: 11px;
            display: inline-block;
            background: #ccc;
            border-radius: 100%;
            vertical-align: middle;
            margin-right: 5px;
        }

        .window .bullet-red {
            background: #DF7065;
        }

        .window .bullet-yellow {
            background: #E6BB46;
        }

        .window .bullet-green {
            background: #5BCC8B;
        }

        @-webkit-keyframes zoom {
            0% {
                opacity: 0;
                -webkit-transform: scale(1.15);
            }
            100% {
                opacity: 1;
                -webkit-transform: scale(1);
            }
        }

        @-webkit-keyframes drop {
            0% {
                opacity: 0;
                -webkit-transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                -webkit-transform: translateY(0px);
            }
        }

        @keyframes zoom {
            0% {
                opacity: 0;
                transform: scale(1.15);
            }
            100% {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes drop {
            0% {
                opacity: 0;
                transform: translateY(-20px);
            }
            100% {
                opacity: 1;
                transform: translateY(0px);
            }
        }

        @media screen and (max-width: 600px) {
            .home .window .title {
                width: 60%;
            }
        }

        /*
        Animate.css - http://daneden.me/animate
        Licensed under the MIT license - http://opensource.org/licenses/MIT

        Copyright (c) 2014 Daniel Eden
        */
        .animated {
            -webkit-animation-duration: 1s;
            animation-duration: 1s;
            -webkit-animation-fill-mode: both;
            animation-fill-mode: both
        }

        .animated.infinite {
            -webkit-animation-iteration-count: infinite;
            animation-iteration-count: infinite
        }

        .animated.hinge {
            -webkit-animation-duration: 2s;
            animation-duration: 2s
        }

        @-webkit-keyframes bounce {
            0%, 100%, 20%, 53%, 80% {
                -webkit-transition-timing-function: cubic-bezier(0.215, .61, .355, 1);
                transition-timing-function: cubic-bezier(0.215, .61, .355, 1);
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            40%, 43% {
                -webkit-transition-timing-function: cubic-bezier(0.755, .050, .855, .060);
                transition-timing-function: cubic-bezier(0.755, .050, .855, .060);
                -webkit-transform: translate3d(0, -20px, 0);
                transform: translate3d(0, -20px, 0)
            }
            70% {
                -webkit-transition-timing-function: cubic-bezier(0.755, .050, .855, .060);
                transition-timing-function: cubic-bezier(0.755, .050, .855, .060);
                -webkit-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0)
            }
            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0)
            }
        }

        @keyframes bounce {
            0%, 100%, 20%, 53%, 80% {
                -webkit-transition-timing-function: cubic-bezier(0.215, .61, .355, 1);
                transition-timing-function: cubic-bezier(0.215, .61, .355, 1);
                -webkit-transform: translate3d(0, 0, 0);
                -ms-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0)
            }
            40%, 43% {
                -webkit-transition-timing-function: cubic-bezier(0.755, .050, .855, .060);
                transition-timing-function: cubic-bezier(0.755, .050, .855, .060);
                -webkit-transform: translate3d(0, -20px, 0);
                -ms-transform: translate3d(0, -20px, 0);
                transform: translate3d(0, -20px, 0)
            }
            70% {
                -webkit-transition-timing-function: cubic-bezier(0.755, .050, .855, .060);
                transition-timing-function: cubic-bezier(0.755, .050, .855, .060);
                -webkit-transform: translate3d(0, -10px, 0);
                -ms-transform: translate3d(0, -10px, 0);
                transform: translate3d(0, -10px, 0)
            }
            90% {
                -webkit-transform: translate3d(0, -4px, 0);
                -ms-transform: translate3d(0, -4px, 0);
                transform: translate3d(0, -4px, 0)
            }
        }

        .bounce {
            -webkit-animation-name: bounce;
            animation-name: bounce;
            -webkit-transform-origin: center bottom;
            -ms-transform-origin: center bottom;
            transform-origin: center bottom
        }

        span {
            border: 0;
            font-family: inherit;
            font-size: 100%;
            font-style: inherit;
            font-weight: inherit;
            margin: 0;
            outline: 0;
            padding: 0;
            vertical-align: baseline;
        }

        .window {
            border: 1px solid rgb(195, 195, 195);
            width: 100%;
            border-radius: 4px;
            -webkit-box-shadow: 0px 2px 3px 0px rgba(50, 50, 50, 0.11);
            -moz-box-shadow: 0px 2px 3px 0px rgba(50, 50, 50, 0.11);
            box-shadow: 0px 2px 3px 0px rgba(50, 50, 50, 0.11);
            text-align: left;
            vertical-align: top;
            animation: zoom 500ms;
            -webkit-animation: zoom 500ms;
            margin-top: 8vh;
        }

        .window {
            height: 100%;
            /*display: inline-block;*/
        }

        .window .header {
            /*padding: 0 9px;*/
            line-height: 30px;
            vertical-align: top;
            padding: 2px 9px 0;
        }

        .window .header .title {
            font: 11px "Myriad Pro", "Arial";
        }

        .editor .title {
            text-align: center;
            display: inline-block;
            width: 280px;
            color: #766F79;
            vertical-align: middle;
        }

        .browser .header {
            /*background: #E8E8E8;*/
            border-radius: 4px 4px 0 0;
            padding-bottom: 3px;
        }

        .browser .header .title {
            /*background: #fff;*/
            display: inline-block;
            width: 320px;
            border-radius: 4px;
            padding: 6px 14px 4px;
            margin-left: 10px;
            vertical-align: middle;
        }

        .browser .header .title .scheme {
            color: #7ED321;
        }

        .browser .body {
            /*padding: 10px;*/
            font: 11px "Lucida Grande", "Open Sans";
        }

        .browser .tweets {
            margin: 0;
            height: 150px;
            overflow-y: auto;
        }

        .browser .tweets li {
            height: 27px;
            line-height: 27px;
            width: 350px;
            vertical-align: middle;
            color: #4B434D;
            list-style-type: none;
            margin-bottom: 14px;
        }

        .browser .tweets img {
            width: 27px;
            height: 27px;
            border-radius: 100%;
            float: left;
            margin-right: 10px;
        }

        .browser .tweets .tweet {
            max-width: 280px;
            overflow: hidden;
            display: inline-block;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .browser .tweets .time {
            color: #9B9B9B;
            float: right;
        }

        .browser .tweets .new {
            animation: drop 500ms;
            -webkit-animation: drop 500ms;
        }

        .editor .body {
            padding: 10px;
        }

        .editor .code {
            font: 15px Monaco, Courier New;
            color: #FFFFFF;
        }

        .editor .code .code {
            color: #FFFFFF;
        }

        .editor .code li {
            padding: 3px 0;
            margin-right: 14px;
        }

        .editor .code .fn {
            color: #4A90E2;
        }

        .editor .code .v {
            color: #7ED321;
        }

        .editor .code .io {
            color: #000;
        }

        .head {
            color: #7CB0DE;
        }

        .name {

            color: #DC3545;
        }

        .purple {
            color: #AB97D2;
        }

        .skills {
            color: #DEDFE1;
        }

        .scrollbar {
            /*margin-left: 30px;*/
            float: left;
            height: 480px;
            width: 100%;
            /*background: #F5F5F5;*/
            overflow-y: scroll;
            margin-bottom: 25px;
        }

        #style-10::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
            border-radius: 10px;
        }

        #style-10::-webkit-scrollbar {
            width: 10px;
            background-color: #F5F5F5;
        }

        #style-10::-webkit-scrollbar-thumb {
            background-color: #AAA;
            border-radius: 10px;
            background-image: -webkit-linear-gradient(90deg,
            rgba(0, 0, 0, .2) 25%,
            transparent 25%,
            transparent 50%,
            rgba(0, 0, 0, .2) 50%,
            rgba(0, 0, 0, .2) 75%,
            transparent 75%,
            transparent)
        }


    </style>

</head>
<body>
<div class="container">
    <div class="row justify-content-center align-items-center">
        <div class="col-md-10 col-12">
            <div class="card window editor fading bg-dark">

                <div class="header">
                    <span class="bullet bullet-red"></span><span class="bullet bullet-yellow"></span><span
                            class="bullet bullet-green">
                    </span><span class="title text-uppercase">curriculum vitae</span>
                </div>

                <div class="card-body">

                    <!--intro-->
                    <div class="row code mt-1">
                        <div class="col">

                            <h5 class="name font-weight-bold">Arjwan_Alfatla</h5>
                            <h6 class="purple">Web_programmer</h6>
                            <span>I seek to make an impact with my work within any field.
                                but programming is the field I chose to follow even though I'm a
                                student in the French department, that gives me a great amount of time
                                to proceed with my passion in programming which allows me to work creatively
                                and transform my thoughts into code beside it heavily involves problem-solving skills which I
                                enjoy doing because of my persistent personality and from what I believe programming is based on
                                learning by doing and that is the thing I'm best at.</span>
                            <br>
                            <!--contact-->
                            <div class="row mt-2">
                                <div class="col-auto mr-2">
                                    <span class="purple">Email:</span> <span>jwanaalfatla1999@gamil.com</span>
                                    <br>
                                    <span class="purple">Phone_number:</span> <span>7816151297</span>
                                </div>
                                <div class="col">
                                    <span class="purple">Linkedin_account:</span><a class="link"
                                                                                    href="https://www.linkedin.com/in/jwana-alfatla/">linkedin.com/jwana-alfatla/</a><br>
                                    <span class="purple">Github_account:</span> <a class="link"
                                                                                   href="https://github.com/jwana99">github.com/jwana99/</a>
                                    <br>
                                    <small class="text-muted">PS: The links are clickable.</small>

                                </div>
                            </div>

                            <!--codelab-->
                            <div class="row mt-3">
                                <div class="col">
                                    <h6 class="head">Programming_experience:</h6>
                                    <p>I am using Laravel the php framework for web development and Vue.js the
                                        javascript framework for building user interface.
                                        I've entered this field a year ago, started with web design and now I am a
                                        full-stack programmer.
                                    </p>
                                </div>
                            </div>

                            <!--activities skills languages-->
                            <div class="row">
                                <div class="col-md-8 mt-2">
                                    <h6 class="head">Personal_activities:</h6>
                                    <ol>
                                        <li>Founder of limitless boot-camp project for learning English by
                                            communicating.
                                        </li>
                                        <li>President of cultural student committee at college.</li>
                                        <li>Active member in Toastmasters club</li>
                                        <li>Participated in an interpreting workshop.</li>
                                        <li>Trainer in Hult prize.</li>
                                        <li>Facilitator in Youth Leadership Program.</li>
                                        <li>Joined leadership, communication and time management workshops.</li>
                                    </ol>
                                </div>
                                <div class="col-md-4">
                                    <h6 class="head">Skills:</h6>
                                    <h6>
                                        <span class="badge badge-danger mt-2 skills">Adaptability</span>
                                        <span class="badge badge-danger mt-2 skills">Teamwork</span>
                                        <span class="badge badge-danger mt-2 skills">Continuous_learning</span>
                                        <span class="badge badge-danger mt-2 skills">Managing</span>
                                    </h6>

                                    <h6 class="head mt-3">Languages_proficiency:</h6>
                                    <div class="row mt-2">
                                        <div class="col">
                                            <span>English</span>
                                            <span class="badge badge-danger "> </span>
                                            <span class="badge badge-danger "> </span>
                                            <span class="badge badge-danger"> </span>
                                            <span class="badge badge-danger"> </span>
                                            <span class="badge badge-light"> </span>
                                            <br>
                                            <span>French</span>
                                            <span class="badge badge-danger "> </span>
                                            <span class="badge badge-danger "> </span>
                                            <span class="badge badge-danger "> </span>
                                            <span class="badge badge-light "> </span>
                                            <span class="badge badge-light "> </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!--<li class="code">-->
                    <!--</li>-->
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
</body>
</html>