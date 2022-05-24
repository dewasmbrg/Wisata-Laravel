<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="{{ public_path('css/pdf.scss') }}" rel="stylesheet" type="text/css" />
</head>

<body>

    <div class="ticket">
        <h3 align="center">Order Room</h3>
        <hr>
        <div class="ticket__content">

            <img src="{{ public_path('pict/qr.png') }}" id="img-qr">
            {{-- {!! QrCode::size(250)->generate('wisata-sumatera.com'); !!} --}}
            {{-- <img src="data:image/png;base64, {{ base64_encode(QrCode::format('png')->size(100)->generate('Make me into an QrCode!')) }} "> --}}
            <br /><br />
            <div class="text-tiket">
                <label>Nama Pemesan : {{$pesanan->nama_pemesan}}</label><br />
                <label>Waktu Inap : {{$pesanan->lama_inap}} Malam</label><br />
                <label>Tanggal Pemesanan : {{$pesanan->tanggal_pesanan}}</label>
            </div>
        </div>
    </div>

</body>
</html>
