<!-- FORM -->

<section id="form" class="text-center" ng-app="formselection" ng-controller="TypeaheadCtrl">
  <div class="logo text-center"> <img src="example/logo.svg" width="360" alt="logo" /></div>
  <svg class="hidden">
  <defs>
    <path id="tabshape" d="M80,60C34,53.5,64.417,0,0,0v60H80z"/>
  </defs>
  </svg>
  <div> 
    <!-- Top Navigation -->
    <section>
      <div class="tabs tabs-style-shape">
        <nav>
          <ul>
            <li id="listep1"> <a href="#section-shape-1"> <svg viewBox="0 0 80 60" preserveAspectRatio="none">
              <use xlink:href="#tabshape"></use>
              </svg> <span>Step 1</span> </a> </li>
            <li id="listep2"> <a href="#section-shape-2"> <svg viewBox="0 0 80 60" preserveAspectRatio="none">
              <use xlink:href="#tabshape"></use>
              </svg> <svg viewBox="0 0 80 60" preserveAspectRatio="none">
              <use xlink:href="#tabshape"></use>
              </svg> <span>Step 2</span> </a> </li>
          </ul>
        </nav>
        <div class="content-wrap stage">
          <section id="section-shape-1">
            <div id="step1">
              <div class="container-fluid" id="whenonmobile">
                <h2>Type below the name of the shop you want to visit:</h2>
                <div class="CustomTemplate">
                  <input id="searchbox" class="typeahead" type="text" ng-model="selected" typeahead="eshop.description with eshop.value as eshop.label for eshop in eshops | filter:$viewValues" placeholder="Example: AirTickets, Public or ASSOS" autocomplete="off">
                </div>
                <br>
                <br>
                
                <div ng-show="selected == null">
                <input class="theme_btn_disabled" type="button" value="Select">
                </div>
                
                <div ng-show="selected != null">
                <input id="selectpc" class="theme_btn color3 pulse" type="button" value="Select">
                </div>
                
                
                
                
              </div>
              <div class="container-fluid" id="whenonpc">
                <h4>Select the name of the shop you want to visit from the list below:</h4>
                <div class="CustomTemplate"> <br/>
                
                
                
                  <select ng-model="selectedOption" ng-options="eshop.value as eshop.label for eshop in eshops">
                  </select>
                  
                  
                  
                  
                </div>
                <br/>
                 <div ng-show="selectedOption == null">
                <input class="theme_btn_disabled" type="button" value="Select">
                </div>
                
                <div ng-show="selectedOption != null">
                <input id="selectmobile" class="theme_btn color3 pulse" type="button" value="Select">
                </div>
                

                
              </div>
            </div>
          </section>
          <section id="section-shape-2">
            <div id="premsg" class="show">
              <p>Please select a shop first</p>
              <button class="theme_btn color3" type="button" id="goback">Go back</button>
            </div>
            <div id="step2" class="hide">
              <h3>Click on one of the causes below to go to your selected eshop</h3>
              <div class="row">
                <div class="block col-sm-6 col-md-3">
                  <div class="thumbnail"> <img alt="team" src="example/straydogs.jpg" alt="stray dogs">
                    <div class="caption">
                      <h4>Stray Dogs</h4>
                      <p>Creative Director</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ipsum repellat possimus laboriosam et.</p>
                    </div>
                    <p class="selectioncause"> </p>
                    <a class="theme_btn color3" id="/?StrayDogs" onClick="redirectDelay(this.id);" target="_self">Select</a>
                    <p> 
                  </div>
                </div>
                <div class="block col-sm-6 col-md-3">
                  <div class="thumbnail"> <img alt="team" src="example/alextigers.jpg" alt="alex tigers">
                    <div class="caption">
                      <h4>Alex Tigers</h4>
                      <p>Creative Director</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ipsum repellat possimus laboriosam et.</p>
                    </div>
                    <p class="selectioncause"> </p>
                    <a class="theme_btn color3"  id="/?AlexTigers" onClick="redirectDelay(this.id);" target="_self">Select</a>
                    <p> 
                  </div>
                </div>
                <div class="block col-sm-6 col-md-3">
                  <div class="thumbnail"> <img alt="team" src="example/homeless.jpg" alt="homeless people">
                    <div class="caption">
                      <h4>Homeless</h4>
                      <p>Creative Director</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ipsum repellat possimus laboriosam et.</p>
                    </div>
                    <p class="selectioncause"> </p>
                    <a class="theme_btn color3" id="/homeless" onClick="redirectDelay(this.id);" target="_self">Select</a>
                    <p> 
                  </div>
                </div>
                <div class="block col-sm-6 col-md-3">
                  <div class="thumbnail"> <img alt="team" src="example/sosvillages.jpg" alt="Sos Villages">
                    <div class="caption">
                      <h4>SOS Villages</h4>
                      <p>Creative Director</p>
                      <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                        elit. Ipsum repellat possimus laboriosam et.</p>
                    </div>
                    <p class="selectioncause"> </p>
                    <a class="theme_btn color3" id="/?utm=SOS" onClick="redirectDelay(this.id);" target="_self">Select</a>
                    <p> 
                  </div>
                </div>
              </div>
            </div>
            
            <div id="buffer">http://{{selected}}</div>
            
             
            <script type="text/javascript">

			var selection_container = document.getElementById("buffer");
			
			  
			function redirectDelay(clicked_id) {
             	$( "#beforeleaving" ).fadeIn( "slow" );
				setTimeout("beforeleaving()", 4500);
				selection_container.innerHTML = selection_container.innerHTML + clicked_id;
				console.log(clicked_id);
				}
				
				function beforeleaving()
				{
				var thechosenone = selection_container.innerHTML;
				window.open(thechosenone, "_self")
				}
	
			</script>
       
          </section>
        </div>
        <!-- /content --> 
      </div>
      <!-- /tabs --> 
    </section>
  </div>
  <!-- /container --> 
  
</section>

<!--<div class="formbottom" style="bottom: 0px; right: 13px; position: absolute;">
  <h5>Scroll down to find out more <i class="arrow-icon-down"></i></h5>
</div>-->
</section>
<!--END FORM-->

