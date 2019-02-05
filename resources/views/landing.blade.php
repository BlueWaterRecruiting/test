@extends('layouts.app')
@section('page-title','Blue Water Staffing')
@section('content')
  <section class="hero  is-medium">
    <div class="hero-body">
      <div class="container has-text-centered">
        <div class="columns">
          <div class="column">
            <div class="title is-heading">
                Lorem ipsum dolor sit amet <br> consectetur adipisicing elit <br> sed do eiusmod tempor incididunt ut <br> labore et dolore magna aliqua<br>
            </div>
          </div>
        </div>
        <div class="columns">
          <div class="column is-6 is-offset-3">
            <div class="subtitle">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliq.
            </div>
            <a href="#" class="button is-secondary">Learn More</a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section>
    <div class="hero is-primary is-medium has-image-overlay">
      <div class="banner-overlay" style="background-image:url('/images/landing/placeholder-1.jpg');opacity:.1;"></div>
      <div class="hero-body">
        <div class="container">
          <div class="field is-horizontal">
            <div class="field-body">
              <div class="field">
                <p class="control is-expanded has-icons-left">
                  <input class="input" type="text" placeholder="Location">
                  <span class="icon is-small is-left">
                    <i class="fas fa-location-arrow"></i>
                  </span>
                </p>
              </div>
              <div class="field">
                <p class="control is-expanded has-icons-left has-icons-right">
                  <input class="input is-success" type="email" placeholder="Search Job">
                  <span class="icon is-small is-left">
                    <i class="fas fa-search"></i>
                  </span>
                  <span class="icon is-small is-right">
                    <i class="fas fa-check"></i>
                  </span>
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
