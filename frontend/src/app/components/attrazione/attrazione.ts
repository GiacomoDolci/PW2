import { ChangeDetectorRef, Component, OnInit } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { Location } from '@angular/common';
import { Api } from '../../services/api';

@Component({
  selector: 'app-attrazione',
  standalone: false,
  templateUrl: './attrazione.html',
  styleUrls: ['./attrazione.css']
})
export class Attrazione implements OnInit {
  attrazione: any;

  constructor(
    private route: ActivatedRoute,
    private api: Api,
    private cdr: ChangeDetectorRef,
    private location: Location
  ) {}

  ngOnInit(): void {
    const id = this.route.snapshot.paramMap.get('id');
    if (id) {
      this.api.getAttrazione(+id).subscribe(data => {
        this.attrazione = data;
        this.cdr.detectChanges();
      });
    }
  }

    tornaIndietro(): void {
    this.location.back();
  }
}
