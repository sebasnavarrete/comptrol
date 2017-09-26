import { Component, OnInit } from '@angular/core';

declare let $: any;
declare let Swiper: any;

@Component({
  selector: 'app-profile-customer',
  templateUrl: './profile-customer.component.html',
  styleUrls: ['../../assets/styles/profile/customer.min.css']
})
export class ProfileCustomerComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('#ks-sales-datatable').DataTable({
      dom: 'rtip',
      pageLength: 4
    });

    let swiper = new Swiper('.swiper-container', {
      paginationClickable: true,
      slidesPerView: 5,
      spaceBetween: 20,
      pagination: '.swiper-pagination',
      autoResize: true,
      breakpoints: {
        1024: {
          slidesPerView: 5,
          spaceBetween: 40
        },
        768: {
          slidesPerView: 3,
          spaceBetween: 30
        },
        640: {
          slidesPerView: 2,
          spaceBetween: 20
        },
        320: {
          slidesPerView: 1,
          spaceBetween: 10
        }
      }
    });
  }
}
