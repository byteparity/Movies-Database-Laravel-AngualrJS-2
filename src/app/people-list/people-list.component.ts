import { Component, OnInit } from '@angular/core';
import { PeopleListService } from './people-list.service';
import * as globs from '../constant';


@Component({
  selector: 'app-people-list',
  templateUrl: './people-list.component.html',
  styleUrls: ['./people-list.component.css'],
  providers: [PeopleListService]
})
export class PeopleListComponent implements OnInit {
  public peoples: any;
  public loading: boolean = true;
  public imgUrl: string = globs.image_url;
  searchStr: string;
  constructor(private peopleListService : PeopleListService) { }

  ngOnInit() {
     this.peopleListService.getPeople()
      .subscribe(data => {
        this.peoples = data,
        this.loading = false
      });
  }

  searchPeoples(){
    this.loading = true;
    this.peopleListService.getPeople(this.searchStr)
      .subscribe(data => {
        this.peoples = data,
        this.loading = false
      });
  }

  goTop(){
    window.scrollTo(0,0);
  }

}
