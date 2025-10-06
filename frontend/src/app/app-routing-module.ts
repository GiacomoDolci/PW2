import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { Home } from './components/home/home';
import { Destinazioni } from './components/destinazioni/destinazioni';
import { Attrazioni } from './components/attrazioni/attrazioni';
import { Attrazione } from './components/attrazione/attrazione';

const routes: Routes = [
  { path: '', component: Home },
  { path: 'destinazioni/:id', component: Attrazioni },
  { path: 'attrazioni/:id', component: Attrazione },
  { path: '**', redirectTo: '' }
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
