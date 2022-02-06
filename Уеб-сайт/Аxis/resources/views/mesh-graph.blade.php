@extends('common_template')

@section('content')
    {{-- Sections --}}
    <div class="sections">

        {{-- mesh --}}
        <div class="mesh-form">
            <div>
                <textarea name="" id="data" cols="200" rows="5" wrap="off">
        0        1        2        3        4        5        6        7        8        9       10       11       12
        0 +0.03500 -0.02855 -0.09156 -0.15566 -0.22250 -0.29867 -0.38125 -0.45758 -0.51500 -0.54590 -0.55844 -0.56363 -0.57250
        1 +0.01869 -0.01856 -0.05355 -0.09305 -0.14383 -0.21602 -0.30324 -0.38746 -0.45064 -0.48415 -0.49888 -0.50610 -0.51707
        2 +0.00234 -0.00695 -0.01215 -0.02553 -0.05938 -0.12765 -0.22023 -0.31329 -0.38297 -0.41951 -0.43676 -0.44629 -0.45969
        3 -0.01393 +0.00144 +0.02248 +0.03217 +0.01352 -0.05072 -0.14723 -0.24723 -0.32193 -0.36066 -0.37977 -0.39103 -0.40621
        4 -0.03000 +0.00178 +0.04016 +0.06533 +0.05750 -0.00240 -0.09922 -0.20143 -0.27750 -0.31633 -0.33563 -0.34711 -0.36250
        5 -0.04428 -0.00747 +0.03596 +0.06615 +0.06324 +0.00837 -0.08337 -0.18082 -0.25285 -0.28864 -0.30564 -0.31512 -0.32836
        6 -0.05734 -0.02364 +0.01604 +0.04376 +0.04156 -0.00781 -0.09062 -0.17835 -0.24250 -0.27303 -0.28596 -0.29184 -0.30125
        7 -0.07236 -0.04528 -0.01310 +0.00888 +0.00535 -0.03877 -0.11166 -0.18823 -0.24340 -0.26810 -0.27650 -0.27838 -0.28352
        8 -0.09250 -0.07094 -0.04500 -0.02781 -0.03250 -0.07238 -0.13719 -0.20465 -0.25250 -0.27246 -0.27719 -0.27582 -0.27750
        9 -0.11980 -0.10205 -0.08041 -0.06654 -0.07207 -0.10913 -0.16849 -0.22982 -0.27275 -0.28955 -0.29183 -0.28831 -0.28770
        10 -0.15219 -0.13878 -0.12196 -0.11197 -0.11906 -0.15424 -0.20929 -0.26559 -0.30453 -0.31884 -0.31920 -0.31399 -0.31156
        11 -0.18660 -0.17777 -0.16597 -0.16010 -0.16902 -0.20270 -0.25387 -0.30559 -0.34092 -0.35300 -0.35165 -0.34493 -0.34090
        12 -0.22000 -0.21563 -0.20875 -0.20688 -0.21750 -0.24949 -0.29656 -0.34348 -0.37500 -0.38473 -0.38156 -0.37324 -0.36750
        </textarea>
            </div>
            <div class="button-holder">
                <a class="visualise-btn btn" href="#"> Начертай </a>
            </div>
            <div id='myDiv'>

                <!-- Plotly chart will be drawn inside this DIV -->

            </div>
        </div>
    </div>
@endsection

@push('page-scripts')
    <script>
        function initGraph() {
            var raw_data = document.getElementById('data').value.split('\n');
            if (raw_data[0].trim().match(/^0\s+[\s\d]+\d$/)) raw_data.shift();
            for (var i in raw_data) {
                raw_data[i] = raw_data[i].trim().replace(/< \d+:\d+:\d+(\s+(AM|PM))?:/g, '').replace(/[\[\]]/g, ' ')
                    .replace(/\s+/g, '\t').split('\t');
                if (raw_data[i][0] == i) raw_data[i].shift();
            }
            var data = [{
                z: raw_data,
                type: 'surface',
                contours: {
                    z: {
                        show: true,
                        usecolormap: true,
                        highlightcolor: "#42f462",
                        project: {
                            z: true
                        }
                    }
                }
            }];
            var layout = {
                //title: 'Bed Leveling Mesh',
                autosize: true,
                margin: {
                    l: 0,
                    r: 0,
                    b: 0,
                    t: 0,
                },
                scene: {
                    zaxis: {
                        autorange: false,
                        range: [-1, 1]
                    },
                    camera: {
                        eye: {
                            x: 0,
                            y: -1.25,
                            z: 1.25
                        }
                    }
                }
            };
            Plotly.newPlot('myDiv', data, layout, {
                responsive: true
            });
        }

        function drawMesh() {
            d3.csv('https://raw.githubusercontent.com/plotly/datasets/master/api_docs/mt_bruno_elevation.csv', function(
                err, rows) {
                function unpack(rows, key) {
                    return rows.map(function(row) {
                        return row[key];
                    });
                }


                var z_data = []
                for (i = 0; i < 24; i++) {
                    z_data.push(unpack(rows, i));
                }


                var data = [{
                    z: z_data,
                    type: 'surface'
                }];


                var layout = {
                    // title: 'Mesh Bed Leveling Visualisator',
                    autosize: false,
                    width: $('.mesh-form').width(),
                    height: $('.mesh-form').width(),
                    margin: {
                        l: 65,
                        r: 50,
                        b: 65,
                        t: 90,
                    }
                };
                Plotly.newPlot('myDiv', data, layout);
            });
        }

        function updateContent() {
            $('.modebar').css("display", "none");
        }

        function visualiseGraph(params) {
            $(".visualise-btn").click(function(e) {
                e.preventDefault();
                initGraph();
            });
        }

        $(document).ready(function() {
            drawMesh();
            visualiseGraph();
            // remove unneeded html
            setInterval(updateContent, 500)
            // console.log($('.modebar').css('display'));
        });
    </script>
@endpush
