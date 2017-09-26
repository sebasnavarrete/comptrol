import { Component, OnInit } from '@angular/core';

declare let $: any;

@Component({
  selector: 'app-order',
  templateUrl: './order.component.html',
  styleUrls: ['../../../assets/styles/payment/order.min.css']
})
export class OrderComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('.ks-table').stacktable();
  }
}
