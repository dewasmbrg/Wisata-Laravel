@extends('layouts.app')

@section('content')

<div id="chart" style="height: 300px;"></div>
<!-- Charting library -->
<script>
    const chart = new Chartisan({
        el: '#chart'
        , url: "@chart('sample_chart')"
    , });

</script>
@endsection
