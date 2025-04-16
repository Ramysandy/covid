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
      <h1>Research & Government Collaboration </h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">Research & Government Collaboration </li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

        <div class="col-lg-12">

        <?php
function fetchFromEuropePMC() {
    $url = "https://www.ebi.ac.uk/europepmc/webservices/rest/search?query=SARS-CoV-2&format=json&pageSize=2";
    $data = json_decode(file_get_contents($url), true);
    $articles = [];
    foreach ($data["resultList"]["result"] as $article) {
        $articles[] = [
            "source" => "Europe PMC",
            "title" => $article["title"],
            "authors" => $article["authorString"] ?? "N/A",
            "year" => $article["pubYear"] ?? "N/A",
            "link" => "https://europepmc.org/article/" . $article["source"] . "/" . $article["id"]
        ];
    }
    return $articles;
}

function fetchFromEntrez() {
    $searchUrl = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils/esearch.fcgi?db=pubmed&term=SARS-CoV-2&retmode=json&retmax=3";
    $searchData = json_decode(file_get_contents($searchUrl), true);
    $ids = implode(",", $searchData["esearchresult"]["idlist"]);
    $fetchUrl = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils/esummary.fcgi?db=pubmed&id=$ids&retmode=json";
    $summaryData = json_decode(file_get_contents($fetchUrl), true);
    $articles = [];
    foreach ($summaryData["result"] as $key => $item) {
        if ($key === "uids") continue;
        $articles[] = [
            "source" => "NCBI Entrez",
            "title" => $item["title"],
            "authors" => $item["sortfirstauthor"] ?? "N/A",
            "year" => substr($item["pubdate"], 0, 4),
            "link" => "https://pubmed.ncbi.nlm.nih.gov/" . $item["uid"]
        ];
    }
    return $articles;
}

$allArticles = array_merge(
    fetchFromEuropePMC(),
    fetchFromEntrez()
);
?>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Latest SARS-CoV-2 Research Articles</h5>

    <div class="table-responsive" style="max-height: 300px; overflow-y: auto; border: 1px solid #ddd;">
      <table class="table table-bordered table-hover table-striped mb-0">
        <thead class="thead-dark" style="position: sticky; top: 0; background-color: #343a40; color: white;">
          <tr>
            <th>Source</th>
            <th>Title</th>
            <th>Authors</th>
            <th>Year</th>
            <th>Link</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($allArticles as $article): ?>
            <tr>
              <td><?= htmlspecialchars($article["source"]) ?></td>
              <td><?= htmlspecialchars($article["title"]) ?></td>
              <td><?= htmlspecialchars($article["authors"]) ?></td>
              <td><?= htmlspecialchars($article["year"]) ?></td>
              <td><a href="<?= htmlspecialchars($article["link"]) ?>" target="_blank">View</a></td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

  </div>
</div>



<?php
$api_key = 'AIzaSyD8aM3byn_EbTIPKt4JXsZjLk9LKkUiebA';

function fetchGovernmentPolicies() {
    global $api_key;
    
    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=" . $api_key;
    
    $prompt = "You are a COVID-19 policy analyst. Analyze and list the 5 most recent COVID-19 related government policies in the USA.
    For each policy, provide the following information in a strict JSON format:
    [
        {
            \"title\": \"Exact policy title\",
            \"date\": \"Announcement date in YYYY-MM-DD format\",
            \"description\": \"Detailed description of the policy\",
            \"source\": \"Official government source URL\",
            \"agency\": \"Issuing government agency\",
            \"status\": \"Current status of the policy\"
        }
    ]
    
    Requirements:
    1. Only include policies announced by US government agencies
    2. Focus on policies from the last 3 months
    3. Provide real, verifiable government sources
    4. Format the response as a valid JSON array
    5. Do not include any additional text or explanations
    6. Ensure all dates are in YYYY-MM-DD format
    7. Make sure all URLs are valid government sources
    8. Include the issuing agency name
    9. Specify the current status of each policy";
    
    $data = [
        "contents" => [
            [
                "parts" => [
                    ["text" => $prompt]
                ]
            ]
        ]
    ];
    
    $options = [
        'http' => [
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ],
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    if ($result === FALSE) {
        return [
            'status' => 'error',
            'message' => 'Failed to fetch policies',
            'details' => error_get_last()
        ];
    }
    
    $responseData = json_decode($result, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        return [
            'status' => 'error',
            'message' => 'JSON Decode Error: ' . json_last_error_msg(),
            'raw_response' => $result
        ];
    }
    
    if (isset($responseData['candidates'][0]['content']['parts'][0]['text'])) {
        $text = $responseData['candidates'][0]['content']['parts'][0]['text'];
        $text = preg_replace('/```json\n|\n```/', '', $text);
        $text = trim($text);
        
        $policies = json_decode($text, true);
        if (is_array($policies)) {
            return [
                'status' => 'success',
                'policies' => $policies
            ];
        }
    }
    
    return [
        'status' => 'error',
        'message' => 'Invalid response format',
        'raw_response' => $responseData
    ];
}

$result = fetchGovernmentPolicies();
?>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">USA Government COVID-19 Policy Tracker</h5>
    <p class="card-subtitle mb-3 text-muted">Latest policies and measures from government agencies</p>
    
    <?php if ($result['status'] === 'success' && !empty($result['policies'])): ?>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th>Policy Title</th>
              <th>Date</th>
              <th>Agency</th>
              <th>Status</th>
              <th>Description</th>
              <th>Source</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result['policies'] as $policy): ?>
              <tr>
                <td><?php echo htmlspecialchars($policy['title'] ?? 'N/A'); ?></td>
                <td><?php echo htmlspecialchars($policy['date'] ?? 'N/A'); ?></td>
                <td><?php echo htmlspecialchars($policy['agency'] ?? 'N/A'); ?></td>
                <td>
                  <?php
                  $status = $policy['status'] ?? 'N/A';
                  $statusClass = match(strtolower($status)) {
                      'active' => 'success',
                      'updated' => 'warning',
                      'new' => 'info',
                      'expired' => 'danger',
                      default => 'secondary'
                  };
                  ?>
                  <span class="badge bg-<?php echo $statusClass; ?>">
                    <?php echo htmlspecialchars($status); ?>
                  </span>
                </td>
                <td><?php echo htmlspecialchars($policy['description'] ?? 'N/A'); ?></td>
                <td>
                  <?php if (!empty($policy['source']) && filter_var($policy['source'], FILTER_VALIDATE_URL)): ?>
                    <a href="<?php echo htmlspecialchars($policy['source']); ?>" 
                       target="_blank" 
                       class="btn btn-sm btn-primary">
                      <i class="bi bi-link-45deg"></i> View
                    </a>
                  <?php else: ?>
                    <span class="text-muted">N/A</span>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <div class="alert alert-warning">
        <i class="bi bi-exclamation-triangle"></i> 
        <?php echo htmlspecialchars($result['message'] ?? 'Unable to fetch policy information at this time.'); ?>
      </div>
      
      <?php if (isset($result['details'])): ?>
        <div class="mt-3">
          <h6>Error Details:</h6>
          <pre class="bg-light p-3 rounded">
            <?php echo htmlspecialchars(json_encode($result['details'], JSON_PRETTY_PRINT)); ?>
          </pre>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    
    <div class="mt-3">
      <small class="text-muted">
        <i class="bi bi-info-circle"></i> 
        Information sourced from official government announcements and documents
      </small>
    </div>
  </div>
</div>

<?php
$api_key = 'AIzaSyD8aM3byn_EbTIPKt4JXsZjLk9LKkUiebA';

function fetchHealthAdvisories() {
    global $api_key;
    
    $url = "https://generativelanguage.googleapis.com/v1beta/models/gemini-2.0-flash:generateContent?key=" . $api_key;
    
    $prompt = "You are a public health analyst specializing in COVID-19 variants and interventions. 
    Analyze and list the current public health advisories related to COVID-19 variants and their recommended interventions.
    For each advisory, provide the following information in a strict JSON format:
    [
        {
            \"variant\": \"Name of the COVID-19 variant\",
            \"severity_level\": \"Low/Medium/High/Critical\",
            \"intervention_measures\": \"List of recommended measures\",
            \"affected_regions\": \"List of affected regions\",
            \"last_updated\": \"Date in YYYY-MM-DD format\",
            \"source\": \"Official health authority source URL\"
        }
    ]
    
    Requirements:
    1. Only include advisories from official health authorities
    2. Focus on current variants and their impacts
    3. Provide real, verifiable sources
    4. Format the response as a valid JSON array
    5. Do not include any additional text or explanations
    6. Ensure all dates are in YYYY-MM-DD format
    7. Make sure all URLs are valid government sources
    8. Include specific intervention measures
    9. List affected regions accurately";
    
    $data = [
        "contents" => [
            [
                "parts" => [
                    ["text" => $prompt]
                ]
            ]
        ]
    ];
    
    $options = [
        'http' => [
            'header'  => "Content-Type: application/json\r\n",
            'method'  => 'POST',
            'content' => json_encode($data),
        ],
    ];
    
    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
    
    if ($result === FALSE) {
        return [
            'status' => 'error',
            'message' => 'Failed to fetch health advisories',
            'details' => error_get_last()
        ];
    }
    
    $responseData = json_decode($result, true);
    
    if (json_last_error() !== JSON_ERROR_NONE) {
        return [
            'status' => 'error',
            'message' => 'JSON Decode Error: ' . json_last_error_msg(),
            'raw_response' => $result
        ];
    }
    
    if (isset($responseData['candidates'][0]['content']['parts'][0]['text'])) {
        $text = $responseData['candidates'][0]['content']['parts'][0]['text'];
        $text = preg_replace('/```json\n|\n```/', '', $text);
        $text = trim($text);
        
        $advisories = json_decode($text, true);
        if (is_array($advisories)) {
            return [
                'status' => 'success',
                'advisories' => $advisories
            ];
        }
    }
    
    return [
        'status' => 'error',
        'message' => 'Invalid response format',
        'raw_response' => $responseData
    ];
}

$result = fetchHealthAdvisories();
?>

<div class="card">
  <div class="card-body">
    <h5 class="card-title">Public Health Advisory System</h5>
    <p class="card-subtitle mb-3 text-muted">Current COVID-19 variant advisories and recommended interventions</p>
    
    <?php if ($result['status'] === 'success' && !empty($result['advisories'])): ?>
      <div class="table-responsive">
        <table class="table table-bordered table-hover">
          <thead class="table-dark">
            <tr>
              <th>Variant</th>
              <th>Severity Level</th>
              <th>Intervention Measures</th>
              <th>Affected Regions</th>
              <th>Last Updated</th>
              <th>Source</th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($result['advisories'] as $advisory): ?>
              <tr>
                <td><?php echo htmlspecialchars($advisory['variant'] ?? 'N/A'); ?></td>
                <td>
                  <?php
                  $severity = $advisory['severity_level'] ?? 'N/A';
                  $severityClass = match(strtolower($severity)) {
                      'critical' => 'danger',
                      'high' => 'warning',
                      'medium' => 'info',
                      'low' => 'success',
                      default => 'secondary'
                  };
                  ?>
                  <span class="badge bg-<?php echo $severityClass; ?>">
                    <?php echo htmlspecialchars($severity); ?>
                  </span>
                </td>
                <td>
                  <ul class="list-unstyled mb-0">
                    <?php 
                    $measures = explode(',', $advisory['intervention_measures'] ?? '');
                    foreach ($measures as $measure): 
                    ?>
                      <li class="mb-1">
                        <i class="bi bi-check-circle-fill text-success"></i>
                        <?php echo htmlspecialchars(trim($measure)); ?>
                      </li>
                    <?php endforeach; ?>
                  </ul>
                </td>
                <td><?php echo htmlspecialchars($advisory['affected_regions'] ?? 'N/A'); ?></td>
                <td><?php echo htmlspecialchars($advisory['last_updated'] ?? 'N/A'); ?></td>
                <td>
                  <?php if (!empty($advisory['source']) && filter_var($advisory['source'], FILTER_VALIDATE_URL)): ?>
                    <a href="<?php echo htmlspecialchars($advisory['source']); ?>" 
                       target="_blank" 
                       class="btn btn-sm btn-primary">
                      <i class="bi bi-link-45deg"></i> View
                    </a>
                  <?php else: ?>
                    <span class="text-muted">N/A</span>
                  <?php endif; ?>
                </td>
              </tr>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    <?php else: ?>
      <div class="alert alert-warning">
        <i class="bi bi-exclamation-triangle"></i> 
        <?php echo htmlspecialchars($result['message'] ?? 'Unable to fetch health advisory information at this time.'); ?>
      </div>
      
      <?php if (isset($result['details'])): ?>
        <div class="mt-3">
          <h6>Error Details:</h6>
          <pre class="bg-light p-3 rounded">
            <?php echo htmlspecialchars(json_encode($result['details'], JSON_PRETTY_PRINT)); ?>
          </pre>
        </div>
      <?php endif; ?>
    <?php endif; ?>
    
    <div class="mt-3">
      <small class="text-muted">
        <i class="bi bi-info-circle"></i> 
        Information sourced from official health authorities and public health agencies
      </small>
    </div>
  </div>
</div>

  <div class="col-lg-12">

    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Example Card</h5>
        <p>This is an examle page with no contrnt. You can use it as a starter for your custom pages.</p>
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