import { Component, OnInit } from '@angular/core';

declare let $: any;
declare let Dropzone: any;

@Component({
  selector: 'app-dropzone',
  templateUrl: './dropzone.component.html'
})
export class DropzoneComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    Dropzone.autoDiscover = false;

    $("#ks-default-dropzone").dropzone({
      url: "http://themesanytime.com/uploads/file.php",
      maxFilesize: 1,
      addRemoveLinks: true,
      dictDefaultMessage: 'Drop files here or click to upload',
      thumbnailWidth: 110,
      thumbnailHeight: 110
    });

    $("#ks-default-dropzone-images-only").dropzone({
      url: "http://themesanytime.com/uploads/file.php",
      maxFilesize: 1,
      addRemoveLinks: true,
      dictDefaultMessage: 'Drop files here or click to upload',
      thumbnailWidth: 110,
      thumbnailHeight: 110,
      acceptedFiles: 'image/*'
    });
  }
}
