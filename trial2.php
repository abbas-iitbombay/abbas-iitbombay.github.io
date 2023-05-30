<!DOCTYPE html>
<html>
<head>
  <title>Tab Buttons Example</title>
  <style>
    .tab-content {
      display: none;
      margin: 40px;
    }
    .button 
    {
      font-size: 14px; 
      font-family: sans-serif;
      font-weight: bold;
      padding: 4px 80px;
      border-radius: 7px;
      height: 33px;
    }
    .active {
      background-color: brown;
      color: white;
    }
    #header {
      height: 67px;
      font-family: sans-serif;
      align-items: center;
      align-content: center;
      text-align: center;
      font-weight: bold;
      background-color: lightgreen;
      position: fixed;
      /*border-bottom: 1px black solid;*/
      top: 0;
      left: 0;
      right: 0;
    }
    .container {
      justify-content: center;
      height: 100vh; /* Adjust this value based on your layout */
    }
  </style>
  <script>
    function changeTab(tabId) {
      var tabContents = document.getElementsByClassName('tab-content');
  
      for (var i = 0; i < tabContents.length; i++) {
        tabContents[i].style.display = 'none';
      }
  
      var selectedTab = document.getElementById(tabId);
      if (selectedTab) {
        selectedTab.style.display = 'block';
      }
      
      var tabButtons = document.getElementsByClassName('tab-button');
      for (var i = 0; i < tabButtons.length; i++) {
        tabButtons[i].classList.remove('active');
      }
      
      var activeButton = document.getElementById(tabId + "-button");
      if (activeButton) {
        activeButton.classList.add('active');
      }
    }
    
    // Set default display to 'tab1' when the page loads
    window.addEventListener('DOMContentLoaded', function() {
      changeTab('tab1');
    });
  </script>
  
</head>
<body>
  <div id="header" class="container">
    <!-- Header content goes here -->
    <button id="tab1-button" class="tab-button button" onclick="changeTab('tab1')">Introduction</button>
  <button id="tab2-button" class="tab-button button" onclick="changeTab('tab2')">Overview of Sewage Treatment Technologies</button>
  <button id="tab3-button" class="tab-button button" onclick="changeTab('tab3')">Criteria and Indicators</button>
  <br>
  <button id="tab4-button" class="tab-button button" onclick="changeTab('tab4')">Land Suitability Analysis</button>
  <button id="tab5-button" class="tab-button button" onclick="changeTab('tab5')">Life Cycle Costing Framework</button>
  <button id="tab6-button" class="tab-button button" onclick="changeTab('tab6')">Decision Making Framework</button>
  </div>

  <div id="tab1" class="tab-content">
    <br>
    <p align='justify' style='font-size: 20px; line-height: 1.5; border: none;'>
    <b>Need for appropriate technology selection</b><br>
    Investment in infrastructure for wastewater treatment is costly and the urban local bodies should properly investigate before making huge investments in sewage treatment facilities. A large number of treatment technologies have experimentally proven to successfully remove various contaminants from wastewater. Each technology has its own advantages and limitations.
    <br><br>
    It is the situation, and not the technology, that decides the appropriateness of technology selection (Kalbar et al., 2012). The one-size-fits-all approach fails in managing the liquid waste, hence, it is important to analyze the location where wastewater treatment is to be implemented. The existing infrastructure, population density, awareness level of stakeholders, availability of skilled manpower, funds availability, end use of treated wastewater etc. are a few of the factors to be considered for decision-making. However, decision-makingoften lacks the inclusion of multiple criteria, and public utilities tend to create infrastructure on the basis of capital cost alone. Lack of consideration of O&M and planning infrastructure from a holistic perspective results in the failure of sustenance of treatment technologies.
    <br><br>
    A developing country like India has a huge gap in sewage generation and treatment capacity. The Government has allocated funds for sewage treatment, and the focus should be on creating ‘sustainable and resilient’ sewage treatment plants. The infrastructure once created is difficult to dismantle and hence inappropriate technology selection unnecessarily results in wastage of financial and material resources (Kalbar et al., 2016). Hence, <b> this decision support tool aims to facilitate Urban Local Bodies to select an appropriate technology based on the locality or the city,and ensures maximum sustainability and resilience with minimum costs.</b>
    <br><br>
    More read available at: 
    <br>
    1. <a href='https://doi.org/10.1016/j.jclepro.2016.01.036' target='_BLANK'>Life cycle-based decision support tool for selection of wastewater treatment alternatives</a> 
    <br>
    2. <a href='https://doi.org/10.1016/j.techsoc.2012.10.001' target='_BLANK'>Technology assessment for wastewater treatment using multiple-attribute decision-making</a> 
    <br>
    3. <a href='https://doi.org/10.1016/j.jenvman.2012.08.025' target='_BLANK'>Selection of an appropriate wastewater treatment technology: A scenario-based multiple-attribute decision-making approach</a>
    </p>
  </div>

  <div id="tab2" class="tab-content">
    <br><br>
    <center>
    <img src='images/OWTT_fig1.png' alt='Image'>
    </center>
    <p align='justify' style='font-size: 20px; line-height:1.5; border: none;'>
    Broadly speaking, wastewater treatment technologies can be categorized as physicochemical and biological. Physicochemical treatment involves unit operations such as sedimentation, adsorption, and filtration. Biological processes can either be aerobic or anaerobic, depending on the presence or absence of oxygen. Aerobic processes are of two types. Suspended growth, in which the biomass remains in a suspended form in the wastewater, and attached growth, in which the biomass gets attached to media used in the treatment systems. Many technology variants are available in market; however, the basis of treatment and the scientific principles are essentially the same, and any sewage treatment technology has to fall in one of the above classifications. 
    <br><br>
    The technologies achieving good removal efficiencies are either costly due to the energy demand or require large land resulting in an increased land cost. Thus, wastewater treatment often involves a trade-off between energy and land. This tradeoff results in a broad classification of treatment technologies as mechanized and natural treatment systems. Mechanized treatment systems require less land area but higher energy whereas natural treatment systems are low cost treatment alternatives requiring land.
    </p>
    <center>
    <img src='images/OWTT_fig2.png' alt='Image'>
    </center>
    <p align='justify' style='font-size: 20px; line-height:1.5; border: none;'>
    Mechanized sewage treatment systems are not adequately capable of removingnutrients nitrogen and phosphorus thereby causing high sludge production and eutrophication issues on disposal in water bodies. Further, the mechanized systems also lack capacity of coliform removal. This makes the effluent unsuitable and poses a risk on its reuse. Even if some advanced treatment technologies are available, they are very costly and demand skilled technical expertise. However, natural treatment systems have the potential to achieve good nutrient as well as coliform removal at an affordable cost. It is of utmost importance to explore these wastewater treatment solutions to augment the existing sewage treatment capacity.
    <br><br>
    The engineered natural treatment systems have broadly been categorized under the heads of systems using phytoremediation (plants); bioremediation (microbes) and zoo-remediation (animals)(Chaturvedi, 2008). The term ‘phyto’ means plants. The wastewater treatment systems involving the use of plants for nutrient and metal uptake or those using algae are considered under phytoremediation. Bioremediation involves the use of microorganisms whereas zoo-remediation involves the use of animals such as fish or earthworms to carry out wastewater treatment.
    <br><br>
    Considering the numerous advancements in treatment technologies and the rise in patented technologies, the above categorization of engineered natural wastewater treatment systems can be slightly modified to include a fourth category termed ‘natural hybrid systems’ in the classification.
    </p>
    <center>
    <img src='images/OWTT_fig3.png' alt='Image'>
    </center>
    <p align='justify' style='font-size: 20px; line-height:1.5; border: none;'>
    The perilous balance between the growing water demands and supplies has led to a forceful adoption of recycling and reusing water.However, hardly any of the technologies produce an effluent of recyclable quality for high-end applications at an affordable cost. Each category of wastewater treatment i.e. mechanized and natural has its own advantages and disadvantages making it appropriate for different land settings. The land requirement mainly limits the full-fledged use of non-mechanized treatment technologies especially in urban areas, while it is the enormous operational cost limiting the adoption of mechanized treatment in rural and peri-urban areas. Hence, it is necessary to come up with intelligent combinations of treatment technologies to achieve effluent which can be reused and recycled in different scenarios. Amidst the stringent norms by regulatory authorities such as NGT, the challenge is to attain the required wastewater disposal norms while adhering to international commitments such as Sustainable Development Goals (SDG). The coupling of mechanized and natural treatment systems as a full-fledged strategy to achieve sustainable water management is suggested as a novel approach termed as the ‘Hybrid Treatment Systems’ approach.
    </p>
    <center>
    <img src='images/OWTT_fig4.png' alt='Image'>
    </center>
    <p align='justify' style='font-size: 20px; line-height:1.5; border: none;'>
    <b>
    List of treatment technologies considered in the decision support tool
    </b>
    </p>
    <center>
    <table style='padding-left:200px; font-size: 20px;'>
      <td style='border: 1px solid purple; padding: 10px 40px;''><b>Mechanized Treatment</b></td>
      <td style='border: 1px solid purple; padding: 10px 40px'>
           <a href='PDFs/ASP.pdf' target='_BLANK'>Activate Sludge Process</a>
           <br>
           <a href='wwtp/abbaspdf/RBC.pdf' target='_BLANK'>Rotating Biological Contactors</a>
           <br>
           <a href='wwtp/abbaspdf/MBR.pdf' target='_BLANK'>Membrane Bio-Reactor</a>
           <br>
           <a href='wwtp/abbaspdf/MBBR.pdf' target='_BLANK'>Moving Bed Bio-Reactor</a>
           <br>
           <a href='wwtp/abbaspdf/SBR.pdf' target='_BLANK'>Sequencing Batch Reactor</a>
           <br>
           <a href='wwtp/abbaspdf/Ext_aeration.pdf' target='_BLANK'>Extended Aeration</a>
        </td>
      </tr>

      <td style='border: 1px solid purple; padding: 10px 40px'><b>Natural Treatment</b></td>
      <td style='border: 1px solid purple; padding: 10px 40px'>
           <a href='wwtp/abbaspdf/CW_SFV.pdf' target='_BLANK'>Constructed Wetlands (Surface flow vertical)</a>
           <br>
           <a href='wwtp/abbaspdf/CW_SSFH.pdf' target='_BLANK'>Constructed Wetlands (Subsurface flow horizonatal)</a>
           <br>
           <a href='wwwtp/abbaspdf/CW_DPW.pdf' target='_BLANK'>Constructed Wetlands (Deep bed wetlands)</a>
           <br>
           <a href='wwtp/abbaspdf/WS_ponds.pdf' target='_BLANK'>Waste Stabilization ponds</a>
           <br>
           <a href='wwtp/abbaspdf/D_ponds.pdf' target='_BLANK'>Duckweed ponds</a>
        </td>   
      </tr>
    </table>
    </center>
  </div>

  <div id="tab3" class="tab-content">
    <br>
    <p align='justify' style='font-size: 20px; line-height:1.5; border: none'>itha indicators baddal mahiti taka </p>
  </div>
  
  <div id="tab4" class="tab-content">
    <br>
    <p align='justify' style='font-size: 20px; line-height:1.5; border: none'>
    Wastewater treatment involves a trade-off of land vs. energy. Mechanized Treatment Systems (MTS) require less area but are energy-intensive and hence, fail to sustain in the long run. On the contrary, Natural Treatment Systems (NTS) mimic the processes occurring in nature, and can adequately remove pathogens, nutrients and heavy metals using negligible energy. NTS are capable of meeting the stringent norms mandated by the regulatory authorities and are sustainable as compared to MTS. However, sewage treatment is not prioritized by politicians and also stakeholders are not willing to invest in the same. Hence, the large land requirement for NTS is a major constraint for the large-scale implementation and upscaling of NTS. Thereby, it becomes important to rationally design the natural treatment systems to ensure optimum usage of land. Biotic components such as microbial organisms and macrophyte speciesplay a key role in the wastewater treatment using NTS, hence, geographical factors such as temperature, radiation and ground strata significantly affect the performance of NTS which in turn affect the land requirement and capital cost.
    <br><br>
    Land suitability analysis using Geographic Information System (GIS) has commonly been used by urban planners for the efficient utilization of land resources and management of green spaces. NTS such as constructed wetlands add to the aesthetic of surroundings and can also be used for landscaping purposes to achieve the norms for green spaces in urban areas. However, there are hardly any studies analyzing the land suitability for the appropriateness of wastewater treatment technology for the given location.</p>
  </div>
  
  <div id="tab5" class="tab-content">
    <br>
    <p align='justify' style='font-size: 20px; line-height:1.5; border: none'>LCC framework is as follows</p>
    <form method="post" action="LCC_tool.php">
    <h2>Tab 2 Content</h2>
    <p>This is the content for Tab 2.</p>
    <input type="submit">
    </form>
  </div>

  <div id="tab6" class="tab-content">
    <br>
    <p align='justify' style='font-size: 20px; line-height:1.5; border: none'>The details must be entered here</p>
  </div>
</body>
</html>
