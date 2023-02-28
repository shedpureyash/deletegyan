<?php
include '../header.php';
?>

<h1>JavaScript Const</h1>
<br>
<a href="string.php">
<button type="button" class="btn btn-success btn-lg" style="margin-left: 40%;">
  < Previous</button>
</a>
<a href="set.php">
    <button type="button" class="btn btn-success btn-lg" style="margin-left: 10%;">Next ></button>
</a>
    <br>
    <br>
    <div class="green-box">
    <p>The const keyword was introduced in ES6 (2015).</p>
    <p>Variables defined with const cannot be Redeclared.</p>
    <p>Variables defined with const cannot be Reassigned.</p>
    <p>Variables defined with const have Block Scope.</p>
    </div>
    <br>
    <h2>Cannot be Reassigned</h2>
    <br>
    <p>A const variable cannot be reassigned:</p>
    <div class="brown-box">
      <img class="img-fluid" src="../images/Capture26.PNG">
      <br>
    </div>
    <h2>Must be Assigned</h2>
    <br>
    <p>JavaScript const variables must be assigned a value when they are declared:</p>
   
    <div class="brown-box">
        <h2>Correct</h2>
      <img class="img-fluid" src="../images/Capture27.PNG">
    </div>
    <br>
    <div class="red-box">
        <h2>Incorrect</h2>
      <img class="img-fluid" src="../images/Capture28.PNG">
    </div>
    <br>
    <div class="yellow-box"><h2>When to use JavaScript const?</h2>
<h5>Always declare a variable with const when you know that the value should not be changed.</h5>
<p>Use const when you declare:</p>
<ul>
    <li>A new Array</li>
    <li>A new Object</li>
    <li>A new Function</li>
    <li>A new RegExp</li>
</ul></div>
<br>
<h1>Constant Objects and Arrays</h1>
    <p>The keyword const is a little misleading.</p>
    <p>It does not define a constant value. It defines a constant reference to a value.</p>
    <p>Because of this you can NOT:</p>
    <ul>
        <li>Reassign a constant value</li>
        <li>Reassign a constant array</li>
        <li>Reassign a constant object</li>
    </ul>
   
    <br>
    <p>But you CAN:</p>
    <ul>
        <li>Change the elements of constant array</li>
        <li>Change the properties of constant object</li>
    </ul>
    <br>
    <h2>Constant Arrays</h2>
    <p>You can change the elements of a constant array:</p>
    <br>
    <div class="brown-box">
        <h2>Correct</h2>
      <img class="img-fluid" src="../images/Capture29.PNG">
    </div>
    <br>
    <div class="red-box">
        <h2>Example</h2>
      <img class="img-fluid" src="../images/Capture30.PNG">
    </div>
    <h2>JavaScript Can Change HTML Styles (CSS)</h2>
    
    <br>
    <div class="yellow-box">The 6 escape characters above were originally designed to control typewriters, teletypes, and fax machines. They do not make any sense in HTML.</div>
    </div>
    
    <div style="display: flex;">
    <br>
    <br>
      <button type="button" class="btn btn-success btn-lg" style="margin-left: 40%;">
        < Previous</button>
          <button type="button" class="btn btn-success btn-lg" style="margin-left: 10%;">Next ></button>
    </div>
    <?php
    include '../footer.php';
    ?>