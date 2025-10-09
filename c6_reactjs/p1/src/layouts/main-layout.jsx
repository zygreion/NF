import { Outlet } from "react-router";
import Header from "../components/header";

export default function MainLayout() {
  return (
    <div className="container">
      <Header />
      <Outlet />
    </div>
  );
}
