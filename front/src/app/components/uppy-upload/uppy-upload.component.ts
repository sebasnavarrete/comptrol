import { Component, OnInit } from '@angular/core';

declare let Uppy: any;

@Component({
  selector: 'app-uppy-upload',
  templateUrl: './uppy-upload.component.html'
})
export class UppyUploadComponent implements OnInit {

  constructor() { }

  ngOnInit() {
  }

  ngAfterViewInit() {
    var uppyAutoproceed = new Uppy.Core({debug: false, autoProceed: true});
    uppyAutoproceed.use(Uppy.Dashboard, {
      inline: true,
      target: '.ks-uppy-dashboard-container.ks-autoproceed'
    });
    uppyAutoproceed.use(Uppy.Tus10, {endpoint: '//tusd.tus.io/files/', resume: true});
    uppyAutoproceed.use(Uppy.Informer, {target: Uppy.Dashboard});
    uppyAutoproceed.use(Uppy.MetaData, {
      fields: [
        { id: 'resizeTo', name: 'Resize to', value: 1200, placeholder: 'specify future image size' },
        { id: 'description', name: 'Description', value: 'none', placeholder: 'describe what the file is for' }
      ]
    });
    uppyAutoproceed.use(Uppy.ProgressBar, {target: '.ks-uppy-dashboard-container.ks-autoproceed .ks-uppy-file-upload-progress'});
    uppyAutoproceed.use(Uppy.GoogleDrive, {target: Uppy.Dashboard, host: 'asfafs'});
    uppyAutoproceed.use(Uppy.Dropbox, {target: Uppy.Dashboard, host: 'asfafs'});
    uppyAutoproceed.use(Uppy.Webcam, {target: Uppy.Dashboard, host: 'asfafs'});
    uppyAutoproceed.run();

    var uppyNoAutoproceed = new Uppy.Core({debug: false, autoProceed: false});
    uppyNoAutoproceed.use(Uppy.Dashboard, {
      inline: true,
      target: '.ks-uppy-dashboard-container.ks-no-autoproceed'
    });
    uppyNoAutoproceed.use(Uppy.Tus10, {endpoint: '//tusd.tus.io/files/', resume: true});
    uppyNoAutoproceed.use(Uppy.Informer, {target: Uppy.Dashboard});
    uppyNoAutoproceed.use(Uppy.MetaData, {
      fields: [
        { id: 'resizeTo', name: 'Resize to', value: 1200, placeholder: 'specify future image size' },
        { id: 'description', name: 'Description', value: 'none', placeholder: 'describe what the file is for' }
      ]
    });
    uppyNoAutoproceed.use(Uppy.ProgressBar, {target: '.ks-uppy-dashboard-container.ks-no-autoproceed .ks-uppy-file-upload-progress'});
    uppyNoAutoproceed.use(Uppy.GoogleDrive, {target: Uppy.Dashboard, host: 'asfafs'});
    uppyNoAutoproceed.use(Uppy.Dropbox, {target: Uppy.Dashboard, host: 'asfafs'});
    uppyNoAutoproceed.use(Uppy.Webcam, {target: Uppy.Dashboard, host: 'asfafs'});
    uppyNoAutoproceed.run();
  }
}
