import { Component, OnInit } from '@angular/core';

declare let $: any;

@Component({
  selector: 'app-invoices',
  templateUrl: './invoices.component.html'
})
export class InvoicesComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('#ks-datatable').DataTable({
      responsive: true,
      "initComplete": function () {
        $('.dataTables_wrapper select').select2({
          minimumResultsForSearch: Infinity
        });
      }
    });
  }
}
