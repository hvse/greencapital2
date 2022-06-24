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

/***/ "./resources/js/anim_top.js":
/*!**********************************!*\
  !*** ./resources/js/anim_top.js ***!
  \**********************************/
/***/ (() => {

eval("var time_animate = 300;\nvar time_increment = 100;\n$(function () {\n  console.log('animating top'); // line1\n\n  $(\".line_top_1\").animate({\n    width: '548px'\n  }, time_animate, function () {\n    timeIncrement(); // line 2\n\n    $(\".line_top_2\").animate({\n      width: '448px'\n    }, time_animate, function () {\n      timeIncrement(); // line 3\n\n      $(\".line_top_3\").animate({\n        width: '340px'\n      }, time_animate, function () {\n        timeIncrement(); // line4\n\n        $(\".line_top_4\").animate({\n          width: '258px'\n        }, time_animate, function () {// Animation complete.\n        });\n      });\n    });\n  });\n});\n\nfunction timeIncrement() {\n  console.log('timeIncrement()');\n  time_animate += time_increment;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJ0aW1lX2FuaW1hdGUiLCJ0aW1lX2luY3JlbWVudCIsIiQiLCJjb25zb2xlIiwibG9nIiwiYW5pbWF0ZSIsIndpZHRoIiwidGltZUluY3JlbWVudCJdLCJzb3VyY2VzIjpbIndlYnBhY2s6Ly8vLi9yZXNvdXJjZXMvanMvYW5pbV90b3AuanM/ZTdlMCJdLCJzb3VyY2VzQ29udGVudCI6WyJcdHZhciB0aW1lX2FuaW1hdGUgPSAzMDA7XG5cdHZhciB0aW1lX2luY3JlbWVudCA9IDEwMDtcblx0JChmdW5jdGlvbigpe1xuXHRcdGNvbnNvbGUubG9nKCdhbmltYXRpbmcgdG9wJyk7XG5cdFx0Ly8gbGluZTFcblx0XHQkKCBcIi5saW5lX3RvcF8xXCIgKS5hbmltYXRlKHtcblx0XHRcdHdpZHRoOiAnNTQ4cHgnXG5cdFx0fSwgdGltZV9hbmltYXRlLCBmdW5jdGlvbigpIHtcblxuXHRcdFx0dGltZUluY3JlbWVudCgpO1xuXHRcdFx0Ly8gbGluZSAyXG5cdFx0XHQkKCBcIi5saW5lX3RvcF8yXCIgKS5hbmltYXRlKHtcblx0XHRcdFx0d2lkdGg6ICc0NDhweCdcblx0XHRcdH0sIHRpbWVfYW5pbWF0ZSAsIGZ1bmN0aW9uKCkge1xuXG5cdFx0XHRcdHRpbWVJbmNyZW1lbnQoKTtcblx0XHRcdFx0Ly8gbGluZSAzXG5cdFx0XHRcdCQoIFwiLmxpbmVfdG9wXzNcIiApLmFuaW1hdGUoe1xuXHRcdFx0XHRcdHdpZHRoOiAnMzQwcHgnXG5cdFx0XHRcdH0sIHRpbWVfYW5pbWF0ZSwgZnVuY3Rpb24oKSB7XG5cdFx0XHRcdFx0XG5cdFx0XHRcdFx0dGltZUluY3JlbWVudCgpO1xuXHRcdFx0XHRcdC8vIGxpbmU0XG5cdFx0XHRcdFx0JCggXCIubGluZV90b3BfNFwiICkuYW5pbWF0ZSh7XG5cdFx0XHRcdFx0XHR3aWR0aDogJzI1OHB4J1xuXHRcdFx0XHRcdH0sIHRpbWVfYW5pbWF0ZSwgZnVuY3Rpb24oKSB7XG5cdFx0XHRcdFx0XHQvLyBBbmltYXRpb24gY29tcGxldGUuXG5cdFx0XHRcdFx0fSk7XG5cblx0XHRcdFx0fSk7XG5cblx0XHRcdH0pO1xuXG5cdFx0fSk7XG5cdH0pO1xuXG5cdGZ1bmN0aW9uIHRpbWVJbmNyZW1lbnQoKXtcblx0XHRjb25zb2xlLmxvZygndGltZUluY3JlbWVudCgpJyk7XG5cdFx0dGltZV9hbmltYXRlICs9IHRpbWVfaW5jcmVtZW50O1xuXHR9Il0sIm1hcHBpbmdzIjoiQUFBQyxJQUFJQSxZQUFZLEdBQUcsR0FBbkI7QUFDQSxJQUFJQyxjQUFjLEdBQUcsR0FBckI7QUFDQUMsQ0FBQyxDQUFDLFlBQVU7RUFDWEMsT0FBTyxDQUFDQyxHQUFSLENBQVksZUFBWixFQURXLENBRVg7O0VBQ0FGLENBQUMsQ0FBRSxhQUFGLENBQUQsQ0FBbUJHLE9BQW5CLENBQTJCO0lBQzFCQyxLQUFLLEVBQUU7RUFEbUIsQ0FBM0IsRUFFR04sWUFGSCxFQUVpQixZQUFXO0lBRTNCTyxhQUFhLEdBRmMsQ0FHM0I7O0lBQ0FMLENBQUMsQ0FBRSxhQUFGLENBQUQsQ0FBbUJHLE9BQW5CLENBQTJCO01BQzFCQyxLQUFLLEVBQUU7SUFEbUIsQ0FBM0IsRUFFR04sWUFGSCxFQUVrQixZQUFXO01BRTVCTyxhQUFhLEdBRmUsQ0FHNUI7O01BQ0FMLENBQUMsQ0FBRSxhQUFGLENBQUQsQ0FBbUJHLE9BQW5CLENBQTJCO1FBQzFCQyxLQUFLLEVBQUU7TUFEbUIsQ0FBM0IsRUFFR04sWUFGSCxFQUVpQixZQUFXO1FBRTNCTyxhQUFhLEdBRmMsQ0FHM0I7O1FBQ0FMLENBQUMsQ0FBRSxhQUFGLENBQUQsQ0FBbUJHLE9BQW5CLENBQTJCO1VBQzFCQyxLQUFLLEVBQUU7UUFEbUIsQ0FBM0IsRUFFR04sWUFGSCxFQUVpQixZQUFXLENBQzNCO1FBQ0EsQ0FKRDtNQU1BLENBWkQ7SUFjQSxDQXBCRDtFQXNCQSxDQTVCRDtBQTZCQSxDQWhDQSxDQUFEOztBQWtDQSxTQUFTTyxhQUFULEdBQXdCO0VBQ3ZCSixPQUFPLENBQUNDLEdBQVIsQ0FBWSxpQkFBWjtFQUNBSixZQUFZLElBQUlDLGNBQWhCO0FBQ0EiLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYW5pbV90b3AuanMuanMiLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/anim_top.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./resources/js/anim_top.js"]();
/******/ 	
/******/ })()
;