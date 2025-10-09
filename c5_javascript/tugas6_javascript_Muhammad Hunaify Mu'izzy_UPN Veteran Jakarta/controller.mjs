import users from "./data.mjs";

const index = () => {
  // tampilkan data
  if (users.length > 0) {
    const mappedUsers = users.map(
      (u, i) => `${i + 1}. ${u.nama}, ${u.umur} tahun, ${u.alamat}`
    );
    console.log(mappedUsers);
  } else {
    console.log("Data Users kosong!");
  }

  console.log();
};

const store = (user) => {
  // tambahkan data
  users.push(user);

  console.log("Berhasil menambahkan data User baru:");
  console.log(user);

  console.log();
};

const destroy = () => {
  // hapus data
  users.splice(0, users.length);

  console.log("Berhasil mereset data Users");

  console.log();
};

export { index, store, destroy };
