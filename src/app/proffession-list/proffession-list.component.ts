import { Component, OnInit } from '@angular/core';
import { ProffessionListService } from './proffession-list.service';

@Component({
  selector: 'app-proffession-list',
  templateUrl: './proffession-list.component.html',
  styleUrls: ['./proffession-list.component.css'],
  providers: [ProffessionListService]
})
export class ProffessionListComponent implements OnInit {
  public proffessions: any;
  public loading: boolean = true;
  searchStr: string;
  constructor(private proffessionListService : ProffessionListService) { }

  ngOnInit() {
     this.proffessionListService.getProffessions()
      .subscribe(data => {
        this.proffessions = data,
        this.loading = false
      });
  }

  searchProffession() {
    this.loading = true;
    this.proffessionListService.getProffessions(this.searchStr)
    .subscribe(data => {
      this.proffessions = data,
      this.loading = false
    });
  }

}
