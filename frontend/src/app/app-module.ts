import { NgModule, provideBrowserGlobalErrorListeners, provideZonelessChangeDetection } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';
import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';

import { AppRoutingModule } from './app-routing-module';
import { App } from './app';
import { Destinazioni } from './components/destinazioni/destinazioni';
import { Attrazioni } from './components/attrazioni/attrazioni';
import { Home } from './components/home/home';
import { Attrazione } from './components/attrazione/attrazione';

@NgModule({
  declarations: [
    App,
    Destinazioni,
    Attrazioni,
    Home,
    Attrazione
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [
    provideBrowserGlobalErrorListeners(),
    provideZonelessChangeDetection()
  ],
  bootstrap: [App]
})
export class AppModule { }
