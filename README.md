# MS Thesis: Predictive Modeling Systems in Viral Evolution and Pandemic Outbreak Forecasting Using Artificial Intelligence

## Authors
**Darryl Reeves**  
Professor & Mentor

**Shreeram Sankar**  
MSCS Student, NYU Tandon School of Engineering

---

## Overview

This thesis explores the design and implementation of predictive modeling systems using artificial intelligence to analyze viral evolution and forecast pandemic outbreaks. The project focuses on SARS-CoV-2 and integrates multiple modules for mutation tracking, data visualization, genomic analysis, epidemiological surveillance, and collaborative research.

---

## Project Components

### 1. Genetic Mutation and Variant Tracking
- **Real-time Variant Database**  
  Displays the latest SARS-CoV-2 genetic mutations with up-to-date information from genomic repositories.

- **Variant Geographic Spread Map**  
  Visualizes the global distribution and emergence of new variants.

- **Phylogenetic Tree Visualization**  
  Depicts the evolutionary relationships among different SARS-CoV-2 lineages.

- **Lineage List**  
  A structured list of known lineages for reference and comparative analysis.

---

### 2. Genetic Studies and Data Analysis
- **Genomic Data Repository**  
  A central database to store viral genome sequences for processing and analysis.

- **AI-driven Mutation Prediction**  
  Uses machine learning models to forecast potential future genetic mutations.

- **Mutation Comparison Tool**  
  Enables comparison between genetic sequences of different variants.

- **Mutation Impact Analysis**  
  Predicts the potential functional effects of mutations on viral behavior.

---

### 3. Pandemic Alert and Surveillance (Epidemiological Data)
- **AI-based Early Warning System**  
  Detects potential outbreak patterns using AI/ML algorithms and historical data.

- **Epidemiological Trends Dashboard**  
  Provides real-time tracking of COVID-19 case counts, mortality and infection trends, and emergency department visits by state.

- **Wastewater Surveillance Integration**  
  Incorporates viral load monitoring from wastewater samples to enable early detection of outbreaks.

---

### 4. Research and Government Collaboration
- **Research Paper Aggregation**  
  Collects and indexes recent scientific studies related to SARS-CoV-2.

- **Government Policy Tracker**  
  Monitors global public health policies and pandemic-related measures.

- **Secure Research Collaboration Hub**  
  A dedicated portal to support secure data-sharing and analysis among government and institutional researchers.

---

## Final Output

- **Customizable Data Reports**  
  Automatically generates PDF reports that compile data from all modules for research dissemination and policy reporting.

---

## Purpose

This system is designed to assist researchers, public health officials, and policy-makers by providing comprehensive tools for viral genome analysis, mutation prediction, real-time outbreak surveillance, and collaborative research support. It aims to enhance pandemic preparedness and response through data-driven insights and AI-powered forecasting.
Absolutely! Here's a detailed and professional step-by-step guide you can add under a **“How to Run the Project”** section in your README:

---

## How to Run the Project 

To set up and run this project locally using PHP and MySQL, follow the steps below:

---

### **Step 1: Install XAMPP**

1. Download the [XAMPP installer](https://www.apachefriends.org/index.html) for your operating system (Windows/macOS/Linux).
2. Install XAMPP by following the instructions for your OS.
3. Once installed, open the **XAMPP Control Panel**.

---

### **Step 2: Start Apache and MySQL Services**

1. In the **XAMPP Control Panel**, click:
   - **Start** next to **Apache** (for running PHP server).
   - **Start** next to **MySQL** (for database server).
2. Ensure both services show **green** indicating they are running.

---

### **Step 3: Download or Clone the Project**

You can either:

- **Clone the repository** using Git:
  ```bash
  git clone https://github.com/Ramysandy/covid.git
  ```
- **Or**, manually download the ZIP file of the project and extract it.

---

### **Step 4: Move Project to XAMPP’s htdocs Directory**

1. Locate your XAMPP installation folder.
2. Open the `htdocs` directory (usually located at `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS).
3. Copy the entire project folder (`covid/`) into this `htdocs` directory.

---

### **Step 5: Import the SQL Database**

1. Open your browser and go to:  
   [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
2. Click on **"New"** to create a new database.  
   Name it (e.g., `thesis`).
3. Click on the newly created database.
4. Go to the **"Import"** tab.
5. Click **"Choose File"** and select the `thesis.sql` file from the project directory.
6. Click **"Go"** to import the database structure and data.

---

### **Step 6: Run the Project in Browser**

1. In your browser, go to:  
   [http://localhost/covid](http://localhost/covid)  
   (Assuming your project folder is named `covid` and placed inside `htdocs`)
2. The homepage of the thesis project should now be visible.

---

### **Notes**
- Ensure all file paths and database credentials in your PHP files (like `config.php`) match the local setup.
- If using a different database name, update it in your PHP config file accordingly.

