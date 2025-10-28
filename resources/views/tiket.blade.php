<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Informasi Tiket Wisata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #2196f3, #64b5f6); /* biru */
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Poppins', sans-serif;
            position: relative;
            flex-direction: column;
        }

        .card {
            background: #ffffffee;
            backdrop-filter: blur(6px);
            border: none;
            border-radius: 25px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 90%;
            text-align: center;
            overflow: hidden;
            animation: fadeIn 0.8s ease;
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card-body {
            padding: 25px;
        }

        h2 {
            color: #0d47a1;
            font-weight: 700;
            margin-bottom: 10px;
        }

        h4 {
            color: #1565c0;
            font-weight: 600;
            margin-bottom: 20px;
        }

        .price {
            font-size: 1.6rem;
            font-weight: 700;
            color: #0d47a1;
            margin-bottom: 15px;
        }

        .facilities {
            text-align: center;
            margin-top: 10px;
            margin-bottom: 20px;
            padding: 0;
        }

        .facilities li {
            list-style: none;
            color: #1976d2;
            font-weight: 500;
            margin: 5px 0;
        }

        .btn-back {
            background-color: #1e88e5;
            color: white;
            font-weight: 600;
            border-radius: 25px;
            padding: 10px 25px;
            transition: all 0.3s ease;
            display: inline-block;
        }

        .btn-back:hover {
            background-color: #1565c0;
            transform: translateY(-2px);
        }

        footer {
            position: fixed;
            bottom: 15px;
            color: #0d47a1;
            font-size: 0.9rem;
            text-align: center;
            width: 100%;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
    </style>
</head>
<body>
    <div class="card">
        @php
            $gambar = '';
            $fasilitas = [];
            $deskripsi = '';

            switch (strtolower($tempat)) {
                case 'papuma':
                    $gambar = 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80';
                    $deskripsi = 'Nikmati keindahan pasir putih dan panorama laut di Pantai Papuma, salah satu surga tersembunyi di Jember.';
                    $fasilitas = ['🏖️ Pantai pasir putih', '🌅 Spot sunrise indah', '🍴 Warung makanan laut', '🚿 Area bilas & toilet'];
                    break;
                case 'watuulo':
                    $gambar = 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=800&q=80';
                    $deskripsi = 'Tempat ideal untuk menikmati tebing karang dan suasana pantai yang menenangkan di Watu Ulo.';
                    $fasilitas = ['🪨 Tebing karang alami', '🍢 Tempat kuliner lokal', '🅿️ Area parkir luas', '🛶 Sewa perahu kecil'];
                    break;
                case 'pancerpuger':
                    $gambar = 'https://images.unsplash.com/photo-1493558103817-58b2924bce98?auto=format&fit=crop&w=800&q=80';
                    $deskripsi = 'Pantai Pancer Puger menawarkan ombak menantang bagi peselancar dan pesona laut yang eksotis.';
                    $fasilitas = ['🌊 Tempat surfing', '🏕️ Area camping', '🍹 Warung pantai', '🛍️ Pasar ikan segar'];
                    break;
                default:
                    $gambar = 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=800&q=80';
                    $deskripsi = 'Tempat wisata alam dengan suasana tenang dan fasilitas lengkap untuk liburan santai.';
                    $fasilitas = ['🌿 Area wisata alam', '🍴 Fasilitas kuliner', '🚗 Area parkir', '🧘 Spot foto dan relaksasi'];
            }
        @endphp

        <img src="{{ $gambar }}" alt="Gambar {{ $tempat }}">

        <div class="card-body">
            <h2>{{ ucfirst($tempat) }}</h2>
            <h4>Informasi Tiket Wisata</h4>
            <p class="text-muted">{{ $deskripsi }}</p>

            <p>Harga Tiket: <span class="price">Rp {{ number_format($harga, 0, ',', '.') }}</span></p>

            <h5 class="mt-3 text-primary">Fasilitas:</h5>
            <ul class="facilities">
                @foreach ($fasilitas as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>

            <a href="/" class="btn btn-back mt-3">← Kembali ke Halaman Utama</a>
        </div>
    </div>

    <footer>
        © 2025 Info Wisata Jember — waizzz
    </footer>
</body>
</html>
