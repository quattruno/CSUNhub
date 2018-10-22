import React, { Component } from "react";
import Toolbar from "./components/Toolbar/Toolbar";
import Backdrop from "./components/Backdrop/Backdrop";
import ClassesDrawer from "./components/ClassesTab/ClassesDrawer";

class App extends Component {
  state = {
    classesDrawerOpen: false
  };

  classesDrawerHandler = () => {
    this.setState(prevState => {
      return { classesDrawerOpen: !prevState.classesDrawerOpen };
    });
  };

  backdropClickHandler = () => {
    this.setState({ classesDrawerOpen: false });
  };

  render() {
    let backdrop;
    if (this.state.classesDrawerOpen) {
      backdrop = <Backdrop click={this.backdropClickHandler} />;
    }

    return (
      <div style={{ height: "100%" }}>
        <Toolbar classesDrawerHandler={this.classesDrawerHandler} />
        <ClassesDrawer show={this.state.classesDrawerOpen} />
        {backdrop}
        <main style={{ marginLeft: "150px" }}>
          <p>This is a paragraph </p>
        </main>
      </div>
    );
  }
}

export default App;
