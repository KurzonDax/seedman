/**
 * Created by Randy on 7/18/14.
 */

$(function () {

    Highcharts.getOptions().colors = Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: { cx: 0.5, cy: 0.3, r: 0.7 },
            stops         : [
                [0, color],
                [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    });

    $('#testChart').highcharts({
        chart      : {
            plotBackgroundColor: null,
            plotBorderWidth     : 1,//null,
            plotShadow          : false,
            alignTicks          : true,
            animation           : true
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor          : 'pointer',
                dataLabels      : {
                    enabled: true,
                    format : '<b>{point.name}</b>: {point.percentage:.1f} %',
                    style  : {
                        color: (Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black'
                    }
                }
            }
        },
        title      : [
            {
                title: null
            }],
        series     : [
            {
                type: 'pie',
                name: 'Browser share',
                data: [
                    ['Firefox', 45.0],
                    ['IE', 26.8],
                    {
                        name    : 'Chrome',
                        y       : 12.8,
                        sliced  : true,
                        selected: true
                    },
                    ['Safari', 8.5],
                    ['Opera', 6.2],
                    ['Others', 0.7]
                ]
            }
        ]
    });
});