import { Component, OnInit, ElementRef } from '@angular/core';

declare var $: any;
declare var Response: any;
declare var Kosmo: any;

@Component({
  selector: 'app-calendar-app',
  templateUrl: './calendar-app.component.html'
})
export class CalendarAppComponent implements OnInit {
  constructor(private _elRef: ElementRef) { }

  ngOnInit() {
    let calendar = $(this._elRef.nativeElement).find('#ks-calendar');
    let datePicker = $(this._elRef.nativeElement).find('.ks-datepicker .flatpickr');
    let offsetTop = $('#ks-calendar').offset().top - 60;
    let bodyHeight = $('body').height();

    calendar.fullCalendar({
      header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay'
      },
      height: bodyHeight - offsetTop,
      defaultDate: '2016-06-12',
      editable: true,
      selectable: true,
      eventLimit: true, // allow "more" link when too many events
      droppable: true,
      events: [
        {
          title: 'All Day Event',
          start: '2016-06-01',
          className: 'ks-danger'
        },
        {
          title: 'Long Event',
          start: '2016-06-07',
          end: '2016-06-10',
          className: 'ks-grey'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-06-09T16:00:00',
          className: 'ks-success'
        },
        {
          id: 999,
          title: 'Repeating Event',
          start: '2016-06-16T16:00:00',
          className: 'ks-success'
        },
        {
          title: 'Conference',
          start: '2016-06-11',
          end: '2016-06-13'
        },
        {
          title: 'Meeting',
          start: '2016-06-12T10:30:00',
          end: '2016-06-12T12:30:00'
        },
        {
          title: 'Lunch',
          start: '2016-06-12T12:00:00'
        },
        {
          title: 'Meeting',
          start: '2016-06-12T14:30:00'
        },
        {
          title: 'Happy Hour',
          start: '2016-06-12T17:30:00'
        },
        {
          title: 'Dinner',
          start: '2016-06-12T20:00:00'
        },
        {
          title: 'Birthday Party',
          start: '2016-06-13T07:00:00',
          className: 'ks-warning'
        },
        {
          title: 'Click for Google',
          url: 'http://google.com/',
          start: '2016-06-28'
        }
      ],
      eventAfterAllRender: function(view) {
        $('#ks-calendar .fc-scroller').jScrollPane();
      }
    });

    datePicker.flatpickr();

    if (Response.band(0, 780) || Response.wave(0, 790)) {
      Kosmo.makeScrollable('.ks-calendar-container > .ks-info');
    }
  }

}
