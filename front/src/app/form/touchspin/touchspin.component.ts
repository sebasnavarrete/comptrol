import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-touchspin',
  templateUrl: './touchspin.component.html'
})
export class TouchspinComponent implements OnInit {

  defaultOptions: {};
  verticalButtonsOptions: {};
  buttonOptions: {};

  constructor() {
    this.defaultOptions = {
      min: 0,
      max: 100,
      step: 0.1,
      decimals: 2,
      boostat: 5,
      maxboostedstep: 10,
      postfix: '%'
    };
    
    this.verticalButtonsOptions = {
      verticalbuttons: true,
      verticalupclass: 'la la-plus',
      verticaldownclass: 'la la-minus'
    };
    
    this.buttonOptions = {
      postfix: "button",
      postfix_extraclass: "btn btn-default"
    };
  }

  ngOnInit() {
  }

}
