import React, { useState, useEffect } from "react";
import { useHistory } from "react-router-dom";
import Login from "../components/Login";
import Signup from "../components/Signup";
import Profile from "../components/Profile";
import Cart from "../components/Cart";
import "aos/dist/aos.css";
const Navbar = () => {
  const [login, setLogin] = useState(false);
  const [profile, setProfile] = useState(false);
  const [signup, setSignup] = useState(false);
  const result = localStorage.getItem("user");
  const users = JSON.parse(result);

  const [inlog, setInLog] = useState(false);
  const [admin, setAdmin] = useState(false);
  const [user, setUser] = useState({
    user: {
      nom: "",
      prenom: "",
      num_tel: "",
      email: "",
    },
  });
  const Logout = () => {
    localStorage.removeItem("user");
    setInLog(false);
    window.location.reload();
  };

  useEffect(() => {
    if (users !== null) {
      setInLog(true);
      setUser(users);
    }
  }, []); // Remove inlog from dependencies to prevent rerender loop

  return (
    <div>
      <nav
        className="navbar navbar-expand-md navbar-dark  fixed-top"
        data-aos="fade-down"
      >
        <a className="navbar-brand" href="/">
          <i class="far fa-ticket-alt"></i> Tadkirati
        </a>
        <button
          className="navbar-toggler"
          type="button"
          data-toggle="collapse"
          data-target="#navbar"
        >
          <span className="navbar-toggler-icon"></span>
        </button>

        <div className="collapse navbar-collapse" id="navbar">
          <ul className="navbar-nav ml-auto">
            <li className={inlog ? "nav-item none" : "nav-item inlog"}>
              <a className="nav-link" href="/Reclamation">
                Réclamation
              </a>
            </li>

            <li className={inlog ? "nav-item none" : "nav-item inlog"}>
              <div className="nav-link">
                <Signup
                  signup={signup}
                  setSignup={setSignup}
                  setLogin={setLogin}
                />
              </div>
            </li>
            <li className={inlog ? "nav-item none" : "nav-item inlog"}>
              <div className="nav-link">
                <Login
                  login={login}
                  setLogin={setLogin}
                  setInLog={setInLog}
                  setAdmin={setAdmin}
                  setSignup={setSignup}
                />
              </div>
            </li>

            <li className={inlog ? "nav-item none" : "nav-item inlog"}>
              <div class="dropdown show">
                <Cart />
              </div>
            </li>

            <li className={inlog ? "nav-item" : "nav-item none"}>
              <div class="dropdown show">
                <button
                  className="nav-link"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                  style={{
                    border: "none",
                    background: "none",
                    cursor: "pointer",
                  }}
                >
                  <i className="far fa-user-circle profile"></i>
                </button>

                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                  <div className="dropdown-item">
                    <Profile
                      profile={profile}
                      setProfile={setProfile}
                      user={user}
                    />
                  </div>
                  <a className="dropdown-item" href="/Reclamation">
                    Réclamation
                  </a>
                  <button
                    className="dropdown-item"
                    onClick={Logout}
                    style={{
                      border: "none",
                      background: "none",
                      cursor: "pointer",
                      textAlign: "left",
                      width: "100%",
                    }}
                  >
                    Logout
                  </button>
                </div>
              </div>
            </li>

            <li className={inlog ? "nav-item outlog" : "nav-item none"}>
              <div class="dropdown show">
                <Cart />
              </div>
            </li>

            <div></div>
          </ul>
        </div>
      </nav>
    </div>
  );
};

export default Navbar;
