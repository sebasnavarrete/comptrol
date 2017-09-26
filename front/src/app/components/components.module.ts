import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { SharedModule } from "../shared/shared.module";
import { UppyUploadComponent } from './uppy-upload/uppy-upload.component';
import { DropzoneComponent } from './dropzone/dropzone.component';
import { Select2Component } from './select2/select2.component';
import { ColorPickerComponent } from './color-picker/color-picker.component';

@NgModule({
  imports: [
    CommonModule,
    SharedModule,
    RouterModule.forChild([
      { path: 'file-upload/uppy', component: UppyUploadComponent },
      { path: 'file-upload/dropzone', component: DropzoneComponent },
      { path: 'select/select2', component: Select2Component },
      { path: 'color-picker', component: ColorPickerComponent },
    ])
  ],
  declarations: [
    UppyUploadComponent,
    DropzoneComponent,
    Select2Component,
    ColorPickerComponent
  ]
})
export default class ComponentsModule { }
