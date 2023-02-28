<?php
include '../header.php';
?>

<h1>JavaScript Let</h1>
<br>
<a href="output.php">
<button type="button" class="btn btn-success btn-lg" style="margin-left: 40%;">
  < Previous</button>
</a>
  <a href="datatypes.php">
    <button type="button" class="btn btn-success btn-lg" style="margin-left: 10%;">Next ></button>
  </a>
    <br>
    <br>
    <div class="green-box">
    The let keyword was introduced in ES6 (2015).

Variables defined with let cannot be Redeclared.

Variables defined with let must be Declared before use.

Variables defined with let have Block Scope.
    </div>
    <br>
    <h2>Cannot be Redeclared</h2>
    <br>
    <p>Variables defined with let cannot be redeclared.</p>
    <p>You cannot accidentally redeclare a variable.</p>
    <p>With let you can not do this:
</p>

    <div class="yellow-box">JavaScript accepts both double and single quotes:</div>
    <br>
    <h2>Block Scope</h2>
    <p>Before ES6 (2015), JavaScript had only Global Scope and Function Scope.</p>
    <p>ES6 introduced two important new JavaScript keywords: let and const.</p>
    <p>These two keywords provide Block Scope in JavaScript.</p>
    <p>Variables declared inside a { } block cannot be accessed from outside the block:</p>
    <br>
    
    <h2>Redeclaring Variables</h2>
    <p>Redeclaring a variable using the var keyword can impose problems.</p>
    <p>Redeclaring a variable inside a block will also redeclare the variable outside the block:</p>
    <br>
    <h2>JavaScript Can Hide HTML Elements</h2>
    <p>Hiding HTML elements can be done by changing the display style:</p>
    <br>
    <div class="brown-box">
      <img class="img-fluid" src="../images/Capture15.PNG">
      <img class="img-fluid" src="../images/Capture16.PNG">
    </div>
    <br>
    <p>Redeclaring a variable using the let keyword can solve this problem.</p>
    <p>Redeclaring a variable inside a block will not redeclare the variable outside the block:</p>
    <div class="brown-box">
      <img class="img-fluid" src="../images/Capture17.PNG">
      <img class="img-fluid" src="../images/Capture18.PNG">
      <br>
    </div>
    <br>
    <p>If you want to learn more about hoisting, study the chapter JavaScript Hoisting.</p>
    <p>Variables defined with let are also hoisted to the top of the block, but not initialized.</p>
    <p>Meaning: Using a let variable before it is declared will result in a ReferenceError:</p>
    <div class="red-box">
      <img class="img-fluid" src="../images/Capture19.PNG">
      <img class="img-fluid" src="../images/Capture20.PNG">
      <br>
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