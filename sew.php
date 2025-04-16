<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home
    
  </title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

 
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">CovDash</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">

        <li class="nav-item d-block d-lg-none">
          <a class="nav-link nav-icon search-bar-toggle " href="#">
            <i class="bi bi-search"></i>
          </a>
        </li><!-- End Search Icon-->

        <li class="nav-item dropdown">

          <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
            <i class="bi bi-bell"></i>
            <span class="badge bg-primary badge-number">4</span>
          </a><!-- End Notification Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
            <li class="dropdown-header">
              You have 4 new notifications
              <a href="#"><span class="badge rounded-pill bg-primary p-2 ms-2">View all</span></a>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-exclamation-circle text-warning"></i>
              <div>
                <h4>Lorem Ipsum</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>30 min. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-x-circle text-danger"></i>
              <div>
                <h4>Atque rerum nesciunt</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>1 hr. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-check-circle text-success"></i>
              <div>
                <h4>Sit rerum fuga</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>2 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>

            <li class="notification-item">
              <i class="bi bi-info-circle text-primary"></i>
              <div>
                <h4>Dicta reprehenderit</h4>
                <p>Quae dolorem earum veritatis oditseno</p>
                <p>4 hrs. ago</p>
              </div>
            </li>

            <li>
              <hr class="dropdown-divider">
            </li>
            <li class="dropdown-footer">
              <a href="#">Show all notifications</a>
            </li>

          </ul><!-- End Notification Dropdown Items -->

        </li><!-- End Notification Nav -->

       

   
        


      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Covid Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span> Epidemiological Dashboard</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="epi.html">
              <i class="bi bi-circle"></i><span>Overview Dashboard</span>
            </a>
          </li>
          <li>
            <a href="compondion.html">
              <i class="bi bi-circle"></i><span> Region-wise COVID Impact</span>
            </a>
          </li>
          <li>
            <a href="componges.html">
              <i class="bi bi-circle"></i><span> Trends & Predictions</span>
            </a>
          </li>
         
        </ul>
      </li><!-- End Components Nav -->

    
      

 

   

      <li class="nav-heading">Pages</li>

      <li class="nav-item">
        <a class="nav-link collapsed" href="userile.html">
          <i class="bi bi-person"></i>
          <span>Genrate Report</span>
        </a>
      </li><!-- End Profile Page Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" href="pagq.html">
          <i class="bi bi-question-circle"></i>
          <span>F.A.Q</span>
        </a>
      </li><!-- End F.A.Q Page Nav -->

    
    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Concentrations in Wastewater</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">NWSS Public SARS-CoV-2 Concentration in Wastewater Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
     
     <!-- Card with Information Table -->
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Wastewater Sampling and COVID-19 Concentration</h5>
      
      <!-- Generic Information about COVID-19 and Sewage Water Levels -->
      <p>
        The concentration of SARS-CoV-2 in wastewater (sewage water) has become a critical metric for monitoring the spread of COVID-19 within communities. 
        Wastewater-based epidemiology (WBE) is an emerging surveillance tool that enables public health officials to track virus transmission at a population level.
      </p>
      <p>
        By analyzing the presence and concentration of SARS-CoV-2 genetic material in wastewater, scientists can estimate the prevalence of COVID-19 infections in the community, often before widespread testing results are available. This can serve as an early warning for potential outbreaks, helping authorities take timely public health measures.
      </p>

      <p><strong>Key Metrics:</strong> SARS-CoV-2 virus concentration in wastewater is measured using two normalization methods:</p>
      
      <!-- Information Table -->
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">Attribute</th>
            <th scope="col">Description</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>Date</strong></td>
            <td>The date the wastewater sample was collected. Rows where PCR concentration is absent are removed.</td>
          </tr>
          <tr>
            <td><strong>PCR Concentration (pcr_conc_lin)</strong></td>
            <td>The SARS-CoV-2 virus concentration after flow-population or human fecal microbial normalization. This indicates the virus's presence in the water.</td>
          </tr>
          <tr>
            <td><strong>Normalization Method</strong></td>
            <td>The method used to normalize the SARS-CoV-2 virus concentration in wastewater. There are two methods:
              <ul>
                <li><strong>Flow-population normalization</strong>: Calculated by multiplying the SARS-CoV-2 concentration by the flow rate and dividing by the population served.</li>
                <li><strong>Human fecal microbial normalization</strong>: Calculated by dividing the SARS-CoV-2 concentration by the human fecal microbial marker concentration.</li>
              </ul>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>

<!-- Add Bootstrap for Styling -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />

<!-- Chart Card: Before Treatment Plant -->
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">SARS-CoV-2 - Before Treatment Plant</h5>
      <canvas id="chartBeforeTreatment"></canvas>
    </div>
  </div>
</div>

<!-- Chart Card: Treatment Plant -->
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">SARS-CoV-2 - Treatment Plant</h5>
      <canvas id="chartTreatmentPlant"></canvas>
    </div>
  </div>
</div>

<!-- Add Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
async function fetchData() {
  const res = await fetch("https://data.cdc.gov/resource/g653-rqe2.json?$limit=10000&$order=date DESC");
  const data = await res.json();

  const beforeTreatment = data
    .filter(d => d.key_plot_id.includes("Before treatment plant"))
    .slice(0, 10);

  const treatment = data
    .filter(d => d.key_plot_id.includes("Treatment plant"))
    .slice(0, 10);

  function normalizeAndPrepare(dataset) {
    const values = dataset.map(d => +d.pcr_conc_lin);
    const min = Math.min(...values);
    const max = Math.max(...values);
    return dataset.map(d => ({
      label: d.date,
      value: ((+d.pcr_conc_lin - min) / (max - min)) * 100,
      normalization: d.normalization
    }));
  }

  const beforeData = normalizeAndPrepare(beforeTreatment);
  const treatmentData = normalizeAndPrepare(treatment);

  // Draw charts
  drawChart("chartBeforeTreatment", beforeData, "red");
  drawChart("chartTreatmentPlant", treatmentData, "blue");
}

function drawChart(canvasId, data, color) {
  const ctx = document.getElementById(canvasId).getContext('2d');
  new Chart(ctx, {
    type: 'bar',
    data: {
      labels: data.map(d => d.label),
      datasets: [{
        label: 'Normalized PCR Concentration',
        data: data.map(d => d.value),
        backgroundColor: color
      }]
    },
    options: {
      indexAxis: 'y',
      plugins: {
        tooltip: {
          callbacks: {
            label: function(context) {
              const index = context.dataIndex;
              const norm = data[index].normalization;
              return `Value: ${context.parsed.x.toFixed(2)} | Normalization: ${norm}`;
            }
          }
        },
        legend: { display: false }
      },
      scales: {
        x: {
          title: {
            display: true,
            text: 'Normalized PCR Concentration (%)'
          }
        },
        y: {
          title: {
            display: true,
            text: 'Date'
          }
        }
      }
    }
  });
}

fetchData();
</script>



        
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CovDash</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
        Designed by <a href="https://Shreeram.com/">Shreeram</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>