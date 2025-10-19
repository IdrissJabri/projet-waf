import React from "react";
import "aos/dist/aos.css";
const Destination = () => {
  return (
    <div>
      <div className="cards ">
        <h2 data-aos="fade-down">Découvrez ces destinations EPIC!</h2>
        <div className="cards_container row ">
          <div className="cards_wrapper ">
            <div className="cards_items ">
              <section className="cards_item " data-aos="fade-right">
                <img
                  src={require("../images/hercule.jpg").default}
                  alt="Grottes d'Hercule"
                />
                <div class="card-body">
                  <h5 class="card-title">Grottes d'Hercule</h5>
                  <p class="card-text">
                    Ouvertes au public, les Grottes d'Hercule sont de
                    magnifiques grottes de calcaire auxquelles plusieurs mythes
                    grecques sont associés. ... En effet, selon la mythologie,
                    ce serait en ces lieux que le fils de Poséidon (le cyclope
                    Polyphème) aurait vécu.
                  </p>
                </div>
              </section>

              <section className="cards_item" data-aos="fade-up">
                <img
                  src={require("../images/capspartel.jpg").default}
                  alt="Cap Spartel"
                />
                <div class="card-body">
                  <h5 class="card-title">Cap Spartel</h5>
                  <p class="card-text">
                    Ce promontoire pittoresque est un lieu idéal pour s’échapper
                    les foules de la vieille ville et vous trouverez sur place
                    un phare qui date du 19e siècle. C’est situé près des
                    grottes d’Hercule, donc pensez à visiter les deux sites
                    ensemble, soit en bus touristique soit en louant un taxi
                    privé.
                  </p>
                </div>
              </section>
              <section className="cards_item" data-aos="fade-up">
                <img
                  src={require("../images/kasba.jpg").default}
                  alt="Musee de la Kasbah"
                />
                <div class="card-body">
                  <h5 class="card-title">Musee de la Kasbah</h5>
                  <p class="card-text">
                    Une très bonne introduction à l’histoire de la ville, le
                    Musée de la Casbah devrait être visité en conjonction avec
                    la médina, qui est juste à côté. À part les expositions,
                    l'édifice—un ancien palais avec une cour carrelée —vaut bien
                    le détour.
                  </p>
                </div>
              </section>
            </div>
          </div>
        </div>
      </div>
    </div>
  );
};

export default Destination;
