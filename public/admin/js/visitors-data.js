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
// End of morris dunuts

// Morris bar chart
$.getJSON('api/months', function (months) {
    Morris.Bar({
        element: 'morris-bar-chart',
        data: months,
        xkey: 'm',
        ykeys: ['v'],
        labels: ['Mês'],
        barColors: ['#CCFF00', '#FFCC00', '#FF6699', '#CC3300', '#6600FF', '#6600CC', '#66CCCC', '#66FF66', '#00CCFF', '#333333', '#993366', '#663300'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true,
        formatter: function (months, data) {
            return months;
        }
    });
});