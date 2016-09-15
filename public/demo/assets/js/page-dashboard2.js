var App = (function () {

  App.dashboard2 = function( ){
    'use strict'

    /*Sparklines*/
      $(".spk1").sparkline([2,4,3,6,7,5,8,9,4,2,6,8,8,9,10], { type: 'bar', width: '80px', barColor: '#4A8CF7'});
      $(".spk2").sparkline([4,6,7,7,4,3,2,1,4,4 ,5,6,5], { type: 'discrete', width: '80', lineColor: '#4A8CF7',thresholdValue: 4,thresholdColor: '#ff0000'});
      $(".spk4").sparkline([2,4,3,6,7,5,8,9,4,2,10,], { type: 'bar', width: '80px', height: '30px',barColor: '#EA6153'});
      $(".spk5").sparkline([5,3,5,6,5,7,4,8,6,9,8,], { type: 'bar', width: '80px', height: '30px',barColor: '#4AA3DF'});
      $(".spk3").sparkline([5,6,7,9,9,5,3,2,2,4,6,7], {
      type: 'line',
      lineColor: '#258FEC',
      fillColor: '#4A8CF7',
      spotColor: false,
      width: '80px',
      minSpotColor: false,
      maxSpotColor: false,  
      highlightSpotColor: '#1e7ac6',
      highlightLineColor: '#1e7ac6'});
 
    /*VectorMaps*/ 
      $('#world-map').vectorMap({
        map: 'world_mill_en',
        backgroundColor: 'transparent',
        regionStyle: {
          initial: {
            fill: '#38c3c1',
          },
          hover: {
            "fill-opacity": 0.8
          }
        },
        markerStyle:{
            initial:{
              r: 10
            },
             hover: {
              r: 12,
              stroke: 'rgba(255,255,255,0.8)',
              "stroke-width": 4
            }
          },
          markers: [
              {latLng: [41.90, 12.45], name: '1.512 Visits', style: {fill: '#E44C34',stroke:'rgba(255,255,255,0.7)',"stroke-width": 3}},
              {latLng: [1.3, 103.8], name: '940 Visits', style: {fill: '#E44C34',stroke:'rgba(255,255,255,0.7)',"stroke-width": 3}},
              {latLng: [51.511214, -0.119824], name: '530 Visits', style: {fill: '#E44C34',stroke:'rgba(255,255,255,0.7)',"stroke-width": 3}},
              {latLng: [40.714353, -74.005973], name: '340 Visits', style: {fill: '#E44C34',stroke:'rgba(255,255,255,0.7)',"stroke-width": 3}},
              {latLng: [-22.913395, -43.200710], name: '1.800 Visits', style: {fill: '#E44C34',stroke:'rgba(255,255,255,0.7)',"stroke-width": 3}}
          ]
      });
    
    /*Pie Chart*/
      var data = [
      { label: "Google", data: 50},
      { label: "Dribbble", data: 15},
      { label: "Twitter", data: 12},
      { label: "Youtube", data: 14},
      { label: "Microsoft", data: 14}
      ]; 

      $.plot('#ticket-chart', data, {
        series: {
          pie: {
            show: true,
            innerRadius: 0.5,
            shadow:{
              top: 5,
              left: 15,
              alpha:0.3
            },
            stroke:{
              width:0
            },
            label: {
              show: false
            },
            highlight:{
              opacity: 0.08
            }
          }
        },
        grid: {
          hoverable: true,
          clickable: true
        },
        colors: ["#5793f3", "#19B698","#dd4444","#fd9c35","#fec42c","#d4df5a","#5578c2"],
        legend: {
          show: false
        }
      });
    
      $("table td .legend").each(function(){
        var el = $(this);
        var color = el.data("color");
        el.css("background",color);
      });

    /*Image Zoom*/
      $('.image-zoom').magnificPopup({ 
        type: 'image',
        mainClass: 'mfp-with-zoom', // this class is for CSS animation below
        zoom: {
          enabled: true, // By default it's false, so don't forget to enable it
          duration: 300, // duration of the effect, in milliseconds
          easing: 'ease-in-out', // CSS transition easing function 
          opener: function(openerElement) {
            var parent = $(openerElement);
            return parent;
          }
        }
      });
    
    /*Nifty Modals Init*/
      $('.md-trigger').modalEffects();

    /*Summernote Editor*/
      $('#summernote').summernote({ 
        height: 100,
        toolbar: [
        ['style', ['bold', 'italic', 'underline', 'clear']],
        ['fontsize', ['fontsize']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['height', ['height']]
      ]});
    
  };

  return App;
})(App || {});
