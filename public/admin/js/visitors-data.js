// Visitors Morris-donuts
$.getJSON('api/os_usage', function (os_usage) {
    Morris.Donut({
        element: 'morris-os',
        data: os_usage,
        resize: true,
        colors: ['#CCFF00', '#FFCC00', '#FF6699', '#CC3300', '#6600FF', '#6600CC', '#66CCCC', '#66FF66', '#00CCFF', '#333333', '#993366', '#663300'],
        formatter: function (os_usage, data) {
            return os_usage + '%';
        }
    });
});

$.getJSON('api/browser', function (browser) {
    Morris.Donut({
        element: 'morris-browsers',
        data: browser,
        resize: true,
        colors: ['#CCFF00', '#FFCC00', '#FF6699', '#CC3300', '#6600FF', '#6600CC', '#66CCCC', '#66FF66', '#00CCFF', '#333333', '#993366', '#663300'],
        formatter: function (os_usage, data) {
            return os_usage + '%';
        }
    });
});

$.getJSON('api/cities', function (cities) {
    Morris.Donut({
        element: 'morris-cities',
        data: cities,
        resize: true,
        colors: ['#CCFF00', '#FFCC00', '#FF6699', '#CC3300', '#6600FF', '#6600CC', '#66CCCC', '#66FF66', '#00CCFF', '#333333', '#993366', '#663300'],
        formatter: function (cities, data) {
            return cities + '%';
        }
    });
});

$.getJSON('api/countries', function (countries) {
    Morris.Donut({
        element: 'morris-countries',
        data: countries,
        resize: true,
        colors: [
            '#d15a52', '#54f3c2', '#aa7214', '#3bff41',
            '#a77ba6', '#3ba1fe', '#5e1f64', '#65bbc8',
            '#557f16', '#aa3797', '#3c02f1', '#596cf8',
            '#ff90ce', '#d515c5', '#9aed6c', '#dba1e4',
            '#972f33', '#832eb7', '#b5e2d5', '#142009',
            '#fad974', '#1bd9f3', '#8c39a9', '#5f55ac',
            '#7cdd7a', '#95852d', '#9d2db1', '#CCFF00',
            '#FFCC00', '#FF6699', '#CC3300', '#6600FF',
            '#6600CC', '#66CCCC', '#66FF66', '#00CCFF',
            '#333333', '#993366', '#663300', '#1134cd'
        ],
        formatter: function (countries, data) {
            return countries + '%';
        }
    });
});

$.getJSON('api/estates', function (estates) {
    Morris.Donut({
        element: 'morris-estates',
        data: estates,
        resize: true,
        colors: [
            '#d15a52', '#54f3c2', '#aa7214',
            '#3bff41', '#a77ba6', '#3ba1fe',
            '#5e1f64', '#65bbc8', '#557f16',
            '#aa3797', '#3c02f1', '#596cf8',
            '#ff90ce', '#d515c5', '#9aed6c',
            '#dba1e4', '#972f33', '#832eb7',
            '#b5e2d5', '#142009', '#fad974',
            '#1bd9f3', '#8c39a9', '#5f55ac',
            '#7cdd7a', '#95852d', '#9d2db1'
        ],
        formatter: function (estates, data) {
            return estates + '%';
        }
    });
});
// End of morris dunuts

// Morris bar chart
$.getJSON('api/months', function (months) {
    Morris.Bar({
        element: 'morris-bar-chart',
        data: months,
        xkey: 'm',
        ykeys: ['v'],
        labels: ['M&ecirc;s'],
        hideHover: 'auto',
        resize: true,
        formatter: function (months, data) {
            return months;
        }
    });
});
