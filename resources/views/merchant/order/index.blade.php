<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Pesanan</h1>

    @if ($orders->isEmpty())
        <p>Tidak ada pesanan yang masuk.</p>
    @else
        <table>
            <thead>
                <tr>
                    <th>Nama Menu</th>
                    <th>Jumlah Porsi</th>
                    <th>Tanggal Pengiriman</th>
                    <th>Total Harga</th>
                    <th>Nama Customer</th>
                    <th>Cetak</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($orders as $order)
                    <tr>
                        <td>{{ $order->menu->name }}</td>
                        <td>{{ $order->quantity }}</td>
                        <td>{{ $order->delivery_date }}</td>
                        <td>Rp {{ number_format($order->total_price, 0, ',', '.') }}</td>
                        <td>{{ $order->user->name }}</td>
                        <td>
                            <form action="{{ route('customer.order.invoice.pdf', $order->id) }}" method="GET"
                                style="display:inline;">
                                @csrf
                                <button type="submit">Cetak</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</body>

</html>
