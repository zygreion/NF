import { Outlet } from "react-router";
import Header from "../components/header";
import Footer from "../components/footer";

export default function MainLayout() {
  return (
    <div className="container min-vh-100 d-flex flex-column">
      <Header />

      <main className="flex-grow-1">
        <Outlet />
      </main>

      <Footer />
    </div>
  );
}
