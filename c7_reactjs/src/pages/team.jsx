import Hero from "../components/hero";

const teamItems = [
  {
    imgSrc: "",
    title: "Ketua",
    desc: "Pandu Bin Karun",
    univ: 'UPN "Veteran" Jakarta',
    detailLink: "",
  },
  {
    imgSrc: "",
    title: "Anggota",
    desc: "Muiz Al Pukat",
    univ: 'UPN "Veteran" Jakarta',
  },
  {
    imgSrc: "",
    title: "Anggota",
    desc: "Bima Al Amba",
    univ: "Cambridge University",
  },
  {
    imgSrc: "",
    title: "Anggota",
    desc: "Luqy Bin Idris",
    univ: "IPB University",
  },
  { imgSrc: "", title: "Anggota", desc: "Menhetera", univ: "Binus University" },
];

export default function Team() {
  return (
    <>
      <div className="row gap-3 gap-sm-0 row-cols-1 row-cols-sm-3 row-cols-lg-5 py-5">
        {teamItems.map((item) => {
          return (
            <div
              key={item}
              className="d-flex flex-column align-items-center py-2"
            >
              <svg
                aria-label="Placeholder"
                className="bd-placeholder-img rounded-circle"
                height="140"
                preserveAspectRatio="xMidYMid slice"
                role="img"
                width="140"
                xmlns="http://www.w3.org/2000/svg"
              >
                <title>Placeholder</title>
                <rect
                  width="100%"
                  height="100%"
                  fill="var(--bs-secondary-color)"
                ></rect>
              </svg>
              <h5 className="fw-normal fw-medium text-center mt-3">
                {item.title}
              </h5>
              <span className="text-center">{item.desc}</span>
              <span className="text-center text-muted fst-italic">
                {item.univ}
              </span>
            </div>
          );
        })}
      </div>

      {/* <Hero /> */}
    </>
  );
}
