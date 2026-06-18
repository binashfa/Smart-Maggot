<!DOCTYPE html>

<html>

<head>
    <style>
        body {
            font-family: sans-serif;
            color: #333;
            line-height: 1.6;
            padding: 20px;
        }

    .header {
        text-align: center;
        margin-bottom: 25px;
    }

    .title {
        color: #12557B;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 5px;
    }

    .period {
        color: #666;
        font-size: 12px;
    }

    .section {
        margin-top: 25px;
    }

    .section-title {
        background: #12557B;
        color: white;
        padding: 8px 12px;
        font-size: 14px;
        font-weight: bold;
        border-radius: 4px;
    }

    .summary-box {
        margin-top: 10px;
        border: 1px solid #ddd;
        border-radius: 6px;
        padding: 15px;
    }

    .summary-item {
        margin-bottom: 8px;
    }

    .highlight {
        color: #10828D;
        font-weight: bold;
    }

    .footer {
        margin-top: 30px;
        font-size: 11px;
        color: #777;
        text-align: center;
    }
</style>

</head>

<body>
<div class="header">

    <div class="title">
        LAPORAN MONITORING SMARTMAGGOT
    </div>

    <div class="period">
        Periode :
        {{ now()->subDays(7)->format('d M Y') }}
        -
        {{ now()->format('d M Y') }}
    </div>

</div>

<div class="section">

    <div class="section-title">
        Ringkasan Monitoring
    </div>

    <div class="summary-box">

        <div class="summary-item">
            Total Data Terekam :
            <span class="highlight">
                {{ $sensorLogs->count() }}
            </span>
            data
        </div>

        <div class="summary-item">
            Rata-rata Suhu :
            <span class="highlight">
                {{ $avgTemperature }} °C
            </span>
        </div>

        <div class="summary-item">
            Rata-rata Kelembapan Udara :
            <span class="highlight">
                {{ $avgHumidity }} %
            </span>
        </div>

        <div class="summary-item">
            Rata-rata Kelembapan Media :
            <span class="highlight">
                {{ $avgMedia }} %
            </span>
        </div>

        <div class="summary-item">
            Suhu Tertinggi :
            <span class="highlight">
                {{ $maxTemperature }} °C
            </span>
        </div>

        <div class="summary-item">
            Suhu Terendah :
            <span class="highlight">
                {{ $minTemperature }} °C
            </span>
        </div>

        <div class="summary-item">
            Humidity Tertinggi :
            <span class="highlight">
                {{ $maxHumidity }} %
            </span>
        </div>

        <div class="summary-item">
            Humidity Terendah :
            <span class="highlight">
                {{ $minHumidity }} %
            </span>
        </div>

    </div>

</div>

<div class="section">

    <div class="section-title">
        Analisis Kondisi Kandang
    </div>

    <div class="summary-box">

        <p>
            Berdasarkan hasil monitoring selama 7 hari terakhir,
            sistem SmartMaggot mencatat rata-rata suhu sebesar
            <strong>{{ $avgTemperature }}°C</strong>,
            kelembapan udara sebesar
            <strong>{{ $avgHumidity }}%</strong>,
            dan kelembapan media sebesar
            <strong>{{ $avgMedia }}%</strong>.
        </p>

        <p>
            Nilai tersebut menunjukkan bahwa kondisi lingkungan
            budidaya berada pada rentang yang stabil dan dapat
            mendukung pertumbuhan larva Black Soldier Fly (BSF).
        </p>

    </div>

</div>

<div class="section">

    <div class="section-title">
        Kesimpulan
    </div>

    <div class="summary-box">

        <ol>
            <li>
                Sistem SmartMaggot berhasil melakukan monitoring
                kondisi kandang secara realtime selama periode pengamatan.
            </li>

            <li>
                Rata-rata suhu dan kelembapan berada pada kondisi
                yang mendukung pertumbuhan maggot.
            </li>

            <li>
                Tidak ditemukan perubahan lingkungan yang ekstrem
                berdasarkan data monitoring yang direkam.
            </li>

            <li>
                Sistem monitoring dapat digunakan sebagai alat bantu
                pengambilan keputusan dalam budidaya maggot.
            </li>
        </ol>

    </div>

</div>

<div class="footer">

    Laporan dibuat otomatis oleh Sistem SmartMaggot<br>
    Dicetak pada {{ now()->format('d M Y H:i:s') }}

</div>

</body>

</html>
