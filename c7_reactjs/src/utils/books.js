/* interface Book {
  tag: 'bestSeller' | undefined;
  id: number;
  author: string;
  title: string;
  year: number;
  description: string;
  image: string;
}*/

const books = [
  {
    tag: "bestSeller",
    id: 1,
    title: "Belajar JavaScript Dasar",
    author: "Andi Prasetyo",
    year: 2021,
    description:
      "Panduan lengkap untuk pemula yang ingin belajar JavaScript dari nol",
    image: "https://placehold.co/600x400?text=JS+Dasar",
  },
  {
    tag: "bestSeller",
    id: 2,
    title: "React untuk Pemula",
    author: "Dina Sari",
    year: 2022,
    description: "Mengenal konsep dan praktik membuat aplikasi React modern",
    image: "https://placehold.co/600x400?text=React+Pemula",
  },
  {
    tag: "bestSeller",
    id: 3,
    title: "Node.js Lanjutan",
    author: "Budi Santoso",
    year: 2023,
    description: "Pendalaman konsep backend development dengan Node.js",
    image: "https://placehold.co/600x400?text=Node.js+Lanjutan",
  },
  {
    tag: "bestSeller",
    id: 4,
    title: "Mahir TypeScript",
    author: "Siti Rahma",
    year: 2022,
    description: "Panduan lengkap TypeScript untuk developer JavaScript",
    image: "https://placehold.co/600x400?text=TypeScript",
  },
  {
    id: 5,
    title: "Vue.js untuk Developer",
    author: "Fajar Nugraha",
    year: 2021,
    description: "Belajar membangun UI interaktif menggunakan Vue.js",
    image: "https://placehold.co/600x400?text=Vue.js",
  },
  {
    id: 6,
    title: "Dasar-Dasar HTML & CSS",
    author: "Lina Maulida",
    year: 2020,
    description:
      "Belajar HTML dan CSS dari dasar hingga siap membangun website",
    image: "https://placehold.co/600x400?text=HTML+CSS",
  },
  {
    id: 7,
    title: "Database dengan PostgreSQL",
    author: "Rudi Hartono",
    year: 2021,
    description: "Membangun dan mengelola database dengan PostgreSQL",
    image: "https://placehold.co/600x400?text=PostgreSQL",
  },
  {
    id: 8,
    title: "MongoDB untuk Pemula",
    author: "Eka Lestari",
    year: 2023,
    description: "Mengenal NoSQL database dengan MongoDB",
    image: "https://placehold.co/600x400?text=MongoDB",
  },
  {
    id: 9,
    title: "Express.js dan REST API",
    author: "Rian Kurniawan",
    year: 2022,
    description: "Membangun REST API dengan Express.js secara efisien",
    image: "https://placehold.co/600x400?text=Express.js",
  },
  {
    id: 10,
    title: "Git & GitHub untuk Kolaborasi",
    author: "Maya Anggraini",
    year: 2021,
    description: "Dasar version control dan kolaborasi dengan GitHub",
    image: "https://placehold.co/600x400?text=Git+GitHub",
  },
];

function getAllBooks() {
  return books;
}

function getBestSellerBooks() {
  return books.filter((book) => book.tag === "bestSeller");
}

export { getAllBooks, getBestSellerBooks };
export default books;
