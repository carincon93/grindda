$(document).ready(function() {
    $('[data-toggle="tooltip"]').tooltip('show');
    $('.material-icons').addClass('fas fa-angle-down').text('');

    $('.show-more').click(function() {
        $('.logros').toggleClass('mostrar-mas');
    });

    $('.fecha').each(function (index, dateElem) {
        let $dateElem = $(dateElem);
        let formatted = moment($dateElem.text(), 'YYYY-MM-DD').locale('es').format('LL');
        $dateElem.text(formatted);
    });

    $('.substring').each(function (index, pru) {
        let $mes        = $(pru);
        let formatted   = moment($mes.text(), 'YYYY-MM-DD').locale('es').format('MMMM YYYY');
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
                "next": "<i class='fas fa-chevron-right'></i>",
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
            "sInfoEmpty": "Mostrando <strong>0 a 0</strong> de 0 registros",
        }
    });

    $('.owl-header').owlCarousel({
        center:true,
        loop:true,
        margin:10,
        nav:true,
        navText:['<', '>'],
        autoplay:true,
        autoplayTimeout: 10000,
        mouseDrag: false,
        dots:true,
        responsive:{
            0:{
                items:1
            }
        }
    });


    $('.owl-equipo').owlCarousel({
        center:true,
        loop:true,
        margin:10,
        nav:false,
        navText:['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
        autoplay:true,
        autoplayTimeout:5000,
        mouseDrag:true,
        responsive:{
            0:{
                items:1
            },
            2000:{
                items:3
            },
            3000:{
                items:5
            }
        }
    });
    $('.owl-equipo .owl-nav').removeClass('disabled');

    $('.owl-semillero').owlCarousel({
        center:true,
        loop:true,
        margin:10,
        nav:true,
        navText:"<>",
        responsive:{
            0:{
                items:1
            },
            1000:{
                items:3
            },
            3000:{
                items:5
            }
        }
    });
    $('.owl-news').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            2000:{
                items:3
            },
            3000:{
                items:5
            }
        }
    })
    $('.owl-semilleros').owlCarousel({
        loop:true,
        margin:100,
        nav:true,
        navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
        center:true,
        responsive:{
            0:{
                items:3
            },
        }
    })
    $('.owl-eventos').owlCarousel({
        loop:true,
        margin:100,
        nav:true,
        navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
        center:true,
        responsive:{
            0:{
                items:1
            },
        }
    })
    $('.owl-galeria-eventos').owlCarousel({
        loop:true,
        nav:true,
        navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
        center:true,
        responsive:{
            0:{
                items:3
            },
        }
    })
    $('.owl-galeria-proyectos').owlCarousel({
        loop:true,
        nav:true,
        navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
        center:true,
        responsive:{
            0:{
                items:3
            },
        }
    })
    $('.owl-proyectos').owlCarousel({
        loop:true,
        nav:true,
        margin:10,
        navText: ['<i class="fas fa-arrow-left text-muted"></i>', '<i class="fas fa-arrow-right text-muted"></i>'],
        center:true,
        responsive:{
            0:{
                items:3
            },
        }
    })
    $('.carousel-investigadores').owlCarousel({
        center: true,
        items: 5,
        loop: true,
        margin: 10,
        // autoplay: true,
        autoplayHoverPause: true,
        responsive:{
            0:{
                items:1,
                nav:false
            },
            600:{
                items:3,
                nav:false
            },
            1000:{
                items:5,
                nav:false,
                loop:true
            }
        }
    });
});

const itemAnimated = document.querySelectorAll('.animated');

observer = new IntersectionObserver(entries => {
    entries.forEach(entry => {
        if (entry.intersectionRatio > 0) {
            // const src = entry.target.getAttribute('data-src');
            // entry.target.setAttribute('src', src);

            entry.target.classList.add('jello', 'slow');

            // console.log('in the view');
        } else {
            entry.target.classList.remove('jello');
            // console.log('out of view');
        }

    });
});

itemAnimated.forEach(item => {
    observer.observe(item);
});
