import React, { useState, useEffect, useCallback } from "react";
import Destination from "../components/Destination";
import About from "../components/About";
import Navbar from "../components/Navbar";
import Search from "../components/Search/Search";
import Loading from "../components/Loading";
import { setVoyages } from "../redux/actions/voyagesActions";
import { useDispatch } from "react-redux";
import Footer from "../components/Footer";
import Aos from "aos";
import "aos/dist/aos.css";

const url = "http://localhost:8000/api/ville";
const Mainpage = () => {
  const [loading, setLoading] = useState(true);
  const dispatch = useDispatch();

  const fetchVoyages = useCallback(async () => {
    setLoading(true);
    try {
      // Add timeout to prevent hanging
      const controller = new AbortController();
      const timeoutId = setTimeout(() => controller.abort(), 5000); // 5 second timeout

      const response = await fetch(url, {
        signal: controller.signal,
        headers: {
          "Content-Type": "application/json",
        },
      });
      clearTimeout(timeoutId);

      if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
      }
      const ville = await response.json();
      dispatch(setVoyages(ville));
      setLoading(false);
      console.log("Successfully loaded data:", ville);
    } catch (error) {
      console.log("API Error:", error);
      console.log("Loading app without backend data...");
      // Provide empty data to allow app to load
      dispatch(setVoyages([]));
      setLoading(false);
    }
  }, [dispatch]);
  useEffect(() => {
    fetchVoyages();
    Aos.init({ duration: 1500 });
  }, [fetchVoyages]);
  if (loading) {
    return (
      <main>
        <Loading />
      </main>
    );
  }
  return (
    <div>
      <Navbar />
      <Search />
      <About />
      <Destination />
      <Footer />
    </div>
  );
};

export default Mainpage;
