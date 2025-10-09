import TeamItem from "../../components/team-item";

const teamItems = [
  {
    imgSrc: "/src/assets/cats/cat1.jpg",
    role: "Ketua",
    name: "Pandu Bin Karun",
    univ: 'UPN "Veteran" Jakarta',
  },
  {
    imgSrc: "/src/assets/cats/cat2.jpg",
    role: "Anggota",
    name: "Muiz Al Pukat",
    univ: 'UPN "Veteran" Jakarta',
  },
  {
    imgSrc: "/src/assets/cats/cat3.jpg",
    role: "Anggota",
    name: "Bima Al Amba",
    univ: "Cambridge University",
  },
  {
    imgSrc: "/src/assets/cats/cat4.jpg",
    role: "Anggota",
    name: "Luqy Bin Idris",
    univ: "IPB University",
  },
  {
    imgSrc: "/src/assets/cats/cat5.jpg",
    role: "Anggota",
    name: "Imelda Binti Ssue",
    univ: "Binus University",
  },
];

export default function TeamPage() {
  return (
    <>
      <div className="row gap-3 gap-sm-0 row-cols-1 row-cols-sm-3 row-cols-lg-5 py-5">
        {teamItems.map((item) => {
          const { imgSrc, role, name, univ } = item;

          return (
            <TeamItem
              key={item.name}
              imgSrc={imgSrc}
              role={role}
              name={name}
              univ={univ}
            />
          );
        })}
      </div>
    </>
  );
}
