import { Component, OnInit } from '@angular/core';

declare let $: any;

@Component({
  selector: 'app-crm-user-list',
  templateUrl: './crm-user-list.component.html',
  styleUrls: [
    '../../assets/styles/apps/crm/users-list.min.css'
  ]
})
export class CrmUserListComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('#ks-datatable').bootstrapTable({
      icons: {
        refresh: 'la la-refresh icon-refresh',
        toggle: 'la la-list-alt icon-list-alt',
        columns: 'la la-th icon-th',
        share: 'la la-download icon-share'
      }
    });
  }
}
