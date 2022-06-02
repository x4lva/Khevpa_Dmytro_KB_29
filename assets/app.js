import './styles/main.scss';

require('bootstrap');
import { Popover } from 'bootstrap';

let popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
let popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
    return new Popover(popoverTriggerEl)
})

console.log(popoverList)