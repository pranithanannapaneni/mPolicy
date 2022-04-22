<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Health Form</title>
    <style>
        html {
  box-sizing: border-box;
}
*,
*:before,
*:after {
  box-sizing: inherit;
}

body {
  font-family: sans-serif;
  padding: 1rem;
}

.quiz,
.choices {
  list-style-type: none;
  padding: 0;
}

.choices li {
  margin-bottom: 5px;
}

.choices label {
  display: flex;
  align-items: center;
}

.choices label,
input[type="radio"] {
  cursor: pointer;
}

input[type="radio"] {
  margin-right: 8px;
}

.view-results {
  padding: 1rem;
  cursor: pointer;
  font-size: inherit;
  color: white;
  background: teal;
  border-radius: 8px;
  margin-right: 5px;
}

.my-results {
  padding: 1rem;
  border: 1px solid goldenrod;
}


    </style>
</head>
<body>
    <h1>Risk Analize Form</h1>
    <div style="border:2px solid black;width:500px">
    <ul class="quiz">
        <li>
          <h4>1.Do you drink?</h4>
          <ul class="choices">
            <li><label><input type="radio" name="question0" value="2"><span>Yes</span></label></li>
            <li><label><input type="radio" name="question0" value="0"><span>No</span></label></li>
            <li><label><input type="radio" name="question0" value="1"><span>Occasionally</span></label></li>
          </ul>
        </li>
        <li>
          <h4>2.Do You Smoke?</h4>
          <ul class="choices">
            <li><label><input type="radio" name="question1" value="2"><span>Yes</span></label></li>
            <li><label><input type="radio" name="question1" value="0"><span>No</span></label></li>
            <li><label><input type="radio" name="question1" value="1"><span>Occasionally</span></label></li>
          </ul>
        </li>
        <li>
          <h4>3.Do you encountered with any type of health problems in the past?</h4>
          <ul class="choices">
            <li><label><input type="radio" name="question2" value="2"><span>Yes</span></label></li>
            <li><label><input type="radio" name="question2" value="0"><span>No</span></label></li>
          </ul>
        </li>
        <li>
          <h4>4.Cancer Tumor or maliganancy? </h4>
          <ul class="choices">
            <li><label><input type="radio" name="question3" value="2"><span>Yes</span></label></li>
            <li><label><input type="radio" name="question3" value="0"><span>No</span></label></li>
          </ul>
        </li>
        <li>
          <h4>5.Bleeding or Blood Disorders?</h4>
          <ul class="choices">
            <li><label><input type="radio" name="question4" value="2"><span>Yes</span></label></li>
            <li><label><input type="radio" name="question4" value="0"><span>No</span></label></li>
          </ul>
        </li>
      </ul>
    </div><br>
      

      <button class="view-results" onclick="returnScore()">Submit</button>
        <span id="myresults" class="my-results">My results will appear here</span>

      <script>
          var answers = ["2", "1", "0"],
  tot = 10;

function getCheckedValue(radioName) {
  var radios = document.getElementsByName(radioName); // Get radio group by-name
  for (var y = 0; y < radios.length; y++)
    if (radios[y].checked) return radios[y].value; // return the checked value
}

function getScore() {
  var score = 0;
  for (var i = 0; i < tot; i++){
      for(var y = 0 ; y < 2;y++)
    if (getCheckedValue("question" + i) === answers[y]){ score =  score + 1}; // increment only
  return score;
}
}

function returnScore() {
  document.getElementById("myresults").innerHTML = "Your score is " + getScore() + "/" + tot;
  if (getScore() > 2) {
    console.log("Bravo")
  }
}
      </script>
</body>
</html><?php /**PATH /home/pranitha/Documents/IBS/mpolicy/resources/views/healthform1.blade.php ENDPATH**/ ?>