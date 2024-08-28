<?php session_start();?>
<?php include('header.php');?>
<div class="container">
<h1>Fill the Slambook</h1>
<hr>
<form action="./source/slamSave.php?friend_id=<?php echo $_GET['friend_id']?>" onsubmit="return validateform()" method="post">


  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" name="name">
    </div>
  </div>
  <div class="form-group row">
    <label for="nick_name" class="col-sm-2 col-form-label">Friends call you</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="nick_name" name="nick_name">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Birthday</label>
    <div class="col-sm-10">
      <select class="form-control" aria-label="Month" name="month" id="month" title="Month" class="_5dba"><option value="0" select class="form-control"ed="1">Month</option><option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sep</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option></select class="form-control">
<select class="form-control" aria-label="Day" name="day" id="day" title="Day" class="_5dba"><option value="0" select class="form-control"ed="1">Day</option><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option></select class="form-control">
<select class="form-control" aria-label="Year" name="year" id="year" title="Year" class="_5dba"><option value="0" select class="form-control"ed="1">Year</option><option value="2017">2017</option><option value="2016">2016</option><option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option><option value="1949">1949</option><option value="1948">1948</option><option value="1947">1947</option><option value="1946">1946</option><option value="1945">1945</option><option value="1944">1944</option><option value="1943">1943</option><option value="1942">1942</option><option value="1941">1941</option><option value="1940">1940</option><option value="1939">1939</option><option value="1938">1938</option><option value="1937">1937</option><option value="1936">1936</option><option value="1935">1935</option><option value="1934">1934</option><option value="1933">1933</option><option value="1932">1932</option><option value="1931">1931</option><option value="1930">1930</option><option value="1929">1929</option><option value="1928">1928</option><option value="1927">1927</option><option value="1926">1926</option><option value="1925">1925</option><option value="1924">1924</option><option value="1923">1923</option><option value="1922">1922</option><option value="1921">1921</option><option value="1920">1920</option><option value="1919">1919</option><option value="1918">1918</option><option value="1917">1917</option><option value="1916">1916</option><option value="1915">1915</option><option value="1914">1914</option><option value="1913">1913</option><option value="1912">1912</option><option value="1911">1911</option><option value="1910">1910</option><option value="1909">1909</option><option value="1908">1908</option><option value="1907">1907</option><option value="1906">1906</option><option value="1905">1905</option></select class="form-control"></span></span>
  </div>
</div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Find  me at</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="address" name="address">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Reach me at</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="phone" name="phone">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">FB Id: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="FB" id="FB">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Favorite Movie : </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="movie" id="movie">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Favorite Actor : </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="actor" id="actor">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Favorite Actress: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="actress" id="actress">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Favorite Cuisine: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="food" id="food">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Favorite holiday destination: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="holiday" id="holiday">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Ideal role model and why?? : </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="role_model" id="role_model" onkeyup="countChars('role_model','charcount',100);" onkeydown="countChars('role_model','charcount',100);" onmouseout="countChars('role_model','charcount',100);">
    <span id="charcount">0</span> characters left.
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">First Crush!!!: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="crush" id="crush" onkeyup="countChars('crush','charcount1',30);" onkeydown="countChars('crush','charcount1',30);" onmouseout="countChars('crush','charcount1',30);">
    <span id="charcount1">0</span> characters left.
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Most memorable moment: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="memorable_moment" id="memorable_moment" onkeyup="countChars('memorable_moment','charcount2',100);" onkeydown="countChars('memorable_moment','charcount2',100);" onmouseout="countChars('memorable_moment','charcount2',100);">
    <span id="charcount2">0</span> characters left.
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Most embarrasing moment: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="embarassing_moment" id="embarassing_moment" onkeyup="countChars('embarassing_moment','charcount3',100);" onkeydown="countChars('embarassing_moment','charcount3',100);" onmouseout="countChars('embarassing_moment','charcount3',100);">
    <span id="charcount3">0</span> characters left.
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Biggest Strength: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="strength" id="strength" onkeyup="countChars('strength','charcount4',50);" onkeydown="countChars('strength','charcount4',50);" onmouseout="countChars('strength','charcount4',50);">
    <span id="charcount4">0</span> characters left.
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Biggest Weakness: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="weakness" id="weakness" onkeyup="countChars('weakness','charcount5',50);" onkeydown="countChars('weakness','charcount5',50);" onmouseout="countChars('weakness','charcount5',50);">
    <span id="charcount5">0</span> characters left.
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">What hurts me most: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="hurt" id="hurt" onkeyup="countChars('hurt','charcount6',50);" onkeydown="countChars('hurt','charcount6',50);" onmouseout="countChars('hurt','charcount6',50);">
    <span id="charcount6">0</span> characters left.
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">Things I avoid: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="avoid" id="avoid" onkeyup="countChars('avoid','charcount7',50);" onkeydown="countChars('avoid','charcount7',50);" onmouseout="countChars('avoid','charcount7',50);">
    <span id="charcount7">0</span> characters left.
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">My ambition in life is to: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="ambition" id="ambition" onkeyup="countChars('ambition','charcount8',50);" onkeydown="countChars('ambition','charcount8',50);" onmouseout="countChars('ambition','charcount8',50);">
    <span id="charcount8">0</span> characters left.
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">My hidden talents are: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="talent" id="talent" onkeyup="countChars('talent','charcount9',50);" onkeydown="countChars('talent','charcount9',50);" onmouseout="countChars('talent','charcount9',50);">
    <span id="charcount9">0</span> characters left.
      </div>
  </div>
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">What do I like about you??: </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="like_you" id="like_you" onkeyup="countChars('like_you','charcount10',50);" onkeydown="countChars('like_you','charcount10',50);" onmouseout="countChars('like_you','charcount10',50);">
    <span id="charcount10">0</span> characters left.      
  </div>
</div>
<?php
$friend_id = $_GET['friend_id'];
require_once('../mysqli_connect.php');

    $query = "SELECT * FROM slam_question WHERE user_id = '$friend_id'" ;
    // Get a response from the database by sending the connection and the query
    $response = @mysqli_query($dbc, $query);

    if($response){
      while($row = mysqli_fetch_array($response)){ 

if($row['question1'] != ""){
  ?>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"><?php echo $row['question1']?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="question1" id="question1" onkeyup="countChars('question1','charcount11',50);" onkeydown="countChars('question1','charcount11',50);" onmouseout="countChars('question1','charcount11',50);">
    <span id="charcount11">0</span> characters left.      
  </div>
</div>
<?php
} 
if($row['question2'] != ""){
?>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"><?php echo $row['question2']?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="question2" id="question2" onkeyup="countChars('question2','charcount12',50);" onkeydown="countChars('question2','charcount12',50);" onmouseout="countChars('question2','charcount12',50);">
    <span id="charcount12">0</span> characters left.      
  </div>
</div>
<?php
} 
if($row['question3'] != ""){
?>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"><?php echo $row['question3']?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="question3" id="question3" onkeyup="countChars('question3','charcount13',50);" onkeydown="countChars('question3','charcount13',50);" onmouseout="countChars('question3','charcount13',50);">
    <span id="charcount13">0</span> characters left.      
  </div>
</div>
<?php
} 
if($row['question4'] != ""){
?>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"><?php echo $row['question4']?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="question4" id="question4" onkeyup="countChars('question4','charcount14',50);" onkeydown="countChars('question4','charcount14',50);" onmouseout="countChars('question4','charcount14',50);">
    <span id="charcount14">0</span> characters left.      
  </div>
</div>
<?php
} 
if($row['question5'] != ""){
?>
<div class="form-group row">
    <label class="col-sm-2 col-form-label"><?php echo $row['question5']?></label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="question5" id="question5" onkeyup="countChars('question5','charcount15',50);" onkeydown="countChars('question5','charcount15',50);" onmouseout="countChars('question5','charcount15',50);">
    <span id="charcount15">0</span> characters left.      
  </div>
</div>
<?php
}
  }//end if
}//end while
?>
<div class="form-group row">
    <div class="col-sm-12 btn-center">
	<input type="submit" name = "submit" class="btn btn-primary">
	</div>
  </div>
</form>
</div>

<?php include('footer.php');?>