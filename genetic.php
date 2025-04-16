<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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
      <h1>Genomic Data - Variants Study</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Genomic Data</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">

    <div class="row">
       
       <div class="col-lg-12">
                <!-- Default Card -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Variant Proportions</h5>
        <ul>
            <li>The SARS-CoV-2 virus continuously evolves, leading to new variants, some spreading widely while others fade away.</li>
            <li>The CDC tracks and monitors variants through a national genomic surveillance system, collecting and sequencing virus specimens via the National SARS-CoV-2 Strain Surveillance (NS3) program.</li>
            <li>Data is sourced from commercial, academic, and public health laboratories to classify lineages and calculate variant proportions at national, regional, and jurisdictional levels.</li>
            <li>Variant proportions are estimated for two-week periods using:
                <ul>
                    <li><strong>Weighted estimates:</strong> Based on observed genomic sequencing data but unavailable for the most recent two-week periods due to processing time.</li>
                    <li><strong>Nowcast estimates:</strong> Model-based projections providing timely insights before weighted estimates become available.</li>
                </ul>
            </li>
            <li>Lineages with less than 1% prevalence are grouped with their parent lineage unless they show mutations affecting vaccine efficacy, transmission, or severity.</li>
            <li>This data informs public health responses, ensuring COVID-19 tests, treatments, and vaccines remain effective against emerging variants.</li>
        </ul>
        <p>Reference: <a href="https://covid.cdc.gov/covid-data-tracker/#variant-proportions" target="_blank">CDC Data</a></p>
    </div>
</div>
<!-- End Default Card -->
<?php
// Fetch data from the CDC API
$api_url = "https://data.cdc.gov/resource/jr58-6ysp.json";
$response = file_get_contents($api_url);

// Check if API request was successful
if ($response === FALSE) {
    die("Error fetching data from API.");
}

$data = json_decode($response, true);

// Check if data is valid
if (!is_array($data) || empty($data)) {
    die("No data available.");
}

// Find the latest entry for 'usa_or_hhsregion' = 'USA'
$latest_entry = null;
foreach ($data as $entry) {
    if (isset($entry['usa_or_hhsregion']) && $entry['usa_or_hhsregion'] === 'USA') {
        if (!$latest_entry || strtotime($entry['week_ending']) > strtotime($latest_entry['week_ending'])) {
            $latest_entry = $entry;
        }
    }
}

// If no valid entry is found
if (!$latest_entry) {
    die("No USA data found.");
}

// Extract relevant fields

$variant = $latest_entry['variant'];
$share = $latest_entry['share'];
$share_hi = $latest_entry['share_hi'];
$share_lo = $latest_entry['share_lo'];
$modeltype = $latest_entry['modeltype'];

?>

<!-- Display the data in an HTML Card -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Latest Variant Details</h5>
   
    <p><strong>Variant:</strong> <?php echo htmlspecialchars($variant); ?></p>
    <p><strong>Proportion:</strong> <?php echo htmlspecialchars($share); ?>%</p>
    <p><strong>Confidence Interval:</strong> (<?php echo htmlspecialchars($share_lo); ?>% - <?php echo htmlspecialchars($share_hi); ?>%)</p>
    <p><strong>Model Type:</strong> <?php echo htmlspecialchars($modeltype); ?></p>
   
  </div>
</div>


       <div class="card">
              <div class="card-body">
                  <h5 class="card-title">Monitoring Variant Proportions </h5>
           <div class='tableauPlaceholder' id='viz1743432116257' style='position: relative'><noscript><a href='https:&#47;&#47;covid.cdc.gov&#47;'><img alt='Regions Dashboard ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Va&#47;Variant_Proportions_Biweekly&#47;RegionsDashboard&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Variant_Proportions_Biweekly&#47;RegionsDashboard' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Va&#47;Variant_Proportions_Biweekly&#47;RegionsDashboard&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='language' value='en' /><param name='publish' value='yes' /><param name='render' value='false:showVizHome=no' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1743432116257');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.minWidth='800px';vizElement.style.maxWidth='1080px';vizElement.style.width='100%';vizElement.style.height='1527px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.minWidth='800px';vizElement.style.maxWidth='1080px';vizElement.style.width='100%';vizElement.style.height='1527px';} else { vizElement.style.width='100%';vizElement.style.height='1527px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>
                     
                  </div>
              </div>
          </div>
          






       
         </div></div>
      

      <div class="row">
       
        <div class="col-lg-12">

          <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
          <script>
              $(document).ready(function () {
                  function fetchVariantData() {
                      $.ajax({
                          url: "https://eutils.ncbi.nlm.nih.gov/entrez/eutils/esearch.fcgi",
                          data: {
                              db: "nucleotide",
                              term: "SARS-CoV-2[Organism] AND USA[Country]",  // Filtering by USA
                              retmode: "json",
                              retmax: 20  // Fetching more records
                          },
                          success: function (response) {
                              let variantData = response.esearchresult.idlist.map((id, index) => ({
                                  name: "SARS-CoV-2 Variant " + id,
                                  country: "USA",
                                  date: new Date().toISOString().split('T')[0] // Simulating latest date
                              }));
          
                              // Sort by date (latest to oldest)
                              variantData.sort((a, b) => new Date(b.date) - new Date(a.date));
          
                              populateTable(variantData);
                          }
                      });
                  }
          
                  function populateTable(variants) {
                      let tableBody = "";
                      variants.forEach(variant => {
                          tableBody += `<tr>
                              <td>${variant.name}</td>
                              <td>${variant.country}</td>
                              <td>${variant.date}</td>
                          </tr>`;
                      });
                      $("#variant-table").html(tableBody);
                  }
          
                  // Fetch data and populate the table
                  fetchVariantData();
              });
          </script>
          
          <div class="card">
              <div class="card-body">
                  <h5 class="card-title">SARS-CoV-2 Variant Latest List </h5>
                  <p>Reference: <a href="https://www.ncbi.nlm.nih.gov/books/NBK25498/" target="_blank">NIH Data</a></p>

                  <div style="max-height: 300px; overflow-y: auto;">
                      <table class="table table-bordered">
                          <thead>
                              <tr>
                                  <th>Variant Name</th>
                                  <th>Country of Origin</th>
                                  <th>Detected Date</th>
                              </tr>
                          </thead>
                          <tbody id="variant-table">
                              <!-- Data will be populated dynamically -->
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
          
          

        </div>
      </div>



    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>NiceAdmin</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      <!-- All the links in the footer should remain intact. -->
      <!-- You can delete the links only if you purchased the pro version. -->
      <!-- Licensing information: https://bootstrapmade.com/license/ -->
      <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
      Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
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