import React, { Component } from "react";

class Contact extends Component {
  constructor() {
    super();
    this.state = {
      message: "Hello send message",
    };
  }
  changeMessage() {
    this.setState({
      message: "Thanks",
    });
  }
  render() {
    return (
      <div>
        <h1>{this.state.message}</h1>
        <button onClick={() => this.changeMessage()}>Contact</button>
      </div>
    );
  }
}

export default Contact;
