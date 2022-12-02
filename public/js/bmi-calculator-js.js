(function(){
	var app = angular.module('bmi', ['ngSlider']);

	app.controller('BmiCtrl', function($scope){
		// Default values 
		$scope.isMale = false;
		$scope.isFemale = true;
		$scope.isMetric = true;
		$scope.isImperial = false;
		
		$scope.isMetric = true;
		$scope.isImperial = false;
		
		$scope.bmiSubmit = false;
		$scope.changeMetricToImperial = true;
		$scope.changeImperialToMetric = false;
		$scope.feet = 5;
		$scope.inches = 1;
		$scope.display_kg = true;
		$scope.display_pound = false;
		
		$scope.units = {id:0};

		// Using ng-click bmiOption function sets the boolean of isMale,isFemale,isMetric,isImperial, and display of male/female images based on option argument
		function bmiOption(option) {
			if (option === "male"){
				$scope.isMale = true;
				$scope.isFemale = false;
				//Display male only
				if($scope.femaleNormal == true)
				{
					$scope.maleNormal = true;
					$scope.femaleNormal = false;
				}
				if($scope.femaleThin == true)
				{
					$scope.maleThin = true;
					$scope.femaleThin = false;
				}
				if($scope.femaleOverweight == true)
				{
					$scope.maleOverweight = true;
					$scope.femaleOverweight = false;
				}
				if($scope.femaleObese == true)
				{
					$scope.maleObese = true;
					$scope.femaleObese = false;
				}
			}
			else if (option === "female"){
				$scope.isMale = false;
				$scope.isFemale = true;
				//Display female only
				if($scope.maleNormal == true)
				{
					$scope.femaleNormal = true;
					$scope.maleNormal = false;
				}
				if($scope.maleThin == true)
				{
					$scope.femaleThin = true;
					$scope.maleThin = false;
				}
				if($scope.maleOverweight == true)
				{
					$scope.femaleOverweight = true;
					$scope.maleOverweight = false;
				}
				if($scope.maleObese == true)
				{
					$scope.femaleObese = true;
					$scope.maleObese = false;
				}
			}
		}
		
		$scope.changeUint = function(){
			if($scope.isMetric == false)
		    {
				$scope.isMetric = true;
				$scope.isImperial = false;
				$scope.display_kg = true;
				$scope.display_pound = false;
			}
			else{
				$scope.isMetric = false;
				$scope.isImperial = true;
				$scope.display_kg = false;
				$scope.display_pound = true;
			}
		}
		
         
		$scope.changeToImperial = function(){
			$scope.isMetric = false;
			$scope.isImperial = true;
			$scope.display_kg = false;
			$scope.display_pound = true;
		}
		
		$scope.changToMetric = function(){
			$scope.isMetric = true;
			$scope.isImperial = false;
			$scope.display_kg = true;
			$scope.display_pound = false;
		}

		// Places the bmiOption function in the view
		$scope.bmiOption = bmiOption;

		// Height Slider Metric
		
		$scope.heightMin = 130;
		$scope.heightMax = 210;
		$scope.heightMid = $scope.heightMin + ($scope.heightMax-$scope.heightMin)/2;
		
		$scope.sliderHeight = {
			heightValue: $scope.heightMid,
		 	options: {    
   				from: $scope.heightMin,
	 	      	to: $scope.heightMax,
	 	      	step: 1,
	 	      	dimension: "cm",
	 	      	scale: [$scope.heightMin, '|', $scope.heightMid, '|' , $scope.heightMax] 
			}
		};
		
		// Height Slider Imperial
        $scope.heightMin2 = 51;
		$scope.heightMax2 = 79;
		$scope.heightMid2 = $scope.heightMin2 + ($scope.heightMax2-$scope.heightMin2)/2;
		
		$scope.sliderHeight2 = {
			heightValue: $scope.heightMid2,
		 	options: {    
   				from: $scope.heightMin2,
	 	      	to: $scope.heightMax2,
	 	      	step: 1,
	 	      	dimension: "inch",
	 	      	scale: [$scope.heightMin2, '|', $scope.heightMid2, '|' , $scope.heightMax2] 
			}
		};
		
		// Convert Metric Height to Imperial Height
		function impHeight(metricHeight) {
			/*$scope.heightVal = parseInt(metricHeight);
			$scope.heightImp = $scope.heightVal * 0.032808399;
			$scope.heightFeet = Math.floor($scope.heightImp);
			$scope.heightInch = Math.floor(($scope.heightImp - $scope.heightFeet)*12);
			return $scope.heightImperial = $scope.heightFeet + " / " + $scope.heightInch;*/
		}

		function metHeight(imperialHeight) {
			/*$scope.heightFeet = parseInt(imperialHeight.split(" / ")[0]);
			$scope.heightInch = parseInt(imperialHeight.split(" / ")[1]);

			// Conversion of Imperial height to metric units
			return $scope.sliderHeight.heightValue = Math.floor($scope.heightFeet / 0.032808399) + Math.floor($scope.heightInch/12);*/	
		}
        
		/*$scope.$watch ('sliderHeight.heightValue',function(){
			 $scope.feet = ($scope.sliderHeight.heightValue * 0.0328083989501).toFixed(1);
		})*/
	

		/*$scope.convertToCM = function(){
			return $scope.sliderHeight.heightValue = ($scope.feet / 0.0328083989501).toFixed(0);
		}*/
		
		$scope.convertToInches=function(){
			
			if($scope.feet.length == 0 || isNaN($scope.feet))
				$scope.feet = 0;
			
			if($scope.inches.length == 0 || isNaN($scope.inches))
				$scope.inches = 0;
			
			$scope.sliderHeight2.heightValue =  Math.floor($scope.feet*12 + parseInt($scope.inches));
		}
		
		// Places the impHeight and metHeight function in the view
		$scope.impHeight = impHeight;
		$scope.metHeight = metHeight;
		

		// Weight Slider1
		var weightMin = 30;
		var weightMax = 150;
		var weightMid = weightMin + (weightMax-weightMin)/2;
		
		$scope.sliderWeight = {
			weightValue: weightMid,
		 	options: {    
   				from: weightMin,
	 	      	to: weightMax,
	 	      	step: 1,
	 	      	dimension: "kg",
	 	      	scale: [weightMin, '|', weightMid, '|' , weightMax] 
			}
		};

		// Weight Slider2
		var weightMin2 = 66;
		var weightMax2 = 330;
		var weightMid2 = weightMin2 + (weightMax2-weightMin2)/2;
		
		$scope.sliderWeight2 = {
			weightValue: weightMid2,
		 	options: {    
   				from: weightMin2,
	 	      	to: weightMax2,
	 	      	step: 1,
	 	      	dimension: "pound",
	 	      	scale: [weightMin, '|', weightMid, '|' , weightMax] 
			}
		};
		
		// Convert Metric Weight to Imperial units
		$scope.$watch ('sliderWeight.weightValue',function(){
			 $scope.weightImperial = Math.round($scope.sliderWeight.weightValue * 2.20462);
		})
	
	    // Convert Imperial Weight to Metric units
		$scope.convertToMetric = function(){
			return $scope.sliderWeight.weightValue = Math.round($scope.weightImperial / 2.20462);
		}
	
		// Calculate BMI
		// the third parameter 'true' is not needed if the value being watched is pri type.
	    $scope.$watch ('[sliderHeight.heightValue,sliderWeight.weightValue]', function(){
			if($scope.isMetric==true)
				$scope.bmiValue = (($scope.sliderWeight.weightValue)/($scope.sliderHeight.heightValue * $scope.sliderHeight.heightValue * 0.0001)).toFixed(1);
		})
		
		 $scope.$watch ('[sliderHeight2.heightValue,sliderWeight2.weightValue]', function(){
			 if($scope.isMetric==false)
			 {
				$scope.bmiValue = (($scope.sliderWeight2.weightValue*703)/($scope.sliderHeight2.heightValue * $scope.sliderHeight2.heightValue)).toFixed(1);
				//$scope.inches = parseInt($scope.sliderWeight2.weightValue) - $scope.feet*12;
			 }
		 })

	    $scope.$watch ('[sliderHeight.heightValue,sliderWeight.weightValue]', function(){
			$scope.weightMin = Math.floor($scope.sliderHeight.heightValue * $scope.sliderHeight.heightValue * 0.0001 * 18.5);
		})

		$scope.$watch ('[sliderHeight.heightValue,sliderWeight.weightValue]', function(){
			$scope.weightMax = Math.floor($scope.sliderHeight.heightValue * $scope.sliderHeight.heightValue * 0.0001 * 24.9);
		})

		$scope.$watch ('[sliderHeight2.heightValue,sliderWeight2.weightValue]', function(){
			$scope.weightMin2 = ($scope.sliderHeight2.heightValue * $scope.sliderHeight2.heightValue * 18.5 /703).toFixed(1);
		})

		$scope.$watch ('[sliderHeight2.heightValue,sliderWeight2.weightValue]', function(){
			$scope.weightMax2 =($scope.sliderHeight2.heightValue * $scope.sliderHeight2.heightValue  * 24.9 / 703).toFixed(1);
		})
		// Display category and associated details based on BMI value.
		// $watch 'bmiValue' and use $scope.bmiValue directly doesn't work
		
		$scope.$watch ('[sliderHeight.heightValue,sliderWeight.weightValue]', function(){
			
			if($scope.isMetric==true)
			{
				var bmi = Math.floor($scope.sliderWeight.weightValue/($scope.sliderHeight.heightValue * $scope.sliderHeight.heightValue * 0.0001)) ;
			
			
				if ($scope.isMale == true){
				if (bmi < 18.5){
				$scope.category = "Underweight" ;
				$scope.underweightDetails = true;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = false;
				$scope.obeseDetails = false;
				$scope.maleThin = true;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
				}
				else if (bmi >= 18.5 && bmi <= 24.9){
				$scope.category = "Healthy Weight" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = true;
				$scope.overweightDetails = false;
				$scope.obeseDetails = false;
				$scope.maleThin = false;
				$scope.maleNormal = true;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
			else if (bmi >= 25 && bmi <=29.9){
				$scope.category = "Overweight" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = true;
				$scope.obeseDetails = false;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = true;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
			else{
				$scope.category = "Obese" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = false;
				$scope.obeseDetails = true;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = true;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
		}
		else if($scope.isFemale == true){

			if (bmi < 18.5){
				$scope.category = "Underweight" ;
				$scope.underweightDetails = true;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = false;
				$scope.obeseDetails = false;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = true;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
			else if (bmi >= 18.5 && bmi <= 24.9){
				$scope.category = "Healthy Weight" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = true;
				$scope.overweightDetails = false;
				$scope.obeseDetails = false;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = true;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
			else if (bmi >= 25 && bmi <=29.9){
				$scope.category = "Overweight" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = true;
				$scope.obeseDetails = false;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = true;
				$scope.femaleObese = false;
			}
			else{
				$scope.category = "Obese" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = false;
				$scope.obeseDetails = true;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = true;
			}
		}
		}
	})

	$scope.$watch ('[sliderHeight2.heightValue,sliderWeight2.weightValue]', function(){
		if($scope.isMetric==false)
		{
			var bmi = Math.floor(($scope.sliderWeight2.weightValue*703)/($scope.sliderHeight2.heightValue * $scope.sliderHeight2.heightValue));
			
	
			$scope.feet = Math.floor(parseInt($scope.sliderHeight2.heightValue) / 12);
	        $scope.inches = parseInt($scope.sliderHeight2.heightValue) % 12;
	        //document.write(parseInt($scope.sliderHeight2.heightValue));
			
			
			if ($scope.isMale == true){
				if (bmi < 18.5){
				$scope.category = "Underweight" ;
				$scope.underweightDetails = true;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = false;
				$scope.obeseDetails = false;
				$scope.maleThin = true;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
			else if (bmi >= 18.5 && bmi <= 24.9){
				$scope.category = "Healthy Weight" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = true;
				$scope.overweightDetails = false;
				$scope.obeseDetails = false;
				$scope.maleThin = false;
				$scope.maleNormal = true;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
			else if (bmi >= 25 && bmi <=29.9){
				$scope.category = "Overweight" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = true;
				$scope.obeseDetails = false;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = true;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
			else{
				$scope.category = "Obese" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = false;
				$scope.obeseDetails = true;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = true;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
		}
		else if($scope.isFemale == true){

			if (bmi < 18.5){
				$scope.category = "Underweight" ;
				$scope.underweightDetails = true;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = false;
				$scope.obeseDetails = false;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = true;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
			else if (bmi >= 18.5 && bmi <= 24.9){
				$scope.category = "Healthy Weight" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = true;
				$scope.overweightDetails = false;
				$scope.obeseDetails = false;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = true;
				$scope.femaleOverweight = false;
				$scope.femaleObese = false;
			}
			else if (bmi >= 25 && bmi <=29.9){
				$scope.category = "Overweight" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = true;
				$scope.obeseDetails = false;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = true;
				$scope.femaleObese = false;
			}
			else{
				$scope.category = "Obese" ;
				$scope.underweightDetails = false;
				$scope.healthyweightDetails = false;
				$scope.overweightDetails = false;
				$scope.obeseDetails = true;
				$scope.maleThin = false;
				$scope.maleNormal = false;
				$scope.maleOverweight = false;
				$scope.maleObese = false;
				$scope.femaleThin = false;
				$scope.femaleNormal = false;
				$scope.femaleOverweight = false;
				$scope.femaleObese = true;
			}
		}
		}
	})
	}); // app.controller 
})();