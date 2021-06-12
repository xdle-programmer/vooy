/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./node_modules/@babel/runtime/helpers/classCallCheck.js":
/*!***************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/classCallCheck.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

module.exports = _classCallCheck;
module.exports["default"] = module.exports, module.exports.__esModule = true;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/createClass.js":
/*!************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/createClass.js ***!
  \************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  return Constructor;
}

module.exports = _createClass;
module.exports["default"] = module.exports, module.exports.__esModule = true;

/***/ }),

/***/ "./node_modules/@babel/runtime/helpers/defineProperty.js":
/*!***************************************************************!*\
  !*** ./node_modules/@babel/runtime/helpers/defineProperty.js ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _defineProperty(obj, key, value) {
  if (key in obj) {
    Object.defineProperty(obj, key, {
      value: value,
      enumerable: true,
      configurable: true,
      writable: true
    });
  } else {
    obj[key] = value;
  }

  return obj;
}

module.exports = _defineProperty;
module.exports["default"] = module.exports, module.exports.__esModule = true;

/***/ }),

/***/ "./node_modules/form-validation-expandable/dist/script.js":
/*!****************************************************************!*\
  !*** ./node_modules/form-validation-expandable/dist/script.js ***!
  \****************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;

function _createForOfIteratorHelper(o) {
  if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) {
    if (Array.isArray(o) || (o = _unsupportedIterableToArray(o))) {
      var i = 0;

      var F = function F() {};

      return {
        s: F,
        n: function n() {
          if (i >= o.length) return {
            done: true
          };
          return {
            done: false,
            value: o[i++]
          };
        },
        e: function e(_e) {
          throw _e;
        },
        f: F
      };
    }

    throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
  }

  var it,
      normalCompletion = true,
      didErr = false,
      err;
  return {
    s: function s() {
      it = o[Symbol.iterator]();
    },
    n: function n() {
      var step = it.next();
      normalCompletion = step.done;
      return step;
    },
    e: function e(_e2) {
      didErr = true;
      err = _e2;
    },
    f: function f() {
      try {
        if (!normalCompletion && it.return != null) it.return();
      } finally {
        if (didErr) throw err;
      }
    }
  };
}

function _unsupportedIterableToArray(o, minLen) {
  if (!o) return;
  if (typeof o === "string") return _arrayLikeToArray(o, minLen);
  var n = Object.prototype.toString.call(o).slice(8, -1);
  if (n === "Object" && o.constructor) n = o.constructor.name;
  if (n === "Map" || n === "Set") return Array.from(o);
  if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen);
}

function _arrayLikeToArray(arr, len) {
  if (len == null || len > arr.length) len = arr.length;

  for (var i = 0, arr2 = new Array(len); i < len; i++) {
    arr2[i] = arr[i];
  }

  return arr2;
}

function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  return Constructor;
}

function _typeof(obj) {
  "@babel/helpers - typeof";

  if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") {
    _typeof = function _typeof(obj) {
      return typeof obj;
    };
  } else {
    _typeof = function _typeof(obj) {
      return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
  }

  return _typeof(obj);
}

(function (factory) {
  if (true) {
    // AMD. Register as an anonymous module.
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
})(function () {
  var Validation = /*#__PURE__*/function () {
    /* Example options
    {
        formClass:'form-check',     // String
        $form:document.getElementsByClassName(this.formClass)[0],       // node element
        formFieldClass:'form-check__field',     // String
        $formFields:document.getElementsByClassName('form-check__field'),       // html collection
        errorWrapperClass:'form-check__error',     // String
        errorShowClass:'form-check__error--show',     // String
        buttonClass:'form-check__button',     // String
        $button:document.getElementsByClassName(this.formClass)[0],       // node element
        buttonDisabledClass:'form-check__button--disabled',     // String
    }
     */
    function Validation(options) {
      _classCallCheck(this, Validation);

      this.formClass = options && options.formClass ? options.formClass : 'form-check';
      this.$form = options && options.$form ? options.$form : document.getElementsByClassName(this.formClass)[0];
      this.formFieldClass = options && options.formClass ? options.formClass : 'form-check__field';
      this.$formFields = options && options.$formFields ? options.$formFields : this.$form.getElementsByClassName(this.formFieldClass);
      this.errorWrapperClass = options && options.errorWrapperClass ? options.errorWrapperClass : 'form-check__error';
      this.errorShowClass = options && options.errorShowClass ? options.errorShowClass : 'form-check__error--show';
      this.buttonClass = options && options.buttonClass ? options.buttonClass : 'form-check__button';
      this.$button = options && options.$button ? options.$button : this.$form.getElementsByClassName(this.buttonClass)[0];
      this.buttonDisabledClass = options && options.buttonDisabledClass ? options.buttonDisabledClass : 'form-check__button--disabled';
      this.rulesList = new Map([['input-empty', {
        checkEvents: ['change'],
        errorMessage: 'Обязательное поле',
        functionCheck: this.validateInputEmpty
      }], ['min-count-symbol', {
        checkEvents: ['change'],
        errorMessage: 'Минимум символов: ',
        functionCheck: this.validateMinCountSymbols
      }]]);
    }

    _createClass(Validation, [{
      key: "init",
      value: function init() {
        this.fieldsArray = null;
        this.fieldsArray = this.createFieldsArray();
        this.fieldListeners = [];
        this.buttonListeners = [];
        this.handleAllListeners(true);
        this.createErrorWrappers();
        this.validationForm(false);
      } // Создание объекта с полями

    }, {
      key: "createFieldsArray",
      value: function createFieldsArray() {
        var fieldsArray = [];

        var _iterator = _createForOfIteratorHelper(this.$formFields),
            _step;

        try {
          for (_iterator.s(); !(_step = _iterator.n()).done;) {
            var $formField = _step.value; // Собираем дата атрибуты для определения типа проверки и элемента

            var elem = $formField.dataset.elem;
            var rules = $formField.dataset.rule.split(', '); // Определяем элемент, который будем проверять

            var $elem = void 0;

            if (elem !== 'self-dispatch') {
              $elem = $formField.querySelector(elem);
            } else {
              $elem = $formField;
            }

            var fieldObject = {
              elem: elem,
              rules: rules,
              $elem: $elem,
              $field: $formField
            };
            fieldsArray.push(fieldObject);
          }
        } catch (err) {
          _iterator.e(err);
        } finally {
          _iterator.f();
        }

        return fieldsArray;
      } // Валидация всей формы

    }, {
      key: "validationForm",
      value: function validationForm(showError) {
        var errors = [];

        var _iterator2 = _createForOfIteratorHelper(this.fieldsArray),
            _step2;

        try {
          for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
            var field = _step2.value;
            var error = this.validateField(field, showError);

            if (error !== false) {
              errors.push(error);
            }
          }
        } catch (err) {
          _iterator2.e(err);
        } finally {
          _iterator2.f();
        }

        if (errors.length > 0) {
          this.$button.classList.add(this.buttonDisabledClass);
        } else {
          this.$button.classList.remove(this.buttonDisabledClass);
        }
      } // Валидация одного поля

    }, {
      key: "validateField",
      value: function validateField(field, showError) {
        var errors = []; // Выполняем последовательно проверки

        var _iterator3 = _createForOfIteratorHelper(field.rules),
            _step3;

        try {
          for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
            var rule = _step3.value;
            var errorMessage = this.rulesList.get(rule).errorMessage;
            var validateResult = this.rulesList.get(rule).functionCheck(field.$field, field.$elem, errorMessage);

            if (!validateResult.validate) {
              errors.push(validateResult);
            }
          } // Определяем наиболее приоритетную ошибку и оставляем в массиве только ее

        } catch (err) {
          _iterator3.e(err);
        } finally {
          _iterator3.f();
        }

        if (errors.length > 0) {
          errors.sort(function (a, b) {
            return a.priority < b.priority ? 1 : -1;
          });
          errors = errors[0];
        } else {
          field.$field.classList.remove(this.errorShowClass);
          return false;
        }

        field.$error.textContent = errors.message;

        if (showError) {
          field.$field.classList.add(this.errorShowClass);
        }

        return errors;
      } // Создание полей с ошибками

    }, {
      key: "createErrorWrappers",
      value: function createErrorWrappers() {
        var _iterator4 = _createForOfIteratorHelper(this.fieldsArray),
            _step4;

        try {
          for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
            var field = _step4.value;
            var template = "<div class=\"".concat(this.errorWrapperClass, "\"></div>");

            if (field.$field.getElementsByClassName(this.errorWrapperClass).length > 0) {
              field.$field.insertAdjacentHTML('beforeEnd', template);
            }

            field.$field.insertAdjacentHTML('beforeEnd', template);
            field.$error = field.$field.getElementsByClassName(this.errorWrapperClass)[0];
          }
        } catch (err) {
          _iterator4.e(err);
        } finally {
          _iterator4.f();
        }
      } // Удаление полей с ошибками

    }, {
      key: "removeErrorWrappers",
      value: function removeErrorWrappers() {
        var _iterator5 = _createForOfIteratorHelper(this.fieldsArray),
            _step5;

        try {
          for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
            var field = _step5.value;
            field.$field.classList.remove(this.errorShowClass);
            var $errorWrapper = field.$field.getElementsByClassName(this.errorWrapperClass)[0];
            $errorWrapper.remove();
          }
        } catch (err) {
          _iterator5.e(err);
        } finally {
          _iterator5.f();
        }
      } // Создание событий

    }, {
      key: "handleAllListeners",
      value: function handleAllListeners(add) {
        var index = 0;

        var _iterator6 = _createForOfIteratorHelper(this.fieldsArray),
            _step6;

        try {
          for (_iterator6.s(); !(_step6 = _iterator6.n()).done;) {
            var field = _step6.value;

            var _iterator7 = _createForOfIteratorHelper(field.rules),
                _step7;

            try {
              for (_iterator7.s(); !(_step7 = _iterator7.n()).done;) {
                var rule = _step7.value;
                var eventChecks = this.rulesList.get(rule).checkEvents;
                this.fieldListeners.push(this.addFieldEvent.bind(this, field));

                var _iterator8 = _createForOfIteratorHelper(eventChecks),
                    _step8;

                try {
                  for (_iterator8.s(); !(_step8 = _iterator8.n()).done;) {
                    var eventCheck = _step8.value;

                    if (add) {
                      field.$elem.addEventListener(eventCheck, this.fieldListeners[index]);
                    } else {
                      field.$elem.removeEventListener(eventCheck, this.fieldListeners[index]);
                    }

                    index++;
                  }
                } catch (err) {
                  _iterator8.e(err);
                } finally {
                  _iterator8.f();
                }
              }
            } catch (err) {
              _iterator7.e(err);
            } finally {
              _iterator7.f();
            }
          }
        } catch (err) {
          _iterator6.e(err);
        } finally {
          _iterator6.f();
        }

        this.buttonListeners.push(this.addButtonEvent.bind(this));

        if (add) {
          this.$button.addEventListener('click', this.buttonListeners[0]);
        } else {
          this.$button.removeEventListener('click', this.buttonListeners[0]);
        }
      }
    }, {
      key: "addFieldEvent",
      value: function addFieldEvent(field) {
        this.validateField(field, true);
        this.validationForm(false);
      }
    }, {
      key: "addButtonEvent",
      value: function addButtonEvent(event) {
        this.validationForm(true);

        if (this.$button.classList.contains(this.buttonDisabledClass)) {
          event.preventDefault();
        }
      } // Проверка пустого поля

    }, {
      key: "validateInputEmpty",
      value: function validateInputEmpty($field, $elem, errorMessage) {
        var val = $elem.value;
        var validate = val !== '';
        var priority = 100;
        return {
          validate: validate,
          message: errorMessage,
          priority: priority
        };
      } // Проверка минимального количества символов

    }, {
      key: "validateMinCountSymbols",
      value: function validateMinCountSymbols($field, $elem, errorMessage) {
        var val = $elem.value;
        var minCount = parseInt($field.dataset.minCountSymbol);
        var validate = val.length >= minCount;
        var message = errorMessage + minCount;
        var priority = 200;
        return {
          validate: validate,
          message: message,
          priority: priority
        };
      } // Удаление событий

    }, {
      key: "removeAllListeners",
      value: function removeAllListeners() {
        var _this = this;

        var _iterator9 = _createForOfIteratorHelper(this.fieldsArray),
            _step9;

        try {
          var _loop = function _loop() {
            var field = _step9.value;

            var _iterator10 = _createForOfIteratorHelper(field.rules),
                _step10;

            try {
              for (_iterator10.s(); !(_step10 = _iterator10.n()).done;) {
                var rule = _step10.value;

                var eventChecks = _this.rulesList.get(rule).checkEvents;

                var _iterator11 = _createForOfIteratorHelper(eventChecks),
                    _step11;

                try {
                  for (_iterator11.s(); !(_step11 = _iterator11.n()).done;) {
                    var eventCheck = _step11.value;
                    field.$elem.addEventListener(eventCheck, function () {
                      _this.validateField.bind(_this, field, true)();

                      _this.validationForm.bind(_this, false)();
                    });
                  }
                } catch (err) {
                  _iterator11.e(err);
                } finally {
                  _iterator11.f();
                }
              }
            } catch (err) {
              _iterator10.e(err);
            } finally {
              _iterator10.f();
            }
          };

          for (_iterator9.s(); !(_step9 = _iterator9.n()).done;) {
            _loop();
          }
        } catch (err) {
          _iterator9.e(err);
        } finally {
          _iterator9.f();
        }

        this.$button.addEventListener('click', function (event) {
          _this.validationForm(true);

          if (_this.$button.classList.contains(_this.buttonDisabledClass)) {
            event.preventDefault();
          }
        });
      } // Метод обновления формы

    }, {
      key: "refresh",
      value: function refresh() {
        this.handleAllListeners(false);
        this.removeErrorWrappers();
        this.init();
      }
    }]);

    return Validation;
  }();

  return Validation;
});

/***/ }),

/***/ "./node_modules/get-viewport-options/dist/script.js":
/*!**********************************************************!*\
  !*** ./node_modules/get-viewport-options/dist/script.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;

function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  return Constructor;
}

function _classPrivateFieldLooseBase(receiver, privateKey) {
  if (!Object.prototype.hasOwnProperty.call(receiver, privateKey)) {
    throw new TypeError("attempted to use private field on non-instance");
  }

  return receiver;
}

var id = 0;

function _classPrivateFieldLooseKey(name) {
  return "__private_" + id++ + "_" + name;
}

function _typeof(obj) {
  "@babel/helpers - typeof";

  if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") {
    _typeof = function _typeof(obj) {
      return typeof obj;
    };
  } else {
    _typeof = function _typeof(obj) {
      return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
  }

  return _typeof(obj);
}

(function (factory) {
  if (true) {
    // AMD. Register as an anonymous module.
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
})(function () {
  var _setup = _classPrivateFieldLooseKey("setup");

  var GetViewportOptions = /*#__PURE__*/function () {
    function GetViewportOptions() {
      _classCallCheck(this, GetViewportOptions);

      Object.defineProperty(this, _setup, {
        value: _setup2
      });
      this.viewportWidth = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      this.viewportHeight = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
      this.scrollbarWidth = this.getScrollWidth();
      this.hoverAvailability = this.getHoverAvailability();

      _classPrivateFieldLooseBase(this, _setup)[_setup]();
    }

    _createClass(GetViewportOptions, [{
      key: "getScrollWidth",
      // Функция определения ширины скролла
      value: function getScrollWidth() {
        var div = document.createElement('div');
        var width = 0;
        div.style.overflowY = 'scroll';
        div.style.width = '50px';
        div.style.height = '50px';
        document.body.append(div);
        width = div.offsetWidth - div.clientWidth;
        div.remove();
        return width;
      } // Функция определения поддержки ховера

    }, {
      key: "getHoverAvailability",
      value: function getHoverAvailability() {
        var style = document.createElement('style');
        style.textContent = "\n                :root {\n                    --hover-device:false;\n                }\n                @media (hover) {\n                    :root {\n                        --hover-device:true;\n                    }\n                }\n            ";
        document.body.append(style);
        var hover = getComputedStyle(document.getElementsByTagName('body')[0]).getPropertyValue('--hover-device');

        if (hover === 'false') {
          return false;
        } else {
          return true;
        }
      }
    }, {
      key: "getViewportWidth",
      value: function getViewportWidth() {
        return this.viewportWidth;
      }
    }, {
      key: "getViewportHeight",
      value: function getViewportHeight() {
        return this.viewportHeight;
      }
    }, {
      key: "getFullOptions",
      value: function getFullOptions() {
        return {
          viewportWidth: this.viewportWidth,
          viewportHeight: this.viewportHeight,
          scrollbarWidth: this.scrollbarWidth,
          hoverAvailability: this.hoverAvailability
        };
      }
    }]);

    return GetViewportOptions;
  }();

  function _setup2() {
    var _this = this; // Переопределение ширины и высоты при ресайзе


    window.addEventListener('resize', function () {
      _this.viewportWidth = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      _this.viewportHeight = window.innerHeight || document.documentElement.clientHeight || document.getElementsByTagName('body')[0].clientHeight;
    });
  }

  return GetViewportOptions;
});

/***/ }),

/***/ "./node_modules/nouislider/dist/nouislider.js":
/*!****************************************************!*\
  !*** ./node_modules/nouislider/dist/nouislider.js ***!
  \****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

(function (global, factory) {
   true ? factory(exports) : undefined;
})(this, function (exports) {
  'use strict';

  exports.PipsMode = void 0;

  (function (PipsMode) {
    PipsMode["Range"] = "range";
    PipsMode["Steps"] = "steps";
    PipsMode["Positions"] = "positions";
    PipsMode["Count"] = "count";
    PipsMode["Values"] = "values";
  })(exports.PipsMode || (exports.PipsMode = {}));

  exports.PipsType = void 0;

  (function (PipsType) {
    PipsType[PipsType["None"] = -1] = "None";
    PipsType[PipsType["NoValue"] = 0] = "NoValue";
    PipsType[PipsType["LargeValue"] = 1] = "LargeValue";
    PipsType[PipsType["SmallValue"] = 2] = "SmallValue";
  })(exports.PipsType || (exports.PipsType = {})); //region Helper Methods


  function isValidFormatter(entry) {
    return typeof entry === "object" && typeof entry.to === "function" && typeof entry.from === "function";
  }

  function removeElement(el) {
    el.parentElement.removeChild(el);
  }

  function isSet(value) {
    return value !== null && value !== undefined;
  } // Bindable version


  function preventDefault(e) {
    e.preventDefault();
  } // Removes duplicates from an array.


  function unique(array) {
    return array.filter(function (a) {
      return !this[a] ? this[a] = true : false;
    }, {});
  } // Round a value to the closest 'to'.


  function closest(value, to) {
    return Math.round(value / to) * to;
  } // Current position of an element relative to the document.


  function offset(elem, orientation) {
    var rect = elem.getBoundingClientRect();
    var doc = elem.ownerDocument;
    var docElem = doc.documentElement;
    var pageOffset = getPageOffset(doc); // getBoundingClientRect contains left scroll in Chrome on Android.
    // I haven't found a feature detection that proves this. Worst case
    // scenario on mis-match: the 'tap' feature on horizontal sliders breaks.

    if (/webkit.*Chrome.*Mobile/i.test(navigator.userAgent)) {
      pageOffset.x = 0;
    }

    return orientation ? rect.top + pageOffset.y - docElem.clientTop : rect.left + pageOffset.x - docElem.clientLeft;
  } // Checks whether a value is numerical.


  function isNumeric(a) {
    return typeof a === "number" && !isNaN(a) && isFinite(a);
  } // Sets a class and removes it after [duration] ms.


  function addClassFor(element, className, duration) {
    if (duration > 0) {
      addClass(element, className);
      setTimeout(function () {
        removeClass(element, className);
      }, duration);
    }
  } // Limits a value to 0 - 100


  function limit(a) {
    return Math.max(Math.min(a, 100), 0);
  } // Wraps a variable as an array, if it isn't one yet.
  // Note that an input array is returned by reference!


  function asArray(a) {
    return Array.isArray(a) ? a : [a];
  } // Counts decimals


  function countDecimals(numStr) {
    numStr = String(numStr);
    var pieces = numStr.split(".");
    return pieces.length > 1 ? pieces[1].length : 0;
  } // http://youmightnotneedjquery.com/#add_class


  function addClass(el, className) {
    if (el.classList && !/\s/.test(className)) {
      el.classList.add(className);
    } else {
      el.className += " " + className;
    }
  } // http://youmightnotneedjquery.com/#remove_class


  function removeClass(el, className) {
    if (el.classList && !/\s/.test(className)) {
      el.classList.remove(className);
    } else {
      el.className = el.className.replace(new RegExp("(^|\\b)" + className.split(" ").join("|") + "(\\b|$)", "gi"), " ");
    }
  } // https://plainjs.com/javascript/attributes/adding-removing-and-testing-for-classes-9/


  function hasClass(el, className) {
    return el.classList ? el.classList.contains(className) : new RegExp("\\b" + className + "\\b").test(el.className);
  } // https://developer.mozilla.org/en-US/docs/Web/API/Window/scrollY#Notes


  function getPageOffset(doc) {
    var supportPageOffset = window.pageXOffset !== undefined;
    var isCSS1Compat = (doc.compatMode || "") === "CSS1Compat";
    var x = supportPageOffset ? window.pageXOffset : isCSS1Compat ? doc.documentElement.scrollLeft : doc.body.scrollLeft;
    var y = supportPageOffset ? window.pageYOffset : isCSS1Compat ? doc.documentElement.scrollTop : doc.body.scrollTop;
    return {
      x: x,
      y: y
    };
  } // we provide a function to compute constants instead
  // of accessing window.* as soon as the module needs it
  // so that we do not compute anything if not needed


  function getActions() {
    // Determine the events to bind. IE11 implements pointerEvents without
    // a prefix, which breaks compatibility with the IE10 implementation.
    return window.navigator.pointerEnabled ? {
      start: "pointerdown",
      move: "pointermove",
      end: "pointerup"
    } : window.navigator.msPointerEnabled ? {
      start: "MSPointerDown",
      move: "MSPointerMove",
      end: "MSPointerUp"
    } : {
      start: "mousedown touchstart",
      move: "mousemove touchmove",
      end: "mouseup touchend"
    };
  } // https://github.com/WICG/EventListenerOptions/blob/gh-pages/explainer.md
  // Issue #785


  function getSupportsPassive() {
    var supportsPassive = false;
    /* eslint-disable */

    try {
      var opts = Object.defineProperty({}, "passive", {
        get: function () {
          supportsPassive = true;
        }
      }); // @ts-ignore

      window.addEventListener("test", null, opts);
    } catch (e) {}
    /* eslint-enable */


    return supportsPassive;
  }

  function getSupportsTouchActionNone() {
    return window.CSS && CSS.supports && CSS.supports("touch-action", "none");
  } //endregion
  //region Range Calculation
  // Determine the size of a sub-range in relation to a full range.


  function subRangeRatio(pa, pb) {
    return 100 / (pb - pa);
  } // (percentage) How many percent is this value of this range?


  function fromPercentage(range, value, startRange) {
    return value * 100 / (range[startRange + 1] - range[startRange]);
  } // (percentage) Where is this value on this range?


  function toPercentage(range, value) {
    return fromPercentage(range, range[0] < 0 ? value + Math.abs(range[0]) : value - range[0], 0);
  } // (value) How much is this percentage on this range?


  function isPercentage(range, value) {
    return value * (range[1] - range[0]) / 100 + range[0];
  }

  function getJ(value, arr) {
    var j = 1;

    while (value >= arr[j]) {
      j += 1;
    }

    return j;
  } // (percentage) Input a value, find where, on a scale of 0-100, it applies.


  function toStepping(xVal, xPct, value) {
    if (value >= xVal.slice(-1)[0]) {
      return 100;
    }

    var j = getJ(value, xVal);
    var va = xVal[j - 1];
    var vb = xVal[j];
    var pa = xPct[j - 1];
    var pb = xPct[j];
    return pa + toPercentage([va, vb], value) / subRangeRatio(pa, pb);
  } // (value) Input a percentage, find where it is on the specified range.


  function fromStepping(xVal, xPct, value) {
    // There is no range group that fits 100
    if (value >= 100) {
      return xVal.slice(-1)[0];
    }

    var j = getJ(value, xPct);
    var va = xVal[j - 1];
    var vb = xVal[j];
    var pa = xPct[j - 1];
    var pb = xPct[j];
    return isPercentage([va, vb], (value - pa) * subRangeRatio(pa, pb));
  } // (percentage) Get the step that applies at a certain value.


  function getStep(xPct, xSteps, snap, value) {
    if (value === 100) {
      return value;
    }

    var j = getJ(value, xPct);
    var a = xPct[j - 1];
    var b = xPct[j]; // If 'snap' is set, steps are used as fixed points on the slider.

    if (snap) {
      // Find the closest position, a or b.
      if (value - a > (b - a) / 2) {
        return b;
      }

      return a;
    }

    if (!xSteps[j - 1]) {
      return value;
    }

    return xPct[j - 1] + closest(value - xPct[j - 1], xSteps[j - 1]);
  } //endregion
  //region Spectrum


  var Spectrum =
  /** @class */
  function () {
    function Spectrum(entry, snap, singleStep) {
      this.xPct = [];
      this.xVal = [];
      this.xSteps = [];
      this.xNumSteps = [];
      this.xHighestCompleteStep = [];
      this.xSteps = [singleStep || false];
      this.xNumSteps = [false];
      this.snap = snap;
      var index;
      var ordered = []; // Map the object keys to an array.

      Object.keys(entry).forEach(function (index) {
        ordered.push([asArray(entry[index]), index]);
      }); // Sort all entries by value (numeric sort).

      ordered.sort(function (a, b) {
        return a[0][0] - b[0][0];
      }); // Convert all entries to subranges.

      for (index = 0; index < ordered.length; index++) {
        this.handleEntryPoint(ordered[index][1], ordered[index][0]);
      } // Store the actual step values.
      // xSteps is sorted in the same order as xPct and xVal.


      this.xNumSteps = this.xSteps.slice(0); // Convert all numeric steps to the percentage of the subrange they represent.

      for (index = 0; index < this.xNumSteps.length; index++) {
        this.handleStepPoint(index, this.xNumSteps[index]);
      }
    }

    Spectrum.prototype.getDistance = function (value) {
      var index;
      var distances = [];

      for (index = 0; index < this.xNumSteps.length - 1; index++) {
        // last "range" can't contain step size as it is purely an endpoint.
        var step = this.xNumSteps[index];

        if (step && value / step % 1 !== 0) {
          throw new Error("noUiSlider: 'limit', 'margin' and 'padding' of " + this.xPct[index] + "% range must be divisible by step.");
        } // Calculate percentual distance in current range of limit, margin or padding


        distances[index] = fromPercentage(this.xVal, value, index);
      }

      return distances;
    }; // Calculate the percentual distance over the whole scale of ranges.
    // direction: 0 = backwards / 1 = forwards


    Spectrum.prototype.getAbsoluteDistance = function (value, distances, direction) {
      var xPct_index = 0; // Calculate range where to start calculation

      if (value < this.xPct[this.xPct.length - 1]) {
        while (value > this.xPct[xPct_index + 1]) {
          xPct_index++;
        }
      } else if (value === this.xPct[this.xPct.length - 1]) {
        xPct_index = this.xPct.length - 2;
      } // If looking backwards and the value is exactly at a range separator then look one range further


      if (!direction && value === this.xPct[xPct_index + 1]) {
        xPct_index++;
      }

      if (distances === null) {
        distances = [];
      }

      var start_factor;
      var rest_factor = 1;
      var rest_rel_distance = distances[xPct_index];
      var range_pct = 0;
      var rel_range_distance = 0;
      var abs_distance_counter = 0;
      var range_counter = 0; // Calculate what part of the start range the value is

      if (direction) {
        start_factor = (value - this.xPct[xPct_index]) / (this.xPct[xPct_index + 1] - this.xPct[xPct_index]);
      } else {
        start_factor = (this.xPct[xPct_index + 1] - value) / (this.xPct[xPct_index + 1] - this.xPct[xPct_index]);
      } // Do until the complete distance across ranges is calculated


      while (rest_rel_distance > 0) {
        // Calculate the percentage of total range
        range_pct = this.xPct[xPct_index + 1 + range_counter] - this.xPct[xPct_index + range_counter]; // Detect if the margin, padding or limit is larger then the current range and calculate

        if (distances[xPct_index + range_counter] * rest_factor + 100 - start_factor * 100 > 100) {
          // If larger then take the percentual distance of the whole range
          rel_range_distance = range_pct * start_factor; // Rest factor of relative percentual distance still to be calculated

          rest_factor = (rest_rel_distance - 100 * start_factor) / distances[xPct_index + range_counter]; // Set start factor to 1 as for next range it does not apply.

          start_factor = 1;
        } else {
          // If smaller or equal then take the percentual distance of the calculate percentual part of that range
          rel_range_distance = distances[xPct_index + range_counter] * range_pct / 100 * rest_factor; // No rest left as the rest fits in current range

          rest_factor = 0;
        }

        if (direction) {
          abs_distance_counter = abs_distance_counter - rel_range_distance; // Limit range to first range when distance becomes outside of minimum range

          if (this.xPct.length + range_counter >= 1) {
            range_counter--;
          }
        } else {
          abs_distance_counter = abs_distance_counter + rel_range_distance; // Limit range to last range when distance becomes outside of maximum range

          if (this.xPct.length - range_counter >= 1) {
            range_counter++;
          }
        } // Rest of relative percentual distance still to be calculated


        rest_rel_distance = distances[xPct_index + range_counter] * rest_factor;
      }

      return value + abs_distance_counter;
    };

    Spectrum.prototype.toStepping = function (value) {
      value = toStepping(this.xVal, this.xPct, value);
      return value;
    };

    Spectrum.prototype.fromStepping = function (value) {
      return fromStepping(this.xVal, this.xPct, value);
    };

    Spectrum.prototype.getStep = function (value) {
      value = getStep(this.xPct, this.xSteps, this.snap, value);
      return value;
    };

    Spectrum.prototype.getDefaultStep = function (value, isDown, size) {
      var j = getJ(value, this.xPct); // When at the top or stepping down, look at the previous sub-range

      if (value === 100 || isDown && value === this.xPct[j - 1]) {
        j = Math.max(j - 1, 1);
      }

      return (this.xVal[j] - this.xVal[j - 1]) / size;
    };

    Spectrum.prototype.getNearbySteps = function (value) {
      var j = getJ(value, this.xPct);
      return {
        stepBefore: {
          startValue: this.xVal[j - 2],
          step: this.xNumSteps[j - 2],
          highestStep: this.xHighestCompleteStep[j - 2]
        },
        thisStep: {
          startValue: this.xVal[j - 1],
          step: this.xNumSteps[j - 1],
          highestStep: this.xHighestCompleteStep[j - 1]
        },
        stepAfter: {
          startValue: this.xVal[j],
          step: this.xNumSteps[j],
          highestStep: this.xHighestCompleteStep[j]
        }
      };
    };

    Spectrum.prototype.countStepDecimals = function () {
      var stepDecimals = this.xNumSteps.map(countDecimals);
      return Math.max.apply(null, stepDecimals);
    }; // Outside testing


    Spectrum.prototype.convert = function (value) {
      return this.getStep(this.toStepping(value));
    };

    Spectrum.prototype.handleEntryPoint = function (index, value) {
      var percentage; // Covert min/max syntax to 0 and 100.

      if (index === "min") {
        percentage = 0;
      } else if (index === "max") {
        percentage = 100;
      } else {
        percentage = parseFloat(index);
      } // Check for correct input.


      if (!isNumeric(percentage) || !isNumeric(value[0])) {
        throw new Error("noUiSlider: 'range' value isn't numeric.");
      } // Store values.


      this.xPct.push(percentage);
      this.xVal.push(value[0]);
      var value1 = Number(value[1]); // NaN will evaluate to false too, but to keep
      // logging clear, set step explicitly. Make sure
      // not to override the 'step' setting with false.

      if (!percentage) {
        if (!isNaN(value1)) {
          this.xSteps[0] = value1;
        }
      } else {
        this.xSteps.push(isNaN(value1) ? false : value1);
      }

      this.xHighestCompleteStep.push(0);
    };

    Spectrum.prototype.handleStepPoint = function (i, n) {
      // Ignore 'false' stepping.
      if (!n) {
        return;
      } // Step over zero-length ranges (#948);


      if (this.xVal[i] === this.xVal[i + 1]) {
        this.xSteps[i] = this.xHighestCompleteStep[i] = this.xVal[i];
        return;
      } // Factor to range ratio


      this.xSteps[i] = fromPercentage([this.xVal[i], this.xVal[i + 1]], n, 0) / subRangeRatio(this.xPct[i], this.xPct[i + 1]);
      var totalSteps = (this.xVal[i + 1] - this.xVal[i]) / this.xNumSteps[i];
      var highestStep = Math.ceil(Number(totalSteps.toFixed(3)) - 1);
      var step = this.xVal[i] + this.xNumSteps[i] * highestStep;
      this.xHighestCompleteStep[i] = step;
    };

    return Spectrum;
  }(); //endregion
  //region Options

  /*	Every input option is tested and parsed. This will prevent
      endless validation in internal methods. These tests are
      structured with an item for every option available. An
      option can be marked as required by setting the 'r' flag.
      The testing function is provided with three arguments:
          - The provided value for the option;
          - A reference to the options object;
          - The name for the option;
       The testing function returns false when an error is detected,
      or true when everything is OK. It can also modify the option
      object, to make sure all values can be correctly looped elsewhere. */
  //region Defaults


  var defaultFormatter = {
    to: function (value) {
      return value === undefined ? "" : value.toFixed(2);
    },
    from: Number
  };
  var cssClasses = {
    target: "target",
    base: "base",
    origin: "origin",
    handle: "handle",
    handleLower: "handle-lower",
    handleUpper: "handle-upper",
    touchArea: "touch-area",
    horizontal: "horizontal",
    vertical: "vertical",
    background: "background",
    connect: "connect",
    connects: "connects",
    ltr: "ltr",
    rtl: "rtl",
    textDirectionLtr: "txt-dir-ltr",
    textDirectionRtl: "txt-dir-rtl",
    draggable: "draggable",
    drag: "state-drag",
    tap: "state-tap",
    active: "active",
    tooltip: "tooltip",
    pips: "pips",
    pipsHorizontal: "pips-horizontal",
    pipsVertical: "pips-vertical",
    marker: "marker",
    markerHorizontal: "marker-horizontal",
    markerVertical: "marker-vertical",
    markerNormal: "marker-normal",
    markerLarge: "marker-large",
    markerSub: "marker-sub",
    value: "value",
    valueHorizontal: "value-horizontal",
    valueVertical: "value-vertical",
    valueNormal: "value-normal",
    valueLarge: "value-large",
    valueSub: "value-sub"
  }; // Namespaces of internal event listeners

  var INTERNAL_EVENT_NS = {
    tooltips: ".__tooltips",
    aria: ".__aria"
  }; //endregion

  function validateFormat(entry) {
    // Any object with a to and from method is supported.
    if (isValidFormatter(entry)) {
      return true;
    }

    throw new Error("noUiSlider: 'format' requires 'to' and 'from' methods.");
  }

  function testStep(parsed, entry) {
    if (!isNumeric(entry)) {
      throw new Error("noUiSlider: 'step' is not numeric.");
    } // The step option can still be used to set stepping
    // for linear sliders. Overwritten if set in 'range'.


    parsed.singleStep = entry;
  }

  function testKeyboardPageMultiplier(parsed, entry) {
    if (!isNumeric(entry)) {
      throw new Error("noUiSlider: 'keyboardPageMultiplier' is not numeric.");
    }

    parsed.keyboardPageMultiplier = entry;
  }

  function testKeyboardDefaultStep(parsed, entry) {
    if (!isNumeric(entry)) {
      throw new Error("noUiSlider: 'keyboardDefaultStep' is not numeric.");
    }

    parsed.keyboardDefaultStep = entry;
  }

  function testRange(parsed, entry) {
    // Filter incorrect input.
    if (typeof entry !== "object" || Array.isArray(entry)) {
      throw new Error("noUiSlider: 'range' is not an object.");
    } // Catch missing start or end.


    if (entry.min === undefined || entry.max === undefined) {
      throw new Error("noUiSlider: Missing 'min' or 'max' in 'range'.");
    } // Catch equal start or end.


    if (entry.min === entry.max) {
      throw new Error("noUiSlider: 'range' 'min' and 'max' cannot be equal.");
    }

    parsed.spectrum = new Spectrum(entry, parsed.snap || false, parsed.singleStep);
  }

  function testStart(parsed, entry) {
    entry = asArray(entry); // Validate input. Values aren't tested, as the public .val method
    // will always provide a valid location.

    if (!Array.isArray(entry) || !entry.length) {
      throw new Error("noUiSlider: 'start' option is incorrect.");
    } // Store the number of handles.


    parsed.handles = entry.length; // When the slider is initialized, the .val method will
    // be called with the start options.

    parsed.start = entry;
  }

  function testSnap(parsed, entry) {
    if (typeof entry !== "boolean") {
      throw new Error("noUiSlider: 'snap' option must be a boolean.");
    } // Enforce 100% stepping within subranges.


    parsed.snap = entry;
  }

  function testAnimate(parsed, entry) {
    if (typeof entry !== "boolean") {
      throw new Error("noUiSlider: 'animate' option must be a boolean.");
    } // Enforce 100% stepping within subranges.


    parsed.animate = entry;
  }

  function testAnimationDuration(parsed, entry) {
    if (typeof entry !== "number") {
      throw new Error("noUiSlider: 'animationDuration' option must be a number.");
    }

    parsed.animationDuration = entry;
  }

  function testConnect(parsed, entry) {
    var connect = [false];
    var i; // Map legacy options

    if (entry === "lower") {
      entry = [true, false];
    } else if (entry === "upper") {
      entry = [false, true];
    } // Handle boolean options


    if (entry === true || entry === false) {
      for (i = 1; i < parsed.handles; i++) {
        connect.push(entry);
      }

      connect.push(false);
    } // Reject invalid input
    else if (!Array.isArray(entry) || !entry.length || entry.length !== parsed.handles + 1) {
        throw new Error("noUiSlider: 'connect' option doesn't match handle count.");
      } else {
        connect = entry;
      }

    parsed.connect = connect;
  }

  function testOrientation(parsed, entry) {
    // Set orientation to an a numerical value for easy
    // array selection.
    switch (entry) {
      case "horizontal":
        parsed.ort = 0;
        break;

      case "vertical":
        parsed.ort = 1;
        break;

      default:
        throw new Error("noUiSlider: 'orientation' option is invalid.");
    }
  }

  function testMargin(parsed, entry) {
    if (!isNumeric(entry)) {
      throw new Error("noUiSlider: 'margin' option must be numeric.");
    } // Issue #582


    if (entry === 0) {
      return;
    }

    parsed.margin = parsed.spectrum.getDistance(entry);
  }

  function testLimit(parsed, entry) {
    if (!isNumeric(entry)) {
      throw new Error("noUiSlider: 'limit' option must be numeric.");
    }

    parsed.limit = parsed.spectrum.getDistance(entry);

    if (!parsed.limit || parsed.handles < 2) {
      throw new Error("noUiSlider: 'limit' option is only supported on linear sliders with 2 or more handles.");
    }
  }

  function testPadding(parsed, entry) {
    var index;

    if (!isNumeric(entry) && !Array.isArray(entry)) {
      throw new Error("noUiSlider: 'padding' option must be numeric or array of exactly 2 numbers.");
    }

    if (Array.isArray(entry) && !(entry.length === 2 || isNumeric(entry[0]) || isNumeric(entry[1]))) {
      throw new Error("noUiSlider: 'padding' option must be numeric or array of exactly 2 numbers.");
    }

    if (entry === 0) {
      return;
    }

    if (!Array.isArray(entry)) {
      entry = [entry, entry];
    } // 'getDistance' returns false for invalid values.


    parsed.padding = [parsed.spectrum.getDistance(entry[0]), parsed.spectrum.getDistance(entry[1])];

    for (index = 0; index < parsed.spectrum.xNumSteps.length - 1; index++) {
      // last "range" can't contain step size as it is purely an endpoint.
      if (parsed.padding[0][index] < 0 || parsed.padding[1][index] < 0) {
        throw new Error("noUiSlider: 'padding' option must be a positive number(s).");
      }
    }

    var totalPadding = entry[0] + entry[1];
    var firstValue = parsed.spectrum.xVal[0];
    var lastValue = parsed.spectrum.xVal[parsed.spectrum.xVal.length - 1];

    if (totalPadding / (lastValue - firstValue) > 1) {
      throw new Error("noUiSlider: 'padding' option must not exceed 100% of the range.");
    }
  }

  function testDirection(parsed, entry) {
    // Set direction as a numerical value for easy parsing.
    // Invert connection for RTL sliders, so that the proper
    // handles get the connect/background classes.
    switch (entry) {
      case "ltr":
        parsed.dir = 0;
        break;

      case "rtl":
        parsed.dir = 1;
        break;

      default:
        throw new Error("noUiSlider: 'direction' option was not recognized.");
    }
  }

  function testBehaviour(parsed, entry) {
    // Make sure the input is a string.
    if (typeof entry !== "string") {
      throw new Error("noUiSlider: 'behaviour' must be a string containing options.");
    } // Check if the string contains any keywords.
    // None are required.


    var tap = entry.indexOf("tap") >= 0;
    var drag = entry.indexOf("drag") >= 0;
    var fixed = entry.indexOf("fixed") >= 0;
    var snap = entry.indexOf("snap") >= 0;
    var hover = entry.indexOf("hover") >= 0;
    var unconstrained = entry.indexOf("unconstrained") >= 0;

    if (fixed) {
      if (parsed.handles !== 2) {
        throw new Error("noUiSlider: 'fixed' behaviour must be used with 2 handles");
      } // Use margin to enforce fixed state


      testMargin(parsed, parsed.start[1] - parsed.start[0]);
    }

    if (unconstrained && (parsed.margin || parsed.limit)) {
      throw new Error("noUiSlider: 'unconstrained' behaviour cannot be used with margin or limit");
    }

    parsed.events = {
      tap: tap || snap,
      drag: drag,
      fixed: fixed,
      snap: snap,
      hover: hover,
      unconstrained: unconstrained
    };
  }

  function testTooltips(parsed, entry) {
    if (entry === false) {
      return;
    }

    if (entry === true || isValidFormatter(entry)) {
      parsed.tooltips = [];

      for (var i = 0; i < parsed.handles; i++) {
        parsed.tooltips.push(entry);
      }
    } else {
      entry = asArray(entry);

      if (entry.length !== parsed.handles) {
        throw new Error("noUiSlider: must pass a formatter for all handles.");
      }

      entry.forEach(function (formatter) {
        if (typeof formatter !== "boolean" && (typeof formatter !== "object" || typeof formatter.to !== "function")) {
          throw new Error("noUiSlider: 'tooltips' must be passed a formatter or 'false'.");
        }
      });
      parsed.tooltips = entry;
    }
  }

  function testAriaFormat(parsed, entry) {
    validateFormat(entry);
    parsed.ariaFormat = entry;
  }

  function testFormat(parsed, entry) {
    validateFormat(entry);
    parsed.format = entry;
  }

  function testKeyboardSupport(parsed, entry) {
    if (typeof entry !== "boolean") {
      throw new Error("noUiSlider: 'keyboardSupport' option must be a boolean.");
    }

    parsed.keyboardSupport = entry;
  }

  function testDocumentElement(parsed, entry) {
    // This is an advanced option. Passed values are used without validation.
    parsed.documentElement = entry;
  }

  function testCssPrefix(parsed, entry) {
    if (typeof entry !== "string" && entry !== false) {
      throw new Error("noUiSlider: 'cssPrefix' must be a string or `false`.");
    }

    parsed.cssPrefix = entry;
  }

  function testCssClasses(parsed, entry) {
    if (typeof entry !== "object") {
      throw new Error("noUiSlider: 'cssClasses' must be an object.");
    }

    if (typeof parsed.cssPrefix === "string") {
      parsed.cssClasses = {};
      Object.keys(entry).forEach(function (key) {
        parsed.cssClasses[key] = parsed.cssPrefix + entry[key];
      });
    } else {
      parsed.cssClasses = entry;
    }
  } // Test all developer settings and parse to assumption-safe values.


  function testOptions(options) {
    // To prove a fix for #537, freeze options here.
    // If the object is modified, an error will be thrown.
    // Object.freeze(options);
    var parsed = {
      margin: null,
      limit: null,
      padding: null,
      animate: true,
      animationDuration: 300,
      ariaFormat: defaultFormatter,
      format: defaultFormatter
    }; // Tests are executed in the order they are presented here.

    var tests = {
      step: {
        r: false,
        t: testStep
      },
      keyboardPageMultiplier: {
        r: false,
        t: testKeyboardPageMultiplier
      },
      keyboardDefaultStep: {
        r: false,
        t: testKeyboardDefaultStep
      },
      start: {
        r: true,
        t: testStart
      },
      connect: {
        r: true,
        t: testConnect
      },
      direction: {
        r: true,
        t: testDirection
      },
      snap: {
        r: false,
        t: testSnap
      },
      animate: {
        r: false,
        t: testAnimate
      },
      animationDuration: {
        r: false,
        t: testAnimationDuration
      },
      range: {
        r: true,
        t: testRange
      },
      orientation: {
        r: false,
        t: testOrientation
      },
      margin: {
        r: false,
        t: testMargin
      },
      limit: {
        r: false,
        t: testLimit
      },
      padding: {
        r: false,
        t: testPadding
      },
      behaviour: {
        r: true,
        t: testBehaviour
      },
      ariaFormat: {
        r: false,
        t: testAriaFormat
      },
      format: {
        r: false,
        t: testFormat
      },
      tooltips: {
        r: false,
        t: testTooltips
      },
      keyboardSupport: {
        r: true,
        t: testKeyboardSupport
      },
      documentElement: {
        r: false,
        t: testDocumentElement
      },
      cssPrefix: {
        r: true,
        t: testCssPrefix
      },
      cssClasses: {
        r: true,
        t: testCssClasses
      }
    };
    var defaults = {
      connect: false,
      direction: "ltr",
      behaviour: "tap",
      orientation: "horizontal",
      keyboardSupport: true,
      cssPrefix: "noUi-",
      cssClasses: cssClasses,
      keyboardPageMultiplier: 5,
      keyboardDefaultStep: 10
    }; // AriaFormat defaults to regular format, if any.

    if (options.format && !options.ariaFormat) {
      options.ariaFormat = options.format;
    } // Run all options through a testing mechanism to ensure correct
    // input. It should be noted that options might get modified to
    // be handled properly. E.g. wrapping integers in arrays.


    Object.keys(tests).forEach(function (name) {
      // If the option isn't set, but it is required, throw an error.
      if (!isSet(options[name]) && defaults[name] === undefined) {
        if (tests[name].r) {
          throw new Error("noUiSlider: '" + name + "' is required.");
        }

        return;
      }

      tests[name].t(parsed, !isSet(options[name]) ? defaults[name] : options[name]);
    }); // Forward pips options

    parsed.pips = options.pips; // All recent browsers accept unprefixed transform.
    // We need -ms- for IE9 and -webkit- for older Android;
    // Assume use of -webkit- if unprefixed and -ms- are not supported.
    // https://caniuse.com/#feat=transforms2d

    var d = document.createElement("div");
    var msPrefix = d.style.msTransform !== undefined;
    var noPrefix = d.style.transform !== undefined;
    parsed.transformRule = noPrefix ? "transform" : msPrefix ? "msTransform" : "webkitTransform"; // Pips don't move, so we can place them using left/top.

    var styles = [["left", "top"], ["right", "bottom"]];
    parsed.style = styles[parsed.dir][parsed.ort];
    return parsed;
  } //endregion


  function scope(target, options, originalOptions) {
    var actions = getActions();
    var supportsTouchActionNone = getSupportsTouchActionNone();
    var supportsPassive = supportsTouchActionNone && getSupportsPassive(); // All variables local to 'scope' are prefixed with 'scope_'
    // Slider DOM Nodes

    var scope_Target = target;
    var scope_Base;
    var scope_Handles;
    var scope_Connects;
    var scope_Pips;
    var scope_Tooltips; // Slider state values

    var scope_Spectrum = options.spectrum;
    var scope_Values = [];
    var scope_Locations = [];
    var scope_HandleNumbers = [];
    var scope_ActiveHandlesCount = 0;
    var scope_Events = {}; // Document Nodes

    var scope_Document = target.ownerDocument;
    var scope_DocumentElement = options.documentElement || scope_Document.documentElement;
    var scope_Body = scope_Document.body; // For horizontal sliders in standard ltr documents,
    // make .noUi-origin overflow to the left so the document doesn't scroll.

    var scope_DirOffset = scope_Document.dir === "rtl" || options.ort === 1 ? 0 : 100; // Creates a node, adds it to target, returns the new node.

    function addNodeTo(addTarget, className) {
      var div = scope_Document.createElement("div");

      if (className) {
        addClass(div, className);
      }

      addTarget.appendChild(div);
      return div;
    } // Append a origin to the base


    function addOrigin(base, handleNumber) {
      var origin = addNodeTo(base, options.cssClasses.origin);
      var handle = addNodeTo(origin, options.cssClasses.handle);
      addNodeTo(handle, options.cssClasses.touchArea);
      handle.setAttribute("data-handle", String(handleNumber));

      if (options.keyboardSupport) {
        // https://developer.mozilla.org/en-US/docs/Web/HTML/Global_attributes/tabindex
        // 0 = focusable and reachable
        handle.setAttribute("tabindex", "0");
        handle.addEventListener("keydown", function (event) {
          return eventKeydown(event, handleNumber);
        });
      }

      handle.setAttribute("role", "slider");
      handle.setAttribute("aria-orientation", options.ort ? "vertical" : "horizontal");

      if (handleNumber === 0) {
        addClass(handle, options.cssClasses.handleLower);
      } else if (handleNumber === options.handles - 1) {
        addClass(handle, options.cssClasses.handleUpper);
      }

      return origin;
    } // Insert nodes for connect elements


    function addConnect(base, add) {
      if (!add) {
        return false;
      }

      return addNodeTo(base, options.cssClasses.connect);
    } // Add handles to the slider base.


    function addElements(connectOptions, base) {
      var connectBase = addNodeTo(base, options.cssClasses.connects);
      scope_Handles = [];
      scope_Connects = [];
      scope_Connects.push(addConnect(connectBase, connectOptions[0])); // [::::O====O====O====]
      // connectOptions = [0, 1, 1, 1]

      for (var i = 0; i < options.handles; i++) {
        // Keep a list of all added handles.
        scope_Handles.push(addOrigin(base, i));
        scope_HandleNumbers[i] = i;
        scope_Connects.push(addConnect(connectBase, connectOptions[i + 1]));
      }
    } // Initialize a single slider.


    function addSlider(addTarget) {
      // Apply classes and data to the target.
      addClass(addTarget, options.cssClasses.target);

      if (options.dir === 0) {
        addClass(addTarget, options.cssClasses.ltr);
      } else {
        addClass(addTarget, options.cssClasses.rtl);
      }

      if (options.ort === 0) {
        addClass(addTarget, options.cssClasses.horizontal);
      } else {
        addClass(addTarget, options.cssClasses.vertical);
      }

      var textDirection = getComputedStyle(addTarget).direction;

      if (textDirection === "rtl") {
        addClass(addTarget, options.cssClasses.textDirectionRtl);
      } else {
        addClass(addTarget, options.cssClasses.textDirectionLtr);
      }

      return addNodeTo(addTarget, options.cssClasses.base);
    }

    function addTooltip(handle, handleNumber) {
      if (!options.tooltips || !options.tooltips[handleNumber]) {
        return false;
      }

      return addNodeTo(handle.firstChild, options.cssClasses.tooltip);
    }

    function isSliderDisabled() {
      return scope_Target.hasAttribute("disabled");
    } // Disable the slider dragging if any handle is disabled


    function isHandleDisabled(handleNumber) {
      var handleOrigin = scope_Handles[handleNumber];
      return handleOrigin.hasAttribute("disabled");
    }

    function removeTooltips() {
      if (scope_Tooltips) {
        removeEvent("update" + INTERNAL_EVENT_NS.tooltips);
        scope_Tooltips.forEach(function (tooltip) {
          if (tooltip) {
            removeElement(tooltip);
          }
        });
        scope_Tooltips = null;
      }
    } // The tooltips option is a shorthand for using the 'update' event.


    function tooltips() {
      removeTooltips(); // Tooltips are added with options.tooltips in original order.

      scope_Tooltips = scope_Handles.map(addTooltip);
      bindEvent("update" + INTERNAL_EVENT_NS.tooltips, function (values, handleNumber, unencoded) {
        if (!scope_Tooltips || !options.tooltips) {
          return;
        }

        if (scope_Tooltips[handleNumber] === false) {
          return;
        }

        var formattedValue = values[handleNumber];

        if (options.tooltips[handleNumber] !== true) {
          formattedValue = options.tooltips[handleNumber].to(unencoded[handleNumber]);
        }

        scope_Tooltips[handleNumber].innerHTML = formattedValue;
      });
    }

    function aria() {
      removeEvent("update" + INTERNAL_EVENT_NS.aria);
      bindEvent("update" + INTERNAL_EVENT_NS.aria, function (values, handleNumber, unencoded, tap, positions) {
        // Update Aria Values for all handles, as a change in one changes min and max values for the next.
        scope_HandleNumbers.forEach(function (index) {
          var handle = scope_Handles[index];
          var min = checkHandlePosition(scope_Locations, index, 0, true, true, true);
          var max = checkHandlePosition(scope_Locations, index, 100, true, true, true);
          var now = positions[index]; // Formatted value for display

          var text = String(options.ariaFormat.to(unencoded[index])); // Map to slider range values

          min = scope_Spectrum.fromStepping(min).toFixed(1);
          max = scope_Spectrum.fromStepping(max).toFixed(1);
          now = scope_Spectrum.fromStepping(now).toFixed(1);
          handle.children[0].setAttribute("aria-valuemin", min);
          handle.children[0].setAttribute("aria-valuemax", max);
          handle.children[0].setAttribute("aria-valuenow", now);
          handle.children[0].setAttribute("aria-valuetext", text);
        });
      });
    }

    function getGroup(pips) {
      // Use the range.
      if (pips.mode === exports.PipsMode.Range || pips.mode === exports.PipsMode.Steps) {
        return scope_Spectrum.xVal;
      }

      if (pips.mode === exports.PipsMode.Count) {
        if (pips.values < 2) {
          throw new Error("noUiSlider: 'values' (>= 2) required for mode 'count'.");
        } // Divide 0 - 100 in 'count' parts.


        var interval = pips.values - 1;
        var spread = 100 / interval;
        var values = []; // List these parts and have them handled as 'positions'.

        while (interval--) {
          values[interval] = interval * spread;
        }

        values.push(100);
        return mapToRange(values, pips.stepped);
      }

      if (pips.mode === exports.PipsMode.Positions) {
        // Map all percentages to on-range values.
        return mapToRange(pips.values, pips.stepped);
      }

      if (pips.mode === exports.PipsMode.Values) {
        // If the value must be stepped, it needs to be converted to a percentage first.
        if (pips.stepped) {
          return pips.values.map(function (value) {
            // Convert to percentage, apply step, return to value.
            return scope_Spectrum.fromStepping(scope_Spectrum.getStep(scope_Spectrum.toStepping(value)));
          });
        } // Otherwise, we can simply use the values.


        return pips.values;
      }

      return []; // pips.mode = never
    }

    function mapToRange(values, stepped) {
      return values.map(function (value) {
        return scope_Spectrum.fromStepping(stepped ? scope_Spectrum.getStep(value) : value);
      });
    }

    function generateSpread(pips) {
      function safeIncrement(value, increment) {
        // Avoid floating point variance by dropping the smallest decimal places.
        return Number((value + increment).toFixed(7));
      }

      var group = getGroup(pips);
      var indexes = {};
      var firstInRange = scope_Spectrum.xVal[0];
      var lastInRange = scope_Spectrum.xVal[scope_Spectrum.xVal.length - 1];
      var ignoreFirst = false;
      var ignoreLast = false;
      var prevPct = 0; // Create a copy of the group, sort it and filter away all duplicates.

      group = unique(group.slice().sort(function (a, b) {
        return a - b;
      })); // Make sure the range starts with the first element.

      if (group[0] !== firstInRange) {
        group.unshift(firstInRange);
        ignoreFirst = true;
      } // Likewise for the last one.


      if (group[group.length - 1] !== lastInRange) {
        group.push(lastInRange);
        ignoreLast = true;
      }

      group.forEach(function (current, index) {
        // Get the current step and the lower + upper positions.
        var step;
        var i;
        var q;
        var low = current;
        var high = group[index + 1];
        var newPct;
        var pctDifference;
        var pctPos;
        var type;
        var steps;
        var realSteps;
        var stepSize;
        var isSteps = pips.mode === exports.PipsMode.Steps; // When using 'steps' mode, use the provided steps.
        // Otherwise, we'll step on to the next subrange.

        if (isSteps) {
          step = scope_Spectrum.xNumSteps[index];
        } // Default to a 'full' step.


        if (!step) {
          step = high - low;
        } // If high is undefined we are at the last subrange. Make sure it iterates once (#1088)


        if (high === undefined) {
          high = low;
        } // Make sure step isn't 0, which would cause an infinite loop (#654)


        step = Math.max(step, 0.0000001); // Find all steps in the subrange.

        for (i = low; i <= high; i = safeIncrement(i, step)) {
          // Get the percentage value for the current step,
          // calculate the size for the subrange.
          newPct = scope_Spectrum.toStepping(i);
          pctDifference = newPct - prevPct;
          steps = pctDifference / (pips.density || 1);
          realSteps = Math.round(steps); // This ratio represents the amount of percentage-space a point indicates.
          // For a density 1 the points/percentage = 1. For density 2, that percentage needs to be re-divided.
          // Round the percentage offset to an even number, then divide by two
          // to spread the offset on both sides of the range.

          stepSize = pctDifference / realSteps; // Divide all points evenly, adding the correct number to this subrange.
          // Run up to <= so that 100% gets a point, event if ignoreLast is set.

          for (q = 1; q <= realSteps; q += 1) {
            // The ratio between the rounded value and the actual size might be ~1% off.
            // Correct the percentage offset by the number of points
            // per subrange. density = 1 will result in 100 points on the
            // full range, 2 for 50, 4 for 25, etc.
            pctPos = prevPct + q * stepSize;
            indexes[pctPos.toFixed(5)] = [scope_Spectrum.fromStepping(pctPos), 0];
          } // Determine the point type.


          type = group.indexOf(i) > -1 ? exports.PipsType.LargeValue : isSteps ? exports.PipsType.SmallValue : exports.PipsType.NoValue; // Enforce the 'ignoreFirst' option by overwriting the type for 0.

          if (!index && ignoreFirst && i !== high) {
            type = 0;
          }

          if (!(i === high && ignoreLast)) {
            // Mark the 'type' of this point. 0 = plain, 1 = real value, 2 = step value.
            indexes[newPct.toFixed(5)] = [i, type];
          } // Update the percentage count.


          prevPct = newPct;
        }
      });
      return indexes;
    }

    function addMarking(spread, filterFunc, formatter) {
      var _a, _b;

      var element = scope_Document.createElement("div");
      var valueSizeClasses = (_a = {}, _a[exports.PipsType.None] = "", _a[exports.PipsType.NoValue] = options.cssClasses.valueNormal, _a[exports.PipsType.LargeValue] = options.cssClasses.valueLarge, _a[exports.PipsType.SmallValue] = options.cssClasses.valueSub, _a);
      var markerSizeClasses = (_b = {}, _b[exports.PipsType.None] = "", _b[exports.PipsType.NoValue] = options.cssClasses.markerNormal, _b[exports.PipsType.LargeValue] = options.cssClasses.markerLarge, _b[exports.PipsType.SmallValue] = options.cssClasses.markerSub, _b);
      var valueOrientationClasses = [options.cssClasses.valueHorizontal, options.cssClasses.valueVertical];
      var markerOrientationClasses = [options.cssClasses.markerHorizontal, options.cssClasses.markerVertical];
      addClass(element, options.cssClasses.pips);
      addClass(element, options.ort === 0 ? options.cssClasses.pipsHorizontal : options.cssClasses.pipsVertical);

      function getClasses(type, source) {
        var a = source === options.cssClasses.value;
        var orientationClasses = a ? valueOrientationClasses : markerOrientationClasses;
        var sizeClasses = a ? valueSizeClasses : markerSizeClasses;
        return source + " " + orientationClasses[options.ort] + " " + sizeClasses[type];
      }

      function addSpread(offset, value, type) {
        // Apply the filter function, if it is set.
        type = filterFunc ? filterFunc(value, type) : type;

        if (type === exports.PipsType.None) {
          return;
        } // Add a marker for every point


        var node = addNodeTo(element, false);
        node.className = getClasses(type, options.cssClasses.marker);
        node.style[options.style] = offset + "%"; // Values are only appended for points marked '1' or '2'.

        if (type > exports.PipsType.NoValue) {
          node = addNodeTo(element, false);
          node.className = getClasses(type, options.cssClasses.value);
          node.setAttribute("data-value", String(value));
          node.style[options.style] = offset + "%";
          node.innerHTML = String(formatter.to(value));
        }
      } // Append all points.


      Object.keys(spread).forEach(function (offset) {
        addSpread(offset, spread[offset][0], spread[offset][1]);
      });
      return element;
    }

    function removePips() {
      if (scope_Pips) {
        removeElement(scope_Pips);
        scope_Pips = null;
      }
    }

    function pips(pips) {
      // Fix #669
      removePips();
      var spread = generateSpread(pips);
      var filter = pips.filter;
      var format = pips.format || {
        to: function (value) {
          return String(Math.round(value));
        },
        from: Number
      };
      scope_Pips = scope_Target.appendChild(addMarking(spread, filter, format));
      return scope_Pips;
    } // Shorthand for base dimensions.


    function baseSize() {
      var rect = scope_Base.getBoundingClientRect();
      var alt = "offset" + ["Width", "Height"][options.ort];
      return options.ort === 0 ? rect.width || scope_Base[alt] : rect.height || scope_Base[alt];
    } // Handler for attaching events trough a proxy.


    function attachEvent(events, element, callback, data) {
      // This function can be used to 'filter' events to the slider.
      // element is a node, not a nodeList
      var method = function (event) {
        var e = fixEvent(event, data.pageOffset, data.target || element); // fixEvent returns false if this event has a different target
        // when handling (multi-) touch events;

        if (!e) {
          return false;
        } // doNotReject is passed by all end events to make sure released touches
        // are not rejected, leaving the slider "stuck" to the cursor;


        if (isSliderDisabled() && !data.doNotReject) {
          return false;
        } // Stop if an active 'tap' transition is taking place.


        if (hasClass(scope_Target, options.cssClasses.tap) && !data.doNotReject) {
          return false;
        } // Ignore right or middle clicks on start #454


        if (events === actions.start && e.buttons !== undefined && e.buttons > 1) {
          return false;
        } // Ignore right or middle clicks on start #454


        if (data.hover && e.buttons) {
          return false;
        } // 'supportsPassive' is only true if a browser also supports touch-action: none in CSS.
        // iOS safari does not, so it doesn't get to benefit from passive scrolling. iOS does support
        // touch-action: manipulation, but that allows panning, which breaks
        // sliders after zooming/on non-responsive pages.
        // See: https://bugs.webkit.org/show_bug.cgi?id=133112


        if (!supportsPassive) {
          e.preventDefault();
        }

        e.calcPoint = e.points[options.ort]; // Call the event handler with the event [ and additional data ].

        callback(e, data);
        return;
      };

      var methods = []; // Bind a closure on the target for every event type.

      events.split(" ").forEach(function (eventName) {
        element.addEventListener(eventName, method, supportsPassive ? {
          passive: true
        } : false);
        methods.push([eventName, method]);
      });
      return methods;
    } // Provide a clean event with standardized offset values.


    function fixEvent(e, pageOffset, eventTarget) {
      // Filter the event to register the type, which can be
      // touch, mouse or pointer. Offset changes need to be
      // made on an event specific basis.
      var touch = e.type.indexOf("touch") === 0;
      var mouse = e.type.indexOf("mouse") === 0;
      var pointer = e.type.indexOf("pointer") === 0;
      var x = 0;
      var y = 0; // IE10 implemented pointer events with a prefix;

      if (e.type.indexOf("MSPointer") === 0) {
        pointer = true;
      } // Erroneous events seem to be passed in occasionally on iOS/iPadOS after user finishes interacting with
      // the slider. They appear to be of type MouseEvent, yet they don't have usual properties set. Ignore
      // events that have no touches or buttons associated with them. (#1057, #1079, #1095)


      if (e.type === "mousedown" && !e.buttons && !e.touches) {
        return false;
      } // The only thing one handle should be concerned about is the touches that originated on top of it.


      if (touch) {
        // Returns true if a touch originated on the target.
        var isTouchOnTarget = function (checkTouch) {
          var target = checkTouch.target;
          return target === eventTarget || eventTarget.contains(target) || e.composed && e.composedPath().shift() === eventTarget;
        }; // In the case of touchstart events, we need to make sure there is still no more than one
        // touch on the target so we look amongst all touches.


        if (e.type === "touchstart") {
          var targetTouches = Array.prototype.filter.call(e.touches, isTouchOnTarget); // Do not support more than one touch per handle.

          if (targetTouches.length > 1) {
            return false;
          }

          x = targetTouches[0].pageX;
          y = targetTouches[0].pageY;
        } else {
          // In the other cases, find on changedTouches is enough.
          var targetTouch = Array.prototype.find.call(e.changedTouches, isTouchOnTarget); // Cancel if the target touch has not moved.

          if (!targetTouch) {
            return false;
          }

          x = targetTouch.pageX;
          y = targetTouch.pageY;
        }
      }

      pageOffset = pageOffset || getPageOffset(scope_Document);

      if (mouse || pointer) {
        x = e.clientX + pageOffset.x;
        y = e.clientY + pageOffset.y;
      }

      e.pageOffset = pageOffset;
      e.points = [x, y];
      e.cursor = mouse || pointer; // Fix #435

      return e;
    } // Translate a coordinate in the document to a percentage on the slider


    function calcPointToPercentage(calcPoint) {
      var location = calcPoint - offset(scope_Base, options.ort);
      var proposal = location * 100 / baseSize(); // Clamp proposal between 0% and 100%
      // Out-of-bound coordinates may occur when .noUi-base pseudo-elements
      // are used (e.g. contained handles feature)

      proposal = limit(proposal);
      return options.dir ? 100 - proposal : proposal;
    } // Find handle closest to a certain percentage on the slider


    function getClosestHandle(clickedPosition) {
      var smallestDifference = 100;
      var handleNumber = false;
      scope_Handles.forEach(function (handle, index) {
        // Disabled handles are ignored
        if (isHandleDisabled(index)) {
          return;
        }

        var handlePosition = scope_Locations[index];
        var differenceWithThisHandle = Math.abs(handlePosition - clickedPosition); // Initial state

        var clickAtEdge = differenceWithThisHandle === 100 && smallestDifference === 100; // Difference with this handle is smaller than the previously checked handle

        var isCloser = differenceWithThisHandle < smallestDifference;
        var isCloserAfter = differenceWithThisHandle <= smallestDifference && clickedPosition > handlePosition;

        if (isCloser || isCloserAfter || clickAtEdge) {
          handleNumber = index;
          smallestDifference = differenceWithThisHandle;
        }
      });
      return handleNumber;
    } // Fire 'end' when a mouse or pen leaves the document.


    function documentLeave(event, data) {
      if (event.type === "mouseout" && event.target.nodeName === "HTML" && event.relatedTarget === null) {
        eventEnd(event, data);
      }
    } // Handle movement on document for handle and range drag.


    function eventMove(event, data) {
      // Fix #498
      // Check value of .buttons in 'start' to work around a bug in IE10 mobile (data.buttonsProperty).
      // https://connect.microsoft.com/IE/feedback/details/927005/mobile-ie10-windows-phone-buttons-property-of-pointermove-event-always-zero
      // IE9 has .buttons and .which zero on mousemove.
      // Firefox breaks the spec MDN defines.
      if (navigator.appVersion.indexOf("MSIE 9") === -1 && event.buttons === 0 && data.buttonsProperty !== 0) {
        return eventEnd(event, data);
      } // Check if we are moving up or down


      var movement = (options.dir ? -1 : 1) * (event.calcPoint - data.startCalcPoint); // Convert the movement into a percentage of the slider width/height

      var proposal = movement * 100 / data.baseSize;
      moveHandles(movement > 0, proposal, data.locations, data.handleNumbers, data.connect);
    } // Unbind move events on document, call callbacks.


    function eventEnd(event, data) {
      // The handle is no longer active, so remove the class.
      if (data.handle) {
        removeClass(data.handle, options.cssClasses.active);
        scope_ActiveHandlesCount -= 1;
      } // Unbind the move and end events, which are added on 'start'.


      data.listeners.forEach(function (c) {
        scope_DocumentElement.removeEventListener(c[0], c[1]);
      });

      if (scope_ActiveHandlesCount === 0) {
        // Remove dragging class.
        removeClass(scope_Target, options.cssClasses.drag);
        setZindex(); // Remove cursor styles and text-selection events bound to the body.

        if (event.cursor) {
          scope_Body.style.cursor = "";
          scope_Body.removeEventListener("selectstart", preventDefault);
        }
      }

      data.handleNumbers.forEach(function (handleNumber) {
        fireEvent("change", handleNumber);
        fireEvent("set", handleNumber);
        fireEvent("end", handleNumber);
      });
    } // Bind move events on document.


    function eventStart(event, data) {
      // Ignore event if any handle is disabled
      if (data.handleNumbers.some(isHandleDisabled)) {
        return;
      }

      var handle;

      if (data.handleNumbers.length === 1) {
        var handleOrigin = scope_Handles[data.handleNumbers[0]];
        handle = handleOrigin.children[0];
        scope_ActiveHandlesCount += 1; // Mark the handle as 'active' so it can be styled.

        addClass(handle, options.cssClasses.active);
      } // A drag should never propagate up to the 'tap' event.


      event.stopPropagation(); // Record the event listeners.

      var listeners = []; // Attach the move and end events.

      var moveEvent = attachEvent(actions.move, scope_DocumentElement, eventMove, {
        // The event target has changed so we need to propagate the original one so that we keep
        // relying on it to extract target touches.
        target: event.target,
        handle: handle,
        connect: data.connect,
        listeners: listeners,
        startCalcPoint: event.calcPoint,
        baseSize: baseSize(),
        pageOffset: event.pageOffset,
        handleNumbers: data.handleNumbers,
        buttonsProperty: event.buttons,
        locations: scope_Locations.slice()
      });
      var endEvent = attachEvent(actions.end, scope_DocumentElement, eventEnd, {
        target: event.target,
        handle: handle,
        listeners: listeners,
        doNotReject: true,
        handleNumbers: data.handleNumbers
      });
      var outEvent = attachEvent("mouseout", scope_DocumentElement, documentLeave, {
        target: event.target,
        handle: handle,
        listeners: listeners,
        doNotReject: true,
        handleNumbers: data.handleNumbers
      }); // We want to make sure we pushed the listeners in the listener list rather than creating
      // a new one as it has already been passed to the event handlers.

      listeners.push.apply(listeners, moveEvent.concat(endEvent, outEvent)); // Text selection isn't an issue on touch devices,
      // so adding cursor styles can be skipped.

      if (event.cursor) {
        // Prevent the 'I' cursor and extend the range-drag cursor.
        scope_Body.style.cursor = getComputedStyle(event.target).cursor; // Mark the target with a dragging state.

        if (scope_Handles.length > 1) {
          addClass(scope_Target, options.cssClasses.drag);
        } // Prevent text selection when dragging the handles.
        // In noUiSlider <= 9.2.0, this was handled by calling preventDefault on mouse/touch start/move,
        // which is scroll blocking. The selectstart event is supported by FireFox starting from version 52,
        // meaning the only holdout is iOS Safari. This doesn't matter: text selection isn't triggered there.
        // The 'cursor' flag is false.
        // See: http://caniuse.com/#search=selectstart


        scope_Body.addEventListener("selectstart", preventDefault, false);
      }

      data.handleNumbers.forEach(function (handleNumber) {
        fireEvent("start", handleNumber);
      });
    } // Move closest handle to tapped location.


    function eventTap(event) {
      // The tap event shouldn't propagate up
      event.stopPropagation();
      var proposal = calcPointToPercentage(event.calcPoint);
      var handleNumber = getClosestHandle(proposal); // Tackle the case that all handles are 'disabled'.

      if (handleNumber === false) {
        return;
      } // Flag the slider as it is now in a transitional state.
      // Transition takes a configurable amount of ms (default 300). Re-enable the slider after that.


      if (!options.events.snap) {
        addClassFor(scope_Target, options.cssClasses.tap, options.animationDuration);
      }

      setHandle(handleNumber, proposal, true, true);
      setZindex();
      fireEvent("slide", handleNumber, true);
      fireEvent("update", handleNumber, true);
      fireEvent("change", handleNumber, true);
      fireEvent("set", handleNumber, true);

      if (options.events.snap) {
        eventStart(event, {
          handleNumbers: [handleNumber]
        });
      }
    } // Fires a 'hover' event for a hovered mouse/pen position.


    function eventHover(event) {
      var proposal = calcPointToPercentage(event.calcPoint);
      var to = scope_Spectrum.getStep(proposal);
      var value = scope_Spectrum.fromStepping(to);
      Object.keys(scope_Events).forEach(function (targetEvent) {
        if ("hover" === targetEvent.split(".")[0]) {
          scope_Events[targetEvent].forEach(function (callback) {
            callback.call(scope_Self, value);
          });
        }
      });
    } // Handles keydown on focused handles
    // Don't move the document when pressing arrow keys on focused handles


    function eventKeydown(event, handleNumber) {
      if (isSliderDisabled() || isHandleDisabled(handleNumber)) {
        return false;
      }

      var horizontalKeys = ["Left", "Right"];
      var verticalKeys = ["Down", "Up"];
      var largeStepKeys = ["PageDown", "PageUp"];
      var edgeKeys = ["Home", "End"];

      if (options.dir && !options.ort) {
        // On an right-to-left slider, the left and right keys act inverted
        horizontalKeys.reverse();
      } else if (options.ort && !options.dir) {
        // On a top-to-bottom slider, the up and down keys act inverted
        verticalKeys.reverse();
        largeStepKeys.reverse();
      } // Strip "Arrow" for IE compatibility. https://developer.mozilla.org/en-US/docs/Web/API/KeyboardEvent/key


      var key = event.key.replace("Arrow", "");
      var isLargeDown = key === largeStepKeys[0];
      var isLargeUp = key === largeStepKeys[1];
      var isDown = key === verticalKeys[0] || key === horizontalKeys[0] || isLargeDown;
      var isUp = key === verticalKeys[1] || key === horizontalKeys[1] || isLargeUp;
      var isMin = key === edgeKeys[0];
      var isMax = key === edgeKeys[1];

      if (!isDown && !isUp && !isMin && !isMax) {
        return true;
      }

      event.preventDefault();
      var to;

      if (isUp || isDown) {
        var multiplier = options.keyboardPageMultiplier;
        var direction = isDown ? 0 : 1;
        var steps = getNextStepsForHandle(handleNumber);
        var step = steps[direction]; // At the edge of a slider, do nothing

        if (step === null) {
          return false;
        } // No step set, use the default of 10% of the sub-range


        if (step === false) {
          step = scope_Spectrum.getDefaultStep(scope_Locations[handleNumber], isDown, options.keyboardDefaultStep);
        }

        if (isLargeUp || isLargeDown) {
          step *= multiplier;
        } // Step over zero-length ranges (#948);


        step = Math.max(step, 0.0000001); // Decrement for down steps

        step = (isDown ? -1 : 1) * step;
        to = scope_Values[handleNumber] + step;
      } else if (isMax) {
        // End key
        to = options.spectrum.xVal[options.spectrum.xVal.length - 1];
      } else {
        // Home key
        to = options.spectrum.xVal[0];
      }

      setHandle(handleNumber, scope_Spectrum.toStepping(to), true, true);
      fireEvent("slide", handleNumber);
      fireEvent("update", handleNumber);
      fireEvent("change", handleNumber);
      fireEvent("set", handleNumber);
      return false;
    } // Attach events to several slider parts.


    function bindSliderEvents(behaviour) {
      // Attach the standard drag event to the handles.
      if (!behaviour.fixed) {
        scope_Handles.forEach(function (handle, index) {
          // These events are only bound to the visual handle
          // element, not the 'real' origin element.
          attachEvent(actions.start, handle.children[0], eventStart, {
            handleNumbers: [index]
          });
        });
      } // Attach the tap event to the slider base.


      if (behaviour.tap) {
        attachEvent(actions.start, scope_Base, eventTap, {});
      } // Fire hover events


      if (behaviour.hover) {
        attachEvent(actions.move, scope_Base, eventHover, {
          hover: true
        });
      } // Make the range draggable.


      if (behaviour.drag) {
        scope_Connects.forEach(function (connect, index) {
          if (connect === false || index === 0 || index === scope_Connects.length - 1) {
            return;
          }

          var handleBefore = scope_Handles[index - 1];
          var handleAfter = scope_Handles[index];
          var eventHolders = [connect];
          addClass(connect, options.cssClasses.draggable); // When the range is fixed, the entire range can
          // be dragged by the handles. The handle in the first
          // origin will propagate the start event upward,
          // but it needs to be bound manually on the other.

          if (behaviour.fixed) {
            eventHolders.push(handleBefore.children[0]);
            eventHolders.push(handleAfter.children[0]);
          }

          eventHolders.forEach(function (eventHolder) {
            attachEvent(actions.start, eventHolder, eventStart, {
              handles: [handleBefore, handleAfter],
              handleNumbers: [index - 1, index],
              connect: connect
            });
          });
        });
      }
    } // Attach an event to this slider, possibly including a namespace


    function bindEvent(namespacedEvent, callback) {
      scope_Events[namespacedEvent] = scope_Events[namespacedEvent] || [];
      scope_Events[namespacedEvent].push(callback); // If the event bound is 'update,' fire it immediately for all handles.

      if (namespacedEvent.split(".")[0] === "update") {
        scope_Handles.forEach(function (a, index) {
          fireEvent("update", index);
        });
      }
    }

    function isInternalNamespace(namespace) {
      return namespace === INTERNAL_EVENT_NS.aria || namespace === INTERNAL_EVENT_NS.tooltips;
    } // Undo attachment of event


    function removeEvent(namespacedEvent) {
      var event = namespacedEvent && namespacedEvent.split(".")[0];
      var namespace = event ? namespacedEvent.substring(event.length) : namespacedEvent;
      Object.keys(scope_Events).forEach(function (bind) {
        var tEvent = bind.split(".")[0];
        var tNamespace = bind.substring(tEvent.length);

        if ((!event || event === tEvent) && (!namespace || namespace === tNamespace)) {
          // only delete protected internal event if intentional
          if (!isInternalNamespace(tNamespace) || namespace === tNamespace) {
            delete scope_Events[bind];
          }
        }
      });
    } // External event handling


    function fireEvent(eventName, handleNumber, tap) {
      Object.keys(scope_Events).forEach(function (targetEvent) {
        var eventType = targetEvent.split(".")[0];

        if (eventName === eventType) {
          scope_Events[targetEvent].forEach(function (callback) {
            callback.call( // Use the slider public API as the scope ('this')
            scope_Self, // Return values as array, so arg_1[arg_2] is always valid.
            scope_Values.map(options.format.to), // Handle index, 0 or 1
            handleNumber, // Un-formatted slider values
            scope_Values.slice(), // Event is fired by tap, true or false
            tap || false, // Left offset of the handle, in relation to the slider
            scope_Locations.slice(), // add the slider public API to an accessible parameter when this is unavailable
            scope_Self);
          });
        }
      });
    } // Split out the handle positioning logic so the Move event can use it, too


    function checkHandlePosition(reference, handleNumber, to, lookBackward, lookForward, getValue) {
      var distance; // For sliders with multiple handles, limit movement to the other handle.
      // Apply the margin option by adding it to the handle positions.

      if (scope_Handles.length > 1 && !options.events.unconstrained) {
        if (lookBackward && handleNumber > 0) {
          distance = scope_Spectrum.getAbsoluteDistance(reference[handleNumber - 1], options.margin, false);
          to = Math.max(to, distance);
        }

        if (lookForward && handleNumber < scope_Handles.length - 1) {
          distance = scope_Spectrum.getAbsoluteDistance(reference[handleNumber + 1], options.margin, true);
          to = Math.min(to, distance);
        }
      } // The limit option has the opposite effect, limiting handles to a
      // maximum distance from another. Limit must be > 0, as otherwise
      // handles would be unmovable.


      if (scope_Handles.length > 1 && options.limit) {
        if (lookBackward && handleNumber > 0) {
          distance = scope_Spectrum.getAbsoluteDistance(reference[handleNumber - 1], options.limit, false);
          to = Math.min(to, distance);
        }

        if (lookForward && handleNumber < scope_Handles.length - 1) {
          distance = scope_Spectrum.getAbsoluteDistance(reference[handleNumber + 1], options.limit, true);
          to = Math.max(to, distance);
        }
      } // The padding option keeps the handles a certain distance from the
      // edges of the slider. Padding must be > 0.


      if (options.padding) {
        if (handleNumber === 0) {
          distance = scope_Spectrum.getAbsoluteDistance(0, options.padding[0], false);
          to = Math.max(to, distance);
        }

        if (handleNumber === scope_Handles.length - 1) {
          distance = scope_Spectrum.getAbsoluteDistance(100, options.padding[1], true);
          to = Math.min(to, distance);
        }
      }

      to = scope_Spectrum.getStep(to); // Limit percentage to the 0 - 100 range

      to = limit(to); // Return false if handle can't move

      if (to === reference[handleNumber] && !getValue) {
        return false;
      }

      return to;
    } // Uses slider orientation to create CSS rules. a = base value;


    function inRuleOrder(v, a) {
      var o = options.ort;
      return (o ? a : v) + ", " + (o ? v : a);
    } // Moves handle(s) by a percentage
    // (bool, % to move, [% where handle started, ...], [index in scope_Handles, ...])


    function moveHandles(upward, proposal, locations, handleNumbers, connect) {
      var proposals = locations.slice(); // Store first handle now, so we still have it in case handleNumbers is reversed

      var firstHandle = handleNumbers[0];
      var b = [!upward, upward];
      var f = [upward, !upward]; // Copy handleNumbers so we don't change the dataset

      handleNumbers = handleNumbers.slice(); // Check to see which handle is 'leading'.
      // If that one can't move the second can't either.

      if (upward) {
        handleNumbers.reverse();
      } // Step 1: get the maximum percentage that any of the handles can move


      if (handleNumbers.length > 1) {
        handleNumbers.forEach(function (handleNumber, o) {
          var to = checkHandlePosition(proposals, handleNumber, proposals[handleNumber] + proposal, b[o], f[o], false); // Stop if one of the handles can't move.

          if (to === false) {
            proposal = 0;
          } else {
            proposal = to - proposals[handleNumber];
            proposals[handleNumber] = to;
          }
        });
      } // If using one handle, check backward AND forward
      else {
          b = f = [true];
        }

      var state = false; // Step 2: Try to set the handles with the found percentage

      handleNumbers.forEach(function (handleNumber, o) {
        state = setHandle(handleNumber, locations[handleNumber] + proposal, b[o], f[o]) || state;
      }); // Step 3: If a handle moved, fire events

      if (state) {
        handleNumbers.forEach(function (handleNumber) {
          fireEvent("update", handleNumber);
          fireEvent("slide", handleNumber);
        }); // If target is a connect, then fire drag event

        if (connect != undefined) {
          fireEvent("drag", firstHandle);
        }
      }
    } // Takes a base value and an offset. This offset is used for the connect bar size.
    // In the initial design for this feature, the origin element was 1% wide.
    // Unfortunately, a rounding bug in Chrome makes it impossible to implement this feature
    // in this manner: https://bugs.chromium.org/p/chromium/issues/detail?id=798223


    function transformDirection(a, b) {
      return options.dir ? 100 - a - b : a;
    } // Updates scope_Locations and scope_Values, updates visual state


    function updateHandlePosition(handleNumber, to) {
      // Update locations.
      scope_Locations[handleNumber] = to; // Convert the value to the slider stepping/range.

      scope_Values[handleNumber] = scope_Spectrum.fromStepping(to);
      var translation = 10 * (transformDirection(to, 0) - scope_DirOffset);
      var translateRule = "translate(" + inRuleOrder(translation + "%", "0") + ")";
      scope_Handles[handleNumber].style[options.transformRule] = translateRule;
      updateConnect(handleNumber);
      updateConnect(handleNumber + 1);
    } // Handles before the slider middle are stacked later = higher,
    // Handles after the middle later is lower
    // [[7] [8] .......... | .......... [5] [4]


    function setZindex() {
      scope_HandleNumbers.forEach(function (handleNumber) {
        var dir = scope_Locations[handleNumber] > 50 ? -1 : 1;
        var zIndex = 3 + (scope_Handles.length + dir * handleNumber);
        scope_Handles[handleNumber].style.zIndex = String(zIndex);
      });
    } // Test suggested values and apply margin, step.
    // if exactInput is true, don't run checkHandlePosition, then the handle can be placed in between steps (#436)


    function setHandle(handleNumber, to, lookBackward, lookForward, exactInput) {
      if (!exactInput) {
        to = checkHandlePosition(scope_Locations, handleNumber, to, lookBackward, lookForward, false);
      }

      if (to === false) {
        return false;
      }

      updateHandlePosition(handleNumber, to);
      return true;
    } // Updates style attribute for connect nodes


    function updateConnect(index) {
      // Skip connects set to false
      if (!scope_Connects[index]) {
        return;
      }

      var l = 0;
      var h = 100;

      if (index !== 0) {
        l = scope_Locations[index - 1];
      }

      if (index !== scope_Connects.length - 1) {
        h = scope_Locations[index];
      } // We use two rules:
      // 'translate' to change the left/top offset;
      // 'scale' to change the width of the element;
      // As the element has a width of 100%, a translation of 100% is equal to 100% of the parent (.noUi-base)


      var connectWidth = h - l;
      var translateRule = "translate(" + inRuleOrder(transformDirection(l, connectWidth) + "%", "0") + ")";
      var scaleRule = "scale(" + inRuleOrder(connectWidth / 100, "1") + ")";
      scope_Connects[index].style[options.transformRule] = translateRule + " " + scaleRule;
    } // Parses value passed to .set method. Returns current value if not parse-able.


    function resolveToValue(to, handleNumber) {
      // Setting with null indicates an 'ignore'.
      // Inputting 'false' is invalid.
      if (to === null || to === false || to === undefined) {
        return scope_Locations[handleNumber];
      } // If a formatted number was passed, attempt to decode it.


      if (typeof to === "number") {
        to = String(to);
      }

      to = options.format.from(to);

      if (to !== false) {
        to = scope_Spectrum.toStepping(to);
      } // If parsing the number failed, use the current value.


      if (to === false || isNaN(to)) {
        return scope_Locations[handleNumber];
      }

      return to;
    } // Set the slider value.


    function valueSet(input, fireSetEvent, exactInput) {
      var values = asArray(input);
      var isInit = scope_Locations[0] === undefined; // Event fires by default

      fireSetEvent = fireSetEvent === undefined ? true : fireSetEvent; // Animation is optional.
      // Make sure the initial values were set before using animated placement.

      if (options.animate && !isInit) {
        addClassFor(scope_Target, options.cssClasses.tap, options.animationDuration);
      } // First pass, without lookAhead but with lookBackward. Values are set from left to right.


      scope_HandleNumbers.forEach(function (handleNumber) {
        setHandle(handleNumber, resolveToValue(values[handleNumber], handleNumber), true, false, exactInput);
      });
      var i = scope_HandleNumbers.length === 1 ? 0 : 1; // Secondary passes. Now that all base values are set, apply constraints.
      // Iterate all handles to ensure constraints are applied for the entire slider (Issue #1009)

      for (; i < scope_HandleNumbers.length; ++i) {
        scope_HandleNumbers.forEach(function (handleNumber) {
          setHandle(handleNumber, scope_Locations[handleNumber], true, true, exactInput);
        });
      }

      setZindex();
      scope_HandleNumbers.forEach(function (handleNumber) {
        fireEvent("update", handleNumber); // Fire the event only for handles that received a new value, as per #579

        if (values[handleNumber] !== null && fireSetEvent) {
          fireEvent("set", handleNumber);
        }
      });
    } // Reset slider to initial values


    function valueReset(fireSetEvent) {
      valueSet(options.start, fireSetEvent);
    } // Set value for a single handle


    function valueSetHandle(handleNumber, value, fireSetEvent, exactInput) {
      // Ensure numeric input
      handleNumber = Number(handleNumber);

      if (!(handleNumber >= 0 && handleNumber < scope_HandleNumbers.length)) {
        throw new Error("noUiSlider: invalid handle number, got: " + handleNumber);
      } // Look both backward and forward, since we don't want this handle to "push" other handles (#960);
      // The exactInput argument can be used to ignore slider stepping (#436)


      setHandle(handleNumber, resolveToValue(value, handleNumber), true, true, exactInput);
      fireEvent("update", handleNumber);

      if (fireSetEvent) {
        fireEvent("set", handleNumber);
      }
    } // Get the slider value.


    function valueGet() {
      var values = scope_Values.map(options.format.to); // If only one handle is used, return a single value.

      if (values.length === 1) {
        return values[0];
      }

      return values;
    } // Removes classes from the root and empties it.


    function destroy() {
      // remove protected internal listeners
      removeEvent(INTERNAL_EVENT_NS.aria);
      removeEvent(INTERNAL_EVENT_NS.tooltips);
      Object.keys(options.cssClasses).forEach(function (key) {
        removeClass(scope_Target, options.cssClasses[key]);
      });

      while (scope_Target.firstChild) {
        scope_Target.removeChild(scope_Target.firstChild);
      }

      delete scope_Target.noUiSlider;
    }

    function getNextStepsForHandle(handleNumber) {
      var location = scope_Locations[handleNumber];
      var nearbySteps = scope_Spectrum.getNearbySteps(location);
      var value = scope_Values[handleNumber];
      var increment = nearbySteps.thisStep.step;
      var decrement = null; // If snapped, directly use defined step value

      if (options.snap) {
        return [value - nearbySteps.stepBefore.startValue || null, nearbySteps.stepAfter.startValue - value || null];
      } // If the next value in this step moves into the next step,
      // the increment is the start of the next step - the current value


      if (increment !== false) {
        if (value + increment > nearbySteps.stepAfter.startValue) {
          increment = nearbySteps.stepAfter.startValue - value;
        }
      } // If the value is beyond the starting point


      if (value > nearbySteps.thisStep.startValue) {
        decrement = nearbySteps.thisStep.step;
      } else if (nearbySteps.stepBefore.step === false) {
        decrement = false;
      } // If a handle is at the start of a step, it always steps back into the previous step first
      else {
          decrement = value - nearbySteps.stepBefore.highestStep;
        } // Now, if at the slider edges, there is no in/decrement


      if (location === 100) {
        increment = null;
      } else if (location === 0) {
        decrement = null;
      } // As per #391, the comparison for the decrement step can have some rounding issues.


      var stepDecimals = scope_Spectrum.countStepDecimals(); // Round per #391

      if (increment !== null && increment !== false) {
        increment = Number(increment.toFixed(stepDecimals));
      }

      if (decrement !== null && decrement !== false) {
        decrement = Number(decrement.toFixed(stepDecimals));
      }

      return [decrement, increment];
    } // Get the current step size for the slider.


    function getNextSteps() {
      return scope_HandleNumbers.map(getNextStepsForHandle);
    } // Updatable: margin, limit, padding, step, range, animate, snap


    function updateOptions(optionsToUpdate, fireSetEvent) {
      // Spectrum is created using the range, snap, direction and step options.
      // 'snap' and 'step' can be updated.
      // If 'snap' and 'step' are not passed, they should remain unchanged.
      var v = valueGet();
      var updateAble = ["margin", "limit", "padding", "range", "animate", "snap", "step", "format", "pips", "tooltips"]; // Only change options that we're actually passed to update.

      updateAble.forEach(function (name) {
        // Check for undefined. null removes the value.
        if (optionsToUpdate[name] !== undefined) {
          originalOptions[name] = optionsToUpdate[name];
        }
      });
      var newOptions = testOptions(originalOptions); // Load new options into the slider state

      updateAble.forEach(function (name) {
        if (optionsToUpdate[name] !== undefined) {
          options[name] = newOptions[name];
        }
      });
      scope_Spectrum = newOptions.spectrum; // Limit, margin and padding depend on the spectrum but are stored outside of it. (#677)

      options.margin = newOptions.margin;
      options.limit = newOptions.limit;
      options.padding = newOptions.padding; // Update pips, removes existing.

      if (options.pips) {
        pips(options.pips);
      } else {
        removePips();
      } // Update tooltips, removes existing.


      if (options.tooltips) {
        tooltips();
      } else {
        removeTooltips();
      } // Invalidate the current positioning so valueSet forces an update.


      scope_Locations = [];
      valueSet(isSet(optionsToUpdate.start) ? optionsToUpdate.start : v, fireSetEvent);
    } // Initialization steps


    function setupSlider() {
      // Create the base element, initialize HTML and set classes.
      // Add handles and connect elements.
      scope_Base = addSlider(scope_Target);
      addElements(options.connect, scope_Base); // Attach user events.

      bindSliderEvents(options.events); // Use the public value method to set the start values.

      valueSet(options.start);

      if (options.pips) {
        pips(options.pips);
      }

      if (options.tooltips) {
        tooltips();
      }

      aria();
    }

    setupSlider();
    var scope_Self = {
      destroy: destroy,
      steps: getNextSteps,
      on: bindEvent,
      off: removeEvent,
      get: valueGet,
      set: valueSet,
      setHandle: valueSetHandle,
      reset: valueReset,
      // Exposed for unit testing, don't use this in your application.
      __moveHandles: function (upward, proposal, handleNumbers) {
        moveHandles(upward, proposal, scope_Locations, handleNumbers);
      },
      options: originalOptions,
      updateOptions: updateOptions,
      target: scope_Target,
      removePips: removePips,
      removeTooltips: removeTooltips,
      getTooltips: function () {
        return scope_Tooltips;
      },
      getOrigins: function () {
        return scope_Handles;
      },
      pips: pips // Issue #594

    };
    return scope_Self;
  } // Run the standard initializer


  function initialize(target, originalOptions) {
    if (!target || !target.nodeName) {
      throw new Error("noUiSlider: create requires a single element, got: " + target);
    } // Throw an error if the slider was already initialized.


    if (target.noUiSlider) {
      throw new Error("noUiSlider: Slider was already initialized.");
    } // Test the options and create the slider environment;


    var options = testOptions(originalOptions);
    var api = scope(target, options, originalOptions);
    target.noUiSlider = api;
    return api;
  }

  var nouislider = {
    // Exposed for unit testing, don't use this in your application.
    __spectrum: Spectrum,
    // A reference to the default classes, allows global changes.
    // Use the cssClasses option for changes to one slider.
    cssClasses: cssClasses,
    create: initialize
  };
  exports.create = initialize;
  exports.cssClasses = cssClasses;
  exports.default = nouislider;
  Object.defineProperty(exports, '__esModule', {
    value: true
  });
});

/***/ }),

/***/ "./node_modules/progressbar.js/dist/progressbar.js":
/*!*********************************************************!*\
  !*** ./node_modules/progressbar.js/dist/progressbar.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

var require;var require;// ProgressBar.js 1.1.0
// https://kimmobrunfeldt.github.io/progressbar.js
// License: MIT
(function (f) {
  if (true) {
    module.exports = f();
  } else { var g; }
})(function () {
  var define, module, exports;
  return function () {
    function r(e, n, t) {
      function o(i, f) {
        if (!n[i]) {
          if (!e[i]) {
            var c = "function" == typeof require && require;
            if (!f && c) return require(i, !0);
            if (u) return u(i, !0);
            var a = new Error("Cannot find module '" + i + "'");
            throw a.code = "MODULE_NOT_FOUND", a;
          }

          var p = n[i] = {
            exports: {}
          };
          e[i][0].call(p.exports, function (r) {
            var n = e[i][1][r];
            return o(n || r);
          }, p, p.exports, r, e, n, t);
        }

        return n[i].exports;
      }

      for (var u = "function" == typeof require && require, i = 0; i < t.length; i++) o(t[i]);

      return o;
    }

    return r;
  }()({
    1: [function (require, module, exports) {
      /*! Shifty 2.8.0 - https://github.com/jeremyckahn/shifty */
      !function (t, n) {
        "object" == typeof exports && "object" == typeof module ? module.exports = n() : "function" == typeof define && define.amd ? define("shifty", [], n) : "object" == typeof exports ? exports.shifty = n() : t.shifty = n();
      }(window, function () {
        return function (t) {
          var n = {};

          function e(r) {
            if (n[r]) return n[r].exports;
            var i = n[r] = {
              i: r,
              l: !1,
              exports: {}
            };
            return t[r].call(i.exports, i, i.exports, e), i.l = !0, i.exports;
          }

          return e.m = t, e.c = n, e.d = function (t, n, r) {
            e.o(t, n) || Object.defineProperty(t, n, {
              enumerable: !0,
              get: r
            });
          }, e.r = function (t) {
            "undefined" != typeof Symbol && Symbol.toStringTag && Object.defineProperty(t, Symbol.toStringTag, {
              value: "Module"
            }), Object.defineProperty(t, "__esModule", {
              value: !0
            });
          }, e.t = function (t, n) {
            if (1 & n && (t = e(t)), 8 & n) return t;
            if (4 & n && "object" == typeof t && t && t.__esModule) return t;
            var r = Object.create(null);
            if (e.r(r), Object.defineProperty(r, "default", {
              enumerable: !0,
              value: t
            }), 2 & n && "string" != typeof t) for (var i in t) e.d(r, i, function (n) {
              return t[n];
            }.bind(null, i));
            return r;
          }, e.n = function (t) {
            var n = t && t.__esModule ? function () {
              return t.default;
            } : function () {
              return t;
            };
            return e.d(n, "a", n), n;
          }, e.o = function (t, n) {
            return Object.prototype.hasOwnProperty.call(t, n);
          }, e.p = "", e(e.s = 3);
        }([function (t, n, e) {
          "use strict";

          (function (t) {
            e.d(n, "e", function () {
              return d;
            }), e.d(n, "c", function () {
              return y;
            }), e.d(n, "b", function () {
              return _;
            }), e.d(n, "a", function () {
              return g;
            }), e.d(n, "d", function () {
              return w;
            });
            var r = e(1);

            function i(t, n) {
              for (var e = 0; e < n.length; e++) {
                var r = n[e];
                r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r);
              }
            }

            function u(t) {
              return (u = "function" == typeof Symbol && "symbol" == typeof Symbol.iterator ? function (t) {
                return typeof t;
              } : function (t) {
                return t && "function" == typeof Symbol && t.constructor === Symbol && t !== Symbol.prototype ? "symbol" : typeof t;
              })(t);
            }

            function o(t) {
              for (var n = 1; n < arguments.length; n++) {
                var e = null != arguments[n] ? arguments[n] : {},
                    r = Object.keys(e);
                "function" == typeof Object.getOwnPropertySymbols && (r = r.concat(Object.getOwnPropertySymbols(e).filter(function (t) {
                  return Object.getOwnPropertyDescriptor(e, t).enumerable;
                }))), r.forEach(function (n) {
                  a(t, n, e[n]);
                });
              }

              return t;
            }

            function a(t, n, e) {
              return n in t ? Object.defineProperty(t, n, {
                value: e,
                enumerable: !0,
                configurable: !0,
                writable: !0
              }) : t[n] = e, t;
            }

            var c = "undefined" != typeof window ? window : t,
                f = c.requestAnimationFrame || c.webkitRequestAnimationFrame || c.oRequestAnimationFrame || c.msRequestAnimationFrame || c.mozCancelRequestAnimationFrame && c.mozRequestAnimationFrame || setTimeout,
                s = function () {},
                l = null,
                h = null,
                p = o({}, r),
                d = function (t, n, e, r, i, u, o) {
              var a = t < u ? 0 : (t - u) / i;

              for (var c in n) {
                var f = o[c],
                    s = f.call ? f : p[f],
                    l = e[c];
                n[c] = l + (r[c] - l) * s(a);
              }

              return n;
            },
                v = function (t, n) {
              var e = t._attachment,
                  r = t._currentState,
                  i = t._delay,
                  u = t._easing,
                  o = t._originalState,
                  a = t._duration,
                  c = t._step,
                  f = t._targetState,
                  s = t._timestamp,
                  l = s + i + a,
                  h = n > l ? l : n,
                  p = a - (l - h);
              h >= l ? (c(f, e, p), t.stop(!0)) : (t._applyFilter("beforeTween"), h < s + i ? (h = 1, a = 1, s = 1) : s += i, d(h, r, o, f, a, s, u), t._applyFilter("afterTween"), c(r, e, p));
            },
                y = function () {
              for (var t = g.now(), n = l; n;) {
                var e = n._next;
                v(n, t), n = e;
              }
            },
                _ = function (t) {
              var n = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : "linear",
                  e = {},
                  r = u(n);
              if ("string" === r || "function" === r) for (var i in t) e[i] = n;else for (var o in t) e[o] = n[o] || "linear";
              return e;
            },
                m = function (t) {
              if (t === l) (l = t._next) ? l._previous = null : h = null;else if (t === h) (h = t._previous) ? h._next = null : l = null;else {
                var n = t._previous,
                    e = t._next;
                n._next = e, e._previous = n;
              }
              t._previous = t._next = null;
            },
                g = function () {
              function t() {
                var n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                    e = arguments.length > 1 && void 0 !== arguments[1] ? arguments[1] : void 0;
                !function (t, n) {
                  if (!(t instanceof n)) throw new TypeError("Cannot call a class as a function");
                }(this, t), this._currentState = n, this._configured = !1, this._filters = [], this._timestamp = null, this._next = null, this._previous = null, e && this.setConfig(e);
              }

              var n, e, r;
              return n = t, (e = [{
                key: "_applyFilter",
                value: function (t) {
                  var n = !0,
                      e = !1,
                      r = void 0;

                  try {
                    for (var i, u = this._filters[Symbol.iterator](); !(n = (i = u.next()).done); n = !0) {
                      var o = i.value[t];
                      o && o(this);
                    }
                  } catch (t) {
                    e = !0, r = t;
                  } finally {
                    try {
                      n || null == u.return || u.return();
                    } finally {
                      if (e) throw r;
                    }
                  }
                }
              }, {
                key: "tween",
                value: function () {
                  var n = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : void 0,
                      e = this._attachment,
                      r = this._configured;
                  return !n && r || this.setConfig(n), this._pausedAtTime = null, this._timestamp = t.now(), this._start(this.get(), e), this.resume();
                }
              }, {
                key: "setConfig",
                value: function () {
                  var n = this,
                      e = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                      r = e.attachment,
                      i = e.delay,
                      u = void 0 === i ? 0 : i,
                      a = e.duration,
                      c = void 0 === a ? 500 : a,
                      f = e.easing,
                      l = e.from,
                      h = e.promise,
                      p = void 0 === h ? Promise : h,
                      d = e.start,
                      v = void 0 === d ? s : d,
                      y = e.step,
                      m = void 0 === y ? s : y,
                      g = e.to;
                  this._configured = !0, this._attachment = r, this._isPlaying = !1, this._pausedAtTime = null, this._scheduleId = null, this._delay = u, this._start = v, this._step = m, this._duration = c, this._currentState = o({}, l || this.get()), this._originalState = this.get(), this._targetState = o({}, g || this.get());
                  var w = this._currentState;
                  this._targetState = o({}, w, this._targetState), this._easing = _(w, f);
                  var b = t.filters;

                  for (var S in this._filters.length = 0, b) b[S].doesApply(this) && this._filters.push(b[S]);

                  return this._applyFilter("tweenCreated"), this._promise = new p(function (t, e) {
                    n._resolve = t, n._reject = e;
                  }), this._promise.catch(s), this;
                }
              }, {
                key: "get",
                value: function () {
                  return o({}, this._currentState);
                }
              }, {
                key: "set",
                value: function (t) {
                  this._currentState = t;
                }
              }, {
                key: "pause",
                value: function () {
                  if (this._isPlaying) return this._pausedAtTime = t.now(), this._isPlaying = !1, m(this), this;
                }
              }, {
                key: "resume",
                value: function () {
                  if (null === this._timestamp) return this.tween();
                  if (this._isPlaying) return this._promise;
                  var n = t.now();
                  return this._pausedAtTime && (this._timestamp += n - this._pausedAtTime, this._pausedAtTime = null), this._isPlaying = !0, null === l ? (l = this, h = this, function t() {
                    l && (f.call(c, t, 1e3 / 60), y());
                  }()) : (this._previous = h, h._next = this, h = this), this._promise;
                }
              }, {
                key: "seek",
                value: function (n) {
                  n = Math.max(n, 0);
                  var e = t.now();
                  return this._timestamp + n === 0 ? this : (this._timestamp = e - n, this._isPlaying || v(this, e), this);
                }
              }, {
                key: "stop",
                value: function () {
                  var t = arguments.length > 0 && void 0 !== arguments[0] && arguments[0],
                      n = this._attachment,
                      e = this._currentState,
                      r = this._easing,
                      i = this._originalState,
                      u = this._targetState;
                  if (this._isPlaying) return this._isPlaying = !1, m(this), t ? (this._applyFilter("beforeTween"), d(1, e, i, u, 1, 0, r), this._applyFilter("afterTween"), this._applyFilter("afterTweenEnd"), this._resolve(e, n)) : this._reject(e, n), this;
                }
              }, {
                key: "isPlaying",
                value: function () {
                  return this._isPlaying;
                }
              }, {
                key: "setScheduleFunction",
                value: function (n) {
                  t.setScheduleFunction(n);
                }
              }, {
                key: "dispose",
                value: function () {
                  for (var t in this) delete this[t];
                }
              }]) && i(n.prototype, e), r && i(n, r), t;
            }();

            function w() {
              var t = arguments.length > 0 && void 0 !== arguments[0] ? arguments[0] : {},
                  n = new g(),
                  e = n.tween(t);
              return e.tweenable = n, e;
            }

            g.setScheduleFunction = function (t) {
              return f = t;
            }, g.formulas = p, g.filters = {}, g.now = Date.now || function () {
              return +new Date();
            };
          }).call(this, e(2));
        }, function (t, n, e) {
          "use strict";

          e.r(n), e.d(n, "linear", function () {
            return r;
          }), e.d(n, "easeInQuad", function () {
            return i;
          }), e.d(n, "easeOutQuad", function () {
            return u;
          }), e.d(n, "easeInOutQuad", function () {
            return o;
          }), e.d(n, "easeInCubic", function () {
            return a;
          }), e.d(n, "easeOutCubic", function () {
            return c;
          }), e.d(n, "easeInOutCubic", function () {
            return f;
          }), e.d(n, "easeInQuart", function () {
            return s;
          }), e.d(n, "easeOutQuart", function () {
            return l;
          }), e.d(n, "easeInOutQuart", function () {
            return h;
          }), e.d(n, "easeInQuint", function () {
            return p;
          }), e.d(n, "easeOutQuint", function () {
            return d;
          }), e.d(n, "easeInOutQuint", function () {
            return v;
          }), e.d(n, "easeInSine", function () {
            return y;
          }), e.d(n, "easeOutSine", function () {
            return _;
          }), e.d(n, "easeInOutSine", function () {
            return m;
          }), e.d(n, "easeInExpo", function () {
            return g;
          }), e.d(n, "easeOutExpo", function () {
            return w;
          }), e.d(n, "easeInOutExpo", function () {
            return b;
          }), e.d(n, "easeInCirc", function () {
            return S;
          }), e.d(n, "easeOutCirc", function () {
            return O;
          }), e.d(n, "easeInOutCirc", function () {
            return M;
          }), e.d(n, "easeOutBounce", function () {
            return k;
          }), e.d(n, "easeInBack", function () {
            return j;
          }), e.d(n, "easeOutBack", function () {
            return P;
          }), e.d(n, "easeInOutBack", function () {
            return x;
          }), e.d(n, "elastic", function () {
            return T;
          }), e.d(n, "swingFromTo", function () {
            return F;
          }), e.d(n, "swingFrom", function () {
            return A;
          }), e.d(n, "swingTo", function () {
            return E;
          }), e.d(n, "bounce", function () {
            return I;
          }), e.d(n, "bouncePast", function () {
            return C;
          }), e.d(n, "easeFromTo", function () {
            return q;
          }), e.d(n, "easeFrom", function () {
            return Q;
          }), e.d(n, "easeTo", function () {
            return D;
          });
          /*!
           * All equations are adapted from Thomas Fuchs'
           * [Scripty2](https://github.com/madrobby/scripty2/blob/master/src/effects/transitions/penner.js).
           *
           * Based on Easing Equations (c) 2003 [Robert
           * Penner](http://www.robertpenner.com/), all rights reserved. This work is
           * [subject to terms](http://www.robertpenner.com/easing_terms_of_use.html).
           */

          /*!
           *  TERMS OF USE - EASING EQUATIONS
           *  Open source under the BSD License.
           *  Easing Equations (c) 2003 Robert Penner, all rights reserved.
           */

          var r = function (t) {
            return t;
          },
              i = function (t) {
            return Math.pow(t, 2);
          },
              u = function (t) {
            return -(Math.pow(t - 1, 2) - 1);
          },
              o = function (t) {
            return (t /= .5) < 1 ? .5 * Math.pow(t, 2) : -.5 * ((t -= 2) * t - 2);
          },
              a = function (t) {
            return Math.pow(t, 3);
          },
              c = function (t) {
            return Math.pow(t - 1, 3) + 1;
          },
              f = function (t) {
            return (t /= .5) < 1 ? .5 * Math.pow(t, 3) : .5 * (Math.pow(t - 2, 3) + 2);
          },
              s = function (t) {
            return Math.pow(t, 4);
          },
              l = function (t) {
            return -(Math.pow(t - 1, 4) - 1);
          },
              h = function (t) {
            return (t /= .5) < 1 ? .5 * Math.pow(t, 4) : -.5 * ((t -= 2) * Math.pow(t, 3) - 2);
          },
              p = function (t) {
            return Math.pow(t, 5);
          },
              d = function (t) {
            return Math.pow(t - 1, 5) + 1;
          },
              v = function (t) {
            return (t /= .5) < 1 ? .5 * Math.pow(t, 5) : .5 * (Math.pow(t - 2, 5) + 2);
          },
              y = function (t) {
            return 1 - Math.cos(t * (Math.PI / 2));
          },
              _ = function (t) {
            return Math.sin(t * (Math.PI / 2));
          },
              m = function (t) {
            return -.5 * (Math.cos(Math.PI * t) - 1);
          },
              g = function (t) {
            return 0 === t ? 0 : Math.pow(2, 10 * (t - 1));
          },
              w = function (t) {
            return 1 === t ? 1 : 1 - Math.pow(2, -10 * t);
          },
              b = function (t) {
            return 0 === t ? 0 : 1 === t ? 1 : (t /= .5) < 1 ? .5 * Math.pow(2, 10 * (t - 1)) : .5 * (2 - Math.pow(2, -10 * --t));
          },
              S = function (t) {
            return -(Math.sqrt(1 - t * t) - 1);
          },
              O = function (t) {
            return Math.sqrt(1 - Math.pow(t - 1, 2));
          },
              M = function (t) {
            return (t /= .5) < 1 ? -.5 * (Math.sqrt(1 - t * t) - 1) : .5 * (Math.sqrt(1 - (t -= 2) * t) + 1);
          },
              k = function (t) {
            return t < 1 / 2.75 ? 7.5625 * t * t : t < 2 / 2.75 ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : t < 2.5 / 2.75 ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375;
          },
              j = function (t) {
            var n = 1.70158;
            return t * t * ((n + 1) * t - n);
          },
              P = function (t) {
            var n = 1.70158;
            return (t -= 1) * t * ((n + 1) * t + n) + 1;
          },
              x = function (t) {
            var n = 1.70158;
            return (t /= .5) < 1 ? t * t * ((1 + (n *= 1.525)) * t - n) * .5 : .5 * ((t -= 2) * t * ((1 + (n *= 1.525)) * t + n) + 2);
          },
              T = function (t) {
            return -1 * Math.pow(4, -8 * t) * Math.sin((6 * t - 1) * (2 * Math.PI) / 2) + 1;
          },
              F = function (t) {
            var n = 1.70158;
            return (t /= .5) < 1 ? t * t * ((1 + (n *= 1.525)) * t - n) * .5 : .5 * ((t -= 2) * t * ((1 + (n *= 1.525)) * t + n) + 2);
          },
              A = function (t) {
            var n = 1.70158;
            return t * t * ((n + 1) * t - n);
          },
              E = function (t) {
            var n = 1.70158;
            return (t -= 1) * t * ((n + 1) * t + n) + 1;
          },
              I = function (t) {
            return t < 1 / 2.75 ? 7.5625 * t * t : t < 2 / 2.75 ? 7.5625 * (t -= 1.5 / 2.75) * t + .75 : t < 2.5 / 2.75 ? 7.5625 * (t -= 2.25 / 2.75) * t + .9375 : 7.5625 * (t -= 2.625 / 2.75) * t + .984375;
          },
              C = function (t) {
            return t < 1 / 2.75 ? 7.5625 * t * t : t < 2 / 2.75 ? 2 - (7.5625 * (t -= 1.5 / 2.75) * t + .75) : t < 2.5 / 2.75 ? 2 - (7.5625 * (t -= 2.25 / 2.75) * t + .9375) : 2 - (7.5625 * (t -= 2.625 / 2.75) * t + .984375);
          },
              q = function (t) {
            return (t /= .5) < 1 ? .5 * Math.pow(t, 4) : -.5 * ((t -= 2) * Math.pow(t, 3) - 2);
          },
              Q = function (t) {
            return Math.pow(t, 4);
          },
              D = function (t) {
            return Math.pow(t, .25);
          };
        }, function (t, n) {
          var e;

          e = function () {
            return this;
          }();

          try {
            e = e || new Function("return this")();
          } catch (t) {
            "object" == typeof window && (e = window);
          }

          t.exports = e;
        }, function (t, n, e) {
          "use strict";

          e.r(n);
          var r = {};
          e.r(r), e.d(r, "doesApply", function () {
            return x;
          }), e.d(r, "tweenCreated", function () {
            return T;
          }), e.d(r, "beforeTween", function () {
            return F;
          }), e.d(r, "afterTween", function () {
            return A;
          });

          var i,
              u,
              o = e(0),
              a = /(\d|-|\.)/,
              c = /([^\-0-9.]+)/g,
              f = /[0-9.-]+/g,
              s = (i = f.source, u = /,\s*/.source, new RegExp("rgb\\(".concat(i).concat(u).concat(i).concat(u).concat(i, "\\)"), "g")),
              l = /^.*\(/,
              h = /#([0-9]|[a-f]){3,6}/gi,
              p = function (t, n) {
            return t.map(function (t, e) {
              return "_".concat(n, "_").concat(e);
            });
          };

          function d(t) {
            return parseInt(t, 16);
          }

          var v = function (t) {
            return "rgb(".concat((n = t, 3 === (n = n.replace(/#/, "")).length && (n = (n = n.split(""))[0] + n[0] + n[1] + n[1] + n[2] + n[2]), [d(n.substr(0, 2)), d(n.substr(2, 2)), d(n.substr(4, 2))]).join(","), ")");
            var n;
          },
              y = function (t, n, e) {
            var r = n.match(t),
                i = n.replace(t, "VAL");
            return r && r.forEach(function (t) {
              return i = i.replace("VAL", e(t));
            }), i;
          },
              _ = function (t) {
            for (var n in t) {
              var e = t[n];
              "string" == typeof e && e.match(h) && (t[n] = y(h, e, v));
            }
          },
              m = function (t) {
            var n = t.match(f).map(Math.floor),
                e = t.match(l)[0];
            return "".concat(e).concat(n.join(","), ")");
          },
              g = function (t) {
            return t.match(f);
          },
              w = function (t) {
            var n,
                e,
                r = {};

            for (var i in t) {
              var u = t[i];
              "string" == typeof u && (r[i] = {
                formatString: (n = u, e = void 0, e = n.match(c), e ? (1 === e.length || n.charAt(0).match(a)) && e.unshift("") : e = ["", ""], e.join("VAL")),
                chunkNames: p(g(u), i)
              });
            }

            return r;
          },
              b = function (t, n) {
            var e = function (e) {
              g(t[e]).forEach(function (r, i) {
                return t[n[e].chunkNames[i]] = +r;
              }), delete t[e];
            };

            for (var r in n) e(r);
          },
              S = function (t, n) {
            var e = {};
            return n.forEach(function (n) {
              e[n] = t[n], delete t[n];
            }), e;
          },
              O = function (t, n) {
            return n.map(function (n) {
              return t[n];
            });
          },
              M = function (t, n) {
            return n.forEach(function (n) {
              return t = t.replace("VAL", +n.toFixed(4));
            }), t;
          },
              k = function (t, n) {
            for (var e in n) {
              var r = n[e],
                  i = r.chunkNames,
                  u = r.formatString,
                  o = M(u, O(S(t, i), i));
              t[e] = y(s, o, m);
            }
          },
              j = function (t, n) {
            var e = function (e) {
              var r = n[e].chunkNames,
                  i = t[e];

              if ("string" == typeof i) {
                var u = i.split(" "),
                    o = u[u.length - 1];
                r.forEach(function (n, e) {
                  return t[n] = u[e] || o;
                });
              } else r.forEach(function (n) {
                return t[n] = i;
              });

              delete t[e];
            };

            for (var r in n) e(r);
          },
              P = function (t, n) {
            for (var e in n) {
              var r = n[e].chunkNames,
                  i = t[r[0]];
              t[e] = "string" == typeof i ? r.map(function (n) {
                var e = t[n];
                return delete t[n], e;
              }).join(" ") : i;
            }
          },
              x = function (t) {
            var n = t._currentState;
            return Object.keys(n).some(function (t) {
              return "string" == typeof n[t];
            });
          };

          function T(t) {
            var n = t._currentState;
            [n, t._originalState, t._targetState].forEach(_), t._tokenData = w(n);
          }

          function F(t) {
            var n = t._currentState,
                e = t._originalState,
                r = t._targetState,
                i = t._easing,
                u = t._tokenData;
            j(i, u), [n, e, r].forEach(function (t) {
              return b(t, u);
            });
          }

          function A(t) {
            var n = t._currentState,
                e = t._originalState,
                r = t._targetState,
                i = t._easing,
                u = t._tokenData;
            [n, e, r].forEach(function (t) {
              return k(t, u);
            }), P(i, u);
          }

          function E(t, n, e) {
            return n in t ? Object.defineProperty(t, n, {
              value: e,
              enumerable: !0,
              configurable: !0,
              writable: !0
            }) : t[n] = e, t;
          }

          var I = new o.a(),
              C = o.a.filters,
              q = function (t, n, e, r) {
            var i = arguments.length > 4 && void 0 !== arguments[4] ? arguments[4] : 0,
                u = function (t) {
              for (var n = 1; n < arguments.length; n++) {
                var e = null != arguments[n] ? arguments[n] : {},
                    r = Object.keys(e);
                "function" == typeof Object.getOwnPropertySymbols && (r = r.concat(Object.getOwnPropertySymbols(e).filter(function (t) {
                  return Object.getOwnPropertyDescriptor(e, t).enumerable;
                }))), r.forEach(function (n) {
                  E(t, n, e[n]);
                });
              }

              return t;
            }({}, t),
                a = Object(o.b)(t, r);

            for (var c in I._filters.length = 0, I.set({}), I._currentState = u, I._originalState = t, I._targetState = n, I._easing = a, C) C[c].doesApply(I) && I._filters.push(C[c]);

            I._applyFilter("tweenCreated"), I._applyFilter("beforeTween");
            var f = Object(o.e)(e, u, t, n, 1, i, a);
            return I._applyFilter("afterTween"), f;
          };

          function Q(t) {
            return function (t) {
              if (Array.isArray(t)) {
                for (var n = 0, e = new Array(t.length); n < t.length; n++) e[n] = t[n];

                return e;
              }
            }(t) || function (t) {
              if (Symbol.iterator in Object(t) || "[object Arguments]" === Object.prototype.toString.call(t)) return Array.from(t);
            }(t) || function () {
              throw new TypeError("Invalid attempt to spread non-iterable instance");
            }();
          }

          function D(t, n) {
            for (var e = 0; e < n.length; e++) {
              var r = n[e];
              r.enumerable = r.enumerable || !1, r.configurable = !0, "value" in r && (r.writable = !0), Object.defineProperty(t, r.key, r);
            }
          }

          function B(t, n) {
            if (!n.has(t)) throw new TypeError("attempted to get private field on non-instance");
            var e = n.get(t);
            return e.get ? e.get.call(t) : e.value;
          }

          var N = function () {
            function t() {
              !function (t, n) {
                if (!(t instanceof n)) throw new TypeError("Cannot call a class as a function");
              }(this, t), R.set(this, {
                writable: !0,
                value: []
              });

              for (var n = arguments.length, e = new Array(n), r = 0; r < n; r++) e[r] = arguments[r];

              e.forEach(this.add.bind(this));
            }

            var n, e, r;
            return n = t, (e = [{
              key: "add",
              value: function (t) {
                return B(this, R).push(t), t;
              }
            }, {
              key: "remove",
              value: function (t) {
                var n = B(this, R).indexOf(t);
                return ~n && B(this, R).splice(n, 1), t;
              }
            }, {
              key: "empty",
              value: function () {
                return this.tweenables.map(this.remove.bind(this));
              }
            }, {
              key: "isPlaying",
              value: function () {
                return B(this, R).some(function (t) {
                  return t.isPlaying();
                });
              }
            }, {
              key: "play",
              value: function () {
                return B(this, R).forEach(function (t) {
                  return t.tween();
                }), this;
              }
            }, {
              key: "pause",
              value: function () {
                return B(this, R).forEach(function (t) {
                  return t.pause();
                }), this;
              }
            }, {
              key: "resume",
              value: function () {
                return B(this, R).forEach(function (t) {
                  return t.resume();
                }), this;
              }
            }, {
              key: "stop",
              value: function (t) {
                return B(this, R).forEach(function (n) {
                  return n.stop(t);
                }), this;
              }
            }, {
              key: "tweenables",
              get: function () {
                return Q(B(this, R));
              }
            }, {
              key: "promises",
              get: function () {
                return B(this, R).map(function (t) {
                  return t._promise;
                });
              }
            }]) && D(n.prototype, e), r && D(n, r), t;
          }(),
              R = new WeakMap();

          function z(t, n, e, r, i, u) {
            var o = 0,
                a = 0,
                c = 0,
                f = 0,
                s = 0,
                l = 0,
                h = function (t) {
              return ((o * t + a) * t + c) * t;
            },
                p = function (t) {
              return t >= 0 ? t : 0 - t;
            };

            return o = 1 - (c = 3 * n) - (a = 3 * (r - n) - c), f = 1 - (l = 3 * e) - (s = 3 * (i - e) - l), function (t, n) {
              return e = function (t, n) {
                var e, r, i, u, f, s, l;

                for (i = t, s = 0; s < 8; s++) {
                  if (u = h(i) - t, p(u) < n) return i;
                  if (p(f = (3 * o * (l = i) + 2 * a) * l + c) < 1e-6) break;
                  i -= u / f;
                }

                if ((i = t) < (e = 0)) return e;
                if (i > (r = 1)) return r;

                for (; e < r;) {
                  if (u = h(i), p(u - t) < n) return i;
                  t > u ? e = i : r = i, i = .5 * (r - e) + e;
                }

                return i;
              }(t, n), ((f * e + s) * e + l) * e;
              var e;
            }(t, function (t) {
              return 1 / (200 * t);
            }(u));
          }

          var L = function (t, n, e, r, i) {
            var u = function (t, n, e, r) {
              return function (i) {
                return z(i, t, n, e, r, 1);
              };
            }(n, e, r, i);

            return u.displayName = t, u.x1 = n, u.y1 = e, u.x2 = r, u.y2 = i, o.a.formulas[t] = u;
          },
              V = function (t) {
            return delete o.a.formulas[t];
          };

          e.d(n, "processTweens", function () {
            return o.c;
          }), e.d(n, "Tweenable", function () {
            return o.a;
          }), e.d(n, "tween", function () {
            return o.d;
          }), e.d(n, "interpolate", function () {
            return q;
          }), e.d(n, "Scene", function () {
            return N;
          }), e.d(n, "setBezierFunction", function () {
            return L;
          }), e.d(n, "unsetBezierFunction", function () {
            return V;
          }), o.a.filters.token = r;
        }]);
      });
    }, {}],
    2: [function (require, module, exports) {
      // Circle shaped progress bar
      var Shape = require('./shape');

      var utils = require('./utils');

      var Circle = function Circle(container, options) {
        // Use two arcs to form a circle
        // See this answer http://stackoverflow.com/a/10477334/1446092
        this._pathTemplate = 'M 50,50 m 0,-{radius}' + ' a {radius},{radius} 0 1 1 0,{2radius}' + ' a {radius},{radius} 0 1 1 0,-{2radius}';
        this.containerAspectRatio = 1;
        Shape.apply(this, arguments);
      };

      Circle.prototype = new Shape();
      Circle.prototype.constructor = Circle;

      Circle.prototype._pathString = function _pathString(opts) {
        var widthOfWider = opts.strokeWidth;

        if (opts.trailWidth && opts.trailWidth > opts.strokeWidth) {
          widthOfWider = opts.trailWidth;
        }

        var r = 50 - widthOfWider / 2;
        return utils.render(this._pathTemplate, {
          radius: r,
          '2radius': r * 2
        });
      };

      Circle.prototype._trailString = function _trailString(opts) {
        return this._pathString(opts);
      };

      module.exports = Circle;
    }, {
      "./shape": 7,
      "./utils": 9
    }],
    3: [function (require, module, exports) {
      // Line shaped progress bar
      var Shape = require('./shape');

      var utils = require('./utils');

      var Line = function Line(container, options) {
        this._pathTemplate = 'M 0,{center} L 100,{center}';
        Shape.apply(this, arguments);
      };

      Line.prototype = new Shape();
      Line.prototype.constructor = Line;

      Line.prototype._initializeSvg = function _initializeSvg(svg, opts) {
        svg.setAttribute('viewBox', '0 0 100 ' + opts.strokeWidth);
        svg.setAttribute('preserveAspectRatio', 'none');
      };

      Line.prototype._pathString = function _pathString(opts) {
        return utils.render(this._pathTemplate, {
          center: opts.strokeWidth / 2
        });
      };

      Line.prototype._trailString = function _trailString(opts) {
        return this._pathString(opts);
      };

      module.exports = Line;
    }, {
      "./shape": 7,
      "./utils": 9
    }],
    4: [function (require, module, exports) {
      module.exports = {
        // Higher level API, different shaped progress bars
        Line: require('./line'),
        Circle: require('./circle'),
        SemiCircle: require('./semicircle'),
        Square: require('./square'),
        // Lower level API to use any SVG path
        Path: require('./path'),
        // Base-class for creating new custom shapes
        // to be in line with the API of built-in shapes
        // Undocumented.
        Shape: require('./shape'),
        // Internal utils, undocumented.
        utils: require('./utils')
      };
    }, {
      "./circle": 2,
      "./line": 3,
      "./path": 5,
      "./semicircle": 6,
      "./shape": 7,
      "./square": 8,
      "./utils": 9
    }],
    5: [function (require, module, exports) {
      // Lower level API to animate any kind of svg path
      var shifty = require('shifty');

      var utils = require('./utils');

      var Tweenable = shifty.Tweenable;
      var EASING_ALIASES = {
        easeIn: 'easeInCubic',
        easeOut: 'easeOutCubic',
        easeInOut: 'easeInOutCubic'
      };

      var Path = function Path(path, opts) {
        // Throw a better error if not initialized with `new` keyword
        if (!(this instanceof Path)) {
          throw new Error('Constructor was called without new keyword');
        } // Default parameters for animation


        opts = utils.extend({
          delay: 0,
          duration: 800,
          easing: 'linear',
          from: {},
          to: {},
          step: function () {}
        }, opts);
        var element;

        if (utils.isString(path)) {
          element = document.querySelector(path);
        } else {
          element = path;
        } // Reveal .path as public attribute


        this.path = element;
        this._opts = opts;
        this._tweenable = null; // Set up the starting positions

        var length = this.path.getTotalLength();
        this.path.style.strokeDasharray = length + ' ' + length;
        this.set(0);
      };

      Path.prototype.value = function value() {
        var offset = this._getComputedDashOffset();

        var length = this.path.getTotalLength();
        var progress = 1 - offset / length; // Round number to prevent returning very small number like 1e-30, which
        // is practically 0

        return parseFloat(progress.toFixed(6), 10);
      };

      Path.prototype.set = function set(progress) {
        this.stop();
        this.path.style.strokeDashoffset = this._progressToOffset(progress);
        var step = this._opts.step;

        if (utils.isFunction(step)) {
          var easing = this._easing(this._opts.easing);

          var values = this._calculateTo(progress, easing);

          var reference = this._opts.shape || this;
          step(values, reference, this._opts.attachment);
        }
      };

      Path.prototype.stop = function stop() {
        this._stopTween();

        this.path.style.strokeDashoffset = this._getComputedDashOffset();
      }; // Method introduced here:
      // http://jakearchibald.com/2013/animated-line-drawing-svg/


      Path.prototype.animate = function animate(progress, opts, cb) {
        opts = opts || {};

        if (utils.isFunction(opts)) {
          cb = opts;
          opts = {};
        }

        var passedOpts = utils.extend({}, opts); // Copy default opts to new object so defaults are not modified

        var defaultOpts = utils.extend({}, this._opts);
        opts = utils.extend(defaultOpts, opts);

        var shiftyEasing = this._easing(opts.easing);

        var values = this._resolveFromAndTo(progress, shiftyEasing, passedOpts);

        this.stop(); // Trigger a layout so styles are calculated & the browser
        // picks up the starting position before animating

        this.path.getBoundingClientRect();

        var offset = this._getComputedDashOffset();

        var newOffset = this._progressToOffset(progress);

        var self = this;
        this._tweenable = new Tweenable();

        this._tweenable.tween({
          from: utils.extend({
            offset: offset
          }, values.from),
          to: utils.extend({
            offset: newOffset
          }, values.to),
          duration: opts.duration,
          delay: opts.delay,
          easing: shiftyEasing,
          step: function (state) {
            self.path.style.strokeDashoffset = state.offset;
            var reference = opts.shape || self;
            opts.step(state, reference, opts.attachment);
          }
        }).then(function (state) {
          if (utils.isFunction(cb)) {
            cb();
          }
        });
      };

      Path.prototype._getComputedDashOffset = function _getComputedDashOffset() {
        var computedStyle = window.getComputedStyle(this.path, null);
        return parseFloat(computedStyle.getPropertyValue('stroke-dashoffset'), 10);
      };

      Path.prototype._progressToOffset = function _progressToOffset(progress) {
        var length = this.path.getTotalLength();
        return length - progress * length;
      }; // Resolves from and to values for animation.


      Path.prototype._resolveFromAndTo = function _resolveFromAndTo(progress, easing, opts) {
        if (opts.from && opts.to) {
          return {
            from: opts.from,
            to: opts.to
          };
        }

        return {
          from: this._calculateFrom(easing),
          to: this._calculateTo(progress, easing)
        };
      }; // Calculate `from` values from options passed at initialization


      Path.prototype._calculateFrom = function _calculateFrom(easing) {
        return shifty.interpolate(this._opts.from, this._opts.to, this.value(), easing);
      }; // Calculate `to` values from options passed at initialization


      Path.prototype._calculateTo = function _calculateTo(progress, easing) {
        return shifty.interpolate(this._opts.from, this._opts.to, progress, easing);
      };

      Path.prototype._stopTween = function _stopTween() {
        if (this._tweenable !== null) {
          this._tweenable.stop();

          this._tweenable = null;
        }
      };

      Path.prototype._easing = function _easing(easing) {
        if (EASING_ALIASES.hasOwnProperty(easing)) {
          return EASING_ALIASES[easing];
        }

        return easing;
      };

      module.exports = Path;
    }, {
      "./utils": 9,
      "shifty": 1
    }],
    6: [function (require, module, exports) {
      // Semi-SemiCircle shaped progress bar
      var Shape = require('./shape');

      var Circle = require('./circle');

      var utils = require('./utils');

      var SemiCircle = function SemiCircle(container, options) {
        // Use one arc to form a SemiCircle
        // See this answer http://stackoverflow.com/a/10477334/1446092
        this._pathTemplate = 'M 50,50 m -{radius},0' + ' a {radius},{radius} 0 1 1 {2radius},0';
        this.containerAspectRatio = 2;
        Shape.apply(this, arguments);
      };

      SemiCircle.prototype = new Shape();
      SemiCircle.prototype.constructor = SemiCircle;

      SemiCircle.prototype._initializeSvg = function _initializeSvg(svg, opts) {
        svg.setAttribute('viewBox', '0 0 100 50');
      };

      SemiCircle.prototype._initializeTextContainer = function _initializeTextContainer(opts, container, textContainer) {
        if (opts.text.style) {
          // Reset top style
          textContainer.style.top = 'auto';
          textContainer.style.bottom = '0';

          if (opts.text.alignToBottom) {
            utils.setStyle(textContainer, 'transform', 'translate(-50%, 0)');
          } else {
            utils.setStyle(textContainer, 'transform', 'translate(-50%, 50%)');
          }
        }
      }; // Share functionality with Circle, just have different path


      SemiCircle.prototype._pathString = Circle.prototype._pathString;
      SemiCircle.prototype._trailString = Circle.prototype._trailString;
      module.exports = SemiCircle;
    }, {
      "./circle": 2,
      "./shape": 7,
      "./utils": 9
    }],
    7: [function (require, module, exports) {
      // Base object for different progress bar shapes
      var Path = require('./path');

      var utils = require('./utils');

      var DESTROYED_ERROR = 'Object is destroyed';

      var Shape = function Shape(container, opts) {
        // Throw a better error if progress bars are not initialized with `new`
        // keyword
        if (!(this instanceof Shape)) {
          throw new Error('Constructor was called without new keyword');
        } // Prevent calling constructor without parameters so inheritance
        // works correctly. To understand, this is how Shape is inherited:
        //
        //   Line.prototype = new Shape();
        //
        // We just want to set the prototype for Line.


        if (arguments.length === 0) {
          return;
        } // Default parameters for progress bar creation


        this._opts = utils.extend({
          color: '#555',
          strokeWidth: 1.0,
          trailColor: null,
          trailWidth: null,
          fill: null,
          text: {
            style: {
              color: null,
              position: 'absolute',
              left: '50%',
              top: '50%',
              padding: 0,
              margin: 0,
              transform: {
                prefix: true,
                value: 'translate(-50%, -50%)'
              }
            },
            autoStyleContainer: true,
            alignToBottom: true,
            value: null,
            className: 'progressbar-text'
          },
          svgStyle: {
            display: 'block',
            width: '100%'
          },
          warnings: false
        }, opts, true); // Use recursive extend
        // If user specifies e.g. svgStyle or text style, the whole object
        // should replace the defaults to make working with styles easier

        if (utils.isObject(opts) && opts.svgStyle !== undefined) {
          this._opts.svgStyle = opts.svgStyle;
        }

        if (utils.isObject(opts) && utils.isObject(opts.text) && opts.text.style !== undefined) {
          this._opts.text.style = opts.text.style;
        }

        var svgView = this._createSvgView(this._opts);

        var element;

        if (utils.isString(container)) {
          element = document.querySelector(container);
        } else {
          element = container;
        }

        if (!element) {
          throw new Error('Container does not exist: ' + container);
        }

        this._container = element;

        this._container.appendChild(svgView.svg);

        if (this._opts.warnings) {
          this._warnContainerAspectRatio(this._container);
        }

        if (this._opts.svgStyle) {
          utils.setStyles(svgView.svg, this._opts.svgStyle);
        } // Expose public attributes before Path initialization


        this.svg = svgView.svg;
        this.path = svgView.path;
        this.trail = svgView.trail;
        this.text = null;
        var newOpts = utils.extend({
          attachment: undefined,
          shape: this
        }, this._opts);
        this._progressPath = new Path(svgView.path, newOpts);

        if (utils.isObject(this._opts.text) && this._opts.text.value !== null) {
          this.setText(this._opts.text.value);
        }
      };

      Shape.prototype.animate = function animate(progress, opts, cb) {
        if (this._progressPath === null) {
          throw new Error(DESTROYED_ERROR);
        }

        this._progressPath.animate(progress, opts, cb);
      };

      Shape.prototype.stop = function stop() {
        if (this._progressPath === null) {
          throw new Error(DESTROYED_ERROR);
        } // Don't crash if stop is called inside step function


        if (this._progressPath === undefined) {
          return;
        }

        this._progressPath.stop();
      };

      Shape.prototype.pause = function pause() {
        if (this._progressPath === null) {
          throw new Error(DESTROYED_ERROR);
        }

        if (this._progressPath === undefined) {
          return;
        }

        if (!this._progressPath._tweenable) {
          // It seems that we can't pause this
          return;
        }

        this._progressPath._tweenable.pause();
      };

      Shape.prototype.resume = function resume() {
        if (this._progressPath === null) {
          throw new Error(DESTROYED_ERROR);
        }

        if (this._progressPath === undefined) {
          return;
        }

        if (!this._progressPath._tweenable) {
          // It seems that we can't resume this
          return;
        }

        this._progressPath._tweenable.resume();
      };

      Shape.prototype.destroy = function destroy() {
        if (this._progressPath === null) {
          throw new Error(DESTROYED_ERROR);
        }

        this.stop();
        this.svg.parentNode.removeChild(this.svg);
        this.svg = null;
        this.path = null;
        this.trail = null;
        this._progressPath = null;

        if (this.text !== null) {
          this.text.parentNode.removeChild(this.text);
          this.text = null;
        }
      };

      Shape.prototype.set = function set(progress) {
        if (this._progressPath === null) {
          throw new Error(DESTROYED_ERROR);
        }

        this._progressPath.set(progress);
      };

      Shape.prototype.value = function value() {
        if (this._progressPath === null) {
          throw new Error(DESTROYED_ERROR);
        }

        if (this._progressPath === undefined) {
          return 0;
        }

        return this._progressPath.value();
      };

      Shape.prototype.setText = function setText(newText) {
        if (this._progressPath === null) {
          throw new Error(DESTROYED_ERROR);
        }

        if (this.text === null) {
          // Create new text node
          this.text = this._createTextContainer(this._opts, this._container);

          this._container.appendChild(this.text);
        } // Remove previous text and add new


        if (utils.isObject(newText)) {
          utils.removeChildren(this.text);
          this.text.appendChild(newText);
        } else {
          this.text.innerHTML = newText;
        }
      };

      Shape.prototype._createSvgView = function _createSvgView(opts) {
        var svg = document.createElementNS('http://www.w3.org/2000/svg', 'svg');

        this._initializeSvg(svg, opts);

        var trailPath = null; // Each option listed in the if condition are 'triggers' for creating
        // the trail path

        if (opts.trailColor || opts.trailWidth) {
          trailPath = this._createTrail(opts);
          svg.appendChild(trailPath);
        }

        var path = this._createPath(opts);

        svg.appendChild(path);
        return {
          svg: svg,
          path: path,
          trail: trailPath
        };
      };

      Shape.prototype._initializeSvg = function _initializeSvg(svg, opts) {
        svg.setAttribute('viewBox', '0 0 100 100');
      };

      Shape.prototype._createPath = function _createPath(opts) {
        var pathString = this._pathString(opts);

        return this._createPathElement(pathString, opts);
      };

      Shape.prototype._createTrail = function _createTrail(opts) {
        // Create path string with original passed options
        var pathString = this._trailString(opts); // Prevent modifying original


        var newOpts = utils.extend({}, opts); // Defaults for parameters which modify trail path

        if (!newOpts.trailColor) {
          newOpts.trailColor = '#eee';
        }

        if (!newOpts.trailWidth) {
          newOpts.trailWidth = newOpts.strokeWidth;
        }

        newOpts.color = newOpts.trailColor;
        newOpts.strokeWidth = newOpts.trailWidth; // When trail path is set, fill must be set for it instead of the
        // actual path to prevent trail stroke from clipping

        newOpts.fill = null;
        return this._createPathElement(pathString, newOpts);
      };

      Shape.prototype._createPathElement = function _createPathElement(pathString, opts) {
        var path = document.createElementNS('http://www.w3.org/2000/svg', 'path');
        path.setAttribute('d', pathString);
        path.setAttribute('stroke', opts.color);
        path.setAttribute('stroke-width', opts.strokeWidth);

        if (opts.fill) {
          path.setAttribute('fill', opts.fill);
        } else {
          path.setAttribute('fill-opacity', '0');
        }

        return path;
      };

      Shape.prototype._createTextContainer = function _createTextContainer(opts, container) {
        var textContainer = document.createElement('div');
        textContainer.className = opts.text.className;
        var textStyle = opts.text.style;

        if (textStyle) {
          if (opts.text.autoStyleContainer) {
            container.style.position = 'relative';
          }

          utils.setStyles(textContainer, textStyle); // Default text color to progress bar's color

          if (!textStyle.color) {
            textContainer.style.color = opts.color;
          }
        }

        this._initializeTextContainer(opts, container, textContainer);

        return textContainer;
      }; // Give custom shapes possibility to modify text element


      Shape.prototype._initializeTextContainer = function (opts, container, element) {// By default, no-op
        // Custom shapes should respect API options, such as text.style
      };

      Shape.prototype._pathString = function _pathString(opts) {
        throw new Error('Override this function for each progress bar');
      };

      Shape.prototype._trailString = function _trailString(opts) {
        throw new Error('Override this function for each progress bar');
      };

      Shape.prototype._warnContainerAspectRatio = function _warnContainerAspectRatio(container) {
        if (!this.containerAspectRatio) {
          return;
        }

        var computedStyle = window.getComputedStyle(container, null);
        var width = parseFloat(computedStyle.getPropertyValue('width'), 10);
        var height = parseFloat(computedStyle.getPropertyValue('height'), 10);

        if (!utils.floatEquals(this.containerAspectRatio, width / height)) {
          console.warn('Incorrect aspect ratio of container', '#' + container.id, 'detected:', computedStyle.getPropertyValue('width') + '(width)', '/', computedStyle.getPropertyValue('height') + '(height)', '=', width / height);
          console.warn('Aspect ratio of should be', this.containerAspectRatio);
        }
      };

      module.exports = Shape;
    }, {
      "./path": 5,
      "./utils": 9
    }],
    8: [function (require, module, exports) {
      // Square shaped progress bar
      // Note: Square is not core part of API anymore. It's left here
      //       for reference. square is not included to the progressbar
      //       build anymore
      var Shape = require('./shape');

      var utils = require('./utils');

      var Square = function Square(container, options) {
        this._pathTemplate = 'M 0,{halfOfStrokeWidth}' + ' L {width},{halfOfStrokeWidth}' + ' L {width},{width}' + ' L {halfOfStrokeWidth},{width}' + ' L {halfOfStrokeWidth},{strokeWidth}';
        this._trailTemplate = 'M {startMargin},{halfOfStrokeWidth}' + ' L {width},{halfOfStrokeWidth}' + ' L {width},{width}' + ' L {halfOfStrokeWidth},{width}' + ' L {halfOfStrokeWidth},{halfOfStrokeWidth}';
        Shape.apply(this, arguments);
      };

      Square.prototype = new Shape();
      Square.prototype.constructor = Square;

      Square.prototype._pathString = function _pathString(opts) {
        var w = 100 - opts.strokeWidth / 2;
        return utils.render(this._pathTemplate, {
          width: w,
          strokeWidth: opts.strokeWidth,
          halfOfStrokeWidth: opts.strokeWidth / 2
        });
      };

      Square.prototype._trailString = function _trailString(opts) {
        var w = 100 - opts.strokeWidth / 2;
        return utils.render(this._trailTemplate, {
          width: w,
          strokeWidth: opts.strokeWidth,
          halfOfStrokeWidth: opts.strokeWidth / 2,
          startMargin: opts.strokeWidth / 2 - opts.trailWidth / 2
        });
      };

      module.exports = Square;
    }, {
      "./shape": 7,
      "./utils": 9
    }],
    9: [function (require, module, exports) {
      // Utility functions
      var PREFIXES = 'Webkit Moz O ms'.split(' ');
      var FLOAT_COMPARISON_EPSILON = 0.001; // Copy all attributes from source object to destination object.
      // destination object is mutated.

      function extend(destination, source, recursive) {
        destination = destination || {};
        source = source || {};
        recursive = recursive || false;

        for (var attrName in source) {
          if (source.hasOwnProperty(attrName)) {
            var destVal = destination[attrName];
            var sourceVal = source[attrName];

            if (recursive && isObject(destVal) && isObject(sourceVal)) {
              destination[attrName] = extend(destVal, sourceVal, recursive);
            } else {
              destination[attrName] = sourceVal;
            }
          }
        }

        return destination;
      } // Renders templates with given variables. Variables must be surrounded with
      // braces without any spaces, e.g. {variable}
      // All instances of variable placeholders will be replaced with given content
      // Example:
      // render('Hello, {message}!', {message: 'world'})


      function render(template, vars) {
        var rendered = template;

        for (var key in vars) {
          if (vars.hasOwnProperty(key)) {
            var val = vars[key];
            var regExpString = '\\{' + key + '\\}';
            var regExp = new RegExp(regExpString, 'g');
            rendered = rendered.replace(regExp, val);
          }
        }

        return rendered;
      }

      function setStyle(element, style, value) {
        var elStyle = element.style; // cache for performance

        for (var i = 0; i < PREFIXES.length; ++i) {
          var prefix = PREFIXES[i];
          elStyle[prefix + capitalize(style)] = value;
        }

        elStyle[style] = value;
      }

      function setStyles(element, styles) {
        forEachObject(styles, function (styleValue, styleName) {
          // Allow disabling some individual styles by setting them
          // to null or undefined
          if (styleValue === null || styleValue === undefined) {
            return;
          } // If style's value is {prefix: true, value: '50%'},
          // Set also browser prefixed styles


          if (isObject(styleValue) && styleValue.prefix === true) {
            setStyle(element, styleName, styleValue.value);
          } else {
            element.style[styleName] = styleValue;
          }
        });
      }

      function capitalize(text) {
        return text.charAt(0).toUpperCase() + text.slice(1);
      }

      function isString(obj) {
        return typeof obj === 'string' || obj instanceof String;
      }

      function isFunction(obj) {
        return typeof obj === 'function';
      }

      function isArray(obj) {
        return Object.prototype.toString.call(obj) === '[object Array]';
      } // Returns true if `obj` is object as in {a: 1, b: 2}, not if it's function or
      // array


      function isObject(obj) {
        if (isArray(obj)) {
          return false;
        }

        var type = typeof obj;
        return type === 'object' && !!obj;
      }

      function forEachObject(object, callback) {
        for (var key in object) {
          if (object.hasOwnProperty(key)) {
            var val = object[key];
            callback(val, key);
          }
        }
      }

      function floatEquals(a, b) {
        return Math.abs(a - b) < FLOAT_COMPARISON_EPSILON;
      } // https://coderwall.com/p/nygghw/don-t-use-innerhtml-to-empty-dom-elements


      function removeChildren(el) {
        while (el.firstChild) {
          el.removeChild(el.firstChild);
        }
      }

      module.exports = {
        extend: extend,
        render: render,
        setStyle: setStyle,
        setStyles: setStyles,
        capitalize: capitalize,
        isString: isString,
        isFunction: isFunction,
        isObject: isObject,
        forEachObject: forEachObject,
        floatEquals: floatEquals,
        removeChildren: removeChildren
      };
    }, {}]
  }, {}, [4])(4);
});

/***/ }),

/***/ "./node_modules/search-row-hints/dist/script.js":
/*!******************************************************!*\
  !*** ./node_modules/search-row-hints/dist/script.js ***!
  \******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;

function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  return Constructor;
}

function _classPrivateFieldLooseBase(receiver, privateKey) {
  if (!Object.prototype.hasOwnProperty.call(receiver, privateKey)) {
    throw new TypeError("attempted to use private field on non-instance");
  }

  return receiver;
}

var id = 0;

function _classPrivateFieldLooseKey(name) {
  return "__private_" + id++ + "_" + name;
}

function _typeof(obj) {
  "@babel/helpers - typeof";

  if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") {
    _typeof = function _typeof(obj) {
      return typeof obj;
    };
  } else {
    _typeof = function _typeof(obj) {
      return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
  }

  return _typeof(obj);
}

(function (factory) {
  if (true) {
    // AMD. Register as an anonymous module.
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
})(function () {
  var _createDom = _classPrivateFieldLooseKey("createDom");

  var _setup = _classPrivateFieldLooseKey("setup");

  var _inputEventHandler = _classPrivateFieldLooseKey("inputEventHandler");

  var _toggleFocusClass = _classPrivateFieldLooseKey("toggleFocusClass");

  var _toggleClearButton = _classPrivateFieldLooseKey("toggleClearButton");

  var SearchBox = /*#__PURE__*/function () {
    /* Example options
    {
        wrapperClass:'search',     // String
        $wrapper: document.getElementsByClassName(this.formClass)[0],       // node element
        mainClass:'search-box',     // String
        buttonText:'Найти',     // String
        placeholderText:'Поиск',     // String
        completeMinSymbols:3,     // String
        showHintsClass: 'search-box--open'
    }
     */
    function SearchBox(options) {
      _classCallCheck(this, SearchBox);

      Object.defineProperty(this, _toggleClearButton, {
        value: _toggleClearButton2
      });
      Object.defineProperty(this, _toggleFocusClass, {
        value: _toggleFocusClass2
      });
      Object.defineProperty(this, _inputEventHandler, {
        value: _inputEventHandler2
      });
      Object.defineProperty(this, _setup, {
        value: _setup2
      });
      Object.defineProperty(this, _createDom, {
        value: _createDom2
      });
      this.wrapperClass = options && options.wrapperClass ? options.wrapperClass : 'search';
      this.$wrapper = options && options.$wrapper ? options.$wrapper : document.getElementsByClassName(this.wrapperClass)[0];
      this.mainClass = options && options.mainClass ? options.mainClass : 'search-box';
      this.buttonText = options && options.buttonText ? options.buttonText : 'Найти';
      this.placeholderText = options && options.placeholderText ? options.placeholderText : 'Поиск';
      this.completeMinSymbols = options && options.completeMinSymbols ? options.completeMinSymbols : 3;
      this.showHintsClass = options && options.showHintsClass ? options.showHintsClass : this.mainClass + '--open';
      this.init();
    }

    _createClass(SearchBox, [{
      key: "init",
      value: function init() {
        this.$wrapper.innerHTML = _classPrivateFieldLooseBase(this, _createDom)[_createDom]();

        _classPrivateFieldLooseBase(this, _setup)[_setup]();
      }
    }, {
      key: "submitHandler",
      value: function submitHandler(event) {
        event.preventDefault();
      }
    }, {
      key: "inputHandler",
      value: function inputHandler() {
        _classPrivateFieldLooseBase(this, _toggleClearButton)[_toggleClearButton]();

        _classPrivateFieldLooseBase(this, _inputEventHandler)[_inputEventHandler]();
      }
    }, {
      key: "showHints",
      value: function showHints($hints) {
        this.$hintsWrapper.innerHTML = $hints;
        this.$box.classList.add(this.showHintsClass);
      }
    }, {
      key: "hideHints",
      value: function hideHints() {
        this.$box.classList.remove(this.showHintsClass);
      }
    }, {
      key: "clearHints",
      value: function clearHints() {
        this.$hintsWrapper.innerHTML = '';
      }
    }]);

    return SearchBox;
  }();

  function _createDom2() {
    return "\n                <form action class=\"".concat(this.mainClass, "\" role=\"search\"> \n                    <div class=\"").concat(this.mainClass, "__input-wrapper\" tabindex=\"1\">\n                        <input type=\"search\" class=\"").concat(this.mainClass, "__input\" placeholder=\"").concat(this.placeholderText, "\">\n                        <div class=\"").concat(this.mainClass, "__clear-button\"></div>\n                        <div class=\"").concat(this.mainClass, "__hints\"></div>\n                    </div>\n                    <div class=\"").concat(this.mainClass, "__back-button\"></div>\n                    <button type=\"submit\"  class=\"").concat(this.mainClass, "__button\">").concat(this.buttonText, "</button>\n                </form>            \n            ");
  }

  function _setup2() {
    var _this = this;

    this.$box = this.$wrapper.getElementsByClassName(this.mainClass)[0];
    this.$input = this.$wrapper.getElementsByClassName(this.mainClass + '__input')[0];
    this.$inputWrapper = this.$wrapper.getElementsByClassName(this.mainClass + '__input-wrapper')[0];
    this.$clearButton = this.$wrapper.getElementsByClassName(this.mainClass + '__clear-button')[0];
    this.$hintsWrapper = this.$wrapper.getElementsByClassName(this.mainClass + '__hints')[0];
    this.submitHandler = this.submitHandler.bind(this);
    this.inputHandler = this.inputHandler.bind(this);
    this.$box.addEventListener('submit', this.submitHandler);
    this.$input.addEventListener('input', this.inputHandler);
    this.$clearButton.addEventListener('click', function () {
      _this.$input.value = '';

      _classPrivateFieldLooseBase(_this, _toggleClearButton)[_toggleClearButton]();

      _this.$input.focus();
    });
    this.$inputWrapper.addEventListener('focusin', function () {
      _classPrivateFieldLooseBase(_this, _toggleFocusClass)[_toggleFocusClass](true);
    });
    this.$inputWrapper.addEventListener('focusout', function () {
      _classPrivateFieldLooseBase(_this, _toggleFocusClass)[_toggleFocusClass](false);
    });
  }

  function _inputEventHandler2() {
    this.completeEvent = new CustomEvent('completeHint', {
      detail: {
        value: this.$input.value
      }
    });
    var length = this.$input.value.length;

    if (length >= this.completeMinSymbols) {
      this.$wrapper.dispatchEvent(this.completeEvent);
    } else {
      this.hideHints();
      this.clearHints();
    }
  }

  function _toggleFocusClass2(state) {
    var _this2 = this;

    var onFocusClass = this.mainClass + '--on-focus';

    if (state) {
      this.$box.classList.add(onFocusClass);
    } else {
      this.$box.classList.remove(onFocusClass);
      setTimeout(function () {
        _this2.hideHints();
      }, 100);
    }
  }

  function _toggleClearButton2() {
    var length = this.$input.value.length;
    var notEmptyClass = this.mainClass + '--not-empty';

    if (length > 0) {
      this.$box.classList.add(notEmptyClass);
    } else {
      this.$box.classList.remove(notEmptyClass);
    }
  }

  return SearchBox;
});

/***/ }),

/***/ "./node_modules/simple-custom-select/dist/script.js":
/*!**********************************************************!*\
  !*** ./node_modules/simple-custom-select/dist/script.js ***!
  \**********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
var __WEBPACK_AMD_DEFINE_FACTORY__, __WEBPACK_AMD_DEFINE_ARRAY__, __WEBPACK_AMD_DEFINE_RESULT__;

function _createForOfIteratorHelper(o) {
  if (typeof Symbol === "undefined" || o[Symbol.iterator] == null) {
    if (Array.isArray(o) || (o = _unsupportedIterableToArray(o))) {
      var i = 0;

      var F = function F() {};

      return {
        s: F,
        n: function n() {
          if (i >= o.length) return {
            done: true
          };
          return {
            done: false,
            value: o[i++]
          };
        },
        e: function e(_e) {
          throw _e;
        },
        f: F
      };
    }

    throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.");
  }

  var it,
      normalCompletion = true,
      didErr = false,
      err;
  return {
    s: function s() {
      it = o[Symbol.iterator]();
    },
    n: function n() {
      var step = it.next();
      normalCompletion = step.done;
      return step;
    },
    e: function e(_e2) {
      didErr = true;
      err = _e2;
    },
    f: function f() {
      try {
        if (!normalCompletion && it.return != null) it.return();
      } finally {
        if (didErr) throw err;
      }
    }
  };
}

function _unsupportedIterableToArray(o, minLen) {
  if (!o) return;
  if (typeof o === "string") return _arrayLikeToArray(o, minLen);
  var n = Object.prototype.toString.call(o).slice(8, -1);
  if (n === "Object" && o.constructor) n = o.constructor.name;
  if (n === "Map" || n === "Set") return Array.from(o);
  if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen);
}

function _arrayLikeToArray(arr, len) {
  if (len == null || len > arr.length) len = arr.length;

  for (var i = 0, arr2 = new Array(len); i < len; i++) {
    arr2[i] = arr[i];
  }

  return arr2;
}

function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;
    Object.defineProperty(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  return Constructor;
}

function _classPrivateFieldLooseBase(receiver, privateKey) {
  if (!Object.prototype.hasOwnProperty.call(receiver, privateKey)) {
    throw new TypeError("attempted to use private field on non-instance");
  }

  return receiver;
}

var id = 0;

function _classPrivateFieldLooseKey(name) {
  return "__private_" + id++ + "_" + name;
}

function _typeof(obj) {
  "@babel/helpers - typeof";

  if (typeof Symbol === "function" && typeof Symbol.iterator === "symbol") {
    _typeof = function _typeof(obj) {
      return typeof obj;
    };
  } else {
    _typeof = function _typeof(obj) {
      return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj;
    };
  }

  return _typeof(obj);
}

(function (factory) {
  if (true) {
    // AMD. Register as an anonymous module.
    !(__WEBPACK_AMD_DEFINE_ARRAY__ = [], __WEBPACK_AMD_DEFINE_FACTORY__ = (factory),
				__WEBPACK_AMD_DEFINE_RESULT__ = (typeof __WEBPACK_AMD_DEFINE_FACTORY__ === 'function' ?
				(__WEBPACK_AMD_DEFINE_FACTORY__.apply(exports, __WEBPACK_AMD_DEFINE_ARRAY__)) : __WEBPACK_AMD_DEFINE_FACTORY__),
				__WEBPACK_AMD_DEFINE_RESULT__ !== undefined && (module.exports = __WEBPACK_AMD_DEFINE_RESULT__));
  } else {}
})(function () {
  var _getSelectData = _classPrivateFieldLooseKey("getSelectData");

  var _setHtml = _classPrivateFieldLooseKey("setHtml");

  var _setup = _classPrivateFieldLooseKey("setup");

  var _setSelectHtml = _classPrivateFieldLooseKey("setSelectHtml");

  var Select = /*#__PURE__*/function () {
    /* Example options
    {
        selectClass:'select',     // String
        $select:document.getElementsByClassName(this.selectClass)[0],       // node element
        customSelectClass:'custom-select',     // String
    }
     */
    function Select(options) {
      _classCallCheck(this, Select);

      Object.defineProperty(this, _setSelectHtml, {
        value: _setSelectHtml2
      });
      Object.defineProperty(this, _setup, {
        value: _setup2
      });
      Object.defineProperty(this, _setHtml, {
        value: _setHtml2
      });
      Object.defineProperty(this, _getSelectData, {
        value: _getSelectData2
      });
      this.selectClass = options && options.selectClass ? options.selectClass : 'select';
      this.$select = options && options.$select ? options.$select : document.getElementsByClassName(this.selectClass)[0];
      this.customSelectClass = options && options.customSelectClass ? options.customSelectClass : 'custom-select';
      this.openClass = options && options.openClass ? options.openClass : this.customSelectClass + '--open';
      this.itemClass = options && options.itemClass ? options.itemClass : this.customSelectClass + '__item';
      this.selectedItemClass = options && options.selectedItemClass ? options.selectedItemClass : this.itemClass + '--selected';
      this.disabledItemClass = options && options.disabledItemClass ? options.disabledItemClass : this.itemClass + '--disabled';
      this.$customSelect = document.createElement('div');
      this.current = null;
      this.options = Array.from(this.$select.getElementsByTagName('option'));
      this.changeEvent = new Event('change');
      this.data = _classPrivateFieldLooseBase(this, _getSelectData)[_getSelectData]();
      this.init();
    }

    _createClass(Select, [{
      key: "init",
      value: function init() {
        this.$select.parentElement.appendChild(this.$customSelect);
        this.$customSelect.classList.add(this.customSelectClass);
        this.$customSelect.appendChild(this.$select);

        _classPrivateFieldLooseBase(this, _setHtml)[_setHtml]();
      }
    }, {
      key: "clickHandler",
      value: function clickHandler(event) {
        var _this = this;

        var isSelectClick = function isSelectClick(click) {
          if (click === _this.$customSelect) {
            return true;
          } else if (click.closest('.' + _this.customSelectClass) && click.closest('.' + _this.customSelectClass) === _this.$customSelect) {
            return true;
          } else {
            return false;
          }
        };

        if (isSelectClick(event.target)) {
          var type = event.target.dataset.selectType;

          if (type === 'button') {
            this.toggle();
          } else if (type === 'value') {
            if (!event.target.classList.contains(this.disabledItemClass)) {
              this.select(event.target.dataset.selectIndex);
              this.close();
            }
          }
        } else {
          this.close();
        }
      }
    }, {
      key: "changeHandler",
      value: function changeHandler(event) {
        var _this2 = this;

        this.options = Array.from(this.$select.getElementsByTagName('option'));
        this.options.map(function (item, index) {
          var value;

          if (item.hasAttribute('value')) {
            value = item.getAttribute('value');
          } else {
            value = item.innerText;
          }

          if (value === _this2.$select.value) {
            _classPrivateFieldLooseBase(_this2, _setSelectHtml)[_setSelectHtml](index);
          }
        });
      }
    }, {
      key: "select",
      value: function select(index) {
        this.current = index;

        _classPrivateFieldLooseBase(this, _setSelectHtml)[_setSelectHtml](index);

        this.$select.value = this.options[index].value;
        this.$select.dispatchEvent(this.changeEvent);
      }
    }, {
      key: "toggle",
      value: function toggle() {
        if (this.$customSelect.classList.contains(this.openClass)) {
          this.close();
        } else {
          this.open();
        }
      }
    }, {
      key: "open",
      value: function open() {
        this.$customSelect.classList.add(this.openClass);
      }
    }, {
      key: "close",
      value: function close() {
        this.$customSelect.classList.remove(this.openClass);
      }
    }]);

    return Select;
  }();

  function _getSelectData2() {
    var _this3 = this;

    this.options = Array.from(this.$select.getElementsByTagName('option'));
    var optionsArray = new Map();
    this.options.map(function (item, index) {
      var value = item.hasAttribute('value') ? item.getAttribute('value') : item.innerText;

      if (item.hasAttribute('selected')) {
        _this3.current = index;
      }

      var option = {
        name: item.innerText,
        selected: item.hasAttribute('selected'),
        disabled: item.hasAttribute('disabled'),
        hidden: item.hasAttribute('hidden'),
        index: index
      };
      optionsArray.set('index' + option.index, option);
    });

    if (this.current === null) {
      this.current = optionsArray.get('index' + 0).index;
    }

    return optionsArray;
  }

  function _setHtml2() {
    var list = '';

    var _iterator = _createForOfIteratorHelper(this.data.values()),
        _step;

    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var item = _step.value;

        if (!item.hidden) {
          var classDisabled = '';
          var classSelected = '';

          if (item.selected) {
            classSelected = this.selectedItemClass;
          }

          if (item.disabled) {
            classDisabled = this.disabledItemClass;
          }

          list += "<div data-select-index=\"".concat(item.index, "\" data-select-type=\"value\" class=\"").concat(this.customSelectClass, "__item ").concat(classDisabled, "\">").concat(item.name, "</div>");
        }
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }

    var template = "\n            <div data-select-type=\"button\" class=\"".concat(this.customSelectClass, "__input\">\n                <div data-select-type=\"button\" class=\"").concat(this.customSelectClass, "__input-name\">").concat(this.data.get('index' + this.current).name, "</div>\n                <div data-select-type=\"button\" class=\"").concat(this.customSelectClass, "__input-icon\"></div>\n            </div>\n            <div data-select-type=\"button\" class=\"").concat(this.customSelectClass, "__list\">\n                ").concat(list, "\n            </div>\n        ");
    this.$customSelect.insertAdjacentHTML('beforeEnd', template);

    _classPrivateFieldLooseBase(this, _setup)[_setup]();
  }

  function _setup2() {
    this.clickHandler = this.clickHandler.bind(this);
    this.changeHandler = this.changeHandler.bind(this);
    document.addEventListener('click', this.clickHandler);
    this.$select.addEventListener('change', this.changeHandler);
    this.$name = this.$customSelect.querySelector('.' + this.customSelectClass + '__input-name');
    this.$items = this.$customSelect.querySelectorAll('.' + this.customSelectClass + '__item');
  }

  function _setSelectHtml2(index) {
    var _this4 = this;

    this.$name.innerText = this.data.get('index' + index).name;
    this.$items.forEach(function ($item) {
      if ($item.dataset.selectIndex === index) {
        $item.classList.add(_this4.selectedItemClass);
      } else {
        $item.classList.remove(_this4.selectedItemClass);
      }
    });
  }

  return Select;
});

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/addCSSRule.js":
/*!************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/addCSSRule.js ***!
  \************************************************************/
/*! exports provided: addCSSRule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "addCSSRule", function() { return addCSSRule; });
/* harmony import */ var _raf_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./raf.js */ "./node_modules/tiny-slider/src/helpers/raf.js");
// cross browsers addRule method

function addCSSRule(sheet, selector, rules, index) {
  // return raf(function() {
  'insertRule' in sheet ? sheet.insertRule(selector + '{' + rules + '}', index) : sheet.addRule(selector, rules, index); // });
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/addClass.js":
/*!**********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/addClass.js ***!
  \**********************************************************/
/*! exports provided: addClass */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "addClass", function() { return addClass; });
/* harmony import */ var _hasClass_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hasClass.js */ "./node_modules/tiny-slider/src/helpers/hasClass.js");

var addClass = _hasClass_js__WEBPACK_IMPORTED_MODULE_0__["classListSupport"] ? function (el, str) {
  if (!Object(_hasClass_js__WEBPACK_IMPORTED_MODULE_0__["hasClass"])(el, str)) {
    el.classList.add(str);
  }
} : function (el, str) {
  if (!Object(_hasClass_js__WEBPACK_IMPORTED_MODULE_0__["hasClass"])(el, str)) {
    el.className += ' ' + str;
  }
};


/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/addEvents.js":
/*!***********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/addEvents.js ***!
  \***********************************************************/
/*! exports provided: addEvents */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "addEvents", function() { return addEvents; });
/* harmony import */ var _passiveOption_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./passiveOption.js */ "./node_modules/tiny-slider/src/helpers/passiveOption.js");

function addEvents(el, obj, preventScrolling) {
  for (var prop in obj) {
    var option = ['touchstart', 'touchmove'].indexOf(prop) >= 0 && !preventScrolling ? _passiveOption_js__WEBPACK_IMPORTED_MODULE_0__["passiveOption"] : false;
    el.addEventListener(prop, obj[prop], option);
  }
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/arrayFromNodeList.js":
/*!*******************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/arrayFromNodeList.js ***!
  \*******************************************************************/
/*! exports provided: arrayFromNodeList */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "arrayFromNodeList", function() { return arrayFromNodeList; });
function arrayFromNodeList(nl) {
  var arr = [];

  for (var i = 0, l = nl.length; i < l; i++) {
    arr.push(nl[i]);
  }

  return arr;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/caf.js":
/*!*****************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/caf.js ***!
  \*****************************************************/
/*! exports provided: caf */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "caf", function() { return caf; });
var win = window;
var caf = win.cancelAnimationFrame || win.mozCancelAnimationFrame || function (id) {
  clearTimeout(id);
};

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/calc.js":
/*!******************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/calc.js ***!
  \******************************************************/
/*! exports provided: calc */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "calc", function() { return calc; });
/* harmony import */ var _getBody_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./getBody.js */ "./node_modules/tiny-slider/src/helpers/getBody.js");
/* harmony import */ var _setFakeBody_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./setFakeBody.js */ "./node_modules/tiny-slider/src/helpers/setFakeBody.js");
/* harmony import */ var _resetFakeBody_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./resetFakeBody.js */ "./node_modules/tiny-slider/src/helpers/resetFakeBody.js");
// get css-calc 
// @return - false | calc | -webkit-calc | -moz-calc
// @usage - var calc = getCalc(); 



function calc() {
  var doc = document,
      body = Object(_getBody_js__WEBPACK_IMPORTED_MODULE_0__["getBody"])(),
      docOverflow = Object(_setFakeBody_js__WEBPACK_IMPORTED_MODULE_1__["setFakeBody"])(body),
      div = doc.createElement('div'),
      result = false;
  body.appendChild(div);

  try {
    var str = '(10px * 10)',
        vals = ['calc' + str, '-moz-calc' + str, '-webkit-calc' + str],
        val;

    for (var i = 0; i < 3; i++) {
      val = vals[i];
      div.style.width = val;

      if (div.offsetWidth === 100) {
        result = val.replace(str, '');
        break;
      }
    }
  } catch (e) {}

  body.fake ? Object(_resetFakeBody_js__WEBPACK_IMPORTED_MODULE_2__["resetFakeBody"])(body, docOverflow) : div.remove();
  return result;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/checkStorageValue.js":
/*!*******************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/checkStorageValue.js ***!
  \*******************************************************************/
/*! exports provided: checkStorageValue */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "checkStorageValue", function() { return checkStorageValue; });
function checkStorageValue(value) {
  return ['true', 'false'].indexOf(value) >= 0 ? JSON.parse(value) : value;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/classListSupport.js":
/*!******************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/classListSupport.js ***!
  \******************************************************************/
/*! exports provided: classListSupport */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "classListSupport", function() { return classListSupport; });
var classListSupport = ('classList' in document.createElement('_'));

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/createStyleSheet.js":
/*!******************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/createStyleSheet.js ***!
  \******************************************************************/
/*! exports provided: createStyleSheet */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "createStyleSheet", function() { return createStyleSheet; });
// create and append style sheet
function createStyleSheet(media, nonce) {
  // Create the <style> tag
  var style = document.createElement("style"); // style.setAttribute("type", "text/css");
  // Add a media (and/or media query) here if you'd like!
  // style.setAttribute("media", "screen")
  // style.setAttribute("media", "only screen and (max-width : 1024px)")

  if (media) {
    style.setAttribute("media", media);
  } // Add nonce attribute for Content Security Policy


  if (nonce) {
    style.setAttribute("nonce", nonce);
  } // WebKit hack :(
  // style.appendChild(document.createTextNode(""));
  // Add the <style> element to the page


  document.querySelector('head').appendChild(style);
  return style.sheet ? style.sheet : style.styleSheet;
}
;

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/docElement.js":
/*!************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/docElement.js ***!
  \************************************************************/
/*! exports provided: docElement */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "docElement", function() { return docElement; });
var docElement = document.documentElement;

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/events.js":
/*!********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/events.js ***!
  \********************************************************/
/*! exports provided: Events */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "Events", function() { return Events; });
function Events() {
  return {
    topics: {},
    on: function (eventName, fn) {
      this.topics[eventName] = this.topics[eventName] || [];
      this.topics[eventName].push(fn);
    },
    off: function (eventName, fn) {
      if (this.topics[eventName]) {
        for (var i = 0; i < this.topics[eventName].length; i++) {
          if (this.topics[eventName][i] === fn) {
            this.topics[eventName].splice(i, 1);
            break;
          }
        }
      }
    },
    emit: function (eventName, data) {
      data.type = eventName;

      if (this.topics[eventName]) {
        this.topics[eventName].forEach(function (fn) {
          fn(data, eventName);
        });
      }
    }
  };
}
;

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/extend.js":
/*!********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/extend.js ***!
  \********************************************************/
/*! exports provided: extend */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "extend", function() { return extend; });
function extend() {
  var obj,
      name,
      copy,
      target = arguments[0] || {},
      i = 1,
      length = arguments.length;

  for (; i < length; i++) {
    if ((obj = arguments[i]) !== null) {
      for (name in obj) {
        copy = obj[name];

        if (target === copy) {
          continue;
        } else if (copy !== undefined) {
          target[name] = copy;
        }
      }
    }
  }

  return target;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/forEach.js":
/*!*********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/forEach.js ***!
  \*********************************************************/
/*! exports provided: forEach */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "forEach", function() { return forEach; });
// https://toddmotto.com/ditch-the-array-foreach-call-nodelist-hack/
function forEach(arr, callback, scope) {
  for (var i = 0, l = arr.length; i < l; i++) {
    callback.call(scope, arr[i], i);
  }
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/getAttr.js":
/*!*********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/getAttr.js ***!
  \*********************************************************/
/*! exports provided: getAttr */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getAttr", function() { return getAttr; });
function getAttr(el, attr) {
  return el.getAttribute(attr);
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/getBody.js":
/*!*********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/getBody.js ***!
  \*********************************************************/
/*! exports provided: getBody */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getBody", function() { return getBody; });
function getBody() {
  var doc = document,
      body = doc.body;

  if (!body) {
    body = doc.createElement('body');
    body.fake = true;
  }

  return body;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/getCssRulesLength.js":
/*!*******************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/getCssRulesLength.js ***!
  \*******************************************************************/
/*! exports provided: getCssRulesLength */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getCssRulesLength", function() { return getCssRulesLength; });
function getCssRulesLength(sheet) {
  var rule = 'insertRule' in sheet ? sheet.cssRules : sheet.rules;
  return rule.length;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/getEndProperty.js":
/*!****************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/getEndProperty.js ***!
  \****************************************************************/
/*! exports provided: getEndProperty */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getEndProperty", function() { return getEndProperty; });
// get transitionend, animationend based on transitionDuration
// @propin: string
// @propOut: string, first-letter uppercase
// Usage: getEndProperty('WebkitTransitionDuration', 'Transition') => webkitTransitionEnd
function getEndProperty(propIn, propOut) {
  var endProp = false;

  if (/^Webkit/.test(propIn)) {
    endProp = 'webkit' + propOut + 'End';
  } else if (/^O/.test(propIn)) {
    endProp = 'o' + propOut + 'End';
  } else if (propIn) {
    endProp = propOut.toLowerCase() + 'end';
  }

  return endProp;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/getSlideId.js":
/*!************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/getSlideId.js ***!
  \************************************************************/
/*! exports provided: getSlideId */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getSlideId", function() { return getSlideId; });
function getSlideId() {
  var id = window.tnsId;
  window.tnsId = !id ? 1 : id + 1;
  return 'tns' + window.tnsId;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/getTouchDirection.js":
/*!*******************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/getTouchDirection.js ***!
  \*******************************************************************/
/*! exports provided: getTouchDirection */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "getTouchDirection", function() { return getTouchDirection; });
function getTouchDirection(angle, range) {
  var direction = false,
      gap = Math.abs(90 - Math.abs(angle));

  if (gap >= 90 - range) {
    direction = 'horizontal';
  } else if (gap <= range) {
    direction = 'vertical';
  }

  return direction;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/has3DTransforms.js":
/*!*****************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/has3DTransforms.js ***!
  \*****************************************************************/
/*! exports provided: has3DTransforms */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "has3DTransforms", function() { return has3DTransforms; });
/* harmony import */ var _getBody_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./getBody.js */ "./node_modules/tiny-slider/src/helpers/getBody.js");
/* harmony import */ var _setFakeBody_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./setFakeBody.js */ "./node_modules/tiny-slider/src/helpers/setFakeBody.js");
/* harmony import */ var _resetFakeBody_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./resetFakeBody.js */ "./node_modules/tiny-slider/src/helpers/resetFakeBody.js");



function has3DTransforms(tf) {
  if (!tf) {
    return false;
  }

  if (!window.getComputedStyle) {
    return false;
  }

  var doc = document,
      body = Object(_getBody_js__WEBPACK_IMPORTED_MODULE_0__["getBody"])(),
      docOverflow = Object(_setFakeBody_js__WEBPACK_IMPORTED_MODULE_1__["setFakeBody"])(body),
      el = doc.createElement('p'),
      has3d,
      cssTF = tf.length > 9 ? '-' + tf.slice(0, -9).toLowerCase() + '-' : '';
  cssTF += 'transform'; // Add it to the body to get the computed style

  body.insertBefore(el, null);
  el.style[tf] = 'translate3d(1px,1px,1px)';
  has3d = window.getComputedStyle(el).getPropertyValue(cssTF);
  body.fake ? Object(_resetFakeBody_js__WEBPACK_IMPORTED_MODULE_2__["resetFakeBody"])(body, docOverflow) : el.remove();
  return has3d !== undefined && has3d.length > 0 && has3d !== "none";
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/hasAttr.js":
/*!*********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/hasAttr.js ***!
  \*********************************************************/
/*! exports provided: hasAttr */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "hasAttr", function() { return hasAttr; });
function hasAttr(el, attr) {
  return el.hasAttribute(attr);
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/hasClass.js":
/*!**********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/hasClass.js ***!
  \**********************************************************/
/*! exports provided: classListSupport, hasClass */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "hasClass", function() { return hasClass; });
/* harmony import */ var _classListSupport_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./classListSupport.js */ "./node_modules/tiny-slider/src/helpers/classListSupport.js");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "classListSupport", function() { return _classListSupport_js__WEBPACK_IMPORTED_MODULE_0__["classListSupport"]; });


var hasClass = _classListSupport_js__WEBPACK_IMPORTED_MODULE_0__["classListSupport"] ? function (el, str) {
  return el.classList.contains(str);
} : function (el, str) {
  return el.className.indexOf(str) >= 0;
};


/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/hideElement.js":
/*!*************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/hideElement.js ***!
  \*************************************************************/
/*! exports provided: hideElement */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "hideElement", function() { return hideElement; });
function hideElement(el, forceHide) {
  if (el.style.display !== 'none') {
    el.style.display = 'none';
  }
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/isNodeList.js":
/*!************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/isNodeList.js ***!
  \************************************************************/
/*! exports provided: isNodeList */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "isNodeList", function() { return isNodeList; });
function isNodeList(el) {
  // Only NodeList has the "item()" function
  return typeof el.item !== "undefined";
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/isVisible.js":
/*!***********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/isVisible.js ***!
  \***********************************************************/
/*! exports provided: isVisible */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "isVisible", function() { return isVisible; });
function isVisible(el) {
  return window.getComputedStyle(el).display !== 'none';
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/jsTransform.js":
/*!*************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/jsTransform.js ***!
  \*************************************************************/
/*! exports provided: jsTransform */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "jsTransform", function() { return jsTransform; });
function jsTransform(element, attr, prefix, postfix, to, duration, callback) {
  var tick = Math.min(duration, 10),
      unit = to.indexOf('%') >= 0 ? '%' : 'px',
      to = to.replace(unit, ''),
      from = Number(element.style[attr].replace(prefix, '').replace(postfix, '').replace(unit, '')),
      positionTick = (to - from) / duration * tick,
      running;
  setTimeout(moveElement, tick);

  function moveElement() {
    duration -= tick;
    from += positionTick;
    element.style[attr] = prefix + from + unit + postfix;

    if (duration > 0) {
      setTimeout(moveElement, tick);
    } else {
      callback();
    }
  }
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/mediaquerySupport.js":
/*!*******************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/mediaquerySupport.js ***!
  \*******************************************************************/
/*! exports provided: mediaquerySupport */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "mediaquerySupport", function() { return mediaquerySupport; });
/* harmony import */ var _getBody_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./getBody.js */ "./node_modules/tiny-slider/src/helpers/getBody.js");
/* harmony import */ var _setFakeBody_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./setFakeBody.js */ "./node_modules/tiny-slider/src/helpers/setFakeBody.js");
/* harmony import */ var _resetFakeBody_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./resetFakeBody.js */ "./node_modules/tiny-slider/src/helpers/resetFakeBody.js");



function mediaquerySupport() {
  if (window.matchMedia || window.msMatchMedia) {
    return true;
  }

  var doc = document,
      body = Object(_getBody_js__WEBPACK_IMPORTED_MODULE_0__["getBody"])(),
      docOverflow = Object(_setFakeBody_js__WEBPACK_IMPORTED_MODULE_1__["setFakeBody"])(body),
      div = doc.createElement('div'),
      style = doc.createElement('style'),
      rule = '@media all and (min-width:1px){.tns-mq-test{position:absolute}}',
      position;
  style.type = 'text/css';
  div.className = 'tns-mq-test';
  body.appendChild(style);
  body.appendChild(div);

  if (style.styleSheet) {
    style.styleSheet.cssText = rule;
  } else {
    style.appendChild(doc.createTextNode(rule));
  }

  position = window.getComputedStyle ? window.getComputedStyle(div).position : div.currentStyle['position'];
  body.fake ? Object(_resetFakeBody_js__WEBPACK_IMPORTED_MODULE_2__["resetFakeBody"])(body, docOverflow) : div.remove();
  return position === "absolute";
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/passiveOption.js":
/*!***************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/passiveOption.js ***!
  \***************************************************************/
/*! exports provided: passiveOption */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "passiveOption", function() { return passiveOption; });
// Test via a getter in the options object to see if the passive property is accessed
var supportsPassive = false;

try {
  var opts = Object.defineProperty({}, 'passive', {
    get: function () {
      supportsPassive = true;
    }
  });
  window.addEventListener("test", null, opts);
} catch (e) {}

var passiveOption = supportsPassive ? {
  passive: true
} : false;

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/percentageLayout.js":
/*!******************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/percentageLayout.js ***!
  \******************************************************************/
/*! exports provided: percentageLayout */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "percentageLayout", function() { return percentageLayout; });
/* harmony import */ var _getBody_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./getBody.js */ "./node_modules/tiny-slider/src/helpers/getBody.js");
/* harmony import */ var _setFakeBody_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./setFakeBody.js */ "./node_modules/tiny-slider/src/helpers/setFakeBody.js");
/* harmony import */ var _resetFakeBody_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./resetFakeBody.js */ "./node_modules/tiny-slider/src/helpers/resetFakeBody.js");
// get subpixel support value
// @return - boolean



function percentageLayout() {
  // check subpixel layout supporting
  var doc = document,
      body = Object(_getBody_js__WEBPACK_IMPORTED_MODULE_0__["getBody"])(),
      docOverflow = Object(_setFakeBody_js__WEBPACK_IMPORTED_MODULE_1__["setFakeBody"])(body),
      wrapper = doc.createElement('div'),
      outer = doc.createElement('div'),
      str = '',
      count = 70,
      perPage = 3,
      supported = false;
  wrapper.className = "tns-t-subp2";
  outer.className = "tns-t-ct";

  for (var i = 0; i < count; i++) {
    str += '<div></div>';
  }

  outer.innerHTML = str;
  wrapper.appendChild(outer);
  body.appendChild(wrapper);
  supported = Math.abs(wrapper.getBoundingClientRect().left - outer.children[count - perPage].getBoundingClientRect().left) < 2;
  body.fake ? Object(_resetFakeBody_js__WEBPACK_IMPORTED_MODULE_2__["resetFakeBody"])(body, docOverflow) : wrapper.remove();
  return supported;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/raf.js":
/*!*****************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/raf.js ***!
  \*****************************************************/
/*! exports provided: raf */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "raf", function() { return raf; });
var win = window;
var raf = win.requestAnimationFrame || win.webkitRequestAnimationFrame || win.mozRequestAnimationFrame || win.msRequestAnimationFrame || function (cb) {
  return setTimeout(cb, 16);
};

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/removeAttrs.js":
/*!*************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/removeAttrs.js ***!
  \*************************************************************/
/*! exports provided: removeAttrs */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "removeAttrs", function() { return removeAttrs; });
/* harmony import */ var _isNodeList_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./isNodeList.js */ "./node_modules/tiny-slider/src/helpers/isNodeList.js");

function removeAttrs(els, attrs) {
  els = Object(_isNodeList_js__WEBPACK_IMPORTED_MODULE_0__["isNodeList"])(els) || els instanceof Array ? els : [els];
  attrs = attrs instanceof Array ? attrs : [attrs];
  var attrLength = attrs.length;

  for (var i = els.length; i--;) {
    for (var j = attrLength; j--;) {
      els[i].removeAttribute(attrs[j]);
    }
  }
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/removeCSSRule.js":
/*!***************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/removeCSSRule.js ***!
  \***************************************************************/
/*! exports provided: removeCSSRule */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "removeCSSRule", function() { return removeCSSRule; });
/* harmony import */ var _raf_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./raf.js */ "./node_modules/tiny-slider/src/helpers/raf.js");
// cross browsers addRule method

function removeCSSRule(sheet, index) {
  // return raf(function() {
  'deleteRule' in sheet ? sheet.deleteRule(index) : sheet.removeRule(index); // });
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/removeClass.js":
/*!*************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/removeClass.js ***!
  \*************************************************************/
/*! exports provided: removeClass */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "removeClass", function() { return removeClass; });
/* harmony import */ var _hasClass_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./hasClass.js */ "./node_modules/tiny-slider/src/helpers/hasClass.js");

var removeClass = _hasClass_js__WEBPACK_IMPORTED_MODULE_0__["classListSupport"] ? function (el, str) {
  if (Object(_hasClass_js__WEBPACK_IMPORTED_MODULE_0__["hasClass"])(el, str)) {
    el.classList.remove(str);
  }
} : function (el, str) {
  if (Object(_hasClass_js__WEBPACK_IMPORTED_MODULE_0__["hasClass"])(el, str)) {
    el.className = el.className.replace(str, '');
  }
};


/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/removeEvents.js":
/*!**************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/removeEvents.js ***!
  \**************************************************************/
/*! exports provided: removeEvents */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "removeEvents", function() { return removeEvents; });
/* harmony import */ var _passiveOption_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./passiveOption.js */ "./node_modules/tiny-slider/src/helpers/passiveOption.js");

function removeEvents(el, obj) {
  for (var prop in obj) {
    var option = ['touchstart', 'touchmove'].indexOf(prop) >= 0 ? _passiveOption_js__WEBPACK_IMPORTED_MODULE_0__["passiveOption"] : false;
    el.removeEventListener(prop, obj[prop], option);
  }
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/resetFakeBody.js":
/*!***************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/resetFakeBody.js ***!
  \***************************************************************/
/*! exports provided: resetFakeBody */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "resetFakeBody", function() { return resetFakeBody; });
/* harmony import */ var _docElement_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./docElement.js */ "./node_modules/tiny-slider/src/helpers/docElement.js");

function resetFakeBody(body, docOverflow) {
  if (body.fake) {
    body.remove();
    _docElement_js__WEBPACK_IMPORTED_MODULE_0__["docElement"].style.overflow = docOverflow; // Trigger layout so kinetic scrolling isn't disabled in iOS6+
    // eslint-disable-next-line

    _docElement_js__WEBPACK_IMPORTED_MODULE_0__["docElement"].offsetHeight;
  }
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/setAttrs.js":
/*!**********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/setAttrs.js ***!
  \**********************************************************/
/*! exports provided: setAttrs */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setAttrs", function() { return setAttrs; });
/* harmony import */ var _isNodeList_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./isNodeList.js */ "./node_modules/tiny-slider/src/helpers/isNodeList.js");

function setAttrs(els, attrs) {
  els = Object(_isNodeList_js__WEBPACK_IMPORTED_MODULE_0__["isNodeList"])(els) || els instanceof Array ? els : [els];

  if (Object.prototype.toString.call(attrs) !== '[object Object]') {
    return;
  }

  for (var i = els.length; i--;) {
    for (var key in attrs) {
      els[i].setAttribute(key, attrs[key]);
    }
  }
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/setFakeBody.js":
/*!*************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/setFakeBody.js ***!
  \*************************************************************/
/*! exports provided: setFakeBody */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setFakeBody", function() { return setFakeBody; });
/* harmony import */ var _docElement_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./docElement.js */ "./node_modules/tiny-slider/src/helpers/docElement.js");

function setFakeBody(body) {
  var docOverflow = '';

  if (body.fake) {
    docOverflow = _docElement_js__WEBPACK_IMPORTED_MODULE_0__["docElement"].style.overflow; //avoid crashing IE8, if background image is used

    body.style.background = ''; //Safari 5.13/5.1.4 OSX stops loading if ::-webkit-scrollbar is used and scrollbars are visible

    body.style.overflow = _docElement_js__WEBPACK_IMPORTED_MODULE_0__["docElement"].style.overflow = 'hidden';
    _docElement_js__WEBPACK_IMPORTED_MODULE_0__["docElement"].appendChild(body);
  }

  return docOverflow;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/setLocalStorage.js":
/*!*****************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/setLocalStorage.js ***!
  \*****************************************************************/
/*! exports provided: setLocalStorage */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setLocalStorage", function() { return setLocalStorage; });
function setLocalStorage(storage, key, value, access) {
  if (access) {
    try {
      storage.setItem(key, value);
    } catch (e) {}
  }

  return value;
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/showElement.js":
/*!*************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/showElement.js ***!
  \*************************************************************/
/*! exports provided: showElement */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "showElement", function() { return showElement; });
function showElement(el, forceHide) {
  if (el.style.display === 'none') {
    el.style.display = '';
  }
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/toDegree.js":
/*!**********************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/toDegree.js ***!
  \**********************************************************/
/*! exports provided: toDegree */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "toDegree", function() { return toDegree; });
function toDegree(y, x) {
  return Math.atan2(y, x) * (180 / Math.PI);
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/helpers/whichProperty.js":
/*!***************************************************************!*\
  !*** ./node_modules/tiny-slider/src/helpers/whichProperty.js ***!
  \***************************************************************/
/*! exports provided: whichProperty */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "whichProperty", function() { return whichProperty; });
function whichProperty(props) {
  if (typeof props === 'string') {
    var arr = [props],
        Props = props.charAt(0).toUpperCase() + props.substr(1),
        prefixes = ['Webkit', 'Moz', 'ms', 'O'];
    prefixes.forEach(function (prefix) {
      if (prefix !== 'ms' || props === 'transform') {
        arr.push(prefix + Props);
      }
    });
    props = arr;
  }

  var el = document.createElement('fakeelement'),
      len = props.length;

  for (var i = 0; i < props.length; i++) {
    var prop = props[i];

    if (el.style[prop] !== undefined) {
      return prop;
    }
  }

  return false; // explicit for ie9-
}

/***/ }),

/***/ "./node_modules/tiny-slider/src/tiny-slider.js":
/*!*****************************************************!*\
  !*** ./node_modules/tiny-slider/src/tiny-slider.js ***!
  \*****************************************************/
/*! exports provided: tns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "tns", function() { return tns; });
/* harmony import */ var _helpers_raf_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./helpers/raf.js */ "./node_modules/tiny-slider/src/helpers/raf.js");
/* harmony import */ var _helpers_caf_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./helpers/caf.js */ "./node_modules/tiny-slider/src/helpers/caf.js");
/* harmony import */ var _helpers_extend_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./helpers/extend.js */ "./node_modules/tiny-slider/src/helpers/extend.js");
/* harmony import */ var _helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./helpers/checkStorageValue.js */ "./node_modules/tiny-slider/src/helpers/checkStorageValue.js");
/* harmony import */ var _helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ./helpers/setLocalStorage.js */ "./node_modules/tiny-slider/src/helpers/setLocalStorage.js");
/* harmony import */ var _helpers_getSlideId_js__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(/*! ./helpers/getSlideId.js */ "./node_modules/tiny-slider/src/helpers/getSlideId.js");
/* harmony import */ var _helpers_calc_js__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(/*! ./helpers/calc.js */ "./node_modules/tiny-slider/src/helpers/calc.js");
/* harmony import */ var _helpers_percentageLayout_js__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(/*! ./helpers/percentageLayout.js */ "./node_modules/tiny-slider/src/helpers/percentageLayout.js");
/* harmony import */ var _helpers_mediaquerySupport_js__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(/*! ./helpers/mediaquerySupport.js */ "./node_modules/tiny-slider/src/helpers/mediaquerySupport.js");
/* harmony import */ var _helpers_createStyleSheet_js__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(/*! ./helpers/createStyleSheet.js */ "./node_modules/tiny-slider/src/helpers/createStyleSheet.js");
/* harmony import */ var _helpers_addCSSRule_js__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(/*! ./helpers/addCSSRule.js */ "./node_modules/tiny-slider/src/helpers/addCSSRule.js");
/* harmony import */ var _helpers_removeCSSRule_js__WEBPACK_IMPORTED_MODULE_11__ = __webpack_require__(/*! ./helpers/removeCSSRule.js */ "./node_modules/tiny-slider/src/helpers/removeCSSRule.js");
/* harmony import */ var _helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__ = __webpack_require__(/*! ./helpers/getCssRulesLength.js */ "./node_modules/tiny-slider/src/helpers/getCssRulesLength.js");
/* harmony import */ var _helpers_toDegree_js__WEBPACK_IMPORTED_MODULE_13__ = __webpack_require__(/*! ./helpers/toDegree.js */ "./node_modules/tiny-slider/src/helpers/toDegree.js");
/* harmony import */ var _helpers_getTouchDirection_js__WEBPACK_IMPORTED_MODULE_14__ = __webpack_require__(/*! ./helpers/getTouchDirection.js */ "./node_modules/tiny-slider/src/helpers/getTouchDirection.js");
/* harmony import */ var _helpers_forEach_js__WEBPACK_IMPORTED_MODULE_15__ = __webpack_require__(/*! ./helpers/forEach.js */ "./node_modules/tiny-slider/src/helpers/forEach.js");
/* harmony import */ var _helpers_hasClass_js__WEBPACK_IMPORTED_MODULE_16__ = __webpack_require__(/*! ./helpers/hasClass.js */ "./node_modules/tiny-slider/src/helpers/hasClass.js");
/* harmony import */ var _helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__ = __webpack_require__(/*! ./helpers/addClass.js */ "./node_modules/tiny-slider/src/helpers/addClass.js");
/* harmony import */ var _helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__ = __webpack_require__(/*! ./helpers/removeClass.js */ "./node_modules/tiny-slider/src/helpers/removeClass.js");
/* harmony import */ var _helpers_hasAttr_js__WEBPACK_IMPORTED_MODULE_19__ = __webpack_require__(/*! ./helpers/hasAttr.js */ "./node_modules/tiny-slider/src/helpers/hasAttr.js");
/* harmony import */ var _helpers_getAttr_js__WEBPACK_IMPORTED_MODULE_20__ = __webpack_require__(/*! ./helpers/getAttr.js */ "./node_modules/tiny-slider/src/helpers/getAttr.js");
/* harmony import */ var _helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__ = __webpack_require__(/*! ./helpers/setAttrs.js */ "./node_modules/tiny-slider/src/helpers/setAttrs.js");
/* harmony import */ var _helpers_removeAttrs_js__WEBPACK_IMPORTED_MODULE_22__ = __webpack_require__(/*! ./helpers/removeAttrs.js */ "./node_modules/tiny-slider/src/helpers/removeAttrs.js");
/* harmony import */ var _helpers_arrayFromNodeList_js__WEBPACK_IMPORTED_MODULE_23__ = __webpack_require__(/*! ./helpers/arrayFromNodeList.js */ "./node_modules/tiny-slider/src/helpers/arrayFromNodeList.js");
/* harmony import */ var _helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__ = __webpack_require__(/*! ./helpers/hideElement.js */ "./node_modules/tiny-slider/src/helpers/hideElement.js");
/* harmony import */ var _helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__ = __webpack_require__(/*! ./helpers/showElement.js */ "./node_modules/tiny-slider/src/helpers/showElement.js");
/* harmony import */ var _helpers_isVisible_js__WEBPACK_IMPORTED_MODULE_26__ = __webpack_require__(/*! ./helpers/isVisible.js */ "./node_modules/tiny-slider/src/helpers/isVisible.js");
/* harmony import */ var _helpers_whichProperty_js__WEBPACK_IMPORTED_MODULE_27__ = __webpack_require__(/*! ./helpers/whichProperty.js */ "./node_modules/tiny-slider/src/helpers/whichProperty.js");
/* harmony import */ var _helpers_has3DTransforms_js__WEBPACK_IMPORTED_MODULE_28__ = __webpack_require__(/*! ./helpers/has3DTransforms.js */ "./node_modules/tiny-slider/src/helpers/has3DTransforms.js");
/* harmony import */ var _helpers_getEndProperty_js__WEBPACK_IMPORTED_MODULE_29__ = __webpack_require__(/*! ./helpers/getEndProperty.js */ "./node_modules/tiny-slider/src/helpers/getEndProperty.js");
/* harmony import */ var _helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__ = __webpack_require__(/*! ./helpers/addEvents.js */ "./node_modules/tiny-slider/src/helpers/addEvents.js");
/* harmony import */ var _helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__ = __webpack_require__(/*! ./helpers/removeEvents.js */ "./node_modules/tiny-slider/src/helpers/removeEvents.js");
/* harmony import */ var _helpers_events_js__WEBPACK_IMPORTED_MODULE_32__ = __webpack_require__(/*! ./helpers/events.js */ "./node_modules/tiny-slider/src/helpers/events.js");
/* harmony import */ var _helpers_jsTransform_js__WEBPACK_IMPORTED_MODULE_33__ = __webpack_require__(/*! ./helpers/jsTransform.js */ "./node_modules/tiny-slider/src/helpers/jsTransform.js");
// Object.keys
if (!Object.keys) {
  Object.keys = function (object) {
    var keys = [];

    for (var name in object) {
      if (Object.prototype.hasOwnProperty.call(object, name)) {
        keys.push(name);
      }
    }

    return keys;
  };
} // ChildNode.remove


if (!("remove" in Element.prototype)) {
  Element.prototype.remove = function () {
    if (this.parentNode) {
      this.parentNode.removeChild(this);
    }
  };
}



































var tns = function (options) {
  options = Object(_helpers_extend_js__WEBPACK_IMPORTED_MODULE_2__["extend"])({
    container: '.slider',
    mode: 'carousel',
    axis: 'horizontal',
    items: 1,
    gutter: 0,
    edgePadding: 0,
    fixedWidth: false,
    autoWidth: false,
    viewportMax: false,
    slideBy: 1,
    center: false,
    controls: true,
    controlsPosition: 'top',
    controlsText: ['prev', 'next'],
    controlsContainer: false,
    prevButton: false,
    nextButton: false,
    nav: true,
    navPosition: 'top',
    navContainer: false,
    navAsThumbnails: false,
    arrowKeys: false,
    speed: 300,
    autoplay: false,
    autoplayPosition: 'top',
    autoplayTimeout: 5000,
    autoplayDirection: 'forward',
    autoplayText: ['start', 'stop'],
    autoplayHoverPause: false,
    autoplayButton: false,
    autoplayButtonOutput: true,
    autoplayResetOnVisibility: true,
    animateIn: 'tns-fadeIn',
    animateOut: 'tns-fadeOut',
    animateNormal: 'tns-normal',
    animateDelay: false,
    loop: true,
    rewind: false,
    autoHeight: false,
    responsive: false,
    lazyload: false,
    lazyloadSelector: '.tns-lazy-img',
    touch: true,
    mouseDrag: false,
    swipeAngle: 15,
    nested: false,
    preventActionWhenRunning: false,
    preventScrollOnTouch: false,
    freezable: true,
    onInit: false,
    useLocalStorage: true,
    nonce: false
  }, options || {});
  var doc = document,
      win = window,
      KEYS = {
    ENTER: 13,
    SPACE: 32,
    LEFT: 37,
    RIGHT: 39
  },
      tnsStorage = {},
      localStorageAccess = options.useLocalStorage;

  if (localStorageAccess) {
    // check browser version and local storage access
    var browserInfo = navigator.userAgent;
    var uid = new Date();

    try {
      tnsStorage = win.localStorage;

      if (tnsStorage) {
        tnsStorage.setItem(uid, uid);
        localStorageAccess = tnsStorage.getItem(uid) == uid;
        tnsStorage.removeItem(uid);
      } else {
        localStorageAccess = false;
      }

      if (!localStorageAccess) {
        tnsStorage = {};
      }
    } catch (e) {
      localStorageAccess = false;
    }

    if (localStorageAccess) {
      // remove storage when browser version changes
      if (tnsStorage['tnsApp'] && tnsStorage['tnsApp'] !== browserInfo) {
        ['tC', 'tPL', 'tMQ', 'tTf', 't3D', 'tTDu', 'tTDe', 'tADu', 'tADe', 'tTE', 'tAE'].forEach(function (item) {
          tnsStorage.removeItem(item);
        });
      } // update browserInfo


      localStorage['tnsApp'] = browserInfo;
    }
  }

  var CALC = tnsStorage['tC'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['tC']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 'tC', Object(_helpers_calc_js__WEBPACK_IMPORTED_MODULE_6__["calc"])(), localStorageAccess),
      PERCENTAGELAYOUT = tnsStorage['tPL'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['tPL']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 'tPL', Object(_helpers_percentageLayout_js__WEBPACK_IMPORTED_MODULE_7__["percentageLayout"])(), localStorageAccess),
      CSSMQ = tnsStorage['tMQ'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['tMQ']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 'tMQ', Object(_helpers_mediaquerySupport_js__WEBPACK_IMPORTED_MODULE_8__["mediaquerySupport"])(), localStorageAccess),
      TRANSFORM = tnsStorage['tTf'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['tTf']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 'tTf', Object(_helpers_whichProperty_js__WEBPACK_IMPORTED_MODULE_27__["whichProperty"])('transform'), localStorageAccess),
      HAS3DTRANSFORMS = tnsStorage['t3D'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['t3D']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 't3D', Object(_helpers_has3DTransforms_js__WEBPACK_IMPORTED_MODULE_28__["has3DTransforms"])(TRANSFORM), localStorageAccess),
      TRANSITIONDURATION = tnsStorage['tTDu'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['tTDu']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 'tTDu', Object(_helpers_whichProperty_js__WEBPACK_IMPORTED_MODULE_27__["whichProperty"])('transitionDuration'), localStorageAccess),
      TRANSITIONDELAY = tnsStorage['tTDe'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['tTDe']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 'tTDe', Object(_helpers_whichProperty_js__WEBPACK_IMPORTED_MODULE_27__["whichProperty"])('transitionDelay'), localStorageAccess),
      ANIMATIONDURATION = tnsStorage['tADu'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['tADu']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 'tADu', Object(_helpers_whichProperty_js__WEBPACK_IMPORTED_MODULE_27__["whichProperty"])('animationDuration'), localStorageAccess),
      ANIMATIONDELAY = tnsStorage['tADe'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['tADe']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 'tADe', Object(_helpers_whichProperty_js__WEBPACK_IMPORTED_MODULE_27__["whichProperty"])('animationDelay'), localStorageAccess),
      TRANSITIONEND = tnsStorage['tTE'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['tTE']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 'tTE', Object(_helpers_getEndProperty_js__WEBPACK_IMPORTED_MODULE_29__["getEndProperty"])(TRANSITIONDURATION, 'Transition'), localStorageAccess),
      ANIMATIONEND = tnsStorage['tAE'] ? Object(_helpers_checkStorageValue_js__WEBPACK_IMPORTED_MODULE_3__["checkStorageValue"])(tnsStorage['tAE']) : Object(_helpers_setLocalStorage_js__WEBPACK_IMPORTED_MODULE_4__["setLocalStorage"])(tnsStorage, 'tAE', Object(_helpers_getEndProperty_js__WEBPACK_IMPORTED_MODULE_29__["getEndProperty"])(ANIMATIONDURATION, 'Animation'), localStorageAccess); // get element nodes from selectors

  var supportConsoleWarn = win.console && typeof win.console.warn === "function",
      tnsList = ['container', 'controlsContainer', 'prevButton', 'nextButton', 'navContainer', 'autoplayButton'],
      optionsElements = {};
  tnsList.forEach(function (item) {
    if (typeof options[item] === 'string') {
      var str = options[item],
          el = doc.querySelector(str);
      optionsElements[item] = str;

      if (el && el.nodeName) {
        options[item] = el;
      } else {
        if (supportConsoleWarn) {
          console.warn('Can\'t find', options[item]);
        }

        return;
      }
    }
  }); // make sure at least 1 slide

  if (options.container.children.length < 1) {
    if (supportConsoleWarn) {
      console.warn('No slides found in', options.container);
    }

    return;
  } // update options


  var responsive = options.responsive,
      nested = options.nested,
      carousel = options.mode === 'carousel' ? true : false;

  if (responsive) {
    // apply responsive[0] to options and remove it
    if (0 in responsive) {
      options = Object(_helpers_extend_js__WEBPACK_IMPORTED_MODULE_2__["extend"])(options, responsive[0]);
      delete responsive[0];
    }

    var responsiveTem = {};

    for (var key in responsive) {
      var val = responsive[key]; // update responsive
      // from: 300: 2
      // to:
      //   300: {
      //     items: 2
      //   }

      val = typeof val === 'number' ? {
        items: val
      } : val;
      responsiveTem[key] = val;
    }

    responsive = responsiveTem;
    responsiveTem = null;
  } // update options


  function updateOptions(obj) {
    for (var key in obj) {
      if (!carousel) {
        if (key === 'slideBy') {
          obj[key] = 'page';
        }

        if (key === 'edgePadding') {
          obj[key] = false;
        }

        if (key === 'autoHeight') {
          obj[key] = false;
        }
      } // update responsive options


      if (key === 'responsive') {
        updateOptions(obj[key]);
      }
    }
  }

  if (!carousel) {
    updateOptions(options);
  } // === define and set variables ===


  if (!carousel) {
    options.axis = 'horizontal';
    options.slideBy = 'page';
    options.edgePadding = false;
    var animateIn = options.animateIn,
        animateOut = options.animateOut,
        animateDelay = options.animateDelay,
        animateNormal = options.animateNormal;
  }

  var horizontal = options.axis === 'horizontal' ? true : false,
      outerWrapper = doc.createElement('div'),
      innerWrapper = doc.createElement('div'),
      middleWrapper,
      container = options.container,
      containerParent = container.parentNode,
      containerHTML = container.outerHTML,
      slideItems = container.children,
      slideCount = slideItems.length,
      breakpointZone,
      windowWidth = getWindowWidth(),
      isOn = false;

  if (responsive) {
    setBreakpointZone();
  }

  if (carousel) {
    container.className += ' tns-vpfix';
  } // fixedWidth: viewport > rightBoundary > indexMax


  var autoWidth = options.autoWidth,
      fixedWidth = getOption('fixedWidth'),
      edgePadding = getOption('edgePadding'),
      gutter = getOption('gutter'),
      viewport = getViewportWidth(),
      center = getOption('center'),
      items = !autoWidth ? Math.floor(getOption('items')) : 1,
      slideBy = getOption('slideBy'),
      viewportMax = options.viewportMax || options.fixedWidthViewportWidth,
      arrowKeys = getOption('arrowKeys'),
      speed = getOption('speed'),
      rewind = options.rewind,
      loop = rewind ? false : options.loop,
      autoHeight = getOption('autoHeight'),
      controls = getOption('controls'),
      controlsText = getOption('controlsText'),
      nav = getOption('nav'),
      touch = getOption('touch'),
      mouseDrag = getOption('mouseDrag'),
      autoplay = getOption('autoplay'),
      autoplayTimeout = getOption('autoplayTimeout'),
      autoplayText = getOption('autoplayText'),
      autoplayHoverPause = getOption('autoplayHoverPause'),
      autoplayResetOnVisibility = getOption('autoplayResetOnVisibility'),
      sheet = Object(_helpers_createStyleSheet_js__WEBPACK_IMPORTED_MODULE_9__["createStyleSheet"])(null, getOption('nonce')),
      lazyload = options.lazyload,
      lazyloadSelector = options.lazyloadSelector,
      slidePositions,
      // collection of slide positions
  slideItemsOut = [],
      cloneCount = loop ? getCloneCountForLoop() : 0,
      slideCountNew = !carousel ? slideCount + cloneCount : slideCount + cloneCount * 2,
      hasRightDeadZone = (fixedWidth || autoWidth) && !loop ? true : false,
      rightBoundary = fixedWidth ? getRightBoundary() : null,
      updateIndexBeforeTransform = !carousel || !loop ? true : false,
      // transform
  transformAttr = horizontal ? 'left' : 'top',
      transformPrefix = '',
      transformPostfix = '',
      // index
  getIndexMax = function () {
    if (fixedWidth) {
      return function () {
        return center && !loop ? slideCount - 1 : Math.ceil(-rightBoundary / (fixedWidth + gutter));
      };
    } else if (autoWidth) {
      return function () {
        for (var i = 0; i < slideCountNew; i++) {
          if (slidePositions[i] >= -rightBoundary) {
            return i;
          }
        }
      };
    } else {
      return function () {
        if (center && carousel && !loop) {
          return slideCount - 1;
        } else {
          return loop || carousel ? Math.max(0, slideCountNew - Math.ceil(items)) : slideCountNew - 1;
        }
      };
    }
  }(),
      index = getStartIndex(getOption('startIndex')),
      indexCached = index,
      displayIndex = getCurrentSlide(),
      indexMin = 0,
      indexMax = !autoWidth ? getIndexMax() : null,
      // resize
  resizeTimer,
      preventActionWhenRunning = options.preventActionWhenRunning,
      swipeAngle = options.swipeAngle,
      moveDirectionExpected = swipeAngle ? '?' : true,
      running = false,
      onInit = options.onInit,
      events = new _helpers_events_js__WEBPACK_IMPORTED_MODULE_32__["Events"](),
      // id, class
  newContainerClasses = ' tns-slider tns-' + options.mode,
      slideId = container.id || Object(_helpers_getSlideId_js__WEBPACK_IMPORTED_MODULE_5__["getSlideId"])(),
      disable = getOption('disable'),
      disabled = false,
      freezable = options.freezable,
      freeze = freezable && !autoWidth ? getFreeze() : false,
      frozen = false,
      controlsEvents = {
    'click': onControlsClick,
    'keydown': onControlsKeydown
  },
      navEvents = {
    'click': onNavClick,
    'keydown': onNavKeydown
  },
      hoverEvents = {
    'mouseover': mouseoverPause,
    'mouseout': mouseoutRestart
  },
      visibilityEvent = {
    'visibilitychange': onVisibilityChange
  },
      docmentKeydownEvent = {
    'keydown': onDocumentKeydown
  },
      touchEvents = {
    'touchstart': onPanStart,
    'touchmove': onPanMove,
    'touchend': onPanEnd,
    'touchcancel': onPanEnd
  },
      dragEvents = {
    'mousedown': onPanStart,
    'mousemove': onPanMove,
    'mouseup': onPanEnd,
    'mouseleave': onPanEnd
  },
      hasControls = hasOption('controls'),
      hasNav = hasOption('nav'),
      navAsThumbnails = autoWidth ? true : options.navAsThumbnails,
      hasAutoplay = hasOption('autoplay'),
      hasTouch = hasOption('touch'),
      hasMouseDrag = hasOption('mouseDrag'),
      slideActiveClass = 'tns-slide-active',
      slideClonedClass = 'tns-slide-cloned',
      imgCompleteClass = 'tns-complete',
      imgEvents = {
    'load': onImgLoaded,
    'error': onImgFailed
  },
      imgsComplete,
      liveregionCurrent,
      preventScroll = options.preventScrollOnTouch === 'force' ? true : false; // controls


  if (hasControls) {
    var controlsContainer = options.controlsContainer,
        controlsContainerHTML = options.controlsContainer ? options.controlsContainer.outerHTML : '',
        prevButton = options.prevButton,
        nextButton = options.nextButton,
        prevButtonHTML = options.prevButton ? options.prevButton.outerHTML : '',
        nextButtonHTML = options.nextButton ? options.nextButton.outerHTML : '',
        prevIsButton,
        nextIsButton;
  } // nav


  if (hasNav) {
    var navContainer = options.navContainer,
        navContainerHTML = options.navContainer ? options.navContainer.outerHTML : '',
        navItems,
        pages = autoWidth ? slideCount : getPages(),
        pagesCached = 0,
        navClicked = -1,
        navCurrentIndex = getCurrentNavIndex(),
        navCurrentIndexCached = navCurrentIndex,
        navActiveClass = 'tns-nav-active',
        navStr = 'Carousel Page ',
        navStrCurrent = ' (Current Slide)';
  } // autoplay


  if (hasAutoplay) {
    var autoplayDirection = options.autoplayDirection === 'forward' ? 1 : -1,
        autoplayButton = options.autoplayButton,
        autoplayButtonHTML = options.autoplayButton ? options.autoplayButton.outerHTML : '',
        autoplayHtmlStrings = ['<span class=\'tns-visually-hidden\'>', ' animation</span>'],
        autoplayTimer,
        animating,
        autoplayHoverPaused,
        autoplayUserPaused,
        autoplayVisibilityPaused;
  }

  if (hasTouch || hasMouseDrag) {
    var initPosition = {},
        lastPosition = {},
        translateInit,
        disX,
        disY,
        panStart = false,
        rafIndex,
        getDist = horizontal ? function (a, b) {
      return a.x - b.x;
    } : function (a, b) {
      return a.y - b.y;
    };
  } // disable slider when slidecount <= items


  if (!autoWidth) {
    resetVariblesWhenDisable(disable || freeze);
  }

  if (TRANSFORM) {
    transformAttr = TRANSFORM;
    transformPrefix = 'translate';

    if (HAS3DTRANSFORMS) {
      transformPrefix += horizontal ? '3d(' : '3d(0px, ';
      transformPostfix = horizontal ? ', 0px, 0px)' : ', 0px)';
    } else {
      transformPrefix += horizontal ? 'X(' : 'Y(';
      transformPostfix = ')';
    }
  }

  if (carousel) {
    container.className = container.className.replace('tns-vpfix', '');
  }

  initStructure();
  initSheet();
  initSliderTransform(); // === COMMON FUNCTIONS === //

  function resetVariblesWhenDisable(condition) {
    if (condition) {
      controls = nav = touch = mouseDrag = arrowKeys = autoplay = autoplayHoverPause = autoplayResetOnVisibility = false;
    }
  }

  function getCurrentSlide() {
    var tem = carousel ? index - cloneCount : index;

    while (tem < 0) {
      tem += slideCount;
    }

    return tem % slideCount + 1;
  }

  function getStartIndex(ind) {
    ind = ind ? Math.max(0, Math.min(loop ? slideCount - 1 : slideCount - items, ind)) : 0;
    return carousel ? ind + cloneCount : ind;
  }

  function getAbsIndex(i) {
    if (i == null) {
      i = index;
    }

    if (carousel) {
      i -= cloneCount;
    }

    while (i < 0) {
      i += slideCount;
    }

    return Math.floor(i % slideCount);
  }

  function getCurrentNavIndex() {
    var absIndex = getAbsIndex(),
        result;
    result = navAsThumbnails ? absIndex : fixedWidth || autoWidth ? Math.ceil((absIndex + 1) * pages / slideCount - 1) : Math.floor(absIndex / items); // set active nav to the last one when reaches the right edge

    if (!loop && carousel && index === indexMax) {
      result = pages - 1;
    }

    return result;
  }

  function getItemsMax() {
    // fixedWidth or autoWidth while viewportMax is not available
    if (autoWidth || fixedWidth && !viewportMax) {
      return slideCount - 1; // most cases
    } else {
      var str = fixedWidth ? 'fixedWidth' : 'items',
          arr = [];

      if (fixedWidth || options[str] < slideCount) {
        arr.push(options[str]);
      }

      if (responsive) {
        for (var bp in responsive) {
          var tem = responsive[bp][str];

          if (tem && (fixedWidth || tem < slideCount)) {
            arr.push(tem);
          }
        }
      }

      if (!arr.length) {
        arr.push(0);
      }

      return Math.ceil(fixedWidth ? viewportMax / Math.min.apply(null, arr) : Math.max.apply(null, arr));
    }
  }

  function getCloneCountForLoop() {
    var itemsMax = getItemsMax(),
        result = carousel ? Math.ceil((itemsMax * 5 - slideCount) / 2) : itemsMax * 4 - slideCount;
    result = Math.max(itemsMax, result);
    return hasOption('edgePadding') ? result + 1 : result;
  }

  function getWindowWidth() {
    return win.innerWidth || doc.documentElement.clientWidth || doc.body.clientWidth;
  }

  function getInsertPosition(pos) {
    return pos === 'top' ? 'afterbegin' : 'beforeend';
  }

  function getClientWidth(el) {
    if (el == null) {
      return;
    }

    var div = doc.createElement('div'),
        rect,
        width;
    el.appendChild(div);
    rect = div.getBoundingClientRect();
    width = rect.right - rect.left;
    div.remove();
    return width || getClientWidth(el.parentNode);
  }

  function getViewportWidth() {
    var gap = edgePadding ? edgePadding * 2 - gutter : 0;
    return getClientWidth(containerParent) - gap;
  }

  function hasOption(item) {
    if (options[item]) {
      return true;
    } else {
      if (responsive) {
        for (var bp in responsive) {
          if (responsive[bp][item]) {
            return true;
          }
        }
      }

      return false;
    }
  } // get option:
  // fixed width: viewport, fixedWidth, gutter => items
  // others: window width => all variables
  // all: items => slideBy


  function getOption(item, ww) {
    if (ww == null) {
      ww = windowWidth;
    }

    if (item === 'items' && fixedWidth) {
      return Math.floor((viewport + gutter) / (fixedWidth + gutter)) || 1;
    } else {
      var result = options[item];

      if (responsive) {
        for (var bp in responsive) {
          // bp: convert string to number
          if (ww >= parseInt(bp)) {
            if (item in responsive[bp]) {
              result = responsive[bp][item];
            }
          }
        }
      }

      if (item === 'slideBy' && result === 'page') {
        result = getOption('items');
      }

      if (!carousel && (item === 'slideBy' || item === 'items')) {
        result = Math.floor(result);
      }

      return result;
    }
  }

  function getSlideMarginLeft(i) {
    return CALC ? CALC + '(' + i * 100 + '% / ' + slideCountNew + ')' : i * 100 / slideCountNew + '%';
  }

  function getInnerWrapperStyles(edgePaddingTem, gutterTem, fixedWidthTem, speedTem, autoHeightBP) {
    var str = '';

    if (edgePaddingTem !== undefined) {
      var gap = edgePaddingTem;

      if (gutterTem) {
        gap -= gutterTem;
      }

      str = horizontal ? 'margin: 0 ' + gap + 'px 0 ' + edgePaddingTem + 'px;' : 'margin: ' + edgePaddingTem + 'px 0 ' + gap + 'px 0;';
    } else if (gutterTem && !fixedWidthTem) {
      var gutterTemUnit = '-' + gutterTem + 'px',
          dir = horizontal ? gutterTemUnit + ' 0 0' : '0 ' + gutterTemUnit + ' 0';
      str = 'margin: 0 ' + dir + ';';
    }

    if (!carousel && autoHeightBP && TRANSITIONDURATION && speedTem) {
      str += getTransitionDurationStyle(speedTem);
    }

    return str;
  }

  function getContainerWidth(fixedWidthTem, gutterTem, itemsTem) {
    if (fixedWidthTem) {
      return (fixedWidthTem + gutterTem) * slideCountNew + 'px';
    } else {
      return CALC ? CALC + '(' + slideCountNew * 100 + '% / ' + itemsTem + ')' : slideCountNew * 100 / itemsTem + '%';
    }
  }

  function getSlideWidthStyle(fixedWidthTem, gutterTem, itemsTem) {
    var width;

    if (fixedWidthTem) {
      width = fixedWidthTem + gutterTem + 'px';
    } else {
      if (!carousel) {
        itemsTem = Math.floor(itemsTem);
      }

      var dividend = carousel ? slideCountNew : itemsTem;
      width = CALC ? CALC + '(100% / ' + dividend + ')' : 100 / dividend + '%';
    }

    width = 'width:' + width; // inner slider: overwrite outer slider styles

    return nested !== 'inner' ? width + ';' : width + ' !important;';
  }

  function getSlideGutterStyle(gutterTem) {
    var str = ''; // gutter maybe interger || 0
    // so can't use 'if (gutter)'

    if (gutterTem !== false) {
      var prop = horizontal ? 'padding-' : 'margin-',
          dir = horizontal ? 'right' : 'bottom';
      str = prop + dir + ': ' + gutterTem + 'px;';
    }

    return str;
  }

  function getCSSPrefix(name, num) {
    var prefix = name.substring(0, name.length - num).toLowerCase();

    if (prefix) {
      prefix = '-' + prefix + '-';
    }

    return prefix;
  }

  function getTransitionDurationStyle(speed) {
    return getCSSPrefix(TRANSITIONDURATION, 18) + 'transition-duration:' + speed / 1000 + 's;';
  }

  function getAnimationDurationStyle(speed) {
    return getCSSPrefix(ANIMATIONDURATION, 17) + 'animation-duration:' + speed / 1000 + 's;';
  }

  function initStructure() {
    var classOuter = 'tns-outer',
        classInner = 'tns-inner',
        hasGutter = hasOption('gutter');
    outerWrapper.className = classOuter;
    innerWrapper.className = classInner;
    outerWrapper.id = slideId + '-ow';
    innerWrapper.id = slideId + '-iw'; // set container properties

    if (container.id === '') {
      container.id = slideId;
    }

    newContainerClasses += PERCENTAGELAYOUT || autoWidth ? ' tns-subpixel' : ' tns-no-subpixel';
    newContainerClasses += CALC ? ' tns-calc' : ' tns-no-calc';

    if (autoWidth) {
      newContainerClasses += ' tns-autowidth';
    }

    newContainerClasses += ' tns-' + options.axis;
    container.className += newContainerClasses; // add constrain layer for carousel

    if (carousel) {
      middleWrapper = doc.createElement('div');
      middleWrapper.id = slideId + '-mw';
      middleWrapper.className = 'tns-ovh';
      outerWrapper.appendChild(middleWrapper);
      middleWrapper.appendChild(innerWrapper);
    } else {
      outerWrapper.appendChild(innerWrapper);
    }

    if (autoHeight) {
      var wp = middleWrapper ? middleWrapper : innerWrapper;
      wp.className += ' tns-ah';
    }

    containerParent.insertBefore(outerWrapper, container);
    innerWrapper.appendChild(container); // add id, class, aria attributes
    // before clone slides

    Object(_helpers_forEach_js__WEBPACK_IMPORTED_MODULE_15__["forEach"])(slideItems, function (item, i) {
      Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(item, 'tns-item');

      if (!item.id) {
        item.id = slideId + '-item' + i;
      }

      if (!carousel && animateNormal) {
        Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(item, animateNormal);
      }

      Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(item, {
        'aria-hidden': 'true',
        'tabindex': '-1'
      });
    }); // ## clone slides
    // carousel: n + slides + n
    // gallery:      slides + n

    if (cloneCount) {
      var fragmentBefore = doc.createDocumentFragment(),
          fragmentAfter = doc.createDocumentFragment();

      for (var j = cloneCount; j--;) {
        var num = j % slideCount,
            cloneFirst = slideItems[num].cloneNode(true);
        Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(cloneFirst, slideClonedClass);
        Object(_helpers_removeAttrs_js__WEBPACK_IMPORTED_MODULE_22__["removeAttrs"])(cloneFirst, 'id');
        fragmentAfter.insertBefore(cloneFirst, fragmentAfter.firstChild);

        if (carousel) {
          var cloneLast = slideItems[slideCount - 1 - num].cloneNode(true);
          Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(cloneLast, slideClonedClass);
          Object(_helpers_removeAttrs_js__WEBPACK_IMPORTED_MODULE_22__["removeAttrs"])(cloneLast, 'id');
          fragmentBefore.appendChild(cloneLast);
        }
      }

      container.insertBefore(fragmentBefore, container.firstChild);
      container.appendChild(fragmentAfter);
      slideItems = container.children;
    }
  }

  function initSliderTransform() {
    // ## images loaded/failed
    if (hasOption('autoHeight') || autoWidth || !horizontal) {
      var imgs = container.querySelectorAll('img'); // add img load event listener

      Object(_helpers_forEach_js__WEBPACK_IMPORTED_MODULE_15__["forEach"])(imgs, function (img) {
        var src = img.src;

        if (!lazyload) {
          // not data img
          if (src && src.indexOf('data:image') < 0) {
            img.src = '';
            Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(img, imgEvents);
            Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(img, 'loading');
            img.src = src; // data img
          } else {
            imgLoaded(img);
          }
        }
      }); // set imgsComplete

      Object(_helpers_raf_js__WEBPACK_IMPORTED_MODULE_0__["raf"])(function () {
        imgsLoadedCheck(Object(_helpers_arrayFromNodeList_js__WEBPACK_IMPORTED_MODULE_23__["arrayFromNodeList"])(imgs), function () {
          imgsComplete = true;
        });
      }); // reset imgs for auto height: check visible imgs only

      if (hasOption('autoHeight')) {
        imgs = getImageArray(index, Math.min(index + items - 1, slideCountNew - 1));
      }

      lazyload ? initSliderTransformStyleCheck() : Object(_helpers_raf_js__WEBPACK_IMPORTED_MODULE_0__["raf"])(function () {
        imgsLoadedCheck(Object(_helpers_arrayFromNodeList_js__WEBPACK_IMPORTED_MODULE_23__["arrayFromNodeList"])(imgs), initSliderTransformStyleCheck);
      });
    } else {
      // set container transform property
      if (carousel) {
        doContainerTransformSilent();
      } // update slider tools and events


      initTools();
      initEvents();
    }
  }

  function initSliderTransformStyleCheck() {
    if (autoWidth && slideCount > 1) {
      // check styles application
      var num = loop ? index : slideCount - 1;

      (function stylesApplicationCheck() {
        var left = slideItems[num].getBoundingClientRect().left;
        var right = slideItems[num - 1].getBoundingClientRect().right;
        Math.abs(left - right) <= 1 ? initSliderTransformCore() : setTimeout(function () {
          stylesApplicationCheck();
        }, 16);
      })();
    } else {
      initSliderTransformCore();
    }
  }

  function initSliderTransformCore() {
    // run Fn()s which are rely on image loading
    if (!horizontal || autoWidth) {
      setSlidePositions();

      if (autoWidth) {
        rightBoundary = getRightBoundary();

        if (freezable) {
          freeze = getFreeze();
        }

        indexMax = getIndexMax(); // <= slidePositions, rightBoundary <=

        resetVariblesWhenDisable(disable || freeze);
      } else {
        updateContentWrapperHeight();
      }
    } // set container transform property


    if (carousel) {
      doContainerTransformSilent();
    } // update slider tools and events


    initTools();
    initEvents();
  }

  function initSheet() {
    // gallery:
    // set animation classes and left value for gallery slider
    if (!carousel) {
      for (var i = index, l = index + Math.min(slideCount, items); i < l; i++) {
        var item = slideItems[i];
        item.style.left = (i - index) * 100 / items + '%';
        Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(item, animateIn);
        Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(item, animateNormal);
      }
    } // #### LAYOUT
    // ## INLINE-BLOCK VS FLOAT
    // ## PercentageLayout:
    // slides: inline-block
    // remove blank space between slides by set font-size: 0
    // ## Non PercentageLayout:
    // slides: float
    //         margin-right: -100%
    //         margin-left: ~
    // Resource: https://docs.google.com/spreadsheets/d/147up245wwTXeQYve3BRSAD4oVcvQmuGsFteJOeA5xNQ/edit?usp=sharing


    if (horizontal) {
      if (PERCENTAGELAYOUT || autoWidth) {
        Object(_helpers_addCSSRule_js__WEBPACK_IMPORTED_MODULE_10__["addCSSRule"])(sheet, '#' + slideId + ' > .tns-item', 'font-size:' + win.getComputedStyle(slideItems[0]).fontSize + ';', Object(_helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__["getCssRulesLength"])(sheet));
        Object(_helpers_addCSSRule_js__WEBPACK_IMPORTED_MODULE_10__["addCSSRule"])(sheet, '#' + slideId, 'font-size:0;', Object(_helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__["getCssRulesLength"])(sheet));
      } else if (carousel) {
        Object(_helpers_forEach_js__WEBPACK_IMPORTED_MODULE_15__["forEach"])(slideItems, function (slide, i) {
          slide.style.marginLeft = getSlideMarginLeft(i);
        });
      }
    } // ## BASIC STYLES


    if (CSSMQ) {
      // middle wrapper style
      if (TRANSITIONDURATION) {
        var str = middleWrapper && options.autoHeight ? getTransitionDurationStyle(options.speed) : '';
        Object(_helpers_addCSSRule_js__WEBPACK_IMPORTED_MODULE_10__["addCSSRule"])(sheet, '#' + slideId + '-mw', str, Object(_helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__["getCssRulesLength"])(sheet));
      } // inner wrapper styles


      str = getInnerWrapperStyles(options.edgePadding, options.gutter, options.fixedWidth, options.speed, options.autoHeight);
      Object(_helpers_addCSSRule_js__WEBPACK_IMPORTED_MODULE_10__["addCSSRule"])(sheet, '#' + slideId + '-iw', str, Object(_helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__["getCssRulesLength"])(sheet)); // container styles

      if (carousel) {
        str = horizontal && !autoWidth ? 'width:' + getContainerWidth(options.fixedWidth, options.gutter, options.items) + ';' : '';

        if (TRANSITIONDURATION) {
          str += getTransitionDurationStyle(speed);
        }

        Object(_helpers_addCSSRule_js__WEBPACK_IMPORTED_MODULE_10__["addCSSRule"])(sheet, '#' + slideId, str, Object(_helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__["getCssRulesLength"])(sheet));
      } // slide styles


      str = horizontal && !autoWidth ? getSlideWidthStyle(options.fixedWidth, options.gutter, options.items) : '';

      if (options.gutter) {
        str += getSlideGutterStyle(options.gutter);
      } // set gallery items transition-duration


      if (!carousel) {
        if (TRANSITIONDURATION) {
          str += getTransitionDurationStyle(speed);
        }

        if (ANIMATIONDURATION) {
          str += getAnimationDurationStyle(speed);
        }
      }

      if (str) {
        Object(_helpers_addCSSRule_js__WEBPACK_IMPORTED_MODULE_10__["addCSSRule"])(sheet, '#' + slideId + ' > .tns-item', str, Object(_helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__["getCssRulesLength"])(sheet));
      } // non CSS mediaqueries: IE8
      // ## update inner wrapper, container, slides if needed
      // set inline styles for inner wrapper & container
      // insert stylesheet (one line) for slides only (since slides are many)

    } else {
      // middle wrapper styles
      update_carousel_transition_duration(); // inner wrapper styles

      innerWrapper.style.cssText = getInnerWrapperStyles(edgePadding, gutter, fixedWidth, autoHeight); // container styles

      if (carousel && horizontal && !autoWidth) {
        container.style.width = getContainerWidth(fixedWidth, gutter, items);
      } // slide styles


      var str = horizontal && !autoWidth ? getSlideWidthStyle(fixedWidth, gutter, items) : '';

      if (gutter) {
        str += getSlideGutterStyle(gutter);
      } // append to the last line


      if (str) {
        Object(_helpers_addCSSRule_js__WEBPACK_IMPORTED_MODULE_10__["addCSSRule"])(sheet, '#' + slideId + ' > .tns-item', str, Object(_helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__["getCssRulesLength"])(sheet));
      }
    } // ## MEDIAQUERIES


    if (responsive && CSSMQ) {
      for (var bp in responsive) {
        // bp: convert string to number
        bp = parseInt(bp);
        var opts = responsive[bp],
            str = '',
            middleWrapperStr = '',
            innerWrapperStr = '',
            containerStr = '',
            slideStr = '',
            itemsBP = !autoWidth ? getOption('items', bp) : null,
            fixedWidthBP = getOption('fixedWidth', bp),
            speedBP = getOption('speed', bp),
            edgePaddingBP = getOption('edgePadding', bp),
            autoHeightBP = getOption('autoHeight', bp),
            gutterBP = getOption('gutter', bp); // middle wrapper string

        if (TRANSITIONDURATION && middleWrapper && getOption('autoHeight', bp) && 'speed' in opts) {
          middleWrapperStr = '#' + slideId + '-mw{' + getTransitionDurationStyle(speedBP) + '}';
        } // inner wrapper string


        if ('edgePadding' in opts || 'gutter' in opts) {
          innerWrapperStr = '#' + slideId + '-iw{' + getInnerWrapperStyles(edgePaddingBP, gutterBP, fixedWidthBP, speedBP, autoHeightBP) + '}';
        } // container string


        if (carousel && horizontal && !autoWidth && ('fixedWidth' in opts || 'items' in opts || fixedWidth && 'gutter' in opts)) {
          containerStr = 'width:' + getContainerWidth(fixedWidthBP, gutterBP, itemsBP) + ';';
        }

        if (TRANSITIONDURATION && 'speed' in opts) {
          containerStr += getTransitionDurationStyle(speedBP);
        }

        if (containerStr) {
          containerStr = '#' + slideId + '{' + containerStr + '}';
        } // slide string


        if ('fixedWidth' in opts || fixedWidth && 'gutter' in opts || !carousel && 'items' in opts) {
          slideStr += getSlideWidthStyle(fixedWidthBP, gutterBP, itemsBP);
        }

        if ('gutter' in opts) {
          slideStr += getSlideGutterStyle(gutterBP);
        } // set gallery items transition-duration


        if (!carousel && 'speed' in opts) {
          if (TRANSITIONDURATION) {
            slideStr += getTransitionDurationStyle(speedBP);
          }

          if (ANIMATIONDURATION) {
            slideStr += getAnimationDurationStyle(speedBP);
          }
        }

        if (slideStr) {
          slideStr = '#' + slideId + ' > .tns-item{' + slideStr + '}';
        } // add up


        str = middleWrapperStr + innerWrapperStr + containerStr + slideStr;

        if (str) {
          sheet.insertRule('@media (min-width: ' + bp / 16 + 'em) {' + str + '}', sheet.cssRules.length);
        }
      }
    }
  }

  function initTools() {
    // == slides ==
    updateSlideStatus(); // == live region ==

    outerWrapper.insertAdjacentHTML('afterbegin', '<div class="tns-liveregion tns-visually-hidden" aria-live="polite" aria-atomic="true">slide <span class="current">' + getLiveRegionStr() + '</span>  of ' + slideCount + '</div>');
    liveregionCurrent = outerWrapper.querySelector('.tns-liveregion .current'); // == autoplayInit ==

    if (hasAutoplay) {
      var txt = autoplay ? 'stop' : 'start';

      if (autoplayButton) {
        Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(autoplayButton, {
          'data-action': txt
        });
      } else if (options.autoplayButtonOutput) {
        outerWrapper.insertAdjacentHTML(getInsertPosition(options.autoplayPosition), '<button type="button" data-action="' + txt + '">' + autoplayHtmlStrings[0] + txt + autoplayHtmlStrings[1] + autoplayText[0] + '</button>');
        autoplayButton = outerWrapper.querySelector('[data-action]');
      } // add event


      if (autoplayButton) {
        Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(autoplayButton, {
          'click': toggleAutoplay
        });
      }

      if (autoplay) {
        startAutoplay();

        if (autoplayHoverPause) {
          Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(container, hoverEvents);
        }

        if (autoplayResetOnVisibility) {
          Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(container, visibilityEvent);
        }
      }
    } // == navInit ==


    if (hasNav) {
      var initIndex = !carousel ? 0 : cloneCount; // customized nav
      // will not hide the navs in case they're thumbnails

      if (navContainer) {
        Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(navContainer, {
          'aria-label': 'Carousel Pagination'
        });
        navItems = navContainer.children;
        Object(_helpers_forEach_js__WEBPACK_IMPORTED_MODULE_15__["forEach"])(navItems, function (item, i) {
          Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(item, {
            'data-nav': i,
            'tabindex': '-1',
            'aria-label': navStr + (i + 1),
            'aria-controls': slideId
          });
        }); // generated nav
      } else {
        var navHtml = '',
            hiddenStr = navAsThumbnails ? '' : 'style="display:none"';

        for (var i = 0; i < slideCount; i++) {
          // hide nav items by default
          navHtml += '<button type="button" data-nav="' + i + '" tabindex="-1" aria-controls="' + slideId + '" ' + hiddenStr + ' aria-label="' + navStr + (i + 1) + '"></button>';
        }

        navHtml = '<div class="tns-nav" aria-label="Carousel Pagination">' + navHtml + '</div>';
        outerWrapper.insertAdjacentHTML(getInsertPosition(options.navPosition), navHtml);
        navContainer = outerWrapper.querySelector('.tns-nav');
        navItems = navContainer.children;
      }

      updateNavVisibility(); // add transition

      if (TRANSITIONDURATION) {
        var prefix = TRANSITIONDURATION.substring(0, TRANSITIONDURATION.length - 18).toLowerCase(),
            str = 'transition: all ' + speed / 1000 + 's';

        if (prefix) {
          str = '-' + prefix + '-' + str;
        }

        Object(_helpers_addCSSRule_js__WEBPACK_IMPORTED_MODULE_10__["addCSSRule"])(sheet, '[aria-controls^=' + slideId + '-item]', str, Object(_helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__["getCssRulesLength"])(sheet));
      }

      Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(navItems[navCurrentIndex], {
        'aria-label': navStr + (navCurrentIndex + 1) + navStrCurrent
      });
      Object(_helpers_removeAttrs_js__WEBPACK_IMPORTED_MODULE_22__["removeAttrs"])(navItems[navCurrentIndex], 'tabindex');
      Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(navItems[navCurrentIndex], navActiveClass); // add events

      Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(navContainer, navEvents);
    } // == controlsInit ==


    if (hasControls) {
      if (!controlsContainer && (!prevButton || !nextButton)) {
        outerWrapper.insertAdjacentHTML(getInsertPosition(options.controlsPosition), '<div class="tns-controls" aria-label="Carousel Navigation" tabindex="0"><button type="button" data-controls="prev" tabindex="-1" aria-controls="' + slideId + '">' + controlsText[0] + '</button><button type="button" data-controls="next" tabindex="-1" aria-controls="' + slideId + '">' + controlsText[1] + '</button></div>');
        controlsContainer = outerWrapper.querySelector('.tns-controls');
      }

      if (!prevButton || !nextButton) {
        prevButton = controlsContainer.children[0];
        nextButton = controlsContainer.children[1];
      }

      if (options.controlsContainer) {
        Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(controlsContainer, {
          'aria-label': 'Carousel Navigation',
          'tabindex': '0'
        });
      }

      if (options.controlsContainer || options.prevButton && options.nextButton) {
        Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])([prevButton, nextButton], {
          'aria-controls': slideId,
          'tabindex': '-1'
        });
      }

      if (options.controlsContainer || options.prevButton && options.nextButton) {
        Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(prevButton, {
          'data-controls': 'prev'
        });
        Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(nextButton, {
          'data-controls': 'next'
        });
      }

      prevIsButton = isButton(prevButton);
      nextIsButton = isButton(nextButton);
      updateControlsStatus(); // add events

      if (controlsContainer) {
        Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(controlsContainer, controlsEvents);
      } else {
        Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(prevButton, controlsEvents);
        Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(nextButton, controlsEvents);
      }
    } // hide tools if needed


    disableUI();
  }

  function initEvents() {
    // add events
    if (carousel && TRANSITIONEND) {
      var eve = {};
      eve[TRANSITIONEND] = onTransitionEnd;
      Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(container, eve);
    }

    if (touch) {
      Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(container, touchEvents, options.preventScrollOnTouch);
    }

    if (mouseDrag) {
      Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(container, dragEvents);
    }

    if (arrowKeys) {
      Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(doc, docmentKeydownEvent);
    }

    if (nested === 'inner') {
      events.on('outerResized', function () {
        resizeTasks();
        events.emit('innerLoaded', info());
      });
    } else if (responsive || fixedWidth || autoWidth || autoHeight || !horizontal) {
      Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(win, {
        'resize': onResize
      });
    }

    if (autoHeight) {
      if (nested === 'outer') {
        events.on('innerLoaded', doAutoHeight);
      } else if (!disable) {
        doAutoHeight();
      }
    }

    doLazyLoad();

    if (disable) {
      disableSlider();
    } else if (freeze) {
      freezeSlider();
    }

    events.on('indexChanged', additionalUpdates);

    if (nested === 'inner') {
      events.emit('innerLoaded', info());
    }

    if (typeof onInit === 'function') {
      onInit(info());
    }

    isOn = true;
  }

  function destroy() {
    // sheet
    sheet.disabled = true;

    if (sheet.ownerNode) {
      sheet.ownerNode.remove();
    } // remove win event listeners


    Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(win, {
      'resize': onResize
    }); // arrowKeys, controls, nav

    if (arrowKeys) {
      Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(doc, docmentKeydownEvent);
    }

    if (controlsContainer) {
      Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(controlsContainer, controlsEvents);
    }

    if (navContainer) {
      Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(navContainer, navEvents);
    } // autoplay


    Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(container, hoverEvents);
    Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(container, visibilityEvent);

    if (autoplayButton) {
      Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(autoplayButton, {
        'click': toggleAutoplay
      });
    }

    if (autoplay) {
      clearInterval(autoplayTimer);
    } // container


    if (carousel && TRANSITIONEND) {
      var eve = {};
      eve[TRANSITIONEND] = onTransitionEnd;
      Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(container, eve);
    }

    if (touch) {
      Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(container, touchEvents);
    }

    if (mouseDrag) {
      Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(container, dragEvents);
    } // cache Object values in options && reset HTML


    var htmlList = [containerHTML, controlsContainerHTML, prevButtonHTML, nextButtonHTML, navContainerHTML, autoplayButtonHTML];
    tnsList.forEach(function (item, i) {
      var el = item === 'container' ? outerWrapper : options[item];

      if (typeof el === 'object' && el) {
        var prevEl = el.previousElementSibling ? el.previousElementSibling : false,
            parentEl = el.parentNode;
        el.outerHTML = htmlList[i];
        options[item] = prevEl ? prevEl.nextElementSibling : parentEl.firstElementChild;
      }
    }); // reset variables

    tnsList = animateIn = animateOut = animateDelay = animateNormal = horizontal = outerWrapper = innerWrapper = container = containerParent = containerHTML = slideItems = slideCount = breakpointZone = windowWidth = autoWidth = fixedWidth = edgePadding = gutter = viewport = items = slideBy = viewportMax = arrowKeys = speed = rewind = loop = autoHeight = sheet = lazyload = slidePositions = slideItemsOut = cloneCount = slideCountNew = hasRightDeadZone = rightBoundary = updateIndexBeforeTransform = transformAttr = transformPrefix = transformPostfix = getIndexMax = index = indexCached = indexMin = indexMax = resizeTimer = swipeAngle = moveDirectionExpected = running = onInit = events = newContainerClasses = slideId = disable = disabled = freezable = freeze = frozen = controlsEvents = navEvents = hoverEvents = visibilityEvent = docmentKeydownEvent = touchEvents = dragEvents = hasControls = hasNav = navAsThumbnails = hasAutoplay = hasTouch = hasMouseDrag = slideActiveClass = imgCompleteClass = imgEvents = imgsComplete = controls = controlsText = controlsContainer = controlsContainerHTML = prevButton = nextButton = prevIsButton = nextIsButton = nav = navContainer = navContainerHTML = navItems = pages = pagesCached = navClicked = navCurrentIndex = navCurrentIndexCached = navActiveClass = navStr = navStrCurrent = autoplay = autoplayTimeout = autoplayDirection = autoplayText = autoplayHoverPause = autoplayButton = autoplayButtonHTML = autoplayResetOnVisibility = autoplayHtmlStrings = autoplayTimer = animating = autoplayHoverPaused = autoplayUserPaused = autoplayVisibilityPaused = initPosition = lastPosition = translateInit = disX = disY = panStart = rafIndex = getDist = touch = mouseDrag = null; // check variables
    // [animateIn, animateOut, animateDelay, animateNormal, horizontal, outerWrapper, innerWrapper, container, containerParent, containerHTML, slideItems, slideCount, breakpointZone, windowWidth, autoWidth, fixedWidth, edgePadding, gutter, viewport, items, slideBy, viewportMax, arrowKeys, speed, rewind, loop, autoHeight, sheet, lazyload, slidePositions, slideItemsOut, cloneCount, slideCountNew, hasRightDeadZone, rightBoundary, updateIndexBeforeTransform, transformAttr, transformPrefix, transformPostfix, getIndexMax, index, indexCached, indexMin, indexMax, resizeTimer, swipeAngle, moveDirectionExpected, running, onInit, events, newContainerClasses, slideId, disable, disabled, freezable, freeze, frozen, controlsEvents, navEvents, hoverEvents, visibilityEvent, docmentKeydownEvent, touchEvents, dragEvents, hasControls, hasNav, navAsThumbnails, hasAutoplay, hasTouch, hasMouseDrag, slideActiveClass, imgCompleteClass, imgEvents, imgsComplete, controls, controlsText, controlsContainer, controlsContainerHTML, prevButton, nextButton, prevIsButton, nextIsButton, nav, navContainer, navContainerHTML, navItems, pages, pagesCached, navClicked, navCurrentIndex, navCurrentIndexCached, navActiveClass, navStr, navStrCurrent, autoplay, autoplayTimeout, autoplayDirection, autoplayText, autoplayHoverPause, autoplayButton, autoplayButtonHTML, autoplayResetOnVisibility, autoplayHtmlStrings, autoplayTimer, animating, autoplayHoverPaused, autoplayUserPaused, autoplayVisibilityPaused, initPosition, lastPosition, translateInit, disX, disY, panStart, rafIndex, getDist, touch, mouseDrag ].forEach(function(item) { if (item !== null) { console.log(item); } });

    for (var a in this) {
      if (a !== 'rebuild') {
        this[a] = null;
      }
    }

    isOn = false;
  } // === ON RESIZE ===
  // responsive || fixedWidth || autoWidth || !horizontal


  function onResize(e) {
    Object(_helpers_raf_js__WEBPACK_IMPORTED_MODULE_0__["raf"])(function () {
      resizeTasks(getEvent(e));
    });
  }

  function resizeTasks(e) {
    if (!isOn) {
      return;
    }

    if (nested === 'outer') {
      events.emit('outerResized', info(e));
    }

    windowWidth = getWindowWidth();
    var bpChanged,
        breakpointZoneTem = breakpointZone,
        needContainerTransform = false;

    if (responsive) {
      setBreakpointZone();
      bpChanged = breakpointZoneTem !== breakpointZone; // if (hasRightDeadZone) { needContainerTransform = true; } // *?

      if (bpChanged) {
        events.emit('newBreakpointStart', info(e));
      }
    }

    var indChanged,
        itemsChanged,
        itemsTem = items,
        disableTem = disable,
        freezeTem = freeze,
        arrowKeysTem = arrowKeys,
        controlsTem = controls,
        navTem = nav,
        touchTem = touch,
        mouseDragTem = mouseDrag,
        autoplayTem = autoplay,
        autoplayHoverPauseTem = autoplayHoverPause,
        autoplayResetOnVisibilityTem = autoplayResetOnVisibility,
        indexTem = index;

    if (bpChanged) {
      var fixedWidthTem = fixedWidth,
          autoHeightTem = autoHeight,
          controlsTextTem = controlsText,
          centerTem = center,
          autoplayTextTem = autoplayText;

      if (!CSSMQ) {
        var gutterTem = gutter,
            edgePaddingTem = edgePadding;
      }
    } // get option:
    // fixed width: viewport, fixedWidth, gutter => items
    // others: window width => all variables
    // all: items => slideBy


    arrowKeys = getOption('arrowKeys');
    controls = getOption('controls');
    nav = getOption('nav');
    touch = getOption('touch');
    center = getOption('center');
    mouseDrag = getOption('mouseDrag');
    autoplay = getOption('autoplay');
    autoplayHoverPause = getOption('autoplayHoverPause');
    autoplayResetOnVisibility = getOption('autoplayResetOnVisibility');

    if (bpChanged) {
      disable = getOption('disable');
      fixedWidth = getOption('fixedWidth');
      speed = getOption('speed');
      autoHeight = getOption('autoHeight');
      controlsText = getOption('controlsText');
      autoplayText = getOption('autoplayText');
      autoplayTimeout = getOption('autoplayTimeout');

      if (!CSSMQ) {
        edgePadding = getOption('edgePadding');
        gutter = getOption('gutter');
      }
    } // update options


    resetVariblesWhenDisable(disable);
    viewport = getViewportWidth(); // <= edgePadding, gutter

    if ((!horizontal || autoWidth) && !disable) {
      setSlidePositions();

      if (!horizontal) {
        updateContentWrapperHeight(); // <= setSlidePositions

        needContainerTransform = true;
      }
    }

    if (fixedWidth || autoWidth) {
      rightBoundary = getRightBoundary(); // autoWidth: <= viewport, slidePositions, gutter
      // fixedWidth: <= viewport, fixedWidth, gutter

      indexMax = getIndexMax(); // autoWidth: <= rightBoundary, slidePositions
      // fixedWidth: <= rightBoundary, fixedWidth, gutter
    }

    if (bpChanged || fixedWidth) {
      items = getOption('items');
      slideBy = getOption('slideBy');
      itemsChanged = items !== itemsTem;

      if (itemsChanged) {
        if (!fixedWidth && !autoWidth) {
          indexMax = getIndexMax();
        } // <= items
        // check index before transform in case
        // slider reach the right edge then items become bigger


        updateIndex();
      }
    }

    if (bpChanged) {
      if (disable !== disableTem) {
        if (disable) {
          disableSlider();
        } else {
          enableSlider(); // <= slidePositions, rightBoundary, indexMax
        }
      }
    }

    if (freezable && (bpChanged || fixedWidth || autoWidth)) {
      freeze = getFreeze(); // <= autoWidth: slidePositions, gutter, viewport, rightBoundary
      // <= fixedWidth: fixedWidth, gutter, rightBoundary
      // <= others: items

      if (freeze !== freezeTem) {
        if (freeze) {
          doContainerTransform(getContainerTransformValue(getStartIndex(0)));
          freezeSlider();
        } else {
          unfreezeSlider();
          needContainerTransform = true;
        }
      }
    }

    resetVariblesWhenDisable(disable || freeze); // controls, nav, touch, mouseDrag, arrowKeys, autoplay, autoplayHoverPause, autoplayResetOnVisibility

    if (!autoplay) {
      autoplayHoverPause = autoplayResetOnVisibility = false;
    }

    if (arrowKeys !== arrowKeysTem) {
      arrowKeys ? Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(doc, docmentKeydownEvent) : Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(doc, docmentKeydownEvent);
    }

    if (controls !== controlsTem) {
      if (controls) {
        if (controlsContainer) {
          Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(controlsContainer);
        } else {
          if (prevButton) {
            Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(prevButton);
          }

          if (nextButton) {
            Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(nextButton);
          }
        }
      } else {
        if (controlsContainer) {
          Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(controlsContainer);
        } else {
          if (prevButton) {
            Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(prevButton);
          }

          if (nextButton) {
            Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(nextButton);
          }
        }
      }
    }

    if (nav !== navTem) {
      if (nav) {
        Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(navContainer);
        updateNavVisibility();
      } else {
        Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(navContainer);
      }
    }

    if (touch !== touchTem) {
      touch ? Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(container, touchEvents, options.preventScrollOnTouch) : Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(container, touchEvents);
    }

    if (mouseDrag !== mouseDragTem) {
      mouseDrag ? Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(container, dragEvents) : Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(container, dragEvents);
    }

    if (autoplay !== autoplayTem) {
      if (autoplay) {
        if (autoplayButton) {
          Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(autoplayButton);
        }

        if (!animating && !autoplayUserPaused) {
          startAutoplay();
        }
      } else {
        if (autoplayButton) {
          Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(autoplayButton);
        }

        if (animating) {
          stopAutoplay();
        }
      }
    }

    if (autoplayHoverPause !== autoplayHoverPauseTem) {
      autoplayHoverPause ? Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(container, hoverEvents) : Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(container, hoverEvents);
    }

    if (autoplayResetOnVisibility !== autoplayResetOnVisibilityTem) {
      autoplayResetOnVisibility ? Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(doc, visibilityEvent) : Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(doc, visibilityEvent);
    }

    if (bpChanged) {
      if (fixedWidth !== fixedWidthTem || center !== centerTem) {
        needContainerTransform = true;
      }

      if (autoHeight !== autoHeightTem) {
        if (!autoHeight) {
          innerWrapper.style.height = '';
        }
      }

      if (controls && controlsText !== controlsTextTem) {
        prevButton.innerHTML = controlsText[0];
        nextButton.innerHTML = controlsText[1];
      }

      if (autoplayButton && autoplayText !== autoplayTextTem) {
        var i = autoplay ? 1 : 0,
            html = autoplayButton.innerHTML,
            len = html.length - autoplayTextTem[i].length;

        if (html.substring(len) === autoplayTextTem[i]) {
          autoplayButton.innerHTML = html.substring(0, len) + autoplayText[i];
        }
      }
    } else {
      if (center && (fixedWidth || autoWidth)) {
        needContainerTransform = true;
      }
    }

    if (itemsChanged || fixedWidth && !autoWidth) {
      pages = getPages();
      updateNavVisibility();
    }

    indChanged = index !== indexTem;

    if (indChanged) {
      events.emit('indexChanged', info());
      needContainerTransform = true;
    } else if (itemsChanged) {
      if (!indChanged) {
        additionalUpdates();
      }
    } else if (fixedWidth || autoWidth) {
      doLazyLoad();
      updateSlideStatus();
      updateLiveRegion();
    }

    if (itemsChanged && !carousel) {
      updateGallerySlidePositions();
    }

    if (!disable && !freeze) {
      // non-mediaqueries: IE8
      if (bpChanged && !CSSMQ) {
        // middle wrapper styles
        // inner wrapper styles
        if (edgePadding !== edgePaddingTem || gutter !== gutterTem) {
          innerWrapper.style.cssText = getInnerWrapperStyles(edgePadding, gutter, fixedWidth, speed, autoHeight);
        }

        if (horizontal) {
          // container styles
          if (carousel) {
            container.style.width = getContainerWidth(fixedWidth, gutter, items);
          } // slide styles


          var str = getSlideWidthStyle(fixedWidth, gutter, items) + getSlideGutterStyle(gutter); // remove the last line and
          // add new styles

          Object(_helpers_removeCSSRule_js__WEBPACK_IMPORTED_MODULE_11__["removeCSSRule"])(sheet, Object(_helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__["getCssRulesLength"])(sheet) - 1);
          Object(_helpers_addCSSRule_js__WEBPACK_IMPORTED_MODULE_10__["addCSSRule"])(sheet, '#' + slideId + ' > .tns-item', str, Object(_helpers_getCssRulesLength_js__WEBPACK_IMPORTED_MODULE_12__["getCssRulesLength"])(sheet));
        }
      } // auto height


      if (autoHeight) {
        doAutoHeight();
      }

      if (needContainerTransform) {
        doContainerTransformSilent();
        indexCached = index;
      }
    }

    if (bpChanged) {
      events.emit('newBreakpointEnd', info(e));
    }
  } // === INITIALIZATION FUNCTIONS === //


  function getFreeze() {
    if (!fixedWidth && !autoWidth) {
      var a = center ? items - (items - 1) / 2 : items;
      return slideCount <= a;
    }

    var width = fixedWidth ? (fixedWidth + gutter) * slideCount : slidePositions[slideCount],
        vp = edgePadding ? viewport + edgePadding * 2 : viewport + gutter;

    if (center) {
      vp -= fixedWidth ? (viewport - fixedWidth) / 2 : (viewport - (slidePositions[index + 1] - slidePositions[index] - gutter)) / 2;
    }

    return width <= vp;
  }

  function setBreakpointZone() {
    breakpointZone = 0;

    for (var bp in responsive) {
      bp = parseInt(bp); // convert string to number

      if (windowWidth >= bp) {
        breakpointZone = bp;
      }
    }
  } // (slideBy, indexMin, indexMax) => index


  var updateIndex = function () {
    return loop ? carousel ? // loop + carousel
    function () {
      var leftEdge = indexMin,
          rightEdge = indexMax;
      leftEdge += slideBy;
      rightEdge -= slideBy; // adjust edges when has edge paddings
      // or fixed-width slider with extra space on the right side

      if (edgePadding) {
        leftEdge += 1;
        rightEdge -= 1;
      } else if (fixedWidth) {
        if ((viewport + gutter) % (fixedWidth + gutter)) {
          rightEdge -= 1;
        }
      }

      if (cloneCount) {
        if (index > rightEdge) {
          index -= slideCount;
        } else if (index < leftEdge) {
          index += slideCount;
        }
      }
    } : // loop + gallery
    function () {
      if (index > indexMax) {
        while (index >= indexMin + slideCount) {
          index -= slideCount;
        }
      } else if (index < indexMin) {
        while (index <= indexMax - slideCount) {
          index += slideCount;
        }
      }
    } : // non-loop
    function () {
      index = Math.max(indexMin, Math.min(indexMax, index));
    };
  }();

  function disableUI() {
    if (!autoplay && autoplayButton) {
      Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(autoplayButton);
    }

    if (!nav && navContainer) {
      Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(navContainer);
    }

    if (!controls) {
      if (controlsContainer) {
        Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(controlsContainer);
      } else {
        if (prevButton) {
          Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(prevButton);
        }

        if (nextButton) {
          Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(nextButton);
        }
      }
    }
  }

  function enableUI() {
    if (autoplay && autoplayButton) {
      Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(autoplayButton);
    }

    if (nav && navContainer) {
      Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(navContainer);
    }

    if (controls) {
      if (controlsContainer) {
        Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(controlsContainer);
      } else {
        if (prevButton) {
          Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(prevButton);
        }

        if (nextButton) {
          Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(nextButton);
        }
      }
    }
  }

  function freezeSlider() {
    if (frozen) {
      return;
    } // remove edge padding from inner wrapper


    if (edgePadding) {
      innerWrapper.style.margin = '0px';
    } // add class tns-transparent to cloned slides


    if (cloneCount) {
      var str = 'tns-transparent';

      for (var i = cloneCount; i--;) {
        if (carousel) {
          Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(slideItems[i], str);
        }

        Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(slideItems[slideCountNew - i - 1], str);
      }
    } // update tools


    disableUI();
    frozen = true;
  }

  function unfreezeSlider() {
    if (!frozen) {
      return;
    } // restore edge padding for inner wrapper
    // for mordern browsers


    if (edgePadding && CSSMQ) {
      innerWrapper.style.margin = '';
    } // remove class tns-transparent to cloned slides


    if (cloneCount) {
      var str = 'tns-transparent';

      for (var i = cloneCount; i--;) {
        if (carousel) {
          Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(slideItems[i], str);
        }

        Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(slideItems[slideCountNew - i - 1], str);
      }
    } // update tools


    enableUI();
    frozen = false;
  }

  function disableSlider() {
    if (disabled) {
      return;
    }

    sheet.disabled = true;
    container.className = container.className.replace(newContainerClasses.substring(1), '');
    Object(_helpers_removeAttrs_js__WEBPACK_IMPORTED_MODULE_22__["removeAttrs"])(container, ['style']);

    if (loop) {
      for (var j = cloneCount; j--;) {
        if (carousel) {
          Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(slideItems[j]);
        }

        Object(_helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"])(slideItems[slideCountNew - j - 1]);
      }
    } // vertical slider


    if (!horizontal || !carousel) {
      Object(_helpers_removeAttrs_js__WEBPACK_IMPORTED_MODULE_22__["removeAttrs"])(innerWrapper, ['style']);
    } // gallery


    if (!carousel) {
      for (var i = index, l = index + slideCount; i < l; i++) {
        var item = slideItems[i];
        Object(_helpers_removeAttrs_js__WEBPACK_IMPORTED_MODULE_22__["removeAttrs"])(item, ['style']);
        Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(item, animateIn);
        Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(item, animateNormal);
      }
    } // update tools


    disableUI();
    disabled = true;
  }

  function enableSlider() {
    if (!disabled) {
      return;
    }

    sheet.disabled = false;
    container.className += newContainerClasses;
    doContainerTransformSilent();

    if (loop) {
      for (var j = cloneCount; j--;) {
        if (carousel) {
          Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(slideItems[j]);
        }

        Object(_helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"])(slideItems[slideCountNew - j - 1]);
      }
    } // gallery


    if (!carousel) {
      for (var i = index, l = index + slideCount; i < l; i++) {
        var item = slideItems[i],
            classN = i < index + items ? animateIn : animateNormal;
        item.style.left = (i - index) * 100 / items + '%';
        Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(item, classN);
      }
    } // update tools


    enableUI();
    disabled = false;
  }

  function updateLiveRegion() {
    var str = getLiveRegionStr();

    if (liveregionCurrent.innerHTML !== str) {
      liveregionCurrent.innerHTML = str;
    }
  }

  function getLiveRegionStr() {
    var arr = getVisibleSlideRange(),
        start = arr[0] + 1,
        end = arr[1] + 1;
    return start === end ? start + '' : start + ' to ' + end;
  }

  function getVisibleSlideRange(val) {
    if (val == null) {
      val = getContainerTransformValue();
    }

    var start = index,
        end,
        rangestart,
        rangeend; // get range start, range end for autoWidth and fixedWidth

    if (center || edgePadding) {
      if (autoWidth || fixedWidth) {
        rangestart = -(parseFloat(val) + edgePadding);
        rangeend = rangestart + viewport + edgePadding * 2;
      }
    } else {
      if (autoWidth) {
        rangestart = slidePositions[index];
        rangeend = rangestart + viewport;
      }
    } // get start, end
    // - check auto width


    if (autoWidth) {
      slidePositions.forEach(function (point, i) {
        if (i < slideCountNew) {
          if ((center || edgePadding) && point <= rangestart + 0.5) {
            start = i;
          }

          if (rangeend - point >= 0.5) {
            end = i;
          }
        }
      }); // - check percentage width, fixed width
    } else {
      if (fixedWidth) {
        var cell = fixedWidth + gutter;

        if (center || edgePadding) {
          start = Math.floor(rangestart / cell);
          end = Math.ceil(rangeend / cell - 1);
        } else {
          end = start + Math.ceil(viewport / cell) - 1;
        }
      } else {
        if (center || edgePadding) {
          var a = items - 1;

          if (center) {
            start -= a / 2;
            end = index + a / 2;
          } else {
            end = index + a;
          }

          if (edgePadding) {
            var b = edgePadding * items / viewport;
            start -= b;
            end += b;
          }

          start = Math.floor(start);
          end = Math.ceil(end);
        } else {
          end = start + items - 1;
        }
      }

      start = Math.max(start, 0);
      end = Math.min(end, slideCountNew - 1);
    }

    return [start, end];
  }

  function doLazyLoad() {
    if (lazyload && !disable) {
      var arg = getVisibleSlideRange();
      arg.push(lazyloadSelector);
      getImageArray.apply(null, arg).forEach(function (img) {
        if (!Object(_helpers_hasClass_js__WEBPACK_IMPORTED_MODULE_16__["hasClass"])(img, imgCompleteClass)) {
          // stop propagation transitionend event to container
          var eve = {};

          eve[TRANSITIONEND] = function (e) {
            e.stopPropagation();
          };

          Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(img, eve);
          Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(img, imgEvents); // update src

          img.src = Object(_helpers_getAttr_js__WEBPACK_IMPORTED_MODULE_20__["getAttr"])(img, 'data-src'); // update srcset

          var srcset = Object(_helpers_getAttr_js__WEBPACK_IMPORTED_MODULE_20__["getAttr"])(img, 'data-srcset');

          if (srcset) {
            img.srcset = srcset;
          }

          Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(img, 'loading');
        }
      });
    }
  }

  function onImgLoaded(e) {
    imgLoaded(getTarget(e));
  }

  function onImgFailed(e) {
    imgFailed(getTarget(e));
  }

  function imgLoaded(img) {
    Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(img, 'loaded');
    imgCompleted(img);
  }

  function imgFailed(img) {
    Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(img, 'failed');
    imgCompleted(img);
  }

  function imgCompleted(img) {
    Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(img, imgCompleteClass);
    Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(img, 'loading');
    Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(img, imgEvents);
  }

  function getImageArray(start, end, imgSelector) {
    var imgs = [];

    if (!imgSelector) {
      imgSelector = 'img';
    }

    while (start <= end) {
      Object(_helpers_forEach_js__WEBPACK_IMPORTED_MODULE_15__["forEach"])(slideItems[start].querySelectorAll(imgSelector), function (img) {
        imgs.push(img);
      });
      start++;
    }

    return imgs;
  } // check if all visible images are loaded
  // and update container height if it's done


  function doAutoHeight() {
    var imgs = getImageArray.apply(null, getVisibleSlideRange());
    Object(_helpers_raf_js__WEBPACK_IMPORTED_MODULE_0__["raf"])(function () {
      imgsLoadedCheck(imgs, updateInnerWrapperHeight);
    });
  }

  function imgsLoadedCheck(imgs, cb) {
    // execute callback function if all images are complete
    if (imgsComplete) {
      return cb();
    } // check image classes


    imgs.forEach(function (img, index) {
      if (!lazyload && img.complete) {
        imgCompleted(img);
      } // Check image.complete


      if (Object(_helpers_hasClass_js__WEBPACK_IMPORTED_MODULE_16__["hasClass"])(img, imgCompleteClass)) {
        imgs.splice(index, 1);
      }
    }); // execute callback function if selected images are all complete

    if (!imgs.length) {
      return cb();
    } // otherwise execute this functiona again


    Object(_helpers_raf_js__WEBPACK_IMPORTED_MODULE_0__["raf"])(function () {
      imgsLoadedCheck(imgs, cb);
    });
  }

  function additionalUpdates() {
    doLazyLoad();
    updateSlideStatus();
    updateLiveRegion();
    updateControlsStatus();
    updateNavStatus();
  }

  function update_carousel_transition_duration() {
    if (carousel && autoHeight) {
      middleWrapper.style[TRANSITIONDURATION] = speed / 1000 + 's';
    }
  }

  function getMaxSlideHeight(slideStart, slideRange) {
    var heights = [];

    for (var i = slideStart, l = Math.min(slideStart + slideRange, slideCountNew); i < l; i++) {
      heights.push(slideItems[i].offsetHeight);
    }

    return Math.max.apply(null, heights);
  } // update inner wrapper height
  // 1. get the max-height of the visible slides
  // 2. set transitionDuration to speed
  // 3. update inner wrapper height to max-height
  // 4. set transitionDuration to 0s after transition done


  function updateInnerWrapperHeight() {
    var maxHeight = autoHeight ? getMaxSlideHeight(index, items) : getMaxSlideHeight(cloneCount, slideCount),
        wp = middleWrapper ? middleWrapper : innerWrapper;

    if (wp.style.height !== maxHeight) {
      wp.style.height = maxHeight + 'px';
    }
  } // get the distance from the top edge of the first slide to each slide
  // (init) => slidePositions


  function setSlidePositions() {
    slidePositions = [0];
    var attr = horizontal ? 'left' : 'top',
        attr2 = horizontal ? 'right' : 'bottom',
        base = slideItems[0].getBoundingClientRect()[attr];
    Object(_helpers_forEach_js__WEBPACK_IMPORTED_MODULE_15__["forEach"])(slideItems, function (item, i) {
      // skip the first slide
      if (i) {
        slidePositions.push(item.getBoundingClientRect()[attr] - base);
      } // add the end edge


      if (i === slideCountNew - 1) {
        slidePositions.push(item.getBoundingClientRect()[attr2] - base);
      }
    });
  } // update slide


  function updateSlideStatus() {
    var range = getVisibleSlideRange(),
        start = range[0],
        end = range[1];
    Object(_helpers_forEach_js__WEBPACK_IMPORTED_MODULE_15__["forEach"])(slideItems, function (item, i) {
      // show slides
      if (i >= start && i <= end) {
        if (Object(_helpers_hasAttr_js__WEBPACK_IMPORTED_MODULE_19__["hasAttr"])(item, 'aria-hidden')) {
          Object(_helpers_removeAttrs_js__WEBPACK_IMPORTED_MODULE_22__["removeAttrs"])(item, ['aria-hidden', 'tabindex']);
          Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(item, slideActiveClass);
        } // hide slides

      } else {
        if (!Object(_helpers_hasAttr_js__WEBPACK_IMPORTED_MODULE_19__["hasAttr"])(item, 'aria-hidden')) {
          Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(item, {
            'aria-hidden': 'true',
            'tabindex': '-1'
          });
          Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(item, slideActiveClass);
        }
      }
    });
  } // gallery: update slide position


  function updateGallerySlidePositions() {
    var l = index + Math.min(slideCount, items);

    for (var i = slideCountNew; i--;) {
      var item = slideItems[i];

      if (i >= index && i < l) {
        // add transitions to visible slides when adjusting their positions
        Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(item, 'tns-moving');
        item.style.left = (i - index) * 100 / items + '%';
        Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(item, animateIn);
        Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(item, animateNormal);
      } else if (item.style.left) {
        item.style.left = '';
        Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(item, animateNormal);
        Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(item, animateIn);
      } // remove outlet animation


      Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(item, animateOut);
    } // removing '.tns-moving'


    setTimeout(function () {
      Object(_helpers_forEach_js__WEBPACK_IMPORTED_MODULE_15__["forEach"])(slideItems, function (el) {
        Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(el, 'tns-moving');
      });
    }, 300);
  } // set tabindex on Nav


  function updateNavStatus() {
    // get current nav
    if (nav) {
      navCurrentIndex = navClicked >= 0 ? navClicked : getCurrentNavIndex();
      navClicked = -1;

      if (navCurrentIndex !== navCurrentIndexCached) {
        var navPrev = navItems[navCurrentIndexCached],
            navCurrent = navItems[navCurrentIndex];
        Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(navPrev, {
          'tabindex': '-1',
          'aria-label': navStr + (navCurrentIndexCached + 1)
        });
        Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(navPrev, navActiveClass);
        Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(navCurrent, {
          'aria-label': navStr + (navCurrentIndex + 1) + navStrCurrent
        });
        Object(_helpers_removeAttrs_js__WEBPACK_IMPORTED_MODULE_22__["removeAttrs"])(navCurrent, 'tabindex');
        Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(navCurrent, navActiveClass);
        navCurrentIndexCached = navCurrentIndex;
      }
    }
  }

  function getLowerCaseNodeName(el) {
    return el.nodeName.toLowerCase();
  }

  function isButton(el) {
    return getLowerCaseNodeName(el) === 'button';
  }

  function isAriaDisabled(el) {
    return el.getAttribute('aria-disabled') === 'true';
  }

  function disEnableElement(isButton, el, val) {
    if (isButton) {
      el.disabled = val;
    } else {
      el.setAttribute('aria-disabled', val.toString());
    }
  } // set 'disabled' to true on controls when reach the edges


  function updateControlsStatus() {
    if (!controls || rewind || loop) {
      return;
    }

    var prevDisabled = prevIsButton ? prevButton.disabled : isAriaDisabled(prevButton),
        nextDisabled = nextIsButton ? nextButton.disabled : isAriaDisabled(nextButton),
        disablePrev = index <= indexMin ? true : false,
        disableNext = !rewind && index >= indexMax ? true : false;

    if (disablePrev && !prevDisabled) {
      disEnableElement(prevIsButton, prevButton, true);
    }

    if (!disablePrev && prevDisabled) {
      disEnableElement(prevIsButton, prevButton, false);
    }

    if (disableNext && !nextDisabled) {
      disEnableElement(nextIsButton, nextButton, true);
    }

    if (!disableNext && nextDisabled) {
      disEnableElement(nextIsButton, nextButton, false);
    }
  } // set duration


  function resetDuration(el, str) {
    if (TRANSITIONDURATION) {
      el.style[TRANSITIONDURATION] = str;
    }
  }

  function getSliderWidth() {
    return fixedWidth ? (fixedWidth + gutter) * slideCountNew : slidePositions[slideCountNew];
  }

  function getCenterGap(num) {
    if (num == null) {
      num = index;
    }

    var gap = edgePadding ? gutter : 0;
    return autoWidth ? (viewport - gap - (slidePositions[num + 1] - slidePositions[num] - gutter)) / 2 : fixedWidth ? (viewport - fixedWidth) / 2 : (items - 1) / 2;
  }

  function getRightBoundary() {
    var gap = edgePadding ? gutter : 0,
        result = viewport + gap - getSliderWidth();

    if (center && !loop) {
      result = fixedWidth ? -(fixedWidth + gutter) * (slideCountNew - 1) - getCenterGap() : getCenterGap(slideCountNew - 1) - slidePositions[slideCountNew - 1];
    }

    if (result > 0) {
      result = 0;
    }

    return result;
  }

  function getContainerTransformValue(num) {
    if (num == null) {
      num = index;
    }

    var val;

    if (horizontal && !autoWidth) {
      if (fixedWidth) {
        val = -(fixedWidth + gutter) * num;

        if (center) {
          val += getCenterGap();
        }
      } else {
        var denominator = TRANSFORM ? slideCountNew : items;

        if (center) {
          num -= getCenterGap();
        }

        val = -num * 100 / denominator;
      }
    } else {
      val = -slidePositions[num];

      if (center && autoWidth) {
        val += getCenterGap();
      }
    }

    if (hasRightDeadZone) {
      val = Math.max(val, rightBoundary);
    }

    val += horizontal && !autoWidth && !fixedWidth ? '%' : 'px';
    return val;
  }

  function doContainerTransformSilent(val) {
    resetDuration(container, '0s');
    doContainerTransform(val);
  }

  function doContainerTransform(val) {
    if (val == null) {
      val = getContainerTransformValue();
    }

    container.style[transformAttr] = transformPrefix + val + transformPostfix;
  }

  function animateSlide(number, classOut, classIn, isOut) {
    var l = number + items;

    if (!loop) {
      l = Math.min(l, slideCountNew);
    }

    for (var i = number; i < l; i++) {
      var item = slideItems[i]; // set item positions

      if (!isOut) {
        item.style.left = (i - index) * 100 / items + '%';
      }

      if (animateDelay && TRANSITIONDELAY) {
        item.style[TRANSITIONDELAY] = item.style[ANIMATIONDELAY] = animateDelay * (i - number) / 1000 + 's';
      }

      Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(item, classOut);
      Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(item, classIn);

      if (isOut) {
        slideItemsOut.push(item);
      }
    }
  } // make transfer after click/drag:
  // 1. change 'transform' property for mordern browsers
  // 2. change 'left' property for legacy browsers


  var transformCore = function () {
    return carousel ? function () {
      resetDuration(container, '');

      if (TRANSITIONDURATION || !speed) {
        // for morden browsers with non-zero duration or
        // zero duration for all browsers
        doContainerTransform(); // run fallback function manually
        // when duration is 0 / container is hidden

        if (!speed || !Object(_helpers_isVisible_js__WEBPACK_IMPORTED_MODULE_26__["isVisible"])(container)) {
          onTransitionEnd();
        }
      } else {
        // for old browser with non-zero duration
        Object(_helpers_jsTransform_js__WEBPACK_IMPORTED_MODULE_33__["jsTransform"])(container, transformAttr, transformPrefix, transformPostfix, getContainerTransformValue(), speed, onTransitionEnd);
      }

      if (!horizontal) {
        updateContentWrapperHeight();
      }
    } : function () {
      slideItemsOut = [];
      var eve = {};
      eve[TRANSITIONEND] = eve[ANIMATIONEND] = onTransitionEnd;
      Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(slideItems[indexCached], eve);
      Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(slideItems[index], eve);
      animateSlide(indexCached, animateIn, animateOut, true);
      animateSlide(index, animateNormal, animateIn); // run fallback function manually
      // when transition or animation not supported / duration is 0

      if (!TRANSITIONEND || !ANIMATIONEND || !speed || !Object(_helpers_isVisible_js__WEBPACK_IMPORTED_MODULE_26__["isVisible"])(container)) {
        onTransitionEnd();
      }
    };
  }();

  function render(e, sliderMoved) {
    if (updateIndexBeforeTransform) {
      updateIndex();
    } // render when slider was moved (touch or drag) even though index may not change


    if (index !== indexCached || sliderMoved) {
      // events
      events.emit('indexChanged', info());
      events.emit('transitionStart', info());

      if (autoHeight) {
        doAutoHeight();
      } // pause autoplay when click or keydown from user


      if (animating && e && ['click', 'keydown'].indexOf(e.type) >= 0) {
        stopAutoplay();
      }

      running = true;
      transformCore();
    }
  }
  /*
   * Transfer prefixed properties to the same format
   * CSS: -Webkit-Transform => webkittransform
   * JS: WebkitTransform => webkittransform
   * @param {string} str - property
   *
   */


  function strTrans(str) {
    return str.toLowerCase().replace(/-/g, '');
  } // AFTER TRANSFORM
  // Things need to be done after a transfer:
  // 1. check index
  // 2. add classes to visible slide
  // 3. disable controls buttons when reach the first/last slide in non-loop slider
  // 4. update nav status
  // 5. lazyload images
  // 6. update container height


  function onTransitionEnd(event) {
    // check running on gallery mode
    // make sure trantionend/animationend events run only once
    if (carousel || running) {
      events.emit('transitionEnd', info(event));

      if (!carousel && slideItemsOut.length > 0) {
        for (var i = 0; i < slideItemsOut.length; i++) {
          var item = slideItemsOut[i]; // set item positions

          item.style.left = '';

          if (ANIMATIONDELAY && TRANSITIONDELAY) {
            item.style[ANIMATIONDELAY] = '';
            item.style[TRANSITIONDELAY] = '';
          }

          Object(_helpers_removeClass_js__WEBPACK_IMPORTED_MODULE_18__["removeClass"])(item, animateOut);
          Object(_helpers_addClass_js__WEBPACK_IMPORTED_MODULE_17__["addClass"])(item, animateNormal);
        }
      }
      /* update slides, nav, controls after checking ...
       * => legacy browsers who don't support 'event'
       *    have to check event first, otherwise event.target will cause an error
       * => or 'gallery' mode:
       *   + event target is slide item
       * => or 'carousel' mode:
       *   + event target is container,
       *   + event.property is the same with transform attribute
       */


      if (!event || !carousel && event.target.parentNode === container || event.target === container && strTrans(event.propertyName) === strTrans(transformAttr)) {
        if (!updateIndexBeforeTransform) {
          var indexTem = index;
          updateIndex();

          if (index !== indexTem) {
            events.emit('indexChanged', info());
            doContainerTransformSilent();
          }
        }

        if (nested === 'inner') {
          events.emit('innerLoaded', info());
        }

        running = false;
        indexCached = index;
      }
    }
  } // # ACTIONS


  function goTo(targetIndex, e) {
    if (freeze) {
      return;
    } // prev slideBy


    if (targetIndex === 'prev') {
      onControlsClick(e, -1); // next slideBy
    } else if (targetIndex === 'next') {
      onControlsClick(e, 1); // go to exact slide
    } else {
      if (running) {
        if (preventActionWhenRunning) {
          return;
        } else {
          onTransitionEnd();
        }
      }

      var absIndex = getAbsIndex(),
          indexGap = 0;

      if (targetIndex === 'first') {
        indexGap = -absIndex;
      } else if (targetIndex === 'last') {
        indexGap = carousel ? slideCount - items - absIndex : slideCount - 1 - absIndex;
      } else {
        if (typeof targetIndex !== 'number') {
          targetIndex = parseInt(targetIndex);
        }

        if (!isNaN(targetIndex)) {
          // from directly called goTo function
          if (!e) {
            targetIndex = Math.max(0, Math.min(slideCount - 1, targetIndex));
          }

          indexGap = targetIndex - absIndex;
        }
      } // gallery: make sure new page won't overlap with current page


      if (!carousel && indexGap && Math.abs(indexGap) < items) {
        var factor = indexGap > 0 ? 1 : -1;
        indexGap += index + indexGap - slideCount >= indexMin ? slideCount * factor : slideCount * 2 * factor * -1;
      }

      index += indexGap; // make sure index is in range

      if (carousel && loop) {
        if (index < indexMin) {
          index += slideCount;
        }

        if (index > indexMax) {
          index -= slideCount;
        }
      } // if index is changed, start rendering


      if (getAbsIndex(index) !== getAbsIndex(indexCached)) {
        render(e);
      }
    }
  } // on controls click


  function onControlsClick(e, dir) {
    if (running) {
      if (preventActionWhenRunning) {
        return;
      } else {
        onTransitionEnd();
      }
    }

    var passEventObject;

    if (!dir) {
      e = getEvent(e);
      var target = getTarget(e);

      while (target !== controlsContainer && [prevButton, nextButton].indexOf(target) < 0) {
        target = target.parentNode;
      }

      var targetIn = [prevButton, nextButton].indexOf(target);

      if (targetIn >= 0) {
        passEventObject = true;
        dir = targetIn === 0 ? -1 : 1;
      }
    }

    if (rewind) {
      if (index === indexMin && dir === -1) {
        goTo('last', e);
        return;
      } else if (index === indexMax && dir === 1) {
        goTo('first', e);
        return;
      }
    }

    if (dir) {
      index += slideBy * dir;

      if (autoWidth) {
        index = Math.floor(index);
      } // pass e when click control buttons or keydown


      render(passEventObject || e && e.type === 'keydown' ? e : null);
    }
  } // on nav click


  function onNavClick(e) {
    if (running) {
      if (preventActionWhenRunning) {
        return;
      } else {
        onTransitionEnd();
      }
    }

    e = getEvent(e);
    var target = getTarget(e),
        navIndex; // find the clicked nav item

    while (target !== navContainer && !Object(_helpers_hasAttr_js__WEBPACK_IMPORTED_MODULE_19__["hasAttr"])(target, 'data-nav')) {
      target = target.parentNode;
    }

    if (Object(_helpers_hasAttr_js__WEBPACK_IMPORTED_MODULE_19__["hasAttr"])(target, 'data-nav')) {
      var navIndex = navClicked = Number(Object(_helpers_getAttr_js__WEBPACK_IMPORTED_MODULE_20__["getAttr"])(target, 'data-nav')),
          targetIndexBase = fixedWidth || autoWidth ? navIndex * slideCount / pages : navIndex * items,
          targetIndex = navAsThumbnails ? navIndex : Math.min(Math.ceil(targetIndexBase), slideCount - 1);
      goTo(targetIndex, e);

      if (navCurrentIndex === navIndex) {
        if (animating) {
          stopAutoplay();
        }

        navClicked = -1; // reset navClicked
      }
    }
  } // autoplay functions


  function setAutoplayTimer() {
    autoplayTimer = setInterval(function () {
      onControlsClick(null, autoplayDirection);
    }, autoplayTimeout);
    animating = true;
  }

  function stopAutoplayTimer() {
    clearInterval(autoplayTimer);
    animating = false;
  }

  function updateAutoplayButton(action, txt) {
    Object(_helpers_setAttrs_js__WEBPACK_IMPORTED_MODULE_21__["setAttrs"])(autoplayButton, {
      'data-action': action
    });
    autoplayButton.innerHTML = autoplayHtmlStrings[0] + action + autoplayHtmlStrings[1] + txt;
  }

  function startAutoplay() {
    setAutoplayTimer();

    if (autoplayButton) {
      updateAutoplayButton('stop', autoplayText[1]);
    }
  }

  function stopAutoplay() {
    stopAutoplayTimer();

    if (autoplayButton) {
      updateAutoplayButton('start', autoplayText[0]);
    }
  } // programaitcally play/pause the slider


  function play() {
    if (autoplay && !animating) {
      startAutoplay();
      autoplayUserPaused = false;
    }
  }

  function pause() {
    if (animating) {
      stopAutoplay();
      autoplayUserPaused = true;
    }
  }

  function toggleAutoplay() {
    if (animating) {
      stopAutoplay();
      autoplayUserPaused = true;
    } else {
      startAutoplay();
      autoplayUserPaused = false;
    }
  }

  function onVisibilityChange() {
    if (doc.hidden) {
      if (animating) {
        stopAutoplayTimer();
        autoplayVisibilityPaused = true;
      }
    } else if (autoplayVisibilityPaused) {
      setAutoplayTimer();
      autoplayVisibilityPaused = false;
    }
  }

  function mouseoverPause() {
    if (animating) {
      stopAutoplayTimer();
      autoplayHoverPaused = true;
    }
  }

  function mouseoutRestart() {
    if (autoplayHoverPaused) {
      setAutoplayTimer();
      autoplayHoverPaused = false;
    }
  } // keydown events on document


  function onDocumentKeydown(e) {
    e = getEvent(e);
    var keyIndex = [KEYS.LEFT, KEYS.RIGHT].indexOf(e.keyCode);

    if (keyIndex >= 0) {
      onControlsClick(e, keyIndex === 0 ? -1 : 1);
    }
  } // on key control


  function onControlsKeydown(e) {
    e = getEvent(e);
    var keyIndex = [KEYS.LEFT, KEYS.RIGHT].indexOf(e.keyCode);

    if (keyIndex >= 0) {
      if (keyIndex === 0) {
        if (!prevButton.disabled) {
          onControlsClick(e, -1);
        }
      } else if (!nextButton.disabled) {
        onControlsClick(e, 1);
      }
    }
  } // set focus


  function setFocus(el) {
    el.focus();
  } // on key nav


  function onNavKeydown(e) {
    e = getEvent(e);
    var curElement = doc.activeElement;

    if (!Object(_helpers_hasAttr_js__WEBPACK_IMPORTED_MODULE_19__["hasAttr"])(curElement, 'data-nav')) {
      return;
    } // var code = e.keyCode,


    var keyIndex = [KEYS.LEFT, KEYS.RIGHT, KEYS.ENTER, KEYS.SPACE].indexOf(e.keyCode),
        navIndex = Number(Object(_helpers_getAttr_js__WEBPACK_IMPORTED_MODULE_20__["getAttr"])(curElement, 'data-nav'));

    if (keyIndex >= 0) {
      if (keyIndex === 0) {
        if (navIndex > 0) {
          setFocus(navItems[navIndex - 1]);
        }
      } else if (keyIndex === 1) {
        if (navIndex < pages - 1) {
          setFocus(navItems[navIndex + 1]);
        }
      } else {
        navClicked = navIndex;
        goTo(navIndex, e);
      }
    }
  }

  function getEvent(e) {
    e = e || win.event;
    return isTouchEvent(e) ? e.changedTouches[0] : e;
  }

  function getTarget(e) {
    return e.target || win.event.srcElement;
  }

  function isTouchEvent(e) {
    return e.type.indexOf('touch') >= 0;
  }

  function preventDefaultBehavior(e) {
    e.preventDefault ? e.preventDefault() : e.returnValue = false;
  }

  function getMoveDirectionExpected() {
    return Object(_helpers_getTouchDirection_js__WEBPACK_IMPORTED_MODULE_14__["getTouchDirection"])(Object(_helpers_toDegree_js__WEBPACK_IMPORTED_MODULE_13__["toDegree"])(lastPosition.y - initPosition.y, lastPosition.x - initPosition.x), swipeAngle) === options.axis;
  }

  function onPanStart(e) {
    if (running) {
      if (preventActionWhenRunning) {
        return;
      } else {
        onTransitionEnd();
      }
    }

    if (autoplay && animating) {
      stopAutoplayTimer();
    }

    panStart = true;

    if (rafIndex) {
      Object(_helpers_caf_js__WEBPACK_IMPORTED_MODULE_1__["caf"])(rafIndex);
      rafIndex = null;
    }

    var $ = getEvent(e);
    events.emit(isTouchEvent(e) ? 'touchStart' : 'dragStart', info(e));

    if (!isTouchEvent(e) && ['img', 'a'].indexOf(getLowerCaseNodeName(getTarget(e))) >= 0) {
      preventDefaultBehavior(e);
    }

    lastPosition.x = initPosition.x = $.clientX;
    lastPosition.y = initPosition.y = $.clientY;

    if (carousel) {
      translateInit = parseFloat(container.style[transformAttr].replace(transformPrefix, ''));
      resetDuration(container, '0s');
    }
  }

  function onPanMove(e) {
    if (panStart) {
      var $ = getEvent(e);
      lastPosition.x = $.clientX;
      lastPosition.y = $.clientY;

      if (carousel) {
        if (!rafIndex) {
          rafIndex = Object(_helpers_raf_js__WEBPACK_IMPORTED_MODULE_0__["raf"])(function () {
            panUpdate(e);
          });
        }
      } else {
        if (moveDirectionExpected === '?') {
          moveDirectionExpected = getMoveDirectionExpected();
        }

        if (moveDirectionExpected) {
          preventScroll = true;
        }
      }

      if ((typeof e.cancelable !== 'boolean' || e.cancelable) && preventScroll) {
        e.preventDefault();
      }
    }
  }

  function panUpdate(e) {
    if (!moveDirectionExpected) {
      panStart = false;
      return;
    }

    Object(_helpers_caf_js__WEBPACK_IMPORTED_MODULE_1__["caf"])(rafIndex);

    if (panStart) {
      rafIndex = Object(_helpers_raf_js__WEBPACK_IMPORTED_MODULE_0__["raf"])(function () {
        panUpdate(e);
      });
    }

    if (moveDirectionExpected === '?') {
      moveDirectionExpected = getMoveDirectionExpected();
    }

    if (moveDirectionExpected) {
      if (!preventScroll && isTouchEvent(e)) {
        preventScroll = true;
      }

      try {
        if (e.type) {
          events.emit(isTouchEvent(e) ? 'touchMove' : 'dragMove', info(e));
        }
      } catch (err) {}

      var x = translateInit,
          dist = getDist(lastPosition, initPosition);

      if (!horizontal || fixedWidth || autoWidth) {
        x += dist;
        x += 'px';
      } else {
        var percentageX = TRANSFORM ? dist * items * 100 / ((viewport + gutter) * slideCountNew) : dist * 100 / (viewport + gutter);
        x += percentageX;
        x += '%';
      }

      container.style[transformAttr] = transformPrefix + x + transformPostfix;
    }
  }

  function onPanEnd(e) {
    if (panStart) {
      if (rafIndex) {
        Object(_helpers_caf_js__WEBPACK_IMPORTED_MODULE_1__["caf"])(rafIndex);
        rafIndex = null;
      }

      if (carousel) {
        resetDuration(container, '');
      }

      panStart = false;
      var $ = getEvent(e);
      lastPosition.x = $.clientX;
      lastPosition.y = $.clientY;
      var dist = getDist(lastPosition, initPosition);

      if (Math.abs(dist)) {
        // drag vs click
        if (!isTouchEvent(e)) {
          // prevent "click"
          var target = getTarget(e);
          Object(_helpers_addEvents_js__WEBPACK_IMPORTED_MODULE_30__["addEvents"])(target, {
            'click': function preventClick(e) {
              preventDefaultBehavior(e);
              Object(_helpers_removeEvents_js__WEBPACK_IMPORTED_MODULE_31__["removeEvents"])(target, {
                'click': preventClick
              });
            }
          });
        }

        if (carousel) {
          rafIndex = Object(_helpers_raf_js__WEBPACK_IMPORTED_MODULE_0__["raf"])(function () {
            if (horizontal && !autoWidth) {
              var indexMoved = -dist * items / (viewport + gutter);
              indexMoved = dist > 0 ? Math.floor(indexMoved) : Math.ceil(indexMoved);
              index += indexMoved;
            } else {
              var moved = -(translateInit + dist);

              if (moved <= 0) {
                index = indexMin;
              } else if (moved >= slidePositions[slideCountNew - 1]) {
                index = indexMax;
              } else {
                var i = 0;

                while (i < slideCountNew && moved >= slidePositions[i]) {
                  index = i;

                  if (moved > slidePositions[i] && dist < 0) {
                    index += 1;
                  }

                  i++;
                }
              }
            }

            render(e, dist);
            events.emit(isTouchEvent(e) ? 'touchEnd' : 'dragEnd', info(e));
          });
        } else {
          if (moveDirectionExpected) {
            onControlsClick(e, dist > 0 ? -1 : 1);
          }
        }
      }
    } // reset


    if (options.preventScrollOnTouch === 'auto') {
      preventScroll = false;
    }

    if (swipeAngle) {
      moveDirectionExpected = '?';
    }

    if (autoplay && !animating) {
      setAutoplayTimer();
    }
  } // === RESIZE FUNCTIONS === //
  // (slidePositions, index, items) => vertical_conentWrapper.height


  function updateContentWrapperHeight() {
    var wp = middleWrapper ? middleWrapper : innerWrapper;
    wp.style.height = slidePositions[index + items] - slidePositions[index] + 'px';
  }

  function getPages() {
    var rough = fixedWidth ? (fixedWidth + gutter) * slideCount / viewport : slideCount / items;
    return Math.min(Math.ceil(rough), slideCount);
  }
  /*
   * 1. update visible nav items list
   * 2. add "hidden" attributes to previous visible nav items
   * 3. remove "hidden" attrubutes to new visible nav items
   */


  function updateNavVisibility() {
    if (!nav || navAsThumbnails) {
      return;
    }

    if (pages !== pagesCached) {
      var min = pagesCached,
          max = pages,
          fn = _helpers_showElement_js__WEBPACK_IMPORTED_MODULE_25__["showElement"];

      if (pagesCached > pages) {
        min = pages;
        max = pagesCached;
        fn = _helpers_hideElement_js__WEBPACK_IMPORTED_MODULE_24__["hideElement"];
      }

      while (min < max) {
        fn(navItems[min]);
        min++;
      } // cache pages


      pagesCached = pages;
    }
  }

  function info(e) {
    return {
      container: container,
      slideItems: slideItems,
      navContainer: navContainer,
      navItems: navItems,
      controlsContainer: controlsContainer,
      hasControls: hasControls,
      prevButton: prevButton,
      nextButton: nextButton,
      items: items,
      slideBy: slideBy,
      cloneCount: cloneCount,
      slideCount: slideCount,
      slideCountNew: slideCountNew,
      index: index,
      indexCached: indexCached,
      displayIndex: getCurrentSlide(),
      navCurrentIndex: navCurrentIndex,
      navCurrentIndexCached: navCurrentIndexCached,
      pages: pages,
      pagesCached: pagesCached,
      sheet: sheet,
      isOn: isOn,
      event: e || {}
    };
  }

  return {
    version: '2.9.3',
    getInfo: info,
    events: events,
    goTo: goTo,
    play: play,
    pause: pause,
    isOn: isOn,
    updateSliderHeight: updateInnerWrapperHeight,
    refresh: initSliderTransform,
    destroy: destroy,
    rebuild: function () {
      return tns(Object(_helpers_extend_js__WEBPACK_IMPORTED_MODULE_2__["extend"])(options, optionsElements));
    }
  };
};

/***/ }),

/***/ "./resources/blocks/account-menu/account-menu.js":
/*!*******************************************************!*\
  !*** ./resources/blocks/account-menu/account-menu.js ***!
  \*******************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _upload_upload__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../upload/upload */ "./resources/blocks/upload/upload.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }



function setPreviewImgAccount(options) {
  var name = options.name;
  var src = options.src;
  var html = "\n        <img class=\"account-menu__header-img-item\" src=\"".concat(src, "\">\n    ");
  return html;
}

var accountInputs = Array.from(document.querySelectorAll('.account-menu__header-input'));

if (accountInputs.length > 0) {
  var _iterator = _createForOfIteratorHelper(accountInputs),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $accountInput = _step.value;
      Object(_upload_upload__WEBPACK_IMPORTED_MODULE_0__["upload"])({
        $wrapper: $accountInput.closest('.account-menu__header'),
        $input: $accountInput,
        $previewWrapper: $accountInput.closest('.account-menu__header').querySelector('.account-menu__header-img'),
        previewWrapperEmptyClass: 'chat__form-file-preview--empty',
        $filePreviewWrapper: $accountInput.closest('.account-menu__header').querySelector('.account-menu__header-img'),
        $imgPreviewWrapper: $accountInput.closest('.account-menu__header').querySelector('.account-menu__header-img'),
        filePreviewCreateFunction: false,
        imgPreviewCreateFunction: setPreviewImgAccount
      });
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

/***/ }),

/***/ "./resources/blocks/account-menu/account-menu.scss":
/*!*********************************************************!*\
  !*** ./resources/blocks/account-menu/account-menu.scss ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/account/account.js":
/*!*********************************************!*\
  !*** ./resources/blocks/account/account.js ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/account/account.scss":
/*!***********************************************!*\
  !*** ./resources/blocks/account/account.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/advantages/advantages.scss":
/*!*****************************************************!*\
  !*** ./resources/blocks/advantages/advantages.scss ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/assessment/assessment.scss":
/*!*****************************************************!*\
  !*** ./resources/blocks/assessment/assessment.scss ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/balance/balance.scss":
/*!***********************************************!*\
  !*** ./resources/blocks/balance/balance.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/banner/banner.scss":
/*!*********************************************!*\
  !*** ./resources/blocks/banner/banner.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/base/main.scss":
/*!*****************************************!*\
  !*** ./resources/blocks/base/main.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/base/media-queries.scss":
/*!**************************************************!*\
  !*** ./resources/blocks/base/media-queries.scss ***!
  \**************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/base/mixins.scss":
/*!*******************************************!*\
  !*** ./resources/blocks/base/mixins.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/base/variables.scss":
/*!**********************************************!*\
  !*** ./resources/blocks/base/variables.scss ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/basket/basket.js":
/*!*******************************************!*\
  !*** ./resources/blocks/basket/basket.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/basket/basket.scss":
/*!*********************************************!*\
  !*** ./resources/blocks/basket/basket.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/border-block/border-block.scss":
/*!*********************************************************!*\
  !*** ./resources/blocks/border-block/border-block.scss ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/breadcrumbs/breadcrumbs.scss":
/*!*******************************************************!*\
  !*** ./resources/blocks/breadcrumbs/breadcrumbs.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/button/button.scss":
/*!*********************************************!*\
  !*** ./resources/blocks/button/button.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/buyer/buyer.scss":
/*!*******************************************!*\
  !*** ./resources/blocks/buyer/buyer.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/captcha/captcha.scss":
/*!***********************************************!*\
  !*** ./resources/blocks/captcha/captcha.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/catalog/catalog.js":
/*!*********************************************!*\
  !*** ./resources/blocks/catalog/catalog.js ***!
  \*********************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var simple_custom_select__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! simple-custom-select */ "./node_modules/simple-custom-select/dist/script.js");
/* harmony import */ var simple_custom_select__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(simple_custom_select__WEBPACK_IMPORTED_MODULE_0__);

var selects = Array.from(document.querySelectorAll('.catalog__sort-select'));
var selectsArray = [];

if (selects.length > 0) {
  for (var index = 0; index < selects.length; index++) {
    selectsArray.push(new simple_custom_select__WEBPACK_IMPORTED_MODULE_0___default.a({
      $select: selects[index],
      customSelectClass: 'catalog__sort-select-custom'
    }));
  }
}

/***/ }),

/***/ "./resources/blocks/catalog/catalog.scss":
/*!***********************************************!*\
  !*** ./resources/blocks/catalog/catalog.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/categories-labels/categories-labels.scss":
/*!*******************************************************************!*\
  !*** ./resources/blocks/categories-labels/categories-labels.scss ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/categories-preview/categories-preview.scss":
/*!*********************************************************************!*\
  !*** ./resources/blocks/categories-preview/categories-preview.scss ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/chat/chat.js":
/*!***************************************!*\
  !*** ./resources/blocks/chat/chat.js ***!
  \***************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _upload_upload__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../upload/upload */ "./resources/blocks/upload/upload.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }



function setPreviewImgChat(options) {
  var name = options.name;
  var src = options.src;
  var html = "\n        <img class=\"chat__message-content-image\" src=\"".concat(src, "\" data-upload-preview>\n    ");
  return html;
}

function setPreviewDocChat(options) {
  var name = options.name;
  var src = options.src;
  var html = "\n        <a class=\"chat__message-content-file\" href=\"".concat(src, "\" data-upload-preview>\n            <svg class=\"chat__message-content-file-icon\">\n              <use xlink:href=\"../images/icons/icons-sprite.svg#file\"></use>\n            </svg>\n            <div class=\"chat__message-content-file-text\">").concat(name, "</div>\n        </a>\n    ");
  return html;
}

var chatInputs = Array.from(document.querySelectorAll('.chat__form-file-input'));

if (chatInputs.length > 0) {
  var _iterator = _createForOfIteratorHelper(chatInputs),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $chatInput = _step.value;
      Object(_upload_upload__WEBPACK_IMPORTED_MODULE_0__["upload"])({
        $wrapper: $chatInput.closest('.chat__form'),
        $input: $chatInput,
        $previewWrapper: $chatInput.closest('.chat__form').querySelector('.chat__form-file-preview'),
        previewWrapperEmptyClass: 'chat__form-file-preview--empty',
        $filePreviewWrapper: $chatInput.closest('.chat__form').querySelector('.chat__message-content-files'),
        $imgPreviewWrapper: $chatInput.closest('.chat__form').querySelector('.chat__message-content-images'),
        filePreviewCreateFunction: setPreviewDocChat,
        imgPreviewCreateFunction: setPreviewImgChat
      });
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

/***/ }),

/***/ "./resources/blocks/chat/chat.scss":
/*!*****************************************!*\
  !*** ./resources/blocks/chat/chat.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/check-progress/check-progress.js":
/*!***********************************************************!*\
  !*** ./resources/blocks/check-progress/check-progress.js ***!
  \***********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var progressbar_js_dist_progressbar__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! progressbar.js/dist/progressbar */ "./node_modules/progressbar.js/dist/progressbar.js");
/* harmony import */ var progressbar_js_dist_progressbar__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(progressbar_js_dist_progressbar__WEBPACK_IMPORTED_MODULE_0__);
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }


var checkProgressElements = Array.from(document.querySelectorAll('.check-progress'));
window.checkProgress = new Map();

if (checkProgressElements.length > 0) {
  for (var index = 0; index < checkProgressElements.length; index++) {
    var func = new checkProgressHandler(checkProgressElements[index]);

    if (checkProgressElements[index].id !== '') {
      window.checkProgress.set(checkProgressElements[index].id, func);
    } else {
      window.checkProgress.set('i' + index, func);
    }
  }
}

function checkProgressHandler($wrapper) {
  var inputs = Array.from($wrapper.querySelectorAll('.check-progress__input'));
  var selects = Array.from($wrapper.querySelectorAll('.check-progress__select'));
  var $chart = $wrapper.querySelector('.check-progress__chart');
  var checkElements = inputs.length + selects.length;
  addListeners();

  function addListeners() {
    var _iterator = _createForOfIteratorHelper(inputs),
        _step;

    try {
      for (_iterator.s(); !(_step = _iterator.n()).done;) {
        var $input = _step.value;
        $input.addEventListener('change', checkState);
      }
    } catch (err) {
      _iterator.e(err);
    } finally {
      _iterator.f();
    }

    var _iterator2 = _createForOfIteratorHelper(selects),
        _step2;

    try {
      for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
        var $select = _step2.value;
        $select.addEventListener('change', checkState);
      }
    } catch (err) {
      _iterator2.e(err);
    } finally {
      _iterator2.f();
    }
  }

  function removeListeners() {
    var _iterator3 = _createForOfIteratorHelper(inputs),
        _step3;

    try {
      for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
        var $input = _step3.value;
        $input.removeEventListener('change', checkState);
      }
    } catch (err) {
      _iterator3.e(err);
    } finally {
      _iterator3.f();
    }

    var _iterator4 = _createForOfIteratorHelper(selects),
        _step4;

    try {
      for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
        var $select = _step4.value;
        $select.removeEventListener('change', checkState);
      }
    } catch (err) {
      _iterator4.e(err);
    } finally {
      _iterator4.f();
    }
  }

  this.addListeners = function () {
    addListeners();
  };

  this.removeListeners = function () {
    removeListeners();
  };

  this.refresh = function () {
    removeListeners();
    inputs = Array.from($wrapper.querySelectorAll('.check-progress__input'));
    selects = Array.from($wrapper.querySelectorAll('.check-progress__select'));
    addListeners();
  };

  function checkState() {
    var progress = 0;

    var _iterator5 = _createForOfIteratorHelper(inputs),
        _step5;

    try {
      for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
        var $input = _step5.value;

        if (checkVal($input)) {
          progress++;
        }
      }
    } catch (err) {
      _iterator5.e(err);
    } finally {
      _iterator5.f();
    }

    var _iterator6 = _createForOfIteratorHelper(selects),
        _step6;

    try {
      for (_iterator6.s(); !(_step6 = _iterator6.n()).done;) {
        var $select = _step6.value;

        if (checkValSelect($select)) {
          progress++;
        }
      }
    } catch (err) {
      _iterator6.e(err);
    } finally {
      _iterator6.f();
    }

    var percentage = progress / checkElements;
    chartFunc.set(percentage);
    chartFunc.setText(Math.round(percentage * 100) + '%');
  }

  function checkVal($input) {
    if ($input.value.length > 0) {
      return true;
    } else {
      return false;
    }
  }

  function checkValSelect($select) {
    if ($select.value !== 'default') {
      return true;
    } else {
      return false;
    }
  }

  var chartFunc = new progressbar_js_dist_progressbar__WEBPACK_IMPORTED_MODULE_0___default.a.Circle($chart, {
    strokeWidth: 8,
    easing: 'linear',
    duration: 1400,
    color: '#52B69A',
    trailColor: '#F1F1F1',
    trailWidth: 8,
    svgStyle: null
  });
}

/***/ }),

/***/ "./resources/blocks/check-progress/check-progress.scss":
/*!*************************************************************!*\
  !*** ./resources/blocks/check-progress/check-progress.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/checkbox/checkbox.js":
/*!***********************************************!*\
  !*** ./resources/blocks/checkbox/checkbox.js ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/checkbox/checkbox.scss":
/*!*************************************************!*\
  !*** ./resources/blocks/checkbox/checkbox.scss ***!
  \*************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/counter/counter.js":
/*!*********************************************!*\
  !*** ./resources/blocks/counter/counter.js ***!
  \*********************************************/
/*! exports provided: counter */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "counter", function() { return counter; });
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var counters = Array.from(document.querySelectorAll('.counter'));

if (counters.length > 0) {
  var _iterator = _createForOfIteratorHelper(counters),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $counter = _step.value;
      counter($counter);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function counter($counter) {
  var $minus = $counter.querySelector('.counter__button--minus');
  var $plus = $counter.querySelector('.counter__button--plus');
  var $input = $counter.querySelector('.counter__input');
  $minus.addEventListener('click', function () {
    changeValue(-1);
  });
  $plus.addEventListener('click', function () {
    changeValue(1);
  });
  $input.addEventListener('input', function () {
    checkValue();
  });
  $input.addEventListener('change', function () {
    checkValue();
  });

  function checkValue() {
    var value = parseInt($input.value);

    if (isNaN(value)) {
      $input.value = 1;
    }
  }

  function changeValue(change) {
    var value = parseInt($input.value);
    value += change;

    if (value < 1) {
      value = 1;
    }

    $input.value = value;
  }
}

/***/ }),

/***/ "./resources/blocks/counter/counter.scss":
/*!***********************************************!*\
  !*** ./resources/blocks/counter/counter.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/custom-select/custom-select.js":
/*!*********************************************************!*\
  !*** ./resources/blocks/custom-select/custom-select.js ***!
  \*********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/classCallCheck */ "./node_modules/@babel/runtime/helpers/classCallCheck.js");
/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1__);



function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

function _classPrivateMethodGet(receiver, privateSet, fn) { if (!privateSet.has(receiver)) { throw new TypeError("attempted to get private field on non-instance"); } return fn; }

var selects = Array.from(document.querySelectorAll('.custom-select'));
window.selectsFunctions = new Map();

var _getSelectData = /*#__PURE__*/new WeakSet();

var _setHtml = /*#__PURE__*/new WeakSet();

var _setup = /*#__PURE__*/new WeakSet();

var _setSelectHtml = /*#__PURE__*/new WeakSet();

var CustomSelect = /*#__PURE__*/function () {
  /* Example options
  {
      selectClass:'select',     // String
      $select:document.getElementsByClassName(this.selectClass)[0],       // node element
      customSelectClass:'custom-select',     // String
  }
   */
  function CustomSelect(options) {
    _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0___default()(this, CustomSelect);

    _setSelectHtml.add(this);

    _setup.add(this);

    _setHtml.add(this);

    _getSelectData.add(this);

    this.selectClass = options && options.selectClass ? options.selectClass : 'select';
    this.$select = options && options.$select ? options.$select : document.getElementsByClassName(this.selectClass)[0];
    this.customSelectClass = options && options.customSelectClass ? options.customSelectClass : 'custom-select';
    this.openClass = options && options.openClass ? options.openClass : this.customSelectClass + '--open';
    this.selectedClass = options && options.selectedClass ? options.selectedClass : this.customSelectClass + '--selected';
    this.itemClass = options && options.itemClass ? options.itemClass : this.customSelectClass + '__item';
    this.selectedItemClass = options && options.selectedItemClass ? options.selectedItemClass : this.itemClass + '--selected';
    this.disabledItemClass = options && options.disabledItemClass ? options.disabledItemClass : this.itemClass + '--disabled';
    this.$customSelect = document.createElement('div');
    this.current = null;
    this.options = Array.from(this.$select.getElementsByTagName('option'));
    this.changeEvent = new Event('change');
    this.data = _classPrivateMethodGet(this, _getSelectData, _getSelectData2).call(this);
    this.init();
  }

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1___default()(CustomSelect, [{
    key: "init",
    value: function init() {
      this.$select.parentElement.appendChild(this.$customSelect);
      this.$customSelect.classList.add(this.customSelectClass);
      this.$customSelect.appendChild(this.$select);

      _classPrivateMethodGet(this, _setHtml, _setHtml2).call(this);
    }
  }, {
    key: "clickHandler",
    value: function clickHandler(event) {
      var _this = this;

      var isSelectClick = function isSelectClick(click) {
        if (click === _this.$customSelect) {
          return true;
        } else if (click.closest('.' + _this.customSelectClass) && click.closest('.' + _this.customSelectClass) === _this.$customSelect) {
          return true;
        } else {
          return false;
        }
      };

      if (isSelectClick(event.target)) {
        var type = event.target.dataset.selectType;

        if (type === 'button') {
          this.toggle();
        } else if (type === 'value') {
          if (!event.target.classList.contains(this.disabledItemClass)) {
            this.select(event.target.dataset.selectIndex);
            this.close();
          }
        }
      } else {
        this.close();
      }
    }
  }, {
    key: "changeHandler",
    value: function changeHandler(event) {
      var _this2 = this;

      this.options = Array.from(this.$select.getElementsByTagName('option'));
      this.options.map(function (item, index) {
        var value;

        if (item.hasAttribute('value')) {
          value = item.getAttribute('value');
        } else {
          value = item.innerText;
        }

        if (value === _this2.$select.value) {
          _classPrivateMethodGet(_this2, _setSelectHtml, _setSelectHtml2).call(_this2, index);
        }
      });

      if (this.$select.value === 'default') {
        this.$customSelect.classList.remove(this.selectedClass);
      } else {
        this.$customSelect.classList.add(this.selectedClass);
      }
    }
  }, {
    key: "select",
    value: function select(index) {
      this.current = index;

      _classPrivateMethodGet(this, _setSelectHtml, _setSelectHtml2).call(this, index);

      this.$select.value = this.options[index].value;
      this.$select.dispatchEvent(this.changeEvent);
    }
  }, {
    key: "toggle",
    value: function toggle() {
      if (this.$customSelect.classList.contains(this.openClass)) {
        this.close();
      } else {
        this.open();
      }
    }
  }, {
    key: "open",
    value: function open() {
      this.$customSelect.classList.add(this.openClass);
    }
  }, {
    key: "close",
    value: function close() {
      this.$customSelect.classList.remove(this.openClass);
    } // TODO: Сделать рефреш

  }]);

  return CustomSelect;
}();

function _getSelectData2() {
  var _this3 = this;

  this.options = Array.from(this.$select.getElementsByTagName('option'));
  var optionsArray = new Map();
  this.options.map(function (item, index) {
    var value = item.hasAttribute('value') ? item.getAttribute('value') : item.innerText;

    if (item.hasAttribute('selected')) {
      _this3.current = index;
    }

    var option = {
      name: item.innerText,
      selected: item.hasAttribute('selected'),
      disabled: item.hasAttribute('disabled'),
      hidden: item.hasAttribute('hidden'),
      index: index
    };
    optionsArray.set('index' + option.index, option);
  });

  if (this.current === null) {
    this.current = optionsArray.get('index' + 0).index;
  }

  return optionsArray;
}

function _setHtml2() {
  var list = '';

  var _iterator = _createForOfIteratorHelper(this.data.values()),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var item = _step.value;

      if (!item.hidden) {
        var classDisabled = '';
        var classSelected = '';

        if (item.selected) {
          classSelected = this.selectedItemClass;
        }

        if (item.disabled) {
          classDisabled = this.disabledItemClass;
        }

        list += "<div data-select-index=\"".concat(item.index, "\" data-select-type=\"value\" class=\"").concat(this.customSelectClass, "__item ").concat(classDisabled, "\">").concat(item.name, "</div>");
      }
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }

  var template = "\n            <div data-select-type=\"button\" class=\"".concat(this.customSelectClass, "__input\">\n                <div data-select-type=\"button\" class=\"").concat(this.customSelectClass, "__input-name\">").concat(this.data.get('index' + this.current).name, "</div>\n                <div data-select-type=\"button\" class=\"").concat(this.customSelectClass, "__input-icon\"></div>\n            </div>\n            <div data-select-type=\"button\" class=\"").concat(this.customSelectClass, "__list\">\n                ").concat(list, "\n            </div>\n        ");
  this.$customSelect.insertAdjacentHTML('beforeEnd', template);

  _classPrivateMethodGet(this, _setup, _setup2).call(this);
}

function _setup2() {
  this.clickHandler = this.clickHandler.bind(this);
  this.changeHandler = this.changeHandler.bind(this);
  document.addEventListener('click', this.clickHandler);
  this.$select.addEventListener('change', this.changeHandler);
  this.$name = this.$customSelect.querySelector('.' + this.customSelectClass + '__input-name');
  this.$items = this.$customSelect.querySelectorAll('.' + this.customSelectClass + '__item');
}

function _setSelectHtml2(index) {
  var _this4 = this;

  this.$name.innerText = this.data.get('index' + index).name;
  this.$items.forEach(function ($item) {
    if ($item.dataset.selectIndex === index) {
      $item.classList.add(_this4.selectedItemClass);
    } else {
      $item.classList.remove(_this4.selectedItemClass);
    }
  });
}

if (selects.length > 0) {
  for (var index = 0; index < selects.length; index++) {
    var $select = selects[index];

    if (selects[index].id !== '') {
      window.selectsFunctions.set(selects[index].id, new CustomSelect({
        $select: $select,
        customSelectClass: 'custom-select'
      }));
    } else {
      window.selectsFunctions.set('i' + index, new CustomSelect({
        $select: $select,
        customSelectClass: 'custom-select'
      }));
    }
  }
}

/***/ }),

/***/ "./resources/blocks/custom-select/custom-select.scss":
/*!***********************************************************!*\
  !*** ./resources/blocks/custom-select/custom-select.scss ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/filter/filter.js":
/*!*******************************************!*\
  !*** ./resources/blocks/filter/filter.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var filters = Array.from(document.querySelectorAll('.filter'));

if (filters.length > 0) {
  var _iterator = _createForOfIteratorHelper(filters),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $filter = _step.value;
      toggleFilter($filter);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function toggleFilter($wrapper) {
  var checkboxWrapperClass = '.filter__checkbox';
  var checkboxes = Array.from($wrapper.querySelectorAll(checkboxWrapperClass + ' input'));
  var items = Array.from($wrapper.querySelectorAll('.filter__item'));
  var itemHideClass = 'filter__item--hide';

  for (var _i = 0, _checkboxes = checkboxes; _i < _checkboxes.length; _i++) {
    var $checkbox = _checkboxes[_i];
    $checkbox.addEventListener('change', function () {
      filterItems();
    });
  }

  function filterItems() {
    var activeValues = [];

    var _iterator2 = _createForOfIteratorHelper(checkboxes),
        _step2;

    try {
      for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
        var _$checkbox = _step2.value;

        if (_$checkbox.checked) {
          activeValues.push(_$checkbox.closest(checkboxWrapperClass).dataset.filter);
        }
      }
    } catch (err) {
      _iterator2.e(err);
    } finally {
      _iterator2.f();
    }

    if (activeValues.length === 0) {
      showAllItems();
    } else {
      showSelectedItems(activeValues);
    }
  }

  function showAllItems() {
    var _iterator3 = _createForOfIteratorHelper(items),
        _step3;

    try {
      for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
        var $item = _step3.value;
        $item.classList.remove(itemHideClass);
      }
    } catch (err) {
      _iterator3.e(err);
    } finally {
      _iterator3.f();
    }
  }

  function showSelectedItems(values) {
    var _iterator4 = _createForOfIteratorHelper(items),
        _step4;

    try {
      for (_iterator4.s(); !(_step4 = _iterator4.n()).done;) {
        var $item = _step4.value;
        var matches = [];

        var _iterator5 = _createForOfIteratorHelper(values),
            _step5;

        try {
          for (_iterator5.s(); !(_step5 = _iterator5.n()).done;) {
            var value = _step5.value;

            var _iterator6 = _createForOfIteratorHelper($item.dataset.filter.split(', ')),
                _step6;

            try {
              for (_iterator6.s(); !(_step6 = _iterator6.n()).done;) {
                var dataValue = _step6.value;

                if (value === dataValue) {
                  matches.push(true);
                }
              }
            } catch (err) {
              _iterator6.e(err);
            } finally {
              _iterator6.f();
            }
          }
        } catch (err) {
          _iterator5.e(err);
        } finally {
          _iterator5.f();
        }

        if (matches.length !== values.length) {
          $item.classList.add(itemHideClass);
        } else {
          $item.classList.remove(itemHideClass);
        }
      }
    } catch (err) {
      _iterator4.e(err);
    } finally {
      _iterator4.f();
    }
  }
}

/***/ }),

/***/ "./resources/blocks/filter/filter.scss":
/*!*********************************************!*\
  !*** ./resources/blocks/filter/filter.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/footer/footer.js":
/*!*******************************************!*\
  !*** ./resources/blocks/footer/footer.js ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/footer/footer.scss":
/*!*********************************************!*\
  !*** ./resources/blocks/footer/footer.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/form-check/form-check.js":
/*!***************************************************!*\
  !*** ./resources/blocks/form-check/form-check.js ***!
  \***************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var form_validation_expandable__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! form-validation-expandable */ "./node_modules/form-validation-expandable/dist/script.js");
/* harmony import */ var form_validation_expandable__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(form_validation_expandable__WEBPACK_IMPORTED_MODULE_0__);

var forms = Array.from(document.querySelectorAll('.form-check'));
window.formsArray = new Map();

if (forms.length > 0) {
  for (var index = 0; index < forms.length; index++) {
    if (forms[index].id !== '') {
      window.formsArray.set(forms[index].id, new form_validation_expandable__WEBPACK_IMPORTED_MODULE_0___default.a({
        $form: forms[index]
      }));
      window.formsArray.get(forms[index].id).init();
    } else {
      window.formsArray.set('i' + index, new form_validation_expandable__WEBPACK_IMPORTED_MODULE_0___default.a({
        $form: forms[index]
      }));
      window.formsArray.get('i' + index).init();
    }
  }
}

/***/ }),

/***/ "./resources/blocks/form-check/form-check.scss":
/*!*****************************************************!*\
  !*** ./resources/blocks/form-check/form-check.scss ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/form/form.js":
/*!***************************************!*\
  !*** ./resources/blocks/form/form.js ***!
  \***************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _placeholder_placeholder__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../placeholder/placeholder */ "./resources/blocks/placeholder/placeholder.js");
/* harmony import */ var _tooltip_tooltip__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../tooltip/tooltip */ "./resources/blocks/tooltip/tooltip.js");
/* harmony import */ var _counter_counter__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../counter/counter */ "./resources/blocks/counter/counter.js");
/* harmony import */ var _upload_upload__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../upload/upload */ "./resources/blocks/upload/upload.js");
/* harmony import */ var _photo_upload_photo_upload__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../photo-upload/photo-upload */ "./resources/blocks/photo-upload/photo-upload.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }






var formsCopy = Array.from(document.querySelectorAll('.form__copy-wrapper'));

if (formsCopy.length > 0) {
  var _iterator = _createForOfIteratorHelper(formsCopy),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $formCopy = _step.value;
      copyForm($formCopy);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function copyForm($wrapper) {
  var $addButton = $wrapper.querySelector('.form__copy-button');
  var $itemsWrapper = $wrapper.querySelector('.form__copy-items');
  $addButton.addEventListener('click', createNewItem);

  function createNewItem() {
    var $newItem = $wrapper.querySelector('.form__copy-item').cloneNode(true);
    $newItem.querySelectorAll('input').forEach(function ($input) {
      $input.value = '';
    });
    $newItem.querySelectorAll('.placeholder').forEach(function ($placeholder) {
      Object(_placeholder_placeholder__WEBPACK_IMPORTED_MODULE_0__["checkEmptyInput"])($placeholder);
    });
    $itemsWrapper.appendChild($newItem);
  }
}

/***/ }),

/***/ "./resources/blocks/form/form.scss":
/*!*****************************************!*\
  !*** ./resources/blocks/form/form.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/header-buttons/header-buttons.js":
/*!***********************************************************!*\
  !*** ./resources/blocks/header-buttons/header-buttons.js ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/header-buttons/header-buttons.scss":
/*!*************************************************************!*\
  !*** ./resources/blocks/header-buttons/header-buttons.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/header-checkbox/header-checkbox.js":
/*!*************************************************************!*\
  !*** ./resources/blocks/header-checkbox/header-checkbox.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/header-checkbox/header-checkbox.scss":
/*!***************************************************************!*\
  !*** ./resources/blocks/header-checkbox/header-checkbox.scss ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/header/header.js":
/*!*******************************************!*\
  !*** ./resources/blocks/header/header.js ***!
  \*******************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var search_row_hints__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! search-row-hints */ "./node_modules/search-row-hints/dist/script.js");
/* harmony import */ var search_row_hints__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(search_row_hints__WEBPACK_IMPORTED_MODULE_0__);

var $searchBox = document.getElementsByClassName('header__search-box')[0];
var placeholder = 'Более 10 000 товаров оптом';

if (window.viewportOptions.viewportWidth < mobileWidth) {
  placeholder = 'Поиск';
}

window.searchBox = new search_row_hints__WEBPACK_IMPORTED_MODULE_0___default.a({
  $wrapper: $searchBox,
  mainClass: 'search-box',
  placeholderText: placeholder,
  buttonText: ' '
});
var $button = document.getElementsByClassName('search-box__button')[0];
var template = "\n    <svg class=\"header__search-row-button-icon\">\n        <use xlink:href=\"../images/icons/icons-sprite.svg#zoom\"></use>\n    </svg>";
$button.insertAdjacentHTML('beforeEnd', template);
var $header = document.getElementsByClassName('header')[0];
var headerScrollClass = 'header--scroll';

function setScrollClass() {
  if (window.scrollY > 0) {
    $header.classList.add(headerScrollClass);
  } else {
    $header.classList.remove(headerScrollClass);
  }
}

setScrollClass();
window.addEventListener('scroll', function () {
  setScrollClass();
});

/***/ }),

/***/ "./resources/blocks/header/header.scss":
/*!*********************************************!*\
  !*** ./resources/blocks/header/header.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/hint/hint.scss":
/*!*****************************************!*\
  !*** ./resources/blocks/hint/hint.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/input/input.js":
/*!*****************************************!*\
  !*** ./resources/blocks/input/input.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/input/input.scss":
/*!*******************************************!*\
  !*** ./resources/blocks/input/input.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/layout/layout.scss":
/*!*********************************************!*\
  !*** ./resources/blocks/layout/layout.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/lead-search/lead-search.scss":
/*!*******************************************************!*\
  !*** ./resources/blocks/lead-search/lead-search.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/lead/lead.scss":
/*!*****************************************!*\
  !*** ./resources/blocks/lead/lead.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/logo/logo.scss":
/*!*****************************************!*\
  !*** ./resources/blocks/logo/logo.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/main-banner/main-banner.js":
/*!*****************************************************!*\
  !*** ./resources/blocks/main-banner/main-banner.js ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/main-banner/main-banner.scss":
/*!*******************************************************!*\
  !*** ./resources/blocks/main-banner/main-banner.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/main-navigation/main-navigation.scss":
/*!***************************************************************!*\
  !*** ./resources/blocks/main-navigation/main-navigation.scss ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/manufacturer-preview/manufacturer-preview.scss":
/*!*************************************************************************!*\
  !*** ./resources/blocks/manufacturer-preview/manufacturer-preview.scss ***!
  \*************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/manufacturer/manufacturer.scss":
/*!*********************************************************!*\
  !*** ./resources/blocks/manufacturer/manufacturer.scss ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/min-max-slider/min-max-slider.js":
/*!***********************************************************!*\
  !*** ./resources/blocks/min-max-slider/min-max-slider.js ***!
  \***********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var nouislider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! nouislider */ "./node_modules/nouislider/dist/nouislider.js");
/* harmony import */ var nouislider__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(nouislider__WEBPACK_IMPORTED_MODULE_0__);
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }


var minMaxSliders = Array.from(document.querySelectorAll('.min-max-slider'));

if (minMaxSliders.length > 0) {
  var _iterator = _createForOfIteratorHelper(minMaxSliders),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $minMaxSlider = _step.value;
      minMaxSlider($minMaxSlider);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function minMaxSlider($wrapper) {
  var $minInput = $wrapper.querySelector('.min-max-slider__input--min');
  var $maxInput = $wrapper.querySelector('.min-max-slider__input--max');
  var $minMaxRange = $wrapper.querySelector('.min-max-slider__range');
  var options = $minMaxRange.dataset;
  var minValue = parseInt(options.min);
  var maxValue = parseInt(options.max);
  var width = $wrapper.getBoundingClientRect().width;
  var step = parseInt((maxValue - minValue) / width);
  var changeEvent = new Event('change');
  nouislider__WEBPACK_IMPORTED_MODULE_0___default.a.create($minMaxRange, {
    start: [minValue, maxValue],
    connect: true,
    step: step,
    range: {
      'min': minValue,
      'max': maxValue
    }
  });
  $minMaxRange.noUiSlider.on('slide', function (event) {
    setInputValue(event);
  });
  $minInput.addEventListener('input', setSliderValue);
  $maxInput.addEventListener('input', setSliderValue);

  function setInputValue(values) {
    var currentMinValue = parseInt(values[0]);
    var currentMaxValue = parseInt(values[1]);
    $minInput.value = currentMinValue;
    $maxInput.value = currentMaxValue;
    $minInput.dispatchEvent(changeEvent);
    $maxInput.dispatchEvent(changeEvent);
  }

  function setSliderValue() {
    var currentMinValue = parseInt($minInput.value);
    var currentMaxValue = parseInt($maxInput.value);

    if (isNaN(currentMinValue) || currentMinValue < minValue) {
      currentMinValue = minValue;
    }

    if (isNaN(currentMaxValue) || currentMaxValue > maxValue) {
      currentMaxValue = maxValue;
    }

    $minMaxRange.noUiSlider.set([currentMinValue, currentMaxValue]);
  }
}

/***/ }),

/***/ "./resources/blocks/min-max-slider/min-max-slider.scss":
/*!*************************************************************!*\
  !*** ./resources/blocks/min-max-slider/min-max-slider.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/modal/modal.js":
/*!*****************************************!*\
  !*** ./resources/blocks/modal/modal.js ***!
  \*****************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @babel/runtime/helpers/classCallCheck */ "./node_modules/@babel/runtime/helpers/classCallCheck.js");
/* harmony import */ var _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @babel/runtime/helpers/createClass */ "./node_modules/@babel/runtime/helpers/createClass.js");
/* harmony import */ var _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @babel/runtime/helpers/defineProperty */ "./node_modules/@babel/runtime/helpers/defineProperty.js");
/* harmony import */ var _babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2__);




function _classPrivateMethodGet(receiver, privateSet, fn) { if (!privateSet.has(receiver)) { throw new TypeError("attempted to get private field on non-instance"); } return fn; }

var _setup = /*#__PURE__*/new WeakSet();

var Modals = /*#__PURE__*/function () {
  function Modals(options) {
    _babel_runtime_helpers_classCallCheck__WEBPACK_IMPORTED_MODULE_0___default()(this, Modals);

    _setup.add(this);

    this.init();
  }

  _babel_runtime_helpers_createClass__WEBPACK_IMPORTED_MODULE_1___default()(Modals, [{
    key: "init",
    value: function init() {
      _classPrivateMethodGet(this, _setup, _setup2).call(this);
    }
  }, {
    key: "clickOpenHandler",
    value: function clickOpenHandler(event) {
      if (event.target.dataset.modalOpen) {
        this.open(event.target.dataset.modalOpen);
      } else {
        this.open(event.target.closest('[data-modal-open]').dataset.modalOpen);
      }
    }
  }, {
    key: "clickCloseHandler",
    value: function clickCloseHandler() {
      this.close();
    }
  }, {
    key: "open",
    value: function open(id) {
      this.setCenter(id);
      this.modalsArray.get(id).classList.add(Modals.modalShowClass);
    }
  }, {
    key: "close",
    value: function close() {
      this.$modals.forEach(function ($modal) {
        $modal.classList.remove(Modals.modalOpenClass);
      });
    }
  }, {
    key: "setCenter",
    value: function setCenter(id) {
      this.modalsArray.get(id).classList.add(Modals.modalOpenClass);
      var modalHeight = this.modalsArray.get(id).offsetHeight;
      var viewportHeight = window.viewportOptions.viewportHeight;
      var top = viewportHeight / 2 - modalHeight / 2;
      this.modalsArray.get(id).style.top = top + 'px';
    }
  }]);

  return Modals;
}();

function _setup2() {
  var _this = this;

  this.$modals = Array.from(document.getElementsByClassName(Modals.modalClass));
  this.modalsArray = new Map();
  this.$modals.forEach(function ($modal) {
    var background = '<div class="modal__background" data-modal-close></div>';
    $modal.insertAdjacentHTML('afterbegin', background);

    _this.modalsArray.set($modal.id, $modal);
  });
  this.$openButtons = document.querySelectorAll('[data-modal-open]');
  this.$closeButtons = document.querySelectorAll('[data-modal-close]');
  this.clickOpenHandler = this.clickOpenHandler.bind(this);
  this.clickCloseHandler = this.clickCloseHandler.bind(this);
  this.$openButtons.forEach(function ($button) {
    $button.addEventListener('click', _this.clickOpenHandler);
  });
  this.$closeButtons.forEach(function ($button) {
    $button.addEventListener('click', _this.clickCloseHandler);
  });
}

_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2___default()(Modals, "modalClass", 'modal');

_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2___default()(Modals, "modalOpenClass", 'modal--open');

_babel_runtime_helpers_defineProperty__WEBPACK_IMPORTED_MODULE_2___default()(Modals, "modalShowClass", 'modal--show');

window.modals = new Modals();

/***/ }),

/***/ "./resources/blocks/modal/modal.scss":
/*!*******************************************!*\
  !*** ./resources/blocks/modal/modal.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/offer/offer.scss":
/*!*******************************************!*\
  !*** ./resources/blocks/offer/offer.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/options/options.scss":
/*!***********************************************!*\
  !*** ./resources/blocks/options/options.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/photo-upload/photo-upload.js":
/*!*******************************************************!*\
  !*** ./resources/blocks/photo-upload/photo-upload.js ***!
  \*******************************************************/
/*! exports provided: setPreviewImg, setPreviewImgStar */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setPreviewImg", function() { return setPreviewImg; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "setPreviewImgStar", function() { return setPreviewImgStar; });
/* harmony import */ var _upload_upload__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../upload/upload */ "./resources/blocks/upload/upload.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }


function setPreviewImg(options) {
  var name = options.name;
  var src = options.src;
  var html = "\n        <div class=\"photo-upload__preview-wrapper\" data-upload-preview>\n            <div class=\"photo-upload__preview-item\">\n                <img class=\"photo-upload__preview\" src=\"".concat(src, "\">\n            </div>\n        </div>\n    ");
  return html;
}
function setPreviewImgStar(options) {
  var name = options.name;
  var src = options.src;
  var html = "\n        <div class=\"photo-upload__preview-wrapper\" data-upload-preview>\n            <div class=\"photo-upload__preview-star\">\n                <svg class=\"photo-upload__preview-star-img\">\n                    <use xlink:href=\"../images/icons/icons-sprite.svg#star\"></use>\n                </svg>\n            </div>\n            <div class=\"photo-upload__preview-item\">\n                <img class=\"photo-upload__preview\" src=\"".concat(src, "\">\n            </div>\n        </div>\n    ");
  return html;
}
var photoUploads = Array.from(document.querySelectorAll('.photo-upload'));

if (photoUploads.length > 0) {
  var _iterator = _createForOfIteratorHelper(photoUploads),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $photoUpload = _step.value;
      var func = void 0;

      if ($photoUpload.classList.contains('photo-upload--stars')) {
        func = setPreviewImgStar;
      } else {
        func = setPreviewImg;
      }

      Object(_upload_upload__WEBPACK_IMPORTED_MODULE_0__["upload"])({
        $wrapper: $photoUpload,
        $input: $photoUpload.querySelector('.photo-upload__input'),
        $previewWrapper: $photoUpload.querySelector('.photo-upload__items'),
        previewWrapperEmptyClass: 'chat__form-file-preview--empty',
        $filePreviewWrapper: $photoUpload.querySelector('.photo-upload__items'),
        $imgPreviewWrapper: $photoUpload.querySelector('.photo-upload__items'),
        filePreviewCreateFunction: func,
        imgPreviewCreateFunction: func
      });
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

document.addEventListener('click', function (event) {
  var $starButton;

  if (event.target.classList.contains('photo-upload__preview-star')) {
    $starButton = event.target;
  } else if (event.target.closest('.photo-upload__preview-star')) {
    $starButton = event.target.closest('.photo-upload__preview-star');
  } else {
    return;
  }

  for (var _i = 0, _Array$from = Array.from(document.querySelectorAll('.photo-upload__preview-star')); _i < _Array$from.length; _i++) {
    var $star = _Array$from[_i];
    $star.classList.remove('photo-upload__preview-star--active');
  }

  $starButton.classList.add('photo-upload__preview-star--active');
});

/***/ }),

/***/ "./resources/blocks/photo-upload/photo-upload.scss":
/*!*********************************************************!*\
  !*** ./resources/blocks/photo-upload/photo-upload.scss ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/photo/photo.js":
/*!*****************************************!*\
  !*** ./resources/blocks/photo/photo.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/photo/photo.scss":
/*!*******************************************!*\
  !*** ./resources/blocks/photo/photo.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/placeholder/placeholder.js":
/*!*****************************************************!*\
  !*** ./resources/blocks/placeholder/placeholder.js ***!
  \*****************************************************/
/*! exports provided: checkEmptyInput */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "checkEmptyInput", function() { return checkEmptyInput; });
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var placeholders = Array.from(document.querySelectorAll('.placeholder'));

if (placeholders.length > 0) {
  var _iterator = _createForOfIteratorHelper(placeholders),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $placeholder = _step.value;
      checkEmptyInput($placeholder);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function checkEmptyInput($wrapper) {
  var not_empty_class = 'placeholder--not-empty';
  var empty_class = 'placeholder--empty';
  var $placeholder;
  var $placeholder_item;
  var $input;

  if (Array.from($wrapper.querySelectorAll('.placeholder__input')).length > 0) {
    $input = $wrapper.querySelector('.placeholder__input');
    $input.addEventListener('input', checkVal);
    $input.addEventListener('change', checkVal);
    checkVal();
  } else {
    $input = $wrapper.querySelector('.placeholder__select');
    $input.addEventListener('change', checkValSelect);
    checkValSelect();
  }

  function checkVal() {
    $placeholder = $input.closest('.placeholder');
    $placeholder_item = $placeholder.querySelector('.placeholder__item');

    if ($input.value.length > 0) {
      $placeholder.classList.add(not_empty_class);
      $placeholder.classList.remove(empty_class);
    } else {
      $placeholder.classList.remove(not_empty_class);
      $placeholder.classList.add(empty_class);
    }
  }

  function checkValSelect() {
    $placeholder = $input.closest('.placeholder');
    $placeholder_item = $placeholder.querySelector('.placeholder__item');

    if ($input.value !== 'default') {
      $placeholder.classList.add(not_empty_class);
      $placeholder.classList.remove(empty_class);
    } else {
      $placeholder.classList.remove(not_empty_class);
      $placeholder.classList.add(empty_class);
    }
  }
}

/***/ }),

/***/ "./resources/blocks/placeholder/placeholder.scss":
/*!*******************************************************!*\
  !*** ./resources/blocks/placeholder/placeholder.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/product-cart/product-cart.js":
/*!*******************************************************!*\
  !*** ./resources/blocks/product-cart/product-cart.js ***!
  \*******************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var tiny_slider_src_tiny_slider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tiny-slider/src/tiny-slider */ "./node_modules/tiny-slider/src/tiny-slider.js");


function slidePreview() {
  var prevSlide = document.querySelector('.product-cart__slider-navigation-button--prev');
  var nextSlide = document.querySelector('.product-cart__slider-navigation-button--next');
  var slider = Object(tiny_slider_src_tiny_slider__WEBPACK_IMPORTED_MODULE_0__["tns"])({
    container: '.product-cart__slider',
    loop: true,
    axis: 'vertical',
    items: 6,
    slideBy: 1,
    nav: false,
    mouseDrag: true,
    gutter: 10,
    autoplayButtonOutput: false,
    speed: 500,
    controls: false,
    responsive: {// 640: {
      //     items: 6
      // },
      // 414: {
      //     items: 3
      // },
      // 0: {
      //     items: 2,
      //     gutter: 0,
      // }
    }
  });
  prevSlide.addEventListener('click', function () {
    slider.goTo('prev');
  });
  nextSlide.addEventListener('click', function () {
    slider.goTo('next');
  });
}

function setPreviewImg() {
  var buttonClass = 'product-cart__slide-img';
  var $preview = document.getElementsByClassName('product-cart__img-preview')[0];
  document.addEventListener('click', function (event) {
    var src;

    if (event.target.classList.contains(buttonClass)) {
      src = event.target.dataset.previewUrl;
    } else if (event.target.closest('.' + buttonClass)) {
      src = event.target.closest('.' + buttonClass).dataset.previewUrl;
    } else {
      return;
    }

    $preview.src = src;
  });
}

if (document.getElementsByClassName('product-cart__slide-img').length > 0) {
  setPreviewImg();
  slidePreview();
}

/***/ }),

/***/ "./resources/blocks/product-cart/product-cart.scss":
/*!*********************************************************!*\
  !*** ./resources/blocks/product-cart/product-cart.scss ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/product-img-slider/product-img-slider.js":
/*!*******************************************************************!*\
  !*** ./resources/blocks/product-img-slider/product-img-slider.js ***!
  \*******************************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var tiny_slider_src_tiny_slider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tiny-slider/src/tiny-slider */ "./node_modules/tiny-slider/src/tiny-slider.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }


var productImgSliderButtons = Array.from(document.querySelectorAll('[data-product-img-slider]'));

if (productImgSliderButtons.length > 0) {
  productImgSlider();
}

function productImgSlider() {
  var prevSlide = document.querySelector('.product-img-slider__button--prev');
  var nextSlide = document.querySelector('.product-img-slider__button--next');
  var buttonHideClass = 'product-img-slider__button--hide';

  var _iterator = _createForOfIteratorHelper(productImgSliderButtons),
      _step;

  try {
    var _loop = function _loop() {
      var productImgSliderButton = _step.value;
      productImgSliderButton.addEventListener('click', function (event) {
        setSlider(productImgSliderButton.dataset.productImgSlider.split(','));
      });
    };

    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      _loop();
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }

  function setSlideTemplate(src) {
    return "\n            <div class='product-img-slider__item'>\n                <svg class=\"product-img-slider__item-loading\">\n                    <use xlink:href=\"../images/icons/icons-sprite.svg#loading\"></use>\n                </svg>\n                <img src='".concat(src, "' class='product-img-slider__item-img'>\n            </div>\n        ");
  }

  function setSlider(images) {
    if (images.length > 1) {
      prevSlide.classList.remove(buttonHideClass);
      nextSlide.classList.remove(buttonHideClass);
    } else {
      prevSlide.classList.add(buttonHideClass);
      nextSlide.classList.add(buttonHideClass);
    }

    slider.destroy();
    var checkDestroy = setInterval(function () {
      if (!document.querySelector('.product-img-slider__items').classList.contains('tns-slider')) {
        clearInterval(checkDestroy);
        updateSlider();
      }
    }, 50);

    function updateSlider() {
      var sliderItems = document.querySelector('.product-img-slider__items');
      sliderItems.innerHTML = '';
      var slides = '';

      var _iterator2 = _createForOfIteratorHelper(images),
          _step2;

      try {
        for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
          var image = _step2.value;
          slides += setSlideTemplate(image);
        }
      } catch (err) {
        _iterator2.e(err);
      } finally {
        _iterator2.f();
      }

      sliderItems.innerHTML = slides;
      slider = slider.rebuild();
      window.modals.open('product-img-slider-modal');
    }
  }

  var slider = Object(tiny_slider_src_tiny_slider__WEBPACK_IMPORTED_MODULE_0__["tns"])({
    container: '.product-img-slider__items',
    loop: true,
    items: 1,
    slideBy: 1,
    nav: false,
    mouseDrag: true,
    gutter: 10,
    autoplayButtonOutput: false,
    speed: 500,
    controls: false,
    responsive: {// 640: {
      //     items: 6
      // },
      // 414: {
      //     items: 3
      // },
      // 0: {
      //     items: 2,
      //     gutter: 0,
      // }
    }
  });
  prevSlide.addEventListener('click', function () {
    slider.goTo('prev');
  });
  nextSlide.addEventListener('click', function () {
    slider.goTo('next');
  });
}

/***/ }),

/***/ "./resources/blocks/product-img-slider/product-img-slider.scss":
/*!*********************************************************************!*\
  !*** ./resources/blocks/product-img-slider/product-img-slider.scss ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/product-in-tender/product-in-tender.js":
/*!*****************************************************************!*\
  !*** ./resources/blocks/product-in-tender/product-in-tender.js ***!
  \*****************************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _placeholder_placeholder__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../placeholder/placeholder */ "./resources/blocks/placeholder/placeholder.js");
/* harmony import */ var _tooltip_tooltip__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../tooltip/tooltip */ "./resources/blocks/tooltip/tooltip.js");
/* harmony import */ var _counter_counter__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../counter/counter */ "./resources/blocks/counter/counter.js");
/* harmony import */ var _upload_upload__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ../upload/upload */ "./resources/blocks/upload/upload.js");
/* harmony import */ var _photo_upload_photo_upload__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(/*! ../photo-upload/photo-upload */ "./resources/blocks/photo-upload/photo-upload.js");
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }






var productsInTender = Array.from(document.querySelectorAll('.product-in-tender'));

if (productsInTender.length > 0) {
  var _iterator = _createForOfIteratorHelper(productsInTender),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $productInTender = _step.value;
      productInTenderHandler($productInTender);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function productInTenderHandler($wrapper) {
  var $addButton = $wrapper.querySelector('.product-in-tender__add-product');
  var removeButtons = Array.from($wrapper.querySelectorAll('.product-in-tender__item-header-delete'));
  var $itemsWrapper = $wrapper.querySelector('.product-in-tender__items');
  $addButton.addEventListener('click', createNewProduct);

  for (var _i = 0, _removeButtons = removeButtons; _i < _removeButtons.length; _i++) {
    var $removeButton = _removeButtons[_i];
    $removeButton.addEventListener('click', deleteProduct);
  }

  function deleteProduct() {
    console.log(this);
    this.closest('.product-in-tender__item').remove();
    setProductNumber();
  }

  function createNewProduct() {
    var $newProduct = $wrapper.querySelector('.product-in-tender__item').cloneNode(true);
    $newProduct.querySelectorAll('input').forEach(function ($input) {
      $input.value = '';
    });
    $newProduct.querySelector('textarea').value = '';
    $newProduct.querySelector('.counter__input').value = 100;
    $newProduct.querySelectorAll('.placeholder').forEach(function ($placeholder) {
      Object(_placeholder_placeholder__WEBPACK_IMPORTED_MODULE_0__["checkEmptyInput"])($placeholder);
    });
    var $removeButton = $newProduct.querySelector('.product-in-tender__item-header-delete');
    $removeButton.addEventListener('click', deleteProduct);
    Object(_tooltip_tooltip__WEBPACK_IMPORTED_MODULE_1__["toggleTooltip"])($newProduct.querySelector('.tooltip'));
    Object(_counter_counter__WEBPACK_IMPORTED_MODULE_2__["counter"])($newProduct.querySelector('.counter'));
    var $photoUpload = $newProduct.querySelector('.photo-upload');

    for (var _i2 = 0, _Array$from = Array.from($newProduct.querySelectorAll('[data-upload-preview]')); _i2 < _Array$from.length; _i2++) {
      var $preview = _Array$from[_i2];
      $preview.remove();
    }

    Object(_upload_upload__WEBPACK_IMPORTED_MODULE_3__["upload"])({
      $wrapper: $photoUpload,
      $input: $photoUpload.querySelector('.photo-upload__input'),
      $previewWrapper: $photoUpload.querySelector('.photo-upload__items'),
      previewWrapperEmptyClass: 'chat__form-file-preview--empty',
      $filePreviewWrapper: $photoUpload.querySelector('.photo-upload__items'),
      $imgPreviewWrapper: $photoUpload.querySelector('.photo-upload__items'),
      filePreviewCreateFunction: _photo_upload_photo_upload__WEBPACK_IMPORTED_MODULE_4__["setPreviewImg"],
      imgPreviewCreateFunction: _photo_upload_photo_upload__WEBPACK_IMPORTED_MODULE_4__["setPreviewImg"]
    });
    $itemsWrapper.appendChild($newProduct);
    window.formsArray.get('new-products-form').refresh();
    window.modals.setCenter($wrapper.closest('.modal').id);
    setProductNumber();
  }

  function setProductNumber() {
    var items = Array.from($wrapper.querySelectorAll('.product-in-tender__item'));

    for (var index = 0; index < items.length; index++) {
      var $number = items[index].querySelector('.product-in-tender__item-header-title-number');
      $number.innerHTML = index + 1;
    }
  }
}

/***/ }),

/***/ "./resources/blocks/product-in-tender/product-in-tender.scss":
/*!*******************************************************************!*\
  !*** ./resources/blocks/product-in-tender/product-in-tender.scss ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/product-preview/product-preview.js":
/*!*************************************************************!*\
  !*** ./resources/blocks/product-preview/product-preview.js ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/product-preview/product-preview.scss":
/*!***************************************************************!*\
  !*** ./resources/blocks/product-preview/product-preview.scss ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/products-grid/products-grid.scss":
/*!***********************************************************!*\
  !*** ./resources/blocks/products-grid/products-grid.scss ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/reviews/reviews.scss":
/*!***********************************************!*\
  !*** ./resources/blocks/reviews/reviews.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/search-box/search-box.js":
/*!***************************************************!*\
  !*** ./resources/blocks/search-box/search-box.js ***!
  \***************************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/search-box/search-box.scss":
/*!*****************************************************!*\
  !*** ./resources/blocks/search-box/search-box.scss ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/search-select/search-select.js":
/*!*********************************************************!*\
  !*** ./resources/blocks/search-select/search-select.js ***!
  \*********************************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var simple_custom_select__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! simple-custom-select */ "./node_modules/simple-custom-select/dist/script.js");
/* harmony import */ var simple_custom_select__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(simple_custom_select__WEBPACK_IMPORTED_MODULE_0__);

var $select = document.getElementsByClassName('search-select')[0];
window.select = new simple_custom_select__WEBPACK_IMPORTED_MODULE_0___default.a({
  $select: $select,
  customSelectClass: 'search-select'
});

/***/ }),

/***/ "./resources/blocks/search-select/search-select.scss":
/*!***********************************************************!*\
  !*** ./resources/blocks/search-select/search-select.scss ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/section/section.scss":
/*!***********************************************!*\
  !*** ./resources/blocks/section/section.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/selected-products/selected-products.scss":
/*!*******************************************************************!*\
  !*** ./resources/blocks/selected-products/selected-products.scss ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/social/social.scss":
/*!*********************************************!*\
  !*** ./resources/blocks/social/social.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/status-line/status-line.scss":
/*!*******************************************************!*\
  !*** ./resources/blocks/status-line/status-line.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/tabs/tabs.js":
/*!***************************************!*\
  !*** ./resources/blocks/tabs/tabs.js ***!
  \***************************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var tiny_slider_src_tiny_slider__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! tiny-slider/src/tiny-slider */ "./node_modules/tiny-slider/src/tiny-slider.js");


function toggleTabs(options) {
  /* Example options
  {
      toggleButtonsWrapperClass:'className',
      $toggleButtonsWrapper:node,
      toggleButtonClass:'className',
      $toggleButtons:HTMLCollections,
      toggleButtonActiveClass:'className',
       toggleItemsWrapperClass:'className',
      $toggleItemsWrapper:node,
      toggleItemsClass:'className',
      $toggleItems:HTMLCollections,
      toggleItemActiveClass:'className',
      toggleItemActiveEffectClass: 'className'
  }
   */
  var toggleButtonsWrapperClass = options && options.toggleButtonsWrapperClass ? options.toggleButtonsWrapperClass : 'tabs__toggle-buttons';
  var $toggleButtonsWrapper = options && options.$toggleButtonsWrapper ? options.$toggleButtonsWrapper : document.getElementsByClassName(toggleButtonsWrapperClass)[0];
  var toggleButtonClass = options && options.toggleButtonClass ? options.toggleButtonClass : 'tabs__toggle-button';
  var $toggleButtons = options && options.$toggleButtons ? options.$toggleButtons : $toggleButtonsWrapper.getElementsByClassName(toggleButtonClass);
  var toggleButtonActiveClass = options && options.toggleButtonActiveClass ? options.toggleButtonActiveClass : 'tabs__toggle-button--active';
  var toggleItemsWrapperClass = options && options.toggleItemsWrapperClass ? options.toggleItemsWrapperClass : 'tabs__toggle-items';
  var $toggleItemsWrapper = options && options.$toggleItemsWrapper ? options.$toggleItemsWrapper : document.getElementsByClassName(toggleItemsWrapperClass)[0];
  var toggleItemClass = options && options.toggleItemClass ? options.toggleItemClass : 'tabs__toggle-item';
  var $toggleItems = options && options.$toggleItems ? options.$toggleItems : $toggleItemsWrapper.getElementsByClassName(toggleItemClass);
  var toggleItemActiveClass = options && options.toggleItemActiveClass ? options.toggleItemActiveClass : 'tabs__toggle-item--active';
  var toggleItemActiveEffectClass = options && options.toggleItemActiveEffectClass ? options.toggleItemActiveEffectClass : 'tabs__toggle-item--active-effect';

  this.showItem = function (index) {
    showItem(index);
  };

  function hideItems() {
    for (var i = 0; i < $toggleItems.length; i++) {
      $toggleButtons[i].classList.remove(toggleButtonActiveClass);
      $toggleItems[i].classList.remove(toggleItemActiveClass, toggleItemActiveEffectClass);
    }
  }

  function showItem(index) {
    hideItems();
    $toggleButtons[index].classList.add(toggleButtonActiveClass);
    $toggleItems[index].classList.add(toggleItemActiveClass);
    var checkDisplay = setInterval(function () {
      var computedStyle = window.getComputedStyle($toggleItems[index], null);
      var displayState = computedStyle.getPropertyValue('display') !== 'none';

      if (displayState) {
        $toggleItems[index].classList.add(toggleItemActiveEffectClass);
        clearInterval(checkDisplay);
      }
    }, 1);
  } // showItem(0);


  $toggleButtonsWrapper.addEventListener('click', function (e) {
    var $target = e.target;
    var $clickButton = false;

    if ($target.classList.contains(toggleButtonClass)) {
      $clickButton = $target;
    } else if ($target.closest('.' + toggleButtonClass) !== null) {
      $clickButton = $target.closest('.' + toggleButtonClass);
    }

    if ($clickButton && !$clickButton.classList.contains(toggleButtonActiveClass)) {
      for (var i = 0; i < $toggleButtons.length; i++) {
        if ($toggleButtons[i] === $clickButton) {
          showItem(i);
        }
      }
    }
  });
}

if (Array.from(document.getElementsByClassName('tabs')).length > 0) {
  window.tabs = new toggleTabs();
  var $slider = document.getElementsByClassName('tabs__toggle-buttons')[0];
  setTabsSlider($slider);
}

function setTabsSlider($slider) {
  var sliderNav = $slider.closest('.tabs').getElementsByClassName('tabs__toggle-nav')[0];
  var slider = Object(tiny_slider_src_tiny_slider__WEBPACK_IMPORTED_MODULE_0__["tns"])({
    container: $slider,
    items: 1,
    slideBy: 1,
    nav: false,
    mouseDrag: true,
    loop: false,
    speed: 300,
    controls: true,
    controlsContainer: sliderNav,
    disable: false,
    responsive: {
      1280: {
        disable: true
      }
    }
  });

  var customizedFunction = function customizedFunction(info) {
    var currentIndex = info.displayIndex - 1;
    window.tabs.showItem(currentIndex);
  };

  slider.events.on('indexChanged', customizedFunction);
}

/***/ }),

/***/ "./resources/blocks/tabs/tabs.scss":
/*!*****************************************!*\
  !*** ./resources/blocks/tabs/tabs.scss ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/tender-header/tender-header.js":
/*!*********************************************************!*\
  !*** ./resources/blocks/tender-header/tender-header.js ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/tender-header/tender-header.scss":
/*!***********************************************************!*\
  !*** ./resources/blocks/tender-header/tender-header.scss ***!
  \***********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/tender-row/tender-row.scss":
/*!*****************************************************!*\
  !*** ./resources/blocks/tender-row/tender-row.scss ***!
  \*****************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/tenders-chat/tenders-chat.js":
/*!*******************************************************!*\
  !*** ./resources/blocks/tenders-chat/tenders-chat.js ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var tendersChats = Array.from(document.querySelectorAll('.tenders-chat'));

if (tendersChats.length > 0) {
  var _iterator = _createForOfIteratorHelper(tendersChats),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $tendersChat = _step.value;
      tendersChat($tendersChat);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function tendersChat($wrapper) {
  var $toggleButtons = Array.from($wrapper.querySelectorAll('.tenders-chat__button'));
  var $allChats = Array.from(document.querySelectorAll('.tenders-chat__content'));
  var $allButtons = Array.from(document.querySelectorAll('.tenders-chat__button'));
  var activeChatClass = 'tenders-chat__content--active';
  var activeEffectChatClass = 'tenders-chat__content--active-effect';
  var activeButtonClass = 'tenders-chat__button--active';
  var headerHeight = document.querySelector('.header__main-wrapper').getBoundingClientRect().height;

  for (var _i = 0, _$toggleButtons = $toggleButtons; _i < _$toggleButtons.length; _i++) {
    var $toggleButton = _$toggleButtons[_i];
    $toggleButton.addEventListener('click', function (event) {
      var $target;

      if (event.target.classList.contains('tenders-chat__button')) {
        $target = event.target;
      } else {
        $target = event.target.closest('.tenders-chat__button');
      }

      if ($target.classList.contains(activeButtonClass)) {
        hideChats();
      } else {
        hideChats();
        $target.classList.add(activeButtonClass);
        showItem($target.dataset.chat);
      }
    });
  }

  function showItem(target) {
    var $chat = $wrapper.querySelector('[data-chat-name="' + target + '"]');
    $chat.classList.add(activeChatClass);
    var checkDisplay = setInterval(function () {
      var computedStyle = window.getComputedStyle($chat, null);
      var displayState = computedStyle.getPropertyValue('display') !== 'none';

      if (displayState) {
        $chat.classList.add(activeEffectChatClass);
        window.scrollBy({
          top: $chat.getBoundingClientRect().top - headerHeight - 10,
          behavior: 'smooth'
        });
        clearInterval(checkDisplay);
      }
    }, 1);
  }

  function hideChats() {
    var _iterator2 = _createForOfIteratorHelper($allButtons),
        _step2;

    try {
      for (_iterator2.s(); !(_step2 = _iterator2.n()).done;) {
        var $button = _step2.value;
        $button.classList.remove(activeButtonClass);
      }
    } catch (err) {
      _iterator2.e(err);
    } finally {
      _iterator2.f();
    }

    var _iterator3 = _createForOfIteratorHelper($allChats),
        _step3;

    try {
      for (_iterator3.s(); !(_step3 = _iterator3.n()).done;) {
        var $chat = _step3.value;
        $chat.classList.remove(activeChatClass);
        $chat.classList.remove(activeEffectChatClass);
      }
    } catch (err) {
      _iterator3.e(err);
    } finally {
      _iterator3.f();
    }
  }
}

/***/ }),

/***/ "./resources/blocks/tenders-chat/tenders-chat.scss":
/*!*********************************************************!*\
  !*** ./resources/blocks/tenders-chat/tenders-chat.scss ***!
  \*********************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/title-count/title-count.scss":
/*!*******************************************************!*\
  !*** ./resources/blocks/title-count/title-count.scss ***!
  \*******************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/title-input-wrapper/title-input-wrapper.js":
/*!*********************************************************************!*\
  !*** ./resources/blocks/title-input-wrapper/title-input-wrapper.js ***!
  \*********************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {



/***/ }),

/***/ "./resources/blocks/title-input-wrapper/title-input-wrapper.scss":
/*!***********************************************************************!*\
  !*** ./resources/blocks/title-input-wrapper/title-input-wrapper.scss ***!
  \***********************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/title-separator/title-separator.scss":
/*!***************************************************************!*\
  !*** ./resources/blocks/title-separator/title-separator.scss ***!
  \***************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/title/title.scss":
/*!*******************************************!*\
  !*** ./resources/blocks/title/title.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/toggle-show-block/toggle-show-block.js":
/*!*****************************************************************!*\
  !*** ./resources/blocks/toggle-show-block/toggle-show-block.js ***!
  \*****************************************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var toggleShowBlocks = Array.from(document.querySelectorAll('.toggle-show-block'));

if (toggleShowBlocks.length > 0) {
  var _iterator = _createForOfIteratorHelper(toggleShowBlocks),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $toggleShowBlock = _step.value;
      toggleShowBlockHandler($toggleShowBlock);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function toggleShowBlockHandler($wrapper) {
  var $button = $wrapper.querySelector('.toggle-show-block__button');
  var $item = $wrapper.querySelector('.toggle-show-block__item');
  var buttonActiveClass = 'toggle-show-block__button--active';
  var itemActiveClass = 'toggle-show-block__item--active';
  $button.addEventListener('click', function () {
    $button.classList.toggle(buttonActiveClass);
    $item.classList.toggle(itemActiveClass);
  });
}

/***/ }),

/***/ "./resources/blocks/toggle-show-block/toggle-show-block.scss":
/*!*******************************************************************!*\
  !*** ./resources/blocks/toggle-show-block/toggle-show-block.scss ***!
  \*******************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/tooltip/tooltip.js":
/*!*********************************************!*\
  !*** ./resources/blocks/tooltip/tooltip.js ***!
  \*********************************************/
/*! exports provided: toggleTooltip */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "toggleTooltip", function() { return toggleTooltip; });
function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var tooltips = Array.from(document.querySelectorAll('.tooltip'));

if (tooltips.length > 0) {
  var _iterator = _createForOfIteratorHelper(tooltips),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $tooltip = _step.value;
      toggleTooltip($tooltip);
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function toggleTooltip($tooltip) {
  var $button = $tooltip.getElementsByClassName('tooltip__button')[0];
  var $inner = $tooltip.getElementsByClassName('tooltip__inner')[0];
  var activeClass = 'tooltip--active';
  var rightClass = 'tooltip--right';
  var fillClass = 'tooltip--fill';
  var tooltipSelector = '.tooltip';

  if ($tooltip.classList.contains(fillClass)) {
    setFillWidth();
  }

  function setFillWidth() {
    var offsetWidth = $tooltip.parentNode.getBoundingClientRect().width;
    $inner.style.width = offsetWidth + 'px';
  }

  function setPositionClass() {
    var offsetLeft = $inner.getBoundingClientRect().x;
    var offsetWidth = $inner.getBoundingClientRect().width;

    if (offsetLeft + offsetWidth > window.viewportOptions.viewportWidth) {
      $tooltip.classList.add(rightClass);
    }
  }

  setPositionClass();

  if (window.viewportOptions.hoverAvailability) {
    var toggleHoverInner = function toggleHoverInner() {
      if (!buttonHover && !innerHover) {
        $tooltip.classList.remove(activeClass);
      } else {
        $tooltip.classList.add(activeClass);
      }
    };

    var buttonHover = false;
    var innerHover = false;
    $button.addEventListener('mouseenter', function (e) {
      buttonHover = true;
      toggleHoverInner();
    });
    $button.addEventListener('mouseleave', function (e) {
      buttonHover = false;
      toggleHoverInner();
    });
    $inner.addEventListener('mouseenter', function (e) {
      innerHover = true;
      toggleHoverInner();
    });
    $inner.addEventListener('mouseleave', function (e) {
      innerHover = false;
      toggleHoverInner();
    });
  } else {
    var checkActive = function checkActive() {
      if ($tooltip.classList.contains(activeClass)) {
        return true;
      } else {
        return false;
      }
    };

    $button.addEventListener('click', function (e) {
      if (checkActive()) {
        $tooltip.classList.remove(activeClass);
      } else {
        $tooltip.classList.add(activeClass);
      }
    });
    document.addEventListener('click', function (e) {
      if (e.target !== $tooltip && e.target.closest(tooltipSelector) !== $tooltip) {
        $tooltip.classList.remove(activeClass);
      }
    });
  }
}

/***/ }),

/***/ "./resources/blocks/tooltip/tooltip.scss":
/*!***********************************************!*\
  !*** ./resources/blocks/tooltip/tooltip.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/upload/upload.js":
/*!*******************************************!*\
  !*** ./resources/blocks/upload/upload.js ***!
  \*******************************************/
/*! exports provided: upload */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "upload", function() { return upload; });
function upload(options) {
  var $wrapper = options.$wrapper;
  var $input = options.$input;
  var $previewWrapper = options.$previewWrapper;
  var previewWrapperEmptyClass = options.previewWrapperEmptyClass;
  var $filePreviewWrapper = options.$filePreviewWrapper;
  var $imgPreviewWrapper = options.$imgPreviewWrapper;
  var filePreviewCreate = options.filePreviewCreateFunction;
  var imgPreviewCreate = options.imgPreviewCreateFunction;
  var files = [];
  $input.addEventListener('change', function (event) {
    changeHandler(event);
  });

  function deleteFiles($wrapper) {
    $wrapper.querySelectorAll('[data-upload-preview]').forEach(function (preview) {
      preview.remove();
    });
  }

  var changeHandler = function changeHandler(event) {
    if (!event.target.files.length) {
      return;
    }

    files = Array.from(event.target.files);
    $previewWrapper.classList.remove(previewWrapperEmptyClass); // $filePreviewWrapper.innerHTML = '';
    // $imgPreviewWrapper.innerHTML = '';

    deleteFiles($imgPreviewWrapper);
    deleteFiles($filePreviewWrapper);
    files.forEach(function (file) {
      var reader = new FileReader();

      reader.onload = function (ev) {
        var src = ev.target.result;
        var name = file.name;

        if (!file.type.match('image') && filePreviewCreate) {
          $filePreviewWrapper.insertAdjacentHTML('afterbegin', filePreviewCreate({
            name: name,
            src: src
          }));
        } else if (file.type.match('image') && imgPreviewCreate) {
          $imgPreviewWrapper.insertAdjacentHTML('afterbegin', imgPreviewCreate({
            name: name,
            src: src
          }));
        }
      };

      reader.readAsDataURL(file);
    });
  };
}

/***/ }),

/***/ "./resources/blocks/upload/upload.scss":
/*!*********************************************!*\
  !*** ./resources/blocks/upload/upload.scss ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/blocks/wrapper/wrapper.scss":
/*!***********************************************!*\
  !*** ./resources/blocks/wrapper/wrapper.scss ***!
  \***********************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),

/***/ "./resources/index.js":
/*!****************************!*\
  !*** ./resources/index.js ***!
  \****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var get_viewport_options__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! get-viewport-options */ "./node_modules/get-viewport-options/dist/script.js");
/* harmony import */ var get_viewport_options__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(get_viewport_options__WEBPACK_IMPORTED_MODULE_0__);

window.mobileWidth = 1279;
window.mobileWidthSmall = 768;
window.viewportOptions = new get_viewport_options__WEBPACK_IMPORTED_MODULE_0___default.a(); // Подключение эмулятора бэкенда

__webpack_require__(/*! ./js-backend/backend.js */ "./resources/js-backend/backend.js");

/***/ }),

/***/ "./resources/js-backend/backend.js":
/*!*****************************************!*\
  !*** ./resources/js-backend/backend.js ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

function _createForOfIteratorHelper(o, allowArrayLike) { var it = typeof Symbol !== "undefined" && o[Symbol.iterator] || o["@@iterator"]; if (!it) { if (Array.isArray(o) || (it = _unsupportedIterableToArray(o)) || allowArrayLike && o && typeof o.length === "number") { if (it) o = it; var i = 0; var F = function F() {}; return { s: F, n: function n() { if (i >= o.length) return { done: true }; return { done: false, value: o[i++] }; }, e: function e(_e) { throw _e; }, f: F }; } throw new TypeError("Invalid attempt to iterate non-iterable instance.\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method."); } var normalCompletion = true, didErr = false, err; return { s: function s() { it = it.call(o); }, n: function n() { var step = it.next(); normalCompletion = step.done; return step; }, e: function e(_e2) { didErr = true; err = _e2; }, f: function f() { try { if (!normalCompletion && it.return != null) it.return(); } finally { if (didErr) throw err; } } }; }

function _unsupportedIterableToArray(o, minLen) { if (!o) return; if (typeof o === "string") return _arrayLikeToArray(o, minLen); var n = Object.prototype.toString.call(o).slice(8, -1); if (n === "Object" && o.constructor) n = o.constructor.name; if (n === "Map" || n === "Set") return Array.from(o); if (n === "Arguments" || /^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(n)) return _arrayLikeToArray(o, minLen); }

function _arrayLikeToArray(arr, len) { if (len == null || len > arr.length) len = arr.length; for (var i = 0, arr2 = new Array(len); i < len; i++) { arr2[i] = arr[i]; } return arr2; }

var $searchBox = document.getElementsByClassName('header__search-box')[0]; // Обработчик поиска

$searchBox.addEventListener('search', function (event) {
  console.log('Нужно выполнить поиск по запросу: ' + event.target.value);
}); // Обработчик ввода и вывода подсказок

$searchBox.addEventListener('completeHint', function (event) {
  var text = event.detail.value;
  var length = event.detail.value.length;
  var resultRow = '';

  if (length < 10) {
    for (var index = 10 - length; index > 0; index--) {
      var hint = '';

      if (index === 5 || index === 10 - length) {
        hint = '<div class="search-box__search-result-subname">Товар из категории электорника</div>';
      }

      resultRow += "\n".concat(hint, "\n<div class=\"search-box__search-result\" onclick=\"console.log('\u041A\u043B\u0438\u0435\u043D\u0442 \u043A\u043B\u0438\u043A\u043D\u0443\u043B \u043D\u0430: ").concat(text, "')\">\n<img alt=\"\" src=\"data:image/jpg;base64,/9j/4QAYRXhpZgAASUkqAAgAAAAAAAAAAAAAAP/sABFEdWNreQABAAQAAAAQAAD/4QMaaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wLwA8P3hwYWNrZXQgYmVnaW49Iu+7vyIgaWQ9Ilc1TTBNcENlaGlIenJlU3pOVGN6a2M5ZCI/PiA8eDp4bXBtZXRhIHhtbG5zOng9ImFkb2JlOm5zOm1ldGEvIiB4OnhtcHRrPSJBZG9iZSBYTVAgQ29yZSA2LjAtYzAwMiA3OS4xNjQ0ODgsIDIwMjAvMDcvMTAtMjI6MDY6NTMgICAgICAgICI+IDxyZGY6UkRGIHhtbG5zOnJkZj0iaHR0cDovL3d3dy53My5vcmcvMTk5OS8wMi8yMi1yZGYtc3ludGF4LW5zIyI+IDxyZGY6RGVzY3JpcHRpb24gcmRmOmFib3V0PSIiIHhtbG5zOnhtcE1NPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvbW0vIiB4bWxuczpzdFJlZj0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL3NUeXBlL1Jlc291cmNlUmVmIyIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bXBNTTpEb2N1bWVudElEPSJ4bXAuZGlkOjI1RjlFMUIyQTJDRTExRUJCRjQ1Q0ZCQjk3NkY2MEE4IiB4bXBNTTpJbnN0YW5jZUlEPSJ4bXAuaWlkOjI1RjlFMUIxQTJDRTExRUJCRjQ1Q0ZCQjk3NkY2MEE4IiB4bXA6Q3JlYXRvclRvb2w9IkFkb2JlIFBob3Rvc2hvcCAyMDIxIFdpbmRvd3MiPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0iMDY2NTU4NDNEOUM4NkUxNzEwNEI1QTdFQ0MyNzM5QUIiIHN0UmVmOmRvY3VtZW50SUQ9IjA2NjU1ODQzRDlDODZFMTcxMDRCNUE3RUNDMjczOUFCIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+/+4ADkFkb2JlAGTAAAAAAf/bAIQAEw8PFxAXJRYWJS4jHSMuKyQjIyQrOTExMTExOUI8PDw8PDxCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQgEUFxceGh4kGBgkMiQdJDJBMigoMkFCQT4xPkFCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJCQkJC/8AAEQgAQwAyAwEiAAIRAQMRAf/EAHoAAAMAAwEBAAAAAAAAAAAAAAABBgIEBQMHAQEBAQEAAAAAAAAAAAAAAAAAAgEDEAABAwIEBAIHCQAAAAAAAAABAAIDEQQhMRIFQVETBnHB8GGBkTIUNKEiQlJicjMVRREBAQEBAAMBAAAAAAAAAAAAAAERAjFRMhL/2gAMAwEAAhEDEQA/AK5NJNB5XNx0ANLS57jpaPM+oLk/2l1a3IbdhphedLSwfCfTP3rf3W2bcQ46qscHjSaZKen29xiEUbnvllkDmasaHjXk0Ln1brrzzLztVxSTx45pLo5BCEIEtDd7mW3tnvgdpkY3XiK4Dgt8Ke3676dpK7i/7g9qnq5iuZu304cPdF0HH5g9WNwo5uAp4LubZ3FZuk6A1NDqaZHCgryPLxyKhKra2+D5q5ih/O9o9irJus25+X1QpIJxQjAhJCDBxo0kcioXuid/Vjg/BTX4nJXWeHNQndTC2SInk4e4qL9Rc+ek+F2+1o+puEZOTQ532YLhg0Xf7UeBegcXDBXfCZ5fQEJIRhoSQgwUz3NatuNLK0dUvafJUoK4G/uHVYOOnzU9NlRrtuuGmmnV62mq6mx2UtvdRyvwOqgYMzXmvWTqCMvZ8ILQ4n9S29l+rjL86mnjRZtosChKqFbDQkhYMAprfvqDn8LfQIQs6bGv/nTZfyRrHavq4f3+RQhT6FihCFbDQhCD/9k=\" />\n").concat(text, ", \u0446\u0435\u043D\u0430 5000 \u0440\u0443\u0431\u043B\u0435\u0439, \u0440\u0430\u0437\u043C\u0435\u0440 XXL</div>");
    }

    var result = "<div class=\"search-box__search-result-wrapper\">".concat(resultRow, "</div>");
    window.searchBox.showHints(result);
  } else {
    window.searchBox.hideHints();
    window.searchBox.clearHints();
  }
}); // Обработчик чекбокса "Только активные тендеры"

var checkbox = document.querySelector('#only-active-tenders input');

if (checkbox) {
  checkbox.addEventListener('change', function () {
    for (var _i = 0, _Array$from = Array.from(document.querySelectorAll('.tender-row')); _i < _Array$from.length; _i++) {
      var $tender = _Array$from[_i];

      if ($tender.querySelector('.tender-row__status-line--4')) {
        if (checkbox.checked) {
          $tender.style.display = 'none';
        } else {
          $tender.style.display = 'grid';
        }
      }
    }
  });
} // Обработчик отрпавки сообщения


var chatSendButtons = Array.from(document.querySelectorAll('.chat__form-send'));

if (chatSendButtons.length > 0) {
  var _iterator = _createForOfIteratorHelper(chatSendButtons),
      _step;

  try {
    for (_iterator.s(); !(_step = _iterator.n()).done;) {
      var $chatSendButton = _step.value;
      $chatSendButton.addEventListener('click', function (event) {
        setChatMessage(event.target);
      });
    }
  } catch (err) {
    _iterator.e(err);
  } finally {
    _iterator.f();
  }
}

function setChatMessage($button) {
  var $wrapper = $button.closest('.chat');
  var $form = $button.closest('.chat__form');
  var $input = $wrapper.querySelector('.chat__form-wrapper-input');
  var $images = $form.querySelector('.chat__message-content-images');
  var $files = $form.querySelector('.chat__message-content-files');
  var images = $images.innerHTML;
  var files = $files.innerHTML;
  var text = $input.value;
  var $messages = $wrapper.querySelector('.chat__messages');

  if (text.length === 0) {
    return;
  }

  var imagesHtml = '';

  if (images.length !== 0) {
    imagesHtml = "<div class=\"chat__message-content-images\">".concat(images, "</div>");
  }

  var filesHtml = '';

  if (files.length !== 0) {
    filesHtml = "<div class=\"chat__message-content-files\">".concat(files, "</div>");
  }

  var message = "\n        <div class=\"chat__message\">\n            <div class=\"chat__message-content\">\n                <div class=\"chat__message-content-text\">".concat(text, "</div>\n                ").concat(imagesHtml, "\n                ").concat(filesHtml, "\n            </div>\n            <div class=\"chat__message-time\">13:15</div>\n        </div>\n    ");
  console.log(message);
  $messages.insertAdjacentHTML('beforeend', message);
  $input.value = '';
  $images.innerHTML = '';
  $files.innerHTML = '';
}

/***/ }),

/***/ 0:
/*!****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./resources/index.js ./resources/blocks/account/account.js ./resources/blocks/account-menu/account-menu.js ./resources/blocks/basket/basket.js ./resources/blocks/catalog/catalog.js ./resources/blocks/chat/chat.js ./resources/blocks/check-progress/check-progress.js ./resources/blocks/checkbox/checkbox.js ./resources/blocks/counter/counter.js ./resources/blocks/custom-select/custom-select.js ./resources/blocks/filter/filter.js ./resources/blocks/footer/footer.js ./resources/blocks/form/form.js ./resources/blocks/form-check/form-check.js ./resources/blocks/header/header.js ./resources/blocks/header-buttons/header-buttons.js ./resources/blocks/header-checkbox/header-checkbox.js ./resources/blocks/input/input.js ./resources/blocks/main-banner/main-banner.js ./resources/blocks/min-max-slider/min-max-slider.js ./resources/blocks/modal/modal.js ./resources/blocks/photo/photo.js ./resources/blocks/photo-upload/photo-upload.js ./resources/blocks/placeholder/placeholder.js ./resources/blocks/product-cart/product-cart.js ./resources/blocks/product-img-slider/product-img-slider.js ./resources/blocks/product-in-tender/product-in-tender.js ./resources/blocks/product-preview/product-preview.js ./resources/blocks/search-box/search-box.js ./resources/blocks/search-select/search-select.js ./resources/blocks/tabs/tabs.js ./resources/blocks/tender-header/tender-header.js ./resources/blocks/tenders-chat/tenders-chat.js ./resources/blocks/title-input-wrapper/title-input-wrapper.js ./resources/blocks/toggle-show-block/toggle-show-block.js ./resources/blocks/tooltip/tooltip.js ./resources/blocks/upload/upload.js ./resources/js-backend/backend.js ./resources/blocks/account/account.scss ./resources/blocks/account-menu/account-menu.scss ./resources/blocks/advantages/advantages.scss ./resources/blocks/assessment/assessment.scss ./resources/blocks/balance/balance.scss ./resources/blocks/banner/banner.scss ./resources/blocks/base/main.scss ./resources/blocks/base/media-queries.scss ./resources/blocks/base/mixins.scss ./resources/blocks/base/variables.scss ./resources/blocks/basket/basket.scss ./resources/blocks/border-block/border-block.scss ./resources/blocks/breadcrumbs/breadcrumbs.scss ./resources/blocks/button/button.scss ./resources/blocks/buyer/buyer.scss ./resources/blocks/captcha/captcha.scss ./resources/blocks/catalog/catalog.scss ./resources/blocks/categories-labels/categories-labels.scss ./resources/blocks/categories-preview/categories-preview.scss ./resources/blocks/chat/chat.scss ./resources/blocks/check-progress/check-progress.scss ./resources/blocks/checkbox/checkbox.scss ./resources/blocks/counter/counter.scss ./resources/blocks/custom-select/custom-select.scss ./resources/blocks/filter/filter.scss ./resources/blocks/footer/footer.scss ./resources/blocks/form/form.scss ./resources/blocks/form-check/form-check.scss ./resources/blocks/header/header.scss ./resources/blocks/header-buttons/header-buttons.scss ./resources/blocks/header-checkbox/header-checkbox.scss ./resources/blocks/hint/hint.scss ./resources/blocks/input/input.scss ./resources/blocks/layout/layout.scss ./resources/blocks/lead/lead.scss ./resources/blocks/lead-search/lead-search.scss ./resources/blocks/logo/logo.scss ./resources/blocks/main-banner/main-banner.scss ./resources/blocks/main-navigation/main-navigation.scss ./resources/blocks/manufacturer/manufacturer.scss ./resources/blocks/manufacturer-preview/manufacturer-preview.scss ./resources/blocks/min-max-slider/min-max-slider.scss ./resources/blocks/modal/modal.scss ./resources/blocks/offer/offer.scss ./resources/blocks/options/options.scss ./resources/blocks/photo/photo.scss ./resources/blocks/photo-upload/photo-upload.scss ./resources/blocks/placeholder/placeholder.scss ./resources/blocks/product-cart/product-cart.scss ./resources/blocks/product-img-slider/product-img-slider.scss ./resources/blocks/product-in-tender/product-in-tender.scss ./resources/blocks/product-preview/product-preview.scss ./resources/blocks/products-grid/products-grid.scss ./resources/blocks/reviews/reviews.scss ./resources/blocks/search-box/search-box.scss ./resources/blocks/search-select/search-select.scss ./resources/blocks/section/section.scss ./resources/blocks/selected-products/selected-products.scss ./resources/blocks/social/social.scss ./resources/blocks/status-line/status-line.scss ./resources/blocks/tabs/tabs.scss ./resources/blocks/tender-header/tender-header.scss ./resources/blocks/tender-row/tender-row.scss ./resources/blocks/tenders-chat/tenders-chat.scss ./resources/blocks/title/title.scss ./resources/blocks/title-count/title-count.scss ./resources/blocks/title-input-wrapper/title-input-wrapper.scss ./resources/blocks/title-separator/title-separator.scss ./resources/blocks/toggle-show-block/toggle-show-block.scss ./resources/blocks/tooltip/tooltip.scss ./resources/blocks/upload/upload.scss ./resources/blocks/wrapper/wrapper.scss ***!
  \****************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\index.js */"./resources/index.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/account/account.js */"./resources/blocks/account/account.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/account-menu/account-menu.js */"./resources/blocks/account-menu/account-menu.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/basket/basket.js */"./resources/blocks/basket/basket.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/catalog/catalog.js */"./resources/blocks/catalog/catalog.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/chat/chat.js */"./resources/blocks/chat/chat.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/check-progress/check-progress.js */"./resources/blocks/check-progress/check-progress.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/checkbox/checkbox.js */"./resources/blocks/checkbox/checkbox.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/counter/counter.js */"./resources/blocks/counter/counter.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/custom-select/custom-select.js */"./resources/blocks/custom-select/custom-select.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/filter/filter.js */"./resources/blocks/filter/filter.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/footer/footer.js */"./resources/blocks/footer/footer.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/form/form.js */"./resources/blocks/form/form.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/form-check/form-check.js */"./resources/blocks/form-check/form-check.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/header/header.js */"./resources/blocks/header/header.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/header-buttons/header-buttons.js */"./resources/blocks/header-buttons/header-buttons.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/header-checkbox/header-checkbox.js */"./resources/blocks/header-checkbox/header-checkbox.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/input/input.js */"./resources/blocks/input/input.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/main-banner/main-banner.js */"./resources/blocks/main-banner/main-banner.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/min-max-slider/min-max-slider.js */"./resources/blocks/min-max-slider/min-max-slider.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/modal/modal.js */"./resources/blocks/modal/modal.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/photo/photo.js */"./resources/blocks/photo/photo.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/photo-upload/photo-upload.js */"./resources/blocks/photo-upload/photo-upload.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/placeholder/placeholder.js */"./resources/blocks/placeholder/placeholder.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/product-cart/product-cart.js */"./resources/blocks/product-cart/product-cart.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/product-img-slider/product-img-slider.js */"./resources/blocks/product-img-slider/product-img-slider.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/product-in-tender/product-in-tender.js */"./resources/blocks/product-in-tender/product-in-tender.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/product-preview/product-preview.js */"./resources/blocks/product-preview/product-preview.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/search-box/search-box.js */"./resources/blocks/search-box/search-box.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/search-select/search-select.js */"./resources/blocks/search-select/search-select.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/tabs/tabs.js */"./resources/blocks/tabs/tabs.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/tender-header/tender-header.js */"./resources/blocks/tender-header/tender-header.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/tenders-chat/tenders-chat.js */"./resources/blocks/tenders-chat/tenders-chat.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/title-input-wrapper/title-input-wrapper.js */"./resources/blocks/title-input-wrapper/title-input-wrapper.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/toggle-show-block/toggle-show-block.js */"./resources/blocks/toggle-show-block/toggle-show-block.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/tooltip/tooltip.js */"./resources/blocks/tooltip/tooltip.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/upload/upload.js */"./resources/blocks/upload/upload.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\js-backend/backend.js */"./resources/js-backend/backend.js");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/account/account.scss */"./resources/blocks/account/account.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/account-menu/account-menu.scss */"./resources/blocks/account-menu/account-menu.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/advantages/advantages.scss */"./resources/blocks/advantages/advantages.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/assessment/assessment.scss */"./resources/blocks/assessment/assessment.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/balance/balance.scss */"./resources/blocks/balance/balance.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/banner/banner.scss */"./resources/blocks/banner/banner.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/base/main.scss */"./resources/blocks/base/main.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/base/media-queries.scss */"./resources/blocks/base/media-queries.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/base/mixins.scss */"./resources/blocks/base/mixins.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/base/variables.scss */"./resources/blocks/base/variables.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/basket/basket.scss */"./resources/blocks/basket/basket.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/border-block/border-block.scss */"./resources/blocks/border-block/border-block.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/breadcrumbs/breadcrumbs.scss */"./resources/blocks/breadcrumbs/breadcrumbs.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/button/button.scss */"./resources/blocks/button/button.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/buyer/buyer.scss */"./resources/blocks/buyer/buyer.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/captcha/captcha.scss */"./resources/blocks/captcha/captcha.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/catalog/catalog.scss */"./resources/blocks/catalog/catalog.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/categories-labels/categories-labels.scss */"./resources/blocks/categories-labels/categories-labels.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/categories-preview/categories-preview.scss */"./resources/blocks/categories-preview/categories-preview.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/chat/chat.scss */"./resources/blocks/chat/chat.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/check-progress/check-progress.scss */"./resources/blocks/check-progress/check-progress.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/checkbox/checkbox.scss */"./resources/blocks/checkbox/checkbox.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/counter/counter.scss */"./resources/blocks/counter/counter.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/custom-select/custom-select.scss */"./resources/blocks/custom-select/custom-select.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/filter/filter.scss */"./resources/blocks/filter/filter.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/footer/footer.scss */"./resources/blocks/footer/footer.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/form/form.scss */"./resources/blocks/form/form.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/form-check/form-check.scss */"./resources/blocks/form-check/form-check.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/header/header.scss */"./resources/blocks/header/header.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/header-buttons/header-buttons.scss */"./resources/blocks/header-buttons/header-buttons.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/header-checkbox/header-checkbox.scss */"./resources/blocks/header-checkbox/header-checkbox.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/hint/hint.scss */"./resources/blocks/hint/hint.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/input/input.scss */"./resources/blocks/input/input.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/layout/layout.scss */"./resources/blocks/layout/layout.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/lead/lead.scss */"./resources/blocks/lead/lead.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/lead-search/lead-search.scss */"./resources/blocks/lead-search/lead-search.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/logo/logo.scss */"./resources/blocks/logo/logo.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/main-banner/main-banner.scss */"./resources/blocks/main-banner/main-banner.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/main-navigation/main-navigation.scss */"./resources/blocks/main-navigation/main-navigation.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/manufacturer/manufacturer.scss */"./resources/blocks/manufacturer/manufacturer.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/manufacturer-preview/manufacturer-preview.scss */"./resources/blocks/manufacturer-preview/manufacturer-preview.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/min-max-slider/min-max-slider.scss */"./resources/blocks/min-max-slider/min-max-slider.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/modal/modal.scss */"./resources/blocks/modal/modal.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/offer/offer.scss */"./resources/blocks/offer/offer.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/options/options.scss */"./resources/blocks/options/options.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/photo/photo.scss */"./resources/blocks/photo/photo.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/photo-upload/photo-upload.scss */"./resources/blocks/photo-upload/photo-upload.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/placeholder/placeholder.scss */"./resources/blocks/placeholder/placeholder.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/product-cart/product-cart.scss */"./resources/blocks/product-cart/product-cart.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/product-img-slider/product-img-slider.scss */"./resources/blocks/product-img-slider/product-img-slider.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/product-in-tender/product-in-tender.scss */"./resources/blocks/product-in-tender/product-in-tender.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/product-preview/product-preview.scss */"./resources/blocks/product-preview/product-preview.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/products-grid/products-grid.scss */"./resources/blocks/products-grid/products-grid.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/reviews/reviews.scss */"./resources/blocks/reviews/reviews.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/search-box/search-box.scss */"./resources/blocks/search-box/search-box.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/search-select/search-select.scss */"./resources/blocks/search-select/search-select.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/section/section.scss */"./resources/blocks/section/section.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/selected-products/selected-products.scss */"./resources/blocks/selected-products/selected-products.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/social/social.scss */"./resources/blocks/social/social.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/status-line/status-line.scss */"./resources/blocks/status-line/status-line.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/tabs/tabs.scss */"./resources/blocks/tabs/tabs.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/tender-header/tender-header.scss */"./resources/blocks/tender-header/tender-header.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/tender-row/tender-row.scss */"./resources/blocks/tender-row/tender-row.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/tenders-chat/tenders-chat.scss */"./resources/blocks/tenders-chat/tenders-chat.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/title/title.scss */"./resources/blocks/title/title.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/title-count/title-count.scss */"./resources/blocks/title-count/title-count.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/title-input-wrapper/title-input-wrapper.scss */"./resources/blocks/title-input-wrapper/title-input-wrapper.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/title-separator/title-separator.scss */"./resources/blocks/title-separator/title-separator.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/toggle-show-block/toggle-show-block.scss */"./resources/blocks/toggle-show-block/toggle-show-block.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/tooltip/tooltip.scss */"./resources/blocks/tooltip/tooltip.scss");
__webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/upload/upload.scss */"./resources/blocks/upload/upload.scss");
module.exports = __webpack_require__(/*! E:\proof-webpack\projects\vooy-laravel\resources\blocks/wrapper/wrapper.scss */"./resources/blocks/wrapper/wrapper.scss");


/***/ })

/******/ });
//# sourceMappingURL=main.js.map