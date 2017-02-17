import { Component, OnInit } from '@angular/core';
import { GenresListService } from '../genres-list.service';
import { Router, ActivatedRoute, Params } from '@angular/router';
import * as globs from '../../constant';

@Component({
  selector: 'app-genre',
  templateUrl: './genre.component.html',
  styleUrls: ['./genre.component.css'],
  providers: [GenresListService]
})
export class GenreComponent implements OnInit {
  genre = [];
  id : number;
  public loading: boolean = true;
  public imgUrl: string = globs.image_url;
  constructor(private genresListService: GenresListService, private route: ActivatedRoute) { }

  ngOnInit() {
    this.route.params.subscribe(params => {
       this.id = +params['id']; // (+) converts string 'id' to a number
    });
    this.getGenreData();
  }

  getGenreData() {
    this.genresListService.getGenreDataOnId(this.id).subscribe(
      data => { 
        this.genre = data,
        this.loading = false
      });
  }

}
