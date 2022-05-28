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

/***/ "./src/admin/js/back.js":
/*!******************************!*\
  !*** ./src/admin/js/back.js ***!
  \******************************/
/***/ (() => {

eval("var footerForm = document.querySelector(\"#footer-form\");\n\nif (footerForm) {\n  footerForm.addEventListener(\"submit\", function (e) {\n    e.preventDefault();\n    var hideFooter = footerForm.querySelector(\"#displayfooter\");\n    var getFooterId = footerForm.querySelector(\"#footer_template_id\");\n    var security = footerForm.querySelector(\"#security\").value;\n    var action = footerForm.querySelector(\"#action\").value;\n\n    if (getFooterId.value != \"\") {\n      var url = thinkus_admin_ajax.admin_ajax;\n      var formData = new FormData();\n      formData.append(\"action\", action);\n      formData.append(\"security\", security);\n      formData.append(\"footer_template_id\", getFooterId.value);\n      formData.append(\"displayfooter\", hideFooter.checked);\n      fetch(url, {\n        method: \"POST\",\n        body: formData\n      }).then(function (res) {\n        return res.json();\n      }).then(function (res) {\n        return console.log(res);\n      });\n    } else {}\n  });\n}//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJuYW1lcyI6WyJmb290ZXJGb3JtIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwiYWRkRXZlbnRMaXN0ZW5lciIsImUiLCJwcmV2ZW50RGVmYXVsdCIsImhpZGVGb290ZXIiLCJnZXRGb290ZXJJZCIsInNlY3VyaXR5IiwidmFsdWUiLCJhY3Rpb24iLCJ1cmwiLCJ0aGlua3VzX2FkbWluX2FqYXgiLCJhZG1pbl9hamF4IiwiZm9ybURhdGEiLCJGb3JtRGF0YSIsImFwcGVuZCIsImNoZWNrZWQiLCJmZXRjaCIsIm1ldGhvZCIsImJvZHkiLCJ0aGVuIiwicmVzIiwianNvbiIsImNvbnNvbGUiLCJsb2ciXSwic291cmNlcyI6WyJ3ZWJwYWNrOi8vdGhpbmt1cy8uL3NyYy9hZG1pbi9qcy9iYWNrLmpzPzEzMGUiXSwic291cmNlc0NvbnRlbnQiOlsiY29uc3QgZm9vdGVyRm9ybSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIjZm9vdGVyLWZvcm1cIik7XG5cbmlmIChmb290ZXJGb3JtKSB7XG4gIGZvb3RlckZvcm0uYWRkRXZlbnRMaXN0ZW5lcihcInN1Ym1pdFwiLCAoZSkgPT4ge1xuICAgIGUucHJldmVudERlZmF1bHQoKTtcbiAgICBjb25zdCBoaWRlRm9vdGVyID0gZm9vdGVyRm9ybS5xdWVyeVNlbGVjdG9yKFwiI2Rpc3BsYXlmb290ZXJcIik7XG4gICAgY29uc3QgZ2V0Rm9vdGVySWQgPSBmb290ZXJGb3JtLnF1ZXJ5U2VsZWN0b3IoXCIjZm9vdGVyX3RlbXBsYXRlX2lkXCIpO1xuICAgIGNvbnN0IHNlY3VyaXR5ID0gZm9vdGVyRm9ybS5xdWVyeVNlbGVjdG9yKFwiI3NlY3VyaXR5XCIpLnZhbHVlO1xuICAgIGNvbnN0IGFjdGlvbiA9IGZvb3RlckZvcm0ucXVlcnlTZWxlY3RvcihcIiNhY3Rpb25cIikudmFsdWU7XG5cbiAgICBpZiAoZ2V0Rm9vdGVySWQudmFsdWUgIT0gXCJcIikge1xuICAgICAgY29uc3QgdXJsID0gdGhpbmt1c19hZG1pbl9hamF4LmFkbWluX2FqYXg7XG4gICAgICBjb25zdCBmb3JtRGF0YSA9IG5ldyBGb3JtRGF0YSgpO1xuICAgICAgZm9ybURhdGEuYXBwZW5kKFwiYWN0aW9uXCIsIGFjdGlvbik7XG4gICAgICBmb3JtRGF0YS5hcHBlbmQoXCJzZWN1cml0eVwiLCBzZWN1cml0eSk7XG4gICAgICBmb3JtRGF0YS5hcHBlbmQoXCJmb290ZXJfdGVtcGxhdGVfaWRcIiwgZ2V0Rm9vdGVySWQudmFsdWUpO1xuICAgICAgZm9ybURhdGEuYXBwZW5kKFwiZGlzcGxheWZvb3RlclwiLCBoaWRlRm9vdGVyLmNoZWNrZWQpO1xuICAgICAgZmV0Y2godXJsLCB7XG4gICAgICAgIG1ldGhvZDogXCJQT1NUXCIsXG4gICAgICAgIGJvZHk6IGZvcm1EYXRhLFxuICAgICAgfSlcbiAgICAgICAgLnRoZW4oKHJlcykgPT4gcmVzLmpzb24oKSlcbiAgICAgICAgLnRoZW4oKHJlcykgPT4gY29uc29sZS5sb2cocmVzKSk7XG4gICAgfSBlbHNlIHtcbiAgICB9XG4gIH0pO1xufVxuIl0sIm1hcHBpbmdzIjoiQUFBQSxJQUFNQSxVQUFVLEdBQUdDLFFBQVEsQ0FBQ0MsYUFBVCxDQUF1QixjQUF2QixDQUFuQjs7QUFFQSxJQUFJRixVQUFKLEVBQWdCO0VBQ2RBLFVBQVUsQ0FBQ0csZ0JBQVgsQ0FBNEIsUUFBNUIsRUFBc0MsVUFBQ0MsQ0FBRCxFQUFPO0lBQzNDQSxDQUFDLENBQUNDLGNBQUY7SUFDQSxJQUFNQyxVQUFVLEdBQUdOLFVBQVUsQ0FBQ0UsYUFBWCxDQUF5QixnQkFBekIsQ0FBbkI7SUFDQSxJQUFNSyxXQUFXLEdBQUdQLFVBQVUsQ0FBQ0UsYUFBWCxDQUF5QixxQkFBekIsQ0FBcEI7SUFDQSxJQUFNTSxRQUFRLEdBQUdSLFVBQVUsQ0FBQ0UsYUFBWCxDQUF5QixXQUF6QixFQUFzQ08sS0FBdkQ7SUFDQSxJQUFNQyxNQUFNLEdBQUdWLFVBQVUsQ0FBQ0UsYUFBWCxDQUF5QixTQUF6QixFQUFvQ08sS0FBbkQ7O0lBRUEsSUFBSUYsV0FBVyxDQUFDRSxLQUFaLElBQXFCLEVBQXpCLEVBQTZCO01BQzNCLElBQU1FLEdBQUcsR0FBR0Msa0JBQWtCLENBQUNDLFVBQS9CO01BQ0EsSUFBTUMsUUFBUSxHQUFHLElBQUlDLFFBQUosRUFBakI7TUFDQUQsUUFBUSxDQUFDRSxNQUFULENBQWdCLFFBQWhCLEVBQTBCTixNQUExQjtNQUNBSSxRQUFRLENBQUNFLE1BQVQsQ0FBZ0IsVUFBaEIsRUFBNEJSLFFBQTVCO01BQ0FNLFFBQVEsQ0FBQ0UsTUFBVCxDQUFnQixvQkFBaEIsRUFBc0NULFdBQVcsQ0FBQ0UsS0FBbEQ7TUFDQUssUUFBUSxDQUFDRSxNQUFULENBQWdCLGVBQWhCLEVBQWlDVixVQUFVLENBQUNXLE9BQTVDO01BQ0FDLEtBQUssQ0FBQ1AsR0FBRCxFQUFNO1FBQ1RRLE1BQU0sRUFBRSxNQURDO1FBRVRDLElBQUksRUFBRU47TUFGRyxDQUFOLENBQUwsQ0FJR08sSUFKSCxDQUlRLFVBQUNDLEdBQUQ7UUFBQSxPQUFTQSxHQUFHLENBQUNDLElBQUosRUFBVDtNQUFBLENBSlIsRUFLR0YsSUFMSCxDQUtRLFVBQUNDLEdBQUQ7UUFBQSxPQUFTRSxPQUFPLENBQUNDLEdBQVIsQ0FBWUgsR0FBWixDQUFUO01BQUEsQ0FMUjtJQU1ELENBYkQsTUFhTyxDQUNOO0VBQ0YsQ0F0QkQ7QUF1QkQiLCJmaWxlIjoiLi9zcmMvYWRtaW4vanMvYmFjay5qcy5qcyIsInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./src/admin/js/back.js\n");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval-source-map devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./src/admin/js/back.js"]();
/******/ 	
/******/ })()
;