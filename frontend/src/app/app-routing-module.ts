import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { Destinazioni } from './components/destinazioni/destinazioni';
import { Attrazioni } from './components/attrazioni/attrazioni';

const routes: Routes = [
  { path: '', redirectTo: '/destinazioni', pathMatch: 'full' },
  { path: 'destinazioni', component: Destinazioni },
  { path: 'destinazioni/:id', component: Attrazioni },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
