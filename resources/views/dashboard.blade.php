<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <h1>Welcome to your Dashboard!</h1>
    <ul>
        <li>
            <a href="{{ route('merchant.profile') }}">Merchant Profile</a>
        </li>
        <li>
            <a href="{{ route('merchant.menus') }}">Menu</a>
        </li>
        <li>
            <a href="{{ route('customer') }}">Customer</a>
        </li>
        <li>
            <a href="{{ route('merchant.orders') }}">Order</a>
        </li>
    </ul>
    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</body>

</html>
