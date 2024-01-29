<html>
  <head></head>
  <body style=font-family:-apple-system,system-ui>
    <?php
    //🔎 Display approbation status according to grades average
    
    function displayGrades(array $grades) {
      echo "<h1>Grades (AVG: 6pts)</h1>";
      echo "<p>Captions: <span style=color:red>Bad grade</span> / <span style=color:yellowgreen>Good grade</span></p>";
      foreach($grades as $index => $grade) {
        $index++;
        $gradeStatus = $grade < 6 ? "red" : "yellowgreen";
    
        echo "<p><span style=font-weight:700;text-transform:uppercase;color:{$gradeStatus}>Grade {$index}:</span> {$grade} pts</p>";
      }
    }
    
    function getAverage(array $grades) {
      $gradesSum = 0;
      foreach($grades as $grade) {
        $gradesSum += $grade;
      }
    
      $avg = number_format($gradesSum / count($grades), 2) ;
    
      echo "Your grades average is: {$avg} pts. <br/>";
      return $avg;
    }
    
    function getApprobationStatus(float ...$entry) {
      displayGrades($entry);
    
      if (getAverage($entry) < 6) {
        return "Sorry, but you were not approved. 📚";
      } else {
        return "Congratulations! You were approved. 🎉";
      }
    }
    
    echo getApprobationStatus(6, 8.7, 7, 4.8);
    ?>
  </body>
</html>