import React, { createContext, useState, useContext, useEffect } from "react";
const ProjectsContext = createContext();
export const ProjectsProvider = ({ children }) => {

    const [projects, setProjects] = useState([]);
    useEffect(() => {
        const fetchProjects = async () => {
            const response = await fetch("http://127.0.0.1:8000/api/projects");
            const data = await response.json();
            setProjects(data);
          };
          fetchProjects();
    },[]);

    return (
        <ProjectsContext.Provider value={{ projects }}>
          {children}
        </ProjectsContext.Provider>
      );
}
export const useProjects = () => {
  return useContext(ProjectsContext);
}