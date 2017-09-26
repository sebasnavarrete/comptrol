import { Component, OnInit } from '@angular/core';

declare let $: any;
declare let KosmoCharts: any;

@Component({
  selector: 'app-tables',
  templateUrl: './tables.component.html'
})
export class TablesComponent implements OnInit {

  constructor() { }

  ngOnInit() {
    
  }

  ngAfterViewInit() {
    $('.ks-table-inline-bar-chart').each(function() {
      var barChart = new KosmoCharts.InlineBar(this, {
        height: 19,
        data: [3, 5, 2, 6, 4, 5, 3]
      });
      barChart.render();
    });

    $('table').stacktable();
  }
  
}
