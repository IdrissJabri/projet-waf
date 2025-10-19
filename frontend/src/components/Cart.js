import React, { useState, useEffect } from "react";
import Accordion from "@material-ui/core/Accordion";
import AccordionSummary from "@material-ui/core/AccordionSummary";
import AccordionDetails from "@material-ui/core/AccordionDetails";
import Typography from "@material-ui/core/Typography";
import ExpandMoreIcon from "@material-ui/icons/ExpandMore";
import { Redirect } from "react-router-dom";

const Cart = () => {
  const [isActive, setActive] = useState(false);
  const toggleClass = () => {
    setActive(!isActive);
  };
  const [Cart, setCart] = useState("");
  const CartOut = () => {
    <Redirect to="/" />;
    localStorage.removeItem("cart");
  };
  useEffect(() => {
    const response = localStorage.getItem("cart");
    const cart = JSON.parse(response);
    setCart(cart);
  }, []);
  // useEffect(()=>{
  //   window.location.reload();
  // },[cartchange])

  if (Cart === null) {
    return (
      <div>
        <button
          className="nav-link"
          onClick={toggleClass}
          style={{ border: "none", background: "none", cursor: "pointer" }}
        >
          <div className="cart-icon">
            <i className="fab fa-opencart"></i>
            <span className="badge badge-danger">0</span>
          </div>
        </button>

        <div className={isActive ? "accordion" : "none"}>
          <Accordion>
            <AccordionSummary
              expandIcon={<ExpandMoreIcon />}
              aria-controls="panel1a-content"
              id="panel1a-header"
            >
              <Typography className="container">Aucun</Typography>
            </AccordionSummary>
            <AccordionDetails>
              <Typography></Typography>
            </AccordionDetails>
          </Accordion>
        </div>
      </div>
    );
  } else
    return (
      <div>
        <button
          className="nav-link"
          onClick={toggleClass}
          style={{ border: "none", background: "none", cursor: "pointer" }}
        >
          <div className="cart-icon">
            <i className="fab fa-opencart"></i>
            <span className="badge badge-danger">{Cart.psg}</span>
          </div>
        </button>

        <div className={isActive ? "accordion container" : "none"}>
          <Accordion>
            <AccordionSummary
              expandIcon={<ExpandMoreIcon />}
              aria-controls="panel1a-content"
              id="panel1a-header"
            >
              <div className="Container accSum">
                <div className="accAgence">{Cart.agence}</div>

                <div className="accPrix"> Prix:{Cart.prix}DH</div>

                <span className="accDate"> {Cart.date}</span>
              </div>
            </AccordionSummary>
            <AccordionDetails>
              <div className="accTotal">
                {Cart.psg} x Adultes <span>{Cart.prix * Cart.psg}DH </span>{" "}
                <a href="/">
                  {" "}
                  <i class="fas fa-trash-alt" onClick={CartOut}></i>
                </a>
              </div>
            </AccordionDetails>
          </Accordion>
        </div>
      </div>
    );
};

export default Cart;
