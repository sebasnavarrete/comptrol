import { Component, OnInit } from '@angular/core';

declare let $: any;

@Component({
  selector: 'app-validation',
  templateUrl: './validation.component.html'
})
export class ValidationComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $.validate({
      modules : 'location, date, security, file, validate_strength'
    });
    $('#ks-maxlength-area').restrictLength($('#ks-maxlength-label'));
  }
}
