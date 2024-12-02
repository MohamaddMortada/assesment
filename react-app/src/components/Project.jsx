import MemberIcon from "./MemberIcon";
import React from "react";

const Project = ({ project }) => {
  const { name, description, members } = project;

  return (
    <div className="project-card">
      <div>
        <h3>{name}</h3>
        <div>
          {members.map((m) => (
            <MemberIcon user={m} key={m.id} />
          ))}
        </div>
      </div>
      <div>
        <p>{description}</p>
      </div>
    </div>
  );
};

export default Project;
