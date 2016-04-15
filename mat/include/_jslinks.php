<!--Import jQuery before materialize.js-->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<!-- Compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>

<script type="text/javascript">
	$(document).ready(function() {
$('select').material_select();
});


	 $(document).ready(function(){
      $('.parallax').parallax();
    });

	 $(document).ready(function(){
    // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
    $('.modal-trigger').leanModal();
  });
        
</script>


    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.6/angular.min.js"></script>
    <script>
        var app = angular.module('app', []);
        app.controller('ctrl', function ($scope) {
            $scope.cols = 0;
            $scope.arr = [];
            // $scope.makeArray = function () {
                $scope.arr.length = 0;
                for (var i = 0; i < parseInt(4) ; i++) {
                    $scope.arr.push(i);
                }
            // }
        });

     

</script>
