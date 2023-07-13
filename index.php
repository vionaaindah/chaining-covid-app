<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="style.css" />

    <style>
        body,
        html {
            height: 100%;
            margin: 0;
        }

        .bg {
            /* The image used */
            background-image: url("https://i.ytimg.com/vi/9mJMq1pSaPo/maxresdefault.jpg");

            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        #menu {
            width: 70%;
            margin-left: 15%;
            margin-top: 2.5%;
        }

        .btn {
            margin-left: 16%;
            border: 2px solid #88d5c5;
            color: #88d5c5;
        }

        .option:hover {
            box-shadow: 0 0 40px 40px #88d5c5 inset;
        }

        @media only screen and (max-width: 1300px) {
            .btn {
                margin-left: 13%;
            }

            #menu {
                margin-top: 4%;
            }
        }

        @media only screen and (max-width: 1285px) {
            .btn {
                margin-left: 10%;
            }

        }

        @media only screen and (max-width: 1120px) {
            .btn {
                margin-left: 7%;
            }

            #menu {
                margin-top: 5%;
            }
        }

        @media only screen and (max-width: 985px) {
            .btn {
                margin-left: 5%;
            }

        }

        @media only screen and (max-width: 915px) {
            .btn {
                margin-left: 2%;
            }

            #menu {
                margin-top: 7%;
            }
        }

        @media only screen and (max-width: 820px) {
            #menu {
                width: 100%;
                margin-left: 0;
                margin-top: 5%;
            }

            .btn {
                margin-left: 11%;
            }
        }

        @media only screen and (max-width: 710px) {
            #menu {
                width: 100%;
                margin-left: 0;
            }

            .btn {
                margin-left: 6%;
            }
        }

        @media only screen and (max-width: 640px) {
            #menu {
                width: 100%;
                margin-left: 0;
            }

            .btn {
                margin-left: 2%;
            }
        }

        @media only screen and (max-width: 565px) {
            #menu {
                width: 100%;
                margin-left: 0;
            }

            .btn {
                margin-left: 0;
            }
        }

        .bg h1 {
            color: #fff;
            padding-top: 2%;
            font-size: 3em;
            margin-top: 0;
        }
    </style>
</head>

<body>
    <div class="bg">
        <h1>COVID-19 Detection System</h1>
        <div id="menu">
            <a href="forward_chaining.php" class="btn option">Using Forward Chaining</a>
            <a href="backward_chaining.php" class="btn option">Using Backward Chaining</a>
        </div>
    </div>


</body>

</html>