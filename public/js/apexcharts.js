/**
 * public/js/page/apexcharts.js
 * File ini berisi kode JavaScript untuk menginisialisasi
 * contoh-contoh grafik di halaman dokumentasi ApexCharts.
 */
// Mengimpor tema dari file apexcharts-theme.js
// Pastikan path ini benar relatif terhadap file yang mengimpornya.
// Jika apexcharts.js dan apexcharts-theme.js berada di direktori yang sama (public/js/),
// maka gunakan './apexcharts-theme.js'.
import { chartTheme } from '../js/apexcharts-theme.js'; // PERBAIKAN PATH IMPOR

// Fungsi-fungsi helper untuk menghasilkan data grafik
function generateDayWiseTimeSeries(baseval, count, yrange) {
    let i = 0;
    let series = [];
    while (i < count) {
        let x = baseval;
        let y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
        series.push([x, y]);
        baseval += 86400000; // Tambah 1 hari
        i++;
    }
    return series;
}

function generateData(count, yrange) {
    let i = 0;
    let series = [];
    while (i < count) {
        let x = 'w' + (i + 1).toString();
        let y = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
        series.push({ x: x, y: y });
        i++;
    }
    return series;
}

function generateCandlestickData(count) {
    let data = [];
    let baseval = new Date('11/01/2023').getTime();
    let i = 0;
    while (i < count) {
        let open = Math.random() * (100 - 50) + 50;
        let high = open + Math.random() * 20;
        let low = open - Math.random() * 20;
        let close = Math.random() * (high - low) + low;

        data.push({
            x: new Date(baseval),
            y: [open, high, low, close].map(val => parseFloat(val.toFixed(2)))
        });
        baseval += 86400000; // Tambah 1 hari
        i++;
    }
    return data;
}

function generateBoxPlotData(count) {
    let data = [];
    for (let i = 0; i < count; i++) {
        const min = Math.floor(Math.random() * 20) + 10;
        const q1 = Math.floor(Math.random() * 20) + min + 5;
        const median = Math.floor(Math.random() * 20) + q1 + 5;
        const q3 = Math.floor(Math.random() * 20) + median + 5;
        const max = Math.floor(Math.random() * 20) + q3 + 5;
        data.push({
            x: `Kategori ${i + 1}`,
            y: [min, q1, median, q3, max]
        });
    }
    return data;
}

function generateBubbleData(count, min, max) {
    let data = [];
    for (let i = 0; i < count; i++) {
        data.push([
            Math.floor(Math.random() * 70) + 1, // X
            Math.floor(Math.random() * (max - min + 1)) + min, // Y
            Math.floor(Math.random() * 50) + 10 // Z (size)
        ]);
    }
    return data;
}

function generateRangeBarData(count) {
    let data = [];
    let baseval = new Date('01/01/2024').getTime();
    for (let i = 0; i < count; i++) {
        let start = baseval + Math.floor(Math.random() * 10) * 86400000;
        let end = start + Math.floor(Math.random() * 5) * 86400000 + 3600000; // Tambah 1 jam
        data.push({
            x: `Tugas ${i + 1}`,
            y: [start, end]
        });
    }
    return data;
}

// Fungsi tambahan untuk Range Area Chart
function generateRangeAreaData(count, yrange) {
    let data = [];
    let baseval = new Date('01/01/2024').getTime();
    for (let i = 0; i < count; i++) {
        let low = Math.floor(Math.random() * (yrange.max - yrange.min + 1)) + yrange.min;
        let high = low + Math.floor(Math.random() * 20) + 5; // Rentang 5-25 di atas 'low'
        data.push({
            x: baseval,
            y: [low, high]
        });
        baseval += 86400000; // Tambah 1 hari
    }
    return data;
}

// Fungsi tambahan untuk Slope Chart
function generateSlopeData(categories, startYear, endYear, minVal, maxVal) {
    let series = [];
    categories.forEach(category => {
        const startValue = Math.floor(Math.random() * (maxVal - minVal + 1)) + minVal;
        const endValue = Math.floor(Math.random() * (maxVal - minVal + 1)) + minVal;
        series.push({
            name: category,
            data: [
                { x: startYear.toString(), y: startValue },
                { x: endYear.toString(), y: endValue }
            ]
        });
    });
    return series;
}


document.addEventListener('DOMContentLoaded', () => {

    /**
     * Fungsi untuk merender contoh grafik Pendapatan Bulanan.
     */
    const renderContohPendapatanChart = () => {
        const chartContainer = document.querySelector("#chart-pendapatan-bulanan");

        // Jangan jalankan jika elemen tidak ditemukan di halaman
        if (!chartContainer) {
            return;
        }

        // 1. Opsi Konfigurasi Grafik
        // Menggabungkan tema area dengan opsi spesifik grafik ini
        const options = {
            ...chartTheme.area, // Terapkan tema area
            // Data yang akan ditampilkan
            series: [{
                name: 'Pendapatan (Juta Rp)',
                data: [120, 155, 130, 180, 160, 210, 240, 220, 250, 280, 310, 300]
            }],
            // Pengaturan umum grafik (akan menimpa properti dari tema jika didefinisikan di sini)
            chart: {
                ...chartTheme.area.chart, // Gabungkan pengaturan chart dari tema
                height: 350,
                type: 'area', // Tipe area untuk tampilan yang lebih menarik
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            // Pengaturan warna (dihapus karena sudah diatur oleh tema)
            // dataLabels, stroke, xaxis, yaxis, tooltip, fill akan diwarisi atau ditimpa sesuai kebutuhan
            dataLabels: {
                enabled: false // Sembunyikan label di atas titik data (menimpa tema jika tema mengaktifkannya)
            },
            // Pengaturan garis (akan diwarisi dari tema jika tidak didefinisikan di sini)
            stroke: {
                ...chartTheme.area.stroke, // Gabungkan pengaturan stroke dari tema
                curve: 'smooth', // Buat garis menjadi lebih halus
                width: 2
            },
            // Pengaturan sumbu X (horizontal)
            xaxis: {
                ...chartTheme.area.xaxis, // Gabungkan pengaturan xaxis dari tema
                categories: [
                    'Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun',
                    'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'
                ],
                title: {
                    text: 'Bulan'
                }
            },
            // Pengaturan sumbu Y (vertikal)
            yaxis: {
                ...chartTheme.area.yaxis, // Gabungkan pengaturan yaxis dari tema
                title: {
                    text: 'Pendapatan (Juta Rp)'
                }
            },
            // Pengaturan tooltip saat hover
            tooltip: {
                ...chartTheme.area.tooltip, // Gabungkan pengaturan tooltip dari tema
                x: {
                    format: 'MMMM' // Tampilkan nama bulan lengkap
                },
                y: {
                    formatter: function (val) {
                        return "Rp " + val + " Juta"
                    }
                }
            },
            // Pengaturan fill (area di bawah garis)
            fill: {
                ...chartTheme.area.fill, // Gabungkan pengaturan fill dari tema
                type: 'gradient',
                gradient: {
                    shadeIntensity: 1,
                    opacityFrom: 0.7,
                    opacityTo: 0.2,
                    stops: [0, 90, 100]
                }
            }
        };

        // 2. Buat instance baru dari ApexCharts
        const chart = new ApexCharts(chartContainer, options);

        // 3. Render grafik ke dalam elemen div
        chart.render();
    };


    /**
     * Fungsi untuk merender contoh grafik Anda.
     * Anda bisa meniru struktur fungsi di atas untuk membuat grafik Anda sendiri.
     */
    const renderContohAndaChart = () => {
        const chartContainer = document.querySelector("#chart-contoh-anda");
        if (!chartContainer) return;

        // --- MULAI KODE ANDA DI SINI ---
        // Contoh: Membuat grafik donat sederhana
        // Menggabungkan tema donut dengan opsi spesifik grafik ini
        const options = {
            ...chartTheme.donut, // Terapkan tema donut
            series: [44, 55, 13, 33],
            labels: ['Tim A', 'Tim B', 'Tim C', 'Tim D'],
            chart: {
                ...chartTheme.donut.chart, // Gabungkan pengaturan chart dari tema
                type: 'donut',
                height: 250
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };

        const chart = new ApexCharts(chartContainer, options);
        chart.render();
        // --- AKHIR KODE ANDA ---
    };

    /**
     * Fungsi untuk merender Line Chart (Contoh Baru: Suhu Rata-rata).
     */
    const renderLineChartNew = () => {
        const chartContainer = document.querySelector("#lineChartNew");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.line,
            series: [{
                name: "Suhu (°C)",
                data: [25, 26, 27, 26, 28, 29, 27, 25, 26, 28, 29, 30]
            }],
            chart: {
                ...chartTheme.line.chart,
                height: 350,
                type: 'line',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            xaxis: {
                ...chartTheme.line.xaxis,
                categories: ['Jan', 'Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt', 'Nov', 'Des'],
                title: {
                    text: 'Bulan'
                }
            },
            yaxis: {
                ...chartTheme.line.yaxis,
                title: {
                    text: 'Suhu Rata-rata'
                }
            },
            tooltip: {
                ...chartTheme.line.tooltip,
                y: {
                    formatter: function (val) {
                        return val + " °C";
                    }
                }
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Column Chart (Penjualan Produk).
     */
    const renderColumnChart = () => {
        const chartContainer = document.querySelector("#columnChart");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.bar, // Column chart menggunakan tema bar secara default
            series: [{
                name: 'Penjualan',
                data: [76, 85, 101, 98, 87, 105, 91, 114, 94]
            }],
            chart: {
                ...chartTheme.bar.chart,
                height: 350,
                type: 'bar',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            plotOptions: {
                bar: {
                    horizontal: false, // Column chart adalah vertikal
                    columnWidth: '55%',
                    borderRadius: 5,
                },
            },
            dataLabels: {
                enabled: false // Biasanya tidak menampilkan data label di column chart
            },
            xaxis: {
                ...chartTheme.bar.xaxis,
                categories: ['Feb', 'Mar', 'Apr', 'Mei', 'Jun', 'Jul', 'Agu', 'Sep', 'Okt'],
                title: {
                    text: 'Bulan'
                }
            },
            yaxis: {
                ...chartTheme.bar.yaxis,
                title: {
                    text: 'Jumlah Penjualan'
                }
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Bar Chart (Contoh Baru: Survei Kepuasan).
     */
    const renderBarChartNew = () => {
        const chartContainer = document.querySelector("#barChartNew");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.bar,
            series: [{
                name: 'Tingkat Kepuasan',
                data: [85, 90, 78, 92, 88]
            }],
            chart: {
                ...chartTheme.bar.chart,
                height: 350,
                type: 'bar',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            plotOptions: {
                bar: {
                    horizontal: true, // Bar chart horizontal
                    columnWidth: '70%',
                    borderRadius: 5,
                },
            },
            dataLabels: {
                enabled: true, // Tampilkan data label
                formatter: function (val) {
                    return val + "%";
                }
            },
            xaxis: {
                ...chartTheme.bar.xaxis,
                categories: ['Sangat Puas', 'Puas', 'Cukup Puas', 'Kurang Puas', 'Tidak Puas'],
                title: {
                    text: 'Tingkat Kepuasan (%)'
                }
            },
            yaxis: {
                ...chartTheme.bar.yaxis,
                title: {
                    text: 'Kategori'
                }
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Mixed Chart (Penjualan & Laba).
     */
    const renderMixedChart = () => {
        const chartContainer = document.querySelector("#mixedChart");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.line, // Menggunakan tema line sebagai dasar
            series: [{
                name: 'Penjualan',
                type: 'column',
                data: [23, 11, 22, 27, 13, 22, 37, 21, 44, 22, 30, 18]
            }, {
                name: 'Laba',
                type: 'line',
                data: [30, 25, 36, 30, 45, 35, 64, 52, 59, 36, 39, 51]
            }],
            chart: {
                ...chartTheme.line.chart,
                height: 350,
                type: 'line', // Tipe utama
                stacked: false,
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            stroke: {
                ...chartTheme.line.stroke,
                width: [0, 2] // Lebar stroke untuk column dan line
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%'
                }
            },
            fill: {
                opacity: [0.85, 1],
                gradient: {
                    inverseColors: false,
                    shade: 'light',
                    type: "vertical",
                    opacityFrom: 0.85,
                    opacityTo: 0.55,
                    stops: [0, 100, 100, 100]
                }
            },
            labels: ['01/01/2003', '02/01/2003', '03/01/2003', '04/01/2003', '05/01/2003', '06/01/2003', '07/01/2003', '08/01/2003', '09/01/2003', '10/01/2003', '11/01/2003', '12/01/2003'],
            xaxis: {
                ...chartTheme.line.xaxis,
                type: 'datetime'
            },
            yaxis: {
                ...chartTheme.line.yaxis,
                title: {
                    text: 'Jumlah'
                },
                min: 0
            },
            tooltip: {
                ...chartTheme.line.tooltip,
                shared: true,
                intersect: false,
                y: {
                    formatter: function (y) {
                        if (typeof y !== "undefined") {
                            return y.toFixed(0) + " unit";
                        }
                        return y;
                    }
                }
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Range Area Chart (Rentang Harga Saham).
     */
    const renderRangeAreaChart = () => {
        const chartContainer = document.querySelector("#rangeAreaChart");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.area, // Menggunakan tema area sebagai dasar
            series: [{
                name: 'Rentang Harga',
                data: generateRangeAreaData(30, { min: 100, max: 200 })
            }],
            chart: {
                ...chartTheme.area.chart,
                height: 350,
                type: 'rangeArea',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            xaxis: {
                ...chartTheme.area.xaxis,
                type: 'datetime',
                title: {
                    text: 'Tanggal'
                }
            },
            yaxis: {
                ...chartTheme.area.yaxis,
                title: {
                    text: 'Harga'
                }
            },
            tooltip: {
                ...chartTheme.area.tooltip,
                x: {
                    format: 'dd MMM'
                },
                y: {
                    formatter: function (val) {
                        return `Min: ${val[0]}, Max: ${val[1]}`;
                    }
                }
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Box Plot Chart (Contoh Baru: Distribusi Nilai).
     */
    const renderBoxPlotChartNew = () => {
        const chartContainer = document.querySelector("#boxPlotChartNew");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.boxPlot,
            series: [{
                type: 'boxPlot',
                data: generateBoxPlotData(7) // Menghasilkan 7 set data box plot
            }],
            chart: {
                ...chartTheme.boxPlot.chart,
                height: 350,
                type: 'boxPlot',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            xaxis: {
                ...chartTheme.boxPlot.xaxis,
                categories: ['Grup A', 'Grup B', 'Grup C', 'Grup D', 'Grup E', 'Grup F', 'Grup G'],
                title: {
                    text: 'Grup Data'
                }
            },
            yaxis: {
                ...chartTheme.boxPlot.yaxis,
                title: {
                    text: 'Nilai'
                }
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Bubble Chart (Contoh Baru: Kinerja Karyawan).
     */
    const renderBubbleChartNew = () => {
        const chartContainer = document.querySelector("#bubbleChartNew");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.bubble,
            series: [{
                name: 'Departemen 1',
                data: generateBubbleData(8, 50, 150)
            }, {
                name: 'Departemen 2',
                data: generateBubbleData(8, 60, 160)
            }, {
                name: 'Departemen 3',
                data: generateBubbleData(8, 70, 170)
            }],
            chart: {
                ...chartTheme.bubble.chart,
                height: 350,
                type: 'bubble',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            xaxis: {
                ...chartTheme.bubble.xaxis,
                tickAmount: 10,
                labels: {
                    formatter: function(val) {
                        return parseFloat(val).toFixed(0) + ' Jam Kerja';
                    }
                },
                title: {
                    text: 'Jam Kerja Mingguan'
                }
            },
            yaxis: {
                ...chartTheme.bubble.yaxis,
                labels: {
                    formatter: function(val) {
                        return parseFloat(val).toFixed(0) + ' Poin';
                    }
                },
                title: {
                    text: 'Poin Kinerja'
                }
            },
            tooltip: {
                ...chartTheme.bubble.tooltip,
                y: {
                    formatter: function (val) {
                        return val + " Poin";
                    }
                },
                z: {
                    formatter: function (val) {
                        return val + " Tugas Selesai";
                    }
                }
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Scatter Chart (Contoh Baru: Korelasi Data).
     */
    const renderScatterChartNew = () => {
        const chartContainer = document.querySelector("#scatterChartNew");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.scatter,
            series: [{
                name: "Data Set A",
                data: [[5.4, 170], [6.2, 175], [7.1, 180], [8.0, 185], [8.9, 190], [9.8, 195], [10.7, 200], [11.6, 205], [12.5, 210]]
            }, {
                name: "Data Set B",
                data: [[5.0, 160], [5.8, 165], [6.7, 170], [7.6, 175], [8.5, 180], [9.4, 185], [10.3, 190], [11.2, 195], [12.1, 200]]
            }],
            chart: {
                ...chartTheme.scatter.chart,
                height: 350,
                type: 'scatter',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            xaxis: {
                ...chartTheme.scatter.xaxis,
                tickAmount: 10,
                labels: {
                    formatter: function(val) {
                        return parseFloat(val).toFixed(1) + ' X';
                    }
                },
                title: {
                    text: 'Variabel X'
                }
            },
            yaxis: {
                ...chartTheme.scatter.yaxis,
                labels: {
                    formatter: function(val) {
                        return parseFloat(val).toFixed(0) + ' Y';
                    }
                },
                title: {
                    text: 'Variabel Y'
                }
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Heatmap Chart (Contoh Baru: Aktivitas Pengguna).
     */
    const renderHeatmapChartNew = () => {
        const chartContainer = document.querySelector("#heatmapChartNew");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.heatmap,
            series: [{
                name: 'Pagi',
                data: generateData(12, { min: 0, max: 100 })
            }, {
                name: 'Siang',
                data: generateData(12, { min: 0, max: 100 })
            }, {
                name: 'Sore',
                data: generateData(12, { min: 0, max: 100 })
            }, {
                name: 'Malam',
                data: generateData(12, { min: 0, max: 100 })
            }],
            chart: {
                ...chartTheme.heatmap.chart,
                height: 350,
                type: 'heatmap',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            xaxis: {
                ...chartTheme.heatmap.xaxis,
                categories: Array.from({length: 12}, (_, i) => `${i + 1} Jam`),
                title: {
                    text: 'Waktu (Jam)'
                }
            },
            yaxis: {
                ...chartTheme.heatmap.yaxis,
                title: {
                    text: 'Bagian Hari'
                }
            }
            // plotOptions.heatmap.colorScale.ranges tidak lagi didefinisikan di sini
            // karena sudah diwarisi dari chartTheme.heatmap
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Treemap Chart (Contoh Baru: Struktur File).
     */
    const renderTreemapChartNew = () => {
        const chartContainer = document.querySelector("#treemapChartNew");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.treemap,
            series: [{
                data: [{
                    x: 'Dokumen',
                    y: 400
                }, {
                    x: 'Gambar',
                    y: 300
                }, {
                    x: 'Video',
                    y: 250
                }, {
                    x: 'Audio',
                    y: 150
                }, {
                    x: 'Aplikasi',
                    y: 100
                }, {
                    x: 'Lainnya',
                    y: 50
                }]
            }],
            chart: {
                ...chartTheme.treemap.chart,
                height: 350,
                type: 'treemap',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            title: {
                text: 'Ukuran File Berdasarkan Kategori',
                align: 'center',
                style: {
                    fontSize: '16px',
                    fontWeight: 'bold',
                    color: '#373d3f'
                }
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Slope Chart (Perubahan Peringkat).
     * Diimplementasikan sebagai Line Chart.
     */
    const renderSlopeChart = () => {
        const chartContainer = document.querySelector("#slopeChart");
        if (!chartContainer) return;

        const categories = ['Produk A', 'Produk B', 'Produk C', 'Produk D', 'Produk E'];
        const startYear = 2023;
        const endYear = 2024;
        const seriesData = generateSlopeData(categories, startYear, endYear, 1, 10); // Peringkat 1-10

        const options = {
            ...chartTheme.line,
            series: seriesData,
            chart: {
                ...chartTheme.line.chart,
                height: 350,
                type: 'line',
                zoom: {
                    enabled: false // Biasanya tidak ada zoom untuk slope chart
                },
                // Hapus properti toolbar yang menimpa di sini
                // toolbar: { show: false }
            },
            stroke: {
                ...chartTheme.line.stroke,
                curve: 'straight', // Garis lurus antar titik
                width: 3
            },
            markers: {
                ...chartTheme.line.markers,
                size: 6, // Ukuran marker
                strokeWidth: 2,
                hover: {
                    sizeOffset: 4
                }
            },
            xaxis: {
                ...chartTheme.line.xaxis,
                type: 'category',
                categories: [startYear.toString(), endYear.toString()],
                labels: {
                    formatter: function(val) {
                        return val;
                    }
                },
                axisBorder: {
                    show: false
                },
                axisTicks: {
                    show: false
                },
                tooltip: {
                    enabled: false
                }
            },
            yaxis: {
                ...chartTheme.line.yaxis,
                reversed: true, // Peringkat: 1 di atas, 10 di bawah
                min: 1,
                max: 10,
                tickAmount: 9,
                labels: {
                    formatter: function(val) {
                        return `Peringkat ${Math.round(val)}`;
                    }
                },
                title: {
                    text: 'Peringkat'
                }
            },
            grid: {
                ...chartTheme.line.grid,
                xaxis: {
                    lines: {
                        show: true // Tampilkan garis vertikal untuk tahun
                    }
                },
                yaxis: {
                    lines: {
                        show: true // Tampilkan garis horizontal untuk peringkat
                    }
                }
            },
            tooltip: {
                ...chartTheme.line.tooltip,
                shared: false,
                intersect: true,
                x: {
                    show: false // Sembunyikan label X di tooltip
                },
                y: {
                    formatter: function (val, { seriesIndex, dataPointIndex, w }) {
                        const category = w.config.series[seriesIndex].name;
                        const year = w.config.xaxis.categories[dataPointIndex];
                        return `${category}: Peringkat ${Math.round(val)} pada ${year}`;
                    }
                }
            },
            legend: {
                ...chartTheme.line.legend,
                position: 'right',
                offsetY: 40
            }
        };
        new ApexCharts(chartContainer, options).render();
    };


    /**
     * Fungsi untuk merender Radial Bar Chart (Contoh Baru: Kemajuan Proyek).
     */
    const renderRadialBarChartNew = () => {
        const chartContainer = document.querySelector("#radialBarChartNew");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.radialBar,
            series: [85, 70, 60, 95],
            labels: ['Desain', 'Pengembangan', 'Pengujian', 'Implementasi'],
            chart: {
                ...chartTheme.radialBar.chart,
                height: 350,
                type: 'radialBar',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            plotOptions: {
                radialBar: {
                    ...chartTheme.radialBar.plotOptions.radialBar,
                    hollow: {
                        size: '50%',
                    },
                    dataLabels: {
                        show: true,
                        name: {
                            show: true,
                            fontSize: '16px',
                            offsetY: -10,
                        },
                        value: {
                            show: true,
                            fontSize: '22px',
                            formatter: function (val) {
                                return val + '%';
                            }
                        },
                        total: {
                            show: true,
                            label: 'Total',
                            formatter: function (w) {
                                return w.globals.seriesTotals.reduce((a, b) => a + b, 0) / w.globals.series.length + '%';
                            }
                        }
                    }
                }
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Radar Chart (Contoh Baru: Statistik Pemain).
     */
    const renderRadarChartNew = () => {
        const chartContainer = document.querySelector("#radarChartNew");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.radar,
            series: [{
                name: 'Pemain A',
                data: [70, 80, 65, 90, 75, 85],
            }, {
                name: 'Pemain B',
                data: [60, 75, 80, 70, 85, 90],
            }],
            chart: {
                ...chartTheme.radar.chart,
                height: 350,
                type: 'radar',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            xaxis: {
                categories: ['Kecepatan', 'Kekuatan', 'Ketahanan', 'Agility', 'Akurasi', 'Kerja Sama'],
            },
            yaxis: {
                tickAmount: 5,
                labels: {
                    formatter: function(val) {
                        return val.toFixed(0);
                    }
                }
            },
            fill: {
                opacity: 0.2
            },
            stroke: {
                width: 2
            },
            markers: {
                size: 4
            }
        };
        new ApexCharts(chartContainer, options).render();
    };

    /**
     * Fungsi untuk merender Polar Area Chart (Contoh Baru: Preferensi Kategori).
     */
    const renderPolarAreaChartNew = () => {
        const chartContainer = document.querySelector("#polarAreaChartNew");
        if (!chartContainer) return;

        const options = {
            ...chartTheme.polarArea,
            series: [42, 30, 15, 8, 5],
            labels: ['Elektronik', 'Pakaian', 'Makanan', 'Otomotif', 'Lainnya'],
            chart: {
                ...chartTheme.polarArea.chart,
                height: 350,
                type: 'polarArea',
                // Hapus properti toolbar dan zoom yang menimpa di sini
                // toolbar: { show: true },
                // zoom: { enabled: true }
            },
            stroke: {
                colors: ['#fff']
            },
            fill: {
                opacity: 0.8
            },
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }]
        };
        new ApexCharts(chartContainer, options).render();
    };


    // Panggil semua fungsi untuk merender grafik di halaman
    renderContohPendapatanChart();
    renderContohAndaChart();

    // Panggil fungsi-fungsi untuk grafik baru
    renderLineChartNew();
    renderColumnChart();
    renderBarChartNew();
    renderMixedChart();
    renderRangeAreaChart();
    renderBoxPlotChartNew();
    renderBubbleChartNew();
    renderScatterChartNew();
    renderHeatmapChartNew();
    renderTreemapChartNew();
    renderSlopeChart();
    renderRadialBarChartNew();
    renderRadarChartNew();
    renderPolarAreaChartNew();

});
