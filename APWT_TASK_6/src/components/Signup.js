import axios from "axios";
import React, { useState } from "react";
import { Link } from "react-router-dom";
import { useHistory } from "react-router-dom";

const SignUp = () => {
  const [user, setUser] = useState({
    name: "",
    email: "",
    address: "",
    phone: "",
    password: "",
  });

  const validateEmail = (email) =>
    email.match(
      /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
    );

  const validatePass = (password) => 
    password.match();

  const history = useHistory();

  const [nameErr, setNameErr] = useState("");
  const [emailErr, setEmailErr] = useState("");
  const [addressErr, setAddressErr] = useState("");
  const [phoneErr, setphoneErr] = useState("");
  const [passwordErr, setpasswordErr] = useState("");

  const handleChange = (e) => {
    const newUser = { ...user };
    newUser[e.target.name] = e.target.value;
    setUser(newUser);
  };

  const handleSubmit = (e) => {
    console.log(user);
    e.preventDefault();
    if (
      user.name !== "" &&
      user.email !== "" &&
      user.address !== "" &&
      user.phone !== "" &&
      user.password !== ""
    ) {
      setNameErr("");
      setEmailErr("");
      setAddressErr("");
      setphoneErr("");
      setpasswordErr("");
      axios
        .post("http://127.0.0.1:8000/api/signUp", user)
        .then((resp) => {
          if (!resp.data) {
            console.log("erorr");
          } else {
            localStorage.setItem("id", resp.data.id);
            localStorage.setItem("userData", resp.data);
            history.push("/");
          }
        })
        
    } else {
      if (user.name === "") setNameErr("Please fill the name");
      else setNameErr("");

      if (!validateEmail(user.email)) setEmailErr("Please enter valid mail");
      else setEmailErr("");

      if (user.address === "") setAddressErr("Please fill the phone no");
      else setAddressErr("");

      if (user.phone === "") setphoneErr("Please fill the phone no");
      else setphoneErr("");

      if (!validatePass(user.password))
        setpasswordErr(
          "Invalid Password"
        );
      else setpasswordErr("");
    }
  };

  return (
    <div>
      {/* <Header/> */}
      <div className="register_page">
        <div className="register_body">
          <form onSubmit={handleSubmit}>
            <div className="mb-3">
              <label className="form-label">
                {" "}
                Name :
              </label>
              <input
                type="text"
                name="name"
                className="form-control"
                id="formGroupExampleInput"
                onChange={handleChange}
              />
              <p style={{ color: "red" }}>{nameErr}</p>
            </div>
            <div className="mb-3">
              <label
                
                className="form-label"
                style={{ marginTop: "20px" }}
              >
                Email :
              </label>
              <input
                type="text"
                name="email"
                className="form-control"
                id="formGroupExampleInput"
                onChange={handleChange}
              />
              <p style={{ color: "red" }}>{emailErr}</p>
            </div>

            <div className="mb-3">
              <label
                for="formGroupExampleInput"
                className="form-label"
                style={{ marginTop: "20px" }}
              >
                Address :
              </label>
              <input
                type="text"
                name="address"
                className="form-control"
                id="formGroupExampleInput"
                onChange={handleChange}
              />
              <p style={{ color: "red" }}>{addressErr}</p>
            </div>

            <div className="mb-3" style={{ marginTop: "20px" }}>
              <label for="formGroupExampleInput2" className="form-label">
                Phone no :
              </label>
              <input
                type="text"
                name="phone"
                className="form-control"
                id="formGroupExampleInput2"
                onChange={handleChange}
              />
              <p style={{ color: "red" }}>{phoneErr}</p>
            </div>

            <div className="mb-3" style={{ marginTop: "20px" }}>
              <label for="formGroupExampleInput2" className="form-label">
                Password :
              </label>
              <input
                type="password"
                name="password"
                className="form-control"
                id="formGroupExampleInput2"
                onChange={handleChange}
              />
              <p style={{ color: "red" }}>{passwordErr}</p>
            </div>

            <input
              type="submit"
              name="submit"
              value="REGISTER"
              className="btn btn-primary login_button"
            />

            <div className="swap_between_login_register">
              <p>Already have an account?</p>
              <u>
                {" "}
                <Link to="/login"> Sign in here</Link>
              </u>
            </div>
          </form>
        </div>
      </div>
    </div>
  );
};

export default SignUp;
