import { ChangeDetectorRef, Component, OnInit } from '@angular/core';
import { Api } from '../../services/api';
import { Router } from '@angular/router';

@Component({
  selector: 'app-home',
  standalone: false,
  templateUrl: './home.html',
  styleUrls: ['./home.css']
})
export class Home implements OnInit {
  destinazioni: any[] = [];

  constructor(private api: Api, private router: Router, private cdr: ChangeDetectorRef) {}

  ngOnInit(): void {
    this.api.getDestinazioni().subscribe(data => {
      console.log('Destinazioni ricevute:', data);
      this.destinazioni = data;
      this.cdr.detectChanges();
    });
  }

  apriAttrazioni(id: number) {
    this.router.navigate(['/destinazioni', id]);
  }
}
