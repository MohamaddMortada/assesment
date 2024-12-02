import React from "react";
import Project from "../components/Project";

const Projects = () => {
  return (
    <div className="projects-container">
      {Projects.map((p) => (
        <Project project={p} key={p.id} />
      ))}
    </div>
  );
};

export default Projects;
