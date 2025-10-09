/* Tugas 5 JS

Sebuah toko online ingin mengembangkan fitur manajemen produk berbasis JavaScript. Fitur ini mencakup:

  - List data produk awal minimal 5
  - Menambahkan Produk
  - Menghapus Produk
  - Menampilkan Semua Produk

Aplikasi ini akan menggunakan Event Listener, Destructuring, Spread Operator, dan Rest Parameter untuk meningkatkan efisiensi dan fleksibilitas kode.
*/

// HTMLElements DOM
const namaInput = document.getElementById("namaInput");
const hargaInput = document.getElementById("hargaInput");
const idInput = document.getElementById("idInput");
const tampilkanProdukBtn = document.getElementById("tampilkanProdukBtn");
const tampilkanProdukPre = document.getElementById("tampilkanProdukPre");

// **Data Produk*
let produkList = [
  {
    id: 1,
    nama: "Laptop",
    harga: 7_000_000,
  },
  {
    id: 2,
    nama: "Smartphone",
    harga: 5_000_000,
  },
  {
    id: 3,
    nama: "Keyboard",
    harga: 3_500_000,
  },
  {
    id: 4,
    nama: "Flashdisk",
    harga: 500_000,
  },
  {
    id: 5,
    nama: "SSD",
    harga: 1_000_000,
  },
];

// Berguna untuk autoIncrement id dari produk baru
// Asumsikan id data awal sudah terurut
let lastIdProduk = produkList.length;

// Ubah string menjadi Integer
function stringToInt(value) {
  return Number.parseInt(value);
}

// +-------------------------------+
// |     Tambah Produk Section     |
// +-------------------------------+

// **Menambahkan Produk dengan Spread Operator**
function tambahProduk(nama, harga) {
  let errorMsg = "";
  if (typeof nama !== "string") {
    errorMsg = "nama harus berupa string!";
  } else if (typeof harga !== "number") {
    errorMsg = "harga harus berupa angka";
  }

  for (const produk of produkList) {
    if (produk.nama === nama) {
      errorMsg = "produk dengan nama tersebut sudah ada!";
    }
  }

  if (errorMsg) {
    alert(errorMsg);
    return;
  }

  const newProduct = {
    id: ++lastIdProduk,
    nama,
    harga,
  };

  // Tambahkan ke array daftar produk dengan spread operator
  produkList = [...produkList, newProduct];
  tampilkanProduk();
}

// +------------------------------+
// |     Hapus Produk Section     |
// +------------------------------+

// **Menghapus Produk dengan Rest Parameter**
function hapusProduk(...id) {
  let i = 0;

  while (i < produkList.length) {
    const produk = produkList[i];

    if (id.includes(produk.id)) {
      produkList.splice(i, 1);
    } else {
      i++;
    }
  }

  tampilkanProduk();
}

// +----------------------------------+
// |     Tampilkan Produk Section     |
// +----------------------------------+

tampilkanProdukBtn.addEventListener("click", () => {
  tampilkanProduk();
});

// **Menampilkan Produk dengan Destructuring**
function tampilkanProduk() {
  const formattedString = JSON.stringify(produkList, null, 2);
  tampilkanProdukPre.innerHTML = formattedString;

  let txt = "[";
  const length = produkList.length;

  if (length > 0) {
    txt += "\n";

    for (let i = 0; i < length; i++) {
      const produk = produkList[i];
      // Destructuring produk
      const { id, nama, harga } = produk;

      txt += "  { ";
      txt += `"id": ${id}, "nama": "${nama}", "harga": ${harga}`;
      txt += i < length - 1 ? " },\n" : " }\n";
    }
  }

  txt += "]";
  tampilkanProdukPre.innerHTML = txt;
}

function updateSubmitBtn(formId) {
  const form = document.getElementById(formId);
  const submitBtn = document.querySelector(
    `button[type="submit"][data-submit-for="${formId}"]`
  );

  // Check if the form is valid
  if (form.checkValidity()) {
    submitBtn.removeAttribute("disabled"); // Enable the button
  } else {
    submitBtn.setAttribute("disabled", "true"); // Disable the button
  }
}

// +----------------------------------+
// |     Forms Controller Section     |
// +----------------------------------+

const forms = document.querySelectorAll("form");
for (const form of forms) {
  const { id } = form;

  form.addEventListener("input", () => {
    updateSubmitBtn(id);
  });

  form.addEventListener("submit", (e) => {
    e.preventDefault();

    if (id === "formTambahProduk") {
      tambahProduk(namaInput.value, stringToInt(hargaInput.value));
    } else if (id === "formHapusProduk") {
      // Mengubah ID input ke dalam array of integer
      // Value yang bukan integer akan dihilangkan
      const daftarId = idInput.value
        .split(",")
        .map((s) => stringToInt(s))
        .filter((i) => !Number.isNaN(i));
      console.log(daftarId);

      // Gunakan spread operator untuk memecah array
      hapusProduk(...daftarId);
    }

    form.reset();
    updateSubmitBtn(id);
  });

  updateSubmitBtn(id);
}

// +------------------------------+
// |     Button Menus Section     |
// +------------------------------+

const collapseWrappers = document.querySelectorAll(".collapse");
for (const wrapper of collapseWrappers) {
  const trigger = document.querySelector(
    `[data-bs-toggle="collapse"][data-bs-target="#${wrapper.id}"]`
  );

  if (wrapper.classList.contains("show")) {
    trigger.classList.remove("btn-outline-success");
    trigger.classList.add("btn-success");
  }

  wrapper.addEventListener("show.bs.collapse", () => {
    trigger.classList.remove("btn-outline-success");
    trigger.classList.add("btn-success");
  });

  wrapper.addEventListener("hide.bs.collapse", () => {
    trigger.classList.remove("btn-success");
    trigger.classList.add("btn-outline-success");
  });
}

tampilkanProduk();
