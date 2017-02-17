import { Component, OnInit } from '@angular/core';
import { MoviesListService } from '../movies-list.service';
import { Router, ActivatedRoute, Params } from '@angular/router';
import { FormGroup, FormBuilder, Validators  } from '@angular/forms';
import { RatingModule } from "ngx-rating";
import * as globs from '../../constant';

@Component({
  selector: 'app-movie',
  templateUrl: './movie.component.html',
  styleUrls: ['./movie.component.css'],
  providers: [MoviesListService]
})
export class MovieComponent implements OnInit {
  movie = [];
  id : number;
  starsCounts: number = 1;
  public loading: boolean = true;
  public imgUrl: string = globs.image_url;
  public addrating: boolean = false;
  ratingForm : FormGroup;
  constructor(private moviesListService: MoviesListService, private route: ActivatedRoute, fb: FormBuilder) {
     this.ratingForm = fb.group({
      'name' : [null, Validators.required],
      'email': [null, Validators.required],
      'details' : [null, Validators.required]
    })
   }

   submitRatingForm(value: any){
     this.addrating = true;
     console.log(this.starsCounts);
      console.log(value);
    }

  ngOnInit() {
    this.route.params.subscribe(params => {
       this.id = +params['id']; // (+) converts string 'id' to a number
    });
    this.getMovieData();
  }

  getMovieData() {
    //this.article = [];
    //this.about = this.aboutservice.getData().subscribe(data => {this.about = data;});
    this.moviesListService.getMovieDataOnId(this.id).subscribe(
      data => { 
        this.movie = data,
        this.loading = false
      });
    
  }

  rating(){
    console.log(this.starsCounts);
  }

}
