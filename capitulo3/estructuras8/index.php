<HTML>
 <HEAD>
   <TITLE>Estructuras de Control</TITLE>
 </HEAD>
 <BODY>
   <CENTER>
     <H2>Sentencia <I>if</I></H2>
     <?php
        echo "Hoy es <B>";
        $dia = date("D");
        switch($dia){
          case "Mon":
	  case "Tue":
          case "Wed":
	  case "Thu":
	  case "Fri": echo "un día de diario";
                      break;
             default: echo "fin de semana";
        }
        echo "</B>"; 
    ?>
   </CENTER>
 </BODY>
</HTML>