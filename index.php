<script src="//code.jquery.com/jquery-1.10.2.js"></script>
<select name="testbox" class="selectbox">
    <option value="">Select Option</option>
</select>
<script type="text/javascript">
    $(".selectbox").append("<option value='1'>Test</option><option value='2'>Test2</option><option value='3'>Test3</option>");</script>


<div class="all_select_box">
    <select name="attribute[]" class="first att_1 all_attributes" id="att_3">
	<option value="0">Select option 1</option>
	<option value="10">option 1</option>
	<option value="9">option 2</option>
    </select>
    <select name="attribute[]" class="att_2 all_attributes" id="att_4">
	<option value="0">Select option 2</option>
	<option value="8">option 1</option>
	<option value="7">option 2</option>
    </select>
    <select name="attribute[]" class="last att_3 all_attributes" id="att_5">
	<option value="0">Select option 1</option>
	<option value="6">option 1</option>
	<option value="5">option 2</option>
    </select>

</div>
<script>
    jQuery(document).ready(function () {
        jQuery(".all_attributes").change(function () {
            var attid = jQuery(this).attr("id");
            var second = attid.split("_");
            //alert(second[0]+"======="+second[1]);
        });
    });</script>


<br /><br />
<table cellpadding="1" cellspacing="10" border="1" width="50%">
    <tr>
	<td align="center">
	    <input type="hidden" name="attributid[]" value="11" />
	    <select name="opt[1][]" id="option" class="" required="required">
		<option value="">Select Option</option>
		<option value="9">Blue</option>
		<option value="10">Black</option>
		<option value="11">Green</option>
	    </select>
	</td>
	<td align="center"><input style="width:50px;" required="required" type="text" name="quantity[]" /></td>
	<td align="center"><input style="width:50px;"  required="required" type="text" name="price[]" /></td>
    </tr>
</table>
<div class="addrow" onclick="fnTest();">Add Row</div>
<script>
    function fnTest() {
        var i = 1;
$("table tr:first").clone().find("input").each(function() {
    $(this).attr({
      'id': function(_, id) { return id + i },
      'name': function(_, name) { return name + i },
      'value': ''               
    });
  }).end().appendTo("table");
  i++;
    }

</script>