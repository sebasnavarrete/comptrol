import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-steps-column',
  templateUrl: './steps-column.component.html',
  styleUrls: [
    './steps-column.component.css', 
    '../../../assets/styles/form/steps/column.min.css'
  ]
})
export class StepsColumnComponent implements OnInit {

  timesTouchspinOptions = {
    verticalbuttons: true,
    verticalupclass: 'la la-plus',
    verticaldownclass: 'la la-minus'
  };

  constructor() { }

  ngOnInit() {
  }

}
