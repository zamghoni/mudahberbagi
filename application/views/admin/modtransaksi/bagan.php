<script src="<?php echo site_url('assets/backend/vendor/highcharts/'); ?>jquery-3.1.1.min.js"></script>
<script src="<?php echo site_url('assets/backend/vendor/highcharts/'); ?>highcharts.js"></script>
<script src="<?php echo site_url('assets/backend/vendor/highcharts/'); ?>modules/exporting.js"></script>
<script src="<?php echo site_url('assets/backend/vendor/highcharts/'); ?>modules/export-data.js"></script>
<div class="row mt-3" style="background-color: white">
  <div class="col-md-12 col-sm-12 col-xs-12">
    <!-- Table -->
    <div class="row">
      <div class="col-6">
        <div id="rumah_sehat" style="width: 310px; height: 400px; margin: 0 auto"></div>
      </div>
      <div class="col-6">
        <div id="rumah_dakwah" style="width: 310px; height: 400px; margin: 0 auto"></div>
      </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col-6">
        <div id="rumah_pintar" style="width: 310px; height: 400px; margin: 0 auto"></div>
      </div>
      <div class="col-6">
        <div id="rumah_pemberdayaan" style="width: 310px; height: 400px; margin: 0 auto"></div>
      </div>
    </div>

  </div>
  <!-- EndTable -->
</div>
<script>
  <?php
  if ($rumah_dakwah['total'] == null) {
    $total = 0;
  } else {
    $total = $rumah_dakwah['total'];
  }
  ?>
  var max = '<?= $rumah_dakwah['target_donasi']; ?>';
  var val = '<?= $total; ?>';
  var val = parseInt(val, 10);
  // Build the chart
  Highcharts.chart('rumah_dakwah', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Rumah Dakwah'
    },
    tooltip: {
      pointFormat: '<b>{point.y}</b> / <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: false
        },
        showInLegend: true
      }
    },
    series: [{
      name: 'Brands',
      colorByPoint: true,
      data: [{
        name: 'Tercapai',
        y: val
      }, {
        name: 'belum tercapai',
        y: max - val
      }]
    }]
  });
</script>
<script>
  <?php
  if ($rumah_sehat['total'] == null) {
    $total = 0;
  } else {
    $total = $rumah_sehat['total'];
  }
  ?>
  var max = '<?= $rumah_sehat['target_donasi']; ?>';
  var val = '<?= $total; ?>';
  var val = parseInt(val, 10);
  // Build the chart
  Highcharts.chart('rumah_sehat', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Rumah Sehat'
    },
    tooltip: {
      pointFormat: '<b>{point.y}</b> / <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: false
        },
        showInLegend: true
      }
    },
    series: [{
      name: 'Brands',
      colorByPoint: true,
      data: [{
        name: 'Tercapai',
        y: val
      }, {
        name: 'belum tercapai',
        y: max - val
      }]
    }]
  });
</script>
<script>
  <?php
  if ($rumah_pintar['total'] == null) {
    $total = 0;
  } else {
    $total = $rumah_pintar['total'];
  }
  ?>
  var max = '<?= $rumah_pintar['target_donasi']; ?>';
  var val = '<?= $total; ?>';
  var val = parseInt(val, 10);
  // Build the chart
  Highcharts.chart('rumah_pintar', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Rumah Pintar'
    },
    tooltip: {
      pointFormat: '<b>{point.y}</b> / <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: false
        },
        showInLegend: true
      }
    },
    series: [{
      name: 'Brands',
      colorByPoint: true,
      data: [{
        name: 'Tercapai',
        y: val
      }, {
        name: 'belum tercapai',
        y: max - val
      }]
    }]
  });
</script>
<script>
  <?php
  if ($rumah_pemberdayaan['total'] == null) {
    $total = 0;
  } else {
    $total = $rumah_pemberdayaan['total'];
  }
  ?>
  var max = '<?= $rumah_pemberdayaan['target_donasi']; ?>';
  var val = '<?= $total; ?>';
  var val = parseInt(val, 10);
  // Build the chart
  Highcharts.chart('rumah_pemberdayaan', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Rumah Pemberdayaan'
    },
    tooltip: {
      pointFormat: '<b>{point.y}</b> / <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: false
        },
        showInLegend: true
      }
    },
    series: [{
      name: 'Brands',
      colorByPoint: true,
      data: [{
        name: 'Tercapai',
        y: val
      }, {
        name: 'belum tercapai',
        y: max - val
      }]
    }]
  });
</script>
<script>
  <?php
  if ($bantuan_medis_untuk_palestina['total'] == null) {
    $total = 0;
  } else {
    $total = $bantuan_medis_untuk_palestina['total'];
  }
  ?>
  var max = '<?= $bantuan_medis_untuk_palestina['target_donasi']; ?>';
  var val = '<?= $total; ?>';
  var val = parseInt(val, 10);
  // Build the chart
  Highcharts.chart('bantuan_medis_untuk_palestina', {
    chart: {
      plotBackgroundColor: null,
      plotBorderWidth: null,
      plotShadow: false,
      type: 'pie'
    },
    title: {
      text: 'Bantuan Medis Untuk Palestina'
    },
    tooltip: {
      pointFormat: '<b>{point.y}</b> / <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
      pie: {
        allowPointSelect: true,
        cursor: 'pointer',
        dataLabels: {
          enabled: false
        },
        showInLegend: true
      }
    },
    series: [{
      name: 'Brands',
      colorByPoint: true,
      data: [{
        name: 'Tercapai',
        y: val
      }, {
        name: 'belum tercapai',
        y: max - val
      }]
    }]
  });
</script>
