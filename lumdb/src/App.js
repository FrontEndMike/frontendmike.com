import React, { Component } from 'react';
import logo from './logo.svg';
import './App.css';

const welcome = "Welcome to React";

class App extends Component {
  render() {
    return (
      <div className="App">
        <header className="App-header">
          <img src={logo} className="App-logo" alt="logo" /> 
          <Welcome />
        </header>
        <p className="App-intro">
          To get started, edit <code>src/App.js</code> and save to reload.
        </p>
      </div>
    );
  }
}

class Welcome extends Component {
  render() {
    return(
      <h1 className="App-title">{welcome}</h1>
    )
  }
}

export default App;
