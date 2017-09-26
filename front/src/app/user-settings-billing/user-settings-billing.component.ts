import { Component, OnInit } from '@angular/core';

declare var $: any;

@Component({
  selector: 'app-user-settings-billing',
  templateUrl: './user-settings-billing.component.html',
  styleUrls: ['./user-settings-billing.component.css']
})
export class UserSettingsBillingComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('[data-toggle="tooltip"]').tooltip();
    $('.ks-payment-history').stacktable();
  }
}
