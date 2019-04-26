<?php
include "../Core/ProduitC.php";

	$Produitc = new ProduitC();
	$tab = $Produitc->afficher();
//pour les charts Pie	
	$sexe_m = $Produitc->chercher_stat("sexe","'M'");
	$sexe_f = $Produitc->chercher_stat("sexe","'F'");
	$sexe_e = $Produitc->chercher_stat("sexe","'E'");
	$sexe_total = $Produitc->afficher();
	$sexe_autre = 0;
	foreach($sexe_total as $row)$sexe_autre++;
	$note_0 = $Produitc->chercher_stat("note","0");
	$note_1 = $Produitc->chercher_stat("note","1");
	$note_2 = $Produitc->chercher_stat("note","2");
	$note_3 = $Produitc->chercher_stat("note","3");
	$note_4 = $Produitc->chercher_stat("note","4");
	$note_5 = $Produitc->chercher_stat("note","5");

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



function stat_sexe()
{
	titre = 'sexe';
	var sexem = "<?php echo $sexe_m; ?>";
	var sexef = "<?php echo $sexe_f; ?>";
	var sexee = "<?php echo $sexe_e; ?>";
	var sexeautre = "<?php echo $sexe_autre; ?>";
	var autre = parseInt(sexeautre, 10)-parseInt(sexem, 10)-parseInt(sexef, 10)-parseInt(sexee, 10);
	nb_parametres = 4;
	nameList = [
        'autre', 'M', 'F', 'E'
		];
	valueList = [
        autre , parseInt(sexem, 10), parseInt(sexef, 10), parseInt(sexee, 10), 24
		];
	init_stat();
}

function stat_note()
{
	titre = 'note';
	var note_0 = "<?php echo $note_0; ?>";
	var note_1 = "<?php echo $note_1; ?>";
	var note_2 = "<?php echo $note_2; ?>";
	var note_3 = "<?php echo $note_3; ?>";
	var note_4 = "<?php echo $note_4; ?>";
	var note_5 = "<?php echo $note_5; ?>";
	nb_parametres = 6;
	nameList = [
        '0','1', '2', '3', '4' , '5'
		];
	valueList = [
        parseInt(note_0, 10),parseInt(note_1, 10),parseInt(note_2, 10),parseInt(note_3, 10),parseInt(note_4, 10),parseInt(note_5, 10)
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