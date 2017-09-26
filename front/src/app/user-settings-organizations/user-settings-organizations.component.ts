import { Component, OnInit } from '@angular/core';

declare var $: any;

@Component({
  selector: 'app-user-settings-organizations',
  templateUrl: './user-settings-organizations.component.html',
  styleUrls: ['./user-settings-organizations.component.css']
})
export class UserSettingsOrganizationsComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('select').select2({
      minimumResultsForSearch: Infinity
    });
    $('[data-toggle="tooltip"]').tooltip();
    $('.ks-payment-history').stacktable();
  }
}
