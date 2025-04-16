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
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
              <i class="bi bi-exclamation-octagon me-1"></i>
              A simple danger alert with icon—check it out!
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                
                <div class="card-body">
                  <h5 class="card-title">Active deaths </h5>

                  <div class="d-flex align-items-center">
                    
                    <div class="ps-3">
                      <h6 id="covid-deaths">0</h6>

                      <!-- JavaScript to Fetch and Update Data -->
                      <script>
                          // API URL
                          const apiUrl = "https://data.cdc.gov/resource/r8kw-7aab.json";
                  
                          // Fetch data from API
                          async function fetchData() {
                              try {
                                  const response = await fetch(apiUrl);
                                  const data = await response.json();
                  
                                  // Sort data by week ending date (assuming `week_ending` exists) in descending order
                                  data.sort((a, b) => new Date(b.week_ending) - new Date(a.week_ending));
                  
                                  // Get the most recent row with a valid COVID-19 Deaths value
                                  const mostRecentRow = data.find(row => row.covid_19_deaths);
                  
                                  if (mostRecentRow) {
                                      // Extract the most recent COVID-19 Deaths value
                                      const mostRecentDeaths = parseInt(mostRecentRow.covid_19_deaths, 10);
                  
                                      // Update the HTML element with the fetched value
                                      document.getElementById("covid-deaths").textContent = mostRecentDeaths;
                                  } else {
                                      console.error("No valid data found for COVID-19 Deaths.");
                                  }
                              } catch (error) {
                                  console.error("Error fetching or processing data:", error);
                              }
                          }
                  
                          // Call fetchData on page load
                          fetchData();
                      </script>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

               

                <div class="card-body">
                  <h5 class="card-title"> Emergency Visits %</h5>

                  <div class="d-flex align-items-center">
                  
                    <div class="ps-3">
                      <h6 id="percent-visits">0</h6>

                      <!-- JavaScript to Fetch and Update Data -->
                      <script>
                        // API URL
                        const apiurltwo = "https://data.cdc.gov/resource/7xva-uux8.json";
                    
                        // Fetch data from API
                        async function fetchData() {
                          try {
                            const response = await fetch(apiurltwo);
                            const data = await response.json();
                    
                            // Filter rows where pathogen is "COVID-19" and both `percent_visits` and `week_end` are present
                            const covidData = data.filter(row => 
                              row.pathogen === "COVID-19" && row.percent_visits && row.week_end
                            );
                    
                            // Sort using `week_end` in descending order to get the most recent entry first
                            covidData.sort((a, b) => new Date(b.week_end) - new Date(a.week_end));
                    
                            if (covidData.length > 0) {
                              // Get the most recent percent_visits value and parse it as a float
                              const mostRecentPercentVisits = parseFloat(covidData[0].percent_visits);
                              // Update the HTML element with the fetched value, formatted to two decimals
                              document.getElementById("percent-visits").textContent = mostRecentPercentVisits.toFixed(1);
                            } else {
                              console.error("No valid data found for COVID-19.");
                            }
                          } catch (error) {
                            console.error("Error fetching or processing data:", error);
                          }
                        }
                    
                        // Call fetchData on page load
                        fetchData();
                      </script>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

               

                <div class="card-body">
                  <h5 class="card-title"> Vaccinations % </h5>

                  <div class="d-flex align-items-center">
                   
                    <div class="ps-3">
                      <h6 id="estimate">0</h6>

                      <script>
                        // API URL assigned to apiurlthree variable
                        const apiurlthree = "https://data.cdc.gov/resource/ksfb-ug5d.json";
                    
                        async function fetchData() {
                          try {
                            const response = await fetch(apiurlthree);
                            const data = await response.json();
                    
                            // Filter rows where geographic_level is "National" and estimate exists
                            const nationalData = data.filter(item => 
                              item.geographic_level &&
                              item.geographic_level.toLowerCase() === "national" &&
                              item.estimate
                            );
                    
                            // Assuming the API returns data sorted chronologically,
                            // the first entry is taken as the most recent row
                            if (nationalData.length > 0) {
                              const mostRecentEstimate = nationalData[0].estimate;
                              document.getElementById("estimate").textContent = mostRecentEstimate;
                            } else {
                              console.error("No data found for National geographic level.");
                            }
                          } catch (error) {
                            console.error("Error fetching or processing data:", error);
                          }
                        }
                    
                        // Execute fetchData on page load
                        fetchData();
                      </script>
                    

                    </div>
                  </div>
                  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" type="text/css" />

                </div>
              </div>

            </div><!-- End Customers Card -->

          <!-- Reports -->
<div class="col-12">
  <div class="card">
    

    <div class="card-body">
      <h5 class="card-title">NSSP Emergency Department Visit by States in USA </h5>

      <!-- Map Container Inside the Card -->
      <div id="map-container" style="width: 100%; height: 400px; overflow: hidden; position: relative;"></div>
      <div class="tooltip" id="tooltip"></div>

      <script src="https://d3js.org/d3.v7.min.js"></script>
      <script src="https://d3js.org/topojson.v3.min.js"></script>

      <script>
          async function drawMap() {
              const container = document.getElementById("map-container");
              const width = container.clientWidth, height = 400; // Fit inside the card

              // Load US GeoJSON data
              const us = await d3.json("https://cdn.jsdelivr.net/npm/us-atlas@3/states-10m.json");

              // Fetch COVID data
              const response = await fetch('https://data.cdc.gov/resource/rdmq-nq56.json');
              const data = await response.json();

              // Process COVID data
              let covidDict = {};
              data.forEach(entry => {
                  const state = entry.geography;
                  const covidPercent = parseFloat(entry.percent_visits_covid) || 0;

                  if (state) {
                      if (!covidDict[state]) covidDict[state] = { total: 0, count: 0 };
                      covidDict[state].total += covidPercent;
                      covidDict[state].count += 1;
                  }
              });

              // Compute averages
              Object.keys(covidDict).forEach(state => {
                  covidDict[state] = covidDict[state].total / covidDict[state].count;
              });

              // Define projection and path
              const projection = d3.geoAlbersUsa()
                  .scale(width * 1.2) // Scale dynamically
                  .translate([width / 2, height / 2]);

              const path = d3.geoPath().projection(projection);

              // Define color scale
              const colorScale = d3.scaleThreshold()
                  .domain([1, 2, 5, 10])
                  .range(["#fee8c8", "#fdbb84", "#e34a33", "#b30000", "#7f0000"]);

              // Clear previous SVG if exists
              d3.select("#map-container svg").remove();

              // Create SVG container
              const svg = d3.select("#map-container")
                  .append("svg")
                  .attr("width", "100%") // Full width of the card
                  .attr("height", height);

              const tooltip = d3.select("#tooltip")
                  .style("position", "absolute")
                  .style("padding", "8px")
                  .style("font-size", "14px")
                  .style("background", "rgba(0, 0, 0, 0.7)")
                  .style("color", "white")
                  .style("border-radius", "4px")
                  .style("pointer-events", "none")
                  .style("opacity", 0)
                  .style("max-width", "200px");

              // Draw states
              svg.append("g")
                  .selectAll("path")
                  .data(topojson.feature(us, us.objects.states).features)
                  .join("path")
                  .attr("d", path)
                  .attr("fill", d => {
                      let stateName = d.properties.name;
                      return covidDict[stateName] !== undefined ? colorScale(covidDict[stateName]) : "#ccc";
                  })
                  .attr("stroke", "#fff")
                  .on("mouseover", (event, d) => {
                      let stateName = d.properties.name;
                      let value = covidDict[stateName] ? covidDict[stateName].toFixed(2) + "%" : "No Data";

                      // Get bounding box of map container
                      const containerRect = container.getBoundingClientRect();
                      const tooltipWidth = 200; // Fixed width for tooltip
                      let x = event.pageX - containerRect.left + 10;
                      let y = event.pageY - containerRect.top - 20;

                      // Ensure tooltip stays inside the card
                      if (x + tooltipWidth > containerRect.width) {
                          x = containerRect.width - tooltipWidth - 10;
                      }
                      if (y < 10) {
                          y = 10;
                      }

                      tooltip.style("opacity", 1)
                          .html(`<strong>${stateName}</strong><br>COVID Visits: ${value}`)
                          .style("left", `${x}px`)
                          .style("top", `${y}px`);
                  })
                  .on("mouseout", () => tooltip.style("opacity", 0));
          }

          drawMap();
      </script>

      <!-- Line Chart -->
      <div id="reportsChart"></div>
      <!-- End Line Chart -->

    </div>
  </div>
</div><!-- End Reports -->


        <!-- Recent Sales -->
<div class="col-12">
  <div class="card recent-sales" style="overflow: visible;">
    <div class="card-body">
      <h5 class="card-title">Public SARS-CoV-2 Concentration in Wastewater Data
        
        </h5>
      <!-- Chart container -->
      <div id="chart"></div>
    </div>
  </div>
</div>
<!-- End Recent Sales -->

<!-- Include D3.js -->
<script src="https://d3js.org/d3.v7.min.js"></script>
<script>
  // URL to fetch the 10 most recent entries ordered by descending date
  const apiUr = "https://data.cdc.gov/resource/g653-rqe2.json?$order=date DESC&$limit=10";

  fetch(apiUr)
    .then(response => response.json())
    .then(data => {
      // Process the data and create a unique index for each entry for the x-scale.
      const parsedData = data.map((d, i) => ({
        key_plot_id: d.key_plot_id,
        date: d.date,
        pcr_conc_lin: d.pcr_conc_lin ? Math.round(+d.pcr_conc_lin / 1000000) : 0, // Normalize to millions
        normalization: d.normalization,
        index: i // For unique x-axis placement
      })).sort((a, b) => new Date(a.date) - new Date(b.date)); // Sort ascending by date

      // Define margins. For responsiveness, we compute width from the container.
      const margin = { top: 20, right: 30, bottom: 50, left: 70 };
      const container = document.getElementById("chart");
      const containerWidth = container.clientWidth || 600;
      const width = containerWidth - margin.left - margin.right;
      const height = 400 - margin.top - margin.bottom;

      // Create an SVG that is responsive using viewBox and preserveAspectRatio.
      const svg = d3.select("#chart")
        .append("svg")
        .attr("viewBox", `0 0 ${width + margin.left + margin.right} ${height + margin.top + margin.bottom}`)
        .attr("preserveAspectRatio", "xMidYMid meet")
        .append("g")
        .attr("transform", `translate(${margin.left},${margin.top})`);

      // Define an x-scale based on the unique index. This ensures each bar gets a unique position.
      const x = d3.scaleBand()
        .domain(parsedData.map(d => d.index))
        .range([0, width])
        .padding(0.2);

      // Define a y-scale based on the normalized values.
      const y = d3.scaleLinear()
        .domain([0, d3.max(parsedData, d => d.pcr_conc_lin)])
        .nice()
        .range([height, 0]);

      // Add the x-axis, converting each index back to its corresponding date.
      svg.append("g")
        .attr("transform", `translate(0,${height})`)
        .call(d3.axisBottom(x).tickFormat(i => parsedData[i].date))
        .selectAll("text")
        .attr("transform", "rotate(-45)")
        .style("text-anchor", "end");

      // Add the y-axis and format ticks to show 'M' for millions.
      svg.append("g")
        .call(d3.axisLeft(y).tickFormat(d => `${d}M`));

      // Set up a tooltip that will follow the mouse.
      const tooltip = d3.select("#chart")
        .append("div")
        .style("position", "absolute")
        .style("background-color", "white")
        .style("border", "1px solid #ccc")
        .style("padding", "5px")
        .style("border-radius", "5px")
        .style("pointer-events", "none")
        .style("opacity", 0);

      // Create a linear gradient for a 3D-like effect.
      const gradient = svg.append("defs")
        .append("linearGradient")
        .attr("id", "gradient")
        .attr("x1", "0%")
        .attr("y1", "0%")
        .attr("x2", "100%")
        .attr("y2", "100%");
      
      gradient.append("stop")
        .attr("offset", "0%")
        .attr("stop-color", "#4CAF50")
        .attr("stop-opacity", 0.8);
      
      gradient.append("stop")
        .attr("offset", "100%")
        .attr("stop-color", "#388E3C")
        .attr("stop-opacity", 0.9);

      // Add the bars with gradient fill to simulate a 3D box.
      svg.selectAll(".bar")
        .data(parsedData)
        .enter()
        .append("rect")
        .attr("class", "bar")
        .attr("x", d => x(d.index))
        .attr("y", d => y(d.pcr_conc_lin))
        .attr("width", x.bandwidth())
        .attr("height", d => height - y(d.pcr_conc_lin))
        .attr("fill", "url(#gradient)")
        .attr("stroke", "#2c6b29")
        .attr("stroke-width", 1)
        .on("mouseover", (event, d) => {
          tooltip.style("opacity", 1)
            .html(`<strong>Date:</strong> ${d.date}<br><strong>Concentration:</strong> ${d.pcr_conc_lin}M`)
            .style("left", (event.pageX + 10) + "px")
            .style("top", (event.pageY + 10) + "px");
        })
        .on("mousemove", (event, d) => {
          tooltip.style("left", (event.pageX + 10) + "px")
                 .style("top", (event.pageY + 10) + "px");
        })
        .on("mouseout", () => {
          tooltip.style("opacity", 0);
        });
    })
    .catch(error => console.error('Error fetching data:', error));
</script>


<style>
  /* Ensure the card resizes responsively */
  .card { overflow: visible; }
  .table-container { margin-top: 20px; }
</style>
</head>
<body>
<!-- Top Selling Card -->
<div class="col-12">
  <div class="card top-selling overflow-auto">
    <div class="card-body pb-0">
      <h5 class="card-title">Top 5 Latest SARS‑CoV‑2 Mutation Publications (USA)</h5>
      <!-- Table container -->
      <div id="mutationTableContainer" class="table-container">
     
        <table class="table table-striped table-bordered">
          <thead>
            <tr>
              <th>Title</th>
              <th>Publication Date</th>
              <th>PMID</th>
            </tr>
          </thead>
          <tbody id="mutationTableBody">
            <!-- Data rows appended here dynamically -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!-- End Top Selling -->

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<!-- JavaScript for fetching and displaying data -->
<script>
  // Base URL for NCBI E-utilities
  const baseURL = "https://eutils.ncbi.nlm.nih.gov/entrez/eutils/";
  // Using esearch to find PubMed articles about "SARS-CoV-2 mutation USA"
  const searchURL = `${baseURL}esearch.fcgi?db=pubmed&term=SARS-CoV-2+mutation+USA&sort=pub+date&retmax=5&retmode=json`;

  fetch(searchURL)
    .then(response => response.json())
    .then(searchData => {
      // Get the list of PubMed IDs from the search results
      const idList = searchData.esearchresult.idlist;
      // Build a summary URL to fetch article details
      const summaryURL = `${baseURL}esummary.fcgi?db=pubmed&id=${idList.join(",")}&retmode=json`;
      return fetch(summaryURL);
    })
    .then(response => response.json())
    .then(summaryData => {
      // The results are in summaryData.result with an array of uids in summaryData.result.uids
      const uids = summaryData.result.uids;
      const tableBody = document.getElementById("mutationTableBody");
      uids.forEach(uid => {
        const item = summaryData.result[uid];
        const tr = document.createElement("tr");

        // Create table cell for Title
        const titleTd = document.createElement("td");
        titleTd.textContent = item.title || "N/A";
        tr.appendChild(titleTd);

        // Create table cell for Publication Date
        const pubDateTd = document.createElement("td");
        pubDateTd.textContent = item.pubdate || "N/A";
        tr.appendChild(pubDateTd);

        // Create table cell for PMID
        const pmidTd = document.createElement("td");
        pmidTd.textContent = uid;
        tr.appendChild(pmidTd);

        tableBody.appendChild(tr);
      });
    })
    .catch(error => console.error("Error fetching data:", error));
</script>

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">
<!-- Budget Report -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title">SARS-CoV-2</h5>

    <!-- Slides with captions -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>

      <div class="carousel-inner">
    <div class="carousel-item active">
        <img src="https://mir-s3-cdn-cf.behance.net/project_modules/max_632/230ec394989969.5e8c9fbef26d0.gif" class="d-block w-100" alt="Epidemiological Dashboard">
        <div class="carousel-caption d-none d-md-block" >
          <b>  <h5 style="background-color: rgba(0, 0, 0, 0.569);">Epidemiological Data</h5></b>
            <p style="background-color: rgba(0, 0, 0, 0.569);">Monitor disease trends</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="https://cdn.rcsb.org/pdb101/learn/resources/corona-protease/nCOV_SARS.gif" class="d-block w-100" alt="Genetic Dashboard">
        <div class="carousel-caption d-none d-md-block">
        <b>  <h5 style="background-color: rgba(0, 0, 0, 0.569);"></h5style>Genetic Data</h5></b>
            <p style="background-color: rgba(0, 0, 0, 0.569);">Analyze viral genetic data</p>
        </div>
    </div>
    <div class="carousel-item">
        <img src="https://media3.giphy.com/media/UUsOy6IWmzw6mmeOpQ/200w.gif?cid=6c09b952re2gvszmu5wtwz852fwn6s3xrbvbzc2t59t125jf&ep=v1_gifs_search&rid=200w.gif&ct=g" class="d-block w-100" alt="COVID-19 Publication Papers">
        <div class="carousel-caption d-none d-md-block">
        <b>  <h5 style="background-color: rgba(0, 0, 0, 0.569);">COVID-19 Publications</h5></b>
            <p style="background-color: rgba(0, 0, 0, 0.569);">Discover recent research papers</p>
        </div>
    </div>
</div>


      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>

    </div><!-- End Slides with captions -->




        <!-- Recent Activity -->
<div class="card">
  <div class="card-body">
    <h5 class="card-title">Covid-19 News USA <span>| Latest Articles</span></h5>

    <div class="activity" id="activity-list">
      <!-- Dynamic activity items will be inserted here -->
    </div>
  </div>
</div><!-- End Recent Activity -->

<script>
  // Define the News API URL with your API key
  const apiKey = '9a5d61689c034caca162cc93f25ccc03'; // Replace with your News API key
  const apiEndpoint = `https://newsapi.org/v2/everything?q=covid+usa&language=en&apiKey=${apiKey}`;

  // Fetch COVID-19 news articles
  fetch(apiEndpoint)
    .then(response => response.json())  // Parse the JSON response
    .then(data => {
      const activityList = document.getElementById('activity-list');

      // Check if there are articles returned
      if (data.articles && data.articles.length > 0) {
        // Limit to top 5 articles
        const topArticles = data.articles.slice(0, 5);

        topArticles.forEach((article) => {
          // Create a new activity item for each article
          const activityItem = document.createElement('div');
          activityItem.classList.add('activity-item', 'd-flex');

          // Format the time (Just showing article publishing time)
          const articleTime = new Date(article.publishedAt);
          const timeDiff = formatTimeDifference(articleTime);
          
          activityItem.innerHTML = `
            <div class="activite-label">${timeDiff}</div>
            <i class='bi bi-circle-fill activity-badge text-info align-self-start'></i>
            <div class="activity-content">
              <a href="${article.url}" target="_blank" class="fw-bold text-dark">${article.title}</a>
              <p>${article.description || 'No description available'}</p>
            </div>
          `;

          // Append the article activity item to the list
          activityList.appendChild(activityItem);
        });
      } else {
        activityList.innerHTML = '<p>No COVID-19 news available at the moment.</p>';
      }
    })
    .catch(error => {
      console.error('Error fetching news:', error);
    });

  // Function to calculate time difference
  function formatTimeDifference(date) {
    const now = new Date();
    const diffInSeconds = Math.floor((now - date) / 1000);

    if (diffInSeconds < 60) {
      return `${diffInSeconds} sec`;
    } else if (diffInSeconds < 3600) {
      return `${Math.floor(diffInSeconds / 60)} min`;
    } else if (diffInSeconds < 86400) {
      return `${Math.floor(diffInSeconds / 3600)} hr`;
    } else if (diffInSeconds < 604800) {
      return `${Math.floor(diffInSeconds / 86400)} day`;
    } else {
      return `${Math.floor(diffInSeconds / 604800)} week`;
    }
  }
</script>


          
         

         
           

        </div><!-- End Right side columns -->

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