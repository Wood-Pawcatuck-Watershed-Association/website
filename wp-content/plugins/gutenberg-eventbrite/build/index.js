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
/******/ 	return __webpack_require__(__webpack_require__.s = "./src/index.js");
/******/ })
/************************************************************************/
/******/ ({

/***/ "./src/block/index.js":
/*!****************************!*\
  !*** ./src/block/index.js ***!
  \****************************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/blocks */ "@wordpress/blocks");
/* harmony import */ var _wordpress_blocks__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _components_EditBlock__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../components/EditBlock */ "./src/components/EditBlock.js");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! @wordpress/i18n */ "@wordpress/i18n");
/* harmony import */ var _wordpress_i18n__WEBPACK_IMPORTED_MODULE_3___default = /*#__PURE__*/__webpack_require__.n(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_3__);


/**
 * Registers a new block provided a unique name and an object defining its behavior.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/#registering-a-block
 */


/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */


/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/#registering-a-block
 */

Object(_wordpress_blocks__WEBPACK_IMPORTED_MODULE_1__["registerBlockType"])('sandtrail-studios/gutenberg-eventbrite', {
  /**
   * This is the display title for your block, which can be translated with `i18n` functions.
   * The block inserter will show this name.
   */
  title: Object(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_3__["__"])('Eventbrite Block', 'sandtrail-studios'),

  /**
   * This is a short description for your block, can be translated with `i18n` functions.
   * It will be shown in the Block Tab in the Settings Sidebar.
   */
  description: Object(_wordpress_i18n__WEBPACK_IMPORTED_MODULE_3__["__"])('A gutenberg block that fetches eventbrite events', 'sandtrail-studios'),

  /**
   * Blocks are grouped into categories to help users browse and discover them.
   * The categories provided by core are `common`, `embed`, `formatting`, `layout` and `widgets`.
   */
  category: 'widgets',

  /**
   * An icon property should be specified to make it easier to identify a block.
   * These can be any of WordPress’ Dashicons, or a custom svg element.
   */
  icon: 'smiley',

  /**
   * Optional block extended support features.
   */
  supports: {
    // Removes support for an HTML mode.
    html: false
  },
  // Use the block just once per post
  multiple: false,
  // Don't allow the block to be converted into a reusable block.
  reusable: false,
  attributes: {
    id: {
      type: 'number'
    },
    apiKey: {
      type: 'string'
    },
    heading: {
      type: 'string'
    }
  },

  /**
   * The edit function describes the structure of your block in the context of the editor.
   * This represents what the editor will render when the block is used.
   *
   * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
   *
   * @param {Object} [props] Properties passed from the editor.
   *
   * @return {WPElement} Element to render.
   */
  edit: function edit(props) {
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_components_EditBlock__WEBPACK_IMPORTED_MODULE_2__["default"], props);
  },

  /**
   * The save function defines the way in which the different attributes should be combined
   * into the final markup, which is then serialized by the block editor into `post_content`.
   *
   * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
   *
   * @return {WPElement} Element to render.
   */
  save: function save() {
    return null;
  }
});

/***/ }),

/***/ "./src/components/EditBlock.js":
/*!*************************************!*\
  !*** ./src/components/EditBlock.js ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return EditBlock; });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/components */ "@wordpress/components");
/* harmony import */ var _wordpress_components__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! @wordpress/block-editor */ "@wordpress/block-editor");
/* harmony import */ var _wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__);




function EditBlock(_ref) {
  var attributes = _ref.attributes,
      setAttributes = _ref.setAttributes;
  var id = attributes.id,
      apiKey = attributes.apiKey,
      heading = attributes.heading;
  return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["Fragment"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_block_editor__WEBPACK_IMPORTED_MODULE_2__["InspectorControls"], null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__["PanelBody"], {
    title: "Eventbrite Settings",
    initialOpen: true
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__["TextControl"], {
    label: "Api Key",
    value: apiKey,
    help: Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", null, "Get api key", ' ', Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("a", {
      href: "https://www.eventbrite.com/platform/api-keys",
      target: "_blank",
      rel: "noopener noreferrer"
    }, "here")),
    onChange: function onChange(newApiKey) {
      setAttributes({
        apiKey: newApiKey
      });
      setAttributes({
        id: Date.now()
      });
    }
  })))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_wordpress_components__WEBPACK_IMPORTED_MODULE_1__["TextControl"], {
    label: "Heading",
    value: heading,
    onChange: function onChange(newHeading) {
      return setAttributes({
        heading: newHeading
      });
    }
  }));
}

/***/ }),

/***/ "./src/components/Event.js":
/*!*********************************!*\
  !*** ./src/components/Event.js ***!
  \*********************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return Event; });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_date__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/date */ "@wordpress/date");
/* harmony import */ var _wordpress_date__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_date__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _vendor_eventbrite__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ../vendor/eventbrite */ "./src/vendor/eventbrite.js");
/* harmony import */ var _vendor_eventbrite__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_vendor_eventbrite__WEBPACK_IMPORTED_MODULE_2__);




function Event(_ref) {
  var id = _ref.id,
      title = _ref.title,
      description = _ref.description,
      cost = _ref.cost,
      startDate = _ref.startDate,
      image = _ref.image,
      status = _ref.status;
  Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["useEffect"])(function () {
    EBWidgets.createWidget({
      widgetType: 'checkout',
      eventId: id,
      modal: true,
      modalTriggerElementId: "eventbrite-widget-modal-trigger-".concat(id)
    });
  }, [id]);
  return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("article", {
    className: "max-w-xs w-full px-2 mb-4 h-full"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "event__single"
  }, image ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "h-32 flex-none bg-cover bg-center rounded-t text-center overflow-hidden",
    style: {
      backgroundImage: "url(".concat(image, ")")
    }
  }) : null, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "border-r border-b border-l border-grey-light bg-white rounded-b py-4 px-2 flex flex-col justify-between leading-normal shadow-md"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "event__details flex"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "event__details--left"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "event__details--dateWrapper text-center"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", {
    className: "event__details--dateMonth text-sm text-red uppercase my-0 font-sans"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("time", null, Object(_wordpress_date__WEBPACK_IMPORTED_MODULE_1__["format"])('M', startDate))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", {
    className: "event__details--dateDay text-xl text-grey-dark my-0 font-sans"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("time", null, Object(_wordpress_date__WEBPACK_IMPORTED_MODULE_1__["format"])('d', startDate))))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "event__details--right ml-2"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "event__details--rightInnerTop"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("h3", {
    className: "my-0 text-black font-semibold text-sm"
  }, title), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "event__details--dateWrapper"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("time", {
    className: "event__details--date font-sans text-grey-dark text-xs"
  }, Object(_wordpress_date__WEBPACK_IMPORTED_MODULE_1__["format"])('D, M d Y, ha', startDate))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("p", {
    className: "text-sm text-grey-dark flex items-center font-sans mb-2"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("span", null, cost))), Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "event__details--rightInnerBottom"
  }, Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("div", {
    className: "event__details--buttonWrapper flex justify-between"
  }, description ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("button", {
    "data-tippy-content": "<?= $description; ?>",
    className: "bg-blue hover:bg-blue-dark text-white font-bold py-2 px-4 mr-2 rounded"
  }, "info") : null, status === 'live' ? Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])("button", {
    id: "eventbrite-widget-modal-trigger-".concat(id),
    type: "button",
    className: "bg-orange hover:bg-blue-dark text-white font-bold py-2 px-4 rounded"
  }, "Sign up") : null)))))));
}

/***/ }),

/***/ "./src/components/EventList.js":
/*!*************************************!*\
  !*** ./src/components/EventList.js ***!
  \*************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "default", function() { return EventList; });
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _Event__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Event */ "./src/components/Event.js");


function EventList(_ref) {
  var events = _ref.events;
  return events.map(function (event) {
    var id = event.id;
    var title = event.name.text;
    var image = event.logo.original.url;
    var startDate = new Date(event.start.utc);
    var cost = event.ticket_classes[0].cost.display;
    var description = event.description.html;
    var status = event.status;
    return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_Event__WEBPACK_IMPORTED_MODULE_1__["default"], {
      key: title,
      id: id,
      title: title,
      description: description,
      cost: cost,
      startDate: startDate,
      image: image,
      status: status
    });
  });
}

/***/ }),

/***/ "./src/index.js":
/*!**********************!*\
  !*** ./src/index.js ***!
  \**********************/
/*! no exports provided */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! @wordpress/element */ "@wordpress/element");
/* harmony import */ var _wordpress_element__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! @wordpress/dom-ready */ "@wordpress/dom-ready");
/* harmony import */ var _wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _components_EventList__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./components/EventList */ "./src/components/EventList.js");
/* harmony import */ var _block__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(/*! ./block */ "./src/block/index.js");






function App() {
  return Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(_components_EventList__WEBPACK_IMPORTED_MODULE_2__["default"], {
    events: window.eventbrite
  });
}

_wordpress_dom_ready__WEBPACK_IMPORTED_MODULE_1___default()(function () {
  if (document.getElementById('root-eventbrite')) {
    Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["render"])(Object(_wordpress_element__WEBPACK_IMPORTED_MODULE_0__["createElement"])(App, null), document.getElementById('root-eventbrite'));
  }
});

/***/ }),

/***/ "./src/vendor/eventbrite.js":
/*!**********************************!*\
  !*** ./src/vendor/eventbrite.js ***!
  \**********************************/
/*! no static exports found */
/***/ (function(module, exports) {

!function (e) {
  function n(i) {
    if (t[i]) return t[i].exports;
    var r = t[i] = {
      exports: {},
      id: i,
      loaded: !1
    };
    return e[i].call(r.exports, r, r.exports, n), r.loaded = !0, r.exports;
  }

  var t = {};
  return n.m = e, n.c = t, n.p = '', n(0);
}([function (module, exports, __webpack_require__) {
  eval("'use strict';\n\nvar _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };\n\nvar _constants = __webpack_require__(1);\n\nvar constants = _interopRequireWildcard(_constants);\n\nvar _logging = __webpack_require__(2);\n\nvar _messages = __webpack_require__(3);\n\nvar _initialize = __webpack_require__(8);\n\nvar _state = __webpack_require__(5);\n\nfunction _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }\n\nvar errorLogNumber = 0;\n\n// The only global variable we should expose in this file\nwindow.EBWidgets = {\n    createWidget: function createWidget(widgetConfig) {\n        try {\n            // Only create widget if we have a valid configuration object\n            if ((0, _initialize.isWidgetConfigValid)(widgetConfig)) {\n                // We save references to all widgets on the page by widget id so that\n                // we can independently resize them, call their callbacks, etc.\n                var widgetIdentifier = (0, _state.getWidgetInstanceIdentifier)(widgetConfig);\n\n                var updatedConfig = (0, _state.updateWidgetInstance)({ widgetIdentifier: widgetIdentifier }, _extends({}, widgetConfig, {\n                    userConfig: widgetConfig,\n                    widgetIdentifier: widgetIdentifier\n                }), true);\n\n                (0, _initialize.createWidget)(updatedConfig);\n            }\n        } catch (errorToLog) {\n            try {\n                if (errorLogNumber < constants.ERROR_LOG_LIMIT) {\n                    (0, _logging.logError)(errorToLog, _state.widgetHostname);\n                    errorLogNumber++;\n                }\n            } catch (errorToIgnore) {\n                // Swallow errors if any occur at this point\n            }\n        }\n    }\n};\n\n(0, _messages.addMessageEventListener)();\n\n(0, _messages.addProtectCheckoutEventListener)();\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/eb_widgets.js\n// module id = 0\n// module chunks = 0\n//# sourceURL=webpack:///./src/eb_widgets.js?");
}, function (module, exports) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\n\nfunction _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\n\nvar ERROR_LOG_LIMIT = exports.ERROR_LOG_LIMIT = 5;\n\nvar WIDGET_TYPE_CHECKOUT = exports.WIDGET_TYPE_CHECKOUT = 'checkout';\n\nvar VALID_WIDGET_TYPES = exports.VALID_WIDGET_TYPES = [WIDGET_TYPE_CHECKOUT];\n\n// These need to be kept in sync with the ref code constants in core, which unfortunately we can't import here.\n// See https://github.com/eventbrite/core/blob/master/django/src/www/eventbrite/ebapps/affiliates/eb_affiliate_codes.py\nvar WIDGET_REF_CODES = exports.WIDGET_REF_CODES = _defineProperty({}, WIDGET_TYPE_CHECKOUT, 'echckt');\n\nvar WIDGET_TYPE_IDS = exports.WIDGET_TYPE_IDS = _defineProperty({}, WIDGET_TYPE_CHECKOUT, {\n    idKey: 'eventId',\n    idDisplayName: 'Event Id'\n});\n\nvar WIDGET_CONFIG_SCHEMA = exports.WIDGET_CONFIG_SCHEMA = {\n    widgetType: {\n        type: 'string',\n        required: true\n    },\n    iframeContainerId: {\n        type: 'string'\n    },\n    iframeContainerHeight: {\n        type: 'number'\n    },\n    iframeAutoAdapt: {\n        type: 'number'\n    },\n    modal: {\n        type: 'boolean'\n    },\n    modalTriggerElementId: {\n        type: 'string'\n    },\n    // googleAnalyticsClientId is an optional parameter to enable cross-domain GA tracking\n    // https://www.eventbrite.com/support/articles/en_US/Troubleshooting/how-to-enable-cross-domain-and-ecommerce-tracking-with-google-universal-analytics\n    googleAnalyticsClientId: {\n        type: 'string'\n    },\n    extraParams: {\n        type: 'object'\n    }\n};\n\nvar WIDGET_TYPE_CONFIG_SCHEMA = exports.WIDGET_TYPE_CONFIG_SCHEMA = _defineProperty({}, WIDGET_TYPE_CHECKOUT, {\n    eventId: {\n        type: ['string', 'number'],\n        required: true\n    },\n    affiliateCode: {\n        type: 'string'\n    },\n    promoCode: {\n        type: 'string'\n    },\n    waitlistToken: {\n        type: 'string'\n    },\n    onOrderComplete: {\n        type: 'function'\n    },\n    onTicketQuantityChange: {\n        type: 'function'\n    },\n    onWidgetModalClose: {\n        type: 'function'\n    },\n    themeSettings: {\n        type: 'object'\n    },\n    rsvpToken: {\n        type: 'string'\n    }\n});\n\n// XXX: When we have more widget types, save these in their own constants files\nvar MESSAGE_WIDGET_RENDER_COMPLETE = exports.MESSAGE_WIDGET_RENDER_COMPLETE = 'widgetRenderComplete';\nvar MESSAGE_WIDGET_NOT_ELIGIBLE = exports.MESSAGE_WIDGET_NOT_ELIGIBLE = 'widgetNotEligible';\nvar MESSAGE_WIDGET_MISCONFIGURED = exports.MESSAGE_WIDGET_MISCONFIGURED = 'widgetMisconfigured';\nvar MESSAGE_WIDGET_MODAL_CLOSE = exports.MESSAGE_WIDGET_MODAL_CLOSE = 'widgetModalClose';\nvar MESSAGE_ORDER_START = exports.MESSAGE_ORDER_START = 'orderStart';\nvar MESSAGE_BACK_TO_TICKET_SELECTION = exports.MESSAGE_BACK_TO_TICKET_SELECTION = 'backToTicketSelection';\nvar MESSAGE_ORDER_COMPLETE = exports.MESSAGE_ORDER_COMPLETE = 'orderComplete';\nvar MESSAGE_PROTECT_CHECKOUT = exports.MESSAGE_PROTECT_CHECKOUT = 'protectCheckout';\nvar MESSAGE_TICKET_QUANTITY_CHANGE = exports.MESSAGE_TICKET_QUANTITY_CHANGE = 'ticketQuantityChange';\n\n// Iframe sizes\nvar MINIMUM_IFRAME_HEIGHT = exports.MINIMUM_IFRAME_HEIGHT = 425;\nvar IFRAME_AUTOADAPT_CONFIG = exports.IFRAME_AUTOADAPT_CONFIG = Object.freeze({\n    minValue: 75,\n    maxValue: 100,\n    disabled: -1\n});\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/constants.js\n// module id = 1\n// module chunks = 0\n//# sourceURL=webpack:///./src/constants.js?");
}, function (module, exports) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\n/* eslint-disable no-console */\n\n/**\n * Display a message for any user-facing errors (e.g they passed in an incorrect config)\n *\n * @param  {String} message  The message to display to the user\n */\nvar logErrorForUser = exports.logErrorForUser = function logErrorForUser(message) {\n    console.error(message);\n};\n\n/**\n * Log internal errors\n *\n * @param  {String} error  The message to log internally\n */\nvar logError = exports.logError = function logError(e, imgHostName) {\n    var errorData = ['js_error=' + encodeURIComponent(e), 'parent_url=' + encodeURIComponent(window.location.href)];\n\n    if (e.stack) {\n        errorData.push('js_error_stack=' + encodeURIComponent(e.stack));\n    }\n\n    var loggingPixel = document.createElement('img');\n\n    loggingPixel.src = imgHostName + '/widget-error-logging-pixel.gif?' + errorData.join('&');\n\n    document.body.appendChild(loggingPixel);\n};\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/utils/logging.js\n// module id = 2\n// module chunks = 0\n//# sourceURL=webpack:///./src/utils/logging.js?");
}, function (module, exports, __webpack_require__) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\nexports.addProtectCheckoutEventListener = exports.addMessageEventListener = exports._handleMessageEvent = exports._hasMessageHandler = exports._isTrustedMessage = exports.MESSAGE_HANDLER_MAP = undefined;\n\nvar _MESSAGE_HANDLER_MAP;\n\nvar _constants = __webpack_require__(1);\n\nvar constants = _interopRequireWildcard(_constants);\n\nvar _message_handlers = __webpack_require__(4);\n\nvar messageHandlers = _interopRequireWildcard(_message_handlers);\n\nvar _message_handlers2 = __webpack_require__(7);\n\nvar checkoutMessageHandlers = _interopRequireWildcard(_message_handlers2);\n\nvar _window = __webpack_require__(6);\n\nvar _state = __webpack_require__(5);\n\nfunction _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }\n\nfunction _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\n\nvar MESSAGE_HANDLER_MAP = exports.MESSAGE_HANDLER_MAP = (_MESSAGE_HANDLER_MAP = {}, _defineProperty(_MESSAGE_HANDLER_MAP, constants.MESSAGE_WIDGET_RENDER_COMPLETE, messageHandlers.handleWidgetRenderComplete), _defineProperty(_MESSAGE_HANDLER_MAP, constants.MESSAGE_WIDGET_NOT_ELIGIBLE, messageHandlers.handleWidgetNotEligible), _defineProperty(_MESSAGE_HANDLER_MAP, constants.MESSAGE_WIDGET_MISCONFIGURED, messageHandlers.handleWidgetMisconfigured), _defineProperty(_MESSAGE_HANDLER_MAP, constants.MESSAGE_WIDGET_MODAL_CLOSE, messageHandlers.handleWidgetModalClose), _defineProperty(_MESSAGE_HANDLER_MAP, constants.MESSAGE_ORDER_START, checkoutMessageHandlers.handleOrderStart), _defineProperty(_MESSAGE_HANDLER_MAP, constants.MESSAGE_BACK_TO_TICKET_SELECTION, checkoutMessageHandlers.handleBackToTicketSelection), _defineProperty(_MESSAGE_HANDLER_MAP, constants.MESSAGE_ORDER_COMPLETE, checkoutMessageHandlers.handleOrderComplete), _defineProperty(_MESSAGE_HANDLER_MAP, constants.MESSAGE_PROTECT_CHECKOUT, checkoutMessageHandlers.handleProtectCheckout), _defineProperty(_MESSAGE_HANDLER_MAP, constants.MESSAGE_TICKET_QUANTITY_CHANGE, checkoutMessageHandlers.handleTicketQuantityChange), _MESSAGE_HANDLER_MAP);\n\n/**\n * Check if origin of messages is trusted, i.e. from an EB domain.\n *\n * @param  {String} origin  Origin of message event\n * @return {Boolean}        Whether message event is trusted\n */\nvar _isTrustedMessage = exports._isTrustedMessage = function _isTrustedMessage(origin) {\n    return (0, _window.isEventbriteHostname)(origin);\n};\n\n/**\n * Check if the message contains the necessary eventId and we have a handler set-up for the message.\n *\n * @param  {Object} messageData  Data from window.postMessage\n * @return {Boolean}             Whether we have a handler and eventId\n */\nvar _hasMessageHandler = exports._hasMessageHandler = function _hasMessageHandler(messageData) {\n    return (\n        // Because we're listening to all window messages, we want to verify that the window message has data,\n        // the message is associated with an eventId (otherwise we don't know which iframe fired the message),\n        // and that we have a handler set up for the type of message sent.\n        messageData && (0, _state.getWidgetInstance)(messageData) && messageData.messageName in MESSAGE_HANDLER_MAP\n    );\n};\n\n/**\n * Handle the response when we receive data from window.postMessage. Checks if the message\n * is trusted and whether we have a handler set-up for it, and if so, calls that handler\n * with the message data.\n *\n * @param  {Object} e  Data sent via window.postMessage\n */\nvar _handleMessageEvent = exports._handleMessageEvent = function _handleMessageEvent(e) {\n    // Origin may be in e.originalEvent, see https://developer.mozilla.org/en-US/docs/Web/API/Window/postMessage\n    var origin = e.origin || e.originalEvent.origin;\n    var messageData = e.data;\n\n    if (_isTrustedMessage(origin) && _hasMessageHandler(messageData)) {\n        var widgetInstance = (0, _state.getWidgetInstance)(messageData);\n\n        if (widgetInstance) {\n            MESSAGE_HANDLER_MAP[messageData.messageName](widgetInstance, messageData);\n        }\n    }\n};\n\n/**\n * Set-up cross-browser event listener so we can respond to messages from the iframe\n */\nvar addMessageEventListener = exports.addMessageEventListener = function addMessageEventListener() {\n    var messageEvent = 'onmessage';\n    var eventListenerMethod = window.attachEvent;\n\n    if (window.addEventListener) {\n        eventListenerMethod = window.addEventListener;\n        messageEvent = 'message';\n    }\n\n    eventListenerMethod(messageEvent, _handleMessageEvent);\n};\n\n/**\n * Near cross-browser example to prevent the user form leaving the checkout proccess\n * provided by: https://developer.mozilla.org/en-US/docs/Web/Events/beforeunload\n */\nvar addProtectCheckoutEventListener = exports.addProtectCheckoutEventListener = function addProtectCheckoutEventListener() {\n    return window.addEventListener('beforeunload', function (e) {\n        var confirmationMessage = 'You are in the middle of completing checkout. Are you sure you want to abandon checkout?';\n\n        if ((0, _state.getNumberWidgetInstancesInCheckout)() > 0) {\n            // Gecko, Trident, Chrome 34+\n            e.returnValue = confirmationMessage;\n            // Gecko, WebKit, Chrome <34\n            // return should be explicit to allow `beforeunload` to work\n            /* eslint-disable consistent-return */\n            return confirmationMessage;\n        }\n\n        return;\n    });\n};\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/utils/messages.js\n// module id = 3\n// module chunks = 0\n//# sourceURL=webpack:///./src/utils/messages.js?");
}, function (module, exports, __webpack_require__) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\nexports.handleWidgetMisconfigured = exports.handleWidgetNotEligible = exports.handleWidgetModalClose = exports.handleWidgetRenderComplete = exports._createEventbriteLink = exports.resizeIframe = exports._iframeAutoAdaptPixelsTransform = undefined;\n\nvar _constants = __webpack_require__(1);\n\nvar constants = _interopRequireWildcard(_constants);\n\nvar _logging = __webpack_require__(2);\n\nvar _state = __webpack_require__(5);\n\nvar _window = __webpack_require__(6);\n\nfunction _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }\n\n/**\n * Get and filter iframeAutoAdapt value\n *\n * @param  {Number} iframeAutoAdaptValue  Height percentage based on viewport height\n * @return {Number} Number from 75 to 100\n */\nvar _getIframeAutoAdaptValue = function _getIframeAutoAdaptValue() {\n    var iframeAutoAdaptValue = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : constants.IFRAME_AUTOADAPT_CONFIG.minValue;\n\n    var isBiggerValue = iframeAutoAdaptValue > constants.IFRAME_AUTOADAPT_CONFIG.maxValue;\n    var isSmallerValue = iframeAutoAdaptValue < constants.IFRAME_AUTOADAPT_CONFIG.minValue;\n\n    if (isBiggerValue) {\n        return constants.IFRAME_AUTOADAPT_CONFIG.maxValue;\n    }\n    if (isSmallerValue) {\n        return constants.IFRAME_AUTOADAPT_CONFIG.minValue;\n    }\n\n    return iframeAutoAdaptValue;\n};\n\n/**\n * Calculate iframe height in pixels based on viewport height percentage given on iframeAutoAdapt\n */\nvar _iframeAutoAdaptPixelsTransform = exports._iframeAutoAdaptPixelsTransform = function _iframeAutoAdaptPixelsTransform(viewportHeight, iframeAutoAdaptValue) {\n    var iframeHeightPixels = Math.floor(viewportHeight * _getIframeAutoAdaptValue(iframeAutoAdaptValue) / 100);\n    var isIframeHeightShorterThanMinimum = iframeHeightPixels < constants.MINIMUM_IFRAME_HEIGHT;\n\n    if (isIframeHeightShorterThanMinimum) {\n        iframeHeightPixels = constants.MINIMUM_IFRAME_HEIGHT;\n    }\n\n    return iframeHeightPixels;\n};\n\nvar _shouldAdaptIframe = function _shouldAdaptIframe(userConfiguredHeight, userConfiguredIframeAutoAdapt, viewportHeight) {\n    var viewPortClass = (0, _window.getViewportClass)();\n    var isIframeTallerThanViewport = userConfiguredHeight > viewportHeight;\n    var isSmallViewport = viewPortClass === _window.SMALL;\n    var isIframeAutoAdaptEnabled = userConfiguredIframeAutoAdapt !== constants.IFRAME_AUTOADAPT_CONFIG.disabled;\n\n    return isIframeTallerThanViewport && isSmallViewport && isIframeAutoAdaptEnabled;\n};\n\n/**\n * Resize the specified iframe to the appropriate height when the iframe has rendered.\n *\n * @param  {Object} widgetInstance  The widgetInstance containing the iframe and container\n */\nvar resizeIframe = exports.resizeIframe = function resizeIframe(widgetInstance) {\n    var iframeHeight = void 0;\n\n    var viewportHeight = (0, _window.getViewPortHeight)();\n    var userConfiguredHeight = widgetInstance.userConfig.iframeContainerHeight;\n    var userConfiguredIframeAutoAdapt = widgetInstance.userConfig.iframeAutoAdapt;\n\n    if (_shouldAdaptIframe(userConfiguredHeight, userConfiguredIframeAutoAdapt, viewportHeight)) {\n        iframeHeight = _iframeAutoAdaptPixelsTransform(viewportHeight, userConfiguredIframeAutoAdapt);\n    } else {\n        iframeHeight = userConfiguredHeight > constants.MINIMUM_IFRAME_HEIGHT ? userConfiguredHeight : constants.MINIMUM_IFRAME_HEIGHT;\n    }\n    widgetInstance.iframeContainer.style.height = iframeHeight + 'px';\n};\n\nvar _isEventbriteLinkRendered = function _isEventbriteLinkRendered(widgetInstance, linkId) {\n    return widgetInstance.iframeContainer.parentNode.innerHTML.indexOf(linkId) > -1;\n};\n\n/**\n * Display a View On Eventbrite link below the widget container\n *\n * @param  {Object} widgetInstance      The widgetInstance containing the iframe and container\n * @param  {Number} id             The event or user id, used for targeting container in automation\n * @param  {String} canonicalEventUrl   The full canonical event url include event name slug\n * @param  {String} translatedLinkText  The translated \"View On Eventbrite\" text\n */\nvar _createEventbriteLink = exports._createEventbriteLink = function _createEventbriteLink(widgetInstance, id, canonicalEventUrl, translatedLinkText) {\n    var widgetType = widgetInstance.userConfig.widgetType;\n    var linkId = widgetType + '-widget-link-' + id;\n\n    // If we refresh the page within the iframe we don't want multiple \"View On Eventbrite\" links\n    if (_isEventbriteLinkRendered(widgetInstance, linkId)) {\n        return;\n    }\n\n    var eventbriteLink = document.createElement('a');\n\n    eventbriteLink.href = canonicalEventUrl + '?ref=' + constants.WIDGET_REF_CODES[widgetType];\n    eventbriteLink.innerHTML = translatedLinkText;\n    eventbriteLink.target = '_blank';\n\n    eventbriteLink.style.display = 'block';\n    eventbriteLink.style.margin = '10px 0';\n    eventbriteLink.style.textDecoration = 'none';\n    eventbriteLink.style.color = '#00ACAF';\n    eventbriteLink.style.fontFamily = 'Benton Sans, Helvetica, Arial, sans-serif';\n    eventbriteLink.style.textAlign = 'center';\n\n    eventbriteLink.setAttribute('data-automation', linkId);\n\n    widgetInstance.iframeContainer.parentNode.insertBefore(eventbriteLink, widgetInstance.iframeContainer.nextSibling);\n};\n\n/**\n * When the iframe is done rendering, resize the iframe and generate the View On Eventbrite link (inline widgets only).\n *\n * @param  {Object} widgetInstance  The widgetInstance containing the iframe and container\n * @param  {Object} messageData     The message data containing the widget height and translated link text\n */\nvar handleWidgetRenderComplete = exports.handleWidgetRenderComplete = function handleWidgetRenderComplete(widgetInstance, messageData) {\n    if (widgetInstance.iframeContainer) {\n        resizeIframe(widgetInstance);\n\n        // Save the original iframe height on render so we can return it to its original size later\n        widgetInstance.computedHeight = messageData.widgetHeight + 'px';\n\n        if (messageData.canonicalEventUrl && messageData.translatedLinkText) {\n            _createEventbriteLink(widgetInstance, messageData.eventId, messageData.canonicalEventUrl, messageData.translatedLinkText);\n        }\n    }\n\n    var overlay = document.getElementById('eventbrite-widget-modal-overlay');\n    var loader = document.getElementById('eventbrite-widget-modal-loader');\n\n    if (overlay && loader) {\n        overlay.removeChild(loader);\n    }\n};\n\n/**\n * Close the modal when triggered\n */\nvar handleWidgetModalClose = exports.handleWidgetModalClose = function handleWidgetModalClose(widgetInstance) {\n    var body = document.getElementsByTagName('body')[0];\n    var overlay = document.getElementById('eventbrite-widget-modal-overlay');\n    var _widgetInstance$widge = widgetInstance.widgetIdentifier;\n    _widgetInstance$widge = _widgetInstance$widge === undefined ? {} : _widgetInstance$widge;\n    var id = _widgetInstance$widge.id;\n\n    var iframe = document.getElementById('eventbrite-widget-modal-' + id);\n\n    overlay.style.opacity = 0;\n    overlay.style.background = 'rgba(0, 0, 0, 0)';\n    overlay.style.width = 0;\n    overlay.style.height = 0;\n\n    body.style.overflow = widgetInstance.originalBodyOverflow;\n    body.style.position = widgetInstance.originalBodyPosition;\n\n    if (iframe) {\n        iframe.parentNode.removeChild(iframe);\n    }\n\n    if (widgetInstance.userConfig && widgetInstance.userConfig.onWidgetModalClose) {\n        widgetInstance.userConfig.onWidgetModalClose();\n    }\n};\n\n/**\n * Tell the parent window to, if possible, open a new window/tab to or redirect to the event listing on Eventbrite for events not currently supported by the widget (modal widget only).\n *\n * @param  {Object} widgetInstance  The widgetInstance containing the iframe and container\n * @param  {Object} messageData  The message data containing, at a minimum the eventId, and, optionally, the canonicalEventUrl\n */\nvar handleWidgetNotEligible = exports.handleWidgetNotEligible = function handleWidgetNotEligible(widgetInstance, messageData) {\n    if (messageData.canonicalEventUrl) {\n        (0, _window.redirectToUrl)(messageData.canonicalEventUrl);\n    } else {\n        (0, _window.redirectToUrl)((0, _window.getEventListingUrl)(messageData.eventId));\n    }\n\n    // Close the modal in case we opened a new window or tab.\n    handleWidgetModalClose(widgetInstance, messageData);\n};\n\n/**\n * Display a message indicating that the widget is misconfigured, log the misconfiguration, and close the modal.\n *\n * @param  {Object} widgetInstance  The widgetInstance containing the iframe and container\n * @param  {Object} messageData  The message data containing the configured value for eventId or userId. Note that, if this handler is triggered, eventId or userId will not reference a valid Eventbrite event or user.\n */\nvar handleWidgetMisconfigured = exports.handleWidgetMisconfigured = function handleWidgetMisconfigured(widgetInstance, messageData) {\n    var userConfig = widgetInstance.userConfig,\n        _widgetInstance$widge2 = widgetInstance.widgetIdentifier;\n    _widgetInstance$widge2 = _widgetInstance$widge2 === undefined ? {} : _widgetInstance$widge2;\n    var _widgetInstance$widge3 = _widgetInstance$widge2.id,\n        widgetId = _widgetInstance$widge3 === undefined ? 'unknown' : _widgetInstance$widge3,\n        _widgetInstance$widge4 = _widgetInstance$widge2.idKey,\n        widgetIdKey = _widgetInstance$widge4 === undefined ? 'id' : _widgetInstance$widge4,\n        _widgetInstance$widge5 = _widgetInstance$widge2.idDisplayName,\n        widgetIdDisplayName = _widgetInstance$widge5 === undefined ? 'Id' : _widgetInstance$widge5;\n\n    var domElementId = 'unknown';\n\n    if (userConfig) {\n        domElementId = userConfig.modalTriggerElementId || userConfig.iframeContainerId || 'unknown';\n    }\n\n    (0, _logging.logError)('Widget ' + widgetIdKey + ' ' + widgetId + ' with domElementId ' + domElementId + ' misconfigured', _state.widgetHostname);\n    (0, _logging.logErrorForUser)('Widget for ' + widgetIdKey + ' ' + widgetId + ' with domElementId ' + domElementId + ' is misconfigured. Check that ' + widgetIdKey + ' is valid.');\n\n    /* eslint-disable no-alert */\n    (0, _window.windowAlert)(widgetIdDisplayName + ' ' + widgetId + ' cannot be found. Please contact the site owner to resolve this issue.');\n\n    handleWidgetModalClose(widgetInstance, messageData);\n};\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/message_handlers.js\n// module id = 4\n// module chunks = 0\n//# sourceURL=webpack:///./src/message_handlers.js?");
}, function (module, exports, __webpack_require__) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\nexports.updateWidgetInstancesInCheckout = exports.getNumberWidgetInstancesInCheckout = exports.parentSiteIsHttps = exports.widgetHostname = exports.updateWidgetInstance = exports.getWidgetInstance = exports.getWidgetInstanceIdentifier = undefined;\n\nvar _extends = Object.assign || function (target) { for (var i = 1; i < arguments.length; i++) { var source = arguments[i]; for (var key in source) { if (Object.prototype.hasOwnProperty.call(source, key)) { target[key] = source[key]; } } } return target; };\n\nvar _constants = __webpack_require__(1);\n\nvar _window = __webpack_require__(6);\n\nfunction _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\n\n/** \n * Hashtable of widget instances based on widget type and widgetTypeId.\n * This will initialize the instance lookup with the valid types.\n * @type {[type]: {}}\n */\nvar widgetInstances = _constants.VALID_WIDGET_TYPES.reduce(function (instances, type) {\n    return _extends({}, instances, _defineProperty({}, type, {}));\n}, {});\n\nvar widgetInstancesInCheckout = 0;\n\n/**\n * Get a widget id based on the widget config\n * @param {widgetType, <idKey: based on widget type>} widgetConfig \n */\nvar getWidgetInstanceIdentifier = exports.getWidgetInstanceIdentifier = function getWidgetInstanceIdentifier(widgetConfig) {\n    // Get widgetType and default to checkout type\n    // Eg. {widgetType: 'checkout', ...}\n    var _widgetConfig$widgetT = widgetConfig.widgetType,\n        widgetType = _widgetConfig$widgetT === undefined ? _constants.WIDGET_TYPE_CHECKOUT : _widgetConfig$widgetT;\n    // Get the widget config id key based on widget type\n    // Eg. {'checkout': {idKey: 'eventId'}}\n\n    var _ref = _constants.WIDGET_TYPE_IDS[widgetType] || {},\n        idKey = _ref.idKey,\n        idDisplayName = _ref.idDisplayName;\n    // Get the widget type id value from the widget config\n    // Eg. {eventId: ':id'}\n\n\n    var id = widgetConfig[idKey];\n\n\n    return {\n        id: id,\n        type: widgetType,\n        idKey: idKey,\n        idDisplayName: idDisplayName\n    };\n};\n\n/**\n * Get a widget instance based on the widget config\n * @param {widgetConfig: {widgetType, <entityId>} widgetConfig \n */\nvar getWidgetInstance = exports.getWidgetInstance = function getWidgetInstance(widgetConfig) {\n    var _getWidgetInstanceIde = getWidgetInstanceIdentifier(widgetConfig),\n        type = _getWidgetInstanceIde.type,\n        id = _getWidgetInstanceIde.id;\n\n    var _widgetInstances$type = widgetInstances[type];\n    _widgetInstances$type = _widgetInstances$type === undefined ? {} : _widgetInstances$type;\n    var widgetInstance = _widgetInstances$type[id];\n\n\n    return widgetInstance;\n};\n\n/**\n * \n * @param {widgetIdentifier: {id, type}} widgetConfig \n * @param {Object} instanceData \n * @param {Boolean} initialize If true the instance will be reset with the supplied instanceData\n */\nvar updateWidgetInstance = exports.updateWidgetInstance = function updateWidgetInstance(widgetConfig) {\n    var instanceData = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};\n    var initialize = arguments[2];\n    var _widgetConfig$widgetI = widgetConfig.widgetIdentifier;\n    _widgetConfig$widgetI = _widgetConfig$widgetI === undefined ? {} : _widgetConfig$widgetI;\n    var type = _widgetConfig$widgetI.type,\n        id = _widgetConfig$widgetI.id;\n\n    // Validate widget type and id\n\n    if (_constants.VALID_WIDGET_TYPES.indexOf(type) < 0 || !id) {\n        return undefined;\n    }\n\n    var prevWidgetInstance = widgetInstances[type][id];\n\n    // Reset widgetInstance if initialize is true\n    if (initialize === true) {\n        prevWidgetInstance = {};\n    }\n\n    widgetInstances[type][id] = _extends({}, prevWidgetInstance, instanceData);\n\n    return widgetInstances[type][id];\n};\n\nvar widgetHostname = exports.widgetHostname = (0, _window.getWidgetHostFromScript)();\n\nvar parentSiteIsHttps = exports.parentSiteIsHttps = (0, _window.isHttps)();\n\nvar getNumberWidgetInstancesInCheckout = exports.getNumberWidgetInstancesInCheckout = function getNumberWidgetInstancesInCheckout() {\n    return widgetInstancesInCheckout;\n};\n\n/**\n * Increments or decrements the counter of widgets that are on the checkout process\n *\n * @param  {Object} method  It is expected to receive 'set' or 'remove'\n */\nvar updateWidgetInstancesInCheckout = exports.updateWidgetInstancesInCheckout = function updateWidgetInstancesInCheckout(method) {\n    if (method === 'set') {\n        widgetInstancesInCheckout += 1;\n    } else {\n        widgetInstancesInCheckout -= 1;\n    }\n};\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/state.js\n// module id = 5\n// module chunks = 0\n//# sourceURL=webpack:///./src/state.js?");
}, function (module, exports) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\n\nvar _VIEW_PORT_CLASSES;\n\nfunction _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\n\n// The \"useless\" escapes escape periods in our hostname regex\n/* eslint-disable no-useless-escape */\n\n// This includes all TLDs listed in ebapps/i18n/locale_defaults.py in core.\n// Some of them are not yet enabled in prod.\nvar EVENTBRITE_TLDS = ['be', 'ca', 'ca', 'cl', 'co', 'co\\\\.nz', 'co\\\\.uk', 'com', 'com\\\\.ar', 'com\\\\.au', 'com\\\\.br', 'com\\\\.mx', 'de', 'es', 'fr', 'hk', 'ie', 'in', 'it', 'nl', 'pe', 'pt', 'se', 'sg'];\n\nvar EVENTBRITE_DOMAIN_NAMES = ['eventbrite', 'evbstage', 'evbdev',\n// This will match all qa servers (from 0 to 99... note that at the time of writing, we only go till 18...)\n// This includes evbqa 5-7,16 that we do NOT control outside of our VPN: you should not access these outside of the VPN, even at the office,\n// more info here: https://confluence.evbhome.com/display/QA/Reserving+QA+Servers+for+Testing\n'evbqa\\\\d{0,2}'];\n\nvar EVENTBRITE_HOSTNAME_REGEX = new RegExp(\n// The extra \\ in front of \\d* here and the \\. above is necessary to escape the\n// escape character so it can be read as regex, not a normal string escape\n'^(www\\\\.)?(' + EVENTBRITE_DOMAIN_NAMES.join('|') + ')\\\\.(' + EVENTBRITE_TLDS.join('|') + ')$');\n\nvar PROTOCOL_REGEX = /^http(s)?:\\/\\//;\n\n/**\n * Get the widget script tag, i.e. the script tag that we've given organizers to place on their page.\n * This ensures the tld of the script tag matches the tld of the event we load in the iframe.\n *\n * @return {Object}  The widget script element\n */\nvar _getWidgetScript = function _getWidgetScript() {\n    // document.currentScript will return the widget script tag even if the async attribute is added\n    // to the <script> tag, but is not supported by IE.\n    var currentScript = document.currentScript || function () {\n        var scripts = document.getElementsByTagName('script');\n\n        return scripts[scripts.length - 1];\n    }();\n\n    return currentScript;\n};\n\n/**\n * Check if _getWidgetScript returned an Eventbrite hostname. Fixes a bug in Microsoft Edge\n * where the fallback in _getWidgetScript returns the wrong script tag (EB-55558). This regex should match:\n *\n * www.evbdev.com (with www.)\n * evbdev.com (without www.)\n * evbqa.hk (non-.com tlds)\n * eventbrite.co.uk (two-part tlds)\n * evbqa12.fr (evbqa + number)\n *\n * @param  {String} hostname  Hostname from _getWidgetScript\n * @return {Boolean}          Whether the host is Eventbrite\n */\nvar isEventbriteHostname = exports.isEventbriteHostname = function isEventbriteHostname(hostname) {\n    return EVENTBRITE_HOSTNAME_REGEX.test(hostname.replace(PROTOCOL_REGEX, ''));\n};\n\n/**\n * Get the widget hostname from the script tag. We use this hostname to create the iframe src\n * url as well as verify any messages sent through window.postMessage() belong to us.\n *\n * @return {String}  An Eventbrite hostname (e.g. https://www.eventbrite.de)\n */\nvar getWidgetHostFromScript = exports.getWidgetHostFromScript = function getWidgetHostFromScript() {\n    var linkParser = document.createElement('a');\n    var widgetScript = _getWidgetScript();\n\n    linkParser.href = widgetScript.src;\n\n    var hostname = linkParser.hostname;\n\n    if (!isEventbriteHostname(hostname)) {\n        hostname = 'www.eventbrite.com';\n    }\n\n    return 'https://' + hostname;\n};\n\n/**\n * Given an eventId, return the url for its associated Eventbrite\n * listing. Note that this does not attempt to validate the eventId\n * parameter\n *\n * @param  {String} eventId The event id\n * @return {String} an event listing url like:\n *   https://www.eventbrite.com/e/24273536802\n *   The Eventbrite hostname in the returned value will match that of\n *   the widget. Be aware that navigating to the url above will\n *   trigger an extra server-side redirect from\n *   /e/<event_id> to\n *   /e/slugified-event-name-<event_id>\n *   So, if the canonical event url is known, it is preferred not to\n *   compute the listing url using this method.\n */\nvar getEventListingUrl = exports.getEventListingUrl = function getEventListingUrl(eventId) {\n    return getWidgetHostFromScript() + '/e/' + eventId;\n};\n\n/**\n * isHttps returns true if the browser url is an https page.\n */\nvar isHttps = exports.isHttps = function isHttps() {\n    return window.location.protocol === 'https:';\n};\n\n/**\n * Redirect the browser or open a new window to the specified url.\n *\n * @param  {String} url  Url to redirect to.\n * @param  {Boolean} shouldOpenNewWindow  Attempt to open url in new\n *   window/tab if true, which is the default.\n */\nvar redirectToUrl = exports.redirectToUrl = function redirectToUrl(url) {\n    var shouldOpenNewWindow = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : true;\n\n    var newWindow = null;\n\n    if (shouldOpenNewWindow) {\n        newWindow = window.open(url, '_blank');\n    }\n\n    if (newWindow) {\n        // Successfully opened a new window, change focus to it.\n        newWindow.focus();\n    } else {\n        // If we got here, we either didn't want to open in a new\n        // window, or couldn't open one, possibly due to popup\n        // blocking. Navigate to the desired url.\n        window.location.href = url;\n    }\n};\n\nvar SMALL = exports.SMALL = 'small';\nvar MEDIUM = 'medium';\nvar LARGE = 'large';\nvar NOT_APPLICABLE = 'na';\n\nvar VIEW_PORT_CLASSES = (_VIEW_PORT_CLASSES = {}, _defineProperty(_VIEW_PORT_CLASSES, LARGE, function (viewportWidth) {\n    return viewportWidth >= 800;\n}), _defineProperty(_VIEW_PORT_CLASSES, MEDIUM, function (viewportWidth) {\n    return viewportWidth >= 480;\n}), _defineProperty(_VIEW_PORT_CLASSES, SMALL, function (viewportWidth) {\n    return viewportWidth;\n}), _defineProperty(_VIEW_PORT_CLASSES, NOT_APPLICABLE, function (viewportWidth) {\n    return !viewportWidth;\n}), _VIEW_PORT_CLASSES);\n\nvar getViewPortWidth = exports.getViewPortWidth = function getViewPortWidth() {\n    return window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth;\n};\n\nvar getViewPortHeight = exports.getViewPortHeight = function getViewPortHeight() {\n    return window.innerHeight || document.documentElement.clientHeight || document.body.clientHeight;\n};\n\n/**\n * Common functions for getting view port size as 'Small/Medium/Large'\n */\nvar getViewportClass = exports.getViewportClass = function getViewportClass() {\n    var idx = 0;\n    var keys = Object.keys(VIEW_PORT_CLASSES);\n    var len = keys.length;\n\n    while (idx < len) {\n        if (VIEW_PORT_CLASSES[keys[idx]](getViewPortWidth())) {\n            return keys[idx];\n        }\n        idx += 1;\n    }\n\n    return VIEW_PORT_CLASSES[NOT_APPLICABLE];\n};\n\n/* eslint-disable no-alert */\nvar windowAlert = exports.windowAlert = function windowAlert(msg) {\n    return window.alert(msg);\n};\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/utils/window.js\n// module id = 6\n// module chunks = 0\n//# sourceURL=webpack:///./src/utils/window.js?");
}, function (module, exports, __webpack_require__) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\nexports.handleProtectCheckout = exports.handleTicketQuantityChange = exports.handleOrderComplete = exports.handleBackToTicketSelection = exports.handleOrderStart = undefined;\n\nvar _message_handlers = __webpack_require__(4);\n\nvar _state = __webpack_require__(5);\n\n/**\n * Resize the specified iframe to height of checkout form when the user clicks the order start button.\n *\n * @param  {Object} widgetInstance  The widgetInstance containing the iframe and container\n */\nvar handleOrderStart = exports.handleOrderStart = function handleOrderStart(widgetInstance) {\n    if (widgetInstance.iframeContainer) {\n        (0, _message_handlers.resizeIframe)(widgetInstance);\n    }\n};\n\n/**\n * Return the specified iframe to its original dimensions and location on the page.\n *\n * @param  {Object} widgetInstance  The widgetInstance containing the iframe and container\n */\nvar handleBackToTicketSelection = exports.handleBackToTicketSelection = function handleBackToTicketSelection(widgetInstance) {\n    if (widgetInstance.iframeContainer) {\n        widgetInstance.iframeContainer.style.height = widgetInstance.computedHeight;\n    }\n};\n\n/**\n * Call the onOrderComplete function and pass the orderId when the iframe triggers order complete,\n * if the user has specified a callback.\n *\n * @param  {Object} widgetInstance  The widgetInstance containing the iframe and container\n */\nvar handleOrderComplete = exports.handleOrderComplete = function handleOrderComplete(widgetInstance, messageData) {\n    if (widgetInstance.userConfig.onOrderComplete) {\n        var orderId = messageData.orderId;\n\n\n        widgetInstance.userConfig.onOrderComplete({ orderId: orderId });\n    }\n};\n\n/**\n * Call the onTicketQuantityChange function when the iframe triggers a ticket quantity change,\n * if the user has specified a callback.\n *\n * @param  {Object} widgetInstance  The widgetInstance containing the iframe and container\n */\nvar handleTicketQuantityChange = exports.handleTicketQuantityChange = function handleTicketQuantityChange(widgetInstance, messageData) {\n    if (widgetInstance.userConfig.onTicketQuantityChange) {\n        var id = messageData.id,\n            quantity = messageData.quantity;\n\n\n        widgetInstance.userConfig.onTicketQuantityChange({ ticketId: id, quantity: quantity });\n    }\n};\n\n/**\n * When the user tries to reload the page while on the checkout proccess, we should catch the action and\n * alert the user that he is leaving the proccess. We use a global array to keep track of the widgets\n * that are on the checkout proccess.\n *\n * @param  {Object} widgetInstance  The widgetInstance containing the iframe and container\n * @param  {Object} messageData     The message data containing additional info to enable or disable the event\n */\nvar handleProtectCheckout = exports.handleProtectCheckout = function handleProtectCheckout(widgetInstance, messageData) {\n    var method = void 0;\n\n    if (messageData.disable) {\n        method = 'remove';\n    } else {\n        method = 'set';\n    }\n    (0, _state.updateWidgetInstancesInCheckout)(method);\n};\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/checkout/message_handlers.js\n// module id = 7\n// module chunks = 0\n//# sourceURL=webpack:///./src/checkout/message_handlers.js?");
}, function (module, exports, __webpack_require__) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\nexports.createWidget = exports.isWidgetConfigValid = undefined;\n\nvar _typeof = typeof Symbol === \"function\" && typeof Symbol.iterator === \"symbol\" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === \"function\" && obj.constructor === Symbol && obj !== Symbol.prototype ? \"symbol\" : typeof obj; };\n\nvar _constants = __webpack_require__(1);\n\nvar constants = _interopRequireWildcard(_constants);\n\nvar _create_inline = __webpack_require__(9);\n\nvar _create_modal = __webpack_require__(10);\n\nvar _utils = __webpack_require__(11);\n\nvar _logging = __webpack_require__(2);\n\nfunction _interopRequireWildcard(obj) { if (obj && obj.__esModule) { return obj; } else { var newObj = {}; if (obj != null) { for (var key in obj) { if (Object.prototype.hasOwnProperty.call(obj, key)) newObj[key] = obj[key]; } } newObj.default = obj; return newObj; } }\n\nfunction _defineProperty(obj, key, value) { if (key in obj) { Object.defineProperty(obj, key, { value: value, enumerable: true, configurable: true, writable: true }); } else { obj[key] = value; } return obj; }\n\nvar CREATE_IFRAME_SRC_MAP = _defineProperty({}, constants.WIDGET_TYPE_CHECKOUT, _utils.getCheckoutIframeSrc);\n\nvar _isCorrectType = function _isCorrectType(property, expectedTypes) {\n    var allowedTypes = [];\n    var isCorrectType = false;\n\n    if (typeof expectedTypes === 'string') {\n        allowedTypes.push(expectedTypes);\n    } else {\n        // If expectedTypes is not a string, it's an array\n        allowedTypes = expectedTypes;\n    }\n\n    allowedTypes.forEach(function (allowedType) {\n        if ((typeof property === 'undefined' ? 'undefined' : _typeof(property)) === allowedType) {\n            isCorrectType = true;\n        }\n    });\n\n    return isCorrectType;\n};\n\nvar _isValidConfig = function _isValidConfig(configSchema, widgetConfig) {\n    for (var property in configSchema) {\n        if (configSchema.hasOwnProperty(property)) {\n            var expectedAttributes = configSchema[property];\n\n            if (expectedAttributes.required && widgetConfig[property] === undefined) {\n                (0, _logging.logErrorForUser)('\\'' + property + '\\' is a required property');\n                return false;\n            }\n\n            if (widgetConfig[property] && !_isCorrectType(widgetConfig[property], expectedAttributes.type)) {\n                (0, _logging.logErrorForUser)('\\'' + property + '\\' should be: ' + expectedAttributes.type);\n                return false;\n            }\n        }\n    }\n    return true;\n};\n\n/**\n * Determine if the user's widget config is valid. Uses a WIDGET_CONFIG_SCHEMA to\n * check that widget options are the correct type/present if required.\n *\n * @param  {Object} widgetConfig  A user-specified config object\n * @return {bool}                 True if the config object is valid\n */\nvar isWidgetConfigValid = exports.isWidgetConfigValid = function isWidgetConfigValid(widgetConfig) {\n    if (!widgetConfig) {\n        return false;\n    }\n\n    if (!_isValidConfig(constants.WIDGET_CONFIG_SCHEMA, widgetConfig)) {\n        return false;\n    }\n\n    if (constants.VALID_WIDGET_TYPES.indexOf(widgetConfig.widgetType) < 0) {\n        (0, _logging.logErrorForUser)('\\'' + widgetConfig.widgetType + '\\' is not a valid widgetType');\n        return false;\n    }\n\n    // Validate particular widget schema based on widgetType\n    var widgetTypeConfigSchema = constants.WIDGET_TYPE_CONFIG_SCHEMA[widgetConfig.widgetType];\n\n    return _isValidConfig(widgetTypeConfigSchema, widgetConfig);\n};\n\n/**\n * Create either inline or modal widget depending on user config\n *\n * @param  {object} widgetConfig  A validated user-specified config object\n */\nvar createWidget = exports.createWidget = function createWidget(widgetConfig) {\n    var widgetType = widgetConfig.widgetType,\n        modal = widgetConfig.modal;\n\n    var iframeSrc = CREATE_IFRAME_SRC_MAP[widgetType](widgetConfig);\n\n    if (modal) {\n        (0, _create_modal.createModalWidget)(widgetConfig, iframeSrc);\n    } else {\n        (0, _create_inline.createInlineWidget)(widgetConfig, iframeSrc);\n    }\n};\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/initialize.js\n// module id = 8\n// module chunks = 0\n//# sourceURL=webpack:///./src/initialize.js?");
}, function (module, exports, __webpack_require__) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\nexports.createInlineWidget = undefined;\n\nvar _state = __webpack_require__(5);\n\nvar _logging = __webpack_require__(2);\n\nvar HEIGHT_TRANSITION_STYLE = 'height 0.5s ease-in-out';\nvar TRANSITION_END_EVENT = 'transitionend webkitTransitionEnd oTransitionEnd';\n\n/**\n * Creates an iframe pointing to /checkout-external\n *\n * @param  {widgetIdentifier: {type, id}} widgetConfig  The widget config\n * @param  {String} iframeSrc  The iframe src\n * @return {Object}          The generated iframe\n */\nvar _createIframe = function _createIframe(widgetConfig, iframeSrc) {\n    var _widgetConfig$widgetI = widgetConfig.widgetIdentifier;\n    _widgetConfig$widgetI = _widgetConfig$widgetI === undefined ? {} : _widgetConfig$widgetI;\n    var type = _widgetConfig$widgetI.type,\n        id = _widgetConfig$widgetI.id;\n\n    var iframe = document.createElement('iframe');\n\n    iframe.src = iframeSrc;\n\n    // The sandbox attribute has been commented in order to solver a 3DSecure2-related critical issue.\n    // The JIRA ticket EB-122628 is aimed to investigate the underlying reason behind having this sandbox\n    // attribute in the first place and whether is is needed to reintroduce it.\n    // iframe.sandbox = 'allow-modals allow-scripts allow-forms allow-same-origin allow-popups allow-popups-to-escape-sandbox allow-top-navigation';\n\n    iframe.setAttribute('data-automation', type + '-widget-iframe-' + id);\n    iframe.setAttribute('allowtransparency', true);\n    iframe.setAttribute('frameborder', 0);\n    iframe.setAttribute('scrolling', 'auto');\n    iframe.setAttribute('width', '100%');\n    iframe.setAttribute('height', '100%');\n\n    return iframe;\n};\n\nvar _handleTransitionEnd = function _handleTransitionEnd(event) {\n    if (event.propertyName === 'height' && window.dispatchEvent) {\n        window.dispatchEvent(new Event('resize'));\n    }\n};\n\n/**\n * Takes the created iFrame, puts it in the iFrame container, and\n * appends it to the page.\n *\n * @param  {element} widgetConfig with eventId or userId, widgetType, and googleAnalyticsClientId\n * @param  {element} iframeContainer\n * @param  {String}  iframeSrc\n */\nvar _appendIframeToPage = function _appendIframeToPage(widgetConfig, iframeContainer, iframeSrc) {\n    // We need to explicitly set style.height in order for the transition to work,\n    // so just set it to whatever height the container already is\n    iframeContainer.style.height = iframeContainer.clientHeight;\n\n    iframeContainer.style.webkitTransition = HEIGHT_TRANSITION_STYLE;\n    iframeContainer.style.mozTransition = HEIGHT_TRANSITION_STYLE;\n    iframeContainer.style.transition = HEIGHT_TRANSITION_STYLE;\n\n    iframeContainer.addEventListener(TRANSITION_END_EVENT, _handleTransitionEnd);\n\n    var iframe = _createIframe(widgetConfig, iframeSrc);\n\n    iframeContainer.appendChild(iframe);\n\n    (0, _state.updateWidgetInstance)(widgetConfig, {\n        iframe: iframe,\n        iframeContainer: iframeContainer\n    });\n};\n\n/**\n * Creates the widget iframe and inserts it into the user-specified iframeContainer,\n * if it exists. If it does not yet exist when the script is being run, it will wait\n * for the DOM to finish loading, and check again for its existence. If it still does\n * not exist at this point, it will log an error.\n *\n * Also saves the widget iframe and container in widgetInstancesById for later use.\n *\n * @param  {object} widgetConfig  A validated user-specified config object\n * @param  {String} iframeSrc  The iframe src\n */\nvar createInlineWidget = exports.createInlineWidget = function createInlineWidget() {\n    var widgetConfig = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};\n    var iframeSrc = arguments[1];\n    var iframeContainerId = widgetConfig.iframeContainerId,\n        _widgetConfig$widgetI2 = widgetConfig.widgetIdentifier;\n    _widgetConfig$widgetI2 = _widgetConfig$widgetI2 === undefined ? {} : _widgetConfig$widgetI2;\n    var id = _widgetConfig$widgetI2.id,\n        idDisplayName = _widgetConfig$widgetI2.idDisplayName;\n\n\n    if (!iframeContainerId) {\n        (0, _logging.logErrorForUser)('Inline widgets require an iframeContainerId');\n        return;\n    }\n\n    var iframeContainer = document.getElementById(iframeContainerId);\n\n    if (!iframeContainer) {\n        document.addEventListener('DOMContentLoaded', function () {\n            iframeContainer = document.getElementById(iframeContainerId);\n\n            if (!iframeContainer) {\n                (0, _logging.logErrorForUser)('Iframe container \\'' + iframeContainerId + '\\'\\n                    for ' + idDisplayName + ' \\'' + id + '\\' not found');\n            } else {\n                _appendIframeToPage(widgetConfig, iframeContainer, iframeSrc);\n            }\n        });\n        return;\n    }\n\n    _appendIframeToPage(widgetConfig, iframeContainer, iframeSrc);\n};\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/create_inline.js\n// module id = 9\n// module chunks = 0\n//# sourceURL=webpack:///./src/create_inline.js?");
}, function (module, exports, __webpack_require__) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\nexports.createModalWidget = undefined;\n\nvar _state = __webpack_require__(5);\n\nvar _logging = __webpack_require__(2);\n\nvar _window = __webpack_require__(6);\n\nvar MAX_RECURSION_LIMIT = 20;\nvar HIGHEST_POSSIBLE_Z_INDEX = 2147483647;\nvar ROTATE_KEYFRAMES_CSS = '\\n    @-webkit-keyframes eventbrite-widget-modal-loader-rotate {\\n        to {\\n            -webkit-transform: rotate(360deg);\\n            transform: rotate(360deg);\\n        }\\n    }\\n\\n    @keyframes eventbrite-widget-modal-loader-rotate {\\n        to {\\n            -webkit-transform: rotate(360deg);\\n            transform: rotate(360deg);\\n        }\\n    }\\n';\n// This SVG HTML is copied from EDS. Will have to be updated manually if EDS changes its progress indicators\nvar SPINNER_SVG = '<svg id=\"eventbrite-widget-modal-loader\" viewBox=\"0 0 100 100\" style=\"position: absolute; top: 50%; left: 50%; margin-left: -48px; margin-top: -48px; width: 96px; height: 96px; -webkit-animation-iteration-count: infinite; animation-iteration-count: infinite; -webkit-animation-fill-mode: forwards; animation-fill-mode: forwards; -webkit-animation: rotate 800ms linear infinite; animation: eventbrite-widget-modal-loader-rotate 800ms linear infinite;\" aria-valuetext=\"In progress\" data-reactid=\"6\"><defs data-reactid=\"7\"><linearGradient id=\"stroke-large-chunky-gradient-indeterminate\" data-reactid=\"8\"><stop offset=\"0%\" stop-color=\"#1de1e1\" data-reactid=\"9\"></stop><stop offset=\"50%\" stop-color=\"#1de1e1\" data-reactid=\"10\"></stop><stop offset=\"100%\" stop-color=\"#6aedc7\" stop-opacity=\"0\" data-reactid=\"11\"></stop></linearGradient></defs><path d=\"M93.5,50C93.5,74,74,93.5,50,93.5S6.5,74,6.5,50S26,6.5,50,6.5\" stroke=\"url(#stroke-large-chunky-gradient-indeterminate)\" stroke-width=\"4\" stroke-linecap=\"round\" shape-rendering=\"geometricPrecision\" fill=\"none\" data-reactid=\"12\"></path></svg>';\n\n/**\n * Creates an iframe pointing to /checkout-external\n *\n * @param  {Object} widgetConfig  The widget config including widgetIdentifier\n * @param  {String} iframeSrc  The iframe src\n * @return {Object}          The generated iframe\n */\nvar _createIframe = function _createIframe() {\n    var widgetConfig = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};\n    var iframeSrc = arguments[1];\n\n    var iframe = document.createElement('iframe');\n    var _widgetConfig$widgetI = widgetConfig.widgetIdentifier;\n    _widgetConfig$widgetI = _widgetConfig$widgetI === undefined ? {} : _widgetConfig$widgetI;\n    var id = _widgetConfig$widgetI.id,\n        type = _widgetConfig$widgetI.type;\n\n\n    iframe.src = iframeSrc;\n\n    // Add id to iframe so we find and delete it when the user closes the modal\n    iframe.id = 'eventbrite-widget-modal-' + id;\n\n    // The sandbox attribute has been commented in order to solver a 3DSecure2-related critical issue.\n    // The JIRA ticket EB-122628 is aimed to investigate the underlying reason behind having this sandbox\n    // attribute in the first place and whether is is needed to reintroduce it.\n    // iframe.sandbox = 'allow-modals allow-scripts allow-forms allow-same-origin allow-popups allow-popups-to-escape-sandbox allow-top-navigation';\n\n    iframe.setAttribute('data-automation', type + '-widget-iframe-' + id);\n    iframe.setAttribute('allowtransparency', true);\n    iframe.setAttribute('allowfullscreen', true);\n    iframe.setAttribute('frameborder', 0);\n\n    // Modal takeover styles\n    iframe.style.zIndex = HIGHEST_POSSIBLE_Z_INDEX;\n    iframe.style.position = 'fixed';\n    iframe.style.top = 0;\n    iframe.style.left = 0;\n    iframe.style.right = 0;\n    iframe.style.bottom = 0;\n    iframe.style.margin = 0;\n    iframe.style.border = 0;\n    iframe.style.width = '100%';\n    iframe.style.height = '100%';\n\n    return iframe;\n};\n\nvar _createOverlay = function _createOverlay() {\n    var keyframeStyles = document.createElement('style');\n    var overlay = document.createElement('div');\n    var body = document.getElementsByTagName('body')[0];\n\n    keyframeStyles.innerHTML = ROTATE_KEYFRAMES_CSS;\n    body.appendChild(keyframeStyles);\n\n    overlay.id = 'eventbrite-widget-modal-overlay';\n\n    overlay.style.opacity = 0;\n    overlay.style.background = 'rgba(0, 0, 0, 0)';\n    overlay.style.transition = 'opacity 1s ease-in-out, background 1s ease-in-out';\n    overlay.style.zIndex = HIGHEST_POSSIBLE_Z_INDEX;\n    overlay.style.position = 'fixed';\n    overlay.style.top = 0;\n    overlay.style.left = 0;\n    overlay.style.width = '0';\n    overlay.style.height = '0';\n\n    body.appendChild(overlay);\n};\n\nvar _showOverlay = function _showOverlay() {\n    var overlay = document.getElementById('eventbrite-widget-modal-overlay');\n\n    overlay.innerHTML = SPINNER_SVG;\n\n    overlay.style.opacity = 1;\n    overlay.style.background = 'rgba(0, 0, 0, 0.8)';\n    overlay.style.width = '100%';\n    overlay.style.height = '100%';\n};\n\n/**\n * Shows the overlay and appends the iframe to the page\n */\nvar _openModal = function _openModal(widgetConfig, iframeSrc) {\n    var iframe = _createIframe(widgetConfig, iframeSrc);\n    var body = document.getElementsByTagName('body')[0];\n    var viewPortClass = (0, _window.getViewportClass)();\n\n    (0, _state.updateWidgetInstance)(widgetConfig, {\n        originalBodyOverflow: window.getComputedStyle(body).getPropertyValue('overflow'),\n        originalBodyPosition: window.getComputedStyle(body).getPropertyValue('position')\n    });\n\n    // We show an overlay div to the organizer site instead of adding the overlay style to the\n    // iframe itself for the perception of faster loading\n    _showOverlay();\n\n    body.appendChild(iframe);\n    body.style.overflow = 'hidden';\n\n    // iOS 11+ has a bug where the cursor drifts away from inputs that are `position: fixed;` as users type.\n    // Until this issue is fixed in iOS, we add `position: fixed` to the organizer site's body, and then\n    // remove it when the modal is closed (see handleWidgetModalClose() in src/message_handlers).\n    //\n    // See https://hackernoon.com/how-to-fix-the-ios-11-input-element-in-fixed-modals-bug-aaf66c7ba3f8\n    if (viewPortClass === _window.SMALL) {\n        body.style.position = 'fixed';\n    }\n};\n\nvar _checkElementID = function _checkElementID(target, id) {\n    var _counter = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : 0;\n\n    if (_counter > MAX_RECURSION_LIMIT || target === document.body) {\n        return false;\n    } else if (target.id === id) {\n        return true;\n    }\n    return _checkElementID(target.parentElement, id, _counter++);\n};\n\n/**\n * Adds click handler to modal trigger element and appends the hidden overlay\n */\nvar _initializeModal = function _initializeModal(widgetConfig, modalTriggerElementId, iframeSrc) {\n    var modalTriggerElement = document.getElementById(modalTriggerElementId);\n\n    document.addEventListener('click', function (event) {\n        if (_checkElementID(event.target, modalTriggerElementId)) {\n            _openModal(widgetConfig, iframeSrc);\n        }\n    });\n\n    _createOverlay();\n\n    (0, _state.updateWidgetInstance)(widgetConfig, {\n        modalTriggerElement: modalTriggerElement\n    });\n};\n\n/**\n * Sets up the modal trigger element and other events needed for the modal version of the widget.\n *\n * @param  {object} widgetConfig  A validated user-specified config object\n * @param  {string} iframeSrc Source of the embed iframe\n */\nvar createModalWidget = exports.createModalWidget = function createModalWidget() {\n    var widgetConfig = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : {};\n    var iframeSrc = arguments[1];\n    var modalTriggerElementId = widgetConfig.modalTriggerElementId,\n        _widgetConfig$widgetI2 = widgetConfig.widgetIdentifier;\n    _widgetConfig$widgetI2 = _widgetConfig$widgetI2 === undefined ? {} : _widgetConfig$widgetI2;\n    var id = _widgetConfig$widgetI2.id,\n        idDisplayName = _widgetConfig$widgetI2.idDisplayName;\n\n\n    if (!modalTriggerElementId) {\n        (0, _logging.logErrorForUser)('Modal widgets require a modalTriggerElementId');\n        return;\n    }\n\n    var modalTriggerElement = document.getElementById(modalTriggerElementId);\n\n    if (!modalTriggerElement) {\n        document.addEventListener('DOMContentLoaded', function () {\n            modalTriggerElement = document.getElementById(modalTriggerElementId);\n\n            if (!modalTriggerElement) {\n                (0, _logging.logErrorForUser)('Modal trigger element \\'' + modalTriggerElementId + '\\'\\n                    for ' + idDisplayName + ' \\'' + id + '\\' not found');\n            } else {\n                _initializeModal(widgetConfig, modalTriggerElementId, iframeSrc);\n            }\n        });\n        return;\n    }\n\n    _initializeModal(widgetConfig, modalTriggerElementId, iframeSrc);\n};\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/create_modal.js\n// module id = 10\n// module chunks = 0\n//# sourceURL=webpack:///./src/create_modal.js?");
}, function (module, exports, __webpack_require__) {
  eval("'use strict';\n\nObject.defineProperty(exports, \"__esModule\", {\n    value: true\n});\nexports.getCheckoutIframeSrc = undefined;\n\nvar _logging = __webpack_require__(2);\n\nvar _state = __webpack_require__(5);\n\nvar _getParentUrl = function _getParentUrl() {\n    return window.encodeURIComponent(window.location.href);\n};\n\n/**\n * For the checkout widget, returns the iframe src url with correct hostname and parent url.\n * If an identifier has been passed in for cross-domain GA tracking, that will be appended to the\n * iframe src as well.\n *\n * @param  {Object}  widgetConfig\n * @param  {Number}  widgetConfig.eventId  The event id\n * @param  {Boolean} widgetConfig.modal  Loads the modal versions of the widget\n * @param  {Number}  widgetConfig.googleAnalyticsClientId   GA client identifier for cross-domain tracking (optional)\n * @param  {String}  widgetConfig.affiliateCode  Appends the client's affiliate code to the url\n * @param  {Object}  widgetConfig.extraParams Appends the client's extra fields to the url in addition to affiliateCode,\n *                              these are in eb_constants mapped with their corresponding affiliateCode.\n *                              (eb_constants/affiliate_constants/static_constants.py --> ANNOTATION_FIELDS_BY_AFFILIATE_CODES)\n *                              Example: [{name:'sharedId', value:'47572812'}, {name:'subId1', value:'7989345234'}]\n *\n * @return {String} The absolute /checkout-external url\n */\nvar getCheckoutIframeSrc = exports.getCheckoutIframeSrc = function getCheckoutIframeSrc(_ref) {\n    var eventId = _ref.eventId,\n        isModal = _ref.modal,\n        googleAnalyticsClientId = _ref.googleAnalyticsClientId,\n        affiliateCode = _ref.affiliateCode,\n        extraParams = _ref.extraParams,\n        promoCode = _ref.promoCode,\n        waitlistToken = _ref.waitlistToken,\n        themeSettings = _ref.themeSettings,\n        rsvpToken = _ref.rsvpToken;\n\n    // The parent URL will be passed to the checkout widget and used as the target origin\n    // for window.postMessage()\n    var parentUrl = _getParentUrl();\n    var url = _state.widgetHostname + '/checkout-external?eid=' + eventId + '&parent=' + parentUrl;\n\n    if (!_state.parentSiteIsHttps) {\n        (0, _logging.logErrorForUser)('For security reasons, the embedded checkout widget can only be used on pages served over https.');\n    }\n\n    if (isModal) {\n        url = url + '&modal=1';\n    }\n\n    if (affiliateCode) {\n        url = url + '&aff=' + affiliateCode;\n        if (extraParams) {\n            extraParams.forEach(function (param) {\n                url = url + '&' + encodeURI(param.name) + '=' + encodeURI(param.value);\n            });\n        }\n    }\n\n    if (promoCode) {\n        url = url + '&promo_code=' + promoCode;\n    }\n\n    if (waitlistToken) {\n        url = url + '&w=' + waitlistToken;\n    }\n\n    if (googleAnalyticsClientId) {\n        url = url + '&_eboga=' + googleAnalyticsClientId;\n    }\n\n    if (themeSettings) {\n        var stringifiedThemeSettings = JSON.stringify(themeSettings);\n\n        url = url + '&theme=' + encodeURIComponent(stringifiedThemeSettings);\n    }\n\n    if (rsvpToken) {\n        url = url + '&rsvpToken=' + rsvpToken;\n    }\n\n    return url;\n};\n\n//////////////////\n// WEBPACK FOOTER\n// ./src/checkout/utils.js\n// module id = 11\n// module chunks = 0\n//# sourceURL=webpack:///./src/checkout/utils.js?");
}]);

/***/ }),

/***/ "@wordpress/block-editor":
/*!**********************************************!*\
  !*** external {"this":["wp","blockEditor"]} ***!
  \**********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["wp"]["blockEditor"]; }());

/***/ }),

/***/ "@wordpress/blocks":
/*!*****************************************!*\
  !*** external {"this":["wp","blocks"]} ***!
  \*****************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["wp"]["blocks"]; }());

/***/ }),

/***/ "@wordpress/components":
/*!*********************************************!*\
  !*** external {"this":["wp","components"]} ***!
  \*********************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["wp"]["components"]; }());

/***/ }),

/***/ "@wordpress/date":
/*!***************************************!*\
  !*** external {"this":["wp","date"]} ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["wp"]["date"]; }());

/***/ }),

/***/ "@wordpress/dom-ready":
/*!*******************************************!*\
  !*** external {"this":["wp","domReady"]} ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["wp"]["domReady"]; }());

/***/ }),

/***/ "@wordpress/element":
/*!******************************************!*\
  !*** external {"this":["wp","element"]} ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["wp"]["element"]; }());

/***/ }),

/***/ "@wordpress/i18n":
/*!***************************************!*\
  !*** external {"this":["wp","i18n"]} ***!
  \***************************************/
/*! no static exports found */
/***/ (function(module, exports) {

(function() { module.exports = this["wp"]["i18n"]; }());

/***/ })

/******/ });
//# sourceMappingURL=index.js.map