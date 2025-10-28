<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Tiket Wisata Gresik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #2196f3, #64b5f6); /* biru */
            min-height: 100vh;
            color: #0d47a1;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            font-family: 'Poppins', sans-serif;
            padding: 20px;
        }

        .container {
            background: #ffffffcc;
            backdrop-filter: blur(10px);
            border-radius: 25px;
            box-shadow: 0 4px 25px rgba(0, 0, 0, 0.1);
            padding: 40px 30px;
            max-width: 600px;
        }

        h1 {
            font-weight: 700;
            color: #0d47a1;
            margin-bottom: 10px;
        }

        p {
            color: #1565c0;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .card-tiket {
            background-color: #e3f2fd;
            border-radius: 20px;
            border: none;
            padding: 20px;
            margin: 15px 0;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .card-tiket:hover {
            transform: translateY(-5px);
            background-color: #bbdefb;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-weight: 600;
            color: #0d47a1;
            font-size: 1.3rem;
        }

        .harga {
            font-size: 1rem;
            font-weight: 500;
            color: #1565c0;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .btn-wisata {
            background-color: #1e88e5;
            color: white;
            border-radius: 25px;
            padding: 8px 20px;
            border: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-wisata:hover {
            background-color: #1565c0;
            transform: scale(1.05);
        }

        footer {
            margin-top: 40px;
            color: #0d47a1;
            font-size: 0.9rem;
        }

        .icon {
            font-size: 3rem;
            color: #1976d2;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🌊</div>
        <h1>Selamat Datang di Wisata Alam Gresik</h1>
        <p>Temukan destinasi terbaik dan nikmati keindahan alamnya!</p>

        <div class="d-flex flex-column align-items-center">
            <!-- Pantai Pasir Putih -->
            <div class="card-tiket w-100">
                <h5 class="card-title">🏖️ Pantai Pasir Putih</h5>
                <p class="harga">Harga Tiket: Rp 15.000</p>
                <a href="/tiket/PasirPutih/15000" class="btn btn-wisata">Lihat Detail</a>
            </div>

            <!-- Waterboom Malindo -->
            <div class="card-tiket w-100">
                <h5 class="card-title">💦 Waterboom Malindo</h5>
                <p class="harga">Harga Tiket: Rp 25.000</p>
                <a href="/tiket/WaterboomMalindo/25000" class="btn btn-wisata">Lihat Detail</a>
            </div>
        </div>

        <footer>
            © 2025 Info Wisata Gresik — waizzz
        </footer>
    </div>
</body>
</html>
