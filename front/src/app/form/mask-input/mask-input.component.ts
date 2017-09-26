import { Component, OnInit } from '@angular/core';

declare let $: any;

@Component({
  selector: 'app-mask-input',
  templateUrl: './mask-input.component.html'
})
export class MaskInputComponent implements OnInit {

  zipCodeMaskOptions = {
    onKeyPress: function(cep, e, field, options) {
      let masks = ['00000-000', '0-00-00-00'];
      let mask = (cep.length > 7) ? masks[1] : masks[0];

      $(field).mask(mask, options);
    }
  };

  moneyMaskOptions = {
    reverse: true
  };

  placeholderMaskOptions = {
    placeholder: "__/__/____"
  };

  clearIfNotMatchMaskOptions = {
    clearIfNotMatch: true
  };

  fallbackDigitMaskOptions = {
    translation: {
      'r': {
        pattern: /[\/]/,
        fallback: '/'
      },
      placeholder: "__/__/____"
    }
  };

  cellPhoneMask = function (val) {
      return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
  };

  cellPhoneMaskOptions: {};

  cpfMaskMaskOptions = {
    reverse: true
  };

  cnpjMaskMaskOptions = {
    reverse: true
  };

  selectOnFocusMaskOptions = {
    selectOnFocus: true
  };

  constructor() {
    let self = this;

    this.cellPhoneMaskOptions = {
      onKeyPress: function(val, e, field, options) {
        field.mask(self.cellPhoneMask.apply({}, arguments), options);
      }
    };
  }

  ngOnInit() {
  }

}
