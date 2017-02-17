import { Component, OnInit } from '@angular/core';
import { PeopleListService } from '../people-list.service';
import { Router, ActivatedRoute, Params } from '@angular/router';
import * as globs from '../../constant';

@Component({
  selector: 'app-people',
  templateUrl: './people.component.html',
  styleUrls: ['./people.component.css'],
  providers: [PeopleListService]
})
export class PeopleComponent implements OnInit {
  people = [];
  id : number;
  public loading: boolean = true;
  public imgUrl: string = globs.image_url;
  constructor(private peopleListService: PeopleListService, private route: ActivatedRoute) { }

  ngOnInit() {
      this.route.params.subscribe(params => {
       this.id = +params['id']; // (+) converts string 'id' to a number
    });
    this.getPeopleData();
  }

  getPeopleData() {
    //this.article = [];
    //this.about = this.aboutservice.getData().subscribe(data => {this.about = data;});
    this.peopleListService.getPeopleDataOnId(this.id).subscribe(
      data => { 
        this.people = data,
        this.loading = false
      });
  }

}
