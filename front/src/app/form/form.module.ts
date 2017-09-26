import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterModule } from '@angular/router';
import { SharedModule } from "../shared/shared.module";
import { ExtendedInputsComponent } from './extended-inputs/extended-inputs.component';
import { BasicInputsComponent } from './basic-inputs/basic-inputs.component';
import { ButtonsComponent } from './buttons/buttons.component';
import { ValidationComponent } from './validation/validation.component';
import { TouchspinComponent } from './touchspin/touchspin.component';
import { FlexLabelsComponent } from './flex-labels/flex-labels.component';
import { MaskInputComponent } from './mask-input/mask-input.component';
import { AutocompleteTagsComponent } from './autocomplete-tags/autocomplete-tags.component';
import { StepsColumnComponent } from './steps-column/steps-column.component';
import { StepsProgressComponent } from './steps-progress/steps-progress.component';

@NgModule({
  imports: [
    CommonModule,
    SharedModule,
    RouterModule.forChild([
      { path: 'basic-inputs', component: BasicInputsComponent },
      { path: 'extended-inputs', component: ExtendedInputsComponent },
      { path: 'buttons', component: ButtonsComponent },
      { path: 'validation', component: ValidationComponent },
      { path: 'touchspin', component: TouchspinComponent },
      { path: 'flex-labels', component: FlexLabelsComponent },
      { path: 'mask-input', component: MaskInputComponent },
      { path: 'autocomplete-and-tags', component: AutocompleteTagsComponent },
      { path: 'steps-column', component: StepsColumnComponent },
      { path: 'steps-progress', component: StepsProgressComponent }
    ])
  ],
  declarations: [
    ExtendedInputsComponent,
    BasicInputsComponent,
    ButtonsComponent,
    ValidationComponent,
    TouchspinComponent,
    FlexLabelsComponent,
    MaskInputComponent,
    AutocompleteTagsComponent,
    StepsColumnComponent,
    StepsProgressComponent
  ]
})
export default class FormModule { }
