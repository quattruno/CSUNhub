import React from "react";
import "./Toolbar.css";
import ClassesTog from "../ClassesTab/ClassesTog";

const toolbar = props => (
  <header className="toolbar">
    <nav className="toolbar_nav">
      <div className="toolbar_logo">
        <a href="/">CSUN Hub</a>
      </div>
      <div className="toolbar_nav-items">
        <ul>
          <ClassesTog click={props.classesDrawerHandler} />

          <li>
            <a href="/">Books</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
);

export default toolbar;
