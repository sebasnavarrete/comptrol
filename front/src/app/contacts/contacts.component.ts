import { Component, OnInit } from '@angular/core';

declare let $: any;
declare let google: any;

@Component({
  selector: 'app-contacts',
  templateUrl: './contacts.component.html',
  styleUrls: ['../../assets/styles/pages/contacts.min.css']
})
export class ContactsComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    var uluru = {lat: -25.363, lng: 131.044};
    var map = new google.maps.Map($('#ks-map').get(0), {
      zoom: 4,
      center: uluru
    });
    var marker = new google.maps.Marker({
      position: uluru,
      map: map
    });
  }
}
