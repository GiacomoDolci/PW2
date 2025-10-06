import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';

@Injectable({
  providedIn: 'root'
})
export class Api {
  private baseUrl = 'http://127.0.0.1:8000/api'; // indirzzo di connessione con il backend

  constructor(private http: HttpClient) {}

  getDestinazioni(): Observable<any> {
    return this.http.get(`${this.baseUrl}/destinazioni`);
  }

  getDestinazione(id: number): Observable<any> {
    return this.http.get(`${this.baseUrl}/destinazioni/${id}`);
  }

  getAttrazioni(): Observable<any> {
    return this.http.get(`${this.baseUrl}/attrazioni`);
  }

  getAttrazione(id: number): Observable<any> {
    return this.http.get(`${this.baseUrl}/attrazioni/${id}`);
  }
}
