import React from "react";

const Footer = () => {
  return (
    <div>
      <div className="footer-up">
        <table className="footer-table">
          <tr>
            <td>
              <ul>
                <div>
                  <h5>Contact</h5>
                </div>

                <li>
                  {" "}
                  <h6>
                    <i class="fas fa-at"></i> nizaraitbrahim1@gmail.com
                  </h6>{" "}
                </li>
                <li>
                  {" "}
                  <h6>
                    <i class="far fa-address-card"></i> Rue Jamal Eddine
                    Afghani,Rés, Soukna Mouriha-Tanger
                  </h6>{" "}
                </li>
                <li>
                  {" "}
                  <h6>
                    <i class="fas fa-mobile-alt"></i> Tel: 05 39 32 41 71
                  </h6>{" "}
                </li>
                <li>
                  {" "}
                  <h6>
                    <i class="fas fa-phone-square"></i> Fax: 05 39 32 41 71
                  </h6>{" "}
                </li>
              </ul>
            </td>
            <td>
              <ul>
                <div>
                  <h3>Cartes acceptées</h3>
                </div>
                <li>
                  {" "}
                  <img
                    src={require("../images/mc.png").default}
                    alt="MasterCard"
                  />
                  <img src={require("../images/pp.png").default} alt="PayPal" />
                  <img src={require("../images/vi.png").default} alt="Visa" />
                  <img src={require("../images/cmi.png").default} alt="CMI" />
                </li>
              </ul>
            </td>
            <td>
              <ul>
                <li>
                  <button
                    style={{
                      border: "none",
                      background: "none",
                      cursor: "pointer",
                      textDecoration: "underline",
                      color: "inherit",
                    }}
                  >
                    Destinations
                  </button>
                </li>
                <li>
                  <button
                    style={{
                      border: "none",
                      background: "none",
                      cursor: "pointer",
                      textDecoration: "underline",
                      color: "inherit",
                    }}
                  >
                    A propos de nous
                  </button>
                </li>
                <li>
                  <button
                    style={{
                      border: "none",
                      background: "none",
                      cursor: "pointer",
                      textDecoration: "underline",
                      color: "inherit",
                    }}
                  >
                    Nous rejoindre
                  </button>
                </li>
                <li>
                  <button
                    style={{
                      border: "none",
                      background: "none",
                      cursor: "pointer",
                      textDecoration: "underline",
                      color: "inherit",
                    }}
                  >
                    Conditions Générales d'Utilisation
                  </button>
                </li>
              </ul>
            </td>
          </tr>
        </table>
      </div>
      <div className="footer-down">
        <div className="container">
          <div className="row py-2 d-flex align-items-center">
            <div className="col-md-12 text-center">
              <a href="https://facebook.com" aria-label="Facebook">
                <i className="fab fa-facebook text-white mr-4"></i>
              </a>
              <a href="https://twitter.com" aria-label="Twitter">
                <i className="fab fa-twitter  text-white mr-4"></i>
              </a>
              <a href="https://plus.google.com" aria-label="Google Plus">
                <i className="fab fa-google-plus-g text-white mr-4"></i>
              </a>
              <a href="https://linkedin.com" aria-label="LinkedIn">
                <i className="fab fa-linkedin-in  text-white mr-4"></i>
              </a>
              <a href="https://instagram.com" aria-label="Instagram">
                <i className="fab fa-instagram text-white mr-4"></i>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Footer;
