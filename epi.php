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
      <h1>COVID-19 Mortality and Infection Trends</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Pages</li>
          <li class="breadcrumb-item active">COVID-19 Mortality and Infection Trends</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
      <div class="row">
        <div class="col-lg-12">

         <!-- First Row -->
<div class="row">
  <!-- Card 1: COVID-19 Deaths by Week -->
  <div class="col-xxl-4 col-md-6">
    <div class="card info-card sales-card">
      <div class="card-body">
        <h5 class="card-title">Weekly COVID-19 Deaths</h5>
        <div class="d-flex align-items-center">
          <div class="ps-3">
            <h6 id="covid-week">0</h6>
            <script>
              (function() {
                const apiUrl = "https://data.cdc.gov/resource/r8kw-7aab.json";
                fetch(apiUrl)
                  .then(response => response.json())
                  .then(data => {
                    const latestWeek = data.sort((a,b) => 
                      new Date(b.week_ending_date) - new Date(a.week_ending_date))
                      .find(row => row.covid_19_deaths);
                    document.getElementById("covid-week").textContent = 
                      parseInt(latestWeek?.covid_19_deaths) || 0;
                  });
              })();
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Card 2: COVID-19 Deaths by State -->
<div class="col-xxl-4 col-md-6">
  <div class="card info-card sales-card">
    <div class="card-body">
      <h5 class="card-title">Week ending date</h5>
      <div class="d-flex align-items-center">
        <div class="ps-3">
          <h6 id="covid-state">0</h6>
          <script>
            (function() {
              const apiUrl = "https://data.cdc.gov/resource/r8kw-7aab.json";
              fetch(apiUrl)
                .then(response => response.json())
                .then(data => {
                  const stateData = data.filter(row => row.state && row.covid_19_deaths)
                    .sort((a,b) => new Date(b.week_ending_date) - new Date(a.week_ending_date))[0];
                  
                  if(stateData) {
                    const weekEnding = new Date(stateData.week_ending_date);
                    const formattedDate = `${weekEnding.getFullYear()}-${(weekEnding.getMonth()+1).toString().padStart(2,'0')}-${weekEnding.getDate().toString().padStart(2,'0')}`;
                    document.getElementById("covid-state").textContent = 
                      `${formattedDate}`;
                  }
                });
            })();
          </script>
        </div>
      </div>
    </div>
  </div>
</div>


  <!-- Card 3: Pneumonia Deaths -->
  <div class="col-xxl-4 col-md-6">
    <div class="card info-card sales-card">
      <div class="card-body">
        <h5 class="card-title">Pneumonia Deaths</h5>
        <div class="d-flex align-items-center">
          <div class="ps-3">
            <h6 id="pneumonia">0</h6>
            <script>
              (function() {
                const apiUrl = "https://data.cdc.gov/resource/r8kw-7aab.json";
                fetch(apiUrl)
                  .then(response => response.json())
                  .then(data => {
                    const latest = data.sort((a,b) => 
                      new Date(b.week_ending_date) - new Date(a.week_ending_date))
                      .find(row => row.pneumonia_deaths);
                    document.getElementById("pneumonia").textContent = 
                      parseInt(latest?.pneumonia_deaths) || 0;
                  });
              })();
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Second Row -->
<div class="row">
  <!-- Card 4: Influenza Deaths -->
  <div class="col-xxl-4 col-md-6">
    <div class="card info-card sales-card">
      <div class="card-body">
        <h5 class="card-title">Influenza Deaths</h5>
        <div class="d-flex align-items-center">
          <div class="ps-3">
            <h6 id="influenza">0</h6>
            <script>
              (function() {
                const apiUrl = "https://data.cdc.gov/resource/r8kw-7aab.json";
                fetch(apiUrl)
                  .then(response => response.json())
                  .then(data => {
                    const latest = data.sort((a,b) => 
                      new Date(b.week_ending_date) - new Date(a.week_ending_date))
                      .find(row => row.influenza_deaths);
                    document.getElementById("influenza").textContent = 
                      parseInt(latest?.influenza_deaths) || 0;
                  });
              })();
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Card 5: Combined Deaths -->
  <div class="col-xxl-4 col-md-6">
    <div class="card info-card sales-card">
      <div class="card-body">
        <h5 class="card-title">Combined P/I/COVID Deaths</h5>
        <div class="d-flex align-items-center">
          <div class="ps-3">
            <h6 id="combined">0</h6>
            <script>
              (function() {
                const apiUrl = "https://data.cdc.gov/resource/r8kw-7aab.json";
                fetch(apiUrl)
                  .then(response => response.json())
                  .then(data => {
                    const latest = data.sort((a,b) => 
                      new Date(b.week_ending_date) - new Date(a.week_ending_date))
                      .find(row => row.pneumonia_influenza_or_covid_19_deaths);
                    document.getElementById("combined").textContent = 
                      parseInt(latest?.pneumonia_influenza_or_covid_19_deaths) || 0;
                  });
              })();
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Card 6: Percent of Expected Deaths -->
  <div class="col-xxl-4 col-md-6">
    <div class="card info-card sales-card">
      <div class="card-body">
        <h5 class="card-title">% of Expected Deaths</h5>
        <div class="d-flex align-items-center">
          <div class="ps-3">
            <h6 id="expected">0%</h6>
            <script>
              (function() {
                const apiUrl = "https://data.cdc.gov/resource/r8kw-7aab.json";
                fetch(apiUrl)
                  .then(response => response.json())
                  .then(data => {
                    const latest = data.sort((a,b) => 
                      new Date(b.week_ending_date) - new Date(a.week_ending_date))
                      .find(row => row.percent_of_expected_deaths);
                    document.getElementById("expected").textContent = 
                      `${parseFloat(latest?.percent_of_expected_deaths)?.toFixed(1) || 0}%`;
                  });
              })();
            </script>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Weekly Trends of Deaths in the United States</h5>
        <p>
          <!-- Bootstrap Radio Buttons -->
          <div class="btn-group" role="group" aria-label="Death Categories">
            <input type="radio" class="btn-check" name="deathCategory" id="covid" autocomplete="off" checked>
            <label class="btn btn-outline-primary" for="covid">COVID-19 Deaths</label>
  
            <input type="radio" class="btn-check" name="deathCategory" id="total" autocomplete="off">
            <label class="btn btn-outline-primary" for="total">Total Deaths</label>
  
            <input type="radio" class="btn-check" name="deathCategory" id="pneumoniaAndCovid" autocomplete="off">
            <label class="btn btn-outline-primary" for="pneumoniaAndCovid">Pneumonia and COVID-19 Deaths</label>
  
            <input type="radio" class="btn-check" name="deathCategory" id="allCombined" autocomplete="off">
            <label class="btn btn-outline-primary" for="allCombined">Pneumonia, Influenza, or COVID-19 Deaths</label>
          </div>
        </p>
  
        <!-- Line Chart Container -->
        <div id="linechart-container" style="width: 100%; height: 400px;"></div>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="https://d3js.org/d3.v7.min.js"></script>
        <script>
          async function drawLineChart(category) {
            const container = document.getElementById("linechart-container");
            const width = container.clientWidth, height = 400;
  
            // Fetch data
            const response = await fetch('https://data.cdc.gov/resource/r8kw-7aab.json');
            const data = await response.json();
  
            // Filter data for United States and valid year format
            let filteredData = data.filter(entry => {
              return entry.state === "United States" && /^\d{4}$/.test(entry.year.replace(/\//g, ''));
            });
  
            // Process data
            let processedData = [];
            filteredData.forEach(entry => {
              const week = new Date(entry.week_ending_date);
              let deaths = 0;
  
              // Select deaths based on category
              if (category === "covid") {
                deaths = parseFloat(entry.covid_19_deaths) || 0;
              } else if (category === "total") {
                deaths = parseFloat(entry.total_deaths) || 0;
              } else if (category === "pneumoniaAndCovid") {
                deaths = parseFloat(entry.pneumonia_and_covid_19_deaths) || 0;
              } else if (category === "allCombined") {
                deaths = parseFloat(entry.pneumonia_influenza_or_covid_19_deaths) || 0;
              }
  
              if (week && deaths > 0) {
                processedData.push({ week, deaths });
              }
            });
  
            processedData.sort((a, b) => a.week - b.week);
  
            // Set up scales
            const xScale = d3.scaleTime()
              .domain(d3.extent(processedData, d => d.week))
              .range([50, width - 50]);
  
            const yScale = d3.scaleLinear()
              .domain([0, d3.max(processedData, d => d.deaths)])
              .range([height - 50, 50]);
  
            // Clear previous SVG if exists
            d3.select("#linechart-container svg").remove();
  
            // Create SVG container
            const svg = d3.select("#linechart-container")
              .append("svg")
              .attr("width", "100%")
              .attr("height", height);
  
            // Add line for United States
            svg.append("path")
              .datum(processedData)
              .attr("fill", "none")
              .attr("stroke", "#69b3a2")
              .attr("stroke-width", 2)
              .attr("d", d3.line()
                .x(d => xScale(d.week))
                .y(d => yScale(d.deaths))
              );
  
            // Add points with tooltips
            svg.selectAll("circle")
              .data(processedData)
              .join("circle")
              .attr("cx", d => xScale(d.week))
              .attr("cy", d => yScale(d.deaths))
              .attr("r", 5)
              .attr("fill", "#69b3a2")
              .on("mouseover", (event, d) => {
                const tooltip = d3.select("#tooltip");
                tooltip.style("opacity", 1)
                  .html(`<strong>Week:</strong> ${d.week.toLocaleDateString()}<br><strong>Deaths:</strong> ${d.deaths}`)
                  .style("left", `${event.pageX + 10}px`)
                  .style("top", `${event.pageY - 20}px`);
              })
              .on("mouseout", () => {
                d3.select("#tooltip").style("opacity", 0);
              });
  
            // Add axes
            svg.append("g").call(d3.axisBottom(xScale)).attr("transform", `translate(0, ${height - 50})`);
            svg.append("g").call(d3.axisLeft(yScale)).attr("transform", "translate(50,0)");
  
            // Add grid lines
            svg.append("g")
              .call(d3.axisBottom(xScale).tickSize(-height + 100).tickFormat(""))
              .attr("transform", `translate(0, ${height - 50})`)
              .selectAll("line")
              .style("stroke", "rgba(0,0,0,0.1)");
  
            svg.append("g")
              .call(d3.axisLeft(yScale).tickSize(-width + 100).tickFormat(""))
              .attr("transform", "translate(50,0)")
              .selectAll("line")
              .style("stroke", "rgba(0,0,0,0.1)");
          }
  
          // Initial chart with COVID-19 deaths
          drawLineChart("covid");
  
          // Event listener for radio buttons using jQuery
          $('input[name="deathCategory"]').on('change', function() {
            drawLineChart(this.id);
          });
        </script>
        <div class="tooltip" id="tooltip"></div>
      </div>
    </div>
  </div>
  
 <!-- Reports -->
<div class="col-12">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">NSSP Emergency Department Visit by States in USA</h5>

      <style>
        #map-container {
          width: 100%;
          height: 400px;
          position: relative;
          overflow: hidden;
        }

        #fixed-tooltip {
          margin-top: 10px;
          padding: 12px;
          background-color: #f8f9fa;
          border: 1px solid #ddd;
          border-radius: 6px;
          font-size: 16px;
          color: #333;
        }
      </style>

      <!-- Map Container Inside the Card -->
      <div id="map-container"></div>
      <div id="fixed-tooltip">Hover over a state to see details.</div>

      <script src="https://d3js.org/d3.v7.min.js"></script>
      <script src="https://d3js.org/topojson.v3.min.js"></script>

      <script>
        async function drawMap() {
          const container = document.getElementById("map-container");
          const tooltipBox = document.getElementById("fixed-tooltip");
          const width = container.clientWidth, height = 400;

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
            .scale(width * 1.2)
            .translate([width / 2, height / 2]);

          const path = d3.geoPath().projection(projection);

         const colorScale = d3.scaleThreshold()
    .domain([1, 2, 5, 10])
    .range(["#deebf7", "#9ecae1", "#6baed6", "#31a354", "#006d2c"]);


          // Clear previous SVG if exists
          d3.select("#map-container svg").remove();

          // Create SVG container
          const svg = d3.select("#map-container")
            .append("svg")
            .attr("width", "100%")
            .attr("height", height);

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
              tooltipBox.innerHTML = `<strong>${stateName}</strong><br>COVID Visits: ${value}`;
            })
            .on("mouseout", () => {
              tooltipBox.innerHTML = `Hover over a state to see details.`;
            });
        }

        drawMap();
      </script>

      <!-- Line Chart Placeholder -->
      <div id="reportsChart"></div>
      <!-- End Line Chart -->

    </div>
  </div>
</div>
<!-- End Reports -->

<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">COVID Vaccine Intention - 18+ years</h5>
      <svg id="chart18Plus" width="800" height="400"></svg>
    </div>
  </div>
</div>

<script>
  const data18Plus = [
    { week: "2024-11-16", estimate: 16.8 },
    { week: "2024-11-09", estimate: 18.1 },
    { week: "2024-11-02", estimate: 17.3 },
    { week: "2024-10-26", estimate: 19.2 },
    { week: "2024-10-19", estimate: 20.0 },
    // Add more sample points as needed (total 20)
  ];

  const svg18 = d3.select("#chart18Plus"),
        margin18 = { top: 20, right: 30, bottom: 40, left: 60 },
        width18 = +svg18.attr("width") - margin18.left - margin18.right,
        height18 = +svg18.attr("height") - margin18.top - margin18.bottom;

  const g18 = svg18.append("g").attr("transform", `translate(${margin18.left},${margin18.top})`);

  const x18 = d3.scaleLinear()
    .domain([0, d3.max(data18Plus, d => d.estimate)])
    .range([0, width18]);

  const y18 = d3.scaleBand()
    .domain(data18Plus.map(d => d.week))
    .range([0, height18])
    .padding(0.1);

  g18.append("g")
    .call(d3.axisLeft(y18));

  g18.append("g")
    .attr("transform", `translate(0,${height18})`)
    .call(d3.axisBottom(x18).ticks(5).tickFormat(d => d + "%"));

  g18.selectAll(".bar")
    .data(data18Plus)
    .enter().append("rect")
    .attr("class", "bar")
    .attr("y", d => y18(d.week))
    .attr("width", d => x18(d.estimate))
    .attr("height", y18.bandwidth())
    .attr("fill", "#006400"); // dark green
</script>
<div class="col-lg-12">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">COVID Vaccine Intention - 75+ years</h5>
      <svg id="chart75Plus" width="800" height="400"></svg>
    </div>
  </div>
</div>

<script>
  const data75Plus = [
    { week: "2024-10-12", estimate: 25.4 },
    { week: "2024-10-05", estimate: 26.8 },
    { week: "2024-09-28", estimate: 24.1 },
    { week: "2024-09-21", estimate: 23.9 },
    { week: "2024-09-14", estimate: 22.7 },
    // Add more sample points as needed (total 20)
  ];

  const svg75 = d3.select("#chart75Plus"),
        margin75 = { top: 20, right: 30, bottom: 40, left: 60 },
        width75 = +svg75.attr("width") - margin75.left - margin75.right,
        height75 = +svg75.attr("height") - margin75.top - margin75.bottom;

  const g75 = svg75.append("g").attr("transform", `translate(${margin75.left},${margin75.top})`);

  const x75 = d3.scaleLinear()
    .domain([0, d3.max(data75Plus, d => d.estimate)])
    .range([0, width75]);

  const y75 = d3.scaleBand()
    .domain(data75Plus.map(d => d.week))
    .range([0, height75])
    .padding(0.1);

  g75.append("g")
    .call(d3.axisLeft(y75));

  g75.append("g")
    .attr("transform", `translate(0,${height75})`)
    .call(d3.axisBottom(x75).ticks(5).tickFormat(d => d + "%"));

  g75.selectAll(".bar")
    .data(data75Plus)
    .enter().append("rect")
    .attr("class", "bar")
    .attr("y", d => y75(d.week))
    .attr("width", d => x75(d.estimate))
    .attr("height", y75.bandwidth())
    .attr("fill", "#003366"); // dark blue
</script>


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