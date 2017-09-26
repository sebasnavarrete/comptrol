import { Component, OnInit } from '@angular/core';

declare let $: any;

@Component({
  selector: 'app-faq',
  templateUrl: './faq.component.html',
  styleUrls: ['../../assets/styles/misc/faq.min.css']
})
export class FaqComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('.ks-faq-container').on('click', '.ks-question-block', function() {
      var $parent = $(this).parent();

      if ($parent.hasClass('ks-opened')) {
        $parent.removeClass('ks-opened');
      } else {
        $('.ks-faq-container .ks-opened').removeClass('ks-opened');
        $parent.addClass('ks-opened');
      }
    });
  }
}
