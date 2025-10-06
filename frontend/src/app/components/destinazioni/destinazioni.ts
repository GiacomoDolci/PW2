import { Component, OnInit } from '@angular/core';
import { Api } from '../../services/api';
import { Router } from '@angular/router';

@Component({
  selector: 'app-destinazioni',
  standalone: false,
  templateUrl: './destinazioni.html',
  styleUrl: './destinazioni.css'
})
export class Destinazioni implements OnInit {
  destinazioni: any[] = [];

  constructor(private api: Api, private router: Router) {}

  ngOnInit(): void {
    this.api.getDestinazioni().subscribe(data => {
      this.destinazioni = data;
    });
  }

  apriDettaglio(id: number) {
    this.router.navigate(['/destinazioni', id]);
  }
}
