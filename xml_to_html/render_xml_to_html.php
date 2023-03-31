<?php
/*
	Written by Gary Hollands Sept 2010
	This work is available under the terms of the GNU General Public License, http://www.gnu.org/licenses/gpl.html
	render_xml_data is a function that can use XML data and present that data as HTML.
*/

function render_xml_data($path_to_xml_file){
		if (!file_exists($path_to_xml_file)){
			return;
		}else{
			$chars_to_replace = array('[\r]','[\n]','[\t]');
			$xmlstring = trim(preg_replace($chars_to_replace, '', file_get_contents($path_to_xml_file)));
		}
		$xml = new SimpleXMLElement($xmlstring);
		foreach ($xml->painting as $record) {
			echo '<div class="painting_record">'."\n";
			echo '<h3>'.$record->title.'</h3>'."\n";
			echo '<p><span class="category">Artist: </span>'.$record->artist.'</p>'."\n";
			echo '<p><span class="category">Date: </span>'.$record->date.'</p>'."\n";
			echo '<p><span class="category">Medium: </span>'.$record->medium.'</p>'."\n";
			echo '<p><span class="category">Movement: </span><span class="'.$record->artist['class'].'">'.$record->movement.'</span></p>'."\n";
			echo '<p><span class="category">More info: </span> Find out more about '.$record->artist.' from '.$record->more_info.'</p>'."\n";
			echo '</div><!--end painting_record-->'."\n";
		}
	}
?>