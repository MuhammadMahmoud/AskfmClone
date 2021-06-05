@extends('layouts.accountLayout')
@section('title')
Home
@endsection
@section('style')
<style>
    .button {
        background-color: #BE0E36;
        display: block;
        margin: 10px;
        border-radius: 7px;
        float: right;
        width: 110px;
        height: 40px;
      }
      .question{
        width: -webkit-fill-available;
        height: 120px;
        text-align: center;
        border-radius: 7px
      }
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
          <div class="col-sm-8">
              <div class="container-fluid" style="background-color: #020202; border-radius: 7px" >
                  <header style="color: white; text-align: center">Question</header>
                  <form action="">
                      <div >
                          <input class="question" type="text" name="question"
                          placeholder="Ask Question" >
                          <button class="button">Send</button>
                      </div>
                  </form>
              </div>
          </div>
          <div class="col-sm-4"> Secondary Stuff</div>
    </div>
</div>
@endsection
