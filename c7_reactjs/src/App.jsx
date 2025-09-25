import { Route, Routes } from "react-router";
import "./App.css";
import MainLayout from "./layouts/main-layout";
import Home from "./pages/home";
import NotFound from "./pages/notFound";
import Team from "./pages/team";
import Contact from "./pages/contact";

function App() {
  return (
    <Routes>
      <Route path="/" element={<MainLayout />}>
        <Route index element={<Home />} />
        <Route path="team" element={<Team />} />
        <Route path="contact" element={<Contact />} />
      </Route>

      <Route path="*" element={<NotFound />} />
    </Routes>
  );
}

export default App;
