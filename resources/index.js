import GetViewportOptions from 'get-viewport-options';

window.mobileWidth = 1279;
window.mobileWidthSmall = 768;
window.viewportOptions = new GetViewportOptions();

// Подключение эмулятора бэкенда
require('./js-backend/backend.js');