/* interface TeamItemProps {
  imgSrc: string;
  role: "Ketua" | "Anggota";
  name: string;
  univ: string;
} */

export default function TeamItem({ imgSrc, role, name, univ }) {
  return (
    <div className="d-flex flex-column align-items-center py-2">
      <img
        src={imgSrc}
        className="object-fit-cover rounded-circle"
        width={140}
        height={140}
      />
      <h5 className="fw-normal fw-medium text-center mt-3">{role}</h5>
      <span className="text-center">{name}</span>
      <span className="text-center text-muted fst-italic">{univ}</span>
    </div>
  );
}
