/* interface HeroProps {
  title: string;
  desc: string;
  imgSrc: string;
}*/

export default function Hero({ title, desc, imgSrc }) {
  return (
    <div className="row flex-lg-row-reverse align-items-center py-5">
      <div className="col-10 col-sm-8 col-lg-6">
        <img
          src={imgSrc}
          className="d-block mx-lg-auto img-fluid rounded-3 shadow-lg"
          alt="Bootstrap Themes"
          width="700"
          height="500"
          loading="lazy"
        />
      </div>
      <div className="col-lg-6">
        <h1 className="display-5 fw-bold text-body-emphasis lh-1 mb-3">
          {title}
        </h1>
        <p className="lead">{desc}</p>
        <div className="d-grid gap-2 d-md-flex justify-content-md-start">
          <button type="button" className="btn btn-primary btn-lg px-4 me-md-2">
            Primary
          </button>
          <button
            type="button"
            className="btn btn-outline-secondary btn-lg px-4"
          >
            Default
          </button>
        </div>
      </div>
    </div>
  );
}
