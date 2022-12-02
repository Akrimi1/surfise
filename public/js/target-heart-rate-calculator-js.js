(function(){
	//[] parameter in the module definition can be used to define dependent modules
	var app = angular.module('heartRate', []);

	app.controller('HeartRateCalcCtrl', function($scope){

		//Set default values
		//$scope.fancy = 0;
		$scope.age = 25;
		$scope.hrRest = 40;
		var select_age = true;
		

		//if($scope.age||{}){
		//	$scope.maxHeartRate ="n/a";
		//}
		
		
		$scope.selectAge = function(){$scope.selectage={};
			$scope.selectMaxhr={'background-color':'#eeeeee'};
			$scope.selectMaxhr={'color':'#eeeeee'};
			select_age = true;
		}
		
		$scope.selectMaxHr = function(){$scope.selectage={'background-color':'#eeeeee'};
			$scope.selectage={'color':'#eeeeee'};
			$scope.selectMaxhr={};
			select_age = false;
		}
		
		$scope.changeAge = function(){
		    $scope.age = 220 - $scope.maxHr;
		}
		

		// Max Heart Rate = 206.9 - (0.67 X age) [more accurate]
		// ORIGINAL SITE use the simpler one : MHR = 220 - age
		function maxHeartRate() {
			//$scope.maxHr = 206.9 - 0.67 * parseInt($scope.age);
			$scope.maxHr = 220 - parseInt($scope.age);
			return $scope.maxhr;
		}

		// what to work similar to orginial site (better, actually)
		// use $scope.$watch('age', funciton()) didn't work
		// triple binding ?

		 
		// Target HRR = (HRmax - HRrest)X intensity% + HRrest
		function tHrrValue(intenNumber) {
			if(select_age)
				$scope.maxHr = 220 - parseInt($scope.age);
			
			$scope.tHrr = Math.round(($scope.maxHr- parseInt($scope.hrRest))  * intenNumber + parseInt($scope.hrRest));
			return $scope.tHrr;
		}

		// Target HRmax =  intensity% X HRmax
		function tHrmaxValue(intenNumber) {
			$scope.tHrmax = Math.round(intenNumber * $scope.maxHr);
			return $scope.tHrmax;
		}

		// Place the function tHrrValue and functoin tHrmaxValue in the view.
		$scope.maxHeartRate = maxHeartRate;
		$scope.tHrrValue = tHrrValue;
		$scope.tHrmaxValue = tHrmaxValue; 
		
		//high light 
		function very_hard()
		{
			$scope.very_hard_style = {'background-color':'#c6c6c6'};
			$scope.hard_style = {};
			return $scope.very_hard_style + $scope.hard_style;
		}
		
		$scope.highlightIntensity = function(){
			if($('#inten-value').val()=='1')
			{$scope.very_light_style={'background-color':'#c6c6c6'};
				$scope.light_style = {};
			    $scope.moderate_style = {};
				$scope.hard_style = {};
				$scope.very_hard_style = {};}
			else if($('#inten-value').val()=='2')
		    {$scope.very_light_style={};
			    $scope.light_style = {'background-color':'#c6c6c6'};
				$scope.moderate_style = {};
				$scope.hard_style = {};
				$scope.very_hard_style = {};}
			else if($('#inten-value').val()=='3')
		    {$scope.very_light_style={};
			    $scope.light_style = {};
			    $scope.moderate_style = {'background-color':'#c6c6c6'};
			    $scope.hard_style = {};
				$scope.very_hard_style = {};}
			else if($('#inten-value').val()=='4')
		    {$scope.very_light_style={};
			    $scope.light_style = {};
				$scope.moderate_style = {};
				$scope.hard_style = {'background-color':'#c6c6c6'};
				$scope.very_hard_style = {};}
			else if($('#inten-value').val()=='5')
		    {$scope.very_light_style={};
			    $scope.light_style = {};
			    $scope.moderate_style = {};
			    $scope.hard_style = {};
				$scope.very_hard_style = {'background-color':'#c6c6c6'};
			}
		}
		
		
    
	}); 
})();