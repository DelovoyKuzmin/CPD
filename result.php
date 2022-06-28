<?php
$conn = new mysqli("localhost", "f0675157_anketa", "anketa666", "f0675157_anketa");
if($conn->connect_error){
    die("Ошибка: " . $conn->connect_error);
}
$sql = "SELECT * FROM table_anketa2";
if($result = $conn->query($sql)){
    echo "<link rel='stylesheet' href='css/colors.css'>";
    $rowsCount = $result->num_rows; // количество полученных строк
    $twoAmountFive=0;
    $twoAmountFour=0;
    $twoAmountThree=0;
    $twoAmountTwo=0;
    $twoAmountOne=0;
    $twoPerFive=0;
    $twoPerFour=0;
    $twoPerThree=0;
    $twoPerTwo=0;
    $twoPerOne=0;

    $threeAmountFive=0;
    $threeAmountFour=0;
    $threeAmountThree=0;
    $threeAmountTwo=0;
    $threeAmountOne=0;
    $threePerFive=0;
    $threePerFour=0;
    $threePerThree=0;
    $threePerTwo=0;
    $threePerOne=0;

    $fourAmountFive=0;
    $fourAmountFour=0;
    $fourAmountThree=0;
    $fourAmountTwo=0;
    $fourAmountOne=0;
    $fourPerFive=0;
    $fourPerFour=0;
    $fourPerThree=0;
    $fourPerTwo=0;
    $fourPerOne=0;

    $eightAmountY=0;
    $eightAmountN=0;
    $eightPerY=0;
    $eightPerN=0;

    $nineAmountY=0;
    $nineAmountN=0;
    $ninePerY=0;
    $ninePerN=0;

    $tenAmountY=0;
    $tenAmountN=0;
    $tenPerY=0;
    $tenPerN=0;

    $elevenAmountY=0;
    $elevenAmountN=0;
    $elevenPerY=0;
    $elevenPerN=0;
    echo "<p>Получено объектов: $rowsCount</p>";
    echo "<table><tr><th>Вопрос №1</th><th>Вопрос №2</th><th>Вопрос №3</th><th>Вопрос №4</th><th>Вопрос №5</th><th>Вопрос №6</th><th>Вопрос №7</th><th>Вопрос №8</th><th>Вопрос №9</th><th>Вопрос №10</th><th>Вопрос №11</th><th>Вопрос №12</th></tr>";
    foreach($result as $row){
        echo "<tr>";
            echo "<td>" . $row["ques__one"] . "</td>";
            echo "<td>" . $row["ques__two"] . "</td>";
            if($row["ques__two"]=="5") {
            	$twoAmountFive++;
            } 
            if($row["ques__two"]=="4") {
            	$twoAmountFour++;
            }
            if($row["ques__two"]=="3") {
            	$twoAmountThree++;
            }
            if($row["ques__two"]=="2") {
            	$twoAmountTwo++;
            }
            if($row["ques__two"]=="1") {
            	$twoAmountOne++;
            }  

            echo "<td>" . $row["ques__three"] . "</td>";
            if($row["ques__three"]=="5") {
            	$threeAmountFive++;
            } 
            if($row["ques__three"]=="4") {
            	$threeAmountFour++;
            }
            if($row["ques__three"]=="3") {
            	$threeAmountThree++;
            }
            if($row["ques__three"]=="2") {
            	$threeAmountTwo++;
            }
            if($row["ques__three"]=="1") {
            	$threeAmountOne++;
            }

            echo "<td>" . $row["ques__four"] . "</td>";
            if($row["ques__four"]=="5") {
            	$fourAmountFive++;
            } 
            if($row["ques__four"]=="4") {
            	$fourAmountFour++;
            }
            if($row["ques__four"]=="3") {
            	$fourAmountThree++;
            }
            if($row["ques__four"]=="2") {
            	$fourAmountTwo++;
            }
            if($row["ques__four"]=="1") {
            	$fourAmountOne++;
            }

            echo "<td>" . $row["ques__five"] . "</td>";
            echo "<td>" . $row["ques__six"] . "</td>";
            echo "<td>" . $row["ques__seven"] . "</td>";
            echo "<td>" . $row["ques__eight"] . "</td>";
            if($row["ques__eight"]=="Да") {
            	$eightAmountY++;
            } 
            if($row["ques__eight"]=="Нет") {
            	$eightAmountN++;
            }
            echo "<td>" . $row["ques__nine"] . "</td>";
            if($row["ques__nine"]=="Да") {
            	$nineAmountY++;
            } 
            if($row["ques__nine"]=="Нет") {
            	$nineAmountN++;
            }
            echo "<td>" . $row["ques__ten"] . "</td>";
            if($row["ques__ten"]=="Да") {
            	$tenAmountY++;
            } 
            if($row["ques__ten"]=="Нет") {
            	$tenAmountN++;
            }
            echo "<td>" . $row["ques__eleven"] . "</td>";
            if($row["ques__eleven"]=="Да") {
            	$elevenAmountY++;
            } 
            if($row["ques__eleven"]=="Нет") {
            	$elevenAmountN++;
            }
            echo "<td>" . $row["ques__twelve"] . "</td>";
    }
    extract($_POST);
			$e = 1;
    echo "</table>";
// $twoPerFive=$twoAmountFive/$twoSum*100;
    echo "<table>Вопрос №2<tr><th>колич. 5</th><th>проц. 5</th><th>колич. 4</th><th>проц. 4</th><th>колич. 3</th><th>проц. 3</th><th>колич. 2</th><th>проц. 2</th><th>колич. 1</th><th>проц. 1</th></tr>";
    echo "<tr>";
    echo "<td>" . $twoAmountFive . "</td>";
    echo "<td>" . $twoPerFive = round(100/$rowsCount*$twoAmountFive, 1) . "</td>";
    echo "<td>" . $twoAmountFour . "</td>";
    echo "<td>" . $twoPerFour = round(100/$rowsCount*$twoAmountFour, 1) . "</td>";
    echo "<td>" . $twoAmountThree . "</td>";
    echo "<td>" . $twoPerThree = round(100/$rowsCount*$twoAmountThree, 1) . "</td>";
    echo "<td>" . $twoAmountTwo . "</td>";
    echo "<td>" . $twoPerTwo = round(100/$rowsCount*$twoAmountTwo, 1) . "</td>";
    echo "<td>" . $twoAmountOne . "</td>";
    echo "<td>" . $twoPerOne = round(100/$rowsCount*$twoAmountOne, 1) . "</td>";
    echo "</table>";

	echo "<table>Вопрос №3<tr><th>колич. 5</th><th>проц. 5</th><th>колич. 4</th><th>проц. 4</th><th>колич. 3</th><th>проц. 3</th><th>колич. 2</th><th>проц. 2</th><th>колич. 1</th><th>проц. 1</th></tr>";
    echo "<tr>";
    echo "<td>" . $threeAmountFive . "</td>";
    echo "<td>" . $threePerFive = round(100/$rowsCount*$threeAmountFive, 1) . "</td>";
    echo "<td>" . $threeAmountFour . "</td>";
    echo "<td>" . $threePerFour = round(100/$rowsCount*$threeAmountFour, 1) . "</td>";
    echo "<td>" . $threeAmountThree . "</td>";
    echo "<td>" . $threePerThree = round(100/$rowsCount*$threeAmountThree, 1) . "</td>";
    echo "<td>" . $threeAmountTwo . "</td>";
    echo "<td>" . $threePerTwo = round(100/$rowsCount*$threeAmountTwo, 1) . "</td>";
    echo "<td>" . $threeAmountOne . "</td>";
    echo "<td>" . $threePerOne = round(100/$rowsCount*$threeAmountOne, 1) . "</td>";
    echo "</table>";

    echo "<table>Вопрос №4<tr><th>колич. 5</th><th>проц. 5</th><th>колич. 4</th><th>проц. 4</th><th>колич. 3</th><th>проц. 3</th><th>колич. 2</th><th>проц. 2</th><th>колич. 1</th><th>проц. 1</th></tr>";
    echo "<tr>";
    echo "<td>" . $fourAmountFive . "</td>";
    echo "<td>" . $fourPerFive = round(100/$rowsCount*$fourAmountFive, 1) . "</td>";
    echo "<td>" . $fourAmountFour . "</td>";
    echo "<td>" . $fourPerFour = round(100/$rowsCount*$fourAmountFour, 1) . "</td>";
    echo "<td>" . $fourAmountThree . "</td>";
    echo "<td>" . $fourPerThree = round(100/$rowsCount*$fourAmountThree, 1) . "</td>";
    echo "<td>" . $fourAmountTwo . "</td>";
    echo "<td>" . $fourPerTwo = round(100/$rowsCount*$fourAmountTwo, 1) . "</td>";
    echo "<td>" . $fourAmountOne . "</td>";
    echo "<td>" . $fourPerOne = round(100/$rowsCount*$fourAmountOne, 1) . "</td>";
    echo "</table>";

    echo "<table>Вопрос №8<tr><th>колич. 'Да'</th><th>проц. 'Да'</th><th>колич. 'Нет'</th><th>проц. 'Нет'</th</tr>";
    echo "<tr>";
    echo "<td>" . $eightAmountY . "</td>";
    echo "<td>" . $eightPerY = round(100/$rowsCount*$eightAmountY, 1) . "</td>";
    echo "<td>" . $eightAmountN . "</td>";
    echo "<td>" . $eightPerN = round(100/$rowsCount*$eightAmountN, 1) . "</td>";
    echo "</table>";

    echo "<table>Вопрос №9<tr><th>колич. 'Да'</th><th>проц. 'Да'</th><th>колич. 'Нет'</th><th>проц. 'Нет'</th</tr>";
    echo "<tr>";
    echo "<td>" . $nineAmountY . "</td>";
    echo "<td>" . $ninePerY = round(100/$rowsCount*$nineAmountY, 1) . "</td>";
    echo "<td>" . $nineAmountN . "</td>";
    echo "<td>" . $ninePerN = round(100/$rowsCount*$nineAmountN, 1) . "</td>";
    echo "</table>";

    echo "<table>Вопрос №10<tr><th>колич. 'Да'</th><th>проц. 'Да'</th><th>колич. 'Нет'</th><th>проц. 'Нет'</th</tr>";
    echo "<tr>";
    echo "<td>" . $tenAmountY . "</td>";
    echo "<td>" . $tenPerY = round(100/$rowsCount*$tenAmountY, 1) . "</td>";
    echo "<td>" . $tenAmountN . "</td>";
    echo "<td>" . $tenPerN = round(100/$rowsCount*$tenAmountN, 1) . "</td>";
    echo "</table>";

    echo "<table>Вопрос №11<tr><th>колич. 'Да'</th><th>проц. 'Да'</th><th>колич. 'Нет'</th><th>проц. 'Нет'</th</tr>";
    echo "<tr>";
    echo "<td>" . $elevenAmountY . "</td>";
    echo "<td>" . $elevenPerY = round(100/$rowsCount*$elevenAmountY, 1) . "</td>";
    echo "<td>" . $elevenAmountN . "</td>";
    echo "<td>" . $elevenPerN = round(100/$rowsCount*$elevenAmountN, 1) . "</td>";
    echo "</table>";


     
	echo <<<EOT
	    <h2>Вопрос №2: </h2>
	    <span>5: {$twoPerFive}%</span><div class="orange" style="width:{$twoAmountFive}%"></div><br>
	    <span>4: {$twoPerFour}%</span><div class="red" style="width:{$twoAmountFour}%"></div><br>
	    <span>3: {$twoPerThree}%</span><div class="blue" style="width:{$twoAmountThree}%"></div><br>
	    <span>2: {$twoPerTwo}%</span><div class="yellow" style="width:{$twoAmountTwo}%"></div><br>
	    <span>1: {$twoPerOne}%</span><div class="green" style="width:{$twoAmountOne}%"></div><br>
	EOT;
    
	echo <<<EOT
        <h2>Вопрос №3: </h2>
        <span>5: {$threePerFive}%</span><div class="orange" style="width:{$threeAmountFive}%"></div><br>
        <span>4: {$threePerFour}%</span><div class="red" style="width:{$threeAmountFour}%"></div><br>
        <span>3: {$threePerThree}%</span><div class="blue" style="width:{$threeAmountThree}%"></div><br>
        <span>2: {$threePerTwo}%</span><div class="yellow" style="width:{$threeAmountTwo}%"></div><br>
        <span>1: {$threePerOne}%</span><div class="green" style="width:{$threeAmountOne}%"></div><br>
    EOT;
    
	echo <<<EOT
        <h2>Вопрос №4: </h2>
        <span>5: {$fourPerFive}%</span><div class="orange" style="width:{$fourAmountFive}%"></div><br>
        <span>4: {$fourPerFour}%</span><div class="red" style="width:{$fourAmountFour}%"></div><br>
        <span>3: {$fourPerThree}%</span><div class="blue" style="width:{$fourAmountThree}%"></div><br>
        <span>2: {$fourPerTwo}%</span><div class="yellow" style="width:{$fourAmountTwo}%"></div><br>
        <span>1: {$fourPerOne}%</span><div class="green" style="width:{$fourAmountOne}%"></div><br>
    EOT;
    
	echo <<<EOT
        <h2>Вопрос №8: </h2>
        <span>Да: {$eightPerY}%</span><div class="red" style="width:{$eightAmountY}%"></div><br>
        <span>Нет: {$eightPerN}%</span><div class="blue" style="width:{$eightAmountN}%"></div><br>
    EOT;
    
	echo <<<EOT
        <h2>Вопрос №9: </h2>
        <span>Да: {$ninePerY}%</span><div class="red" style="width:{$nineAmountY}%"></div><br>
        <span>Нет: {$ninePerN}%</span><div class="blue" style="width:{$nineAmountN}%"></div><br>
    EOT;
    
	echo <<<EOT
        <h2>Вопрос №10: </h2>
        <span>Да: {$tenPerY}%</span><div class="red" style="width:{$tenAmountY}%"></div><br>
        <span>Нет: {$tenPerN}%</span><div class="blue" style="width:{$tenAmountN}%"></div><br>
    EOT;
    
	echo <<<EOT
        <h2>Вопрос №11: </h2>
        <span>Да: {$elevenPerY}%</span><div class="red" style="width:{$elevenAmountY}%"></div><br>
        <span>Нет: {$elevenPerN}%</span><div class="blue" style="width:{$elevenAmountN}%"></div><br>
    EOT;

    

    
   
    $result->free();
} else{
    echo "Ошибка: " . $conn->error;
}
$conn->close();
?>