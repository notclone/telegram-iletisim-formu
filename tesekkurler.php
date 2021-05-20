<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Teşekkürler</title>
    <meta http-equiv="refresh" content="55; url=index.php">
    <style media="screen">

        .alert {
            background: #f8d7da;
            padding: 5px 10px;
            border-radius: 8px;
        }
        .animation-ctn{
            text-align:center;
            margin: 5em auto;
        }

        @-webkit-keyframes checkmark {
            0% {
                stroke-dashoffset: 100px
            }

            100% {
                stroke-dashoffset: 200px
            }
        }

        @-ms-keyframes checkmark {
            0% {
                stroke-dashoffset: 100px
            }

            100% {
                stroke-dashoffset: 200px
            }
        }

        @keyframes checkmark {
            0% {
                stroke-dashoffset: 100px
            }

            100% {
                stroke-dashoffset: 0px
            }
        }

        @-webkit-keyframes checkmark-circle {
            0% {
                stroke-dashoffset: 480px

            }

            100% {
                stroke-dashoffset: 960px;

            }
        }

        @-ms-keyframes checkmark-circle {
            0% {
                stroke-dashoffset: 240px
            }

            100% {
                stroke-dashoffset: 480px
            }
        }

        @keyframes checkmark-circle {
            0% {
                stroke-dashoffset: 480px
            }

            100% {
                stroke-dashoffset: 960px
            }
        }

        @keyframes colored-circle {
            0% {
                opacity:0
            }

            100% {
                opacity:100
            }
        }

        /* other styles */
        /* .svg svg {
        display: none
        }
        */
        .inlinesvg .svg svg {
            display: inline
        }

        /* .svg img {
        display: none
        } */

        .icon--order-success svg polyline {
            -webkit-animation: checkmark 0.3s ease-in-out 0.9s backwards;
            animation: checkmark 0.3s ease-in-out 0.9s backwards
        }

        .icon--order-success svg circle {
            -webkit-animation: checkmark-circle 0.6s ease-in-out backwards;
            animation: checkmark-circle 0.6s ease-in-out backwards;
        }
        .icon--order-success svg circle#colored {
            -webkit-animation: colored-circle 0.6s ease-in-out 0.7s backwards;
            animation: colored-circle 0.6s ease-in-out 0.7s backwards;
        }
    </style> 
	
	
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="animation-ctn">
    <div class="icon icon--order-success svg">
        <svg xmlns="http://www.w3.org/2000/svg" width="154px" height="154px">
            <g fill="none" stroke="#22AE73" stroke-width="2">
                <circle cx="77" cy="77" r="72" style="stroke-dasharray:480px, 480px; stroke-dashoffset: 960px;"></circle>
                <circle id="colored" fill="#22AE73" cx="77" cy="77" r="72" style="stroke-dasharray:480px, 480px; stroke-dashoffset: 960px;"></circle>
                <polyline class="st0" stroke="#fff" stroke-width="10" points="43.5,77.8 63.7,97.9 112.2,49.4 " style="stroke-dasharray:100px, 100px; stroke-dashoffset: 200px;"/>
            </g>
        </svg>
    </div>
    <br />
    <h2>Mesajınız Alındı</h2>
    <p>Size en kısa sürede geri dönüş sağlayacağız.</p>
    <p>Anasayfaya dönmek için</p>
    <a href="index.php" class="btn btn-primary">Tıklayın</a>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>