<?php
/*
	Written by Gary Hollands Sept 2010 - solriche.co.uk
	This work is available under the terms of the GNU General Public License, http://www.gnu.org/licenses/gpl.html
*/
include ('render_xml_to_html.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" dir="ltr">
<head>
	<title>Using PHP SimpleXml to create HTML from XML data</title>
	<meta http-equiv="Content-Type" lang="en" content="text/html; charset=utf-8" />
	<meta name="language" content="en"/>
	<meta name="author" content="Gary Hollands" />
	<meta name="design" content="Gary Hollands - solriche web désigns - 2010" />
	<meta name="copyright" content="GNU General Public License, http://www.gnu.org/licenses/gpl.html" />
	<meta name="description" content="Using PHP SimpleXml to create HTML from XML data." />
	<meta name="keywords" content="xhtml,xml" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" type="text/css" href="style.css" title="default" media="screen" />
</head>
	<body>
		<div id="container">
			<div id="masterbox">
				<div id="content">
					<!--Your content in here-->
					<h1>Using PHP SimpleXml to create HTML from XML data</h1>
					<p>This tutorial shows a method of using a customisable PHP function to automatically present data contained in an XML format as HTML.</p>
					<p>The technique used by the PHP function, <code>render_xml_data</code>, in this article is useful for processing relatively small amounts of data records.</p>
					<p><code>render_xml_data</code> can mitigate the need for databases such as MYSQL until the records reach a significant number.</p>
					<p>Designed to be easily adapted without requiring a high level of programming knowledge, the <code>render_xml_data</code> function also provides a lower cost of administration.</p>
					<p>The examples shown and their explanation does however, assume a working knowledge of PHP and XML.</p>
					<h2>The XML data</h2>
					<pre>
&lt;painting&gt;
	&lt;title&gt;The painting
	&lt;/title&gt;
	&lt;artist class="post_impressionist"&gt;Artist name.
	&lt;/artist&gt;
	&lt;date&gt;Date of the painting.
	&lt;/date&gt;
	&lt;medium&gt;The materials used.
	&lt;/medium&gt;
	&lt;movement&gt;The main artistic influence or school.
	&lt;/movement&gt;
	<span class="wrap">&lt;more_info&gt;&lt;![CDATA[&lt;a href="http://en.wikipedia.org/wiki/link_to_artist" title="Find out more about the artist at Wikipedia"&gt;Wikipedia&lt;/a&gt;.]]&gt;</span>
	&lt;/more_info&gt;
&lt;/painting&gt;
					</pre>
					<h2>The PHP Function</h2>
					<pre>
function render_xml_data($path_to_xml_file){
	if (!file_exists($path_to_xml_file)){
		return;
	}else{
		$chars_to_replace = array('[\r]','[\n]','[\t]');
		<span class="wrap">$xmlstring = trim(preg_replace($chars_to_replace, '', file_get_contents($path_to_xml_file)));</span>
	}
	$xml = new SimpleXMLElement($xmlstring);
	foreach ($xml->painting as $record) {
		echo '&lt;div class="painting_record"&gt;'."\n";
		echo '&lt;h3&gt;'.$record->title.'&lt;/h3&gt;'."\n";
		echo '&lt;p&gt;&lt;span class="category"&gt;Artist: &lt;/span&gt;'.$record->artist.'&lt;/p&gt;'."\n";
		echo '&lt;p&gt;&lt;span class="category"&gt;Date: &lt;/span&gt;'.$record->date.'&lt;/p&gt;'."\n";
		echo '&lt;p&gt;&lt;span class="category"&gt;Medium: &lt;/span&gt;'.$record->medium.'&lt;/p&gt;'."\n";
		<span class="wrap">echo '&lt;p&gt;&lt;span class="category"&gt;Movement: &lt;/span&gt;&lt;span class="'.$record->artist['class'].'"&gt;'.$record->movement.'&lt;/span&gt;&lt;/p&gt;'."\n";</span>
		<span class="wrap">echo '&lt;p&gt;&lt;span class="category"&gt;More info: &lt;/span&gt; Find out more about '.$record->artist.' from '.$record->more_info.'&lt;/p&gt;'."\n";</span>
		echo '&lt;/div&gt;&lt;!--end painting_record--&gt;'."\n";
	}
}
					</pre>
					<h2>Calling the PHP render_xml_data Function</h2>
					<pre>
if(function_exists('render_xml_data')){
	render_xml_data('example_data.xml');
	}else{
	echo null;
}
					</pre>
					<h2>The HTML output</h2>
					<?php
						if(function_exists('render_xml_data')){
							render_xml_data('example_data.xml');
						}else{
							echo null;//allows the page to continue rendering
						}
					?>
					<h2>How to use the render_xml_data function</h2>
					<h3>Create the PHP render_xml_data function file</h3>
					<p>Copy the render_xml_data function to a file and save it as 'render_xml_to_html.php', without the quotes.</p>
					<p>Insert the created file as a PHP include statement into the top of a page where XML data is to be displayed as HTML:</p>
					<h3>Include the PHP render_xml_data function file</h3>
					<p class="inset"><code>include ('render_xml_to_html.php');</code></p>
					<h3>Calling the function to render XML to HTML</h3>
					<p class="inset"><code>render_xml_data('example_data.xml');</code></p>
					<h2>How the render_xml_data function works</h2>
					<ul>
					<li><p>If the XML file does not exist then exit the function and continue to render the rest of the HTML:</p>
					<p class="inset"><code>if (!file_exists($path_to_xml_file)){</code></p>
					<p class="inset"><code>return;</code></p>
					</li>
					<li><p>Pre-wash the XML, stripping out unwanted white spaces, tab and return characters:</p>
					<p class="inset"><code>$chars_to_replace = array('[\r]','[\n]','[\t]');</code></p>
					<p class="inset"><code>$xmlstring = trim(preg_replace($chars_to_replace, '', file_get_contents($path_to_xml_file)));</code></p>
					</li>
					<li><p>Return the XML string as an object.</p>
					<p class="inset"><code>$xml = new SimpleXMLElement($xmlstring);</code></p>
					</li>
					<li><p>Use the tag <code>&lt;painting&gt;</code> as a reference point and loop through all the records:</p>
					<p class="inset"><code>foreach ($xml->painting as $record)</code></p>
					</li>
					<li><p>Render the value of the XML tag <code>&lt;title&gt;</code> in a <code>&lt;/h3&gt;</code> HTML tag:</p>
					<p class="inset"><code>echo '&lt;h3&gt;'.$record->title.'&lt;/h3&gt;'."\n";</code></p></li>
					<li><p>Get the value of the class attribute of the tag <code>&lt;artist&gt;</code> and assign it to the span class attribute:</p>
					<p>* This is mainly to demonstrate accessing the attribute of an XML tag. It should be remembered that tag attributes should only be used for the purposes of metadata, which is a description of the data.</p>
					<p class="inset"><code>echo '&lt;p&gt;&lt;span class="category"&gt;Movement: &lt;/span&gt;&lt;span class="'.$record->artist['class'].'"&gt;'.$record->movement.'&lt;/span&gt;&lt;/p&gt;'."\n";</code></p></li>
					</ul>
					<p>Each record output is wrapped in a CSS <code>painting_record</code> class.</p>
					<h3>Additional notes</h3>
					<p>There has been no testing to assess the maximum number of records or file size that can be used.</p>
					<p>Nested tags are not a problem, they can be accessed with the same method as used for tag attributes above, for example:</p>
					<p class="inset"><code>$record->child_tag->grand_child_tag</code></p>
					<p>Other uses that the 'render_xml_data function' has been put to include Javascript image galleries such as <a href="http://www.twospy.com/galleriffic/" title="A jQuery plugin for rendering fast-performing photo galleries">Gallerific</a>.</p>
					<p>A further suggestion could be for the displaying of sitemaps that are in XML format as a HTML page.</p>
					<h3>License</h3>
					<p>These instructions are free to use and distribute under the <a href="http://www.gnu.org/copyleft/fdl.html" title="Free Software Foundation GNU General Public License">GNU Free Documentation License</a>.</p>
					<p>Gary Hollands - October 2010.</p>

				</div><!--end content-->
			</div><!--end masterbox-->
		</div><!--end container-->
	</body>
</html>