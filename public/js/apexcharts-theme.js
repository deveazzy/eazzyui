/**
 * public/js/apexcharts-theme.js
 * Modul ini berisi semua konfigurasi tema untuk ApexCharts.
 * Menggunakan struktur warisan untuk memastikan setiap jenis grafik
 * hanya menerima opsi yang relevan.
 *
 * Menggunakan export untuk kompatibilitas modul ES6.
 */

// 1. Definisikan Palet Warna Tema Utama
// Ini adalah tempat Anda bisa mengubah warna default.
// Contoh palet baru yang lebih cerah:
export const themePalette = [
    '#4299E1', // Biru Cerah (Tailwind blue-500)
    '#48BB78', // Hijau Cerah (Tailwind green-500)
    '#F6AD55', // Oranye Cerah (Tailwind orange-400)
    '#9F7AEA', // Ungu Cerah (Tailwind purple-500)
    '#ED8936', // Oranye Tua (Tailwind orange-600)
    '#ECC94B', // Kuning Cerah (Tailwind yellow-400)
    '#38B2AC', // Teal (Tailwind teal-500)
    '#A0AEC0'  // Abu-abu Sedang (Tailwind gray-400)
];

// 2. Definisikan Tema Dasar (Berlaku untuk SEMUA grafik)
const baseTheme = {
    chart: {
        foreColor: '#373d3f', // Warna teks umum
        fontFamily: 'Inter, sans-serif', // Menggunakan font Inter
        toolbar: {
            show: true, // Pastikan toolbar tetap ditampilkan
            tools: {
                download: true, // Aktifkan tombol download (SVG, PNG, CSV)
                selection: true, // Aktifkan Selection Zoom
                zoom: true,      // Aktifkan Zoom (Zoom In/Out)
                zoomin: true,
                zoomout: true,
                pan: true,       // Aktifkan Panning
                reset: true,     // Aktifkan Reset Zoom
                customIcons: []  // Biarkan kosong jika tidak ada ikon kustom
            }
        }
    },
    colors: themePalette, // Menggunakan palet warna kustom
    stroke: { width: 2, curve: 'smooth' },
    dataLabels: {
        style: { colors: ['#FFFFFF'] }, // Warna label data
        dropShadow: { enabled: true, top: 1, left: 1, blur: 1, opacity: 0.45 }
    },
    markers: { size: 4, strokeWidth: 0, hover: { sizeOffset: 3 } },
    tooltip: { theme: 'dark' }, // Tema tooltip gelap
    legend: {
        position: 'top', horizontalAlign: 'left', fontSize: '14px', fontFamily: 'inherit',
        fontWeight: 500, markers: { width: 12, height: 12, strokeWidth: 0, radius: 12 },
        itemMargin: { horizontal: 10, vertical: 5 },
    }
};

// 3. Definisikan Tema untuk Grafik Cartesian (yang memiliki sumbu X dan Y)
// Tema ini mewarisi dari baseTheme dan menambahkan grid, xaxis, yaxis.
const cartesianTheme = {
    ...baseTheme,
    xaxis: {
        labels: { style: { colors: '#888ea8' } }, // Warna label sumbu X
        axisBorder: { color: '#e0e6ed' }, // Warna border sumbu X
        axisTicks: { color: '#e0e6ed' } // Warna tick sumbu X
    },
    yaxis: {
        labels: { style: { colors: '#888ea8' } } // Warna label sumbu Y
    },
    grid: { borderColor: '#e0e6ed' } // Warna garis grid
};

// 4. Buat Kamus Tema Final untuk Setiap Jenis Grafik
export const chartTheme = {
    // Grafik Cartesian mewarisi dari cartesianTheme
    line: { ...cartesianTheme, stroke: { ...cartesianTheme.stroke, width: 3 } },
    area: {
        ...cartesianTheme,
        stroke: { ...cartesianTheme.stroke, width: 3 },
        fill: { type: 'gradient', gradient: { shadeIntensity: 1, opacityFrom: 0.7, opacityTo: 0.2, stops: [0, 90, 100] } }
    },
    bar: {
        ...cartesianTheme,
        plotOptions: { bar: { horizontal: false, columnWidth: '55%', borderRadius: 4 } },
        dataLabels: { ...cartesianTheme.dataLabels, enabled: false }, // Data labels dinonaktifkan untuk bar
        stroke: { show: true, width: 2, colors: ['transparent'] },
    },
    candlestick: {
        ...cartesianTheme,
        plotOptions: { candlestick: { colors: { upward: '#48BB78', downward: '#ED8936' }, wick: { useFillColor: true } } }, // Warna kustom untuk candlestick
        xaxis: { ...cartesianTheme.xaxis, type: 'datetime' }
    },
    boxPlot: { ...cartesianTheme, plotOptions: { boxPlot: { colors: { upper: '#4299E1', lower: '#F6AD55' } } } }, // Warna kustom untuk box plot
    bubble: { ...cartesianTheme, dataLabels: { ...cartesianTheme.dataLabels, enabled: false }, xaxis: { ...cartesianTheme.xaxis, type: 'numeric' }, plotOptions: { bubble: { zScaling: true } } },
    scatter: { ...cartesianTheme, markers: { ...cartesianTheme.markers, size: 6, strokeWidth: 1, hover: { sizeOffset: 4 } } },
    heatmap: {
        ...cartesianTheme,
        dataLabels: { ...cartesianTheme.dataLabels, enabled: false },
        plotOptions: { heatmap: { enableShades: true, shadeIntensity: 0.5, colorScale: { ranges: [
            // Menggunakan nilai heksadesimal langsung untuk menghindari masalah timing
            { from: 0, to: 25, name: 'Rendah', color: '#ED8936' }, // Oranye
            { from: 26, to: 50, name: 'Sedang', color: '#48BB78' }, // Hijau
            { from: 51, to: 75, name: 'Tinggi', color: '#4299E1' }, // Biru
            { from: 76, to: 100, name: 'Sangat Tinggi', color: '#9F7AEA' } // Ungu
        ] } } }
    },
    rangeBar: {
        ...cartesianTheme,
        plotOptions: { bar: { horizontal: true, borderRadius: 5 } },
        xaxis: { ...cartesianTheme.xaxis, type: 'datetime' },
        // Data labels menunjukkan nilai X untuk range bar
        dataLabels: {
            ...cartesianTheme.dataLabels,
            enabled: true,
            formatter: (val, { seriesIndex, dataPointIndex, w }) => {
                // Mengambil nilai X (label) dari data
                const data = w.config.series[seriesIndex].data[dataPointIndex];
                return data.x || ''; // Mengembalikan label atau string kosong jika tidak ada
            },
            style: { colors: ['#333'] } // Warna label data untuk range bar
        }
    },

    // Grafik Non-Cartesian mewarisi langsung dari baseTheme
    donut: {
        ...baseTheme,
        stroke: { ...baseTheme.stroke, colors: ['#FFFFFF'] }, // Garis putih antar slice
        plotOptions: { pie: { donut: { labels: { show: true, name: { show: true, offsetY: -10 }, value: { show: true, offsetY: 10, formatter: (val) => val }, total: { show: true, label: 'Total', formatter: (w) => w.globals.seriesTotals.reduce((a, b) => a + b, 0) } } } } },
        dataLabels: { enabled: true, formatter: (val) => val.toFixed(1) + '%' },
        legend: { ...baseTheme.legend, position: 'bottom' }
    },
    pie: { // Tema untuk Pie sama dengan Donut, hanya tanpa lubang
        ...baseTheme,
        stroke: { ...baseTheme.stroke, colors: ['#FFFFFF'] },
        dataLabels: { enabled: true, formatter: (val) => val.toFixed(1) + '%' },
        legend: { ...baseTheme.legend, position: 'bottom' }
    },
    radialBar: { ...baseTheme, plotOptions: { radialBar: { hollow: { size: '70%' }, dataLabels: { name: { show: true }, value: { show: true } } } } },
    polarArea: {
        ...baseTheme,
        stroke: { ...baseTheme.stroke, colors: ['#FFFFFF'] },
        plotOptions: { polarArea: { rings: { strokeWidth: 1, strokeColor: '#e0e6ed' }, spokes: { strokeWidth: 1, connectorColors: '#e0e6ed' } } },
        legend: { ...baseTheme.legend, position: 'bottom' }
    },
    radar: { ...baseTheme, stroke: { ...baseTheme.stroke, width: 2 }, fill: { opacity: 0.1 }, markers: { ...baseTheme.markers, size: 4, strokeWidth: 1 } },
    treemap: { ...baseTheme, plotOptions: { treemap: { distributed: true, enableShades: true, shadeIntensity: 0.6 } }, legend: { ...baseTheme.legend, show: false } }
};
