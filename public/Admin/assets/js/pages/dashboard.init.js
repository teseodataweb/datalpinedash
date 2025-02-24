/*
Template Name: Minia - Admin & Dashboard Template
Author: Themesbrand
Website: https://themesbrand.com/
Contact: themesbrand@gmail.com
File: Dashboard Init Js File
*/

// get colors array from the string
function getChartColorsArray(chartId) {
    var colors = $(chartId).attr('data-colors');
    var colors = JSON.parse(colors);
    return colors.map(function(value){
        var newValue = value.replace(' ', '');
        if(newValue.indexOf('--') != -1) {
            var color = getComputedStyle(document.documentElement).getPropertyValue(newValue);
            if(color) return color;
        } else {
            return newValue;
        }
    })
}

//  MINI CHART

// mini-1
var minichart1Colors = getChartColorsArray("#mini-chart1");
var options = {
    series: [{
        data: [2, 10, 18, 22, 36, 15, 47, 75, 65, 19, 14, 2, 47, 42, 15, ]
    }],
    chart: {
        type: 'line',
        height: 50,
        sparkline: {
            enabled: true
        }
    },
    colors: minichart1Colors,
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
};

var chart = new ApexCharts(document.querySelector("#mini-chart1"), options);
chart.render();

// mini-2
var minichart2Colors = getChartColorsArray("#mini-chart2");
var options = {
    series: [{
        data: [15, 42, 47, 2, 14, 19, 65, 75, 47, 15, 42, 47, 2, 14, 12, ]
    }],
    chart: {
        type: 'line',
        height: 50,
        sparkline: {
            enabled: true
        }
    },
    colors: minichart2Colors,
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
};

var chart = new ApexCharts(document.querySelector("#mini-chart2"), options);
chart.render();

// mini-3
var minichart3Colors = getChartColorsArray("#mini-chart3");
var options = {
    series: [{
        data: [47, 15, 2, 67, 22, 20, 36, 60, 60, 30, 50, 11, 12, 3, 8, ]
    }],
    chart: {
        type: 'line',
        height: 50,
        sparkline: {
            enabled: true
        }
    },
    colors: minichart3Colors,
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
};

var chart = new ApexCharts(document.querySelector("#mini-chart3"), options);
chart.render();

// mini-4
var minichart4Colors = getChartColorsArray("#mini-chart4");
var options = {
    series: [{
        data: [12, 14, 2, 47, 42, 15, 47, 75, 65, 19, 14, 2, 47, 42, 15, ]
    }],
    chart: {
        type: 'line',
        height: 50,
        sparkline: {
            enabled: true
        }
    },
    colors: minichart4Colors,
    stroke: {
        curve: 'smooth',
        width: 2,
    },
    tooltip: {
        fixed: {
            enabled: false
        },
        x: {
            show: false
        },
        y: {
            title: {
                formatter: function (seriesName) {
                    return ''
                }
            }
        },
        marker: {
            show: false
        }
    }
};

var chart = new ApexCharts(document.querySelector("#mini-chart4"), options);
chart.render();

// 
// Wallet Balance
//
var piechartColors = getChartColorsArray("#wallet-balance");
var options = {
    series: [35, 70, 15],
    chart: {
        width: 227,
        height: 227,
        type: 'pie',
    },
    labels: ['Ethereum', 'Bitcoin', 'Litecoin'],
    colors: piechartColors,
    stroke: {
        width: 0,
    },
    legend: {
        show: false
    },
    responsive: [{
        breakpoint: 480,
        options: {
            chart: {
                width: 200
            },
        }
    }]
};

var chart = new ApexCharts(document.querySelector("#wallet-balance"), options);
chart.render();

//
// Invested Overview
//

var radialchartColors = getChartColorsArray("#invested-overview");
var options = {
    chart: {
        height: 270,
        type: 'radialBar',
        offsetY: -10
    },
    plotOptions: {
        radialBar: {
            startAngle: -130,
            endAngle: 130,
            dataLabels: {
                name: {
                    show: false
                },
                value: {
                    offsetY: 10,
                    fontSize: '18px',
                    color: undefined,
                    formatter: function (val) {
                        return val + "%";
                    }
                }
            }
        }
    },
    colors: [radialchartColors[0]],
    fill: {
        type: 'gradient',
        gradient: {
            shade: 'dark',
            type: 'horizontal',
            gradientToColors: [radialchartColors[1]],
            shadeIntensity: 0.15,
            inverseColors: false,
            opacityFrom: 1,
            opacityTo: 1,
            stops: [20, 60]
        },
    },
    stroke: {
        dashArray: 4,
    },
    legend: {
        show: false
    },
    series: [80],
    labels: ['Series A'],
}

var chart = new ApexCharts(
    document.querySelector("#invested-overview"),
    options
);

chart.render();

//
// Graficas de Investigacion del Mercado
//

var sumaHombre0_19 = document.getElementById("sumaHombre0_19").value;
var sumaHombre20_34 = document.getElementById("sumaHombre20_34").value;
var sumaHombre35_49 = document.getElementById("sumaHombre35_49").value;
var sumaHombre50_64 = document.getElementById("sumaHombre50_64").value;
var sumaHombre65_y_mas = document.getElementById("sumaHombre65_y_mas").value;

var sumaMujer0_19 = document.getElementById("sumaMujer0_19").value;
var sumaMujer20_34 = document.getElementById("sumaMujer20_34").value;
var sumaMujer35_49 = document.getElementById("sumaMujer35_49").value;
var sumaMujer50_64 = document.getElementById("sumaMujer50_64").value;
var sumaMujer65_y_mas = document.getElementById("sumaMujer65_y_mas").value;

var barchartColors = getChartColorsArray("#market-overview");
var options = {
    series: [{
        name: 'Hombre',
        data: [sumaHombre0_19, sumaHombre20_34, sumaHombre35_49, sumaHombre50_64, sumaHombre65_y_mas]
    }, {
        name: 'Mujer',
        data: [sumaMujer0_19, sumaMujer20_34, sumaMujer35_49, sumaMujer50_64, sumaMujer65_y_mas]
    }],
    chart: {
        type: 'bar',
        height: 200,
        stacked: true,
        toolbar: {
            show: false
        },
    },
    plotOptions: {
        bar: {
            columnWidth: '20%',
        },
    },
    colors: barchartColors,
    fill: {
        opacity: 1
    },
    dataLabels: {
        enabled: false,
    },
    legend: {
        show: false,
    },
    yaxis: {
        labels: {
            formatter: function (y) {
                return y.toFixed(0) + "%";
            }
        }
    },
    xaxis: {
        categories: ['0-19', '20-34', '35-49', '50-64', '65+'],
        labels: {
            rotate: 90
        }
    }
};

var chart = new ApexCharts(document.querySelector("#market-overview"), options);
chart.render();

// MAp

var vectormapColors = getChartColorsArray("#sales-by-locations");
$('#sales-by-locations').vectorMap({
    map: 'world_mill_en',
    normalizeFunction: 'polynomial',
    hoverOpacity: 0.7,
    hoverColor: false,
    regionStyle: {
        initial: {
            fill: '#e9e9ef'
        }
    },
    markerStyle: {
        initial: {
            r: 9,
            'fill': vectormapColors,
            'fill-opacity': 0.9,
            'stroke': '#fff',
            'stroke-width': 7,
            'stroke-opacity': 0.4
        },

        hover: {
            'stroke': '#fff',
            'fill-opacity': 1,
            'stroke-width': 1.5
        }
    },
    backgroundColor: 'transparent',
    markers: [{
        latLng: [41.90, 12.45],
        name: 'USA'
    }, {
        latLng: [12.05, -61.75],
        name: 'Russia'
    }, {
        latLng: [1.3, 103.8],
        name: 'Australia'
    }]
});