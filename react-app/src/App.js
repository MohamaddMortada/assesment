import { BrowserRouter, Route, Routes } from "react-router-dom";
import "./App.css";
import Projects from "./pages/Projects";

function App() {
  return (
    <div className="App">
      <ProjectsProvider>
      <div className="App">
        <Projects />
      </div>
    </ProjectsProvider>
    </div>
  );
}

export default App;
