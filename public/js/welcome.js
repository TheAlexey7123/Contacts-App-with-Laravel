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

eval("var navbar = document.querySelector(\".navbar\");\nvar welcome = document.querySelector(\".welcome\");\nvar navbarToggle = document.querySelector(\"#navbarSupportedContent\");\nvar resizeBakgroundImg = function resizeBakgroundImg() {\n  var height = window.innerHeight - navbar.clientHeight;\n  welcome.style.height = \"\".concat(height, \"px\");\n};\nnavbarToggle.ontransitionend = resizeBakgroundImg;\nnavbarToggle.ontransitionstart = resizeBakgroundImg;\nwindow.onresize = resizeBakgroundImg;\nwindow.onload = resizeBakgroundImg;\ndocument.getElementsByTagName(\"main\")[0].classList.remove(\"py-4\");//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJuYXZiYXIiLCJkb2N1bWVudCIsInF1ZXJ5U2VsZWN0b3IiLCJ3ZWxjb21lIiwibmF2YmFyVG9nZ2xlIiwicmVzaXplQmFrZ3JvdW5kSW1nIiwiaGVpZ2h0Iiwid2luZG93IiwiaW5uZXJIZWlnaHQiLCJjbGllbnRIZWlnaHQiLCJzdHlsZSIsImNvbmNhdCIsIm9udHJhbnNpdGlvbmVuZCIsIm9udHJhbnNpdGlvbnN0YXJ0Iiwib25yZXNpemUiLCJvbmxvYWQiLCJnZXRFbGVtZW50c0J5VGFnTmFtZSIsImNsYXNzTGlzdCIsInJlbW92ZSJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvd2VsY29tZS5qcz8yNmQyIl0sInNvdXJjZXNDb250ZW50IjpbImNvbnN0IG5hdmJhciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIubmF2YmFyXCIpO1xyXG5jb25zdCB3ZWxjb21lID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi53ZWxjb21lXCIpO1xyXG5jb25zdCBuYXZiYXJUb2dnbGUgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiI25hdmJhclN1cHBvcnRlZENvbnRlbnRcIik7XHJcblxyXG5jb25zdCByZXNpemVCYWtncm91bmRJbWcgPSAoKSA9PiB7XHJcbiAgY29uc3QgaGVpZ2h0ID0gd2luZG93LmlubmVySGVpZ2h0IC0gbmF2YmFyLmNsaWVudEhlaWdodDtcclxuICB3ZWxjb21lLnN0eWxlLmhlaWdodCA9IGAke2hlaWdodH1weGA7XHJcbn07XHJcblxyXG5uYXZiYXJUb2dnbGUub250cmFuc2l0aW9uZW5kID0gcmVzaXplQmFrZ3JvdW5kSW1nO1xyXG5uYXZiYXJUb2dnbGUub250cmFuc2l0aW9uc3RhcnQgPSByZXNpemVCYWtncm91bmRJbWc7XHJcbndpbmRvdy5vbnJlc2l6ZSA9IHJlc2l6ZUJha2dyb3VuZEltZztcclxud2luZG93Lm9ubG9hZCA9IHJlc2l6ZUJha2dyb3VuZEltZztcclxuZG9jdW1lbnQuZ2V0RWxlbWVudHNCeVRhZ05hbWUoXCJtYWluXCIpWzBdLmNsYXNzTGlzdC5yZW1vdmUoXCJweS00XCIpOyJdLCJtYXBwaW5ncyI6IkFBQUEsSUFBTUEsTUFBTSxHQUFHQyxRQUFRLENBQUNDLGFBQWEsQ0FBQyxTQUFTLENBQUM7QUFDaEQsSUFBTUMsT0FBTyxHQUFHRixRQUFRLENBQUNDLGFBQWEsQ0FBQyxVQUFVLENBQUM7QUFDbEQsSUFBTUUsWUFBWSxHQUFHSCxRQUFRLENBQUNDLGFBQWEsQ0FBQyx5QkFBeUIsQ0FBQztBQUV0RSxJQUFNRyxrQkFBa0IsR0FBRyxTQUFyQkEsa0JBQWtCQSxDQUFBLEVBQVM7RUFDL0IsSUFBTUMsTUFBTSxHQUFHQyxNQUFNLENBQUNDLFdBQVcsR0FBR1IsTUFBTSxDQUFDUyxZQUFZO0VBQ3ZETixPQUFPLENBQUNPLEtBQUssQ0FBQ0osTUFBTSxNQUFBSyxNQUFBLENBQU1MLE1BQU0sT0FBSTtBQUN0QyxDQUFDO0FBRURGLFlBQVksQ0FBQ1EsZUFBZSxHQUFHUCxrQkFBa0I7QUFDakRELFlBQVksQ0FBQ1MsaUJBQWlCLEdBQUdSLGtCQUFrQjtBQUNuREUsTUFBTSxDQUFDTyxRQUFRLEdBQUdULGtCQUFrQjtBQUNwQ0UsTUFBTSxDQUFDUSxNQUFNLEdBQUdWLGtCQUFrQjtBQUNsQ0osUUFBUSxDQUFDZSxvQkFBb0IsQ0FBQyxNQUFNLENBQUMsQ0FBQyxDQUFDLENBQUMsQ0FBQ0MsU0FBUyxDQUFDQyxNQUFNLENBQUMsTUFBTSxDQUFDIiwiaWdub3JlTGlzdCI6W10sImZpbGUiOiIuL3Jlc291cmNlcy9qcy93ZWxjb21lLmpzIiwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/js/welcome.js\n");

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