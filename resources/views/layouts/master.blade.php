<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>BookLelo</title>
    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css" />
    <script src="/js/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <style>
        body
        {
            margin: 0;
            font-family: 'Candara';
            font-size: 16px;
        }
        .container
        {
            width: 100%;
            height: 100%;
            margin: 0px;

        }
        @keyframes logo-animate{
            0% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 78%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 78%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 78%);
                background: linear-gradient( left, white, dodgerblue, white 78%);	}
            2% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 76%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 76%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 76%);
                background: linear-gradient( left, white, dodgerblue, white 76%);	}
            4% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 74%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 74%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 74%);
                background: linear-gradient( left, white, dodgerblue, white 74%);	}
            6% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 72%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 72%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 72%);
                background: linear-gradient( left, white, dodgerblue, white 72%);	}
            8% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 70%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 70%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 70%);
                background: linear-gradient( left, white, dodgerblue, white 70%);	}
            10% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 68%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 68%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 68%);
                background: linear-gradient( left, white, dodgerblue, white 68%);	}
            12% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 66%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 66%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 66%);
                background: linear-gradient( left, white, dodgerblue, white 66%);	}
            14% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 64%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 64%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 64%);
                background: linear-gradient( left, white, dodgerblue, white 64%);	 }
            16% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 62%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 62%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 62%);
                background: linear-gradient( left, white, dodgerblue, white 62%);	 }
            18% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 60%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 60%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 60%);
                background: linear-gradient( left, white, dodgerblue, white 60%);	 }
            20% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 58%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 58%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 58%);
                background: linear-gradient( left, white, dodgerblue, white 58%);
            22% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 56%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 56%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 56%);
                background: linear-gradient( left, white, dodgerblue, white 56%);	}
            24% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 54%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 54%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 54%);
                background: linear-gradient( left, white, dodgerblue, white 54%);	}
            26% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 52%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 52%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 52%);
                background: linear-gradient( left, white, dodgerblue, white 52%);	}
            28% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 50%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 50%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 50%);
                background: linear-gradient( left, white, dodgerblue, white 50%);	}
            30% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 48%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 48%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 48%);
                background: linear-gradient( left, white, dodgerblue, white 48%);	}
            32% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 46%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 46%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 46%);
                background: linear-gradient( left, white, dodgerblue, white 46%);	}
            34% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 44%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 44%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 44%);
                background: linear-gradient( left, white, dodgerblue, white 44%);	 }
            36% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 62%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 62%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 62%);
                background: linear-gradient( left, white, dodgerblue, white 62%);	 }
            38% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 60%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 60%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 60%);
                background: linear-gradient( left, white, dodgerblue, white 60%);	 }
            40% {
                background: -webkit-linear-gradient(left,white,dodgerblue, white 58%);
                background: -o-linear-gradient(left ,white, dodgerblue, white 58%);
                background: -moz-linear-gradient(left, white, dodgerblue, white 58%);
                background: linear-gradient( left, white, dodgerblue, white 58%);	 }
        }

    </style>

</head>

<body>

<div class="container">
    @yield('content')
</div>
</body>
</html>