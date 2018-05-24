<div id="chart" style="height: 100%; width: 100%;"></div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.debug.js" integrity="sha384-CchuzHs077vGtfhGYl9Qtc7Vx64rXBXdIAZIPbItbNyWIRTdG0oYAqki3Ry13Yzu" crossorigin="anonymous"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		var id = "{{ $id }}";
		var tahun = "{{ $tahun }}";

		getChart(id, tahun);
	})

	function getChart(id, tahun){
        $.ajax({
          url: "{{ route('workpage.getChart') }}",
          data: {
            id: id, 
            tahun: tahun},
          success: function(data){
            // console.log(data);

            var months = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];
            var jamnyala = [];
            for(i=0; i<12; i++){
              var jn = data.jamnyala[i];
              jamnyala[i] = { x: new Date(jn.tahun, jn.bulan - 1, 1), y: jn.jam_nyala, label: months[i] };
            }

            var title = "Jam Nyala " + tahun;

            // console.log(jamnyala);
            var chart = new CanvasJS.Chart('chart',{
              animationEnabled: false,
              theme: "light2",
              title:{
                text: title
              },
              axisX:{
                 title: "Bulan",
              },
              axisY: {
                title: "Jam Nyala",
              },
              legend:{
                cursor:"pointer",
                verticalAlign: "bottom",
                horizontalAlign: "left",
                dockInsidePlotArea: true,
                itemclick: toogleDataSeries
              },
              data: [{
                type: "line",
                // showInLegend: true,
                name: "Jam Nyala",
                xValueFormatString: "MMMM",
                color: "#F08080",
                yValueFormatString: "# Jam",
                dataPoints: jamnyala
              }]
            });

            chart.render();

            var canvas = $("#chart .canvasjs-chart-canvas").get(0);
            var dataURL = canvas.toDataURL();

	        var pdf = new jsPDF("landscape", "cm", "a4");
	        var width = pdf.internal.pageSize.width;
            var height = pdf.internal.pageSize.height;
    	    pdf.addImage(dataURL, 'JPEG', 0, 0, width, height);
        	pdf.save("chart.pdf");

        	window.close();
          }
        });
      };

      function toogleDataSeries(e){
        if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
          e.dataSeries.visible = false;
        } else{
          e.dataSeries.visible = true;
        }
        e.chart.render();
      };
</script>

