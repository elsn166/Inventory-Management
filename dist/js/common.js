(function ($) {
    "use strict";

    /*==============================================================
     Megnific Popup Js
     ============================================================= */
    $('a.btn-gallery').on('click', function (event) {
        event.preventDefault();
        $('.megnify-popup').magnificPopup({
            delegate: 'a', // child items selector, by clicking on it popup will open
            type: 'image',
            gallery: {enabled: true},
        });
    });

    /*==============================================================
     background-image-maker
     ============================================================= */

    $('.background-image-maker').each(function () {
        var imgURL = $(this).next('.holder-image').find('img').attr('src');
        $(this).css('background-image', 'url(' + imgURL + ')');
    });

    /*==============================================================
     Header Fix
     ============================================================= */
    $(window).on("scroll", function () {
        if ($(window).scrollTop() > 0) {
            $("#header-fix").addClass("active");
        } else {
            //remove the background property so it comes transparent again (defined in your css)
            $("#header-fix").removeClass("active");
        }
    });

    /*==============================================================
     Selectpicker 
     ============================================================= */
    $('.selectpicker').selectpicker();

    /*==============================================================
     Sidebar 
     ============================================================= */

    $('.sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
    });
    $('#menu').metisMenu().show();

    /*==============================================================
     Back To Top
     =============================================================*/

    $(document).ready(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
        $('.scrollup').click(function () {
            $("html, body").animate({
                scrollTop: 0
            }, 600);
            return false;
        });
    });

    /*==============================================================
     Counter
     =============================================================*/
 
   $('.counter_number').counterUp({
        delay: 1,
        time: 400
    });
    /*==============================================================
     Masonry
     =============================================================*/
    var $container = $('.portfolio-box');
    $container.imagesLoaded(function () {
        $container.masonry({
            columnWidth: '.post',
            itemSelector: '.post'
        });
    });

    //Reinitialize masonry inside each panel after the relative tab link is clicked - 
    $('a[data-toggle=tab]').each(function () {
        var $this = $(this);
        $this.on('shown.bs.tab', function () {
            $container.masonry({
                columnWidth: '.post',
                itemSelector: '.post'
            });
        }); //end shown
    });  //end each

    /*==============================================================
     Slimscroll Chat
     =============================================================*/

    $('.scrollerchat').slimScroll({
        height: '440px'
    });


    $('.sidebar-scrollarea').slimScroll({
        height: '100%'
    });

    $('.right-sidebar-scrollarea').slimScroll({
        height: '100%'
    });

    $('#mysideTabContent').slimScroll({
        height: '100vh'
    });

    /*==============================================================
     Owl Carousal Item Js
     =============================================================*/
    $("#img-carousal").owlCarousel({
        items: 1,
        pagination: true,
        autoPlay: true,
        nav: false,
    });

    /*==============================================================
     Owl Carousal Item Js
     =============================================================*/
    $("#img-product").owlCarousel({
        pagination: false,
        autoPlay: false,
        loop: true,
        margin: 30,
        responsiveClass: true,
        navText: ['<i class="ion-arrow-left-c"></i>', '<i class="ion ion-arrow-right-c"></i>'],
        responsive: {
            0: {
                items: 1,
                nav: false
            },
            767: {
                items: 2,
                nav: true
            },
            1200: {
                items: 3,
                nav: true,
                loop: false
            }
        }
    });


    /*==============================================================
     Calendar
     =============================================================*/
    $('#calendar-demo').dcalendar(); //creates the calendar


    /*==============================================================
     Map
     =============================================================*/
    $('#world-map').vectorMap({
        map: 'world_mill_en',
        scaleColors: ['#666', '#35528c'],
        normalizeFunction: 'polynomial',
        focusOn: {
            x: 0.5,
            y: 0.5,
            scale: 1.0
        },
        zoomMin: 0.85,
        markerStyle: {
            initial: {
                fill: '#66d203',
                stroke: '#489303',
            }
        },
        backgroundColor: 'transparent',
        regionStyle: {
            initial: {
                fill: '#66d203',
                "fill-opacity": 1,
                stroke: '#f6a821',
                "stroke-width": 0,
                "stroke-opacity": 0
            },
            hover: {
                "fill-opacity": 0.8
            },
            selected: {
                fill: 'yellow'
            }
        },
        markers: [
            //http://www.latlong.net/
            {latLng: [51.507351, -0.127758], name: 'London'},
            {latLng: [41.385064, 2.173403], name: 'Barcelona'},
            {latLng: [40.712784, -74.005941], name: 'New York'},
            {latLng: [-22.911632, -43.188286], name: 'Rio De Janeiro'},
            {latLng: [49.282729, -123.120738], name: 'Vancuver'},
            {latLng: [35.689487, 139.691706], name: 'Tokio'},
            {latLng: [55.755826, 37.617300], name: 'Moskva'},
            {latLng: [43.214050, 27.914733], name: 'Varna'},
            {latLng: [30.044420, 31.235712], name: 'Cairo'}
        ]
    });

    /*==============================================================
     Fancy Select
     =============================================================*/
    $('.fancy-select').fancySelect();
    //custom templating
    $('.fancy-select1').fancySelect({
        optionTemplate: function (optionEl) {
            return optionEl.text() + '<i class="pull-left ' + optionEl.data('icon') + '"></i>';
        }
    });

    /*==============================================================
     Form Text Editor
     =============================================================*/

    $('.summernote').summernote();
    var edit = function () {
        $('.click2edit').summernote({focus: true});
    };
    var save = function () {
        var aHTML = $('.click2edit').code(); //save HTML If you need(aHTML: array).
        $('.click2edit').destroy();
    };

    /*==============================================================
     data-ui-slider
     =============================================================*/
    // BOOTSTRAP SLIDER CTRL
    $('[data-ui-slider]').slider();

    /*==============================================================
     Toastr Alert Js
     =============================================================*/
    toastr.options = {
        "debug": false,
        "newestOnTop": false,
        "positionClass": "toast-bottom-right",
        "closeButton": true,
        "progressBar": true
    };
    $('.homerDemo1').on('click', function (event) {
        toastr.info('Info - <br /> This is a custom info notification');
    });
    $('.homerDemo2').on('click', function (event) {
        toastr.success('Success - <br /> This is a success notification');
    });
    $('.homerDemo3').on('click', function (event) {
        toastr.warning('Warning - <br /> This is a warning notification');
    });
    $('.homerDemo4').on('click', function (event) {
        toastr.error('Error - <br /> This is a error notification');
    });

    /*==============================================================
     Sweet Alert Js
     =============================================================*/
    if ($('.sweet-1').length > 0)
    {
        document.querySelector('.sweet-1').onclick = function () {
            swal("Here's a message!");
        };
    }

    if ($('.sweet-2').length > 0)
    {
        document.querySelector('.sweet-2').onclick = function () {
            swal("Here's a message!", "It's pretty, isn't it?")
        };
    }
    if ($('.sweet-3').length > 0)
    {
        document.querySelector('.sweet-3').onclick = function () {
            swal("Here's a message!", "Custom HTML Message!!")
        };
    }
    if ($('.sweet-4').length > 0)
    {
        document.querySelector('.sweet-4').onclick = function () {
            swal("Good job!", "You clicked the button!", "success");
        };
    }
    if ($('.sweet-5').length > 0)
    {
        document.querySelector('.sweet-5').onclick = function () {
            swal({
                title: "Are you sure?",
                text: "You clicked the button!",
                type: "info",
                confirmButtonClass: 'btn-primary',
            });
        };
    }
    if ($('.sweet-6').length > 0)
    {
        document.querySelector('.sweet-6').onclick = function () {
            swal({
                title: "Are you sure?",
                text: "You clicked the button!",
                type: "warning",
                confirmButtonClass: 'btn-primary',
            });
        };
    }
    if ($('.sweet-7').length > 0)
    {
        document.querySelector('.sweet-7').onclick = function () {
            swal({
                title: "Are you sure?",
                text: "You clicked the button!",
                type: "error",
                confirmButtonClass: 'btn-primary',
            });
        };
    }
    if ($('.sweet-8').length > 0)
    {
        document.querySelector('.sweet-8').onclick = function () {
            swal({
                title: "Sweet!",
                text: "Here's a custom image.",
                imageUrl: 'dist/images/thumbs-up.jpg'
            });
        };
    }
    if ($('.sweet-9').length > 0)
    {
        document.querySelector('.sweet-9').onclick = function () {
            swal({
                title: "Auto close alert!",
                text: "I will close in 3 seconds.",
                timer: 2000,
                showConfirmButton: true
            });
        };
    }
    if ($('.sweet-10').length > 0)
    {
        document.querySelector('.sweet-10').onclick = function () {
            swal({
                title: "Are you sure?",
                text: "You will not be able to recover this imaginary file!",
                type: "warning",
                showCancelButton: false,
                confirmButtonClass: 'btn-primary',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: "No, cancel plx!",
                closeOnConfirm: false,
                closeOnCancel: false
            },
                    function (isConfirm) {
                        if (isConfirm) {
                            swal("Deleted!", "Your imaginary file has been deleted!", "success");
                        } else {
                            swal("Cancelled", "Your imaginary file is safe :)", "error");
                        }
                    });
        };
    }
    if ($('.sweet-11').length > 0)
    {
        document.querySelector('.sweet-11').onclick = function () {
            swal({
                title: "",
                text: 'Write something interesting:',
                type: 'input',
                showCancelButton: false,
                closeOnConfirm: false,
                animation: "slide-from-top",
                inputPlaceholder: "Write something",
            },
                    function (inputValue) {
                        if (inputValue === false)
                            return false;
                        if (inputValue === "") {
                            swal.showInputError("You need to write something!");
                            return false;
                        }
                        swal("Nice!", 'You wrote: ' + inputValue, "success");
                    });
        };
    }
    if ($('.sweet-12').length > 0)
    {
        document.querySelector('.sweet-12').onclick = function () {
            swal({
                title: "Ajax request example",
                text: "Submit to run ajax request",
                type: "info",
                showCancelButton: false,
                closeOnConfirm: false,
                showLoaderOnConfirm: true
            }, function () {
                setTimeout(function () {
                    swal("Ajax request finished!");
                }, 2000);
            });
        };
    }
    if ($('.sweet-13').length > 0)
    {
        document.querySelector('.sweet-13').onclick = function () {
            swal({
                title: "Message",
                text: 'A Custom <span style="color:#2e5aef">Html<span> Message.',
                html: true
            });
        };
    }

    /*==============================================================
     Tree View Js
     =============================================================*/

    $('.tree li:has(ul)').addClass('parent_li').find(' > span').attr('title', 'Collapse this branch');
    $('.tree li.parent_li > span').on('click', function (e) {
        var children = $(this).parent('li.parent_li').find(' > ul > li');
        if (children.is(":visible")) {
            children.hide('fast');
            $(this).attr('title', 'Expand this branch').find(' > i');
        } else {
            children.show('fast');
            $(this).attr('title', 'Collapse this branch').find(' > i');
        }
        e.stopPropagation();
    });

    /*==============================================================
     Data Table Js
     =============================================================*/
    $('#example').DataTable();

    /*==============================================================
     Editable table
     =============================================================*/
    var clients = [
        {"Name": "Eddy lobonowsky", "Work": "Perform Cms", "date": "1 year ago", "Teg": "Design"},
        {"Name": "Kerem Suar", "Work": "Backup data base", "date": "5 min ago", "Teg": "Meeting"},
        {"Name": "Jawod $", "Work": "Month Report", "date": "1 days ago", "Teg": "Project"},
        {"Name": "Julien", "Work": "Account Password", "date": "2 year ago", "Teg": "Income"},
        {"Name": "Eddy lobonowsky", "Work": "Perform Cms", "date": "1 year ago", "Teg": "Design"},
        {"Name": "Kerem Suar", "Work": "Backup data base", "date": "5 min ago", "Teg": "Meeting"},
    ];

    $("#jsGrid").jsGrid({
        width: "100%",
        inserting: true,
        editing: true,
        sorting: true,
        paging: true,
        data: clients,
        fields: [
            {name: "Name", type: "text", width: 180, validate: "required"},
            {name: "Work", type: "text", width: 150},
            {name: "date", type: "text", width: 100},
            {name: "Teg", type: "text", width: 100},
            {type: "control", width: 100}
        ]
    });

    /*==============================================================
     Statistics Line Chart Js
     ============================================================= */
    if ($('#myChart-light').length > 0)
    {
        var ctx = document.getElementById('myChart-light').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["", "", "", "", "", "", ""],
                datasets: [{
                        backgroundColor: '#81ccf8',
                        borderColor: '#09a2fc',
                        data: [10, 15, 14, 20, 18, 20, 25]
                    }]
            },
            // Configuration options go here
            options: {
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                            display: false
                        }],
                    yAxes: [{
                            display: false
                        }]
                },
                elements: {
                    line: {
                        tension: 0.00001,
                        //tension: 0.4,
                        borderWidth: 1,
                    }
                }
            }
        });
    }
    /*==============================================================
     Area Chart Js
     ============================================================= */
    if ($('#area-chart').length > 0)
    {
        var ctx = document.getElementById('area-chart').getContext('2d');
       
        var chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["", "", "", "", "", ""],
                datasets: [{
                        backgroundColor: '#f7941d',
                        borderColor: '#f7941d',
                        data: [10, 15, 13, 18, 13, 18]
                    }]
            },
            // Configuration options go here
           
            options: {
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                            display: false
                        }],
                    yAxes: [{
                            display: false
                        }]
                },

            }
        });
        document.getElementById("area-chart").style.height = '100px';
    }

    /*==============================================================
     Morris Donut Chart Js
     =============================================================*/
    if ($('#donut-chart').length > 0)
    {
        Morris.Donut({
            element: 'donut-chart',
            data: [{
                    label: 'Jam',
                    value: 15
                }, {
                    label: 'Frosted',
                    value: 80
                }, {
                    label: 'Custard',
                    value: 35
                }, {
                    label: 'Jelly',
                    value: 45
                }, {
                    label: 'Sugar',
                    value: 5
                }],
            colors: ['#f7941d', '#019ffc', '#333', '#e66060', '#f2f4f8'],
            formatter: function (y) {
                return y + '%'
            }
        });
    }
    /*==============================================================
     Morris Area Chart Js
     =============================================================*/
    if ($('#morris-area-chart').length > 0)
    {
        Morris.Area({
            element: 'morris-area-chart',
            data: [{
                    period: '2016 Q3',
                    iphone: 2666,
                    ipad: 1969,
                    itouch: 2647
                }, {
                    period: '2017 Q2',
                    iphone: 2778,
                    ipad: 2294,
                    itouch: 2441
                }, {
                    period: '2016 Q3',
                    iphone: 2291,
                    ipad: 1969,
                    itouch: 2501
                }, {
                    period: '2015 Q3',
                    iphone: 2361,
                    ipad: 3795,
                    itouch: 1588
                }, {
                    period: '2014 Q4',
                    iphone: 2300,
                    ipad: 3215,
                    itouch: 5175
                }, {
                    period: '2013 Q4',
                    iphone: 3767,
                    ipad: 3597,
                    itouch: 5689
                }, {
                    period: '2012 Q1',
                    iphone: 2354,
                    ipad: 1914,
                    itouch: 2293
                }, {
                    period: '2011 Q2',
                    iphone: 2300,
                    ipad: 2394,
                    itouch: 2140
                }],
            xkey: 'period',
            ykeys: ['iphone', 'ipad', 'itouch'],
            labels: ['iPhone', 'iPad', 'iPod Touch'],
            pointSize: 2,
            hideHover: 'auto',
            lineColors: ['#019ffc', '#f7941d', '#e66060']
        });
    }
    /*==============================================================
     Morris Bar Chart Js
     =============================================================*/
    if ($('#morris-bar').length > 0)
    {
        Morris.Bar({
            element: 'morris-bar',
            data: [
                {x: '2014', y: 3, z: 2, a: 3},
                {x: '2015', y: 2, z: null, a: 1},
                {x: '2016', y: 0, z: 2, a: 4},
                {x: '2017', y: 2, z: 4, a: 3}
            ],
            xkey: 'x',
            ykeys: ['y', 'z', 'a'],
            barColors: ['#019ffc', '#e66060', '#66d203'],
            hideHover: 'auto',
            labels: ['Y', 'Z', 'A']
        }).on('click', function (i, row) {
            console.log(i, row);
        });
    }
    /*==============================================================
     Morris Line Chart Js
     =============================================================*/
    var day_data = [
        {"elapsed": "1", "value": 34},
        {"elapsed": "2", "value": 24},
        {"elapsed": "3", "value": 3},
        {"elapsed": "4", "value": 12},
        {"elapsed": "5", "value": 13},
        {"elapsed": "6", "value": 22},
        {"elapsed": "7", "value": 5},
        {"elapsed": "8", "value": 26},
        {"elapsed": "9", "value": 12},
        {"elapsed": "10", "value": 19}
    ];
    if ($('#morris-graph').length > 0)
    {
        Morris.Line({
            element: 'morris-graph',
            data: day_data,
            xkey: 'elapsed',
            ykeys: ['value'],
            labels: ['value'],
            parseTime: true,
            lineColors: ['#019ffc'],
            hideHover: 'auto',
            lineWidth: 3
        });

    }
    /*==============================================================
     Chartist Chart Js
     ============================================================= */
    if ($('.app_sales').length > 0)
    {
        new Chartist.Line('.app_sales', {
            labels: [1, 2, 3, 4, 5, 6, 7],
            series: [
                [3, 1, 2, 0, 2.5, 1, 2],
                [1, -3, 1, -2.5, 1, -1, 2.5],
                [-3, 0, -1, 2, -1, -0.2, 2],
            ]
        },
                {
                    high: 3,
                    low: -3,
                    fullWidth: true,
                    // As this is axis specific we need to tell Chartist to use whole numbers only on the concerned axis
                    axisY: {
                        onlyInteger: true,
                        offset: 20
                    }
                });


    }
    /*==============================================================
     Chartist Pie Js
     ============================================================= */

    if ($('.pie-chart').length > 0)
    {
        var chart = new Chartist.Pie('.pie-chart', {
            series: [180, 20],
            labels: [1, 2]
        }, {
            donut: true,
            showLabel: false
        });

        chart.on('draw', function (data) {
            if (data.type === 'slice') {
                // Get the total path length in order to use for dash array animation
                var pathLength = data.element._node.getTotalLength();

                // Set a dasharray that matches the path length as prerequisite to animate dashoffset
                data.element.attr({
                    'stroke-dasharray': pathLength + 'px ' + pathLength + 'px'
                });

                // Create animation definition while also assigning an ID to the animation for later sync usage
                var animationDefinition = {
                    'stroke-dashoffset': {
                        id: 'anim' + data.index,
                        dur: 1000,
                        from: -pathLength + 'px',
                        to: '0px',
                        easing: Chartist.Svg.Easing.easeOutQuint,
                        // We need to use `fill: 'freeze'` otherwise our animation will fall back to initial (not visible)
                        fill: 'freeze'
                    }
                };

                // If this was not the first slice, we need to time the animation so that it uses the end sync event of the previous animation
                if (data.index !== 0) {
                    animationDefinition['stroke-dashoffset'].begin = 'anim' + (data.index - 1) + '.end';
                }

                // We need to set an initial value before the animation starts as we are not in guided mode which would do that for us
                data.element.attr({
                    'stroke-dashoffset': -pathLength + 'px'
                });

                // We can't use guided mode as the animations need to rely on setting begin manually
                // See http://gionkunz.github.io/chartist-js/api-documentation.html#chartistsvg-function-animate
                data.element.animate(animationDefinition, false);
            }
        });

    }
    if ($('#markermap').length > 0)
    {
        var map = new GMaps({
            el: '#markermap',
            lat: 34.043333,
            lng: -78.028333

        });
        map.addMarker({
            lat: 34.042,
            lng: -78.028333,
            title: 'Marker with InfoWindow',
            infoWindow: {
                content:
                        '\<div class="p-2">' +
                        '<h5 class="font-weight-bold mb-2">France</h5>' +
                        '<ul class="list-unstyled eagle-line-height-2 mb-0">' +
                        '<li><i class="fa fa-location-arrow pr-2"></i> Place Your Address</li>' +
                        '<li><i class="fa fa-phone pr-2"></i> +91 123456789</li>' +
                        '<li><i class="fa fa-clock-o pr-2"></i> Monday To Saturday</li>' +
                        '</ul>' +
                        '</div>'
            }
        });
    }
    if ($('#chartContainer').length > 0)
    {
        var timeFormat = 'MM/DD/YYYY HH:mm';

		function newDate(days) {
			return moment().add(days, 'd').toDate();
		}

		function newDateString(days) {
			return moment().add(days, 'd').format(timeFormat);
		}

		var color = Chart.helpers.color;
		var config = {
			type: 'line',
			data: {
				labels: [ // Date Objects
					newDate(0),
					newDate(1),
					newDate(2),
					newDate(3),
					newDate(4),
					newDate(5),
					newDate(6)
				],
				datasets: [{
					label: 'My First dataset',
					backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
					borderColor: window.chartColors.red,
					fill: false,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
				}, {
					label: 'My Second dataset',
					backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
					borderColor: window.chartColors.blue,
					fill: false,
					data: [
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor(),
						randomScalingFactor()
					],
				}, {
					label: 'Dataset with point data',
					backgroundColor: color(window.chartColors.green).alpha(0.5).rgbString(),
					borderColor: window.chartColors.green,
					fill: false,
					data: [{
						x: newDateString(0),
						y: randomScalingFactor()
					}, {
						x: newDateString(5),
						y: randomScalingFactor()
					}, {
						x: newDateString(7),
						y: randomScalingFactor()
					}, {
						x: newDateString(15),
						y: randomScalingFactor()
					}],
				}]
			},
			options: {
				title: {
					text: 'Chart.js Time Scale'
				},
				scales: {
					xAxes: [{
						type: 'time',
						time: {
							format: timeFormat,
							// round: 'day'
							tooltipFormat: 'll HH:mm'
						},
						scaleLabel: {
							display: true,
							labelString: 'Date'
						}
					}],
					yAxes: [{
						scaleLabel: {
							display: true,
							labelString: 'value'
						}
					}]
				},
			}
		};

		
			var ctx = document.getElementById('chartContainer').getContext('2d');
			window.myLine = new Chart(ctx, config);

		
    }
    if ($('#whisker').length > 0)
    {
        var chart = new CanvasJS.Chart("whisker", {
            animationEnabled: true,
            data: [{
                    type: "boxAndWhisker",
                    xValueFormatString: "DDDD",
                    yValueFormatString: "#0.0 Hours",
                    dataPoints: [
                        {x: new Date(2017, 6, 3), y: [4, 6, 8, 9, 7]},
                        {x: new Date(2017, 6, 4), y: [5, 6, 7, 8, 6.5]},
                        {x: new Date(2017, 6, 5), y: [4, 5, 7, 8, 6.5]},
                        {x: new Date(2017, 6, 6), y: [3, 5, 6, 9, 5.5]},
                        {x: new Date(2017, 6, 7), y: [6, 8, 10, 11, 8.5]},
                        {x: new Date(2017, 6, 8), y: [5, 7, 9, 12, 7.5]},
                        {x: new Date(2017, 6, 9), y: [4, 6, 8, 9, 7]}
                    ]
                }]
        });
        chart.render();
    }
    if ($('#scatter').length > 0)
    {
        var chart = new CanvasJS.Chart("scatter", {
            animationEnabled: true,
            data: [{
                    type: "scatter",
                    name: "Server Pluto",
                    showInLegend: true,
                    dataPoints: [
                        {x: 23, y: 330},
                        {x: 28, y: 390},
                        {x: 39, y: 400},
                        {x: 34, y: 430},
                        {x: 24, y: 321},
                        {x: 29, y: 250},
                        {x: 29, y: 370},
                        {x: 23, y: 290},
                        {x: 27, y: 250},
                        {x: 34, y: 380},
                        {x: 36, y: 320},
                        {x: 33, y: 405},
                        {x: 32, y: 453},
                        {x: 21, y: 292}
                    ]
                },
                {
                    type: "scatter",
                    name: "Server Mars",
                    showInLegend: true,
                    dataPoints: [
                        {x: 19, y: 200},
                        {x: 27, y: 300},
                        {x: 35, y: 330},
                        {x: 32, y: 190},
                        {x: 29, y: 189},
                        {x: 22, y: 150},
                        {x: 27, y: 200},
                        {x: 26, y: 190},
                        {x: 24, y: 225},
                        {x: 33, y: 330},
                        {x: 34, y: 250},
                        {x: 30, y: 120},
                        {x: 37, y: 153},
                        {x: 24, y: 196}
                    ]
                }]
        });
        chart.render();
    }
    if ($('#pie-chart').length > 0)
    {
        var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
		var color = Chart.helpers.color;
		var barChartData = {
			labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
			datasets: [{
				label: 'Dataset 1',
				backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
				borderColor: window.chartColors.red,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}, {
				label: 'Dataset 2',
				backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
				borderColor: window.chartColors.blue,
				borderWidth: 1,
				data: [
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor(),
					randomScalingFactor()
				]
			}]

		};
        var ctx = document.getElementById('pie-chart').getContext('2d');
			window.myBar = new Chart(ctx, {
				type: 'bar',
				data: barChartData,
				options: {
					responsive: true,
					legend: {
						position: 'top',
					},
					title: {
						display: true,
						text: 'Chart.js Bar Chart'
					}
				}
			});
    }
    if ($('#data-point').length > 0)
    {
        var limit = 50000;
        var y = 100;
        var data = [];
        var dataSeries = {type: "line"};
        var dataPoints = [];
        for (var i = 0; i < limit; i += 1) {
            y += Math.round(Math.random() * 10 - 5);
            dataPoints.push({
                x: i,
                y: y
            });
        }
        dataSeries.dataPoints = dataPoints;
        data.push(dataSeries);

        //Better to construct options first and then pass it as a parameter
        var options = {
            zoomEnabled: true,
            animationEnabled: true,
            title: {
                text: ""
            },
            axisY: {
                includeZero: false,
                lineThickness: 1
            },
            data: data  // random data
        };

        var chart = new CanvasJS.Chart("data-point", options);
        chart.render();
    }


    if ($('#demo1').length > 0)
    {
        var chart = c3.generate({
            bindto: '#demo1',
            data: {
                columns: [
                    ['data1', 30, 20, 50, 40, 60, 50],
                    ['data2', 200, 130, 90, 240, 130, 220],
                    ['data3', 300, 200, 160, 400, 250, 250]
                ]
            }
        });
    }
    if ($('#columnchart_material').length > 0)
    {
        var chart = c3.generate({
            bindto: '#columnchart_material',
            data: {
                x: 'x',
                //  xFormat: '%Y%m%d', // 'xFormat' can be used as custom format of 'x'
                columns: [
                    ['x', '2013-01-01', '2013-01-02', '2013-01-03', '2013-01-04', '2013-01-05', '2013-01-06'],
                    //  ['x', '20130101', '20130102', '20130103', '20130104', '20130105', '20130106'],
                    ['data1', 30, 200, 100, 400, 150, 250],
                    ['data2', 130, 340, 200, 500, 250, 350]
                ]
            },
            axis: {
                x: {
                    type: 'timeseries',
                    tick: {
                        format: '%Y-%m-%d'
                    }
                }
            }
        });

        setTimeout(function () {
            chart.load({
                columns: [
                    ['data3', 400, 500, 450, 700, 600, 500]
                ]
            });
        }, 1000);
    }
    if ($('#spline').length > 0)
    {
        var chart = c3.generate({
            bindto: '#spline',
            data: {
                columns: [
                    ['data1', 30, 200, 100, 400, 150, 250],
                    ['data2', 130, 100, 140, 200, 150, 50]
                ],
                type: 'spline'
            }
        });

    }
    if ($('#combination').length > 0)
    {

        var chart = c3.generate({
            bindto: '#combination',
            data: {
                columns: [
                    ['data1', 30, 20, 50, 40, 60, 50],
                    ['data2', 200, 130, 90, 240, 130, 220],
                    ['data3', 300, 200, 160, 400, 250, 250],
                    ['data4', 200, 130, 90, 240, 130, 220],
                    ['data5', 130, 120, 150, 140, 160, 150],
                    ['data6', 90, 70, 20, 50, 60, 120],
                ],
                type: 'bar',
                types: {
                    data3: 'spline',
                    data4: 'line',
                    data6: 'area',
                },
                groups: [
                    ['data1', 'data2']
                ]
            }
        });
    }

})(jQuery);




