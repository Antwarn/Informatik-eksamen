import { ComponentFixture, TestBed } from '@angular/core/testing';

import { HovedesideComponent } from './hovedeside.component';

describe('HovedesideComponent', () => {
  let component: HovedesideComponent;
  let fixture: ComponentFixture<HovedesideComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [HovedesideComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(HovedesideComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
