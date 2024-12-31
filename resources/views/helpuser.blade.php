<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('Gunjek/static/css/helpuser.css')}}">
    <title>FAQ USER</title>
</head>
<body>
    <header>
        <div class="Navbar"> 
            <div class="logo">
                <img src="{{asset('Gunjek/static/image/LOGO.png')}}" alt="logo">
            </div>
            <ul class="listoflinks">
                <li><a href="{{url('index')}}">Beranda</a></li>
                <li><a href="{{url('order')}}">Order</a></li>
                <li><a href="{{url('driver')}}">Driver</a></li>
                <li><a href="{{url('lokasi')}}">Lokasi</a></li>
                <li><a href="{{url('helpuser')}}">Bantuan</a></li>
              </ul>
            <div class="profile-driver">
                <img src="{{asset('Gunjek/static/image/driverlogo.png')}}" alt="driverlogo" class="driverlogo">
            </div>
        </div>
    </header>
    <section class="faq-section">
        <h1 class="faq-title">Frequently Asked Questions</h1>
        <div class="faq-item">
          <div class="faq-question">
            Apakah saya harus punya akun terlebih dahulu untuk melakukan pemesanan?
            <span class="faq-toggle">-</span>
          </div>
          <div class="faq-answer">
            Ya. Anda harus memiliki akun terlebih dahulu untuk melakukan pemesanan. Anda dapat mendaftar pada menu daftar akun.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            Apa itu Gunjek?
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer hidden">
            Gunjek adalah platform transportasi online untuk mahasiswa.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            Apakah Gunjek hanya melayani mahasiswa Universitas Gunadarma?
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer hidden">
            Tidak, Gunjek melayani semua pelanggan di wilayah tertentu.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            Bagaimana cara daftar sebagai driver Gunjek?
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer hidden">
            Anda bisa mendaftar melalui aplikasi dengan mengisi formulir pendaftaran.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            Apa yang harus dilakukan jika terjadi masalah dengan pengemudi?
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer hidden">
            Silakan hubungi layanan pelanggan melalui aplikasi untuk penyelesaian.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            Apakah saya bisa melakukan pembayaran tunai?
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer hidden">
            Ya, Gunjek mendukung pembayaran tunai maupun non-tunai.
          </div>
        </div>
        <div class="faq-item">
          <div class="faq-question">
            Apakah Gunjek melayani perjalanan jauh?
            <span class="faq-toggle">+</span>
          </div>
          <div class="faq-answer hidden">
            Ya, perjalanan jauh bisa dilakukan dengan syarat tertentu.
          </div>
        </div>
      </section>

      <script>
        document.querySelectorAll('.faq-question').forEach(item => {
          item.addEventListener('click', () => {
            const answer = item.nextElementSibling;
            const toggle = item.querySelector('.faq-toggle');
            answer.classList.toggle('hidden');
            toggle.textContent = toggle.textContent === '+' ? '-' : '+';
          });
        });
      </script>
    <footer> 
        <div class="logofooter">
            <img src="{{asset('Gunjek/static/image/LOGO.png')}}" alt="logo">
        </div>
        <ul>
            <div class="sosmed">
                <img src="{{asset('Gunjek/static/image/Instagram Circle.png')}}" alt="instagram">
                <img src="{{asset('Gunjek/static/image/TwitterX.png')}}" alt="twitter">
            </div>
            <div>
                <h4>Informasi</h4>
                <p>Tentang</p>
            </div>
            <div>
                <h4>Gabung</h4>
                <p>Pengguna</p>
                <p>Driver</p>
            </div>
            <div>
                <h4>Layanan</h4>
                <p>Bantuan</p>
            </div>
        </ul>
        <p>Gunadarma Ojek 2024</p>
    </footer>
</body>
</html>