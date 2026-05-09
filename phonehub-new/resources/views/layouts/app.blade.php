<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Simple Phone Website</title>
    <style>
        body {
            background-color: #f0f0f0;
            color: black;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }
        .top-menu {
            background-color: lightblue;
            padding: 15px;
            border-bottom: 2px solid gray;
        }
        .top-menu a {
            margin-right: 20px;
            color: black;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
        }
        .main-box {
            width: 80%;
            margin: 20px auto;
            background-color: white;
            border: 1px solid black;
            padding: 20px;
        }
        button {
            background-color: gray;
            color: white;
            border: 1px solid black;
            padding: 8px 12px;
            cursor: pointer;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }
        th {
            background-color: beige;
        }
    </style>
</head>
<body>

    <div class="top-menu">
        <a href="/">Home Page</a>
        <a href="/about">About Us</a>
        <a href="/login">Go Login</a>
    </div>

    <div class="main-box">
        @yield('content')
    </div>

</body>
</html>