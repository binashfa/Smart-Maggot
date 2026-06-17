<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartMaggot - Sistem Monitoring IoT Budidaya Maggot</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

    <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Poppins', sans-serif;
        }

        @keyframes float {
            0%, 100% {
                transform: translateY(0px);
            }
            50% {
                transform: translateY(-20px);
            }
        }

        .float {
            animation: float 4s ease-in-out infinite;
        }

        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(40px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .fade-up {
            animation: fadeUp 0.8s ease forwards;
        }

        .feature-card {
            transition: all 0.35s ease;
        }

        .feature-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 24px 48px rgba(18, 85, 123, 0.15);
        }

        .hero-gradient {
            background: linear-gradient(135deg, #12557B 0%, #0F7A8C 100%);
        }

        .btn-primary {
            background: #12557B;
            transition: all 0.3s ease;
        }

        .btn-primary:hover {
            background: #0F4A60;
            transform: translateY(-2px);
            box-shadow: 0 12px 24px rgba(18, 85, 123, 0.3);
        }

        .btn-secondary {
            background: white;
            color: #12557B;
            border: 2px solid #12557B;
            transition: all 0.3s ease;
        }

        .btn-secondary:hover {
            background: #12557B;
            color: white;
        }

        @keyframes slideIn {
            from {
                opacity: 0;
                transform: translateX(-30px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        .slide-in {
            animation: slideIn 0.6s ease forwards;
        }

        .text-gradient {
            background: linear-gradient(135deg, #12557B 0%, #0F7A8C 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }
    </style>
</head>

<body class="bg-gray-50 overflow-x-hidden">

    <!-- Hero Section -->
    <section class="relative min-h-screen flex items-center justify-center pt-20 pb-12 overflow-hidden">
        <div class="absolute inset-0 -z-10 opacity-40">
            <div class="absolute top-20 left-10 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl animate-blob"></div>
            <div class="absolute top-40 right-10 w-72 h-72 bg-green-300 rounded-full mix-blend-multiply filter blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="max-w-7xl mx-auto px-6 w-full">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div data-aos="fade-right" class="slide-in">
                    <h1 class="text-5xl lg:text-7xl font-black text-[#12557B] leading-tight">
                        Smart<br><span class="text-gradient">Maggot</span>
                    </h1>

                    <p class="mt-6 text-lg lg:text-xl text-gray-600 leading-relaxed">
                        Sistem monitoring dan kontrol budidaya maggot berbasis IoT. Pantau suhu, kelembaban, dan kelola otomatis dengan mudah.
                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <button onclick="document.getElementById('quizModal').classList.remove('hidden')" class="btn-primary text-white px-8 py-4 rounded-full font-bold text-lg">
                            Mulai Quiz
                        </button>
                        <a href="#features" class="btn-secondary px-8 py-4 rounded-full font-bold text-lg text-center">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>

                    <div class="mt-12 grid grid-cols-3 gap-6">
                        <div class="text-center">
                            <div class="text-3xl font-black text-[#12557B]">24/7</div>
                            <div class="text-sm text-gray-600 mt-2">Monitoring Realtime</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-black text-[#12557B]">95%</div>
                            <div class="text-sm text-gray-600 mt-2">Akurasi Data</div>
                        </div>
                        <div class="text-center">
                            <div class="text-3xl font-black text-[#12557B]">4000+</div>
                            <div class="text-sm text-gray-600 mt-2">Sensor Logs</div>
                        </div>
                    </div>
                </div>

                <div data-aos="zoom-in" class="flex justify-center">
                    <div class="relative w-full max-w-md h-96 flex items-center justify-center">
                        <div class="absolute inset-0 bg-gradient-to-r from-[#12557B] to-[#0F7A8C] rounded-3xl blur-2xl opacity-20"></div>
                        <img src="/images/logo-smartmaggot.png" alt="SmartMaggot Logo" class="relative w-130 h-130 object-contain">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6">
            <div class="text-center mb-16">
                <h2 data-aos="fade-up" class="text-5xl font-black text-[#12557B] mb-4">
                    Fitur Unggulan SmartMaggot
                </h2>
                <p data-aos="fade-up" data-aos-delay="100" class="text-gray-600 text-lg max-w-2xl mx-auto">
                    Solusi lengkap untuk budidaya maggot yang lebih efisien dan menguntungkan
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                <div data-aos="fade-up" class="feature-card bg-gradient-to-br from-blue-50 to-blue-100 p-8 rounded-3xl border border-blue-200">
                    <div class="text-5xl mb-4 text-blue-600"><i class="fas fa-satellite"></i></div>
                    <h3 class="font-bold text-2xl text-[#12557B] mb-3">Monitoring Realtime</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Pantau suhu, kelembaban udara, dan kondisi media maggot secara langsung dengan akurasi tinggi.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="feature-card bg-gradient-to-br from-green-50 to-green-100 p-8 rounded-3xl border border-green-200">
                    <div class="text-5xl mb-4 text-green-600"><i class="fas fa-bolt"></i></div>
                    <h3 class="font-bold text-2xl text-[#12557B] mb-3">Kontrol Otomatis</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Kipas dan perangkat lain bekerja otomatis berdasarkan sensor. Mode manual juga tersedia untuk kontrol manual.
                    </p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="feature-card bg-gradient-to-br from-purple-50 to-purple-100 p-8 rounded-3xl border border-purple-200">
                    <div class="text-5xl mb-4 text-purple-600"><i class="fas fa-chart-bar"></i></div>
                    <h3 class="font-bold text-2xl text-[#12557B] mb-3">Analytics & Laporan</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Analisis data historis, grafik tren, dan laporan komprehensif untuk optimasi budidaya.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- System Components -->
    <section class="py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-6">
            <h2 data-aos="fade-up" class="text-5xl font-black text-center text-[#12557B] mb-16">
                Komponen Sistem
            </h2>

            <div class="grid md:grid-cols-4 gap-6">
                <div data-aos="fade-up" class="feature-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <div class="text-5xl mb-4 text-red-500"><i class="fas fa-thermometer-half"></i></div>
                    <h3 class="font-bold text-xl text-[#12557B] mb-2">Sensor DHT22</h3>
                    <p class="text-gray-600 text-sm">Mengukur suhu dan kelembaban lingkungan dengan presisi tinggi.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="100" class="feature-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <div class="text-5xl mb-4 text-blue-500"><i class="fas fa-droplet"></i></div>
                    <h3 class="font-bold text-xl text-[#12557B] mb-2">Soil Moisture</h3>
                    <p class="text-gray-600 text-sm">Mendeteksi kelembaban media tempat maggot berkembang biak.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="200" class="feature-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <div class="text-5xl mb-4 text-purple-500"><i class="fas fa-wifi"></i></div>
                    <h3 class="font-bold text-xl text-[#12557B] mb-2">ESP32</h3>
                    <p class="text-gray-600 text-sm">Mikrokontroler yang mengumpulkan dan mengirim data ke server.</p>
                </div>

                <div data-aos="fade-up" data-aos-delay="300" class="feature-card bg-white p-8 rounded-2xl shadow-lg border border-gray-100">
                    <div class="text-5xl mb-4 text-cyan-500"><i class="fas fa-fan"></i></div>
                    <h3 class="font-bold text-xl text-[#12557B] mb-2">Fan Controller</h3>
                    <p class="text-gray-600 text-sm">Mengatur kecepatan kipas untuk menjaga suhu optimal budidaya.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-24 bg-gradient-to-r from-[#12557B] to-[#0F7A8C]">
        <div class="max-w-7xl mx-auto px-6">
            <div class="grid md:grid-cols-3 gap-8">
                <div data-aos="zoom-in" class="text-white text-center">
                    <div class="text-6xl font-black mb-3">4000+</div>
                    <p class="text-xl opacity-90">Data Points Recorded</p>
                </div>

                <div data-aos="zoom-in" data-aos-delay="100" class="text-white text-center">
                    <div class="text-6xl font-black mb-3">95%</div>
                    <p class="text-xl opacity-90">Akurasi Sensor</p>
                </div>

                <div data-aos="zoom-in" data-aos-delay="200" class="text-white text-center">
                    <div class="text-6xl font-black mb-3">24/7</div>
                    <p class="text-xl opacity-90">Monitoring Aktif</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Quiz Call to Action -->
    <section class="py-24 bg-white">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 data-aos="fade-up" class="text-5xl font-black text-[#12557B] mb-6">
                Uji Pengetahuanmu tentang SmartMaggot
            </h2>

            <p data-aos="fade-up" data-aos-delay="100" class="text-gray-600 text-lg mb-10">
                Ikuti quiz interaktif kami dengan 10 pertanyaan menarik tentang penggunaan dan manfaat SmartMaggot untuk budidaya maggot.
            </p>

            <button onclick="document.getElementById('quizModal').classList.remove('hidden')" 
                class="btn-primary text-white px-12 py-5 rounded-full font-bold text-lg shadow-lg">
                Mulai Quiz Sekarang
            </button>
        </div>
    </section>

    <!-- Quiz Modal -->
    <div id="quizModal" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl p-10 max-w-md w-full shadow-2xl" data-aos="zoom-in">
            <h2 class="text-4xl font-black text-[#12557B] mb-6">
                Quiz SmartMaggot
            </h2>

            <ul class="space-y-4 text-gray-700 mb-10">
                <li class="flex items-center gap-3">
                    <span class="text-2xl text-blue-500"><i class="fas fa-list"></i></span>
                    <span class="font-semibold">30 Pertanyaan</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-2xl text-orange-500"><i class="fas fa-hourglass-end"></i></span>
                    <span class="font-semibold">7 Detik per soal</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-2xl text-yellow-500"><i class="fas fa-star"></i></span>
                    <span class="font-semibold">Maksimal skor 300</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-2xl text-purple-500"><i class="fas fa-brain"></i></span>
                    <span class="font-semibold">Pelajari tentang SmartMaggot</span>
                </li>
            </ul>

            <button id="startQuiz" class="btn-primary text-white w-full py-4 rounded-full font-bold text-lg">
                Mulai Quiz
            </button>

            <button onclick="document.getElementById('quizModal').classList.add('hidden')" 
                class="w-full mt-3 py-3 rounded-full font-bold text-gray-600 hover:bg-gray-100 transition">
                Batal
            </button>
        </div>
    </div>

    <!-- Quiz Container -->
    <div id="quizContainer" class="hidden fixed inset-0 z-[999] bg-black/60 backdrop-blur-sm flex items-center justify-center p-6">
        <div class="w-full max-w-3xl">
            <div class="bg-white rounded-3xl p-10 shadow-2xl">
                <div class="flex justify-between items-center mb-6">
                    <span id="questionNumber" class="font-bold text-[#12557B] text-lg"></span>
                    <span id="timer" class="font-black text-3xl text-[#0F7A8C]">7</span>
                </div>

                <div class="h-2 bg-gray-200 rounded-full overflow-hidden mb-8">
                    <div id="timeBar" class="h-full bg-gradient-to-r from-[#12557B] to-[#0F7A8C] transition-all duration-1000" style="width:100%"></div>
                </div>

                <h2 id="questionText" class="text-2xl lg:text-3xl font-bold text-[#12557B] mb-10 leading-relaxed"></h2>

                <div id="answers" class="space-y-4 mb-8"></div>

                <div id="feedback" class="hidden text-center text-lg font-semibold"></div>
            </div>
        </div>
    </div>

    <!-- CTA Footer -->
    <section class="py-24 hero-gradient text-white">
        <div class="max-w-4xl mx-auto text-center px-6">
            <h2 class="text-5xl font-black mb-6">
                Siap Memulai Budidaya Maggot Cerdas?
            </h2>

            <p class="text-xl opacity-90 mb-10">
                Login ke dashboard SmartMaggot dan mulai monitor budidaya Anda sekarang juga.
            </p>

            <a href="/login" class="inline-block bg-white text-[#12557B] px-12 py-4 rounded-full font-bold text-lg hover:shadow-lg transition">
                Masuk Dashboard
            </a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#0F4A60] text-white py-8">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p class="text-opacity-80">
                SmartMaggot © 2024 | Sistem Monitoring IoT Budidaya Maggot
            </p>
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script>
        // Quiz Data - 30 Pertanyaan tentang Penggunaan SmartMaggot
        const allQuestions = [
            // Monitoring & Sensor
            {
                question: "Apa fungsi utama dari sensor DHT22 dalam SmartMaggot?",
                answers: [
                    { text: "Mengukur berat media maggot", score: 0 },
                    { text: "Mengukur suhu dan kelembaban udara", score: 10 },
                    { text: "Mendeteksi kehadiran maggot", score: 0 },
                    { text: "Mengukur pH media", score: 0 }
                ]
            },
            {
                question: "Berapa frekuensi pembaruan data sensor dalam sistem SmartMaggot?",
                answers: [
                    { text: "Setiap 30 menit", score: 0 },
                    { text: "Realtime / setiap detik", score: 10 },
                    { text: "Setiap jam", score: 0 },
                    { text: "Setiap hari", score: 0 }
                ]
            },
            {
                question: "Apa keuntungan monitoring realtime dalam budidaya maggot?",
                answers: [
                    { text: "Mengurangi biaya operasional", score: 10 },
                    { text: "Memudahkan pemanenan", score: 0 },
                    { text: "Mempercepat pertumbuhan maggot", score: 0 },
                    { text: "Tidak ada keuntungan khusus", score: 0 }
                ]
            },
            {
                question: "Sensor apa yang digunakan untuk mengukur kelembaban media maggot?",
                answers: [
                    { text: "DHT22", score: 0 },
                    { text: "Soil Moisture Sensor", score: 10 },
                    { text: "Light Sensor", score: 0 },
                    { text: "Motion Sensor", score: 0 }
                ]
            },
            {
                question: "Pada suhu berapa maggot tumbuh paling optimal?",
                answers: [
                    { text: "15-20°C", score: 0 },
                    { text: "25-30°C", score: 10 },
                    { text: "35-40°C", score: 0 },
                    { text: "10-15°C", score: 0 }
                ]
            },

            // Kontrol Otomatis
            {
                question: "Apa perbedaan antara mode AUTO dan MANUAL dalam SmartMaggot?",
                answers: [
                    { text: "AUTO: Pengguna mengontrol, MANUAL: Sensor mengontrol", score: 0 },
                    { text: "AUTO: Sensor mengontrol, MANUAL: Pengguna mengontrol", score: 10 },
                    { text: "Tidak ada perbedaan", score: 0 },
                    { text: "AUTO lebih cepat dari MANUAL", score: 0 }
                ]
            },
            {
                question: "Kapan kipas otomatis akan menyala dalam mode AUTO?",
                answers: [
                    { text: "Ketika suhu melebihi nilai yang ditentukan", score: 10 },
                    { text: "Setiap jam", score: 0 },
                    { text: "Ketika ada orang di dekat kandang", score: 0 },
                    { text: "Setiap hari pukul 12 siang", score: 0 }
                ]
            },
            {
                question: "Apa tujuan otomasi dalam sistem SmartMaggot?",
                answers: [
                    { text: "Menghemat tenaga kerja dan menjaga kondisi optimal", score: 10 },
                    { text: "Membuat maggot tumbuh lebih cepat", score: 0 },
                    { text: "Mengurangi biaya perangkat", score: 0 },
                    { text: "Menambah estetika kandang", score: 0 }
                ]
            },
            {
                question: "Berapa kelembaban ideal media untuk pertumbuhan maggot?",
                answers: [
                    { text: "30-40%", score: 0 },
                    { text: "60-70%", score: 10 },
                    { text: "80-90%", score: 0 },
                    { text: "20-30%", score: 0 }
                ]
            },
            {
                question: "Apa yang terjadi jika suhu kandang terlalu tinggi untuk maggot?",
                answers: [
                    { text: "Maggot bertumbuh lebih cepat", score: 0 },
                    { text: "Maggot dapat mati atau stres", score: 10 },
                    { text: "Tidak ada pengaruh", score: 0 },
                    { text: "Maggot menjadi lebih sehat", score: 0 }
                ]
            },

            // Dashboard & Analytics
            {
                question: "Informasi apa saja yang dapat dilihat di dashboard SmartMaggot?",
                answers: [
                    { text: "Hanya suhu saja", score: 0 },
                    { text: "Suhu, kelembaban, status kipas, dan grafik historis", score: 10 },
                    { text: "Hanya status kipas", score: 0 },
                    { text: "Tidak ada informasi detail", score: 0 }
                ]
            },
            {
                question: "Apa manfaat dari grafik tren data historis dalam SmartMaggot?",
                answers: [
                    { text: "Hanya untuk hiasan dashboard", score: 0 },
                    { text: "Menganalisis pola dan mengoptimalkan kondisi budidaya", score: 10 },
                    { text: "Mempercepat pertumbuhan maggot", score: 0 },
                    { text: "Mengurangi biaya listrik", score: 0 }
                ]
            },
            {
                question: "Berapa lama data historis biasanya disimpan dalam SmartMaggot?",
                answers: [
                    { text: "Hanya 1 hari", score: 0 },
                    { text: "Hingga beberapa bulan atau lebih", score: 10 },
                    { text: "Hanya 1 jam", score: 0 },
                    { text: "Data tidak disimpan", score: 0 }
                ]
            },
            {
                question: "Apa tujuan laporan berkala dari SmartMaggot?",
                answers: [
                    { text: "Hiasan kantor", score: 0 },
                    { text: "Evaluasi produktivitas dan identifikasi area perbaikan", score: 10 },
                    { text: "Tidak ada tujuan khusus", score: 0 },
                    { text: "Hanya untuk arsip", score: 0 }
                ]
            },
            {
                question: "Fitur apa yang membantu pengguna mengidentifikasi masalah dalam budidaya?",
                answers: [
                    { text: "Alert dan notifikasi otomatis", score: 10 },
                    { text: "Background warna dashboard", score: 0 },
                    { text: "Musik latar", score: 0 },
                    { text: "Animasi grafiknya", score: 0 }
                ]
            },

            // Penggunaan Praktis
            {
                question: "Bagaimana cara mengetahui apakah kandang maggot terlalu lembab?",
                answers: [
                    { text: "Dengan melihat dengan mata", score: 0 },
                    { text: "Melalui nilai sensor kelembaban di dashboard SmartMaggot", score: 10 },
                    { text: "Dengan merasakan teksturnya", score: 0 },
                    { text: "Tidak bisa diketahui", score: 0 }
                ]
            },
            {
                question: "Apa yang harus dilakukan jika SmartMaggot mendeteksi suhu terlalu rendah?",
                answers: [
                    { text: "Tunggu saja hingga naik", score: 0 },
                    { text: "Segera ambil tindakan berdasarkan alert sistem", score: 10 },
                    { text: "Abaikan peringatan", score: 0 },
                    { text: "Matikan sistem", score: 0 }
                ]
            },
            {
                question: "Kapan waktu terbaik untuk mengecek data sensor SmartMaggot?",
                answers: [
                    { text: "Hanya saat pagi hari", score: 0 },
                    { text: "Secara berkala sepanjang hari untuk monitoring berkelanjutan", score: 10 },
                    { text: "Hanya saat malam hari", score: 0 },
                    { text: "Tidak perlu dicek", score: 0 }
                ]
            },
            {
                question: "Bagaimana cara menyesuaikan parameter kontrol otomatis di SmartMaggot?",
                answers: [
                    { text: "Tidak bisa disesuaikan", score: 0 },
                    { text: "Melalui pengaturan di dashboard sesuai kebutuhan", score: 10 },
                    { text: "Dengan mengubah hardware fisik", score: 0 },
                    { text: "Hanya bisa dilakukan oleh teknisi", score: 0 }
                ]
            },
            {
                question: "Apa indikasi yang menunjukkan maggot tidak nyaman dengan kondisi kandang?",
                answers: [
                    { text: "Suhu dan kelembaban tidak optimal", score: 10 },
                    { text: "Tidak ada indikasi yang jelas", score: 0 },
                    { text: "Warna kandang berubah", score: 0 },
                    { text: "Ukuran kandang berubah", score: 0 }
                ]
            },

            // Keuntungan & Manfaat
            {
                question: "Apa keuntungan utama menggunakan SmartMaggot dibanding cara tradisional?",
                answers: [
                    { text: "Lebih murah", score: 0 },
                    { text: "Efisiensi, presisi, dan productivity yang lebih tinggi", score: 10 },
                    { text: "Lebih mudah dipelajari", score: 0 },
                    { text: "Tidak ada keuntungan", score: 0 }
                ]
            },
            {
                question: "Berapa presentase peningkatan produktivitas dengan SmartMaggot?",
                answers: [
                    { text: "10-20%", score: 0 },
                    { text: "Bisa mencapai 50% atau lebih dengan optimasi", score: 10 },
                    { text: "Tidak ada peningkatan", score: 0 },
                    { text: "Malah menurun", score: 0 }
                ]
            },
            {
                question: "Siapa yang paling memerlukan SmartMaggot?",
                answers: [
                    { text: "Hanya peternakan skala besar", score: 0 },
                    { text: "Skala apapun dari usaha rumahan hingga komersial", score: 10 },
                    { text: "Hanya pelajar", score: 0 },
                    { text: "Tidak ada yang memerlukan", score: 0 }
                ]
            },
            {
                question: "Bagaimana SmartMaggot membantu pembelajaran IoT?",
                answers: [
                    { text: "Tidak membantu", score: 0 },
                    { text: "Sebagai studi kasus praktis implementasi IoT dalam pertanian", score: 10 },
                    { text: "Hanya sebagai hiburan", score: 0 },
                    { text: "Membuat lebih bingung", score: 0 }
                ]
            },
            {
                question: "Apa dampak penggunaan SmartMaggot terhadap efisiensi energi?",
                answers: [
                    { text: "Meningkat karena kontrol otomatis yang lebih presisi", score: 10 },
                    { text: "Menurun drastis", score: 0 },
                    { text: "Tidak ada dampak", score: 0 },
                    { text: "Meningkat drastis", score: 0 }
                ]
            },

            // Troubleshooting & Support
            {
                question: "Apa yang harus dilakukan jika sensor tidak mengirimkan data?",
                answers: [
                    { text: "Tidak perlu dikhawatirkan", score: 0 },
                    { text: "Periksa koneksi, baterai, dan hubungi support", score: 10 },
                    { text: "Langsung beli sensor baru", score: 0 },
                    { text: "Abaikan masalah tersebut", score: 0 }
                ]
            },
            {
                question: "Bagaimana cara mengakses SmartMaggot dari mana saja?",
                answers: [
                    { text: "Hanya bisa dari kantor", score: 0 },
                    { text: "Melalui aplikasi web atau mobile dengan login", score: 10 },
                    { text: "Hanya lewat Bluetooth", score: 0 },
                    { text: "Tidak bisa diakses dari jarak jauh", score: 0 }
                ]
            },
            {
                question: "Apa yang dilakukan jika kipas rusak?",
                answers: [
                    { text: "Tunggu hingga perbaikan sendiri", score: 0 },
                    { text: "Switch ke mode MANUAL dan perbaiki segera", score: 10 },
                    { text: "Abaikan saja", score: 0 },
                    { text: "Berhenti budidaya", score: 0 }
                ]
            },
            {
                question: "Berapa waktu yang dibutuhkan untuk setup awal SmartMaggot?",
                answers: [
                    { text: "Lebih dari sebulan", score: 0 },
                    { text: "Hanya beberapa jam hingga beberapa hari", score: 10 },
                    { text: "Hanya 5 menit", score: 0 },
                    { text: "Sangat lama, berbulan-bulan", score: 0 }
                ]
            },
            {
                question: "Apakah SmartMaggot memerlukan koneksi internet terus-menerus?",
                answers: [
                    { text: "Tidak sama sekali", score: 0 },
                    { text: "Ya, untuk monitoring realtime dan sync data", score: 10 },
                    { text: "Hanya saat morning", score: 0 },
                    { text: "Hanya untuk login awal", score: 0 }
                ]
            }
        ];

        let questions = [...allQuestions].sort(() => Math.random() - 0.5).slice(0, 30);
        let currentQuestion = 0;
        let score = 0;
        let timer;
        let timeLeft = 7;

        document.getElementById("startQuiz").onclick = () => {
            document.getElementById("quizModal").classList.add("hidden");
            document.getElementById("quizContainer").classList.remove("hidden");
            loadQuestion();
        };

        function loadQuestion() {
            const q = questions[currentQuestion];
            document.getElementById("feedback").classList.add("hidden");
            document.getElementById("questionNumber").innerHTML = `Soal ${currentQuestion + 1}/30`;
            document.getElementById("questionText").innerHTML = q.question;

            let html = "";
            q.answers.forEach(answer => {
                html += `
                    <button
                        onclick="selectAnswer(${answer.score})"
                        class="w-full text-left px-6 py-4 rounded-2xl bg-gradient-to-r from-[#12557B] to-[#0F7A8C] text-white font-semibold transition hover:shadow-lg hover:scale-105 active:scale-95">
                        ${answer.text}
                    </button>
                `;
            });

            document.getElementById("answers").innerHTML = html;
            startTimer();
        }

        function startTimer() {
            clearInterval(timer);
            timeLeft = 7;

            timer = setInterval(() => {
                timeLeft--;
                document.getElementById("timer").innerText = timeLeft;
                document.getElementById("timeBar").style.width = (timeLeft / 7 * 100) + "%";

                if (timeLeft <= 0) {
                    clearInterval(timer);
                    const correctAnswer = questions[currentQuestion].answers.find(a => a.score === 10).text;
                    showFeedback(false, correctAnswer);
                }
            }, 1000);
        }

        function selectAnswer(scoreValue) {
            clearInterval(timer);
            const correctAnswer = questions[currentQuestion].answers.find(a => a.score === 10).text;

            if (scoreValue === 10) {
                score += 10;
                showFeedback(true, correctAnswer);
            } else {
                showFeedback(false, correctAnswer);
            }
        }

        function showFeedback(correct, answer) {
            const feedback = document.getElementById("feedback");
            feedback.classList.remove("hidden");

            if (correct) {
                feedback.innerHTML = `<div class="text-green-600 text-xl">✓ Jawaban Benar!</div>`;
            } else {
                feedback.innerHTML = `
                    <div class="text-red-600">
                        <div class="text-xl mb-2">✗ Jawaban Salah</div>
                        <div class="text-sm text-[#12557B]">Jawaban yang benar: ${answer}</div>
                    </div>
                `;
            }

            setTimeout(() => {
                currentQuestion++;
                if (currentQuestion >= questions.length) {
                    showResult();
                } else {
                    loadQuestion();
                }
            }, 3000);
        }

        function showResult() {
            let title = "";
            let icon = "";
            let message = "";
            let color = "";
            let iconClass = "";

            if (score < 100) {
                title = "Perlu Belajar Lebih Lanjut";
                icon = '<i class="fas fa-grimace"></i>';
                message = "Pelajari kembali tentang SmartMaggot untuk pemahaman yang lebih mendalam.";
                color = "text-orange-600";
                iconClass = "text-orange-500";
            } else if (score < 200) {
                title = "Lumayan Baik";
                icon = '<i class="fas fa-thumbs-up"></i>';
                message = "Kamu sudah memahami konsep dasar SmartMaggot dengan cukup baik.";
                color = "text-blue-600";
                iconClass = "text-blue-500";
            } else {
                title = "SmartMaggot Expert";
                icon = '<i class="fas fa-trophy"></i>';
                message = "Luar biasa! Kamu adalah ahli SmartMaggot dan siap menggunakannya.";
                color = "text-green-600";
                iconClass = "text-green-500";
            }

            document.getElementById("quizContainer").innerHTML = `
                <div class="bg-white rounded-3xl p-12 shadow-2xl max-w-2xl w-full text-center">
                    <div class="text-8xl mb-6 ${iconClass}">${icon}</div>
                    <div class="text-6xl font-black text-[#12557B] mb-4">${score}</div>
                    <p class="text-3xl font-bold ${color} mb-3">${title}</p>
                    <p class="text-gray-600 text-lg mb-10">${message}</p>
                    <button
                        onclick="location.reload()"
                        class="btn-primary text-white px-12 py-4 rounded-full font-bold text-lg shadow-lg hover:shadow-xl transition">
                        Main Lagi
                    </button>
                </div>
            `;
        }

        // Initialize AOS
        AOS.init({
            duration: 1000,
            once: true,
            offset: 100
        });
    </script>

</body>

</html>