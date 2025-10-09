/* Tugas Pertemuan 4

  Anda diminta untuk membuat Sistem Manajemen Transportasi menggunakan konsep Object-Oriented Programming (OOP) dalam JavaScript. Sistem ini akan mencakup berbagai jenis kendaraan yang memiliki perilaku dan karakteristik yang berbeda.

  Perusahaan ingin mencatat data pelanggan yang menyewa kendaraan.
  - Setiap pelanggan memiliki nama, nomor telepon, dan kendaraan yang disewa.
  - Sistem harus bisa menampilkan daftar pelanggan yang sedang menyewa kendaraan.

  Tugas:
    - Buat class Pelanggan dengan properti nama, nomorTelepon, dan kendaraanDisewa.
    - Tambahkan metode untuk mencatat transaksi penyewaan kendaraan oleh pelanggan.
    - Buat sistem yang menampilkan daftar pelanggan yang sedang menyewa kendaraan.
*/

// +------------------------------+
// |     Blueprint Kendaraan      |
// +------------------------------+

class Kendaraan {
  #sedangDisewa = false;

  constructor(jumlahRoda, merk, model, warna, platNomor) {
    if (this.constructor === Kendaraan) {
      throw new Error("constructor() harus diimplementasikan di subclass!");
    }

    this.jumlahRoda = jumlahRoda;
    this.merk = merk;
    this.model = model;
    this.warna = warna;
    this.platNomor = platNomor;
  }

  bergerak() {
    throw new Error("Method bergerak() harus diimplementasikan di subclass!");
  }

  klakson() {
    throw new Error("Method klakson() harus diimplementasikan di subclass!");
  }

  tampilkanInfo() {
    throw new Error(
      "Method tampilkanInfo() harus diimplementasikan di subclass!"
    );
  }

  getSedangDisewa() {
    return this.#sedangDisewa;
  }

  setSedangDisewa(value) {
    this.#sedangDisewa = value;
  }

  getDisplayPrefix() {
    return `${this.constructor.name} ${this.merk} ${this.model} [${this.platNomor}]: `;
  }
}

class Motor extends Kendaraan {
  constructor(merk, model, warna, platNomor, tipe) {
    super(2, merk, model, warna, platNomor);
    this.tipe = tipe;

    if (tipe === "manual") {
      this.gigi = 0;
    }
  }

  bergerak() {
    console.log(super.getDisplayPrefix() + "Ngeeeenggg...");
  }

  klakson() {
    console.log(super.getDisplayPrefix() + "Piippp!!");
  }

  gantiModeIdle() {
    this.modeIdle = this.modeIdle === "idle" ? "idleStop" : "idle";
  }

  gantiGigi(newValue) {
    this.gigi = newValue;
  }
}

class Mobil extends Kendaraan {
  constructor(merk, model, warna, platNomor, jmlPintu, jmlKursi) {
    super(4, merk, model, warna, platNomor);
    this.jmlPintu = jmlPintu;
    this.jmlKursi = jmlKursi;

    this.jendelaTerkunci = false;
    this.bagasiTerkunci = true;
  }

  bergerak() {
    console.log(super.getDisplayPrefix() + "Brmmmmm...");
  }

  klakson() {
    console.log(super.getDisplayPrefix() + "Tiiddd!!");
  }

  switchKunciJendela() {
    this.jendelaTerkunci = !this.jendelaTerkunci;
  }

  switchKunciBagasi() {
    this.bagasiTerkunci = !this.bagasiTerkunci;
  }
}

// +------------------------------+
// |     Blueprint Pelanggan      |
// +------------------------------+

class Pelanggan {
  constructor(nama, nomorTelepon, kendaraanDisewa = null) {
    this.nama = nama;
    this.nomorTelepon = nomorTelepon;
    this.kendaraanDisewa = kendaraanDisewa;
  }

  sewaKendaraan(kendaraan) {
    if (kendaraan.getSedangDisewa() === false) {
      this.kendaraanDisewa = kendaraan;
      this.kendaraanDisewa.setSedangDisewa(true);
    }
  }

  kembalikanKendaraan() {
    if (this.kendaraanDisewa) {
      this.kendaraanDisewa.setSedangDisewa(false);
      this.kendaraanDisewa = null;
    }
  }
}

// +-----------------+
// |     Detail      |
// +-----------------+

function tampilkanDaftarPenyewaKendaraan() {
  const daftarPenyewaKendaraan = daftarPelanggan.filter(
    (p) => p.kendaraanDisewa !== null
  );

  console.log(
    "\n+---------------------------------------------------+\n" +
      "|      Daftar Pelanggan yang Menyewa Kendaraan      |\n" +
      "+---------------------------------------------------+\n"
  );

  for (let i = 0; i < daftarPenyewaKendaraan.length; i++) {
    console.log(`${i + 1}.`);
    console.log(daftarPenyewaKendaraan[i]);
    console.log();
  }
}

// Daftar kendaraan yang dimiliki oleh agensi
const daftarKendaraan = [
  new Motor("Honda", "BeAT", "hitam", "B 307 CWZ", "matic"),
  new Mobil("Toyota", "Innova", "silver", "D 893 XAS", 5, 7),
];

// Separasi motor dan mobil untuk kemudahan kode
const daftarMotor = daftarKendaraan.filter(
  (k) => k.constructor.name === "Motor"
);
const daftarMobil = daftarKendaraan.filter(
  (k) => k.constructor.name === "Mobil"
);

// Contoh pemanggilan method pada motor dan mobil dengan output yang berbeda
daftarMotor[0].bergerak();
daftarMotor[0].klakson();

daftarMobil[0].bergerak();
daftarMobil[0].klakson();

// Riwayat pelanggan yang pernah menyewa
const daftarPelanggan = [
  new Pelanggan("Budi", "+62821928110644"),
  new Pelanggan("Supri", "+6281617009533"),
];

// Pelanggan Budi ingin menyewa kendaraan
daftarPelanggan[0].sewaKendaraan(daftarMobil[0]);

tampilkanDaftarPenyewaKendaraan();
