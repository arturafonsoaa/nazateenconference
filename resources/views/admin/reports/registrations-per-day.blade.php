@extends('adminlte::page')

@section('content')
    <div class="py-5">
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2">
                <h3 class="mb-3">Quantidade de registros por dia</h3>
                <div class="card p-4">
                    <div id="chart" class="w-100" style="height: 500px;"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    @parent
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

    <script type="text/javascript">
        google.charts.load('current', {
            'packages': ['bar']
        });
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable([
                ['Data', 'Quantidade'],

                @php
                    foreach ($registrations as $date => $registrations) {
                        echo "['" . $date . "', " . count($registrations) . '],';
                    }
                @endphp
            ]);

            var options = {
                chart: {
                    title: '',
                    subtitle: '',
                },
                bars: 'vertical'
            };
            var chart = new google.charts.Bar(document.getElementById('chart'));
            chart.draw(data, google.charts.Bar.convertOptions(options));
        }
    </script>
@endsection
