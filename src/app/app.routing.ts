import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { MoviesListComponent } from './movies-list/movies-list.component';
import { MovieComponent } from './movies-list/movie/movie.component';
import { GenresListComponent } from './genres-list/genres-list.component';
import { GenreComponent } from './genres-list/genre/genre.component';
import { PeopleListComponent } from './people-list/people-list.component';
import { PeopleComponent } from './people-list/people/people.component';
import { ProffessionListComponent } from './proffession-list/proffession-list.component';
import { ProffessionComponent } from './proffession-list/proffession/proffession.component';
import { AboutComponent } from './about/about.component';
import { ContactComponent } from './contact/contact.component';

const routes: Routes = [
{path: '', pathMatch: 'full', redirectTo: 'movies'},
{path: 'movies', component: MoviesListComponent},
{path: 'movie/:id', component: MovieComponent},
{path: 'genres', component: GenresListComponent},
{path: 'genre/:id', component: GenreComponent},
{path: 'people', component: PeopleListComponent},
{path: 'people/:id', component: PeopleComponent},
{path: 'proffession', component: ProffessionListComponent},
{path: 'proffession/:id', component: ProffessionComponent},
{path: 'about', component: AboutComponent},
{path: 'contact', component: ContactComponent},
];

@NgModule({
imports: [RouterModule.forRoot(routes)],
exports: [RouterModule]
})
export class AppRoutingModule {}

export const routingComponents = [MoviesListComponent, MovieComponent, GenresListComponent, GenreComponent, AboutComponent, ContactComponent, PeopleListComponent, PeopleComponent, ProffessionListComponent, ProffessionComponent];