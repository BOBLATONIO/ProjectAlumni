<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="theme-color" content="#273461">
    <title>{{ $title ?? 'ADMIN' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('assets/images/AlumniLogo.jpg') }}">
    <script src="{{ asset('assets/js/tailwind.js') }}"></script>
    <script src="{{ asset('assets/js/tailwind.config.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/scrollbar.css') }}">

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels"></script>

    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    
    
</head>


<body class="font-sans flex flex-col h-screen relative overflow-hidden ">

    <x-admin-components.admin-navbar imageSrc="{{ asset('assets/images/Profile.jpeg') }}" />


    <div class="flex flex-1 h-screen z-0">
        <x-admin-components.admin-sidebar />

        <div class="flex-1 h-[calc(100vh-4rem)] overflow-y-auto  bg-gray-100 dark:bg-[#1c1c1d]">
            <div class="p-4 py-0 text-gray-800 ">
                <div class=" px-4">
                    <x-admin-components.admin-page-header pageTitle='{{ $pageTitle }}'/>
                </div>
                {{ $slot }}
            </div>
        </div>
    </div>

    @isset($modal)
        {{ $modal }}
    @endisset


    <script src="{{ asset('assets/js/admin-navbar.js') }}"></script>
    <script src="{{ asset('assets/js/admin-sidebar.js') }}"></script>
    <script src="{{ asset('assets/js/darkMode.js') }}"></script>
    <script>
       $(document).ready(function () {
            $(".chartCanvas").each(function (index) {
                let chartCanvas = this;
                let chartContainer = $(chartCanvas).next(".chart-data");
                let labels = [];
                let dataValues = [];
                let xlabel = chartContainer.data("xlabel");
                let ylabel = chartContainer.data("ylabel");

                chartContainer.find("div").each(function () {
                    labels.push($(this).data("label"));
                    dataValues.push(parseInt($(this).text()));
                });

                let ctx = chartCanvas.getContext("2d");
                let chart = new Chart(ctx, {
                    type: "bar",
                    data: {
                        labels: labels,
                        datasets: [{
                            label: ylabel,
                            data: dataValues,
                            backgroundColor: "#10B981",
                            borderRadius: 5
                        }]
                    },
                    options: {
                        responsive: true,
                        scales: {
                            y: {
                                beginAtZero: true,
                                max: 100,
                                title: {
                                    display: true,
                                    text: ylabel
                                }
                            },
                            x: {
                                title: {
                                    display: true,
                                    text: xlabel
                                }
                            }
                        }
                    }
                });

                // Auto-update when data changes
                setInterval(() => {
                    let newLabels = [];
                    let newDataValues = [];

                    chartContainer.find("div").each(function () {
                        newLabels.push($(this).data("label"));
                        newDataValues.push(parseInt($(this).text()));
                    });

                    chart.data.labels = newLabels;
                    chart.data.datasets[0].data = newDataValues;
                    chart.update();
                }, 1000);
            });
        });

        //pie
        $(document).ready(function () {
            const predefinedColors = [
                "#10B981", "#3B82F6", "#F59E0B", "#EF4444", "#6366F1", "#8B5CF6", "#EC4899", "#22D3EE",
                "#A78BFA", "#34D399", "#FBBF24", "#FB7185", "#60A5FA", "#E879F9", "#818CF8", "#F472B6",
                "#93C5FD", "#FCD34D", "#4ADE80", "#BE185D"
            ];

            $(".chart-container").each(function () {
                let container = $(this);
                let chartCanvas = container.find(".pieChartCanvas")[0];
                let chartContainer = container.find(".pie-chart-data");
                let customLabel = container.find(".custom-labels");
                let labels = [];
                let dataValues = [];
                let backgroundColors = [];
                let title = chartContainer.data("title");

                chartContainer.find("div").each(function (index) {
                    labels.push($(this).data("label"));
                    dataValues.push(parseInt($(this).text()));
                    backgroundColors.push(predefinedColors[index % predefinedColors.length]);
                });

                let ctx = chartCanvas.getContext("2d");

                new Chart(ctx, {
                    type: "pie",
                    data: {
                        labels: labels,
                        datasets: [{
                            data: dataValues,
                            backgroundColor: backgroundColors
                        }]
                    },
                    options: {
                        responsive: true,
                        plugins: {
                            legend: {
                                display: true,
                                position: 'top',
                                labels: {
                                    usePointStyle: true,
                                    pointStyle: 'circle'
                                }
                            },
                            title: {
                                display: true,
                                text: title
                            },
                            datalabels: {
                                color: customLabel.css("color") || "#000",
                                font: {
                                    weight: 'bold',
                                    size: parseInt(customLabel.css("font-size")) || 14,
                                },
                                formatter: function(value, context) {
                                    let sum = context.dataset.data.reduce((a, b) => a + b, 0);
                                    let percentage = ((value / sum) * 100).toFixed(1) + "%";
                                    return percentage;
                                }
                            }
                        }
                    },
                    plugins: [ChartDataLabels]
                });
            });
        });
    </script>
    
    @stack('scripts')

</body>

</html>