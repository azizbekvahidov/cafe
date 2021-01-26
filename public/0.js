(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[0],{

/***/ "./resources/js/own.js":
/*!*****************************!*\
  !*** ./resources/js/own.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports) {

var table;

window.sendAjax = function (method, url, title) {
  $.ajax({
    type: method,
    url: url,
    success: function success(data) {
      $('.modal_body').html(data);
      $('#large_modal').text(title);
    }
  });
};

/***/ })

}]);