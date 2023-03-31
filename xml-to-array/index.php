 <?php 
	
	$filexml = simplexml_load_file('http://simpeg.bkd.jatengprov.go.id/webservice/pns');
    $datapns = json_decode($filexml -> children(), true);
	print_r($filexml);