import { Component, OnInit } from '@angular/core';
import { GenresListService } from './genres-list.service';

@Component({
  selector: 'app-genres-list',
  templateUrl: './genres-list.component.html',
  styleUrls: ['./genres-list.component.css'],
  providers: [GenresListService]
})
export class GenresListComponent implements OnInit {
  public genres = [];
  public loading: boolean = true;
  searchStr: string;
  constructor(private genresListService: GenresListService) { }

  ngOnInit() {
    this.genresListService.getGenres()
      .subscribe(data => {
        this.genres = data,
        this.loading = false
      });
  }

  searchGenre() {
    this.loading = true;
    this.genresListService.getGenres(this.searchStr)
    .subscribe(data => {
      this.genres = data,
      this.loading = false
    });
  }

  goTop(){
    window.scrollTo(0,0);
  }

}
