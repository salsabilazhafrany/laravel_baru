<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Sistem Tiket Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #a8e6cf, #dcedc1);
            min-height: 100vh;
            color: #2e7d32;
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
            max-width: 900px;
        }

        h1 {
            font-weight: 700;
            color: #1b5e20;
            margin-bottom: 10px;
        }

        p {
            color: #33691e;
            font-size: 1.1rem;
            margin-bottom: 30px;
        }

        .card-tiket {
            background-color: #e8f5e9;
            border-radius: 20px;
            border: none;
            padding: 20px;
            margin: 10px;
            transition: all 0.3s ease;
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.1);
        }

        .card-tiket:hover {
            transform: translateY(-5px);
            background-color: #c8e6c9;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.15);
        }

        .card-title {
            font-weight: 600;
            color: #2e7d32;
            font-size: 1.3rem;
        }

        .alamat {
            font-size: 1rem;
            font-weight: 500;
            color: #1b5e20;
            margin-top: 5px;
            margin-bottom: 10px;
        }

        .btn-wisata {
            background-color: #66bb6a;
            color: white;
            border-radius: 25px;
            padding: 8px 20px;
            border: none;
            font-weight: 600;
            transition: 0.3s;
        }

        .btn-wisata:hover {
            background-color: #43a047;
            transform: scale(1.05);
        }

        footer {
            margin-top: 50px;
            color: #558b2f;
            font-size: 0.9rem;
        }

        .icon {
            font-size: 3rem;
            color: #43a047;
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="icon">🍃</div>
        <h1>Selamat Datang di Wisata Alam Jember</h1>
        <p>Temukan destinasi terbaik dan nikmati keindahan alamnya!</p>

        <div class="row justify-content-center">
            <!-- Papuma -->
            <div class="col-md-4">
                <div class="card-tiket">
                    <h5 class="card-title">🌊 Pantai Papuma</h5>
                    <p class="alamat">Jl. Raya Lojejer, Desa Sumberejo, Ambulu, Kabupaten Jember</p>
                    <a href="/tiket/Papuma/20000" class="btn btn-wisata">Lihat Detail</a>
                </div>
            </div>

            <!-- Watu Ulo -->
            <div class="col-md-4">
                <div class="card-tiket">
                    <h5 class="card-title">🏝️ Watu Ulo</h5>
                    <p class="alamat">Desa Sumberejo, Kecamatan Ambulu, Kabupaten Jember</p>
                    <a href="/tiket/WatuUlo/15000" class="btn btn-wisata">Lihat Detail</a>
                </div>
            </div>

            <!-- Pancer Puger -->
            <div class="col-md-4">
                <div class="card-tiket">
                    <h5 class="card-title">🌅 Pancer Puger</h5>
                    <p class="alamat">Desa Puger Kulon, Kecamatan Puger, Kabupaten Jember</p>
                    <a href="/tiket/PancerPuger/10000" class="btn btn-wisata">Lihat Detail</a>
                </div>
            </div>
        </div>

        <footer>
            © 2025 Info Wisata Jember — Salsabila Zhafrany
        </footer>
    </div>
</body>
</html>
