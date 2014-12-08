<TABLE WIDTH="100%" BORDER="0" ALIGN="CENTER" CELLPADDING="0" CELLSPACING="1" BGCOLOR="#C12222">
  <TR>
    <TD>
      <TABLE WIDTH="100%" BORDER="0" CELLSPACING="0" CELLPADDING="5">
        <tr ALIGN="LEFT" VALIGN="TOP" BGCOLOR="#F4F4E9">
          <td WIDTH="1%" ALIGN="RIGHT"><IMG SRC="_images/warning.png" WIDTH="32" HEIGHT="32"></td>
          <td WIDTH="99%"><SPAN class="pageSubTitle"><STRONG>Required information:</STRONG></SPAN><BR>
			<?php 
			if(count($errors)>0)
				{
				foreach($errors as $err)
				echo "$image_01 $err<br>\n";
				}
			?>
		</td>
        </tr>
    </TABLE></TD></TR>
</TABLE>
