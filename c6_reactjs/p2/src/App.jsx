import { Route, Routes } from "react-router";
import "./App.css";
import MainLayout from "./pages/layout";
import HomePage from "./pages/page";
import NotFoundPage from "./pages/notFound";
import TeamPage from "./pages/team/page";
import ContactPage from "./pages/contact/page";

function App() {
  return (
    <Routes>
      <Route path="/" element={<MainLayout />}>
        <Route index element={<HomePage />} />
        <Route path="team" element={<TeamPage />} />
        <Route path="contact" element={<ContactPage />} />
      </Route>

      <Route path="*" element={<NotFoundPage />} />
    </Routes>
  );
}

export default App;
