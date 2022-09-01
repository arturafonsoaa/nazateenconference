import "./bootstrap";
import AOS from "aos";
import.meta.glob(["../img/**"]);
import { Countdown } from "./countdown";

AOS.init({
    duration: 800,
});

Countdown();
setInterval(Countdown, 1000);
