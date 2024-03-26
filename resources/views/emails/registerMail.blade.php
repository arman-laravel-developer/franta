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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            padding: 10px;
            border: 1px solid #dddddd;
            text-align: left;
            font-size: 14px;
            color: #444444;
        }

        th {
            background-color: #f7f7f7;
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
    <h1>{{$data['title']}}</h1>
    <table>
        <tr>
            <th>Name:</th>
            <td>{{$data['name']}}</td>
        </tr>
        <tr>
            <th>Email:</th>
            <td>{{$data['email']}}</td>
        </tr>
        <tr>
            <th>Password:</th>
            <td>{{$data['password']}}</td>
        </tr>
    </table>
    <a href="{{route('home')}}" class="button" style="color: white">Login</a>
</div>
</body>
</html>


