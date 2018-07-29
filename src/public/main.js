import $ from 'jquery';
import 'bootstrap/dist/js/bootstrap.bundle.min';
import { refreshHour } from "./js/heure";
import './css/styles.css';

setInterval(refreshHour, 1000);
