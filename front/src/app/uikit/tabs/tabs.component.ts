import { Component, OnInit } from '@angular/core';

declare let $: any;

@Component({
  selector: 'app-tabs',
  templateUrl: './tabs.component.html'
})
export class TabsComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('a[data-toggle="tab"]').click(function (e) {
      e.preventDefault();
      $(this).tab('show');
    });
  }

}
