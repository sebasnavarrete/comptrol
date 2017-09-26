import { Component, OnInit } from '@angular/core';

declare let $: any;

@Component({
  selector: 'app-modal',
  templateUrl: './modal.component.html'
})
export class ModalComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    $('#ks-izi-modal-basic').iziModal();
    $('#ks-izi-modal-primary').iziModal();
    $('#ks-izi-modal-alert-primary').iziModal();
    $('#ks-izi-modal-success').iziModal();
    $('#ks-izi-modal-alert-success').iziModal();
    $('#ks-izi-modal-info').iziModal();
    $('#ks-izi-modal-alert-info').iziModal();
    $('#ks-izi-modal-warning').iziModal();
    $('#ks-izi-modal-alert-warning').iziModal();
    $('#ks-izi-modal-danger').iziModal();
    $('#ks-izi-modal-alert-danger').iziModal();

    $('#ks-izi-modal-large').iziModal({
      autoOpen: false,
      padding: 20,
      headerColor: '#3a529b',
      restoreDefaultContent: true,
      title: "Welcome to the iziModal",
      fullscreen: true,
      subtitle: 'Elegant, responsive, flexible and lightweight modal plugin with jQuery.',
      transitionIn: 'fadeInDown'
    });

    $("#ks-izi-modal-alert").iziModal({
      title: "Your message has been sent successfully",
      icon: 'la la-check',
      headerColor: '#00af66',
      width: 600,
      timeout: 10000,
      timeoutProgressbar: true,
      transitionIn: 'fadeInUp',
      transitionOut: 'fadeOutDown',
      attached: 'top',
      pauseOnHover: true,
      autoOpen: false
    });

    $("#ks-izi-modal-alert2").iziModal({
      title: "Attention",
      subtitle: 'you are being disconnected..',
      icon: 'la la-home',
      headerColor: '#BD5B5B',
      width: 600,
      timeout: 5000,
      timeoutProgressbar: true,
      transitionIn: 'fadeInDown',
      transitionOut: 'fadeOutDown',
      pauseOnHover: true,
      autoOpen: false
    });

    $("#ks-izi-modal-video").iziModal({
      headerColor: '#000',
      title: 'iziModal with iframe',
      subtitle: 'Video example using the Vimeo embed.',
      icon: 'icon-settings_system_daydream',
      overlayClose: true,
      iframe : true,
      iframeURL: 'https://player.vimeo.com/video/22439234?autoplay=1',
      fullscreen: true,
      openFullscreen: false,
      autoOpen: false
    });

    $('.ks-izi-modal-trigger').on('click', function (e) {
      $($(this).data('target')).iziModal('open');
    });
  }
}
