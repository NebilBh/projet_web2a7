<?php
include "../Core/livreurCore.php";

	$livreurc = new livreurC();
	$tab = $livreurc->afficher();
//pour les charts Pie	
	$zone_travail_Nabeul = $livreurc->chercher_stat("zone_travail","'Nabeul'");
	$zone_travail_Bizerte = $livreurc->chercher_stat("zone_travail","'Bizerte'");
	$zone_travail_Sfax = $livreurc->chercher_stat("zone_travail","'Sfax'");

	$zone_travail_autre = 0;

	$zone_travail_total = $livreurc->afficher();
	foreach($zone_travail_total as $row)$zone_travail_autre++;
	

?>

<!-- afficher chart Pie -->

<script type="text/javascript">

var titre ;
var nb_parametres = 4;
var nameList = [
        '0', '1', '2', '3', '4'
		];
var valueList = [
        10, 11, 12, 13, 14
		];



function stat_zone_travail()
{
	titre = 'Zone de Travail';
	var zone_travail_Nabeul = "<?php echo $zone_travail_Nabeul; ?>";
	var zone_travail_Bizerte = "<?php echo $zone_travail_Bizerte; ?>";
	var zone_travail_Sfax = "<?php echo $zone_travail_Sfax; ?>";
	var zone_travail_autre = "<?php echo $zone_travail_autre; ?>";
	var autre = parseInt(zone_travail_autre, 10)-parseInt(zone_travail_Nabeul, 10)-parseInt(zone_travail_Bizerte, 10)-parseInt(zone_travail_Sfax, 10);
	nb_parametres = 4;
	nameList = [
        'autre', 'Nabeul', 'Bizerte', 'Sfax'
		];
	valueList = [
        autre , parseInt(zone_travail_Nabeul, 10), parseInt(zone_travail_Bizerte, 10), parseInt(zone_travail_Sfax, 10), 24
		];
	init_stat();
}



function init_stat()
{
	var dom = document.getElementById("container");
	var myChart = echarts.init(dom);
	var app = {};
	option = null;
	var data = genData(nb_parametres);

	option = {
		title : {
			text: titre, //: 'nadhir'
			subtext: titre,
			x:'center'
		},
		tooltip : {
			trigger: 'item',
			formatter: "{a} <br/>{b} : {c} ({d}%)"
		},
		legend: {
			type: 'scroll',
			orient: 'vertical',
			right: 10,
			top: 20,
			bottom: 20,
			data: data.legendData,

			selected: data.selected
		},
		series : [
			{
				name: titre,
				type: 'pie',
				radius : '55%',
				center: ['40%', '50%'],
				data: data.seriesData,
				itemStyle: {
					emphasis: {
						shadowBlur: 10,
						shadowOffsetX: 0,
						shadowColor: 'rgba(0, 0, 0, 0.5)'
					}
				}
			}
		]
	};




	function genData(	) {
		var legendData = [];
		var seriesData = [];
		var selected = {};
		for (var i = 0; i < nb_parametres; i++) {
			legendData.push(nameList[i]);
			seriesData.push({
				name: nameList[i],
				value: valueList[i]
			});
			selected[nameList[i]] = i < 6;
		}

		return {
			legendData: legendData,
			seriesData: seriesData,
			selected: selected
		};

	}
	;
	if (option && typeof option === "object") {
		myChart.setOption(option, true);
	}

}







</script>