jQuery(document).ready(function(){
	/************ VENTAS CHART *************/
	jQuery.post( 
	    '/mfarm/ventas/getventachartdata/',
	    function( data ){
	    	data = JSON.parse(data);
	    	jQuery("#ventachart").dxChart({
			    dataSource: data,
			    commonSeriesSettings: {
			        argumentField: "year"
			    },
			    series: [
			        { valueField: "sales", name: "Ventas" },
			        { valueField: "pay", name: "Pagos" },
			    ],
			    argumentAxis:{
			        grid:{
			            visible: true
			        }
			    },
			    tooltip:{
			        enabled: true
			    },
			    title: "Ventas y pagos",
			    legend: {
			        verticalAlignment: "bottom",
			        horizontalAlignment: "center"
			    },
			    commonPaneSettings: {
			        border:{
			            visible: true,
			            right: false
			        }       
			    }
			});
	    }
    );
	    
	    
   	/*var dataSource = [
	    { year: 1950, sales: 546, pay: 332 },
	    { year: 1960, sales: 605, pay: 417 },
	    { year: 1970, sales: 656, pay: 513 },
	    { year: 1980, sales: 694, pay: 614 },
	    { year: 1990, sales: 721, pay: 721 },
	    { year: 2000, sales: 730, pay: 836 },
	    { year: 2010, sales: 728, pay: 935 },
	    { year: 2020, sales: 721, pay: 1027 },
	    { year: 2030, sales: 704, pay: 1110 },
	    { year: 2040, sales: 680, pay: 1178 },
	    { year: 2050, sales: 650, pay: 1231 }

	];*/
	
});