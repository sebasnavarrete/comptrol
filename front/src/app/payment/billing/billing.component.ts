import { Component, OnInit } from '@angular/core';

declare let $: any;

@Component({
  selector: 'app-billing',
  templateUrl: './billing.component.html',
  styleUrls: ['../../../assets/styles/payment/billing.min.css']
})
export class BillingComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('table').stacktable();
  }
}
