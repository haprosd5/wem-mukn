<!DOCTYPE HTML>
<html>

<head>
    <base href="{{asset('')}}">
    <meta charset="utf-8">
    <title>Mu H5 - Huyền thoại</title>
    <meta name="viewport"
        content="width=device-width,initial-scale=1, minimum-scale=1, maximum-scale=1, user-scalable=no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="full-screen" content="true" />
    <meta name="screen-orientation" content="portrait" />
    <meta name="x5-fullscreen" content="true" />
    <meta name="360-fullscreen" content="true" />
    <link rel="icon" href="images/logo.png" type="image/x-icon">
    <meta name="description"
        content="Game Mu H5 đồ họa siêu đẹp, bối cảnh tiên hiệp, cộng đồng đông đảo, giải trí đích thực. Chơi trên ngay mọi thiết bị không cần cài đặt." />
    <style>
        html,
        body {
            -ms-touch-action: none;
            background: #000000;
            padding: 0;
            border: 0;
            margin: 0;
            height: 100%;
        }

        a {
            text-decoration: none;
            color: #985c16;
            font-weight: bold;
            font-family: arial;
            font-size: 15px;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $("#iframe").attr("src", "{!!$link!!}");
        });
    </script>
</head>

<body style="margin:0px;padding:0px;overflow:hidden">
    <iframe 
        id="iframe"
        src=""
        frameborder="0"
        style="overflow:hidden;overflow-x:hidden;overflow-y:hidden;height:100%;width:100%;position:absolute;top:0px;left:0px;right:0px;bottom:0px"
        height="100%" width="100%"></iframe>
</body>
</html>