import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-autocomplete-tags',
  templateUrl: './autocomplete-tags.component.html'
})
export class AutocompleteTagsComponent implements OnInit {

  selectTagsLocalData = [
    {value: 'red'},
    {value: 'blue'},
    {value: 'green'} ,
    {value: 'yellow'},
    {value: 'violet'},
    {value: 'brown'},
    {value: 'purple'},
    {value: 'black'},
    {value: 'white'}  
  ];
  
  constructor() { }

  ngOnInit() {
  }

}
