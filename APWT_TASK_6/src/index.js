import React from "react";
import ReactDOM from "react-dom";
import { BrowserRouter as Router, Route, Switch } from "react-router-dom";
import "./index.css";
import App from "./App";
import Head from "./components/Head";
import Home from "./components/Home";
import About from "./components/About";
import Login from "./components/Login";
import SignUp from "./components/Signup";
import Products from "./components/Products";
import reportWebVitals from "./reportWebVitals";
import Contact from "./components/Contact";
import Productlist from "./components/Productlist";
import ProductDetails from "./components/ProductDetails";
import Data from "./components/Data";

ReactDOM.render(
  <React.StrictMode>
    <Router>
      <Head />
      <Switch>
        <Route exact path="/">
          <Home />
        </Route>
        <Route exact path="/about">
          <About />
        </Route>
        <Route exact path="/Login">
          <Login />
        </Route>
        <Route exact path="/Signup">
          <SignUp />
        </Route>
        <Route exact path="/products">
          <Products />
        </Route>
        <Route exact path="/contact">
          <Contact />
        </Route>
        <Route exact path="/Productlist">
          <Productlist />
        </Route>
        <Route exact path="/productlist/:id">
          <ProductDetails />
        </Route>
      </Switch>
    </Router>
  </React.StrictMode>,
  document.getElementById("root")
);

// If you want to start measuring performance in your app, pass a function
// to log results (for example: reportWebVitals(console.log))
// or send to an analytics endpoint. Learn more: https://bit.ly/CRA-vitals
reportWebVitals();
