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
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 1);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/custom.js":
/*!********************************!*\
  !*** ./resources/js/custom.js ***!
  \********************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(document).ready(function () {
  $('[data-toggle="tooltip"]').tooltip('show');
  $('.material-icons').addClass('fas fa-angle-down').text('');
  $('.show-more').click(function () {
    $('.logros').toggleClass('mostrar-mas');
  });
  $('.fecha').each(function (index, dateElem) {
    var $dateElem = $(dateElem);
    var formatted = moment($dateElem.text(), 'YYYY-MM-DD').locale('es').format('LL');
    $dateElem.text(formatted);
  });
  $('.substring').each(function (index, pru) {
    var $mes = $(pru);
    var formatted = moment($mes.text(), 'YYYY-MM-DD').locale('es').format('MMMM YYYY');
    $mes.text(formatted);
  });
  $('.dataTable').DataTable({
    "ordering": false,
    "sDom": '<"view-filter p-4"<f>>t<>',
    "info": false,
    "paging": false,
    "language": {
      "paginate": {
        "previous": "<i class='fas fa-chevron-left'></i>",
        "next": "<i class='fas fa-chevron-right'></i>"
      },
      "search": "Buscar:",
      "sSearchPlaceholder": "Descripción, nombre, código...",
      "info": "Mostrando página _PAGE_ de _PAGES_",
      "sInfo": "Mostrando <strong>_START_ a _END_</strong> de _TOTAL_ registros",
      "emptyTable": "No hay datos disponibles en la tabla",
      "sEmptyTable": "No hay datos disponibles en la tabla",
      "infoFiltered": " - filtrando de _MAX_ registros",
      "sInfoFiltered": "(filtrado de _MAX_ registros en total)",
      "sLengthMenu": "Mostrar _MENU_ registros",
      "zeroRecords": "No hay registros para mostrar",
      "sInfoEmpty": "Mostrando <strong>0 a 0</strong> de 0 registros"
    }
  });
  $('.owl-header').owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    nav: true,
    navText: ['<', '>'],
    autoplay: true,
    autoplayTimeout: 10000,
    mouseDrag: false,
    dots: true,
    responsive: {
      0: {
        items: 1
      }
    }
  });
  $('.owl-equipo').owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    nav: false,
    navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
    autoplay: true,
    autoplayTimeout: 5000,
    mouseDrag: true,
    responsive: {
      0: {
        items: 1
      },
      2000: {
        items: 3
      },
      3000: {
        items: 5
      }
    }
  });
  $('.owl-equipo .owl-nav').removeClass('disabled');
  $('.owl-semillero').owlCarousel({
    center: true,
    loop: true,
    margin: 10,
    nav: true,
    navText: "<>",
    responsive: {
      0: {
        items: 1
      },
      1000: {
        items: 3
      },
      3000: {
        items: 5
      }
    }
  });
  $('.owl-news').owlCarousel({
    loop: true,
    margin: 10,
    nav: true,
    responsive: {
      0: {
        items: 1
      },
      2000: {
        items: 3
      },
      3000: {
        items: 5
      }
    }
  });
  $('.owl-semilleros').owlCarousel({
    loop: true,
    margin: 100,
    nav: true,
    navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
    center: true,
    responsive: {
      0: {
        items: 3
      }
    }
  });
  $('.owl-eventos').owlCarousel({
    loop: true,
    margin: 100,
    nav: true,
    navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
    center: true,
    responsive: {
      0: {
        items: 1
      }
    }
  });
  $('.owl-galeria-eventos').owlCarousel({
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
    center: true,
    responsive: {
      0: {
        items: 3
      }
    }
  });
  $('.owl-galeria-proyectos').owlCarousel({
    loop: true,
    nav: true,
    navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
    center: true,
    responsive: {
      0: {
        items: 3
      }
    }
  });
  $('.owl-proyectos').owlCarousel({
    loop: true,
    nav: true,
    margin: 10,
    navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
    center: true,
    responsive: {
      0: {
        items: 3
      }
    }
  });
  $('.carousel-investigadores').owlCarousel({
    center: true,
    items: 5,
    loop: true,
    margin: 10,
    // autoplay: true,
    autoplayHoverPause: true,
    responsive: {
      0: {
        items: 1,
        nav: false
      },
      600: {
        items: 3,
        nav: false
      },
      1000: {
        items: 5,
        nav: false,
        loop: true
      }
    }
  });
});
var itemAnimated = document.querySelectorAll('.animated');
observer = new IntersectionObserver(function (entries) {
  entries.forEach(function (entry) {
    if (entry.intersectionRatio > 0) {
      // const src = entry.target.getAttribute('data-src');
      // entry.target.setAttribute('src', src);
      entry.target.classList.add('jello', 'slow'); // console.log('in the view');
    } else {
      entry.target.classList.remove('jello'); // console.log('out of view');
    }
  });
});
itemAnimated.forEach(function (item) {
  observer.observe(item);
});

/***/ }),

/***/ 1:
/*!**************************************!*\
  !*** multi ./resources/js/custom.js ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(/*! C:\Users\Cristian\DevProjects\grindda\resources\js\custom.js */"./resources/js/custom.js");


/***/ })

/******/ });