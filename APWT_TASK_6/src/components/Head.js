import React from "react";
import { Link,useHistory } from "react-router-dom";
const Head = () => {

  return (
    <div>
      <Link to="/">Home</Link><nbsp/>
      <Link to="/About">About</Link>
      <Link to="/Login">Login</Link>
      <Link to="/Signup">Sign Up</Link>
      <Link to="/products">Products</Link>
      <Link to="/productlist">Product List</Link>
      <Link to="/contact">Contact us</Link>
    </div>
  );
};
export default Head;
