
<div class="maincontent">
        	<div class="contentinner">
            
            	<h4 class="widgettitle">Student Category</h4>
            	<table class="table responsive table-bordered table-striped">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                          <div style="text-align:center"> 
                          <div class="student_cat"> Student Category*</div>
                          <form id="" action="http://localhost/school/index.php/backend/dashboard/create/" method="post">
                           <div class="student_txt"> <input type="text" name="category" required placeholder="Category" /></div>
                           <div class="student_submit"><button type="submit" name="submit" class="btn btn-info" >Add</button></div>
                           </form>
                           </div>
                            
                          
                        </tr>
                    </thead>
                    
                     
                    
                    
                </table>
                
               
                
                <div class="divider30"></div>
                
  <h4 class="widgettitle">Table Striped</h4>
            	<table class="table responsive table-bordered table-striped">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>ACTION</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                    <?php foreach($result as $val){?>
                        <tr>
                            <td><?php echo $val->id; ?></td>
                            <td><?php echo $val->name; ?></td>
                           <td><a href="http://localhost/school/index.php/backend/dashboard/update/<?php echo $val->id; ?>"><i class="icon-pencil" title="Edit"></i></a>
						   <a href="http://localhost/school/index.php/backend/dashboard/delete/<?php echo $val->id; ?>"><i class="icon-trash" title="Delete"></i></a></td>
                        </tr>
                     <?php }?>
                     
                     
                                            </tbody>
                </table>
                
                <div class="divider15"></div>
                
                <pre class="prettyprint linenums">&lt;table class=&quot;table table-striped&quot;&gt;...&lt;/table&gt;</pre>
                
                <div class="divider30"></div>
                
  <h4 class="widgettitle">Table Bordered</h4>
            	<table class="table table-bordered">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                    </colgroup>
                    <thead>
                        <tr>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td class="center">5</td>
                            <td class="center">C</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet  Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td class="center">5.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet Explorer 6</td>
                            <td>Win 98+</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr>
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td class="center">7</td>
                            <td class="center">A</td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="divider15"></div>
                
                <pre class="prettyprint linenums">&lt;table class=&quot;table table-bordered&quot;&gt;...&lt;/table&gt;</pre>
                
                <div class="divider30"></div>
                
  <h4 class="widgettitle">With Checkbox</h4>
            	<table class="table table-bordered">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                    </colgroup>
                    <thead>
                        <tr>
                        	<th class="centeralign"><input type="checkbox" class="checkall" /></th>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>CSS grade</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td class="centeralign"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td class="center">4</td>
                            <td class="center">X</td>
                        </tr>
                        <tr>
                        	<td class="centeralign"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td class="center">5</td>
                            <td class="center">C</td>
                        </tr>
                        <tr>
                        	<td class="centeralign"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet  Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td class="center">5.5</td>
                            <td class="center">A</td>
                        </tr>
                        <tr>
                        	<td class="centeralign"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet Explorer 6</td>
                            <td>Win 98+</td>
                            <td class="center">6</td>
                            <td class="center">A</td>
                        </tr>
                        <tr>
                        	<td class="centeralign"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td class="center">7</td>
                            <td class="center">A</td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="divider15"></div>
                <pre class="prettyprint linenums">// check all checkboxes in table
jQuery('.checkall').click(function(){
   var parentTable = jQuery(this).parents('table');										   
   var ch = parentTable.find('tbody input[type=checkbox]');
   if(jQuery(this).is(':checked')) {			
      //check all rows in table
      ch.each(function(){ 
         jQuery(this).attr('checked',true);
         jQuery(this).parent().addClass('checked');	//used for the custom checkbox style
         jQuery(this).parents('tr').addClass('selected'); // to highlight row as selected
      });			
   } else {		
      //uncheck all rows in table
      ch.each(function(){ 
         jQuery(this).attr('checked',false); 
         jQuery(this).parent().removeClass('checked');	//used for the custom checkbox style
         jQuery(this).parents('tr').removeClass('selected');
      });	
   }
});</pre>
    			
                <div class="divider30"></div>
                
  <h4 class="widgettitle">Deletable Row</h4>
            	<table class="table table-bordered">
                    <colgroup>
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                        <col class="con0" />
                        <col class="con1" />
                    </colgroup>
                    <thead>
                        <tr>
                        	<th class="centeralign"><input type="checkbox" class="checkall" /></th>
                            <th>Rendering engine</th>
                            <th>Browser</th>
                            <th>Platform(s)</th>
                            <th>Engine version</th>
                            <th>&nbsp;</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                        	<td class="centeralign"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet Explorer 4.0</td>
                            <td>Win 95+</td>
                            <td>4</td>
                            <td class="centeralign"><a href="#" class="deleterow"><span class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                        	<td class="centeralign"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet Explorer 5.0</td>
                            <td>Win 95+</td>
                            <td>5</td>
                            <td class="centeralign"><a href="#" class="deleterow"><span class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                        	<td class="centeralign"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet  Explorer 5.5</td>
                            <td>Win 95+</td>
                            <td>5.5</td>
                            <td class="centeralign"><a href="#" class="deleterow"><span class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                        	<td class="centeralign"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet Explorer 6</td>
                            <td>Win 98+</td>
                            <td>6</td>
                            <td class="centeralign"><a href="#" class="deleterow"><span class="icon-trash"></span></a></td>
                        </tr>
                        <tr>
                        	<td class="centeralign"><input type="checkbox" /></td>
                            <td>Trident</td>
                            <td>Internet Explorer 7</td>
                            <td>Win XP SP2+</td>
                            <td>7</td>
                            <td class="centeralign"><a href="#" class="deleterow"><span class="icon-trash"></span></a></td>
                        </tr>
                    </tbody>
                </table>
                
                <div class="divider15"></div>
                
                <pre class="prettyprint linenums">
// delete row in a table
jQuery('.deleterow').click(function(){
   var conf = confirm('Continue delete?');
   if(conf)
      jQuery(this).parents('tr').fadeOut(function(){
         jQuery(this).remove();
         // do some other stuff here
      });
   return false;
});     </pre>
                
            </div><!--contentinner-->
        </div>