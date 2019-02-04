<?php

namespace BlueWaterStaffing\Http\Controllers;

use Illuminate\Http\Request;

class PublicPageController extends Controller
{
  public function getLanding()
  {
      return view('landing');
  }
  public function getServices()
  {
      return view('services');
  }
  public function getJobs()
  {
      return view('jobs');
  }
  public function getAbout()
  {
      return view('about');
  }
  public function getContact()
  {
      return view('contact');
  }

}
