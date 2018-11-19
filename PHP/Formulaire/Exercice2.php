Avec liste déroulante :<BR>
  <FORM METHOD="get" ACTION="Exercice2-2.php">
  <CENTER>
  <INPUT NAME="a" SIZE="5">
  <SELECT NAME="operateur">
    <OPTION VALUE="+">+
    <OPTION VALUE="-">-
    <OPTION VALUE="*">*
    <OPTION VALUE="/">/
  </SELECT>
  <INPUT NAME="b" SIZE="5">
  <BR>
  <INPUT TYPE="submit" VALUE="Valider">
  <INPUT TYPE="reset" VALUE="vider">
  </CENTER>
  </FORM>
<HR>


  Avec des radios Boutons :<BR>
  <FORM METHOD="get" ACTION="Exercice2-2.php">
  <CENTER>
  <TABLE><TR>
   <TD>
     <INPUT NAME="a" SIZE="5">
   </TD><TD>
     <INPUT TYPE="radio" NAME="operateur" VALUE="+" CHECKED>+<BR>
     <INPUT TYPE="radio" NAME="operateur" VALUE="-">-<BR>
     <INPUT TYPE="radio" NAME="operateur" VALUE="*">*<BR>
     <INPUT TYPE="radio" NAME="operateur" VALUE="/">/
   </TD><TD>
     <INPUT NAME="b" SIZE="5">
   </TD>
  </TR><TR>
   <TD COLSPAN="3" ALIGN="center">
     <INPUT TYPE="submit" VALUE="Valider">
     <INPUT TYPE="reset" VALUE="vider">
   </TD>
  </TABLE></CENTER>
  </FORM>
<hr>
