import { Component, OnInit } from '@angular/core';

declare let $:any;
declare let KosmoCharts:any;

@Component({
  selector: 'app-grid-board',
  templateUrl: './grid-board.component.html',
  styleUrls: ['../../../assets/styles/apps/projects/grid-board.min.css']
})
export class GridBoardComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('[data-toggle="tooltip"]').tooltip({
      delay: {
        show: 500
      }
    });

    var radialProgress = new KosmoCharts.RadialProgress('#ks-projects-progress-chart', {
      amount: 75,
      postfix: '%',
      cornerRadius: 10,
      lineWidth: 7,
      size: 150,
      description: 'work done'
    });
    radialProgress.render();
  }
}
