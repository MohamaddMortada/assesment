import React from "react";
import Project from "../components/Project";
import { useProjects } from "../contexts/ProjectsContext";


const Projects = () => {
  const { projects } = useProjects();
  return (
    <div className="projects-container">
      {Projects.map((p) => (
        <Project project={p} key={p.id} />
      ))}
    </div>
  );
};

export default Projects;
