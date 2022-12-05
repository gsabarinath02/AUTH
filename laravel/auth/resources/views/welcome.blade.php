@extends('layouts.default')
<!-- Header scripts-->

<!-- Content -->
@section('content')
    <!-- header -->
    @include('includes.header')
    <div id="particles-js">
    </div>

    <!-- Quick Links -->
    <div class="container text-center">

      <!-- Link cards -->
      <div class="qckLnksWrppr">
        <!-- header -->
        <h3>Created by Group-3<i style="color:red" class="glyphicon glyphicon-heart"></i>.</h3>
        <!-- Row -->
        <div class="row">
          <!-- cards -->
          <!-- Presentation -->
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="https://www.canva.com/design/DAFR0BzWuUE/mIRsYzedss1ClAOl372LbQ/edit?utm_content=DAFR0BzWuUE&utm_campaign=designshare&utm_medium=link2&utm_source=sharebutton">
              <div class="well dashCard btn-circle">
                <!-- heading -->
                <div class="dashCardHeading">
                  <span class="glyphicon glyphicon-blackboard visible-xs visible-sm smallIcon"></span><label>Presentation</label>
                </div>
                <!-- Icon -->
                <div class="icon hidden-xs hidden-sm">
                  <i class="glyphicon glyphicon-blackboard"></i>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="https://github.com/gsabarinath02">
              <div class="well dashCard btn-circle">
                <!-- heading -->
                <div class="dashCardHeading">
                  <span class="glyphicon glyphicon-console visible-xs visible-sm smallIcon"></span><label>Source</label>
                </div>
                <!-- Icon -->
                <div class="icon hidden-xs hidden-sm">
                  <i class="glyphicon glyphicon-console"></i>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="https://github.com/PseudoAj/MyInsightRepo/blob/master/README.md">
              <div class="well dashCard btn-circle">
                <!-- heading -->
                <div class="dashCardHeading">
                  <span class="glyphicon glyphicon-book visible-xs visible-sm smallIcon"></span><label>Documentation</label>
                </div>
                <!-- Icon -->
                <div class="icon hidden-xs hidden-sm">
                  <i class="glyphicon glyphicon-book"></i>
                </div>
              </div>
            </a>
          </div>
          <div class="col-xs-12 col-sm-6 col-md-3">
            <a href="https://www.linkedin.com/in/g-sabarinath02/">
              <div class="well dashCard btn-circle">
                <!-- heading -->
                <div class="dashCardHeading">
                  <span class="glyphicon glyphicon-comment visible-xs visible-sm smallIcon"></span><label>Contact</label>
                </div>
                <!-- Icon -->
                <div class="icon hidden-xs hidden-sm">
                  <i class="glyphicon glyphicon-comment"></i>
                </div>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
@endsection
