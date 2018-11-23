
<script type="text/template" id="timeLineTemplate">

<%
for(var i=0; i< timeLineDataList.length; i++)
{
%>
	
    <li>
        <label id="<%=timeLineDataList[i].year%>__year" class="timeLineYear" data-year="<%=timeLineDataList[i].year%>" ><%=timeLineDataList[i].year%></label>
        
    </li>

<%
}
%>
</script>


<script type="text/template" id="timeLineContentTemplate">
            <div class="row" style="text-align:center">
            <span style="color: darkorange;font-size: 20px;"><%=title%></span></div>
            <div style="font-size:14px;"><%=content%></div>
       
</script>