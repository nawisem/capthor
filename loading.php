<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" href="/css_login/stylelogin.css">
        <script>
            var seconds=0;
            function displayseconds()
            {
                seconds +=1;
                document.getElementById("secondsdisplay").innerText="This page will be redirect in"+seconds+"Seconds...";
            }
            setInterval(displayseconds,1000);
            function redirectpage()
            {
                window.location="homepage.php"
            }
            setTimeout('redirectpage()',2000);
            function preventBack(){window.history.forward();}
            setTimeout("preventBack()",0)
            window.onunload = function(){null};
        </script>
        <style>
            body{
                background: #1d2630;
                font-family: sans-serif;
            }
            .container{
                width: 100%;
                min-height: 100vh;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }
            .text{
                color: white;
                margin-bottom: 25px;
                font-size: 20px;
                letter-spacing: 2px;
            }
            .loading{
                width: 100%;
                height: auto;
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .loading .line-box{
                padding: 2px;
                width: 40%;
                height: 20px;
                border: 2px solid #267591;
                border-radius: 20px;
            }
            .loading .line-box .line{
                height: 20px;
                border-radius: 20px;
                background: #67d295;
                animation: loading 2s forwards cubic-bezier(0,0,0,0);
            }

            @keyframes loading{
                0%{
                    width: 0%;
                }
                100%{
                    width: 100%;
                }
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="text">
                <h1>Loading...</h1>
            </div>
            <div class="loading">
                <div class="line-box">
                    <div class="line"></div>
                </div>
            </div>
        </div>
    </body>