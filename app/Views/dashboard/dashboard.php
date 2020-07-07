<div class="app-body" id="view">

<!-- ############ PAGE START-->
<div class="padding">
	<div class="margin">
		<h5 class="mb-0 _300">Hi  <strong> <?php echo $name; ?></strong>, que bueno que estas de regreso</h5>
		<small class="text-muted">Awesome uikit for your next Material Design project</small>
	</div>
	<div class="row">
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box p-a">
          <div class="pull-left m-r">
            <span class="w-40 warn text-center rounded">
              <i class="material-icons">shopping_basket</i>
            </span>
          </div>
          <div class="clear">
            <h4 class="m-0 text-md"><a href="">75 <span class="text-sm">Ventas</span></a></h4>
            <small class="text-muted">6 waiting payment.</small>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4 col-lg-3">
        <div class="box-color p-a primary">
          <div class="pull-right m-l">
            <span class="w-40 dker text-center rounded">
              <i class="material-icons">local_shipping</i>
            </span>
          </div>
          <div class="clear">
            <h4 class="m-0 text-md"><a href="">40 <span class="text-sm">Productos</span></a></h4>
            <small class="text-muted">38 Shipped.</small>
          </div>
        </div>
      </div>
      
	</div>
	

	<div class="row">
	    <div class="col-md-12 col-xl-4">
	        <div class="box">
	          <div class="box-header">
	            <h3>Your tasks</h3>
	            <small>Calculated in last 7 days</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18"></i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18"></i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href="">This week</a>
		              <a class="dropdown-item" href="">This month</a>
		              <a class="dropdown-item" href="">This week</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">Today</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="text-center b-t">
	            <div class="row-col">
	              <div class="row-cell p-a">
	                <div class="inline m-b">
	                  <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw="true" data-percent="55" ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#0cc2aa',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
	                    <div>
	                      <h5>55%</h5>
	                    </div>
	                  <canvas height="100" width="100"></canvas></div>
	                </div>
	                <div>
	                	Finished
	                	<small class="block m-b">320</small>
	                	<a href="" class="btn btn-sm white rounded">Manage</a>
	                </div>
	              </div>
	              <div class="row-cell p-a dker">
	                <div class="inline m-b">
	                  <div ui-jp="easyPieChart" class="easyPieChart" ui-refresh="app.setting.color" data-redraw="true" data-percent="45" ui-options="{
	                      lineWidth: 8,
	                      trackColor: 'rgba(0,0,0,0.05)',
	                      barColor: '#fcc100',
	                      scaleColor: 'transparent',
	                      size: 100,
	                      scaleLength: 0,
	                      animate:{
	                        duration: 3000,
	                        enabled:true
	                      }
	                    }">
	                    <div>
	                      <h5>45%</h5>
	                    </div>
	                  <canvas height="100" width="100"></canvas></div>
	                </div>
	                <div>
	                	Remaining
	                	<small class="block m-b">205</small>
	                	<a href="" class="btn btn-sm white rounded">Manage</a>
	                </div>
	              </div>
	            </div>
	          </div>
	        </div>
	    </div>
	    <div class="col-md-6 col-xl-4">
	    	<div class="box">
	          <div class="box-header">
	            <h3>Your projects</h3>
	            <small>Calculated in last 30 days</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18"></i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18"></i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href="">This week</a>
		              <a class="dropdown-item" href="">This month</a>
		              <a class="dropdown-item" href="">This week</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">Today</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="box-body">
	            <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 3], [2, 2.6], [3, 3.2], [4, 3], [5, 3.5], [6, 3], [7, 3.5]], 
	                  points: { show: true, radius: 0}, 
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0.2 } 
	                },
	                { data: [[1, 3.6], [2, 3.5], [3, 6], [4, 4], [5, 4.3], [6, 3.5], [7, 3.6]], 
	                  points: { show: true, radius: 0}, 
                  	  splines: { show: true, tension: 0.45, lineWidth: 2, fill: 0.1 } 
	                }
	              ], 
	              {
	                colors: ['#fcc100','#0cc2aa'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' },  min: 2},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height: 200px; padding: 0px; position: relative;">
	            <canvas class="flot-base" width="489" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 489px; height: 200px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 71px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 13px; text-align: center;">1.0</div><div style="position: absolute; max-width: 71px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 89px; text-align: center;">2.0</div><div style="position: absolute; max-width: 71px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 166px; text-align: center;">3.0</div><div style="position: absolute; max-width: 71px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 243px; text-align: center;">4.0</div><div style="position: absolute; max-width: 71px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 320px; text-align: center;">5.0</div><div style="position: absolute; max-width: 71px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 397px; text-align: center;">6.0</div><div style="position: absolute; max-width: 71px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 474px; text-align: center;">7.0</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2.0</div><div style="position: absolute; top: 141px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">3.0</div><div style="position: absolute; top: 106px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4.0</div><div style="position: absolute; top: 71px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">5.0</div><div style="position: absolute; top: 36px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6.0</div><div style="position: absolute; top: 1px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">7.0</div></div></div><canvas class="flot-overlay" width="489" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 489px; height: 200px;"></canvas></div>
	          </div>
	        </div>
	    </div>
	    <div class="col-md-6 col-xl-4">
	        <div class="box">
	          <div class="box-header">
	            <h3>Tus ventas</h3>
	            <small>A general overview of your sales</small>
	          </div>
	          <div class="box-tool">
		        <ul class="nav">
		          <li class="nav-item inline">
		            <a class="nav-link">
		              <i class="material-icons md-18"></i>
		            </a>
		          </li>
		          <li class="nav-item inline dropdown">
		            <a class="nav-link" data-toggle="dropdown">
		              <i class="material-icons md-18"></i>
		            </a>
		            <div class="dropdown-menu dropdown-menu-scale pull-right">
		              <a class="dropdown-item" href="">This week</a>
		              <a class="dropdown-item" href="">This month</a>
		              <a class="dropdown-item" href="">This week</a>
		              <div class="dropdown-divider"></div>
		              <a class="dropdown-item">Today</a>
		            </div>
		          </li>
		        </ul>
		      </div>
	          <div class="box-body">
	            <div ui-jp="plot" ui-refresh="app.setting.color" ui-options="
	              [
	                { data: [[1, 2], [2, 4], [3, 5], [4, 7], [5, 6], [6, 4], [7, 5], [8, 4]] },
	                { data: [[1, 2], [2, 3], [3, 2], [4, 5], [5, 4], [6, 3], [7, 4], [8, 2]] }
	              ], 
	              {
	                bars: { show: true, fill: true,  barWidth: 0.3, lineWidth: 2, order: 1, fillColor: { colors: [{ opacity: 0.2 }, { opacity: 0.2}] }, align: 'center'},
	                colors: ['#0cc2aa','#fcc100'],
	                series: { shadowSize: 3 },
	                xaxis: { show: true, font: { color: '#ccc' }, position: 'bottom' },
	                yaxis:{ show: true, font: { color: '#ccc' }},
	                grid: { hoverable: true, clickable: true, borderWidth: 0, color: 'rgba(120,120,120,0.5)' },
	                tooltip: true,
	                tooltipOpts: { content: '%x.0 is %y.4',  defaultTheme: false, shifts: { x: 0, y: -40 } }
	              }
	            " style="height: 200px; padding: 0px; position: relative;">
	            <canvas class="flot-base" width="489" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 489px; height: 200px;"></canvas><div class="flot-text" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; font-size: smaller; color: rgb(84, 84, 84);"><div class="flot-x-axis flot-x1-axis xAxis x1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 18px; text-align: center;">1</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 82px; text-align: center;">2</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 146px; text-align: center;">3</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 211px; text-align: center;">4</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 275px; text-align: center;">5</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 340px; text-align: center;">6</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 404px; text-align: center;">7</div><div style="position: absolute; max-width: 49px; top: 187px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 468px; text-align: center;">8</div></div><div class="flot-y-axis flot-y1-axis yAxis y1Axis" style="position: absolute; top: 0px; left: 0px; bottom: 0px; right: 0px; display: block;"><div style="position: absolute; top: 176px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">0</div><div style="position: absolute; top: 132px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">2</div><div style="position: absolute; top: 89px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">4</div><div style="position: absolute; top: 45px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">6</div><div style="position: absolute; top: 2px; font: 400 11px / 13px Roboto, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; color: rgb(204, 204, 204); left: 0px; text-align: right;">8</div></div></div><canvas class="flot-overlay" width="489" height="200" style="direction: ltr; position: absolute; left: 0px; top: 0px; width: 489px; height: 200px;"></canvas></div>
	          </div>
	        </div>
	    </div>
	</div>


</div>

<!-- ############ PAGE END-->

    </div>