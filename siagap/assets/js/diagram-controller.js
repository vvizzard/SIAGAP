function showRadar(id,labels, values) {
	var data = {
		labels: labels,
		datasets: [
		{
      // label: "Ressource logistiaue",
      backgroundColor: "rgba(179,181,198,0.2)",
      borderColor: "rgba(179,181,198,1)",
      pointBackgroundColor: "rgba(179,181,198,1)",
      pointBorderColor: "#fff",
      pointHoverBackgroundColor: "#fff",
      pointHoverBorderColor: "rgba(179,181,198,1)",
      data: values
    }
    ]
  };

  var ctx = $("#" + id);
  var myRadarChart = new Chart(ctx, {
  	type: 'radar',
  	data: data,
  	options: {
  		scale: {
  			ticks: {
  				beginAtZero: true,
  				max: 100,
  				min: 0,
  				stepSize: 20,
  				fontSize: 10
  			},
  			pointLabels: {
  				fontSize: 14
  			}
  		},
  		legend: {
  			display: false
  		}
  	}
  });
}

function showBar(id, labels, datas) {
	new Chart($("#" + id), {
		type: 'bar',
		data: {
			labels: labels,
			datasets: datas
		},
		options: {
			scales: {
				yAxes: [
				{
					ticks: {
              min: 0, // it is for ignoring negative step.
              beginAtZero: true,
              stepSize: 1  // if i use this it always set it '1', which look very awkward if it have high value  e.g. '100'.
            }
          }
          ]
        },
        legend: { display: false },
        title: {
        	display: false,
        	text: 'Ressource humaine'
        }
      }
    });
}

function showTC(id, idAp) {

	var colors = ['#a1c45a', '#f1c550', '#ea4c4c', '#c4f0c5', '#605a56', '#a3a7e4', '#935900'];

	$.ajax({
		method: "GET",
		url: "StatApCible/get/?id_ap=" + idAp,
		dataType: "json"
	}).done(function( response ) {
		var labels_date = [];

		var dateToday = new Date();
		var todayYear = dateToday.getFullYear();
		for(var i = 2000; i <= todayYear; i++) {
			labels_date.push(i.toString());
		}
		// var labels_date = [];
		var datasets = [];
		
		for(var i = 0; i < response.length; i++) {
			var data_cible_0 = [];
			var data_cible_1 = [];
			var data_cible_2 = [];

			if (!response[i].historique) {
				continue;
			}
			for(var k = 0; k < labels_date.length; k++) {
				var nisy = false;
				for(var j = 0; j < response[i].historique.length; j++) {
					if (labels_date[k]==response[i].historique[j].year) {
						pushFiabilite(data_cible_0, data_cible_1, data_cible_2, response[i].historique[j]);
						nisy = true;
						break;
					}
				}
				if(nisy == false) {
					pushFiabilite(data_cible_0, data_cible_1, data_cible_2, null);
				}
			}

			if (data_cible_0) {
				console.log('data_cible_0 = ' + data_cible_0);
				var datasets_cible_0 = {};
				datasets_cible_0.data = data_cible_0;
				datasets_cible_0.label = "";
				datasets_cible_0.borderColor = colors[i];
				datasets_cible_0.borderDash = [2, 2];
				datasets_cible_0.fill = false;	
				console.log('datasets_cible_0 = ' + datasets_cible_0);
				datasets.push(datasets_cible_0);
			}
			if (data_cible_1) {
				console.log('data_cible_1 = ' + data_cible_1);
				var datasets_cible_1 = {};
				datasets_cible_1.data = data_cible_1;
				datasets_cible_1.label = "";
				datasets_cible_1.borderColor = colors[i];
				datasets_cible_1.borderDash= [7, 7];
				datasets_cible_1.fill = false;	
				console.log('datasets_cible_1 = ' + datasets_cible_1);
				datasets.push(datasets_cible_1);
			}
			if (data_cible_2) {
				console.log('data_cible_2 = ' + data_cible_2);
				var datasets_cible_2 = {};
				datasets_cible_2.data = data_cible_2;
				datasets_cible_2.label = response[i].cible.label;
				datasets_cible_2.borderColor = colors[i];
				datasets_cible_2.fill = false;
				console.log('datasets_cible_2 = ' + datasets_cible_2);
				datasets.push(datasets_cible_2);
			}
		}
		console.log("response : " + response[0].cible.id);
		console.log("labels_date : " + labels_date);
		console.log("datasets0 : " + data_cible_0);
		console.log("datasets1 : " + data_cible_1);
		console.log("datasets2 : " + data_cible_2);
		console.log("datasets : " + datasets);
		new Chart($("#" + id), {
  	type: 'line',
  	data: {
  		labels: labels_date,
  		datasets: datasets
	    },
	    options: {
	    	title: {
	    		display: false,
	    		text: 'Tendance de cibles de conservation'
	    	}
	    }
	  });
	});
}

function showTM(id, idAp) {

	var colors = ['#a1c45a', '#f1c550', '#ea4c4c', '#c4f0c5', '#605a56', '#a3a7e4', '#935900'];

	$.ajax({
		method: "GET",
		url: "StatApMenace/get/?id_ap=" + idAp,
		dataType: "json"
	}).done(function( response ) {
		var labels_date = [];

		var dateToday = new Date();
		var todayYear = dateToday.getFullYear();
		for(var i = 2000; i <= todayYear; i++) {
			labels_date.push(i.toString());
		}
		// var datasets = [];
		
		for(var i = 0; i < response.length; i++) {
			var data_cible_0 = [];
			var data_cible_1 = [];
			var data_cible_2 = [];
			var datasets = [];

			if (!response[i].historique) {
				continue;
			}
			for(var k = 0; k < labels_date.length; k++) {
				var nisy = false;
				for(var j = 0; j < response[i].historique.length; j++) {
					if (labels_date[k]==response[i].historique[j].year) {
						pushFiabilite(data_cible_0, data_cible_1, data_cible_2, response[i].historique[j]);
						nisy = true;
						break;
					}
				}
				if(nisy == false) {
					pushFiabilite(data_cible_0, data_cible_1, data_cible_2, null);
				}
			}

			if (data_cible_0) {
				console.log('data_cible_0 = ' + data_cible_0);
				var datasets_cible_0 = {};
				datasets_cible_0.data = data_cible_0;
				datasets_cible_0.label = "";
				datasets_cible_0.borderColor = colors[i];
				datasets_cible_0.borderDash = [2, 2];
				datasets_cible_0.fill = false;	
				console.log('datasets_cible_0 = ' + datasets_cible_0);
				datasets.push(datasets_cible_0);
			}
			if (data_cible_1) {
				console.log('data_cible_1 = ' + data_cible_1);
				var datasets_cible_1 = {};
				datasets_cible_1.data = data_cible_1;
				datasets_cible_1.label = "";
				datasets_cible_1.borderColor = colors[i];
				datasets_cible_1.borderDash= [7, 7];
				datasets_cible_1.fill = false;	
				console.log('datasets_cible_1 = ' + datasets_cible_1);
				datasets.push(datasets_cible_1);
			}
			if (data_cible_2) {
				console.log('data_cible_2 = ' + data_cible_2);
				var datasets_cible_2 = {};
				datasets_cible_2.data = data_cible_2;
				datasets_cible_2.label = response[i].pression.label;
				datasets_cible_2.borderColor = colors[i];
				datasets_cible_2.fill = false;
				console.log('datasets_cible_2 = ' + datasets_cible_2);
				datasets.push(datasets_cible_2);
			}

			// console.log('aty maso');
			// console.log(datasets);

			// var temp = [];
			// temp.push(datasets);
			new Chart($("#" + id + i), {
		  	type: 'line',
		  	data: {
		  		labels: labels_date,
		  		datasets: datasets
		    },
		    options: {
		    	title: {
		    		display: true,
		    		text: datasets[2].label
		    	},
		    	legend: {
		        display: false
		    	},
			    tooltips: {
		        callbacks: {
		          label: function(tooltipItem) {
	            	return tooltipItem.yLabel;
		          }
		        }
		    	}
		    }
		  });

		}
		console.log("response : " + response[0].pression.id);
		console.log("labels_date : " + labels_date);
		console.log("datasets0 : " + data_cible_0);
		console.log("datasets1 : " + data_cible_1);
		console.log("datasets2 : " + data_cible_2);
		console.log("datasets : " + datasets);
		// for (var i = datasets.length - 1; i >= 0; i--) {
		// 	var temp = [];
		// 	temp.push(datasets[i]);
		// 	new Chart($("#" + id + i), {
		//   	type: 'line',
		//   	data: {
		//   		labels: labels_date,
		//   		datasets: temp
		//     },
		//     options: {
		//     	title: {
		//     		display: false,
		//     		text: 'Tendance de cibles de conservation'
		//     	}
		//     }
		//   });
		// }
	});
}

function drawLineDiagram_cc(id, source, title, labels) {
	$('#diag-'+id+'').remove();
	$('#'+id).append('<canvas id="diag-'+id+'"></canvas>');
	$.ajax({
		method: "GET",
		url: source,
		dataType: "json"
	}).done(function( response ) {
		if (response == false) {
			$('#diag-'+id+'').remove();
		} else {
			var datas = [response[0].january, response[0].february, response[0].march, response[0].april, response[0].may, response[0].june, 
			    response[0].july, response[0].august, response[0].septembre, response[0].october, response[0].november, 
			    response[0].december];
			if (datas && datas.length==12) {
				new Chart($("#diag-" + id), {
				  type: 'line',
				  data: {
				    labels: labels,
				    datasets: [{ 
				        data: datas,
				        label: response[0].ap_label,
				        fill: false
				      }
				    ]
				  },
				  options: {
				    title: {
				      display: true,
				      text: title
				    }
				  }
				});
			} else {
				$('#diag-'+id+'').remove();
			}
		}
	});
}

function drawLineDiagram_cc_2in1(id, source1, source2, title, labels) {
	$('#diag-'+id+'').remove();
	$('#'+id).append('<canvas id="diag-'+id+'"></canvas>');
	$.ajax({
		method: "GET",
		url: source1,
		dataType: "json"
	}).done(function( response ) {
		$.ajax({
			method: "GET",
			url: source2,
			dataType: "json"
		}).done(function( response2 ) {
			var lab1 = "";
			var lab2 = "";
			if (source1.includes('CCH')) {
				lab1 = 'Historique';
			} else if (source1.includes('CCP')) {
				lab1 = 'projection 2050 RCP 8.5';
			}
			if (source2.includes('CCH')) {
				lab2 = 'Historique';
			} else if (source2.includes('CCP')) {
				lab2 = 'projection 2050 RCP 8.5';
			}


			if (response == false && response2 == false) {
				$('#diag-'+id+'').remove();
			} else {
				var datas = [response[0].january, response[0].february, response[0].march, response[0].april, response[0].may, response[0].june, 
				    response[0].july, response[0].august, response[0].septembre, response[0].october, response[0].november, 
				    response[0].december];
		    var datas2 = [response2[0].january, response2[0].february, response2[0].march, response2[0].april, response2[0].may, response2[0].june, 
				    response2[0].july, response2[0].august, response2[0].septembre, response2[0].october, response2[0].november, 
				    response2[0].december];
				if (datas && datas.length==12) {
					new Chart($("#diag-" + id), {
					  type: 'line',
					  data: {
					    labels: labels,
					    datasets: [{ 
					        data: datas,
					        label: lab1,
					        borderColor: '#a1c45a',
					        fill: false
					      },
					      {
					      	data: datas2,
					        label: lab2,
					        borderColor: '#ea4c4c',
					        fill: false
					      }
					    ]
					  },
					  options: {
					    title: {
					      display: true,
					      text: title
					    }
					  }
					});
				} else {
					$('#diag-'+id+'').remove();
				}
			}
		});
	});
}

function pushFiabilite(table0, table1, table2, cible) {
	if (cible == null) {
		table0.push(null);
		table1.push(null);
		table2.push(null);
	} else if (cible.fiabilite == '0') {
		table0.push(cible.value);
		table1.push(null);
		table2.push(null);
		if (table1[table1.length-2]) {
			table0[table0.length-2] = table1[table1.length-2];
		} else if(table2[table2.length-2]) {
			table0[table0.length-2] = table2[table2.length-2];
		}
	} else if (cible.fiabilite == '1') {
		table0.push(null);
		table1.push(cible.value);
		table2.push(null);
		if (table0[table0.length-2]) {
			table1[table1.length-2] = table0[table0.length-2];
		} else if(table2[table2.length-2]) {
			table1[table1.length-2] = table2[table2.length-2];
		}
	} else if (cible.fiabilite == '2') {
		table0.push(null);
		table1.push(null);
		table2.push(cible.value);
		if (table1[table1.length-2]) {
			table2[table2.length-2] = table1[table1.length-2];
		} else if(table0[table0.length-2]) {
			table2[table2.length-2] = table0[table0.length-2];
		}
	}
	console.log('table0 = ' + table0);
	console.log('table1 = ' + table1);
	console.log('table2 = ' + table2);
}

function intrantTable(id_class, apId, idModif) {
	var getUrl = window.location;
	var baseUrl = getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
	$.ajax({
		method: "GET",
		url: baseUrl + "/SIAGAP/siagap/AssociationApAccessibilite/get/?id_ap=" + apId,
		dataType: "json"
	}).done(function( response ) {
		var tableacc = '';
		for(var i = 0; i < response.length; i++) {

			var lab1 = 'Tres bon état';
			var lab2 = 'Bon état';
			var lab3 = 'Mauvais état';
			var lab4 = 'Tres mauvais état';

			if (response[i].remark == 'Inverse') {
				lab1 = 'Tres faible';
				lab2 = 'Faible';
				lab3 = 'Élevée';
				lab4 = 'Très élevée';
			}

			tableacc += "<tr class=\"removable_tr\">";
			tableacc += "<td>" + response[i].label + "</td>";
			if (response[i].note == 3) {
				tableacc += "<td style=\"background-color: #4caf50; color: lavenderblush;\">"+lab1+"</td>";
				tableacc += "<td class=\"unused-td\">"+lab2+"</td>";
				tableacc += "<td class=\"unused-td\">"+lab3+"</td>";
				tableacc += "<td class=\"unused-td\">"+lab4+"</td>";
			} else if (response[i].note == 2) {
				tableacc += "<td class=\"unused-td\">"+lab1+"</td>";
				tableacc += "<td style=\"background-color: #1bd20230\">"+lab2+"</td>";
				tableacc += "<td class=\"unused-td\">"+lab3+"</td>";
				tableacc += "<td class=\"unused-td\">"+lab4+"</td>";
			} else if (response[i].note == 1) {
				tableacc += "<td class=\"unused-td\">"+lab1+"</td>";
				tableacc += "<td class=\"unused-td\">"+lab2+"</td>";
				tableacc += "<td style=\"background-color: #dc35452e\">"+lab3+"</td>";
				tableacc += "<td class=\"unused-td\">"+lab4+"</td>";
			} else if (response[i].note == 0) {
				tableacc += "<td class=\"unused-td\">"+lab1+"</td>";
				tableacc += "<td class=\"unused-td\">"+lab2+"</td>";
				tableacc += "<td class=\"unused-td\">"+lab3+"</td>";
				tableacc += "<td style=\"background-color: #dc3545; color: lavenderblush;\">"+lab4+"</td>";
			}

			if (idModif != null) {
				$('#' + idModif + response[i].accessibilite_id)
						.val(response[i].accessibilite_id + '-' + response[i].note);
			}

		}

		$('.removable_tr').remove();
		$('.' + id_class).append(tableacc);
	});
}