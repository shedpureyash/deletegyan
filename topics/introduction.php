<?php
include '../header.php';
?>

<h1>JavaScript Introduction</h1>
<br>
<button type="button" class="btn btn-success btn-lg" style="margin-left: 40%;">
  < Previous</button>
  <a href="whereto.php">
    <button type="button" class="btn btn-success btn-lg" style="margin-left: 10%;">Next ></button>
  </a>
    <br>
    <br>
    <div class="green-box">
      This page contains some examples of what JavaScript can do.
    </div>
    <br>
    <h2>JavaScript Can Change HTML Content</h2>
    <br>
    <p>One of many JavaScript HTML methods is getElementById().</p>
    <p>The example below "finds" an HTML element (with id="demo"), and changes the element content (innerHTML) to "Hello JavaScript":</p>
    <div class="brown-box">
      <img class="img-fluid" src="../images/Capture.PNG">
      <img class="img-fluid" src="../images/Capture2.PNG">
    </div>
    
    <br>
    <div class="yellow-box">JavaScript accepts both double and single quotes:</div>
    <br>
    <h2>JavaScript Can Change HTML Attribute Values</h2>
    <p>In this example JavaScript changes the value of the src (source) attribute of an <img> tag:</p>
    <br>
    <h2>JavaScript Can Change HTML Styles (CSS)</h2>
    <p>Changing the style of an HTML element, is a variant of changing an HTML attribute:</p>
    <br>
    <h2>JavaScript Can Hide HTML Elements</h2>
    <p>Hiding HTML elements can be done by changing the display style:</p>
    <br>
    <div class="brown-box">
      <img class="img-fluid" src="../images/Capture3.PNG">
      <img class="img-fluid" src="../images/Capture4.PNG">
      <br>
    </div>
    <br>
    <div class="yellow-box">Did You Know?
      JavaScript and Java are completely different languages, both in concept and design.

      JavaScript was invented by Brendan Eich in 1995, and became an ECMA standard in 1997.

      ECMA-262 is the official name of the standard. ECMAScript is the official name of the language.</div>
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