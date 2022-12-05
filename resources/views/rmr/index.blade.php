@extends('layouts.app')
@section('content')
<div class="col-md-12">
   <section class="container-fluid border border-white p-4">
      <div class="bmrcalc">
         <div class="header">
            <div class="title">RMR Calculator</div>
         </div>
         <form action="#">
            <div class="flexsur">
               <div class="genders text-white">
                  <p>Your Gender:</p>
                  <label> 
                    <input type="radio" id="gendermal" name="gender" class="form-radio" value="masc" checked="">Male 
                </label>
                 <label> 
                    <input type="radio" id="gender" name="gender" class="form-radio" value="fem"> Female
                 </label>
               </div>
               <div class="inputs">
                  <div class="halfinput">
                     <input type="number" id="age" value="20" class="grey-border-text-box">
                     <label class="grey-box">Age: (Years)</label>
                  </div>
                  <div class="halfinput">
                     <input type="number" id="height" value="180" class="grey-border-text-box"> 
                     <label class="grey-box">Height: (CM)</label>
                  </div>
                  <div class="halfinput"> <input type="number" id="weigth" value="80" class="grey-border-text-box"
                     > <label class="grey-box">Weight: (KG)</label>
                  </div>
               </div>
            </div>
            <div class="bottomsur">
               <button type="button" onclick="">Calculate BMR</button>
               <p id="lblResult">Your BMR is: <strong><span id="lblResultre">1882.02 Kcal/Day</span></strong></p>
            </div>
         </form>
      </div>
   </section>
</div>
@endsection