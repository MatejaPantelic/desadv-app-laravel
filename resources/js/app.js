import './bootstrap';

import Alpine from 'alpinejs';
import { Datepicker, Input, initTE } from "tw-elements";
initTE({ Datepicker, Input });

window.Alpine = Alpine;

Alpine.start();
