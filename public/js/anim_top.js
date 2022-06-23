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

eval("var time_animate = 300;\nvar time_increment = 100;\n$(function () {\n  console.log('animating top'); // line1\n\n  $(\".line_top_1\").animate({\n    width: '548px'\n  }, time_animate, function () {\n    timeIncrement(); // line 2\n\n    $(\".line_top_2\").animate({\n      width: '448px'\n    }, time_animate, function () {\n      timeIncrement(); // line 3\n\n      $(\".line_top_3\").animate({\n        width: '340px'\n      }, time_animate, function () {\n        timeIncrement(); // line4\n\n        $(\".line_top_4\").animate({\n          width: '258px'\n        }, time_animate, function () {// Animation complete.\n        });\n      });\n    });\n  });\n});\n\nfunction timeIncrement() {\n  console.log('timeIncrement()');\n  time_animate += time_increment;\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYW5pbV90b3AuanMuanMiLCJuYW1lcyI6WyJ0aW1lX2FuaW1hdGUiLCJ0aW1lX2luY3JlbWVudCIsIiQiLCJjb25zb2xlIiwibG9nIiwiYW5pbWF0ZSIsIndpZHRoIiwidGltZUluY3JlbWVudCJdLCJzb3VyY2VSb290IjoiIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL2pzL2FuaW1fdG9wLmpzP2U3ZTAiXSwic291cmNlc0NvbnRlbnQiOlsiXHR2YXIgdGltZV9hbmltYXRlID0gMzAwO1xuXHR2YXIgdGltZV9pbmNyZW1lbnQgPSAxMDA7XG5cdCQoZnVuY3Rpb24oKXtcblx0XHRjb25zb2xlLmxvZygnYW5pbWF0aW5nIHRvcCcpO1xuXHRcdC8vIGxpbmUxXG5cdFx0JCggXCIubGluZV90b3BfMVwiICkuYW5pbWF0ZSh7XG5cdFx0XHR3aWR0aDogJzU0OHB4J1xuXHRcdH0sIHRpbWVfYW5pbWF0ZSwgZnVuY3Rpb24oKSB7XG5cblx0XHRcdHRpbWVJbmNyZW1lbnQoKTtcblx0XHRcdC8vIGxpbmUgMlxuXHRcdFx0JCggXCIubGluZV90b3BfMlwiICkuYW5pbWF0ZSh7XG5cdFx0XHRcdHdpZHRoOiAnNDQ4cHgnXG5cdFx0XHR9LCB0aW1lX2FuaW1hdGUgLCBmdW5jdGlvbigpIHtcblxuXHRcdFx0XHR0aW1lSW5jcmVtZW50KCk7XG5cdFx0XHRcdC8vIGxpbmUgM1xuXHRcdFx0XHQkKCBcIi5saW5lX3RvcF8zXCIgKS5hbmltYXRlKHtcblx0XHRcdFx0XHR3aWR0aDogJzM0MHB4J1xuXHRcdFx0XHR9LCB0aW1lX2FuaW1hdGUsIGZ1bmN0aW9uKCkge1xuXHRcdFx0XHRcdFxuXHRcdFx0XHRcdHRpbWVJbmNyZW1lbnQoKTtcblx0XHRcdFx0XHQvLyBsaW5lNFxuXHRcdFx0XHRcdCQoIFwiLmxpbmVfdG9wXzRcIiApLmFuaW1hdGUoe1xuXHRcdFx0XHRcdFx0d2lkdGg6ICcyNThweCdcblx0XHRcdFx0XHR9LCB0aW1lX2FuaW1hdGUsIGZ1bmN0aW9uKCkge1xuXHRcdFx0XHRcdFx0Ly8gQW5pbWF0aW9uIGNvbXBsZXRlLlxuXHRcdFx0XHRcdH0pO1xuXG5cdFx0XHRcdH0pO1xuXG5cdFx0XHR9KTtcblxuXHRcdH0pO1xuXHR9KTtcblxuXHRmdW5jdGlvbiB0aW1lSW5jcmVtZW50KCl7XG5cdFx0Y29uc29sZS5sb2coJ3RpbWVJbmNyZW1lbnQoKScpO1xuXHRcdHRpbWVfYW5pbWF0ZSArPSB0aW1lX2luY3JlbWVudDtcblx0fSJdLCJtYXBwaW5ncyI6IkFBQUMsSUFBSUEsWUFBWSxHQUFHLEdBQW5CO0FBQ0EsSUFBSUMsY0FBYyxHQUFHLEdBQXJCO0FBQ0FDLENBQUMsQ0FBQyxZQUFVO0VBQ1hDLE9BQU8sQ0FBQ0MsR0FBUixDQUFZLGVBQVosRUFEVyxDQUVYOztFQUNBRixDQUFDLENBQUUsYUFBRixDQUFELENBQW1CRyxPQUFuQixDQUEyQjtJQUMxQkMsS0FBSyxFQUFFO0VBRG1CLENBQTNCLEVBRUdOLFlBRkgsRUFFaUIsWUFBVztJQUUzQk8sYUFBYSxHQUZjLENBRzNCOztJQUNBTCxDQUFDLENBQUUsYUFBRixDQUFELENBQW1CRyxPQUFuQixDQUEyQjtNQUMxQkMsS0FBSyxFQUFFO0lBRG1CLENBQTNCLEVBRUdOLFlBRkgsRUFFa0IsWUFBVztNQUU1Qk8sYUFBYSxHQUZlLENBRzVCOztNQUNBTCxDQUFDLENBQUUsYUFBRixDQUFELENBQW1CRyxPQUFuQixDQUEyQjtRQUMxQkMsS0FBSyxFQUFFO01BRG1CLENBQTNCLEVBRUdOLFlBRkgsRUFFaUIsWUFBVztRQUUzQk8sYUFBYSxHQUZjLENBRzNCOztRQUNBTCxDQUFDLENBQUUsYUFBRixDQUFELENBQW1CRyxPQUFuQixDQUEyQjtVQUMxQkMsS0FBSyxFQUFFO1FBRG1CLENBQTNCLEVBRUdOLFlBRkgsRUFFaUIsWUFBVyxDQUMzQjtRQUNBLENBSkQ7TUFNQSxDQVpEO0lBY0EsQ0FwQkQ7RUFzQkEsQ0E1QkQ7QUE2QkEsQ0FoQ0EsQ0FBRDs7QUFrQ0EsU0FBU08sYUFBVCxHQUF3QjtFQUN2QkosT0FBTyxDQUFDQyxHQUFSLENBQVksaUJBQVo7RUFDQUosWUFBWSxJQUFJQyxjQUFoQjtBQUNBIn0=\n//# sourceURL=webpack-internal:///./resources/js/anim_top.js\n");

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