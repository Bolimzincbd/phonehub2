<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Phone Compare Website</title>
    <style>
        body { background-color: white; color: black; font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; flex-direction: column; min-height: 100vh; }
        .top-menu { background-color: lightblue; padding: 15px; border-bottom: 2px solid gray; }
        .top-menu a { margin-right: 20px; color: black; text-decoration: none; font-size: 16px; font-weight: bold; }
        .main-box { width: 90%; max-width: 1000px; margin: 20px auto; background-color: white; border: 1px solid black; padding: 20px; flex: 1; }
        button, .btn { background-color: gray; color: white; border: 1px solid black; padding: 8px 12px; cursor: pointer; text-decoration: none; display: inline-block; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; margin-bottom: 20px; }
        th, td { border: 1px solid black; padding: 10px; text-align: left; }
        th { background-color: #f0f0f0; }
        .card-box { display: flex; flex-wrap: wrap; gap: 20px; margin-top: 10px; }
        .card { border: 1px solid gray; padding: 10px; width: 220px; background-color: #fafafa; }
        .card img { max-width: 100%; height: auto; border: 1px solid black; }
        input, select, textarea { width: 100%; padding: 8px; margin-top: 5px; margin-bottom: 15px; border: 1px solid gray; box-sizing: border-box; }
        .alert-good { background-color: lightgreen; padding: 10px; border: 1px solid green; margin-bottom: 15px; }
        .alert-bad { background-color: pink; padding: 10px; border: 1px solid red; margin-bottom: 15px; }
        .bottom-footer { background-color: #e0e0e0; padding: 20px; text-align: center; border-top: 2px solid gray; margin-top: 20px; }
    </style>
</head>
<body>

    <div class="top-menu">
        <a href="/">Home Page</a>
        <a href="/compare">Compare Phone</a>
        <a href="/blog">Read Blog</a>
        
        @auth
            <a href="/profile">My Profile</a>
            @if(auth()->user()->role == 'admin')
                <a href="/admin">Admin Dashboard</a>
            @endif
            <form action="/logout" method="POST" style="display:inline;">
                @csrf
                <button type="submit" style="background:black; color:white;">Logout Out</button>
            </form>
        @else
            <a href="/login">Login User</a>
            <a href="/register">Register New</a>
        @endauth
    </div>

    <div class="main-box">
        @if(session('success'))
            <div class="alert-good">{{ session('success') }}</div>
        @endif
        @if(session('error'))
            <div class="alert-bad">{{ session('error') }}</div>
        @endif

        @yield('content')
    </div>

    <div class="bottom-footer">
        <h3>PhoneHub Compare Website</h3>
        <p>This website make by us to help you look phones and compare. We try find best money worth product for you to buy.</p>
        <p>If the website have error, please do not be angry. We will try to fix it later.</p>
        <p>Also if you have any questions please do not contact us, Because we dont have any contact rn</p>
        <p><small>All phone picture and specs belong to real brand company. We dont copyright. We just download to used for this school project Thank you very much for visit today.</small></p>
    </div>

</body>
</html>