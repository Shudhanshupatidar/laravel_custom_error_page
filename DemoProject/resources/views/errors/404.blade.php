<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Page not found</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <style>
        body {
            margin-top: 100px;
            background:#010101;
        }

        .error .clip .shadow {
            height: 180px;
            /*Contrall*/
        }

        .error .clip:nth-of-type(2) .shadow {
            width: 130px;
            /*Contrall play with javascript*/
        }

        .error .clip:nth-of-type(1) .shadow,
        .error .clip:nth-of-type(3) .shadow {
            width: 250px;
            /*Contrall*/
        }

        .error .digit {
            width: 150px;
            /*Contrall*/
            height: 150px;
            /*Contrall*/
            line-height: 150px;
            /*Contrall*/
            font-size: 120px;
            font-weight: bold;
        }



        .error span.triangle

        /*Contrall*/
            {
            top: 70%;
            right: 0%;
            border-left: 20px solid #535353;
            border-top: 15px solid transparent;
            border-bottom: 15px solid transparent;
        }


        .error .container-error-404 {
            margin-top: 10%;
            position: relative;
            height: 250px;
            padding-top: 40px;
        }

        .error .container-error-404 .clip {
            display: inline-block;
            transform: skew(-45deg);
        }

        .error .clip .shadow {

            overflow: hidden;
        }

        .error .clip:nth-of-type(2) .shadow {
            overflow: hidden;
            position: relative;
            box-shadow: inset 20px 0px 20px -15px rgba(150, 150, 150, 0.8), 20px 0px 20px -15px rgba(150, 150, 150, 0.8);
        }

        .error .clip:nth-of-type(3) .shadow:after,
        .error .clip:nth-of-type(1) .shadow:after {
            content: "";
            position: absolute;
            right: -8px;
            bottom: 0px;
            z-index: 9999;
            height: 100%;
            width: 10px;
            background: linear-gradient(90deg, transparent, rgba(173, 173, 173, 0.8), transparent);
            border-radius: 50%;
        }

        .error .clip:nth-of-type(3) .shadow:after {
            left: -8px;
        }

        .error .digit {
            position: relative;
            top: 8%;
            color: white;
            background: #ff9900;
            border-radius: 50%;
            display: inline-block;
            transform: skew(45deg);
        }

        .error .clip:nth-of-type(2) .digit {
            left: -10%;
        }

        .error .clip:nth-of-type(1) .digit {
            right: -20%;
        }

        .error .clip:nth-of-type(3) .digit {
            left: -20%;
        }

        .error h2 {
            color: #A2A2A2;
            font-weight: bold;
            padding-bottom: 20px;
        }


        .error .triangle {
            position: absolute;
            z-index: 999;
            transform: rotate(45deg);
            content: "";
            width: 0;
            height: 0;
        }

        /* Error Page */
        @media(max-width: 767px) {

            /* Error Page */
            .error .clip .shadow {
                height: 100px;
                /*Contrall*/
            }

            .error .clip:nth-of-type(2) .shadow {
                width: 80px;
                /*Contrall play with javascript*/
            }

            .error .clip:nth-of-type(1) .shadow,
            .error .clip:nth-of-type(3) .shadow {
                width: 100px;
                /*Contrall*/
            }

            .error .digit {
                width: 80px;
                /*Contrall*/
                height: 80px;
                /*Contrall*/
                line-height: 80px;
                /*Contrall*/
                font-size: 52px;
            }


            .error span.triangle

            /*Contrall*/
                {
                top: 70%;
                right: -3%;
                border-left: 10px solid #535353;
                border-top: 8px solid transparent;
                border-bottom: 8px solid transparent;
            }

            .error .container-error-404 {
                height: 150px;
            }

            /* Error Page */
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row ">
            <div class="col-lg-8 mx-auto">
                <svg width="380px" style="position: absolute;" height="500px" viewBox="0 0 837 1045" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:sketch="http://www.bohemiancoding.com/sketch/ns">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" sketch:type="MSPage">
                        <path d="M353,9 L626.664028,170 L626.664028,487 L353,642 L79.3359724,487 L79.3359724,170 L353,9 Z" id="Polygon-1" stroke="#007FB2" stroke-width="6" sketch:type="MSShapeGroup"></path>
                        <path d="M78.5,529 L147,569.186414 L147,648.311216 L78.5,687 L10,648.311216 L10,569.186414 L78.5,529 Z" id="Polygon-2" stroke="#EF4A5B" stroke-width="6" sketch:type="MSShapeGroup"></path>
                        <path d="M773,186 L827,217.538705 L827,279.636651 L773,310 L719,279.636651 L719,217.538705 L773,186 Z" id="Polygon-3" stroke="#795D9C" stroke-width="6" sketch:type="MSShapeGroup"></path>
                     </g>
                </svg>
                <div class="error">
                    <div class="container-floud">
                        <div class="col-xs-12 ground-color text-center">

                            <div class="container-error-404">
                                <div class="clip">
                                    <div class="shadow"><span class="digit thirdDigit"></span></div>
                                </div>
                                <div class="clip">
                                    <div class="shadow"><span class="digit secondDigit"></span></div>
                                </div>
                                <div class="clip">
                                    <div class="shadow"><span class="digit firstDigit"></span></div>
                                </div>
                            </div>
                            <h2 class="h1">Sorry! Page not found</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="/js/main.js"></script>

</html>