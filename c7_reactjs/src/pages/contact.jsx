import { Link } from "react-router";

const iconLinks = [
  {
    icon: <i class="bi bi-github"></i>,
    label: "GitHub",
    href: "https://www.github.com",
  },
  {
    icon: <i class="bi bi-instagram"></i>,
    label: "Instagram",
    href: "https://www.instagram.com",
  },
  {
    icon: <i class="bi bi-envelope"></i>,
    label: "E-mail",
    href: "https://www.gmail.com",
  },
];

export default function ContactPage() {
  return (
    <div className="row g-5 py-5">
      <div className="col-md-6">
        <h2 className="text-body-emphasis">Mari Berbincang!</h2>
        <p>
          Kami siap mengerjakan proyek website sesuai dengan keinginan anda.
        </p>
        <ul className="list-unstyled ps-0">
          {iconLinks.map((item) => {
            const { icon, label, href } = item;

            return (
              <li key={label}>
                <Link className="icon-link" to={href} target="_blank">
                  <div>{icon}</div>
                  <span>{label}</span>
                </Link>
              </li>
            );
          })}
        </ul>
      </div>
    </div>
  );
}
