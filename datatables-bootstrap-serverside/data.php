<?php
	//data kolom yang akan di tampilkan
	$aColumns = array( 'idusulandiklat', 'iduser', 'idjenisdiklat', 'idrumpun', 'jabatan', 'idmasterdiklat', 'jmlcalonpeserta' );
	
	//primary key
	$sIndexColumn = "idusulandiklat";
	
	//nama table database
	$sTable = "usulandiklat";
	
	//informasi koneksi ke database
	$gaSql['user']       = "root";
	$gaSql['password']   = "l117k117";
	$gaSql['db']         = "bpsdmdjateng_siakd";
	$gaSql['server']     = "localhost";
	

	$gaSql['link'] =  mysqli_connect( $gaSql['server'], $gaSql['user'], $gaSql['password'], $gaSql['db'] ) or
		die( 'Could not open connection to server' );
	
	//mysql_select_db( $gaSql['db'], $gaSql['link'] ) or 
		//die( 'Could not select database '. $gaSql['db'] );
	

	$sLimit = "";
	if ( isset( $_GET['iDisplayStart'] ) && $_GET['iDisplayLength'] != '-1' )
	{
		$sLimit = "LIMIT ".mysqli_real_escape_string( $_GET['iDisplayStart'] ).", ".
			mysqli_real_escape_string( $_GET['iDisplayLength'] );
	}
	
	if ( isset( $_GET['iSortCol_0'] ) )
	{
		$sOrder = "ORDER BY  ";
		for ( $i=0 ; $i<intval( $_GET['iSortingCols'] ) ; $i++ )
		{
			if ( $_GET[ 'bSortable_'.intval($_GET['iSortCol_'.$i]) ] == "true" )
			{
				$sOrder .= $aColumns[ intval( $_GET['iSortCol_'.$i] ) ]."
				 	".mysqli_real_escape_string( $_GET['sSortDir_'.$i] ) .", ";
			}
		}
		
		$sOrder = substr_replace( $sOrder, "", -2 );
		if ( $sOrder == "ORDER BY" )
		{
			$sOrder = "";
		}
	}
	
	$sWhere = "";
	if ( $_GET['sSearch'] != "" )
	{
		$sWhere = "WHERE (";
		for ( $i=0 ; $i<count($aColumns) ; $i++ )
		{
			$sWhere .= $aColumns[$i]." LIKE '%".mysqli_real_escape_string( $_GET['sSearch'] )."%' OR ";
		}
		$sWhere = substr_replace( $sWhere, "", -3 );
		$sWhere .= ')';
	}
	
	for ( $i=0 ; $i<count($aColumns) ; $i++ )
	{
		if ( $_GET['bSearchable_'.$i] == "true" && $_GET['sSearch_'.$i] != '' )
		{
			if ( $sWhere == "" )
			{
				$sWhere = "WHERE ";
			}
			else
			{
				$sWhere .= " AND ";
			}
			$sWhere .= $aColumns[$i]." LIKE '%".mysqli_real_escape_string($_GET['sSearch_'.$i])."%' ";
		}
	}
	
	$sQuery = "
		SELECT SQL_CALC_FOUND_ROWS ".str_replace(" , ", " ", implode(", ", $aColumns))."
		FROM   $sTable
		$sWhere
		$sOrder
		$sLimit
	";
	$rResult = mysqli_query( $gaSql['link'], $sQuery ) or die(mysqli_error($gaSql['link']));
	
	$sQuery = "
		SELECT FOUND_ROWS()
	";
	$rResultFilterTotal = mysqli_query( $gaSql['link'], $sQuery ) or die(mysqli_error($gaSql['link']));
	$aResultFilterTotal = mysqli_fetch_array($rResultFilterTotal);
	$iFilteredTotal = $aResultFilterTotal[0];
	
	$sQuery = "
		SELECT COUNT(".$sIndexColumn.")
		FROM   $sTable
	";
	$rResultTotal = mysqli_query( $gaSql['link'], $sQuery  ) or die(mysql_error($gaSql['link']));
	$aResultTotal = mysqli_fetch_array($rResultTotal);
	$iTotal = $aResultTotal[0];
	
	$output = array(
		"sEcho" => intval($_GET['sEcho']),
		"iTotalRecords" => $iTotal,
		"iTotalDisplayRecords" => $iFilteredTotal,
		"aaData" => array()
	);
	
	while ( $aRow = mysqli_fetch_array( $rResult ) )
	{
		$row = array();
		for ( $i=0 ; $i<count($aColumns) ; $i++ )
		{
			if ( $aColumns[$i] == "version" )
			{
				$row[] = ($aRow[ $aColumns[$i] ]=="0") ? '-' : $aRow[ $aColumns[$i] ];
			}
			else if ( $aColumns[$i] != ' ' )
			{
				$row[] = $aRow[ $aColumns[$i] ];
			}
		}
		$output['aaData'][] = $row;
	}
	
	echo json_encode( $output );
?>