import TeamItem from "../../components/team-item";

const teamItems = [
  {
    imgSrc:
      "https://plus.unsplash.com/premium_photo-1673967831980-1d377baaded2?fm=jpg&q=60&w=3000&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8Y2F0c3xlbnwwfHwwfHx8MA%3D%3D",
    role: "Ketua",
    name: "Pandu Bin Karun",
    univ: 'UPN "Veteran" Jakarta',
  },
  {
    imgSrc:
      "https://media.4-paws.org/d/2/5/f/d25ff020556e4b5eae747c55576f3b50886c0b90/cut%20cat%20serhio%2002-1813x1811-720x719.jpg",
    role: "Anggota",
    name: "Muiz Al Pukat",
    univ: 'UPN "Veteran" Jakarta',
  },
  {
    imgSrc: "https://d2zp5xs5cp8zlg.cloudfront.net/image-79322-800.jpg",
    role: "Anggota",
    name: "Bima Al Amba",
    univ: "Cambridge University",
  },
  {
    imgSrc:
      "https://i.pinimg.com/736x/ae/e3/4d/aee34ddfd65c21d2696329a3a686a94c.jpg",
    role: "Anggota",
    name: "Luqy Bin Idris",
    univ: "IPB University",
  },
  {
    imgSrc:
      "https://marketplace.canva.com/8-1Kc/MAGoQJ8-1Kc/1/tl/canva-ginger-cat-with-paws-raised-in-air-MAGoQJ8-1Kc.jpg",
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
