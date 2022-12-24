@extends('layouts.appFront')
@section('title', 'THR')
@stack('css')
<link rel="stylesheet" href="{{ asset('/css/thr-calc-custom.css') }}"/>
@section('content')
</div>
<div class="prof_main col-md-12">
      <section class="container  p-3">
         <section data-ng-app="heartRate" data-ng-controller="HeartRateCalcCtrl" class="ng-scope">
			
            <div class="heading text-light">
               <h4>Persons' Details</h4>
            </div>
            
            <div class="details-wrapper">
               <div class="step first-step">
                     <img src="https://www.heartonline.org.au/images/heart/calculators/THR_Calc/one.svg" alt="one_svg">
                     <p class="text-light">Persons Age</p>
                     <label for="age" style="display:none;"></label>
                     <input class="details-value-first ng-pristine ng-untouched ng-valid" type="text" id="age" data-ng-model="age" data-ng-focus="selectAge()" data-ng-style="selectage">
                     <p class="or">OR</p>
                     <p class="mhr_text text-light">Graded Excercise Test Max Heart Rate</p>
                     <label for="maxHr" style="display:none;"></label>
                     <input class="details-value-first ng-pristine ng-untouched ng-valid" type="text" id="maxHr" data-ng-model="maxHr" data-ng-focus="selectMaxHr()" data-ng-change="changeAge()" data-ng-style="selectMaxhr">
               </div>
               <div class="step">	
                     <img src="https://www.heartonline.org.au/images/heart/calculators/THR_Calc/two.svg" alt="two">
                     <p class="text-light">Heart Rate Resting</p>
                     <label for="hrRest" style="display:none;"></label>
                     <input class="details-value-second ng-pristine ng-valid ng-touched" type="text" id="hrRest" data-ng-model="hrRest">
               </div>
               <div class="step third-step">	
                  <img src="https://www.heartonline.org.au/images/heart/calculators/THR_Calc/three.svg" alt="three">
                  <p class="text-light">Persons desired exercise intensity%</p>
                  <label for="inten-value" style="display:none;"></label>
                  <select class="details-value-three ng-valid ng-dirty ng-valid-parse ng-touched" id="inten-value" name="inten-value" data-ng-change="highlightIntensity()" data-ng-model="intenChoose">
                     <option value="1">Very Light</option>
                     <option value="2">Light</option>
                     <option value="3">Moderate</option>
                     <option value="4">Hard</option>
                     <option value="5">Very Hard</option> 
                  </select>
               </div>
            </div> <!-- persons-details-wrapper -->
               
            <div class="red-line"></div>
            
            <header>
               <div class="heading">
                  <h4>Calculated Target Heart Rates</h4>
               </div>
            </header>
            
            <div class="thr-wrapper">
               <div class="table_wrap"><table class="exercise-intensity bg-white">
                   <tbody><tr class="header">
                     <th>
                         intensity 
                     </th>
                     <th>
                         hrr
                     </th>
                     <th>
                        Calculated Range 
                     </th>
                     <th>
                        hr max
                     </th>
                     <th>
                         Calculated Range 
                     </th>
                     <th>
                         rpe 
                     </th>
                  </tr>
                   
                  <tr id="verylight" data-ng-style="very_light_style" style="">
                     <td class="intensity">Very Light</td>
                     <td class="hrr"> &lt;19%</td>
                     <td class="calculated-range ng-binding">69</td>
                     <td class="hrr-max"> &lt;34%</td>
                     <td class="calculated-range ng-binding">66</td>
                     <td class="rpe">&lt;10</td>
                  </tr>
                  <tr id="light" data-ng-style="light_style">
                     <td class="intensity">Light</td>
                     <td class="hrr">20% - 39%</td>
                     <td class="calculated-range ng-binding">71 <span>-</span> 100</td>
                     <td class="hrr-max">35% - 54%</td>
                     <td class="calculated-range ng-binding">68 <span>-</span> 105</td>
                     <td class="rpe">10 - 11</td>
                  </tr>
                  <tr id="moderate" data-ng-style="moderate_style">
                     <td class="intensity">Moderate</td>
                     <td class="hrr">40% - 59%</td>					
                     <td class="calculated-range ng-binding">102 <span>-</span> 131</td>
                     <td class="hrr-max">55% - 69%</td>
                     <td class="calculated-range ng-binding">107 <span>-</span> 135</td>
                     <td class="rpe">12 - 13</td>
                  </tr>
                  <tr id="hard" data-ng-style="hard_style">
                     <td class="intensity">Hard</td>
                     <td class="hrr">60% - 84%</td>
                     <td class="calculated-range ng-binding">133 <span>-</span> 170</td>
                     <td class="hrr-max">70% - 89%</td>
                     <td class="calculated-range ng-binding">137 <span>-</span> 174</td>
                     <td class="rpe">14 - 16</td>
                  </tr>
                  <tr id="veryhard" data-ng-style="very_hard_style">
                     <td class="intensity">Very Hard</td>
                     <td class="hrr">85% - 100%</td>	
                     <td class="calculated-range ng-binding">172 <span>-</span> 195</td>	
                     <td class="hrr-max">90% - 100%</td>
                     <td class="calculated-range ng-binding">176 <span>-</span> 195</td>
                     <td class="rpe">17 - 19</td>
                  </tr>
                  
                  <tr class="footer">
                      <td colspan="2">
                        HRR = heart rate reserve
                     </td>
                     <td colspan="4">
                        HR = heart rate
                     </td>
                  </tr>
               </tbody></table></div>
   
            </div> <!-- calculated-THR-wrapper -->
         </section>
      </section>
    </div>
    @endsection
    @section('thr-script')

    <script type="text/javascript" src="{{ asset('/js/angular.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/target-heart-rate-calculator-js.js') }}"></script>
    @endsection