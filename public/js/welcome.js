/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/welcome.js":
/*!*********************************!*\
  !*** ./resources/js/welcome.js ***!
  \*********************************/
/***/ (() => {

eval("var navbar = document.querySelector(\".navbar\");\nvar welcome = document.querySelector(\".welcome\");\nvar navbarToggle = document.querySelector(\"#navbarSupportedContent\");\nvar resizeBakgroundImg = function resizeBakgroundImg() {\n  var height = window.innerHeight - navbar.clientHeight;\n  welcome.style.height = \"\".concat(height, \"px\");\n};\nnavbarToggle.ontransitionend = resizeBakgroundImg;\nnavbarToggle.ontransitionstart = resizeBakgroundImg;\nwindow.onresize = resizeBakgroundImg;\nwindow.onload = resizeBakgroundImg;\ndocument.getElementsByTagName(\"main\")[0].classList.remove(\"py-4\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJuYXZiYXIiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJ3ZWxjb21lIiwibmF2YmFyVG9nZ2xlIiwicmVzaXplQmFrZ3JvdW5kSW1nIiwiaGVpZ2h0Iiwid2luZG93IiwiaW5uZXJIZWlnaHQiLCJjbGllbnRIZWlnaHQiLCJzdHlsZSIsImNvbmNhdCIsIm9udHJhbnNpdGlvbmVuZCIsIm9udHJhbnNpdGlvbnN0YXJ0Iiwib25yZXNpemUiLCJvbmxvYWQiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImNsYXNzTGlzdCIsInJlbW92ZSJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvd2VsY29tZS5qcz8yNmQyIl0sInNvdXJjZXNDb250ZW50IjpbImNvbnN0IG5hdmJhciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIubmF2YmFyXCIpO1xuY29uc3Qgd2VsY29tZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIud2VsY29tZVwiKTtcbmNvbnN0IG5hdmJhclRvZ2dsZSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjbmF2YmFyU3VwcG9ydGVkQ29udGVudFwiKTtcblxuY29uc3QgcmVzaXplQmFrZ3JvdW5kSW1nID0gKCkgPT4ge1xuICBjb25zdCBoZWlnaHQgPSB3aW5kb3cuaW5uZXJIZWlnaHQgLSBuYXZiYXIuY2xpZW50SGVpZ2h0O1xuICB3ZWxjb21lLnN0eWxlLmhlaWdodCA9IGAke2hlaWdodH1weGA7XG59O1xuXG5uYXZiYXJUb2dnbGUub250cmFuc2l0aW9uZW5kID0gcmVzaXplQmFrZ3JvdW5kSW1nO1xubmF2YmFyVG9nZ2xlLm9udHJhbnNpdGlvbnN0YXJ0ID0gcmVzaXplQmFrZ3JvdW5kSW1nO1xud2luZG93Lm9ucmVzaXplID0gcmVzaXplQmFrZ3JvdW5kSW1nO1xud2luZG93Lm9ubG9hZCA9IHJlc2l6ZUJha2dyb3VuZEltZztcbmRvY3VtZW50LmdldEVsZW1lbnRzQnlUYWdOYW1lKFwibWFpblwiKVswXS5jbGFzc0xpc3QucmVtb3ZlKFwicHktNFwiKTsiXSwibWFwcGluZ3MiOiJBQUFBLElBQU1BLE1BQU0sR0FBR0MsUUFBUSxDQUFDQyxhQUFhLENBQUMsU0FBUyxDQUFDO0FBQ2hELElBQU1DLE9BQU8sR0FBR0YsUUFBUSxDQUFDQyxhQUFhLENBQUMsVUFBVSxDQUFDO0FBQ2xELElBQU1FLFlBQVksR0FBR0gsUUFBUSxDQUFDQyxhQUFhLENBQUMseUJBQXlCLENBQUM7QUFFdEUsSUFBTUcsa0JBQWtCLEdBQUcsU0FBckJBLGtCQUFrQkEsQ0FBQSxFQUFTO0VBQy9CLElBQU1DLE1BQU0sR0FBR0MsTUFBTSxDQUFDQyxXQUFXLEdBQUdSLE1BQU0sQ0FBQ1MsWUFBWTtFQUN2RE4sT0FBTyxDQUFDTyxLQUFLLENBQUNKLE1BQU0sTUFBQUssTUFBQSxDQUFNTCxNQUFNLE9BQUk7QUFDdEMsQ0FBQztBQUVERixZQUFZLENBQUNRLGVBQWUsR0FBR1Asa0JBQWtCO0FBQ2pERCxZQUFZLENBQUNTLGlCQUFpQixHQUFHUixrQkFBa0I7QUFDbkRFLE1BQU0sQ0FBQ08sUUFBUSxHQUFHVCxrQkFBa0I7QUFDcENFLE1BQU0sQ0FBQ1EsTUFBTSxHQUFHVixrQkFBa0I7QUFDbENKLFFBQVEsQ0FBQ2Usb0JBQW9CLENBQUMsTUFBTSxDQUFDLENBQUMsQ0FBQyxDQUFDLENBQUNDLFNBQVMsQ0FBQ0MsTUFBTSxDQUFDLE1BQU0sQ0FBQyIsImlnbm9yZUxpc3QiOltdLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvd2VsY29tZS5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/welcome.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/welcome.js"]();
/******/ 	
/******/ })()
;