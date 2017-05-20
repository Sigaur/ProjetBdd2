<?php

function printTableRowTroncons($CodT, $CodA, $DuKm, $AuKm)
{
	print("<tr>
	    <td>$CodT</td>
	    <td>$CodA</td> 
	    <td>$DuKm</td>
	    <td>$AuKm</td>
	  	</tr>"
	  	);
}

function printTableRowSorties($CodT, $Libelle, $Numero)
{
	print("<tr>
	    <td>$CodT</td>
	    <td>$Libelle</td> 
	    <td>$Numero</td>
	  	</tr>"
	  	);
}

function printTableRowVilles($Nom, $CodP, $Libelle, $Numero)
{
	print("<tr>
	    <td>$Nom</td>
	    <td>$CodP</td>
	    <td>$Libelle</td>
	    <td>$Numero</td>
	  	</tr>"
	  	);
}

function printTableRowPeages($Nom, $CodT, $PgDuKm, $PgAuKm, $Tarif)
{
	print("<tr>
	    <td>$Nom</td>
	    <td>$CodT</td>
	    <td>$PgDuKm</td>
	    <td>$PgAuKm</td>
	    <td>$Tarif</td>
	  	</tr>"
	  	);
}

?>