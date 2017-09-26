import { Component, OnInit } from '@angular/core';

declare let $: any;
declare let window: any;

@Component({
  selector: 'app-kanban-board',
  templateUrl: './kanban-board.component.html',
  styleUrls: ['../../../assets/styles/apps/projects/kanban-board.min.css']
})
export class KanbanBoardComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $(".ks-cards").sortable({
      items: ".card:not(.ks-drop-or-add)",
      connectWith: ".ks-cards",
      handle: ".card-header > .ks-name",
      placeholder: "ks-drag-placeholder"
    });

    var sidebarWidth = 0;
    var paddings = 70;
    var width = 0;

    $(window).trigger('resize');

    if (!$('body').hasClass('ks-sidebar-collapsed')) {
      sidebarWidth = $('.ks-sidebar').width();
      width = $(window).width() - sidebarWidth;
    } else {
      width = $(window).width();
    }

    $('.ks-projects-kanban-board-page > .ks-content').width(width);
  }
}
