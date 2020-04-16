<!DOCTYPE html>
<html lang="en">
	<head>
	<?php echo Asset::js("jquery.tablesorter.min.js"); ?>
<?php echo Asset::js('jquery.tablesorter.widgets.min.js');?>
		<?php echo Asset::js('jquery.tablesorter.widgets-filter-formatter.min.js');?>
	<script>
		$("document").ready(() => {
			$(function(){
				$('#hospital_table').tablesorter({
					widgets        : ['zebra', 'columns'],
					usNumberFormat : false,
					sortReset      : true,
					sortRestart    : true
					
				});
			});
			//Code that can generate a table, currently just used for id, name, state
			/* $('#load_data').click(function(){ //Right now it is a button since it wouldn't work otherwise and I got tired
			$.ajax({ //Should probably have a different url
				url:"/~demuthtc/ct310/LTN/files/Medicare_Provider_Charge_Inpatient_DRGALL_FY2017.txt",
				dataType:"text",
				success:function(data)
				{
					var entireFile = data.split(/\r?\n/);
					var temp = '<table id="hospital_table" class="tablesorter">';
					temp += '<th>Provider ID</th>';
					temp += '<th>Provider Name</th>';
					temp += '<th>Provider State</th>';
					list_of_added = [];
					//Row 6 is where it starts
					for(var row = 6; row < entireFile.length-1; row++){
						var row_data = entireFile[row].split("\t");
						//Extra characters (double quotes)
						for (var i = 0; i < row_data.length; i++) {
							row_data[i] = row_data[i].replace(/"/g, '');
						}
						if (!list_of_added.includes(row_data[1])) {
							list_of_added.push(row_data[1]);
							temp += "<tr>";
							temp += '<td>'+row_data[1]+'</td>';
							temp += '<td>'+row_data[2]+'</td>';
							temp += '<td>'+row_data[5]+'</td>';
							temp += "</tr>";
							temp += "\n";
						}
						
						for(var col = 0; col < list_of_indices.length; col++){
							//For some reason there was extra quotes around stuff
							row_data[list_of_indices[col]] = row_data[list_of_indices[col]].replace(/["]+/g, '');
							console.log(row_data[list_of_indices[col]]);
							if(row <= 4){
								//These are unimportant beginning rows
							}
							else if(row === 5){
								//Column heading
								temp += '<th>'+row_data[list_of_indices[col]]+'</th>';
							}
							else{
								//Actual rows
								temp += '<td>'+row_data[list_of_indices[col]]+'</td>';
							}	
						}
					}
					temp += "</table>";
					console.log(temp);
					//$('#hospitalTable').html(temp);
				}
			}); 
			
		});*/
		});
	</script>
	</head>
	<body>
	
		<div id="hospitalTable">
		<table id="hospital_table" class="tablesorter my-custom-scrollbar table-wrapper-scroll-y">
			<thead>
			<th id="rowone">Provider ID</th><th id="rowtwo">Provider Name</th><th id="rowthree">Provider State</th>
			</thead>
			<tbody>
				<tr><td>010033</td><td>UNIVERSITY OF ALABAMA HOSPITAL</td><td>AL</td></tr>
				<tr><td>030103</td><td>MAYO CLINIC HOSPITAL</td><td>AZ</td></tr>
				<tr><td>040114</td><td>BAPTIST HEALTH MEDICAL CENTER-LITTLE ROCK</td><td>AR</td></tr>
				<tr><td>050025</td><td>UC SAN DIEGO HEALTH HILLCREST - HILLCREST MED CTR</td><td>CA</td></tr>
				<tr><td>050047</td><td>CALIFORNIA PACIFIC MEDICAL CTR-PACIFIC CAMPUS HOSP</td><td>CA</td></tr>
				<tr><td>050100</td><td>SHARP MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050108</td><td>SUTTER MEDICAL CENTER, SACRAMENTO</td><td>CA</td></tr>
				<tr><td>050262</td><td>RONALD REAGAN U C L A MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050441</td><td>STANFORD HEALTH CARE</td><td>CA</td></tr>
				<tr><td>050454</td><td>UCSF MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050625</td><td>CEDARS-SINAI MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>060024</td><td>UNIVERSITY OF COLORADO HOSPITAL AUTHORITY</td><td>CO</td></tr>
				<tr><td>070022</td><td>YALE-NEW HAVEN HOSPITAL</td><td>CT</td></tr>
				<tr><td>070025</td><td>HARTFORD HOSPITAL</td><td>CT</td></tr>
				<tr><td>090011</td><td>MEDSTAR WASHINGTON HOSPITAL CENTER</td><td>DC</td></tr>
				<tr><td>100007</td><td>FLORIDA HOSPITAL</td><td>FL</td></tr>
				<tr><td>100022</td><td>JACKSON MEMORIAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100113</td><td>UF HEALTH SHANDS HOSPITAL</td><td>FL</td></tr>
				<tr><td>100128</td><td>TAMPA GENERAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100151</td><td>MAYO CLINIC</td><td>FL</td></tr>
				<tr><td>100289</td><td>CLEVELAND CLINIC HOSPITAL</td><td>FL</td></tr>
				<tr><td>110010</td><td>EMORY UNIVERSITY HOSPITAL</td><td>GA</td></tr>
				<tr><td>110083</td><td>PIEDMONT HOSPITAL</td><td>GA</td></tr>
				<tr><td>140088</td><td>THE UNIVERSITY OF CHICAGO MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140208</td><td>ADVOCATE CHRIST HOSPITAL & MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140276</td><td>LOYOLA UNIVERSITY MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140281</td><td>NORTHWESTERN MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>150084</td><td>ST VINCENT HOSPITAL & HEALTH SERVICES</td><td>IN</td></tr>
				<tr><td>160058</td><td>UNIVERSITY OF IOWA HOSPITAL & CLINICS</td><td>IA</td></tr>
				<tr><td>180040</td><td>JEWISH HOSPITAL & ST MARY'S HEALTHCARE</td><td>KY</td></tr>
				<tr><td>180067</td><td>UNIVERSITY OF KENTUCKY HOSPITAL</td><td>KY</td></tr>
				<tr><td>190036</td><td>OCHSNER MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>220071</td><td>MASSACHUSETTS GENERAL HOSPITAL</td><td>MA</td></tr>
				<tr><td>220110</td><td>BRIGHAM AND WOMEN'S HOSPITAL</td><td>MA</td></tr>
				<tr><td>220116</td><td>TUFTS MEDICAL CENTER</td><td>MA</td></tr>
				<tr><td>230038</td><td>SPECTRUM HEALTH - BUTTERWORTH CAMPUS</td><td>MI</td></tr>
				<tr><td>230046</td><td>UNIVERSITY OF MICHIGAN HEALTH SYSTEM</td><td>MI</td></tr>
				<tr><td>230053</td><td>HENRY FORD HOSPITAL</td><td>MI</td></tr>
				<tr><td>240010</td><td>MAYO CLINIC HOSPITAL ROCHESTER</td><td>MN</td></tr>
				<tr><td>240057</td><td>ABBOTT NORTHWESTERN HOSPITAL</td><td>MN</td></tr>
				<tr><td>240080</td><td>UNIVERSITY OF MINNESOTA  MEDICAL CENTER, FAIRVIEW</td><td>MN</td></tr>
				<tr><td>250001</td><td>UNIVERSITY OF MISSISSIPPI MED CENTER</td><td>MS</td></tr>
				<tr><td>260032</td><td>BARNES JEWISH HOSPITAL</td><td>MO</td></tr>
				<tr><td>260138</td><td>ST LUKES HOSPITAL OF KANSAS CITY</td><td>MO</td></tr>
				<tr><td>280013</td><td>THE NEBRASKA MEDICAL CENTER</td><td>NE</td></tr>
				<tr><td>310002</td><td>NEWARK BETH ISRAEL MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>330024</td><td>MOUNT SINAI HOSPITAL</td><td>NY</td></tr>
				<tr><td>330059</td><td>MONTEFIORE MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330101</td><td>NEW YORK-PRESBYTERIAN HOSPITAL</td><td>NY</td></tr>
				<tr><td>330234</td><td>WESTCHESTER MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330285</td><td>STRONG MEMORIAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>340030</td><td>DUKE UNIVERSITY HOSPITAL</td><td>NC</td></tr>
				<tr><td>340061</td><td>UNIVERSITY OF NORTH CAROLINA HOSPITAL</td><td>NC</td></tr>
				<tr><td>340113</td><td>CAROLINAS MEDICAL CENTER/BEHAV HEALTH</td><td>NC</td></tr>
				<tr><td>360085</td><td>OHIO STATE UNIVERSITY HOSPITALS</td><td>OH</td></tr>
				<tr><td>360137</td><td>UH CLEVELAND MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360180</td><td>CLEVELAND CLINIC</td><td>OH</td></tr>
				<tr><td>370028</td><td>INTEGRIS BAPTIST MEDICAL CENTER, INC</td><td>OK</td></tr>
				<tr><td>390027</td><td>TEMPLE UNIVERSITY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390050</td><td>ALLEGHENY GENERAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390111</td><td>HOSPITAL OF UNIV OF PENNSYLVANIA</td><td>PA</td></tr>
				<tr><td>390164</td><td>UPMC PRESBYTERIAN SHADYSIDE</td><td>PA</td></tr>
				<tr><td>420018</td><td>PALMETTO HEALTH RICHLAND</td><td>SC</td></tr>
				<tr><td>440039</td><td>VANDERBILT UNIVERSITY MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440048</td><td>BAPTIST MEMORIAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440082</td><td>SAINT THOMAS WEST HOSPITAL</td><td>TN</td></tr>
				<tr><td>450021</td><td>BAYLOR UNIVERSITY MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450044</td><td>UT SOUTHWESTERN UNIVERSITY HOSPITAL</td><td>TX</td></tr>
				<tr><td>450054</td><td>SCOTT & WHITE MEDICAL CENTER - TEMPLE</td><td>TX</td></tr>
				<tr><td>450056</td><td>SETON MEDICAL CENTER AUSTIN</td><td>TX</td></tr>
				<tr><td>450068</td><td>MEMORIAL HERMANN TEXAS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450193</td><td>CHI ST LUKE'S HEALTH BAYLOR COLLEGE OF MEDICINE ME</td><td>TX</td></tr>
				<tr><td>450358</td><td>HOUSTON METHODIST HOSPITAL</td><td>TX</td></tr>
				<tr><td>450388</td><td>METHODIST HOSPITAL</td><td>TX</td></tr>
				<tr><td>490007</td><td>SENTARA NORFOLK GENERAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490009</td><td>UNIVERSITY OF VIRGINIA MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490032</td><td>MEDICAL COLLEGE OF VIRGINIA HOSPITALS</td><td>VA</td></tr>
				<tr><td>490063</td><td>INOVA FAIRFAX HOSPITAL</td><td>VA</td></tr>
				<tr><td>500008</td><td>UNIVERSITY OF WASHINGTON MEDICAL CTR</td><td>WA</td></tr>
				<tr><td>520098</td><td>UNIVERSITY OF WI  HOSPITALS & CLINICS AUTHORITY</td><td>WI</td></tr>
				<tr><td>520138</td><td>AURORA ST LUKES MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>010023</td><td>BAPTIST MEDICAL CENTER SOUTH</td><td>AL</td></tr>
				<tr><td>010039</td><td>HUNTSVILLE HOSPITAL</td><td>AL</td></tr>
				<tr><td>010103</td><td>PRINCETON BAPTIST MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010113</td><td>MOBILE INFIRMARY MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>030002</td><td>BANNER - UNIVERSITY MEDICAL CENTER PHOENIX</td><td>AZ</td></tr>
				<tr><td>030014</td><td>JOHN C. LINCOLN NORTH MOUNTAIN HOSPITAL</td><td>AZ</td></tr>
				<tr><td>030024</td><td>ST. JOSEPH'S HOSPITAL AND MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030036</td><td>CHANDLER REGIONAL MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030037</td><td>ST LUKE'S MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030064</td><td>BANNER - UNIVERSITY MEDICAL CENTER TUCSON CAMPUS</td><td>AZ</td></tr>
				<tr><td>040004</td><td>WASHINGTON REGIONAL MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040007</td><td>CHI-ST VINCENT INFIRMARY</td><td>AR</td></tr>
				<tr><td>040016</td><td>UAMS MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>050022</td><td>RIVERSIDE COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050026</td><td>GROSSMONT HOSPITAL</td><td>CA</td></tr>
				<tr><td>050038</td><td>SANTA CLARA VALLEY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050039</td><td>ENLOE MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050056</td><td>ANTELOPE VALLEY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050060</td><td>COMMUNITY REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050077</td><td>SCRIPPS MERCY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050082</td><td>ST JOHNS REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050115</td><td>PALOMAR HEALTH DOWNTOWN CAMPUS</td><td>CA</td></tr>
				<tr><td>050116</td><td>NORTHRIDGE HOSPITAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050125</td><td>REGIONAL MEDICAL CENTER OF SAN JOSE</td><td>CA</td></tr>
				<tr><td>050180</td><td>JOHN MUIR MEDICAL CENTER - WALNUT CREEK CAMPUS</td><td>CA</td></tr>
				<tr><td>050224</td><td>HOAG MEMORIAL HOSPITAL PRESBYTERIAN</td><td>CA</td></tr>
				<tr><td>050238</td><td>METHODIST HOSPITAL OF SOUTHERN CA</td><td>CA</td></tr>
				<tr><td>050239</td><td>GLENDALE ADVENTIST MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050243</td><td>DESERT REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050290</td><td>PROVIDENCE SAINT JOHN'S HEALTH CENTER</td><td>CA</td></tr>
				<tr><td>050324</td><td>SCRIPPS MEMORIAL HOSPITAL LA JOLLA</td><td>CA</td></tr>
				<tr><td>050327</td><td>LOMA LINDA UNIVERSITY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050348</td><td>UNIVERSITY OF CALIFORNIA IRVINE MED CENTER</td><td>CA</td></tr>
				<tr><td>050373</td><td>LAC+USC MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050380</td><td>GOOD SAMARITAN HOSPITAL</td><td>CA</td></tr>
				<tr><td>050396</td><td>SANTA BARBARA COTTAGE HOSPITAL</td><td>CA</td></tr>
				<tr><td>050496</td><td>JOHN MUIR MEDICAL CENTER - CONCORD CAMPUS</td><td>CA</td></tr>
				<tr><td>050549</td><td>LOS ROBLES HOSPITAL & MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050557</td><td>MEMORIAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050567</td><td>MISSION HOSPITAL REGIONAL MED CENTER</td><td>CA</td></tr>
				<tr><td>050570</td><td>FOUNTAIN VALLEY REGIONAL HOSPITAL & MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050599</td><td>UNIVERSITY OF CALIFORNIA DAVIS MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050696</td><td>KECK HOSPITAL OF USC</td><td>CA</td></tr>
				<tr><td>050739</td><td>CENTINELA HOSPITAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050746</td><td>ORANGE COUNTY GLOBAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>060011</td><td>DENVER HEALTH MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060014</td><td>PRESBYTERIAN ST LUKES MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060022</td><td>UNIVERSITY COLO HEALTH MEMORIAL HOSPITAL CENTRAL</td><td>CO</td></tr>
				<tr><td>060023</td><td>ST MARYS  MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060034</td><td>SWEDISH MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060119</td><td>MEDICAL CENTER OF THE ROCKIES</td><td>CO</td></tr>
				<tr><td>070002</td><td>ST FRANCIS HOSPITAL & MEDICAL CENTER</td><td>CT</td></tr>
				<tr><td>080001</td><td>CHRISTIANA CARE HEALTH SERVICES, INC.</td><td>DE</td></tr>
				<tr><td>080004</td><td>BAYHEALTH HOSPITAL, KENT CAMPUS</td><td>DE</td></tr>
				<tr><td>090001</td><td>GEORGE WASHINGTON UNIV HOSPITAL</td><td>DC</td></tr>
				<tr><td>090004</td><td>MEDSTAR GEORGETOWN UNIVERSITY HOSPITAL</td><td>DC</td></tr>
				<tr><td>100001</td><td>UF HEALTH JACKSONVILLE</td><td>FL</td></tr>
				<tr><td>100006</td><td>ORLANDO HEALTH</td><td>FL</td></tr>
				<tr><td>100009</td><td>UMHC-UHEALTH TOWER</td><td>FL</td></tr>
				<tr><td>100019</td><td>HOLMES REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100025</td><td>SACRED HEART HOSPITAL</td><td>FL</td></tr>
				<tr><td>100026</td><td>BAY MEDICAL CENTER SACRED HEART HEALTH SYSTEM</td><td>FL</td></tr>
				<tr><td>100032</td><td>BAYFRONT HEALTH - ST PETERSBURG</td><td>FL</td></tr>
				<tr><td>100034</td><td>MOUNT SINAI MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100038</td><td>MEMORIAL REGIONAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100039</td><td>BROWARD HEALTH MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100040</td><td>ST VINCENT'S MEDICAL CENTER RIVERSIDE</td><td>FL</td></tr>
				<tr><td>100057</td><td>FLORIDA HOSPITAL WATERMAN</td><td>FL</td></tr>
				<tr><td>100073</td><td>HOLY CROSS HOSPITAL</td><td>FL</td></tr>
				<tr><td>100075</td><td>ST JOSEPHS HOSPITAL</td><td>FL</td></tr>
				<tr><td>100080</td><td>JFK MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100087</td><td>SARASOTA MEMORIAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100088</td><td>BAPTIST MEDICAL CENTER JACKSONVILLE</td><td>FL</td></tr>
				<tr><td>100131</td><td>AVENTURA HOSPITAL AND MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100135</td><td>TALLAHASSEE MEMORIAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100157</td><td>LAKELAND REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100161</td><td>CENTRAL FLORIDA REGIONAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100168</td><td>BOCA RATON REGIONAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100173</td><td>FLORIDA HOSPITAL TAMPA</td><td>FL</td></tr>
				<tr><td>100204</td><td>NORTH FLORIDA REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100209</td><td>KENDALL REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100212</td><td>OCALA REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100226</td><td>ORANGE PARK MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100238</td><td>NORTHSIDE HOSPITAL</td><td>FL</td></tr>
				<tr><td>100258</td><td>DELRAY MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>110007</td><td>PHOEBE PUTNEY MEMORIAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110029</td><td>NORTHEAST GEORGIA MEDICAL CENTER, INC</td><td>GA</td></tr>
				<tr><td>110034</td><td>AU MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110035</td><td>WELLSTAR KENNESTONE HOSPITAL</td><td>GA</td></tr>
				<tr><td>110036</td><td>MEMORIAL HEALTH UNIV MED CEN, INC</td><td>GA</td></tr>
				<tr><td>110078</td><td>EMORY UNIVERSITY HOSPITAL MIDTOWN</td><td>GA</td></tr>
				<tr><td>110079</td><td>GRADY MEMORIAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110082</td><td>SAINT JOSEPH'S HOSPITAL OF ATLANTA, INC</td><td>GA</td></tr>
				<tr><td>110107</td><td>MEDICAL CENTER, NAVICENT HEALTH (THE)</td><td>GA</td></tr>
				<tr><td>110115</td><td>WELLSTAR ATLANTA MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110177</td><td>DOCTORS HOSPITAL</td><td>GA</td></tr>
				<tr><td>120001</td><td>THE QUEENS MEDICAL CENTER</td><td>HI</td></tr>
				<tr><td>130007</td><td>SAINT ALPHONSUS REGIONAL MEDICAL CENTER</td><td>ID</td></tr>
				<tr><td>130018</td><td>EASTERN IDAHO REGIONAL MEDICAL CENTER</td><td>ID</td></tr>
				<tr><td>140010</td><td>EVANSTON HOSPITAL</td><td>IL</td></tr>
				<tr><td>140053</td><td>ST JOHNS HOSPITAL</td><td>IL</td></tr>
				<tr><td>140067</td><td>SAINT FRANCIS MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140091</td><td>THE CARLE FOUNDATION HOSPITAL</td><td>IL</td></tr>
				<tr><td>140117</td><td>PRESENCE RESURRECTION MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140119</td><td>RUSH UNIVERSITY MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140148</td><td>MEMORIAL MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140150</td><td>UNIVERSITY OF ILLINOIS HOSPITAL</td><td>IL</td></tr>
				<tr><td>140223</td><td>ADVOCATE LUTHERAN GENERAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140239</td><td>ROCKFORD MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140242</td><td>CENTRAL DUPAGE HOSPITAL</td><td>IL</td></tr>
				<tr><td>140258</td><td>ALEXIAN BROTHERS MEDICAL CENTER 1</td><td>IL</td></tr>
				<tr><td>150002</td><td>METHODIST HOSPITALS INC</td><td>IN</td></tr>
				<tr><td>150017</td><td>LUTHERAN HOSPITAL OF INDIANA</td><td>IN</td></tr>
				<tr><td>150021</td><td>PARKVIEW REGIONAL MEDICAL CENTER</td><td>IN</td></tr>
				<tr><td>150056</td><td>INDIANA UNIVERSITY HEALTH</td><td>IN</td></tr>
				<tr><td>150082</td><td>DEACONESS HOSPITAL INC</td><td>IN</td></tr>
				<tr><td>150089</td><td>INDIANA UNIVERSITY HEALTH BALL MEMORIAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150100</td><td>ST VINCENT EVANSVILLE</td><td>IN</td></tr>
				<tr><td>150162</td><td>FRANCISCAN HEALTH INDIANAPOLIS</td><td>IN</td></tr>
				<tr><td>160082</td><td>IOWA METHODIST MEDICAL CENTER</td><td>IA</td></tr>
				<tr><td>160083</td><td>MERCY MEDICAL CENTER-DES MOINES</td><td>IA</td></tr>
				<tr><td>170040</td><td>UNIVERSITY OF KANSAS HOSPITAL</td><td>KS</td></tr>
				<tr><td>170122</td><td>VIA CHRISTI HOSPITALS WICHITA, INC</td><td>KS</td></tr>
				<tr><td>180010</td><td>SAINT JOSEPH HOSPITAL</td><td>KY</td></tr>
				<tr><td>180035</td><td>ST ELIZABETH MEDICAL CENTER NORTH</td><td>KY</td></tr>
				<tr><td>180044</td><td>PIKEVILLE MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180088</td><td>NORTON HOSPITAL / NORTON HEALTHCARE PAVILION / NOR</td><td>KY</td></tr>
				<tr><td>180103</td><td>BAPTIST HEALTH LEXINGTON</td><td>KY</td></tr>
				<tr><td>180141</td><td>UNIVERSITY OF LOUISVILLE HOSPITAL</td><td>KY</td></tr>
				<tr><td>190002</td><td>LAFAYETTE GENERAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190064</td><td>OUR LADY OF THE LAKE REGIONAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190098</td><td>UNIVERSITY HEALTH SHREVEPORT</td><td>LA</td></tr>
				<tr><td>190111</td><td>WILLIS KNIGHTON MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>200009</td><td>MAINE MEDICAL CENTER</td><td>ME</td></tr>
				<tr><td>210002</td><td>UNIVERSITY OF MARYLAND MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>210003</td><td>UNIVERSITY OF MD PRINCE GEORGE'S HOSPITAL CTR</td><td>MD</td></tr>
				<tr><td>210004</td><td>HOLY CROSS HOSPITAL</td><td>MD</td></tr>
				<tr><td>210009</td><td>JOHNS HOPKINS HOSPITAL, THE</td><td>MD</td></tr>
				<tr><td>210012</td><td>SINAI HOSPITAL OF BALTIMORE</td><td>MD</td></tr>
				<tr><td>210043</td><td>UNIVERSITY OF MD BALTO WASHINGTON  MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>220031</td><td>BOSTON MEDICAL CENTER CORPORATION-</td><td>MA</td></tr>
				<tr><td>220036</td><td>ST ELIZABETH'S MEDICAL CENTER</td><td>MA</td></tr>
				<tr><td>220077</td><td>BAYSTATE MEDICAL CENTER</td><td>MA</td></tr>
				<tr><td>220086</td><td>BETH ISRAEL DEACONESS MEDICAL CENTER</td><td>MA</td></tr>
				<tr><td>220163</td><td>UMASS MEMORIAL MEDICAL CENTER INC</td><td>MA</td></tr>
				<tr><td>220171</td><td>LAHEY HOSPITAL & MEDICAL CENTER, BURLINGTON</td><td>MA</td></tr>
				<tr><td>230017</td><td>BRONSON METHODIST HOSPITAL</td><td>MI</td></tr>
				<tr><td>230019</td><td>PROVIDENCE - PROVIDENCE PARK HOSPITAL</td><td>MI</td></tr>
				<tr><td>230020</td><td>BEAUMONT HOSPITAL - DEARBORN</td><td>MI</td></tr>
				<tr><td>230024</td><td>SINAI-GRACE HOSPITAL</td><td>MI</td></tr>
				<tr><td>230029</td><td>ST JOSEPH MERCY OAKLAND</td><td>MI</td></tr>
				<tr><td>230070</td><td>COVENANT MEDICAL CENTER</td><td>MI</td></tr>
				<tr><td>230077</td><td>ST MARY'S OF MICHIGAN MEDICAL CENTER</td><td>MI</td></tr>
				<tr><td>230097</td><td>MUNSON MEDICAL CENTER</td><td>MI</td></tr>
				<tr><td>230104</td><td>HARPER UNIVERSITY HOSPITAL</td><td>MI</td></tr>
				<tr><td>230117</td><td>BORGESS MEDICAL CENTER</td><td>MI</td></tr>
				<tr><td>230130</td><td>BEAUMONT HOSPITAL, ROYAL OAK</td><td>MI</td></tr>
				<tr><td>230132</td><td>HURLEY MEDICAL CENTER</td><td>MI</td></tr>
				<tr><td>230141</td><td>MCLAREN FLINT</td><td>MI</td></tr>
				<tr><td>230165</td><td>ST JOHN HOSPITAL AND MEDICAL CENTER</td><td>MI</td></tr>
				<tr><td>230230</td><td>EDWARD W SPARROW HOSPITAL</td><td>MI</td></tr>
				<tr><td>230273</td><td>DETROIT RECEIVING HOSPITAL & UNIV HEALTH CENTER</td><td>MI</td></tr>
				<tr><td>240001</td><td>NORTH MEMORIAL MEDICAL CENTER</td><td>MN</td></tr>
				<tr><td>240002</td><td>ESSENTIA HEALTH ST MARY'S MEDICAL CENTER</td><td>MN</td></tr>
				<tr><td>240004</td><td>HENNEPIN COUNTY MEDICAL CENTER 1</td><td>MN</td></tr>
				<tr><td>240038</td><td>UNITED HOSPITAL</td><td>MN</td></tr>
				<tr><td>240106</td><td>REGIONS HOSPITAL</td><td>MN</td></tr>
				<tr><td>250004</td><td>NORTH MISSISSIPPI MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>250048</td><td>ST DOMINIC-JACKSON MEMORIAL HOSPITAL</td><td>MS</td></tr>
				<tr><td>250078</td><td>FORREST GENERAL HOSPITAL</td><td>MS</td></tr>
				<tr><td>250102</td><td>MISSISSIPPI BAPTIST MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>260001</td><td>MERCY HOSPITAL JOPLIN</td><td>MO</td></tr>
				<tr><td>260020</td><td>MERCY HOSPITAL ST LOUIS</td><td>MO</td></tr>
				<tr><td>260040</td><td>COX MEDICAL CENTERS</td><td>MO</td></tr>
				<tr><td>260065</td><td>MERCY HOSPITAL SPRINGFIELD</td><td>MO</td></tr>
				<tr><td>260105</td><td>SSM HEALTH SAINT LOUIS UNIVERSITY HOSPITAL</td><td>MO</td></tr>
				<tr><td>260108</td><td>MISSOURI BAPTIST MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260110</td><td>SOUTHEASTHEALTH</td><td>MO</td></tr>
				<tr><td>260141</td><td>UNIVERSITY OF MISSOURI HEALTH CARE</td><td>MO</td></tr>
				<tr><td>270004</td><td>BILLINGS CLINIC HOSPITAL</td><td>MT</td></tr>
				<tr><td>280003</td><td>BRYAN MEDICAL CENTER</td><td>NE</td></tr>
				<tr><td>280060</td><td>CHI HEALTH CREIGHTON UNIVERSITY MEDICAL CENTER - B</td><td>NE</td></tr>
				<tr><td>290001</td><td>RENOWN REGIONAL MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>290003</td><td>SUNRISE HOSPITAL AND MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>290007</td><td>UNIVERSITY MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>290045</td><td>ST ROSE DOMINICAN HOSPITALS - SIENA CAMPUS</td><td>NV</td></tr>
				<tr><td>290046</td><td>SPRING VALLEY HOSPITAL MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>300003</td><td>MARY HITCHCOCK MEMORIAL HOSPITAL</td><td>NH</td></tr>
				<tr><td>310001</td><td>HACKENSACK UNIVERSITY MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310012</td><td>VALLEY HOSPITAL</td><td>NJ</td></tr>
				<tr><td>310014</td><td>COOPER UNIVERSITY HOSPITAL</td><td>NJ</td></tr>
				<tr><td>310015</td><td>MORRISTOWN MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310019</td><td>ST JOSEPH'S REGIONAL MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310029</td><td>OUR LADY OF LOURDES MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310038</td><td>ROBERT WOOD JOHNSON UNIVERSITY HOSPITAL</td><td>NJ</td></tr>
				<tr><td>310073</td><td>JERSEY SHORE UNIVERSITY MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310074</td><td>JERSEY CITY MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310076</td><td>SAINT BARNABAS MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310092</td><td>CAPITAL HEALTH SYSTEM-FULD CAMPUS</td><td>NJ</td></tr>
				<tr><td>310119</td><td>UNIVERSITY HOSPITAL</td><td>NJ</td></tr>
				<tr><td>320001</td><td>UNM HOSPITAL</td><td>NM</td></tr>
				<tr><td>320085</td><td>MOUNTAIN VIEW REGIONAL MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>330005</td><td>KALEIDA HEALTH</td><td>NY</td></tr>
				<tr><td>330013</td><td>ALBANY MEDICAL CENTER HOSPITAL</td><td>NY</td></tr>
				<tr><td>330023</td><td>VASSAR BROTHERS MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330027</td><td>NASSAU UNIVERSITY MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330028</td><td>RICHMOND UNIVERSITY MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330043</td><td>SOUTHSIDE HOSPITAL</td><td>NY</td></tr>
				<tr><td>330046</td><td>MOUNT SINAI WEST</td><td>NY</td></tr>
				<tr><td>330055</td><td>NEW YORK-PRESBYTERIAN/QUEENS</td><td>NY</td></tr>
				<tr><td>330106</td><td>NORTH SHORE UNIVERSITY HOSPITAL</td><td>NY</td></tr>
				<tr><td>330119</td><td>LENOX HILL HOSPITAL</td><td>NY</td></tr>
				<tr><td>330125</td><td>ROCHESTER GENERAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>330141</td><td>BROOKHAVEN MEMORIAL HOSPITAL MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330158</td><td>GOOD SAMARITAN HOSPITAL OF SUFFERN</td><td>NY</td></tr>
				<tr><td>330160</td><td>STATEN ISLAND UNIVERSITY HOSPITAL</td><td>NY</td></tr>
				<tr><td>330167</td><td>NYU WINTHROP HOSPITAL</td><td>NY</td></tr>
				<tr><td>330169</td><td>MOUNT SINAI BETH ISRAEL</td><td>NY</td></tr>
				<tr><td>330182</td><td>ST FRANCIS HOSPITAL, ROSLYN</td><td>NY</td></tr>
				<tr><td>330194</td><td>MAIMONIDES MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330195</td><td>LONG ISLAND JEWISH MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330196</td><td>CONEY ISLAND HOSPITAL</td><td>NY</td></tr>
				<tr><td>330198</td><td>SOUTH NASSAU COMMUNITIES HOSPITAL</td><td>NY</td></tr>
				<tr><td>330214</td><td>NYU LANGONE HOSPITALS</td><td>NY</td></tr>
				<tr><td>330219</td><td>ERIE COUNTY MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330233</td><td>BROOKDALE HOSPITAL MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330236</td><td>NEW YORK-PRESBYTERIAN BROOKLYN METHODIST HOSPITAL</td><td>NY</td></tr>
				<tr><td>330241</td><td>UNIVERSITY HOSPITAL S U N Y HEALTH SCIENCE CENTER</td><td>NY</td></tr>
				<tr><td>330279</td><td>MERCY HOSPITAL OF BUFFALO</td><td>NY</td></tr>
				<tr><td>330286</td><td>GOOD SAMARITAN HOSPITAL MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330393</td><td>UNIVERSITY HOSPITAL AT STONY BROOK</td><td>NY</td></tr>
				<tr><td>330394</td><td>UNITED HEALTH SERVICES HOSPITALS, INC</td><td>NY</td></tr>
				<tr><td>340002</td><td>MEMORIAL MISSION HOSPITAL AND ASHEVILLE SURGERY CE</td><td>NC</td></tr>
				<tr><td>340010</td><td>WAYNE MEMORIAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340014</td><td>NOVANT HEALTH FORSYTH MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340028</td><td>CAPE FEAR VALLEY MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340040</td><td>VIDANT MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340047</td><td>NORTH CAROLINA BAPTIST HOSPITAL</td><td>NC</td></tr>
				<tr><td>340069</td><td>WAKEMED, RALEIGH CAMPUS</td><td>NC</td></tr>
				<tr><td>340091</td><td>THE MOSES H CONE MEMORIAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340114</td><td>REX HOSPITAL</td><td>NC</td></tr>
				<tr><td>340115</td><td>FIRSTHEALTH MOORE REGIONAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340141</td><td>NEW HANOVER REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>350011</td><td>SANFORD</td><td>ND</td></tr>
				<tr><td>360003</td><td>UNIVERSITY OF CINCINNATI MEDICAL CENTER, LLC</td><td>OH</td></tr>
				<tr><td>360006</td><td>RIVERSIDE METHODIST HOSPITAL</td><td>OH</td></tr>
				<tr><td>360017</td><td>GRANT MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360020</td><td>SUMMA HEALTH SYSTEM</td><td>OH</td></tr>
				<tr><td>360035</td><td>MOUNT CARMEL WEST</td><td>OH</td></tr>
				<tr><td>360048</td><td>UNIVERSITY OF TOLEDO MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360051</td><td>MIAMI VALLEY HOSPITAL</td><td>OH</td></tr>
				<tr><td>360059</td><td>METROHEALTH SYSTEM</td><td>OH</td></tr>
				<tr><td>360064</td><td>ST ELIZABETH YOUNGSTOWN HOSPITAL</td><td>OH</td></tr>
				<tr><td>360068</td><td>TOLEDO HOSPITAL THE</td><td>OH</td></tr>
				<tr><td>360079</td><td>KETTERING MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360112</td><td>MERCY ST VINCENT MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360163</td><td>CHRIST HOSPITAL</td><td>OH</td></tr>
				<tr><td>370001</td><td>HILLCREST MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>370013</td><td>MERCY HOSPITAL OKLAHOMA CITY, INC</td><td>OK</td></tr>
				<tr><td>370056</td><td>COMANCHE COUNTY MEMORIAL HOSPITAL</td><td>OK</td></tr>
				<tr><td>370091</td><td>SAINT FRANCIS HOSPITAL, INC</td><td>OK</td></tr>
				<tr><td>370093</td><td>O U MEDICINE</td><td>OK</td></tr>
				<tr><td>380004</td><td>PROVIDENCE ST VINCENT MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380007</td><td>LEGACY EMANUEL MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380009</td><td>OHSU HOSPITAL AND CLINICS</td><td>OR</td></tr>
				<tr><td>390006</td><td>GEISINGER MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390028</td><td>UPMC MERCY</td><td>PA</td></tr>
				<tr><td>390045</td><td>WILLIAMSPORT REGIONAL MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390046</td><td>YORK HOSPITAL</td><td>PA</td></tr>
				<tr><td>390049</td><td>ST LUKE'S HOSPITAL BETHLEHEM</td><td>PA</td></tr>
				<tr><td>390063</td><td>UPMC HAMOT</td><td>PA</td></tr>
				<tr><td>390073</td><td>UPMC ALTOONA</td><td>PA</td></tr>
				<tr><td>390079</td><td>ROBERT PACKER HOSPITAL</td><td>PA</td></tr>
				<tr><td>390100</td><td>LANCASTER GENERAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390115</td><td>ARIA HEALTH</td><td>PA</td></tr>
				<tr><td>390133</td><td>LEHIGH VALLEY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390174</td><td>THOMAS JEFFERSON UNIVERSITY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390195</td><td>MAIN LINE HOSPITAL LANKENAU</td><td>PA</td></tr>
				<tr><td>390223</td><td>PENN PRESBYTERIAN MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390231</td><td>ABINGTON MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390256</td><td>MILTON S HERSHEY MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390258</td><td>ST MARY MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390270</td><td>GEISINGER WYOMING VALLEY MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390290</td><td>HAHNEMANN UNIVERSITY HOSPITAL</td><td>PA</td></tr>
				<tr><td>410007</td><td>RHODE ISLAND HOSPITAL</td><td>RI</td></tr>
				<tr><td>420004</td><td>MUSC MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420007</td><td>SPARTANBURG MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420051</td><td>MCLEOD REGIONAL MEDICAL CENTER-PEE DEE</td><td>SC</td></tr>
				<tr><td>420078</td><td>GHS GREENVILLE MEMORIAL HOSPITAL</td><td>SC</td></tr>
				<tr><td>420079</td><td>TRIDENT MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420085</td><td>GRAND STRAND REGIONAL MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420087</td><td>ROPER HOSPITAL</td><td>SC</td></tr>
				<tr><td>430027</td><td>SANFORD USD MEDICAL CENTER</td><td>SD</td></tr>
				<tr><td>430077</td><td>REGIONAL HEALTH RAPID CITY HOSPITAL</td><td>SD</td></tr>
				<tr><td>440002</td><td>JACKSON-MADISON COUNTY GENERAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440006</td><td>TRISTAR SKYLINE MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440015</td><td>UNIVERSITY OF TN MEDICAL CENTER (THE)</td><td>TN</td></tr>
				<tr><td>440017</td><td>WELLMONT HOLSTON VALLEY MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440049</td><td>METHODIST HEALTHCARE MEMPHIS HOSPITALS</td><td>TN</td></tr>
				<tr><td>440063</td><td>JOHNSON CITY MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440091</td><td>MEMORIAL HEALTHCARE SYSTEM, INC</td><td>TN</td></tr>
				<tr><td>440104</td><td>ERLANGER MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440152</td><td>REGIONAL ONE HEALTH</td><td>TN</td></tr>
				<tr><td>440161</td><td>TRISTAR CENTENNIAL MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>450011</td><td>ST JOSEPH REGIONAL HEALTH CENTER</td><td>TX</td></tr>
				<tr><td>450018</td><td>UNIVERSITY OF TEXAS MEDICAL BRANCH</td><td>TX</td></tr>
				<tr><td>450029</td><td>LAREDO MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450039</td><td>JPS HEALTH NETWORK</td><td>TX</td></tr>
				<tr><td>450051</td><td>METHODIST DALLAS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450083</td><td>EAST TEXAS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450135</td><td>TEXAS HEALTH HARRIS METHODIST FORT WORTH</td><td>TX</td></tr>
				<tr><td>450137</td><td>BAYLOR SCOTT AND WHITE ALL SAINTS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450184</td><td>MEMORIAL HERMANN HOSPITAL SYSTEM</td><td>TX</td></tr>
				<tr><td>450213</td><td>UNIVERSITY HEALTH SYSTEM</td><td>TX</td></tr>
				<tr><td>450222</td><td>CONROE REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450462</td><td>TEXAS HEALTH PRESBYTERIAN HOSPITAL  DALLAS</td><td>TX</td></tr>
				<tr><td>450617</td><td>CLEAR LAKE REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450651</td><td>MEDICAL CENTER OF PLANO</td><td>TX</td></tr>
				<tr><td>450686</td><td>UNIVERSITY MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450766</td><td>UT SOUTHWESTERN UNIVERSITY HOSPITAL-ZALE LIPSHY</td><td>TX</td></tr>
				<tr><td>450775</td><td>KINGWOOD MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>460009</td><td>UNIVERSITY OF UTAH HOSPITALS AND CLINICS</td><td>UT</td></tr>
				<tr><td>460010</td><td>INTERMOUNTAIN MEDICAL CENTER</td><td>UT</td></tr>
				<tr><td>470003</td><td>UNIVERSITY OF VERMONT MEDICAL CENTER</td><td>VT</td></tr>
				<tr><td>490005</td><td>WINCHESTER MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490022</td><td>MARY WASHINGTON HOSPITAL, INC</td><td>VA</td></tr>
				<tr><td>490024</td><td>CARILION ROANOKE MEMORIAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490052</td><td>RIVERSIDE REGIONAL MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490112</td><td>CJW MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490118</td><td>HENRICO DOCTORS' HOSPITAL</td><td>VA</td></tr>
				<tr><td>500005</td><td>VIRGINIA MASON MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500027</td><td>SWEDISH MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500054</td><td>PROVIDENCE SACRED HEART MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500064</td><td>HARBORVIEW MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500129</td><td>TACOMA GENERAL ALLENMORE HOSPITAL</td><td>WA</td></tr>
				<tr><td>510001</td><td>WEST VIRGINIA UNIVERSITY HOSPITALS</td><td>WV</td></tr>
				<tr><td>510022</td><td>CHARLESTON AREA MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>520083</td><td>SSM HEALTH ST MARY'S HOSPITAL - MADISON</td><td>WI</td></tr>
				<tr><td>520177</td><td>FROEDTERT MEMORIAL LUTHERAN HOSPITAL</td><td>WI</td></tr>
				<tr><td>670025</td><td>THE HEART HOSPITAL BAYLOR PLANO</td><td>TX</td></tr>
				<tr><td>670041</td><td>SETON MEDICAL CENTER WILLIAMSON</td><td>TX</td></tr>
				<tr><td>010011</td><td>ST VINCENT'S EAST</td><td>AL</td></tr>
				<tr><td>010024</td><td>JACKSON HOSPITAL & CLINIC INC</td><td>AL</td></tr>
				<tr><td>010029</td><td>EAST ALABAMA MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010078</td><td>NORTHEAST ALABAMA REGIONAL MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010092</td><td>D C H REGIONAL MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>040026</td><td>CHI ST. VINCENT HOSPITAL HOT SPRINGS</td><td>AR</td></tr>
				<tr><td>040062</td><td>MERCY HOSPITAL FORT SMITH</td><td>AR</td></tr>
				<tr><td>050063</td><td>HOLLYWOOD PRESBYTERIAN MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050093</td><td>SAINT AGNES MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050129</td><td>ST BERNARDINE MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050191</td><td>ST MARY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050235</td><td>PROVIDENCE SAINT JOSEPH MEDICAL CTR</td><td>CA</td></tr>
				<tr><td>050292</td><td>RIVERSIDE UNIVERSITY HEALTH SYSTEM-MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050376</td><td>LAC/HARBOR-UCLA MED CENTER</td><td>CA</td></tr>
				<tr><td>050382</td><td>CITRUS VALLEY MEDICAL CENTER-IC CAMPUS</td><td>CA</td></tr>
				<tr><td>050390</td><td>HEMET VALLEY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050426</td><td>WEST ANAHEIM MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050464</td><td>DOCTORS MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050481</td><td>WEST HILLS HOSPITAL & MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050485</td><td>LONG BEACH MEMORIAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050502</td><td>SAINT VINCENT MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050581</td><td>LAKEWOOD REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050742</td><td>OLYMPIA MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>090008</td><td>UNITED MEDICAL CENTER</td><td>DC</td></tr>
				<tr><td>100012</td><td>LEE MEMORIAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100017</td><td>HALIFAX HEALTH MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100029</td><td>NORTH SHORE MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100067</td><td>ST ANTHONYS HOSPITAL</td><td>FL</td></tr>
				<tr><td>100110</td><td>OSCEOLA REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100167</td><td>PLANTATION GENERAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100179</td><td>MEMORIAL HOSPITAL JACKSONVILLE</td><td>FL</td></tr>
				<tr><td>100242</td><td>GULF COAST REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100281</td><td>MEMORIAL HOSPITAL WEST</td><td>FL</td></tr>
				<tr><td>110025</td><td>SOUTHEAST GEORGIA HEALTH SYSTEM- BRUNSWICK CAMPUS</td><td>GA</td></tr>
				<tr><td>110043</td><td>ST JOSEPH'S HOSPITAL - SAVANNAH</td><td>GA</td></tr>
				<tr><td>110054</td><td>FLOYD MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110064</td><td>MIDTOWN MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110129</td><td>ST FRANCIS HOSPITAL</td><td>GA</td></tr>
				<tr><td>110164</td><td>COLISEUM MEDICAL CENTERS</td><td>GA</td></tr>
				<tr><td>110215</td><td>PIEDMONT FAYETTE HOSPITAL</td><td>GA</td></tr>
				<tr><td>130049</td><td>KOOTENAI HEALTH</td><td>ID</td></tr>
				<tr><td>140015</td><td>BLESSING HOSPITAL</td><td>IL</td></tr>
				<tr><td>140018</td><td>MT SINAI HOSPITAL MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140030</td><td>SHERMAN HOSPITAL</td><td>IL</td></tr>
				<tr><td>140054</td><td>MACNEAL  HOSPITAL</td><td>IL</td></tr>
				<tr><td>140291</td><td>ADVOCATE GOOD SHEPHERD HOSPITAL</td><td>IL</td></tr>
				<tr><td>150035</td><td>PORTER REGIONAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150169</td><td>COMMUNITY HOSPITAL NORTH</td><td>IN</td></tr>
				<tr><td>190008</td><td>TERREBONNE GENERAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190026</td><td>RAPIDES REGIONAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>210016</td><td>ADVENTIST HEALTHCARE WASHINGTON ADVENTIST HOSPITAL</td><td>MD</td></tr>
				<tr><td>210019</td><td>PENINSULA REGIONAL MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>210029</td><td>JOHNS HOPKINS BAYVIEW MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>210049</td><td>UNIVERSITY OF M D UPPER CHESAPEAKE MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>220074</td><td>SOUTHCOAST HOSPITAL GROUP, INC</td><td>MA</td></tr>
				<tr><td>220100</td><td>SOUTH SHORE HOSPITAL</td><td>MA</td></tr>
				<tr><td>230041</td><td>MCLAREN BAY REGION</td><td>MI</td></tr>
				<tr><td>230066</td><td>MERCY HEALTH MUSKEGON</td><td>MI</td></tr>
				<tr><td>230146</td><td>HENRY FORD WYANDOTTE HOSPITAL</td><td>MI</td></tr>
				<tr><td>230151</td><td>BEAUMONT HOSPITAL - FARMINGTON HILLS</td><td>MI</td></tr>
				<tr><td>230156</td><td>ST JOSEPH MERCY HOSPITAL</td><td>MI</td></tr>
				<tr><td>230195</td><td>ST JOHN MACOMB-OAKLAND HOSPITAL-MACOMB CENTER</td><td>MI</td></tr>
				<tr><td>230227</td><td>MCLAREN MACOMB</td><td>MI</td></tr>
				<tr><td>230244</td><td>GARDEN CITY HOSPITAL</td><td>MI</td></tr>
				<tr><td>240036</td><td>ST CLOUD HOSPITAL</td><td>MN</td></tr>
				<tr><td>240078</td><td>FAIRVIEW SOUTHDALE HOSPITAL</td><td>MN</td></tr>
				<tr><td>260027</td><td>RESEARCH MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260085</td><td>ST JOSEPH MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260091</td><td>SSM HEALTH ST MARY'S HOSPITAL - ST LOUIS</td><td>MO</td></tr>
				<tr><td>260137</td><td>FREEMAN HEALTH SYSTEM - FREEMAN WEST</td><td>MO</td></tr>
				<tr><td>260180</td><td>CHRISTIAN HOSPITAL NORTHEAST-NORTHWEST</td><td>MO</td></tr>
				<tr><td>290022</td><td>DESERT SPRINGS HOSPITAL</td><td>NV</td></tr>
				<tr><td>290039</td><td>MOUNTAINVIEW HOSPITAL</td><td>NV</td></tr>
				<tr><td>290047</td><td>SOUTHERN HILLS HOSPITAL AND MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>310005</td><td>HUNTERDON MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310009</td><td>CLARA MAASS MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310017</td><td>CHILTON MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310022</td><td>VIRTUA WEST JERSEY HOSPITALS VOORHEES</td><td>NJ</td></tr>
				<tr><td>310024</td><td>ROBERT WOOD JOHNSON UNIVERSITY HOSPITAL AT RAHWAY</td><td>NJ</td></tr>
				<tr><td>310027</td><td>TRINITAS REGIONAL MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310032</td><td>INSPIRA MEDICAL CENTER VINELAND</td><td>NJ</td></tr>
				<tr><td>310041</td><td>COMMUNITY MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310050</td><td>SAINT CLARE'S HOSPITAL/ DENVILLE CAMPUS</td><td>NJ</td></tr>
				<tr><td>310051</td><td>OVERLOOK MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310086</td><td>KENNEDY UNIVERSITY HOSPITAL - STRATFORD DIV</td><td>NJ</td></tr>
				<tr><td>310108</td><td>JFK MEDICAL CTR - ANTHONY M. YELENCSICS COMMUNITY</td><td>NJ</td></tr>
				<tr><td>330009</td><td>BRONX-LEBANON HOSPITAL CENTER</td><td>NY</td></tr>
				<tr><td>330056</td><td>BROOKLYN HOSPITAL CENTER AT DOWNTOWN CAMPUS</td><td>NY</td></tr>
				<tr><td>330080</td><td>LINCOLN MEDICAL & MENTAL HEALTH CENTER</td><td>NY</td></tr>
				<tr><td>330104</td><td>NYACK HOSPITAL</td><td>NY</td></tr>
				<tr><td>330193</td><td>FLUSHING HOSPITAL MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330201</td><td>KINGSBROOK JEWISH MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330202</td><td>KINGS COUNTY HOSPITAL CENTER</td><td>NY</td></tr>
				<tr><td>330231</td><td>QUEENS HOSPITAL CENTER</td><td>NY</td></tr>
				<tr><td>340001</td><td>CAROLINAS HEALTHCARE SYSTEM NORTHEAST</td><td>NC</td></tr>
				<tr><td>340032</td><td>CAROMONT REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340053</td><td>NOVANT HEALTH PRESBYTERIAN MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340107</td><td>VIDANT EDGECOMBE HOSPITAL</td><td>NC</td></tr>
				<tr><td>340130</td><td>CAROLINAS HEALTHCARE SYSTEM UNION</td><td>NC</td></tr>
				<tr><td>360027</td><td>AKRON GENERAL MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360084</td><td>AULTMAN HOSPITAL</td><td>OH</td></tr>
				<tr><td>370037</td><td>ST ANTHONY HOSPITAL</td><td>OK</td></tr>
				<tr><td>370094</td><td>ALLIANCEHEALTH MIDWEST</td><td>OK</td></tr>
				<tr><td>390067</td><td>PINNACLE HEALTH HOSPITALS</td><td>PA</td></tr>
				<tr><td>390156</td><td>MERCY FITZGERALD HOSPITAL</td><td>PA</td></tr>
				<tr><td>390180</td><td>CROZER CHESTER MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390226</td><td>PENNSYLVANIA HOSPITAL</td><td>PA</td></tr>
				<tr><td>420002</td><td>PIEDMONT MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>440035</td><td>TENNOVA HEALTHCARE-CLARKSVILLE</td><td>TN</td></tr>
				<tr><td>440059</td><td>COOKEVILLE REGIONAL MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440120</td><td>TENNOVA HEALTHCARE</td><td>TN</td></tr>
				<tr><td>440133</td><td>SAINT THOMAS MIDTOWN HOSPITAL</td><td>TN</td></tr>
				<tr><td>440183</td><td>ST FRANCIS HOSPITAL</td><td>TN</td></tr>
				<tr><td>440228</td><td>SAINT FRANCIS BARTLETT MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>450058</td><td>BAPTIST MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450064</td><td>TEXAS HEALTH ARLINGTON MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450107</td><td>LAS PALMAS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450119</td><td>SOUTH TEXAS HEALTH SYSTEM</td><td>TX</td></tr>
				<tr><td>450324</td><td>TEXOMA MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450424</td><td>HOUSTON METHODIST SAN JACINTO HOSPITAL</td><td>TX</td></tr>
				<tr><td>450431</td><td>ST DAVID'S MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450634</td><td>MEDICAL CITY DENTON</td><td>TX</td></tr>
				<tr><td>450638</td><td>HOUSTON NORTHWEST MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450647</td><td>MEDICAL CITY DALLAS</td><td>TX</td></tr>
				<tr><td>450672</td><td>PLAZA MEDICAL CENTER OF FORT WORTH</td><td>TX</td></tr>
				<tr><td>450697</td><td>SOUTHWEST GENERAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450820</td><td>HOUSTON METHODIST SUGARLAND HOSPITAL</td><td>TX</td></tr>
				<tr><td>460004</td><td>MCKAY DEE HOSPITAL</td><td>UT</td></tr>
				<tr><td>490021</td><td>CENTRA  HEALTH, INC</td><td>VA</td></tr>
				<tr><td>490048</td><td>LEWISGALE MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490120</td><td>CHESAPEAKE GENERAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>500108</td><td>ST JOSEPH MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>520136</td><td>WHEATON FRANCISCAN - ST JOSEPH</td><td>WI</td></tr>
				<tr><td>520193</td><td>AURORA BAYCARE MEDICAL CTR</td><td>WI</td></tr>
				<tr><td>390142</td><td>ALBERT EINSTEIN MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>220075</td><td>MASSACHUSETTS EYE AND EAR INFIRMARY -</td><td>MA</td></tr>
				<tr><td>230297</td><td>KARMANOS CANCER CENTER</td><td>MI</td></tr>
				<tr><td>280040</td><td>METHODIST HOSPITAL</td><td>NE</td></tr>
				<tr><td>030087</td><td>SCOTTSDALE SHEA MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>360016</td><td>JEWISH HOSPITAL, LLC</td><td>OH</td></tr>
				<tr><td>450713</td><td>ST DAVID'S SOUTH AUSTIN MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>050516</td><td>MERCY SAN JUAN MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>010001</td><td>SOUTHEAST ALABAMA MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010087</td><td>UNIVERSITY OF SOUTH ALABAMA MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>030030</td><td>ABRAZO CENTRAL CAMPUS</td><td>AZ</td></tr>
				<tr><td>030038</td><td>SCOTTSDALE OSBORN MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030065</td><td>BANNER DESERT MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>040055</td><td>SPARKS REGIONAL MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>050008</td><td>CALIFORNIA PACIFIC MEDICAL CTR-DAVIES CAMPUS HOSP</td><td>CA</td></tr>
				<tr><td>050168</td><td>ST JUDE MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050471</td><td>GOOD SAMARITAN HOSPITAL</td><td>CA</td></tr>
				<tr><td>050488</td><td>EDEN MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>060015</td><td>CENTURA HEALTH-ST ANTHONY HOSPITAL</td><td>CO</td></tr>
				<tr><td>100008</td><td>BAPTIST HOSPITAL OF MIAMI</td><td>FL</td></tr>
				<tr><td>100018</td><td>NAPLES COMMUNITY HOSPITAL</td><td>FL</td></tr>
				<tr><td>100127</td><td>MORTON PLANT HOSPITAL</td><td>FL</td></tr>
				<tr><td>100187</td><td>PALMETTO GENERAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100220</td><td>GULF COAST MEDICAL CENTER LEE MEM HEALTH SYSTEM</td><td>FL</td></tr>
				<tr><td>100246</td><td>LAWNWOOD REGIONAL MEDICAL CENTER & HEART INSTITUTE</td><td>FL</td></tr>
				<tr><td>100288</td><td>ST MARY'S MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>110028</td><td>UNIVERSITY HOSPITAL</td><td>GA</td></tr>
				<tr><td>130006</td><td>ST LUKE'S REGIONAL MEDICAL CENTER</td><td>ID</td></tr>
				<tr><td>140007</td><td>PRESENCE SAINT JOSEPH MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>150058</td><td>MEMORIAL HOSPITAL OF SOUTH BEND</td><td>IN</td></tr>
				<tr><td>180130</td><td>BAPTIST HEALTH LOUISVILLE</td><td>KY</td></tr>
				<tr><td>190176</td><td>TULANE MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>260077</td><td>ST ANTHONY'S MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260081</td><td>SSM HEALTH ST CLARE HOSPITAL - FENTON</td><td>MO</td></tr>
				<tr><td>260104</td><td>SSM HEALTH DEPAUL HOSPITAL ST LOUIS</td><td>MO</td></tr>
				<tr><td>290021</td><td>VALLEY HOSPITAL MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>310064</td><td>ATLANTICARE REGIONAL MEDICAL CENTER - CITY CAMPUS</td><td>NJ</td></tr>
				<tr><td>330203</td><td>CROUSE HOSPITAL</td><td>NY</td></tr>
				<tr><td>370114</td><td>ST JOHN MEDICAL CENTER, INC</td><td>OK</td></tr>
				<tr><td>380102</td><td>SACRED HEART MEDICAL CENTER - RIVERBEND</td><td>OR</td></tr>
				<tr><td>390139</td><td>MAIN LINE HOSPITAL BRYN MAWR CAMPUS</td><td>PA</td></tr>
				<tr><td>440125</td><td>FORT SANDERS REGIONAL MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>450033</td><td>VHS HARLINGEN HOSPITAL COMPANY LLC</td><td>TX</td></tr>
				<tr><td>450040</td><td>COVENANT MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450102</td><td>CHRISTUS MOTHER FRANCES HOSPITAL</td><td>TX</td></tr>
				<tr><td>450124</td><td>DELL SETON  MED CENTER AT THE UNIVERSITY OF TX</td><td>TX</td></tr>
				<tr><td>450668</td><td>SIERRA MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450869</td><td>DOCTORS HOSPITAL AT RENAISSANCE</td><td>TX</td></tr>
				<tr><td>490077</td><td>MARTHA JEFFERSON HOSPITAL</td><td>VA</td></tr>
				<tr><td>500024</td><td>PROVIDENCE ST PETER HOSPITAL</td><td>WA</td></tr>
				<tr><td>500025</td><td>SWEDISH MEDICAL CENTER / CHERRY HILL</td><td>WA</td></tr>
				<tr><td>510007</td><td>ST MARY'S MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>520087</td><td>GUNDERSEN LUTHERAN MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>010055</td><td>FLOWERS HOSPITAL</td><td>AL</td></tr>
				<tr><td>010056</td><td>ST VINCENT'S BIRMINGHAM</td><td>AL</td></tr>
				<tr><td>020001</td><td>PROVIDENCE ALASKA MEDICAL CENTER</td><td>AK</td></tr>
				<tr><td>030006</td><td>TUCSON MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030012</td><td>YAVAPAI REGIONAL MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030023</td><td>FLAGSTAFF MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030085</td><td>NORTHWEST MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030089</td><td>BANNER THUNDERBIRD MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>050009</td><td>QUEEN OF THE VALLEY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050069</td><td>ST JOSEPH HOSPITAL</td><td>CA</td></tr>
				<tr><td>050107</td><td>MARIAN REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050145</td><td>COMMUNITY HOSPITAL OF THE MONTEREY PENINSULA</td><td>CA</td></tr>
				<tr><td>050174</td><td>SANTA ROSA MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050222</td><td>SHARP CHULA VISTA MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050228</td><td>ZUCKERBERG SAN FRANCISCO GENERAL HOSP & TRAUMA CTR</td><td>CA</td></tr>
				<tr><td>050242</td><td>DOMINICAN HOSPITAL</td><td>CA</td></tr>
				<tr><td>050278</td><td>PROVIDENCE HOLY CROSS MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050280</td><td>MERCY MEDICAL CENTER REDDING</td><td>CA</td></tr>
				<tr><td>050305</td><td>ALTA BATES SUMMIT MEDICAL CENTER - ALTA BATES CAMP</td><td>CA</td></tr>
				<tr><td>050308</td><td>EL CAMINO HOSPITAL</td><td>CA</td></tr>
				<tr><td>050309</td><td>SUTTER ROSEVILLE MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050360</td><td>MARIN GENERAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050438</td><td>HUNTINGTON MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>060020</td><td>PARKVIEW MEDICAL CENTER INC</td><td>CO</td></tr>
				<tr><td>060113</td><td>CENTURA HEALTH-LITTLETON ADVENTIST HOSPITAL</td><td>CO</td></tr>
				<tr><td>070010</td><td>BRIDGEPORT HOSPITAL</td><td>CT</td></tr>
				<tr><td>100044</td><td>MARTIN MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100068</td><td>FLORIDA HOSPITAL MEMORIAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100084</td><td>LEESBURG REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100086</td><td>BROWARD HEALTH NORTH</td><td>FL</td></tr>
				<tr><td>100105</td><td>INDIAN RIVER MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100213</td><td>BLAKE MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100236</td><td>FAWCETT MEMORIAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100243</td><td>BRANDON REGIONAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100256</td><td>REGIONAL MEDICAL CENTER BAYONET POINT</td><td>FL</td></tr>
				<tr><td>110074</td><td>PIEDMONT ATHENS REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110076</td><td>DEKALB MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110087</td><td>GWINNETT MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110161</td><td>NORTHSIDE HOSPITAL</td><td>GA</td></tr>
				<tr><td>120022</td><td>STRAUB CLINIC AND HOSPITAL</td><td>HI</td></tr>
				<tr><td>130003</td><td>ST JOSEPH REGIONAL MEDICAL CENTER</td><td>ID</td></tr>
				<tr><td>140029</td><td>COPLEY MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140202</td><td>ADVOCATE CONDELL MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140231</td><td>EDWARD HOSPITAL</td><td>IL</td></tr>
				<tr><td>140233</td><td>SAINT ANTHONY MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140252</td><td>NORTHWEST COMMUNITY HOSPITAL 1</td><td>IL</td></tr>
				<tr><td>140288</td><td>ADVOCATE GOOD SAMARITAN HOSPITAL</td><td>IL</td></tr>
				<tr><td>160064</td><td>MERCY MEDICAL CENTER-NORTH IOWA</td><td>IA</td></tr>
				<tr><td>160153</td><td>MERCY MEDICAL CENTER-SIOUX CITY</td><td>IA</td></tr>
				<tr><td>170012</td><td>SALINA REGIONAL HEALTH CENTER</td><td>KS</td></tr>
				<tr><td>170086</td><td>STORMONT VAIL HOSPITAL</td><td>KS</td></tr>
				<tr><td>170123</td><td>WESLEY MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>180038</td><td>OWENSBORO HEALTH REGIONAL HOSPITAL</td><td>KY</td></tr>
				<tr><td>180104</td><td>BAPTIST HEALTH PADUCAH</td><td>KY</td></tr>
				<tr><td>190039</td><td>WEST JEFFERSON MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190045</td><td>ST TAMMANY PARISH HOSPITAL</td><td>LA</td></tr>
				<tr><td>190060</td><td>LAKE CHARLES MEMORIAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>190102</td><td>OUR LADY OF LOURDES REGIONAL MEDICAL CENTER, INC</td><td>LA</td></tr>
				<tr><td>190146</td><td>EAST JEFFERSON GENERAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>200033</td><td>EASTERN MAINE MEDICAL CENTER</td><td>ME</td></tr>
				<tr><td>210005</td><td>FREDERICK MEMORIAL HOSPITAL</td><td>MD</td></tr>
				<tr><td>210015</td><td>MEDSTAR FRANKLIN SQUARE MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>210022</td><td>SUBURBAN HOSPITAL</td><td>MD</td></tr>
				<tr><td>210044</td><td>GREATER BALTIMORE MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>210057</td><td>ADVENTIST HEALTHCARE SHADY GROVE MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>220012</td><td>CAPE COD HOSPITAL</td><td>MA</td></tr>
				<tr><td>230002</td><td>ST MARY MERCY HOSPITAL</td><td>MI</td></tr>
				<tr><td>230021</td><td>LAKELAND HOSPITAL, ST JOSEPH</td><td>MI</td></tr>
				<tr><td>230047</td><td>HENRY FORD MACOMB HOSPITAL</td><td>MI</td></tr>
				<tr><td>230092</td><td>HENRY FORD ALLEGIANCE HEALTH</td><td>MI</td></tr>
				<tr><td>230269</td><td>BEAUMONT HOSPITAL, TROY</td><td>MI</td></tr>
				<tr><td>240053</td><td>PARK NICOLLET METHODIST HOSPITAL</td><td>MN</td></tr>
				<tr><td>240063</td><td>ST JOSEPH'S HOSPITAL</td><td>MN</td></tr>
				<tr><td>240115</td><td>MERCY HOSPITAL</td><td>MN</td></tr>
				<tr><td>250019</td><td>MEMORIAL HOSPITAL AT GULFPORT</td><td>MS</td></tr>
				<tr><td>260005</td><td>SSM HEALTH ST JOSEPH HOSPITAL-ST CHARLES</td><td>MO</td></tr>
				<tr><td>260068</td><td>BOONE HOSPITAL CENTER</td><td>MO</td></tr>
				<tr><td>260096</td><td>NORTH KANSAS CITY HOSPITAL</td><td>MO</td></tr>
				<tr><td>260179</td><td>ST LUKES HOSPITAL</td><td>MO</td></tr>
				<tr><td>270012</td><td>BENEFIS HOSPITALS INC</td><td>MT</td></tr>
				<tr><td>270014</td><td>ST PATRICK HOSPITAL</td><td>MT</td></tr>
				<tr><td>270049</td><td>ST VINCENT HEALTHCARE</td><td>MT</td></tr>
				<tr><td>270051</td><td>KALISPELL REGIONAL MEDICAL CENTER</td><td>MT</td></tr>
				<tr><td>280009</td><td>CHI HEALTH GOOD SAMARITAN</td><td>NE</td></tr>
				<tr><td>280023</td><td>CHI HEALTH ST FRANCIS</td><td>NE</td></tr>
				<tr><td>290009</td><td>SAINT MARY'S REGIONAL MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>300029</td><td>PORTSMOUTH REGIONAL HOSPITAL</td><td>NH</td></tr>
				<tr><td>310034</td><td>RIVERVIEW MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310111</td><td>CENTRASTATE MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>320002</td><td>CHRISTUS ST VINCENT REGIONAL MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>330045</td><td>HUNTINGTON HOSPITAL</td><td>NY</td></tr>
				<tr><td>330126</td><td>ORANGE REGIONAL MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>340073</td><td>DUKE HEALTH RALEIGH HOSPITAL</td><td>NC</td></tr>
				<tr><td>350002</td><td>CHI ST ALEXIUS HEALTH</td><td>ND</td></tr>
				<tr><td>360134</td><td>GOOD SAMARITAN HOSPITAL</td><td>OH</td></tr>
				<tr><td>360230</td><td>HILLCREST HOSPITAL</td><td>OH</td></tr>
				<tr><td>370008</td><td>NORMAN REGIONAL</td><td>OK</td></tr>
				<tr><td>380018</td><td>ASANTE ROGUE REGIONAL MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380047</td><td>ST CHARLES BEND</td><td>OR</td></tr>
				<tr><td>380051</td><td>SALEM HOSPITAL</td><td>OR</td></tr>
				<tr><td>380061</td><td>PROVIDENCE PORTLAND MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>390009</td><td>SAINT VINCENT HOSPITAL</td><td>PA</td></tr>
				<tr><td>390044</td><td>READING HOSPITAL</td><td>PA</td></tr>
				<tr><td>420065</td><td>BON SECOURS-ST FRANCIS XAVIER HOSPITAL</td><td>SC</td></tr>
				<tr><td>420073</td><td>LEXINGTON MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>430016</td><td>AVERA MCKENNAN HOSPITAL & UNIVERSITY HEALTH CENTER</td><td>SD</td></tr>
				<tr><td>440012</td><td>WELLMONT BRISTOL REGIONAL MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440173</td><td>PARKWEST MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>450010</td><td>UNITED REGIONAL HEALTH CARE SYSTEM</td><td>TX</td></tr>
				<tr><td>450015</td><td>PARKLAND HEALTH AND HOSPITAL SYSTEM</td><td>TX</td></tr>
				<tr><td>450046</td><td>CHRISTUS SPOHN HOSPITAL CORPUS CHRISTI</td><td>TX</td></tr>
				<tr><td>450132</td><td>MEDICAL CENTER HOSPITAL</td><td>TX</td></tr>
				<tr><td>450209</td><td>NORTHWEST TEXAS HOSPITAL</td><td>TX</td></tr>
				<tr><td>450211</td><td>CHI ST LUKES HEALTH MEMORIAL LUFKIN</td><td>TX</td></tr>
				<tr><td>450229</td><td>HENDRICK MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450231</td><td>BAPTIST ST ANTHONY'S HOSPITAL</td><td>TX</td></tr>
				<tr><td>450571</td><td>SHANNON MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450809</td><td>NORTH AUSTIN MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450862</td><td>ST LUKE'S THE WOODLANDS HOSPITAL</td><td>TX</td></tr>
				<tr><td>460001</td><td>UTAH VALLEY HOSPITAL</td><td>UT</td></tr>
				<tr><td>460021</td><td>DIXIE REGIONAL MEDICAL CENTER</td><td>UT</td></tr>
				<tr><td>490050</td><td>VIRGINIA HOSPITAL CENTER</td><td>VA</td></tr>
				<tr><td>490057</td><td>SENTARA VIRGINIA BEACH GENERAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490059</td><td>BON SECOURS ST MARYS HOSPITAL</td><td>VA</td></tr>
				<tr><td>500014</td><td>PROVIDENCE REGIONAL MEDICAL CENTER EVERETT</td><td>WA</td></tr>
				<tr><td>500016</td><td>CENTRAL WASHINGTON HOSPITAL</td><td>WA</td></tr>
				<tr><td>500044</td><td>MULTICARE DEACONESS HOSPITAL</td><td>WA</td></tr>
				<tr><td>500058</td><td>KADLEC REGIONAL MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500088</td><td>VALLEY MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>510055</td><td>CABELL HUNTINGTON HOSPITAL INC</td><td>WV</td></tr>
				<tr><td>520008</td><td>WAUKESHA MEMORIAL HOSPITAL</td><td>WI</td></tr>
				<tr><td>520045</td><td>THEDACARE REGIONAL MEDICAL CENTER - NEENAH INC</td><td>WI</td></tr>
				<tr><td>670024</td><td>NORTH CYPRESS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>670055</td><td>METHODIST STONE OAK HOSPITAL</td><td>TX</td></tr>
				<tr><td>050506</td><td>SIERRA VISTA REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050541</td><td>KAISER FOUNDATION HOSPITAL - REDWOOD CITY</td><td>CA</td></tr>
				<tr><td>060031</td><td>CENTURA HEALTH-PENROSE ST FRANCIS HEALTH SERVICES</td><td>CO</td></tr>
				<tr><td>210023</td><td>ANNE ARUNDEL MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>230302</td><td>HENRY FORD WEST BLOOMFIELD HOSPITAL</td><td>MI</td></tr>
				<tr><td>450034</td><td>CHRISTUS SOUTHEAST TEXAS- ST ELIZABETH</td><td>TX</td></tr>
				<tr><td>050424</td><td>SCRIPPS GREEN HOSPITAL</td><td>CA</td></tr>
				<tr><td>060027</td><td>FOOTHILLS HOSPITAL</td><td>CO</td></tr>
				<tr><td>100181</td><td>LARKIN COMMUNITY HOSPITAL</td><td>FL</td></tr>
				<tr><td>190065</td><td>BATON ROUGE GENERAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>230059</td><td>SAINT MARY'S HEALTH CARE</td><td>MI</td></tr>
				<tr><td>450024</td><td>UNIVERSITY MEDICAL CENTER OF EL PASO</td><td>TX</td></tr>
				<tr><td>050112</td><td>SANTA MONICA - UCLA MED CTR & ORTHOPAEDIC HOSPITAL</td><td>CA</td></tr>
				<tr><td>340131</td><td>CAROLINA EAST MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>370216</td><td>TULSA SPINE & SPECIALTY HOSPITAL, LLC</td><td>OK</td></tr>
				<tr><td>450718</td><td>ROUND ROCK MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>150166</td><td>PINNACLE HOSPITAL</td><td>IN</td></tr>
				<tr><td>450894</td><td>PINE CREEK MEDICAL CENTER LLP</td><td>TX</td></tr>
				<tr><td>170196</td><td>KANSAS SPINE & SPECIALTY HOSPITAL, LLC</td><td>KS</td></tr>
				<tr><td>040027</td><td>BAXTER REGIONAL MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>320009</td><td>LOVELACE MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>370018</td><td>JANE PHILLIPS MEMORIAL MEDICAL CENTER, INC</td><td>OK</td></tr>
				<tr><td>010139</td><td>BROOKWOOD BAPTIST MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>030013</td><td>YUMA REGIONAL MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030094</td><td>ABRAZO ARROWHEAD CAMPUS</td><td>AZ</td></tr>
				<tr><td>030101</td><td>WESTERN ARIZONA REGIONAL MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>050057</td><td>KAWEAH DELTA MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050084</td><td>ST JOSEPH'S MEDICAL CENTER OF STOCKTON</td><td>CA</td></tr>
				<tr><td>160045</td><td>ST LUKES HOSPITAL</td><td>IA</td></tr>
				<tr><td>190027</td><td>CHRISTUS ST PATRICK HOSPITAL</td><td>LA</td></tr>
				<tr><td>360025</td><td>FIRELANDS REGIONAL MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360145</td><td>UNIVERSITY HOSPITALS - ELYRIA MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>370215</td><td>OKLAHOMA HEART HOSPITAL, LLC</td><td>OK</td></tr>
				<tr><td>410012</td><td>THE MIRIAM HOSPITAL</td><td>RI</td></tr>
				<tr><td>430095</td><td>AVERA HEART HOSPITAL OF SOUTH DAKOTA</td><td>SD</td></tr>
				<tr><td>450851</td><td>BAYLOR SCOTT AND WHITE HEART AND VASCULAR HOSPITAL</td><td>TX</td></tr>
				<tr><td>450876</td><td>LUBBOCK HEART HOSPITAL LP</td><td>TX</td></tr>
				<tr><td>030105</td><td>BANNER HEART HOSPITAL</td><td>AZ</td></tr>
				<tr><td>010005</td><td>MARSHALL MEDICAL CENTER SOUTH</td><td>AL</td></tr>
				<tr><td>010006</td><td>ELIZA COFFEE MEMORIAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>010040</td><td>GADSDEN REGIONAL MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010085</td><td>DECATUR MORGAN HOSPITAL-DECATUR CAMPUS</td><td>AL</td></tr>
				<tr><td>010090</td><td>PROVIDENCE HOSPITAL</td><td>AL</td></tr>
				<tr><td>010104</td><td>GRANDVIEW MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>030011</td><td>ST JOSEPH'S HOSPITAL</td><td>AZ</td></tr>
				<tr><td>030061</td><td>BANNER BOSWELL MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>040010</td><td>MERCY HOSPITAL NORTHWEST ARKANSAS</td><td>AR</td></tr>
				<tr><td>040036</td><td>BAPTIST HEALTH MEDICAL CENTER NORTH LITTLE ROCK</td><td>AR</td></tr>
				<tr><td>040134</td><td>ARKANSAS HEART HOSPITAL, LLC</td><td>AR</td></tr>
				<tr><td>050013</td><td>ADVENTIST HEALTH ST HELENA</td><td>CA</td></tr>
				<tr><td>050133</td><td>RIDEOUT MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050197</td><td>SEQUOIA HOSPITAL</td><td>CA</td></tr>
				<tr><td>050573</td><td>EISENHOWER MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050764</td><td>SHASTA REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>080007</td><td>BEEBE MEDICAL CENTER</td><td>DE</td></tr>
				<tr><td>100002</td><td>BETHESDA HOSPITAL EAST</td><td>FL</td></tr>
				<tr><td>100023</td><td>CITRUS MEMORIAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100046</td><td>FLORIDA HOSPITAL ZEPHYRHILLS</td><td>FL</td></tr>
				<tr><td>100062</td><td>MUNROE REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100166</td><td>DOCTORS HOSPITAL OF SARASOTA</td><td>FL</td></tr>
				<tr><td>100290</td><td>VILLAGES REGIONAL HOSPITAL, THE</td><td>FL</td></tr>
				<tr><td>110005</td><td>NORTHSIDE HOSPITAL FORSYTH</td><td>GA</td></tr>
				<tr><td>110143</td><td>WELLSTAR COBB HOSPITAL</td><td>GA</td></tr>
				<tr><td>110168</td><td>REDMOND REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>140046</td><td>GOOD SAMARITAN REGIONAL HLTH CENTER</td><td>IL</td></tr>
				<tr><td>140116</td><td>CENTEGRA HEALTH SYSTEM - MC HENRY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140135</td><td>DECATUR MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140186</td><td>RIVERSIDE MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140209</td><td>METHODIST MEDICAL CENTER OF ILLINOIS</td><td>IL</td></tr>
				<tr><td>150009</td><td>CLARK MEMORIAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150012</td><td>SAINT JOSEPH REGIONAL MEDICAL CENTER</td><td>IN</td></tr>
				<tr><td>150034</td><td>ST MARY MEDICAL CENTER INC</td><td>IN</td></tr>
				<tr><td>150044</td><td>BAPTIST HEALTH FLOYD</td><td>IN</td></tr>
				<tr><td>150048</td><td>REID HEALTH</td><td>IN</td></tr>
				<tr><td>150074</td><td>COMMUNITY HOSPITAL EAST</td><td>IN</td></tr>
				<tr><td>150109</td><td>FRANCISCAN HEALTH LAFAYETTE</td><td>IN</td></tr>
				<tr><td>150112</td><td>COLUMBUS REGIONAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150125</td><td>COMMUNITY HOSPITAL</td><td>IN</td></tr>
				<tr><td>160069</td><td>MERCY MEDICAL CENTER-DUBUQUE</td><td>IA</td></tr>
				<tr><td>170137</td><td>LAWRENCE MEMORIAL HOSPITAL</td><td>KS</td></tr>
				<tr><td>170186</td><td>KANSAS HEART HOSPITAL</td><td>KS</td></tr>
				<tr><td>170197</td><td>KANSAS MEDICAL CENTER LLC</td><td>KS</td></tr>
				<tr><td>180009</td><td>KING'S DAUGHTERS' MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180013</td><td>THE MEDICAL CENTER AT BOWLING GREEN</td><td>KY</td></tr>
				<tr><td>190015</td><td>NORTH OAKS MEDICAL CENTER, L L C</td><td>LA</td></tr>
				<tr><td>190019</td><td>CHRISTUS ST FRANCES CABRINI HOSPITAL</td><td>LA</td></tr>
				<tr><td>190160</td><td>GLENWOOD REGIONAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190263</td><td>HEART HOSPITAL OF LAFAYETTE</td><td>LA</td></tr>
				<tr><td>210027</td><td>WESTERN MARYLAND REGIONAL MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>210033</td><td>CARROLL HOSPITAL CENTER</td><td>MD</td></tr>
				<tr><td>210063</td><td>UNIVERSITY OF MARYLAND ST JOSEPH MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>220176</td><td>ST VINCENT HOSPITAL</td><td>MA</td></tr>
				<tr><td>230054</td><td>UP HEALTH SYSTEM - MARQUETTE</td><td>MI</td></tr>
				<tr><td>230105</td><td>MCLAREN NORTHERN MICHIGAN</td><td>MI</td></tr>
				<tr><td>230197</td><td>GENESYS REGIONAL MEDICAL CENTER - HEALTH PARK</td><td>MI</td></tr>
				<tr><td>230222</td><td>MIDMICHIGAN MEDICAL CENTER-MIDLAND</td><td>MI</td></tr>
				<tr><td>250009</td><td>MAGNOLIA REGIONAL HEALTH CENTER</td><td>MS</td></tr>
				<tr><td>250040</td><td>SINGING RIVER HOSPITAL</td><td>MS</td></tr>
				<tr><td>260095</td><td>CENTERPOINT MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260183</td><td>SAINT FRANCIS MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>280128</td><td>CHI HEALTH NEBRASKA HEART</td><td>NE</td></tr>
				<tr><td>290053</td><td>ST ROSE DOMINICAN HOSPITALS - SAN MARTIN CAMPUS</td><td>NV</td></tr>
				<tr><td>300001</td><td>CONCORD HOSPITAL</td><td>NH</td></tr>
				<tr><td>300034</td><td>CATHOLIC MEDICAL CENTER</td><td>NH</td></tr>
				<tr><td>310052</td><td>OCEAN MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310057</td><td>VIRTUA MEMORIAL HOSPITAL OF BURLINGTON COUNTY</td><td>NJ</td></tr>
				<tr><td>320021</td><td>PRESBYTERIAN HOSPITAL</td><td>NM</td></tr>
				<tr><td>330057</td><td>ST PETER'S HOSPITAL</td><td>NY</td></tr>
				<tr><td>330078</td><td>SISTERS OF CHARITY HOSPITAL</td><td>NY</td></tr>
				<tr><td>330140</td><td>ST JOSEPH'S HOSPITAL HEALTH CENTER</td><td>NY</td></tr>
				<tr><td>330304</td><td>WHITE PLAINS HOSPITAL CENTER</td><td>NY</td></tr>
				<tr><td>350006</td><td>TRINITY HOSPITALS</td><td>ND</td></tr>
				<tr><td>350015</td><td>SANFORD MEDICAL CENTER BISMARCK</td><td>ND</td></tr>
				<tr><td>360008</td><td>SOUTHERN OHIO MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360012</td><td>MOUNT CARMEL ST ANN'S</td><td>OH</td></tr>
				<tr><td>360039</td><td>GENESIS HOSPITAL</td><td>OH</td></tr>
				<tr><td>360077</td><td>FAIRVIEW HOSPITAL</td><td>OH</td></tr>
				<tr><td>360155</td><td>SOUTHWEST GENERAL HEALTH CENTER</td><td>OH</td></tr>
				<tr><td>360159</td><td>ADENA REGIONAL MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360172</td><td>MERCY REGIONAL MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360211</td><td>TRINITY MEDICAL CTR EAST &TRINITY MEDICAL CTR WEST</td><td>OH</td></tr>
				<tr><td>360262</td><td>MERCY ST ANNE HOSPITAL</td><td>OH</td></tr>
				<tr><td>370234</td><td>OKLAHOMA HEART HOSPITAL SOUTH, LLC</td><td>OK</td></tr>
				<tr><td>390096</td><td>ST JOSEPH MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>420023</td><td>ST FRANCIS-DOWNTOWN</td><td>SC</td></tr>
				<tr><td>420026</td><td>PROVIDENCE HEALTH</td><td>SC</td></tr>
				<tr><td>440029</td><td>WILLIAMSON MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440189</td><td>TENNOVA HEALTHCARE-REGIONAL JACKSON</td><td>TN</td></tr>
				<tr><td>450237</td><td>CHRISTUS SANTA ROSA MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450558</td><td>ABILENE REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450684</td><td>MEMORIAL HERMANN NORTHEAST</td><td>TX</td></tr>
				<tr><td>450702</td><td>LONGVIEW REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>490004</td><td>SENTARA RMH MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490017</td><td>BON SECOURS MARYVIEW MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490042</td><td>CARILION NEW RIVER VALLEY MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>500030</td><td>ST JOSEPH MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500124</td><td>EVERGREENHEALTH MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>520021</td><td>FROEDTERT SOUTH - KENOSHA MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>520030</td><td>ASPIRUS WAUSAU HOSPITAL</td><td>WI</td></tr>
				<tr><td>520037</td><td>MARSHFIELD MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>520049</td><td>BELLIN MEMORIAL HOSPITAL</td><td>WI</td></tr>
				<tr><td>520075</td><td>ST VINCENT HOSPITAL</td><td>WI</td></tr>
				<tr><td>530012</td><td>WYOMING MEDICAL CENTER</td><td>WY</td></tr>
				<tr><td>530014</td><td>CHEYENNE REGIONAL MEDICAL CENTER</td><td>WY</td></tr>
				<tr><td>010016</td><td>SHELBY BAPTIST MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010100</td><td>THOMAS HOSPITAL</td><td>AL</td></tr>
				<tr><td>020012</td><td>FAIRBANKS MEMORIAL HOSPITAL</td><td>AK</td></tr>
				<tr><td>020017</td><td>ALASKA REGIONAL HOSPITAL</td><td>AK</td></tr>
				<tr><td>030069</td><td>HAVASU REGIONAL MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030092</td><td>HONORHEALTH DEER VALLEY MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030121</td><td>MOUNTAIN VISTA MEDICAL CENTER, LP</td><td>AZ</td></tr>
				<tr><td>040020</td><td>ST BERNARDS MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040078</td><td>NATIONAL PARK MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040118</td><td>NEA BAPTIST MEMORIAL HOSPITAL</td><td>AR</td></tr>
				<tr><td>050006</td><td>ST JOSEPH HOSPITAL</td><td>CA</td></tr>
				<tr><td>050017</td><td>MERCY GENERAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050036</td><td>BAKERSFIELD MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050128</td><td>TRI-CITY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050232</td><td>FRENCH HOSPITAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050334</td><td>SALINAS VALLEY MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050351</td><td>TORRANCE MEMORIAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050394</td><td>COMMUNITY MEMORIAL HOSPITAL SAN BUENAVENTURA</td><td>CA</td></tr>
				<tr><td>050498</td><td>SUTTER AUBURN FAITH HOSPITAL</td><td>CA</td></tr>
				<tr><td>050761</td><td>PROVIDENCE TARZANA MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050770</td><td>LOMA LINDA UNIVERSITY MEDICAL CENTER-MURRIETA</td><td>CA</td></tr>
				<tr><td>060028</td><td>SAINT JOSEPH HOSPITAL</td><td>CO</td></tr>
				<tr><td>060064</td><td>CENTURA HEALTH-PORTER ADVENTIST HOSPITAL</td><td>CO</td></tr>
				<tr><td>060100</td><td>MEDICAL CENTER OF AURORA, THE</td><td>CO</td></tr>
				<tr><td>070016</td><td>SAINT MARY'S HOSPITAL</td><td>CT</td></tr>
				<tr><td>070020</td><td>MIDDLESEX HOSPITAL</td><td>CT</td></tr>
				<tr><td>070027</td><td>MANCHESTER MEMORIAL HOSPITAL</td><td>CT</td></tr>
				<tr><td>070028</td><td>ST VINCENT'S MEDICAL CENTER</td><td>CT</td></tr>
				<tr><td>070033</td><td>DANBURY HOSPITAL</td><td>CT</td></tr>
				<tr><td>100035</td><td>MANATEE MEMORIAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100052</td><td>WINTER HAVEN HOSPITAL</td><td>FL</td></tr>
				<tr><td>100070</td><td>VENICE REGIONAL MEDICAL CENTER - BAYFRONT HEALTH</td><td>FL</td></tr>
				<tr><td>100072</td><td>FLORIDA HOSPITAL FISH MEMORIAL</td><td>FL</td></tr>
				<tr><td>100077</td><td>BAYFRONT HEALTH PORT CHARLOTTE</td><td>FL</td></tr>
				<tr><td>100090</td><td>FLAGLER HOSPITAL</td><td>FL</td></tr>
				<tr><td>100092</td><td>STEWARD ROCKLEDGE HOSPITAL</td><td>FL</td></tr>
				<tr><td>100093</td><td>BAPTIST HOSPITAL</td><td>FL</td></tr>
				<tr><td>100109</td><td>FLORIDA HOSPITAL HEARTLAND MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100176</td><td>PALM BEACH GARDENS MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100223</td><td>FORT WALTON BEACH MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100231</td><td>WEST FLORIDA HOSPITAL</td><td>FL</td></tr>
				<tr><td>100244</td><td>CAPE CORAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100248</td><td>LARGO MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100253</td><td>JUPITER MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100260</td><td>ST LUCIE MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100264</td><td>OAK HILL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100265</td><td>MEASE COUNTRYSIDE HOSPITAL</td><td>FL</td></tr>
				<tr><td>100286</td><td>PHYSICIANS REGIONAL MEDICAL CENTER - PINE RIDGE</td><td>FL</td></tr>
				<tr><td>110011</td><td>TANNER MEDICAL CENTER - CARROLLTON</td><td>GA</td></tr>
				<tr><td>110038</td><td>JOHN D ARCHBOLD MEMORIAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110075</td><td>EAST GEORGIA REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110122</td><td>SOUTH GEORGIA MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110165</td><td>SOUTHERN REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110229</td><td>PIEDMONT NEWNAN HOSPITAL, INC</td><td>GA</td></tr>
				<tr><td>130002</td><td>ST LUKE'S MAGIC VALLEY RMC</td><td>ID</td></tr>
				<tr><td>140043</td><td>CGH MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140062</td><td>PALOS COMMUNITY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140113</td><td>PRESENCE COVENANT MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140162</td><td>ST JOSEPH MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140164</td><td>MEMORIAL HOSPITAL OF CARBONDALE</td><td>IL</td></tr>
				<tr><td>140174</td><td>PRESENCE MERCY MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140200</td><td>ELMHURST MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140211</td><td>DELNOR COMMUNITY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140213</td><td>SILVER CROSS HOSPITAL  AND MEDICAL CENTERS</td><td>IL</td></tr>
				<tr><td>140228</td><td>SWEDISH AMERICAN HOSPITAL</td><td>IL</td></tr>
				<tr><td>140280</td><td>TRINITY ROCK ISLAND</td><td>IL</td></tr>
				<tr><td>150006</td><td>LA PORTE HOSPITAL</td><td>IN</td></tr>
				<tr><td>150018</td><td>ELKHART GENERAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150023</td><td>UNION HOSPITAL INC</td><td>IN</td></tr>
				<tr><td>150042</td><td>GOOD SAMARITAN HOSPITAL</td><td>IN</td></tr>
				<tr><td>150046</td><td>TERRE HAUTE REGIONAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150051</td><td>INDIANA UNIVERSITY HEALTH BLOOMINGTON HOSPITAL</td><td>IN</td></tr>
				<tr><td>150090</td><td>FRANCISCAN HEALTH DYER</td><td>IN</td></tr>
				<tr><td>150115</td><td>MEMORIAL HOSPITAL AND HEALTH CARE CENTER</td><td>IN</td></tr>
				<tr><td>150126</td><td>FRANCISCAN HEALTH CROWN POINT</td><td>IN</td></tr>
				<tr><td>150173</td><td>INDIANA UNIVERSITY HEALTH ARNETT HOSPITAL</td><td>IN</td></tr>
				<tr><td>150175</td><td>THE HEART HOSPITAL AT DEACONESS GATEWAY LLC</td><td>IN</td></tr>
				<tr><td>160016</td><td>TRINITY REGIONAL MEDICAL CENTER</td><td>IA</td></tr>
				<tr><td>160033</td><td>GENESIS MEDICAL CENTER-DAVENPORT</td><td>IA</td></tr>
				<tr><td>160079</td><td>MERCY MEDICAL CENTER - CEDAR RAPIDS</td><td>IA</td></tr>
				<tr><td>160110</td><td>ALLEN HOSPITAL</td><td>IA</td></tr>
				<tr><td>170013</td><td>HAYS MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>170016</td><td>UNIVERSITY OF KANSAS HLTH SYSTEM ST FRANCIS CAMPUS</td><td>KS</td></tr>
				<tr><td>170020</td><td>HUTCHINSON REGIONAL MEDICAL CENTER INC</td><td>KS</td></tr>
				<tr><td>170049</td><td>OLATHE MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>170104</td><td>SHAWNEE MISSION MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>170182</td><td>MENORAH MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>180102</td><td>LOURDES HOSPITAL</td><td>KY</td></tr>
				<tr><td>180132</td><td>LAKE CUMBERLAND REGIONAL HOSPITAL</td><td>KY</td></tr>
				<tr><td>190004</td><td>THIBODAUX REGIONAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190040</td><td>SLIDELL MEMORIAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>190041</td><td>CHRISTUS HEALTH SHREVEPORT - BOSSIER</td><td>LA</td></tr>
				<tr><td>190054</td><td>IBERIA GENERAL HOSPITAL AND MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190125</td><td>ST FRANCIS MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190250</td><td>LOUISIANA HEART HOSPITAL</td><td>LA</td></tr>
				<tr><td>210001</td><td>MERITUS MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>210008</td><td>MERCY MEDICAL CENTER INC</td><td>MD</td></tr>
				<tr><td>210011</td><td>SAINT AGNES HOSPITAL</td><td>MD</td></tr>
				<tr><td>210032</td><td>UNION HOSPITAL OF CECIL COUNTY</td><td>MD</td></tr>
				<tr><td>220020</td><td>SAINT ANNE'S HOSPITAL</td><td>MA</td></tr>
				<tr><td>220035</td><td>NORTH SHORE MEDICAL CENTER -</td><td>MA</td></tr>
				<tr><td>220046</td><td>BERKSHIRE MEDICAL CENTER INC - 1</td><td>MA</td></tr>
				<tr><td>220063</td><td>LOWELL GENERAL HOSPITAL</td><td>MA</td></tr>
				<tr><td>220066</td><td>MERCY MEDICAL CTR</td><td>MA</td></tr>
				<tr><td>220070</td><td>HALLMARK HEALTH SYSTEM</td><td>MA</td></tr>
				<tr><td>220080</td><td>HOLY FAMILY HOSPITAL</td><td>MA</td></tr>
				<tr><td>220101</td><td>NEWTON-WELLESLEY HOSPITAL</td><td>MA</td></tr>
				<tr><td>220111</td><td>GOOD SAMARITAN MEDICAL CENTER</td><td>MA</td></tr>
				<tr><td>220126</td><td>NORWOOD HOSPITAL</td><td>MA</td></tr>
				<tr><td>220135</td><td>FALMOUTH HOSPITAL</td><td>MA</td></tr>
				<tr><td>230075</td><td>BRONSON BATTLE CREEK HOSPITAL</td><td>MI</td></tr>
				<tr><td>230217</td><td>OAKLAWN HOSPITAL</td><td>MI</td></tr>
				<tr><td>240047</td><td>ST LUKES HOSPITAL</td><td>MN</td></tr>
				<tr><td>250031</td><td>MERIT HEALTH RIVER REGION</td><td>MS</td></tr>
				<tr><td>250034</td><td>BAPTIST MEMORIAL HOSPITAL NORTH MS</td><td>MS</td></tr>
				<tr><td>250094</td><td>MERIT HEALTH WESLEY</td><td>MS</td></tr>
				<tr><td>250097</td><td>SOUTHWEST MS REGIONAL MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>250104</td><td>ANDERSON REGIONAL MEDICAL CTR</td><td>MS</td></tr>
				<tr><td>260006</td><td>MOSAIC LIFE CARE AT ST JOSEPH</td><td>MO</td></tr>
				<tr><td>260011</td><td>SSM HEALTH ST. MARY'S HOSPITAL - JEFFERSON CITY</td><td>MO</td></tr>
				<tr><td>260047</td><td>CAPITAL REGION MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260177</td><td>LIBERTY HOSPITAL</td><td>MO</td></tr>
				<tr><td>260186</td><td>LAKE REGIONAL HEALTH SYSTEM</td><td>MO</td></tr>
				<tr><td>280020</td><td>CHI HEALTH ST ELIZABETH</td><td>NE</td></tr>
				<tr><td>280125</td><td>FAITH REGIONAL HEALTH SERVICES</td><td>NE</td></tr>
				<tr><td>290019</td><td>CARSON TAHOE REGIONAL MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>300012</td><td>ELLIOT HOSPITAL</td><td>NH</td></tr>
				<tr><td>300023</td><td>EXETER HOSPITAL INC</td><td>NH</td></tr>
				<tr><td>310008</td><td>HOLY NAME MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310010</td><td>UNIV MEDICAL CENTER OF PRINCETON AT PLAINSBORO</td><td>NJ</td></tr>
				<tr><td>310011</td><td>CAPE REGIONAL MEDICAL CENTER INC</td><td>NJ</td></tr>
				<tr><td>310031</td><td>DEBORAH HEART AND LUNG CENTER</td><td>NJ</td></tr>
				<tr><td>310045</td><td>ENGLEWOOD HOSPITAL AND MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310075</td><td>MONMOUTH MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310112</td><td>BAYSHORE MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>320086</td><td>LOVELACE REGIONAL HOSPITAL - ROSWELL</td><td>NM</td></tr>
				<tr><td>330044</td><td>FAXTON-ST LUKE'S HEALTHCARE</td><td>NY</td></tr>
				<tr><td>330107</td><td>PECONIC BAY MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330136</td><td>MARY IMOGENE BASSETT HOSPITAL</td><td>NY</td></tr>
				<tr><td>330153</td><td>ELLIS HOSPITAL</td><td>NY</td></tr>
				<tr><td>330180</td><td>SAMARITAN HOSPITAL</td><td>NY</td></tr>
				<tr><td>330185</td><td>JOHN T MATHER MEMORIAL HOSPITAL  OF PORT JEFFERSON</td><td>NY</td></tr>
				<tr><td>330191</td><td>GLENS FALLS HOSPITAL</td><td>NY</td></tr>
				<tr><td>330224</td><td>HEALTHALLIANCE HOSPITAL MARYS AVENUE CAMPUS</td><td>NY</td></tr>
				<tr><td>330245</td><td>ST ELIZABETH MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330250</td><td>CHAMPLAIN VALLEY PHYSICIANS HOSPITAL MEDICAL CTR</td><td>NY</td></tr>
				<tr><td>330340</td><td>UNIVERSITY HOSPITAL -  STONY BROOK SOUTHAMPTON</td><td>NY</td></tr>
				<tr><td>340017</td><td>MARGARET R PARDEE MEMORIAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340021</td><td>CAROLINAS HEALTHCARE SYSTEM CLEVELAND</td><td>NC</td></tr>
				<tr><td>340090</td><td>JOHNSTON HEALTH</td><td>NC</td></tr>
				<tr><td>340109</td><td>SENTARA ALBEMARLE MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340116</td><td>FRYE REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340143</td><td>CATAWBA VALLEY MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340158</td><td>NOVANT HEALTH BRUNSWICK MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>350019</td><td>ALTRU HOSPITAL</td><td>ND</td></tr>
				<tr><td>350070</td><td>ESSENTIA HEALTH FARGO</td><td>ND</td></tr>
				<tr><td>360009</td><td>LIMA MEMORIAL HEALTH SYSTEM</td><td>OH</td></tr>
				<tr><td>360052</td><td>GOOD SAMARITAN HOSPITAL</td><td>OH</td></tr>
				<tr><td>360056</td><td>MERCY HOSPITAL FAIRFIELD</td><td>OH</td></tr>
				<tr><td>360066</td><td>ST RITA'S MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360070</td><td>MERCY MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360086</td><td>SPRINGFIELD REGIONAL MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360095</td><td>BLANCHARD VALLEY HOSPITAL</td><td>OH</td></tr>
				<tr><td>360098</td><td>LAKE HEALTH</td><td>OH</td></tr>
				<tr><td>360133</td><td>GRANDVIEW HOSPITAL & MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360147</td><td>MARIETTA MEMORIAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360175</td><td>CLINTON MEMORIAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360179</td><td>BETHESDA NORTH</td><td>OH</td></tr>
				<tr><td>380014</td><td>GOOD SAMARITAN REGIONAL MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380020</td><td>MCKENZIE-WILLAMETTE MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380075</td><td>PROVIDENCE MEDFORD MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>390001</td><td>GEISINGER-COMMUNITY MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390004</td><td>HOLY SPIRIT HOSPITAL</td><td>PA</td></tr>
				<tr><td>390013</td><td>EVANGELICAL COMMUNITY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390031</td><td>LEHIGH VALLEY HOSPITAL-SCHUYLKILL E. NORWEGIAN STR</td><td>PA</td></tr>
				<tr><td>390125</td><td>WAYNE MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390127</td><td>PHOENIXVILLE HOSPITAL</td><td>PA</td></tr>
				<tr><td>390137</td><td>WILKES-BARRE GENERAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390153</td><td>MAIN LINE HOSPITAL PAOLI</td><td>PA</td></tr>
				<tr><td>390168</td><td>BUTLER MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390179</td><td>CHESTER COUNTY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390201</td><td>LEHIGH VALLEY HOSPITAL - POCONO</td><td>PA</td></tr>
				<tr><td>390203</td><td>DOYLESTOWN HOSPITAL</td><td>PA</td></tr>
				<tr><td>390265</td><td>JEFFERSON HOSPITAL</td><td>PA</td></tr>
				<tr><td>390329</td><td>EINSTEIN MEDICAL CENTER MONTGOMERY</td><td>PA</td></tr>
				<tr><td>410009</td><td>KENT COUNTY MEMORIAL HOSPITAL</td><td>RI</td></tr>
				<tr><td>420027</td><td>ANMED HEALTH</td><td>SC</td></tr>
				<tr><td>420067</td><td>BEAUFORT COUNTY MEMORIAL HOSPITAL</td><td>SC</td></tr>
				<tr><td>420071</td><td>SELF REGIONAL HEALTHCARE</td><td>SC</td></tr>
				<tr><td>420080</td><td>HILTON HEAD REGIONAL MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420091</td><td>CAROLINAS HOSPITAL SYSTEM</td><td>SC</td></tr>
				<tr><td>420105</td><td>MCLEOD LORIS  HOSPITAL</td><td>SC</td></tr>
				<tr><td>430012</td><td>AVERA SACRED HEART HOSPITAL</td><td>SD</td></tr>
				<tr><td>440034</td><td>METHODIST MEDICAL CENTER OF OAK RIDGE</td><td>TN</td></tr>
				<tr><td>440053</td><td>SAINT THOMAS RUTHERFORD HOSPITAL</td><td>TN</td></tr>
				<tr><td>440073</td><td>MAURY REGIONAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440150</td><td>TRISTAR SUMMIT MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440156</td><td>PARKRIDGE MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440194</td><td>TRISTAR HENDERSONVILLE MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>450023</td><td>CITIZENS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450037</td><td>CHRISTUS GOOD SHEPHERD MEDICAL CENTER- LONGVIEW</td><td>TX</td></tr>
				<tr><td>450042</td><td>PROVIDENCE HEALTH CENTER</td><td>TX</td></tr>
				<tr><td>450079</td><td>BAYLOR MEDICAL CENTER AT IRVING</td><td>TX</td></tr>
				<tr><td>450133</td><td>MIDLAND MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450200</td><td>WADLEY REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450346</td><td>BAPTIST BEAUMONT HOSPITAL</td><td>TX</td></tr>
				<tr><td>450484</td><td>WOODLAND HEIGHTS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450518</td><td>THE MEDICAL CENTER OF SOUTHEAST TEXAS</td><td>TX</td></tr>
				<tr><td>450610</td><td>MEMORIAL HERMANN MEMORIAL CITY MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450644</td><td>WEST HOUSTON MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450656</td><td>NACOGDOCHES MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450677</td><td>TEXAS HEALTH HUGULEY HOSPITAL FORT WORTH SOUTH</td><td>TX</td></tr>
				<tr><td>450743</td><td>TEXAS HEALTH PRESBYTERIAN HOSPITAL DENTON</td><td>TX</td></tr>
				<tr><td>450788</td><td>CORPUS CHRISTI MEDICAL CENTER,THE</td><td>TX</td></tr>
				<tr><td>450801</td><td>CHRISTUS ST MICHAEL HEALTH SYSTEM</td><td>TX</td></tr>
				<tr><td>450893</td><td>THE HEART HOSPITAL BAYLOR DENTON</td><td>TX</td></tr>
				<tr><td>490066</td><td>SENTARA WILLIAMSBURG REGIONAL MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490069</td><td>BON SECOURS MEMORIAL REGIONAL MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490093</td><td>SENTARA CAREPLEX HOSPITAL</td><td>VA</td></tr>
				<tr><td>490101</td><td>INOVA FAIR OAKS HOSPITAL</td><td>VA</td></tr>
				<tr><td>490107</td><td>RESTON HOSPITAL CENTER</td><td>VA</td></tr>
				<tr><td>500002</td><td>PROVIDENCE ST MARY MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500012</td><td>YAKIMA REGIONAL MEDICAL AND CARDIAC CENTER</td><td>WA</td></tr>
				<tr><td>500036</td><td>YAKIMA VALLEY MEMORIAL HOSPITAL</td><td>WA</td></tr>
				<tr><td>500039</td><td>HARRISON MEMORIAL HOSPITAL</td><td>WA</td></tr>
				<tr><td>500051</td><td>OVERLAKE HOSPITAL MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500139</td><td>CAPITAL MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>510006</td><td>UNITED HOSPITAL CENTER</td><td>WV</td></tr>
				<tr><td>510024</td><td>MONONGALIA COUNTY GENERAL HOSPITAL</td><td>WV</td></tr>
				<tr><td>510050</td><td>WHEELING HOSPITAL</td><td>WV</td></tr>
				<tr><td>510058</td><td>CAMDEN CLARK MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>510070</td><td>RALEIGH GENERAL HOSPITAL</td><td>WV</td></tr>
				<tr><td>520004</td><td>MAYO CLINIC HLTH SYSTEM  FRANCISCAN MED CTR</td><td>WI</td></tr>
				<tr><td>520027</td><td>COLUMBIA ST MARYS HOSPITAL OZAUKEE</td><td>WI</td></tr>
				<tr><td>520059</td><td>AURORA MEMORIAL HOSPITAL BURLINGTON</td><td>WI</td></tr>
				<tr><td>520070</td><td>MAYO CLINIC HEALTH SYSTEM IN EAU CLAIRE</td><td>WI</td></tr>
				<tr><td>520160</td><td>THEDACARE REGIONAL MEDICAL CENTER - APPLETON INC</td><td>WI</td></tr>
				<tr><td>520207</td><td>AURORA MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>670077</td><td>HOUSTON METHODIST WEST HOSPITAL</td><td>TX</td></tr>
				<tr><td>040119</td><td>WHITE RIVER MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>080006</td><td>NANTICOKE MEMORIAL HOSPITAL</td><td>DE</td></tr>
				<tr><td>490122</td><td>INOVA MOUNT VERNON HOSPITAL</td><td>VA</td></tr>
				<tr><td>050169</td><td>PRESBYTERIAN INTERCOMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050353</td><td>PROVIDENCE LITTLE COMPANY OF MARY MED CTR TORRANCE</td><td>CA</td></tr>
				<tr><td>050503</td><td>SCRIPPS MEMORIAL HOSPITAL - ENCINITAS</td><td>CA</td></tr>
				<tr><td>070034</td><td>NORWALK HOSPITAL ASSOCIATION</td><td>CT</td></tr>
				<tr><td>100287</td><td>GOOD SAMARITAN MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>140191</td><td>INGALLS MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>250141</td><td>BAPTIST MEMORIAL HOSPITAL DESOTO</td><td>MS</td></tr>
				<tr><td>310048</td><td>ROBERT WOOD JOHNSON UNIVERSITY HOSPITAL SOMERSET</td><td>NJ</td></tr>
				<tr><td>330226</td><td>UNITY HOSPITAL OF ROCHESTER</td><td>NY</td></tr>
				<tr><td>390151</td><td>CHAMBERSBURG HOSPITAL</td><td>PA</td></tr>
				<tr><td>050586</td><td>CHINO VALLEY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050755</td><td>SHERMAN OAKS HOSPITAL</td><td>CA</td></tr>
				<tr><td>110191</td><td>PIEDMONT HENRY HOSPITAL</td><td>GA</td></tr>
				<tr><td>140179</td><td>LITTLE COMPANY OF MARY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140250</td><td>ADVOCATE SOUTH SUBURBAN HOSPITAL</td><td>IL</td></tr>
				<tr><td>210051</td><td>DOCTORS'  COMMUNITY HOSPITAL</td><td>MD</td></tr>
				<tr><td>210055</td><td>UNIVERSITY OF MD LAUREL REGIONAL HOSPITAL</td><td>MD</td></tr>
				<tr><td>210056</td><td>MEDSTAR GOOD SAMARITAN HOSPITAL</td><td>MD</td></tr>
				<tr><td>210058</td><td>UNIV OF MD REHABILITATION &  ORTHOPAEDIC INSTITUTE</td><td>MD</td></tr>
				<tr><td>210064</td><td>LEVINDALE HEBREW GERIATRIC CENTER AND HOSPITAL</td><td>MD</td></tr>
				<tr><td>220052</td><td>SIGNATURE HEALTHCARE BROCKTON HOSPITAL</td><td>MA</td></tr>
				<tr><td>290041</td><td>SUMMERLIN HOSPITAL MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>330019</td><td>NEW YORK COMMUNITY HOSPITAL OF BROOKLYN, INC.</td><td>NY</td></tr>
				<tr><td>370106</td><td>INTEGRIS SOUTHWEST MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>450847</td><td>MEMORIAL HERMANN KATY HOSPITAL</td><td>TX</td></tr>
				<tr><td>490110</td><td>LEWISGALE HOSPITAL MONTGOMERY</td><td>VA</td></tr>
				<tr><td>500001</td><td>NORTHWEST HOSPITAL</td><td>WA</td></tr>
				<tr><td>500050</td><td>PEACEHEALTH SOUTHWEST MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>010131</td><td>CRESTWOOD MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>030088</td><td>BANNER BAYWOOD MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>040014</td><td>WHITE COUNTY MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>050043</td><td>ALTA BATES SUMMIT MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050099</td><td>SAN ANTONIO REGIONAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050121</td><td>ADVENTIST HEALTH HANFORD</td><td>CA</td></tr>
				<tr><td>050153</td><td>O'CONNOR HOSPITAL</td><td>CA</td></tr>
				<tr><td>050236</td><td>ADVENTIST HEALTH SIMI VALLEY</td><td>CA</td></tr>
				<tr><td>050276</td><td>CONTRA COSTA REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050320</td><td>HIGHLAND HOSPITAL</td><td>CA</td></tr>
				<tr><td>050350</td><td>BEVERLY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050551</td><td>LOS ALAMITOS MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050624</td><td>HENRY MAYO NEWHALL  HOSPITAL</td><td>CA</td></tr>
				<tr><td>060114</td><td>PARKER ADVENTIST HOSPITAL</td><td>CO</td></tr>
				<tr><td>070006</td><td>STAMFORD HOSPITAL</td><td>CT</td></tr>
				<tr><td>070007</td><td>LAWRENCE & MEMORIAL HOSPITAL</td><td>CT</td></tr>
				<tr><td>070035</td><td>HOSPITAL OF CENTRAL CONNECTICUT, THE</td><td>CT</td></tr>
				<tr><td>070036</td><td>JOHN DEMPSEY HOSPITAL</td><td>CT</td></tr>
				<tr><td>090006</td><td>PROVIDENCE HOSPITAL</td><td>DC</td></tr>
				<tr><td>100030</td><td>HEALTH CENTRAL</td><td>FL</td></tr>
				<tr><td>100043</td><td>MEASE DUNEDIN HOSPITAL</td><td>FL</td></tr>
				<tr><td>100047</td><td>BAYFRONT HEALTH PUNTA GORDA</td><td>FL</td></tr>
				<tr><td>100050</td><td>LARKIN COMMUNITY HOSPITAL PALM SPRINGS CAMPUS</td><td>FL</td></tr>
				<tr><td>100071</td><td>BAYFRONT HEALTH BROOKSVILLE</td><td>FL</td></tr>
				<tr><td>100137</td><td>HEART OF FLORIDA REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100156</td><td>LAKE CITY MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100189</td><td>NORTHWEST MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100191</td><td>MEDICAL CENTER OF TRINITY</td><td>FL</td></tr>
				<tr><td>100217</td><td>STEWARD SEBASTIAN RIVER MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100224</td><td>UNIVERSITY HOSPITAL AND MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100232</td><td>PUTNAM COMMUNITY MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100254</td><td>CAPITAL REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100259</td><td>SOUTH BAY HOSPITAL</td><td>FL</td></tr>
				<tr><td>110001</td><td>HAMILTON MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110024</td><td>CANDLER HOSPITAL</td><td>GA</td></tr>
				<tr><td>110031</td><td>WELLSTAR SPALDING REGIONAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110187</td><td>CHESTATEE REGIONAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110192</td><td>EASTSIDE MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>140002</td><td>ALTON MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140049</td><td>WEST SUBURBAN MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140065</td><td>ADVENTIST LA GRANGE MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140082</td><td>LOUIS A WEISS MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140084</td><td>VISTA MEDICAL CENTER EAST</td><td>IL</td></tr>
				<tr><td>140114</td><td>SWEDISH COVENANT HOSPITAL</td><td>IL</td></tr>
				<tr><td>140122</td><td>ADVENTIST HINSDALE HOSPITAL</td><td>IL</td></tr>
				<tr><td>140124</td><td>JOHN H STROGER JR HOSPITAL</td><td>IL</td></tr>
				<tr><td>140133</td><td>HOLY CROSS HOSPITAL</td><td>IL</td></tr>
				<tr><td>140155</td><td>PRESENCE ST MARYS HOSPITAL</td><td>IL</td></tr>
				<tr><td>140158</td><td>MERCY HOSPITAL AND MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140172</td><td>FRANCISCAN HEALTH OLYMPIA & CHICAGO HEIGHTS</td><td>IL</td></tr>
				<tr><td>140180</td><td>PRESENCE SAINTS MARY AND ELIZABETH MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140182</td><td>ADVOCATE ILLINOIS MASONIC MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140224</td><td>PRESENCE SAINT JOSEPH HOSPITAL - CHICAGO</td><td>IL</td></tr>
				<tr><td>140290</td><td>ST ALEXIUS MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>150004</td><td>FRANCISCAN HEALTH HAMMOND</td><td>IN</td></tr>
				<tr><td>150007</td><td>COMMUNITY HOWARD REGIONAL HEALTH INC</td><td>IN</td></tr>
				<tr><td>150008</td><td>ST CATHERINE HOSPITAL INC</td><td>IN</td></tr>
				<tr><td>150024</td><td>ESKENAZI HEALTH</td><td>IN</td></tr>
				<tr><td>150128</td><td>COMMUNITY HOSPITAL SOUTH</td><td>IN</td></tr>
				<tr><td>150158</td><td>IU HEALTH WEST HOSPITAL</td><td>IN</td></tr>
				<tr><td>180001</td><td>ST ELIZABETH FT THOMAS</td><td>KY</td></tr>
				<tr><td>180012</td><td>HARDIN MEMORIAL HOSPITAL</td><td>KY</td></tr>
				<tr><td>180045</td><td>ST ELIZABETH FLORENCE</td><td>KY</td></tr>
				<tr><td>190177</td><td>LAKEVIEW REGIONAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>200021</td><td>MID COAST HOSPITAL</td><td>ME</td></tr>
				<tr><td>200039</td><td>MAINEGENERAL MEDICAL CENTER</td><td>ME</td></tr>
				<tr><td>210006</td><td>UNIVERSITY OF MARYLAND HARFORD MEMORIAL HOSPITAL</td><td>MD</td></tr>
				<tr><td>210018</td><td>MEDSTAR MONTGOMERY MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>210024</td><td>MEDSTAR UNION MEMORIAL HOSPITAL</td><td>MD</td></tr>
				<tr><td>210037</td><td>UNIVERSITY OF MD SHORE MEDICAL CENTER AT EASTON</td><td>MD</td></tr>
				<tr><td>210040</td><td>NORTHWEST HOSPITAL CENTER</td><td>MD</td></tr>
				<tr><td>210048</td><td>HOWARD COUNTY GENERAL HOSPITAL</td><td>MD</td></tr>
				<tr><td>210062</td><td>MEDSTAR SOUTHERN MARYLAND HOSPITAL CENTER</td><td>MD</td></tr>
				<tr><td>220002</td><td>MOUNT AUBURN HOSPITAL</td><td>MA</td></tr>
				<tr><td>220008</td><td>STURDY MEMORIAL HOSPITAL</td><td>MA</td></tr>
				<tr><td>220010</td><td>LAWRENCE GENERAL HOSPITAL</td><td>MA</td></tr>
				<tr><td>220015</td><td>COOLEY DICKINSON HOSPITAL INC,THE</td><td>MA</td></tr>
				<tr><td>220033</td><td>BEVERLY HOSPITAL CORPORATION</td><td>MA</td></tr>
				<tr><td>220090</td><td>MILFORD REGIONAL MEDICAL CENTER</td><td>MA</td></tr>
				<tr><td>220105</td><td>WINCHESTER HOSPITAL</td><td>MA</td></tr>
				<tr><td>220119</td><td>BRIGHAM AND WOMEN'S FAULKNER HOSPITAL</td><td>MA</td></tr>
				<tr><td>220175</td><td>METROWEST MEDICAL CENTER</td><td>MA</td></tr>
				<tr><td>230142</td><td>BEAUMONT HOSPITAL - WAYNE</td><td>MI</td></tr>
				<tr><td>230167</td><td>MCLAREN GREATER LANSING</td><td>MI</td></tr>
				<tr><td>230254</td><td>ASCENSION CRITTENTON HOSPITAL</td><td>MI</td></tr>
				<tr><td>230277</td><td>HURON VALLEY-SINAI HOSPITAL</td><td>MI</td></tr>
				<tr><td>240093</td><td>MAYO CLINIC HEALTH SYSTEM - MANKATO</td><td>MN</td></tr>
				<tr><td>240210</td><td>HEALTHEAST ST JOHN'S HOSPITAL</td><td>MN</td></tr>
				<tr><td>250151</td><td>ALLIANCE HEALTH CENTER</td><td>MS</td></tr>
				<tr><td>260048</td><td>TRUMAN MEDICAL CENTER HOSPITAL HILL</td><td>MO</td></tr>
				<tr><td>260102</td><td>TRUMAN MEDICAL CENTER LAKEWOOD</td><td>MO</td></tr>
				<tr><td>260200</td><td>SSM HEALTH SAINT JOSEPH HOSPITAL-LAKE SAINT LOUIS</td><td>MO</td></tr>
				<tr><td>260216</td><td>SAINT LUKE'S EAST LEE'S SUMMIT HOSPITAL</td><td>MO</td></tr>
				<tr><td>310003</td><td>PALISADES MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310016</td><td>CAREPOINT HEALTH-CHRIST HOSPITAL</td><td>NJ</td></tr>
				<tr><td>310025</td><td>CAREPOINT HEALTH - BAYONNE MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310028</td><td>NEWTON MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310039</td><td>RARITAN BAY MEDICAL CENTER PERTH AMBOY DIVISION</td><td>NJ</td></tr>
				<tr><td>310044</td><td>CAPITAL HEALTH MEDICAL CENTER - HOPEWELL</td><td>NJ</td></tr>
				<tr><td>310047</td><td>SHORE MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310054</td><td>HACKENSACK-UMC MOUNTAINSIDE</td><td>NJ</td></tr>
				<tr><td>310060</td><td>ST LUKE'S WARREN HOSPITAL</td><td>NJ</td></tr>
				<tr><td>310061</td><td>LOURDES MEDICAL CENTER OF BURLINGTON COUNTY</td><td>NJ</td></tr>
				<tr><td>310070</td><td>SAINT PETER'S UNIVERSITY HOSPITAL</td><td>NJ</td></tr>
				<tr><td>310081</td><td>INSPIRA MEDICAL CENTER WOODBURY</td><td>NJ</td></tr>
				<tr><td>310113</td><td>SOUTHERN OCEAN MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310130</td><td>HACKENSACK MERIDIAN HEALTH PASCACK VALLEY MEDICAL</td><td>NJ</td></tr>
				<tr><td>330004</td><td>HEALTHALLIANCE HOSPITAL BROADWAY CAMPUS</td><td>NY</td></tr>
				<tr><td>330011</td><td>OUR LADY OF LOURDES MEMORIAL HOSPITAL, INC</td><td>NY</td></tr>
				<tr><td>330014</td><td>JAMAICA HOSPITAL MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330061</td><td>LAWRENCE HOSPITAL CENTER</td><td>NY</td></tr>
				<tr><td>330094</td><td>COLUMBIA MEMORIAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>330127</td><td>JACOBI MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330157</td><td>SAMARITAN MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330162</td><td>NORTHERN WESTCHESTER HOSPITAL</td><td>NY</td></tr>
				<tr><td>330184</td><td>MONTEFIORE NEW ROCHELLE HOSPITAL</td><td>NY</td></tr>
				<tr><td>330204</td><td>BELLEVUE HOSPITAL CENTER</td><td>NY</td></tr>
				<tr><td>330208</td><td>ST JOHN'S RIVERSIDE HOSPITAL</td><td>NY</td></tr>
				<tr><td>330259</td><td>MERCY MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330261</td><td>PHELPS MEMORIAL HOSPITAL ASSN</td><td>NY</td></tr>
				<tr><td>330264</td><td>ST LUKE'S CORNWALL HOSPITAL</td><td>NY</td></tr>
				<tr><td>330307</td><td>CAYUGA MEDICAL CENTER AT ITHACA</td><td>NY</td></tr>
				<tr><td>330331</td><td>PLAINVIEW HOSPITAL</td><td>NY</td></tr>
				<tr><td>330332</td><td>ST JOSEPH HOSPITAL</td><td>NY</td></tr>
				<tr><td>330350</td><td>UNIVERSITY HOSPITAL OF BROOKLYN ( DOWNSTATE )</td><td>NY</td></tr>
				<tr><td>330395</td><td>ST JOHN'S EPISCOPAL HOSPITAL AT SOUTH SHORE</td><td>NY</td></tr>
				<tr><td>330401</td><td>ST CATHERINE OF SIENA HOSPITAL</td><td>NY</td></tr>
				<tr><td>340004</td><td>HIGH POINT REGIONAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340039</td><td>IREDELL MEMORIAL HOSPITAL INC</td><td>NC</td></tr>
				<tr><td>340050</td><td>SOUTHEASTERN REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340147</td><td>NASH GENERAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340173</td><td>WAKEMED, CARY HOSPITAL</td><td>NC</td></tr>
				<tr><td>360072</td><td>FAIRFIELD MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360096</td><td>EAST LIVERPOOL CITY HOSPITAL</td><td>OH</td></tr>
				<tr><td>360123</td><td>ST JOHN MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360152</td><td>DOCTORS HOSPITAL</td><td>OH</td></tr>
				<tr><td>370097</td><td>SOUTHWESTERN MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>380002</td><td>ASANTE THREE RIVERS MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380033</td><td>SACRED HEART UNIVERSITY DISTRICT</td><td>OR</td></tr>
				<tr><td>380090</td><td>BAY AREA HOSPITAL</td><td>OR</td></tr>
				<tr><td>390002</td><td>UPMC MCKEESPORT</td><td>PA</td></tr>
				<tr><td>390036</td><td>HERITAGE VALLEY BEAVER</td><td>PA</td></tr>
				<tr><td>390091</td><td>UPMC NORTHWEST</td><td>PA</td></tr>
				<tr><td>390102</td><td>UPMC ST MARGARET</td><td>PA</td></tr>
				<tr><td>390107</td><td>UPMC PASSAVANT</td><td>PA</td></tr>
				<tr><td>390110</td><td>CONEMAUGH MEMORIAL MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390178</td><td>UPMC HORIZON</td><td>PA</td></tr>
				<tr><td>390228</td><td>ST CLAIR HOSPITAL</td><td>PA</td></tr>
				<tr><td>390237</td><td>REGIONAL HOSPITAL OF SCRANTON</td><td>PA</td></tr>
				<tr><td>390263</td><td>LEHIGH VALLEY HOSPITAL - MUHLENBERG</td><td>PA</td></tr>
				<tr><td>390267</td><td>FORBES HOSPITAL</td><td>PA</td></tr>
				<tr><td>390268</td><td>MOUNT NITTANY MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390326</td><td>ST LUKE'S HOSPITAL - ANDERSON CAMPUS</td><td>PA</td></tr>
				<tr><td>390328</td><td>UPMC EAST</td><td>PA</td></tr>
				<tr><td>390330</td><td>ST LUKE'S HOSPITAL - MONROE CAMPUS</td><td>PA</td></tr>
				<tr><td>410011</td><td>LANDMARK MEDICAL CENTER</td><td>RI</td></tr>
				<tr><td>420086</td><td>PALMETTO HEALTH BAPTIST</td><td>SC</td></tr>
				<tr><td>450028</td><td>VALLEY BAPTIST MEDICAL CENTER- BROWNSVILLE</td><td>TX</td></tr>
				<tr><td>450097</td><td>BAYSHORE MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450128</td><td>KNAPP MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450280</td><td>BAYLOR SCOTT & WHITE MEDICAL CENTER GARLAND</td><td>TX</td></tr>
				<tr><td>450389</td><td>EAST TEXAS MEDICAL CENTER ATHENS</td><td>TX</td></tr>
				<tr><td>450563</td><td>BAYLOR SCOTT & WHITE MEDICAL CENTER  GRAPEVINE</td><td>TX</td></tr>
				<tr><td>450639</td><td>TEXAS HEALTH HARRIS METHODIST HURST-EULESS-BEDFORD</td><td>TX</td></tr>
				<tr><td>450675</td><td>MEDICAL CITY ARLINGTON</td><td>TX</td></tr>
				<tr><td>450771</td><td>TEXAS HEALTH PRESBYTERIAN HOSPITAL PLANO</td><td>TX</td></tr>
				<tr><td>450844</td><td>HOUSTON METHODIST WILLOWBROOK HOSPITAL</td><td>TX</td></tr>
				<tr><td>470001</td><td>CENTRAL VERMONT MEDICAL CENTER</td><td>VT</td></tr>
				<tr><td>470005</td><td>RUTLAND REGIONAL MEDICAL CENTER</td><td>VT</td></tr>
				<tr><td>490018</td><td>AUGUSTA HEALTH</td><td>VA</td></tr>
				<tr><td>490040</td><td>INOVA ALEXANDRIA HOSPITAL</td><td>VA</td></tr>
				<tr><td>490043</td><td>INOVA LOUDOUN HOSPITAL</td><td>VA</td></tr>
				<tr><td>490046</td><td>SENTARA LEIGH HOSPITAL</td><td>VA</td></tr>
				<tr><td>490067</td><td>SOUTHSIDE REGIONAL MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490094</td><td>BON SECOURS RICHMOND COMMUNITY HOSPITAL</td><td>VA</td></tr>
				<tr><td>500079</td><td>MULTICARE GOOD SAMARITAN HOSPITAL</td><td>WA</td></tr>
				<tr><td>500152</td><td>SWEDISH ISSAQUAH</td><td>WA</td></tr>
				<tr><td>510008</td><td>BERKELEY MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>520103</td><td>COMMUNITY MEMORIAL HOSPITAL</td><td>WI</td></tr>
				<tr><td>230270</td><td>BEAUMONT HOSPITAL - TAYLOR</td><td>MI</td></tr>
				<tr><td>390222</td><td>RIDDLE MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>030093</td><td>BANNER DEL E. WEBB MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>060009</td><td>LUTHERAN MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>340126</td><td>WILSON MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>440011</td><td>BLOUNT MEMORIAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>490075</td><td>SOVAH HEALTH DANVILLE</td><td>VA</td></tr>
				<tr><td>010019</td><td>HELEN KELLER MEMORIAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>010035</td><td>CULLMAN REGIONAL MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010046</td><td>RIVERVIEW REGIONAL MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010108</td><td>PRATTVILLE BAPTIST HOSPITAL</td><td>AL</td></tr>
				<tr><td>010118</td><td>VAUGHAN REGIONAL MEDICAL CENTER PARKWAY CAMPUS</td><td>AL</td></tr>
				<tr><td>010144</td><td>SPRINGHILL MEMORIAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>020006</td><td>MAT-SU REGIONAL MEDICAL CENTER</td><td>AK</td></tr>
				<tr><td>020026</td><td>ALASKA NATIVE MEDICAL CENTER</td><td>AK</td></tr>
				<tr><td>030007</td><td>VERDE VALLEY MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030010</td><td>ST. MARY'S HOSPITAL</td><td>AZ</td></tr>
				<tr><td>030055</td><td>KINGMAN REGIONAL MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030110</td><td>ABRAZO WEST CAMPUS</td><td>AZ</td></tr>
				<tr><td>030115</td><td>BANNER ESTRELLA MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030119</td><td>MERCY GILBERT MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030122</td><td>BANNER GATEWAY MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>040022</td><td>NORTHWEST MEDICAL CENTER-SPRINGDALE</td><td>AR</td></tr>
				<tr><td>040029</td><td>CONWAY REGIONAL MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040039</td><td>ARKANSAS METHODIST MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040041</td><td>ST MARYS REGIONAL MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040071</td><td>JEFFERSON REGIONAL MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040088</td><td>MEDICAL CENTER OF SOUTH ARKANSAS</td><td>AR</td></tr>
				<tr><td>050002</td><td>ST ROSE HOSPITAL</td><td>CA</td></tr>
				<tr><td>050007</td><td>MILLS-PENINSULA MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050014</td><td>SUTTER AMADOR HOSPITAL</td><td>CA</td></tr>
				<tr><td>050024</td><td>PARADISE VALLEY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050030</td><td>OROVILLE HOSPITAL</td><td>CA</td></tr>
				<tr><td>050042</td><td>ST ELIZABETH COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050045</td><td>EL CENTRO REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050058</td><td>GLENDALE MEM HOSPITAL & HLTH CENTER</td><td>CA</td></tr>
				<tr><td>050073</td><td>KAISER FOUNDATION HOSPITAL AND REHAB CENTER</td><td>CA</td></tr>
				<tr><td>050075</td><td>KAISER FOUNDATION HOSPITAL - OAKLAND/RICHMOND</td><td>CA</td></tr>
				<tr><td>050078</td><td>PROVIDENCE LITTLE CO OF MARY MED CTR SAN PEDRO</td><td>CA</td></tr>
				<tr><td>050101</td><td>SUTTER SOLANO MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050103</td><td>WHITE MEMORIAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050104</td><td>SAINT FRANCIS MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050124</td><td>USC VERDUGO HILLS HOSPITAL</td><td>CA</td></tr>
				<tr><td>050126</td><td>VALLEY PRESBYTERIAN HOSPITAL</td><td>CA</td></tr>
				<tr><td>050127</td><td>WOODLAND MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050131</td><td>NOVATO COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050132</td><td>SAN GABRIEL VALLEY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050135</td><td>SOUTHERN CALIFORNIA HOSPITAL AT HOLLYWOOD</td><td>CA</td></tr>
				<tr><td>050138</td><td>KAISER FOUNDATION HOSPITAL - LOS ANGELES</td><td>CA</td></tr>
				<tr><td>050140</td><td>KAISER FOUNDATION HOSPITAL FONTANA</td><td>CA</td></tr>
				<tr><td>050149</td><td>CALIFORNIA HOSPITAL MEDICAL CENTER LA</td><td>CA</td></tr>
				<tr><td>050150</td><td>SIERRA NEVADA MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050152</td><td>SAINT FRANCIS MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050179</td><td>EMANUEL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050194</td><td>WATSONVILLE COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050195</td><td>WASHINGTON HOSPITAL</td><td>CA</td></tr>
				<tr><td>050204</td><td>PALMDALE REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050225</td><td>ADVENTIST HEALTH FEATHER RIVER</td><td>CA</td></tr>
				<tr><td>050231</td><td>POMONA VALLEY HOSPITAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050245</td><td>ARROWHEAD REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050254</td><td>MARSHALL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050261</td><td>SIERRA VIEW MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050272</td><td>REDLANDS COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050283</td><td>STANFORD HEALTH CARE - VALLEYCARE</td><td>CA</td></tr>
				<tr><td>050289</td><td>SETON MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050291</td><td>SUTTER SANTA ROSA REGIONAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050295</td><td>MERCY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050300</td><td>ST MARY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050301</td><td>ADVENTIST HEALTH UKIAH VALLEY</td><td>CA</td></tr>
				<tr><td>050329</td><td>CORONA REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050335</td><td>ADVENTIST HEALTH SONORA</td><td>CA</td></tr>
				<tr><td>050336</td><td>ADVENTIST HEALTH LODI MEMORIAL</td><td>CA</td></tr>
				<tr><td>050342</td><td>PIONEERS MEMORIAL HEALTHCARE DISTRICT</td><td>CA</td></tr>
				<tr><td>050367</td><td>NORTHBAY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050393</td><td>PIH HOSPITAL - DOWNEY</td><td>CA</td></tr>
				<tr><td>050414</td><td>MERCY HOSPITAL OF FOLSOM</td><td>CA</td></tr>
				<tr><td>050417</td><td>SUTTER COAST HOSPITAL</td><td>CA</td></tr>
				<tr><td>050425</td><td>KAISER FOUNDATION HOSPITAL - SACRAMENTO</td><td>CA</td></tr>
				<tr><td>050444</td><td>MERCY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050455</td><td>ADVENTIST HEALTH BAKERSFIELD</td><td>CA</td></tr>
				<tr><td>050457</td><td>ST MARY'S MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050468</td><td>MEMORIAL HOSPITAL OF GARDENA</td><td>CA</td></tr>
				<tr><td>050492</td><td>CLOVIS COMMUNITY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050523</td><td>SUTTER DELTA MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050580</td><td>LA PALMA INTERCOMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050590</td><td>METHODIST HOSPITAL OF SACRAMENTO</td><td>CA</td></tr>
				<tr><td>050603</td><td>SADDLEBACK MEMORIAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050616</td><td>ST JOHNS PLEASANT VALLEY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050636</td><td>POMERADO HOSPITAL</td><td>CA</td></tr>
				<tr><td>050701</td><td>SOUTHWEST HEALTHCARE SYSTEM</td><td>CA</td></tr>
				<tr><td>050709</td><td>DESERT VALLEY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050737</td><td>GARFIELD MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050740</td><td>MARINA DEL REY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050757</td><td>ALVARADO HOSPITAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050775</td><td>TEMECULA VALLEY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050779</td><td>MARTIN LUTHER KING, JR. COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050782</td><td>CASA COLINA HOSPITAL</td><td>CA</td></tr>
				<tr><td>060001</td><td>NORTH COLORADO MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060010</td><td>POUDRE VALLEY HOSPITAL</td><td>CO</td></tr>
				<tr><td>060012</td><td>CENTURA HEALTH-ST MARY CORWIN MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060030</td><td>MCKEE MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060065</td><td>NORTH SUBURBAN MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060112</td><td>SKY RIDGE MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>070005</td><td>WATERBURY HOSPITAL</td><td>CT</td></tr>
				<tr><td>070017</td><td>MIDSTATE MEDICAL CENTER</td><td>CT</td></tr>
				<tr><td>070018</td><td>GREENWICH HOSPITAL ASSOCIATION -</td><td>CT</td></tr>
				<tr><td>070024</td><td>WILLIAM W BACKUS HOSPITAL</td><td>CT</td></tr>
				<tr><td>080009</td><td>BAYHEALTH - MILFORD MEMORIAL HOSPITAL</td><td>DE</td></tr>
				<tr><td>090003</td><td>HOWARD UNIVERSITY HOSPITAL</td><td>DC</td></tr>
				<tr><td>090005</td><td>SIBLEY MEMORIAL HOSPITAL</td><td>DC</td></tr>
				<tr><td>100014</td><td>FLORIDA HOSPITAL NEW SMYRNA</td><td>FL</td></tr>
				<tr><td>100028</td><td>PARRISH MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100045</td><td>FLORIDA HOSPITAL DELAND</td><td>FL</td></tr>
				<tr><td>100051</td><td>SOUTH LAKE HOSPITAL</td><td>FL</td></tr>
				<tr><td>100053</td><td>HIALEAH HOSPITAL</td><td>FL</td></tr>
				<tr><td>100055</td><td>FLORIDA HOSPITAL NORTH PINELLAS</td><td>FL</td></tr>
				<tr><td>100063</td><td>MORTON PLANT NORTH BAY HOSPITAL</td><td>FL</td></tr>
				<tr><td>100118</td><td>FLORIDA HOSPITAL FLAGLER</td><td>FL</td></tr>
				<tr><td>100122</td><td>NORTH OKALOOSA MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100126</td><td>PALMS OF PASADENA HOSPITAL</td><td>FL</td></tr>
				<tr><td>100154</td><td>SOUTH MIAMI HOSPITAL</td><td>FL</td></tr>
				<tr><td>100177</td><td>CAPE CANAVERAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100228</td><td>WESTSIDE REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100252</td><td>RAULERSON HOSPITAL</td><td>FL</td></tr>
				<tr><td>100266</td><td>GULF BREEZE HOSPITAL</td><td>FL</td></tr>
				<tr><td>100269</td><td>PALMS WEST HOSPITAL</td><td>FL</td></tr>
				<tr><td>100275</td><td>WELLINGTON REGIONAL MEDICAL CENTER LLC</td><td>FL</td></tr>
				<tr><td>100292</td><td>SACRED HEART HOSPITAL ON THE EMERALD COAST</td><td>FL</td></tr>
				<tr><td>100299</td><td>LAKEWOOD RANCH MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100307</td><td>ST VINCENT'S MEDICAL CENTER SOUTHSIDE</td><td>FL</td></tr>
				<tr><td>100314</td><td>WEST KENDALL BAPTIST HOSPITAL</td><td>FL</td></tr>
				<tr><td>100319</td><td>FLORIDA HOSPITAL WESLEY CHAPEL</td><td>FL</td></tr>
				<tr><td>100321</td><td>ST VINCENTS MEDICAL CENTER - CLAY COUNTY</td><td>FL</td></tr>
				<tr><td>110003</td><td>MEMORIAL SATILLA HEALTH</td><td>GA</td></tr>
				<tr><td>110006</td><td>ST MARY'S HOSPITAL</td><td>GA</td></tr>
				<tr><td>110008</td><td>NORTHSIDE HOSPITAL CHEROKEE</td><td>GA</td></tr>
				<tr><td>110018</td><td>PIEDMONT NEWTON HOSPITAL</td><td>GA</td></tr>
				<tr><td>110023</td><td>GORDON HOSPITAL</td><td>GA</td></tr>
				<tr><td>110030</td><td>CARTERSVILLE MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110069</td><td>HOUSTON MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110095</td><td>TIFT REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110125</td><td>FAIRVIEW PARK HOSPITAL</td><td>GA</td></tr>
				<tr><td>110184</td><td>WELLSTAR DOUGLAS HOSPITAL</td><td>GA</td></tr>
				<tr><td>110198</td><td>WELLSTAR NORTH FULTON HOSPITAL</td><td>GA</td></tr>
				<tr><td>110230</td><td>EMORY JOHNS CREEK HOSPITAL</td><td>GA</td></tr>
				<tr><td>120002</td><td>MAUI MEMORIAL MEDICAL CENTER</td><td>HI</td></tr>
				<tr><td>120005</td><td>HILO MEDICAL CENTER</td><td>HI</td></tr>
				<tr><td>120006</td><td>ADVENTIST HEALTH CASTLE</td><td>HI</td></tr>
				<tr><td>120007</td><td>KUAKINI MEDICAL CENTER</td><td>HI</td></tr>
				<tr><td>120011</td><td>KAISER FOUNDATION HOSPITAL</td><td>HI</td></tr>
				<tr><td>120026</td><td>PALI MOMI MEDICAL CENTER</td><td>HI</td></tr>
				<tr><td>130028</td><td>PORTNEUF MEDICAL CENTER</td><td>ID</td></tr>
				<tr><td>140008</td><td>LOYOLA GOTTLIEB MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140013</td><td>PROCTOR HOSPITAL</td><td>IL</td></tr>
				<tr><td>140032</td><td>ST ANTHONYS MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140034</td><td>SSM HEALTH ST MARY'S HOSPITAL -CENTRALIA</td><td>IL</td></tr>
				<tr><td>140048</td><td>ADVOCATE TRINITY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140052</td><td>OSF SAINT ANTHONY'S HEALTH CENTER</td><td>IL</td></tr>
				<tr><td>140080</td><td>PRESENCE SAINT FRANCIS HOSPITAL</td><td>IL</td></tr>
				<tr><td>140101</td><td>MORRIS HOSPITAL & HEALTHCARE CENTERS</td><td>IL</td></tr>
				<tr><td>140118</td><td>METROSOUTH MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140127</td><td>ADVOCATE BROMENN MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140130</td><td>NORTHWESTERN LAKE FOREST HOSPITAL</td><td>IL</td></tr>
				<tr><td>140166</td><td>ST MARYS HOSPITAL</td><td>IL</td></tr>
				<tr><td>140185</td><td>MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140187</td><td>HSHS ST ELIZABETH'S HOSPITAL</td><td>IL</td></tr>
				<tr><td>140217</td><td>PRESENCE SAINT JOSEPH HOSPITAL - ELGIN</td><td>IL</td></tr>
				<tr><td>140251</td><td>COMMUNITY FIRST MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140286</td><td>KISHWAUKEE COMMUNITY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140304</td><td>ADVENTIST BOLINGBROOK HOSPITAL</td><td>IL</td></tr>
				<tr><td>150005</td><td>HENDRICKS REGIONAL HEALTH</td><td>IN</td></tr>
				<tr><td>150010</td><td>ST VINCENT KOKOMO</td><td>IN</td></tr>
				<tr><td>150015</td><td>FRANCISCAN HEALTH MICHIGAN CITY</td><td>IN</td></tr>
				<tr><td>150088</td><td>ST VINCENT ANDERSON REGIONAL HOSPITAL INC</td><td>IN</td></tr>
				<tr><td>150165</td><td>FRANCISCAN HEALTH MUNSTER</td><td>IN</td></tr>
				<tr><td>160024</td><td>IOWA LUTHERAN HOSPITAL</td><td>IA</td></tr>
				<tr><td>160028</td><td>CHI HEALTH MERCY COUNCIL BLUFFS</td><td>IA</td></tr>
				<tr><td>160029</td><td>MERCY HOSPITAL</td><td>IA</td></tr>
				<tr><td>160030</td><td>MARY GREELEY MEDICAL CENTER</td><td>IA</td></tr>
				<tr><td>160047</td><td>METHODIST JENNIE EDMUNDSON</td><td>IA</td></tr>
				<tr><td>160057</td><td>GREAT RIVER MEDICAL CENTER</td><td>IA</td></tr>
				<tr><td>160146</td><td>ST LUKES REGIONAL MEDICAL CENTER</td><td>IA</td></tr>
				<tr><td>170142</td><td>VIA CHRISTI HOSPITAL MANHATTAN, INC</td><td>KS</td></tr>
				<tr><td>170146</td><td>PROVIDENCE MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>170176</td><td>OVERLAND PARK REG MED CTR</td><td>KS</td></tr>
				<tr><td>170185</td><td>SAINT LUKE'S SOUTH HOSPITAL</td><td>KS</td></tr>
				<tr><td>180011</td><td>SAINT JOSEPH LONDON</td><td>KY</td></tr>
				<tr><td>180017</td><td>T J SAMSON COMMUNITY HOSPITAL</td><td>KY</td></tr>
				<tr><td>180029</td><td>HAZARD ARH REGIONAL MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180048</td><td>EPHRAIM MCDOWELL REGIONAL MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180051</td><td>JENNIE STUART MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>190005</td><td>UNIVERSITY MEDICAL CENTER NEW ORLEANS</td><td>LA</td></tr>
				<tr><td>190017</td><td>OPELOUSAS GENERAL HEALTH SYSTEM</td><td>LA</td></tr>
				<tr><td>190046</td><td>TOURO INFIRMARY</td><td>LA</td></tr>
				<tr><td>190086</td><td>NORTHERN LOUISIANA MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190167</td><td>MERCY REGIONAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190204</td><td>OCHSNER MEDICAL CENTER - NORTHSHORE, L L C</td><td>LA</td></tr>
				<tr><td>190236</td><td>WILLIS KNIGHTON BOSSIER HEALTH CENTER</td><td>LA</td></tr>
				<tr><td>190274</td><td>OCHSNER MEDICAL CENTER-KENNER</td><td>LA</td></tr>
				<tr><td>200019</td><td>SOUTHERN MAINE HEALTH CARE</td><td>ME</td></tr>
				<tr><td>200024</td><td>CENTRAL MAINE MEDICAL CENTER</td><td>ME</td></tr>
				<tr><td>200037</td><td>FRANKLIN MEMORIAL HOSPITAL</td><td>ME</td></tr>
				<tr><td>210028</td><td>MEDSTAR SAINT MARY'S HOSPITAL</td><td>MD</td></tr>
				<tr><td>210034</td><td>MEDSTAR HARBOR HOSPITAL</td><td>MD</td></tr>
				<tr><td>210035</td><td>UNIVERSITY OF MD CHARLES REGIONAL  MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>210039</td><td>CALVERTHEALTH MEDICAL CENTER</td><td>MD</td></tr>
				<tr><td>210061</td><td>ATLANTIC GENERAL HOSPITAL</td><td>MD</td></tr>
				<tr><td>210065</td><td>HOLY CROSS GERMANTOWN HOSPITAL</td><td>MD</td></tr>
				<tr><td>220016</td><td>BAYSTATE FRANKLIN MEDICAL CENTER</td><td>MA</td></tr>
				<tr><td>220060</td><td>BETH ISRAEL DEACONESS HOSPITAL - PLYMOUTH</td><td>MA</td></tr>
				<tr><td>220073</td><td>MORTON HOSPITAL</td><td>MA</td></tr>
				<tr><td>220084</td><td>EMERSON HOSPITAL -</td><td>MA</td></tr>
				<tr><td>220108</td><td>BETH ISRAEL DEACONESS HOSPITAL-MILTON INC</td><td>MA</td></tr>
				<tr><td>230031</td><td>LAKE HURON MEDICAL CENTER</td><td>MI</td></tr>
				<tr><td>230036</td><td>MIDMICHIGAN MEDICAL CENTER - ALPENA</td><td>MI</td></tr>
				<tr><td>230058</td><td>MUNSON HEALTHCARE GRAYLING HOSPITAL</td><td>MI</td></tr>
				<tr><td>230072</td><td>HOLLAND COMMUNITY HOSPITAL</td><td>MI</td></tr>
				<tr><td>230081</td><td>MUNSON HEALTHCARE CADILLAC HOSPITAL</td><td>MI</td></tr>
				<tr><td>230089</td><td>BEAUMONT HOSPITAL, GROSSE POINTE</td><td>MI</td></tr>
				<tr><td>230099</td><td>PROMEDICA MONROE REGIONAL HOSPITAL</td><td>MI</td></tr>
				<tr><td>230110</td><td>SPECTRUM HEALTH LUDINGTON HOSPITAL</td><td>MI</td></tr>
				<tr><td>230176</td><td>BEAUMONT HOSPITAL - TRENTON</td><td>MI</td></tr>
				<tr><td>230193</td><td>MCLAREN LAPEER REGION</td><td>MI</td></tr>
				<tr><td>230207</td><td>MCLAREN OAKLAND</td><td>MI</td></tr>
				<tr><td>230216</td><td>MCLAREN PORT HURON</td><td>MI</td></tr>
				<tr><td>230236</td><td>METRO HEALTH HOSPITAL</td><td>MI</td></tr>
				<tr><td>240075</td><td>ESSENTIA HEALTH ST JOSEPH'S MEDICAL CENTER</td><td>MN</td></tr>
				<tr><td>240100</td><td>SANFORD BEMIDJI MEDICAL CENTER</td><td>MN</td></tr>
				<tr><td>240207</td><td>FAIRVIEW RIDGES HOSPITAL</td><td>MN</td></tr>
				<tr><td>250006</td><td>BAPTIST MEMORIAL HOSPITAL UNION COUNTY</td><td>MS</td></tr>
				<tr><td>250007</td><td>MERIT HEALTH BILOXI</td><td>MS</td></tr>
				<tr><td>250058</td><td>SOUTH CENTRAL REG MED CTR</td><td>MS</td></tr>
				<tr><td>250069</td><td>RUSH FOUNDATION HOSPITAL</td><td>MS</td></tr>
				<tr><td>250072</td><td>MERIT HEALTH CENTRAL</td><td>MS</td></tr>
				<tr><td>250099</td><td>GREENWOOD LEFLORE HOSPITAL</td><td>MS</td></tr>
				<tr><td>250100</td><td>BAPTIST MEM HOSP/ GOLDEN TRIANGLE INC</td><td>MS</td></tr>
				<tr><td>260017</td><td>PHELPS COUNTY REGIONAL MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260023</td><td>MERCY HOSPITAL JEFFERSON</td><td>MO</td></tr>
				<tr><td>260094</td><td>COX MEDICAL CENTER BRANSON</td><td>MO</td></tr>
				<tr><td>260113</td><td>MISSOURI DELTA MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260119</td><td>POPLAR BLUFF REGIONAL MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260191</td><td>BARNES-JEWISH ST PETERS HOSPITAL</td><td>MO</td></tr>
				<tr><td>270057</td><td>BOZEMAN HEALTH DEACONESS HOSPITAL</td><td>MT</td></tr>
				<tr><td>280061</td><td>REGIONAL WEST MEDICAL CENTER</td><td>NE</td></tr>
				<tr><td>280081</td><td>CHI HEALTH IMMANUEL</td><td>NE</td></tr>
				<tr><td>280130</td><td>CHI HEALTH LAKESIDE</td><td>NE</td></tr>
				<tr><td>280132</td><td>BELLEVUE MEDICAL CENTER</td><td>NE</td></tr>
				<tr><td>290005</td><td>NORTH VISTA HOSPITAL</td><td>NV</td></tr>
				<tr><td>290054</td><td>CENTENNIAL HILLS HOSPITAL MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>300005</td><td>LAKES REGION GENERAL HOSPITAL</td><td>NH</td></tr>
				<tr><td>300011</td><td>ST JOSEPH HOSPITAL</td><td>NH</td></tr>
				<tr><td>300018</td><td>WENTWORTH-DOUGLASS HOSPITAL</td><td>NH</td></tr>
				<tr><td>300020</td><td>SOUTHERN NH MEDICAL CENTER</td><td>NH</td></tr>
				<tr><td>310006</td><td>ST MARY'S GENERAL HOSPITAL</td><td>NJ</td></tr>
				<tr><td>310040</td><td>CAREPOINT HEALTH-HOBOKEN UNIVERSITY MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310096</td><td>SAINT MICHAEL'S MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310110</td><td>ROBERT WOOD JOHNSON UNIVERSITY HOSPITAL HAMILTON</td><td>NJ</td></tr>
				<tr><td>310115</td><td>HACKETTSTOWN MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>320005</td><td>SAN JUAN REGIONAL MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>320006</td><td>EASTERN NEW MEXICO MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>330049</td><td>NORTHERN DUTCHESS HOSPITAL</td><td>NY</td></tr>
				<tr><td>330058</td><td>GENEVA GENERAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>330090</td><td>ARNOT OGDEN MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330102</td><td>KENMORE MERCY HOSPITAL</td><td>NY</td></tr>
				<tr><td>330103</td><td>OLEAN GENERAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>330128</td><td>ELMHURST HOSPITAL CENTER</td><td>NY</td></tr>
				<tr><td>330181</td><td>GLEN COVE HOSPITAL</td><td>NY</td></tr>
				<tr><td>330221</td><td>WYCKOFF HEIGHTS MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330223</td><td>MASSENA MEMORIAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>330235</td><td>AUBURN  COMMUNITY  HOSPITAL</td><td>NY</td></tr>
				<tr><td>330267</td><td>NEW YORK-PRESBYTERIAN/HUDSON VALLEY HOSPITAL</td><td>NY</td></tr>
				<tr><td>330273</td><td>PUTNAM HOSPITAL CENTER</td><td>NY</td></tr>
				<tr><td>330277</td><td>CORNING HOSPITAL</td><td>NY</td></tr>
				<tr><td>330386</td><td>CATSKILL REGIONAL MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330399</td><td>ST BARNABAS HOSPITAL</td><td>NY</td></tr>
				<tr><td>340003</td><td>NORTHERN HOSPITAL OF SURRY COUNTY</td><td>NC</td></tr>
				<tr><td>340008</td><td>SCOTLAND MEMORIAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340015</td><td>NOVANT HEALTH ROWAN MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340020</td><td>CENTRAL CAROLINA HOSPITAL</td><td>NC</td></tr>
				<tr><td>340024</td><td>SAMPSON REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340027</td><td>UNC LENOIR HEALTH CARE</td><td>NC</td></tr>
				<tr><td>340041</td><td>CALDWELL MEMORIAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340042</td><td>ONSLOW MEMORIAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340051</td><td>WATAUGA MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340064</td><td>WILKES REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340068</td><td>COLUMBUS REGIONAL HEALTHCARE SYSTEM</td><td>NC</td></tr>
				<tr><td>340070</td><td>ALAMANCE REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340085</td><td>NOVANT HEALTH THOMASVILLE MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340098</td><td>CAROLINAS HEALTHCARE SYSTEM PINEVILLE</td><td>NC</td></tr>
				<tr><td>340099</td><td>VIDANT ROANOKE CHOWAN HOSPITAL</td><td>NC</td></tr>
				<tr><td>340119</td><td>CAROLINAS HEALTHCARE SYSTEM STANLY</td><td>NC</td></tr>
				<tr><td>340120</td><td>VIDANT DUPLIN  HOSPITAL</td><td>NC</td></tr>
				<tr><td>340132</td><td>MARIA PARHAM MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340142</td><td>CARTERET GENERAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340145</td><td>CAROLINAS HEALTHCARE SYSTEM LINCOLN</td><td>NC</td></tr>
				<tr><td>340151</td><td>HALIFAX REGIONAL MEDICAL CENTER INC</td><td>NC</td></tr>
				<tr><td>340155</td><td>DUKE REGIONAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340166</td><td>CAROLINAS MED CTR-UNIVERSITY</td><td>NC</td></tr>
				<tr><td>340171</td><td>NOVANT HEALTH MATTHEWS MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340183</td><td>NOVANT HEALTH HUNTERSVILLE MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340184</td><td>HAYWOOD REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340186</td><td>VIDANT BEAUFORT HOSPITAL</td><td>NC</td></tr>
				<tr><td>360001</td><td>MERCY HOSPITAL ANDERSON</td><td>OH</td></tr>
				<tr><td>360010</td><td>UNION HOSPITAL</td><td>OH</td></tr>
				<tr><td>360011</td><td>MARION GENERAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360041</td><td>PARMA COMMUNITY GENERAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360075</td><td>UHHS RICHMOND HEIGHTS HOSPITAL</td><td>OH</td></tr>
				<tr><td>360076</td><td>ATRIUM MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360078</td><td>UNIVERSITY HOSPITALS PORTAGE MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360090</td><td>ST LUKE'S HOSPITAL</td><td>OH</td></tr>
				<tr><td>360118</td><td>OHIOHEALTH MANSFIELD HOSPITAL</td><td>OH</td></tr>
				<tr><td>360132</td><td>FORT HAMILTON HUGHES MEMORIAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360143</td><td>MARYMOUNT HOSPITAL</td><td>OH</td></tr>
				<tr><td>360192</td><td>UH GEAUGA MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360234</td><td>MERCY HEALTH - WEST HOSPITAL</td><td>OH</td></tr>
				<tr><td>360354</td><td>WEST CHESTER HOSPITAL, LLC</td><td>OH</td></tr>
				<tr><td>360359</td><td>UNIVERSITY HOSPITALS AHUJA MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360364</td><td>CLEVELAND CLINIC AVON HOSPITAL</td><td>OH</td></tr>
				<tr><td>370014</td><td>ALLIANCEHEALTH DURANT</td><td>OK</td></tr>
				<tr><td>370020</td><td>MERCY HOSPITAL ADA</td><td>OK</td></tr>
				<tr><td>370025</td><td>SAINT FRANCIS HOSPITAL MUSKOGEE</td><td>OK</td></tr>
				<tr><td>370026</td><td>ST MARY'S REGIONAL MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>370032</td><td>ALLIANCEHEALTH DEACONESS</td><td>OK</td></tr>
				<tr><td>370034</td><td>MCALESTER REGIONAL HEALTH CENTER AUTHORITY</td><td>OK</td></tr>
				<tr><td>370047</td><td>MERCY HOSPITAL ARDMORE, INC</td><td>OK</td></tr>
				<tr><td>370202</td><td>HILLCREST HOSPITAL SOUTH</td><td>OK</td></tr>
				<tr><td>380021</td><td>TUALITY COMMUNITY HOSPITAL</td><td>OR</td></tr>
				<tr><td>380027</td><td>MERCY MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380050</td><td>SKY LAKES MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380060</td><td>ADVENTIST MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380089</td><td>LEGACY MERIDIAN PARK MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380091</td><td>KAISER SUNNYSIDE MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>390012</td><td>LANSDALE HOSPITAL</td><td>PA</td></tr>
				<tr><td>390026</td><td>CHESTNUT HILL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390037</td><td>HERITAGE VALLEY SEWICKLEY</td><td>PA</td></tr>
				<tr><td>390041</td><td>UNIONTOWN HOSPITAL</td><td>PA</td></tr>
				<tr><td>390042</td><td>WASHINGTON HOSPITAL, THE</td><td>PA</td></tr>
				<tr><td>390057</td><td>GRAND VIEW HOSPITAL</td><td>PA</td></tr>
				<tr><td>390058</td><td>CARLISLE REGIONAL MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390061</td><td>LANCASTER REGIONAL MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390065</td><td>GETTYSBURG HOSPITAL</td><td>PA</td></tr>
				<tr><td>390066</td><td>GOOD SAMARITAN HOSPITAL</td><td>PA</td></tr>
				<tr><td>390070</td><td>LOWER BUCKS HOSPITAL</td><td>PA</td></tr>
				<tr><td>390076</td><td>BRANDYWINE HOSPITAL</td><td>PA</td></tr>
				<tr><td>390086</td><td>PENN HIGHLANDS DUBOIS</td><td>PA</td></tr>
				<tr><td>390113</td><td>MEADVILLE MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390119</td><td>MOSES TAYLOR HOSPITAL</td><td>PA</td></tr>
				<tr><td>390123</td><td>POTTSTOWN HOSPITAL</td><td>PA</td></tr>
				<tr><td>390145</td><td>EXCELA HEALTH WESTMORELAND HOSPITAL</td><td>PA</td></tr>
				<tr><td>390162</td><td>EASTON HOSPITAL</td><td>PA</td></tr>
				<tr><td>390173</td><td>INDIANA REGIONAL MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390183</td><td>ST LUKE'S MINERS MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390185</td><td>LEHIGH VALLEY HOSPITAL - HAZLETON</td><td>PA</td></tr>
				<tr><td>390204</td><td>NAZARETH HOSPITAL</td><td>PA</td></tr>
				<tr><td>390211</td><td>SHARON REGIONAL HEALTH SYSTEM</td><td>PA</td></tr>
				<tr><td>390225</td><td>WELLSPAN EPHRATA COMMUNITY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390233</td><td>HANOVER HOSPITAL</td><td>PA</td></tr>
				<tr><td>420009</td><td>GHS OCONEE MEMORIAL  HOSPITAL</td><td>SC</td></tr>
				<tr><td>420010</td><td>CAROLINA PINES REGIONAL MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420048</td><td>KERSHAWHEALTH</td><td>SC</td></tr>
				<tr><td>420049</td><td>CONWAY MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420068</td><td>TRMC OF ORANGEBURG & CALHOUN</td><td>SC</td></tr>
				<tr><td>420070</td><td>PALMETTO HEALTH TUOMEY HOSPITAL</td><td>SC</td></tr>
				<tr><td>420082</td><td>AIKEN REGIONAL MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420083</td><td>MARY BLACK HEALTH SYSTEM SPARTANBURG</td><td>SC</td></tr>
				<tr><td>420098</td><td>TIDELANDS WACCAMAW COMMUNITY HOSPITAL</td><td>SC</td></tr>
				<tr><td>420101</td><td>COASTAL CAROLINA HOSPITAL</td><td>SC</td></tr>
				<tr><td>430014</td><td>AVERA ST LUKES</td><td>SD</td></tr>
				<tr><td>440009</td><td>CUMBERLAND MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440144</td><td>TENNOVA HEALTHCARE-HARTON</td><td>TN</td></tr>
				<tr><td>440197</td><td>TRISTAR SOUTHERN HILLS MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>450032</td><td>CHRISTUS GOOD SHEPHERD MEDICAL CENTER MARSHALL</td><td>TX</td></tr>
				<tr><td>450035</td><td>ST JOSEPH MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450080</td><td>TITUS REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450101</td><td>BAYLOR SCOTT & WHITE MEDICAL CENTER HILLCREST</td><td>TX</td></tr>
				<tr><td>450147</td><td>DETAR HEALTHCARE SYSTEM</td><td>TX</td></tr>
				<tr><td>450196</td><td>PARIS REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450271</td><td>WISE REGIONAL HEALTH SYSTEM</td><td>TX</td></tr>
				<tr><td>450330</td><td>OAKBEND MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450352</td><td>HUNT REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450372</td><td>BAYLOR SCOTT & WHITE MEDICAL CENTER- WAXAHACHIE</td><td>TX</td></tr>
				<tr><td>450403</td><td>MEDICAL CENTER OF MCKINNEY</td><td>TX</td></tr>
				<tr><td>450469</td><td>WILSON N JONES REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450508</td><td>MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450537</td><td>METHODIST RICHARDSON MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450643</td><td>DOCTORS HOSPITAL OF LAREDO</td><td>TX</td></tr>
				<tr><td>450662</td><td>VALLEY REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450670</td><td>TOMBALL REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450678</td><td>BAYLOR SCOTT AND WHITE MEDICAL CENTER WHITE ROCK</td><td>TX</td></tr>
				<tr><td>450688</td><td>DALLAS REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450723</td><td>METHODIST CHARLTON MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450730</td><td>BAYLOR SCOTT AND WHITE MEDICAL CENTER CARROLLTON</td><td>TX</td></tr>
				<tr><td>450742</td><td>BAYLOR SCOTT AND WHITE MEDICAL CENTER LAKE POINTE</td><td>TX</td></tr>
				<tr><td>450848</td><td>MEMORIAL HERMANN SUGAR LAND HOSPITAL</td><td>TX</td></tr>
				<tr><td>450885</td><td>BAYLOR SCOTT AND WHITE MEDICAL CENTER CENTENNIAL</td><td>TX</td></tr>
				<tr><td>450890</td><td>BAYLOR REGIONAL MEDICAL CENTER AT PLANO</td><td>TX</td></tr>
				<tr><td>460047</td><td>ST MARK'S HOSPITAL</td><td>UT</td></tr>
				<tr><td>460051</td><td>JORDAN VALLEY MEDICAL CENTER</td><td>UT</td></tr>
				<tr><td>490011</td><td>BON SECOURS DEPAUL MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490013</td><td>SENTARA HALIFAX REGIONAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490037</td><td>RIVERSIDE SHORE MEMORIAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490041</td><td>MARY IMMACULATE HOSPITAL</td><td>VA</td></tr>
				<tr><td>490044</td><td>SENTARA OBICI HOSPITAL</td><td>VA</td></tr>
				<tr><td>490045</td><td>NOVANT HEALTH UVA  PRINCE WILLIAM MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490053</td><td>JOHNSTON MEMORIAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490079</td><td>SOVAH HEALTH MARTINSVILLE</td><td>VA</td></tr>
				<tr><td>490084</td><td>RIVERSIDE TAPPAHANNOCK HOSPITAL</td><td>VA</td></tr>
				<tr><td>490090</td><td>SOUTHSIDE COMMUNITY HOSPITAL, INC</td><td>VA</td></tr>
				<tr><td>490113</td><td>SENTARA NORTHERN VIRGINIA MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490119</td><td>SENTARA PRINCESS ANNE HOSPITAL</td><td>VA</td></tr>
				<tr><td>490130</td><td>RIVERSIDE WALTER REED HOSPITAL</td><td>VA</td></tr>
				<tr><td>490136</td><td>BON SECOURS ST FRANCIS MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490140</td><td>STAFFORD HOSPITAL, LLC</td><td>VA</td></tr>
				<tr><td>500003</td><td>SKAGIT VALLEY HOSPITAL</td><td>WA</td></tr>
				<tr><td>500007</td><td>ISLAND HOSPITAL</td><td>WA</td></tr>
				<tr><td>500011</td><td>HIGHLINE MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500015</td><td>MULTICARE AUBURN MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500019</td><td>PROVIDENCE CENTRALIA HOSPITAL</td><td>WA</td></tr>
				<tr><td>500021</td><td>ST CLARE HOSPITAL</td><td>WA</td></tr>
				<tr><td>500026</td><td>SWEDISH EDMONDS HOSPITAL</td><td>WA</td></tr>
				<tr><td>500031</td><td>GRAYS HARBOR COMMUNITY HOSPITAL</td><td>WA</td></tr>
				<tr><td>500041</td><td>PEACHEALTH ST JOHN MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500053</td><td>KENNEWICK GENERAL HOSPITAL</td><td>WA</td></tr>
				<tr><td>500072</td><td>OLYMPIC MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500077</td><td>PROVIDENCE HOLY FAMILY HOSPITAL</td><td>WA</td></tr>
				<tr><td>500141</td><td>ST FRANCIS COMMUNITY HOSPITAL</td><td>WA</td></tr>
				<tr><td>500150</td><td>LEGACY SALMON CREEK MEDICAL CENTER</td><td>WA</td></tr>
				<tr><td>500151</td><td>ST ANTHONY HOSPITAL</td><td>WA</td></tr>
				<tr><td>510029</td><td>THOMAS MEMORIAL HOSPITAL</td><td>WV</td></tr>
				<tr><td>510039</td><td>OHIO VALLEY MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>520002</td><td>ASCENSION ST MICHAELS HOSPITAL</td><td>WI</td></tr>
				<tr><td>520009</td><td>ST ELIZABETH HOSPITAL</td><td>WI</td></tr>
				<tr><td>520013</td><td>SACRED HEART HOSPITAL</td><td>WI</td></tr>
				<tr><td>520051</td><td>COLUMBIA ST MARYS HOSPITAL MILWAUKEE</td><td>WI</td></tr>
				<tr><td>520066</td><td>MERCY HEALTH SYSTEM CORP</td><td>WI</td></tr>
				<tr><td>520088</td><td>ST AGNES HOSPITAL</td><td>WI</td></tr>
				<tr><td>520089</td><td>UNITYPOINT HEALTH - MERITER</td><td>WI</td></tr>
				<tr><td>520096</td><td>WHEATON FRANCISCAN HEALTHCARE ALL SAINTS</td><td>WI</td></tr>
				<tr><td>520113</td><td>BAY AREA MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>520206</td><td>AURORA MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>670023</td><td>METHODIST MANSFIELD MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>670034</td><td>SCOTT & WHITE HOSPITAL-ROUND ROCK</td><td>TX</td></tr>
				<tr><td>670047</td><td>SIERRA PROVIDENCE EAST MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>670060</td><td>BAYLOR SCOTT AND WHITE MEDICAL CENTER SUNNYVALE</td><td>TX</td></tr>
				<tr><td>670080</td><td>SETON MEDICAL CENTER HARKER HEIGHTS</td><td>TX</td></tr>
				<tr><td>670082</td><td>BAYLOR SCOTT AND WHITE  MEDICAL CENTER  MCKINNEY</td><td>TX</td></tr>
				<tr><td>670088</td><td>BAYLOR SCOTT & WHITE MEDICAL CENTER- COLLEGE STATI</td><td>TX</td></tr>
				<tr><td>010012</td><td>DEKALB REGIONAL MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010034</td><td>COMMUNITY HOSPITAL INC</td><td>AL</td></tr>
				<tr><td>010036</td><td>ANDALUSIA REGIONAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>010038</td><td>STRINGFELLOW MEMORIAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>010049</td><td>MEDICAL CENTER ENTERPRISE</td><td>AL</td></tr>
				<tr><td>010061</td><td>HIGHLANDS MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010065</td><td>RUSSELL MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010079</td><td>ATHENS LIMESTONE HOSPITAL</td><td>AL</td></tr>
				<tr><td>010083</td><td>SOUTH BALDWIN REGIONAL MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010089</td><td>WALKER BAPTIST MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010101</td><td>CITIZENS BAPTIST MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010120</td><td>MONROE COUNTY HOSPITAL</td><td>AL</td></tr>
				<tr><td>010149</td><td>BAPTIST MEDICAL CENTER EAST</td><td>AL</td></tr>
				<tr><td>020008</td><td>BARTLETT REGIONAL HOSPITAL</td><td>AK</td></tr>
				<tr><td>020024</td><td>CENTRAL PENINSULA GENERAL HOSPITAL</td><td>AK</td></tr>
				<tr><td>030033</td><td>BANNER PAYSON MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030043</td><td>CANYON VISTA MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030062</td><td>SUMMIT HEALTHCARE REGIONAL MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030083</td><td>ABRAZO SCOTTSDALE CAMPUS</td><td>AZ</td></tr>
				<tr><td>030111</td><td>BANNER-UNIVERSITY MEDICAL CENTER SOUTH CAMPUS</td><td>AZ</td></tr>
				<tr><td>030114</td><td>ORO VALLEY HOSPITAL</td><td>AZ</td></tr>
				<tr><td>030117</td><td>VALLEY VIEW MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>040017</td><td>NORTH ARKANSAS REGIONAL MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040067</td><td>MAGNOLIA HOSPITAL</td><td>AR</td></tr>
				<tr><td>040084</td><td>SALINE MEMORIAL HOSPITAL</td><td>AR</td></tr>
				<tr><td>050090</td><td>SONOMA VALLEY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050110</td><td>LOMPOC VALLEY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050118</td><td>DOCTORS HOSPITAL OF MANTECA</td><td>CA</td></tr>
				<tr><td>050122</td><td>DAMERON HOSPITAL</td><td>CA</td></tr>
				<tr><td>050136</td><td>PETALUMA VALLEY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050139</td><td>KAISER FOUNDATION HOSPITAL - DOWNEY</td><td>CA</td></tr>
				<tr><td>050159</td><td>VENTURA COUNTY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050211</td><td>ALAMEDA HOSPITAL</td><td>CA</td></tr>
				<tr><td>050226</td><td>AHMC ANAHEIM REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050296</td><td>HAZEL HAWKINS MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050315</td><td>KERN MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050352</td><td>BARTON MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050515</td><td>KAISER FOUNDATION HOSPITAL - ZION</td><td>CA</td></tr>
				<tr><td>050537</td><td>SUTTER DAVIS HOSPITAL</td><td>CA</td></tr>
				<tr><td>050633</td><td>TWIN CITIES COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050674</td><td>KAISER FOUNDATION HOSP SO SACRAMENTO</td><td>CA</td></tr>
				<tr><td>050678</td><td>ORANGE COAST MEMORIAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050688</td><td>ST LOUISE REGIONAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050689</td><td>SAN RAMON REGIONAL MEDICAL CTR</td><td>CA</td></tr>
				<tr><td>050724</td><td>BAKERSFIELD HEART HOSPITAL</td><td>CA</td></tr>
				<tr><td>050760</td><td>KAISER FOUNDATION HOSPITAL - ANTIOCH</td><td>CA</td></tr>
				<tr><td>050773</td><td>SAN LEANDRO HOSPITAL</td><td>CA</td></tr>
				<tr><td>060003</td><td>LONGMONT UNITED HOSPITAL</td><td>CO</td></tr>
				<tr><td>060013</td><td>MERCY REGIONAL MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060071</td><td>DELTA COUNTY MEMORIAL HOSPITAL</td><td>CO</td></tr>
				<tr><td>060104</td><td>ST ANTHONY NORTH HEALTH CAMPUS</td><td>CO</td></tr>
				<tr><td>060116</td><td>GOOD SAMARITAN MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>070003</td><td>DAY KIMBALL HOSPITAL</td><td>CT</td></tr>
				<tr><td>070004</td><td>SHARON HOSPITAL</td><td>CT</td></tr>
				<tr><td>070011</td><td>CHARLOTTE HUNGERFORD HOSPITAL</td><td>CT</td></tr>
				<tr><td>070021</td><td>WINDHAM COMM MEM HOSP & HATCH HOSP</td><td>CT</td></tr>
				<tr><td>070029</td><td>BRISTOL HOSPITAL</td><td>CT</td></tr>
				<tr><td>070031</td><td>GRIFFIN HOSPITAL</td><td>CT</td></tr>
				<tr><td>080003</td><td>ST FRANCIS HOSPITAL</td><td>DE</td></tr>
				<tr><td>100117</td><td>BAPTIST MEDICAL CENTER - BEACHES</td><td>FL</td></tr>
				<tr><td>100125</td><td>HOMESTEAD HOSPITAL</td><td>FL</td></tr>
				<tr><td>100132</td><td>SOUTH FLORIDA BAPTIST HOSPITAL</td><td>FL</td></tr>
				<tr><td>100142</td><td>JACKSON HOSPITAL</td><td>FL</td></tr>
				<tr><td>100180</td><td>ST PETERSBURG GENERAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100230</td><td>MEMORIAL HOSPITAL PEMBROKE</td><td>FL</td></tr>
				<tr><td>100249</td><td>SEVEN RIVERS REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100267</td><td>ENGLEWOOD COMMUNITY HOSPITAL</td><td>FL</td></tr>
				<tr><td>100268</td><td>WEST BOCA MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100276</td><td>BROWARD HEALTH CORAL SPRINGS</td><td>FL</td></tr>
				<tr><td>100285</td><td>MEMORIAL HOSPITAL MIRAMAR</td><td>FL</td></tr>
				<tr><td>100296</td><td>DOCTORS HOSPITAL</td><td>FL</td></tr>
				<tr><td>100302</td><td>ST CLOUD REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100315</td><td>VIERA HOSPITAL</td><td>FL</td></tr>
				<tr><td>110002</td><td>UPSON REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110016</td><td>WELLSTAR WEST GEORGIA MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110041</td><td>HABERSHAM COUNTY MEDICAL CTR</td><td>GA</td></tr>
				<tr><td>110042</td><td>WELLSTAR PAULDING HOSPITAL</td><td>GA</td></tr>
				<tr><td>110044</td><td>PHOEBE SUMTER MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110046</td><td>CLEARVIEW  REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110091</td><td>PIEDMONT ROCKDALE HOSPITAL</td><td>GA</td></tr>
				<tr><td>110104</td><td>CRISP REGIONAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110105</td><td>COLQUITT REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110124</td><td>WAYNE MEMORIAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110128</td><td>MEADOWS REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110201</td><td>COLISEUM NORTHSIDE HOSPITAL</td><td>GA</td></tr>
				<tr><td>110225</td><td>PIEDMONT MOUNTAINSIDE HOSPITAL INC</td><td>GA</td></tr>
				<tr><td>120014</td><td>WILCOX MEMORIAL HOSPITAL</td><td>HI</td></tr>
				<tr><td>130013</td><td>SAINT ALPHONSUS MEDICAL CENTER - NAMPA</td><td>ID</td></tr>
				<tr><td>130014</td><td>WEST VALLEY MEDICAL CENTER</td><td>ID</td></tr>
				<tr><td>140011</td><td>HERRIN HOSPITAL</td><td>IL</td></tr>
				<tr><td>140012</td><td>KATHERINE SHAW BETHEA HOSPITAL</td><td>IL</td></tr>
				<tr><td>140063</td><td>RUSH OAK PARK HOSPITAL</td><td>IL</td></tr>
				<tr><td>140064</td><td>ST MARY MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140093</td><td>PRESENCE UNITED SAMARITANS MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140110</td><td>OTTAWA REGIONAL HOSPITAL & HEALTHCARE CENTER</td><td>IL</td></tr>
				<tr><td>140160</td><td>FHN MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140161</td><td>SAINT JAMES HOSPITAL</td><td>IL</td></tr>
				<tr><td>140176</td><td>CENTEGRA HEALTH SYSTEM - WOODSTOCK HOSPITAL</td><td>IL</td></tr>
				<tr><td>140184</td><td>HEARTLAND REGIONAL MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140189</td><td>SARAH BUSH LINCOLN HEALTH CENTER</td><td>IL</td></tr>
				<tr><td>140240</td><td>WESTLAKE COMMUNITY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140289</td><td>ANDERSON HOSPITAL</td><td>IL</td></tr>
				<tr><td>140292</td><td>ADVENTIST GLENOAKS</td><td>IL</td></tr>
				<tr><td>150001</td><td>JOHNSON MEMORIAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150011</td><td>MARION GENERAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150022</td><td>FRANCISCAN HEALTH CRAWFORDSVILLE</td><td>IN</td></tr>
				<tr><td>150026</td><td>GOSHEN GENERAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150037</td><td>HANCOCK REGIONAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150059</td><td>RIVERVIEW HEALTH</td><td>IN</td></tr>
				<tr><td>150065</td><td>SCHNECK MEDICAL CENTER</td><td>IN</td></tr>
				<tr><td>150069</td><td>KING'S DAUGHTERS' HEALTH</td><td>IN</td></tr>
				<tr><td>150076</td><td>SAINT JOSEPH REGIONAL MEDICAL CENTER - PLYMOUTH</td><td>IN</td></tr>
				<tr><td>150086</td><td>HIGHPOINT HEALTH</td><td>IN</td></tr>
				<tr><td>150091</td><td>PARKVIEW HUNTINGTON HOSPITAL</td><td>IN</td></tr>
				<tr><td>150113</td><td>COMMUNITY HOSPITAL OF ANDERSON AND MADISON COUNTY</td><td>IN</td></tr>
				<tr><td>150133</td><td>KOSCIUSKO COMMUNITY HOSPITAL</td><td>IN</td></tr>
				<tr><td>150146</td><td>PARKVIEW NOBLE HOSPITAL</td><td>IN</td></tr>
				<tr><td>150161</td><td>INDIANA UNIVERSITY HEALTH NORTH HOSPITAL</td><td>IN</td></tr>
				<tr><td>160001</td><td>UNITYPOINT HEALTH-MARSHALLTOWN</td><td>IA</td></tr>
				<tr><td>160005</td><td>ST ANTHONY REGIONAL HOSPITAL & NURSING HOME</td><td>IA</td></tr>
				<tr><td>160032</td><td>SKIFF MEDICAL CENTER</td><td>IA</td></tr>
				<tr><td>160104</td><td>UNITY POINT HEALTH TRINITY</td><td>IA</td></tr>
				<tr><td>160112</td><td>SPENCER MUNICIPAL HOSPITAL</td><td>IA</td></tr>
				<tr><td>160117</td><td>FINLEY HOSPITAL</td><td>IA</td></tr>
				<tr><td>170006</td><td>VIA CHRISTI HOSPITAL PITTSBURG INC</td><td>KS</td></tr>
				<tr><td>170023</td><td>ST CATHERINE HOSPITAL</td><td>KS</td></tr>
				<tr><td>170068</td><td>SOUTHWEST MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>170103</td><td>NEWTON MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>170145</td><td>COFFEYVILLE REGIONAL MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>170200</td><td>VIA CHRISTI HOSPITAL WICHITA ST TERESA, INC</td><td>KS</td></tr>
				<tr><td>180002</td><td>WHITESBURG ARH HOSPITAL</td><td>KY</td></tr>
				<tr><td>180018</td><td>ST CLAIRE REGIONAL MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180027</td><td>MURRAY-CALLOWAY COUNTY HOSPITAL</td><td>KY</td></tr>
				<tr><td>180036</td><td>OUR LADY OF BELLEFONTE HOSPITAL</td><td>KY</td></tr>
				<tr><td>180056</td><td>METHODIST HOSPITAL</td><td>KY</td></tr>
				<tr><td>180070</td><td>TWIN LAKES REGIONAL MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180093</td><td>BAPTIST HEALTH MADISONVILLE</td><td>KY</td></tr>
				<tr><td>180124</td><td>TRISTAR GREENVIEW REGIONAL HOSPITAL</td><td>KY</td></tr>
				<tr><td>180127</td><td>FRANKFORT REGIONAL MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180143</td><td>SAINT JOSEPH EAST</td><td>KY</td></tr>
				<tr><td>190013</td><td>WEST CALCASIEU CAMERON HOSPITAL</td><td>LA</td></tr>
				<tr><td>190020</td><td>LANE REGIONAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190053</td><td>JENNINGS AMERICAN LEGION HOSPITAL</td><td>LA</td></tr>
				<tr><td>190144</td><td>MINDEN MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190183</td><td>LEONARD J CHABERT MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190202</td><td>OCHSNER MEDICAL CENTER - BATON ROUGE</td><td>LA</td></tr>
				<tr><td>200001</td><td>ST JOSEPH HOSPITAL</td><td>ME</td></tr>
				<tr><td>200018</td><td>AROOSTOOK MEDICAL CENTER</td><td>ME</td></tr>
				<tr><td>200020</td><td>YORK HOSPITAL</td><td>ME</td></tr>
				<tr><td>200031</td><td>CARY MEDICAL CENTER</td><td>ME</td></tr>
				<tr><td>200034</td><td>ST MARY'S REGIONAL MEDICAL CENTER</td><td>ME</td></tr>
				<tr><td>200050</td><td>MAINE COAST MEMORIAL HOSPITAL</td><td>ME</td></tr>
				<tr><td>200052</td><td>NORTHERN MAINE MEDICAL CENTER</td><td>ME</td></tr>
				<tr><td>200063</td><td>PENOBSCOT BAY MEDICAL CENTER</td><td>ME</td></tr>
				<tr><td>210060</td><td>FORT WASHINGTON HOSPITAL</td><td>MD</td></tr>
				<tr><td>220001</td><td>HEALTH ALLIANCE - CLINTON HOSPITAL</td><td>MA</td></tr>
				<tr><td>220011</td><td>CAMBRIDGE HEALTH ALLIANCE</td><td>MA</td></tr>
				<tr><td>220017</td><td>CARNEY HOSPITAL</td><td>MA</td></tr>
				<tr><td>220019</td><td>HARRINGTON MEMORIAL HOSPITAL-1</td><td>MA</td></tr>
				<tr><td>220024</td><td>HOLYOKE MEDICAL CENTER</td><td>MA</td></tr>
				<tr><td>220029</td><td>ANNA JAQUES HOSPITAL</td><td>MA</td></tr>
				<tr><td>220065</td><td>BAYSTATE NOBLE HOSPITAL</td><td>MA</td></tr>
				<tr><td>220095</td><td>HEYWOOD HOSPITAL -</td><td>MA</td></tr>
				<tr><td>230005</td><td>PROMEDICA BIXBY HOSPITAL</td><td>MI</td></tr>
				<tr><td>230022</td><td>COMMUNITY HEALTH CENTER OF BRANCH COUNTY</td><td>MI</td></tr>
				<tr><td>230035</td><td>SPECTRUM HEALTH UNITED HOSPITAL</td><td>MI</td></tr>
				<tr><td>230040</td><td>SPECTRUM HEALTH PENNOCK</td><td>MI</td></tr>
				<tr><td>230055</td><td>DICKINSON COUNTY MEMORIAL HOSPITAL</td><td>MI</td></tr>
				<tr><td>230069</td><td>SAINT JOSEPH MERCY LIVINGSTON HOSPITAL</td><td>MI</td></tr>
				<tr><td>230080</td><td>MCLAREN CENTRAL MICHIGAN</td><td>MI</td></tr>
				<tr><td>230108</td><td>UP HEALTH SYSTEM PORTAGE</td><td>MI</td></tr>
				<tr><td>230118</td><td>HURON MEDICAL CENTER</td><td>MI</td></tr>
				<tr><td>230121</td><td>MEMORIAL HEALTHCARE</td><td>MI</td></tr>
				<tr><td>230133</td><td>OTSEGO MEMORIAL HOSPITAL</td><td>MI</td></tr>
				<tr><td>230239</td><td>CHIPPEWA COUNTY WAR MEMORIAL HOSPITAL</td><td>MI</td></tr>
				<tr><td>230259</td><td>ST JOSEPH MERCY CHELSEA</td><td>MI</td></tr>
				<tr><td>230303</td><td>MUNSON HEALTHCARE MANISTEE HOSPITAL</td><td>MI</td></tr>
				<tr><td>240020</td><td>CAMBRIDGE MEDICAL CENTER</td><td>MN</td></tr>
				<tr><td>240043</td><td>MAYO CLINIC HEALTH SYSTEM - ALBERT LEA AND AUSTIN</td><td>MN</td></tr>
				<tr><td>240056</td><td>RIDGEVIEW MEDICAL CENTER</td><td>MN</td></tr>
				<tr><td>240066</td><td>LAKEVIEW MEMORIAL HOSPITAL</td><td>MN</td></tr>
				<tr><td>240076</td><td>BUFFALO HOSPITAL</td><td>MN</td></tr>
				<tr><td>240088</td><td>CARRIS HEALTH LLC</td><td>MN</td></tr>
				<tr><td>240104</td><td>ST FRANCIS REGIONAL MEDICAL CENTER</td><td>MN</td></tr>
				<tr><td>240132</td><td>UNITY HOSPITAL</td><td>MN</td></tr>
				<tr><td>240213</td><td>HEALTHEAST WOODWINDS HOSPITAL</td><td>MN</td></tr>
				<tr><td>250020</td><td>WEBSTER GENERAL HOSPITAL/ SWING BED</td><td>MS</td></tr>
				<tr><td>250025</td><td>GILMORE MEMORIAL HOSPITAL</td><td>MS</td></tr>
				<tr><td>250042</td><td>NORTHWEST MISSISSIPPI MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>250043</td><td>NESHOBA COUNTY GENERAL HOSPITAL</td><td>MS</td></tr>
				<tr><td>250077</td><td>WAYNE GENERAL HOSPITAL</td><td>MS</td></tr>
				<tr><td>250082</td><td>DELTA REGIONAL MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>250084</td><td>MERIT HEALTH NATCHEZ</td><td>MS</td></tr>
				<tr><td>250168</td><td>UNIVERSITY OF MISSISSIPPI MEDICAL CENTER- GRENADA</td><td>MS</td></tr>
				<tr><td>260009</td><td>BOTHWELL REGIONAL HEALTH CENTER</td><td>MO</td></tr>
				<tr><td>260052</td><td>MERCY HOSPITAL WASHINGTON</td><td>MO</td></tr>
				<tr><td>260062</td><td>SAINT LUKES NORTH HOSPITAL</td><td>MO</td></tr>
				<tr><td>260078</td><td>OZARKS MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260190</td><td>LEE'S SUMMIT MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260193</td><td>ST MARY'S MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>270003</td><td>ST PETER'S HEALTH</td><td>MT</td></tr>
				<tr><td>270017</td><td>ST JAMES HEALTHCARE</td><td>MT</td></tr>
				<tr><td>270023</td><td>COMMUNITY MEDICAL CENTER</td><td>MT</td></tr>
				<tr><td>280032</td><td>MARY LANNING HEALTHCARE</td><td>NE</td></tr>
				<tr><td>280065</td><td>GREAT PLAINS HEALTH</td><td>NE</td></tr>
				<tr><td>290012</td><td>ST ROSE DOMINICAN HOSPITALS - ROSE DE LIMA CAMPUS</td><td>NV</td></tr>
				<tr><td>290032</td><td>NORTHERN NEVADA MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>300014</td><td>FRISBIE MEMORIAL HOSPITAL</td><td>NH</td></tr>
				<tr><td>300017</td><td>PARKLAND MEDICAL CENTER</td><td>NH</td></tr>
				<tr><td>300019</td><td>CHESHIRE MEDICAL CENTER</td><td>NH</td></tr>
				<tr><td>310069</td><td>INSPIRA MEDICAL CENTER ELMER</td><td>NJ</td></tr>
				<tr><td>310084</td><td>MONMOUTH MEDICAL CENTER-SOUTHERN CAMPUS</td><td>NJ</td></tr>
				<tr><td>310091</td><td>MEMORIAL HOSPITAL OF SALEM COUNTY</td><td>NJ</td></tr>
				<tr><td>320004</td><td>GERALD CHAMPION REGIONAL MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>320018</td><td>MEMORIAL MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>320063</td><td>CARLSBAD MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>320065</td><td>LEA REGIONAL MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>330030</td><td>NEWARK-WAYNE COMMUNITY HOSPITAL</td><td>NY</td></tr>
				<tr><td>330047</td><td>ST MARY'S HOSPITAL AT AMSTERDAM</td><td>NY</td></tr>
				<tr><td>330074</td><td>F F THOMPSON HOSPITAL</td><td>NY</td></tr>
				<tr><td>330164</td><td>HIGHLAND HOSPITAL</td><td>NY</td></tr>
				<tr><td>330188</td><td>MOUNT ST MARY'S HOSPITAL AND  HEALTH CENTER</td><td>NY</td></tr>
				<tr><td>330197</td><td>CANTON-POTSDAM HOSPITAL</td><td>NY</td></tr>
				<tr><td>330222</td><td>SARATOGA HOSPITAL</td><td>NY</td></tr>
				<tr><td>330239</td><td>UPMC CHAUTAUQUA WCA</td><td>NY</td></tr>
				<tr><td>330246</td><td>ST CHARLES HOSPITAL</td><td>NY</td></tr>
				<tr><td>330396</td><td>WOODHULL MEDICAL AND MENTAL HEALTH CENTER</td><td>NY</td></tr>
				<tr><td>340013</td><td>RUTHERFORD REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340016</td><td>HARRIS REGIONAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340060</td><td>UNC ROCKINGHAM</td><td>NC</td></tr>
				<tr><td>340071</td><td>BETSY JOHNSON REGIONAL  HOSPITAL</td><td>NC</td></tr>
				<tr><td>340075</td><td>CAROLINAS HEALTHCARE SYSTEM-BLUE RIDGE</td><td>NC</td></tr>
				<tr><td>340087</td><td>THE MCDOWELL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340096</td><td>LEXINGTON MEMORIAL HOSPITAL INC</td><td>NC</td></tr>
				<tr><td>340097</td><td>HUGH CHATHAM MEMORIAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340123</td><td>RANDOLPH HOSPITAL</td><td>NC</td></tr>
				<tr><td>340129</td><td>LAKE NORMAN REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>340133</td><td>MARTIN GENERAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>360026</td><td>GREENE MEMORIAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360036</td><td>WOOSTER COMMUNITY HOSPITAL</td><td>OH</td></tr>
				<tr><td>360054</td><td>HOLZER MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360055</td><td>STEWARD TRUMBULL MEMORIAL HOSPITAL, INC</td><td>OH</td></tr>
				<tr><td>360058</td><td>MERCER COUNTY JOINT TOWNSHIP COMMUNITY HOSPITAL</td><td>OH</td></tr>
				<tr><td>360065</td><td>FISHER-TITUS HOSPITAL</td><td>OH</td></tr>
				<tr><td>360074</td><td>FLOWER HOSPITAL</td><td>OH</td></tr>
				<tr><td>360081</td><td>MERCY ST CHARLES HOSPITAL</td><td>OH</td></tr>
				<tr><td>360082</td><td>EUCLID HOSPITAL</td><td>OH</td></tr>
				<tr><td>360091</td><td>MEDINA HOSPITAL</td><td>OH</td></tr>
				<tr><td>360125</td><td>ASHTABULA COUNTY MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360144</td><td>SOUTH POINTE HOSPITAL</td><td>OH</td></tr>
				<tr><td>360150</td><td>SUMMA WESTERN RESERVE HOSPITAL</td><td>OH</td></tr>
				<tr><td>360161</td><td>ST JOSEPH WARREN HOSPITAL</td><td>OH</td></tr>
				<tr><td>360174</td><td>UPPER VALLEY MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360185</td><td>SALEM REGIONAL MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360218</td><td>LICKING MEMORIAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360239</td><td>SYCAMORE MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360276</td><td>ST ELIZABETH BOARDMAN HEALTH CENTER</td><td>OH</td></tr>
				<tr><td>360360</td><td>SOIN MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>370002</td><td>ALLIANCEHEALTH WOODWARD</td><td>OK</td></tr>
				<tr><td>370006</td><td>ALLIANCEHEALTH PONCA CITY</td><td>OK</td></tr>
				<tr><td>370016</td><td>INTEGRIS BASS BAPTIST HEALTH CENTER</td><td>OK</td></tr>
				<tr><td>370022</td><td>JACKSON COUNTY MEMORIAL HOSPITAL AUTHORITY</td><td>OK</td></tr>
				<tr><td>370023</td><td>DUNCAN REGIONAL HOSPITAL, INC</td><td>OK</td></tr>
				<tr><td>370049</td><td>STILLWATER MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>370078</td><td>OKLAHOMA STATE UNIVERSITY MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>370089</td><td>NORTHEASTERN HEALTH SYSTEM</td><td>OK</td></tr>
				<tr><td>370149</td><td>ST ANTHONY SHAWNEE HOSPITAL</td><td>OK</td></tr>
				<tr><td>370218</td><td>SAINT FRANCIS HOSPITAL SOUTH, LLC</td><td>OK</td></tr>
				<tr><td>380017</td><td>LEGACY GOOD SAMARITAN MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380022</td><td>SAMARITAN ALBANY GENERAL HOSPITAL</td><td>OR</td></tr>
				<tr><td>380025</td><td>LEGACY MOUNT HOOD MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380038</td><td>PROVIDENCE WILLAMETTE FALLS MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380040</td><td>ST CHARLES REDMOND</td><td>OR</td></tr>
				<tr><td>380071</td><td>WILLAMETTE VALLEY MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>390016</td><td>UPMC JAMESON</td><td>PA</td></tr>
				<tr><td>390032</td><td>ALLEGHENY VALLEY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390035</td><td>ST LUKE'S QUAKERTOWN HOSPITAL</td><td>PA</td></tr>
				<tr><td>390048</td><td>GEISINGER-LEWISTOWN HOSPITAL</td><td>PA</td></tr>
				<tr><td>390068</td><td>HEART OF LANCASTER MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390080</td><td>JEANES HOSPITAL</td><td>PA</td></tr>
				<tr><td>390081</td><td>DELAWARE COUNTY MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390097</td><td>HOLY REDEEMER HOSPITAL AND MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390101</td><td>MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390138</td><td>WAYNESBORO HOSPITAL</td><td>PA</td></tr>
				<tr><td>390147</td><td>MONONGAHELA VALLEY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390163</td><td>ACMH HOSPITAL</td><td>PA</td></tr>
				<tr><td>390194</td><td>BLUE MOUNTAIN HOSPITAL-GNADEN HUETTEN CAMPUS</td><td>PA</td></tr>
				<tr><td>390219</td><td>EXCELA HEALTH LATROBE HOSPITAL</td><td>PA</td></tr>
				<tr><td>390304</td><td>ROXBOROUGH MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>410001</td><td>MEMORIAL HOSPITAL OF RHODE ISLAND</td><td>RI</td></tr>
				<tr><td>410006</td><td>NEWPORT HOSPITAL</td><td>RI</td></tr>
				<tr><td>410008</td><td>SOUTH COUNTY HOSPITAL INC</td><td>RI</td></tr>
				<tr><td>420005</td><td>MCLEOD MEDICAL CENTER - DILLON</td><td>SC</td></tr>
				<tr><td>420015</td><td>BAPTIST EASLEY HOSPITAL</td><td>SC</td></tr>
				<tr><td>420020</td><td>TIDELANDS HEALTH</td><td>SC</td></tr>
				<tr><td>420030</td><td>COLLETON MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420036</td><td>SPRINGS MEMORIAL HOSPITAL</td><td>SC</td></tr>
				<tr><td>420038</td><td>GHS  LAURENS COUNTY MEMORIAL HOSPITAL</td><td>SC</td></tr>
				<tr><td>420055</td><td>CAROLINAS HOSPITAL SYSTEM MARION</td><td>SC</td></tr>
				<tr><td>420103</td><td>PELHAM MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420104</td><td>MOUNT PLEASANT HOSPITAL</td><td>SC</td></tr>
				<tr><td>420107</td><td>MCLEOD HEALTH CHERAW</td><td>SC</td></tr>
				<tr><td>420109</td><td>MCLEOD HEALTH CLARENDON</td><td>SC</td></tr>
				<tr><td>430005</td><td>PRAIRIE LAKES HOSPITAL</td><td>SD</td></tr>
				<tr><td>430008</td><td>BROOKINGS HEALTH SYSTEM</td><td>SD</td></tr>
				<tr><td>430013</td><td>AVERA QUEEN OF PEACE</td><td>SD</td></tr>
				<tr><td>430048</td><td>REGIONAL HEALTH SPEARFISH HOSPITAL</td><td>SD</td></tr>
				<tr><td>440003</td><td>SUMNER REGIONAL MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440025</td><td>LAUGHLIN MEMORIAL HOSPITAL, INC</td><td>TN</td></tr>
				<tr><td>440030</td><td>MORRISTOWN HAMBLEN HOSPITAL ASSOCIATION</td><td>TN</td></tr>
				<tr><td>440046</td><td>TRISTAR HORIZON MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440065</td><td>NORTHCREST MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440072</td><td>TENNOVA HEALTHCARE-DYERSBURG REGIONAL</td><td>TN</td></tr>
				<tr><td>440081</td><td>LECONTE MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440132</td><td>HENRY COUNTY MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440175</td><td>SOUTHERN TENNESSEE REGIONAL HEALTH SYSTEM LAWRENCE</td><td>TN</td></tr>
				<tr><td>440187</td><td>LIVINGSTON REGIONAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440227</td><td>TRISTAR STONECREST MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>450002</td><td>THE HOSPITALS OF PROVIDENCE MEMORIAL CAMPUS</td><td>TX</td></tr>
				<tr><td>450007</td><td>PETERSON REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450104</td><td>GUADALUPE REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450152</td><td>METROPLEX HOSPITAL</td><td>TX</td></tr>
				<tr><td>450176</td><td>MISSION REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450203</td><td>MEDICAL CITY WEATHERFORD</td><td>TX</td></tr>
				<tr><td>450236</td><td>CHRISTUS MOTHER FRANCES HOSPITAL SULPHUR SPRINGS</td><td>TX</td></tr>
				<tr><td>450289</td><td>HARRIS HEALTH SYSTEM</td><td>TX</td></tr>
				<tr><td>450340</td><td>SAN ANGELO COMMUNITY MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450347</td><td>HUNTSVILLE MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450587</td><td>BROWNWOOD REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450659</td><td>PARK PLAZA HOSPITAL</td><td>TX</td></tr>
				<tr><td>450661</td><td>ODESSA REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450669</td><td>MEDICAL CENTER OF LEWISVILLE</td><td>TX</td></tr>
				<tr><td>450716</td><td>CYPRESS FAIRBANKS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450779</td><td>TEXAS HEALTH HARRIS METHODIST HOSPITAL SOUTHWEST F</td><td>TX</td></tr>
				<tr><td>450822</td><td>MEDICAL CITY LAS COLINAS</td><td>TX</td></tr>
				<tr><td>460005</td><td>OGDEN REGIONAL MEDICAL CENTER</td><td>UT</td></tr>
				<tr><td>460007</td><td>CEDAR CITY HOSPITAL</td><td>UT</td></tr>
				<tr><td>460041</td><td>DAVIS HOSPITAL AND MEDICAL CENTER</td><td>UT</td></tr>
				<tr><td>460042</td><td>LAKEVIEW HOSPITAL</td><td>UT</td></tr>
				<tr><td>470011</td><td>BRATTLEBORO MEMORIAL HOSPITAL</td><td>VT</td></tr>
				<tr><td>470012</td><td>SOUTHWESTERN VERMONT MEDICAL CENTER</td><td>VT</td></tr>
				<tr><td>490019</td><td>NOVANT HEALTH UVA HEALTH SYSTEM CULPEPER MED CENTE</td><td>VA</td></tr>
				<tr><td>490020</td><td>JOHN RANDOLPH MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490023</td><td>FAUQUIER HOSPITAL</td><td>VA</td></tr>
				<tr><td>490060</td><td>CLINCH VALLEY MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490088</td><td>BEDFORD MEMORIAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490098</td><td>COMMUNITY MEMORIAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490111</td><td>WYTHE COUNTY COMMUNITY HOSPITAL</td><td>VA</td></tr>
				<tr><td>490115</td><td>TWIN COUNTY REGIONAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490116</td><td>LEWISGALE HOSPITAL PULASKI</td><td>VA</td></tr>
				<tr><td>490126</td><td>LEWISGALE HOSPITAL ALLEGHANY</td><td>VA</td></tr>
				<tr><td>490141</td><td>SPOTSYLVANIA REGIONAL MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490143</td><td>RIVERSIDE DOCTORS' HOSPITAL OF WILLIAMSBURG</td><td>VA</td></tr>
				<tr><td>500033</td><td>SAMARITAN HOSPITAL</td><td>WA</td></tr>
				<tr><td>510002</td><td>GREENBRIER VALLEY MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>510023</td><td>WEIRTON MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>510046</td><td>PRINCETON COMMUNITY HOSPITAL</td><td>WV</td></tr>
				<tr><td>510082</td><td>SUMMERSVILLE REGIONAL MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>520028</td><td>THE MONROE CLINIC</td><td>WI</td></tr>
				<tr><td>520033</td><td>ASPIRUS RIVERVIEW HOSPITAL & CLINICS INC</td><td>WI</td></tr>
				<tr><td>520041</td><td>DIVINE SAVIOR HEALTHCARE</td><td>WI</td></tr>
				<tr><td>520044</td><td>ST NICHOLAS HOSPITAL</td><td>WI</td></tr>
				<tr><td>520048</td><td>MERCY MEDICAL CENTER OF OSHKOSH</td><td>WI</td></tr>
				<tr><td>520057</td><td>SSM HEALTH ST CLARE HOSPITAL - BARABOO</td><td>WI</td></tr>
				<tr><td>520063</td><td>ST JOSEPHS COMMUNITY HOSPITAL OF WEST BEND</td><td>WI</td></tr>
				<tr><td>520071</td><td>FORT MEMORIAL HOSPITAL</td><td>WI</td></tr>
				<tr><td>520076</td><td>BEAVER DAM COMMUNITY HOSPITAL</td><td>WI</td></tr>
				<tr><td>520078</td><td>WHEATON FRANCISCAN HEALTHCARE ST FRANCIS HOSPITAL</td><td>WI</td></tr>
				<tr><td>520091</td><td>HOWARD YOUNG MEDICAL CTR</td><td>WI</td></tr>
				<tr><td>520097</td><td>ST MARYS HOSPITAL MEDICAL CTR</td><td>WI</td></tr>
				<tr><td>520100</td><td>BELOIT MEMORIAL HOSPITAL</td><td>WI</td></tr>
				<tr><td>520102</td><td>AURORA LAKELAND MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>520107</td><td>HOLY FAMILY MEMORIAL</td><td>WI</td></tr>
				<tr><td>520116</td><td>WATERTOWN REGIONAL MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>520139</td><td>AURORA WEST ALLIS MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>520189</td><td>AURORA MEDICAL CTR KENOSHA</td><td>WI</td></tr>
				<tr><td>520202</td><td>ASCENSION ST CLARES HOSPITAL</td><td>WI</td></tr>
				<tr><td>520204</td><td>WHEATON FRANCISCAN HEALTHCARE FRANKLIN</td><td>WI</td></tr>
				<tr><td>520208</td><td>SSM HEALTH ST MARY'S HOSPITAL - JANESVILLE</td><td>WI</td></tr>
				<tr><td>530006</td><td>SHERIDAN MEMORIAL HOSPITAL</td><td>WY</td></tr>
				<tr><td>670043</td><td>CEDAR PARK REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>670056</td><td>SETON MEDICAL CENTER HAYS</td><td>TX</td></tr>
				<tr><td>670068</td><td>TEXAS HEALTH PRESBYTERIAN HOSPITAL FLOWER MOUND</td><td>TX</td></tr>
				<tr><td>670085</td><td>TEXAS HEALTH HARRIS METHODIST HOSPITAL ALLIANCE</td><td>TX</td></tr>
				<tr><td>670098</td><td>RESOLUTE HEALTH HOSPITAL</td><td>TX</td></tr>
				<tr><td>670108</td><td>BAYLOR SCOTT & WHITE MEDICAL CENTER - MARBLE FALLS</td><td>TX</td></tr>
				<tr><td>010114</td><td>MEDICAL WEST, AN AFFILIATE OF UAB HEALTH SYSTEM</td><td>AL</td></tr>
				<tr><td>040050</td><td>OUACHITA COUNTY MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>160067</td><td>COVENANT MEDICAL CENTER</td><td>IA</td></tr>
				<tr><td>010125</td><td>LAKELAND COMMUNITY HOSPITAL</td><td>AL</td></tr>
				<tr><td>010148</td><td>EVERGREEN MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010158</td><td>RUSSELLVILLE HOSPITAL</td><td>AL</td></tr>
				<tr><td>050158</td><td>ENCINO HOSPITAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050248</td><td>NATIVIDAD MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050704</td><td>MISSION COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050736</td><td>MONTEREY PARK HOSPITAL</td><td>CA</td></tr>
				<tr><td>050781</td><td>SONOMA WEST MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>100121</td><td>BARTOW REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100320</td><td>POINCIANA MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>140058</td><td>PASSAVANT AREA HOSPITAL</td><td>IL</td></tr>
				<tr><td>180080</td><td>BAPTIST HEALTH CORBIN</td><td>KY</td></tr>
				<tr><td>190007</td><td>NATCHITOCHES REGIONAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>230095</td><td>WEST BRANCH REGIONAL MEDICAL CENTER</td><td>MI</td></tr>
				<tr><td>230241</td><td>ST JOHN RIVER DISTRICT HOSPITAL</td><td>MI</td></tr>
				<tr><td>330065</td><td>NIAGARA FALLS MEMORIAL MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330086</td><td>MONTEFIORE MOUNT VERNON HOSPITAL</td><td>NY</td></tr>
				<tr><td>330163</td><td>EASTERN NIAGARA HOSPITAL</td><td>NY</td></tr>
				<tr><td>370178</td><td>MEMORIAL HOSPITAL</td><td>OK</td></tr>
				<tr><td>390116</td><td>SUBURBAN COMMUNITY HOSPITAL</td><td>PA</td></tr>
				<tr><td>410004</td><td>ROGER WILLIAMS MEDICAL CENTER</td><td>RI</td></tr>
				<tr><td>450087</td><td>MEDICAL CITY NORTH HILLS</td><td>TX</td></tr>
				<tr><td>450711</td><td>RIO GRANDE REGIONAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>510071</td><td>BLUEFIELD REGIONAL MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>050663</td><td>LOS ANGELES COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>390199</td><td>PUNXSUTAWNEY AREA HOSPITAL</td><td>PA</td></tr>
				<tr><td>050102</td><td>PARKVIEW COMMUNITY HOSPITAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>140210</td><td>HARRISBURG MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>050230</td><td>GARDEN GROVE HOSPITAL & MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>100206</td><td>MEMORIAL HOSPITAL OF TAMPA</td><td>FL</td></tr>
				<tr><td>050167</td><td>SAN JOAQUIN GENERAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>330006</td><td>ST JOSEPH'S MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>500119</td><td>MULTICARE VALLEY HOSPITAL</td><td>WA</td></tr>
				<tr><td>210038</td><td>UNIVERSITY OF MD MEDICAL CENTER MIDTOWN CAMPUS</td><td>MD</td></tr>
				<tr><td>310083</td><td>EAST ORANGE GENERAL HOSPITAL</td><td>NJ</td></tr>
				<tr><td>050378</td><td>PACIFICA HOSPITAL OF THE VALLEY</td><td>CA</td></tr>
				<tr><td>050517</td><td>VICTOR VALLEY GLOBAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050735</td><td>WHITTIER HOSPITAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050763</td><td>SILVER LAKE MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>100183</td><td>CORAL GABLES HOSPITAL</td><td>FL</td></tr>
				<tr><td>140103</td><td>ST BERNARD HOSPITAL</td><td>IL</td></tr>
				<tr><td>140177</td><td>JACKSON PARK HOSPITAL</td><td>IL</td></tr>
				<tr><td>220030</td><td>BAYSTATE WING HOSPITAL AND MEDICAL CENTERS</td><td>MA</td></tr>
				<tr><td>330199</td><td>METROPOLITAN HOSPITAL CENTER</td><td>NY</td></tr>
				<tr><td>330240</td><td>HARLEM HOSPITAL CENTER</td><td>NY</td></tr>
				<tr><td>330397</td><td>INTERFAITH MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>100240</td><td>UMHC - BASCOM PALMER EYE INSTITUTE</td><td>FL</td></tr>
				<tr><td>330385</td><td>NORTH CENTRAL BRONX HOSPITAL</td><td>NY</td></tr>
				<tr><td>450690</td><td>UNIVERSITY OF TEXAS HEALTH SCIENCE CENTER AT TYLER</td><td>TX</td></tr>
				<tr><td>100049</td><td>HIGHLANDS REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100316</td><td>PALM BAY HOSPITAL</td><td>FL</td></tr>
				<tr><td>180005</td><td>HIGHLANDS REGIONAL MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>360236</td><td>MERCY HOSPITAL CLERMONT</td><td>OH</td></tr>
				<tr><td>030123</td><td>SCOTTSDALE THOMPSON PEAK MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>460015</td><td>LOGAN REGIONAL HOSPITAL</td><td>UT</td></tr>
				<tr><td>060006</td><td>MONTROSE MEMORIAL HOSPITAL</td><td>CO</td></tr>
				<tr><td>100140</td><td>BAPTIST MEDICAL CENTER - NASSAU</td><td>FL</td></tr>
				<tr><td>110226</td><td>DEKALB MEDICAL CENTER AT HILLANDALE</td><td>GA</td></tr>
				<tr><td>140275</td><td>GENESIS HEALTH SYSTEM</td><td>IL</td></tr>
				<tr><td>160080</td><td>MERCY MEDICAL CENTER-CLINTON</td><td>IA</td></tr>
				<tr><td>260025</td><td>HANNIBAL REGIONAL HOSPITAL</td><td>MO</td></tr>
				<tr><td>330085</td><td>AURELIA OSBORN FOX MEMORIAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>360040</td><td>KNOX COMMUNITY HOSPITAL</td><td>OH</td></tr>
				<tr><td>390146</td><td>WARREN GENERAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>440110</td><td>FORT LOUDON MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>460023</td><td>AMERICAN FORK HOSPITAL</td><td>UT</td></tr>
				<tr><td>490033</td><td>WARREN MEMORIAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>010164</td><td>COOSA VALLEY MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>040051</td><td>DREW MEMORIAL HOSPITAL</td><td>AR</td></tr>
				<tr><td>040072</td><td>BAPTIST HEALTH MEDICAL CENTER-STUTTGART</td><td>AR</td></tr>
				<tr><td>040137</td><td>ST VINCENT MEDICAL CENTER/NORTH</td><td>AR</td></tr>
				<tr><td>050205</td><td>EAST VALLEY GLENDORA HOSPITAL</td><td>CA</td></tr>
				<tr><td>050281</td><td>ALHAMBRA HOSPITAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050313</td><td>SUTTER TRACY COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050526</td><td>HUNTINGTON BEACH HOSPITAL</td><td>CA</td></tr>
				<tr><td>050588</td><td>SAN DIMAS COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050597</td><td>FOOTHILL PRESBYTERIAN HOSPITAL</td><td>CA</td></tr>
				<tr><td>050758</td><td>MONTCLAIR HOSPITAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050771</td><td>COAST PLAZA HOSPITAL</td><td>CA</td></tr>
				<tr><td>100099</td><td>LAKE WALES MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>110032</td><td>STEPHENS COUNTY HOSPITAL</td><td>GA</td></tr>
				<tr><td>110089</td><td>COFFEE REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>140001</td><td>GRAHAM HOSPITAL ASSOCIATION</td><td>IL</td></tr>
				<tr><td>140143</td><td>ST MARGARETS HOSPITAL</td><td>IL</td></tr>
				<tr><td>140147</td><td>RICHLAND MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140307</td><td>METRO-EAST SERVICES INC</td><td>IL</td></tr>
				<tr><td>150030</td><td>HENRY COUNTY MEMORIAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150072</td><td>MEMORIAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>150097</td><td>MAJOR HOSPITAL</td><td>IN</td></tr>
				<tr><td>150157</td><td>ST VINCENT CARMEL HOSPITAL INC</td><td>IN</td></tr>
				<tr><td>150183</td><td>MONROE HOSPITAL</td><td>IN</td></tr>
				<tr><td>160147</td><td>GRINNELL REGIONAL MEDICAL CENTER</td><td>IA</td></tr>
				<tr><td>170009</td><td>SAINT JOHN HOSPITAL</td><td>KS</td></tr>
				<tr><td>170027</td><td>PRATT REGIONAL MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>180020</td><td>MIDDLESBORO APPALACHIAN REGIONAL HEALTHCARE HOSPIT</td><td>KY</td></tr>
				<tr><td>180025</td><td>FLAGET MEMORIAL HOSPITAL</td><td>KY</td></tr>
				<tr><td>180066</td><td>LOGAN MEMORIAL HOSPITAL</td><td>KY</td></tr>
				<tr><td>180078</td><td>PAUL B HALL REGIONAL MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180087</td><td>TAYLOR REGIONAL HOSPITAL</td><td>KY</td></tr>
				<tr><td>180092</td><td>CLARK REGIONAL MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180116</td><td>JACKSON PURCHASE MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>190044</td><td>ACADIA GENERAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>190242</td><td>ST ELIZABETH HOSPITAL</td><td>LA</td></tr>
				<tr><td>220049</td><td>MARLBOROUGH HOSPITAL</td><td>MA</td></tr>
				<tr><td>220083</td><td>BETH ISRAEL DEACONESS HOSPITAL - NEEDHAM</td><td>MA</td></tr>
				<tr><td>230030</td><td>MIDMICHIGAN MEDICAL CENTER-GRATIOT</td><td>MI</td></tr>
				<tr><td>230180</td><td>MIDMICHIGAN MEDICAL CENTER-CLARE</td><td>MI</td></tr>
				<tr><td>240018</td><td>MAYO CLINIC HEALTH SYSTEM - RED WING</td><td>MN</td></tr>
				<tr><td>240030</td><td>DOUGLAS COUNTY HOSPITAL</td><td>MN</td></tr>
				<tr><td>240040</td><td>UNIVERSITY MEDICAL CENTER-MESABI/ MESABA CLINICS</td><td>MN</td></tr>
				<tr><td>240044</td><td>WINONA HEALTH SERVICES</td><td>MN</td></tr>
				<tr><td>240101</td><td>ESSENTIA HEALTH ST MARYS - DETROIT LAKES</td><td>MN</td></tr>
				<tr><td>240214</td><td>MAPLE GROVE HOSPITAL</td><td>MN</td></tr>
				<tr><td>250050</td><td>OCH REGIONAL MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>250093</td><td>BOLIVAR MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>260057</td><td>CAMERON REGIONAL MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260059</td><td>MERCY HOSPITAL LEBANON</td><td>MO</td></tr>
				<tr><td>260064</td><td>SSM HEALTH ST. MARY'S HOSPITAL-AUDRAIN</td><td>MO</td></tr>
				<tr><td>260097</td><td>WESTERN MISSOURI MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260163</td><td>PARKLAND HEALTH CENTER</td><td>MO</td></tr>
				<tr><td>280077</td><td>FREMONT HEALTH MEDICAL CENTER</td><td>NE</td></tr>
				<tr><td>280134</td><td>KEARNEY REGIONAL MEDICAL CENTER</td><td>NE</td></tr>
				<tr><td>290057</td><td>HENDERSON HOSPITAL</td><td>NV</td></tr>
				<tr><td>330073</td><td>UNITED MEMORIAL MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330215</td><td>ROME MEMORIAL HOSPITAL, INC</td><td>NY</td></tr>
				<tr><td>330218</td><td>OSWEGO HOSPITAL</td><td>NY</td></tr>
				<tr><td>330238</td><td>NICHOLAS H NOYES MEMORIAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>340023</td><td>PARK RIDGE HEALTH</td><td>NC</td></tr>
				<tr><td>340144</td><td>DAVIS REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>360109</td><td>COSHOCTON REGIONAL MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360203</td><td>SOUTHEASTERN OHIO REGIONAL MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>370039</td><td>HILLCREST HOSPITAL CLAREMORE</td><td>OK</td></tr>
				<tr><td>370211</td><td>INTEGRIS CANADIAN VALLEY HOSPITAL</td><td>OK</td></tr>
				<tr><td>370236</td><td>INTEGRIS HEALTH EDMOND</td><td>OK</td></tr>
				<tr><td>380082</td><td>PROVIDENCE MILWAUKIE HOSPITAL</td><td>OR</td></tr>
				<tr><td>390160</td><td>CANONSBURG GENERAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>410013</td><td>WESTERLY HOSPITAL</td><td>RI</td></tr>
				<tr><td>420089</td><td>EAST COOPER MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420106</td><td>PALMETTO HEALTH BAPTIST PARKRIDGE</td><td>SC</td></tr>
				<tr><td>440020</td><td>SOUTHERN TENNESSEE REGIONAL HEALTH SYSTEM PULASKI</td><td>TN</td></tr>
				<tr><td>440033</td><td>TENNOVA HEALTHCARE-LAFOLLETT MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440050</td><td>TAKOMA REGIONAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440083</td><td>TENNOVA HEALTHCARE - JAMESTOWN</td><td>TN</td></tr>
				<tr><td>440151</td><td>SAINT THOMAS RIVER PARK HOSPITAL</td><td>TN</td></tr>
				<tr><td>440176</td><td>INDIAN PATH MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440184</td><td>FRANKLIN WOODS COMMUNITY HOSPITAL</td><td>TN</td></tr>
				<tr><td>440185</td><td>TENNOVA HEALTHCARE-CLEVELAND</td><td>TN</td></tr>
				<tr><td>440193</td><td>TENNOVA HEALTHCARE-LEBANON</td><td>TN</td></tr>
				<tr><td>450099</td><td>PAMPA REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450130</td><td>NIX HEALTH CARE SYSTEM</td><td>TX</td></tr>
				<tr><td>450379</td><td>DALLAS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450586</td><td>SEYMOUR HOSPITAL</td><td>TX</td></tr>
				<tr><td>450596</td><td>LAKE GRANBURY MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450747</td><td>PALESTINE REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450855</td><td>HARLINGEN MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>470024</td><td>NORTHWESTERN MEDICAL CENTER INC</td><td>VT</td></tr>
				<tr><td>490001</td><td>NORTON COMMUNITY HOSPITAL</td><td>VA</td></tr>
				<tr><td>490089</td><td>CARILION FRANKLIN MEMORIAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490114</td><td>LONESOME PINE HOSPITAL</td><td>VA</td></tr>
				<tr><td>510030</td><td>DAVIS MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>510038</td><td>STONEWALL JACKSON MEMORIAL HOSPITAL</td><td>WV</td></tr>
				<tr><td>510047</td><td>FAIRMONT REGIONAL MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>510062</td><td>BECKLEY ARH HOSPITAL</td><td>WV</td></tr>
				<tr><td>520019</td><td>ASCENSION ST MARYS HOSPITAL</td><td>WI</td></tr>
				<tr><td>670004</td><td>ST MARKS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>670044</td><td>TEXAS HEALTH PRESBYTERIAN HOSPITAL ROCKWALL</td><td>TX</td></tr>
				<tr><td>670053</td><td>ST LUKE'S SUGAR LAND HOSPITAL</td><td>TX</td></tr>
				<tr><td>670075</td><td>ST LUKE'S HOSPITAL AT THE VINTAGE</td><td>TX</td></tr>
				<tr><td>050547</td><td>SONOMA DEVELOPMENTAL CENTER</td><td>CA</td></tr>
				<tr><td>070039</td><td>MASONICARE HEALTH CENTER</td><td>CT</td></tr>
				<tr><td>120004</td><td>WAHIAWA GENERAL HOSPITAL</td><td>HI</td></tr>
				<tr><td>140120</td><td>PEKIN MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>160008</td><td>KEOKUK AREA HOSPITAL</td><td>IA</td></tr>
				<tr><td>170074</td><td>GEARY COMMUNITY HOSPITAL</td><td>KS</td></tr>
				<tr><td>240064</td><td>GRAND ITASCA CLINIC AND HOSPITAL</td><td>MN</td></tr>
				<tr><td>250134</td><td>WHITFIELD MEDICAL SURGICAL HOSPITAL</td><td>MS</td></tr>
				<tr><td>330115</td><td>ONEIDA HEALTHCARE</td><td>NY</td></tr>
				<tr><td>330175</td><td>CORTLAND REGIONAL MEDICAL CENTER, INC</td><td>NY</td></tr>
				<tr><td>440109</td><td>HARDIN MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>450351</td><td>TEXAS HEALTH HARRIS METHODIST HOSPITAL STEPHENVILL</td><td>TX</td></tr>
				<tr><td>450754</td><td>HAMILTON GENERAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>490127</td><td>BUCHANAN GENERAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>510013</td><td>REYNOLDS MEMORIAL HOSPITAL</td><td>WV</td></tr>
				<tr><td>010044</td><td>MARION REGIONAL MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010045</td><td>FAYETTE MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010052</td><td>LAKE MARTIN COMMUNITY HOSPITAL</td><td>AL</td></tr>
				<tr><td>010086</td><td>NORTHWEST MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010157</td><td>SHOALS HOSPITAL</td><td>AL</td></tr>
				<tr><td>030022</td><td>MARICOPA MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030068</td><td>MT. GRAHAM REGIONAL MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030130</td><td>BANNER IRONWOOD MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030134</td><td>BANNER GOLDFIELD MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>030137</td><td>GREEN VALLEY HOSPITAL</td><td>AZ</td></tr>
				<tr><td>040001</td><td>SILOAM SPRINGS REGIONAL HOSPITAL</td><td>AR</td></tr>
				<tr><td>040002</td><td>JOHNSON REGIONAL MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040018</td><td>SPARKS MEDICAL CENTER - VAN BUREN</td><td>AR</td></tr>
				<tr><td>040076</td><td>BAPTIST HEALTH MEDICAL CENTER-HOT SPRINGS COUNTY</td><td>AR</td></tr>
				<tr><td>040154</td><td>BAPTIST HEALTH MEDICAL CENTER-CONWAY</td><td>AR</td></tr>
				<tr><td>050040</td><td>LAC/OLIVE VIEW-UCLA MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050054</td><td>SAN GORGONIO MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050055</td><td>CALIFORNIA PACIFIC MEDICAL CTR - ST. LUKE'S CAMPUS</td><td>CA</td></tr>
				<tr><td>050071</td><td>KAISER FOUNDATION HOSPITAL-SANTA CLARA</td><td>CA</td></tr>
				<tr><td>050089</td><td>COMMUNITY HOSPITAL OF SAN BERNARDINO</td><td>CA</td></tr>
				<tr><td>050091</td><td>COMMUNITY HOSPITAL OF HUNTINGTON PARK</td><td>CA</td></tr>
				<tr><td>050189</td><td>GEORGE L MEE MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050528</td><td>MEMORIAL HOSPITAL LOS BANOS</td><td>CA</td></tr>
				<tr><td>050534</td><td>JOHN F KENNEDY MEMORIAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>050568</td><td>MADERA COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050604</td><td>KAISER FOUNDATION HOSPITAL-SAN JOSE</td><td>CA</td></tr>
				<tr><td>050727</td><td>COMMUNITY HOSPITAL OF LONG BEACH</td><td>CA</td></tr>
				<tr><td>050748</td><td>KAISER FOUNDATION HOSPITAL MANTECA</td><td>CA</td></tr>
				<tr><td>050767</td><td>KAISER FOUNDATION HOSPITAL - VACAVILLE</td><td>CA</td></tr>
				<tr><td>050772</td><td>KAISER FOUNDATION HOSPITAL - ROSEVILLE</td><td>CA</td></tr>
				<tr><td>050776</td><td>COLLEGE MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050777</td><td>KAISER FOUNDATION HOSPITAL - SAN LEANDRO</td><td>CA</td></tr>
				<tr><td>060004</td><td>PLATTE VALLEY MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060008</td><td>SAN LUIS VALLEY HEALTH</td><td>CO</td></tr>
				<tr><td>060016</td><td>CENTURA HEALTH-ST THOMAS MORE HOSPITAL</td><td>CO</td></tr>
				<tr><td>060032</td><td>ROSE MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060044</td><td>COLORADO PLAINS MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060054</td><td>COMMUNITY HOSPITAL</td><td>CO</td></tr>
				<tr><td>060075</td><td>VALLEY VIEW HOSPITAL ASSOCIATION</td><td>CO</td></tr>
				<tr><td>060076</td><td>STERLING REGIONAL MEDCENTER</td><td>CO</td></tr>
				<tr><td>060096</td><td>VAIL HEALTH HOSPITAL</td><td>CO</td></tr>
				<tr><td>060103</td><td>CENTURA HEALTH-AVISTA ADVENTIST HOSPITAL</td><td>CO</td></tr>
				<tr><td>060125</td><td>CASTLE ROCK ADVENTIST HOSPITAL</td><td>CO</td></tr>
				<tr><td>070008</td><td>JOHNSON MEMORIAL HOSPITAL</td><td>CT</td></tr>
				<tr><td>070012</td><td>ROCKVILLE GENERAL HOSPITAL</td><td>CT</td></tr>
				<tr><td>070019</td><td>MILFORD HOSPITAL, INC</td><td>CT</td></tr>
				<tr><td>100069</td><td>FLORIDA HOSPITAL CARROLLWOOD</td><td>FL</td></tr>
				<tr><td>100102</td><td>SHANDS LAKE SHORE REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100107</td><td>LEHIGH REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100124</td><td>SANTA ROSA MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100130</td><td>LAKESIDE MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100150</td><td>LOWER KEYS MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>100175</td><td>DESOTO MEMORIAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100200</td><td>BROWARD HEALTH IMPERIAL POINT</td><td>FL</td></tr>
				<tr><td>100255</td><td>TAMPA COMMUNITY HOSPITAL</td><td>FL</td></tr>
				<tr><td>100291</td><td>STEWARD MELBOURNE HOSPITAL</td><td>FL</td></tr>
				<tr><td>110015</td><td>TANNER MEDICAL CENTER VILLA RICA</td><td>GA</td></tr>
				<tr><td>110027</td><td>ST MARY'S SACRED HEART HOSPITAL, INC</td><td>GA</td></tr>
				<tr><td>110092</td><td>DODGE COUNTY HOSPITAL</td><td>GA</td></tr>
				<tr><td>110132</td><td>MEMORIAL HOSPITAL AND MANOR</td><td>GA</td></tr>
				<tr><td>110135</td><td>TAYLOR REGIONAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110146</td><td>SOUTHEAST GEORGIA HEALTH SYSTEM- CAMDEN CAMPUS</td><td>GA</td></tr>
				<tr><td>110153</td><td>PERRY HOSPITAL</td><td>GA</td></tr>
				<tr><td>110189</td><td>FANNIN REGIONAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110236</td><td>CHI MEMORIAL HOSPITAL -  GEORGIA</td><td>GA</td></tr>
				<tr><td>120028</td><td>NORTH HAWAII COMMUNITY HOSPITAL</td><td>HI</td></tr>
				<tr><td>130025</td><td>MADISON MEMORIAL HOSPITAL</td><td>ID</td></tr>
				<tr><td>140068</td><td>ROSELAND COMMUNITY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140089</td><td>MC DONOUGH DISTRICT HOSPITAL</td><td>IL</td></tr>
				<tr><td>140125</td><td>GATEWAY REGIONAL MEDICAL CENTER</td><td>IL</td></tr>
				<tr><td>140145</td><td>ST JOSEPHS HOSPITAL</td><td>IL</td></tr>
				<tr><td>140167</td><td>IROQUOIS MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140181</td><td>SOUTH SHORE HOSPITAL</td><td>IL</td></tr>
				<tr><td>140206</td><td>NORWEGIAN-AMERICAN HOSPITAL</td><td>IL</td></tr>
				<tr><td>140234</td><td>ILLINOIS VALLEY COMMUNITY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140294</td><td>CROSSROADS COMMUNITY HOSPITAL</td><td>IL</td></tr>
				<tr><td>150045</td><td>DEKALB HEALTH</td><td>IN</td></tr>
				<tr><td>150057</td><td>FRANCISCAN HEALTH MOORESVILLE</td><td>IN</td></tr>
				<tr><td>150061</td><td>DAVIESS COMMUNITY HOSPITAL</td><td>IN</td></tr>
				<tr><td>150102</td><td>STARKE HOSPITAL</td><td>IN</td></tr>
				<tr><td>150104</td><td>WITHAM HEALTH SERVICES</td><td>IN</td></tr>
				<tr><td>150150</td><td>DUPONT HOSPITAL LLC</td><td>IN</td></tr>
				<tr><td>150176</td><td>KENTUCKIANA MEDICAL CENTER LLC</td><td>IN</td></tr>
				<tr><td>150181</td><td>ST VINCENT FISHERS HOSPITAL INC</td><td>IN</td></tr>
				<tr><td>160013</td><td>TRINITY MUSCATINE</td><td>IA</td></tr>
				<tr><td>160089</td><td>OTTUMWA REGIONAL HEALTH CENTER</td><td>IA</td></tr>
				<tr><td>160101</td><td>BROADLAWNS MEDICAL CENTER</td><td>IA</td></tr>
				<tr><td>160122</td><td>FORT MADISON COMMUNITY HOSPITAL</td><td>IA</td></tr>
				<tr><td>170014</td><td>RANSOM MEMORIAL HOSPITAL</td><td>KS</td></tr>
				<tr><td>170017</td><td>SUSAN B ALLEN MEMORIAL HOSPITAL</td><td>KS</td></tr>
				<tr><td>170105</td><td>MCPHERSON HOSPITAL INC</td><td>KS</td></tr>
				<tr><td>170109</td><td>MIAMI COUNTY MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>170120</td><td>LABETTE HEALTH</td><td>KS</td></tr>
				<tr><td>170133</td><td>SAINT LUKE'S CUSHING HOSPITAL</td><td>KS</td></tr>
				<tr><td>170150</td><td>SOUTH CENTRAL KS  MED CENTER</td><td>KS</td></tr>
				<tr><td>170175</td><td>WESTERN PLAINS MEDICAL COMPLEX</td><td>KS</td></tr>
				<tr><td>170191</td><td>GREAT BEND REGIONAL HOSPITAL</td><td>KS</td></tr>
				<tr><td>180004</td><td>OWENSBORO HEALTH MUHLENBERG COMMUNITY HOSPITAL</td><td>KY</td></tr>
				<tr><td>180016</td><td>JEWISH HOSPITAL - SHELBYVILLE</td><td>KY</td></tr>
				<tr><td>180019</td><td>MEADOWVIEW REGIONAL MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180021</td><td>PINEVILLE COMMUNITY HOSPITAL</td><td>KY</td></tr>
				<tr><td>180024</td><td>SPRING VIEW HOSPITAL</td><td>KY</td></tr>
				<tr><td>180043</td><td>MEMORIAL HOSPITAL</td><td>KY</td></tr>
				<tr><td>180046</td><td>BOURBON COMMUNITY HOSPITAL</td><td>KY</td></tr>
				<tr><td>180049</td><td>BAPTIST HEALTH RICHMOND</td><td>KY</td></tr>
				<tr><td>180050</td><td>HARLAN ARH HOSPITAL</td><td>KY</td></tr>
				<tr><td>180053</td><td>FLEMING COUNTY HOSPITAL</td><td>KY</td></tr>
				<tr><td>180064</td><td>SAINT JOSEPH MOUNT STERLING</td><td>KY</td></tr>
				<tr><td>180069</td><td>TUG VALLEY ARH REGIONAL MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180101</td><td>GEORGETOWN COMMUNITY HOSPITAL</td><td>KY</td></tr>
				<tr><td>180128</td><td>THREE RIVERS MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180138</td><td>BAPTIST HEALTH LA GRANGE</td><td>KY</td></tr>
				<tr><td>180139</td><td>KENTUCKY RIVER MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>190014</td><td>TECHE REGIONAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190164</td><td>BYRD REGIONAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>200008</td><td>MERCY HOSPITAL</td><td>ME</td></tr>
				<tr><td>210013</td><td>BON SECOURS HOSPITAL</td><td>MD</td></tr>
				<tr><td>210017</td><td>GARRETT COUNTY MEMORIAL HOSPITAL</td><td>MD</td></tr>
				<tr><td>210030</td><td>UNIVERSITY OF MD SHORE MEDICAL CTR AT CHESTERTOWN</td><td>MD</td></tr>
				<tr><td>220058</td><td>CLINTON HOSPITAL ASSOCIATION</td><td>MA</td></tr>
				<tr><td>220177</td><td>NANTUCKET COTTAGE HOSPITAL</td><td>MA</td></tr>
				<tr><td>230085</td><td>BRONSON SOUTH HAVEN HOSPITAL</td><td>MI</td></tr>
				<tr><td>230093</td><td>SPECTRUM HEALTH BIG RAPIDS HOSPITAL</td><td>MI</td></tr>
				<tr><td>230100</td><td>TAWAS ST JOSEPH HOSPITAL</td><td>MI</td></tr>
				<tr><td>230174</td><td>NORTH OTTAWA COMMUNITY HEALTH SYSTEM</td><td>MI</td></tr>
				<tr><td>230208</td><td>SPARROW CARSON HOSPITAL</td><td>MI</td></tr>
				<tr><td>240019</td><td>ESSENTIA HEALTH DULUTH</td><td>MN</td></tr>
				<tr><td>240052</td><td>LAKE REGION HEALTHCARE CORPORATION</td><td>MN</td></tr>
				<tr><td>240069</td><td>OWATONNA HOSPITAL</td><td>MN</td></tr>
				<tr><td>240071</td><td>DISTRICT ONE HOSPITAL</td><td>MN</td></tr>
				<tr><td>240084</td><td>ESSENTIA HEALTH VIRGINIA</td><td>MN</td></tr>
				<tr><td>240141</td><td>FAIRVIEW NORTHLAND REGIONAL HOSPITAL</td><td>MN</td></tr>
				<tr><td>240187</td><td>HUTCHINSON HEALTH</td><td>MN</td></tr>
				<tr><td>250002</td><td>TISHOMINGO HEALTH SERVICES INC</td><td>MS</td></tr>
				<tr><td>250038</td><td>MERIT HEALTH MADISON</td><td>MS</td></tr>
				<tr><td>250044</td><td>BAPTIST MEMORIAL HOSPITAL BOONEVILLE</td><td>MS</td></tr>
				<tr><td>250057</td><td>KING'S DAUGHTERS MEDICAL CENTER-BROOKHAVEN</td><td>MS</td></tr>
				<tr><td>250117</td><td>HIGHLAND COMMUNITY  HOSPITAL</td><td>MS</td></tr>
				<tr><td>250123</td><td>GARDEN PARK MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>250128</td><td>PANOLA MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>250162</td><td>HANCOCK MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>250167</td><td>METHODIST HEALTHCARE - OLIVE BRANCH HOSPITAL</td><td>MS</td></tr>
				<tr><td>260015</td><td>TWIN RIVERS REGIONAL MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260022</td><td>NORTHEAST REGIONAL MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260024</td><td>TEXAS COUNTY MEMORIAL HOSPITAL</td><td>MO</td></tr>
				<tr><td>260034</td><td>BATES COUNTY MEMORIAL HOSPITAL</td><td>MO</td></tr>
				<tr><td>260061</td><td>NEVADA REGIONAL MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260074</td><td>MOBERLY REGIONAL MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260175</td><td>GOLDEN VALLEY MEMORIAL HOSPITAL</td><td>MO</td></tr>
				<tr><td>260176</td><td>DES PERES HOSPITAL</td><td>MO</td></tr>
				<tr><td>260195</td><td>CITIZENS MEMORIAL HOSPITAL</td><td>MO</td></tr>
				<tr><td>260214</td><td>BELTON REGIONAL MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>260219</td><td>PROGRESS WEST HOSPITAL</td><td>MO</td></tr>
				<tr><td>270086</td><td>GREAT FALLS CLINIC HOSPITAL</td><td>MT</td></tr>
				<tr><td>280105</td><td>CHI HEALTH MIDLANDS</td><td>NE</td></tr>
				<tr><td>280111</td><td>COLUMBUS COMMUNITY HOSPITAL</td><td>NE</td></tr>
				<tr><td>290008</td><td>NORTHEASTERN NEVADA REGIONAL HOSPITAL</td><td>NV</td></tr>
				<tr><td>290049</td><td>RENOWN SOUTH MEADOWS MEDICAL CENTER</td><td>NV</td></tr>
				<tr><td>320016</td><td>GILA REGIONAL MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>320017</td><td>LOVELACE WOMEN'S HOSPITAL</td><td>NM</td></tr>
				<tr><td>320022</td><td>PLAINS REGIONAL MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>320038</td><td>REHOBOTH MCKINLEY CHRISTIAN HEALTH CARE SERVICES</td><td>NM</td></tr>
				<tr><td>320089</td><td>UNM SANDOVAL REGIONAL MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>330079</td><td>ADIRONDACK MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330084</td><td>ALICE HYDE MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330096</td><td>JONES MEMORIAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>330135</td><td>BON SECOURS COMMUNITY HOSPITAL</td><td>NY</td></tr>
				<tr><td>330151</td><td>ST JAMES MERCY HOSPITAL</td><td>NY</td></tr>
				<tr><td>330205</td><td>ST ANTHONY COMMUNITY HOSPITAL</td><td>NY</td></tr>
				<tr><td>330211</td><td>CLAXTON-HEPBURN MEDICAL CENTER</td><td>NY</td></tr>
				<tr><td>330276</td><td>NATHAN LITTAUER HOSPITAL</td><td>NY</td></tr>
				<tr><td>340037</td><td>CAROLINAS HEALTHCARE SYSTEM KINGS MOUNTAIN</td><td>NC</td></tr>
				<tr><td>340159</td><td>PERSON MEMORIAL HOSPITAL</td><td>NC</td></tr>
				<tr><td>340188</td><td>CAPE FEAR VALLEY HOKE HOSPITAL</td><td>NC</td></tr>
				<tr><td>360002</td><td>UNIVERSITY HOSPITALS SAMARITAN MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360013</td><td>WILSON MEMORIAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360014</td><td>OHIOHEALTH O'BLENESS HOSPITAL</td><td>OH</td></tr>
				<tr><td>360032</td><td>GRAND LAKE HEALTH SYSTEM</td><td>OH</td></tr>
				<tr><td>360044</td><td>WAYNE HOSPITAL</td><td>OH</td></tr>
				<tr><td>360046</td><td>MCCULLOUGH-HYDE MEMORIAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360071</td><td>VAN WERT COUNTY HOSPITAL</td><td>OH</td></tr>
				<tr><td>360080</td><td>EAST OHIO REGIONAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360089</td><td>MERCY TIFFIN HOSPITAL</td><td>OH</td></tr>
				<tr><td>360131</td><td>ALLIANCE COMMUNITY HOSPITAL</td><td>OH</td></tr>
				<tr><td>360151</td><td>AFFINITY MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360156</td><td>MEMORIAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360170</td><td>BERGER HOSPITAL</td><td>OH</td></tr>
				<tr><td>360197</td><td>MARY RUTAN HOSPITAL</td><td>OH</td></tr>
				<tr><td>360210</td><td>GRADY MEMORIAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360259</td><td>BAY PARK COMMUNITY HOSPITAL</td><td>OH</td></tr>
				<tr><td>360270</td><td>MERCY HOSPITAL OF DEFIANCE</td><td>OH</td></tr>
				<tr><td>360348</td><td>DUBLIN METHODIST HOSPITAL</td><td>OH</td></tr>
				<tr><td>360365</td><td>AVITA ONTARIO</td><td>OH</td></tr>
				<tr><td>370004</td><td>INTEGRIS MIAMI HOSPITAL</td><td>OK</td></tr>
				<tr><td>370011</td><td>MERCY HOSPITAL EL RENO</td><td>OK</td></tr>
				<tr><td>370019</td><td>GREAT PLAINS REGIONAL MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>370048</td><td>MCCURTAIN MEMORIAL HOSPITAL</td><td>OK</td></tr>
				<tr><td>370054</td><td>GRADY MEMORIAL HOSPITAL</td><td>OK</td></tr>
				<tr><td>370112</td><td>SEQUOYAH COUNTY-CITY OF SALLISAW HOSPITAL AUTHORIT</td><td>OK</td></tr>
				<tr><td>370113</td><td>INTEGRIS GROVE HOSPITAL</td><td>OK</td></tr>
				<tr><td>370156</td><td>PAULS VALLEY HOSPITAL AUTHORITY</td><td>OK</td></tr>
				<tr><td>370227</td><td>ST JOHN OWASSO</td><td>OK</td></tr>
				<tr><td>370235</td><td>ST JOHN BROKEN ARROW, INC</td><td>OK</td></tr>
				<tr><td>380001</td><td>MID-COLUMBIA MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380037</td><td>PROVIDENCE NEWBERG MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>380052</td><td>SAINT ALPHONSUS MEDICAL CENTER - ONTARIO, INC</td><td>OR</td></tr>
				<tr><td>380056</td><td>SANTIAM HOSPITAL</td><td>OR</td></tr>
				<tr><td>390003</td><td>GEISINGER-BLOOMSBURG HOSPITAL</td><td>PA</td></tr>
				<tr><td>390039</td><td>SOMERSET HOSPITAL</td><td>PA</td></tr>
				<tr><td>390090</td><td>WEST PENN HOSPITAL</td><td>PA</td></tr>
				<tr><td>390118</td><td>BRADFORD REGIONAL MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390197</td><td>SACRED HEART HOSPITAL</td><td>PA</td></tr>
				<tr><td>390217</td><td>EXCELA HEALTH FRICK HOSPITAL</td><td>PA</td></tr>
				<tr><td>390236</td><td>GUTHRIE TOWANDA MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390266</td><td>GROVE CITY MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>410005</td><td>OUR LADY OF FATIMA HOSPITAL</td><td>RI</td></tr>
				<tr><td>420011</td><td>CANNON MEMORIAL HOSPITAL</td><td>SC</td></tr>
				<tr><td>420019</td><td>CHESTER REGIONAL MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>420033</td><td>GHS GREER MEMORIAL HOSPITAL</td><td>SC</td></tr>
				<tr><td>420043</td><td>MARY BLACK HEALTH SYSTEM GAFFNEY</td><td>SC</td></tr>
				<tr><td>420053</td><td>NEWBERRY COUNTY MEMORIAL HOSPITAL</td><td>SC</td></tr>
				<tr><td>430015</td><td>AVERA ST MARY'S HOSPITAL</td><td>SD</td></tr>
				<tr><td>440007</td><td>UNITY MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440016</td><td>BAPTIST MEMORIAL HOSPITAL HUNTINGDON</td><td>TN</td></tr>
				<tr><td>440018</td><td>SYCAMORE SHOALS HOSPITAL</td><td>TN</td></tr>
				<tr><td>440031</td><td>ROANE MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440032</td><td>WELLMONT HAWKINS COUNTY MEMORIAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440056</td><td>TENNOVA HEALTHCARE-JEFFERSON MEMORIAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440057</td><td>CLAIBORNE MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440058</td><td>SOUTHERN TENNESSEE REGIONAL HLTH SYSTEM WINCHESTER</td><td>TN</td></tr>
				<tr><td>440061</td><td>TENNOVA HEALTHCARE-VOLUNTEER MARTIN</td><td>TN</td></tr>
				<tr><td>440067</td><td>LAKEWAY REGIONAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440068</td><td>STARR REGIONAL MEDICAL CENTER ATHENS</td><td>TN</td></tr>
				<tr><td>440084</td><td>SWEETWATER HOSPITAL ASSOCIATION</td><td>TN</td></tr>
				<tr><td>440102</td><td>LINCOLN MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440130</td><td>BAPTIST MEMORIAL HOSPITAL UNION CITY</td><td>TN</td></tr>
				<tr><td>440131</td><td>BAPTIST MEMORIAL HOSPITAL TIPTON</td><td>TN</td></tr>
				<tr><td>440148</td><td>SAINT THOMAS DEKALB HOSPITAL</td><td>TN</td></tr>
				<tr><td>440153</td><td>TENNOVA HEALTHCARE-NEWPORT MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>440180</td><td>JELLICO COMMUNITY HOSPITAL</td><td>TN</td></tr>
				<tr><td>440192</td><td>SAINT THOMAS HIGHLANDS HOSPITAL</td><td>TN</td></tr>
				<tr><td>450072</td><td>BRAZOSPORT REGIONAL HEALTH SYSTEM</td><td>TX</td></tr>
				<tr><td>450082</td><td>CHRISTUS SPOHN HOSPITAL BEEVILLE</td><td>TX</td></tr>
				<tr><td>450148</td><td>TEXAS HEALTH HARRIS METHODIST HOSPITAL CLEBURNE</td><td>TX</td></tr>
				<tr><td>450154</td><td>VAL VERDE REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450187</td><td>SCOTT & WHITE HOSPITAL BRENHAM</td><td>TX</td></tr>
				<tr><td>450194</td><td>EAST TEXAS MEDICAL CENTER JACKSONVILLE</td><td>TX</td></tr>
				<tr><td>450272</td><td>CENTRAL TEXAS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450292</td><td>TEXAS HEALTH PRESBYTERIAN HOSPITAL KAUFMAN</td><td>TX</td></tr>
				<tr><td>450299</td><td>COLLEGE STATION MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450395</td><td>MEMORIAL MEDICAL CENTER LIVINGSTON</td><td>TX</td></tr>
				<tr><td>450419</td><td>TEXAS HEALTH HARRIS METHODIST HOSPITAL AZLE</td><td>TX</td></tr>
				<tr><td>450447</td><td>NAVARRO REGIONAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450539</td><td>COVENANT HOSPITAL PLAINVIEW</td><td>TX</td></tr>
				<tr><td>450584</td><td>WILBARGER GENERAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450605</td><td>CARE REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450653</td><td>SCENIC MOUNTAIN MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450709</td><td>HOUSTON METHODIST ST JOHN HOSPITAL</td><td>TX</td></tr>
				<tr><td>450840</td><td>TEXAS HEALTH PRESBYTERIAN HOSPITAL ALLEN</td><td>TX</td></tr>
				<tr><td>450867</td><td>SETON NORTHWEST HOSPITAL</td><td>TX</td></tr>
				<tr><td>460006</td><td>LDS HOSPITAL</td><td>UT</td></tr>
				<tr><td>460011</td><td>CASTLEVIEW HOSPITAL</td><td>UT</td></tr>
				<tr><td>460019</td><td>UINTAH BASIN MEDICAL CENTER</td><td>UT</td></tr>
				<tr><td>460044</td><td>ALTA VIEW HOSPITAL</td><td>UT</td></tr>
				<tr><td>460058</td><td>RIVERTON HOSPITAL</td><td>UT</td></tr>
				<tr><td>490002</td><td>RUSSELL COUNTY MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490038</td><td>SMYTH COUNTY COMMUNITY HOSPITAL</td><td>VA</td></tr>
				<tr><td>490117</td><td>CARILION TAZEWELL COMMUNITY HOSPITAL</td><td>VA</td></tr>
				<tr><td>500049</td><td>WALLA WALLA GENERAL HOSPITAL</td><td>WA</td></tr>
				<tr><td>510012</td><td>PLEASANT VALLEY HOSPITAL</td><td>WV</td></tr>
				<tr><td>510031</td><td>ST FRANCIS HOSPITAL</td><td>WV</td></tr>
				<tr><td>510048</td><td>LOGAN REGIONAL MEDICAL CENTER</td><td>WV</td></tr>
				<tr><td>510072</td><td>WETZEL COUNTY HOSPITAL</td><td>WV</td></tr>
				<tr><td>520017</td><td>ST JOSEPHS HOSPITAL</td><td>WI</td></tr>
				<tr><td>520034</td><td>AURORA MEDICAL CTR MANITOWOC COUNTY</td><td>WI</td></tr>
				<tr><td>520062</td><td>OCONOMOWOC MEMORIAL HOSPITAL</td><td>WI</td></tr>
				<tr><td>520095</td><td>SAUK PRAIRIE HOSPITAL</td><td>WI</td></tr>
				<tr><td>520109</td><td>MILE BLUFF MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>520198</td><td>AURORA MEDICAL CTR OSHKOSH</td><td>WI</td></tr>
				<tr><td>530002</td><td>CAMPBELL COUNTY MEMORIAL HOSPITAL</td><td>WY</td></tr>
				<tr><td>530008</td><td>SAGEWEST HEALTH CARE</td><td>WY</td></tr>
				<tr><td>530011</td><td>MEMORIAL HOSPITAL SWEETWATER COUNTY</td><td>WY</td></tr>
				<tr><td>670031</td><td>ST LUKE'S PATIENTS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>670096</td><td>BAY AREA REGIONAL MEDICAL CENTER, LLC</td><td>TX</td></tr>
				<tr><td>670103</td><td>MEDICAL CITY ALLIANCE</td><td>TX</td></tr>
				<tr><td>670120</td><td>THE HOSPITALS OF PROVIDENCE TRANSMOUNTAIN CAMPUS</td><td>TX</td></tr>
				<tr><td>010007</td><td>MIZELL MEMORIAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>010021</td><td>DALE MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010022</td><td>CHEROKEE MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010059</td><td>LAWRENCE MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010062</td><td>WIREGRASS MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010069</td><td>MEDICAL CENTER BARBOUR</td><td>AL</td></tr>
				<tr><td>010073</td><td>CLAY COUNTY HOSPITAL</td><td>AL</td></tr>
				<tr><td>010091</td><td>GROVE HILL MEMORIAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>010126</td><td>TROY REGIONAL MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010129</td><td>NORTH BALDWIN INFIRMARY</td><td>AL</td></tr>
				<tr><td>010130</td><td>ST VINCENT'S ST CLAIR</td><td>AL</td></tr>
				<tr><td>010169</td><td>ATMORE COMMUNITY HOSPITAL</td><td>AL</td></tr>
				<tr><td>010173</td><td>ST VINCENT'S CHILTON</td><td>AL</td></tr>
				<tr><td>030001</td><td>ABRAZO MARYVALE CAMPUS</td><td>AZ</td></tr>
				<tr><td>030071</td><td>FORT DEFIANCE INDIAN HOSPITAL</td><td>AZ</td></tr>
				<tr><td>030132</td><td>FLORENCE HOSPITAL AT ANTHEM, LLC</td><td>AZ</td></tr>
				<tr><td>040011</td><td>CHAMBERS MEMORIAL HOSPITAL</td><td>AR</td></tr>
				<tr><td>040015</td><td>MENA REGIONAL HEALTH SYSTEM</td><td>AR</td></tr>
				<tr><td>040019</td><td>FORREST CITY MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040069</td><td>GREAT RIVER MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040085</td><td>HELENA REGIONAL MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>040153</td><td>WADLEY REGIONAL MEDICAL CENTER AT HOPE</td><td>AR</td></tr>
				<tr><td>050018</td><td>PACIFIC ALLIANCE MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050028</td><td>MAD RIVER COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050067</td><td>OAK VALLEY HOSPITAL DISTRICT</td><td>CA</td></tr>
				<tr><td>050096</td><td>WEST COVINA MEDICAL CENTER, INC</td><td>CA</td></tr>
				<tr><td>050257</td><td>GOOD SAMARITAN HOSPITAL</td><td>CA</td></tr>
				<tr><td>050279</td><td>HI-DESERT MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050298</td><td>BARSTOW COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>050359</td><td>TULARE REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050407</td><td>CHINESE HOSPITAL</td><td>CA</td></tr>
				<tr><td>050589</td><td>PLACENTIA LINDA HOSPITAL</td><td>CA</td></tr>
				<tr><td>050608</td><td>DELANO REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050641</td><td>EAST LOS ANGELES DOCTORS HOSPITAL</td><td>CA</td></tr>
				<tr><td>050684</td><td>MENIFEE VALLEY MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050738</td><td>GREATER EL MONTE COMMUNITY HOSPITAL</td><td>CA</td></tr>
				<tr><td>100048</td><td>JAY HOSPITAL</td><td>FL</td></tr>
				<tr><td>100054</td><td>TWIN CITIES HOSPITAL</td><td>FL</td></tr>
				<tr><td>100106</td><td>DOCTOR'S MEMORIAL HOSPITAL INC</td><td>FL</td></tr>
				<tr><td>100211</td><td>BAYFRONT HEALTH DADE CITY</td><td>FL</td></tr>
				<tr><td>100284</td><td>WESTCHESTER GENERAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>100313</td><td>SACRED HEART HOSPITAL ON THE GULF</td><td>FL</td></tr>
				<tr><td>100329</td><td>OVIEDO MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>110026</td><td>ELBERT MEMORIAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110039</td><td>TRINITY HOSPITAL OF AUGUSTA</td><td>GA</td></tr>
				<tr><td>110040</td><td>NORTHRIDGE MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110045</td><td>NORTHEAST GEORGIA MEDICAL CENTER BARROW</td><td>GA</td></tr>
				<tr><td>110050</td><td>MURRAY MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110051</td><td>UNION GENERAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110071</td><td>APPLING HOSPITAL</td><td>GA</td></tr>
				<tr><td>110073</td><td>DORMINY MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110109</td><td>EMANUEL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110142</td><td>EVANS MEMORIAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>110150</td><td>NAVICENT HEALTH BALDWIN</td><td>GA</td></tr>
				<tr><td>120019</td><td>KONA COMMUNITY HOSPITAL</td><td>HI</td></tr>
				<tr><td>140040</td><td>GALESBURG COTTAGE HOSPITAL</td><td>IL</td></tr>
				<tr><td>140059</td><td>JERSEY COMMUNITY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140083</td><td>LORETTO HOSPITAL</td><td>IL</td></tr>
				<tr><td>140095</td><td>SAINT ANTHONY HOSPITAL</td><td>IL</td></tr>
				<tr><td>140115</td><td>THOREK MEMORIAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>140137</td><td>GREENVILLE REGIONAL HOSPITAL</td><td>IL</td></tr>
				<tr><td>150047</td><td>ST JOSEPH HOSPITAL</td><td>IN</td></tr>
				<tr><td>150064</td><td>FAYETTE REGIONAL HEALTH SYSTEM</td><td>IN</td></tr>
				<tr><td>150075</td><td>BLUFFTON REGIONAL MEDICAL CENTER</td><td>IN</td></tr>
				<tr><td>150101</td><td>PARKVIEW WHITLEY HOSPITAL</td><td>IN</td></tr>
				<tr><td>160040</td><td>SARTORI MEMORIAL HOSPITAL</td><td>IA</td></tr>
				<tr><td>160124</td><td>LAKES REGIONAL HEALTHCARE</td><td>IA</td></tr>
				<tr><td>170058</td><td>MERCY HOSPITAL-FORT SCOTT</td><td>KS</td></tr>
				<tr><td>170094</td><td>COFFEY COUNTY HOSPITAL</td><td>KS</td></tr>
				<tr><td>180079</td><td>HARRISON MEMORIAL HOSPITAL</td><td>KY</td></tr>
				<tr><td>180095</td><td>CRITTENDEN HEALTH SYSTEM</td><td>KY</td></tr>
				<tr><td>180105</td><td>MONROE COUNTY MEDICAL CENTER</td><td>KY</td></tr>
				<tr><td>180106</td><td>THE MEDICAL CENTER AT ALBANY</td><td>KY</td></tr>
				<tr><td>180115</td><td>ROCKCASTLE REGIONAL HOSPITAL & RESPIRATORY CARE CT</td><td>KY</td></tr>
				<tr><td>190025</td><td>SAVOY MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190050</td><td>BEAUREGARD MEMORIAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>190081</td><td>WEST CARROLL MEMORIAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>190106</td><td>OAKDALE COMMUNITY HOSPITAL</td><td>LA</td></tr>
				<tr><td>190140</td><td>FRANKLIN MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190151</td><td>RICHARDSON MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190190</td><td>CALDWELL MEMORIAL HOSPITAL, INC</td><td>LA</td></tr>
				<tr><td>190308</td><td>ST BERNARD PARISH HOSPITAL</td><td>LA</td></tr>
				<tr><td>190312</td><td>OUR LADY OF THE ANGELS HOSPITAL</td><td>LA</td></tr>
				<tr><td>200041</td><td>INLAND HOSPITAL</td><td>ME</td></tr>
				<tr><td>220098</td><td>NASHOBA VALLEY MEDICAL CENTER</td><td>MA</td></tr>
				<tr><td>230003</td><td>SPECTRUM HEALTH ZEELAND COMMUNITY HOSPITAL</td><td>MI</td></tr>
				<tr><td>230015</td><td>THREE RIVERS HEALTH</td><td>MI</td></tr>
				<tr><td>230037</td><td>HILLSDALE HOSPITAL</td><td>MI</td></tr>
				<tr><td>230096</td><td>STURGIS HOSPITAL</td><td>MI</td></tr>
				<tr><td>240059</td><td>REGINA HOSPITAL</td><td>MN</td></tr>
				<tr><td>240166</td><td>MAYO CLINIC HEALTH SYSTEM - FAIRMONT</td><td>MN</td></tr>
				<tr><td>250036</td><td>GEORGE REGIONAL HEALTH SYSTEM</td><td>MS</td></tr>
				<tr><td>250061</td><td>YALOBUSHA GENERAL HOSPITAL</td><td>MS</td></tr>
				<tr><td>250096</td><td>MERIT HEALTH RANKIN</td><td>MS</td></tr>
				<tr><td>250138</td><td>MERIT HEALTH RIVER OAKS</td><td>MS</td></tr>
				<tr><td>260050</td><td>SSM HEALTH ST FRANCIS HOSPITAL - MARYVILLE</td><td>MO</td></tr>
				<tr><td>260070</td><td>PEMISCOT COUNTY MEMORIAL HOSPITAL</td><td>MO</td></tr>
				<tr><td>260080</td><td>SOUTHEAST HEALTH CENTER OF RIPLEY COUNTY</td><td>MO</td></tr>
				<tr><td>260142</td><td>FITZGIBBON HOSPITAL</td><td>MO</td></tr>
				<tr><td>260160</td><td>SOUTHEASTHEALTH CENTER OF STODDARD COUNTY</td><td>MO</td></tr>
				<tr><td>260227</td><td>BLACK RIVER COMMUNITY MEDICAL CENTER</td><td>MO</td></tr>
				<tr><td>310021</td><td>ST FRANCIS MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>310118</td><td>HUDSON REGIONAL HOSPITAL</td><td>NJ</td></tr>
				<tr><td>320003</td><td>ALTA VISTA REGIONAL HOSPITAL</td><td>NM</td></tr>
				<tr><td>320011</td><td>PRESBYTERIAN ESPANOLA HOSPITAL</td><td>NM</td></tr>
				<tr><td>320033</td><td>LOS ALAMOS MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>320084</td><td>ROOSEVELT GENERAL HOSPITAL</td><td>NM</td></tr>
				<tr><td>330003</td><td>ALBANY MEMORIAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>330008</td><td>WYOMING COUNTY COMMUNITY HOSPITAL</td><td>NY</td></tr>
				<tr><td>330033</td><td>CHENANGO MEMORIAL HOSPITAL, INC</td><td>NY</td></tr>
				<tr><td>330132</td><td>TLC HEALTH NETWORK</td><td>NY</td></tr>
				<tr><td>330144</td><td>IRA DAVENPORT MEMORIAL HOSPITAL, INC</td><td>NY</td></tr>
				<tr><td>330229</td><td>BROOKS MEMORIAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>330265</td><td>CLIFTON SPRINGS HOSPITAL AND CLINIC</td><td>NY</td></tr>
				<tr><td>330268</td><td>COBLESKILL REGIONAL HOSPITAL</td><td>NY</td></tr>
				<tr><td>340084</td><td>CAROLINAS HEALTH CARE SYSTEM ANSON</td><td>NC</td></tr>
				<tr><td>340127</td><td>GRANVILLE HEALTH SYSTEMS</td><td>NC</td></tr>
				<tr><td>360029</td><td>WOOD COUNTY HOSPITAL</td><td>OH</td></tr>
				<tr><td>360037</td><td>ST VINCENT CHARITY MEDICAL CENTER</td><td>OH</td></tr>
				<tr><td>360087</td><td>LUTHERAN HOSPITAL</td><td>OH</td></tr>
				<tr><td>360092</td><td>MEMORIAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>360107</td><td>BELLEVUE HOSPITAL</td><td>OH</td></tr>
				<tr><td>360121</td><td>COMMUNITY HOSPITALS AND WELLNESS CENTERS</td><td>OH</td></tr>
				<tr><td>360141</td><td>STEWARD NORTHSIDE MEDICAL CENTER, INC</td><td>OH</td></tr>
				<tr><td>360148</td><td>POMERENE HOSPITAL</td><td>OH</td></tr>
				<tr><td>360189</td><td>MADISON HEALTH</td><td>OH</td></tr>
				<tr><td>370015</td><td>HILLCREST HOSPITAL PRYOR</td><td>OK</td></tr>
				<tr><td>370029</td><td>ALLIANCEHEALTH CLINTON</td><td>OK</td></tr>
				<tr><td>370030</td><td>BLACKWELL REGIONAL HOSPITAL</td><td>OK</td></tr>
				<tr><td>370099</td><td>HILLCREST HOSPITAL CUSHING</td><td>OK</td></tr>
				<tr><td>370100</td><td>CHOCTAW MEMORIAL HOSPITAL</td><td>OK</td></tr>
				<tr><td>370138</td><td>MEMORIAL HOSPITAL OF TEXAS COUNTY AUTHORITY</td><td>OK</td></tr>
				<tr><td>370139</td><td>PERRY MEMORIAL HOSPITAL</td><td>OK</td></tr>
				<tr><td>370153</td><td>ELKVIEW GENERAL HOSPITAL</td><td>OK</td></tr>
				<tr><td>370158</td><td>PURCELL MUNICIPAL HOSPITAL</td><td>OK</td></tr>
				<tr><td>370171</td><td>W W HASTINGS INDIAN HOSPITAL</td><td>OK</td></tr>
				<tr><td>370180</td><td>CHICKASAW NATION MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>370228</td><td>BAILEY MEDICAL CENTER, LLC</td><td>OK</td></tr>
				<tr><td>370229</td><td>ALLIANCEHEALTH SEMINOLE</td><td>OK</td></tr>
				<tr><td>370237</td><td>SAINT FRANCIS HOSPITAL VINITA, INC</td><td>OK</td></tr>
				<tr><td>380005</td><td>ASANTE ASHLAND COMMUNITY HOSPITAL</td><td>OR</td></tr>
				<tr><td>390008</td><td>ELLWOOD CITY MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390052</td><td>PENN HIGHLANDS CLEARFIELD</td><td>PA</td></tr>
				<tr><td>390056</td><td>J C BLAIR MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390062</td><td>NASON HOSPITAL</td><td>PA</td></tr>
				<tr><td>390071</td><td>LOCK HAVEN HOSPITAL</td><td>PA</td></tr>
				<tr><td>390072</td><td>BERWICK HOSPITAL CENTER</td><td>PA</td></tr>
				<tr><td>390084</td><td>SUNBURY COMMUNITY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390093</td><td>CLARION HOSPITAL</td><td>PA</td></tr>
				<tr><td>390104</td><td>KANE COMMUNITY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390114</td><td>MAGEE WOMENS HOSPITAL OF UPMC HEALTH SYSTEM</td><td>PA</td></tr>
				<tr><td>390117</td><td>UPMC BEDFORD MEMORIAL</td><td>PA</td></tr>
				<tr><td>390130</td><td>CONEMAUGH MINERS MEDICAL CENTER</td><td>PA</td></tr>
				<tr><td>390150</td><td>WASHINGTON HEALTH SYSTEM GREENE</td><td>PA</td></tr>
				<tr><td>390157</td><td>OHIO VALLEY GENERAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390184</td><td>HIGHLANDS HOSPITAL</td><td>PA</td></tr>
				<tr><td>390198</td><td>MILLCREEK COMMUNITY HOSPITAL</td><td>PA</td></tr>
				<tr><td>390220</td><td>JENNERSVILLE HOSPITAL</td><td>PA</td></tr>
				<tr><td>420037</td><td>GHS HILLCREST MEMORIAL HOSPITAL</td><td>SC</td></tr>
				<tr><td>420066</td><td>LAKE CITY COMMUNITY HOSPITAL</td><td>SC</td></tr>
				<tr><td>430097</td><td>SANFORD ABERDEEN MEDICAL CENTER</td><td>SD</td></tr>
				<tr><td>440001</td><td>UNICOI COUNTY MEMORIAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440008</td><td>HENDERSON COUNTY COMMUNITY HOSPITAL</td><td>TN</td></tr>
				<tr><td>440060</td><td>MILAN GENERAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440111</td><td>METRO NASHVILLE GENERAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440137</td><td>TENNOVA HEALTHCARE-SHELBYVILLE</td><td>TN</td></tr>
				<tr><td>440182</td><td>MCKENZIE REGIONAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>440200</td><td>SAINT THOMAS STONES RIVER HOSPITAL</td><td>TN</td></tr>
				<tr><td>450055</td><td>ROLLING PLAINS MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450078</td><td>ANSON GENERAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450085</td><td>GRAHAM REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450090</td><td>NORTH TEXAS MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450092</td><td>FORT DUNCAN MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450163</td><td>CHRISTUS SPOHN HOSPITAL KLEBERG</td><td>TX</td></tr>
				<tr><td>450165</td><td>METHODIST HOSPITAL SOUTH</td><td>TX</td></tr>
				<tr><td>450192</td><td>HILL REGIONAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450348</td><td>FALLS COMMUNITY HOSPITAL AND CLINIC</td><td>TX</td></tr>
				<tr><td>450369</td><td>CHILDRESS REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450399</td><td>BROWNFIELD REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450400</td><td>PARKVIEW REGIONAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450411</td><td>EASTLAND MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450465</td><td>MATAGORDA REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450475</td><td>ETMC HENDERSON</td><td>TX</td></tr>
				<tr><td>450565</td><td>PALO PINTO GENERAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450573</td><td>CHRISTUS JASPER MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450604</td><td>HILL COUNTRY MEMORIAL HOSPITAL INC</td><td>TX</td></tr>
				<tr><td>450658</td><td>FREESTONE MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450755</td><td>COVENANT HOSPITAL LEVELLAND</td><td>TX</td></tr>
				<tr><td>450828</td><td>CHRISTUS SPOHN HOSPITAL ALICE</td><td>TX</td></tr>
				<tr><td>460013</td><td>MOUNTAIN VIEW HOSPITAL</td><td>UT</td></tr>
				<tr><td>460014</td><td>MOUNTAIN WEST MEDICAL CENTER</td><td>UT</td></tr>
				<tr><td>460030</td><td>ASHLEY REGIONAL MEDICAL CENTER</td><td>UT</td></tr>
				<tr><td>490092</td><td>SOUTHAMPTON MEMORIAL HOSPITAL</td><td>VA</td></tr>
				<tr><td>490097</td><td>SOUTHERN VIRGINIA REGIONAL MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>490144</td><td>NOVANT HEALTH UVA HEALTH HAYMARKET MEDICAL CENTER</td><td>VA</td></tr>
				<tr><td>500060</td><td>CASCADE VALLEY HOSPITAL</td><td>WA</td></tr>
				<tr><td>500084</td><td>EVERGREEN HEALTH MONROE</td><td>WA</td></tr>
				<tr><td>510077</td><td>WILLIAMSON MEMORIAL HOSPITAL</td><td>WV</td></tr>
				<tr><td>520011</td><td>LAKEVIEW MEDICAL CENTER</td><td>WI</td></tr>
				<tr><td>520035</td><td>AURORA SHEBOYGAN MEMORIAL MEDICAL CTR</td><td>WI</td></tr>
				<tr><td>520038</td><td>AURORA MEDICAL CTR WASHINGTON COUNTY</td><td>WI</td></tr>
				<tr><td>530025</td><td>IVINSON MEMORIAL HOSPITAL</td><td>WY</td></tr>
				<tr><td>530032</td><td>EVANSTON REGIONAL HOSPITAL</td><td>WY</td></tr>
				<tr><td>670092</td><td>WALNUT HILL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>010146</td><td>RMC JACKSONVILLE</td><td>AL</td></tr>
				<tr><td>020018</td><td>YUKON KUSKOKWIM DELTA REG HOSPITAL</td><td>AK</td></tr>
				<tr><td>040074</td><td>NORTH METRO MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>110194</td><td>DONALSONVILLE HOSPITAL INC</td><td>GA</td></tr>
				<tr><td>190088</td><td>SPRINGHILL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>270032</td><td>NORTHERN MONTANA HOSPITAL</td><td>MT</td></tr>
				<tr><td>330111</td><td>BERTRAND CHAFFEE HOSPITAL</td><td>NY</td></tr>
				<tr><td>350063</td><td>P H S INDIAN HOSP AT BELCOURT-QUENTIN N BURDICK</td><td>ND</td></tr>
				<tr><td>370057</td><td>MUSCOGEE (CREEK) NATION MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>370183</td><td>HILLCREST HOSPITAL HENRYETTA</td><td>OK</td></tr>
				<tr><td>420108</td><td>UNION MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>440010</td><td>WAYNE MEDICAL CENTER</td><td>TN</td></tr>
				<tr><td>450370</td><td>COLUMBUS COMMUNITY HOSPITAL</td><td>TX</td></tr>
				<tr><td>450498</td><td>STEPHENS MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>010008</td><td>CRENSHAW COMMUNITY HOSPITAL</td><td>AL</td></tr>
				<tr><td>010047</td><td>GEORGIANA MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010110</td><td>BULLOCK COUNTY HOSPITAL</td><td>AL</td></tr>
				<tr><td>010128</td><td>JACKSON MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010150</td><td>L V STABLER MEMORIAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>100081</td><td>HEALTHMARK REGIONAL MEDICAL CENTER</td><td>FL</td></tr>
				<tr><td>190099</td><td>AVOYELLES HOSPITAL</td><td>LA</td></tr>
				<tr><td>190116</td><td>MOREHOUSE GENERAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>190118</td><td>DESOTO REGIONAL HEALTH SYSTEM</td><td>LA</td></tr>
				<tr><td>190208</td><td>EAST CARROLL PARISH HOSPITAL</td><td>LA</td></tr>
				<tr><td>190218</td><td>SABINE MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>240006</td><td>OLMSTED MEDICAL CENTER</td><td>MN</td></tr>
				<tr><td>250012</td><td>ALLIANCE HEALTHCARE SYSTEM</td><td>MS</td></tr>
				<tr><td>250085</td><td>MARION GENERAL HOSPITAL</td><td>MS</td></tr>
				<tr><td>250124</td><td>MAGEE GENERAL HOSPITAL</td><td>MS</td></tr>
				<tr><td>250126</td><td>NORTH OAK REGIONAL MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>270074</td><td>P H S INDIAN HOSPITAL AT BROWNING - BLACKFEET</td><td>MT</td></tr>
				<tr><td>320067</td><td>GUADALUPE COUNTY HOSPITAL</td><td>NM</td></tr>
				<tr><td>370083</td><td>PUSHMATAHA COUNTY TOWN OF ANTLERS HOSPITAL</td><td>OK</td></tr>
				<tr><td>370166</td><td>WAGONER COMMUNITY HOSPITAL</td><td>OK</td></tr>
				<tr><td>390192</td><td>TYLER MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>440040</td><td>PERRY COMMUNITY HOSPITAL</td><td>TN</td></tr>
				<tr><td>450144</td><td>PERMIAN REGIONAL MEDICAL CENTER ANDREWS COUNTY HO</td><td>TX</td></tr>
				<tr><td>450460</td><td>TYLER COUNTY HOSPITAL</td><td>TX</td></tr>
				<tr><td>450654</td><td>STARR COUNTY MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>510086</td><td>WELCH COMMUNITY HOSPITAL</td><td>WV</td></tr>
				<tr><td>670078</td><td>BAPTIST EMERGENCY HOSPITAL</td><td>TX</td></tr>
				<tr><td>030073</td><td>TUBA CITY REGIONAL HEALTH CARE CORPORATION</td><td>AZ</td></tr>
				<tr><td>050192</td><td>ADVENTIST HEALTH REEDLEY</td><td>CA</td></tr>
				<tr><td>050234</td><td>SHARP CORONADO HOSPITAL AND HLTHCR CTR</td><td>CA</td></tr>
				<tr><td>050780</td><td>FOOTHILL REGIONAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>190034</td><td>ABBEVILLE GENERAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>190114</td><td>CLAIBORNE MEMORIAL MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>260210</td><td>ST ALEXIUS HOSPITAL</td><td>MO</td></tr>
				<tr><td>320013</td><td>HOLY CROSS HOSPITAL A DIV OF TAOS HEALTH SYSTEMS</td><td>NM</td></tr>
				<tr><td>320030</td><td>ARTESIA GENERAL HOSPITAL</td><td>NM</td></tr>
				<tr><td>320061</td><td>GALLUP INDIAN MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>320074</td><td>LOVELACE WESTSIDE HOSPITAL</td><td>NM</td></tr>
				<tr><td>450597</td><td>CUERO REGIONAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>460060</td><td>LONE PEAK HOSPITAL</td><td>UT</td></tr>
				<tr><td>010032</td><td>TANNER MEDICAL CENTER-EAST ALABAMA</td><td>AL</td></tr>
				<tr><td>010058</td><td>BIBB MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010097</td><td>ELMORE COMMUNITY HOSPITAL</td><td>AL</td></tr>
				<tr><td>010099</td><td>D W MCMILLAN MEMORIAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>010109</td><td>PICKENS COUNTY MEDICAL CENTER</td><td>AL</td></tr>
				<tr><td>010112</td><td>BRYAN W. WHITFIELD MEMORIAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>030084</td><td>CHINLE COMPREHENSIVE HEALTH CARE FACILITY</td><td>AZ</td></tr>
				<tr><td>030113</td><td>WHITERIVER PHS INDIAN HOSPITAL</td><td>AZ</td></tr>
				<tr><td>040047</td><td>FIVE RIVERS MEDICAL CENTER</td><td>AR</td></tr>
				<tr><td>050745</td><td>CHAPMAN GLOBAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>110113</td><td>BURKE MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>140019</td><td>HSHS GOOD SHEPHERD HOSPITAL INC</td><td>IL</td></tr>
				<tr><td>140197</td><td>METHODIST HOSPITAL OF CHICAGO</td><td>IL</td></tr>
				<tr><td>170039</td><td>SUMNER REGIONAL MEDICAL CENTER</td><td>KS</td></tr>
				<tr><td>170075</td><td>MERCY HOSPITAL, INC</td><td>KS</td></tr>
				<tr><td>170166</td><td>MORTON COUNTY HOSPITAL</td><td>KS</td></tr>
				<tr><td>190090</td><td>WINN PARISH MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190184</td><td>CITIZENS MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190297</td><td>DOCTORS HOSPITAL AT DEER CREEK L L C</td><td>LA</td></tr>
				<tr><td>210045</td><td>EDWARD MCCREADY MEMORIAL HOSPITAL</td><td>MD</td></tr>
				<tr><td>240014</td><td>NORTHFIELD HOSPITAL</td><td>MN</td></tr>
				<tr><td>240022</td><td>SANFORD WORTHINGTON MEDICAL CENTER</td><td>MN</td></tr>
				<tr><td>250027</td><td>WINSTON MEDICAL CENTER & SWINGBED</td><td>MS</td></tr>
				<tr><td>250049</td><td>BEACHAM MEMORIAL HOSPITAL</td><td>MS</td></tr>
				<tr><td>250079</td><td>SHARKEY ISSAQUENA COMMUNITY HOSPITAL</td><td>MS</td></tr>
				<tr><td>250095</td><td>SOUTH SUNFLOWER COUNTY HOSPITAL</td><td>MS</td></tr>
				<tr><td>310058</td><td>BERGEN REGIONAL MEDICAL CENTER</td><td>NJ</td></tr>
				<tr><td>320059</td><td>NORTHERN NAVAJO MEDICAL CENTER</td><td>NM</td></tr>
				<tr><td>330088</td><td>EASTERN LONG ISLAND HOSPITAL</td><td>NY</td></tr>
				<tr><td>330108</td><td>ST JOSEPH'S HOSPITAL, INC</td><td>NY</td></tr>
				<tr><td>370041</td><td>BRISTOW MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>370080</td><td>SHARE MEDICAL CENTER</td><td>OK</td></tr>
				<tr><td>370172</td><td>CHOCTAW NATION HEALTH SERVICES AUTHORITY</td><td>OK</td></tr>
				<tr><td>390030</td><td>LEHIGH VALLEY HOSPITAL-SCHUYLKILL S. JACKSON STREE</td><td>PA</td></tr>
				<tr><td>390112</td><td>WINDBER HOSPITAL</td><td>PA</td></tr>
				<tr><td>420072</td><td>HAMPTON REGIONAL MEDICAL CENTER</td><td>SC</td></tr>
				<tr><td>440070</td><td>DECATUR COUNTY GENERAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>450108</td><td>CONNALLY MEMORIAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450210</td><td>ETMC CARTHAGE</td><td>TX</td></tr>
				<tr><td>450219</td><td>BAYLOR SCOTT & WHITE MEDICAL CENTER - LLANO</td><td>TX</td></tr>
				<tr><td>450235</td><td>MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450451</td><td>GLEN ROSE MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450620</td><td>DIMMIT REGIONAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450694</td><td>EL CAMPO MEMORIAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450833</td><td>ENNIS REGIONAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>460026</td><td>SEVIER VALLEY HOSPITAL</td><td>UT</td></tr>
				<tr><td>460039</td><td>BEAR RIVER VALLEY HOSPITAL</td><td>UT</td></tr>
				<tr><td>530015</td><td>ST JOHNS MEDICAL CENTER</td><td>WY</td></tr>
				<tr><td>010102</td><td>J PAUL JONES HOSPITAL</td><td>AL</td></tr>
				<tr><td>050546</td><td>PORTERVILLE DEVELOPMENTAL CENTER</td><td>CA</td></tr>
				<tr><td>190145</td><td>LASALLE GENERAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>260004</td><td>COOPER COUNTY MEMORIAL HOSPITAL</td><td>MO</td></tr>
				<tr><td>320062</td><td>CROWNPOINT HEALTHCARE FACILITY</td><td>NM</td></tr>
				<tr><td>050747</td><td>SOUTH COAST GLOBAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>150153</td><td>ST VINCENT HEART CENTER OF INDIANA LLC</td><td>IN</td></tr>
				<tr><td>050076</td><td>KAISER FOUNDATION HOSPITAL - SAN FRANCISCO</td><td>CA</td></tr>
				<tr><td>460003</td><td>SALT LAKE REGIONAL MEDICAL CENTER</td><td>UT</td></tr>
				<tr><td>670071</td><td>TEXAS HEALTH HEART & VASCULAR HOSPITAL ARLINGTON</td><td>TX</td></tr>
				<tr><td>190079</td><td>ST CHARLES PARISH HOSPITAL</td><td>LA</td></tr>
				<tr><td>190246</td><td>P & S SURGICAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>460052</td><td>TIMPANOGOS REGIONAL HOSPITAL</td><td>UT</td></tr>
				<tr><td>190011</td><td>UNIVERSITY HEALTH CONWAY</td><td>LA</td></tr>
				<tr><td>050070</td><td>KAISER FOUNDATION HOSPITAL - SOUTH SAN FRANCISCO</td><td>CA</td></tr>
				<tr><td>050113</td><td>SAN MATEO MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050411</td><td>KAISER FOUNDATION HOSPITAL - SOUTH BAY</td><td>CA</td></tr>
				<tr><td>050609</td><td>KAISER FOUNDATION HOSPITAL - ORANGE COUNTY - ANAHE</td><td>CA</td></tr>
				<tr><td>050690</td><td>KAISER FOUNDATION HOSPITAL-SANTA ROSA</td><td>CA</td></tr>
				<tr><td>050710</td><td>KAISER FOUNDATION HOSPITAL - FRESNO</td><td>CA</td></tr>
				<tr><td>050723</td><td>KAISER FOUNDATION HOSPITAL - BALDWIN PARK</td><td>CA</td></tr>
				<tr><td>110121</td><td>GRADY GENERAL HOSPITAL</td><td>GA</td></tr>
				<tr><td>140077</td><td>TOUCHETTE REGIONAL HOSPITAL INC</td><td>IL</td></tr>
				<tr><td>190201</td><td>CHRISTUS LAKE AREA HOSPITAL</td><td>LA</td></tr>
				<tr><td>190313</td><td>NEW ORLEANS EAST HOSPITAL</td><td>LA</td></tr>
				<tr><td>250067</td><td>CLAY COUNTY MEDICAL CENTER</td><td>MS</td></tr>
				<tr><td>260162</td><td>BARNES-JEWISH WEST COUNTY HOSPITAL</td><td>MO</td></tr>
				<tr><td>340106</td><td>SANDHILLS REGIONAL MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>440181</td><td>BOLIVAR GENERAL HOSPITAL</td><td>TN</td></tr>
				<tr><td>490145</td><td>STONESPRINGS HOSPITAL CENTER</td><td>VA</td></tr>
				<tr><td>500037</td><td>TOPPENISH COMMUNITY HOSPITAL</td><td>WA</td></tr>
				<tr><td>670106</td><td>PEARLAND MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>190006</td><td>UNIVERSITY HOSPITAL & CLINICS</td><td>LA</td></tr>
				<tr><td>370173</td><td>CLAREMORE INDIAN HOSPITAL</td><td>OK</td></tr>
				<tr><td>440232</td><td>HOUSTON COUNTY COMMUNITY HOSPITAL</td><td>TN</td></tr>
				<tr><td>450803</td><td>UNITED MEMORIAL MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>230013</td><td>PONTIAC GENERAL HOSPITAL</td><td>MI</td></tr>
				<tr><td>140300</td><td>PROVIDENT HOSPITAL OF CHICAGO</td><td>IL</td></tr>
				<tr><td>370210</td><td>OKLAHOMA SURGICAL HOSPITAL, LLC</td><td>OK</td></tr>
				<tr><td>050714</td><td>SUTTER MATERNITY & SURGERY CENTER OF SANTA CRUZ</td><td>CA</td></tr>
				<tr><td>050766</td><td>SUTTER SURGICAL HOSPITAL - NORTH VALLEY</td><td>CA</td></tr>
				<tr><td>110200</td><td>NORTHSIDE MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>130066</td><td>NORTHWEST SPECIALTY HOSPITAL</td><td>ID</td></tr>
				<tr><td>340148</td><td>NOVANT HEALTH MEDICAL PARK HOSPITAL</td><td>NC</td></tr>
				<tr><td>190298</td><td>CENTRAL LOUISIANA SURGICAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>450872</td><td>USMD HOSPITAL AT ARLINGTON L P</td><td>TX</td></tr>
				<tr><td>450877</td><td>FOUNDATION SURGICAL HOSPITAL OF EL PASO</td><td>TX</td></tr>
				<tr><td>030077</td><td>SAN CARLOS APACHE HEALTHCARE</td><td>AZ</td></tr>
				<tr><td>050423</td><td>PALO VERDE HOSPITAL</td><td>CA</td></tr>
				<tr><td>110111</td><td>UNIVERSITY HOSPITAL MCDUFFIE</td><td>GA</td></tr>
				<tr><td>380029</td><td>LEGACY SILVERTON MEDICAL CENTER</td><td>OR</td></tr>
				<tr><td>450641</td><td>NOCONA GENERAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>170203</td><td>PREMIER SURGICAL INSTITUTE</td><td>KS</td></tr>
				<tr><td>050769</td><td>HOAG ORTHOPEDIC INSTITUTE</td><td>CA</td></tr>
				<tr><td>060124</td><td>ORTHOCOLORADO HOSPITAL AT ST ANTHONY MED CAMPUS</td><td>CO</td></tr>
				<tr><td>150167</td><td>ORTHOPAEDIC HOSPITAL AT PARKVIEW NORTH LLC</td><td>IN</td></tr>
				<tr><td>150177</td><td>UNITY MEDICAL AND SURGICAL HOSPITAL</td><td>IN</td></tr>
				<tr><td>190278</td><td>SPECIALISTS HOSPITAL SHREVEPORT</td><td>LA</td></tr>
				<tr><td>280133</td><td>NEBRASKA SPINE HOSPITAL, LLC</td><td>NE</td></tr>
				<tr><td>330270</td><td>HOSPITAL FOR SPECIAL SURGERY</td><td>NY</td></tr>
				<tr><td>370203</td><td>COMMUNITY HOSPITAL, LLC</td><td>OK</td></tr>
				<tr><td>370206</td><td>OKLAHOMA SPINE HOSPITAL</td><td>OK</td></tr>
				<tr><td>370222</td><td>MCBRIDE ORTHOPEDIC HOSPITAL</td><td>OK</td></tr>
				<tr><td>450864</td><td>BAYLOR SCOTT & WHITE TEXAS SPINE & JOINT HOSPITAL</td><td>TX</td></tr>
				<tr><td>450871</td><td>ARISE AUSTIN MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450880</td><td>BAYLOR SURGICAL HOSPITAL AT FORT WORTH</td><td>TX</td></tr>
				<tr><td>670073</td><td>METHODIST HOSPITAL FOR SURGERY</td><td>TX</td></tr>
				<tr><td>010168</td><td>JACK HUGHSTON MEMORIAL HOSPITAL</td><td>AL</td></tr>
				<tr><td>150160</td><td>ORTHOINDY HOSPITAL</td><td>IN</td></tr>
				<tr><td>190267</td><td>FAIRWAY MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190303</td><td>CYPRESS POINTE SURGICAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>360351</td><td>CRYSTAL CLINIC ORTHOPAEDIC CENTER</td><td>OH</td></tr>
				<tr><td>450874</td><td>BAYLOR SURGICAL HOSPITAL AT LAS COLINAS</td><td>TX</td></tr>
				<tr><td>670006</td><td>THE HOSPITAL AT WESTLAKE MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>030131</td><td>O.A.S.I.S. HOSPITAL</td><td>AZ</td></tr>
				<tr><td>220088</td><td>NEW ENGLAND BAPTIST HOSPITAL</td><td>MA</td></tr>
				<tr><td>360266</td><td>MOUNT CARMEL NEW ALBANY SURGICAL HOSPITAL</td><td>OH</td></tr>
				<tr><td>030107</td><td>ARIZONA SPINE AND JOINT HOSPITAL</td><td>AZ</td></tr>
				<tr><td>030108</td><td>CORE INSTITUTE SPECIALTY HOSPITAL, THE</td><td>AZ</td></tr>
				<tr><td>030112</td><td>ARIZONA SPECIALTY HOSPITAL</td><td>AZ</td></tr>
				<tr><td>040147</td><td>ARKANSAS SURGICAL HOSPITAL</td><td>AR</td></tr>
				<tr><td>040152</td><td>NORTHWEST HEALTH PHYSICIANS SPECIALTY HOSPITAL</td><td>AR</td></tr>
				<tr><td>050708</td><td>FRESNO SURGICAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>130063</td><td>TREASURE VALLEY HOSPITAL</td><td>ID</td></tr>
				<tr><td>130065</td><td>MOUNTAIN VIEW HOSPITAL</td><td>ID</td></tr>
				<tr><td>150168</td><td>THE ORTHOPAEDIC HOSPITAL OF LUTHERAN HEALTH NETWOR</td><td>IN</td></tr>
				<tr><td>150182</td><td>FRANCISCAN HEALTH CARMEL</td><td>IN</td></tr>
				<tr><td>170183</td><td>KANSAS SURGERY & RECOVERY CENTER</td><td>KS</td></tr>
				<tr><td>170194</td><td>DOCTORS HOSPITAL LLC</td><td>KS</td></tr>
				<tr><td>170201</td><td>BLUE VALLEY HOSPITAL, INC</td><td>KS</td></tr>
				<tr><td>190245</td><td>MONROE SURGICAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>190251</td><td>SURGICAL SPECIALTY CENTER OF BATON ROUGE</td><td>LA</td></tr>
				<tr><td>190256</td><td>STERLING SURGICAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>190259</td><td>LAFAYETTE SURGICAL SPECIALTY HOSPITAL</td><td>LA</td></tr>
				<tr><td>190266</td><td>THE SPINE HOSPITAL OF LOUISIANA</td><td>LA</td></tr>
				<tr><td>190270</td><td>SOUTHERN SURGICAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>230301</td><td>OAKLAND REGIONAL HOSPITAL</td><td>MI</td></tr>
				<tr><td>280131</td><td>MIDWEST SURGICAL HOSPITAL LLC</td><td>NE</td></tr>
				<tr><td>340049</td><td>NORTH CAROLINA SPECIALTY HOSPITAL</td><td>NC</td></tr>
				<tr><td>360263</td><td>INSTITUTE FOR ORTHOPAEDIC SURGERY</td><td>OH</td></tr>
				<tr><td>360274</td><td>MEDICAL CENTER AT ELIZABETH PLACE</td><td>OH</td></tr>
				<tr><td>360352</td><td>SURGICAL HOSPITAL AT SOUTHWOODS</td><td>OH</td></tr>
				<tr><td>360362</td><td>TRIHEALTH EVENDALE HOSPITAL</td><td>OH</td></tr>
				<tr><td>370220</td><td>ONECORE HEALTH</td><td>OK</td></tr>
				<tr><td>390314</td><td>COORDINATED HEALTH ORTHOPEDIC HOSPITAL</td><td>PA</td></tr>
				<tr><td>390316</td><td>SURGICAL INSTITUTE OF READING</td><td>PA</td></tr>
				<tr><td>390321</td><td>SURGICAL SPECIALTY CENTER AT COORDINATED HEALTH</td><td>PA</td></tr>
				<tr><td>390322</td><td>ROTHMAN ORTHOPAEDIC SPECIALTY HOSPITAL LLC</td><td>PA</td></tr>
				<tr><td>390325</td><td>OSS ORTHOPAEDIC HOSPITAL</td><td>PA</td></tr>
				<tr><td>390327</td><td>WELLSPAN SURGERY AND REHABILITATION HOSPITAL</td><td>PA</td></tr>
				<tr><td>430089</td><td>DUNES SURGICAL HOSPITAL</td><td>SD</td></tr>
				<tr><td>430090</td><td>SIOUX FALLS SPECIALTY HOSPITAL LLP</td><td>SD</td></tr>
				<tr><td>430091</td><td>BLACK HILLS SURGICAL HOSPITAL LLP</td><td>SD</td></tr>
				<tr><td>440218</td><td>SAINT THOMAS HOSPITAL FOR SPECIALTY SURGERY</td><td>TN</td></tr>
				<tr><td>450162</td><td>GRACE MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>450422</td><td>BAYLOR MEDICAL CENTER AT UPTOWN</td><td>TX</td></tr>
				<tr><td>450774</td><td>TOPS SURGICAL SPECIALTY HOSPITAL</td><td>TX</td></tr>
				<tr><td>450797</td><td>US PAIN & SPINE HOSPITAL</td><td>TX</td></tr>
				<tr><td>450804</td><td>TEXAS ORTHOPEDIC HOSPITAL</td><td>TX</td></tr>
				<tr><td>450808</td><td>NORTHWEST HILLS SURGICAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450825</td><td>CORNERSTONE REGIONAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450827</td><td>KELL WEST REGIONAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450834</td><td>PHYSICIANS CENTRE,THE</td><td>TX</td></tr>
				<tr><td>450853</td><td>BAYLOR MEDICAL CENTER AT FRISCO</td><td>TX</td></tr>
				<tr><td>450856</td><td>SOUTH TEXAS SPINE AND SURGICAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450875</td><td>QUAIL CREEK SURGICAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>450883</td><td>BAYLOR MEDICAL CENTER AT TROPHY CLUB</td><td>TX</td></tr>
				<tr><td>450888</td><td>TEXAS HEALTH HARRIS METHODIST HOSPITAL SOUTHLAKE</td><td>TX</td></tr>
				<tr><td>450891</td><td>TEXAS HEALTH CENTER FOR DIAGNOSTICS & SURGERY PLAN</td><td>TX</td></tr>
				<tr><td>460049</td><td>THE ORTHOPEDIC SPECIALTY HOSPITAL</td><td>UT</td></tr>
				<tr><td>460054</td><td>CACHE VALLEY  HOSPITAL</td><td>UT</td></tr>
				<tr><td>520194</td><td>ORTHOPAEDIC HOSPITAL OF WISCONSIN</td><td>WI</td></tr>
				<tr><td>520196</td><td>OAKLEAF SURGICAL HOSPITAL</td><td>WI</td></tr>
				<tr><td>520205</td><td>MIDWEST ORTHOPEDIC SPECIALTY HOSPITAL</td><td>WI</td></tr>
				<tr><td>530033</td><td>MOUNTAIN VIEW REGIONAL HOSPITAL</td><td>WY</td></tr>
				<tr><td>670008</td><td>HOUSTON PHYSICIANS' HOSPITAL</td><td>TX</td></tr>
				<tr><td>670049</td><td>NORTH CENTRAL SURGICAL CENTER LLP</td><td>TX</td></tr>
				<tr><td>670054</td><td>FOUNDATION SURGICAL HOSPITAL OF SAN ANTONIO</td><td>TX</td></tr>
				<tr><td>670059</td><td>ST LUKES LAKESIDE HOSPITAL</td><td>TX</td></tr>
				<tr><td>670067</td><td>BAYLOR ORTHOPEDIC AND SPINE HOSPITAL AT ARLINGTON</td><td>TX</td></tr>
				<tr><td>670069</td><td>METHODIST MCKINNEY HOSPITAL</td><td>TX</td></tr>
				<tr><td>670076</td><td>BAYLOR SCOTT AND WHITE SURGICAL HOSPITAL AT SHERMA</td><td>TX</td></tr>
				<tr><td>670112</td><td>CUMBERLAND SURGICAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>670116</td><td>WISE HEALTH SYSTEM</td><td>TX</td></tr>
				<tr><td>280127</td><td>LINCOLN SURGICAL HOSPITAL</td><td>NE</td></tr>
				<tr><td>390324</td><td>PHYSICIAN'S CARE SURGICAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>050357</td><td>GOLETA VALLEY COTTAGE HOSPITAL</td><td>CA</td></tr>
				<tr><td>280129</td><td>NEBRASKA ORTHOPAEDIC HOSPITAL</td><td>NE</td></tr>
				<tr><td>050726</td><td>STANISLAUS SURGICAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>170187</td><td>SALINA SURGICAL HOSPITAL</td><td>KS</td></tr>
				<tr><td>420102</td><td>GHS PATEWOOD MEMORIAL HOSPITAL</td><td>SC</td></tr>
				<tr><td>050137</td><td>KAISER FOUNDATION HOSPITAL - PANORAMA CITY</td><td>CA</td></tr>
				<tr><td>050510</td><td>KAISER FOUNDATION HOSPITAL</td><td>CA</td></tr>
				<tr><td>050677</td><td>KAISER FOUNDATION HOSPITAL - WOODLAND HILLS</td><td>CA</td></tr>
				<tr><td>050697</td><td>PATIENTS' HOSPITAL OF REDDING</td><td>CA</td></tr>
				<tr><td>050717</td><td>LAC/RANCHO LOS AMIGOS NATIONAL REHABILITATION  CTR</td><td>CA</td></tr>
				<tr><td>060049</td><td>UCHEALTH YAMPA VALLEY MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060117</td><td>ANIMAS SURGICAL HOSPITAL, LLC</td><td>CO</td></tr>
				<tr><td>060118</td><td>ST ANTHONY SUMMIT MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>060126</td><td>BANNER FORT COLLINS MEDICAL CENTER</td><td>CO</td></tr>
				<tr><td>150172</td><td>PHYSICIANS' MEDICAL CENTER LLC</td><td>IN</td></tr>
				<tr><td>170188</td><td>KANSAS CITY ORTHOPAEDIC INSTITUTE</td><td>KS</td></tr>
				<tr><td>170190</td><td>MANHATTAN SURGICAL HOSPITAL LLC</td><td>KS</td></tr>
				<tr><td>170198</td><td>SUMMIT SURGICAL, LLC</td><td>KS</td></tr>
				<tr><td>190241</td><td>PHYSICIANS MEDICAL CENTER</td><td>LA</td></tr>
				<tr><td>190255</td><td>PARK PLACE SURGICAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>190268</td><td>LAFAYETTE GENERAL SURGICAL HOSPITAL</td><td>LA</td></tr>
				<tr><td>230078</td><td>LAKELAND HOSPITAL WATERVLIET</td><td>MI</td></tr>
				<tr><td>270087</td><td>THE HEALTHCENTER</td><td>MT</td></tr>
				<tr><td>340187</td><td>DAVIE MEDICAL CENTER</td><td>NC</td></tr>
				<tr><td>360355</td><td>OHIO VALLEY MEDICAL CENTER, LLC</td><td>OH</td></tr>
				<tr><td>360361</td><td>KINGS DAUGHTERS MEDICAL CENTER OHIO</td><td>OH</td></tr>
				<tr><td>370201</td><td>SURGICAL HOSPITAL OF OKLAHOMA, LLC</td><td>OK</td></tr>
				<tr><td>370212</td><td>OKLAHOMA CENTER FOR ORTHOPAEDIC & MULTI-SP</td><td>OK</td></tr>
				<tr><td>380103</td><td>KAISER FOUNDATION HOSPITAL - WESTSIDE</td><td>OR</td></tr>
				<tr><td>390307</td><td>EDGEWOOD SURGICAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>390323</td><td>ADVANCED SURGICAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>430096</td><td>LEWIS AND CLARK SPECIALTY HOSPITAL</td><td>SD</td></tr>
				<tr><td>450580</td><td>TIMBERLANDS HOSPITAL</td><td>TX</td></tr>
				<tr><td>450780</td><td>METHODIST AMBULATORY SURGERY HOSPITAL NW</td><td>TX</td></tr>
				<tr><td>450845</td><td>EL PASO SPECIALTY HOSPITAL</td><td>TX</td></tr>
				<tr><td>450860</td><td>SUGAR LAND SURGICAL HOSPITAL LLP</td><td>TX</td></tr>
				<tr><td>450889</td><td>TEXAS INSTITUTE FOR SURGERY AT PRESBYTERIAN HOSPIT</td><td>TX</td></tr>
				<tr><td>460017</td><td>BRIGHAM CITY COMMUNITY HOSPITAL</td><td>UT</td></tr>
				<tr><td>460057</td><td>PARK CITY HOSPITAL</td><td>UT</td></tr>
				<tr><td>510091</td><td>CHARLESTON SURGICAL HOSPITAL</td><td>WV</td></tr>
				<tr><td>670005</td><td>MEMORIAL HERMANN SURGICAL HOSPITAL KINGWOOD</td><td>TX</td></tr>
				<tr><td>670046</td><td>USMD HOSPITAL  AT FORT WORTH LP</td><td>TX</td></tr>
				<tr><td>670061</td><td>SOUTH TEXAS SURGICAL HOSPITAL</td><td>TX</td></tr>
				<tr><td>670090</td><td>CRESCENT MEDICAL CENTER LANCASTER</td><td>TX</td></tr>
				<tr><td>670110</td><td>FIRST TEXAS HOSPITAL CARRROLLTON LLC</td><td>TX</td></tr>
				<tr><td>670119</td><td>PROVIDENCE HOSPITAL OF NORTH HOUSTON LLC</td><td>TX</td></tr>
				<tr><td>670122</td><td>HOUSTON METHODIST THE WOODLANDS HOSPITAL</td><td>TX</td></tr>
				<tr><td>050754</td><td>MENLO PARK SURGICAL HOSPITAL</td><td>CA</td></tr>
				<tr><td>360261</td><td>THREE GABLES SURGERY CENTER</td><td>OH</td></tr>
				<tr><td>030078</td><td>PHOENIX INDIAN MEDICAL CENTER</td><td>AZ</td></tr>
				<tr><td>430081</td><td>PHS INDIAN HOSPITAL AT PINE RIDGE</td><td>SD</td></tr>
				<tr><td>670062</td><td>BAYLOR EMERGENCY MEDICAL CENTER</td><td>TX</td></tr>
				<tr><td>170199</td><td>MINIMALLY INVASIVE SURGERY HOSPITAL</td><td>KS</td></tr>
				<tr><td>230144</td><td>FOREST HEALTH MEDICAL CENTER</td><td>MI</td></tr>
				<tr><td>250060</td><td>JEFFERSON COUNTY HOSPITAL</td><td>MS</td></tr>
				<tr><td>010095</td><td>HALE COUNTY HOSPITAL</td><td>AL</td></tr>
				<tr><td>110233</td><td>SOUTHEASTERN REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>050575</td><td>GARDENS REGIONAL HOSPITAL AND MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>100134</td><td>ED FRASER MEMORIAL HOSPITAL</td><td>FL</td></tr>
				<tr><td>500148</td><td>CONFLUENCE HEALTH- WENATCHEE VALLEY HOSP & CLINICS</td><td>WA</td></tr>
				<tr><td>410010</td><td>WOMEN & INFANTS HOSPITAL OF RHODE ISLAND</td><td>RI</td></tr>
				<tr><td>450674</td><td>WOMANS HOSPITAL OF TEXAS,THE</td><td>TX</td></tr>
				<tr><td>140100</td><td>MIDWESTERN REGION MED CENTER</td><td>IL</td></tr>
				<tr><td>050072</td><td>KAISER FOUNDATION HOSPITAL - WALNUT CREEK</td><td>CA</td></tr>
				<tr><td>050512</td><td>KAISER FOUNDATION HOSPITAL - FREMONT</td><td>CA</td></tr>
				<tr><td>050561</td><td>KAISER FOUNDATION HOSPITAL - WEST LA</td><td>CA</td></tr>
				<tr><td>050686</td><td>KAISER FOUNDATION HOSPITAL, RIVERSIDE</td><td>CA</td></tr>
				<tr><td>050744</td><td>ANAHEIM GLOBAL MEDICAL CENTER</td><td>CA</td></tr>
				<tr><td>050765</td><td>KAISER FOUNDATION HOSPITAL-MORENO VALLEY</td><td>CA</td></tr>
				<tr><td>110086</td><td>WASHINGTON COUNTY REGIONAL MEDICAL CENTER</td><td>GA</td></tr>
				<tr><td>110100</td><td>JEFFERSON HOSPITAL</td><td>GA</td></tr>
				<tr><td>390043</td><td>SOLDIERS AND SAILORS MEMORIAL HOSPITAL</td><td>PA</td></tr>
				<tr><td>050543</td><td>COLLEGE HOSPITAL COSTA MESA</td><td>CA</td></tr>
				<tr><td>360153</td><td>BELMONT COMMUNITY HOSPITAL</td><td>OH</td></tr>
				<tr><td>110209</td><td>TURNING POINT HOSPITAL</td><td>GA</td></tr>
				<tr><td>150179</td><td>FAIRBANKS</td><td>IN</td></tr>
				<tr><td>220062</td><td>ADCARE HOSPITAL OF WORCESTER INC</td><td>MA</td></tr>
				<tr><td>330232</td><td>ST MARY'S HOSPITAL ( TROY )</td><td>NY</td></tr>
				<tr><td>340168</td><td>WILMINGTON TREATMENT CENTER</td><td>NC</td></tr>
				<tr><td>360245</td><td>GLENBEIGH HEALTH SOURCES</td><td>OH</td></tr>
				<tr><td>360247</td><td>WOODS AT PARKSIDE,THE</td><td>OH</td></tr>
				<tr><td>390025</td><td>KENSINGTON HOSPITAL</td><td>PA</td></tr>
				<tr><td>390272</td><td>VALLEY FORGE MEDICAL CENTER AND HOSPITAL</td><td>PA</td></tr>
				<tr><td>390278</td><td>EAGLEVILLE HOSPITAL</td><td>PA</td></tr>
				<tr><td>230279</td><td>BRIGHTON HOSPITAL</td><td>MI</td></tr>
				<tr><td>010138</td><td>HILL HOSPITAL OF SUMTER COUNTY</td><td>AL</td></tr>
				<tr><td>230275</td><td>HEALTHSOURCE SAGINAW</td><td>MI</td></tr>
				<tr><td>230071</td><td>STRAITH HOSPITAL FOR SPECIAL SURGERY</td><td>MI</td></tr>
				<tr><td>330406</td><td>SUNNYVIEW HOSPITAL AND REHABILITATION CENTER</td><td>NY</td></tr>
			</tbody>
		</table>
		</div>
	</body>
</html>
