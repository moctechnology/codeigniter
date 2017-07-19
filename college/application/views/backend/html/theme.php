<div class="maincontent">
        	<div class="contentinner content-elements">
            
            	<div class="row-fluid">
                  <div class="span6">
						<h4 class="widgettitle">Content Title (Default)</h4>
                        <div class="widgetcontent">
                        	<pre class="prettyprint linenums">&lt;h4 class=&quot;widgettitle&quot;&gt;Title goes here...&lt;/h4&gt;</pre>
                        </div><!--content-->
                      
    					<h4 class="widgettitle">Tabbed Widget  <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                            <div id="tabs">
                                <ul>
                                    <li><a href="#tabs-1">Tab 1</a></li>
                                    <li><a href="#tabs-2">Tab 2</a></li>
                                    <li><a href="#tabs-3">Tab 3</a></li>
                                </ul>
                                <div id="tabs-1">
                                    Your content goes here for tab 1
                                </div>
                                <div id="tabs-2">
                                    Your content goes here for tab 2
                                </div>
                                <div id="tabs-3">
                                    Your content goes here for tab 3 
                                </div>
                            </div><!--#tabs-->
                            
                            <div class="widgetsource">
                                <div class="divider15"></div>
                              <pre class="prettyprint linenums">jQuery('#tabs').tabs();</pre>
                                <div class="divider15"></div>
                              <pre class="prettyprint linenums">&lt;div id=&quot;tabs&quot;&gt;
   &lt;ul&gt;
      &lt;li&gt;&lt;a href=&quot;#tabs-1&quot;&gt;Tab 1&lt;/a&gt;&lt;/li&gt;
      ...
   &lt;/ul&gt;
   &lt;div id=&quot;tabs-1&quot;&gt; ... &lt;/div&gt;
   ...
&lt;/div&gt;</pre>
       						</div><!--widgetsource-->
                        </div><!--widgetcontent-->
                                                
        				<h4 class="widgettitle">Accordion Widget <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                        	<div id="accordion" class="accordion">
                                    <h3><a href="#">Section 1</a></h3>
                                    <div>
                                        <p>
                                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                        </p>
                                    </div>
                                    <h3><a href="#">Section 2</a></h3>
                                    <div>
                                        <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                        </p>
                                    </div>
                                    <h3><a href="#">Section 3</a></h3>
                                    <div>
                                        <p>
                                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                        </p>
                                        <ul class="margin1020">
                                            <li>List item one</li>
                                            <li>List item two</li>
                                            <li>List item three</li>
                                        </ul>
                                    </div>
                                    <h3><a href="#">Section 4</a></h3>
                                    <div>
                                        <p>
                                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                        mauris vel est.
                                        </p>
                                        <p>
                                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                        inceptos himenaeos.
                                        </p>
                        	       </div>
                        	</div><!--#accordion-->
                            
							<div class="widgetsource">
                                <div class="divider15"></div>
                                <pre class="prettyprint linenums">jQuery('#accordion').accordion();</pre> 
                                <div class="divider15"></div>
                                <pre class="prettyprint linenums">&lt;div id=&quot;accordion&quot; class=&quot;accordion&quot;&gt;
   &lt;h3&gt;&lt;a href=&quot;#&quot;&gt;Section 1&lt;/a&gt;&lt;/h3&gt;
   &lt;div&gt; content goes here... &lt;/div&gt;
   &lt;h3&gt;&lt;a href=&quot;#&quot;&gt;Section 2&lt;/a&gt;&lt;/h3&gt;
   &lt;div&gt; content goes here... &lt;/div&gt;
   ...
&lt;/div&gt;</pre>
   							</div>
                        </div><!--widgetcontent-->
                                
                        <h4 class="widgettitle">Color Picker <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                            <form action="http://themepixels.com/main/themes/demo/webpage/katniss/elements.html" method="post">
                                <p>
                                    <input type="text" name="colorpicker" class="input-mini" id="colorpicker" />
                                    <span id="colorSelector" class="colorselector">
                                        <span></span>
                                    </span>
                                </p>
                            </form>
                            <div class="widgetsource">
                                <div class="divider15"></div>
                                <pre class="prettyprint linenums">&lt;input type=&quot;text&quot; name=&quot;colorpicker&quot; class=&quot;input-mini&quot; id=&quot;colorpicker&quot; /&gt;
&lt;span id=&quot;colorSelector&quot; class=&quot;colorselector&quot;&gt;
   &lt;span&gt;&lt;/span&gt;
&lt;/span&gt;</pre>
                        <div class="divider15"></div>
                        <pre class="prettyprint linenums">jQuery('#colorSelector').ColorPicker({
   onShow: function (colpkr) {
      jQuery(colpkr).fadeIn(500);
      return false;
   },
   onHide: function (colpkr) {
      jQuery(colpkr).fadeOut(500);
      return false;
   },
   onChange: function (hsb, hex, rgb) {
      jQuery('#colorSelector span').css('backgroundColor','#'+hex);
      jQuery('#colorpicker').val('#'+hex);
   }<br>});</pre>
                            </div><!--widgetsource-->                    
                        </div><!--widgetcontent-->
                        
                        <h4 class="widgettitle">Sliders <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                        	<div class="pargroup">
                            	<div class="par">
                                	<h6>Normal Slider</h6>
                                	<div id="slider"></div>
                                </div>
                                <div class="par">
                                	<h6>Snap To Increments</h6>
                                    <p class="pull-right">Withdrawal: <strong><span id="amount" class="color333"></span></strong></p>
                                	<div id="slider2"></div>
                                </div>
                                <div class="par">
                                	<h6>Range Slider</h6>
                                	<p class="pull-right">Price Range: <strong><span id="amount2" class="color333"></span></strong></p>
                        			<div id="slider3"></div>
                                </div>
                                
                                <div class="par">
                                	<h6>Fixed Minimum</h6>
                                	<p class="pull-right">Maximum price: <strong><span id="amount4" class="color069"></span></strong></p>
                        			<div id="slider4"></div>
                                </div>
                                
                                <div class="par">
                                	<h6>Fixed Maximum</h6>
                                	<p class="pull-right">Maximum price: <strong><span id="amount5" class="color333"></span></strong></p>
                        			<div id="slider5"></div>
                                </div>
                                
                                <div class="par">
                                	<h6>Vertical Slider</h6>
                                    <div style="float: left; margin: 20px 0 0 15px">
                                        <div id="slider6" style="height:100px;"></div>
                                    </div>
                                    
                                    <div class="vs2" style="float: left; margin: 20px 0 0 40px;">
                                        <div id="slider7" style="height:100px;"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                                
                            </div><!--pargroup-->
                            
                          <div class="widgetsource">
                           	<div class="divider15"></div>
                           	<pre class="prettyprint linenums">&lt;div id=&quot;slider&quot;&gt;&lt;/div&gt;</pre>
                            <div class="divider15"></div>
                            <pre class="prettyprint linenums">// normal slider
jQuery(&quot;#slider&quot;).slider({value: 40});

// slider snap to increments
jQuery(&quot;#slider2&quot;).slider({
   value:100,
   min: 0,
   max: 500,
   step: 50,
   slide: function(event, ui) {
      jQuery(&quot;#amount&quot;).text(&quot;$&quot;+ui.value);
   }
});
jQuery(&quot;#amount&quot;).text(&quot;$&quot; + jQuery(&quot;#slider&quot;).slider(&quot;value&quot;));

// refer to js/slider.js to view other slide sources<br></pre>  
                            </div><!--widgetsource-->
                        </div><!--widgetcontent-->
                        
                        <h4 class="widgettitle nomargin shadowed">Widget Title</h4>
                        <div class="widgetcontent bordered shadowed nomargin">
                        	Content goes here...
                        </div><!--widgetcontent-->
                    <div class="divider15"></div>
                        <pre class="prettyprint linenums">&lt;h4 class=&quot;widgettitle nomargin shadowed&quot;&gt;Widget Title&lt;/h4&gt;
&lt;div class=&quot;widgetcontent bordered shadowed&quot;&gt;
   Content goes here...
&lt;/div&gt;</pre>
                  	<div class="divider30"></div>
                      
                    </div><!--span6-->
                    
                    
                    <div class="span6">
                    	<h4 class="widgettitle ctitle">Content Title (2)</h4>
                        <div class="widgetcontent">
                            <pre class="prettyprint linenums">&lt;h4 class=&quot;widgettitle ctitle&quot;&gt;Title goes here...&lt;/h4&gt;</pre>
						</div><!--widgetcontent-->
                        
                    	<h4 class="widgettitle">Tabbed Widget (2) <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                            <div id="tabs2" class="tabs2">
                                <ul>
                                    <li><a href="#stabs1">Tab 1</a></li>
                                    <li><a href="#stabs2">Tab 2</a></li>
                                    <li><a href="#stabs3">Tab 3</a></li>
                                </ul>
                                <div id="stabs1">
                                    Your content goes here for tab 1
                                </div>
                                <div id="stabs2">
                                    Your content goes here for tab 2
                                </div>
                                <div id="stabs3">
                                    Your content goes here for tab 3 
                                </div>
                            </div><!--#tabs-->
                            
                            <div class="widgetsource">
                                <div class="divider15"></div>
                                <pre class="prettyprint linenums">jQuery('#tabs2').tabs();</pre>
                                <div class="divider15"></div>
                                <pre class="prettyprint linenums">&lt;div id=&quot;tabs2&quot; class=&quot;tabs2&quot;&gt;
   &lt;ul&gt;
      &lt;li&gt;&lt;a href=&quot;#tabs-1&quot;&gt;Tab 1&lt;/a&gt;&lt;/li&gt;
      ...
   &lt;/ul&gt;
   &lt;div id=&quot;tabs-1&quot;&gt; ... &lt;/div&gt;
   ...
&lt;/div&gt;</pre>
							</div><!--widgetsource-->
                        </div><!--widgetcontent-->
                        
        				<h4 class="widgettitle">Accordion Widget <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                            <div id="accordion2" class="accordion2">
                                    <h3><a href="#">Section 1</a></h3>
                                    <div>
                                        <p>
                                        Mauris mauris ante, blandit et, ultrices a, suscipit eget, quam. Integer
                                        ut neque. Vivamus nisi metus, molestie vel, gravida in, condimentum sit
                                        amet, nunc. Nam a nibh. Donec suscipit eros. Nam mi. Proin viverra leo ut
                                        odio. Curabitur malesuada. Vestibulum a velit eu ante scelerisque vulputate.
                                        </p>
                                    </div>
                                    <h3><a href="#">Section 2</a></h3>
                                    <div>
                                        <p>
                                        Sed non urna. Donec et ante. Phasellus eu ligula. Vestibulum sit amet
                                        purus. Vivamus hendrerit, dolor at aliquet laoreet, mauris turpis porttitor
                                        velit, faucibus interdum tellus libero ac justo. Vivamus non quam. In
                                        suscipit faucibus urna.
                                        </p>
                                    </div>
                                    <h3><a href="#">Section 3</a></h3>
                                    <div>
                                        <p>
                                        Nam enim risus, molestie et, porta ac, aliquam ac, risus. Quisque lobortis.
                                        Phasellus pellentesque purus in massa. Aenean in pede. Phasellus ac libero
                                        ac tellus pellentesque semper. Sed ac felis. Sed commodo, magna quis
                                        lacinia ornare, quam ante aliquam nisi, eu iaculis leo purus venenatis dui.
                                        </p>
                                        <ul class="margin1020">
                                            <li>List item one</li>
                                            <li>List item two</li>
                                            <li>List item three</li>
                                        </ul>
                                    </div>
                                    <h3><a href="#">Section 4</a></h3>
                                    <div>
                                        <p>
                                        Cras dictum. Pellentesque habitant morbi tristique senectus et netus
                                        et malesuada fames ac turpis egestas. Vestibulum ante ipsum primis in
                                        faucibus orci luctus et ultrices posuere cubilia Curae; Aenean lacinia
                                        mauris vel est.
                                        </p>
                                        <p>
                                        Suspendisse eu nisl. Nullam ut libero. Integer dignissim consequat lectus.
                                        Class aptent taciti sociosqu ad litora torquent per conubia nostra, per
                                        inceptos himenaeos.
                                        </p>
                        	       </div>
                            </div><!--#accordion-->
                            
                            <div class="widgetsource">
                                <div class="divider15"></div>
                                <pre class="prettyprint linenums">jQuery('#accordion2').accordion();</pre> 
                                <div class="divider15"></div>
                              <pre class="prettyprint linenums">&lt;div id=&quot;accordion2&quot; class=&quot;accordion2&quot;&gt;
   &lt;h3&gt;&lt;a href=&quot;#&quot;&gt;Section 1&lt;/a&gt;&lt;/h3&gt;
   &lt;div&gt; content goes here... &lt;/div&gt;
   &lt;h3&gt;&lt;a href=&quot;#&quot;&gt;Section 2&lt;/a&gt;&lt;/h3&gt;
   &lt;div&gt; content goes here... &lt;/div&gt;
   ...
&lt;/div&gt;</pre>
                            </div><!--widgetsource-->
                        </div><!--widgetcontent-->
                        
                        <h4 class="widgettitle">Date Picker <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                        	<input id="datepicker" type="text" name="date" class="input-small" /> &nbsp; <small><em>mm / dd / yyyy</em></small>
                            <div class="widgetsource">
                            	<div class="divider15"></div>
                            	<pre class="prettyprint linenums">&lt;input id=&quot;datepicker&quot; type=&quot;text&quot; name=&quot;date&quot; /&gt;</pre>
                              <div class="divider15"></div>
                                <pre class="prettyprint linenums">jQuery( &quot;#datepicker&quot; ).datepicker();</pre>
                            </div><!--widgetsource-->
                        </div><!--widgetcontent-->  
                        
                        <h4 class="widgettitle">Growl Notifications <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                       		<a id="growl" class="btn"><small>Basic growl</small></a> &nbsp;
                   		  	<a id="growl2" class="btn"><small>Long live growl message</small></a>
                            
                            <div class="widgetsource">
                            	<div class="divider15"></div>
                            	<pre class="prettyprint linenums">&lt;a id=&quot;growl&quot; class=&quot;btn&quot;&gt;Basic growl&lt;/a&gt;
&lt;a id=&quot;growl2&quot; class=&quot;btn&quot;&gt;Long live growl message&lt;/a&gt;</pre>
							  <div class="divider15"></div>
                                <pre class="prettyprint linenums">jQuery('#growl').click(function(){
   jQuery.jGrowl(&quot;Hello world!&quot;);<br>});

jQuery('#growl2').click(function(){
   var msg = &quot;This notification will live a little longer.&quot;;
   jQuery.jGrowl(msg, { life: 5000 });<br>});</pre>
                            </div><!--widgetsource-->
                        </div><!--widgetcontent-->
                        
                        <h4 class="widgettitle">Alert Boxes (Draggable) <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                        	<a class="btn alertboxbutton"><small>Basic Alert</small></a> &nbsp;
                            <a class="btn confirmbutton"><small>Confirm Box</small></a> &nbsp;
                            <a class="btn promptbutton"><small>Prompt Box</small></a> &nbsp;
                            <a class="btn alerthtmlbutton"><small>Dialog with HTML support</small></a>
                            
                        	<div class="widgetsource">
                            	<div class="divider15"></div>
                            	<pre class="prettyprint linenums">&lt;a class=&quot;btn alertboxbutton&quot;&gt;&lt;small&gt;Basic Alert&lt;/small&gt;&lt;/a&gt;
&lt;a class=&quot;btn confirmbutton&quot;&gt;&lt;small&gt;Confirm Box&lt;/small&gt;&lt;/a&gt;
&lt;a class=&quot;btn promptbutton&quot;&gt;&lt;small&gt;Prompt Box&lt;/small&gt;&lt;/a&gt;
&lt;a class=&quot;btn alerthtmlbutton&quot;&gt;&lt;small&gt;HTML support&lt;/small&gt;&lt;/a&gt;</pre>
							  <div class="divider15"></div>
                                <pre class="prettyprint linenums">// alert box
jQuery('.alertboxbutton').click(function(){
   jAlert('This is a custom alert box', 'Alert Dialog');
});

// confirm box
jQuery('.confirmbutton').click(function(){
   jConfirm('Can you confirm this?', 'Dialog', function(r) {
      jAlert('Confirmed: ' + r, 'Confirmation Results');
   });
});

// promptbox
jQuery('.promptbutton').click(function(){
   jPrompt('Type something:', '', 'Dialog', function(r) {
      if( r ) alert('You entered ' + r);
   });
});

// alert with html
jQuery('.alerthtmlbutton').click(function(){
   jAlert('HTML, like &lt;strong&gt;, &lt;em&gt;, &lt;u&gt;, etc.!');
});                             </pre>
                            </div><!--widgetsource-->
                        </div><!--widgetcontent-->
                        
                        <h4 class="widgettitle">Sortable List <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                        	<ul id="sortable" class="sortlist">
                                <li><div class="label"><span class="icon-align-justify"></span> Item 1</div></li>
                                <li><div class="label"><span class="icon-align-justify"></span> Item 2</div></li>
                                <li><div class="label"><span class="icon-align-justify"></span> Item 3</div></li>
                            </ul>
                          <div class="widgetsource">
                           	<div class="divider15"></div>
                           	  <pre class="prettyprint linenums">&lt;ul id=&quot;sortable&quot; class=&quot;sortlist&quot;&gt;
   &lt;li&gt;&lt;div class=&quot;label&quot;&gt;...&lt;/div&gt;&lt;/li&gt;
   ...
&lt;/ul&gt;</pre>
							<div class="divider15"></div>
                            <pre class="prettyprint linenums">jQuery(&quot;#sortable&quot;).sortable();</pre>
                            </div><!--widgetsource-->
                        </div><!--widgetcontent-->
                        
                        <h4 class="widgettitle">Sortable List With Content <a href="widgetsource.html" class="showhide">View Source</a></h4>
                        <div class="widgetcontent">
                        	<ul id="sortable2" class="sortlist">
                                <li>
                                    <div class="label">
                                        <span class="icon-align-justify"></span>
                                        <span class="icon-arrow-down showcnt"></span>
                                        Item 1
                                    </div><!--label-->
                                    <div class="details">
                                        <p>Content goes here...</p>
                                    </div><!--details-->
                                </li>
                                <li>
                                    <div class="label">
                                        <span class="icon-align-justify"></span>
                                        <span class="icon-arrow-down showcnt"></span>
                                        Item 2
                                    </div><!--label-->
                                    <div class="details">
                                        <p>Content goes here... can be any html element</p>
                                    </div><!--details-->
                                </li>
                                <li>
                                    <div class="label">
                                        <span class="icon-align-justify"></span>
                                        <span class="icon-arrow-down showcnt"></span>
                                        Item 3
                                    </div><!--label-->
                                    <div class="details">
                                        <p>Content goes here... can be any html element</p>
                                    </div><!--details-->
                                </li>
	                       	</ul>
                       	  <div class="widgetsource">
                           	<div class="divider15"></div>
                              <pre class="prettyprint linenums">&lt;ul id=&quot;sortable2&quot; class=&quot;sortlist&quot;&gt;
   &lt;li&gt;
      &lt;div class=&quot;label&quot;&gt;...&lt;/div&gt;
      &lt;div class=&quot;details&quot;&gt;... &lt;/div&gt;
   &lt;/li&gt;
&lt;/ul&gt;</pre>
							<div class="divider15"></div>
                            <pre class="prettyprint linenums">jQuery(&quot;#sortable2&quot;).sortable();
jQuery('.showcnt').click(function(){
   var t = jQuery(this);
   var det = t.parents('li').find('.details');
   if(!det.is(':visible')) {
      det.slideDown();
      t.removeClass('icon-arrow-down').addClass('icon-arrow-up');
   } else {
      det.slideUp();
      t.removeClass('icon-arrow-up').addClass('icon-arrow-down');
   }
});</pre>
                            </div><!--widgetsource-->
                        </div><!--widgetcontent-->
                                              
                    </div><!--span6-->
                    
                </div><!--row-fluid-->
            
            	
                
            </div><!--contentinner-->
        </div>