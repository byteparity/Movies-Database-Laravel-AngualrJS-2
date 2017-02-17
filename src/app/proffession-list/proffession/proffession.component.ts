import { Component, OnInit } from '@angular/core';
import { ProffessionListService } from '../proffession-list.service';
import { Router, ActivatedRoute, Params } from '@angular/router';
import * as globs from '../../constant';

@Component({
  selector: 'app-proffession',
  templateUrl: './proffession.component.html',
  styleUrls: ['./proffession.component.css'],
  providers: [ProffessionListService]
})
export class ProffessionComponent implements OnInit {
  proffession = [];
  id : number;
  public loading: boolean = true;
  public imgUrl: string = globs.image_url;
  constructor(private proffessionListService: ProffessionListService, private route: ActivatedRoute) { }

  ngOnInit() {
    this.route.params.subscribe(params => {
       this.id = +params['id']; // (+) converts string 'id' to a number
    });
    this.getProffessionData();
  }

  getProffessionData() {
    //this.article = [];
    //this.about = this.aboutservice.getData().subscribe(data => {this.about = data;});
    this.proffessionListService.getProffessionDataOnId(this.id).subscribe(
      data => { 
        this.proffession = data,
        this.loading = false
      });
  }

}
