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

            0%,
            100% {
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

    <!-- Learning Section -->
    <section class="py-24 bg-gradient-to-b from-[#F8FCFF] to-white relative overflow-hidden">

        <!-- Background Decoration -->
        <div class="absolute top-0 left-0 w-72 h-72 bg-blue-100 rounded-full blur-3xl opacity-40"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-cyan-100 rounded-full blur-3xl opacity-40"></div>

        <div class="max-w-5xl mx-auto px-6 relative z-10">

            <div class="bg-white rounded-[32px] shadow-xl border border-slate-100 p-10 lg:p-16">

                <!-- Badge -->
                <div class="flex justify-center mb-6">
                    <span
                        class="bg-[#12557B]/10 text-[#12557B] px-5 py-2 rounded-full text-sm font-bold tracking-wide">
                        MODUL PEMBELAJARAN
                    </span>
                </div>

                <!-- Icon -->
                <div class="flex justify-center mb-8">
                    <div
                        class="w-24 h-24 rounded-full bg-gradient-to-br from-[#12557B] to-[#0F7A8C] flex items-center justify-center shadow-lg">

                        <i class="fas fa-book-open text-white text-4xl"></i>

                    </div>
                </div>

                <!-- Title -->
                <h2
                    class="text-4xl lg:text-6xl font-black text-[#12557B] text-center leading-tight mb-6">
                    Belajar Maggot &
                    <span class="text-[#0F7A8C]">
                        SmartMaggot
                    </span>
                </h2>

                <!-- Description -->
                <p
                    class="text-gray-600 text-lg lg:text-xl text-center max-w-3xl mx-auto leading-relaxed mb-12">
                    Pelajari terlebih dahulu dasar-dasar budidaya maggot,
                    manfaatnya bagi lingkungan, serta bagaimana
                    <strong>SmartMaggot</strong> membantu proses monitoring
                    secara otomatis menggunakan teknologi IoT.
                </p>

                <!-- Features -->
                <div class="grid md:grid-cols-3 gap-5 mb-12">

                    <div
                        class="bg-slate-50 rounded-2xl p-5 text-center border border-slate-100">

                        <i class="fas fa-graduation-cap text-3xl text-[#12557B] mb-3"></i>

                        <h4 class="font-bold text-[#12557B]">
                            Materi Dasar
                        </h4>

                        <p class="text-sm text-gray-500 mt-2">
                            Kenali konsep dasar budidaya maggot.
                        </p>
                    </div>

                    <div
                        class="bg-slate-50 rounded-2xl p-5 text-center border border-slate-100">

                        <i class="fas fa-lightbulb text-3xl text-yellow-500 mb-3"></i>

                        <h4 class="font-bold text-[#12557B]">
                            Solusi SmartMaggot
                        </h4>

                        <p class="text-sm text-gray-500 mt-2">
                            Pahami manfaat teknologi IoT dalam budidaya.
                        </p>
                    </div>

                    <div
                        class="bg-slate-50 rounded-2xl p-5 text-center border border-slate-100">

                        <i class="fas fa-award text-3xl text-green-500 mb-3"></i>

                        <h4 class="font-bold text-[#12557B]">
                            Quiz Interaktif
                        </h4>

                        <p class="text-sm text-gray-500 mt-2">
                            Uji pemahamanmu setelah belajar.
                        </p>
                    </div>

                </div>

                <!-- Button -->
                <div class="text-center">

                    <button
                        onclick="document.getElementById('moduleModal').classList.remove('hidden')"
                        class="group bg-gradient-to-r from-[#12557B] to-[#0F7A8C] hover:scale-105 transition duration-300 text-white px-12 py-5 rounded-full font-bold text-lg shadow-xl">

                        <i class="fas fa-book-reader mr-2"></i>
                        Mulai Belajar

                    </button>

                </div>

            </div>

        </div>

    </section>

    <!-- Learning Module Modal -->
    <div id="moduleModal"
        class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">

        <div class="bg-white rounded-3xl p-10 max-w-3xl w-full shadow-2xl">

            <button
                onclick="document.getElementById('moduleModal').classList.add('hidden')"
                class="absolute top-5 right-5 w-10 h-10 flex items-center justify-center rounded-full bg-gray-100 hover:bg-red-100 text-gray-500 hover:text-red-500 transition">

                <i class="fas fa-times"></i>

            </button>

            <!-- Progress -->
            <div class="mb-8">
                <div class="flex justify-between items-center mb-2">
                    <span class="font-bold text-[#12557B]">Modul Pembelajaran</span>
                    <span id="modulePage" class="text-sm text-gray-500">1 / 7</span>
                </div>

                <div class="w-full h-3 bg-gray-200 rounded-full overflow-hidden">
                    <div id="moduleProgress"
                        class="h-full bg-gradient-to-r from-[#12557B] to-[#0F7A8C]"
                        style="width:14%">
                    </div>
                </div>
            </div>

            <div class="text-center">
                <div class="text-6xl mb-6" id="moduleIcon">🐛</div>

                <h2 id="moduleTitle"
                    class="text-4xl font-black text-[#12557B] mb-6">
                </h2>

                <p id="moduleContent"
                    class="text-lg text-gray-700 leading-relaxed min-h-[180px]">
                </p>
            </div>

            <div class="flex justify-between mt-10">
                <button id="prevModule"
                    class="px-6 py-3 rounded-full border border-gray-300 text-gray-600 hidden">
                    Sebelumnya
                </button>

                <button id="nextModule"
                    class="btn-primary text-white px-8 py-3 rounded-full ml-auto">
                    Selanjutnya
                </button>
            </div>
        </div>
    </div>

    <!-- Quiz Modal -->
    <div id="quizModal" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
        <div class="bg-white rounded-3xl p-10 max-w-md w-full shadow-2xl" data-aos="zoom-in">
            <h2 class="text-4xl font-black text-[#12557B] mb-6">
                Quiz SmartMaggot
            </h2>

            <ul class="space-y-4 text-gray-700 mb-10">
                <li class="flex items-center gap-3">
                    <span class="text-2xl text-blue-500"><i class="fas fa-list"></i></span>
                    <span class="font-semibold">10 Pertanyaan</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-2xl text-orange-500"><i class="fas fa-hourglass-end"></i></span>
                    <span class="font-semibold">7 Detik per soal</span>
                </li>
                <li class="flex items-center gap-3">
                    <span class="text-2xl text-yellow-500"><i class="fas fa-star"></i></span>
                    <span class="font-semibold">Maksimal skor 100</span>
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
        const modules = [{
                icon: '<img src="/images/maggot.png" class="w-20 h-20 mx-auto">',
                title: "Apa Itu Maggot?",
                content: `
    Maggot adalah larva dari lalat Black Soldier Fly (BSF).
    Maggot mampu menguraikan sampah organik dan mengubahnya menjadi
    sumber protein tinggi yang dapat dimanfaatkan sebagai pakan ternak
    maupun ikan.
    `
            },
            {
                icon: '<i class="fas fa-recycle text-green-600"></i>',
                title: "Manfaat Maggot",
                content: `
    Maggot membantu mengurangi limbah organik, menghasilkan pakan
    berkualitas tinggi, ramah lingkungan, dan memiliki nilai ekonomi
    yang cukup besar bagi peternak.
    `
            },
            {
                icon: '<i class="fas fa-temperature-half text-red-500"></i>',
                title: "Kondisi Ideal Budidaya",
                content: `
    Maggot tumbuh optimal pada suhu 25-30°C dan kelembaban
    60-70%. Jika kondisi terlalu panas atau terlalu kering,
    pertumbuhan maggot dapat terganggu.
    `
            },
            {
                icon: '<i class="fas fa-triangle-exclamation text-yellow-500"></i>',
                title: "Permasalahan Budidaya",
                content: `
    Banyak peternak masih melakukan monitoring secara manual.
    Akibatnya perubahan suhu dan kelembaban sering terlambat
    diketahui sehingga mempengaruhi pertumbuhan maggot.
    `
            },
            {
                icon: '<i class="fas fa-mobile-screen-button text-blue-500"></i>',
                title: "Apa Itu SmartMaggot?",
                content: `
    SmartMaggot adalah sistem berbasis Internet of Things (IoT)
    yang dapat memantau kondisi kandang maggot secara realtime
    melalui dashboard digital.
    `
            },
            {
                icon: '<i class="fas fa-rocket text-purple-500"></i>',
                title: "Mengapa SmartMaggot Dibuat?",
                content: `
    SmartMaggot dibuat untuk membantu peternak melakukan monitoring
    otomatis, mendeteksi masalah lebih cepat, dan menjaga kondisi
    kandang tetap optimal.
    `
            },
            {
                icon: '<i class="fas fa-chart-line text-cyan-500"></i>',
                title: "Fitur SmartMaggot",
                content: `
    SmartMaggot memiliki fitur monitoring suhu, monitoring
    kelembaban, notifikasi otomatis, dashboard interaktif,
    serta kontrol perangkat secara otomatis.
    `
            }
        ];


        let currentModule = 0;

        function showModule(index) {
            document.getElementById("moduleIcon").innerHTML =
                modules[index].icon;

            document.getElementById("moduleTitle").innerHTML =
                modules[index].title;

            document.getElementById("moduleContent").innerHTML =
                modules[index].content;

            document.getElementById("modulePage").innerHTML =
                `${index + 1} / ${modules.length}`;

            document.getElementById("moduleProgress").style.width =
                `${((index + 1) / modules.length) * 100}%`;

            document.getElementById("prevModule").classList.toggle(
                "hidden",
                index === 0
            );

            if (index === modules.length - 1) {
                document.getElementById("nextModule").innerHTML =
                    "Mulai Quiz";
            } else {
                document.getElementById("nextModule").innerHTML =
                    "Selanjutnya";
            }
        }

        document.querySelector('[onclick*="moduleModal"]').addEventListener("click", () => {
            currentModule = 0;
            showModule(currentModule);
        });

        document.getElementById("prevModule").addEventListener("click", () => {
            currentModule--;
            showModule(currentModule);
        });

        document.getElementById("nextModule").addEventListener("click", () => {

            if (currentModule < modules.length - 1) {
                currentModule++;
                showModule(currentModule);
            } else {
                document.getElementById("moduleModal")
                    .classList.add("hidden");

                document.getElementById("quizModal")
                    .classList.remove("hidden");
            }
        });


        // Quiz Data - 30 Pertanyaan tentang Penggunaan SmartMaggot
        const allQuestions = [{
                question: "Apa yang dimaksud dengan maggot?",
                answers: [{
                        text: "Larva dari lalat BSF",
                        score: 10
                    },
                    {
                        text: "Jenis cacing tanah",
                        score: 0
                    },
                    {
                        text: "Bibit tanaman",
                        score: 0
                    },
                    {
                        text: "Pakan ikan buatan",
                        score: 0
                    }
                ]
            },
            {
                question: "Salah satu manfaat utama maggot adalah...",
                answers: [{
                        text: "Menghasilkan sampah organik",
                        score: 0
                    },
                    {
                        text: "Mengurangi limbah organik",
                        score: 10
                    },
                    {
                        text: "Membunuh tanaman",
                        score: 0
                    },
                    {
                        text: "Meningkatkan polusi",
                        score: 0
                    }
                ]
            },
            {
                question: "Maggot berasal dari siklus hidup...",
                answers: [{
                        text: "Ayam",
                        score: 0
                    },
                    {
                        text: "Ikan",
                        score: 0
                    },
                    {
                        text: "Lalat Black Soldier Fly",
                        score: 10
                    },
                    {
                        text: "Belalang",
                        score: 0
                    }
                ]
            },
            {
                question: "Suhu yang ideal untuk pertumbuhan maggot adalah...",
                answers: [{
                        text: "10-15°C",
                        score: 0
                    },
                    {
                        text: "15-20°C",
                        score: 0
                    },
                    {
                        text: "25-30°C",
                        score: 10
                    },
                    {
                        text: "40-45°C",
                        score: 0
                    }
                ]
            },
            {
                question: "Kelembaban yang baik untuk budidaya maggot adalah...",
                answers: [{
                        text: "20-30%",
                        score: 0
                    },
                    {
                        text: "40-50%",
                        score: 0
                    },
                    {
                        text: "60-70%",
                        score: 10
                    },
                    {
                        text: "90-100%",
                        score: 0
                    }
                ]
            },
            {
                question: "Apa yang dapat terjadi jika suhu kandang terlalu tinggi?",
                answers: [{
                        text: "Maggot menjadi lebih sehat",
                        score: 0
                    },
                    {
                        text: "Maggot dapat stres atau mati",
                        score: 10
                    },
                    {
                        text: "Tidak berpengaruh",
                        score: 0
                    },
                    {
                        text: "Maggot bertelur",
                        score: 0
                    }
                ]
            },
            {
                question: "Apa tujuan utama budidaya maggot?",
                answers: [{
                        text: "Menghasilkan sumber protein dan mengolah limbah",
                        score: 10
                    },
                    {
                        text: "Menghasilkan plastik",
                        score: 0
                    },
                    {
                        text: "Membuat pupuk kimia",
                        score: 0
                    },
                    {
                        text: "Membuat bahan bakar",
                        score: 0
                    }
                ]
            },
            {
                question: "Mengapa kondisi kandang perlu dipantau secara rutin?",
                answers: [{
                        text: "Agar pertumbuhan maggot tetap optimal",
                        score: 10
                    },
                    {
                        text: "Agar kandang terlihat bagus",
                        score: 0
                    },
                    {
                        text: "Tidak ada alasan khusus",
                        score: 0
                    },
                    {
                        text: "Hanya untuk membersihkan kandang",
                        score: 0
                    }
                ]
            },
            {
                question: "Apa itu SmartMaggot?",
                answers: [{
                        text: "Jenis maggot baru",
                        score: 0
                    },
                    {
                        text: "Sistem monitoring budidaya maggot berbasis IoT",
                        score: 10
                    },
                    {
                        text: "Pakan untuk maggot",
                        score: 0
                    },
                    {
                        text: "Mesin pencacah sampah",
                        score: 0
                    }
                ]
            },
            {
                question: "Mengapa SmartMaggot dibuat?",
                answers: [{
                        text: "Untuk menggantikan maggot",
                        score: 0
                    },
                    {
                        text: "Untuk membantu monitoring kandang secara otomatis",
                        score: 10
                    },
                    {
                        text: "Untuk mengurangi jumlah maggot",
                        score: 0
                    },
                    {
                        text: "Untuk membuat kandang lebih besar",
                        score: 0
                    }
                ]
            },
            {
                question: "Apa keuntungan monitoring realtime?",
                answers: [{
                        text: "Masalah dapat diketahui lebih cepat",
                        score: 10
                    },
                    {
                        text: "Membuat maggot langsung besar",
                        score: 0
                    },
                    {
                        text: "Tidak ada manfaat",
                        score: 0
                    },
                    {
                        text: "Mengurangi jumlah maggot",
                        score: 0
                    }
                ]
            },
            {
                question: "Sensor pada SmartMaggot digunakan untuk...",
                answers: [{
                        text: "Menghias kandang",
                        score: 0
                    },
                    {
                        text: "Mengukur kondisi lingkungan kandang",
                        score: 10
                    },
                    {
                        text: "Memberi makan maggot",
                        score: 0
                    },
                    {
                        text: "Menjual maggot",
                        score: 0
                    }
                ]
            },
            {
                question: "Data sensor dapat dilihat melalui...",
                answers: [{
                        text: "Dashboard SmartMaggot",
                        score: 10
                    },
                    {
                        text: "Kertas catatan",
                        score: 0
                    },
                    {
                        text: "Televisi",
                        score: 0
                    },
                    {
                        text: "Radio",
                        score: 0
                    }
                ]
            },
            {
                question: "Apa manfaat notifikasi pada SmartMaggot?",
                answers: [{
                        text: "Memberi peringatan saat kondisi tidak normal",
                        score: 10
                    },
                    {
                        text: "Menambah warna dashboard",
                        score: 0
                    },
                    {
                        text: "Mengganti sensor",
                        score: 0
                    },
                    {
                        text: "Memperbesar kandang",
                        score: 0
                    }
                ]
            },
            {
                question: "Keuntungan utama SmartMaggot adalah...",
                answers: [{
                        text: "Monitoring lebih mudah, cepat, dan akurat",
                        score: 10
                    },
                    {
                        text: "Mengurangi jumlah sensor",
                        score: 0
                    },
                    {
                        text: "Menghilangkan kebutuhan pakan",
                        score: 0
                    },
                    {
                        text: "Mengganti peternak",
                        score: 0
                    }
                ]
            }
        ];

        let questions = [...allQuestions].sort(() => Math.random() - 0.5).slice(0, 10);
        let currentQuestion = 0;
        let score = 0;
        let timer;
        let timeLeft = 5;

        document.getElementById("startQuiz").onclick = () => {
            document.getElementById("quizModal").classList.add("hidden");
            document.getElementById("quizContainer").classList.remove("hidden");
            loadQuestion();
        };

        function loadQuestion() {
            const q = questions[currentQuestion];
            document.getElementById("feedback").classList.add("hidden");
            document.getElementById("questionNumber").innerHTML = `Soal ${currentQuestion + 1}/10`;
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
            timeLeft = 5;

            timer = setInterval(() => {
                timeLeft--;
                document.getElementById("timer").innerText = timeLeft;
                document.getElementById("timeBar").style.width = (timeLeft / 5 * 100) + "%";

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
            }, 2000);
        }

        function showResult() {
            let title = "";
            let icon = "";
            let message = "";
            let color = "";
            let iconClass = "";

           if (score <= 50) {
                title = "Perlu Belajar Lebih Lanjut";
                icon = `
                    <img src="/images/maggot2.png" class="w-24 h-24 mx-auto mb-3">
                `;
                message = "Pelajari kembali materi Maggot dan SmartMaggot agar pemahamanmu semakin baik.";
                color = "text-orange-600";
                iconClass = "text-orange-500";

            } else if (score <= 80) {
                title = "Lumayan Baik";
                icon = `
                    <img src="/images/maggot3.png" class="w-24 h-24 mx-auto mb-3">
                `;
                message = "Kamu sudah memahami konsep dasar SmartMaggot dengan cukup baik. Terus tingkatkan pengetahuanmu!";
                color = "text-blue-600";
                iconClass = "text-blue-500";

            } else {
                title = "SmartMaggot Expert";
                icon = `
                    <img src="/images/maggot.png" class="w-24 h-24 mx-auto mb-3">
                `;
                message = "Luar biasa! Kamu memahami materi Maggot dan SmartMaggot dengan sangat baik.";
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