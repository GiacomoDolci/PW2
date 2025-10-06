import { Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Api } from '../../services/api';

@Component({
  selector: 'app-attrazioni',
  standalone: false,
  templateUrl: './attrazioni.html',
  styleUrl: './attrazioni.css'
})
export class Attrazioni implements OnInit {
  destinazione: any;
  attrazioni: any[] = [];

  constructor(private route: ActivatedRoute, private api: Api) {}

  ngOnInit(): void {
    const id = this.route.snapshot.paramMap.get('id');
    if (id) {
      this.api.getDestinazione(+id).subscribe(data => {
        this.destinazione = data;
        this.attrazioni = data.attrazioni;
      });
    }
  }
}
