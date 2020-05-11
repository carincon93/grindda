$(document).ready(function () {
    $('[data-toggle="tooltip"]').tooltip('show');
    $('.material-icons').addClass('fas fa-angle-down').text('');

    $('.show-more').click(function () {
        $('.logros').toggleClass('mostrar-mas');
    });


    $('.fecha').each(function (index, dateElem) {
        let $dateElem = $(dateElem);
        let formatted = moment($dateElem.text(), 'YYYY-MM-DD').locale('es').format('LL');
        $dateElem.text(formatted);
    });

    $('.substring').each(function (index, pru) {
        let $mes = $(pru);
        let formatted = moment($mes.text(), 'YYYY-MM-DD').locale('es').format('MMMM YYYY');
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

    var carouselJumbotron = $('.carousel-jumbotron');
    carouselJumbotron.owlCarousel({
        items: 1,
        loop: true,
        responsiveClass: true,
        autoplay: false,
        autoplayHoverPause: true,
        nav: false,
        navText: ["<i class='fa-fw fa fa-chevron-left'></i>", "<strong>Siguiente</strong> <i class='fa-fw fa fa-chevron-right'></i>"],
        navSpeed: 3000,
        mouseDrag: false,
    });


    $('.owl-equipo').owlCarousel({
        center:true,
        loop:true,
        margin:10,
        nav:true,
        navText:"<>",
        autoplay:true,
        autoplayTimeout:5000,
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

    // $('.carousel-investigadores').on('translate.owl.carousel', function(e){
    //     idx = e.item.index;
    //     $('.owl-item.big').removeClass('big');
    //     $('.owl-item.medium').removeClass('medium');
    //     $('.owl-item').eq(idx).addClass('big');
    //     $('.owl-item').eq(idx-1).addClass('medium');
    //     $('.owl-item').eq(idx+1).addClass('medium');
    // });

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



