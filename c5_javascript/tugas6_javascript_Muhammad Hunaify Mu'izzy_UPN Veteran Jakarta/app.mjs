/* Tugas pertemuan 6 JS

Description:
  - Terdapat  file data.js didalamnya ada 10 Data dideklarasikan dengan Array of Object (nama, umur, alamat, email)
  - Selanjutnya file controller.js yang berisi 3 perintah ( Melihat, Menambah dan menghapus data)
  - Tambahkan minimal 2 data pada proses push
  - Tampilkan data menggunakan map()
  - Kumpulkan pada github masing masing (sesuai repository private yang sudah dibuat sebelumnya) dan kirim link ke LMS
*/

import { destroy, index, store } from "./controller.mjs";

const main = () => {
  // tambah dua data
  const newUsers = [
    { nama: "Zumi", umur: 35, alamat: "Jl. Hindia" },
    { nama: "Yesa", umur: 42, alamat: "Jl. Bunga" },
  ];

  for (const newUser of newUsers) {
    store(newUser);
  }

  index();
  destroy();

  index();
};

main();
