// Morris bar chart
$.getJSON('api/years', function (years) {
    Morris.Bar({
        element: 'morris-years',
        data: years,
        xkey: 'ano',
        ykeys: ['Venda', 'Locacao', 'all'],
        labels: ['Para-Venda', 'Para-Locacao', 'Total'],
        barColors:['#b8edf0', '#b4c1d7', '#fcc9ba'],
        hideHover: 'auto',
        gridLineColor: '#eef0f2',
        resize: true,
        formatter: function (years, data) {
            return years;
        }
    });
});