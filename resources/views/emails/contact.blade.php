<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pesan Baru</title>
</head>
<body style="margin:0; padding:0; background-color:#f3f4f6; font-family:Arial, Helvetica, sans-serif;">

    <div style="max-width:600px; margin:40px auto; background:#ffffff; border-radius:12px; overflow:hidden; box-shadow:0 10px 25px rgba(0,0,0,0.1);">

        {{-- Header --}}
        <div style="background-color:#16a34a; padding:20px;">
            <h2 style="margin:0; color:#ffffff; font-size:22px; text-align:center;">
                Pesan Baru dari Website Desa Sebatu
            </h2>
        </div>

        {{-- Content --}}
        <div style="padding:24px; color:#374151; font-size:14px; line-height:1.6;">
            <p style="margin-bottom:12px;">
                <strong>Nama:</strong><br>
                {{ $nama_depan }} {{ $nama_belakang }}
            </p>

            <p style="margin-bottom:12px;">
                <strong>Email:</strong><br>
                {{ $email }}
            </p>

            <hr style="border:none; border-top:1px solid #e5e7eb; margin:20px 0;">

            <p style="white-space:pre-line;">
                {{ $pesan }}
            </p>
        </div>

        {{-- Footer --}}
        <div style="background:#f9fafb; padding:16px; text-align:center; font-size:12px; color:#6b7280;">
            © {{ date('Y') }} Desa Wisata Sebatu
        </div>

    </div>

</body>
</html>
