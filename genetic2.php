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
      <h1>Genomic Data - Variants Phylogenetic Lineage Study</h1>
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
<!-- Variant Phylogenetic Lineage Analysis Card -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Variant Phylogenetic Lineage Analysis</h5>
        <ul>
            <li>SARS-CoV-2 continuously evolves, leading to new variants with distinct genetic mutations.</li>
            <li>CDC tracks and analyzes viral lineages based on their genetic relationships and spread.</li>
            <li>The <a href="https://cov-lineages.org/lineage_list.html" target="_blank">Pango Lineage System</a> classifies SARS-CoV-2 variants and their evolutionary paths.</li>
            <li>Only lineages with more than <strong>1% prevalence</strong> appear in the COVID Data Tracker.</li>
            <li>Variants with significant spike protein mutations may be separated from their parent lineage.</li>
            <li>CDC monitors all lineages, even those below 1%, for potential risks and emerging threats.</li>
            <li>Phylogenetic analysis helps researchers track how the virus evolves and spreads globally.</li>
            <li>Understanding lineage relationships is crucial for evaluating vaccine effectiveness and treatment strategies.</li>
        </ul>
        <p>Latest updates: <a href="https://covid.cdc.gov/covid-data-tracker/#variant-proportions" target="_blank">CDC Variant Proportions</a></p>
    </div>
</div>

<?php
// Include the database configuration file
include_once("config.php");

// Query to fetch data from the virus_variants table
$query = "SELECT lineage, most_common_countries, earliest_date, designated, assigned, description, who_name FROM virus_variants";
$result = mysqli_query($conn, $query);

// Check if the query returned any results
if (!$result || mysqli_num_rows($result) == 0) {
    $data = "<p>No data available</p>";
} else {
    // Start building the HTML table
    $data = "<div class='table-wrapper'>";
    $data .= "<table class='table table-bordered'>";
    $data .= "<thead>
                <tr>
                    <th>Lineage</th>
                    <th>Most Common Countries</th>
                    <th>Earliest Date</th>
                    <th>Designated</th>
                    <th>Assigned</th>
                    <th>Description</th>
                    <th>WHO Name</th>
                </tr>
              </thead>";
    $data .= "<tbody>";

    // Fetch rows and populate the table
    while ($row = mysqli_fetch_assoc($result)) {
        $data .= "<tr>";
        $data .= "<td>" . (!empty($row['lineage']) ? htmlspecialchars($row['lineage']) : "") . "</td>";
        $data .= "<td>" . (!empty($row['most_common_countries']) ? htmlspecialchars($row['most_common_countries']) : "") . "</td>";
        $data .= "<td>" . (!empty($row['earliest_date']) ? htmlspecialchars($row['earliest_date']) : "") . "</td>";
        $data .= "<td>" . (!empty($row['designated']) ? htmlspecialchars($row['designated']) : "") . "</td>";
        $data .= "<td>" . (!empty($row['assigned']) ? htmlspecialchars($row['assigned']) : "") . "</td>";
        $data .= "<td>" . (!empty($row['description']) ? htmlspecialchars($row['description']) : "") . "</td>";
        $data .= "<td>" . (!empty($row['who_name']) ? htmlspecialchars($row['who_name']) : "") . "</td>";
        $data .= "</tr>";
    }

    $data .= "</tbody></table></div>";
}
?>

<div class="card">
              <div class="card-body">
                  <h5 class="card-title">Phylogenetic Tree Visualization </h5>
         <div class='tableauPlaceholder' id='viz1743511166378' style='position: relative'><noscript><a href='https:&#47;&#47;covid.cdc.gov&#47;'><img alt='Dendrogram ' src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Va&#47;Variant_Proportions_Biweekly&#47;Dendrogram&#47;1_rss.png' style='border: none' /></a></noscript><object class='tableauViz'  style='display:none;'><param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' /> <param name='embed_code_version' value='3' /> <param name='site_root' value='' /><param name='name' value='Variant_Proportions_Biweekly&#47;Dendrogram' /><param name='tabs' value='no' /><param name='toolbar' value='yes' /><param name='static_image' value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Va&#47;Variant_Proportions_Biweekly&#47;Dendrogram&#47;1.png' /> <param name='animate_transition' value='yes' /><param name='display_static_image' value='yes' /><param name='display_spinner' value='yes' /><param name='display_overlay' value='yes' /><param name='display_count' value='yes' /><param name='llanguage' value='en' /><param name='publish' value='yes' /><param name='render' value='false:showVizHome=no' /></object></div>                <script type='text/javascript'>                    var divElement = document.getElementById('viz1743511166378');                    var vizElement = divElement.getElementsByTagName('object')[0];                    if ( divElement.offsetWidth > 800 ) { vizElement.style.minWidth='600px';vizElement.style.maxWidth='900px';vizElement.style.width='100%';vizElement.style.minHeight='527px';vizElement.style.maxHeight='727px';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else if ( divElement.offsetWidth > 500 ) { vizElement.style.minWidth='600px';vizElement.style.maxWidth='900px';vizElement.style.width='100%';vizElement.style.minHeight='527px';vizElement.style.maxHeight='727px';vizElement.style.height=(divElement.offsetWidth*0.75)+'px';} else { vizElement.style.width='100%';vizElement.style.height='327px';}                     var scriptElement = document.createElement('script');                    scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';                    vizElement.parentNode.insertBefore(scriptElement, vizElement);                </script>            
                  </div>
              </div>
          </div>

<!-- End Variant Phylogenetic Lineage Analysis Card -->
<div class="card">
    <div class="card-body">
        <h5 class="card-title">Lineage List</h5>
        <div style="overflow-x: auto; max-height: 400px;">
            <?php echo $data; ?>
        </div>
    </div>
</div>

<!-- Add custom CSS for fixed header -->
<style>
.table-wrapper {
    max-height: 400px;
    overflow-y: auto;
    position: relative;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th {
    position: sticky;
    top: 0;
    background-color: #f8f9fa; /* Light background for header */
    z-index: 2; /* Ensure it stays above other content */
}

.table th,
.table td {
    text-align: left;
    padding: 8px;
}

.table th {
    border-bottom: 2px solid #dee2e6; /* Header border */
}

.table td {
    border-bottom: 1px solid #dee2e6; /* Row border */
}
</style>



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