/*
 * @author    [EazZy Project]
 * @copyright Copyright (c) [2025] [EazZy Project]
 * @license   https://opensource.org/licenses/MIT MIT License
 */

// Contoh Data untuk Produk
const productData = [
  {
    id: 1,
    imageUrl: "https://placehold.co/600x600/3498db/white?text=Produk+Digital",
    title: "Template Website Pro",
    price: 250000,
    category: "digital",
    description:
      "Template website modern dan responsif menggunakan Tailwind CSS dan Alpine.js. Dilengkapi dengan 10 halaman siap pakai dan dokumentasi lengkap.",
    reviews: [
      {
        user: "Andi",
        rating: 5,
        comment: "Keren banget templatenya, sangat membantu!",
      },
      {
        user: "Budi",
        rating: 4,
        comment: "Bagus, tapi perlu sedikit penyesuaian di beberapa bagian.",
      },
    ],
  },
  {
    id: 2,
    imageUrl: "https://placehold.co/600x600/2ecc71/white?text=Produk+Fisik",
    title: "Kaos Desain Kustom",
    price: 150000,
    category: "fisik",
    description:
      "Kaos katun combed 30s berkualitas tinggi dengan desain eksklusif. Tersedia dalam berbagai ukuran dan warna.",
    reviews: [
      {
        user: "Citra",
        rating: 5,
        comment: "Bahannya adem dan sablonnya bagus.",
      },
    ],
  },
  // ...produk lainnya
];

export { productData };
