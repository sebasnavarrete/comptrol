import { Component, OnInit } from '@angular/core';

declare let $: any;

@Component({
  selector: 'app-orders-history',
  templateUrl: './orders-history.component.html',
  styleUrls: ['../../../assets/styles/payment/orders-history.min.css']
})
export class OrdersHistoryComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('.ks-table').stacktable();
  }
}
