/*
 *  Document   : compCharts.js
 *  Author     : pixelcave
 *  Description: Custom javascript code used in Charts page
 */

var CompCharts = function() {

    return {
        init: function() {
            /* Mini Bar/Line Charts with jquery.sparkline plugin, for more examples you can check out http://omnipotent.net/jquery.sparkline/#s-about */
            var miniChartBarOptions = {
                type: 'bar',
                barWidth: 6,
                barSpacing: 5,
                height: '50px',
                tooltipOffsetX: -25,
                tooltipOffsetY: 20,
                barColor: '#9b59b6',
                tooltipPrefix: '',
                tooltipSuffix: ' Projects',
                tooltipFormat: '{{prefix}}{{value}}{{suffix}}'
            };
            $('#mini-chart-bar1').sparkline('html', miniChartBarOptions);

            miniChartBarOptions['barColor'] = '#2ecc71';
            miniChartBarOptions['tooltipPrefix'] = '$ ';
            miniChartBarOptions['tooltipSuffix'] = '';
            $('#mini-chart-bar2').sparkline('html', miniChartBarOptions);

            miniChartBarOptions['barColor'] = '#1bbae1';
            miniChartBarOptions['tooltipPrefix'] = '';
            miniChartBarOptions['tooltipSuffix'] = ' Updates';
            $('#mini-chart-bar3').sparkline('html', miniChartBarOptions);

            var miniChartLineOptions = {
                type: 'line',
                width: '80px',
                height: '50px',
                tooltipOffsetX: -25,
                tooltipOffsetY: 20,
                lineColor: '#c0392b',
                fillColor: '#e74c3c',
                spotColor: '#555555',
                minSpotColor: '#555555',
                maxSpotColor: '#555555',
                highlightSpotColor: '#555555',
                highlightLineColor: '#555555',
                spotRadius: 3,
                tooltipPrefix: '',
                tooltipSuffix: ' Projects',
                tooltipFormat: '{{prefix}}{{y}}{{suffix}}'
            };
            $('#mini-chart-line1').sparkline('html', miniChartLineOptions);

            miniChartLineOptions['lineColor'] = '#16a085';
            miniChartLineOptions['fillColor'] = '#1abc9c';
            miniChartLineOptions['tooltipPrefix'] = '$ ';
            miniChartLineOptions['tooltipSuffix'] = '';
            $('#mini-chart-line2').sparkline('html', miniChartLineOptions);

            miniChartLineOptions['lineColor'] = '#7f8c8d';
            miniChartLineOptions['fillColor'] = '#95a5a6';
            miniChartLineOptions['tooltipPrefix'] = '';
            miniChartLineOptions['tooltipSuffix'] = ' Updates';
            $('#mini-chart-line3').sparkline('html', miniChartLineOptions);

            // Randomize easy pie charts values
            var random;

            $('.toggle-pies').click(function() {
                $('.pie-chart').each(function() {
                    random = getRandomInt(1, 100);
                    $(this).data('easyPieChart').update(random);
                    $(this).find('span').text(random + '%');
                });
            });

            // Get random number function from a given range
            function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }

            /*
             * Flot Jquery plugin is used for charts
             *
             * For more examples or getting extra plugins you can check http://www.flotcharts.org/
             * Plugins included in this template: pie, resize, stack, time
             */

            // Get the elements where we will attach the charts
            var chartBars = $('#chart-monthly-revenues');
            var chartPie = $('#chart-monthly-bookings');

            // Random data for the charts
            var monthlyRevenues = [[1, 150], [3, 200], [5, 250], [7, 300], [9, 420], [11, 350], [13, 450], [15, 600], [17, 580], [19, 810], [21, 1120]];
                monthlyBookings = [{label: 'Support', data: 20}, {label: 'Earnings', data: 45}, {label: 'Sales', data: 35}]

            // Bars Chart
            $.plot(chartBars,
                [
                    {
                        label: 'Sales',
                        data: monthlyRevenues,
                        bars: {show: true, lineWidth: 0, fillColor: {colors: [{opacity: 0.5}, {opacity: 0.5}]}}
                    }
                ],
                {
                    colors: ['#9b59b6'],
                    legend: {show: true, position: 'nw', margin: [15, 10]},
                    grid: {borderWidth: 0},
                    yaxis: {ticks: 4, tickColor: '#eeeeee'},
                    xaxis: {ticks: 10, tickColor: '#ffffff'}
                }
            );

            // Pie Chart
            $.plot(chartPie,
                monthlyBookings,
                {
                    colors: ['#333333', '#1abc9c', '#16a085'],
                    legend: {show: false},
                    series: {
                        pie: {
                            show: true,
                            radius: 1,
                            label: {
                                show: true,
                                radius: 3 / 4,
                                formatter: function(label, pieSeries) {
                                    return '<div class="chart-pie-label">' + label + '<br>' + Math.round(pieSeries.percent) + '%</div>';
                                },
                                background: {opacity: 0.75, color: '#000000'}
                            }
                        }
                    }
                }
            );
        }
    };
}();
