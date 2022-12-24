@extends('layouts.appFront')
@section('title', 'BMI')
@stack('css')
<link rel="stylesheet" type="text/css" href="{{ asset('/css/ng-slider.min.css')}}">	
	
		 		
   <link rel="stylesheet" type="text/css" href="{{ asset('/css/bmi-calculator.css') }}">			

@section('content')


         <section class="bmi-calculator ng-scope container-fluid m-3" data-ng-app="bmi" data-ng-controller="BmiCtrl" data-novalidate="">
            
            <div class="row">
               
            <div class="col-md-5 col-sm-10">
               <div class="bmi-options">
                  <div class="col-md-12">
                     <div class="row">
                        <div class="col-md-3">
                           <img alt="gender_male_false" class="gender" id="male" data-ng-click="bmiOption('male')" src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/button_male_false.svg" data-ng-src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/button_male_false.svg">
                        </div>
                        <div class="col-md-4">
                           <img alt="gender_female_true" class="gender" id="female" data-ng-click="bmiOption('female')" src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/button_female_true.svg" data-ng-src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/button_female_true.svg">                                  
                        </div>
                     </div>
                  </div>
                  <p id="system">Measuring System</p>
                  <label for="changeUnit" style="display:none;"></label>
                  <select data-ng-model="units.id" data-convert-to-number="" data-ng-change="changeUint()" name="changeUnit" id="changeUnit" class="select ng-pristine ng-untouched ng-valid">
                     <option value="0">Metric</option>
                     <option value="1">Imperial</option>
                  </select>
               </div>
               <div class="height-weight">
                  <div class="height-wrapper">
                     <div class="height-value">
                        <span id="height-metric" data-ng-show="isMetric">Height in cms: <br><label for="sliderHeight" style="display:none;"></label><input class="value ng-pristine ng-untouched ng-valid" data-ng-model="sliderHeight.heightValue" id="sliderHeight" name="sliderHeight"></span>
                        <span id="height-imperial" data-ng-show="isImperial" class="ng-hide">Height in feet / inches: 
                        <br><input class="value ng-pristine ng-untouched ng-valid" data-ng-model="feet" data-ng-change="convertToInches()">/
                        <input class="value ng-pristine ng-untouched ng-valid" data-ng-model="inches" data-ng-change="convertToInches()">
                        </span>
                     </div>
                     <div class="height-slider-wrapper" data-ng-show="isMetric">
                        <input class="height-slider ng-pristine ng-untouched ng-valid ng-isolate-scope ng-hide" data-ng-model="sliderHeight.heightValue" type="text" data-slider="" data-options="sliderHeight.options" value="170">
                        <span ng-class="mainSliderClass" id="" style="display: none;" class="ng-scope jslider  jslider-single">
                           <table>
                              <tbody>
                                 <tr>
                                    <td>
                                       <div class="jslider-bg"><i class="left"></i><i class="right"></i><i class="range"></i><i class="before" style="left: 0px; width: 50%;"></i><i class="default" style="left: 50%;"></i><i class="default"></i><i class="after" style="left: 50%; width: 0%;"></i></div>
                                       <div class="jslider-pointer" style="left: 50%;"></div>
                                       <div class="jslider-pointer jslider-pointer-to"></div>
                                       <div class="jslider-label ng-binding"><span class="ng-binding">130</span>cm</div>
                                       <div class="jslider-label jslider-label-to ng-binding"><span class="ng-binding">210</span>cm</div>
                                       <div class="jslider-value ng-binding" style="left: 50%; margin-left: -22.5px; right: auto;"><span>170</span>cm</div>
                                       <div class="jslider-value jslider-value-to ng-binding"><span></span>cm</div>
                                       <div class="jslider-scale" id=""><span style="left: 0%"><ins>130</ins></span><span style="left: 25%"></span><span style="left: 50%"><ins>170</ins></span><span style="left: 75%"></span><span style="left: 100%"><ins>210</ins></span></div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </span>
                     </div>
                     <div class="height-slider-wrapper ng-hide" data-ng-show="isImperial">
                        <input class="height-slider ng-pristine ng-untouched ng-valid ng-isolate-scope ng-hide" data-ng-model="sliderHeight2.heightValue" type="text" data-slider="" data-options="sliderHeight2.options" value="65">
                        <span ng-class="mainSliderClass" id="" class="ng-scope jslider  jslider-single">
                           <table>
                              <tbody>
                                 <tr>
                                    <td>
                                       <div class="jslider-bg" style="display: none;"><i class="left"></i><i class="right"></i><i class="range"></i><i class="before" style="left: 0px; width: 50%;"></i><i class="default" style="left: 50%;"></i><i class="default"></i><i class="after" style="left: 50%; width: 0%;"></i></div>
                                       <div class="jslider-pointer" style="left: 50%; display: none;"></div>
                                       <div class="jslider-pointer jslider-pointer-to"></div>
                                       <div class="jslider-label ng-binding"><span class="ng-binding">51</span>inch</div>
                                       <div class="jslider-label jslider-label-to ng-binding"><span class="ng-binding">79</span>inch</div>
                                       <div class="jslider-value ng-binding" style="left: 50%; margin-left: -21px; right: auto;"><span>65</span>inch</div>
                                       <div class="jslider-value jslider-value-to ng-binding"><span></span>inch</div>
                                       <div class="jslider-scale" id=""><span style="left: 0%"><ins style="margin-left: 0px;">51</ins></span><span style="left: 25%"></span><span style="left: 50%"><ins style="margin-left: 0px;">65</ins></span><span style="left: 75%"></span><span style="left: 100%"><ins style="margin-left: 0px;">79</ins></span></div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </span>
                     </div>
                  </div>
                  <div class="weight-wrapper">
                     <div class="weight-value">
                        <span id="weight-metric" data-ng-show="isMetric">Weight in kgs: <br><label for="sliderWeight" style="display:none;"></label>
                        <input class="value ng-pristine ng-untouched ng-valid" data-ng-model="sliderWeight.weightValue" id="sliderWeight" name="sliderWeight">
                        </span>
                        <span id="weight-imperial" data-ng-show="isImperial" class="ng-hide">Weight in Pounds: 
                        <br><input class="value ng-pristine ng-untouched ng-valid" data-ng-model="sliderWeight2.weightValue">
                        </span>
                     </div>
                     <div class="weight-slider-wrapper" data-ng-show="isMetric">
                        <input class="weight-slider ng-pristine ng-untouched ng-valid ng-isolate-scope ng-hide" data-ng-model="sliderWeight.weightValue" type="text" data-slider="" data-options="sliderWeight.options" value="90">
                        <span ng-class="mainSliderClass" id="" style="display: none;" class="ng-scope jslider  jslider-single">
                           <table>
                              <tbody>
                                 <tr>
                                    <td>
                                       <div class="jslider-bg"><i class="left"></i><i class="right"></i><i class="range"></i><i class="before" style="left: 0px; width: 50%;"></i><i class="default" style="left: 50%;"></i><i class="default"></i><i class="after" style="left: 50%; width: 0%;"></i></div>
                                       <div class="jslider-pointer" style="left: 50%;"></div>
                                       <div class="jslider-pointer jslider-pointer-to"></div>
                                       <div class="jslider-label ng-binding"><span class="ng-binding">30</span>kg</div>
                                       <div class="jslider-label jslider-label-to ng-binding"><span class="ng-binding">150</span>kg</div>
                                       <div class="jslider-value ng-binding" style="left: 50%; margin-left: -16.5px; right: auto;"><span>90</span>kg</div>
                                       <div class="jslider-value jslider-value-to ng-binding"><span></span>kg</div>
                                       <div class="jslider-scale" id=""><span style="left: 0%"><ins>30</ins></span><span style="left: 25%"></span><span style="left: 50%"><ins>90</ins></span><span style="left: 75%"></span><span style="left: 100%"><ins>150</ins></span></div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </span>
                     </div>
                     <div class="weight-slider-wrapper ng-hide" data-ng-show="isImperial">
                        <input class="weight-slider ng-pristine ng-untouched ng-valid ng-isolate-scope ng-hide" data-ng-model="sliderWeight2.weightValue" type="text" data-slider="" data-options="sliderWeight2.options" value="198">
                        <span ng-class="mainSliderClass" id="" class="ng-scope jslider  jslider-single">
                           <table>
                              <tbody>
                                 <tr>
                                    <td>
                                       <div class="jslider-bg" style="display: none;"><i class="left"></i><i class="right"></i><i class="range"></i><i class="before" style="left: 0px; width: 50%;"></i><i class="default" style="left: 50%;"></i><i class="default"></i><i class="after" style="left: 50%; width: 0%;"></i></div>
                                       <div class="jslider-pointer" style="left: 50%;display: none;"></div>
                                       <div class="jslider-pointer jslider-pointer-to"></div>
                                       <div class="jslider-label ng-binding"><span class="ng-binding">66</span>pound</div>
                                       <div class="jslider-label jslider-label-to ng-binding"><span class="ng-binding">330</span>pound</div>
                                       <div class="jslider-value ng-binding" style="left: 50%; margin-left: -28px; right: auto;"><span>198</span>pound</div>
                                       <div class="jslider-value jslider-value-to ng-binding"><span></span>pound</div>
                                       <div class="jslider-scale" id=""><span style="left: 0%"><ins style="margin-left: 0px;">30</ins></span><span style="left: 25%"></span><span style="left: 50%"><ins style="margin-left: 0px;">90</ins></span><span style="left: 75%"></span><span style="left: 100%"><ins style="margin-left: 0px;">150</ins></span></div>
                                    </td>
                                 </tr>
                              </tbody>
                           </table>
                        </span>
                     </div>
                  </div>
                  <a class="button" data-ng-click="bmiSubmit = true"><img src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/calculateButton.svg" alt="calculateButton"></a>
               </div>
            

            <div class="bmi-images">
               <img class="human-responsive ng-hide" src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/male_normal.png" data-ng-src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/male_normal.png" data-ng-show="maleNormal" alt="maleNormal">
               <img class="human-responsive ng-hide" src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/male_thin.png" data-ng-src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/male_thin.png" data-ng-show="maleThin" alt="maleThin">
               <img class="human-responsive ng-hide" src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/male_overweight.png" data-ng-src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/male_overweight.png" data-ng-show="maleOverweight" alt="maleOverweight">
               <img class="human-responsive ng-hide" src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/male_obese.png" data-ng-src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/male_obese.png" data-ng-show="maleObese" alt="maleObese">
               <img class="human-responsive ng-hide" src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/female_normal.png" data-ng-src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/female_normal.png" data-ng-show="femaleNormal" alt="femaleNormal">
               <img class="human-responsive ng-hide" src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/female_thin.png" data-ng-src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/female_thin.png" data-ng-show="femaleThin" alt="femaleThin">
               <img class="human-responsive ng-hide" src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/female_overweight.png" data-ng-src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/female_overweight.png" data-ng-show="femaleOverweight" alt="femaleOverweight">
               <img class="human-responsive" src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/female_obese.png" data-ng-src="https://www.heartonline.org.au/images/heart/calculators/BMI_Calc/female_obese.png" data-ng-show="femaleObese" alt="femaleObese">
            </div>
         </div>


            <div class="col-md-6 ml-2 col-sm-12">
            <div class="bmi-result ng-hide col-sm-12" data-ng-show="bmiSubmit">
               <p id="recalculate_tip">Recalculate by adjusting the sliders</p>
               <div class="table_wrap ">
                  <table>
                     <tbody>
                        <tr>
                           <td id="result_part">
                              <div class="table_wrap">
                                 <table class="result">
                                    <tbody>
                                       <tr class="result_title">
                                          <th colspan="2">YOUR RESULTS</th>
                                       </tr>
                                       <tr class="result_content bg-white">
                                          <td>Your BMI</td>
                                          <td class="ng-binding">31.1</td>
                                       </tr>
                                       <tr class="result_content" id="second_tr">
                                          <td>Suggested Healthy Weight Range</td>
                                          <td data-ng-show="display_kg" class="ng-binding">53 - <span class="ng-binding">71</span> Kg</td>
                                          <td data-ng-show="display_pound" class="ng-binding ng-hide">111.2 - <span class="ng-binding">149.6</span> lb</td>
                                       </tr>
                                       <tr class="result_content bg-white">
                                          <td>Your Category</td>
                                          <td class="ng-binding">Obese</td>
                                       </tr>
                                       <tr id="last_tr">
                                          <td></td>
                                          <td></td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </td>
                           <td id="summary_part" class="result_content text-white">
                              <div class="bmi-summary ng-hide" data-ng-show="bmiSubmit">
                                 <header data-ng-show="underweightDetails" class="ng-hide">
                                    <h3>Underweight(BMI less than 18.5)</h3>
                                    <div class="h3-red-line"></div>
                                 </header>
                                 <article data-ng-show="underweightDetails" class="ng-hide">
                                    <p>You are underwight for your height. It's important to aim to keep within your healthy weight range. Being in the healthy weight range will improve your body's ability to fight off infection or illness.</p>
                                    <p><b>Talk to your GP</b></p>
                                    <p>If you're concerned about your weight or you are losing weight without trying, talk to your GP and Dietitian to make sure there aren't any other problems causing this.</p>
                                 </article>
                                 <header data-ng-show="healthyweightDetails" class="ng-hide">
                                    <h3>Healthy Weight(BMI 18.5 to 25)</h3>
                                    <div class="h3-red-line"></div>
                                 </header>
                                 <article data-ng-show="healthyweightDetails" class="ng-hide">
                                    <p>You are a healthy weight for your height. But we recommend that you also check your <a href="https://www.heartonline.org.au/resources/calculators/waist-size-calculator">waist measurement</a>.
                                    </p>
                                    <p>Aim to keep within the ideal weight range by eating a healthy, well-balanced diet and exercising regularly. Most adults should be active for 30 minutes on most days.</p>
                                    <p>For older Australians, your general health may be more important than being mildly overweight. Some researchers have suggested that a BMI range of 22-26 is acceptable for older Australians.</p>
                                 </article>
                                 <header data-ng-show="overweightDetails" class="ng-hide">
                                    <h3>Overweight(BMI 25 to 30)</h3>
                                    <div class="h3-red-line"></div>
                                 </header>
                                 <article data-ng-show="overweightDetails" class="ng-hide">
                                    <p>Being overweight increases your risk of developing coronary heart disease, as well as other health conditions such as diabetes. Keeping to a healthy weight will help you control your blood pressure and cholesterol levels. You lose weight if the amount of energy coming into your body is less than what is being used up by your body. Aim to exercise more and eat a healthy balanced diet. For individualised medical and dietary advice consult your GP and Dietitian.</p>
                                 </article>
                                 <!--ng-show = categoryOtpion)(bmiValue) or obeseDetails  -->
                                 <header data-ng-show="obeseDetails">
                                    <h3>Obese(BMI 30+)</h3>
                                    <div class="h3-red-line"></div>
                                 </header>
                                 <article class="text-justify" data-ng-show="obeseDetails">
                                    <p>As your BMI increases, your risk of developing coronary heart disease, diabetes and some cancers increases. It is important that you take steps to reduce your weight. The good news is that even losing small amounts of weight can benefit your health. You lose weight if the amount of energy coming into your body is less than what is being used up by your body. Aim to exercise more and eat healthy balanced diet.</p>
                                    <p><b>Talk to your GP</b></p>
                                    <p>For individualised medical and dietary advice consult your GP and Dietitian. If your BMI is over 35, your GP may advise you on additional options available to support you with losing weight.</p>
                                 </article>
                              </div>
                           </td>
                        </tr>
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
         </section>
         </div>

    @endsection
    @section('bmi-scripts')
    <script type="text/javascript" src="{{ asset('/js/angular.min.js') }}"></script>
		 
       <script type="text/javascript" src="{{ asset('/js/bmi-calculator-js.js') }}"></script>
    
    <script type="text/javascript" src="{{ asset('/js/slider.min.js') }}"></script>
    @endsection