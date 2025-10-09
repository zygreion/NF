export default function CardBook({
  id,
  author,
  title,
  year,
  description,
  image,
}) {
  return (
    <div className="d-flex flex-column align-items-center justify-content-between text-center rounded-4 border shadow-sm px-4 py-3">
      {/* Top */}
      <div className="row row-cols-1 gap-2">
        <img
          src={image}
          className="bg-bg-success-subtle w-100 object-fit-cover"
          style={{ height: "10rem" }}
        />

        <div>
          <h5 className="h5">{title}</h5>
          <p>{description}</p>
        </div>
      </div>

      {/* Bottom */}
      <div className="row row-cols-1">
        <span>
          {author}, {year}
        </span>
        <small>
          <i># {id}</i>
        </small>
      </div>
    </div>
  );
}
