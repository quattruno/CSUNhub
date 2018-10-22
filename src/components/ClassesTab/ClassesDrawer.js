import React from "react";
import "./ClassesDrawer.css";

const classesDrawer = props => {
  let drawer = "classes-drawer";
  if (props.show) {
    drawer = "classes-drawer open";
  }

  return (
    <nav className={drawer}>
      <header className="classes-drawer_title">Classes</header>
      <ul>
        <li>
          <a href="/">COMP 490/L SR Design Project</a>
        </li>
        <li>Professor Dousette 12:30PM - 3:15PM M/W</li>
        <li>
          <a href="/">Notes for this class</a>
        </li>
        <div className="classes-drawer_line" />
        <li>
          <a href="/">MATH 150B Calculus 2</a>
        </li>
        <li>Professor Teach 2:00PM - 3:15Pm Tu/Th</li>
        <li>
          <a href="/">Notes for this class</a>
        </li>
        <div className="classes-drawer_line" />
      </ul>
    </nav>
  );
};

export default classesDrawer;
