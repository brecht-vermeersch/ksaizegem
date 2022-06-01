import 'normalize.css/normalize.css';
import './styles/app.scss';
import './scripts/calendar.js';

{
    document.addEventListener("DOMContentLoaded", function () {
      let node = document.querySelector(".preload-transitions");
      node.classList.remove("preload-transitions");
    });
}