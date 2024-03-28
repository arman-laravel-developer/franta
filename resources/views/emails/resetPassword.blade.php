<!DOCTYPE html>
<html>
<head>
    <title>{{$data['title']}}</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f6f6f6;
            padding: 0;
            margin: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #444444;
            text-align: center;
        }

        .logo {
            display: block;
            margin: 0 auto;
            max-width: 200px;
            height: auto;
        }

        p {
            font-size: 16px;
            color: #444444;
            margin-top: 20px;
            text-align: center;
            line-height: 1.5;
        }

        .button {
            display: inline-block;
            background-color: #4CAF50;
            color: #ffffff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
            margin-top: 20px;
        }

        .button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
<div class="container">
{{--    <img src="{{asset('/')}}front/storage/app/public/photos/a.jpeg" alt="Logo" class="logo">--}}
    <h1>{{$data['title']}}</h1>
    <a href="{{$data['url']}}" class="button" style="margin-left: 33%; color: white">Reset password</a>
    <p>This is one time link.</p>
</div>
</body>
</html>

