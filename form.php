<!-- FORM -->

<section id="form" class="text-center" ng-app="formselection" ng-controller="TypeaheadCtrl" style="z-index: 9999999999999"> 
  <!--THIS-->
  
    <section id="index" class="searchbg">

<?php include ('shops.php'); ?>
  
    <canvas height="920" width="1669" id="spiders" class="hidden-xs"></canvas>
    <div class="container" id="searchbox">
      <div class="row">
        <div class="col-sm-12 leftcontent"> 
          
          <!--this-->
          
          <div class="tabs tabs-style-shape">
            <nav>
              <ul>
                <li id="listep1"> <a href="#section-shape-1"> </a> </li>
                <li id="listep2"> <a href="#section-shape-2"> </a> </li>
              </ul>
            </nav>
            <div class="content-wrap stage">
              <section id="section-shape-1">
                <div id="step1">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="logo text-center" id="logo"> <img src="assets/images/logo.svg" width="400" alt="logo" /></div>
                    <div> </div>
                  </div>
                </div>
                 
                  <div class="container-fluid" id="whenonmobile">
                    <p class="indextitle">Welcome, type the e-shop's name or its category</p>
                    <div class="CustomTemplate">
                      <div class="leftfloat">
                        <input id="searchbox" class="typeahead leftfloat" type="text" ng-model="selected" 
                                typeahead="eshop.description with eshop as eshop.label for eshop in eshops | filter:$viewValues | limitTo:10" 
                                placeholder="Airtickets or just Tickets" autocomplete="off"/>
                      </div>
                      <div class="leftfloat">
                        <button ng-show="selected == null" class="search_btn_disabled leftfloat" type="button"></button>
                        <button ng-show="selected != null" id="selectpc" class="search_btn leftfloat" type="button"></button>
                      </div>
                    </div>
                    <p class="margintop25">
                    <a id="viewportfolio" class="eshoplist" href="#">View e-shops</a> | 
                    <a id="howitworks" class="eshoplist" href="#how-it-works">How it works</a>
                    </p>
                  </div>
                  <div class="container-fluid" id="whenonpc">
                    <p class="indextitle">Welcome, select an e-shop</p>
                    <div class="CustomTemplate">
                      <div class="select-style">
                        <select ng-model="selectedOption" ng-options="eshop as eshop.label for eshop in eshops">
                        </select>
                      </div>
                    </div>
                    <br/>
                    <div ng-show="selectedOption == null">
                      <input class="search_btn_disabled_mob" type="button">
                    </div>
                    <div ng-show="selectedOption != null">
                      <input id="selectmobile" class="search_btn_mob" type="button">
                    </div>
                  </div>
                </div>
              </section>
              <section id="section-shape-2">
              <div class="stray-dogs">
                <div class="close_stray-dogs"> </div>
                <div class="margintop40  text-left to_slide_left animated fadeInLeft">
                  <div class="block col-sm-2 col-md-2"> <img src="assets/images/alextigers.png" alt="team"> </div>
                  <div class="block col-sm-9 col-md-9">
                    <h3>Jantje Beton</h3>
                    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet. <br/>
                      <br/>
                      For more information: <a target="_blank" href="#">www.amnestyinternational.com</a> </p>
                  </div>
                </div>
              </div>
              <div class="sos-villages">
                <div class="close_sos-villages"> </div>
                <div class="margintop40  text-left to_slide_left animated fadeInLeft">
                  <div class="block col-sm-2 col-md-2"> <img src="assets/images/homeless.png" alt="team"> </div>
                  <div class="block col-sm-9 col-md-9">
                    <h3>Amnesty</h3>
                    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet. <br/>
                      <br/>
                      For more information: <a target="_blank" href="#">www.amnestyinternational.com</a> </p>
                  </div>
                </div>
              </div>
              <div class="hopeland">
                <div class="close_hopeland"> </div>
                <div class="margintop40 text-left to_slide_left animated fadeInLeft">
                  <div class="block col-sm-2 col-md-2"> <img src="assets/images/straydogs.png" alt="team"> </div>
                  <div class="block col-sm-9 col-md-9">
                    <h3>Aids Fonds</h3>
                    <p> Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat. Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet. <br/>
                      <br/>
                      For more information: <a target="_blank" href="#">www.amnestyinternational.com</a> </p>
                  </div>
                </div>
              </div>
              <div id="step2">
                <button class="back leftfloat" type="button" id="goback"> </button>
                <p class="indextitle">You've selected <strong>{{selected.label}}{{selectedOption.label}}</strong>, <br/>
                  now choose the cause you prefer</p>
                <div class="row top-14">
                  <div class="block col-sm-4">
                    <div class="thumbnail"> <img alt="team" src="assets/images/straydogs.png" alt="stray dogs" />
                      <div class="causetitle">
                        <p>Aids Fonds</p>
                      </div>
                      <a class="causebtn" id="/?StrayDogs" onClick="redirectDelay(this.id);" target="_self">Select</a>
                      <p><a class="eshoplist" href="#header" id="hopeland">Read more</a></p>
                    </div>
                  </div>
                  <div class="block col-sm-4">
                    <div class="thumbnail"> <img alt="team" src="assets/images/alextigers.png" alt="alex tigers" />
                      <div class="causetitle">
                        <p>Jantje Beton</p>
                      </div>
                      <a class="causebtn"  id="/?AlexTigers" onClick="redirectDelay(this.id);" target="_self">Select</a>
                      <p><a class="eshoplist" href="#header" id="stray-dogs">Read more</a></p>
                    </div>
                  </div>
                  <div class="block col-sm-4">
                    <div class="thumbnail"> <img alt="team" src="assets/images/homeless.png" alt="homeless people" />
                      <div class="causetitle">
                        <p>Amnesty International</p>
                      </div>
                      <a class="causebtn" id="/homeless" onClick="redirectDelay(this.id);" target="_self">Select</a>
                      <p> <a class="eshoplist" href="#header" id="sos-villages">Read more</a></p>
                    </div>
                  </div>
                </div>
                <div id="buffer">http://{{selected.value}}{{selectedOption.value}}</div>
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
				
				
				function highlightedresult() {
				document.getElementById("section-shape-1").className = "";
				$("#section-shape-1").hide();
				document.getElementById("section-shape-2").className = "content-current to_slide_left animated fadeInLeft";
				
				document.getElementById("listep1").className = "";
				document.getElementById("listep2").className = "tab-current";
				}

	
			</script>
                </section>
              </div>
              
              <!-- /content --> 
              <!--this--> 
              
            </div>
            <!-- /tabs --> 
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- THIS END--> 
  
</section>
