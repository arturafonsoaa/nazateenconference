export const Countdown = () => {
    const days = document.getElementById("days");
    const hours = document.getElementById("hours");
    const mins = document.getElementById("mins");
    const secs = document.getElementById("secs");

    const event = "14 oct 2022 19:00:00";
    const eventDate = new Date(event);
    const currentDate = new Date();

    const totalSeconds = (eventDate - currentDate) / 1000;
    const totalDays = Math.floor(totalSeconds / 3600 / 24);
    const totalHours = Math.floor(totalSeconds / 3600) % 24;
    const totalMins = Math.floor(totalSeconds / 60) % 60;
    const totalSecs = Math.floor(totalSeconds) % 60;

    days.innerText = totalDays;
    hours.innerText = formatData(totalHours);
    mins.innerText = formatData(totalMins);
    secs.innerText = formatData(totalSecs);
};

const formatData = (time) => (time < 10 ? `0${time}` : time);
