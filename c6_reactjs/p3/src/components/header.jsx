import { Link, useLocation } from "react-router";

const navLinks = [
  { label: "Home", href: "/" },
  { label: "Books", href: "/books" },
  { label: "Team", href: "/team" },
  { label: "Contact", href: "/contact" },
];

export default function Header() {
  const { pathname } = useLocation();

  return (
    <header className="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom sticky-top bg-white">
      <Link
        to="/"
        className="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none"
      >
        <span className="fs-4 fw-bold">TBA</span>
      </Link>

      <ul className="nav nav-pills gap-2">
        {navLinks.map((link) => {
          const isActive =
            link.href === "/"
              ? pathname === link.href
              : pathname.startsWith(link.href);

          return (
            <li key={link.label} className="nav-item">
              <Link
                to={link.href}
                className={`nav-link ${isActive ? "active" : ""}`}
                aria-current={isActive && "page"}
              >
                {link.label}
              </Link>
            </li>
          );
        })}
      </ul>
    </header>
  );
}
