<?php
    require_once 'ClassZalvadora.php';
    $response = Zalvadora::question2_3($_GET);
?>
<!DOCTYPE html>
<html>
    <body>
        <p id="response_p"></p>
        <button onclick="myFunction(2)">Duplicar</button>
    </body>
</html>

<script>
    var matrix = JSON.parse('<?php echo json_encode($response); ?>');
    
    function myFunction(multiplier) {
        let iterations = matrix[0].length;
        for(let i=0; i<iterations; i++) {
            for(let j=0; j<iterations; j++) {
                matrix[i][j] *= multiplier; 
            }
        }
        document.getElementById("response_p").innerHTML = format(matrix);
    }

    function format(matrix) {
        let formattedMatrix = '';
        let iterations = matrix[0].length;
        for(let i=0; i<iterations; i++) {
            for(let j=0; j<iterations; j++) {
                formattedMatrix += matrix[i][j].toString() + ', ' ;
            }
            formattedMatrix = formattedMatrix.substring(0, formattedMatrix.length - 2);
            formattedMatrix += "<br />";
        }
        return formattedMatrix;
    }
    myFunction(1);
</script>