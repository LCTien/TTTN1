@extends('layout.layout')
@section('content')
    <div id="chart">
    </div>
@push('chart')
    <script>
        
var options = {
    series: [44, 55, 67],
    chart: {
    width:'150px',
    height: 130,
    type: 'radialBar',
  },
  plotOptions: {
    radialBar: {
      dataLabels: {
        name: {
          fontSize: '12px',
        },
        value: {
          fontSize: '12px',
        },
        total: {
          show: false,
          label: '90%',
        }
      }
    }
  },
  labels: ['Apples', 'Oranges', 'Bananas'],
  };

var chart = new ApexCharts(document.querySelector('#chart'),options);

chart.render();
    </script>
@endpush
@endsection
