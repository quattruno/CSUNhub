import React from "react";

import "./ClassesTog.css";

const classesTog = props => (
  <button className="toggle-button" onClick={props.click}>
    <div className="toggle-button_line" />
    <div className="spacer" />
    <div className="toggle-button_title">Classes</div>

    <div className="toggle-button_line" />
  </button>
);

export default classesTog;
