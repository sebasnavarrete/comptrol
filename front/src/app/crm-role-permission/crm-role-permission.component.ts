import { Component, OnInit } from '@angular/core';

declare var $: any;

@Component({
  selector: 'app-crm-role-permission',
  templateUrl: './crm-role-permission.component.html',
  styleUrls: ['./crm-role-permission.component.css']
})
export class CrmRolePermissionComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('.ks-checkbox-switch :checkbox').on('change', function (e) {
      var checkbox = $(this);

      $('.dm-permissions-list-table :checkbox').each(function () {
        $(this).get(0).checked = checkbox.is(':checked');
      });

      return false;
    });
  }
}
