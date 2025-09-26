import { Route, Routes } from "react-router";
import "./App.css";
import MainLayout from "./layouts/main-layout";
import HomePage from "./pages/home";
import NotFoundPage from "./pages/notFound";
import TeamPage from "./pages/team";
import ContactPage from "./pages/contact";

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
