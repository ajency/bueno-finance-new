<?php
/* 
* Template Name: loader
 */
 ?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        .loader {
            border: 8px solid #204F2A;
            border-radius: 50%;
            border-top: 8px solid #f3f3f3;
            width: 50px;
            height: 50px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;

        }

        .container {
            display: flex;
            justify-content: center;
            margin-top: 55%;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="loader"></div>
    </div>
    <h3 style="text-align: center; margin-top: 10%;">Please wait...</h3>
</body>

</html>