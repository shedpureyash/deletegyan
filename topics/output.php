<?php
include '../header.php';
?>

<h1>JavaScript Output</h1>
<br>
<a href="whereto.php">
<button type="button" class="btn btn-success btn-lg" style="margin-left: 40%;">
  < Previous</button>
</a>
<a href="let.php">
    <button type="button" class="btn btn-success btn-lg" style="margin-left: 10%;">Next ></button>
</a>
    <br>
    <br>
    <div class="green-box">
      This page contains some examples of what JavaScript can do.
    </div>
    <br>
    <h2>JavaScript Display Possibilities</h2>
    <br>
    <p>JavaScript can "display" data in different ways:</p>
    <ul>
    <li>Writing into an HTML element, using innerHTML.</li>
    <li>Writing into the HTML output using document.write().</li>
    <li>Writing into an alert box, using window.alert().</li>
    <li>Writing into the browser console, using console.log().</li>
    </ul>
    <h2>Using innerHTML</h2>
    <br>
    <p>To access an HTML element, JavaScript can use the document.getElementById(id) method.</p>
    <p>The id attribute defines the HTML element. The innerHTML property defines the HTML content:</p>
    <div class="brown-box">
      <img class="img-fluid" src="../images/Capture11.PNG">
      <img class="img-fluid" src="../images/Capture12.PNG">
    </div>
    <br>
    <div class="yellow-box">Changing the innerHTML property of an HTML element is a common way to display data in HTML.</div>
    <br>
    <h2>Using document.write()</h2>
    <p>For testing purposes, it is convenient to use document.write():</p>
    <br>
    <h2>JavaScript Can Change HTML Styles (CSS)</h2>
    
    <br>
    <div class="brown-box">
      <img class="img-fluid" src="../images/Capture13.PNG">
      <img class="img-fluid" src="../images/Capture14.PNG">
      <br>
    </div>
    <br>
    <div class="red-box">Changing the innerHTML property of an HTML element is a common way to display data in HTML.</div>
    <br>
    <div class="yellow-box">The document.write() method should only be used for testing.</div>
    </div>
    
 
    <a href="whereto.php">
<button type="button" class="btn btn-success btn-lg" style="margin-left: 40%;">
  < Previous</button>
</a>
<a href="let.php">
    <button type="button" class="btn btn-success btn-lg" style="margin-left: 10%;">Next ></button>
</a>
    <?php
    include '../footer.php';
    ?>